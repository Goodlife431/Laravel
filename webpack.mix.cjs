const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
      require('postcss-import'),
      require('tailwindcss'),
      require('autoprefixer'),
   ]);

   mix.webpackConfig({
    module: {
       rules: [
          {
             test: /\.m?js$/,
             exclude: /(node_modules|bower_components)/,
             use: {
                loader: 'babel-loader',
                options: {
                   presets: ['@babel/preset-env'],
                   sourceType: 'unambiguous',
                },
             },
          },
       ],
    },
 });
 