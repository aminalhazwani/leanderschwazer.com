window.onload = function() {
  var currentFigure = $('.project_figure');
    currentFigure.each(function() {
    var video = $(this).children('#project_video');
    var playButton = $(this).children('.button');
    playButton.on("click", function() {
      if (video.get(0).paused === true) {
        video.get(0).play();
          playButton.addClass('button-pause');
          playButton.addClass('button-hide');
        } 
        else {
          video.get(0).pause();
          playButton.removeClass('button-pause');
          playButton.removeClass('button-hide');
        }
    });
  })
}

$("#project_video").mousemove(function() {
  $('.button').removeClass('button-hide');
});

$(".project_figure").mousestop(function() {
  $('.button-pause').addClass('button-hide');
});

function end() {
  $('.button').removeClass('button-pause');
  $('.button').removeClass('button-hide');
}

function pauseAllVideos() {
  $('video').each(function() {
    $(this).get(0).pause();
    $('.button').removeClass('button-pause');
    $('.button').removeClass('button-hide');
  });
}

$('.button').click(function(e) {
  e.stopPropagation();
});

$(function() {
  var is_ios = /(iPad|iPhone|iPod)/g.test( navigator.userAgent );
  if(is_ios)
  {
    $('video').attr('controls',true);
    $('.button').hide();
  };
});

$(function() {
  var sliderJQ = $('.slider').royalSlider({
    autoScaleSlider: false,
    autoHeight: false,
    keyboardNavEnabled: true,
    slidesSpacing: 0,
    deeplinking: {
      enabled: true,
      change: true,
      prefix: 'mut'
    },
    loopRewind: false,
    controlNavigation: 'none',
    arrowsNav: false,
    numImagesToPreload: 2
  });
  var sliderInstance = sliderJQ.data('royalSlider');
  var slideCountEl = $('<span class="rsSlideCount"></span>').appendTo( '.project_count ' );
  function updCount() {
    slideCountEl.html( (sliderInstance.currSlideId+1) + '&nbsp;&nbsp;/&nbsp;&nbsp;' + sliderInstance.numSlides );
  }
  sliderInstance.ev.on('rsAfterSlideChange', updCount);
  sliderInstance.ev.on('rsAfterSlideChange', pauseAllVideos);
  updCount();
});

$('.project_caption').find('h1').fitText();