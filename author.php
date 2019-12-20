<?php 
/**
 * Displays author page.
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

    <?php $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author')); ?>
    <h1 id="author-title"><?php echo $curauth->nickname; ?></h1>

    <?php if(( get_theme_mod('author_page_show_website', $tubeaceplay_defaults['author_page_show_website'])==1 || get_theme_mod('author_page_show_bio', $tubeaceplay_defaults['author_page_show_bio'])==1 )&&( get_the_author_meta('url') != '' || get_the_author_meta('description') != '' )) : ?>

        <div id="author">

            <div class="row">
              <div class="col-md-8" id="author-meta">

                <?php if(get_theme_mod('author_page_show_website', $tubeaceplay_defaults['author_page_show_website'])==1 && get_the_author_meta('url') != ''  ) : ?>
                  Website: <a href="<?php echo esc_url(get_the_author_meta('url')); ?>"><?php echo esc_url(get_the_author_meta('url')); ?></a> <br>
                <?php endif;  ?>

                <?php if(get_theme_mod('author_page_show_bio', $tubeaceplay_defaults['author_page_show_bio'])==1 && get_the_author_meta('description') != '' ) : ?>
                  Bio: <?php echo esc_html(get_the_author_meta('description')); ?>
                <?php endif;  ?>

              </div>
            </div>
            
        </div><!-- #author --> 

    <?php endif  ?>     

    <?php if( get_theme_mod('preview_layout_style', $tubeaceplay_defaults['preview_layout_style'])=='flexbox') : ?>
    <div id="tubeace-results" class="row tubeaceplay-flexbox"><?php endif; ?>

    <?php if( get_theme_mod('preview_layout_style', $tubeaceplay_defaults['preview_layout_style'])=='masonry' ) : ?>
    <div id="tubeace-results" class="masonry"><?php endif; ?>

      <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part( 'preview', get_post_format() );?>
      <?php endwhile; ?>

    </div>

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