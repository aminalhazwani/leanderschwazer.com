'use strict';

var dest = "./assets";
var src = './src';

module.exports = {
  destFolder: dest,

  browserSync: {
    port: 9000,
    proxy: 'http://studiomut.dev/',
    notify: false,
    open: false
  },

  scripts: {
    src: src + "/js/*.js",
    dest: dest + "/js"
  },

  vendors: {
    src: src + "/js/vendor/*.js",
    dest: dest + "/js/vendor"
  },

  sass: {
    src: src + "/sass/**/*.{sass,scss}",
    dest: dest + '/css',
    prefix: [
      'ie >= 10',
      'ie_mob >= 10',
      'ff >= 30',
      'chrome >= 34',
      'safari >= 7',
      'opera >= 23',
      'ios >= 7',
      'android >= 4.4',
      'bb >= 10'
    ],
    settings: {
      indentedSyntax: true, // Enable .sass syntax!
      imagePath: 'images' // Used by the image-url helper
    }
  },

  images: {
    src: src + "/images/**",
    dest: dest + "/images"
  },

  fonts: {
    src: src + "/fonts/*",
    dest: dest + "/fonts"
  },

  production: {
    inlineSrc: '../site/snippets/head-dev.html',
    inlineDest: '../site/snippets/head.html'
  },

  svgSprite: {
    src: src + '/icons',
    glob: '**/*.svg',
    dest: dest + '/images',
    options : {
      mode: {
        css: {
          layout: 'horizontal',
          prefix: '.i-%s',
          common: 'i',
          dimensions: '-s',
          sprite: 'sprite.svg',
          dest: '.',
          render: {
            scss: {
              template: 'gulp/tpl/_sprite.scss',
              dest: '../../src/sass/_sprite.scss'
            }
          }
        }
      },
      variables: {
        cssPath: '../images/'
      }
    }
  }
};
