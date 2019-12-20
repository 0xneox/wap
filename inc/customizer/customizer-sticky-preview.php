<?php 
/**
 * Displays the customizer controls for the sticky post previews.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('sticky_post_preview_setting', array(
    'title'                 => __('Sticky Post Preview', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Sticky Label */
// Show Sticky Label
$wp_customize->add_setting( 'sticky_preview_show_label', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_show_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_show_label', array(
    'label'                 => __('Show Sticky Label', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_show_label',
    'type'                  => 'checkbox',
));
// Sticky Label
$wp_customize->add_setting('sticky_preview_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('sticky_preview_label', array(
    'label'                     => __('Sticky Label', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_label',
    'type'                      => 'text',
));
// Sticky Label Text Color
$wp_customize->add_setting( 'sticky_preview_label_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_label_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_label_txt_color',
    array(
        'label' => __( 'Sticky Label Text Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_label_txt_color',
    ) 
));
// Sticky Label Background Color
$wp_customize->add_setting( 'sticky_preview_label_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_label_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_label_bg_color',
    array(
        'label' => __( 'Sticky Label Background Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_label_bg_color',
    ) 
));
// Sticky Label Font Family
$wp_customize->add_setting('sticky_preview_label_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_label_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_label_font_family', array(
    'label'                     => __('Sticky Label Font Family', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_label_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Sticky Label Font Size
$wp_customize->add_setting('sticky_preview_label_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_label_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('sticky_preview_label_font_size', array(
    'label'                     => __('Sticky Label Font Size', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_label_font_size',
    'type'                      => 'number',
));
// Sticky Label Font Size Unit
$wp_customize->add_setting('sticky_preview_label_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_label_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_label_font_size_unit', array(
    'label'                     => __('Sticky Label Font Size Unit', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_label_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));    

/* Title */
// Show Title
$wp_customize->add_setting( 'sticky_preview_show_title', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_show_title'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_show_title', array(
    'label'                 => __('Show Title', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_show_title',
    'type'                  => 'checkbox',
));
// Title Text Color
$wp_customize->add_setting( 'sticky_preview_title_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_title_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_title_txt_color',
    array(
        'label' => __( 'Title Text Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_title_txt_color',
    ) 
));
// Title Font Family
$wp_customize->add_setting('sticky_preview_title_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_title_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_title_font_family', array(
    'label'                     => __('Title Font Family', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_title_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Title Font Size
$wp_customize->add_setting('sticky_preview_title_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_title_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('sticky_preview_title_font_size', array(
    'label'                     => __('Title Font Size', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_title_font_size',
    'type'                      => 'number',
));
// Title Font Size Unit
$wp_customize->add_setting('sticky_preview_title_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_title_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_title_font_size_unit', array(
    'label'                     => __('Title Font Size Unit', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_title_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));

/* Main */
// Background Color
$wp_customize->add_setting( 'sticky_preview_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_bg_color',
    array(
        'label' => __( 'Background Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'sticky_preview_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_integer',
));
$wp_customize->add_control( 'sticky_preview_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_transparent_bg',
    'type'                  => 'checkbox',
));
// Font Family
$wp_customize->add_setting('sticky_preview_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_font_family', array(
    'label'                     => __('Font Family', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Font Size
$wp_customize->add_setting('sticky_preview_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('sticky_preview_font_size', array(
    'label'                     => __('Font Size', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_font_size',
    'type'                      => 'number',
));
// Font Size Unit
$wp_customize->add_setting('sticky_preview_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_font_size_unit', array(
    'label'                     => __('Font Size Unit', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Text Color
$wp_customize->add_setting( 'sticky_preview_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_txt_color',
    array(
        'label' => __( 'Text Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_txt_color',
    ) 
));
// Link Color
$wp_customize->add_setting( 'sticky_preview_link_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_link_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_link_color',
    array(
        'label' => __( 'Link Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_link_color',
    ) 
)); 
// Border Color
$wp_customize->add_setting( 'sticky_preview_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_border_color',
    array(
        'label' => __( 'Border Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_border_color',
    ) 
));

/* Featured Image */
// Featured Image Size
$wp_customize->add_setting('sticky_preview_featured_image_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_featured_image_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_image',
));    
$wp_customize->add_control('sticky_preview_featured_image_size', array(
    'label'                     => __('Featured Image Size', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_featured_image_size',
    'type'                      => 'select',
    'choices'                   => array('thumbnail'=>'Thumbnail', 'medium'=>'Medium', 'large'=>'Large', 'full'=>'Full'),
));
// Featured Image Border Color
$wp_customize->add_setting( 'sticky_preview_featured_image_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_featured_image_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_featured_image_border_color',
    array(
        'label' => __( 'Featured Image Border Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_featured_image_border_color',
    ) 
));

/* Duration */
// Show Duration
$wp_customize->add_setting( 'sticky_preview_show_duration', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_show_duration'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_show_duration', array(
    'label'                 => __('Show Duration', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_show_duration',
    'type'                  => 'checkbox',
));

// Duration Background Color
$wp_customize->add_setting( 'sticky_preview_duration_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_duration_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_duration_bg_color',
    array(
        'label' => __( 'Duration Background Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_duration_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'sticky_preview_duration_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_duration_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_duration_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_duration_transparent_bg',
    'type'                  => 'checkbox',
));

// Duration Text Color
$wp_customize->add_setting( 'sticky_preview_duration_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_duration_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_duration_txt_color',
    array(
        'label' => __( 'Duration Text Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_duration_txt_color',
    ) 
));
// Duration Font Family
$wp_customize->add_setting('sticky_preview_duration_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_duration_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_duration_font_family', array(
    'label'                     => __('Duration Font Family', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_duration_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Duration Font Size
$wp_customize->add_setting('sticky_preview_duration_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_duration_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('sticky_preview_duration_font_size', array(
    'label'                     => __('Duration Font Size', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_duration_font_size',
    'type'                      => 'number',
));
// Duration Font Size Unit
$wp_customize->add_setting('sticky_preview_duration_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_duration_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_duration_font_size_unit', array(
    'label'                     => __('Duration Font Size Unit', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_duration_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));   
// Duration Border Color
$wp_customize->add_setting( 'sticky_preview_duration_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_duration_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_duration_border_color',
    array(
        'label' => __( 'Duration Border Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_duration_border_color',
    ) 
));


/* Date & Time */
// Show Post Date
$wp_customize->add_setting( 'sticky_preview_show_post_date', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_show_post_date'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_show_post_date', array(
    'label'                 => __('Show Post Date', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_show_post_date',
    'type'                  => 'checkbox',
));
// Show Post Time
$wp_customize->add_setting( 'sticky_preview_show_post_time', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_show_post_time'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_show_post_time', array(
    'label'                 => __('Show Post Time', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_show_post_time',
    'type'                  => 'checkbox',
));
// Date Text Color
$wp_customize->add_setting( 'sticky_preview_post_date_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_post_date_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_post_date_txt_color',
    array(
        'label' => __( 'Date Text Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_post_date_txt_color',
    ) 
));

/* Tags */
// Show Tags
$wp_customize->add_setting( 'sticky_preview_show_tags', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_show_tags'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_show_tags', array(
    'label'                 => __('Show Tags', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_show_tags',
    'type'                  => 'checkbox',
));
// Tags Label
$wp_customize->add_setting('sticky_preview_tags_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_tags_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('sticky_preview_tags_label', array(
    'label'                     => __('Tags Label', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_tags_label',
    'type'                      => 'text',
));
// Tags Separator
$wp_customize->add_setting('sticky_preview_tags_separator', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_tags_separator'],
    'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
));
$wp_customize->add_control('sticky_preview_tags_separator', array(
    'label'                     => __('Tags Separator', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_tags_separator',
    'type'                      => 'text',
));
// Tags Label & Separator Color
$wp_customize->add_setting( 'sticky_preview_tags_label_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_tags_label_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_tags_label_color',
    array(
        'label' => __( 'Tags Label &amp; Separator Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_tags_label_color',
    ) 
));
// Tags Text Color
$wp_customize->add_setting( 'sticky_preview_tags_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_tags_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_tags_txt_color',
    array(
        'label' => __( 'Tags Text Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_tags_txt_color',
    ) 
));
// Tags Font Family
$wp_customize->add_setting('sticky_preview_tags_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_tags_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_tags_font_family', array(
    'label'                     => __('Tags Font Family', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_tags_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Tags Font Size
$wp_customize->add_setting('sticky_preview_tags_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_tags_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('sticky_preview_tags_font_size', array(
    'label'                     => __('Tags Font Size', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_tags_font_size',
    'type'                      => 'number',
));
// Tags Font Size Unit
$wp_customize->add_setting('sticky_preview_tags_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_tags_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_tags_font_size_unit', array(
    'label'                     => __('Tags Font Size Unit', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_tags_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Tags Background Color
$wp_customize->add_setting( 'sticky_preview_tags_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_tags_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_tags_bg_color',
    array(
        'label' => __( 'Tags Background Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_tags_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'sticky_preview_tags_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_tags_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_tags_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_tags_transparent_bg',
    'type'                  => 'checkbox',
));
// Tags Border Color
$wp_customize->add_setting( 'sticky_preview_tags_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_tags_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_tags_border_color',
    array(
        'label' => __( 'Tags Border Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_tags_border_color',
    ) 
));

/* Category */
// Show Category
$wp_customize->add_setting( 'sticky_preview_show_category', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_show_category'],
    'sanitize_callback' => 'tubeaceplay_sanitize_integer',
));
$wp_customize->add_control( 'sticky_preview_show_category', array(
    'label'                 => __('Show Category', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_show_category',
    'type'                  => 'checkbox',
));
// Category Label
$wp_customize->add_setting('sticky_preview_category_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_category_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('sticky_preview_category_label', array(
    'label'                     => __('Category Label', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_category_label',
    'type'                      => 'text',
));
// Category Separator
$wp_customize->add_setting('sticky_preview_category_separator', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_category_separator'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml', 
));
$wp_customize->add_control('sticky_preview_category_separator', array(
    'label'                     => __('Category Separator', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_category_separator',
    'type'                      => 'text',
));
// Category Label & Separator Color
$wp_customize->add_setting( 'sticky_preview_category_label_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_category_label_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_category_label_color',
    array(
        'label' => __( 'Category Label &amp; Separator Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_category_label_color',
    ) 
));
// Category Text Color
$wp_customize->add_setting( 'sticky_preview_category_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_category_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_category_txt_color',
    array(
        'label' => __( 'Category Text Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_category_txt_color',
    ) 
));
// Category Font Family
$wp_customize->add_setting('sticky_preview_category_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_category_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_category_font_family', array(
    'label'                     => __('Category Font Family', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_category_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Category Font Size
$wp_customize->add_setting('sticky_preview_category_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_category_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('sticky_preview_category_font_size', array(
    'label'                     => __('Category Font Size', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_category_font_size',
    'type'                      => 'number',
));
// Category Font Size Unit
$wp_customize->add_setting('sticky_preview_category_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_category_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_category_font_size_unit', array(
    'label'                     => __('Category Font Size Unit', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_category_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));       
// Category Background Color
$wp_customize->add_setting( 'sticky_preview_category_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_category_bg_color'],
        'sanitize_callback' => 'esc_html',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_category_bg_color',
    array(
        'label' => __( 'Category Background Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_category_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'sticky_preview_category_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_category_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_integer',
));
$wp_customize->add_control( 'sticky_preview_category_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_category_transparent_bg',
    'type'                  => 'checkbox',
));
// Category Border Color
$wp_customize->add_setting( 'sticky_preview_category_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_category_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_category_border_color',
    array(
        'label' => __( 'Category Border Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_category_border_color',
    ) 
));

/* Performers */
// Show Performers
$wp_customize->add_setting( 'sticky_preview_show_performers', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_show_performers'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_show_performers', array(
    'label'                 => __('Show Performers', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_show_performers',
    'type'                  => 'checkbox',
));
// Performers Label
$wp_customize->add_setting('sticky_preview_performers_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_performers_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('sticky_preview_performers_label', array(
    'label'                     => __('Performers Label', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_performers_label',
    'type'                      => 'text',
));
// Performers Separator
$wp_customize->add_setting('sticky_preview_performers_separator', array(
    'default'                   =>$tubeaceplay_customizer_defaults['sticky_preview_performers_separator'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('sticky_preview_performers_separator', array(
    'label'                     => __('Performers Separator', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_performers_separator',
    'type'                      => 'text',
));
// Performers Label & Separator Color
$wp_customize->add_setting( 'sticky_preview_performers_label_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_performers_label_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_performers_label_color',
    array(
        'label' => __( 'Performers Label &amp; Separator Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_performers_label_color',
    ) 
));
// Performers Text Color
$wp_customize->add_setting( 'sticky_preview_performers_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_performers_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_performers_txt_color',
    array(
        'label' => __( 'Performers Text Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_performers_txt_color',
    ) 
));
// Performers Font Family
$wp_customize->add_setting('sticky_preview_performers_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_performers_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_performers_font_family', array(
    'label'                     => __('Performers Font Family', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_performers_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Performers Font Size
$wp_customize->add_setting('sticky_preview_performers_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_performers_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('sticky_preview_performers_font_size', array(
    'label'                     => __('Performers Font Size', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_performers_font_size',
    'type'                      => 'number',
));
// Performers Font Size Unit
$wp_customize->add_setting('sticky_preview_performers_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_performers_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_performers_font_size_unit', array(
    'label'                     => __('Performers Font Size Unit', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_performers_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));       
// Performers Background Color
$wp_customize->add_setting( 'sticky_preview_performers_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_performers_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_performers_bg_color',
    array(
        'label' => __( 'Performers Background Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_performers_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'sticky_preview_performers_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_performers_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_performers_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_performers_transparent_bg',
    'type'                  => 'checkbox',
));
// Performers Border Color
$wp_customize->add_setting( 'sticky_preview_performers_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_performers_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_performers_border_color',
    array(
        'label' => __( 'Performers Border Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_performers_border_color',
    ) 
));


/* Comments */
// Show Number of Comments
$wp_customize->add_setting( 'sticky_preview_show_number_comments', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_show_number_comments'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_show_number_comments', array(
    'label'                 => __('Show Number of Comments', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_show_number_comments',
    'type'                  => 'checkbox',
));
// Link to Comments Section of Post
$wp_customize->add_setting( 'sticky_preview_link_to_comments', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_link_to_comments'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_link_to_comments', array(
    'label'                 => __('Link to Comments Section of Post', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_link_to_comments',
    'type'                  => 'checkbox',
));

/* Author */
// Show Author
$wp_customize->add_setting( 'sticky_preview_show_author', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_show_author'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_show_author', array(
    'label'                 => __('Show Author', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_show_author',
    'type'                  => 'checkbox',
));
// Show Author Avatar
$wp_customize->add_setting( 'sticky_preview_show_author_avatar', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_show_author_avatar'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_show_author_avatar', array(
    'label'                 => __('Show Author Avatar', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_show_author_avatar',
    'type'                  => 'checkbox',
));
// Link Author Name to Profile
$wp_customize->add_setting( 'sticky_preview_link_to_author', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_link_to_author'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_link_to_author', array(
    'label'                 => __('Link Author Name to Profile', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_link_to_author',
    'type'                  => 'checkbox',
));    
// Author Avatar Size 
$wp_customize->add_setting('sticky_preview_avatar_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_avatar_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));
$wp_customize->add_control('sticky_preview_avatar_size', array(
    'label'                     => __('Author Avatar Size (Pixels)', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_avatar_size',
    'type'                      => 'number',
));


/* Rating */
// Show Rating
$wp_customize->add_setting( 'sticky_preview_show_rating', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_show_rating'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_show_rating', array(
    'label'                 => __('Show Rating', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_show_rating',
    'type'                  => 'checkbox',
));
// Rating Text Color
$wp_customize->add_setting( 'sticky_preview_rating_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_rating_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_rating_txt_color',
    array(
        'label' => __( 'Rating Text Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_rating_txt_color',
    ) 
));
// Rating Font Family
$wp_customize->add_setting('sticky_preview_rating_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_rating_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_rating_font_family', array(
    'label'                     => __('Rating Font Family', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_rating_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Rating Font Size
$wp_customize->add_setting('sticky_preview_rating_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_rating_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('sticky_preview_rating_font_size', array(
    'label'                     => __('Rating Font Size', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_rating_font_size',
    'type'                      => 'number',
));
// Rating Font Size Unit
$wp_customize->add_setting('sticky_preview_rating_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_rating_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_rating_font_size_unit', array(
    'label'                     => __('Rating Font Size Unit', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_rating_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));   

/* View Count */
// Show View Count
$wp_customize->add_setting( 'sticky_preview_show_view_count', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_show_view_count'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'sticky_preview_show_view_count', array(
    'label'                 => __('Show View Count', 'tubeaceplay'),
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_show_view_count',
    'type'                  => 'checkbox',
));

// View Count Text Color
$wp_customize->add_setting( 'sticky_preview_view_count_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['sticky_preview_view_count_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'sticky_preview_view_count_txt_color',
    array(
        'label' => __( 'View Count Text Color', 'tubeaceplay' ),
        'section' => 'sticky_post_preview_setting',
        'settings' => 'sticky_preview_view_count_txt_color',
    ) 
));
// View Count Font Family
$wp_customize->add_setting('sticky_preview_view_count_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_view_count_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_view_count_font_family', array(
    'label'                     => __('View Count Font Family', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_view_count_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// View Count Font Size
$wp_customize->add_setting('sticky_preview_view_count_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_view_count_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('sticky_preview_view_count_font_size', array(
    'label'                     => __('View Count Font Size', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_view_count_font_size',
    'type'                      => 'number',
));
// View Count Font Size Unit
$wp_customize->add_setting('sticky_preview_view_count_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['sticky_preview_view_count_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('sticky_preview_view_count_font_size_unit', array(
    'label'                     => __('View Count Font Size Unit', 'tubeaceplay'),
    'section'                   => 'sticky_post_preview_setting',
    'settings'                  => 'sticky_preview_view_count_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));  


/* BG Image */
// Background Image
$wp_customize->add_setting(
    'sticky_preview_background_image',
    array(
        'default'      => $tubeaceplay_customizer_defaults['sticky_preview_background_image'],
        'sanitize_callback' => 'tubeaceplay_sanitize_image',
        'transport'    => 'postMessage'
    ) );
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'sticky_preview_background_image',
        array(
            'label'    => 'Background Image',
            'settings' => 'sticky_preview_background_image',
            'section'  => 'sticky_post_preview_setting'
    ) ) );
// Background Image Repeat
$wp_customize->add_setting(
'sticky_preview_background_image_repeat',
array(
    'default' => $tubeaceplay_customizer_defaults['sticky_preview_background_image_repeat'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'sticky_preview_background_image_repeat',
    array(
        'type' => 'radio',
        'label' => 'Background Image Repeat',
        'section' => 'sticky_post_preview_setting',
        'choices' => array(
            'no-repeat' => 'No Repeat',
            'repeat' => 'Repeat',
            'repeat-x' => 'Repeat Horizontally',
            'repeat-y' => 'Repeat Vertically',
         ),
    ));  
// Background Image Position
$wp_customize->add_setting(
'sticky_preview_background_image_position',
array(
    'default' => $tubeaceplay_customizer_defaults['sticky_preview_background_image_position'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'sticky_preview_background_image_position',
    array(
        'type' => 'radio',
        'label' => 'Background Image Position',
        'section' => 'sticky_post_preview_setting',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
            'right' => 'Right',
         ),
    ));  
// Background Image Attachment
$wp_customize->add_setting(
'sticky_preview_background_image_attachment',
array(
    'default' => $tubeaceplay_customizer_defaults['sticky_preview_background_image_attachment'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'sticky_preview_background_image_attachment',
    array(
        'type' => 'radio',
        'label' => 'Background Image Attachment',
        'section' => 'sticky_post_preview_setting',
        'choices' => array(
            'scroll' => 'Scroll',
            'fixed' => 'Fixed',
         ),
    ));

/* CSS */
$wp_customize->add_setting( 'sticky_preview_css', array(
    'default'               => $tubeaceplay_customizer_defaults['sticky_preview_css'],
    'sanitize_callback' => 'tubeaceplay_sanitize_css'
));
$wp_customize->add_control( 'sticky_preview_css', array(
    'label'                 => __('CSS', 'tubeaceplay'), 
    'section'               => 'sticky_post_preview_setting',
    'settings'              => 'sticky_preview_css',
    'type'                  => 'textarea',
));