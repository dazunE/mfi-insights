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


/*
* Site Logo
*/
function mfi_site_logo() {

	if( '' != get_theme_mod('ninteen_theme_header_logo' )) {

		echo '<img src="'.get_theme_mod('ninteen_theme_header_logo' ).'" class="img-responsive" />';
	}

	else{

		echo '<img src="'.IMAGES.'mfi-logo.png" class="img-responsive" />';
	}

}

function mfi_responsive_header_display() {

	echo '<div class="info">';

    if( '' != get_theme_mod('ninteen_theme_header_title' )) {

    	echo '<h2>'.get_theme_mod('ninteen_theme_header_title' ).'</h2>';
    }

    if ( '' != get_theme_mod('ninteen_theme_header_description' )){

    	echo '<p>'.get_theme_mod('ninteen_theme_header_description' ).'</p>';
    }

    echo '</div>';

}



class wp_bootstrap_navwalker extends Walker_Nav_Menu {
  
	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of page. Used for padding.
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\" dropdown-menu\">\n";
	}
	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Menu item data object.
	 * @param int $depth Depth of menu item. Used for padding.
	 * @param int $current_page Menu item ID.
	 * @param object $args
	 */
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		/**
		 * Dividers & Headers
	     * ==================
		 * Determine whether the item is a Divider, Header, or regular menu item.
		 * To prevent errors we use the strcasecmp() function to so a comparison
		 * that is not case sensitive. The strcasecmp() function returns a 0 if 
		 * the strings are equal.
		 */
		if (strcasecmp($item->title, 'divider') == 0) {
			// Item is a Divider
			$output .= $indent . '<li class="divider">';
		} else if (strcasecmp($item->title, 'divider-vertical') == 0) {
			// Item is a Vertical Divider
			$output .= $indent . '<li class="divider-vertical">';
		} else if (strcasecmp($item->title, 'nav-header') == 0) {
			// Item is a Header
			$output .= $indent . '<li class="nav-header">' . esc_attr( $item->attr_title );
		} else {
			$class_names = $value = '';
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
			$classes[] = 'menu-item-' . $item->ID;
			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
			
			//If item has_children add dropdown class to li
			if($args->has_children) {
				$class_names .= ' dropdown';
			}
			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
			$output .= $indent . '<li' . $id . $value . $class_names .'>';
			$atts = array();
			$atts['title']  = ! empty( $item->title ) 	   ? $item->title 	   : '';
			$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
			$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
			//If item has_children add atts to a
			if($args->has_children) {
				$atts['href']   		= '#';
				$atts['class']			= 'dropdown-toggle';
				$atts['data-toggle'] = 'dropdown';
				$atts['data-target'] = '#';
			} else {
				$atts['href'] = ! empty( $item->url ) ? $item->url : '';
			}
			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
			$attributes = '';
			foreach ( $atts as $attr => $value ) {
				if ( ! empty( $value ) ) {
					$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
					$attributes .= ' ' . $attr . '="' . $value . '"';
				}
			}


			$item_output = $args->before;

		
			/*
			 * Glyphicons
			 * ===========
			 * Since the the menu item is NOT a Divider or Header we check the see
			 * if there is a value in the attr_title property. If the attr_title
			 * property is NOT null we apply it as the class name for the glyphicon.
			 */
			if(! empty( $item->attr_title )){
				$item_output .= '<a'. $attributes .'><span class="glyphicon glyphicon-' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
			} else {
				$item_output .= '<a'. $attributes .'>';
			}
			
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= ($args->has_children) ? ' <span class="caret"></span></a>' : '</a>';
			$item_output .= $args->after;
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}
	}
	/**
	 * Traverse elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth. 
	 *
	 * This method shouldn't be called directly, use the walk() method instead.
	 *
	 * @see Walker::start_el()
	 * @since 2.5.0
	 *
	 * @param object $element Data object
	 * @param array $children_elements List of elements to continue traversing.
	 * @param int $max_depth Max depth to traverse.
	 * @param int $depth Depth of current element.
	 * @param array $args
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return null Null on failure with no changes to parameters.
	 */
	function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( !$element ) {
            return;
        }
        $id_field = $this->db_fields['id'];
        //display this element
        if ( is_object( $args[0] ) ) {
           $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
}


remove_filter( 'the_content', 'wpautop' );

$br = false;

add_filter( 'the_content', function( $content ) use ( $br ) { 

    return wpautop( $content, $br ); 

}, 10 );


function remove_editor_from_page(){

  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;

  if( !isset( $post_id ) ) return;

  $template_file = get_post_meta($post_id, '_wp_page_template', true);

  if($template_file == 'home.php' || $template_file == 'about.php'){ // the filename of the page template

  	remove_post_type_support('page', 'editor');

  }
}

//add_action( 'init', 'remove_editor_from_page');



/* Post Display shortcode */

