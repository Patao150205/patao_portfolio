const gulp = require('gulp');
const config = require('../config');
const del = require('del');
const { phpMinify } = require('@cedx/gulp-php-minify');
const htmlmin = require('gulp-htmlmin');

gulp.task('minify-php.clean', function (done) {
  del(`${config.path.output}/**/*.php`);
  done();
});

gulp.task('minify-php.minify1', function (done) {
  gulp
    .src(`${config.path.input}/php/**/*.php`, { read: false })
    .pipe(phpMinify())
    .pipe(gulp.dest(`${config.path.output}/php`));
  done();
});
gulp.task('minify-php.minify2', function (done) {
  gulp
    .src(`${config.path.input}/*.php`, { read: false })
    .pipe(phpMinify())
    .pipe(
      htmlmin({
        collapseWhitespace: true,
        removeComments: true,
      })
    )
    .pipe(gulp.dest(`${config.path.output}`));
  done();
});

gulp.task('minify-php', gulp.series('minify-php.clean', 'minify-php.minify1', 'minify-php.minify2'));
