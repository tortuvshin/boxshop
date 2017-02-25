var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', function() {
    // place code for your default task here
});

gulp.task('sass', function() {
    gulp.src('./resources/assets/sass/app.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./public/css'));
});

gulp.task('sass:watch', function() {
    gulp.watch('./scss/**/*.scss', ['sass']);
});
