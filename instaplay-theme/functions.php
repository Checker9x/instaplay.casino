<?php
/**
 * Instaplay Theme functions and definitions
 */

if ( ! function_exists( 'instaplay_setup' ) ) :
	function instaplay_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'instaplay' ),
			)
		);

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 80,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'instaplay_setup' );

/**
 * Enqueue scripts and styles.
 */
function instaplay_scripts() {
	wp_enqueue_style( 'instaplay-style', get_stylesheet_uri(), array(), '1.0.0' );
	wp_enqueue_style( 'instaplay-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );

	wp_enqueue_script( 'instaplay-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'instaplay_scripts' );

/**
 * Auto-create required pages with their assigned templates on theme activation.
 */
function instaplay_auto_create_pages() {
	$pages = array(
		'Slots' => 'page-slots.php',
		'Live Casino' => 'page-live-casino.php',
		'Providers' => 'page-providers.php',
		'Promotions' => 'page-promotions.php',
		'About Us' => 'page-about-us.php',
		'Articles' => 'page-articles.php',
		'JILI' => 'page-jili.php',
		'PG Soft' => 'page-pgsoft.php',
		'Pragmatic' => 'page-pragmatic.php',
		'Register Guide' => 'page-register-guide.php',
		'GCash Guide' => 'page-gcash-guide.php',
		'Responsible Gaming' => 'page-responsible-gaming.php'
	);

	foreach ( $pages as $page_title => $template ) {
		$page_check = get_page_by_title( $page_title );
		if ( ! isset( $page_check->ID ) ) {
			$new_page_id = wp_insert_post( array(
				'post_title'     => $page_title,
				'post_type'      => 'page',
				'post_status'    => 'publish',
				'post_author'    => 1,
			) );
			if ( $new_page_id && ! is_wp_error( $new_page_id ) ) {
				update_post_meta( $new_page_id, '_wp_page_template', $template );
			}
		}
	}
}

/**
 * Trigger the auto-create function securely on admin load (runs once)
 */
function instaplay_trigger_page_creation() {
	if ( ! get_option( 'instaplay_pages_installed_v2' ) ) {
		instaplay_auto_create_pages();
		update_option( 'instaplay_pages_installed_v2', 1 );
	}
}
add_action( 'admin_init', 'instaplay_trigger_page_creation' );
