const gulp = require('gulp');
const config = require('../config');
const del = require('del');

gulp.task('copy-webfonts.clean', function (done) {
  del(`${config.path.output}/webfonts/**/*`);
  done();
});

gulp.task('copy-webfonts.copy', function (done) {
  gulp.src(`${config.path.input}/webfonts/**/*`).pipe(gulp.dest(`${config.path.output}/webfonts`));
  done();
});

gulp.task('copy-webfonts', gulp.series('copy-webfonts.clean', 'copy-webfonts.copy'));
