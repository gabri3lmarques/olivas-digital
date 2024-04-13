const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

gulp.task('sass', function() {
  return gulp.src('dev/sass/styles.scss')
    .pipe(sass())
    .pipe(cleanCSS())
    .pipe(concat('styles.css'))
    .pipe(gulp.dest('assets/css'));
});

gulp.task('js', function() {
    return gulp.src('dev/js/*.js')
    .pipe(concat('scripts.js'))
    .pipe(uglify())
    .pipe(gulp.dest('assets/js'));
});