<?php 
/**
 * Displays the customizer controls for the layout.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */

$wp_customize->add_section('tubeaceplay_design_layout', array(
    'title'                 => __('Layout: Content & Sidebar(s)', 'tubeaceplay'),
    'priority'              => 101,
    'panel'                 =>'tubeaceplay_theme_options'
));

// Layout Container Fluid (full-width)
$wp_customize->add_setting( 'layout_container_fluid', array(
    'default'               => $tubeaceplay_customizer_defaults['layout_container_fluid'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'layout_container_fluid', array(
    'label'                 => __('Layout Container Fluid (full-width)', 'tubeaceplay'),
    'section'               => 'tubeaceplay_design_layout',
    'settings'              => 'layout_container_fluid',
    'type'                  => 'checkbox',
));

// Content & Sidebar(s) Layout
$wp_customize->add_setting('layout', array(
    'default'               => $tubeaceplay_customizer_defaults['layout'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control( new tubeaceplay_Layout_Picker_Custom_Control( $wp_customize, 'layout', array(
    'label'   => __('Content & Sidebar(s) Layout', 'tubeaceplay'),
    'section' => 'tubeaceplay_design_layout',
    'settings'   => 'layout',
)));
?>