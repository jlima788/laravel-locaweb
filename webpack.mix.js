let mix = require('laravel-mix');

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

mix.combine([
  'resources/assets/js/jquery.js',
  'resources/assets/js/locastyle.js'
], 'public/js/app.js');

mix.combine([
  'resources/assets/css/locastyle.css',
  'resources/assets/css/style.css'
],'public/css/app.css');
