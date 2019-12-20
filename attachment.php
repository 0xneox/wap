<?php 
/**
 * Displays attachment page.
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
        <h1 id="attachment-title"><?php the_title(); ?></h1>
      </header>

      <?php while ( have_posts() ) : the_post(); ?>

        <div id="attachment">
          <?php 
          $filename_only = basename( get_attached_file( $attachment_id ) ); // Just the file name
          ?>

          <a href="<?php echo wp_get_attachment_url(); ?>"><?php _e('Download File', 'tubeaceplay') ?> <?php echo $filename_only ?></a> 

          <?php the_content(); //show description ?>

          <footer>
            <?php 
            //date & time
            echo esc_html(get_theme_mod('attachment_page_date_label', $tubeaceplay_defaults['attachment_page_date_label'])); ?>

            <time datetime="<?php echo get_the_date("Y-m-d"); ?>">

              <?php
              if(get_theme_mod('attachment_page_show_post_date', $tubeaceplay_defaults['attachment_page_show_post_date'])==1){
                echo get_the_date().' ';
              }

              if(get_theme_mod('attachment_page_show_post_time', $tubeaceplay_defaults['attachment_page_show_post_time'])==1){
                echo get_the_time();
              } ?>              

            </time>
          
            <?php
            //author
            if(get_theme_mod('attachment_page_show_author', $tubeaceplay_defaults['attachment_page_show_author'])==1){

              echo esc_html( get_theme_mod('attachment_page_author_label', $tubeaceplay_defaults['attachment_page_author_label']) );

              if(get_theme_mod('attachment_page_link_to_author', $tubeaceplay_defaults['attachment_page_link_to_author'])==1){

                if(get_theme_mod('attachment_page_show_author_avatar', $tubeaceplay_defaults['attachment_page_show_author_avatar'])==1){

                  echo '<a href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ).'">'.get_avatar( get_the_author_meta( 'ID' ), get_theme_mod('attachment_page_avatar_size', $tubeaceplay_defaults['attachment_page_avatar_size'] ) ).'</a>';
                }
                echo' <a class="author-link" href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ).'"><span class="author">'.get_the_author().'</span></a>';

              } else { //don't link to author page

                if(get_theme_mod('attachment_page_show_author_avatar', $tubeaceplay_defaults['attachment_page_show_author_avatar'])==1){

                  echo get_avatar( get_the_author_meta( 'ID' ), get_theme_mod('attachment_page_avatar_size', $tubeaceplay_defaults['attachment_page_avatar_size']) );
                }
                echo' <span class="author">'.get_the_author().'</span>';
              }
            }?>

            <?php edit_post_link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  '. __('Edit', 'tubeaceplay'), '<br />'); ?>
          </footer>
          
        </div>

      <?php endwhile;?>

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