var gulp = require('gulp'),
    sass = require('gulp-sass')(require('sass')),
    watch = require('gulp-watch');

gulp.task('sass', gulp.series(async function(){
    gulp.src('./assets/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css'));
}));

gulp.task('default', gulp.series('sass',function() {
    return gulp.watch('./assets/sass/**/*.scss', gulp.series('sass'));
}));