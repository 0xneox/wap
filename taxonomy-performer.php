<?php 
/**
 * Displays Performer's taxonomy page.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php get_header(); ?>

<?php $container = ( get_theme_mod('layout_container_fluid', $tubeaceplay_defaults['layout_container_fluid'])=='1' ? 'container-fluid' : 'container') ?>
<div id="container" class="<?php echo esc_attr($container); ?>">

  <?php $layout = tubeaceplay_layout(); ?>
  <?php if( $layout['left_sidebar']!='0' ) get_sidebar('left'); ?>
  
  <div class="<?php echo esc_attr($layout['content']); ?>">

    <?php if ( is_active_sidebar( 'above-content-1' ) ) : ?>
      <div class="above-content-widget-area" role="complementary">
        <?php dynamic_sidebar( 'above-content-1' ); ?>
      </div>
    <?php endif; ?>

    <?php
    $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
    ?>

    <header>
      <h1 id="taxonomy-name"><?php echo $term->name; ?> Videos</h1>
    </header>
    <?php

    $paged = 1;
    if ( get_query_var('paged') ) $paged = get_query_var('paged');
    if ( get_query_var('page') ) $paged = get_query_var('page');

    $args = array(
     'paged' => $paged,
     'performer' => $term->slug 
    );

    $wp_query = new WP_Query($args); 
    ?>

    <?php if ( $wp_query ->have_posts() ) : ?>

      <?php if( get_theme_mod('preview_layout_style', $tubeaceplay_defaults['preview_layout_style'])=='flexbox' ) : ?>
      <div id="tubeace-results" class="row tubeaceplay-flexbox"><?php endif; ?>

      <?php if( get_theme_mod('preview_layout_style', $tubeaceplay_defaults['preview_layout_style'])=='masonry' ) : ?>
      <div id="tubeace-results" class="masonry"><?php endif; ?>

        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part( 'preview', get_post_format() ); ?>
        <?php endwhile; ?>

      </div>

    <?php else : ?>  

      <h1><?php _e('No posts, yet.', 'tubeaceplay') ?></h1>
      <?php get_search_form(); ?>

    <?php endif; ?>

    <?php if ( is_active_sidebar( 'below-content-1' ) ) : ?>
      <div class="below-content-widget-area" role="complementary">
        <?php dynamic_sidebar( 'below-content-1' ); ?>
      </div>
    <?php endif; ?> 

    <?php get_template_part( 'pagination' ); ?>

  </div><!--#content -->
  <?php if( $layout['right_sidebar']!='0' ) get_sidebar('right'); ?>

</div><!-- .container -->

<?php get_footer(); ?>