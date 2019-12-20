jQuery(document).ready(function($) {

	"use strict";

	var $container = jQuery('.masonry');

	$container.imagesLoaded( function(){ 

		$container.masonry({ 

			itemSelector: '.post-preview',
			percentPosition: true,
			columnWidth: '.post-preview',

		}); 

	});
})