function ninteen_post_type_display( $atts ){
 
		// Attributes
		 $atts = shortcode_atts( array(
	      "type"     => false,
	      "count"     => -1,
	      "order" => false,
		), $atts );


			$args = array(

				'post_type'   	=> $atts['type'],
				'post_status' 	=> 'publish',
				'posts_per_page'=> $atts['count'],
				'order'        	=> $atts['order'],
				'orderby'       => 'date',
				
			);

		
		$query = new WP_Query( $args );

		ob_start();

		if($atts['type'] == 'team') {

		echo '<div class="our-team container"><div class="analytics-team-details row">';

		}

		if($query->have_posts()){
			while($query->have_posts()){
				$query->the_post();
				
				get_template_part( 'template-parts/content', $atts['type'] );
				
			}
		}

		if($atts['type'] == 'team') {

		echo '</div><div class="member-description load-description"></div></div>';

		}

		return ob_get_clean();
}

add_shortcode( 'data', 'ninteen_post_type_display' );

/* Page Heading */

function ninteen_page_heading_underline ( $atts , $content = null ) {

	$atts = shortcode_atts(array(
		"sub" => false
	), $atts);

	

	return '<h3 class="header-underline-dull-blue">'.do_shortcode( $content ).'<span class="sub-text">'.$atts['sub'].'</span></h3>' ;

}

add_shortcode( 'heading' , 'ninteen_page_heading_underline');

/* Page Highlight Heading */

function ninteen_page_highlight( $atts, $content = null ) {

	$atts = shortcode_atts(array(
		"sub" => false
	), $atts);

	return '<h3 class="tiny-hilghlight">'.do_shortcode( $content ).'</h3>';
}
add_shortcode( 'highlight' , 'ninteen_page_highlight' );

/* Page Columns Warap */

function ninteen_page_row( $atts, $content = null ) {


	return sprintf('<div class="blocked-content-solution-hilglights">%s</div>', do_shortcode( $content ));

}

add_shortcode( 'row' , 'ninteen_page_row' );

/* Page highlight block */

function ninteen_highlight_block( $atts, $content = null) {

	$atts = shortcode_atts(array(
		"heading" => false
	), $atts);
	return sprintf(
		'<div class="col-md-3"><div class="highlight-solutions-inner-blocks"><h5>%s</h5>%s</div></div>',
		$atts['heading'],
		do_shortcode( $content )
		);

}

add_shortcode( 'highlight_block' ,'ninteen_highlight_block' );

/* Page bussiness module*/

function ninteen_bussiness_module_wrap( $atts, $content = null ) {

	$atts = shortcode_atts(array(
		"heading" => false
	), $atts);

  return sprintf(
  	'<div class="our-module-business-context">%s</div>',
  	 do_shortcode( $content )
  );

}

add_shortcode( 'bussiness_module' , 'ninteen_bussiness_module_wrap' );

function ninteen_bussiness_module_image ( $atts, $content = null ) {

	$atts = shortcode_atts( array(
		'src'=> false), 
	$atts );

	return sprintf(
		'<div class="module-described-img col-md-3"><img src="%s" width="210"></div>'
		,$atts['src']);
}

add_shortcode( 'b_image' ,'ninteen_bussiness_module_image' );


function ninteen_bussiness_accordian( $atts , $content = null ) {

	 if( isset($GLOBALS['collapsibles_count']) )
      $GLOBALS['collapsibles_count']++;
    else
      $GLOBALS['collapsibles_count'] = 0;

  	 $id = 'accordion'. $GLOBALS['collapsibles_count'];
  	 $class = 'panel-group';
 
	 return sprintf(
		'<div class="module-described col-md-9"><div class="%s" id="%s" role="tablist" aria-multiselectable="true">%s</div></div>',
		$class,
		$id,
		do_shortcode( $content ));

}

add_shortcode( 'accordian', 'ninteen_bussiness_accordian');


function ninteen_bussiness_accordian_item( $atts , $content ) {

 $atts = shortcode_atts( array(
      "title"   => false,
      "type"    => false,
      "active"  => false,
      "xclass"  => false,
      "data"    => false
	), $atts );

    $panel_class = 'panel';
    $panel_class .= ( $atts['type'] )     ? ' panel-' . $atts['type'] : ' panel-default';
    $panel_class .= ( $atts['xclass'] )   ? ' ' . $atts['xclass'] : '';
      
    $collapse_class = 'panel-collapse';
    $collapse_class .= ( $atts['active'] == 'true' )  ? ' in' : ' collapse';
      
    $a_class = '';
    $a_class .= ( $atts['active'] == 'true' )  ? '' : 'collapsed';

    $parent = 'custom-collapse-'. $GLOBALS['collapsibles_count'];
    $current_collapse = $parent . '-'. md5( $atts['title'] );

    $data_props = $atts['data'] ;
      
    return sprintf( 
      '<div class="%1$s"%2$s>
        <div class="panel-heading">
          <h4 class="panel-title">
            <a class="%3$s" data-toggle="collapse" data-parent="#%4$s" href="#%5$s">%6$s</a>
          </h4>
        </div>
        <div id="%5$s" class="%7$s">
          <div class="panel-body">%8$s</div>
        </div>
      </div>',
      esc_attr( $panel_class ),
      ( $data_props ) ? ' ' . $data_props : '',
      $a_class,
      $parent,
      $current_collapse,
      $atts['title'],
      esc_attr( $collapse_class ),
      do_shortcode( $content )
    );
}

