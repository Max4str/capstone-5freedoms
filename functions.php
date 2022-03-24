<?php
/**
 * five-freedoms-ranch functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package five-freedoms-ranch
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function five_freedoms_ranch_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on five-freedoms-ranch, use a find and replace
		* to change 'five-freedoms-ranch' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'five-freedoms-ranch', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Main Menu', 'five-freedoms-ranch' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'five-freedoms-ranch' )
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'five_freedoms_ranch_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'five_freedoms_ranch_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function five_freedoms_ranch_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'five_freedoms_ranch_content_width', 640 );
}
add_action( 'after_setup_theme', 'five_freedoms_ranch_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function five_freedoms_ranch_widgets_init() {
	// Header Donate Btn
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Donate Btn', 'five-freedoms-ranch' ),
			'id'            => 'donate-btn',
			'description'   => esc_html__( 'Add widgets here.', 'five-freedoms-ranch' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	// Footer Contact Info
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Col 1', 'five-freedoms-ranch' ),
			'id'            => 'footer-col-1',
			'description'   => esc_html__( 'Add widgets here.', 'five-freedoms-ranch' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	// Footer Social Links
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Col 2', 'five-freedoms-ranch' ),
			'id'            => 'footer-col-2',
			'description'   => esc_html__( 'Add widgets here.', 'five-freedoms-ranch' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	// Footer Open Hours
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Col 3', 'five-freedoms-ranch' ),
			'id'            => 'footer-col-3',
			'description'   => esc_html__( 'Add widgets here.', 'five-freedoms-ranch' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
}
add_action( 'widgets_init', 'five_freedoms_ranch_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function five_freedoms_ranch_scripts() {
	wp_enqueue_style( 'five-freedoms-ranch-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'five-freedoms-ranch-style', 'rtl', 'replace' );

	//GOOGLE FONTS
    // wp_enqueue_style('oxygen','https://fonts.googleapis.com/css2?family=Oxygen:wght@300;700&display=swap',false);

	// STYLE
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css') ;
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css') ;

	wp_enqueue_script( 'five-freedoms-ranch-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'five_freedoms_ranch_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

