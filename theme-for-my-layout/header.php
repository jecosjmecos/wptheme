<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head itemscope itemtype="http://schema.org/WPHeader">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php // get_template_part('template-parts/content', 'metablock') ?>
	

    <!-- <link rel="icon" href="<?php bloginfo('template_url') ?>/assets/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/images/favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/assets/images/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/assets/images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/assets/images/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/assets/images/favicon-120x120.png" sizes="120x120" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/assets/images/favicon-194x194.png" sizes="180x180" /> -->

    <!--windows-->
    <!-- <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="application-name" content="1Perevod">
    <meta name="msapplication-tooltip" content="Название" />
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url') ?>/assets/images/mstile-144x144.png">
    <meta name="msapplication-square70x70logo" content="<?php bloginfo('template_url') ?>/assets/images/mstile-70x70.png">
    <meta name="msapplication-square150x150logo" content="<?php bloginfo('template_url') ?>/assets/images/mstile-150x150">
    <meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_url') ?>/assets/images/mstile-310x150.png">
    <meta name="msapplication-square310x310logo" content="<?php bloginfo('template_url') ?>/assets/images/mstile-310x310">

    <meta name="theme-color" content="#ff5024" />

    <link rel="mask-icon" href="<?php bloginfo('template_url') ?>/assets/images/safari-pinned-tab.svg" color="#fd5910">

    <link rel="manifest" href="<?php bloginfo('template_url') ?>/web-manifest.json"> -->

	<script src="https://kit.fontawesome.com/52fa4440e2.js" crossorigin="anonymous"></script>
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
