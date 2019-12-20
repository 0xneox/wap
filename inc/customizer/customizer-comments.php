<?php 
/**
 * Displays the customizer controls for the comments section.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('comments_setting', array(
    'title'                 => __('Comments', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Comments Area */
// Comments Area Background Color
$wp_customize->add_setting( 'comments_area_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comments_area_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comments_area_bg_color',
    array(
        'label' => __( 'Comments Area Background Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comments_area_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'comments_area_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['comments_area_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'comments_area_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'comments_setting',
    'settings'              => 'comments_area_transparent_bg',
    'type'                  => 'checkbox',
));
// Comments Area Font Family
$wp_customize->add_setting('comments_area_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['comments_area_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('comments_area_font_family', array(
    'label'                     => __('Comments Area Font Family', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comments_area_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Comments Area Font Size
$wp_customize->add_setting('comments_area_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['comments_area_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('comments_area_font_size', array(
    'label'                     => __('Comments Area Font Size', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comments_area_font_size',
    'type'                      => 'number',
));
// Comments Area Font Size Unit
$wp_customize->add_setting('comments_area_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['comments_area_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('comments_area_font_size_unit', array(
    'label'                     => __('Comments Area Font Size Unit', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comments_area_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Comments Area Text Color
$wp_customize->add_setting( 'comments_area_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comments_area_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comments_area_txt_color',
    array(
        'label' => __( 'Comments Area Text Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comments_area_txt_color',
    ) 
)); 
// Comments Area Link Color
$wp_customize->add_setting( 'comments_area_link_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comments_area_link_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comments_area_link_color',
    array(
        'label' => __( 'Comments Area Link Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comments_area_link_color',
    ) 
)); 
// Comments Area Border Color
$wp_customize->add_setting( 'comments_area_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comments_area_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comments_area_border_color',
    array(
        'label' => __( 'Comments Area Border Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comments_area_border_color',
    ) 
)); 

/* Author */
// Show Author Avatar on Comment
$wp_customize->add_setting( 'comment_show_author_avatar', array(
    'default'               => $tubeaceplay_customizer_defaults['comment_show_author_avatar'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'comment_show_author_avatar', array(
    'label'                 => __('Show Author Avatar on Comment', 'tubeaceplay'),
    'section'               => 'comments_setting',
    'settings'              => 'comment_show_author_avatar',
    'type'                  => 'checkbox',
));
// Link Author Name to Profile on Comment
$wp_customize->add_setting( 'comment_link_to_author', array(
    'default'               => $tubeaceplay_customizer_defaults['comment_link_to_author'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'comment_link_to_author', array(
    'label'                 => __('Link Author Name to Profile on Comment', 'tubeaceplay'),
    'section'               => 'comments_setting',
    'settings'              => 'comment_link_to_author',
    'type'                  => 'checkbox',
));    
// Comment Author Avatar Size
$wp_customize->add_setting('comment_avatar_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['comment_avatar_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));
$wp_customize->add_control('comment_avatar_size', array(
    'label'                     => __('Comment Author Avatar Size (Pixels)', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comment_avatar_size',
    'type'                      => 'number',
));

/* Comment Item */
// Comment Item Background Color
$wp_customize->add_setting( 'comment_item_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comment_item_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comment_item_bg_color',
    array(
        'label' => __( 'Comment Item Background Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comment_item_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'comment_item_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['comment_item_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_integer',
));
$wp_customize->add_control( 'comment_item_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'comments_setting',
    'settings'              => 'comment_item_transparent_bg',
    'type'                  => 'checkbox',
));
// Comment Item Font Family
$wp_customize->add_setting('comment_item_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['comment_item_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('comment_item_font_family', array(
    'label'                     => __('Comment Item Font Family', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comment_item_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));    
// Comment Item Font Size
$wp_customize->add_setting('comment_item_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['comment_item_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('comment_item_font_size', array(
    'label'                     => __('Comment Item Font Size', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comment_item_font_size',
    'type'                      => 'number',
));
// Comment Item Font Size Unit
$wp_customize->add_setting('comment_item_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['comment_item_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('comment_item_font_size_unit', array(
    'label'                     => __('Comment Item Font Size Unit', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comment_item_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Comment Item Text Color
$wp_customize->add_setting( 'comment_item_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comment_item_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comment_item_txt_color',
    array(
        'label' => __( 'Comment Item Text Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comment_item_txt_color',
    ) 
)); 
// Comment Item Link Color
$wp_customize->add_setting( 'comment_item_link_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comment_item_link_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comment_item_link_color',
    array(
        'label' => __( 'Comment Item Link Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comment_item_link_color',
    ) 
)); 
// Comment Item Border Color
$wp_customize->add_setting( 'comment_item_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comment_item_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comment_item_border_color',
    array(
        'label' => __( 'Comment Item Border Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comment_item_border_color',
    ) 
)); 

/* Comment Reply */
// Comment Reply Background Color
$wp_customize->add_setting( 'comment_reply_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comment_reply_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comment_reply_bg_color',
    array(
        'label' => __( 'Comment Reply Background Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comment_reply_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'comment_reply_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['comment_reply_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'comment_reply_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'comments_setting',
    'settings'              => 'comment_reply_transparent_bg',
    'type'                  => 'checkbox',
));
// Comment Reply Font Family
$wp_customize->add_setting('comment_reply_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['comment_reply_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('comment_reply_font_family', array(
    'label'                     => __('Comment Reply Font Family', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comment_reply_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Comment Reply Font Size
$wp_customize->add_setting('comment_reply_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['comment_reply_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('comment_reply_font_size', array(
    'label'                     => __('Comment Reply Font Size', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comment_reply_font_size',
    'type'                      => 'number',
));
// Comment Reply Font Size Unit
$wp_customize->add_setting('comment_reply_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['comment_reply_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('comment_reply_font_size_unit', array(
    'label'                     => __('Comment Reply Font Size Unit', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comment_reply_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Comment Reply Text Color
$wp_customize->add_setting( 'comment_reply_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comment_reply_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comment_reply_txt_color',
    array(
        'label' => __( 'Comment Reply Text Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comment_reply_txt_color',
    ) 
)); 
// Comment Reply Link Color
$wp_customize->add_setting( 'comment_reply_link_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comment_reply_link_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comment_reply_link_color',
    array(
        'label' => __( 'Comment Reply Link Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comment_reply_link_color',
    ) 
)); 
// Comment Reply Border Color
$wp_customize->add_setting( 'comment_reply_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comment_reply_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comment_reply_border_color',
    array(
        'label' => __( 'Comment Reply Border Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comment_reply_border_color',
    ) 
));

/* Comment Form Inputs */
// Comment Form Inputs Background Color
$wp_customize->add_setting( 'comment_form_input_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comment_form_input_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comment_form_input_bg_color',
    array(
        'label' => __( 'Comment Form Inputs Background Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comment_form_input_bg_color',
    ) 
));
// Comment Textarea Font Family
$wp_customize->add_setting('comment_form_input_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['comment_form_input_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('comment_form_input_font_family', array(
    'label'                     => __('Comment Form Inputs Font Family', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comment_form_input_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));    
// Comment Textarea Font Size
$wp_customize->add_setting('comment_form_input_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['comment_form_input_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('comment_form_input_font_size', array(
    'label'                     => __('Comment Form Inputs Font Size', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comment_form_input_font_size',
    'type'                      => 'number',
));
// Comment Textarea Font Size Unit
$wp_customize->add_setting('comment_form_input_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['comment_form_input_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('comment_form_input_font_size_unit', array(
    'label'                     => __('Comment Form Inputs Font Size Unit', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comment_form_input_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Comment Textarea Text Color
$wp_customize->add_setting( 'comment_form_input_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comment_form_input_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comment_form_input_txt_color',
    array(
        'label' => __( 'Comment Form Inputs Text Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comment_form_input_txt_color',
    ) 
)); 
// Comment Textarea Border Color
$wp_customize->add_setting( 'comment_form_input_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comment_form_input_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comment_form_input_border_color',
    array(
        'label' => __( 'Comment Form Inputs Border Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comment_form_input_border_color',
    ) 
));

/* Comment Submit Button */
// Comment Submit Button Background Color
$wp_customize->add_setting( 'comment_submit_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comment_submit_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comment_submit_bg_color',
    array(
        'label' => __( 'Comment Submit Button Background Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comment_submit_bg_color',
    ) 
));
// Comment Submit Button Font Family
$wp_customize->add_setting('comment_submit_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['comment_submit_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('comment_submit_font_family', array(
    'label'                     => __('Comment Submit Button Font Family', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comment_submit_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));    
// Comment Submit Button Font Size
$wp_customize->add_setting('comment_submit_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['comment_submit_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('comment_submit_font_size', array(
    'label'                     => __('Comment Submit Button Font Size', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comment_submit_font_size',
    'type'                      => 'number',
));
// Comment Submit Button Font Size Unit
$wp_customize->add_setting('comment_submit_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['comment_submit_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('comment_submit_font_size_unit', array(
    'label'                     => __('Comment Submit Button Font Size Unit', 'tubeaceplay'),
    'section'                   => 'comments_setting',
    'settings'                  => 'comment_submit_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Comment Submit Button Text Color
$wp_customize->add_setting( 'comment_submit_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comment_submit_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comment_submit_txt_color',
    array(
        'label' => __( 'Comment Submit Button Text Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comment_submit_txt_color',
    ) 
)); 
// Comment Submit Border Color
$wp_customize->add_setting( 'comment_submit_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['comment_submit_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'comment_submit_border_color',
    array(
        'label' => __( 'Comment Submit Border Color', 'tubeaceplay' ),
        'section' => 'comments_setting',
        'settings' => 'comment_submit_border_color',
    ) 
));

/* CSS */
$wp_customize->add_setting( 'comments_css', array(
    'default'               => $tubeaceplay_customizer_defaults['comments_css'],
    'sanitize_callback' => 'tubeaceplay_sanitize_css',
));
$wp_customize->add_control( 'comments_css', array(
    'label'                 => __('Comments CSS', 'tubeaceplay'), 
    'section'               => 'comments_setting',
    'settings'              => 'comments_css',
    'type'                  => 'textarea',
));    