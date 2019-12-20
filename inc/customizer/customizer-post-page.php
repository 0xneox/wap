<?php 
/**
 * Displays the customizer controls for the post pages.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php

$wp_customize->add_section('post_page_setting', array(
    'title'                 => __('Page: Post', 'tubeaceplay'),
    'priority'              => 104,
    'panel'                 =>'tubeaceplay_theme_options'
));

/* Title */
// Title Font Size Unit
$wp_customize->add_setting('post_page_title_position', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_title_position'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_title_position', array(
    'label'                     => __('Title Position', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_title_position',
    'type'                      => 'select',
    'choices'                   => array('above'=>'Above Content','below'=>'Below Content')
));
// Title Font Family
$wp_customize->add_setting('post_page_title_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_title_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_title_font_family', array(
    'label'                     => __('Title Font Family', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_title_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));    
// Title Font Size
$wp_customize->add_setting('post_page_title_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_title_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('post_page_title_font_size', array(
    'label'                     => __('Title Font Size', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_title_font_size',
    'type'                      => 'number',
));
// Title Font Size Unit
$wp_customize->add_setting('post_page_title_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_title_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_title_font_size_unit', array(
    'label'                     => __('Title Font Size Unit', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_title_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Title Text Color
$wp_customize->add_setting( 'post_page_title_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_title_txt_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_title_txt_color',
    array(
        'label' => __( 'Title Text Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_title_txt_color',
    ) 
));
// Background Color
$wp_customize->add_setting( 'post_page_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_bg_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_bg_color',
    array(
        'label' => __( 'Background Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'post_page_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'post_page_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_transparent_bg',
    'type'                  => 'checkbox',
));
// Font Family
$wp_customize->add_setting('post_page_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_font_family', array(
    'label'                     => __('Font Family', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Font Size
$wp_customize->add_setting('post_page_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('post_page_font_size', array(
    'label'                     => __('Font Size', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_font_size',
    'type'                      => 'number',
));
// Font Size Unit
$wp_customize->add_setting('post_page_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_font_size_unit', array(
    'label'                     => __('Font Size Unit', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Text Color
$wp_customize->add_setting( 'post_page_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_txt_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_txt_color',
    array(
        'label' => __( 'Text Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_txt_color',
    ) 
)); 
// Link Color
$wp_customize->add_setting( 'post_page_link_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_link_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_link_color',
    array(
        'label' => __( 'Link Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_link_color',
    ) 
));
// Border Color
$wp_customize->add_setting( 'post_page_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_border_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_border_color',
    array(
        'label' => __( 'Border Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_border_color',
    ) 
)); 

/* Featured Image */
// Show Featured Image
$wp_customize->add_setting( 'post_page_show_featured_image', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_show_featured_image'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'post_page_show_featured_image', array(
    'label'                 => __('Show Featured Image', 'tubeaceplay'),
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_show_featured_image',
    'type'                  => 'checkbox',
));
// Featured Image Size
$wp_customize->add_setting('post_page_featured_image_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_featured_image_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_featured_image_size', array(
    'label'                     => __('Featured Image Size', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_featured_image_size',
    'type'                      => 'select',
    'choices'                   => array('thumbnail'=>'Thumbnail', 'medium'=>'Medium', 'large'=>'Large', 'full'=>'Full'),
));    
// Blockquote Background Color
$wp_customize->add_setting( 'post_page_blockquote_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_blockquote_bg_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_blockquote_bg_color',
    array(
        'label' => __( 'Blockquote Background Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_blockquote_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'post_page_blockquote_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_blockquote_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'post_page_blockquote_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_blockquote_transparent_bg',
    'type'                  => 'checkbox',
));
// Blockquote Font Family
$wp_customize->add_setting('post_page_blockquote_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_blockquote_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_blockquote_font_family', array(
    'label'                     => __('Blockquote Font Family', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_blockquote_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Blockquote Font Size
$wp_customize->add_setting('post_page_blockquote_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_blockquote_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('post_page_blockquote_font_size', array(
    'label'                     => __('Blockquote Font Size', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_blockquote_font_size',
    'type'                      => 'number',
));
// Blockquote Font Size Unit
$wp_customize->add_setting('post_page_blockquote_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_blockquote_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_blockquote_font_size_unit', array(
    'label'                     => __('Blockquote Font Size Unit', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_blockquote_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));
// Blockquote Text Color
$wp_customize->add_setting( 'post_page_blockquote_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_blockquote_txt_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_blockquote_txt_color',
    array(
        'label' => __( 'Blockquote Text Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_blockquote_txt_color',
    ) 
));
// Blockquote Link Color
$wp_customize->add_setting( 'post_page_blockquote_link_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_blockquote_link_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'refresh',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_blockquote_link_color',
    array(
        'label' => __( 'Blockquote Link Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_blockquote_link_color',
    ) 
));
// Blockquote Border Color
$wp_customize->add_setting( 'post_page_blockquote_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_blockquote_border_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'post_page_blockquote_border_color', array(
        'label' => __( 'Blockquote Border Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_blockquote_border_color',
    ) 
)); 
// Horizontal Line Color
$wp_customize->add_setting( 'post_page_hr_color', array(
        'default' => $tubeaceplay_customizer_defaults['post_page_hr_color'],
        'sanitize_callback'     => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'post_page_hr_color', array(
        'label' => __( 'Horizontal Line Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_hr_color',
    ) 
));

/* Tags */
// Show Tags
$wp_customize->add_setting( 'post_page_show_tags', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_show_tags'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'post_page_show_tags', array(
    'label'                 => __('Show Tags', 'tubeaceplay'),
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_show_tags',
    'type'                  => 'checkbox',
));
// Tags Label
$wp_customize->add_setting('post_page_tags_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_tags_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('post_page_tags_label', array(
    'label'                     => __('Tags Label', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_tags_label',
    'type'                      => 'text',
));
// Tags Separator
$wp_customize->add_setting('post_page_tags_separator', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_tags_separator'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('post_page_tags_separator', array(
    'label'                     => __('Tags Separator', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_tags_separator',
    'type'                      => 'text',
));
// Tags Label & Separator Color
$wp_customize->add_setting( 'post_page_tags_label_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_tags_label_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_tags_label_color',
    array(
        'label' => __( 'Tags Label &amp; Separator Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_tags_label_color',
    ) 
) );
// Tags Text Color
$wp_customize->add_setting( 'post_page_tags_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_tags_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_tags_txt_color',
    array(
        'label' => __( 'Tags Text Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_tags_txt_color',
    ) 
) );
// Tags Font Family
$wp_customize->add_setting('post_page_tags_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_tags_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_tags_font_family', array(
    'label'                     => __('Tags Font Family', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_tags_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Tags Font Size
$wp_customize->add_setting('post_page_tags_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_tags_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('post_page_tags_font_size', array(
    'label'                     => __('Tags Font Size', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_tags_font_size',
    'type'                      => 'number',
));
// Tags Font Size Unit
$wp_customize->add_setting('post_page_tags_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_tags_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_tags_font_size_unit', array(
    'label'                     => __('Tags Font Size Unit', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_tags_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));   
// Tags Background Color
$wp_customize->add_setting( 'post_page_tags_bg_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_tags_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_tags_bg_color',
    array(
        'label' => __( 'Tags Background Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_tags_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'post_page_tags_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_tags_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'post_page_tags_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_tags_transparent_bg',
    'type'                  => 'checkbox',
));
// Tags Border Color
$wp_customize->add_setting( 'post_page_tags_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_tags_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_tags_border_color',
    array(
        'label' => __( 'Tags Border Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_tags_border_color',
    ) 
));

/* Category */
// Show Category
$wp_customize->add_setting( 'post_page_show_category', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_show_category'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'post_page_show_category', array(
    'label'                 => __('Show Category', 'tubeaceplay'),
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_show_category',
    'type'                  => 'checkbox',
));
// Category Label
$wp_customize->add_setting('post_page_category_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_category_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('post_page_category_label', array(
    'label'                     => __('Category Label', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_category_label',
    'type'                      => 'text',
));
// Category Separator
$wp_customize->add_setting('post_page_category_separator', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_category_separator'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('post_page_category_separator', array(
    'label'                     => __('Category Separator', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_category_separator',
    'type'                      => 'text',
));
// Category Label & Separator Color
$wp_customize->add_setting( 'post_page_category_label_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_category_label_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_category_label_color',
    array(
        'label' => __( 'Category Label &amp; Separator Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_category_label_color',
    ) 
));
// Category Text Color
$wp_customize->add_setting( 'post_page_category_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_category_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_category_txt_color',
    array(
        'label' => __( 'Category Text Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_category_txt_color',
    ) 
));
// Category Font Family
$wp_customize->add_setting('post_page_category_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_category_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_category_font_family', array(
    'label'                     => __('Category Font Family', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_category_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Category Font Size
$wp_customize->add_setting('post_page_category_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_category_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('post_page_category_font_size', array(
    'label'                     => __('Category Font Size', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_category_font_size',
    'type'                      => 'number',
));
// Category Font Size Unit
$wp_customize->add_setting('post_page_category_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_category_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_category_font_size_unit', array(
    'label'                     => __('Category Font Size Unit', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_category_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));       
// Category Background Color
$wp_customize->add_setting( 'post_page_category_bg_color', array(
        'default' => $tubeaceplay_customizer_defaults['post_page_category_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'post_page_category_bg_color', array(
        'label' => __( 'Category Background Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_category_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'post_page_category_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_category_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'post_page_category_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_category_transparent_bg',
    'type'                  => 'checkbox',
));
// Category Border Color
$wp_customize->add_setting( 'post_page_category_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_category_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_category_border_color',
    array(
        'label' => __( 'Category Border Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_category_border_color',
    ) 
));



/* Performer */
// Show Performers
$wp_customize->add_setting( 'post_page_show_performers', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_show_performers'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'post_page_show_performers', array(
    'label'                 => __('Show Performers', 'tubeaceplay'),
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_show_performers',
    'type'                  => 'checkbox',
));
// Performers Label
$wp_customize->add_setting('post_page_performers_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_performers_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('post_page_performers_label', array(
    'label'                     => __('Performers Label', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_performers_label',
    'type'                      => 'text',
));
// Performers Separator
$wp_customize->add_setting('post_page_performers_separator', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_performers_separator'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('post_page_performers_separator', array(
    'label'                     => __('Performers Separator', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_performers_separator',
    'type'                      => 'text',
));
// Performers Label & Separator Color
$wp_customize->add_setting( 'post_page_performers_label_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_performers_label_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_performers_label_color',
    array(
        'label' => __( 'Performers Label &amp; Separator Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_performers_label_color',
    ) 
));
// Performers Text Color
$wp_customize->add_setting( 'post_page_performers_txt_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_performers_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_performers_txt_color',
    array(
        'label' => __( 'Performers Text Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_performers_txt_color',
    ) 
));
// Performers Font Family
$wp_customize->add_setting('post_page_performers_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_performers_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_performers_font_family', array(
    'label'                     => __('Performers Font Family', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_performers_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));
// Performers Font Size
$wp_customize->add_setting('post_page_performers_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_performers_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('post_page_performers_font_size', array(
    'label'                     => __('Performers Font Size', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_performers_font_size',
    'type'                      => 'number',
));
// Performers Font Size Unit
$wp_customize->add_setting('post_page_performers_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_performers_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_performers_font_size_unit', array(
    'label'                     => __('Performers Font Size Unit', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_performers_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
));       
// Performers Background Color
$wp_customize->add_setting( 'post_page_performers_bg_color', array(
        'default' => $tubeaceplay_customizer_defaults['post_page_performers_bg_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'post_page_performers_bg_color', array(
        'label' => __( 'Performers Background Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_performers_bg_color',
    ) 
));
// Transparent BG
$wp_customize->add_setting( 'post_page_performers_transparent_bg', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_performers_transparent_bg'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'post_page_performers_transparent_bg', array(
    'label'                 => __('Transparent Background', 'tubeaceplay'),
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_performers_transparent_bg',
    'type'                  => 'checkbox',
));
// Performers Border Color
$wp_customize->add_setting( 'post_page_performers_border_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_performers_border_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_performers_border_color',
    array(
        'label' => __( 'Performers Border Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_performers_border_color',
    ) 
));



/* Date & Time */
// Show Post Date
$wp_customize->add_setting( 'post_page_show_post_date', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_show_post_date'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'post_page_show_post_date', array(
    'label'                 => __('Show Post Date', 'tubeaceplay'),
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_show_post_date',
    'type'                  => 'checkbox',
));
// Show Post Time
$wp_customize->add_setting( 'post_page_show_post_time', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_show_post_time'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'post_page_show_post_time', array(
    'label'                 => __('Show Post Time', 'tubeaceplay'),
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_show_post_time',
    'type'                  => 'checkbox',
));
// Date Text Color
$wp_customize->add_setting( 'post_page_date_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['post_page_date_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'post_page_date_txt_color', array(
        'label' => __( 'Date / Time Text Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_date_txt_color',
    ) 
));
// Date & Time Label
$wp_customize->add_setting('post_page_date_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_date_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('post_page_date_label', array(
    'label'                     => __('Date / Time Label', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_date_label',
    'type'                      => 'text',
));

/* Author */
// Show Author
$wp_customize->add_setting( 'post_page_show_author', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_show_author'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'post_page_show_author', array(
    'label'                 => __('Show Author', 'tubeaceplay'),
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_show_author',
    'type'                  => 'checkbox',
));
// Author Label
$wp_customize->add_setting('post_page_author_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_author_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('post_page_author_label', array(
    'label'                     => __('Author Label', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_author_label',
    'type'                      => 'text',
));
// Show Author Avatar
$wp_customize->add_setting( 'post_page_show_author_avatar', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_show_author_avatar'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'post_page_show_author_avatar', array(
    'label'                 => __('Show Author Avatar', 'tubeaceplay'),
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_show_author_avatar',
    'type'                  => 'checkbox',
));
// Link Author Name to Profile
$wp_customize->add_setting( 'post_page_link_to_author', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_link_to_author'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'post_page_link_to_author', array(
    'label'                 => __('Link Author Name to Profile', 'tubeaceplay'),
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_link_to_author',
    'type'                  => 'checkbox',
));    
// Author Avatar Size 
$wp_customize->add_setting('post_page_avatar_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_avatar_size'],
    'sanitize_callback' => 'tubeaceplay_sanitize_integer',
));
$wp_customize->add_control('post_page_avatar_size', array(
    'label'                     => __('Author Avatar Size (Pixels)', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_avatar_size',
    'type'                      => 'number',
));
// Author Name Color
$wp_customize->add_setting( 'post_page_author_txt_color', array(
        'default' => $tubeaceplay_customizer_defaults['post_page_author_txt_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize, 'post_page_author_txt_color', array(
        'label' => __( 'Author Name Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_author_txt_color',
    ) 
));

/* Related */
// Show Related
$wp_customize->add_setting( 'post_page_show_related', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_show_related'],
    'sanitize_callback' => 'tubeaceplay_sanitize_checkbox',
));
$wp_customize->add_control( 'post_page_show_related', array(
    'label'                 => __('Show Related', 'tubeaceplay'),
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_show_related',
    'type'                  => 'checkbox',
));

// Related Label
$wp_customize->add_setting('post_page_related_label', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_related_label'],
    'sanitize_callback' => 'tubeaceplay_sanitize_nohtml',
));
$wp_customize->add_control('post_page_related_label', array(
    'label'                     => __('Related Label', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_related_label',
    'type'                      => 'text',
));

// Related Label Color
$wp_customize->add_setting( 'post_page_related_label_color',
    array(
        'default' => $tubeaceplay_customizer_defaults['post_page_related_label_color'],
        'sanitize_callback' => 'tubeaceplay_sanitize_hex_color',
        'transport' => 'postMessage',
    ) 
);
$wp_customize->add_control( new WP_Customize_Color_Control(
    $wp_customize,
    'post_page_related_label_color',
    array(
        'label' => __( 'Related Label Color', 'tubeaceplay' ),
        'section' => 'post_page_setting',
        'settings' => 'post_page_related_label_color',
    ) 
));
// Related Font Family
$wp_customize->add_setting('post_page_related_font_family', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_related_font_family'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_related_font_family', array(
    'label'                     => __('Related Label Font Family', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_related_font_family',
    'type'                      => 'select',
    'choices'                   => $fontsArr,
));

// Related Label Font Size
$wp_customize->add_setting('post_page_related_font_size', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_related_font_size'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_integer',
));    
$wp_customize->add_control('post_page_related_font_size', array(
    'label'                     => __('Related Label Font Size', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_related_font_size',
    'type'                      => 'number',
));
// Related Font Size Unit
$wp_customize->add_setting('post_page_related_font_size_unit', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_related_font_size_unit'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_select',
));    
$wp_customize->add_control('post_page_related_font_size_unit', array(
    'label'                     => __('Related Label Font Size Unit', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_related_font_size_unit',
    'type'                      => 'select',
    'choices'                   => array('px'=>'px','pt'=>'pt','em'=>'em','rem'=>'rem')
)); 

// Number of Related Results
$wp_customize->add_setting('post_page_related_num_results', array(
    'default'                   => $tubeaceplay_customizer_defaults['post_page_related_num_results'],
    'sanitize_callback' => 'tubeaceplay_sanitize_integer',
));
$wp_customize->add_control('post_page_related_num_results', array(
    'label'                     => __('Number of Related Results', 'tubeaceplay'),
    'section'                   => 'post_page_setting',
    'settings'                  => 'post_page_related_num_results',
    'type'                      => 'number',
));

/* CSS */
$wp_customize->add_setting( 'post_page_css', array(
    'default'               => $tubeaceplay_customizer_defaults['post_page_css'],
    'sanitize_callback'     => 'tubeaceplay_sanitize_css',
));
$wp_customize->add_control( 'post_page_css', array(
    'label'                 => __('CSS', 'tubeaceplay'), 
    'section'               => 'post_page_setting',
    'settings'              => 'post_page_css',
    'type'                  => 'textarea',
));