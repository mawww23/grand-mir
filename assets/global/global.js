jQuery(document).ready(function ($) {

	//scroll animations init (VENDOR: wow.js)
	new WOW().init();

	//scroll to anchor (VENDOR: page-scroll-to-id)
	$("a[href*='#']").mPageScroll2id({
		offset: 33,
		scrollSpeed: 1200,
		scrollEasing: 'easeInOutCubic'
	});

	//animated page transitions (VENDOR: animsition)
	$(".js-site-preloader").animsition({
		inClass: 'fade-in',
		outClass: 'fade-out',
		inDuration: 300,
		outDuration: 300,
		linkElement: 'a:not([target="_blank"]):not([href^=#]):not([href^=tel]):not([href^=mailto]):not([href^=javascript]):not([href$=png]):not([href$=jpg])',
		// e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
		loading: true,
		loadingParentElement: 'html', //animsition wrapper element
		loadingClass: 'animsition-loading',
		loadingInner: '', // e.g '<img src="loading.svg" />'
		timeout: true,
		timeoutCountdown: 3000,
		onLoadEvent: true,
		browser: ['animation-duration', '-webkit-animation-duration'],
		// "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
		// The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
		overlay: false,
		overlayClass: 'animsition-overlay-slide',
		overlayParentElement: 'html',
		transition: function (url) {
			window.location.href = url;
		}
	});

	//tooltips (VENDOR: tipso)
	$('a[title]:not([class^=sigFreeLink])').each(function () {
		$(this).tipso({
			speed: 400,
			background: '#285c96',
			titleBackground: '#333333',
			color: '#f9f9f9',
			titleColor: '#f9f9f9',
			titleContent: '',
			showArrow: true,
			position: 'top',
			width: 200,
			maxWidth: '',
			delay: 200,
			hideDelay: 0,
			animationIn: '',
			animationOut: '',
			offsetX: 0,
			offsetY: 0,
			tooltipHover: false,
			content: $(this).attr('title'),
			ajaxContentUrl: null,
			contentElementId: null,
			useTitle: false,
			templateEngineFunc: null,
			onBeforeShow: null,
			onShow: null,
			onHide: null,
			size: 'small'
		});
	})

});
