jQuery(document).ready(function($) {

	//slideshow init (VENDOR: slick)
	$('.js-reviews-slideshow').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: false,
		speed: 1500,
		autoplay: true,
		autoplaySpeed: 2500
	});

	//counter
	function counter() {
		var sumOfSlides = $('.reviews-slideshow__item:not([class*="slick-cloned"])').length;
		var currentSlide = $('.reviews-slideshow__item.slick-active').index();
		$('.js-reviews-slideshow__counter-cur').text(currentSlide);
		$('.js-reviews-slideshow__counter-sum').text(sumOfSlides);
		x = setTimeout(function() {
			counter()
		}, 100);
	};
	counter();

});
