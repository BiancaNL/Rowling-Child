<?php
/**
 * @package Rowling Child Theme
 */

/**
 * Load the parent theme and child theme styles
 */
function rowling_parent_theme_style() {

	// Parent theme styles
	wp_enqueue_style( 'parent-style', get_template_directory_uri(). '/style.css' );

	// Child theme styles
	wp_enqueue_style( 'privacykrant-style', get_stylesheet_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'rowling_parent_theme_style' );

/**
 * Add additional functions below
 */
