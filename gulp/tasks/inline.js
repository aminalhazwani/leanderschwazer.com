'use strict';

var gulp         = require('gulp');
var inlinesource = require('gulp-inline-source');
var config    = require('../config').production;

gulp.task('inlinesource', function () {
  return gulp.src(config.inlineSrc)
    .pipe(inlinesource())
    .pipe(gulp.dest(config.inlineDest))
});