<?php

if ( ! function_exists( 'adamonishi_setup' ) ):

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook. The init hook is too late for some features, such as indicating
	 * support post thumbnails.
	 */
	function adamonishi_setup() {

		/**
		 * Theme supports: Feed links in head, post formats (aside/image/gallery), post thumbnails...
		 */
		add_theme_support( 'automatic-feed-links' );
		// add_theme_support( 'post-formats', array( 'aside', 'image', 'gallery' ) );
		add_theme_support( 'post-thumbnails' );

		/**
		 * This theme uses wp_nav_menu() in one location.
		 */
		register_nav_menus( array(
			'main' => __( 'Main navigation', 'adamonishi' ),
			'external-links' => __( 'External links', 'adamonishi' ),
			'other-projects' => __( 'Other projects', 'adamonishi' ),
		) );

		/**
		 * Remove the crap from the wp_head() function
		 */
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wp_generator');
		remove_action('wp_head', 'feed_links', 2);
		remove_action('wp_head', 'index_rel_link');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'feed_links_extra', 3);
		remove_action('wp_head', 'start_post_rel_link', 10, 0);
		remove_action('wp_head', 'parent_post_rel_link', 10, 0);
		remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

		/**
		 * Remove any unwanted wordpress dashboard boxes
		 */
		function disable_default_dashboard_widgets() {
			remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
			remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
			remove_meta_box('dashboard_plugins', 'dashboard', 'core');
			remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
		}
		add_action('admin_menu', 'disable_default_dashboard_widgets');

	}

endif; // adamonishi_setup
/**
 * Tell WordPress to run setup function when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'adamonishi_setup' );

function ajo_inline_styles() {
	$css_file = get_template_directory_uri() . '/css/core.css?asd';
	$css = file_get_contents($css_file);

	echo "<style>{$css}</style>";
}
add_action( 'wp_head', 'ajo_inline_styles', 40 );


function ao_enqueue_styles() {
	/**
	 * Better jQuery inclusion
	 */
	if (!is_admin()) {
		wp_deregister_script('jquery');
	}

	wp_enqueue_style( 'fonts', 'http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic,700|Open+Sans:800,300,400');
}

add_action( 'wp_enqueue_scripts', 'ao_enqueue_styles' );


/**
 * Include trello functions
 */
require( get_template_directory() . '/inc/trello.php' );
