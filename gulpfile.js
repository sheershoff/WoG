var elixir = require('laravel-elixir');
elixir.config.publicPath = './public'
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
var path = 'vendor/bower_dl/';

elixir(function(mix) {
    mix.sass('app.scss');
// копируем шрифты в public/fonts
    mix.copy(path+'bootstrap/fonts/bootstrap/**', 'public/fonts');
    mix.copy(path+'font-awesome/fonts/**', 'public/fonts');
 
    // копируем все изображения в public/img
    //mix.copy('vendor/bower_dls/colorbox/example3/images/**', 'public/img');
 
     // Компилируем sass файлы и сохраняем результат в директорию resources/css
    mix.sass('app.scss', 'resources/', {
        includePaths: [
            path+'bootstrap/stylesheets/',
//            path+'bootswatch/',
            path+'font-awesome/scss/'
        ]
    });
 

    // объединяем все CSS
    mix.styles([path+'bootstrap/dist/css/bootstrap.css'],'public/css/bootstrap.css', './');
//    mix.styles(['resources/assets/theme/flexslider.css'],'public/css/flexslider.css', './');
    mix.styles([path+'normalize-css/normalize.css'],'public/css/normalize.css', './');
//    mix.styles([path+'.css'],'public/css/.css', './');


    mix.styles([
//        paths.colorbox + '/example3/colorbox.css',
//        paths.metisMenu + '/metisMenu.css',
        'resources/assets/theme/main.css', // тема
        'resources/custom.css', // ручные правки
        'resources/app.css', // app.css is generated by sass and has some overrides
    ], 'public/css/all.css', 'resources/');

    //Копируем скрипты 
    
    //Объединяем скрипты
    mix.scripts([path+'jquery/dist/jquery.js',], 'public/js/jquery.js', './');
    mix.scripts([path+'bootstrap/dist/js/bootstrap.js',], 'public/js/bootstrap.js', './');
    mix.scripts([path+'typed.js/js/typed.js',], 'public/js/typed.js', './');
    mix.scripts(['resources/typedRun.js',], 'public/js/typedRun.js', './');
    
    mix.scripts([
//        paths.colorbox + '/jquery.colorbox.js',
//        paths.metisMenu + '/metisMenu.js'

	'resources/app.js',
    ], 'public/js/all.js', './');
 
    // генерируем файлы с уникальным именем, чтобы исключить кеширование на клиенте 
    mix.version([
        'public/css/all.css',
        'public/js/all.js'
    ]);    
});
