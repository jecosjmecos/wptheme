<?php

/**
 * Single post default template.
 *
 * @package WordPress
 * @subpackage theme_name
 */

get_header();
?>

<main class="main">
    <?php
	while( have_posts() ){
		the_post();

		/**
		 * Please create PHP file with your single post content in:
		 * theme_name/includes/single/
		 *
		 * Set its title as:
		 * 'content-<custom-post-type-name>'
		 *
		 * For example:
		 * theme_name/includes/single/content-portfolio.php for 'portfolio' custom post type.
		 */
		get_template_part( 'includes/single/content', get_post_type() );
	}
	?>
</main>

<?php
get_footer();

