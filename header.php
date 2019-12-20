<?php 
/**
 * Displays the header.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */

global $tubeaceplay_defaults; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php wp_head(); ?>

</head>

  <body <?php body_class(); ?>>

  <?php
  //header
  $header_layout = get_theme_mod('header_layout', $tubeaceplay_defaults['header_layout']);
  require get_template_directory() . '/inc/header/header-'.$header_layout.'.php';
  ?>

  <?php if ( is_active_sidebar( 'below-header-1' ) ) : ?>
    <?php $container = ( get_theme_mod('layout_container_fluid', $tubeaceplay_defaults['layout_container_fluid'])=='1' ? 'container-fluid' : 'container') ?>
    <div class="<?php echo esc_attr($container); ?>">
  	  <div class="row">
  	    <div class="col-xs-12">
		      <div class="below-header-widget-area" role="complementary">
		        <?php dynamic_sidebar( 'below-header-1' ); ?>
		      </div>
	      </div>
	    </div>
	  </div>
  <?php endif; ?>