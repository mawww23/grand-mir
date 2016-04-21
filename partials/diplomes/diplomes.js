jQuery(document).ready(function ($) {

	//popup (VENDOR: jquery.magnific-popup)
	$('.js-diplomes-carousel a.diplomes__carousel-item').each(function () {
		$(this).append('<div class="diplomes__carousel-item-image"></div>');
		var src = $(this).attr('href');
		$(this).find('div').css('backgroundImage', 'url(' + src + ')');
		$(this).find('.sertificates__item-image + .sertificates__item-image').remove();
	});
	$('.js-diplomes-carousel').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 500,
			opener: function (element) {
				return element.find('div');
			}
		}
	});
	$('.mfp-img').click(function () {
		$(this).css();
	});

	//slideshow init (VENDOR: slick)
	$('.js-diplomes-carousel').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		fade: false,
		speed: 1500,
		autoplay: true,
		autoplaySpeed: 2500
	});

});
