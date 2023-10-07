const path = require('path');

module.exports = {
    mode: "production",
    entry: [
        './assets/js/index.js',
        './assets/js/show.js',
    ],
    output: {
        filename: 'script.js',
        path: path.resolve(__dirname, 'assets/js'),
    },
};
