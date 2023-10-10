const path = require('path');

module.exports = {
    mode: "production",
    entry: [
        './src/js/index.js',
        './src/js/show.js',
    ],
    output: {
        filename: 'script.js',
        path: path.resolve(__dirname, 'assets/js'),
    },
};
