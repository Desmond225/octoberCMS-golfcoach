const path = require('path');
const webpack = require('webpack');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
var WebpackBuildNotifierPlugin = require('webpack-build-notifier');
const themes = [
    'demo'
];

module.exports = themes.map(function(theme) {
    return {
        entry: [
            `./themes/${theme}/assets/js/index.js`,
        ],
        mode: 'development',
        output: {
            path: path.resolve(`./themes/${theme}/assets`, 'dist'),
            filename: '[name].bundle.js'
        },
        module: {
            rules: [{
                    test: /\.css$/,
                    loaders: ['style-loader', 'css-loader', 'resolve-url-loader']
                },
                {
                    test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
                    use: [{
                        loader: 'file-loader',
                        options: {
                            useRelativePath: false,
                            name: '[path]/[name].[ext]',
                            publicPath: '/themes/demo/assets/dist/'
                        }
                    }]
                },

                {
                    test: /\.scss$/,
                    use: [
                        MiniCssExtractPlugin.loader,
                        'css-loader',
                        'resolve-url-loader',
                        'sass-loader'
                    ]
                },
                {
                    test: /\.js[x]?$/,
                    exclude: /(node_modules|bower_components)/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/preset-env'],
                            plugins: ['babel-plugin-transform-react-jsx']
                        }
                    }
                }
            ]
        },
        optimization: {
            splitChunks: {
                chunks: 'all',
                cacheGroups: {
                    styles: {
                        name: 'styles',
                        test: /\.css$/,
                        chunks: 'all',
                        enforce: true
                    }
                }
            },
            minimizer: [
                // new UglifyJsPlugin({
                //     cache: true,
                //     parallel: true,
                //     sourceMap: false
                // }),
                // new OptimizeCSSAssetsPlugin({})
            ]
        },
        plugins: [
            new MiniCssExtractPlugin({
                filename: '[name].css',
                chunkFilename: '[name].css'
            }),
            new webpack.ProvidePlugin({
                $: 'jquery',
                jQuery: 'jquery',
                'window.jQuery': 'jquery',
                'Util': 'bootstrap/js/dist/util'
            }),
            new WebpackBuildNotifierPlugin({
                title: "My Project Webpack Build - " + path.resolve("."),
                logo: path.resolve(".") + "/ico/favicon.png",
                suppressSuccess: false
            })
        ]
    }
});