let mix = require('laravel-mix');
// const pkg = require('./package.json');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const LiveReloadPlugin = require('webpack-livereload-plugin');

const theme = 'themes/velocity';

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

mix.js('resources/' + theme + '/assets/js/app.js', 'public/'+ theme +'/assets/js')
   .sass('resources/'+ theme +'/assets/sass/app.scss', 'public/'+ theme +'/assets/css');

mix.browserSync('http://localhost:8000');

// http://localhost:3000

mix.webpackConfig( {
    plugins: [
        new LiveReloadPlugin(),
        new ImageminPlugin( {
//            disable: process.env.NODE_ENV !== 'production', // Disable during development
            pngquant: {
                quality: '95-100',
            },
            test: /\.(jpe?g|png|gif|svg)$/i,
        } ),
    ],
});

mix.copy('resources/'+ theme +'/assets/images', 'public/'+ theme +'/assets/images', false );

mix.disableNotifications();
