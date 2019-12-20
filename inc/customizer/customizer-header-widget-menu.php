<?php 
/**
 * Displays the customizer controls for the header widget menus.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('header_widget_menu_setting', array(
    'title'                 => __('Header Widget Menu(s)', 'tubeaceplay'),
    'description'                 => __('Styling for any Menu created in a Header Widget Area', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Title */
// Title color - color
$wp_customize->add_setting( 'header_widget_menu_title_color', array(
        'default' => $tubeaceplay_customizer_defaults['header_widget_menu_title_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_widget_menu_title_color', array(
        'label' => __( 'Title Color', 'tubeaceplay' ),
        'section' => 'header_widget_menu_setting',
        'settings' => 'header_widget_menu_title_color',
    ) 
));
// Title Font Family - select
$wp_customize->add_setting('header_widget_menu_title_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_widget_menu_title_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('header_widget_menu_title_font_family', array(
    'label'                     => __('Title Font Family', 'tubeaceplay'),
    'section'                   => 'header_widget_menu_setting',
    'settings'                  => 'header_widget_menu_title_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Title Font Size
$wp_customize->add_setting('header_widget_menu_title_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_widget_menu_title_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer'
));    
$wp_customize->add_control('header_widget_menu_title_font_size', array(
    'label'                     => __('Title Font Size', 'tubeaceplay'),
    'section'                   => 'header_widget_menu_setting',
    'settings'                  => 'header_widget_menu_title_font_size',
    'type'                      => 'number',
));
// Title Font Size Unit
$wp_customize->add_setting('header_widget_menu_title_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_widget_menu_title_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select'
));    
$wp_customize->add_control('header_widget_menu_title_font_size_unit', array(
    'label'                     => __('Title Font Size Unit', 'tubeaceplay'),
    'section'                   => 'header_widget_menu_setting',
    'settings'                  => 'header_widget_menu_title_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Title Text Align
$wp_customize->add_setting('header_widget_menu_title_txt_align', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_widget_menu_title_txt_align'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select'
));    
$wp_customize->add_control('header_widget_menu_title_txt_align', array(
    'label'                     => __('Title Text Align', 'tubeaceplay'),
    'section'                   => 'header_widget_menu_setting',
    'settings'                  => 'header_widget_menu_title_txt_align',
    'type'                      => 'select',
    'choices'                   => array('left'=>'left','center'=>'center','right'=>'right')
));

/* Main */
// Background Color - color
$wp_customize->add_setting( 'header_widget_menu_bg_color', array(
        'default' => $tubeaceplay_customizer_defaults['header_widget_menu_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_widget_menu_bg_color', array(
        'label' => __( 'Background Color', 'tubeaceplay' ),
        'section' => 'header_widget_menu_setting',
        'settings' => 'header_widget_menu_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'header_widget_menu_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['header_widget_menu_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'header_widget_menu_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'header_widget_menu_setting',
    'settings'              => 'header_widget_menu_transparent_bg',
    'type'                  => 'checkbox',
));
// Item Background Color - color
$wp_customize->add_setting( 'header_widget_menu_item_bg_color', array(
        'default' => $tubeaceplay_customizer_defaults['header_widget_menu_item_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_widget_menu_item_bg_color', array(
        'label' => __( 'Item Background Color', 'tubeaceplay' ),
        'section' => 'header_widget_menu_setting',
        'settings' => 'header_widget_menu_item_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'header_widget_menu_item_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['header_widget_menu_item_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'header_widget_menu_item_transparent_bg', array(
    'label'                 => __('Item Transparent Background', 'tubeaceplay'),
    'section'               => 'header_widget_menu_setting',
    'settings'              => 'header_widget_menu_item_transparent_bg',
    'type'                  => 'checkbox',
));
// Font Family - select
$wp_customize->add_setting('header_widget_menu_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_widget_menu_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('header_widget_menu_font_family', array(
    'label'                     => __('Font Family', 'tubeaceplay'),
    'section'                   => 'header_widget_menu_setting',
    'settings'                  => 'header_widget_menu_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Font Size - input
$wp_customize->add_setting('header_widget_menu_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_widget_menu_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer'
));    
$wp_customize->add_control('header_widget_menu_font_size', array(
    'label'                     => __('Font Size', 'tubeaceplay'),
    'section'                   => 'header_widget_menu_setting',
    'settings'                  => 'header_widget_menu_font_size',
    'type'                      => 'number',
));
// Font Size Unit - select
$wp_customize->add_setting('header_widget_menu_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_widget_menu_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('header_widget_menu_font_size_unit', array(
    'label'                     => __('Font Size Unit', 'tubeaceplay'),
    'section'                   => 'header_widget_menu_setting',
    'settings'                  => 'header_widget_menu_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Text Align - select
$wp_customize->add_setting('header_widget_menu_txt_align', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_widget_menu_txt_align'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select'
));    
$wp_customize->add_control('header_widget_menu_txt_align', array(
    'label'                     => __('Text Align', 'tubeaceplay'),
    'section'                   => 'header_widget_menu_setting',
    'settings'                  => 'header_widget_menu_txt_align',
    'type'                      => 'select',
    'choices'                   => array('left'=>'left','center'=>'center','right'=>'right')
));
// Text Color - color
$wp_customize->add_setting( 'header_widget_menu_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['header_widget_menu_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_widget_menu_txt_color', array(
        'label' => __( 'Text Color', 'tubeaceplay' ),
        'section' => 'header_widget_menu_setting',
        'settings' => 'header_widget_menu_txt_color',
    ) 
));
// Border Color - color
$wp_customize->add_setting( 'header_widget_menu_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['header_widget_menu_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_widget_menu_border_color',
    array(
        'label' => __( 'Border Color', 'tubeaceplay' ),
        'section' => 'header_widget_menu_setting',
        'settings' => 'header_widget_menu_border_color',
    ) 
));

/* Hover */
// Hover Background Color - color
$wp_customize->add_setting( 'header_widget_menu_hover_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['header_widget_menu_hover_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'refresh', //refresh for hover bug
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_widget_menu_hover_bg_color',
    array(
        'label' => __( 'Hover Background Color', 'tubeaceplay' ),
        'section' => 'header_widget_menu_setting',
        'settings' => 'header_widget_menu_hover_bg_color',
    ) 
));
// Hover Transparent BG
$wp_customize->add_setting( 'header_widget_menu_hover_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['header_widget_menu_hover_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox'
));
$wp_customize->add_control( 'header_widget_menu_hover_transparent_bg', array(
    'label'                 => __('Hover Transparent Background', 'tubeaceplay'),
    'section'               => 'header_widget_menu_setting',
    'settings'              => 'header_widget_menu_hover_transparent_bg',
    'type'                  => 'checkbox',
));
// Hover Text Color - color
$wp_customize->add_setting( 'header_widget_menu_hover_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['header_widget_menu_hover_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'refresh' //refresh for hover bug
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_widget_menu_hover_txt_color',array(
        'label' => __( 'Hover Text Color', 'tubeaceplay' ),
        'section' => 'header_widget_menu_setting',
        'settings' => 'header_widget_menu_hover_txt_color',
    ) 
));
// Hover Border Color - color
$wp_customize->add_setting( 'header_widget_menu_hover_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['header_widget_menu_hover_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'refresh' //refresh for hover bug
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_widget_menu_hover_border_color',array(
        'label' => __( 'Hover Border Color', 'tubeaceplay' ),
        'section' => 'header_widget_menu_setting',
        'settings' => 'header_widget_menu_hover_border_color',
    ) 
));

