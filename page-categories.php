<?php 
/**
 * Displays list of categories page.
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php get_header(); ?>

<?php $container = ( get_theme_mod('layout_container_fluid', $tubeaceplay_defaults['layout_container_fluid'])=='1' ? 'container-fluid' : 'container') ?>
<div id="container" class="<?php echo esc_attr($container); ?>">

  <?php $layout = tubeaceplay_layout(); ?>
  <?php if( $layout['left_sidebar']!='0' ) get_sidebar('left'); ?>
  
  <div class="<?php echo esc_attr($layout['content']); ?>">
  
    <?php if ( is_active_sidebar( 'above-content-1' ) ) : ?>
      <div class="above-content-widget-area" role="complementary">
        <?php dynamic_sidebar( 'above-content-1' ); ?>
      </div>
    <?php endif; ?>

    <header>
      <h1 id="page-title"><?php the_title(); ?></h1>
    </header>

    <div id="page">
      <div class="row">
      <?php
        $args = array(
          'orderby' => 'name',
          'order' => 'ASC'
          );
        $categories = get_categories($args);
          foreach($categories as $category) { 

            echo '<div class="col-xs-12 col-sm-6 col-md-4"><h3><a href="' . get_category_link( $category->term_id ) . '">' . $category->name.'</a></h3>';
            if($category->description){echo $category->description;}
            echo'</div>';

        } 
      ?>
      </div>
    </div>

  </div><!--#content -->
  <?php if( $layout['right_sidebar']!='0' ) get_sidebar('right'); ?>

</div><!-- .container -->

<?php get_footer(); ?>