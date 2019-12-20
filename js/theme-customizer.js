/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	/* Text Values */
	// site title
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '#site-title' ).html( newval );
		} );
	} );
	// tagline
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( newval ) {
			$( '#tagline' ).html( newval );
		} );
	} );

	/* Color Values */
	// background color
	wp.customize( 'background_color', function( value ) {
		value.bind( function( newval ) {
			$('body').css('background-color', newval );
		} );
	} );	

	/* BG Images */
	// header bg image
	wp.customize( 'header_background_image', function( value ) {
	    value.bind( function( to ) {
	 
	        $( 'nav#header' ).css( 'background-image', 'url( ' + to + ')' );
	    });
	});
	// content area bg image
	wp.customize( 'content_background_image', function( value ) {
	    value.bind( function( to ) {

	        $( '#content' ).css( 'background-image', 'url( ' + to + ')' );
	    });
	});	
	// left sidebar bg image
	wp.customize( 'left_sidebar_background_image', function( value ) {
	    value.bind( function( to ) {

			$( '#sidebar-left' ).css( 'background-image', 'url( ' + to + ')' );	            
	    });
	});
	// right sidebar bg image
	wp.customize( 'right_sidebar_background_image', function( value ) {
	    value.bind( function( to ) {

	        $( '#sidebar-right' ).css( 'background-image', 'url( ' + to + ')' );
	    });
	});
	// footer bg image
	wp.customize( 'footer_background_image', function( value ) {
	    value.bind( function( to ) {

	        $( '#footer' ).css( 'background-image', 'url( ' + to + ')' );
	    });
	});
	// preview bg image
	wp.customize( 'preview_background_image', function( value ) {
	    value.bind( function( to ) {

	        $( '.post-preview-styling' ).css( 'background-image', 'url( ' + to + ')' );
	    });
	});
	// sticky preview bg image
	wp.customize( 'sticky_preview_background_image', function( value ) {
	    value.bind( function( to ) {

	        $( '.sticky-post-preview-styling' ).css( 'background-image', 'url( ' + to + ')' );
	    });
	});

	// header
	bind_css('header_bg_color', '.navbar', 'background-color');
	bind_css('header_txt_color', '.navbar', 'color');
	bind_css('header_link_color', '.navbar a:not(.navbar ul li a, .header-widget-area ul li a, #site-title)', 'color');
	bind_css('header_border_color', '.navbar-default', 'border-color');
	bind_css('header_site_title_color', '#site-title', 'color');
	bind_css('header_tagline_color', '#tagline', 'color');
	bind_css('header_search_input_color', '#search-form input', 'background-color');
	bind_css('header_search_txt_color', '#search-form input', 'color');
	bind_css('header_search_border_color', '#search-form input', 'border-color');
	bind_css('header_search_button_color', '#search-form button', 'background-color');
	bind_css('header_search_button_txt_color', '#search-form button', 'color');
	bind_css('header_search_button_border_color', '#search-form button', 'border-color');

	// navbar
	bind_css('navbar_bg_color', '#navbar-block', 'background-color');
	bind_css('navbar_item_bg_color', '#navbar-block > ul > li:not(.current_page_item):not(.current-menu-item) > a, #header-menu ul .menu-item:not(.current_page_item):not(.current-menu-item) a', 'background-color');
	bind_css('navbar_txt_color', '#navbar-block > ul > li:not(.current_page_item):not(.current-menu-item) > a, #header-menu ul .menu-item:not(.current-menu-item):not(.current_page_item) a', 'color');
	bind_css('navbar_border_color', '#navbar-block > ul > li:not(.current_page_item):not(.current-menu-item) > a, #header-menu ul .menu-item:not(.current-menu-item):not(.current_page_item) a', 'border-color');
	// hover colors refresh (removed)
	// current
	bind_css('navbar_current_bg_color', '#navbar .current_page_item:not(.header-widget-area) a, #navbar .current-menu-item:not(.header-widget-area) a', 'background-color');
	bind_css('navbar_current_txt_color', '#navbar .current_page_item:not(.header-widget-area) a, #navbar .current-menu-item:not(.header-widget-area) a', 'color');
	bind_css('navbar_current_border_color', '#navbar .current_page_item:not(.header-widget-area) a, #navbar .current-menu-item:not(.header-widget-area) a', 'border-color');

	//header widget menu
	bind_css('header_widget_menu_title_color', '.header-widget-title', 'color');
	bind_css('header_widget_menu_bg_color', '.header-widget-area ul', 'background-color');
	bind_css('header_widget_menu_item_bg_color', '.header-widget-area ul li a', 'background-color');
	bind_css('header_widget_menu_txt_color', '.header-widget-area ul li a', 'color');
	bind_css('header_widget_menu_border_color', '.header-widget-area ul li a', 'border-color');
	bind_css('header_widget_menu_current_bg_color', '.header-widget-area .current_page_item > a, .header-widget-area .current-cat > a', 'background-color');
	bind_css('header_widget_menu_current_txt_color', '.header-widget-area .current_page_item > a, .header-widget-area .current-cat > a', 'color');
	bind_css('header_widget_menu_current_border_color', '.header-widget-area .current_page_item > a, .header-widget-area .current-cat > a', 'border-color');

	//content area
	bind_css('content_bg_color', '#content', 'background-color');
	bind_css('content_border_color', '#content', 'border-color');

	//left sidebar
	bind_css('left_sidebar_txt_color', '.sidebar-left', 'color');
	bind_css('left_sidebar_bg_color', '.sidebar-left', 'background-color');
	bind_css('left_sidebar_link_color', '.sidebar-left a:not(#sidebar-left ul li a, .tagcloud a)', 'color');
	bind_css('left_sidebar_border_color', '.sidebar-left', 'border-color');

	//left sidebar widget menu
	bind_css('left_sidebar_widget_menu_title_color', '.sidebar-left-widget-title', 'color');
	bind_css('left_sidebar_widget_menu_bg_color', '.sidebar-left-widget-area ul', 'background-color');
	bind_css('left_sidebar_widget_menu_item_bg_color', '.sidebar-left-widget-area ul li a', 'background-color');
	bind_css('left_sidebar_widget_menu_txt_color', '.sidebar-left-widget-area ul li a:not(#sidebar-left)', 'color');
	bind_css('left_sidebar_widget_menu_border_color', '.sidebar-left-widget-area ul li a', 'border-color');
	bind_css('left_sidebar_widget_menu_current_bg_color', '.sidebar-left-widget-area .current_page_item > a, .sidebar-left-widget-area .current-cat > a', 'background-color');
	bind_css('left_sidebar_widget_menu_current_txt_color', '.sidebar-left-widget-area .current_page_item > a, .sidebar-left-widget-area .current-cat > a', 'color');
	bind_css('left_sidebar_widget_menu_current_border_color', '.sidebar-left-widget-area .current_page_item > a, .sidebar-left-widget-area .current-cat > a', 'border-color');

	//right sidebar
	bind_css('right_sidebar_txt_color', '.sidebar-right', 'color');
	bind_css('right_sidebar_bg_color', '.sidebar-right', 'background-color');
	bind_css('right_sidebar_link_color', '.sidebar-right a:not(#sidebar-right ul li a, .tagcloud a)', 'color');
	bind_css('right_sidebar_border_color', '.sidebar-right', 'border-color');

	//right sidebar widget menu
	bind_css('right_sidebar_widget_menu_title_color', '.sidebar-right-widget-title', 'color');
	bind_css('right_sidebar_widget_menu_bg_color', '.sidebar-right-widget-area ul', 'background-color');
	bind_css('right_sidebar_widget_menu_item_bg_color', '.sidebar-right-widget-area ul li a', 'background-color');
	bind_css('right_sidebar_widget_menu_txt_color', '.sidebar-right-widget-area ul li a:not(#sidebar-right)', 'color');
	bind_css('right_sidebar_widget_menu_border_color', '.sidebar-right-widget-area ul li a', 'border-color');
	bind_css('right_sidebar_widget_menu_current_bg_color', '.sidebar-right-widget-area .current_page_item > a, .sidebar-right-widget-area .current-cat > a', 'background-color');
	bind_css('right_sidebar_widget_menu_current_txt_color', '.sidebar-right-widget-area .current_page_item > a, .sidebar-right-widget-area .current-cat > a', 'color');
	bind_css('right_sidebar_widget_menu_current_border_color', '.sidebar-right-widget-area .current_page_item > a, .sidebar-right-widget-area .current-cat > a', 'border-color');

	//post preview
	bind_css('preview_title_txt_color', '.post-preview-styling:not(.sticky) a.preview-title', 'color');
	bind_css('preview_bg_color', '.post-preview-styling:not(.sticky)', 'background-color');
	bind_css('preview_txt_color', '.post-preview-styling:not(.sticky)', 'color');
	bind_css('preview_link_color', '.post-preview-styling:not(.sticky) :not(.post-preview-tags):not(.post-preview-category):not(.post-preview-performers):not(.preview-date) a:not(.preview-title), .post-preview-styling:not(.sticky) .post-edit-link', 'color');
	bind_css('preview_border_color', '.post-preview-styling', 'border-color');
	bind_css('preview_featured_image_border_color', '.wp-post-image', 'border-color');
	bind_css('preview_duration_bg_color', '.post-preview-styling > .duration', 'background-color');
	bind_css('preview_duration_txt_color', '.post-preview-styling > .duration', 'color');
	bind_css('preview_duration_border_color', '.post-preview-styling > .duration', 'border-color');
	bind_css('preview_post_date_txt_color', '.post-preview-styling > .preview-date', 'color');
	bind_css('preview_tags_label_color', '.post-preview-tags', 'color');
	bind_css('preview_tags_txt_color', '.post-preview-tags > a', 'color');
	bind_css('preview_tags_bg_color', '.post-preview-tags > a', 'background-color');
	bind_css('preview_tags_border_color', '.post-preview-tags > a', 'border-color');
	bind_css('preview_category_label_color', '.post-preview-category', 'color');
	bind_css('preview_category_txt_color', '.post-preview-category > a', 'color');
	bind_css('preview_category_bg_color', '.post-preview-category > a', 'background-color');
	bind_css('preview_category_border_color', '.post-preview-category > a', 'border-color');
	bind_css('preview_performers_label_color', '.post-preview-performers', 'color');
	bind_css('preview_performers_txt_color', '.post-preview-performers > a', 'color');
	bind_css('preview_performers_bg_color', '.post-preview-performers > a', 'background-color');
	bind_css('preview_performers_border_color', '.post-preview-performers > a', 'border-color');
	bind_css('preview_rating_txt_color', '.post-preview-rating', 'color');	
	bind_css('preview_view_count_txt_color', '.post-preview-view-count', 'color');

	//sticky post preview
	bind_css('sticky_preview_label_txt_color', '.sticky .ribbon span', 'color');
	bind_css('sticky_preview_label_bg_color', '.sticky .ribbon span', 'background-color');
	bind_css('sticky_preview_title_txt_color', '.sticky a.preview-title', 'color');	
	bind_css('sticky_preview_bg_color', '.sticky-post-preview-styling ', 'background-color');
	bind_css('sticky_preview_txt_color', '.sticky-post-preview-styling ', 'color');
	bind_css('sticky_preview_link_color', '.sticky-post-preview-styling :not(.sticky-post-preview-tags):not(.sticky-post-preview-category) a:not(.preview-title), .sticky .post-edit-link', 'color');
	bind_css('sticky_preview_border_color', '.sticky-post-preview-styling ', 'border-color');
	bind_css('sticky_preview_featured_image_border_color', '.sticky .wp-post-image', 'border-color');
	bind_css('sticky_preview_duration_bg_color', '.sticky-post-preview-styling > .duration', 'background-color');
	bind_css('sticky_preview_duration_txt_color', '.sticky-post-preview-styling > .duration', 'color');
	bind_css('sticky_preview_duration_border_color', '.sticky-post-preview-styling > .duration', 'border-color');	
	bind_css('sticky_preview_post_date_txt_color', '.sticky .preview-date', 'color');
	bind_css('sticky_preview_tags_label_color', '.sticky-post-preview-tags', 'color');
	bind_css('sticky_preview_tags_txt_color', '.sticky-post-preview-tags > a', 'color');
	bind_css('sticky_preview_tags_bg_color', '.sticky-post-preview-tags > a', 'background-color');
	bind_css('sticky_preview_tags_border_color', '.sticky-post-preview-tags > a', 'border-color');
	bind_css('sticky_preview_category_label_color', '.sticky-post-preview-category', 'color');
	bind_css('sticky_preview_category_txt_color', '.sticky-post-preview-category > a', 'color');
	bind_css('sticky_preview_category_bg_color', '.sticky-post-preview-category > a', 'background-color');
	bind_css('sticky_preview_category_border_color', '.sticky-post-preview-category > a', 'border-color');
	bind_css('sticky_preview_performers_label_color', '.sticky-post-preview-performers', 'color');
	bind_css('sticky_preview_performers_txt_color', '.sticky-post-preview-performers > a', 'color');
	bind_css('sticky_preview_performers_bg_color', '.sticky-post-preview-performers > a', 'background-color');
	bind_css('sticky_preview_performers_border_color', '.sticky-post-preview-performers > a', 'border-color');	
	bind_css('sticky_preview_rating_txt_color', '.sticky-post-preview-rating', 'color');	
	bind_css('sticky_preview_view_count_txt_color', '.sticky-post-preview-view-count', 'color');

	//comments
	bind_css('comments_area_bg_color', '#comments', 'background-color');
	bind_css('comments_area_txt_color', '#comments', 'color');
	bind_css('comments_area_link_color', '.logged-in-as a', 'color');
	bind_css('comments_area_border_color', '#comments' , 'border-color');
	bind_css('comment_item_bg_color', '.comment', 'background-color');
	bind_css('comment_item_txt_color', '.comment', 'color');
	bind_css('comment_item_link_color', '.comment a:not(.comment-reply a)', 'color');
	bind_css('comment_item_border_color', '.comment', 'border-color');
	bind_css('comment_reply_bg_color', '.comment-reply', 'background-color');
	bind_css('comment_reply_txt_color', '.comment-reply', 'color');
	bind_css('comment_reply_link_color', 'li.comment-reply a', 'color');
	bind_css('comment_reply_border_color', '.comment-reply', 'border-color');
	bind_css('comment_form_input_bg_color', 'textarea#comment', 'background-color');
	bind_css('comment_form_input_txt_color', 'textarea#comment', 'color');
	bind_css('comment_form_input_border_color', 'textarea#comment', 'border-color');
	bind_css('comment_submit_bg_color', '#commentform > p > #submit', 'background-color');
	bind_css('comment_submit_txt_color', '#commentform > p > #submit', 'color');
	bind_css('comment_submit_border_color', '#commentform > p > #submit', 'border-color');

	//pagination
	bind_css('pagination_prev_bg_color', '.nav-links a.prev', 'background-color');
	bind_css('pagination_prev_txt_color', '.nav-links a.prev', 'color');
	bind_css('pagination_prev_border_color', '.nav-links a.prev', 'border-color');
	bind_css('pagination_current_bg_color', '.nav-links span.current:not(.prev):not(.next)', 'background-color');
	bind_css('pagination_current_txt_color', '.nav-links span.current:not(.prev):not(.next)', 'color');
	bind_css('pagination_current_border_color', '.nav-links span.current:not(.prev):not(.next)', 'border-color');
	bind_css('pagination_num_bg_color', '.nav-links a.page-numbers:not(.prev):not(.next)', 'background-color');
	bind_css('pagination_num_txt_color', '.nav-links a.page-numbers:not(.prev):not(.next)', 'color');
	bind_css('pagination_num_border_color', '.nav-links a.page-numbers:not(.prev):not(.next)', 'border-color');
    bind_css('pagination_dots_bg_color', '.nav-links span.dots:not(.prev):not(.next)', 'background-color');
    bind_css('pagination_dots_txt_color', '.nav-links span.dots:not(.prev):not(.next)', 'color');
    bind_css('pagination_dots_border_color', '.nav-links span.dots:not(.prev):not(.next)', 'border-color');
    bind_css('pagination_next_bg_color', '.nav-links a.next', 'background-color');
    bind_css('pagination_next_txt_color', '.nav-links a.next', 'color');
    bind_css('pagination_next_border_color', '.nav-links a.next', 'border-color');

	//footer
	bind_css('footer_bg_color', '#footer', 'background-color');	
	bind_css('footer_txt_color', '#footer', 'color');
	bind_css('footer_link_color', '.footer a:not(#footer ul li a, .tagcloud a)', 'color');
	bind_css('footer_border_color', '#footer', 'border-color');

	//footer widget menu
	bind_css('footer_widget_menu_title_color', '.footer-widget-title', 'color');
	bind_css('footer_widget_menu_bg_color', '.footer-widget-area ul', 'background-color');
	bind_css('footer_widget_menu_item_bg_color', '.footer-widget-area ul li a', 'background-color');
	bind_css('footer_widget_menu_txt_color', '.footer-widget-area ul li a:not(#footer)', 'color');
	bind_css('footer_widget_menu_border_color', '.footer-widget-area ul li a', 'border-color');
	bind_css('footer_widget_menu_current_bg_color', '.footer-widget-area .current_page_item > a, .footer-widget-area .current-cat > a', 'background-color');
	bind_css('footer_widget_menu_current_txt_color', '.footer-widget-area .current_page_item > a, .footer-widget-area .current-cat > a', 'color');
	bind_css('footer_widget_menu_current_border_color', '.footer-widget-area .current_page_item > a, .footer-widget-area .current-cat > a', 'border-color');

	//post page
	bind_css('post_page_title_txt_color', 'h1#post-title', 'color');	
	bind_css('post_page_bg_color', '#post', 'background-color');
	bind_css('post_page_txt_color', '#post', 'color');
	bind_css('post_page_link_color', '#post :not(post-page-tags) a', 'color');
	bind_css('post_page_border_color', '#post', 'border-color');
	bind_css('post_page_blockquote_bg_color', 'blockquote', 'background-color');
	bind_css('post_page_blockquote_txt_color', 'blockquote', 'color');
	bind_css('post_page_blockquote_link_color', 'blockquote a', 'color');
	bind_css('post_page_blockquote_border_color', 'blockquote', 'border-color');
	bind_css('post_page_hr_color', '#post hr', 'border-color');
	bind_css('post_page_tags_label_color', '.post-page-tags', 'color');
	bind_css('post_page_tags_txt_color', '.post-page-tags > a', 'color');
	bind_css('post_page_tags_bg_color', '.post-page-tags > a', 'background-color');
	bind_css('post_page_tags_border_color', '.post-page-tags > a', 'border-color');
	bind_css('post_page_category_label_color', '.post-page-category', 'color');
	bind_css('post_page_category_txt_color', '.post-page-category > a', 'color');
	bind_css('post_page_category_bg_color', '.post-page-category > a', 'background-color');
	bind_css('post_page_category_border_color', '.post-page-category > a', 'border-color');
	bind_css('post_page_performers_label_color', '.post-page-performers', 'color');
	bind_css('post_page_performers_txt_color', '.post-page-performers > a', 'color');
	bind_css('post_page_performers_bg_color', '.post-page-performers > a', 'background-color');
	bind_css('post_page_performers_border_color', '.post-page-performers > a', 'border-color');

	bind_css('post_page_date_txt_color', '#post time', 'color');
	bind_css('post_page_author_txt_color', '#post a.author-link, .author', 'color');
	bind_css('post_page_related_label_color', '#post-page-related-title', 'color');

	//page page
	bind_css('page_page_bg_color', '#page', 'background-color');
	bind_css('page_page_txt_color', '#page', 'color');
	bind_css('page_page_link_color', '#page a:not(#tubeace-results a):not(#tubeace-pagination a)', 'color');
	bind_css('page_page_border_color', '#page', 'border-color');
	bind_css('page_page_title_txt_color', 'h1#page-title', 'color');

	//archive page
	bind_css('archive_page_title_txt_color', 'h1#archive-title', 'color');
	bind_css('archive_page_monthly_list_title_color', '#archives-monthly-title', 'color');
	bind_css('archive_page_monthly_list_link_color', '#archives-monthly a', 'color');

	//attachment
	bind_css('attachment_page_bg_color', '#attachment', 'background-color');
	bind_css('attachment_page_txt_color', '#attachment', 'color');
	bind_css('attachment_page_link_color', '#attachment a', 'color');
	bind_css('attachment_page_border_color', '#attachment', 'border-color');
	bind_css('attachment_page_title_txt_color', 'h1#attachment-title', 'color');
	bind_css('attachment_page_date_txt_color', '#attachment time', 'color');
	bind_css('attachment_page_author_txt_color', '#attachment a.author-link, .author', 'color');	

	//author page
	bind_css('author_page_content_bg_color', '#author', 'background-color');
	bind_css('author_page_content_txt_color', '#author-meta', 'color');
	bind_css('author_page_content_link_color', '#author-meta a', 'color');
	bind_css('author_page_content_border_color', '#author', 'border-color');
	bind_css('author_page_title_txt_color', 'h1#author-title', 'color');

	//category page
	bind_css('category_page_title_txt_color', 'h1#category-name', 'color');

	//tag page
	bind_css('tag_page_title_txt_color', 'h1#tag-name', 'color');

	//taxonomy page
	bind_css('taxonomy_page_title_txt_color', 'h1#taxonomy-name', 'color');	

	//search page
	bind_css('search_page_title_txt_color', 'h1#search-title', 'color');
	bind_css('search_page_bg_color', '#search-error-content', 'background-color');
	bind_css('search_page_txt_color', '#search-error-content', 'color');
	bind_css('search_page_link_color', '#search-error-content a', 'color');
	bind_css('search_page_border_color', '#search-error-content', 'border-color');	

	//404 page
	bind_css('page_404_title_txt_color', 'h1#page-404-title', 'color');	
	bind_css('page_404_bg_color', '#page-404', 'background-color');
	bind_css('page_404_txt_color', '#page-404', 'color');
	bind_css('page_404_link_color', '#page-404 a', 'color');
	bind_css('page_404_border_color', '#page-404', 'border-color');

	//widgets
	bind_css('calendar_bg_color', '#wp-calendar tbody td', 'background-color');
	bind_css('calendar_month_color', '#wp-calendar caption', 'color');
	bind_css('calendar_days_color', '#wp-calendar thead', 'color');
	bind_css('calendar_border_color', '#wp-calendar tbody td', 'border-color');
	bind_css('calendar_txt_color', '#wp-calendar tbody', 'color');
	bind_css('calendar_link_color', '#wp-calendar tbody a', 'color');
	bind_css('calendar_pagination_color', '#wp-calendar tfoot tr #prev a', 'color');

	bind_css('tag_cloud_bg_color', '.tagcloud', 'background-color');
	bind_css('tag_cloud_border_color', '.tagcloud', 'border-color');
	bind_css('tag_cloud_item_txt_color', '.tagcloud a', 'color');
	bind_css('tag_cloud_item_bg_color', '.tagcloud a', 'background-color');
	bind_css('tag_cloud_item_border_color', '.tagcloud a', 'border-color');

	function bind_css(settings, selector, style){

		wp.customize( settings, function( value ) {
			value.bind( function( newval ) {
				$(selector).css(style, newval );
			} );
		} );

	}

} )( jQuery );