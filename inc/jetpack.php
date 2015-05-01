<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package sassy_underscore
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function sassy_underscore_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'sassy_underscore_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function sassy_underscore_jetpack_setup
add_action( 'after_setup_theme', 'sassy_underscore_jetpack_setup' );

function sassy_underscore_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function sassy_underscore_infinite_scroll_render