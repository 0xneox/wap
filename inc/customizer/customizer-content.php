<?php 
/**
 * Displays the customizer controls for the content section.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('content_setting', array(
    'title'                 => __('Content Area ', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Main */
// Background Color
$wp_customize->add_setting( 'content_bg_color', array(
        'default' => $tubeaceplay_customizer_defaults['content_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'content_bg_color', array(
        'label' => __( 'Background Color', 'tubeaceplay' ),
        'section' => 'content_setting',
        'settings' => 'content_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'content_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['content_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'content_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'content_setting',
    'settings'              => 'content_transparent_bg',
    'type'                  => 'checkbox',
));
// Border Color
$wp_customize->add_setting( 'content_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['content_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'content_border_color', array(
        'label' => __( 'Border Color', 'tubeaceplay' ),
        'section' => 'content_setting',
        'settings' => 'content_border_color',
    ) 
)); 

/* BG Image */
// Background Image
$wp_customize->add_setting(
    'content_background_image',
    array(
        'default'      => $tubeaceplay_customizer_defaults['content_background_image'],
        'sanitize_callback' => 'tubeaceplay_sanitize_image',
        'transport'    => 'postMessage'
    ) );
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'content_background_image',
        array(
            'label'    => __('Background Image', 'tubeaceplay'),
            'settings' => 'content_background_image',
            'section'  => 'content_setting'
    ) ) );
// Background Image Repeat
$wp_customize->add_setting(
'content_background_image_repeat',
array(
    'default' => $tubeaceplay_customizer_defaults['content_background_image_repeat'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'content_background_image_repeat',
    array(
        'type' => 'radio',
        'label' => __('Background Image Repeat', 'tubeaceplay'),
        'section' => 'content_setting',
        'choices' => array(
            'no-repeat' => 'No Repeat',
            'repeat' => 'Repeat',
            'repeat-x' => 'Repeat Horizontally',
            'repeat-y' => 'Repeat Vertically',
         ),
    ));  
// Background Image Position
$wp_customize->add_setting(
'content_background_image_position',
array(
    'default' => $tubeaceplay_customizer_defaults['content_background_image_position'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'content_background_image_position',
    array(
        'type' => 'radio',
        'label' => __('Background Image Position', 'tubeaceplay'),
        'section' => 'content_setting',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
            'right' => 'Right',
         ),
    ));  
// Background Image Attachment
$wp_customize->add_setting(
'content_background_image_attachment',
array(
    'default' => $tubeaceplay_customizer_defaults['content_background_image_attachment'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'content_background_image_attachment',
    array(
        'type' => 'radio',
        'label' => __('Background Image Attachment', 'tubeaceplay'),
        'section' => 'content_setting',
        'choices' => array(
            'scroll' => 'Scroll',
            'fixed' => 'Fixed',
         ),
    ));

/* CSS */
$wp_customize->add_setting( 'content_css', array(
    'default'               => $tubeaceplay_customizer_defaults['content_css'],
    'sanitize_callback' => 'tubeaceplay_sanitize_css',
));
$wp_customize->add_control( 'content_css', array(
    'label'                 => __('CSS', 'tubeaceplay'), 
    'section'               => 'content_setting',
    'settings'              => 'content_css',
    'type'                  => 'textarea',
));
