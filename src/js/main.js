// Sticky Header
$(window).on("scroll load", function() {  
  if( $(this).scrollTop() > $('.header-primary').height() ) {
    $('.nav').addClass('nav-scrolled');
    $('main').addClass('nav-is-fixed');
  } else {
    $('.nav').removeClass('nav-scrolled');
    $('main').removeClass('nav-is-fixed');
  }
});

// Splash
$(function() {
  setTimeout(function() {
    $(".splash").hide()
  }, 600);
});

// Huge typography
jQuery(".fit").fitText();

// Huge typography navigation
$(window).on("scroll load", function() {  
  var mqp = window.matchMedia("(orientation: portrait)");
  var mql = window.matchMedia("(orientation: landscape)");

  if(mqp.matches) {  
    $(".fit-nav").fitText(1.2);
  }
  else {
    $(".fit-nav").removeAttr('style');
  }

  window.addEventListener("orientationchange", function() {
    if(mql.matches) {
      $(".fit-nav").removeAttr('style');
    }
    if(mqp.matches) {  
      $(".fit-nav").fitText(1.2);
    }
  }, false);
});

// Mobile Navigation
$('.menu').on('click', function(e) {
  $('.navMobile').toggleClass("navMobile-is-open");
  e.preventDefault();
});
$("main").on('click', function(e){
  if ($('.navMobile').hasClass("navMobile-is-open")) {
    $('.navMobile').removeClass("navMobile-is-open");
    e.preventDefault();
  }
});

$(document).keydown(function(e){
  if(e.keyCode == 27) {
    if ($('.navMobile').hasClass("navMobile-is-open")) {
      $('.navMobile').removeClass("navMobile-is-open");
    }
  }
});