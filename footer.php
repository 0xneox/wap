<?php 
/**
 * Displays the footer.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php global $tubeaceplay_defaults; ?>


<?php if ( is_active_sidebar( 'above-footer-1' ) ) : ?>
  <?php $container = ( get_theme_mod('layout_container_fluid', $tubeaceplay_defaults['layout_container_fluid'])=='1' ? 'container-fluid' : 'container') ?>

  <div class="<?php echo esc_attr($container); ?>">  	
    <div class="row">
      <div class="col-xs-12">
	    <div class="above-footer-widget-area" role="complementary">
	      <?php dynamic_sidebar( 'above-footer-1' ); ?>
	    </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php $container = (get_theme_mod('footer_container_fluid', $tubeaceplay_defaults['footer_container_fluid'])==true) ? 'container-fluid' : 'container' ?>

<?php if ( get_theme_mod('footer_container_position', $tubeaceplay_defaults['footer_container_position'])=='outside' ) echo'<div id="footer" class="'.$container.' ">'; ?>

<div class="footer">
	<?php if ( get_theme_mod('footer_container_position', $tubeaceplay_defaults['footer_container_position'])=='inside' ) echo'<div id="footer" class="'.$container.' ">'; ?>

	<?php
	$footer_num_cols = get_theme_mod('footer_num_cols', $tubeaceplay_defaults['footer_num_cols']);
	$footer_cols_xs_class = get_theme_mod('footer_cols_xs_class', $tubeaceplay_defaults['footer_cols_xs_class']);
	$footer_cols_sm_class = get_theme_mod('footer_cols_sm_class', $tubeaceplay_defaults['footer_cols_sm_class']);
	$footer_cols_md_class = get_theme_mod('footer_cols_md_class', $tubeaceplay_defaults['footer_cols_md_class']);
	$footer_cols_lg_class = get_theme_mod('footer_cols_lg_class', $tubeaceplay_defaults['footer_cols_lg_class']);
	//$size = 12/$footer_num_cols;

	for($i=1;$i<=$footer_num_cols;$i++): ?>

		<div id="footer-<?php echo $i ;?>" class="<?php echo $footer_cols_xs_class.' '.$footer_cols_sm_class.' '.$footer_cols_md_class.' '.$footer_cols_lg_class;?>">

		  <?php if ( is_active_sidebar( 'footer-'.$i ) ) : ?>
		    <div class="footer-widget-area" role="complementary">
		      <?php dynamic_sidebar( 'footer-'.$i ); ?>
		    </div>
		  <?php endif; ?>

		</div>

	<?php endfor; ?>

	<div class="text-center col-xs-12 col-md-12">
	  &copy; <?php echo date('Y'); ?>
	  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a> |
	  <a href="https://tubeace.com"><?php _e('Play Theme by Tube Ace', 'tubeaceplay'); ?></a> | <?php _e('Powered by', 'tubeaceplay'); ?> <a href="https://wordpress.org/" target="_blank"><?php _e('WordPress', 'tubeaceplay'); ?></a>
	</div>		

	<?php if ( get_theme_mod('footer_container_position', $tubeaceplay_defaults['footer_container_position'])=='inside' ) echo'</div> <!-- /.container inside -->'; ?>
</div>

<?php if ( get_theme_mod('footer_container_position', $tubeaceplay_defaults['footer_container_position'])=='outside' ) echo'</div> <!-- /.container outside -->'; ?>

<?php wp_footer(); ?>

</body>
</html>