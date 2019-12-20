<?php 
/**
 * Displays the customizer controls for the post previews.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('post_preview_setting', array(
    'title'                 => __('Post Preview', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Post Preview */
// Show Title
$wp_customize->add_setting( 'preview_show_title', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_show_title'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_show_title', array(
    'label'                 => __('Show Title', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_show_title',
    'type'                  => 'checkbox',
));
// Title Text Color
$wp_customize->add_setting( 'preview_title_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_title_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_title_txt_color',
    array(
        'label' => __( 'Title Text Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_title_txt_color',
    ) 
));
// Title Font Family
$wp_customize->add_setting('preview_title_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_title_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_title_font_family', array(
    'label'                     => __('Title Font Family', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_title_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Title Font Size
$wp_customize->add_setting('preview_title_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_title_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));
$wp_customize->add_control('preview_title_font_size', array(
    'label'                     => __('Title Font Size', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_title_font_size',
    'type'                      => 'number',
));
// Title Font Size Unit
$wp_customize->add_setting('preview_title_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_title_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));
$wp_customize->add_control('preview_title_font_size_unit', array(
    'label'                     => __('Title Font Size Unit', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_title_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));

/* Main */
// Background Color - color
$wp_customize->add_setting( 'preview_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_bg_color',
    array(
        'label' => __( 'Background Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'preview_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_transparent_bg',
    'type'                  => 'checkbox',
));
// Font Family
$wp_customize->add_setting('preview_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_font_family', array(
    'label'                     => __('Font Family', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Title Font Size
$wp_customize->add_setting('preview_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('preview_font_size', array(
    'label'                     => __('Font Size', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_font_size',
    'type'                      => 'number',
));
// Font Size Unit
$wp_customize->add_setting('preview_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_font_size_unit', array(
    'label'                     => __('Font Size Unit', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Text Color
$wp_customize->add_setting( 'preview_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_txt_color',
    array(
        'label' => __( 'Text Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_txt_color',
    ) 
));
// Link Color
$wp_customize->add_setting( 'preview_link_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_link_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_link_color',
    array(
        'label' => __( 'Link Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_link_color',
    ) 
)); 
// Border Color
$wp_customize->add_setting( 'preview_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_border_color',
    array(
        'label' => __( 'Border Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_border_color',
    ) 
));

/* Excerpt */
// Show Excerpt or Full Content
$wp_customize->add_setting('preview_excerpt_content', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_excerpt_content'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_excerpt_content', array(
    'label'                     => __('Show Excerpt or Full Content', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_excerpt_content',
    'type'                      => 'select',
    'choices'                   => array('excerpt'=>'Excerpt', 'content'=>'Full Content'),
));
// Excerpt Word Length
$wp_customize->add_setting('preview_excerpt_length', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_excerpt_length'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('preview_excerpt_length', array(
    'label'                     => __('Excerpt Word Length', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_excerpt_length',
    'type'                      => 'number',
));

/* Featured Image */
// Featured Image Size
$wp_customize->add_setting('preview_featured_image_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_featured_image_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_image',
));    
$wp_customize->add_control('preview_featured_image_size', array(
    'label'                     => __('Featured Image Size', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_featured_image_size',
    'type'                      => 'select',
    'choices'                   => array('thumbnail'=>'Thumbnail', 'medium'=>'Medium', 'large'=>'Large', 'full'=>'Full'),
));
// Featured Image Border Color
$wp_customize->add_setting( 'preview_featured_image_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_featured_image_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_featured_image_border_color',
    array(
        'label' => __( 'Featured Image Border Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_featured_image_border_color',
    ) 
));

/* Duration */
// Show Duration
$wp_customize->add_setting( 'preview_show_duration', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_show_duration'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_show_duration', array(
    'label'                 => __('Show Duration', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_show_duration',
    'type'                  => 'checkbox',
));

// Duration Background Color
$wp_customize->add_setting( 'preview_duration_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_duration_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_duration_bg_color',
    array(
        'label' => __( 'Duration Background Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_duration_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'preview_duration_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_duration_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_duration_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_duration_transparent_bg',
    'type'                  => 'checkbox',
));

// Duration Text Color
$wp_customize->add_setting( 'preview_duration_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_duration_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_duration_txt_color',
    array(
        'label' => __( 'Duration Text Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_duration_txt_color',
    ) 
));
// Duration Font Family
$wp_customize->add_setting('preview_duration_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_duration_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_duration_font_family', array(
    'label'                     => __('Duration Font Family', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_duration_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Duration Font Size
$wp_customize->add_setting('preview_duration_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_duration_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('preview_duration_font_size', array(
    'label'                     => __('Duration Font Size', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_duration_font_size',
    'type'                      => 'number',
));
// Duration Font Size Unit
$wp_customize->add_setting('preview_duration_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_duration_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_duration_font_size_unit', array(
    'label'                     => __('Duration Font Size Unit', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_duration_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));   
// Duration Border Color
$wp_customize->add_setting( 'preview_duration_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_duration_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_duration_border_color',
    array(
        'label' => __( 'Duration Border Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_duration_border_color',
    ) 
));

/* Date & Time */
// Show Post Date
$wp_customize->add_setting( 'preview_show_post_date', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_show_post_date'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_show_post_date', array(
    'label'                 => __('Show Post Date', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_show_post_date',
    'type'                  => 'checkbox',
));
// Show Post Time
$wp_customize->add_setting( 'preview_show_post_time', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_show_post_time'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_show_post_time', array(
    'label'                 => __('Show Post Time', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_show_post_time',
    'type'                  => 'checkbox',
));
// Date Text Color
$wp_customize->add_setting( 'preview_post_date_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_post_date_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_post_date_txt_color',
    array(
        'label' => __( 'Date Text Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_post_date_txt_color',
    ) 
));

/* Tags */
// Show Tags
$wp_customize->add_setting( 'preview_show_tags', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_show_tags'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_show_tags', array(
    'label'                 => __('Show Tags', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_show_tags',
    'type'                  => 'checkbox',
));
// Tags Label
$wp_customize->add_setting('preview_tags_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_tags_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('preview_tags_label', array(
    'label'                     => __('Tags Label', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_tags_label',
    'type'                      => 'text',
));
// Tags Separator
$wp_customize->add_setting('preview_tags_separator', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_tags_separator'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('preview_tags_separator', array(
    'label'                     => __('Tags Separator', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_tags_separator',
    'type'                      => 'text',
));
// Tags Label & Separator Color
$wp_customize->add_setting( 'preview_tags_label_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_tags_label_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_tags_label_color',
    array(
        'label' => __( 'Tags Label &amp; Separator Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_tags_label_color',
    ) 
));
// Tags Text Color
$wp_customize->add_setting( 'preview_tags_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_tags_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_tags_txt_color',
    array(
        'label' => __( 'Tags Text Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_tags_txt_color',
    ) 
));
// Tags Font Family
$wp_customize->add_setting('preview_tags_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_tags_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_tags_font_family', array(
    'label'                     => __('Tags Font Family', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_tags_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Tags Font Size
$wp_customize->add_setting('preview_tags_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_tags_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('preview_tags_font_size', array(
    'label'                     => __('Tags Font Size', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_tags_font_size',
    'type'                      => 'number',
));
// Tags Font Size Unit
$wp_customize->add_setting('preview_tags_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_tags_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_tags_font_size_unit', array(
    'label'                     => __('Tags Font Size Unit', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_tags_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));   
// Tags Background Color
$wp_customize->add_setting( 'preview_tags_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_tags_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_tags_bg_color',
    array(
        'label' => __( 'Tags Background Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_tags_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'preview_tags_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_tags_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_tags_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_tags_transparent_bg',
    'type'                  => 'checkbox',
));
// Tags Border Color
$wp_customize->add_setting( 'preview_tags_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_tags_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_tags_border_color',
    array(
        'label' => __( 'Tags Border Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_tags_border_color',
    ) 
));

/* Category */
// Show Category
$wp_customize->add_setting( 'preview_show_category', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_show_category'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_show_category', array(
    'label'                 => __('Show Category', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_show_category',
    'type'                  => 'checkbox',
));
// Category Label
$wp_customize->add_setting('preview_category_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_category_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('preview_category_label', array(
    'label'                     => __('Category Label', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_category_label',
    'type'                      => 'text',
));
// Category Separator
$wp_customize->add_setting('preview_category_separator', array(
    'default'                   =>$tubeaceplay_customizer_defaults['preview_category_separator'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('preview_category_separator', array(
    'label'                     => __('Category Separator', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_category_separator',
    'type'                      => 'text',
));
// Category Label & Separator Color
$wp_customize->add_setting( 'preview_category_label_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_category_label_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_category_label_color',
    array(
        'label' => __( 'Category Label &amp; Separator Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_category_label_color',
    ) 
));
// Category Text Color
$wp_customize->add_setting( 'preview_category_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_category_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_category_txt_color',
    array(
        'label' => __( 'Category Text Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_category_txt_color',
    ) 
));
// Category Font Family
$wp_customize->add_setting('preview_category_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_category_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_category_font_family', array(
    'label'                     => __('Category Font Family', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_category_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Category Font Size
$wp_customize->add_setting('preview_category_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_category_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('preview_category_font_size', array(
    'label'                     => __('Category Font Size', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_category_font_size',
    'type'                      => 'number',
));
// Category Font Size Unit
$wp_customize->add_setting('preview_category_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_category_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_category_font_size_unit', array(
    'label'                     => __('Category Font Size Unit', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_category_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));       
// Category Background Color
$wp_customize->add_setting( 'preview_category_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_category_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_category_bg_color',
    array(
        'label' => __( 'Category Background Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_category_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'preview_category_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_category_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_category_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_category_transparent_bg',
    'type'                  => 'checkbox',
));
// Category Border Color
$wp_customize->add_setting( 'preview_category_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_category_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_category_border_color',
    array(
        'label' => __( 'Category Border Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_category_border_color',
    ) 
));

/* Performers */
// Show Performers
$wp_customize->add_setting( 'preview_show_performers', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_show_performers'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_show_performers', array(
    'label'                 => __('Show Performers', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_show_performers',
    'type'                  => 'checkbox',
));
// Performers Label
$wp_customize->add_setting('preview_performers_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_performers_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('preview_performers_label', array(
    'label'                     => __('Performers Label', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_performers_label',
    'type'                      => 'text',
));
// Performers Separator
$wp_customize->add_setting('preview_performers_separator', array(
    'default'                   =>$tubeaceplay_customizer_defaults['preview_performers_separator'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('preview_performers_separator', array(
    'label'                     => __('Performers Separator', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_performers_separator',
    'type'                      => 'text',
));
// Performers Label & Separator Color
$wp_customize->add_setting( 'preview_performers_label_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_performers_label_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_performers_label_color',
    array(
        'label' => __( 'Performers Label &amp; Separator Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_performers_label_color',
    ) 
));
// Performers Text Color
$wp_customize->add_setting( 'preview_performers_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_performers_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_performers_txt_color',
    array(
        'label' => __( 'Performers Text Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_performers_txt_color',
    ) 
));
// Performers Font Family
$wp_customize->add_setting('preview_performers_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_performers_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_performers_font_family', array(
    'label'                     => __('Performers Font Family', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_performers_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Performers Font Size
$wp_customize->add_setting('preview_performers_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_performers_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('preview_performers_font_size', array(
    'label'                     => __('Performers Font Size', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_performers_font_size',
    'type'                      => 'number',
));
// Performers Font Size Unit
$wp_customize->add_setting('preview_performers_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_performers_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_performers_font_size_unit', array(
    'label'                     => __('Performers Font Size Unit', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_performers_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));       
// Performers Background Color
$wp_customize->add_setting( 'preview_performers_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_performers_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_performers_bg_color',
    array(
        'label' => __( 'Performers Background Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_performers_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'preview_performers_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_performers_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_performers_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_performers_transparent_bg',
    'type'                  => 'checkbox',
));
// Performers Border Color
$wp_customize->add_setting( 'preview_performers_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_performers_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_performers_border_color',
    array(
        'label' => __( 'Performers Border Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_performers_border_color',
    ) 
));

/* Comments */
// Show Number of Comments
$wp_customize->add_setting( 'preview_show_number_comments', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_show_number_comments'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_show_number_comments', array(
    'label'                 => __('Show Number of Comments', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_show_number_comments',
    'type'                  => 'checkbox',
));
// Link to Comments Section of Post
$wp_customize->add_setting( 'preview_link_to_comments', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_link_to_comments'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_link_to_comments', array(
    'label'                 => __('Link to Comments Section of Post', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_link_to_comments',
    'type'                  => 'checkbox',
));

/* Author */
// Show Author
$wp_customize->add_setting( 'preview_show_author', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_show_author'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_show_author', array(
    'label'                 => __('Show Author', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_show_author',
    'type'                  => 'checkbox',
));
// Show Author Avatar
$wp_customize->add_setting( 'preview_show_author_avatar', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_show_author_avatar'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_show_author_avatar', array(
    'label'                 => __('Show Author Avatar', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_show_author_avatar',
    'type'                  => 'checkbox',
));
// Link Author Name to Profile
$wp_customize->add_setting( 'preview_link_to_author', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_link_to_author'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_link_to_author', array(
    'label'                 => __('Link Author Name to Profile', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_link_to_author',
    'type'                  => 'checkbox',
));    
// Author Avatar Size 
$wp_customize->add_setting('preview_avatar_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_avatar_size'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('preview_avatar_size', array(
    'label'                     => __('Author Avatar Size (Pixels)', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_avatar_size',
    'type'                      => 'text',
));

/* Rating */
// Show Rating
$wp_customize->add_setting( 'preview_show_rating', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_show_rating'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_show_rating', array(
    'label'                 => __('Show Rating', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_show_rating',
    'type'                  => 'checkbox',
));
// Rating Text Color
$wp_customize->add_setting( 'preview_rating_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_rating_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_rating_txt_color',
    array(
        'label' => __( 'Rating Text Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_rating_txt_color',
    ) 
));
// Rating Font Family
$wp_customize->add_setting('preview_rating_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_rating_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_rating_font_family', array(
    'label'                     => __('Rating Font Family', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_rating_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Rating Font Size
$wp_customize->add_setting('preview_rating_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_rating_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('preview_rating_font_size', array(
    'label'                     => __('Rating Font Size', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_rating_font_size',
    'type'                      => 'number',
));
// Rating Font Size Unit
$wp_customize->add_setting('preview_rating_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_rating_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_rating_font_size_unit', array(
    'label'                     => __('Rating Font Size Unit', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_rating_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));   

/* View Count */
// Show View Count
$wp_customize->add_setting( 'preview_show_view_count', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_show_view_count'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'preview_show_view_count', array(
    'label'                 => __('Show View Count', 'tubeaceplay'),
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_show_view_count',
    'type'                  => 'checkbox',
));

// View Count Text Color
$wp_customize->add_setting( 'preview_view_count_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['preview_view_count_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'preview_view_count_txt_color',
    array(
        'label' => __( 'View Count Text Color', 'tubeaceplay' ),
        'section' => 'post_preview_setting',
        'settings' => 'preview_view_count_txt_color',
    ) 
));
// View Count Font Family
$wp_customize->add_setting('preview_view_count_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_view_count_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_view_count_font_family', array(
    'label'                     => __('View Count Font Family', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_view_count_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// View Count Font Size
$wp_customize->add_setting('preview_view_count_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_view_count_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('preview_view_count_font_size', array(
    'label'                     => __('View Count Font Size', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_view_count_font_size',
    'type'                      => 'number',
));
// View Count Font Size Unit
$wp_customize->add_setting('preview_view_count_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_view_count_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_view_count_font_size_unit', array(
    'label'                     => __('View Count Font Size Unit', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_view_count_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));   



/* Layout */
// Layout Style
$wp_customize->add_setting('preview_layout_style', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_layout_style'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('preview_layout_style', array(
    'label'                     => __('Layout Style', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_layout_style',
    'type'                      => 'select',
    'choices'                   => array('flexbox'=>'Flexbox (Equal heights per row)', 'masonry'=>'Masonry (Sorted by optimal vertical space)', 'fixed_height'=>'Fixed Height (Set height below)'),
));
// Fixed Height
$wp_customize->add_setting('preview_fixed_height', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_fixed_height'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('preview_fixed_height', array(
    'label'                     => __('Fixed Height', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_fixed_height',
    'type'                      => 'text',
));
// X-Small Devices
$wp_customize->add_setting('preview_xs_class', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_xs_class'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));
$wp_customize->add_control('preview_xs_class', array(
    'label'                     => __('X-Small Devices (&lt;768px) # of Columns', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_xs_class',
    'type'                      => 'select',
    'choices'                   => array('col-xs-12'=>'1', 'col-xs-6'=>'2'),
));
// Small Devices
$wp_customize->add_setting('preview_sm_class', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_sm_class'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));
$wp_customize->add_control('preview_sm_class', array(
    'label'                     => __('Small Devices (&ge;768px) # of Columns', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_sm_class',
    'type'                      => 'select',
    'choices'                   => array('col-sm-12'=>'1', 'col-sm-6'=>'2', 'col-sm-4'=>'3'),
));
// Medium Devices 
$wp_customize->add_setting('preview_md_class', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_md_class'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));
$wp_customize->add_control('preview_md_class', array(
    'label'                     => __('Medium Devices (&ge;992px) # of Columns', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_md_class',
    'type'                      => 'select',
    'choices'                   => array('col-md-12'=>'1', 'col-md-6'=>'2', 'col-md-4'=>'3', 'col-md-3'=>'4', 'col-md-2'=>'6'),
));    
// Large Devices
$wp_customize->add_setting('preview_lg_class', array(
    'default'                   => $tubeaceplay_customizer_defaults['preview_lg_class'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));
$wp_customize->add_control('preview_lg_class', array(
    'label'                     => __('Large Devices (&ge;1200px) # of Columns', 'tubeaceplay'),
    'section'                   => 'post_preview_setting',
    'settings'                  => 'preview_lg_class',
    'type'                      => 'select',
    'choices'                   => array('col-lg-12'=>'1', 'col-lg-6'=>'2', 'col-lg-4'=>'3', 'col-lg-3'=>'4', 'col-lg-2'=>'6'),
));

/* BG Image */
// Background Image
$wp_customize->add_setting(
    'preview_background_image',
    array(
        'default'      => $tubeaceplay_customizer_defaults['preview_background_image'],
        'sanitize_callback' => 'tubeaceplay_sanitize_image',
        'transport'    => 'postMessage'
    ) );
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'preview_background_image',
        array(
            'label'    => 'Background Image',
            'settings' => 'preview_background_image',
            'section'  => 'post_preview_setting'
    ) ) );
// Background Image Repeat
$wp_customize->add_setting(
'preview_background_image_repeat',
array(
    'default' => $tubeaceplay_customizer_defaults['preview_background_image_repeat'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'preview_background_image_repeat',
    array(
        'type' => 'radio',
        'label' => 'Background Image Repeat',
        'section' => 'post_preview_setting',
        'choices' => array(
            'no-repeat' => 'No Repeat',
            'repeat' => 'Repeat',
            'repeat-x' => 'Repeat Horizontally',
            'repeat-y' => 'Repeat Vertically',
         ),
    ));  
// Background Image Position
$wp_customize->add_setting(
'preview_background_image_position',
array(
    'default' => $tubeaceplay_customizer_defaults['preview_background_image_position'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'preview_background_image_position',
    array(
        'type' => 'radio',
        'label' => 'Background Image Position',
        'section' => 'post_preview_setting',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
            'right' => 'Right',
         ),
    ));  
// Background Image Attachment
$wp_customize->add_setting(
'preview_background_image_attachment',
array(
    'default' => $tubeaceplay_customizer_defaults['preview_background_image_attachment'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'preview_background_image_attachment',
    array(
        'type' => 'radio',
        'label' => 'Background Image Attachment',
        'section' => 'post_preview_setting',
        'choices' => array(
            'scroll' => 'Scroll',
            'fixed' => 'Fixed',
         ),
    ));

/* CSS */
$wp_customize->add_setting( 'preview_css', array(
    'default'               => $tubeaceplay_customizer_defaults['preview_css'],
    'sanitize_callback' => 'tubeaceplay_sanitize_css',
));
$wp_customize->add_control( 'preview_css', array(
    'label'                 => __('CSS', 'tubeaceplay'), 
    'section'               => 'post_preview_setting',
    'settings'              => 'preview_css',
    'type'                  => 'textarea',
));    