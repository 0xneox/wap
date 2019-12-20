<?php 
/**
 * Displays 404 page.
 *
 * @package       Themeply
 * @subpackage    tubeaceplay
 * @since         tubeaceplay 1.0
 * @link          http://themeply.com
 * @link          http://tubeaceplay.com
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

    <header>
      <h1 id="page-404-title"><?php echo esc_html(get_theme_mod('page_404_title_label', $tubeaceplay_defaults['page_404_title_label'])); ?></h1>
    </header>

    <div id="page-404">
      <?php echo esc_html(get_theme_mod('page_404_content_label', $tubeaceplay_defaults['page_404_content_label'])); ?>
      <?php get_search_form(); ?>
    </div>

    <?php if ( is_active_sidebar( 'below-content-1' ) ) : ?>
      <div class="below-content-widget-area" role="complementary">
        <?php dynamic_sidebar( 'below-content-1' ); ?>
      </div>
    <?php endif; ?> 

  </div><!--#content -->
  <?php if( $layout['right_sidebar']!='0' ) get_sidebar('right'); ?>

</div><!-- .container -->

<?php get_footer(); ?>