/* Current */
// Current Page Background Color - color
$wp_customize->add_setting( 'header_widget_menu_current_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['header_widget_menu_current_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_widget_menu_current_bg_color',
    array(
        'label' => __( 'Current Page Background Color', 'tubeaceplay' ),
        'section' => 'header_widget_menu_setting',
        'settings' => 'header_widget_menu_current_bg_color',
    ) 
));
// Current Transparent BG
$wp_customize->add_setting( 'header_widget_menu_current_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['header_widget_menu_current_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox'
));
$wp_customize->add_control( 'header_widget_menu_current_transparent_bg', array(
    'label'                 => __('Current Transparent Background', 'tubeaceplay'),
    'section'               => 'header_widget_menu_setting',
    'settings'              => 'header_widget_menu_current_transparent_bg',
    'type'                  => 'checkbox',
));
// Current Page Text Color - color
$wp_customize->add_setting( 'header_widget_menu_current_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['header_widget_menu_current_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_widget_menu_current_txt_color',array(
        'label' => __( 'Current Page Text Color', 'tubeaceplay' ),
        'section' => 'header_widget_menu_setting',
        'settings' => 'header_widget_menu_current_txt_color',
    ) 
));
// Current Page Border Color - color
$wp_customize->add_setting( 'header_widget_menu_current_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['header_widget_menu_current_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_widget_menu_current_border_color',array(
        'label' => __( 'Current Page Border Color', 'tubeaceplay' ),
        'section' => 'header_widget_menu_setting',
        'settings' => 'header_widget_menu_current_border_color',
    ) 
));

/* CSS */
$wp_customize->add_setting( 'header_widget_menu_css', array(
    'default'               => $tubeaceplay_customizer_defaults['header_widget_menu_css'],
    'sanitize_callback' => 'tubeaceplay_sanitize_css'
));
$wp_customize->add_control( 'header_widget_menu_css', array(
    'label'                 => __('CSS', 'tubeaceplay'), 
    'section'               => 'header_widget_menu_setting',
    'settings'              => 'header_widget_menu_css',
    'type'                  => 'textarea',
));    
