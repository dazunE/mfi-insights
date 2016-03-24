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
add_action( 'admin_init', 'hide_editor' );

function hide_editor() {

  // Get the Post ID.
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;

  if( !isset( $post_id ) ) return;

  // Hide the editor on the page titled 'Homepage'

  // $homepgname = get_the_title($post_id);

  // if($homepgname == 'Homepage'){ 

  //   remove_post_type_support('page', 'editor');

  // }

  // Hide the editor on a page with a specific page template
  // Get the name of the Page Template file.

  $template_file = get_post_meta($post_id, '_wp_page_template', true);

  if($template_file == 'home.php'){ // the filename of the page template

    remove_post_type_support('page', 'editor');

  }
}
