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
    .sass('resources/sass/main.scss', 'public/css')
    .sass('resources/sass/forms.scss', 'public/css')
    .sass('resources/sass/catalog.scss', 'public/css')
    .sass('resources/sass/product_card.scss', 'public/css')
    .sass('resources/sass/review.scss', 'public/css')
    .sass('resources/sass/basket.scss', 'public/css')

