(function ($) {
    "use strict";
// Back to top button
$(window).on('scroll',function () {
    if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
});
$('.back-to-top').on('click',function () {
    $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
    return false;
});
$(window).on('scroll',function () {
    if ($(this).scrollTop() > 50) {
        $('.sticky-navbar').addClass('sticky-navbar-appear');
        
    } else {
        $('.sticky-navbar').addClass('sticky-navbar-disappear');
        $('.sticky-navbar').removeClass('sticky-navbar-appear');
    }
});
  
    
})(jQuery);