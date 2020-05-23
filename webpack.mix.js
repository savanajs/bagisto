const mix = require("laravel-mix");
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const LiveReloadPlugin = require('webpack-livereload-plugin');

require("laravel-mix-merge-manifest");

var storename = 'velocity'
var theme = 'themes/' + storename;
var publicPath = "./public/" + theme + "/assets";
var dirname = "resources/" + theme;

if (mix.inProduction()) {
    publicPath = 'publishable/assets';
}

mix.setPublicPath(publicPath).mergeManifest();
mix.disableNotifications();

mix
    .js(
        dirname + "/assets/js/app.js",
        publicPath + "/js/velocity.js"
    )

    .sass(
        dirname + '/assets/sass/app.scss',
        'css/velocity.css'
    )

    .options({
        processCssUrls: false
    })

    .browserSync('http://localhost:8000')

    // http://localhost:3000

    // .webpackConfig( {
    //     plugins: [
    //         new LiveReloadPlugin(),
    //         new ImageminPlugin( {
    // //            disable: process.env.NODE_ENV !== 'production', // Disable during development
    //             pngquant: {
    //                 quality: '95-100',
    //             },
    //             test: /\.(jpe?g|png|gif|svg)$/i,
    //         } ),
    //     ],
    // })

    // .copy(dirname + '/assets/images', 'public/'+ theme +'/assets/images', false )
    .disableNotifications();

if (mix.inProduction()) {
    mix.version();
}
