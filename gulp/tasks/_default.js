'use strict';

var gulp = require('gulp');
var runSequence = require('run-sequence');
var del = require('del');

gulp.task('default', function(cb){
  runSequence('sprite', ['scripts'], ['vendors'], ['sass'], 'images', 'fonts', cb);
});