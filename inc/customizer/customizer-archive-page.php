<?php 
/**
 * Displays the customizer controls for the archive page.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('archive_page_setting', array(
    'title'                 => __('Page: Archive', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Title */
// Title Font Family
$wp_customize->add_setting('archive_page_title_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['archive_page_title_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('archive_page_title_font_family', array(
    'label'                     => __('Title Font Family', 'tubeaceplay'),
    'section'                   => 'archive_page_setting',
    'settings'                  => 'archive_page_title_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));    
// Title Font Size
$wp_customize->add_setting('archive_page_title_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['archive_page_title_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('archive_page_title_font_size', array(
    'label'                     => __('Title Font Size', 'tubeaceplay'),
    'section'                   => 'archive_page_setting',
    'settings'                  => 'archive_page_title_font_size',
    'type'                      => 'number',
));
// Title Font Size Unit
$wp_customize->add_setting('archive_page_title_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['archive_page_title_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('archive_page_title_font_size_unit', array(
    'label'                     => __('Title Font Size Unit', 'tubeaceplay'),
    'section'                   => 'archive_page_setting',
    'settings'                  => 'archive_page_title_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Title Text Color
$wp_customize->add_setting( 'archive_page_title_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['archive_page_title_txt_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    )
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'archive_page_title_txt_color', array(
        'label' => __( 'Title Text Color', 'tubeaceplay' ),
        'section' => 'archive_page_setting',
        'settings' => 'archive_page_title_txt_color',
    ) 
));

/* Monthly Archive List */
// Show Monthly Archive List
$wp_customize->add_setting('archive_page_show_monthly_list', array(
    'default'                   => $tubeaceplay_customizer_defaults['archive_page_show_monthly_list'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('archive_page_show_monthly_list', array(
    'label'                     => __('Show Monthly Archive List', 'tubeaceplay'),
    'section'                   => 'archive_page_setting',
    'settings'                  => 'archive_page_show_monthly_list',
    'type'                      => 'select',
    'choices'                   => array('above'=>'Above Results', 'below'=>'Below Results', 'none'=>'None')
));
// Monthly Archive List Title Color
$wp_customize->add_setting( 'archive_page_monthly_list_title_color', array(
        'default' => $tubeaceplay_customizer_defaults['archive_page_monthly_list_title_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    )
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'archive_page_monthly_list_title_color', array(
        'label' => __( 'Monthly Archive List Title Color', 'tubeaceplay' ),
        'section' => 'archive_page_setting',
        'settings' => 'archive_page_monthly_list_title_color',
    ) 
));
// Monthly Archive List Link Color
$wp_customize->add_setting( 'archive_page_monthly_list_link_color', array(
        'default' => $tubeaceplay_customizer_defaults['archive_page_monthly_list_link_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    )
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'archive_page_monthly_list_link_color', array(
        'label' => __( 'Monthly Archive List Link Color', 'tubeaceplay' ),
        'section' => 'archive_page_setting',
        'settings' => 'archive_page_monthly_list_link_color',
    ) 
));

/* CSS */
$wp_customize->add_setting( 'archive_page_css', array(
    'default'               => $tubeaceplay_customizer_defaults['archive_page_css'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_css',
));
$wp_customize->add_control( 'archive_page_css', array(
    'label'                 => __('CSS', 'tubeaceplay'), 
    'section'               => 'archive_page_setting',
    'settings'              => 'archive_page_css',
    'type'                  => 'textarea',
));