'use strict';

var gulp   = require('gulp');
var rename = require('gulp-rename');
var notify = require('gulp-notify');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var config = require('../config').scripts;

gulp.task('scripts', function() {
  return gulp.src(config.src)
    .pipe(uglify())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(config.dest))
    .pipe(notify({ message: 'Scripts task completed' }));
});