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
        wp_enqueue_script('slick', get_template_directory_uri(). '/js/slick-config.js', array('jquery'));
}  

add_action('wp_enqueue_scripts', 'wpliquorshop_script');


//各メニューを有効化
function theme_setup (){
    add_theme_support('title-tag');
    register_nav_menus(
        array('main-menu' => 'メインメニュー',)
    );
}

add_action('after_setup_theme','theme_setup');


// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);