add_shortcode('item' , 'ninteen_bussiness_accordian_item' );


function get_meta_data_singuler($meta_key) {

	return get_post_meta(get_the_ID(), $meta_key, true);
}

function get_featured_image() {

	if (has_post_thumbnail()) {

		$thumb_id = get_post_thumbnail_id();

		$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);

		$thumb_url = $thumb_url_array[0];

		return $thumb_url;
	}

}


function get_meta_image($meta_key) {

	$image_id = get_meta_data_singuler($meta_key);
		if (isset($image_id)) {
			$image_array = wp_get_attachment_image_src($image_id, 'thumbnail-size', true);
			$image_url = $image_array[0];

			return $image_url;
		}
}

function ninteen_slider_display($before, $after){

	global $post;

	echo $before;

	for ( $i = 1 ; $i < 5 ; $i++ ) {

	echo '<li class="animate-in slider-set-'.$i.'">';
	echo '<div class="info"><h2>'.get_meta_data_singuler( 'nineteen_slider_'.$i ).'</h2>';
	echo '<p>'.get_meta_data_singuler( 'nineteen_slider_caption_'.$i ).'</p></div>';
	echo '<img class="sky" src="'.get_meta_image('nineteen_slider_image_'.$i).'" alt="Blue Sky" />';
	echo '<img class="balloon" src="'.get_meta_image('nineteen_slider_banner_image_'.$i).'" alt="Balloon"/>';
	echo '</li>';


	}

	echo $after;

}


function ninteen_value_display( ){

	global $post;

	for ( $i = 1 ; $i < 5 ; $i++ ) {

		echo '<div class="col-md-3 col-xs-12 highlights-panel section-0'.$i.'">';
		echo '<img src="'.get_meta_image('nineteen_value_image_'.$i).'" class="featured-img" />';
    	echo '<h3>'.get_meta_data_singuler('nineteen_value_title_'.$i).'</h3>';
		echo '<p class="highlights-panel-paragraph">'.get_meta_data_singuler('nineteen_value_description_'.$i).'</p>';
		echo '<span class="highlights-panel-paragraph-more  glyphicon glyphicon-chevron-right set-4-info-more"></span></div>';
	}
}


function ninteen_tabs_display(){

	echo '<div role="tabpanel"><ul class="nav nav-tabs featured-tabs" role="tablist">';

	for ( $i = 1 ; $i < 4 ; $i ++ ) {

		echo '<li role="presentation" class="'.($i == 1 ? 'active' : '').'"><span class="glyphicon glyphicon-arrow-down"></span>';
    	echo '<a href="#tab'.$i.'" aria-controls="'.$i.'" role="tab" data-toggle="tab">'.get_meta_data_singuler( 'nineteen_tab_'.$i).'</a></li>';
	}

	echo '</ul></div><div class="tab-content">';

	for ( $i = 1 ; $i < 4 ; $i ++ ) {

	?>
	
	<div role="tabpanel" class="tab-pane fade <?php echo ($i == 1 ? 'active in' : '') ;?>" id="tab<?php echo $i ;?>">
		<h4><?php echo get_meta_data_singuler( 'nineteen_tab_'.$i);?></h4>
		<p><?php echo get_meta_data_singuler( 'nineteen_tab_desc_'.$i);?></p>
	</div>

  	<?php

  	}

	echo'</div></div>';
}


function ninteen_patners_display( $before , $after ) {

	global $post;

	$patners_set = get_post_meta( get_the_ID(), 'nineteen_patners_image_1', false );

	echo $before;

	foreach ( $patners_set as $patners_image_id ) {
		
		$image_array = wp_get_attachment_image_src($patners_image_id, 'thumbnail-size', true);
		$image_url = $image_array[0];

		echo '<li><img src="'.$image_url.'" /></li>';
	}

	echo $after;

}

function ninteen_timeline_display( $before , $after) {

echo $before;

?>

<div class="timeline"></div>

<?php for ( $i = 1; $i < 5 ; $i ++ ) { ?>

  <div class="event major">
    <h3><?php echo  get_meta_data_singuler( 'nineteen_timeline_section_title_'.$i );?></h3>
    <div class="timeline-point"></div>
    <?php echo get_meta_data_singuler( 'nineteen_timeline_content_'.$i);?>
  </div>

<?php }

echo $after;

}