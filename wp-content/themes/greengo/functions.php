<?php
/**
 * greengo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package greengo
 */

if ( ! function_exists( 'greengo_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function greengo_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on greengo, use a find and replace
	 * to change 'greengo' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'greengo', get_template_directory() . '/languages' );

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
    add_image_size( 'tour-gallery', 1920, 1080, true );
	

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'header' => esc_html__( 'Header', 'greengo' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'greengo_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'greengo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function greengo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'greengo_content_width', 640 );
}
add_action( 'after_setup_theme', 'greengo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function greengo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'greengo' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'greengo' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'greengo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function greengo_scripts() {
	wp_enqueue_style( 'greengo-style', get_stylesheet_uri() );

	//wp_enqueue_script( 'greengo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	//wp_enqueue_script( 'greengo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'greengo-bundle', get_template_directory_uri() . '/js/bundle.js', array(), '20170626', true );
}
add_action( 'wp_enqueue_scripts', 'greengo_scripts' );


//excerprt for pages

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

function add_taxonomy_controller($controllers) {
  $controllers[] = 'Taxonomy';
  return $controllers;
}
add_filter('json_api_controllers', 'add_taxonomy_controller');

function set_taxonomy_controller_path() {
  return get_stylesheet_directory() . '/json-api-taxonomy-index.php';
}
add_filter('json_api_taxonomy_controller_path', 'set_taxonomy_controller_path');

function word_count($string, $limit) {
 
	$words = explode(' ', $string);
 
	return implode(' ', array_slice($words, 0, $limit)). '...';
 
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Implement the Woocommerce.
 */
require get_template_directory() . '/inc/wc.php';

/**
 * Implement the metabox custom post type.
 */
require get_template_directory() . '/inc/cpt.php';
require get_template_directory() . '/inc/custom-api.php';