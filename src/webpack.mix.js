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

const cssAssets = [
    'resources/assets/css/bootstrap.css',
    'resources/assets/css/reset.css',
    'resources/assets/css/owl.theme.css',
    'resources/assets/css/owl.carousel.css',
    'resources/assets/css/magnific-popup.css',
    'resources/assets/css/perfect-scrollbar.css',
    'resources/assets/css/style.css',
    'resources/assets/css/colors/color-6.css',
];

const jsAssets = [
    'resources/assets/js/jquery-2.1.4.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/typed.js',
    'resources/assets/js/isotope.pkgd.min.js',
    'resources/assets/js/owl.carousel.min.js',
    'resources/assets/js/jquery.magnific-popup.min.js',
    'resources/assets/js/jquery.mousewheel.js',
    'resources/assets/js/perfect-scrollbar.js',
    'resources/assets/js/main.js'
];

mix.sass('resources/sass/app.scss', 'public/css')
mix.styles(cssAssets, 'public/css/all.css');
mix.scripts(jsAssets, 'public/js/all.js');
