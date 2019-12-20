/**
 * This file fixes jumbling of the post previews with embedded content in the theme customizer preview window
 */
( function( $ ) {

	// fire after 3 seconds
	setTimeout(function(){ 

		//preveng jumbling from masonry.js
	    $('.masonry').masonry({
	      itemSelector: '.post-preview',
	      columnWidth: '.post-preview',
	    });	

	}, 3000);

} )( jQuery );