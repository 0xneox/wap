<?php 
/**
 * Displays the customizer controls for the calendar widget.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('widgets_setting', array(
    'title'                 => __('Widget: Calendar', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Main */
// Background Color
$wp_customize->add_setting( 'calendar_bg_color', array(
        'default' => $tubeaceplay_customizer_defaults['calendar_bg_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'calendar_bg_color', array(
        'label' => __( 'Background Color', 'tubeaceplay' ),
        'section' => 'widgets_setting',
        'settings' => 'calendar_bg_color',
    ) 
));
// Hover Background Color
$wp_customize->add_setting( 'calendar_hover_bg_color', array(
        'default' => $tubeaceplay_customizer_defaults['calendar_hover_bg_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'calendar_hover_bg_color', array(
        'label' => __( 'Hover Background Color', 'tubeaceplay' ),
        'section' => 'widgets_setting',
        'settings' => 'calendar_hover_bg_color',
    ) 
));
// Font Family
$wp_customize->add_setting('calendar_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['calendar_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('calendar_font_family', array(
    'label'                     => __('Font Family', 'tubeaceplay'),
    'section'                   => 'widgets_setting',
    'settings'                  => 'calendar_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Font Size
$wp_customize->add_setting('calendar_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['calendar_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('calendar_font_size', array(
    'label'                     => __('Font Size', 'tubeaceplay'),
    'section'                   => 'widgets_setting',
    'settings'                  => 'calendar_font_size',
    'type'                      => 'number',
));
// Font Size Unit
$wp_customize->add_setting('calendar_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['calendar_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('calendar_font_size_unit', array(
    'label'                     => __('Font Size Unit', 'tubeaceplay'),
    'section'                   => 'widgets_setting',
    'settings'                  => 'calendar_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Month Color
$wp_customize->add_setting( 'calendar_month_color', array(
        'default' => $tubeaceplay_customizer_defaults['calendar_month_color'],
        'sanitize_callback'  => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'calendar_month_color', array(
        'label' => __( 'Month Color', 'tubeaceplay' ),
        'section' => 'widgets_setting',
        'settings' => 'calendar_month_color',
    ) 
)); 
// Days Color
$wp_customize->add_setting( 'calendar_days_color', array(
        'default' => $tubeaceplay_customizer_defaults['calendar_days_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'calendar_days_color',
    array(
        'label' => __( 'Days Color', 'tubeaceplay' ),
        'section' => 'widgets_setting',
        'settings' => 'calendar_days_color',
    ) 
));
// Border Color
$wp_customize->add_setting( 'calendar_border_color', array(
        'default' => $tubeaceplay_customizer_defaults['calendar_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'calendar_border_color', array(
        'label' => __( 'Border Color', 'tubeaceplay' ),
        'section' => 'widgets_setting',
        'settings' => 'calendar_border_color',
    ) 
)); 
// Text Color
$wp_customize->add_setting( 'calendar_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['calendar_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'calendar_txt_color', array(
        'label' => __( 'Text Color', 'tubeaceplay' ),
        'section' => 'widgets_setting',
        'settings' => 'calendar_txt_color',
    ) 
));
// Link Color
$wp_customize->add_setting( 'calendar_link_color', array(
        'default' => $tubeaceplay_customizer_defaults['calendar_link_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'calendar_link_color', array(
        'label' => __( 'Link Color', 'tubeaceplay' ),
        'section' => 'widgets_setting',
        'settings' => 'calendar_link_color',
    ) 
));
// Pagination Color
$wp_customize->add_setting( 'calendar_pagination_color', array(
        'default' => $tubeaceplay_customizer_defaults['calendar_pagination_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'calendar_pagination_color', array(
        'label' => __( 'Pagination Color', 'tubeaceplay' ),
        'section' => 'widgets_setting',
        'settings' => 'calendar_pagination_color',
    ) 
));

/* CSS */
$wp_customize->add_setting( 'calendar_css', array(
    'default'               => $tubeaceplay_customizer_defaults['calendar_css'],
    'sanitize_callback' => 'tubeaceplay_sanitize_css',
));
$wp_customize->add_control( 'calendar_css', array(
    'label'                 => __('Custom CSS', 'tubeaceplay'), 
    'section'               => 'widgets_setting',
    'settings'              => 'calendar_css',
    'type'                  => 'textarea',
));