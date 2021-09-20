const gulp = require('gulp');
const browserSync = require('browser-sync').create();

gulp.task('server', function (done) {
  browserSync.init({
    proxy: 'http://localhost:8888',
    reloadOnRestart: true,
  });

  done();
});

gulp.task('watch', function (done) {
  gulp.watch('./public/**/*').on('change', () => {
    browserSync.reload();
  });
  done();
});

gulp.task('default', gulp.parallel('server', 'watch'));
