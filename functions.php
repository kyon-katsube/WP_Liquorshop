<?php

//cssとjsを読み込み
function wpliquorshop_script(){

        //css
        wp_enqueue_style( 'reset', '//unpkg.com/ress/dist/ress.min.css');
        wp_enqueue_style( 'style', get_template_directory_uri(). '/scss/style.css',array(),'1.0.0' );
        wp_enqueue_style( 'slick', get_template_directory_uri(). '/js/slick-1.8.1/slick/slick.css',array());
        wp_enqueue_style( 'slick-theme', get_template_directory_uri(). '/js/slick-1.8.1/slick/slick-theme.css',array());

        // WordPress提供のjquery.jsを読み込まない
        wp_deregister_script('jquery');

        //js
        wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery-3.6.0.min.js', array(), '3.6.0');
        wp_enqueue_script('slick-min', get_template_directory_uri(). '/js/slick-1.8.1/slick/slick.min.js' , array('jquery'),'1.8.1',true); 
        wp_enqueue_script('script', get_template_directory_uri(). '/js/script.js', array('jquery'));
}  

add_action('wp_enqueue_scripts', 'wpliquorshop_script');


//各メニューを有効化
function theme_setup (){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(
        array('main-menu' => 'メインメニュー',)
    );
}

add_action('after_setup_theme','theme_setup');


// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args){
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


//投稿アーカイブを表示する
add_filter('register_post_type_args', function($args, $post_type) {
  if ('post' == $post_type) {
      global $wp_rewrite;
      $archive_slug = 'news'; //URLスラッグ
      $args['label'] = '投稿'; //管理画面左ナビに「投稿」の代わりに表示される
      $args['has_archive'] = $archive_slug;
      $archive_slug = $wp_rewrite->root.$archive_slug;
      $feeds = '(' . trim( implode('|', $wp_rewrite->feeds) ) . ')';
      add_rewrite_rule("{$archive_slug}/?$", "index.php?post_type={$post_type}", 'top');
      add_rewrite_rule("{$archive_slug}/feed/{$feeds}/?$", "index.php?post_type={$post_type}".'&feed=$matches[1]', 'top');
      add_rewrite_rule("{$archive_slug}/{$feeds}/?$", "index.php?post_type={$post_type}".'&feed=$matches[1]', 'top');
      add_rewrite_rule("{$archive_slug}/{$wp_rewrite->pagination_base}/([0-9]{1,})/?$", "index.php?post_type={$post_type}".'&paged=$matches[1]', 'top');
  }
  return $args;
}, 10, 2);