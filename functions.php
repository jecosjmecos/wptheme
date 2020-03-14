<?php


add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );


/**
 * menus 
 */
require get_template_directory() . '/includes/menus-area.php';

/**
 * Scripts, styles
 */
require get_template_directory() . '/includes/enqueue-script-styles.php';

/**
 * widgets
 */
require get_template_directory() . '/includes/widget-area.php';


