<?php
/**
 * MFI Insights functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MFI_Insights
 */

/*
 * MFI Theme Definitions
 *
 */

define('ROOT', get_stylesheet_directory_uri());
define('CSS', ROOT.'/css/');
define('JS', ROOT.'/js/');
define('IMAGES', ROOT.'/images/');


if ( ! function_exists( 'mfi_insights_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mfi_insights_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on MFI Insights, use a find and replace
	 * to change 'mfi-insights' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mfi-insights', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'mfi-insights' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	
}
endif;
add_action( 'after_setup_theme', 'mfi_insights_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mfi_insights_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mfi_insights_content_width', 640 );
}
add_action( 'after_setup_theme', 'mfi_insights_content_width', 0 );



/**
 * Enqueue scripts and styles.
 */
function mfi_insights_scripts() {

	wp_enqueue_style( 'mfi-insights-style', get_stylesheet_uri() );

	wp_enqueue_style('bootstrap', CSS.'bootstrap.min.css');

	wp_enqueue_style('bootstrap-theme', CSS.'bootstrap-theme.min.css');

	wp_enqueue_style('font-awesome', CSS.'font-awesome.min.css' );

	wp_enqueue_style('horizontal-parallax', CSS.'horizontal-parallax.css');

	wp_enqueue_style('main-style',CSS.'main-style.css');

	wp_enqueue_style('light-slider',CSS.'lightslider.css');

	// Java Scripts

	wp_enqueue_script('jquery-main',JS.'jquery-1.11.3.min.js',array(),'2016323',true);

	wp_enqueue_script('bootstrap',JS.'bootstrap.min.js',array(),'2016323',true);

	if(is_page_template('home.php')) {

	wp_enqueue_script('jquery.sequence', JS.'jquery.sequence-min.js', array() , '2016323' , true );

	wp_enqueue_script('horizontal-parallax', JS.'sequencejs-options.sliding-horizontal-parallax.js' ,array(), '2016323', true );

	}

	wp_enqueue_script('lightslider', JS.'lightslider.js' , array() , '2016323' , true );

	wp_enqueue_script('site-js', JS.'site-js.js', array(), '2016324',true );

	wp_enqueue_script( 'mfi-insights-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mfi-insights-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mfi_insights_scripts' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mfi_insights_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mfi-insights' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<div class="col-md-4"><div class="inner-wrap">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'mfi_insights_widgets_init' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Meta Boxes 
 */

include get_template_directory().'/inc/meta-box.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

