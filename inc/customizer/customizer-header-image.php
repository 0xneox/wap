<?php 
/**
 * Displays the customizer controls for the header.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('custom_header_image_setting', array(
    'title'                 => __('Header Image', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

//move from main
$wp_customize->get_control( 'header_image' )->section   = 'custom_header_image_setting';

// Background Image Repeat
$wp_customize->add_setting(
'header_background_image_repeat',
array(
    'default' => $tubeaceplay_customizer_defaults['header_background_image_repeat'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'header_background_image_repeat',
    array(
        'type' => 'radio',
        'label' => __('Background Image Repeat', 'tubeaceplay'),
        'section' => 'custom_header_image_setting',
        'choices' => array(
            'no-repeat' => 'No Repeat',
            'repeat' => 'Repeat',
            'repeat-x' => 'Repeat Horizontally',
            'repeat-y' => 'Repeat Vertically',
         ),
    ));  
// Background Image Position
$wp_customize->add_setting(
'header_background_image_position',
array(
    'default' => $tubeaceplay_customizer_defaults['header_background_image_position'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'header_background_image_position',
    array(
        'type' => 'radio',
        'label' => __('Background Image Position', 'tubeaceplay'),
        'section' => 'custom_header_image_setting',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
            'right' => 'Right',
         ),
    ));  
// Background Image Attachment
$wp_customize->add_setting(
'header_background_image_attachment',
array(
    'default' => $tubeaceplay_customizer_defaults['header_background_image_attachment'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'header_background_image_attachment',
    array(
        'type' => 'radio',
        'label' => __('Background Image Attachment', 'tubeaceplay'),
        'section' => 'custom_header_image_setting',
        'choices' => array(
            'scroll' => 'Scroll',
            'fixed' => 'Fixed',
         ),
    ));  