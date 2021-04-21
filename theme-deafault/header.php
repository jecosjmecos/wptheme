<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 
// wp_nav_menu( [
// 	'theme_location'  => 'header-menu',
// 	'menu'            => '', 
// 	'container'       => 'div', 
// 	'container_class' => '', 
// 	'container_id'    => '',
// 	'menu_class'      => 'menu', 
// 	'menu_id'         => '',
// 	'echo'            => true,
// 	'fallback_cb'     => 'wp_page_menu',
// 	'before'          => '',
// 	'after'           => '',
// 	'link_before'     => '',
// 	'link_after'      => '',
// 	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
// 	'depth'           => 0,
// 	'walker'          => '',
// ] );
 ?>

<!--  <a href="tel:<?php echo preg_replace('/[^0-9A-Za-z]/', '', get_field('field', 'options'))  ?>">
 	+00 (000) 000-00-00
 </a> -->

<?php 
#Social field template
//if(get_field('whatsapp')): ?>
	<!-- <a href="<?php //the_field('whatsapp')) ?>">
		<img src="<?php bloginfo('template_url') ?>/assets/images/w.svg" alt="whatsapp">
	</a> -->
<?php 
//endif ?>

