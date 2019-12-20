<?php 
/**
 * Displays homepage.
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

    <?php if ( have_posts() ) : ?>

      <?php if( get_theme_mod('preview_layout_style', $tubeaceplay_defaults['preview_layout_style'])=='flexbox' ) : ?>
      <div id="tubeace-results" class="row tubeaceplay-flexbox"><?php endif; ?>

      <?php if( get_theme_mod('preview_layout_style', $tubeaceplay_defaults['preview_layout_style'])=='masonry' ) : ?>
      <div id="tubeace-results" class="masonry"><?php endif; ?>

        <?php while (have_posts()) : the_post(); ?>
          <?php 
          if( is_sticky() && !is_paged() ): // if sticky and not on home page 1
            get_template_part( 'sticky-preview', get_post_format() ); 
          else :
            get_template_part( 'preview', get_post_format() ); 
          endif; ?>
        <?php endwhile; ?>

      </div>

    <?php else : ?>  

      <h1><?php _e('No posts, yet.', 'tubeaceplay') ?></h1>
      <?php get_search_form(); ?>

    <?php endif; ?>

    <?php get_template_part( 'pagination' ); ?>

    <?php if ( is_active_sidebar( 'below-content-1' ) ) : ?>
      <div class="below-content-widget-area" role="complementary">
        <?php dynamic_sidebar( 'below-content-1' ); ?>
      </div>
    <?php endif; ?>

  </div><!--#content -->
  <?php if( $layout['right_sidebar']!='0' ) get_sidebar('right'); ?>

</div><!-- .container -->

<?php get_footer(); ?>