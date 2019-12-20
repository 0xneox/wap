<?php 
/**
 * Displays the customizer controls for the pagination.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('pagination_setting', array(
    'title'                 => __('Pagination', 'tubeaceplay'),
    'description'           => __('Styling for Pagination (Next, Previous buttons for Post Results)', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Previous */
// Background Color
$wp_customize->add_setting( 'pagination_prev_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_prev_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_prev_bg_color',
    array(
        'label' => __( 'Previous Background Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_prev_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'pagination_prev_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['pagination_prev_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'pagination_prev_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeace'),
    'section'               => 'pagination_setting',
    'settings'              => 'pagination_prev_transparent_bg',
    'type'                  => 'checkbox',
));

// Pagination Label
$wp_customize->add_setting('pagination_prev_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_prev_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('pagination_prev_label', array(
    'label'                     => __('Previous Pagination Label', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_prev_label',
    'type'                      => 'text',
));

// Font Family
$wp_customize->add_setting('pagination_prev_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_prev_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('pagination_prev_font_family', array(
    'label'                     => __('Previous Font Family', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_prev_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Title Font Size
$wp_customize->add_setting('pagination_prev_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_prev_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('pagination_prev_font_size', array(
    'label'                     => __('Previous Font Size', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_prev_font_size',
    'type'                      => 'number',
));
// Font Size Unit
$wp_customize->add_setting('pagination_prev_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_prev_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('pagination_prev_font_size_unit', array(
    'label'                     => __('Previous Font Size Unit', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_prev_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));

// Text Color
$wp_customize->add_setting( 'pagination_prev_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_prev_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_prev_txt_color',
    array(
        'label' => __( 'Previous Text Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_prev_txt_color',
    ) 
));

// Border Color
$wp_customize->add_setting( 'pagination_prev_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_prev_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_prev_border_color',
    array(
        'label' => __( 'Previous Border Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_prev_border_color',
    ) 
));


/* Current */
// Background Color
$wp_customize->add_setting( 'pagination_current_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_current_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_current_bg_color',
    array(
        'label' => __( 'Current Background Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_current_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'pagination_current_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['pagination_current_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'pagination_current_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeace'),
    'section'               => 'pagination_setting',
    'settings'              => 'pagination_current_transparent_bg',
    'type'                  => 'checkbox',
));

// Font Family
$wp_customize->add_setting('pagination_current_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_current_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('pagination_current_font_family', array(
    'label'                     => __('Current Font Family', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_current_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Title Font Size
$wp_customize->add_setting('pagination_current_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_current_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('pagination_current_font_size', array(
    'label'                     => __('Current Font Size', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_current_font_size',
    'type'                      => 'number',
));
// Font Size Unit
$wp_customize->add_setting('pagination_current_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_current_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('pagination_current_font_size_unit', array(
    'label'                     => __('Current Font Size Unit', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_current_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));

// Text Color
$wp_customize->add_setting( 'pagination_current_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_current_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_current_txt_color',
    array(
        'label' => __( 'Current Text Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_current_txt_color',
    ) 
));

// Border Color
$wp_customize->add_setting( 'pagination_current_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_current_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_current_border_color',
    array(
        'label' => __( 'Current Border Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_current_border_color',
    ) 
));


/* Numbers */
// Background Color
$wp_customize->add_setting( 'pagination_num_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_num_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_num_bg_color',
    array(
        'label' => __( 'Number Background Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_num_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'pagination_num_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['pagination_num_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'pagination_num_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeace'),
    'section'               => 'pagination_setting',
    'settings'              => 'pagination_num_transparent_bg',
    'type'                  => 'checkbox',
));
// Numbers Per Side of Current 
$wp_customize->add_setting('pagination_num_per_side', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_num_per_side'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('pagination_num_per_side', array(
    'label'                     => __('Numbers Per Side of Current Page #', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_num_per_side',
    'type'                      => 'number',
));
// Font Family
$wp_customize->add_setting('pagination_num_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_num_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('pagination_num_font_family', array(
    'label'                     => __('Number Font Family', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_num_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Title Font Size
$wp_customize->add_setting('pagination_num_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_num_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('pagination_num_font_size', array(
    'label'                     => __('Number Font Size', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_num_font_size',
    'type'                      => 'number',
));
// Font Size Unit
$wp_customize->add_setting('pagination_num_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_num_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('pagination_num_font_size_unit', array(
    'label'                     => __('Number Font Size Unit', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_num_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Text Color
$wp_customize->add_setting( 'pagination_num_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_num_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_num_txt_color',
    array(
        'label' => __( 'Number Text Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_num_txt_color',
    ) 
));
// Border Color
$wp_customize->add_setting( 'pagination_num_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_num_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_num_border_color',
    array(
        'label' => __( 'Number Border Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_num_border_color',
    ) 
));

/* Numbers Hover */
// Background Color
$wp_customize->add_setting( 'pagination_num_hover_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_num_hover_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'refresh', //refresh for hover bug
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_num_hover_bg_color',
    array(
        'label' => __( 'Number Hover Background Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_num_hover_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'pagination_num_hover_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['pagination_num_hover_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'pagination_num_hover_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeace'),
    'section'               => 'pagination_setting',
    'settings'              => 'pagination_num_hover_transparent_bg',
    'type'                  => 'checkbox',
));
// Font Family
$wp_customize->add_setting('pagination_num_hover_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_num_hover_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('pagination_num_hover_font_family', array(
    'label'                     => __('Number Hover Font Family', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_num_hover_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Title Font Size
$wp_customize->add_setting('pagination_num_hover_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_num_hover_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('pagination_num_hover_font_size', array(
    'label'                     => __('Number Hover Font Size', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_num_hover_font_size',
    'type'                      => 'number',
));
// Font Size Unit
$wp_customize->add_setting('pagination_num_hover_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_num_hover_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('pagination_num_hover_font_size_unit', array(
    'label'                     => __('Number Hover Font Size Unit', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_num_hover_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Text Color
$wp_customize->add_setting( 'pagination_num_hover_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_num_hover_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'refresh',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_num_hover_txt_color',
    array(
        'label' => __( 'Number Hover Text Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_num_hover_txt_color',
    ) 
));
// Border Color
$wp_customize->add_setting( 'pagination_num_hover_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_num_hover_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'refresh',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_num_hover_border_color',
    array(
        'label' => __( 'Number Hover Border Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_num_hover_border_color',
    ) 
));

/* Dots */
// Background Color
$wp_customize->add_setting( 'pagination_dots_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_dots_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_dots_bg_color',
    array(
        'label' => __( 'Dots Background Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_dots_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'pagination_dots_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['pagination_dots_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'pagination_dots_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeace'),
    'section'               => 'pagination_setting',
    'settings'              => 'pagination_dots_transparent_bg',
    'type'                  => 'checkbox',
));
// Font Family
$wp_customize->add_setting('pagination_dots_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_dots_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('pagination_dots_font_family', array(
    'label'                     => __('Dots Font Family', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_dots_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Title Font Size
$wp_customize->add_setting('pagination_dots_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_dots_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('pagination_dots_font_size', array(
    'label'                     => __('Dots Font Size', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_dots_font_size',
    'type'                      => 'number',
));
// Font Size Unit
$wp_customize->add_setting('pagination_dots_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_dots_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('pagination_dots_font_size_unit', array(
    'label'                     => __('Dots Font Size Unit', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_dots_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Text Color
$wp_customize->add_setting( 'pagination_dots_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_dots_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_dots_txt_color',
    array(
        'label' => __( 'Dots Text Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_dots_txt_color',
    ) 
));
// Border Color
$wp_customize->add_setting( 'pagination_dots_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_dots_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_dots_border_color',
    array(
        'label' => __( 'Dots Border Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_dots_border_color',
    ) 
));

/* Next */
// Background Color
$wp_customize->add_setting( 'pagination_next_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_next_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_next_bg_color',
    array(
        'label' => __( 'Next Background Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_next_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'pagination_next_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['pagination_next_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'pagination_next_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeace'),
    'section'               => 'pagination_setting',
    'settings'              => 'pagination_next_transparent_bg',
    'type'                  => 'checkbox',
));

// Pagination Label
$wp_customize->add_setting('pagination_next_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_next_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('pagination_next_label', array(
    'label'                     => __('Next Pagination Label', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_next_label',
    'type'                      => 'text',
));

// Font Family
$wp_customize->add_setting('pagination_next_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_next_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('pagination_next_font_family', array(
    'label'                     => __('Next Font Family', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_next_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Title Font Size
$wp_customize->add_setting('pagination_next_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_next_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('pagination_next_font_size', array(
    'label'                     => __('Next Font Size', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_next_font_size',
    'type'                      => 'number',
));
// Font Size Unit
$wp_customize->add_setting('pagination_next_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['pagination_next_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('pagination_next_font_size_unit', array(
    'label'                     => __('Next Font Size Unit', 'tubeace'),
    'section'                   => 'pagination_setting',
    'settings'                  => 'pagination_next_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));

// Text Color
$wp_customize->add_setting( 'pagination_next_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_next_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_next_txt_color',
    array(
        'label' => __( 'Next Text Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_next_txt_color',
    ) 
));

// Border Color
$wp_customize->add_setting( 'pagination_next_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['pagination_next_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'pagination_next_border_color',
    array(
        'label' => __( 'Next Border Color', 'tubeace' ),
        'section' => 'pagination_setting',
        'settings' => 'pagination_next_border_color',
    ) 
));

/* CSS */
$wp_customize->add_setting( 'pagination_css', array(
    'default'               => $tubeaceplay_customizer_defaults['pagination_css'],
    'sanitize_callback' => 'tubeaceplay_sanitize_css',
));
$wp_customize->add_control( 'pagination_css', array(
    'label'                 => __('CSS', 'tubeace'), 
    'section'               => 'pagination_setting',
    'settings'              => 'pagination_css',
    'type'                  => 'textarea',
));   