<?php
/**
 * primerapagina functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package primerapagina
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
function primerapagina_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on primerapagina, use a find and replace
		* to change 'primerapagina' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'primerapagina', get_template_directory() . '/languages' );

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
	add_image_size( 'image-single',800, 400, true);
	add_image_size( 'image-index', 800, 350, true);
	// This theme uses wp_nav_menu() in one location.

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'primerapagina' ),
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
			'primerapagina_custom_background_args',
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
			'height'      => 100,
			'width'       => 250,
		)
	);
}
add_action( 'after_setup_theme', 'primerapagina_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function primerapagina_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'primerapagina_content_width', 640 );
}
add_action( 'after_setup_theme', 'primerapagina_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function primerapagina_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'primerapagina' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'primerapagina' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		 array(
			'name'          => esc_html__( 'Footer -Zone 1', 'primerapagina' ),
			'id'            => 'Footer 1',
			'description'   => esc_html__( 'Add widgets here Footer Zone 1.', 'primerapagina' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
	)
	);

register_sidebar( 
	array(
	'name'          => esc_html__( 'Footer -Zone 2', 'primerapagina' ),
	'id'            => 'Footer 2',
	'description'   => esc_html__( 'Add widgets here Footer Zone 2.', 'primerapagina' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
)
);

register_sidebar( 
	array(
	'name'          => esc_html__( 'Footer -Zone 3', 'primerapagina' ),
	'id'            => 'Footer 2',
	'description'   => esc_html__( 'Add widgets here Footer Zone 3.', 'primerapagina' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h2 class="widget-title">',
	'after_title'   => '</h2>',
)
);
	}

add_action( 'widgets_init', 'primerapagina_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function primerapagina_scripts() {

	wp_enqueue_style("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap", false );
	wp_enqueue_style( 'montserrat_font', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), _S_VERSION);
	wp_enqueue_style('font_awesome', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css', false);
	wp_enqueue_style( 'primerapagina-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap',get_template_directory_uri(  ) . '/css/bootstrap.min.css', array(), _S_VERSION );



	wp_style_add_data( 'primerapagina-style', 'rtl', 'replace' );
	wp_enqueue_script( 'primerapagina-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap_js_4', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'primerapagina_scripts' );

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

if (!function_exists('categorias_post_type') ) {
	// Register Custom Post Type
		function categoria_post_type() {
	
			$labels = array(
				'name'                  => _x( 'Categorias', 'Post Type General Name', 'primerapagina' ),
				'singular_name'         => _x( 'Categoria', 'Post Type Singular Name', 'primerapagina' ),
				'menu_name'             => __( 'Categorias', 'primerapagina' ),
				'name_admin_bar'        => __( 'Categoria', 'primerapagina' ),
				'archives'              => __( 'Item Archives', 'primerapagina' ),
				'attributes'            => __( 'Item Attributes', 'primerapagina' ),
				'parent_item_colon'     => __( 'Parent Categoria:', 'primerapagina' ),
				'all_items'             => __( 'All Categorias', 'primerapagina' ),
				'add_new_item'          => __( 'Add New Item', 'primerapagina' ),
				'add_new'               => __( 'Add Categoria', 'primerapagina' ),
				'new_item'              => __( 'New Item', 'primerapagina' ),
				'edit_item'             => __( 'Edit Categoria', 'primerapagina' ),
				'update_item'           => __( 'Update Categoria', 'primerapagina' ),
				'view_item'             => __( 'View Categoria', 'primerapagina' ),
				'view_items'            => __( 'View Items', 'primerapagina' ),
				'search_items'          => __( 'Search Categorias', 'primerapagina' ),
				'not_found'             => __( 'Not Categorias found', 'primerapagina' ),
				'not_found_in_trash'    => __( 'Not Categorias in Trash', 'primerapagina' ),
				'featured_image'        => __( 'Featured Image', 'primerapagina' ),
				'set_featured_image'    => __( 'Set featured image', 'primerapagina' ),
				'remove_featured_image' => __( 'Remove featured image', 'primerapagina' ),
				'use_featured_image'    => __( 'Use as featured image', 'primerapagina' ),
				'insert_into_item'      => __( 'Insert into item', 'primerapagina' ),
				'uploaded_to_this_item' => __( 'Uploaded to this item', 'primerapagina' ),
				'items_list'            => __( 'Items list', 'primerapagina' ),
				'items_list_navigation' => __( 'Items list navigation', 'primerapagina' ),
				'filter_items_list'     => __( 'Filter items list', 'primerapagina' ),
			);
			$args = array(
				'label'                 => __( 'Categoria', 'primerapagina' ),
				'description'           => __( 'Post Type Description', 'primerapagina' ),
				'labels'                => $labels,
				'supports'              => array( 'title', 'editor' ),
				//'taxonomies'            => array( 'category', 'post_tag' ),
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 5,
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
			);
			register_post_type( 'categorias', $args );
	
	}
	add_action( 'init', 'categoria_post_type', 0 );
	}
	