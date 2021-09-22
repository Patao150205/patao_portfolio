const gulp = require('gulp');
const config = require('../config');
const del = require('del');

gulp.task('copy-javascript.clean', function (done) {
  del(`${config.path.output}/js/**/*`);
  done();
});

gulp.task('copy-javascript.copy', function (done) {
  gulp.src(`${config.path.input}/js/**/*`).pipe(gulp.dest(`${config.path.output}/js`));
  done();
});

gulp.task('javascript-watch', function (done) {
  gulp.watch(`${config.path.input}/javascript/**/*`, gulp.task('copy-javascript')).on('change', () => {
    config.browserSync.reload();
  });
  done();
});

gulp.task('copy-javascript', gulp.series('copy-javascript.clean', 'copy-javascript.copy'));
