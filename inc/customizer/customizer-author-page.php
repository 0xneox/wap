<?php 
/**
 * Displays the customizer controls for the author page.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('author_page_setting', array(
    'title'                 => __('Page: Author', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Title */
// Title Font Family
$wp_customize->add_setting('author_page_title_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['author_page_title_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('author_page_title_font_family', array(
    'label'                     => __('Title Font Family', 'tubeaceplay'),
    'section'                   => 'author_page_setting',
    'settings'                  => 'author_page_title_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Title Font Size
$wp_customize->add_setting('author_page_title_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['author_page_title_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('author_page_title_font_size', array(
    'label'                     => __('Title Font Size', 'tubeaceplay'),
    'section'                   => 'author_page_setting',
    'settings'                  => 'author_page_title_font_size',
    'type'                      => 'number',
));
// Title Font Size Unit
$wp_customize->add_setting('author_page_title_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['author_page_title_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('author_page_title_font_size_unit', array(
    'label'                     => __('Title Font Size Unit', 'tubeaceplay'),
    'section'                   => 'author_page_setting',
    'settings'                  => 'author_page_title_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Title Text Color
$wp_customize->add_setting( 'author_page_title_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['author_page_title_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'author_page_title_txt_color',
    array(
        'label' => __( 'Title Text Color', 'tubeaceplay' ),
        'section' => 'author_page_setting',
        'settings' => 'author_page_title_txt_color',
    ) 
));

/* Profile Area */
// Profile Area Background Color
$wp_customize->add_setting( 'author_page_content_bg_color', array(
        'default' => $tubeaceplay_customizer_defaults['author_page_content_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'author_page_content_bg_color', array(
        'label' => __( 'Profile Area Background Color', 'tubeaceplay' ),
        'section' => 'author_page_setting',
        'settings' => 'author_page_content_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'author_page_content_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['author_page_content_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'author_page_content_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'author_page_setting',
    'settings'              => 'author_page_content_transparent_bg',
    'type'                  => 'checkbox',
));
// Profile Area Font Family
$wp_customize->add_setting('author_page_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['author_page_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('author_page_font_family', array(
    'label'                     => __('Profile Area Font Family', 'tubeaceplay'),
    'section'                   => 'author_page_setting',
    'settings'                  => 'author_page_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Profile Area Font Size
$wp_customize->add_setting('author_page_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['author_page_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('author_page_font_size', array(
    'label'                     => __('Profile Area Font Size', 'tubeaceplay'),
    'section'                   => 'author_page_setting',
    'settings'                  => 'author_page_font_size',
    'type'                      => 'number',
));
// Profile Area Font Size Unit
$wp_customize->add_setting('author_page_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['author_page_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('author_page_font_size_unit', array(
    'label'                     => __('Profile Area Font Size Unit', 'tubeaceplay'),
    'section'                   => 'author_page_setting',
    'settings'                  => 'author_page_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Profile Area Content Text Color
$wp_customize->add_setting( 'author_page_content_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['author_page_content_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'author_page_content_txt_color',
    array(
        'label' => __( 'Profile Area Content Text Color', 'tubeaceplay' ),
        'section' => 'author_page_setting',
        'settings' => 'author_page_content_txt_color',
    ) 
)); 
// Profile Area Content Link Color
$wp_customize->add_setting( 'author_page_content_link_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['author_page_content_link_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'author_page_content_link_color',
    array(
        'label' => __( 'Profile Area Content Link Color', 'tubeaceplay' ),
        'section' => 'author_page_setting',
        'settings' => 'author_page_content_link_color',
    ) 
));
// Profile Area Content Border Color
$wp_customize->add_setting( 'author_page_content_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['author_page_content_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'author_page_content_border_color',
    array(
        'label' => __( 'Profile Area Content Border Color', 'tubeaceplay' ),
        'section' => 'author_page_setting',
        'settings' => 'author_page_content_border_color',
    ) 
));

/* Author */
// Show Author Website URL
$wp_customize->add_setting( 'author_page_show_website', array(
    'default'               => $tubeaceplay_customizer_defaults['author_page_show_website'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'author_page_show_website', array(
    'label'                 => __('Show Author Website URL', 'tubeaceplay'),
    'section'               => 'author_page_setting',
    'settings'              => 'author_page_show_website',
    'type'                  => 'checkbox',
));

$wp_customize->add_setting( 'author_page_show_bio', array(
    'default'               => $tubeaceplay_customizer_defaults['author_page_show_bio'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',

));
$wp_customize->add_control( 'author_page_show_bio', array(
    'label'                 => __('Show Author Bio', 'tubeaceplay'),
    'section'               => 'author_page_setting',
    'settings'              => 'author_page_show_bio',
    'type'                  => 'checkbox',
));

/* CSS */
$wp_customize->add_setting( 'author_page_css', array(
    'default'               => $tubeaceplay_customizer_defaults['author_page_css'],
    'sanitize_callback' => 'tubeaceplay_sanitize_css'
));
$wp_customize->add_control( 'author_page_css', array(
    'label'                 => __('CSS', 'tubeaceplay'), 
    'section'               => 'author_page_setting',
    'settings'              => 'author_page_css',
    'type'                  => 'textarea',
));
