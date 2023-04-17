<?php

/**
 * Theme functions.
 *
 * @package WordPress
 * @subpackage theme_name
 */

/**
 * Theme dependencies.
 */
add_action( 'after_setup_theme', 'load_theme_dependencies' );
function load_theme_dependencies(){
	// Register theme menus.
	register_nav_menus(
		[
			'header_menu'	=> esc_html__( 'Header Menu', 'theme_name' ),
			'footer_menu'	=> esc_html__( 'Footer Menu', 'theme_name' )
		]
	);

	// Please place all custom functions declarations in this file.
	require_once( 'theme-functions/theme-functions.php' );
}

/**
 * Theme initalization.
 */
add_action( 'init', 'init_theme' );
function init_theme(){
	load_theme_textdomain( 'theme_name', get_stylesheet_directory() . '/languages' );

	// Enable post thumbnails.
	add_theme_support( 'post-thumbnails' );

	// Custom image sizes.
	// add_image_size( 'full-hd', 1920, 0, 1 );
}

/**
 * Enqueue styles and scripts.
 */
function inclusion_enqueue(){
	// Random value to prevent caching.
	// Change to some value on production, for example: '1.0.0'.
	$ver_num = mt_rand();

	// Styles.
	wp_enqueue_style( 'main', get_template_directory_uri() . '/static/css/main.min.css', [], $ver_num, 'all' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', ['main'], $ver_num, 'all' );

	// Scripts.
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/static/js/main.min.js', ['jquery'], $ver_num, true );
}
add_action( 'wp_enqueue_scripts', 'inclusion_enqueue' );

// Add ACF Page Options.
if( function_exists( 'acf_add_options_page' ) ){
	acf_add_options_page(
		[
			'page_title' 	=> 'Options',
			'menu_title'	=> 'Options',
			'menu_slug' 	=> 'options',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		]
	);
}

