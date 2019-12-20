<?php 
/**
 * Displays the customizer controls for the header layout.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('tubeaceplay_header_layout', array(
    'title'                 => __('Layout: Header', 'tubeaceplay'),
    'priority'              => 101,
    'panel'                 =>'tubeaceplay_theme_options'
));

// Header Container Fluid (full-width)
$wp_customize->add_setting( 'header_container_fluid', array(
    'default'               => $tubeaceplay_customizer_defaults['header_container_fluid'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'header_container_fluid', array(
    'label'                 => __('Header Container Fluid (full-width)', 'tubeaceplay'),
    'section'               => 'tubeaceplay_header_layout',
    'settings'              => 'header_container_fluid',
    'type'                  => 'checkbox',
));

// Header Layout
$wp_customize->add_setting('header_layout', array(
    'default'               => $tubeaceplay_customizer_defaults['header_layout'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control( new tubeaceplay_Header_Layout_Picker_Custom_Control( $wp_customize, 'header_layout', array(
    'label'   => __('Header Layout', 'tubeaceplay'),
    'section' => 'tubeaceplay_header_layout',
    'settings'   => 'header_layout',
)));

?>