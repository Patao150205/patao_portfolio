const gulp = require('gulp');
const config = require('../config');
const del = require('del');
const imagemin = require('gulp-imagemin');
const mozjpeg = require('imagemin-mozjpeg');
const pngquant = require('imagemin-pngquant');

gulp.task('minify-img.clean', function (done) {
  del(`${config.path.output}/images/**/*`);
  done();
});

gulp.task('minify-img.minify', function (done) {
  gulp
    .src(`${config.path.input}/images/**/*.{jpg,jpeg,png,gif,svg,ico}`)
    .pipe(
      imagemin([
        pngquant({
          quality: [0.65, 0.8],
          speed: 1,
        }),
        mozjpeg({
          quality: 80,
        }),
        imagemin.gifsicle({
          interlaced: false,
        }),
        imagemin.svgo({
          plugins: [{ removeViewBox: true }, { cleanupIDs: false }],
        }),
      ])
    )
    .pipe(gulp.dest(`${config.path.output}/images`));
  done();
});

gulp.task('img-watch', function (done) {
  gulp
    .watch(`${config.path.input}/images/**/*`)
    .pipe(gulp.task('minify-img'))
    .on('change', () => {
      config.browserSync.reload();
    });
  done();
});

gulp.task('minify-img', gulp.series('minify-img.clean', 'minify-img.minify'));
