/* Custom jQuery */

jQuery(document).ready(function($) {
		var carousel = $('.carousel'),
						slideIntro = $('.slide-intro'),
						slideImage = $('.android-slider');
		carousel.find('img:first').parent().addClass('active');
		carousel.find('.item:first').addClass('active');
		carousel.carousel({
			interval: 4000
});
	
		if(slideIntro){
			$(slideIntro).css({ marginLeft: 20, opacity:0 });
		slideIntro.animate({
    opacity: 1,
    marginLeft: 0
  }, 1000, function() {
    // Animation complete.
  });
	}
  slideImage.css({ marginRight: 30, opacity:0});
  slideImage.animate({
		opacity: 1,
		marginRight:0
  }, 500, function() {

  });

$('.get-in-touch, .back-top').bind('click',function(e){
var $anchor = $(this);

$('html, body').stop().animate({
    scrollTop: $($anchor.attr('href')).offset().top
}, 2500,'easeInOutExpo');
/*
if you don't want to use the easing effects:
$('html, body').stop().animate({
    scrollTop: $($anchor.attr('href')).offset().top
}, 1000);
*/
e.preventDefault();
});
});
