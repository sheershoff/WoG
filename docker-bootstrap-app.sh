#!/usr/bin/env bash

#
#  @fixme: Actually we should build an app-specific image here, with most of these prepacked inside
#

UPDATED=0

rm -rf /root/.composer/cache

# install composer if not exists in the container
if [ ! -x /usr/bin/composer ] ; then

    if [ ! -x /usr/bin/wget ] ; then
        DEBIAN_FRONTEND=noninteractive apt-get update && apt-get -y install wget
        UPDATED=1
    fi

    # install composer into path
    EXPECTED_SIGNATURE=$(wget https://composer.github.io/installer.sig -O - -q)
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    ACTUAL_SIGNATURE=$(php -r "echo hash_file('SHA384', 'composer-setup.php');")

    if [ "$EXPECTED_SIGNATURE" = "$ACTUAL_SIGNATURE" ]
    then
        php composer-setup.php --quiet --install-dir=/usr/bin --filename=composer
        RESULT=$?
        rm composer-setup.php
        echo "Seems like installed, setup exited with code $RESULT"
    else
        >&2 echo 'ERROR: Invalid installer signature'
        rm composer-setup.php
        exit 1
    fi

fi

# add nodejs
if [ ! -x /usr/bin/node ] ; then
    curl -sL https://deb.nodesource.com/setup_6.x | bash -
    apt-get install -y nodejs
fi

if php -m | grep -Fxq pdo_pgsql
then
    echo "PHP extensions installed"
else
    if [ UPDATED eq "0" ] ; then
        DEBIAN_FRONTEND=noninteractive apt-get update
        UPDATED=1
    fi
    # lib ldap and lib zip, build-essential
    DEBIAN_FRONTEND=noninteractive apt-get install -y libldb-dev libldap2-dev unzip zlib1g zlib1g-dev build-essential libpq-dev
    # ldap prune and link
    updatedb --prunepaths=/mnt
    ln -s /usr/lib/x86_64-linux-gnu/libldap.so /usr/lib/libldap.so \
    && ln -s /usr/lib/x86_64-linux-gnu/liblber.so /usr/lib/liblber.so
    # install and enable php extensions, using docker php script
    docker-php-source extract && docker-php-ext-install ldap zip pdo pgsql pdo_pgsql && docker-php-ext-enable ldap zip pdo pgsql pdo_pgsql && docker-php-source delete
fi

# install things for composer
if [ ! -x /usr/bin/git ] ; then
    if [ UPDATED eq "0" ] ; then
        DEBIAN_FRONTEND=noninteractive apt-get update
        UPDATED=1
    fi
    DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends git-core
fi

# run composer update
composer install --prefer-dist --dev --no-suggest
printenv

# update .env with docker things
#   backup .env
#NOW=$(date +"%Y%m%d%H%M%S")
#cp -n .env .env.$NOW.bak
cp -n .env.example .env

#   if docker env found - update .env
if [ -z ${POSTGRES_PORT_5432_TCP_ADDR+x} ];
then
    echo "Skipping env setup"
else
    echo "Setting up docker environment"
    export DB_CONNECTION=pgsql
    export DB_HOST=$POSTGRES_PORT_5432_TCP_ADDR
    export DB_PORT=$POSTGRES_PORT_5432_TCP_PORT
    export DB_DATABASE=wog
    export DB_USERNAME=wog
    export DB_PASSWORD=wog
    export DB_SCHEMA=public
    export REDIS_HOST=$REDIS_PORT_6379_TCP_ADDR
    export REDIS_PORT=$REDIS_PORT_6379_TCP_PORT
fi

php artisan key:generate
npm i
npm i bower gulp gulp-cli
npm link bower
bower update
php artisan vendor:publish
npm link gulp
npm link laravel-elixir
gulp
php artisan migrate --seed
./vendor/bin/phpunit
php artisan serve --host=0.0.0.0 --port=9999