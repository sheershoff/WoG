#устанавливаем окружение


#ставим WoG
git clone https://github.com/xvlady/WoG.git
cp .env.example .env
nano .env
php artisan key:generate

npm update
bower update
composer update

php artisan migrate:reset #сносим вседанные
php artisan migrate #заливаем обратно структуру данных
php artisan migrate --seed #заливаем данных

php artisan vendor:publish #не опубликованые данные компонентов, обычно не требуется

./vendor/bin/phpunit #как минимум двигаем последовательности

npm link gulp
npm link laravel-elixir

gulp #вытаскиваем из vendor/bower_dl/ то что нужно в паблик, обычно не требуется
#gulp --production

artisan serve --host= --port=9999
#php artisan up
