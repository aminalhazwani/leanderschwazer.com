'use strict';

var gulp   = require('gulp');
var rename = require('gulp-rename');
var notify = require('gulp-notify');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var config = require('../config').vendors;

gulp.task('vendors', function() {
  return gulp.src([config.src + '/jquery-2.1.1.min.js', config.src])
    .pipe(concat('vendors.js'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest(config.dest))
    .pipe(notify({ message: 'Vendors task completed' }));
});