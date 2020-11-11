<?php 
if(is_category()):

    global $cat; 

    //title
    if(get_field('head-title', 'category_'.$cat)): $title = get_field('head-title', 'category_'.$cat); else: $title = get_cat_name($cat); endif;

    //description
    $description = get_field('head-description', 'category_'.$cat);

    //og type
    $ogType = 'website';

    //url
    $url = get_category_link($cat);

    //og title
    if(get_field('og_title', 'category_'.$cat)): $ogTitle = get_field('head-title', 'category_'.$cat); else: $ogTitle = get_cat_name($cat); endif;

    //og description
    $ogDescription = get_field('og_description', 'category_'.$cat);

    //og image
    $ogImage = get_field('og_image', 'category_'.$cat);
    
    //canonical
    $cat_id = wp_get_term_taxonomy_parent_id($cat, 'category');
    if($cat_id != 0): $parent_cat = $cat_id; else: $parent_cat = $cat; endif;

    $canonical = get_category_link($parent_cat);

else:

    global $post;

    //title
    $first_name = get_the_author_meta('user_firstname', $post->post_author);
    $last_name = get_the_author_meta('user_lastname', $post->post_author);
    if(is_search()): $title = 'Результаты поиска: ' . get_search_query(); elseif(is_author()): $title = $first_name . ' ' . $last_name; elseif(get_field('head-title')): $title = get_field('head-title'); elseif(is_404()): $title = '404.Страница не найдена'; else: $title = get_the_title(); endif;

    //description
    $description = get_field('head-description');

    //og type
    if(is_single()): $ogType = 'article'; else: $ogType = 'website'; endif;

    //url
     $url = get_the_permalink();

    //og title
    if(get_field('og_title', 'category_'.$cat)): $ogTitle = get_field('head-title', 'category_'.$cat); else: $ogTitle = get_cat_name($cat); endif;

    //og description
    $ogDescription = get_field('og_description');

    //og image
    $ogImage = get_field('og_image');

    //canonical
    $canonical = get_the_permalink();

endif; 
?>

    <!--metatextblock-->
    <title itemprop="headline"><?= $title ?></title>
    <meta name="description" content="<?= $description ?>" itemprop="description">

    <meta property="og:type" content="<?= $ogType ?>" />
    <meta property="og:url" content="<?= $url ?>" />
    <meta property="og:title" content="<?= $ogTitle ?>" />
    <meta property="og:description" content="<?= $ogDescription ?>" />
    <meta property="og:image" content="<?= $ogImage ?>" />

    <link rel="canonical" href="<?= $canonical ?>" />
    <!--/metatextblock-->