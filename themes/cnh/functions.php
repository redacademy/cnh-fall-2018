<?php
/**
 * CNH Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package based on RED_Starter_Theme
 */

if ( ! function_exists( 'cnh_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function cnh_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}

endif; // red_starter_setup
add_action( 'after_setup_theme', 'cnh_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function cnh_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cnh_content_width', 640 );
}
add_action( 'after_setup_theme', 'cnh_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cnh_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html( 'footer' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html( 'pages' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html( 'upcoming-events' ),
		'id'            => 'sidebar-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	
}
add_action( 'widgets_init', 'cnh_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function cnh_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'cnh_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function cnh_scripts() {
  wp_enqueue_style( 'cnh-style', get_stylesheet_uri() );

  // to link font awesome
  wp_enqueue_style('cnh-fontawesome','https://use.fontawesome.com/releases/v5.5.0/css/all.css');

  // to link material icons
  wp_enqueue_style('cnh-materialicons','https://fonts.googleapis.com/icon?family=Material+Icons');

  // to queue jquery
  wp_enqueue_script('jquery');
  
  wp_enqueue_script('spectragram.js', get_template_directory_uri() . '/build/js/spectragram.min.js', array(), '20181206', true);
	wp_enqueue_script( 'cnh-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true );
  wp_enqueue_script( 'cnh-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true );

  wp_enqueue_script('cnh-selectric-js', 'https://cdn.jsdelivr.net/npm/selectric@1.13.0/public/jquery.selectric.min.js', array('jquery'), '20181206', true);
  
  wp_enqueue_script( 'cnh-custom-js', get_template_directory_uri() . '/build/js/custom.min.js', array('jquery','cnh-selectric-js'), '20181205', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cnh_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Add breadcrumbs.
 */
add_theme_support( 'yoast-seo-breadcrumbs' );

/**
 * Remove "Editor" links from sub-menus.
 */
function cnh_remove_submenus() {
  remove_submenu_page( 'themes.php', 'theme-editor.php' );
  remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'cnh_remove_submenus', 110 );
