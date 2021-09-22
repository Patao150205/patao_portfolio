const gulp = require('gulp');
const config = require('../config');

// 開発サーバー
gulp.task('build-server', function (done) {
  config.browserSync.init({
    proxy: 'http://localhost:8888',
    reloadOnRestart: true,
  });
  done();
});

gulp.task('server-watch', function () {
  gulp.watch(`${config.path.output}/**/*`).on('change', () => {
    config.browserSync.reload();
  });
});
