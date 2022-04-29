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
		anchorLink: $('.anchor-product-list > li'),
		// scrollToTop: $('#back2Top')
		
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){
			// $(window).on('scroll load', function () {
				
			// });
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

			$(window).on('load', function () {

				var scrollLoad = _this.$dom.window.scrollTop();
				if (scrollLoad >= 50) {
					_this.$dom.mainHeader.addClass("fixed-site-header");
				} else {
					_this.$dom.mainHeader.removeClass("fixed-site-header");
				}

				setTimeout(function() {
					var bodyLogedIn = $('body');
					var windowHeight = $(window).scrollTop();
					
					
					var headerHeight = $("#masthead").outerHeight();
					var anchorMenu = $(".anchor-product-main-navigation");
					var heroSection = $(".single-product-main-hero-wrapper > section");


					if (heroSection.innerHeight() - headerHeight - headerHeight < windowHeight && !anchorMenu.hasClass("anchore-manu-fixed-position")) {
						anchorMenu.addClass("anchore-manu-fixed-position");
					} else if (heroSection.innerHeight() - headerHeight - headerHeight > windowHeight) {
						anchorMenu.removeClass("anchore-manu-fixed-position");
						anchorMenu.css({ top: 'auto' });
					}

					if ( (bodyLogedIn.hasClass("logged-in")) && (anchorMenu.hasClass("anchore-manu-fixed-position")) ) {
						anchorMenu.css({ top: headerHeight + 32 });
					} else if (anchorMenu.hasClass("anchore-manu-fixed-position")) {
						anchorMenu.css({ top: headerHeight });
					}
				}, 1000);

            });

			$(window).on('scroll', function () {

				var scrollLoad = _this.$dom.window.scrollTop();
				if (scrollLoad >= 50) {
					_this.$dom.mainHeader.addClass("fixed-site-header");
				} else {
					_this.$dom.mainHeader.removeClass("fixed-site-header");
				}

                var bodyLogedIn = $('body');
                var windowHeight = $(window).scrollTop();
                var headerHeight = $("#masthead").outerHeight();
                var anchorMenu = $(".anchor-product-main-navigation");
                var heroSection = $(".single-product-main-hero-wrapper > section");


                if (heroSection.innerHeight() - headerHeight - headerHeight < windowHeight && !anchorMenu.hasClass("anchore-manu-fixed-position")) {
                    anchorMenu.addClass("anchore-manu-fixed-position");
                } else if (heroSection.innerHeight() - headerHeight - headerHeight > windowHeight) {
                    anchorMenu.removeClass("anchore-manu-fixed-position");
                    anchorMenu.css({ top: 'auto' });
                }

                if ( (bodyLogedIn.hasClass("logged-in")) && (anchorMenu.hasClass("anchore-manu-fixed-position")) ) {
                    anchorMenu.css({ top: headerHeight + 32 });
                } else if (anchorMenu.hasClass("anchore-manu-fixed-position")) {
                    anchorMenu.css({ top: headerHeight });
                }

            });

			_this.$dom.anchorLink.click(function() {
				$(this).addClass('active-anchor-link').siblings().removeClass('active-anchor-link');
			});
		}
		// _this.$dom.scrollToTop.click(function(event) {
		// 	event.preventDefault();
		// 	$("html, body").animate({ scrollTop: 0 }, "slow");
		// 	return false;
		// });


		//Hide footer if contact flexible section is on the page
		if ($("#page-contact-details-section").length) {
			// console.log('page-contact-details-section in the page')
			$('#footer-contact-details-section').remove();
		}


    },
	

};