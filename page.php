<!--固定ページ-->

<?php get_header();?>

<main>
   <div class="p-archive">  <!--投稿一覧のタイトル周りと同じ-->

      <?php if( have_posts() ): while( have_posts() ) : the_post(); ?>
         <h1 class="p-archive__title c-title"><?php the_title(); ?></h1>

         <div class="p-page__contents"> 
            <?php the_content();?>   
         </div>

      <?php endwhile;
      endif;?>
   </div>
</main>

<?php get_footer();?>