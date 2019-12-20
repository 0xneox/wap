<?php 
/**
 * Displays the customizer controls for the right sidebar.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('right_sidebar_setting', array(
    'title'                 => __('Right Sidebar', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Main */
// Background Color
$wp_customize->add_setting( 'right_sidebar_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['right_sidebar_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'right_sidebar_bg_color',
    array(
        'label' => __( 'Background Color', 'tubeaceplay' ),
        'section' => 'right_sidebar_setting',
        'settings' => 'right_sidebar_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'right_sidebar_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['right_sidebar_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'right_sidebar_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'right_sidebar_setting',
    'settings'              => 'right_sidebar_transparent_bg',
    'type'                  => 'checkbox',
));
// Font Family
$wp_customize->add_setting('right_sidebar_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['right_sidebar_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('right_sidebar_font_family', array(
    'label'                     => __('Font Family', 'tubeaceplay'),
    'section'                   => 'right_sidebar_setting',
    'settings'                  => 'right_sidebar_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Font Size
$wp_customize->add_setting('right_sidebar_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['right_sidebar_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('right_sidebar_font_size', array(
    'label'                     => __('Font Size', 'tubeaceplay'),
    'section'                   => 'right_sidebar_setting',
    'settings'                  => 'right_sidebar_font_size',
    'type'                      => 'number',
));
// Font Size Unit
$wp_customize->add_setting('right_sidebar_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['right_sidebar_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('right_sidebar_font_size_unit', array(
    'label'                     => __('Font Size Unit', 'tubeaceplay'),
    'section'                   => 'right_sidebar_setting',
    'settings'                  => 'right_sidebar_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Text Color
$wp_customize->add_setting( 'right_sidebar_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['right_sidebar_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport'    => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'right_sidebar_txt_color',
    array(
        'label' => __( 'Text Color', 'tubeaceplay' ),
        'section' => 'right_sidebar_setting',
        'settings' => 'right_sidebar_txt_color',
    ) 
));
// Link Color
$wp_customize->add_setting( 'right_sidebar_link_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['right_sidebar_link_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport'    => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'right_sidebar_link_color',
    array(
        'label' => __( 'Link Color', 'tubeaceplay' ),
        'section' => 'right_sidebar_setting',
        'settings' => 'right_sidebar_link_color',
    ) 
)); 
// Border Color
$wp_customize->add_setting( 'right_sidebar_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['right_sidebar_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport'    => 'postMessage'
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'right_sidebar_border_color',
    array(
        'label' => __( 'Border Color', 'tubeaceplay' ),
        'section' => 'right_sidebar_setting',
        'settings' => 'right_sidebar_border_color',
    ) 
));

/* BG Image */
// Background Image
$wp_customize->add_setting(
    'right_sidebar_background_image',
    array(
        'default'      => $tubeaceplay_customizer_defaults['right_sidebar_background_image'],
        'sanitize_callback' => 'tubeaceplay_sanitize_image',
        'transport'    => 'postMessage'
    ) );
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'right_sidebar_background_image',
        array(
            'label'    => 'Background Image',
            'settings' => 'right_sidebar_background_image',
            'section'  => 'right_sidebar_setting'
    ) ) );
// Background Image Repeat
$wp_customize->add_setting(
'right_sidebar_background_image_repeat',
array(
    'default' => $tubeaceplay_customizer_defaults['right_sidebar_background_image_repeat'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'right_sidebar_background_image_repeat',
    array(
        'type' => 'radio',
        'label' => 'Background Image Repeat',
        'section' => 'right_sidebar_setting',
        'choices' => array(
            'no-repeat' => 'No Repeat',
            'repeat' => 'Repeat',
            'repeat-x' => 'Repeat Horizontally',
            'repeat-y' => 'Repeat Vertically',
         ),
    ));  
// Background Image Position
$wp_customize->add_setting(
'right_sidebar_background_image_position',
array(
    'default' => $tubeaceplay_customizer_defaults['right_sidebar_background_image_position'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'right_sidebar_background_image_position',
    array(
        'type' => 'radio',
        'label' => 'Background Image Position',
        'section' => 'right_sidebar_setting',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
            'right' => 'Right',
         ),
    ));  
// Background Image Attachment
$wp_customize->add_setting(
'right_sidebar_background_image_attachment',
array(
    'default' => $tubeaceplay_customizer_defaults['right_sidebar_background_image_attachment'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'right_sidebar_background_image_attachment',
    array(
        'type' => 'radio',
        'label' => 'Background Image Attachment',
        'section' => 'right_sidebar_setting',
        'choices' => array(
            'scroll' => 'Scroll',
            'fixed' => 'Fixed',
         ),
    ));  

/* CSS */
$wp_customize->add_setting( 'right_sidebar_css', array(
    'default'               => $tubeaceplay_customizer_defaults['right_sidebar_css'],
    'sanitize_callback' => 'tubeaceplay_sanitize_css',
));
$wp_customize->add_control( 'right_sidebar_css', array(
    'label'                 => __('CSS', 'tubeaceplay'), 
    'section'               => 'right_sidebar_setting',
    'settings'              => 'right_sidebar_css',
    'type'                  => 'textarea',
));    