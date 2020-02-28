<?php

/**
 * Enqueue scripts and styles.
 */
function my_site_scripts() {
	//styles
	//wp_enqueue_style( 'name', get_template_directory_uri() . '/assets/css/navigation.js', array(), '20151215', all );

	//scripts
	//wp_enqueue_script( 'my-site-navigation', get_template_directory_uri() . 'assets/js/navigation.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'my_site_scripts' );