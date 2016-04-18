<?php

/**
 * Meta Boxes
 * version 1.0
 * @author: Dasun Edirisinghe
 */



add_filter( 'rwmb_meta_boxes', 'ninteen_options_meta' );
/**
 * Register meta boxes
 * @param $meta_boxes
 * @return array
 */
function ninteen_options_meta( $meta_boxes )
{
	$prefix       = 'nineteen_';
	

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
				'type' => 'heading',
				'name' => __( 'Slider 01', 'ninteen-options' ),
			),
			array(
				'name'  => __( 'Slider Title', 'ninteen-options' ),
				'id'    => "{$prefix}slider_1",
				'type'  => 'text',
				'std'   => __( 'Add Slider Title Here', 'ninteen-options' ),
			),
			array(
				'name'             => __( 'Slider Image', 'ninteen-options' ),
				'id'               => "{$prefix}slider_image_1",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => __( 'Slider Banner Image', 'ninteen-options' ),
				'id'               => "{$prefix}slider_banner_image_1",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'    => __( 'Slider Capation', 'your-prefix' ),
				'id'      => "{$prefix}slider_caption_1",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 2,
			),

			array(
				'type' => 'heading',
				'name' => __( 'Slider 02', 'ninteen-options' ),
			),
			array(
				'name'  => __( 'Slider Title', 'ninteen-options' ),
				'id'    => "{$prefix}slider_2",
				'type'  => 'text',
				'std'   => __( 'Add Slider Title Here', 'ninteen-options' ),
			),
			array(
				'name'             => __( 'Slider Image', 'ninteen-options' ),
				'id'               => "{$prefix}slider_image_2",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => __( 'Slider Banner Image', 'ninteen-options' ),
				'id'               => "{$prefix}slider_banner_image_2",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'    => __( 'Slider Capation', 'your-prefix' ),
				'id'      => "{$prefix}slider_caption_2",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 2,
			),

			array(
				'type' => 'heading',
				'name' => __( 'Slider 03', 'ninteen-options' ),
			),
			array(
				'name'  => __( 'Slider Title', 'ninteen-options' ),
				'id'    => "{$prefix}slider_3",
				'type'  => 'text',
				'std'   => __( 'Add Slider Title Here', 'ninteen-options' ),
			),
			array(
				'name'             => __( 'Slider Image', 'ninteen-options' ),
				'id'               => "{$prefix}slider_image_3",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => __( 'Slider Banner Image', 'ninteen-options' ),
				'id'               => "{$prefix}slider_banner_image_3",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'    => __( 'Slider Capation', 'your-prefix' ),
				'id'      => "{$prefix}slider_caption_3",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 2,
			),

			array(
				'type' => 'heading',
				'name' => __( 'Slider 04', 'ninteen-options' ),
			),
			array(
				'name'  => __( 'Slider Title', 'ninteen-options' ),
				'id'    => "{$prefix}slider_4",
				'type'  => 'text',
				'std'   => __( 'Add Slider Title Here', 'ninteen-options' ),
			),
			array(
				'name'             => __( 'Slider Image', 'ninteen-options' ),
				'id'               => "{$prefix}slider_image_4",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => __( 'Slider Banner Image', 'ninteen-options' ),
				'id'               => "{$prefix}slider_banner_image_4",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'    => __( 'Slider Capation', 'your-prefix' ),
				'id'      => "{$prefix}slider_caption_4",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 2,
			),

		),

		'only_on'    => array(
			//'slug'  => array( 'home' ),
			'template' => array( 'home.php'),
		),
);

