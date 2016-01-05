'use strict';

var gulp         = require('gulp');
var browserSync  = require('browser-sync');
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var handleErrors = require('../util/handleErrors');
var config       = require('../config').sass;
var autoprefixer = require('gulp-autoprefixer');
var cssimport    = require("gulp-cssimport");
var minifyCSS    = require('gulp-minify-css');
var rename       = require('gulp-rename');

gulp.task('sass', function () {
  return gulp.src(config.src)
    .pipe(sourcemaps.init())
    .pipe(sass(config.settings))
    .on('error', handleErrors)
    .pipe(sourcemaps.write())
    .pipe(autoprefixer({ browsers: config.prefix }))
    .pipe(cssimport())
    .on('error', handleErrors)
    .pipe(minifyCSS())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(config.dest))
    .pipe(browserSync.reload({stream:true}));
});