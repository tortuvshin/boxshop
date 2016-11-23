var fs = require('fs');
var path = require('path');
var webpack = require('webpack');

module.exports = {
  
  devtool: 'source-map',
  
  entry: './client.js',
  
  output: {
    path            : __dirname + '../../../public/js/build',
    filename        : '[name].js',
    chunkFilename   : '[name]-[chunkhash].js',
    publicPath      : '/js/build/'
  },
  
  progress: true,
  
  module: {
    loaders: [ {
      test    : /\.js?$/,
      loader  : 'babel-loader',
      exclude : /node_modules/,
      query   : {
        presets : ['react', 'es2015', 'stage-0'],
        plugins : ['react-html-attrs', 'transform-class-properties', 'transform-decorators-legacy']
      }
    } ]
  },
  
  plugins: [
    new webpack.optimize.UglifyJsPlugin({
      compress : {
        warnings : false
      }
    }),
    new webpack.optimize.CommonsChunkPlugin('shared.js'),
    new webpack.optimize.MinChunkSizePlugin({minChunkSize: 1000}),
    new webpack.DefinePlugin({
      'process.env': {
        'NODE_ENV': JSON.stringify('production'),
      }
    })
  ]
}