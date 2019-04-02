const { task, series, src, dest } = require('gulp');
const sass = require('./gulp/sass');
const cssmin = require('./gulp/cssmin');
const uglify = require('./gulp/uglify');
const watch = require('./gulp/watch.js');

task('default', series('watch'));
