jQuery(document).ready(function ($) {

	//sticky  sidebar init
	if ($(window).width() >= 1120) {
		$(".js-sticky-sidebar").stick_in_parent({
			offset_top: 80
		});
	};

	//remove empty sidebar
	/*if ($('.js-sticky-sidebar *').length == 0) {
		$(".js-sticky-sidebar").remove();
		$(".grid__content").css({
			width: '100%',
            paddingRight: '0',
            borderRight: 'none'
		});
	};*/

});