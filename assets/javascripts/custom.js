/* Custom jQuery */

jQuery(document).ready(function($) {
		var carousel = $('.carousel');
		carousel.find('img:first').parent().addClass('active');
		carousel.find('.item:first').addClass('active');
		carousel.carousel({
			interval: 4000
});
		$('.testimonials-carousel').find('.item:last-child').remove();
});
