"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		accordionLink: $('.faq-section-item-question'),
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){

			this.$dom.accordionLink.on("click", function(e) {
				e.preventDefault();
				if ($(this).hasClass("active")) {
					$(this).removeClass("active");
					$(this)
						.siblings(".accordion-content")
						.slideUp(500);
					$(".faq-section-item-question i")
						.removeClass("icon-minus-icon")
						.addClass("icon-plus-icon");
						
					} else {
					$(".faq-section-item-question i")
						.removeClass("icon-minus-icon")
						.addClass("icon-plus-icon");
					$(this)
						.find("i")
						.removeClass("icon-plus-icon")
						.addClass("icon-minus-icon");
					$(".faq-section-item-question").removeClass("active");
					$(this).addClass("active");
					$(".accordion-content").slideUp(500);
					$(this)
						.siblings(".accordion-content")
						.slideDown(500);
					}
			});

		}
    },

};


  