<?php 
/**
 * Displays the customizer controls for the navbar.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('custom_navbar_setting', array(
    'title'                 => __('Navigation Bar', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

// Show Navbar
$wp_customize->add_setting( 'navbar_show', array(
    'default'               => $tubeaceplay_customizer_defaults['navbar_show'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox'
));
$wp_customize->add_control( 'navbar_show', array(
    'label'                 => __('Show Navbar', 'tubeaceplay'),
    'section'               => 'custom_navbar_setting',
    'settings'              => 'navbar_show',
    'type'                  => 'checkbox',
));
// Background Color - color
$wp_customize->add_setting( 'navbar_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['navbar_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'navbar_bg_color',
    array(
        'label' => __( 'Background Color', 'tubeaceplay' ),
        'section' => 'custom_navbar_setting',
        'settings' => 'navbar_bg_color',
    ) 
));
// Background Transparent BG
$wp_customize->add_setting( 'navbar_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['navbar_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox'
));
$wp_customize->add_control( 'navbar_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'custom_navbar_setting',
    'settings'              => 'navbar_transparent_bg',
    'type'                  => 'checkbox',
));
// Item Background Color - color
$wp_customize->add_setting( 'navbar_item_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['navbar_item_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'navbar_item_bg_color',
    array(
        'label' => __( 'Item Background Color', 'tubeaceplay' ),
        'section' => 'custom_navbar_setting',
        'settings' => 'navbar_item_bg_color',
    ) 
));
// Background Transparent BG
$wp_customize->add_setting( 'navbar_item_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['navbar_item_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox'
));
$wp_customize->add_control( 'navbar_item_transparent_bg', array(
    'label'                 => __('Transparent Item Background', 'tubeaceplay'),
    'section'               => 'custom_navbar_setting',
    'settings'              => 'navbar_item_transparent_bg',
    'type'                  => 'checkbox',
));
// Font Family - select
$wp_customize->add_setting('navbar_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['navbar_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select'
));    
$wp_customize->add_control('navbar_font_family', array(
    'label'                     => __('Font Family', 'tubeaceplay'),
    'section'                   => 'custom_navbar_setting',
    'settings'                  => 'navbar_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Font Size - number
$wp_customize->add_setting('navbar_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['navbar_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer'
));    
$wp_customize->add_control('navbar_font_size', array(
    'label'                     => __('Font Size', 'tubeaceplay'),
    'section'                   => 'custom_navbar_setting',
    'settings'                  => 'navbar_font_size',
    'type'                      => 'number',
));
// Font Size Unit - select
$wp_customize->add_setting('navbar_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['navbar_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select'
));    
$wp_customize->add_control('navbar_font_size_unit', array(
    'label'                     => __('Font Size Unit', 'tubeaceplay'),
    'section'                   => 'custom_navbar_setting',
    'settings'                  => 'navbar_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Text Color - color
$wp_customize->add_setting( 'navbar_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['navbar_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'navbar_txt_color',
    array(
        'label' => __( 'Text Color', 'tubeaceplay' ),
        'section' => 'custom_navbar_setting',
        'settings' => 'navbar_txt_color',
    ) 
));
// Border Color - color
$wp_customize->add_setting( 'navbar_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['navbar_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'navbar_border_color',
    array(
        'label' => __( 'Border Color', 'tubeaceplay' ),
        'section' => 'custom_navbar_setting',
        'settings' => 'navbar_border_color',
    ) 
));

/* Hover */
// Hover Background Color - color
$wp_customize->add_setting( 'navbar_hover_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['navbar_hover_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'refresh' //refresh for hover bug
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'navbar_hover_bg_color',
    array(
        'label' => __( 'Hover Background Color', 'tubeaceplay' ),
        'section' => 'custom_navbar_setting',
        'settings' => 'navbar_hover_bg_color',
    ) 
));
// Hover Background Transparent BG
$wp_customize->add_setting( 'navbar_hover_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['navbar_hover_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox'
));
$wp_customize->add_control( 'navbar_hover_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'custom_navbar_setting',
    'settings'              => 'navbar_hover_transparent_bg',
    'type'                  => 'checkbox',
));
// Hover Text Color - color
$wp_customize->add_setting( 'navbar_hover_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['navbar_hover_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'refresh' //refresh for hover bug
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'navbar_hover_txt_color',array(
        'label' => __( 'Hover Text Color', 'tubeaceplay' ),
        'section' => 'custom_navbar_setting',
        'settings' => 'navbar_hover_txt_color',
    ) 
));
// Hover Border Color - color
$wp_customize->add_setting( 'navbar_hover_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['navbar_hover_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'refresh' //refresh for hover bug
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'navbar_hover_border_color',array(
        'label' => __( 'Hover Border Color', 'tubeaceplay' ),
        'section' => 'custom_navbar_setting',
        'settings' => 'navbar_hover_border_color',
    ) 
));

/* Current */
// Current Page BG Color - color
$wp_customize->add_setting( 'navbar_current_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['navbar_current_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'navbar_current_bg_color',
    array(
        'label' => __( 'Current Page BG Color', 'tubeaceplay' ),
        'section' => 'custom_navbar_setting',
        'settings' => 'navbar_current_bg_color',
    ) 
));
// Current Background Transparent BG
$wp_customize->add_setting( 'navbar_current_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['navbar_current_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'navbar_current_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'custom_navbar_setting',
    'settings'              => 'navbar_current_transparent_bg',
    'type'                  => 'checkbox',
));
// Current Page Text Color
$wp_customize->add_setting( 'navbar_current_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['navbar_current_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'navbar_current_txt_color',array(
        'label' => __( 'Current Page Text Color', 'tubeaceplay' ),
        'section' => 'custom_navbar_setting',
        'settings' => 'navbar_current_txt_color',
    ) 
));
// Current Page Border Color
$wp_customize->add_setting( 'navbar_current_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['navbar_current_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'navbar_current_border_color',array(
        'label' => __( 'Current Page Border Color', 'tubeaceplay' ),
        'section' => 'custom_navbar_setting',
        'settings' => 'navbar_current_border_color',
    ) 
));

/* CSS */
$wp_customize->add_setting( 'navbar_css', array(
    'default'               => $tubeaceplay_customizer_defaults['navbar_css'],
    'sanitize_callback' => 'tubeaceplay_sanitize_css'
));
$wp_customize->add_control( 'navbar_css', array(
    'label'                 => __('CSS', 'tubeaceplay'), 
    'section'               => 'custom_navbar_setting',
    'settings'              => 'navbar_css',
    'type'                  => 'textarea',
));    