<?php 
/**
 * Displays pagination (page navigation).
 *
 * @package       Tube Ace
 * @subpackage    Play
 * @since         Play 1.0
 * @link          http://tubeace.com
 */
?>

<?php global $tubeaceplay_defaults; ?>

<div class="row clearfix"></div><br>
<?php 

if ( function_exists( 'wp_paginate' ) ) { 
	wp_paginate(); 
} elseif ( function_exists( 'wp_pagenavi' ) ) { 
	wp_pagenavi(); 
} else { 

	echo '<div id="tubeace-pagination">';

	the_posts_pagination( array(
		'mid_size'  => esc_html( get_theme_mod('pagination_num_per_side', $tubeaceplay_defaults['pagination_num_per_side'])),
		'prev_text' => __( esc_html( get_theme_mod('pagination_prev_label', $tubeaceplay_defaults['pagination_prev_label'])) , 'tubeaceplay' ),
		'next_text' => __( esc_html( get_theme_mod('pagination_next_label', $tubeaceplay_defaults['pagination_next_label'])), 'tubeaceplay' ),
	) );

	echo '</div>';

} ?>