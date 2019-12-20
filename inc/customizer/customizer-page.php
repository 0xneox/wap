<?php 
/**
 * Displays the customizer controls for the page pages.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('page_page_setting', array(
    'title'                 => __('Page: Page', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Title */
// Title Font Family
$wp_customize->add_setting('page_page_title_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['page_page_title_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('page_page_title_font_family', array(
    'label'                     => __('Title Font Family', 'tubeaceplay'),
    'section'                   => 'page_page_setting',
    'settings'                  => 'page_page_title_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Title Font Size
$wp_customize->add_setting('page_page_title_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['page_page_title_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('page_page_title_font_size', array(
    'label'                     => __('Title Font Size', 'tubeaceplay'),
    'section'                   => 'page_page_setting',
    'settings'                  => 'page_page_title_font_size',
    'type'                      => 'number',
));
// Title Font Size Unit
$wp_customize->add_setting('page_page_title_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['page_page_title_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('page_page_title_font_size_unit', array(
    'label'                     => __('Title Font Size Unit', 'tubeaceplay'),
    'section'                   => 'page_page_setting',
    'settings'                  => 'page_page_title_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Title Text Color
$wp_customize->add_setting( 'page_page_title_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['page_page_title_txt_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'page_page_title_txt_color', array(
        'label' => __( 'Title Text Color', 'tubeaceplay' ),
        'section' => 'page_page_setting',
        'settings' => 'page_page_title_txt_color',
    ) 
));

/* Main */
// Background Color
$wp_customize->add_setting( 'page_page_bg_color', array(
        'default' => $tubeaceplay_customizer_defaults['page_page_bg_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'page_page_bg_color', array(
        'label' => __( 'Background Color', 'tubeaceplay' ),
        'section' => 'page_page_setting',
        'settings' => 'page_page_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'page_page_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['page_page_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'page_page_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'page_page_setting',
    'settings'              => 'page_page_transparent_bg',
    'type'                  => 'checkbox',
));
// Font Family
$wp_customize->add_setting('page_page_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['page_page_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('page_page_font_family', array(
    'label'                     => __('Font Family', 'tubeaceplay'),
    'section'                   => 'page_page_setting',
    'settings'                  => 'page_page_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Font Size
$wp_customize->add_setting('page_page_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['page_page_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('page_page_font_size', array(
    'label'                     => __('Font Size', 'tubeaceplay'),
    'section'                   => 'page_page_setting',
    'settings'                  => 'page_page_font_size',
    'type'                      => 'number',
));
// Font Size Unit
$wp_customize->add_setting('page_page_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['page_page_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('page_page_font_size_unit', array(
    'label'                     => __('Font Size Unit', 'tubeaceplay'),
    'section'                   => 'page_page_setting',
    'settings'                  => 'page_page_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Text Color
$wp_customize->add_setting( 'page_page_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['page_page_txt_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'page_page_txt_color', array(
        'label' => __( 'Text Color', 'tubeaceplay' ),
        'section' => 'page_page_setting',
        'settings' => 'page_page_txt_color',
    ) 
)); 
// Link Color
$wp_customize->add_setting( 'page_page_link_color', array(
        'default' => $tubeaceplay_customizer_defaults['page_page_link_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'page_page_link_color', array(
        'label' => __( 'Link Color', 'tubeaceplay' ),
        'section' => 'page_page_setting',
        'settings' => 'page_page_link_color',
    ) 
));
// Border Color
$wp_customize->add_setting( 'page_page_border_color', array(
        'default' => $tubeaceplay_customizer_defaults['page_page_border_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'page_page_border_color', array(
        'label' => __( 'Border Color', 'tubeaceplay' ),
        'section' => 'page_page_setting',
        'settings' => 'page_page_border_color',
    ) 
)); 

/* CSS */
$wp_customize->add_setting( 'page_page_css', array(
    'default'               => $tubeaceplay_customizer_defaults['page_page_css'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_css',
));
$wp_customize->add_control( 'page_page_css', array(
    'label'                 => __('CSS', 'tubeaceplay'), 
    'section'               => 'page_page_setting',
    'settings'              => 'page_page_css',
    'type'                  => 'textarea',
));