jQuery(document).ready(function($) {

	//slideshow init (VENDOR: slick)
	$('.js-main-slideshow').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		speed: 2000,
		asNavFor: '.js-main-slideshow-nav',
		focusOnSelect: true,
		autoplay: true,
		autoplaySpeed: 3000
	});
	$('.js-main-slideshow-nav').slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		asNavFor: '.js-main-slideshow',
		dots: false,
		arrows: false,
		centerMode: false,
		focusOnSelect: true
	});

});
