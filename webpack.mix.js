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
    .vue()
    .js('resources/js/sidebar.js', 'public/js')
    .js('resources/js/theme.js', 'public/js')
    .js('resources/js/recaptcha.js', 'public/js')
    .js('resources/js/imagine.js', 'public/js')
    .js('resources/js/tree-view.js', 'public/js')
    .sass('resources/sass/app.scss','public/css')
    .postCss('resources/css/sidebar.css', 'public/css')
    .postCss('resources/css/app.css', 'public/css')
    .postCss('resources/css/theme.css', 'public/css')
    .postCss('resources/css/imagine.css', 'public/css')
    .postCss('resources/css/loo_pdf.css', 'public/css')
    .version()
;
