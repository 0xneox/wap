<?php 
/**
 * Displays the customizer controls for the tag cloud widget.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('widgets_tag_cloud_setting', array(
    'title'                 => __('Widget: Tag Cloud', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Main */
// Background Color
$wp_customize->add_setting( 'tag_cloud_bg_color', array(
        'default' => $tubeaceplay_customizer_defaults['tag_cloud_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'tag_cloud_bg_color', array(
        'label' => __( 'Background Color', 'tubeaceplay' ),
        'section' => 'widgets_tag_cloud_setting',
        'settings' => 'tag_cloud_bg_color',
    ) 
));
// Font Family
$wp_customize->add_setting('tag_cloud_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['tag_cloud_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('tag_cloud_font_family', array(
    'label'                     => __('Font Family', 'tubeaceplay'),
    'section'                   => 'widgets_tag_cloud_setting',
    'settings'                  => 'tag_cloud_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Border Color
$wp_customize->add_setting( 'tag_cloud_border_color', array(
        'default' => $tubeaceplay_customizer_defaults['tag_cloud_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'tag_cloud_border_color', array(
        'label' => __( 'Border Color', 'tubeaceplay' ),
        'section' => 'widgets_tag_cloud_setting',
        'settings' => 'tag_cloud_border_color',
    ) 
)); 
// Item Text Color
$wp_customize->add_setting( 'tag_cloud_item_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['tag_cloud_item_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'tag_cloud_item_txt_color', array(
        'label' => __( 'Item Text Color', 'tubeaceplay' ),
        'section' => 'widgets_tag_cloud_setting',
        'settings' => 'tag_cloud_item_txt_color',
    ) 
));
// Item Background Color
$wp_customize->add_setting( 'tag_cloud_item_bg_color', array(
        'default' => $tubeaceplay_customizer_defaults['tag_cloud_item_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'tag_cloud_item_bg_color', array(
        'label' => __( 'Item Background Color', 'tubeaceplay' ),
        'section' => 'widgets_tag_cloud_setting',
        'settings' => 'tag_cloud_item_bg_color',
    ) 
));
// Item Border Color
$wp_customize->add_setting( 'tag_cloud_item_border_color', array(
        'default' => $tubeaceplay_customizer_defaults['tag_cloud_item_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'tag_cloud_item_border_color', array(
        'label' => __( 'Item Border Color', 'tubeaceplay' ),
        'section' => 'widgets_tag_cloud_setting',
        'settings' => 'tag_cloud_item_border_color',
    ) 
));

/* CSS */
$wp_customize->add_setting( 'tag_cloud_css', array(
    'default'               => $tubeaceplay_customizer_defaults['tag_cloud_css'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_css',
));
$wp_customize->add_control( 'tag_cloud_css', array(
    'label'                 => __('Custom CSS', 'tubeaceplay'), 
    'section'               => 'widgets_tag_cloud_setting',
    'settings'              => 'tag_cloud_css',
    'type'                  => 'textarea',
));