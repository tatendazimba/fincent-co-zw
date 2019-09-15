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

mix.js("node_modules/bootstrap/dist/js/bootstrap.bundle.js", 'public/js/boot.js')
    .js("node_modules/bootstrap/dist/js/bootstrap.js", 'public/js/boot.js')
    .js("node_modules/jquery/dist/jquery.min.js", 'public/js/app.js')
    .js("node_modules/materialize-css/dist/js/materialize.js", 'public/js/app.js')
    .js("resources/js/slick.min.js", 'public/js/app.js')
    .js("resources/js/app.js", 'public/js/app.js')
    .styles([
        "node_modules/materialize-css/dist/css/materialize.css",
        "node_modules/animate.css/animate.min.css",
        "resources/css/slick-theme.css",
        "public/css/styles.css",
        "public/css/colours.css",
        "public/css/gradients.css",
        "public/css/buttons.css",
        "public/css/text.css",
    ], "public/css/app.css");
