const { task, src, dest } = require('gulp');
const rename = require('gulp-rename');
const uglify = require('gulp-uglify');

module.exports = task('uglify', function() {
    return src('./javascript/index.js')
        .pipe(uglify())
        .pipe(rename({ extname: '.min.js'}))
        .pipe(dest('javascript/'));
});
