<?php 
/**
 * Displays the header layout #2 (navbar at top).
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php $container = (get_theme_mod('header_container_fluid', $tubeaceplay_defaults['header_container_fluid'])==true) ? 'container-fluid' : 'container' ?>

<?php if ( get_theme_mod('header_container_position', $tubeaceplay_defaults['header_container_position'])=='outside' ) echo'<div class="'.esc_attr($container).'">'; ?>

  <nav id="header" class="navbar navbar-default navbar-static-top">
    <?php if ( get_theme_mod('header_container_position', $tubeaceplay_defaults['header_container_position'])=='inside' ) echo'<div class="'.esc_attr($container).'">'; ?>

      <div class="col-sm-12">
        <div class="navbar-header">

          <?php if(get_theme_mod('navbar_show', $tubeaceplay_defaults['navbar_show'])==1) : ?>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <?php endif; ?>

        </div> <!-- /. navbar-header -->
      </div>

      <?php if(get_theme_mod('navbar_show', $tubeaceplay_defaults['navbar_show'])==1 && has_nav_menu( 'header-menu' )) : ?>
        <div id="navbar" class="collapse navbar-collapse">
          <div id="navbar-block" class="col-md-12">
            <?php
            wp_nav_menu( array(
              'menu' => 'header-menu',
              'theme_location' => 'header-menu',
              'depth' => 2,
              'container' => false,
              'menu_class' => 'nav navbar-nav',
              'menu_id'         => 'header-menu',
              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              //Process nav menu using our custom nav walker
              'walker' => new wp_bootstrap_navwalker()
            ) ) ?>
          </div>
        </div> <!-- /.nav-collapse -->
      <?php endif; ?>
      
      <div class="col-xs-12 col-md-4">
        <?php the_custom_logo(); ?>

        <?php if(get_theme_mod('header_show_site_title', $tubeaceplay_defaults['header_show_site_title'])==1 && display_header_text()) : ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" id="site-title"><?php bloginfo( 'name' ); ?></a>
        <?php endif; ?>

        <?php if(get_theme_mod('header_show_tagline', $tubeaceplay_defaults['header_show_tagline'])==1 && display_header_text()) : ?>
          <div class="clearfix"></div><span id="tagline"><?php bloginfo( 'description' ); ?></span>
        <?php endif; ?>
      </div> <!-- /logo-->

      <div class="col-xs-12 col-md-4">
        <?php if ( is_active_sidebar( 'header-1' ) ) : ?>
          <div class="header-widget-area" role="complementary">
            <?php dynamic_sidebar( 'header-1' ); ?>
          </div>
        <?php endif; ?>
      </div> <!-- /widget-->
       <div class="col-xs-12 col-md-4">
        <?php if(get_theme_mod('header_show_search', $tubeaceplay_defaults['header_show_search'])==1) : ?>
          <form class="navbar-form" id="search-form" role="search" action="<?php echo home_url(); ?>">
            <div class="input-group"> 
              <input type="text" class="form-control" placeholder="Search" name="s" value="<?php the_search_query(); ?>">
              <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div> 
          </form>
        <?php endif; ?>
      </div> <!-- /search-->

    <?php if ( get_theme_mod('header_container_position', $tubeaceplay_defaults['header_container_position'])=='inside' ) echo'</div> <!-- /.container inside -->'; ?>
  </nav>

<?php if ( get_theme_mod('header_container_position', $tubeaceplay_defaults['header_container_position'])=='outside' ) echo'</div> <!-- /.container outside -->'; ?>