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
//if(get_field('whatsapp')): ?>
	<!-- <a href="<?php //the_field('whatsapp')) ?>">
		<img src="<?php bloginfo('template_url') ?>/assets/images/w.svg" alt="whatsapp">
	</a> -->
<?php 
//endif ?>


<!-- <footer itemscope itemtype="http://schema.org/WPFooter">
	<meta itemprop="copyrightYear" content="<?php echo date("Y"); ?>">
	<meta itemprop="copyrightHolder" content="<?php bloginfo('name') ?>">
</footer> -->

<?php wp_footer(); ?>

</body>
</html>
