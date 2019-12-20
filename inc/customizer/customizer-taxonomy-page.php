<?php 
/**
 * Displays the customizer controls for the taxonomy page.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('taxonomy_page_setting', array(
    'title'                 => __('Page: Taxonomy', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Title */
// Taxonomy Page Title Font Family
$wp_customize->add_setting('taxonomy_page_title_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['taxonomy_page_title_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('taxonomy_page_title_font_family', array(
    'label'                     => __('Taxonomy Page Title Font Family', 'tubeaceplay'),
    'section'                   => 'taxonomy_page_setting',
    'settings'                  => 'taxonomy_page_title_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Title Font Size
$wp_customize->add_setting('taxonomy_page_title_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['taxonomy_page_title_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('taxonomy_page_title_font_size', array(
    'label'                     => __('Title Font Size', 'tubeaceplay'),
    'section'                   => 'taxonomy_page_setting',
    'settings'                  => 'taxonomy_page_title_font_size',
    'type'                      => 'number',
));
// Title Font Size Unit
$wp_customize->add_setting('taxonomy_page_title_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['taxonomy_page_title_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('taxonomy_page_title_font_size_unit', array(
    'label'                     => __('Title Font Size Unit', 'tubeaceplay'),
    'section'                   => 'taxonomy_page_setting',
    'settings'                  => 'taxonomy_page_title_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Taxonomy Page Title Text Color
$wp_customize->add_setting( 'taxonomy_page_title_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['taxonomy_page_title_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    )
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'taxonomy_page_title_txt_color', array(
        'label' => __( 'Taxonomy Page Title Text Color', 'tubeaceplay' ),
        'section' => 'taxonomy_page_setting',
        'settings' => 'taxonomy_page_title_txt_color',
    ) 
));