jQuery(document).ready(function($) {

    // body padding for fixed menu
    if ($('.js-main-menu')) {
        $('body').css({
            paddingTop: $('.js-main-menu').css('lineHeight')
        });
    }

});