$meta_boxes[] = array(

	'id' => 'homepage-values',
	'title' => __( 'Values', 'ninteen-options' ),
	'pages' => array( 'page' ),
	'context' => 'advanced',
	'priority' => 'core',
	'autosave' => true,
	'fields' => array(

			array(
				'name'  => __( 'Section Title', 'ninteen-options' ),
				'id'    => "{$prefix}value_section_title",
				'type'  => 'text',
				'std'   => __( 'Section Title', 'ninteen-options' ),
			),

			array(
				'type' => 'heading',
				'name' => __( 'Value 01', 'ninteen-options' ),
			),

			array(
				'name'  => __( 'Value Title', 'ninteen-options' ),
				'id'    => "{$prefix}value_title_1",
				'type'  => 'text',
				'std'   => __( 'Title', 'ninteen-options' ),
			),

			array(
				'name'             => __( 'Image', 'ninteen-options' ),
				'id'               => "{$prefix}value_image_1",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),

			array(
				'name'    => __( 'Capation', 'your-prefix' ),
				'id'      => "{$prefix}value_description_1",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 2,
			),

			array(
				'name'  => __( 'Value Title', 'ninteen-options' ),
				'id'    => "{$prefix}value_title_3",
				'type'  => 'text',
				'std'   => __( 'Title', 'ninteen-options' ),
			),

			array(
				'name'             => __( 'Image', 'ninteen-options' ),
				'id'               => "{$prefix}value_image_3",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),

			array(
				'name'    => __( 'Capation', 'your-prefix' ),
				'id'      => "{$prefix}value_description_3",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 2,
			),

			array(
				'name'  => __( 'Value Title', 'ninteen-options' ),
				'id'    => "{$prefix}value_title_3",
				'type'  => 'text',
				'std'   => __( 'Title', 'ninteen-options' ),
			),

			array(
				'name'             => __( 'Image', 'ninteen-options' ),
				'id'               => "{$prefix}value_image_3",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),

			array(
				'name'    => __( 'Capation', 'your-prefix' ),
				'id'      => "{$prefix}value_description_3",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 2,
			),

			array(
				'name'  => __( 'Value Title', 'ninteen-options' ),
				'id'    => "{$prefix}value_title_4",
				'type'  => 'text',
				'std'   => __( 'Title', 'ninteen-options' ),
			),

			array(
				'name'             => __( 'Image', 'ninteen-options' ),
				'id'               => "{$prefix}value_image_4",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),

			array(
				'name'    => __( 'Capation', 'your-prefix' ),
				'id'      => "{$prefix}value_description_4",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 2,
			),
		) ,

	'only_on'    => array(
			//'slug'  => array( 'home' ),
			'template' => array( 'home.php'),
		),


);

$meta_boxes[] = array(

		'id' => 'homepage-tabs',
		'title' => __( 'Tabs Section', 'ninteen-options' ),
		'pages' => array( 'page' ),
		'context' => 'advanced',
		'priority' => 'core',
		'autosave' => true,
		'fields' => array(


			array(
				'name'  => __( 'Section Title', 'ninteen-options' ),
				'id'    => "{$prefix}tabs_section_title",
				'type'  => 'text',
			),

			array(
				'name'  => __( 'Section Description', 'ninteen-options' ),
				'id'    => "{$prefix}tabs_section_desc",
				'type'  => 'textarea',
				'std'   => __( 'Section Description', 'ninteen-options' ),
			),


			array(
				'type' => 'heading',
				'name' => __( 'Tab 01', 'ninteen-options' ),
			),
			array(
				'name'  => __( 'Tab Title', 'ninteen-options' ),
				'id'    => "{$prefix}tab_1",
				'type'  => 'text',
				'std'   => __( 'Add Tab Title Here', 'ninteen-options' ),
			),
			array(
				'name'    => __( 'Tab Description', 'ninteen-options' ),
				'id'      => "{$prefix}tab_desc_1",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 2,
			),

			array(
				'type' => 'heading',
				'name' => __( 'Tab 02', 'ninteen-options' ),
			),
			array(
				'name'  => __( 'Tab Title', 'ninteen-options' ),
				'id'    => "{$prefix}tab_2",
				'type'  => 'text',
				'std'   => __( 'Add Tab Title Here', 'ninteen-options' ),
			),
			array(
				'name'    => __( 'Tab Description', 'ninteen-options' ),
				'id'      => "{$prefix}tab_desc_2",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 2,
			),

			array(
				'type' => 'heading',
				'name' => __( 'Tab 03', 'ninteen-options' ),
			),
			array(
				'name'  => __( 'Tab Title', 'ninteen-options' ),
				'id'    => "{$prefix}tab_3",
				'type'  => 'text',
				'std'   => __( 'Add Tab Title Here', 'ninteen-options' ),
			),
			array(
				'name'    => __( 'Tab Description', 'ninteen-options' ),
				'id'      => "{$prefix}tab_desc_3",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 2,
			),

			
		),

		'only_on'    => array(
			//'slug'  => array( 'home' ),
			'template' => array( 'home.php'),
		),
);

