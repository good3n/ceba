const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
// const imageminMozjpeg = require('imagemin-mozjpeg');
// const ImageminPlugin = require('imagemin-webpack-plugin').default;
// const CopyWebpackPlugin = require('copy-webpack-plugin');
const siteName = 'clarkstonestates'; // site name
const userName = 'tom'; // macOS user name

module.exports = {
  context: __dirname,
  entry: './src/index.js',
  output: {
    path: path.resolve(__dirname, './assets'),
    publicPath: '../',
    filename: 'js/scripts.min.js'
  },
  module: {
    rules: [
      // perform js babelization on all .js files
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader'
        }
      },
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          'style-loader',
          MiniCssExtractPlugin.loader,
          'css-loader',
          {
            loader: 'postcss-loader',
            options: {
              ident: 'postcss',
              plugins: [
                require('autoprefixer')({
                  browsers: ['> 1%', 'last 2 versions']
                }),
                require('css-mqpacker'),
                require('cssnano')({ zindex: false })
              ]
            }
          },
          'sass-loader'
        ]
      },
      {
        test: /\.(png|jpe?g|gif|svg)$/,
        loaders: [
          {
            loader: 'file-loader',
            options: {
              name: 'images/[name].[ext]'
            }
          },
          'img-loader'
        ]
      },
      {
        test: /\.(woff(2)?|ttf|eot)(\?v=\d+\.\d+\.\d+)?$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: 'fonts/[name].[ext]'
            }
          }
        ]
      }
    ]
  },
  plugins: [
    // clean out build directories on each build
    // new CleanWebpackPlugin(['./js/build/*', './css/build/*']),
    // extract css into dedicated file
    new MiniCssExtractPlugin({
      filename: './styles/style.min.css'
    }),
    // copy images folder and optimize all the images
    // new CopyWebpackPlugin([
    //   {
    //     from: 'images/**/**',
    //     to: path.resolve(__dirname, './assets')
    //   }
    // ]),
    // new ImageminPlugin({
    //   pngquant: {
    //     quality: '75-85'
    //   },
    //   plugins: [
    //     imageminMozjpeg({
    //       quality: 70,
    //       progressive: true
    //     })
    //   ]
    // }),
    new BrowserSyncPlugin({
      proxy: 'https://' + siteName + '.test',
      host: siteName + '.test',
      open: 'external',
      port: 8000,
      https: {
        key: '/Users/' + userName + '/.config/valet/Certificates/' + siteName + '.test.key',
        cert: '/Users/' + userName + '/.config/valet/Certificates/' + siteName + '.test.crt'
      },
      files: '**/*.php',
      injectCss: true
    })
  ],
  optimization: {
    minimizer: [
      // enable the js minification plugin
      new UglifyJSPlugin(),
      // enable the css minification plugin
      new OptimizeCssAssetsPlugin()
    ]
  }
};
