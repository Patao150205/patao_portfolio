const gulp = require('gulp');
const config = require('../config');
const del = require('del');
const uglify = require('gulp-uglify');

gulp.task('minify-javascript.clean', function (done) {
  del(`${config.path.output}/js/**/*`);
  done();
});

gulp.task('minify-javascript.minify', function (done) {
  gulp
    .src(`${config.path.input}/js/**/*.js`)
    .pipe(uglify())
    .pipe(gulp.dest(`${config.path.output}/js`));
  done();
});

gulp.task('minify-javascript', gulp.series('minify-javascript.clean', 'minify-javascript.minify'));
