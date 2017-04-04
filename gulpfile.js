const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.copy('node_modules/font-awesome/fonts', 'public/assets/fonts');
    mix.sass('app.scss', 'public/assets/css/app.css')
       .webpack('app.js', 'public/assets/js/app.js');
});
