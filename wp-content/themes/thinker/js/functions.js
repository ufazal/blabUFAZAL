(function($) {
	"use strict";
	$(document).ready(function() {
		$('.posts').masonry({
        // options
        itemSelector : '.threecolumn',
        // options...
    isAnimated: true,
    animationOptions: {
        duration: 400,
        easing: 'linear',
        queue: false
    }
		});
	$(window).resize(function () {
		$('.posts').masonry();
	});
    });
})(jQuery);