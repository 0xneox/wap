<?php 
/**
 * Displays the customizer controls and styles.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */

function tubeaceplay_customize_register($wp_customize){

    global $tubeaceplay_customizer_defaults;

    // get array of google fonts
    $response = wp_remote_get( get_template_directory_uri() . '/inc/google-fonts-list.json' );
    $fonts = json_decode($response['body']);

    $fonts = $fonts->items;

    // get array of web fonts
    $fontsArr = tubeaceplay_websafe_fonts();

    foreach ($fonts as $font) {
        
        $fontsArr[$font->family] = $font->family;// add to array
    }

    $wp_customize->add_panel( 'tubeaceplay_theme_options', array(
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'title'          => __('Tube Ace Play Theme Options', 'tubeaceplay')
    ));

    require get_template_directory() . '/inc/customizer/customizer-background.php';
    require get_template_directory() . '/inc/customizer/customizer-layout.php';
    require get_template_directory() . '/inc/customizer/customizer-header-layout.php';
    require get_template_directory() . '/inc/customizer/customizer-header.php';
    require get_template_directory() . '/inc/customizer/customizer-header-image.php';
    require get_template_directory() . '/inc/customizer/customizer-navbar.php';
    require get_template_directory() . '/inc/customizer/customizer-header-widget-menu.php';
    require get_template_directory() . '/inc/customizer/customizer-content.php';    
    require get_template_directory() . '/inc/customizer/customizer-sidebar-left.php';
    require get_template_directory() . '/inc/customizer/customizer-sidebar-left-widget-menu.php'; 
    require get_template_directory() . '/inc/customizer/customizer-sidebar-right.php';    
    require get_template_directory() . '/inc/customizer/customizer-sidebar-right-widget-menu.php';

    // if Tube Ace plugin installed, separate menu panel in customizer will be loaded
    //if (!function_exists( 'tubeace_enqueue' )) { 
        require get_template_directory() . '/inc/customizer/customizer-preview.php';
    //}

    require get_template_directory() . '/inc/customizer/customizer-sticky-preview.php';
    require get_template_directory() . '/inc/customizer/customizer-comments.php';
    require get_template_directory() . '/inc/customizer/customizer-pagination.php';
    require get_template_directory() . '/inc/customizer/customizer-footer.php';
    require get_template_directory() . '/inc/customizer/customizer-footer-widget-menu.php';
    require get_template_directory() . '/inc/customizer/customizer-post-page.php';
    require get_template_directory() . '/inc/customizer/customizer-page.php';
    require get_template_directory() . '/inc/customizer/customizer-archive-page.php';
    require get_template_directory() . '/inc/customizer/customizer-attachment-page.php';
    require get_template_directory() . '/inc/customizer/customizer-author-page.php';
    require get_template_directory() . '/inc/customizer/customizer-category-page.php';
    require get_template_directory() . '/inc/customizer/customizer-tag-page.php';
    require get_template_directory() . '/inc/customizer/customizer-taxonomy-page.php';
    require get_template_directory() . '/inc/customizer/customizer-search-page.php';
    require get_template_directory() . '/inc/customizer/customizer-404-page.php';
    require get_template_directory() . '/inc/customizer/customizer-widgets-calendar.php';
    require get_template_directory() . '/inc/customizer/customizer-widgets-tag-cloud.php';

    // set transport = postMessage for live preview JS for Site Identity > Site Title & Tagline
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

    // remove header text color
    $wp_customize->remove_control('header_textcolor');

}
// Sanitize
// integer
function tubeaceplay_sanitize_integer( $input ) {
    return intval($input);
}
// checkbox
function tubeaceplay_sanitize_checkbox( $checked ) {
    // Boolean check.
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
// select
function tubeaceplay_sanitize_select( $input, $setting ) {
    
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );
 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}
