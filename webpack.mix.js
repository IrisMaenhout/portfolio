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

// mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
//     require('postcss-import'),
//     require('tailwindcss'),
//     require('autoprefixer'),
// ]);

mix.postCss('resources/css/app.css', 'public/css');
mix.postCss('resources/css/project-page.css', 'public/css');
mix.js('resources/js/header.js', 'public/js');
mix.js('resources/js/project.js', 'public/js');
mix.js('resources/js/slideshow.js', 'public/js');
