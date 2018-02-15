const gulp        = require('gulp'),
      browserSync = require('browser-sync'),
      concat      = require('gulp-concat'),
      connect     = require('gulp-connect-php'),
      less        = require('gulp-less'),
      plumber     = require('gulp-plumber'),
      uglify      = require('gulp-uglify'),
      libs        = require('./assets/js/bundle');

gulp.task('less', () =>  {
  return gulp.src('./assets/less/screen.less')
    .pipe(plumber({
      errorHandler: function (err) {
        console.log(err)
        this.emit('end')
      }
    }))
    .pipe(less())
    .pipe(gulp.dest('./assets/css'))
    .pipe(browserSync.stream())
})

gulp.task('js', () =>  {
    return gulp.src(libs.bundle)
    .pipe(concat('bundle.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./assets/js/'))
})

gulp.task('default', [ 'js', 'less', 'serve'])

gulp.task('serve', () =>  {
  connect.server({}, () => browserSync({ proxy: '127.0.0.1:8000' }))
  gulp.watch('./assets/less/*.less', ['less'])

  gulp.watch('**/*.php').on('change', () => browserSync.reload())
  gulp.watch('./assets/js/*.js').on('change', () =>  browserSync.reload())

  gulp.watch('./assets/js/bundle.js', ['js'])
})

gulp.task('watch', () => gulp.watch('./assets/less/*.less', ['less']))
