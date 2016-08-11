#устанавливаем окружение
git clone https://github.com/xvlady/WoG.git
cp .env.example .env
php artisan key:generate

npm update
bower update
composer update

php artisan migrate
php artisan migrate --seed
php artisan vendor:publish
#как минимум двигаем последовательности
./vendor/bin/phpunit

npm link gulp
npm link laravel-elixir

gulp
#gulp --production

artisan serve --host= --port=9999
#php artisan up
