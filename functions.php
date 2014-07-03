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
 * Tell WordPress to run toolbox_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'adamonishi_setup' );

function ao_enqueue_styles() {
	/**
	 * Better jQuery inclusion
	 */
	if (!is_admin()) {
		wp_deregister_script('jquery');
		// wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false);
		// wp_enqueue_script('jquery');
	}

	wp_enqueue_style( 'fonts', 'http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic|Open+Sans:800,300,400');
	wp_enqueue_style( 'main', get_stylesheet_uri(), array('fonts'), '2.1.1' );
}

add_action( 'wp_enqueue_scripts', 'ao_enqueue_styles' );