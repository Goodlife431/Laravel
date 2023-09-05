module.export = {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
        'cssnano': {} ,
        'postcss-import': {}, // Allow @import statements in CSS
        'postcss-preset-env': {
        stage: 0,           // Use all experimental features (you can adjust this)
        browsers: 'last 2 versions', // Specify target browsers for transpilation
    },
    'tailwindcss': './tailwind.config.js',
    },
};
