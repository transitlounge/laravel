const mix = require('laravel-mix');

<<<<<<< HEAD
=======
require('laravel-mix-tailwind');

>>>>>>> upstream/master
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
<<<<<<< HEAD
    .sass('resources/sass/app.scss', 'public/css');
=======
	.sass("resources/sass/app.scss", "public/css").options({
		processCssUrls: false
	})
  .tailwind('./tailwind.config.js');

if (mix.inProduction()) {
  mix
   .version();
}
>>>>>>> upstream/master
