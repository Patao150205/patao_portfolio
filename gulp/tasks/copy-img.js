const gulp = require('gulp');
const config = require('../config');
const del = require('del');

gulp.task('copy-img.clean', function (done) {
  del(`${config.path.output}/images/**/*`);
  done();
});

gulp.task('copy-img.copy', function (done) {
  gulp.src(`${config.path.input}/images/**/*`).pipe(gulp.dest(`${config.path.output}/images`));
  done();
});

gulp.task('img-watch', function (done) {
  gulp
    .watch(`${config.path.input}/images/**/*`)
    .pipe(gulp.task('copy-img'))
    .on('change', () => {
      config.browserSync.reload();
    });
  done();
});

gulp.task('copy-img', gulp.series('copy-img.clean', 'copy-img.copy'));
