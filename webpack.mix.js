const mix = require('laravel-mix');

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
   .scripts([
      'resources/js/buttons.js',
      'resources/js/datetimepicker.js',
      'resources/js/form-masking.js',
      'resources/js/icon-toggle.js',
      'resources/js/select.js'
   ], 'public/js/custom.js')
   .sass('resources/sass/app.scss', 'public/css')
   .styles([
      'resources/css/admin.css'
   ], 'public/css/styles.css');
