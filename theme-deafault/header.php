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
#Social field template ?>

<?php 
//if(get_field('whatsapp', 'options')): ?>
	<a href="<?php //the_field('whatsapp', 'options') ?>">
		<img src="<?php bloginfo('template_url') ?>/assets/images/w.svg" alt="whatsapp">
	</a>
<?php 
endif ?>
<?php 
//if(get_field('telegram', 'options')): ?>
	<a href="<?php //the_field('telegram', 'options') ?>">
		<img src="<?php bloginfo('template_url') ?>/assets/images/t.svg" alt="telegram">
	</a>
<?php 
endif ?>
<?php 
//if(get_field('viber', 'options')): ?>
	<a href="<?php //the_field('viber', 'options') ?>">
		<img src="<?php bloginfo('template_url') ?>/assets/images/v.svg" alt="viber">
	</a>
<?php 
endif ?>

<?php 
//if(get_field('youtube', 'options')): ?>
<a href="<?php //the_field('youtube', 'options') ?>">
	<img src="<?php bloginfo('template_url') ?>/assets/images/y.svg" alt="youtube">
</a>
<?php 
endif ?>
<?php 
//if(get_field('instagram', 'options')): ?>
<a href="<?php //the_field('instagram', 'options') ?>">
	<img src="<?php bloginfo('template_url') ?>/assets/images/i.svg" alt="instagram">
</a>
<?php 
endif ?>
<?php 
//if(get_field('vk', 'options')): ?>
<a href="<?php //the_field('vk', 'options') ?>">
	<img src="<?php bloginfo('template_url') ?>/assets/images/vk.svg" alt="vk">
</a>
<?php 
endif ?>
<?php 
//if(get_field('facebook', 'options')): ?>
<a href="<?php //the_field('facebook', 'options') ?>">
	<img src="<?php bloginfo('template_url') ?>/assets/images/f.svg" alt="facebook">
</a>
<?php 
endif ?>
