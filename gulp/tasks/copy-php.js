const gulp = require('gulp');
const config = require('../config');
const del = require('del');

gulp.task('copy-php.clean', function (done) {
  del(`${config.path.output}/**/*.php`);
  done();
});

gulp.task('copy-php.copy1', function (done) {
  gulp.src(`${config.path.input}/php/**/*.php`).pipe(gulp.dest(`${config.path.output}/php`));
  done();
});
gulp.task('copy-php.copy2', function (done) {
  gulp.src(`${config.path.input}/*.php`).pipe(gulp.dest(`${config.path.output}`));
  done();
});

gulp.task('php-watch', function () {
  gulp.watch([`/php/**/*.php`, '*.php'], { cwd: config.path.input }, gulp.task('copy-php')).on('change', () => {
    config.browserSync.reload();
  });
});

gulp.task('copy-php', gulp.series('copy-php.clean', 'copy-php.copy1', 'copy-php.copy2'));
