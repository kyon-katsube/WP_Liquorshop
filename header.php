<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
   <meta charset="utf-8">
   <title><?php bloginfo('name')?></title>
   <meta name="description" content="<?php bloginfo('description')?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/images/beer-icon.png'));?>"> 
   
   <?php wp_head();?>
      
</head>


<body <?php body_class();?>>
   <?php wp_body_open();?>
      <header class="l-header">
         <div class="p-header">
            <h1 class="p-header__title c-title"><a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name')?></h1>  
                <?php
                  wp_nav_menu(array(
                     'menu'=>'main-menu',  //管理画面で作成したメニュー名
                     'container' => 'nav',   //一番外枠のdivタグをnavタグに divタグ全部を消すときはfalse
                     'container_class' => 'p-header__nav' , //navのclass名             
                     'items_wrap' =>  '<ul class="p-header__nav__menu">%3$s</ul>',  //ulのクラス名付与
                     'add_li_class' => 'p-header__nav__menu__list', // liタグへclass追加
                     'theme_location' => 'main-menu' ,//テーマの中で使われる位置 register_nav_menuが必要
                  ));
               ?>
         </div>
         <div class="p-header__button">
            <button class="p-header__button__contact c-button"type=“button” onclick="location.href='#'">お問い合わせ</button>
         </div>
      </header>