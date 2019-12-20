<?php 
/**
 * Displays left sidebar.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php $layout = tubeaceplay_layout(); ?>

<div id="sidebar-left" class="sidebar-left <?php echo esc_attr($layout['left_sidebar']); ?>">

  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <div class="sidebar-left-widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
  <?php endif; ?>
</div>