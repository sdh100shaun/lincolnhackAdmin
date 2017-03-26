const { mix } = require('laravel-mix');
var ImageminPlugin = require('imagemin-webpack-plugin').default
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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .copy('resources/assets/images/*', 'public/images/');
mix.webpackConfig({
    resolve: {
        plugins: [

            new ImageminPlugin({
                disable: process.env.NODE_ENV !== 'production', // Disable during development
                pngquant: {
                    quality: '95-100'
                },
                mozjpeg: {quality: 65}
            })
        ]
    }
});