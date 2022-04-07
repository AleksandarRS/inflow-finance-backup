"use strict";

// const Global = require('./global');

// let	_this;

let _this = module.exports = {

	
	/*-------------------------------------------------------------------------------
		# Cache dom and strings
	-------------------------------------------------------------------------------*/
	$dom: {
		svgElement: $('.site-branding-main-logo a img[src$=".svg"]')
    },

    vars: {
	},

	/*-------------------------------------------------------------------------------
		# Initialize
	-------------------------------------------------------------------------------*/
	init: function () {
		if( _this ){
			this.$dom.svgElement.each(function () {
				var $img = jQuery(this);
				var imgURL = $img.attr('src');
				var attributes = $img.prop("attributes");
			
				$.get(imgURL, function (data) {
					// Get the SVG tag, ignore the rest
					var $svg = jQuery(data).find('svg');
					// Remove any invalid XML tags
					$svg = $svg.removeAttr('xmlns:a');
					// Loop through IMG attributes and apply on SVG
					$.each(attributes, function () {
						$svg.attr(this.name, this.value);
					});
					// Replace IMG with SVG
					$img.replaceWith($svg);
				}, 'xml');
				
			});
		}
    },

};