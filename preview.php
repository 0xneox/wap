<?php 
/**
 * Displays post preview template part.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php global $tubeaceplay_defaults; ?>

<!-- start preview-->
<?php 

$classes = array(
    get_theme_mod('preview_xs_class', $tubeaceplay_defaults['preview_xs_class']),
    get_theme_mod('preview_sm_class', $tubeaceplay_defaults['preview_sm_class']),
    get_theme_mod('preview_md_class', $tubeaceplay_defaults['preview_md_class']),
    get_theme_mod('preview_lg_class', $tubeaceplay_defaults['preview_lg_class']),
    'post-preview'
  ); ?>

<div <?php post_class($classes) ?>>
  <div class="post-preview-styling">

    <?php if( get_theme_mod('preview_show_duration', $tubeaceplay_defaults['preview_show_duration'])==1 && get_post_meta( get_the_ID(),'duration',true)  ) {  ?>
      <div class="duration"><?php echo tubeaceplay_duration(get_post_meta( get_the_ID(),'duration',true)); ?></div> 
    <?php } ?>

    <?php if ( has_post_thumbnail() ): ?>
      <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail( get_theme_mod('preview_featured_image_size', $tubeaceplay_defaults['preview_featured_image_size']), array('class'=>'img-responsive')); ?>
      </a>
    <?php endif; ?>

    <?php if(get_theme_mod('preview_show_title', $tubeaceplay_defaults['preview_show_title'])==1): ?>
      <h2><a class="preview-title" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo $post->post_title; ?></a></h2>
    <?php endif; 

    if( (get_theme_mod('preview_excerpt_content', $tubeaceplay_defaults['preview_excerpt_content'])=='excerpt') ){
      the_excerpt();
    } else {
      the_content();
    } ?>

    <div class="preview-date">
      <a href="<?php the_permalink() ?>">
        <?php
        if(get_theme_mod('preview_show_post_date', $tubeaceplay_defaults['preview_show_post_date'])==1){
          echo get_the_date().' ';
        }

        if(get_theme_mod('preview_show_post_time', $tubeaceplay_defaults['preview_show_post_time'])==1){
          echo get_the_time();
        } ?>
      </a>
    </div>

    <div class="pull-left">
      <?php
      // author
      if(get_theme_mod('preview_show_author', $tubeaceplay_defaults['preview_show_author'])==1){

        if(get_theme_mod('preview_link_to_author', $tubeaceplay_defaults['preview_link_to_author'])==1){

          if(get_theme_mod('preview_show_author_avatar', $tubeaceplay_defaults['preview_show_author_avatar'])==1){

            echo '<a href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ).'">'.get_avatar( get_the_author_meta( 'ID' ), get_theme_mod('preview_avatar_size', $tubeaceplay_defaults['preview_avatar_size']) ).'</a>';
          }
          echo' <a href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ).'"><span class="preview-author">'.get_the_author().'</span></a>';

        } else { //don't link to author page

          if(get_theme_mod('preview_show_author_avatar', $tubeaceplay_defaults['preview_show_author_avatar'])==1){

            echo get_avatar( get_the_author_meta( 'ID' ), get_theme_mod('preview_avatar_size', $tubeaceplay_defaults['preview_avatar_size']) );
          }
          echo' <span class="preview-author">'.get_the_author().'</span>';
        }
      }?>
    </div>
    <div class="pull-right">
      <?php 
      // comments
      if(get_theme_mod('preview_show_number_comments', $tubeaceplay_defaults['preview_show_number_comments'])==1){

        $comments_count = wp_count_comments( get_the_id() ); 

        if(get_theme_mod('preview_link_to_comments', $tubeaceplay_defaults['preview_link_to_comments'])==1){

          echo '<a href="'.esc_url( get_the_permalink() ).'#comments">'.$comments_count->approved .' <span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a>';

        } else {
          echo $comments_count->approved .' <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>';
        }

      } ?>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <?php
      // ratings
      if(get_theme_mod('preview_show_rating', $tubeaceplay_defaults['preview_show_rating'])==1){
      ?>
        <div class="col-md-6 post-preview-rating">
          <?php if(function_exists('the_ratings')) { echo expand_ratings_template( get_site_option('tubeace_post_preview_rating_templ','<span class="rating">%RATINGS_IMAGES%</span>') , get_the_ID()); }; ?> 
        </div>
      <?php } 

      // view count
      if(get_theme_mod('preview_show_view_count', $tubeaceplay_defaults['preview_show_view_count'])==1){
      ?>
        <div class="col-md-6 post-preview-view-count">
          <?php if(function_exists('pvc_post_views')) {  pvc_post_views( $post_id = get_the_id() ); }; ?>
        </div>
      <?php
      }
      ?>
    </div>

    <?php if(get_theme_mod('preview_show_tags', $tubeaceplay_defaults['preview_show_tags'])==1 && get_the_tags() != '' ): ?>
      <div class="post-preview-tags">
        <?php echo esc_html( get_theme_mod('preview_tags_label', $tubeaceplay_defaults['preview_tags_label'])); ?>
        <?php the_tags('', get_theme_mod('preview_tags_separator', $tubeaceplay_defaults['preview_tags_separator']), ''); ?>
      </div>
    <?php endif; ?>

    <?php if( get_theme_mod('preview_show_category', $tubeaceplay_defaults['preview_show_category'])==1 && get_the_category() != '' ) :?>
      <div class="post-preview-category">
        <?php echo esc_html( get_theme_mod('preview_category_label', $tubeaceplay_defaults['preview_category_label'])); ?>
        <?php the_category(get_theme_mod('preview_category_separator', $tubeaceplay_defaults['preview_category_separator'])); ?>
      </div>
    <?php endif; ?>

    <?php if( get_theme_mod('preview_show_performers', $tubeaceplay_defaults['preview_show_performers'])==1 && get_the_term_list( $post->ID, "performer", 'Performers: ', ', ', '' ) != ''  ) :?>
      <div class="post-preview-performers">
        <?php echo get_the_term_list( $post->ID, "performer", esc_html(get_theme_mod('preview_performers_label', $tubeaceplay_defaults['preview_performers_label'])), get_theme_mod('preview_performers_separator', $tubeaceplay_defaults['preview_performers_separator']), '' ) ?>
      </div>
    <?php endif; ?>

    <?php edit_post_link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  '. __('Edit', 'tubeaceplay'), '<br />'); ?>
  </div> <!-- post-preview-styling -->
</div>
<!-- end preview -->