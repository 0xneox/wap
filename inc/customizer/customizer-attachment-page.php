<?php 
/**
 * Displays the customizer controls for the attachment page.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('attachment_page_setting', array(
    'title'                 => __('Page: Attachment', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Title */
// Title Font Family
$wp_customize->add_setting('attachment_page_title_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['attachment_page_title_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('attachment_page_title_font_family', array(
    'label'                     => __('Title Font Family', 'tubeaceplay'),
    'section'                   => 'attachment_page_setting',
    'settings'                  => 'attachment_page_title_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));    
// Title Font Size
$wp_customize->add_setting('attachment_page_title_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['attachment_page_title_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('attachment_page_title_font_size', array(
    'label'                     => __('Title Font Size', 'tubeaceplay'),
    'section'                   => 'attachment_page_setting',
    'settings'                  => 'attachment_page_title_font_size',
    'type'                      => 'number',
));
// Title Font Size Unit
$wp_customize->add_setting('attachment_page_title_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['attachment_page_title_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('attachment_page_title_font_size_unit', array(
    'label'                     => __('Title Font Size Unit', 'tubeaceplay'),
    'section'                   => 'attachment_page_setting',
    'settings'                  => 'attachment_page_title_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Title Text Color
$wp_customize->add_setting( 'attachment_page_title_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['attachment_page_title_txt_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    )
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'attachment_page_title_txt_color', array(
        'label' => __( 'Title Text Color', 'tubeaceplay' ),
        'section' => 'attachment_page_setting',
        'settings' => 'attachment_page_title_txt_color',
    ) 
));

/* Main */
// Background Color
$wp_customize->add_setting( 'attachment_page_bg_color', array(
        'default' => $tubeaceplay_customizer_defaults['attachment_page_bg_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'attachment_page_bg_color', array(
        'label' => __( 'Background Color', 'tubeaceplay' ),
        'section' => 'attachment_page_setting',
        'settings' => 'attachment_page_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'attachment_page_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['attachment_page_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'attachment_page_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'attachment_page_setting',
    'settings'              => 'attachment_page_transparent_bg',
    'type'                  => 'checkbox',
));
// Font Family
$wp_customize->add_setting('attachment_page_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['attachment_page_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('attachment_page_font_family', array(
    'label'                     => __('Font Family', 'tubeaceplay'),
    'section'                   => 'attachment_page_setting',
    'settings'                  => 'attachment_page_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Font Size
$wp_customize->add_setting('attachment_page_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['attachment_page_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('attachment_page_font_size', array(
    'label'                     => __('Font Size', 'tubeaceplay'),
    'section'                   => 'attachment_page_setting',
    'settings'                  => 'attachment_page_font_size',
    'type'                      => 'number',
));
// Font Size Unit
$wp_customize->add_setting('attachment_page_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['attachment_page_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('attachment_page_font_size_unit', array(
    'label'                     => __('Font Size Unit', 'tubeaceplay'),
    'section'                   => 'attachment_page_setting',
    'settings'                  => 'attachment_page_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Text Color
$wp_customize->add_setting( 'attachment_page_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['attachment_page_txt_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'attachment_page_txt_color', array(
        'label' => __( 'Text Color', 'tubeaceplay' ),
        'section' => 'attachment_page_setting',
        'settings' => 'attachment_page_txt_color',
    ) 
)); 
// Link Color
$wp_customize->add_setting( 'attachment_page_link_color', array(
        'default' => $tubeaceplay_customizer_defaults['attachment_page_link_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'attachment_page_link_color', array(
        'label' => __( 'Link Color', 'tubeaceplay' ),
        'section' => 'attachment_page_setting',
        'settings' => 'attachment_page_link_color',
    ) 
)); 
// Border Color
$wp_customize->add_setting( 'attachment_page_border_color', array(
        'default' => $tubeaceplay_customizer_defaults['attachment_page_border_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'attachment_page_border_color',
    array(
        'label' => __( 'Border Color', 'tubeaceplay' ),
        'section' => 'attachment_page_setting',
        'settings' => 'attachment_page_border_color',
    ) 
)); 

/* Date & Time */
// Show Post Date
$wp_customize->add_setting( 'attachment_page_show_post_date', array(
    'default'               => $tubeaceplay_customizer_defaults['attachment_page_show_post_date'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'attachment_page_show_post_date', array(
    'label'                 => __('Show Post Date', 'tubeaceplay'),
    'section'               => 'attachment_page_setting',
    'settings'              => 'attachment_page_show_post_date',
    'type'                  => 'checkbox',
));
// Show Post Time
$wp_customize->add_setting( 'attachment_page_show_post_time', array(
    'default'               => $tubeaceplay_customizer_defaults['attachment_page_show_post_time'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'attachment_page_show_post_time', array(
    'label'                 => __('Show Post Time', 'tubeaceplay'),
    'section'               => 'attachment_page_setting',
    'settings'              => 'attachment_page_show_post_time',
    'type'                  => 'checkbox',
));
// Date Text Color
$wp_customize->add_setting( 'attachment_page_date_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['attachment_page_date_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'attachment_page_date_txt_color', array(
        'label' => __( 'Date / Time Text Color', 'tubeaceplay' ),
        'section' => 'attachment_page_setting',
        'settings' => 'attachment_page_date_txt_color',
    ) 
));
// Date & Time Label
$wp_customize->add_setting('attachment_page_date_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['attachment_page_date_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('attachment_page_date_label', array(
    'label'                     => __('Date / Time Label', 'tubeaceplay'),
    'section'                   => 'attachment_page_setting',
    'settings'                  => 'attachment_page_date_label',
    'type'                      => 'text',
));

/* Author */
// Show Author
$wp_customize->add_setting( 'attachment_page_show_author', array(
    'default'               => $tubeaceplay_customizer_defaults['attachment_page_show_author'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'attachment_page_show_author', array(
    'label'                 => __('Show Author', 'tubeaceplay'),
    'section'               => 'attachment_page_setting',
    'settings'              => 'attachment_page_show_author',
    'type'                  => 'checkbox',
));
// Author Label
$wp_customize->add_setting('attachment_page_author_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['attachment_page_author_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('attachment_page_author_label', array(
    'label'                     => __('Author Label', 'tubeaceplay'),
    'section'                   => 'attachment_page_setting',
    'settings'                  => 'attachment_page_author_label',
    'type'                      => 'text',
));
// Show Author Avatar
$wp_customize->add_setting( 'attachment_page_show_author_avatar', array(
    'default'               => $tubeaceplay_customizer_defaults['attachment_page_show_author_avatar'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'attachment_page_show_author_avatar', array(
    'label'                 => __('Show Author Avatar', 'tubeaceplay'),
    'section'               => 'attachment_page_setting',
    'settings'              => 'attachment_page_show_author_avatar',
    'type'                  => 'checkbox',
));
// Link Author Name to Profile
$wp_customize->add_setting( 'attachment_page_link_to_author', array(
    'default'               => $tubeaceplay_customizer_defaults['attachment_page_link_to_author'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'attachment_page_link_to_author', array(
    'label'                 => __('Link Author Name to Profile', 'tubeaceplay'),
    'section'               => 'attachment_page_setting',
    'settings'              => 'attachment_page_link_to_author',
    'type'                  => 'checkbox',
));    
// Author Avatar Size 
$wp_customize->add_setting('attachment_page_avatar_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['attachment_page_avatar_size'],
    'sanitize_callback' => 'tubeaceplay_sanitize_integer',
));
$wp_customize->add_control('attachment_page_avatar_size', array(
    'label'                     => __('Author Avatar Size (Pixels)', 'tubeaceplay'),
    'section'                   => 'attachment_page_setting',
    'settings'                  => 'attachment_page_avatar_size',
    'type'                      => 'number',
));
// Author Name Color
$wp_customize->add_setting( 'attachment_page_author_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['attachment_page_author_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'attachment_page_author_txt_color', array(
        'label' => __( 'Author Name Color', 'tubeaceplay' ),
        'section' => 'attachment_page_setting',
        'settings' => 'attachment_page_author_txt_color',
    ) 
));

/* CSS */
$wp_customize->add_setting( 'attachment_page_css', array(
    'default'               => $tubeaceplay_customizer_defaults['attachment_page_css'],
    'sanitize_callback' => 'tubeaceplay_sanitize_css'
));
$wp_customize->add_control( 'attachment_page_css', array(
    'label'                 => __('CSS', 'tubeaceplay'), 
    'section'               => 'attachment_page_setting',
    'settings'              => 'attachment_page_css',
    'type'                  => 'textarea',
));