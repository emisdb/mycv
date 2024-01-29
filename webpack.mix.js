const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/wow.min.js', 'public/js')
    .js('resources/js/app_vue.js', 'public/js').vue()
 //   .js('resources/js/mycv.js', 'public/js')
    .postCss('resources/css/app_cv.css', 'public/css', [
    ])
    .postCss('resources/css/app.css', 'public/css', [
    ])
    .postCss('resources/css/animate.css', 'public/css', [
    ]);
