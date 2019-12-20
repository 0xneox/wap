<?php 
/**
 * Displays the customizer controls for the tag page.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('tag_page_setting', array(
    'title'                 => __('Page: Tag', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Title */
// Tag Page Title Font Family
$wp_customize->add_setting('tag_page_title_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['tag_page_title_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('tag_page_title_font_family', array(
    'label'                     => __('Tag Page Title Font Family', 'tubeaceplay'),
    'section'                   => 'tag_page_setting',
    'settings'                  => 'tag_page_title_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Title Font Size
$wp_customize->add_setting('tag_page_title_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['tag_page_title_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('tag_page_title_font_size', array(
    'label'                     => __('Title Font Size', 'tubeaceplay'),
    'section'                   => 'tag_page_setting',
    'settings'                  => 'tag_page_title_font_size',
    'type'                      => 'number',
));
// Title Font Size Unit
$wp_customize->add_setting('tag_page_title_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['tag_page_title_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('tag_page_title_font_size_unit', array(
    'label'                     => __('Title Font Size Unit', 'tubeaceplay'),
    'section'                   => 'tag_page_setting',
    'settings'                  => 'tag_page_title_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Tag Page Title Text Color
$wp_customize->add_setting( 'tag_page_title_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['tag_page_title_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    )
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'tag_page_title_txt_color', array(
        'label' => __( 'Tag Page Title Text Color', 'tubeaceplay' ),
        'section' => 'tag_page_setting',
        'settings' => 'tag_page_title_txt_color',
    ) 
));