const mix = require('laravel-mix');


require("laravel-mix-tailwind");
require("laravel-mix-purgecss");

mix.js("resources/assets/js/app.js", "assets/js")
   .postCss("resources/assets/css/app.css", "assets/css")
   .tailwind()
   .purgeCss();

if (mix.inProduction()) {
  mix.version();
}
