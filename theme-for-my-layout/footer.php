<?php 
// wp_nav_menu( [
// 	'theme_location'  => 'footer-menu',
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
#Social field template
//if(get_field('whatsapp')):  ?>

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


<!-- <footer itemscope itemtype="http://schema.org/WPFooter">
	<meta itemprop="copyrightYear" content="<?php echo date("Y"); ?>">
	<meta itemprop="copyrightHolder" content="<?php bloginfo('name') ?>">
</footer> -->

<?php wp_footer(); ?>

</body>
</html>
