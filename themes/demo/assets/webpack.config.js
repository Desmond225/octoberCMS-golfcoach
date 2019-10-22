const path = require('path');

module.exports = {
    watch: true,
    entry: "./js/index.js",
    mode: 'development',
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: 'bundle.js'
    },
    resolve: {
      extensions: [".ts", ".jsx", ".js", ".json"]
    },
    devtool: "source-map",
    module: {
      rules: [
        { test: /\.css$/, use: [ "style-loader", "css-loader" ] },
        { test: /\.scss$/, use: [ "style-loader", "css-loader", "sass-loader" ] },
        { test: /\.jsx?$/, loader: "babel-loader" },
        { enforce: "pre", test: /\.js$/, loader: "source-map-loader" }
        
      ]
    }
  };
