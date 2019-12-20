<?php 
/**
 * Displays custom controls.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */

/* layout and header layout custom controls in customizer */
if ( ! class_exists( 'WP_Customize_Control' ) )
  return NULL;
  // layout control
  class tubeaceplay_Layout_Picker_Custom_Control extends WP_Customize_Control{
   
    public function render_content(){
      ?>
      <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
      <ul>
        <li>
          <label for="<?php echo $this->id; ?>_2-10-0"><img src="<?php echo get_template_directory_uri(); ?>/images/layout-2-10-0.png" alt="2-10-0" /><br>
          <input <?php echo $this->get_link() ?> type="radio" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>_2-10-0" value="2-10-0" /> 2-10-0</label>
        </li>
        <li>
          <label for="<?php echo $this->id; ?>_3-9-0"><img src="<?php echo get_template_directory_uri(); ?>/images/layout-3-9-0.png" alt="3-9-0" /><br>
          <input <?php echo $this->get_link() ?> type="radio" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>_3-9-0" value="3-9-0" /> 3-9-0</label>
        </li>
        <li>
          <label for="<?php echo $this->id; ?>_4-8-0"><img src="<?php echo get_template_directory_uri(); ?>/images/layout-4-8-0.png" alt="4-8-0" /><br>
          <input <?php echo $this->get_link() ?> type="radio" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>_4-8-0" value="4-8-0" /> 4-8-0</label>
        </li>
        <li>
          <label for="<?php echo $this->id; ?>_0-10-2"><img src="<?php echo get_template_directory_uri(); ?>/images/layout-0-10-2.png" alt="0-10-2" /><br>
          <input <?php echo $this->get_link() ?> type="radio" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>_0-10-2" value="0-10-2" /> 0-10-2</label>
        </li>
        <li>
          <label for="<?php echo $this->id; ?>_0-9-3"><img src="<?php echo get_template_directory_uri(); ?>/images/layout-0-9-3.png" alt="0-9-3" /><br>
          <input <?php echo $this->get_link() ?> type="radio" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>_0-9-3" value="0-9-3" /> 0-9-3</label>
        </li>
        <li>
          <label for="<?php echo $this->id; ?>_0-8-4"><img src="<?php echo get_template_directory_uri(); ?>/images/layout-0-8-4.png" alt="0-8-4" /><br>
          <input <?php echo $this->get_link() ?> type="radio" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>_0-8-4" value="0-8-4" /> 0-8-4</label>
        </li>
        <li>
          <label for="<?php echo $this->id; ?>_3-6-3"><img src="<?php echo get_template_directory_uri(); ?>/images/layout-3-6-3.png" alt="3-6-3" /><br>
          <input <?php echo $this->get_link() ?> type="radio" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>_3-6-3" value="3-6-3" /> 3-6-3</label>
        </li>
        <li>
          <label for="<?php echo $this->id; ?>_2-8-2"><img src="<?php echo get_template_directory_uri(); ?>/images/layout-2-8-2.png" alt="2-8-2" /><br>
          <input <?php echo $this->get_link() ?> type="radio" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>_2-8-2" value="2-8-2" /> 2-8-2</label>
        </li>
        <li>
          <label for="<?php echo $this->id; ?>_0-12-0"><img src="<?php echo get_template_directory_uri(); ?>/images/layout-0-12-0.png" alt="0-12-0" /><br>
          <input <?php echo $this->get_link() ?> type="radio" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>_0-12-0" value="0-12-0" /> 0-12-0</label>
        </li>
      </ul>
      <?php
     }
  }

  // header layout control
  class tubeaceplay_Header_Layout_Picker_Custom_Control extends WP_Customize_Control{
   
    public function render_content(){
      ?>
      <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
      <ul>
        <li>
          <label for="<?php echo $this->id; ?>_1"><img src="<?php echo get_template_directory_uri(); ?>/images/header-layout-1.png" alt="Layout 1" /><br>
          <input <?php echo $this->get_link() ?> type="radio" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>_1" value="1" /> <?php _e('Header 1 - Inline', 'tubeaceplay'); ?></label>
        </li>
        <li>
          <label for="<?php echo $this->id; ?>_2"><img src="<?php echo get_template_directory_uri(); ?>/images/header-layout-2.png" alt="Layout 2" /><br>
          <input <?php echo $this->get_link() ?> type="radio" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>_2" value="2" /> <?php _e('Header 2 - Navbar at Top', 'tubeaceplay'); ?></label>
        </li>
        <li>
          <label for="<?php echo $this->id; ?>_3"><img src="<?php echo get_template_directory_uri(); ?>/images/header-layout-3.png" alt="Layout 3" /><br>
          <input <?php echo $this->get_link() ?> type="radio" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>_3" value="3" /> <?php _e('Header 3 - Navbar at Bottom', 'tubeaceplay'); ?></label>
        </li>
      </ul>
      <?php
     }
  }

  ?>