const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir((mix) => {
    mix.copy('node_modules/font-awesome/fonts', 'public/assets/fonts')
       .copy('node_modules/bootstrap-sass/assets/fonts', 'public/assets/fonts');
    mix.sass('app.scss', 'public/assets/css/app.css')
       .webpack('app.js', 'public/assets/js/app.js');
});
