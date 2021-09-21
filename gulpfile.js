const gulp = require('gulp');
const browserSync = require('browser-sync').create();

gulp.task('server', function () {
  browserSync.init({
    proxy: 'http://localhost:8888',
    reloadOnRestart: true,
  });
});

gulp.task('watch', function () {
  gulp.watch('./public/**/*').on('change', () => {
    browserSync.reload();
  });
});

gulp.task('default', gulp.parallel('server', 'watch'));