// hex color
function tubeaceplay_sanitize_hex_color( $hex_color, $setting ) {
    // Sanitize $input as a hex value without the hash prefix.
    return $hex_color = sanitize_hex_color( $hex_color );
}
// html
function tubeaceplay_sanitize_html( $html ) {
    return wp_filter_post_kses( $html );
}
// no-html
function tubeaceplay_sanitize_nohtml( $nohtml ) {
    return wp_filter_nohtml_kses( $nohtml );
}
// image
function tubeaceplay_sanitize_image( $image, $setting ) {
    
    // Array of valid image file types. 
    // The array includes image mime types that are included in wp_get_mime_types()
     
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
    // Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );
    // If $image has a valid mime_type, return it; otherwise, return the default.
    return ( $file['ext'] ? $image : $setting->default );
}
// css
function tubeaceplay_sanitize_css( $css ) {
    return wp_strip_all_tags( $css );
}

// CSS styles in Customizer
function tubeaceplay_customize_styles( $input ) { ?>
    <style type="text/css">

    /* dashicons */
    /* layouts */
    li#accordion-section-tubeaceplay_design_layout > h3.accordion-section-title:before,
    li#accordion-section-tubeaceplay_header_layout > h3.accordion-section-title:before 
    {content: "\f180";font-family: dashicons;}

    /* sections */
    li#accordion-section-background_setting > h3.accordion-section-title:before,
    li#accordion-section-custom_header_setting > h3.accordion-section-title:before,
    li#accordion-section-custom_header_image_setting > h3.accordion-section-title:before,
    li#accordion-section-custom_navbar_setting > h3.accordion-section-title:before,
    li#accordion-section-header_bg_image_setting > h3.accordion-section-title:before,
    li#accordion-section-header_widget_menu_setting > h3.accordion-section-title:before,
    li#accordion-section-content_setting > h3.accordion-section-title:before,
    li#accordion-section-left_sidebar_setting > h3.accordion-section-title:before,
    li#accordion-section-left_sidebar_widget_menu_setting > h3.accordion-section-title:before,
    li#accordion-section-right_sidebar_setting > h3.accordion-section-title:before,
    li#accordion-section-right_sidebar_widget_menu_setting > h3.accordion-section-title:before,
    li#accordion-section-post_preview_setting > h3.accordion-section-title:before,
    li#accordion-section-sticky_post_preview_setting > h3.accordion-section-title:before,
    li#accordion-section-comments_setting > h3.accordion-section-title:before,
    li#accordion-section-pagination_setting > h3.accordion-section-title:before,
    li#accordion-section-footer_setting > h3.accordion-section-title:before,
    li#accordion-section-footer_widget_menu_setting > h3.accordion-section-title:before
    {content: "\f489";font-family: dashicons;}

    /* pages */
    li#accordion-section-post_page_setting > h3.accordion-section-title:before,
    li#accordion-section-page_page_setting > h3.accordion-section-title:before,
    li#accordion-section-archive_page_setting > h3.accordion-section-title:before,
    li#accordion-section-attachment_page_setting > h3.accordion-section-title:before,
    li#accordion-section-author_page_setting > h3.accordion-section-title:before,
    li#accordion-section-category_page_setting > h3.accordion-section-title:before,
    li#accordion-section-tag_page_setting > h3.accordion-section-title:before,
    li#accordion-section-taxonomy_page_setting > h3.accordion-section-title:before,
    li#accordion-section-search_page_setting > h3.accordion-section-title:before,
    li#accordion-section-page_404_setting > h3.accordion-section-title:before
    {content: "\f123";font-family: dashicons;}

    /* widgets */
    li#accordion-section-widgets_setting > h3.accordion-section-title:before,
    li#accordion-section-widgets_tag_cloud_setting > h3.accordion-section-title:before
    {content: "\f479";font-family: dashicons;}

    /* bg colors colors */
    /* layouts */
    li#accordion-section-tubeaceplay_design_layout .accordion-section-title,
    li#accordion-section-tubeaceplay_header_layout .accordion-section-title
    {background:#FFFD94;}

    /* sections */
    li#accordion-section-background_setting > .accordion-section-title,
    li#accordion-section-custom_header_setting > .accordion-section-title,
    li#accordion-section-custom_header_image_setting > .accordion-section-title,
    li#accordion-section-custom_navbar_setting > .accordion-section-title,
    li#accordion-section-header_bg_image_setting > .accordion-section-title,
    li#accordion-section-header_widget_menu_setting > .accordion-section-title,
    li#accordion-section-content_setting > .accordion-section-title,
    li#accordion-section-left_sidebar_setting > .accordion-section-title,
    li#accordion-section-left_sidebar_widget_menu_setting > .accordion-section-title,
    li#accordion-section-right_sidebar_setting > .accordion-section-title,
    li#accordion-section-right_sidebar_widget_menu_setting > .accordion-section-title,
    li#accordion-section-post_preview_setting > .accordion-section-title,
    li#accordion-section-sticky_post_preview_setting > .accordion-section-title,
    li#accordion-section-comments_setting > .accordion-section-title,
    li#accordion-section-pagination_setting > .accordion-section-title,
    li#accordion-section-footer_setting > .accordion-section-title,
    li#accordion-section-footer_widget_menu_setting > .accordion-section-title
    {background:#9CD0FF;}

    /* pages */
    li#accordion-section-post_page_setting .accordion-section-title,
    li#accordion-section-page_page_setting .accordion-section-title,
    li#accordion-section-archive_page_setting .accordion-section-title,
    li#accordion-section-attachment_page_setting .accordion-section-title,
    li#accordion-section-author_page_setting .accordion-section-title,
    li#accordion-section-category_page_setting .accordion-section-title,
    li#accordion-section-tag_page_setting .accordion-section-title,
    li#accordion-section-taxonomy_page_setting .accordion-section-title,
    li#accordion-section-search_page_setting .accordion-section-title,
    li#accordion-section-page_404_setting .accordion-section-title
    {background:#9EFF94;}

    /* widgets */
    li#accordion-section-widgets_setting .accordion-section-title,
    li#accordion-section-widgets_tag_cloud_setting .accordion-section-title
    {background:#FF94B3;}

    /* resize fields */
    /* textareas */
    #_customize-input-header_css,
    #_customize-input-navbar_css,
    #_customize-input-header_widget_menu_css,
    #_customize-input-content_css,
    #_customize-input-left_sidebar_css,
    #_customize-input-left_sidebar_widget_menu_css,
    #_customize-input-right_sidebar_css,
    #_customize-input-right_sidebar_widget_menu_css,
    #_customize-input-preview_css,
    #_customize-input-sticky_preview_css,
    #_customize-input-comments_css,
    #_customize-input-pagination_css,    
    #_customize-input-footer_css,
    #_customize-input-footer_widget_menu_css,
    #_customize-input-post_page_css,
    #_customize-input-page_page_css,
    #_customize-input-archive_page_css,
    #_customize-input-attachment_page_css,
    #_customize-input-author_page_css,
    #_customize-input-search_page_css,
    #_customize-input-page_404_css,
    #_customize-input-calendar_css,
    #_customize-input-tag_cloud_css
    {height:400px;}

    /* inputs */
    /* 60 px */
    #_customize-input-header_site_title_font_size,
    #_customize-input-header_tagline_font_size,
    #_customize-input-header_font_size,
    #_customize-input-navbar_font_size,
    #_customize-input-header_widget_menu_title_font_size,
    #_customize-input-header_widget_menu_font_size,    
    #_customize-input-left_sidebar_font_size,
    #_customize-input-left_sidebar_widget_menu_title_font_size,
    #_customize-input-left_sidebar_widget_menu_font_size,
    #_customize-input-right_sidebar_font_size,
    #_customize-input-right_sidebar_widget_menu_title_font_size,
    #_customize-input-right_sidebar_widget_menu_font_size,
    #_customize-input-preview_title_font_size,
    #_customize-input-preview_font_size,
    #_customize-input-preview_excerpt_length,
    #_customize-input-preview_duration_font_size,
    #_customize-input-preview_tags_label,
    #_customize-input-preview_tags_separator,
    #_customize-input-preview_tags_font_size,
    #_customize-input-preview_category_separator,
    #_customize-input-preview_category_font_size,
    #_customize-input-preview_performers_separator,
    #_customize-input-preview_performers_font_size,
    #_customize-input-preview_rating_font_size,
    #_customize-input-preview_view_count_font_size,
    #_customize-input-preview_avatar_size,
    #_customize-input-preview_fixed_height,
    #_customize-input-sticky_preview_label,
    #_customize-input-sticky_preview_label_font_size,
    #_customize-input-sticky_preview_title_font_size,
    #_customize-input-sticky_preview_font_size,
    #_customize-input-sticky_preview_duration_font_size,
    #_customize-input-sticky_preview_tags_label,
    #_customize-input-sticky_preview_tags_separator,
    #_customize-input-sticky_preview_tags_font_size,
    #_customize-input-sticky_preview_category_label,
    #_customize-input-sticky_preview_category_separator,
    #_customize-input-sticky_preview_category_font_size, 
    #_customize-input-sticky_preview_performers_separator,
    #_customize-input-sticky_preview_performers_font_size, 
    #_customize-input-sticky_preview_rating_font_size, 
    #_customize-input-sticky_preview_view_count_font_size, 
    #_customize-input-sticky_preview_avatar_size,
    #_customize-input-sticky_preview_fixed_height, 
    #_customize-input-comments_area_font_size,
    #_customize-input-comment_avatar_size,
    #_customize-input-comment_item_font_size,
    #_customize-input-comment_reply_font_size,
    #_customize-input-comment_form_input_font_size,
    #_customize-input-comment_submit_font_size,
    #_customize-input-pagination_prev_font_size,
    #_customize-input-pagination_current_font_size,
    #_customize-input-pagination_num_font_size,
    #_customize-input-pagination_num_per_side,
    #_customize-input-pagination_num_hover_font_size,
    #_customize-input-pagination_dots_font_size,
    #_customize-input-pagination_next_font_size,
    #_customize-input-footer_font_size,
    #_customize-input-footer_widget_menu_title_font_size,
    #_customize-input-footer_widget_menu_font_size,
    #_customize-input-post_page_title_font_size,
    #_customize-input-post_page_font_size,
    #_customize-input-post_page_blockquote_font_size,
    #_customize-input-post_page_tags_label,
    #_customize-input-post_page_tags_separator,
    #_customize-input-post_page_tags_font_size,
    #_customize-input-post_page_category_separator,
    #_customize-input-post_page_category_font_size,
    #_customize-input-post_page_performers_separator,
    #_customize-input-post_page_performers_font_size,
    #_customize-input-post_page_author_label,
    #_customize-input-post_page_avatar_size,
    #_customize-input-post_page_related_font_size,
    #_customize-input-post_page_related_num_results,
    #_customize-input-page_page_title_font_size,
    #_customize-input-page_page_font_size,
    #_customize-input-archive_page_title_font_size,
    #_customize-input-attachment_page_title_font_size,
    #_customize-input-attachment_page_font_size,
    #_customize-input-attachment_page_author_label,
    #_customize-input-attachment_page_avatar_size,
    #_customize-input-author_page_title_font_size,
    #_customize-input-author_page_font_size,
    #_customize-input-category_page_title_font_size,
    #_customize-input-tag_page_title_font_size,
    #_customize-input-taxonomy_page_title_font_size,
    #_customize-input-search_page_title_font_size,
    #_customize-input-search_page_font_size,
    #_customize-input-page_404_title_font_size,
    #_customize-input-page_404_font_size,
    #_customize-input-calendar_font_size
    {width:60px;}

    /* 80 px */
    #_customize-input-preview_category_label,
    #_customize-input-preview_performers_label,
    #_customize-input-sticky_preview_category_label,
    #_customize-input-sticky_preview_label,
    #_customize-input-post_page_category_label
    {width:80px;}

    /* 100 px */
    #_customize-input-preview_performers_label,
    #_customize-input-sticky_preview_performers_label,
    #_customize-input-post_page_performers_label ,
    #_customize-input-post_page_date_label,
    #_customize-input-attachment_page_date_label,
    #_customize-input-pagination_prev_label,
    #_customize-input-pagination_num_label,
    #_customize-input-pagination_num_hover_label,
    #_customize-input-pagination_dots_label,
    #_customize-input-pagination_next_label    
    {width:100px;}       
 
    /* 120 px */
    #_customize-input-post_page_related_label
    {width:120px;}  

    /* select drop-downs */
    .customize-control select
    {width:auto;max-width: 100%}

    /* separators */
    #customize-control-header_site_title_color,
    #customize-control-header_tagline_color,
    #customize-control-header_search_button_border_color,
    #customize-control-header_border_color,
    #customize-control-header_container_position,
    #customize-control-navbar_border_color,
    #customize-control-navbar_hover_border_color,
    #customize-control-navbar_current_border_color,
    #customize-control-header_widget_menu_title_txt_align,
    #customize-control-header_widget_menu_border_color,
    #customize-control-header_widget_menu_hover_border_color,
    #customize-control-header_widget_menu_current_border_color,
    #customize-control-content_border_color,
    #customize-control-content_background_image_attachment,
    #customize-control-left_sidebar_border_color,
    #customize-control-left_sidebar_background_image_attachment,
    #customize-control-left_sidebar_widget_menu_title_txt_align,
    #customize-control-left_sidebar_widget_menu_border_color,
    #customize-control-left_sidebar_widget_menu_hover_border_color,
    #customize-control-left_sidebar_widget_menu_current_border_color,
    #customize-control-right_sidebar_border_color,
    #customize-control-right_sidebar_background_image_attachment,
    #customize-control-right_sidebar_widget_menu_title_txt_align,
    #customize-control-right_sidebar_widget_menu_border_color,
    #customize-control-right_sidebar_widget_menu_hover_border_color,
    #customize-control-right_sidebar_widget_menu_current_border_color,
    #customize-control-preview_title_font_size_unit,
    #customize-control-preview_border_color,
    #customize-control-preview_excerpt_length,
    #customize-control-preview_featured_image_border_color,
    #customize-control-preview_duration_border_color,
    #customize-control-preview_post_date_txt_color,
    #customize-control-preview_tags_border_color,
    #customize-control-preview_category_border_color,
    #customize-control-preview_performers_border_color,
    #customize-control-preview_link_to_comments,
    #customize-control-preview_avatar_size,
    #customize-control-preview_rating_font_size_unit,
    #customize-control-preview_view_count_font_size_unit,
    #customize-control-preview_lg_class,
    #customize-control-preview_background_image_attachment,
    #customize-control-sticky_preview_label_font_size_unit,
    #customize-control-sticky_preview_title_font_size_unit,
    #customize-control-sticky_preview_border_color,
    #customize-control-sticky_preview_featured_image_border_color,
    #customize-control-sticky_preview_duration_border_color,
    #customize-control-sticky_preview_post_date_txt_color,
    #customize-control-sticky_preview_tags_border_color,
    #customize-control-sticky_preview_category_border_color,
    #customize-control-sticky_preview_performers_border_color,
    #customize-control-sticky_preview_link_to_comments,
    #customize-control-sticky_preview_avatar_size,
    #customize-control-sticky_preview_rating_font_size_unit,
    #customize-control-sticky_preview_view_count_font_size_unit,    
    #customize-control-sticky_preview_background_image_attachment,
    #customize-control-comments_area_border_color,
    #customize-control-comment_avatar_size,
    #customize-control-comment_item_border_color,
    #customize-control-comment_reply_border_color,
    #customize-control-comment_form_input_border_color,
    #customize-control-comment_submit_border_color,
    #customize-control-pagination_prev_border_color,
    #customize-control-pagination_current_border_color,
    #customize-control-pagination_num_border_color,
    #customize-control-pagination_num_hover_border_color,
    #customize-control-pagination_dots_border_color,
    #customize-control-pagination_next_border_color,
    #customize-control-footer_border_color,
    #customize-control-footer_container_position,
    #customize-control-footer_background_image_attachment,
    #customize-control-footer_widget_menu_title_txt_align,
    #customize-control-footer_widget_menu_border_color,
    #customize-control-footer_widget_menu_hover_border_color,
    #customize-control-footer_widget_menu_current_border_color,
    #customize-control-post_page_title_txt_color,
    #customize-control-post_page_border_color,
    #customize-control-post_page_featured_image_size,
    #customize-control-post_page_blockquote_border_color,
    #customize-control-post_page_hr_color,
    #customize-control-post_page_tags_border_color,
    #customize-control-post_page_category_border_color,
    #customize-control-post_page_performers_border_color,
    #customize-control-post_page_date_label,
    #customize-control-post_page_author_txt_color,
    #customize-control-post_page_related_num_results,
    #customize-control-page_page_title_txt_color,
    #customize-control-page_page_border_color,
    #customize-control-archive_page_title_txt_color,
    #customize-control-archive_page_monthly_list_link_color,
    #customize-control-attachment_page_title_txt_color,
    #customize-control-attachment_page_border_color,
    #customize-control-attachment_page_date_label,
    #customize-control-attachment_page_author_txt_color,
    #customize-control-author_page_title_txt_color,
    #customize-control-author_page_content_border_color,
    #customize-control-author_page_show_bio,
    #customize-control-search_page_title_txt_color,
    #customize-control-search_page_border_color,
    #customize-control-search_page_show_pages,
    #customize-control-page_404_title_txt_color,
    #customize-control-page_404_border_color
    {border-bottom:1px solid #999;padding-bottom:10px;position: relative;} 

    /* Offset bottom margins to lay transparent checkboxes closer to color picker */
    #customize-control-header_bg_color,
    #customize-control-navbar_bg_color,
    #customize-control-navbar_item_bg_color,
    #customize-control-navbar_hover_bg_color,
    #customize-control-navbar_current_bg_color,
    #customize-control-header_widget_menu_bg_color,
    #customize-control-header_widget_menu_item_bg_color,
    #customize-control-header_widget_menu_hover_bg_color,
    #customize-control-header_widget_menu_current_bg_color,
    #customize-control-content_bg_color,
    #customize-control-left_sidebar_bg_color,
    #customize-control-left_sidebar_widget_menu_bg_color,
    #customize-control-left_sidebar_widget_menu_item_bg_color,
    #customize-control-left_sidebar_widget_menu_hover_bg_color,
    #customize-control-left_sidebar_widget_menu_current_bg_color,
    #customize-control-right_sidebar_bg_color,
    #customize-control-right_sidebar_widget_menu_bg_color,
    #customize-control-right_sidebar_widget_menu_item_bg_color,
    #customize-control-right_sidebar_widget_menu_hover_bg_color,
    #customize-control-right_sidebar_widget_menu_current_bg_color,
    #customize-control-preview_bg_color,
    #customize-control-preview_duration_bg_color,
    #customize-control-preview_tags_bg_color,
    #customize-control-preview_category_bg_color,
    #customize-control-preview_performers_bg_color,
    #customize-control-sticky_preview_bg_color,
    #customize-control-sticky_preview_duration_bg_color,
    #customize-control-sticky_preview_tags_bg_color,
    #customize-control-sticky_preview_category_bg_color,
    #customize-control-sticky_preview_performers_bg_color,
    #customize-control-comments_area_bg_color,
    #customize-control-comment_item_bg_color,
    #customize-control-comment_reply_bg_color,
    #customize-control-pagination_prev_bg_color,
    #customize-control-pagination_current_bg_color,
    #customize-control-pagination_num_bg_color,
    #customize-control-pagination_num_hover_bg_color,
    #customize-control-pagination_dots_bg_color,
    #customize-control-pagination_next_bg_color,
    #customize-control-footer_bg_color,
    #customize-control-footer_widget_menu_bg_color,
    #customize-control-footer_widget_menu_item_bg_color,
    #customize-control-footer_widget_menu_hover_bg_color,
    #customize-control-footer_widget_menu_current_bg_color,
    #customize-control-post_page_bg_color,
    #customize-control-post_page_blockquote_bg_color,
    #customize-control-post_page_tags_bg_color,
    #customize-control-post_page_category_bg_color,
    #customize-control-post_page_performers_bg_color,
    #customize-control-page_page_bg_color,
    #customize-control-attachment_page_bg_color,
    #customize-control-author_page_content_bg_color,
    #customize-control-search_page_bg_color,
    #customize-control-page_404_bg_color
    {margin-bottom:-8px;position: relative;}

    </style>
<?php 
}

function tubeaceplay_transparent_switch(){
?>
    <script type="text/javascript">
    jQuery(document).ready(function ($) {

      function tubeaceplay_transparent_switch(picker, checkbox){

        var color_pkr = $( picker );

        /* on page load, hide or show adv. option */
        if( $( checkbox ).prop( "checked" ) ){
          color_pkr.hide();
        } else{
          color_pkr.show();
        }

        /* on change, hide or show adv. option */
        $( checkbox ).change(function(){
          if( $(this).prop("checked") ) {
            color_pkr.slideUp();
          } else {
            color_pkr.slideDown();
          }
        });
      }

      tubeaceplay_transparent_switch('#customize-control-header_bg_color', '#customize-control-header_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-navbar_bg_color', '#customize-control-navbar_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-navbar_item_bg_color', '#customize-control-navbar_item_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-navbar_hover_bg_color', '#customize-control-navbar_hover_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-navbar_current_bg_color', '#customize-control-navbar_current_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-header_widget_menu_bg_color', '#customize-control-header_widget_menu_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-header_widget_menu_item_bg_color', '#customize-control-header_widget_menu_item_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-header_widget_menu_hover_bg_color', '#customize-control-header_widget_menu_hover_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-header_widget_menu_current_bg_color', '#customize-control-header_widget_menu_current_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-content_bg_color', '#customize-control-content_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-left_sidebar_bg_color', '#customize-control-left_sidebar_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-left_sidebar_widget_menu_bg_color', '#customize-control-left_sidebar_widget_menu_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-left_sidebar_widget_menu_item_bg_color', '#customize-control-left_sidebar_widget_menu_item_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-left_sidebar_widget_menu_hover_bg_color', '#customize-control-left_sidebar_widget_menu_hover_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-left_sidebar_widget_menu_current_bg_color', '#customize-control-left_sidebar_widget_menu_current_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-right_sidebar_bg_color', '#customize-control-right_sidebar_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-right_sidebar_widget_menu_bg_color', '#customize-control-right_sidebar_widget_menu_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-right_sidebar_widget_menu_item_bg_color', '#customize-control-right_sidebar_widget_menu_item_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-right_sidebar_widget_menu_hover_bg_color', '#customize-control-right_sidebar_widget_menu_hover_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-right_sidebar_widget_menu_current_bg_color', '#customize-control-right_sidebar_widget_menu_current_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-preview_bg_color', '#customize-control-preview_transparent_bg input');  
      tubeaceplay_transparent_switch('#customize-control-preview_duration_bg_color', '#customize-control-preview_duration_transparent_bg input');  
      tubeaceplay_transparent_switch('#customize-control-preview_tags_bg_color', '#customize-control-preview_tags_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-preview_category_bg_color', '#customize-control-preview_category_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-preview_performers_bg_color', '#customize-control-preview_performers_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-sticky_preview_bg_color', '#customize-control-sticky_preview_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-sticky_preview_tags_bg_color', '#customize-control-sticky_preview_tags_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-sticky_preview_category_bg_color', '#customize-control-sticky_preview_category_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-sticky_preview_performers_bg_color', '#customize-control-sticky_preview_performers_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-comments_area_bg_color', '#customize-control-comments_area_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-comment_item_bg_color', '#customize-control-comment_item_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-comment_reply_bg_color', '#customize-control-comment_reply_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-pagination_prev_bg_color', '#customize-control-pagination_prev_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-pagination_current_bg_color', '#customize-control-pagination_current_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-pagination_num_bg_color', '#customize-control-pagination_num_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-pagination_num_hover_bg_color', '#customize-control-pagination_num_hover_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-pagination_dots_bg_color', '#customize-control-pagination_dots_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-pagination_next_bg_color', '#customize-control-pagination_next_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-footer_bg_color', '#customize-control-footer_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-footer_widget_menu_bg_color', '#customize-control-footer_widget_menu_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-footer_widget_menu_item_bg_color', '#customize-control-footer_widget_menu_item_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-footer_widget_menu_hover_bg_color', '#customize-control-footer_widget_menu_hover_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-footer_widget_menu_current_bg_color', '#customize-control-footer_widget_menu_current_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-post_page_bg_color', '#customize-control-post_page_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-post_page_blockquote_bg_color', '#customize-control-post_page_blockquote_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-post_page_tags_bg_color', '#customize-control-post_page_tags_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-post_page_category_bg_color', '#customize-control-post_page_category_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-post_page_performers_bg_color', '#customize-control-post_page_performers_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-page_page_bg_color', '#customize-control-page_page_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-attachment_page_bg_color', '#customize-control-attachment_page_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-author_page_content_bg_color', '#customize-control-author_page_content_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-search_page_bg_color', '#customize-control-search_page_transparent_bg input');
      tubeaceplay_transparent_switch('#customize-control-page_404_bg_color', '#customize-control-page_404_transparent_bg input');
    });
    </script>
<?php
}

class tubeaceplay_customizer {

    public static function header_output() {
      
        global $tubeaceplay_customizer_defaults;

        ?>
        <!--Customizer CSS--> 
        <style type="text/css">
            <?php require get_template_directory() . '/inc/customizer/customizer-css.php'; ?>
        </style> 
        <!--/Customizer CSS-->
        <?php
    }

   public static function live_preview() {

        global $tubeaceplay_customizer_defaults;

        wp_enqueue_script( 
            'tubeaceplay-themecustomizer', // Give the script a unique ID
            get_template_directory_uri() . '/js/theme-customizer.js', // Define the path to the JS file
            array(  'jquery', 'customize-preview' ), // Define dependencies
            '', // Define a version (optional) 
            true // Specify whether to put in footer (leave this true)
        );

        if( get_theme_mod('preview_layout_style', $tubeaceplay_customizer_defaults['preview_layout_style'])=='masonry'){
            wp_enqueue_script( 
                'tubeaceplay-themecustomizer-masonryfix', // Give the script a unique ID
                get_template_directory_uri() . '/js/theme-customizer-masonryfix.js', // Define the path to the JS file
                array(  'jquery', 'customize-preview' ), // Define dependencies
                '', // Define a version (optional) 
                true // Specify whether to put in footer (leave this true)
            );        
        }
    }

    public static function generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {

        global $tubeaceplay_customizer_defaults;

        $return = '';
        $mod = get_theme_mod( $mod_name, $tubeaceplay_customizer_defaults[$mod_name] );
        if (  $mod !='' ) {

            //wrap multi-word google fonts in double quotes
            if (strpos($mod, ' ') !== false && strpos($mod, ',') === false) {
                $mod = '"'.$mod.'"';
            }

            $return = "$selector { $style:$prefix$mod$postfix}";
            $return = html_entity_decode($return); //decode double quotes from web safe fonts
            echo $return;

        }
        return $return;
    }

    public static function font_css( $selector, $mod_name) {

        global $tubeaceplay_customizer_defaults;

        $mod = get_theme_mod($mod_name.'_size', $tubeaceplay_customizer_defaults[$mod_name.'_size']);
        $unit = get_theme_mod($mod_name.'_size_unit', $tubeaceplay_customizer_defaults[$mod_name.'_size_unit']); 
        if ( ! empty( $mod ) ) {

            echo "$selector { font-size:$mod$unit}";
        }
    }

    public static function transparent_css($selector) {

        echo "$selector { background-color:transparent}";
    }    

    public static function blockquote_css( $selector, $style, $mod_name) {

        $mod = get_theme_mod($mod_name);
        if ( ! empty( $mod ) ) {

            echo "$selector { $style:$mod !important}";
        }
    }
}

// Load customizer panels
add_action( 'customize_register', 'tubeaceplay_customize_register' );

// Output custom CSS within Customizer 
add_action( 'customize_controls_print_styles', 'tubeaceplay_customize_styles' );

// Output custom CSS to live site
add_action( 'wp_head' , array( 'tubeaceplay_customizer' , 'header_output' ),98 );

// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , array( 'tubeaceplay_customizer' , 'live_preview' ),98  );

// Output JS to hide color picker when transparent bg checked
add_action( 'customize_controls_print_footer_scripts', 'tubeaceplay_transparent_switch' );

?>
