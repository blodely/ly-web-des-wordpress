<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Fall by Mr.Luo
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function fall_by_mr_luo_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'fall_by_mr_luo_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function fall_by_mr_luo_jetpack_setup
add_action( 'after_setup_theme', 'fall_by_mr_luo_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function fall_by_mr_luo_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function fall_by_mr_luo_infinite_scroll_render
