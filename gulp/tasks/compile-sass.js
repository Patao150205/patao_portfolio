const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const config = require('../config');
const del = require('del');

gulp.task('compile-sass.clean', function (done) {
  del(`${config.path.output}/css/styles.css`);
  done();
});

gulp.task('compile-sass.compile', function (done) {
  gulp
    .src(`${config.path.input}/sass/**/*.scss`)
    .pipe(sass({ outputStyle: config.sass.outputStyle }))
    .pipe(gulp.dest(`${config.path.output}/css`));
  done();
});

gulp.task('compile-sass', gulp.series('compile-sass.clean', 'compile-sass.compile'));

gulp.task('sass-watch', function () {
  gulp.watch(`${config.path.input}/sass/**/*.scss`, gulp.task('compile-sass')).on('change', () => {
    config.browserSync.reload();
  });
});
