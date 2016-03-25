<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package MFI_Insights
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function mfi_insights_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'mfi_insights_body_classes' );


/**
 * Hide editor on specific pages.
 *
 */


add_filter( 'user_can_richedit', 'disable_for_cpt' );
function disable_for_cpt( $default ) {
  global $post;
  if ( 'page' == get_post_type( $post ) )
    return false;
  return $default;
}
