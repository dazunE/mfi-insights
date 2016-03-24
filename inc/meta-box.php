<?php

/**
 * Meta Boxes
 * version 1.0
 * @author: Dasun Edirisinghe
 */

$prefix = 'nineteen_';
global $meta_boxes;
$meta_boxes   = array();



/*-------------------------------------
* 01 Home Page
*-------------------------------------*/
$meta_boxes[] = array(

		'id' => 'homepage',
		'title' => __( 'Home Page Slider', 'ninteen-options' ),
		'pages' => array( 'page' ),
		'context' => 'advanced',
		'priority' => 'core',
		'autosave' => true,
		'fields' => array(

			array(
				'name'  => __( 'Slider Title 1', 'ninteen-options' ),
				'id'    => "{$prefix}slider_i",
				'type'  => 'text',
				'std'   => __( 'Add Slider Title Here', 'ninteen-options' ),
			),
			array(
				'name'  => __( 'Slider Title 2', 'ninteen-options' ),
				'id'    => "{$prefix}slider_ii",
				'type'  => 'text',
				'std'   => __( 'Add Slider Title Here', 'ninteen-options' ),
			),
			array(
				'name'  => __( 'Slider Title 3', 'ninteen-options' ),
				'id'    => "{$prefix}slider_iii",
				'type'  => 'text',
				'std'   => __( 'Add Slider Title Here', 'ninteen-options' ),
			),
			array(
				'name'  => __( 'Slider Title 4', 'ninteen-options' ),
				'id'    => "{$prefix}slider_iv",
				'type'  => 'text',
				'std'   => __( 'Add Slider Title Here', 'ninteen-options' ),
			),
		),

		'only_on'    => array(
			//'slug'  => array( 'home' ),
			'template' => array( 'home.php'),
		),
);


/**
 * Register meta boxes
 * @return void
 */

function rw_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) ) {
		foreach ( $meta_boxes as $meta_box ) {
			if ( isset( $meta_box['only_on'] ) && ! rw_maybe_include( $meta_box['only_on'] ) ) {
				continue;
			}

			new RW_Meta_Box( $meta_box );
		}
	}
}

add_action( 'admin_init', 'rw_register_meta_boxes' );

/**
 * Check if meta boxes is included
 * @return bool
 */
function rw_maybe_include( $conditions ) {
	// Include in back-end only
	if ( ! defined( 'WP_ADMIN' ) || ! WP_ADMIN ) {
		return false;
	}

	// Always include for ajax
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return true;
	}

	if ( isset( $_GET['post'] ) ) {
		$post_id = intval( $_GET['post'] );
	}
	elseif ( isset( $_POST['post_ID'] ) ) {
		$post_id = intval( $_POST['post_ID'] );
	}
	else {
		$post_id = false;
	}

	$post_id = (int) $post_id;
	$post    = get_post( $post_id );

	foreach ( $conditions as $cond => $v ) {
		// Catch non-arrays too
		if ( ! is_array( $v ) ) {
			$v = array( $v );
		}

		switch ( $cond ) {
			case 'id':
				if ( in_array( $post_id, $v ) ) {
					return true;
				}
			break;
			case 'parent':
				$post_parent = $post->post_parent;
				if ( in_array( $post_parent, $v ) ) {
					return true;
				}
			break;
			case 'slug':
				$post_slug = $post->post_name;
				if ( in_array( $post_slug, $v ) ) {
					return true;
				}
			break;
			case 'category': //post must be saved or published first
				$categories = get_the_category( $post->ID );
				$catslugs = array();
				foreach ( $categories as $category )
				{
					array_push( $catslugs, $category->slug );
				}
				if ( array_intersect( $catslugs, $v ) )
				{
					return true;
				}
			break;
			case 'template':
				$template = get_post_meta( $post_id, '_wp_page_template', true );
				if ( in_array( $template, $v ) )
				{
					return true;
				}
			break;
		}
	}

	// If no condition matched
	return false;
}
