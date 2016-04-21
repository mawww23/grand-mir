jQuery(document).ready(function ($) {

	//slideshow init (VENDOR: slick)
	$('.js-partners-carousel').slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		arrows: true,
		fade: false,
		speed: 1500,
		autoplay: true,
		autoplaySpeed: 2500,
		centerMode: true,
		variableWidth: true
	});

});
