const path = require('path');

module.exports = {
    entry: 'javascript/index.js',
    output: {
        filename: "index.js",
        path: path.resolve(__dirname, 'javascript/min')
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    'style-loader',
                    'css-loader',
                    'sass-loader'
                ]
            }
        ]
    }
};
