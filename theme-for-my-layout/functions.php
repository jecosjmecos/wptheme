<?php
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

/**
 * breadcrumbs
 */
//require get_template_directory() . '/includes/breadcrumbs.php';

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );


remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );


/*Общие настройки acf*/
// if( function_exists('acf_add_options_page') ) {
	
// 	acf_add_options_page(array(
// 		'page_title' 	=> 'Общие настройки',
// 		'menu_title'	=> 'Общие настройки',
// 		'menu_slug' 	=> 'theme-general-settings',
// 		'capability'	=> 'edit_posts',
// 		'position' 		=> '4.5',
// 		'update_button' => 'Обновить',
// 		'redirect'		=> false
// 	));
	
// }



/*Подсчет просмотров*/
// add_action('wp_head', 'my_postviews');
// function my_postviews() {

// /* ------------ Настройки -------------- */
// $meta_key       = 'views';  // Ключ мета поля, куда будет записываться количество просмотров.
// $who_count      = 0;            // Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
// $exclude_bots   = 1;            // Исключить ботов, роботов, пауков и прочую нечесть :)? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.

// global $user_ID, $post;
// 	if(is_singular()) {
// 		$id = (int)$post->ID;
// 		static $post_views = false;
// 		if($post_views) return true; // чтобы 1 раз за поток
// 			if(((int)get_post_meta($id,$meta_key, true)) < 240)
// 				$post_views = (int)get_post_meta($id,$meta_key, true) + 240;
// 			else
// 				$post_views = (int)get_post_meta($id,$meta_key, true);
// 		$should_count = false;
// 		switch( (int)$who_count ) {
// 			case 0: $should_count = true;
// 				break;
// 			case 1:
// 				if( (int)$user_ID == 0 )
// 					$should_count = true;
// 				break;
// 			case 2:
// 				if( (int)$user_ID > 0 )
// 					$should_count = true;
// 				break;
// 		}
// 		if( (int)$exclude_bots==1 && $should_count ){
// 			$useragent = $_SERVER['HTTP_USER_AGENT'];
// 			$notbot = "Mozilla|Opera"; //Chrome|Safari|Firefox|Netscape - все равны Mozilla
// 			$bot = "Bot/|robot|Slurp/|yahoo"; //Яндекс иногда как Mozilla представляется
// 			if ( !preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent) )
// 				$should_count = false;
// 		}

// 		if($should_count)
// 			if( !update_post_meta($id, $meta_key, ($post_views+1)) ) add_post_meta($id, $meta_key, 1, true);
// 	}
// 	return true;
// }
