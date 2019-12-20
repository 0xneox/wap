<?php 
/**
 * Displays right sidebar.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php $layout = tubeaceplay_layout(); ?>

<div id="sidebar-right" class="sidebar-right <?php echo esc_attr($layout['right_sidebar']); ?>">

  <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <div class="sidebar-right-widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div>
  <?php endif; ?>
</div>