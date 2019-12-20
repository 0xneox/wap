<?php 
/**
 * Displays search page.
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
    
    <h1 id="search-title">
      <?php echo esc_html(get_theme_mod('search_page_title_label', $tubeaceplay_defaults['search_page_title_label'])); ?>
      <?php echo esc_html( get_search_query( false ) );  ?>
    </h1>

    <?php if ( have_posts() ) : ?>

      <?php if( get_theme_mod('preview_layout_style', $tubeaceplay_defaults['preview_layout_style'])=='flexbox') : ?>
      <div id="tubeace-results" class="row tubeaceplay-flexbox"><?php endif; ?>

      <?php if( get_theme_mod('preview_layout_style', $tubeaceplay_defaults['preview_layout_style'])=='masonry' ) : ?>
        <div id="tubeace-results" class="masonry"><?php endif; ?>

        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part( 'preview', get_post_format() ); ?>
        <?php endwhile; ?>

      </div>

    <?php else : ?>

      <div id="search-error-content">
        <?php echo esc_html(get_theme_mod('search_page_content_label', $tubeaceplay_defaults['search_page_content_label'])); ?>
        <?php get_search_form(); ?>
      </div>

    <?php endif; ?>

    <?php get_template_part( 'pagination' ); ?>

    <?php if ( is_active_sidebar( 'below-content-1' ) ) : ?>
      <div class="below-content-widget-area" role="complementary">
        <?php dynamic_sidebar( 'below-content-1' ); ?>
      </div>
    <?php endif; ?>    

  </div><!-- #content -->
  <?php if( $layout['right_sidebar']!='0' ) get_sidebar('right'); ?>
</div><!-- .container -->

<?php get_footer(); ?>