<!--投稿ページ-->

<?php get_header();?>

<main>
   <div class="p-archive"><!--home.scssのタイトルまわりとスタイリング同じ-->
      <?php if (have_posts()):while(have_posts()):the_post();?>
         <article class="p-archive__contents__post__detail">
          <?php get_template_part('post-category');?>    <!--日付・カテゴリ名を呼び出し-->
            <h1 class="p-archive__title c-title u-single-h1-padding"><?php the_title(); ?></h1>
            <p class="p-page__contents"><?php the_content();?></p> <!--pageのp部分と同じスタイリング-->
         </article>
         <?php endwhile;
      endif;?>
   </div>


   <!--ページング--phpのみで実装-->
   <div class="p-paging"> 
      <!--single.phpはposts_linkでなくpost-link postにsなしでOK-->
      <div class="p-paging__wrapper">
         <?php 
            $link = get_previous_post_link('%link','&lt;&lt; 前の記事へ'); 
            if($link) {
               $link = str_replace('<a', '<a class="p-paging__wrapper__back"',$link);
               echo $link ;
            }
         ?>
      </div>
      <div class="p-paging__wrapper">
         <?php 
            $link = get_next_post_link('%link','次の記事へ &gt;&gt;');
            if($link) {
               $link = str_replace('<a', '<a class="p-paging__wrapper__next"',$link);
               echo $link ;
            }
         ?>
      </div>
   </div>  

</main>

<?php get_footer();?>