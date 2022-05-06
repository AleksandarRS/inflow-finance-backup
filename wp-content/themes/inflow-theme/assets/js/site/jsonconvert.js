"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		// accordionLink: $('.faq-section-item-question'),
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){

			var animationHero = bodymovin.loadAnimation({
				container: document.getElementById('lottie-hero'), // Required
				path: '/inflow/wp-content/themes/inflow-theme/assets/json/inflow-header-animation-final.json', // Required - local path
				// path: '/wp-content/themes/inflow-theme/assets/json/inflow-header-animation-final.json', // Required - server path
				renderer: 'svg', // Required
				loop: true, // Optional
				autoplay: true, // Optional
				// name: "Hello World", // Name for future reference. Optional.
			});
			var animationStep = bodymovin.loadAnimation({
				container: document.getElementById('entry-step-animation'), // Required
				path: '/inflow/wp-content/themes/inflow-theme/assets/json/gear-animation.json', // Required - local path
				// path: '/wp-content/themes/inflow-theme/assets/json/gear-animation.json', // Required - server path
				renderer: 'svg', // Required
				loop: true, // Optional
				autoplay: true, // Optional
				// name: "Hello World", // Name for future reference. Optional.
			});

		}
    },

};


  