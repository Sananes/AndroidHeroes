/* Custom jQuery */

jQuery(document).ready(function($) {

// Center function
$.fn.center = function() {
    this.css({
        'position': 'absolute',
        'left': '50%',
        'top': '50%'
    });
    this.css({
        'margin-left': -this.width() / 2 + 'px',
        'margin-top': -this.height() / 2 + 'px'
    });

    return this;
};

		var carousel = $('.carousel');
						//slideIntro = $('.slide-intro'),
						//slideImage = $('.android-slider');
		carousel.find('img:first').parent().addClass('active');
		carousel.find('.item:first').addClass('active');
		carousel.carousel({
			interval: 4000
});

// Center company information
$('.company-information, .feat-image-work .details, .main-top .profie img').center();

// Remove last testimonial, if empty

var last_testimonial = $('.testimonials-carousel').find('.item:last-child');
if(last_testimonial.height() === 0) { last_testimonial.remove(); }



/*	if(slideIntro){
			$(slideIntro).css({ marginLeft: 20, opacity:0 });
		slideIntro.animate({
    opacity: 1,
    marginLeft: 0
  }, 500, function() {

  });
	}
  slideImage.css({ marginRight: 30, opacity:0});
  slideImage.animate({
		opacity: 1,
		marginRight:0
  }, 500, function() {

  }); */

$('.get-in-touch, .back-top').bind('click',function(e){
var $anchor = $(this);

/*$('html, body').stop().animate({
    scrollTop: $($anchor.attr('href')).offset().top
}, 1000,'easeInOutExpo');
*/

$('html, body').stop().animate({
    scrollTop: $($anchor.attr('href')).offset().top
}, 1000);

e.preventDefault();
});
$('#map_canvas').gmap({'center': '37.771054,-122.419453', 'zoom': 14, 'disableDefaultUI':true, 'scrollwheel':false, 'callback': function() {

}});


});
