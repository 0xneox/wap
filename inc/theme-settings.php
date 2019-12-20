<?php 
/**
 * Theme Settings page.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */

/* add menu page */
function tubeaceplay_add_theme_menu_item(){
  add_theme_page("Tube Ace Play Theme Settings", "Theme Settings", "manage_options", "theme-panel", "tubeaceplay_settings_page");
}
add_action("admin_menu", "tubeaceplay_add_theme_menu_item");

function tubeaceplay_custom_wp_admin_style($hook) {

  if($hook != 'appearance_page_theme-panel') {
          return;
  }
  wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/admin-style.css', false, '1.0.0' );
  wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'tubeaceplay_custom_wp_admin_style' );

function tubeaceplay_settings_page(){ 

  global $tubeaceplay_defaults; ?>

  <h1><?php _e('Tube Ace Play Theme Settings','tubeaceplay') ?></h1>

  <?php
  if( $_POST['ResetCustomizations'] != '' ) {

    remove_theme_mods();  
    ?>
    <div class="notice notice-success is-dismissible"> 
      <p><strong><?php _e('Theme Customizations Reset','tubeaceplay'); ?></strong></p>
      <button type="button" class="notice-dismiss">
        <span class="screen-reader-text"><?php _e('Dismiss this notice.','tubeaceplay'); ?></span>
      </button>
    </div>
    <br />
  <?php
  }
  if( $_POST['ThirdPartySettings'] != '' ) {

    $tubeace_post_preview_rating_templ = stripslashes($_POST['tubeace_post_preview_rating_templ']);

    //update
    update_site_option( 'tubeace_post_preview_rating_templ', $tubeace_post_preview_rating_templ );

    ?>
    <div class="notice notice-success is-dismissible"> 
      <p><strong><?php _e('3rd-Party Plugin Settings Updated','tubeaceplay'); ?></strong></p>
      <button type="button" class="notice-dismiss">
        <span class="screen-reader-text"><?php _e('Dismiss this notice.','tubeaceplay'); ?></span>
      </button>
    </div>
    <br />
  <?php
  }


  ?>

  <h2><?php _e('Reset Theme Customizations','tubeaceplay') ?></h2>

  <div class="tubeaceplay-customizations-group">
    <div class="tubeaceplay-customizations-description">
      <?php _e('Restore all theme settings to their default settings.','tubeaceplay') ?><br>
      <?php _e('WARNING: Cannot be undone unless theme customization saved by exporting below.','tubeaceplay') ?>
    </div>
    <div class="tubeaceplay-customizations-button">
      <form action="<?php echo admin_url('admin.php?page=theme-panel') ?>" method="post">
        <input type="submit" value="<?php _e('Reset Theme Customizations','tubeaceplay'); ?>" class="button-primary" name="ResetCustomizations">
      </form>      
    </div>
  </div>

  <h2><?php _e('3rd-Party Plugin Settings','tubeaceplay') ?></h2>
  <h3>WP-Ratings</h3>
  <form action="<?php echo admin_url('admin.php?page=theme-panel') ?>" method="post">
    <table class="form-table">
      <tbody>
        <tr>
        <th><label>Post Preview Rating Template</label></th>
          <td>
            <textarea name="tubeace_post_preview_rating_templ" rows="3" style="width:600px"><?php echo get_site_option('tubeace_post_preview_rating_templ','<span class="rating">%RATINGS_IMAGES%</span>') ?></textarea>
          </td>
        </tr>
      </tbody>
    </table>
    <input type="submit" value="Save Changes" class="button-primary" name="ThirdPartySettings">
  </form>
<?php
}
?>