$meta_boxes[] = array(

		'id' => 'homepage-logos',
		'title' => __( 'Patners', 'ninteen-options' ),
		'pages' => array( 'page' ),
		'context' => 'advanced',
		'priority' => 'core',
		'autosave' => true,
		'fields' => array(


			array(
				'name'  => __( 'Section Title', 'ninteen-options' ),
				'id'    => "{$prefix}patners_section_title",
				'type'  => 'text',
				'std'   => __( 'Section Title', 'ninteen-options' ),
			),


			
			array(
				'name'             => __( 'Patners Images', 'ninteen-options' ),
				'id'               => "{$prefix}patners_image_1",
				'type'             => 'image_advanced',
				'max_file_uploads' => 20,
			),
			array(
				'name'    => __( 'Value Capation', 'your-prefix' ),
				'id'      => "{$prefix}value_caption_1",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 2,
			),

			),

		'only_on'    => array(
			//'slug'  => array( 'home' ),
			'template' => array( 'home.php'),
		),

);

/*--------------------------------
* 02 About us Page
----------------------------------*/ 

$meta_boxes[] = array(

		'id' => 'about-us',
		'title' => __( 'Timeline Data', 'ninteen-options' ),
		'pages' => array( 'page' ),
		'context' => 'advanced',
		'priority' => 'core',
		'autosave' => true,
		'fields' => array(


			array(
				'name'  => __( 'Section Title', 'ninteen-options' ),
				'id'    => "{$prefix}timeline_section_title_1",
				'type'  => 'text',
			),

			array(
				'name'    => __( 'Section Content', 'ninteen-options' ),
				'id'      => "{$prefix}timeline_content_1",
				'type'    => 'wysiwyg',
				// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
				'raw'     => false,
				// Editor settings, see wp_editor() function: look4wp.com/wp_editor
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => true,
					'media_buttons' => false,
				),
			),

			array(
				'name'  => __( 'Section Title', 'ninteen-options' ),
				'id'    => "{$prefix}timeline_section_title_2",
				'type'  => 'text',
			),

			array(
				'name'    => __( 'Section Content', 'ninteen-options' ),
				'id'      => "{$prefix}timeline_content_2",
				'type'    => 'wysiwyg',
				// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
				'raw'     => false,
				// Editor settings, see wp_editor() function: look4wp.com/wp_editor
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => true,
					'media_buttons' => false,
				),
			),

			array(
				'name'  => __( 'Section Title', 'ninteen-options' ),
				'id'    => "{$prefix}timeline_section_title_3",
				'type'  => 'text',
			),

			array(
				'name'    => __( 'Section Content', 'ninteen-options' ),
				'id'      => "{$prefix}timeline_content_3",
				'type'    => 'wysiwyg',
				// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
				'raw'     => false,
				// Editor settings, see wp_editor() function: look4wp.com/wp_editor
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => true,
					'media_buttons' => false,
				),
			),

			array(
				'name'  => __( 'Section Title', 'ninteen-options' ),
				'id'    => "{$prefix}timeline_section_title_4",
				'type'  => 'text',
			),

			array(
				'name'    => __( 'Section Content', 'ninteen-options' ),
				'id'      => "{$prefix}timeline_content_4",
				'type'    => 'wysiwyg',
				// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
				'raw'     => false,
				// Editor settings, see wp_editor() function: look4wp.com/wp_editor
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => true,
					'media_buttons' => false,
				),
			),

		),

		'only_on'    => array(
			//'slug'  => array( 'home' ),
			'template' => array( 'about.php'),
		),
);

$meta_boxes[] = array(

		'id' => 'about-bottom',
		'title' => __( 'Other Data', 'ninteen-options' ),
		'pages' => array( 'page' ),
		'context' => 'advanced',
		'priority' => 'core',
		'autosave' => true,
		'fields' => array(


			array(
				'name'  => __( 'Bottom Section', 'ninteen-options' ),
				'id'    => "{$prefix}bottom_section_title",
				'type'  => 'text',
			),

			array(
				'name'             => __( 'Bottom Image', 'ninteen-options' ),
				'id'               => "{$prefix}bottom_section_image",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),

		),

		'only_on'    => array(
			//'slug'  => array( 'home' ),
			'template' => array( 'about.php'),
		),
);


/*--------------------------------
* 03 Member Post Type
----------------------------------*/ 

