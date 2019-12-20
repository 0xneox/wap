<?php 
/**
 * Displays the customizer controls for the header.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */


$wp_customize->add_section('custom_header_setting', array(
    'title'                 => __('Header', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Header Site Title */
// Show Site Title - checkbox
$wp_customize->add_setting( 'header_show_site_title', array(
    'default'               => $tubeaceplay_customizer_defaults['header_show_site_title'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox'
));
$wp_customize->add_control( 'header_show_site_title', array(
    'label'                 => __('Show Site Title', 'tubeaceplay'),
    'section'               => 'custom_header_setting',
    'settings'              => 'header_show_site_title',
    'type'                  => 'checkbox',
));
// Site Title Font Family - select
$wp_customize->add_setting('header_site_title_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_site_title_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select'
));    
$wp_customize->add_control('header_site_title_font_family', array(
    'label'                     => __('Site Title Font Family', 'tubeaceplay'),
    'section'                   => 'custom_header_setting',
    'settings'                  => 'header_site_title_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Site Title Font Size - number
$wp_customize->add_setting('header_site_title_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_site_title_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer'
));    
$wp_customize->add_control('header_site_title_font_size', array(
    'label'                     => __('Site Title Font Size', 'tubeaceplay'),
    'section'                   => 'custom_header_setting',
    'settings'                  => 'header_site_title_font_size',
    'type'                      => 'number',
));
// Site Title Font Size Unit - select
$wp_customize->add_setting('header_site_title_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_site_title_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select'
));    
$wp_customize->add_control('header_site_title_font_size_unit', array(
    'label'                     => __('Site Title Font Size Unit', 'tubeaceplay'),
    'section'                   => 'custom_header_setting',
    'settings'                  => 'header_site_title_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Site Title Color - color
$wp_customize->add_setting( 'header_site_title_color', array(
        'default' => $tubeaceplay_customizer_defaults['header_site_title_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_site_title_color', array(
        'label' => __( 'Site Title Color', 'tubeaceplay' ),
        'section' => 'custom_header_setting',
        'settings' => 'header_site_title_color',
    ) 
)); 

/* Header Tagline */
// Show Tagline - checkbox
$wp_customize->add_setting( 'header_show_tagline', array(
    'default'               => $tubeaceplay_customizer_defaults['header_show_tagline'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox'
));
$wp_customize->add_control( 'header_show_tagline', array(
    'label'                 => __('Show Tagline', 'tubeaceplay'),
    'section'               => 'custom_header_setting',
    'settings'              => 'header_show_tagline',
    'type'                  => 'checkbox',
));
// Tagline Font Family - select
$wp_customize->add_setting('header_tagline_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_tagline_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select'
));    
$wp_customize->add_control('header_tagline_font_family', array(
    'label'                     => __('Tagline Font Family', 'tubeaceplay'),
    'section'                   => 'custom_header_setting',
    'settings'                  => 'header_tagline_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Tagline Font Size - number
$wp_customize->add_setting('header_tagline_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_tagline_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer'
));    
$wp_customize->add_control('header_tagline_font_size', array(
    'label'                     => __('Tagline Font Size', 'tubeaceplay'),
    'section'                   => 'custom_header_setting',
    'settings'                  => 'header_tagline_font_size',
    'type'                      => 'number',
));
// Tagline Font Size Unit - select
$wp_customize->add_setting('header_tagline_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_tagline_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select'
));    
$wp_customize->add_control('header_tagline_font_size_unit', array(
    'label'                     => __('Tagline Font Size Unit', 'tubeaceplay'),
    'section'                   => 'custom_header_setting',
    'settings'                  => 'header_tagline_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Tagline Color - color
$wp_customize->add_setting( 'header_tagline_color', array(
        'default' => $tubeaceplay_customizer_defaults['header_tagline_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_tagline_color', array(
        'label' => __( 'Tagline Color', 'tubeaceplay' ),
        'section' => 'custom_header_setting',
        'settings' => 'header_tagline_color',
    ) 
));

/* Header Search */
// Show Search - checkbox
$wp_customize->add_setting( 'header_show_search', array(
    'default'               => $tubeaceplay_customizer_defaults['header_show_search'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox'
));
$wp_customize->add_control( 'header_show_search', array(
    'label'                 => __('Show Search Form', 'tubeaceplay'),
    'section'               => 'custom_header_setting',
    'settings'              => 'header_show_search',
    'type'                  => 'checkbox',
));
// Search Input Background Color - color
$wp_customize->add_setting( 'header_search_input_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['header_search_input_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_search_input_color', array(
        'label' => __( 'Search Input Background Color', 'tubeaceplay' ),
        'section' => 'custom_header_setting',
        'settings' => 'header_search_input_color'
    ) 
));
// Search Input Text Color - color
$wp_customize->add_setting( 'header_search_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['header_search_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_search_txt_color',
    array(
        'label' => __( 'Search Input Text Color', 'tubeaceplay' ),
        'section' => 'custom_header_setting',
        'settings' => 'header_search_txt_color'
    ) 
));
// Search Input Border Color - color
$wp_customize->add_setting( 'header_search_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['header_search_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_search_border_color',
    array(
        'label' => __( 'Search Input Border Color', 'tubeaceplay' ),
        'section' => 'custom_header_setting',
        'settings' => 'header_search_border_color',
    ) 
));
// Search Button Color - color
$wp_customize->add_setting( 'header_search_button_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['header_search_button_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_search_button_color',
    array(
        'label' => __( 'Search Button Color', 'tubeaceplay' ),
        'section' => 'custom_header_setting',
        'settings' => 'header_search_button_color',
    ) 
));
// Search Button Text Color - color
$wp_customize->add_setting( 'header_search_button_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['header_search_button_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_search_button_txt_color',
    array(
        'label' => __( 'Search Button Text Color', 'tubeaceplay' ),
        'section' => 'custom_header_setting',
        'settings' => 'header_search_button_txt_color',
    ) 
));
// Search Button Border Color - color
$wp_customize->add_setting( 'header_search_button_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['header_search_button_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_search_button_border_color',
    array(
        'label' => __( 'Search Button Border Color', 'tubeaceplay' ),
        'section' => 'custom_header_setting',
        'settings' => 'header_search_button_border_color'
    ) 
));

/* Header */
// Background Color - color
$wp_customize->add_setting( 'header_bg_color', array(
        'default' => $tubeaceplay_customizer_defaults['header_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_bg_color', array(
        'label' => __( 'Background Color', 'tubeaceplay' ),
        'section' => 'custom_header_setting',
        'settings' => 'header_bg_color'
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'header_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['header_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox'
));
$wp_customize->add_control( 'header_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'custom_header_setting',
    'settings'              => 'header_transparent_bg',
    'type'                  => 'checkbox'
));
// Font Family - select
$wp_customize->add_setting('header_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select'
));    
$wp_customize->add_control('header_font_family', array(
    'label'                     => __('Font Family', 'tubeaceplay'),
    'section'                   => 'custom_header_setting',
    'settings'                  => 'header_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Font Size - number
$wp_customize->add_setting('header_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer'
));    
$wp_customize->add_control('header_font_size', array(
    'label'                     => __('Font Size', 'tubeaceplay'),
    'section'                   => 'custom_header_setting',
    'settings'                  => 'header_font_size',
    'type'                      => 'number',
));
// Font Size Unit - select
$wp_customize->add_setting('header_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select'
));    
$wp_customize->add_control('header_font_size_unit', array(
    'label'                     => __('Font Size Unit', 'tubeaceplay'),
    'section'                   => 'custom_header_setting',
    'settings'                  => 'header_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Text Color - color
$wp_customize->add_setting( 'header_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['header_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_txt_color', array(
        'label' => __( 'Text Color', 'tubeaceplay' ),
        'section' => 'custom_header_setting',
        'settings' => 'header_txt_color',
    ) 
)); 
// Link Color - color
$wp_customize->add_setting( 'header_link_color', array(
        'default' => $tubeaceplay_customizer_defaults['header_link_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_link_color', array(
        'label' => __( 'Link Color', 'tubeaceplay' ),
        'section' => 'custom_header_setting',
        'settings' => 'header_link_color',
    ) 
)); 
// Border Color - color
$wp_customize->add_setting( 'header_border_color', array(
        'default' => $tubeaceplay_customizer_defaults['header_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'header_border_color', array(
        'label' => __( 'Border Color', 'tubeaceplay' ),
        'section' => 'custom_header_setting',
        'settings' => 'header_border_color',
    ) 
)); 

/* Container Position */
// Container Position - select
$wp_customize->add_setting('header_container_position', array(
    'default'                   => $tubeaceplay_customizer_defaults['header_container_position'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select'
));    
$wp_customize->add_control('header_container_position', array(
    'label'                     => __('Container Position', 'tubeaceplay'),
    'section'                   => 'custom_header_setting',
    'settings'                  => 'header_container_position',
    'type'                      => 'select',
    'choices'                   => array('outside' => 'Outside Navbar', 'inside' => 'Inside Navbar', 'none' => 'None'),
));

/* CSS */
$wp_customize->add_setting( 'header_css', array(
    'default'               => $tubeaceplay_customizer_defaults['header_css'],
    'sanitize_callback' => 'tubeaceplay_sanitize_css'
));
$wp_customize->add_control( 'header_css', array(
    'label'                 => __('CSS', 'tubeaceplay'), 
    'section'               => 'custom_header_setting',
    'settings'              => 'header_css',
    'type'                  => 'textarea',
));