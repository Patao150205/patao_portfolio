const gulp = require('gulp');
const load = require('require-dir');
load('./gulp/tasks', { recurse: true });

const devTask = [
  gulp.parallel('compile-sass', 'copy-webfonts', 'copy-javascript', 'minify-img', 'copy-php'),
  'build-server',
  gulp.parallel('server-watch', 'img-watch', 'sass-watch', 'php-watch', 'javascript-watch'),
];

const prodTask = ['minify-img', 'copy-webfonts', 'compile-sass', 'minify-javascript', 'minify-php'];

gulp.task('dev', gulp.series(devTask));
gulp.task('prod', gulp.parallel(prodTask));
