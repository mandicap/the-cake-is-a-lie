const path = require('path');
const MiniCssExtract = require('mini-css-extract-plugin');
const CssMinimizer = require('css-minimizer-webpack-plugin');

module.exports = {
  mode: process.env.NODE_ENV === 'production' ? 'production' : 'development',
  entry: './resources/js/scripts.js',
  output: {
    filename: 'js/scripts.js',
    path: path.resolve(__dirname, './webroot')
  },
  module: {
    rules: [
      {
        test: /.s?css$/,
        use: [MiniCssExtract.loader, 'css-loader', 'postcss-loader']
      }
    ]
  },
  optimization: {
    minimizer: [
      new CssMinimizer({
        minimizerOptions: {
          preset: [
            'default',
            {
              discardComments: { removeAll: true }
            }
          ]
        }
      })
    ]
  },
  plugins: [
    new MiniCssExtract({
      filename: 'css/styles.css'
    })
  ]
}
