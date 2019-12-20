<?php 
/**
 * Displays the customizer controls for the footer.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('footer_setting', array(
    'title'                 => __('Footer', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Main */
// Footer Fluid (full-width)
$wp_customize->add_setting( 'footer_container_fluid', array(
    'default'               => $tubeaceplay_customizer_defaults['footer_container_fluid'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'footer_container_fluid', array(
    'label'                 => __('Footer Container Fluid (full-width)', 'tubeaceplay'),
    'section'               => 'footer_setting',
    'settings'              => 'footer_container_fluid',
    'type'                  => 'checkbox',
));

// # of Widget Area Columns
$wp_customize->add_setting('footer_num_cols', array(
    'default'                   => $tubeaceplay_customizer_defaults['footer_num_cols'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('footer_num_cols', array(
    'label'                     => __('# of Widget Area Columns', 'tubeaceplay'),
    'section'                   => 'footer_setting',
    'settings'                  => 'footer_num_cols',
    'type'                      => 'select',
    'choices'                   => array(1=>1,2=>2,3=>3,4=>4,6=>6),
));

// X-Small Devices
$wp_customize->add_setting('footer_cols_xs_class', array(
    'default'                   => $tubeaceplay_customizer_defaults['footer_cols_xs_class'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));
$wp_customize->add_control('footer_cols_xs_class', array(
    'label'                     => __('X-Small Devices (&lt;768px) # of Columns', 'tubeaceplay'),
    'section'                   => 'footer_setting',
    'settings'                  => 'footer_cols_xs_class',
    'type'                      => 'select',
    'choices'                   => array('col-xs-12'=>'1', 'col-xs-6'=>'2'),
));
// Small Devices
$wp_customize->add_setting('footer_cols_sm_class', array(
    'default'                   => $tubeaceplay_customizer_defaults['footer_cols_sm_class'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));
$wp_customize->add_control('footer_cols_sm_class', array(
    'label'                     => __('Small Devices (&ge;768px) # of Columns', 'tubeaceplay'),
    'section'                   => 'footer_setting',
    'settings'                  => 'footer_cols_sm_class',
    'type'                      => 'select',
    'choices'                   => array('col-sm-12'=>'1', 'col-sm-6'=>'2', 'col-sm-4'=>'3'),
));
// Medium Devices 
$wp_customize->add_setting('footer_cols_md_class', array(
    'default'                   => $tubeaceplay_customizer_defaults['footer_cols_md_class'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));
$wp_customize->add_control('footer_cols_md_class', array(
    'label'                     => __('Medium Devices (&ge;992px) # of Columns', 'tubeaceplay'),
    'section'                   => 'footer_setting',
    'settings'                  => 'footer_cols_md_class',
    'type'                      => 'select',
    'choices'                   => array('col-md-12'=>'1', 'col-md-6'=>'2', 'col-md-4'=>'3', 'col-md-3'=>'4', 'col-md-2'=>'6'),
));    
// Large Devices
$wp_customize->add_setting('footer_cols_lg_class', array(
    'default'                   => $tubeaceplay_customizer_defaults['footer_cols_lg_class'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));
$wp_customize->add_control('footer_cols_lg_class', array(
    'label'                     => __('Large Devices (&ge;1200px) # of Columns', 'tubeaceplay'),
    'section'                   => 'footer_setting',
    'settings'                  => 'footer_cols_lg_class',
    'type'                      => 'select',
    'choices'                   => array('col-lg-12'=>'1', 'col-lg-6'=>'2', 'col-lg-4'=>'3', 'col-lg-3'=>'4', 'col-lg-2'=>'6'),
));


// Background Color
$wp_customize->add_setting( 'footer_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['footer_bg_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'footer_bg_color',
    array(
        'label' => __( 'Background Color', 'tubeaceplay' ),
        'section' => 'footer_setting',
        'settings' => 'footer_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'footer_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['footer_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'footer_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'footer_setting',
    'settings'              => 'footer_transparent_bg',
    'type'                  => 'checkbox',
));
// Font Family
$wp_customize->add_setting('footer_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['footer_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('footer_font_family', array(
    'label'                     => __('Font Family', 'tubeaceplay'),
    'section'                   => 'footer_setting',
    'settings'                  => 'footer_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Font Size
$wp_customize->add_setting('footer_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['footer_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('footer_font_size', array(
    'label'                     => __('Font Size', 'tubeaceplay'),
    'section'                   => 'footer_setting',
    'settings'                  => 'footer_font_size',
    'type'                      => 'number',
));
// Font Size Unit
$wp_customize->add_setting('footer_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['footer_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('footer_font_size_unit', array(
    'label'                     => __('Font Size Unit', 'tubeaceplay'),
    'section'                   => 'footer_setting',
    'settings'                  => 'footer_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Text Color
$wp_customize->add_setting( 'footer_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['footer_txt_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'footer_txt_color',
    array(
        'label' => __( 'Text Color', 'tubeaceplay' ),
        'section' => 'footer_setting',
        'settings' => 'footer_txt_color',
    ) 
));
// Link Color
$wp_customize->add_setting( 'footer_link_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['footer_link_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'footer_link_color',
    array(
        'label' => __( 'Link Color', 'tubeaceplay' ),
        'section' => 'footer_setting',
        'settings' => 'footer_link_color',
    ) 
));
// Border Color
$wp_customize->add_setting( 'footer_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['footer_border_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'footer_border_color',
    array(
        'label' => __( 'Border Color', 'tubeaceplay' ),
        'section' => 'footer_setting',
        'settings' => 'footer_border_color',
    ) 
)); 
// Container Position
$wp_customize->add_setting('footer_container_position', array(
    'default'                   => $tubeaceplay_customizer_defaults['footer_container_position'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('footer_container_position', array(
    'label'                     => __('Container Position', 'tubeaceplay'),
    'section'                   => 'footer_setting',
    'settings'                  => 'footer_container_position',
    'type'                      => 'select',
    'choices'                   => array('outside' => 'Outside Footer', 'inside' => 'Inside Footer', 'none' => 'None'),
));

/* BG Image */
// Background Image
$wp_customize->add_setting(
    'footer_background_image',
    array(
        'default'      => $tubeaceplay_customizer_defaults['footer_background_image'],
        'sanitize_callback' => 'tubeaceplay_sanitize_image',
        'transport'    => 'postMessage'
    ) );
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'footer_background_image',
        array(
            'label'    => 'Background Image',
            'settings' => 'footer_background_image',
            'section'  => 'footer_setting'
    ) ) );
// Background Image Repeat
$wp_customize->add_setting(
'footer_background_image_repeat',
array(
    'default' => $tubeaceplay_customizer_defaults['footer_background_image_repeat'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'footer_background_image_repeat',
    array(
        'type' => 'radio',
        'label' => 'Background Image Repeat',
        'section' => 'footer_setting',
        'choices' => array(
            'no-repeat' => 'No Repeat',
            'repeat' => 'Repeat',
            'repeat-x' => 'Repeat Horizontally',
            'repeat-y' => 'Repeat Vertically',
         ),
    ));  
// Background Image Position
$wp_customize->add_setting(
'footer_background_image_position',
array(
    'default' => $tubeaceplay_customizer_defaults['footer_background_image_position'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'footer_background_image_position',
    array(
        'type' => 'radio',
        'label' => 'Background Image Position',
        'section' => 'footer_setting',
        'choices' => array(
            'center' => 'Center',
            'left' => 'Left',
            'right' => 'Right',
         ),
    ));  
// Background Image Attachment
$wp_customize->add_setting(
'footer_background_image_attachment',
array(
    'default' => $tubeaceplay_customizer_defaults['footer_background_image_attachment'],
    'sanitize_callback' => 'tubeaceplay_sanitize_select'
    ) );
$wp_customize->add_control(
    'footer_background_image_attachment',
    array(
        'type' => 'radio',
        'label' => 'Background Image Attachment',
        'section' => 'footer_setting',
        'choices' => array(
            'scroll' => 'Scroll',
            'fixed' => 'Fixed',
         ),
    )); 
/* CSS */
$wp_customize->add_setting( 'footer_css', array(
    'default'               => $tubeaceplay_customizer_defaults['footer_css'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_css',
));
$wp_customize->add_control( 'footer_css', array(
    'label'                 => __('CSS', 'tubeaceplay'), 
    'section'               => 'footer_setting',
    'settings'              => 'footer_css',
    'type'                  => 'textarea',
));    