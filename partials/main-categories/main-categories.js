jQuery(document).ready(function($) {

	//height normalise
	setTimeout(function() {
		var mainDivs = $('.js-category-title');
		var maxHeight = 0;
		for (var i = 0; i < mainDivs.length; ++i) {
			if (maxHeight < $(mainDivs[i]).height()) {
				maxHeight = $(mainDivs[i]).height();
			}
		}
		for (var i = 0; i < mainDivs.length; ++i) {
			$(mainDivs[i]).height(maxHeight);
		}
	}, 0);

});
