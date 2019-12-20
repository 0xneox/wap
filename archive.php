<?php 
/**
 * Displays archive page.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php get_header(); ?>

<?php $container = ( get_theme_mod('layout_container_fluid', $tubeaceplay_defaults['layout_container_fluid'])=='1' ? 'container-fluid' : 'container') ?>
<div class="<?php echo esc_attr($container) ?>">

  <?php $layout = tubeaceplay_layout(); ?>
  <?php if( $layout['left_sidebar']!='0' ) get_sidebar('left'); ?>
  
  <div id="content" class="<?php echo esc_attr($layout['content']) ?>">

    <?php if ( is_active_sidebar( 'above-content-1' ) ) : ?>
      <div class="above-content-widget-area" role="complementary">
        <?php dynamic_sidebar( 'above-content-1' ); ?>
      </div>
    <?php endif; ?>

    <h1 id="archive-title"><?php wp_title(''); ?> <?php _e('Archive','tubeaceplay'); ?></h1>

    <?php if( get_theme_mod('archive_page_show_monthly_list', $tubeaceplay_defaults['archive_page_show_monthly_list'])=='above' ) : ?>
      <h2 id="archives-monthly-title"><?php _e('Archives by Month','tubeaceplay'); ?></h2>
      <div class="row">
        <div id="archives-monthly">
          <?php wp_get_archives('format=custom&type=monthly&before=<div class="col-md-3 col-sm-4 col-xs-6">&after=</div>'); ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if( get_theme_mod('preview_layout_style', $tubeaceplay_defaults['preview_layout_style'])=='flexbox') : ?>
    <div id="tubeace-results" class="row tubeaceplay-flexbox"><?php endif; ?>

    <?php if( get_theme_mod('preview_layout_style', $tubeaceplay_defaults['preview_layout_style'])=='masonry' ) : ?>
    <div id="tubeace-results" class="masonry"><?php endif; ?>

      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part( 'preview', get_post_format() ); ?>
      <?php endwhile; ?>

    </div>

    <?php if( get_theme_mod('archive_page_show_monthly_list', $tubeaceplay_defaults['archive_page_show_monthly_list'])=='below' ) : ?>
      <h2 id="archives-monthly-title"><?php _e('Archives by Month','tubeaceplay'); ?></h2>  
      <div id="archives-monthly">
        <?php wp_get_archives('format=custom&type=monthly&before=<div class="col-md-3 col-sm-4 col-xs-6">&after=</div>'); ?>
      </div>
    <?php endif; ?>       

    <?php get_template_part( 'pagination' ); ?>

    <?php if ( is_active_sidebar( 'below-content-1' ) ) : ?>
      <div class="below-content-widget-area" role="complementary">
        <?php dynamic_sidebar( 'below-content-1' ); ?>
      </div>
    <?php endif; ?> 

  </div>   <!--#content -->
  <?php if( $layout['right_sidebar']!='0' ) get_sidebar('right'); ?>

</div><!-- .container -->

<?php get_footer(); ?>