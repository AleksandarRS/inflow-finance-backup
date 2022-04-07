"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		window: $(window),
		mainHeader: $('.site-header'),
		// scrollToTop: $('#back2Top')
		
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){
			_this.$dom.window.scroll(function() {    
				var scroll = _this.$dom.window.scrollTop();
			
				if (scroll >= 50) {
					_this.$dom.mainHeader.addClass("fixed-site-header");
				} else {
					_this.$dom.mainHeader.removeClass("fixed-site-header");
				}

				// if (scroll >= 400) {
				// 	_this.$dom.scrollToTop.fadeIn();
				// } else {
				// 	_this.$dom.scrollToTop.fadeOut();
				// }
			});
		}
		// _this.$dom.scrollToTop.click(function(event) {
		// 	event.preventDefault();
		// 	$("html, body").animate({ scrollTop: 0 }, "slow");
		// 	return false;
		// });
    },
	

};