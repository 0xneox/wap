<?php 
/**
 * Displays page pages.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php get_header(); ?>

<?php $container = ( get_theme_mod('layout_container_fluid', $tubeaceplay_defaults['layout_container_fluid'])=='1' ? 'container-fluid' : 'container') ?>
<div class="<?php echo esc_attr($container); ?>">

<?php $layout = tubeaceplay_layout(); ?>

  <?php if( $layout['left_sidebar']!='0' ) get_sidebar('left'); ?>

  <div id="content" class="<?php echo esc_attr($layout['content']); ?>">

    <?php if ( is_active_sidebar( 'above-content-1' ) ) : ?>
      <div class="above-content-widget-area" role="complementary">
        <?php dynamic_sidebar( 'above-content-1' ); ?>
      </div>
    <?php endif; ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header>
        <h1 id="page-title"><?php the_title(); ?></h1>
      </header>

      <?php while ( have_posts() ) : the_post(); ?>
        <div id="page">
          <?php the_content(); ?>
        </div>
        
        <footer>
          <?php edit_post_link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> '. __('Edit', 'tubeaceplay'), '<br />'); ?>
        </footer>

      <?php endwhile; ?>

    </article>

    <?php if ( is_active_sidebar( 'below-content-1' ) ) : ?>
      <div class="below-content-widget-area" role="complementary">
        <?php dynamic_sidebar( 'below-content-1' ); ?>
      </div>
    <?php endif; ?>
 
    <?php comments_template( '', true ); ?>

  </div><!-- #content -->
  <?php if( $layout['right_sidebar']!='0' ) get_sidebar('right'); ?>
</div><!-- .container -->

<?php get_footer(); ?>