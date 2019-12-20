<?php 
/**
 * Displays comments section.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php global $tubeaceplay_defaults; ?>

<?php 
if (post_password_required()) return;?>
<?php
if (comments_open()): ?>

  <?php if ( is_active_sidebar( 'above-comments-1' ) ) : ?>
    <div class="above-comments-widget-area" role="complementary">
      <?php dynamic_sidebar( 'above-comments-1' ); ?>
    </div>
  <?php endif; ?>

  <div id="comments" class="col-md-12">
  <?php
  if (have_comments()): ?>
    <h2 class="comments-title">

    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
      <?php
      if ( get_comments_number() ==1 ) {
        printf(__('1 comment on &ldquo;%2$s&rdquo;', 'tubeaceplay') , number_format_i18n(get_comments_number()) , '<span>' . get_the_title() . '</span>');
      } else {
        printf(__('%1$s comments on &ldquo;%2$s&rdquo;', 'tubeaceplay') , number_format_i18n(get_comments_number()) , '<span>' . get_the_title() . '</span>');
      } ?>
    </h2>
    <ul class="commentlist">
      <?php 
      $args = array(
        'avatar_size' => get_theme_mod('comment_avatar_size', $tubeaceplay_defaults['comment_avatar_size'] ),
        'callback' => 'tubeaceplay_format_comment',
        );
      wp_list_comments($args); ?>
    </ul><!-- .commentlist -->

    <?php
    endif;
    if (get_comment_pages_count() > 1): // pagination ?>
    <ul class="pager">
      <li class="previous">
        <?php previous_comments_link(__('&larr; Older Comments', 'tubeaceplay')); ?>
      </li>
      <li class="next">
        <?php next_comments_link(__('Newer Comments &rarr;', 'tubeaceplay')); ?>
      </li>
    </ul>
    <?php
    endif;
     ?>
    <?php // If comments are closed and there are comments, let's leave a little note.
    if (!comments_open() && get_comments_number() > 0): ?>
    <p class="nocomments">
      <?php _e('Comments are closed.', 'tubeaceplay'); ?>
    </p>
    <?php
    endif;

    $args = array('class_submit' => 'btn btn-default');
    comment_form($args); ?>
  </div><!-- #comments -->
<?php  endif; ?>