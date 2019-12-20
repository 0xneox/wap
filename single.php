<?php 
/**
 * Displays the post page.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php get_header(); ?>

<?php $container = ( get_theme_mod('layout_container_fluid', $tubeaceplay_defaults['layout_container_fluid'])=='1' ? 'container-fluid' : 'container') ?>
<div class="<?php echo $container ?>">

<?php $layout = tubeaceplay_layout(); ?>

  <?php if( $layout['left_sidebar']!='0' ) get_sidebar('left'); ?>
  
  <div id="content" class="<?php echo $layout['content'] ?>">

    <?php if ( is_active_sidebar( 'above-content-1' ) ) : ?>
      <div class="above-content-widget-area" role="complementary">
        <?php dynamic_sidebar( 'above-content-1' ); ?>
      </div>
    <?php endif; ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php if(get_theme_mod('post_page_title_position', $tubeaceplay_defaults['post_page_title_position'])=='above'){ ?>
        <header>
          <h1 id="post-title"><?php the_title(); ?></h1>
        </header>
      <?php } ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <div id="post">

          <?php 

          if(get_theme_mod('post_page_show_featured_image', $tubeaceplay_defaults['post_page_show_featured_image'])==1){

            the_post_thumbnail( get_theme_mod('post_page_featured_image_size', $tubeaceplay_defaults['post_page_featured_image_size']), array('class'=>'img-responsive')); 
          } ?>

          <?php the_content(); ?>
          <?php if(function_exists('tubeace_sponsor_link')) { tubeace_sponsor_link(); } ?>
          <?php if(function_exists('tubeace_misc')) { tubeace_misc(1); } ?>

          <?php if(get_theme_mod('post_page_title_position', $tubeaceplay_defaults['post_page_title_position'])=='below'){ ?>
            <header>
              <h1 id="post-title"><?php the_title(); ?></h1>
            </header>
          <?php } ?>          

          <?php wp_link_pages( array( 'before' => '<div class="page-links">'. __('Pages:','tubeaceplay'), 'after' => '</div>' ) ); ?>

          <div class="row">
            <div class="post-page-ratings col-xs-6">
              <?php if(function_exists('the_ratings')) { the_ratings(); } ?>  
            </div>

            <div class="post-page-views col-xs-6">
              <?php if(function_exists('pvc_post_views')) { pvc_post_views($post_id = get_the_id() ); } ?>
            </div>
          </div>

          <div class="row">
            <?php if(get_theme_mod('post_page_show_tags', $tubeaceplay_defaults['post_page_show_tags'])==1 && get_the_tags() != '' ){ ?>
              <div class="post-page-tags col-md-12">
                <?php echo esc_html(get_theme_mod('post_page_tags_label', $tubeaceplay_defaults['post_page_tags_label'])); ?>
                <?php the_tags('', get_theme_mod('post_page_tags_separator', $tubeaceplay_defaults['post_page_tags_separator']), ''); ?>
              </div>
            <?php } ?>

            <?php if( get_theme_mod('post_page_show_category', $tubeaceplay_defaults['post_page_show_category'])==1 && get_the_category() != '' ) {?>
              <div class="post-page-category col-md-12">
                <?php echo esc_html(get_theme_mod('post_page_category_label', $tubeaceplay_defaults['post_page_category_label'])); ?>
                <?php the_category( get_theme_mod('post_page_category_separator', $tubeaceplay_defaults['post_page_category_separator']) ); ?>
              </div>
            <?php } ?>
            
            <?php if( function_exists('tubeace_enqueue') && get_theme_mod('post_page_show_performers', $tubeaceplay_defaults['post_page_show_performers'])==1 && get_the_term_list( $post->ID, "performer", 'Performers: ', ', ', '' ) != '' ) {?>
              <div class="post-page-performers col-md-12">
                <?php echo get_the_term_list( $post->ID, "performer", esc_html(get_theme_mod('post_page_performers_label', $tubeaceplay_defaults['post_page_performers_label'])), get_theme_mod('post_page_performers_separator', $tubeaceplay_defaults['post_page_performers_separator']), '' ) ?>
              </div>
            <?php } ?>
          </div>

          <?php 
          //date & time
          echo esc_html(get_theme_mod('post_page_date_label', $tubeaceplay_defaults['post_page_date_label'])); ?>

          <time datetime="<?php echo get_the_date("Y-m-d\TH:i:s"); ?>">

            <?php
            if(get_theme_mod('post_page_show_post_date', $tubeaceplay_defaults['post_page_show_post_date'])==1){
              echo get_the_date().' ';
            }

            if(get_theme_mod('post_page_show_post_time', $tubeaceplay_defaults['post_page_show_post_time'])==1){
              echo get_the_time();
            } ?>              

          </time>

          <?php
          //author
          if(get_theme_mod('post_page_show_author', $tubeaceplay_defaults['post_page_show_author'])==1){

            echo esc_html(get_theme_mod('post_page_author_label', $tubeaceplay_defaults['post_page_author_label']));

            if(get_theme_mod('post_page_link_to_author', $tubeaceplay_defaults['post_page_link_to_author'])==1){

              if(get_theme_mod('post_page_show_author_avatar', $tubeaceplay_defaults['post_page_show_author_avatar'])==1){

                echo '<a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'">'.get_avatar( get_the_author_meta( 'ID' ), get_theme_mod('post_page_avatar_size', $tubeaceplay_defaults['post_page_avatar_size'] ) ).'</a>';
              }
              echo' <a class="author-link" href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'"><span class="author">'.get_the_author().'</span></a>';

            } else { //don't link to author page

              if(get_theme_mod('post_page_show_author_avatar')==1){

                echo get_avatar( get_the_author_meta( 'ID' ), get_theme_mod('post_page_avatar_size', $tubeaceplay_defaults['post_page_avatar_size']) );
              }
              echo' <span class="author">'.get_the_author().'</span>';
            }
          }?>
          
          <?php if(function_exists('tubeace_misc')) { tubeace_misc(2); } ?>
          
          <?php edit_post_link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> '. __('Edit', 'tubeaceplay'), '<br />'); ?>
          
          <?php comments_template( '', true ); ?>
          
        </div>

      <?php endwhile; ?>

      <?php 

      if(get_theme_mod('post_page_show_related', $tubeaceplay_defaults['post_page_show_related'])==1){ ?>

        <?php if ( is_active_sidebar( 'above-related-1' ) ) : ?>
          <div class="above-related-widget-area" role="complementary">
            <?php dynamic_sidebar( 'above-related-1' ); ?>
          </div>
        <?php endif; ?>

        <?php

        // Get the current post id
        $post_id = get_queried_object_id();

        // Get the post categories
        $categories = get_the_category( $post_id );

        foreach ( $categories as $category ) {
            if ( $category->parent == 0 ) {
                $term_ids[] = $category->term_id;
            } else {
                $term_ids[] = $category->parent;
                $term_ids[] = $category->term_id;
            }
        }

        // Remove duplicate values from the array
        $unique_array = array_unique( $term_ids );

        $args = [
            'post__not_in' => [$post_id],
            'posts_per_page' => get_theme_mod('post_page_related_num_results', $tubeaceplay_defaults['post_page_related_num_results']),
            'ignore_sticky_posts' => 1,
            'orderby' => 'rand',
            'no_found_rows' => true,
            'tax_query' => [
                [
                    'taxonomy' => 'category',
                    'terms' => $unique_array,
                    'include_children' => false,
                ],
            ],
        ];

        //get tag IDs
        $tag_ids = wp_get_post_tags( $post_id, array( 'fields' => 'ids' ) );

        // if tags for post, add to args for query
        if( $tag_ids ){
          $args['tag__in'] = $tag_ids;
        }

        $wp_query = new WP_Query($args); 
        echo '<h3 id="post-page-related-title">'.esc_html(get_theme_mod('post_page_related_label', $tubeaceplay_defaults['post_page_related_label'])).'</h3>';

        ?>

        <?php if( get_theme_mod('preview_layout_style', $tubeaceplay_defaults['preview_layout_style'])=='flexbox' ) : ?>
        <div id="tubeace-results" class="tubeaceplay-flexbox"><?php endif; ?>

        <?php if( get_theme_mod('preview_layout_style', $tubeaceplay_defaults['preview_layout_style'])=='masonry' ) : ?>
        <div id="tubeace-results" class="masonry"><?php endif; ?>

          <?php
          if ( $wp_query ->have_posts() ) {

            while (have_posts()) : the_post();
              get_template_part( 'preview', get_post_format() );
            endwhile;
          }

          wp_reset_postdata(); 
          wp_reset_query();
        ?>

        </div>

        <?php }

      ?>

    </article>

    <?php if ( is_active_sidebar( 'below-content-1' ) ) : ?>
      <div class="below-content-widget-area" role="complementary">
        <?php dynamic_sidebar( 'below-content-1' ); ?>
      </div>
    <?php endif; ?> 

  </div><!-- #content -->
  <?php if( $layout['right_sidebar']!='0' ) get_sidebar('right'); ?>
</div><!-- .container -->

<?php get_footer(); ?>