$meta_boxes[] = array(

		'id' => 'member-data',
		'title' => __( 'Member Data', 'ninteen-options' ),
		'pages' => array( 'team' ),
		'context' => 'advanced',
		'priority' => 'core',
		'autosave' => true,
		'fields' => array(


			array(
				'name'  => __( 'Position', 'ninteen-options' ),
				'id'    => "{$prefix}member_postition",
				'type'  => 'text',
			),

			array(
				'name'  => __( 'Linkdin', 'ninteen-options' ),
				'id'    => "{$prefix}member_linkdin",
				'type'  => 'text',
			),

			array(
				'name'  => __( 'Skype', 'ninteen-options' ),
				'id'    => "{$prefix}member_skype",
				'type'  => 'text',
			),

			array(
				'name'  => __( 'E-mail', 'ninteen-options' ),
				'id'    => "{$prefix}member_email",
				'type'  => 'email',
			),

			array(
				'name'    => __( 'Bio', 'ninteen-options' ),
				'id'      => "{$prefix}member_bio",
				'type'    => 'wysiwyg',
				// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
				'raw'     => false,
				// Editor settings, see wp_editor() function: look4wp.com/wp_editor
				'options' => array(
					'textarea_rows' => 4,
					'teeny'         => true,
					'media_buttons' => false,
				),
			),
		),
);


/*--------------------------------
* 04 Careers
----------------------------------*/ 

$meta_boxes[] = array(

		'id' => 'career-data',
		'title' => __( 'Career Details', 'ninteen-options' ),
		'pages' => array( 'careers' ),
		'context' => 'advanced',
		'priority' => 'core',
		'autosave' => true,
		'fields' => array(


			array(
				'name'        => __( 'Color Theme', 'ninteen-options' ),
				'id'          => "{$prefix}career_color_theme",
				'type'        => 'select_advanced',
				// Array of 'value' => 'Label' pairs for select box
				'options'     => array(
					'blue' => __( 'Blue', 'ninteen-options' ),
					'green' => __( 'Green', 'ninteen-options' ),
					'orange' => __( 'Orange' , 'ninteen-options' )
				),
				// Select multiple values, optional. Default is false.
				'multiple'    => false,
				// 'std'         => 'value2', // Default value, optional
				'placeholder' => __( 'Select an Color', 'ninteen-options' ),
			),


			array(
				'name'  => __( 'Short explanation', 'ninteen-options' ),
				'id'    => "{$prefix}career_sub_title",
				'type'  => 'text',
			),

			array(
				'name'    => __( 'Responsibilities', 'ninteen-options' ),
				'id'      => "{$prefix}career_responsibilities",
				'type'    => 'wysiwyg',
				// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
				'raw'     => false,
				// Editor settings, see wp_editor() function: look4wp.com/wp_editor
				'options' => array(
					'textarea_rows' => 6,
					'teeny'         => true,
					'media_buttons' => false,
				),
			),

			array(
				'name'    => __( 'Ideal Qulaitification', 'ninteen-options' ),
				'id'      => "{$prefix}career_qualifications",
				'type'    => 'wysiwyg',
				// Set the 'raw' parameter to TRUE to prevent data being passed through wpautop() on save
				'raw'     => false,
				// Editor settings, see wp_editor() function: look4wp.com/wp_editor
				'options' => array(
					'textarea_rows' => 6,
					'teeny'         => true,
					'media_buttons' => false,
				),
			),
		),
);

	foreach ( $meta_boxes as $k => $meta_box )
	{
		if ( isset( $meta_box['only_on'] ) && ! rw_maybe_include( $meta_box['only_on'] ) )
		{
			unset( $meta_boxes[$k] );
		}
	}
	return $meta_boxes;
}
/**
 * Check if meta boxes is included
 *
 * @return bool
 */
function rw_maybe_include( $conditions )
{
	// Always include in the frontend to make helper function work
	if ( ! is_admin() )
	{
		return true;
	}
	// Always include for ajax
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX )
	{
		return true;
	}
	if ( isset( $_GET['post'] ) )
	{
		$post_id = intval( $_GET['post'] );
	}
	elseif ( isset( $_POST['post_ID'] ) )
	{
		$post_id = intval( $_POST['post_ID'] );
	}
	else
	{
		$post_id = false;
	}
	$post_id = (int) $post_id;
	$post    = get_post( $post_id );
	foreach ( $conditions as $cond => $v )
	{
		// Catch non-arrays too
		if ( ! is_array( $v ) )
		{
			$v = array( $v );
		}
		switch ( $cond )
		{
			case 'id':
				if ( in_array( $post_id, $v ) )
				{
					return true;
				}
				break;
			case 'parent':
				$post_parent = $post->post_parent;
				if ( in_array( $post_parent, $v ) )
				{
					return true;
				}
				break;
			case 'slug':
				$post_slug = $post->post_name;
				if ( in_array( $post_slug, $v ) )
				{
					return true;
				}
				break;
			case 'category': //post must be saved or published first
				$categories = get_the_category( $post->ID );
				$catslugs   = array();
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
