<?php



function ao_enqueue_styles() {
	wp_enqueue_style( 'main', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'ao_enqueue_styles' );