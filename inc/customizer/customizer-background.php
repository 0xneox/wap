<?php 
/**
 * Displays the customizer controls for the page pages.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */

$wp_customize->add_section('background_setting', array(
    'title'                 => __('Background', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

//move from Colors
$wp_customize->get_control( 'background_color' )->section   = 'background_setting';

//move from Background Image
$wp_customize->get_control( 'background_image' )->section   = 'background_setting';


//remove panel for Background Image
$wp_customize->remove_section('background_image');