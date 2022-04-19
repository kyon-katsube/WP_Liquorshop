<?php get_header();?>

   <main>
      <div class="p-archive">
         <h2 class="p-archive__title c-title">News & Press</h2>

         

         <section class="p-archive__post">
           <?php if (have_posts()):while(have_posts()):the_post();?>
            <article class="p-archive__post__detail">
               <time><?php echo get_the_date('Y.m.d');?></time>
               <p class="p-news__post__detail__mark">
                  <?php
                     $cat = get_the_category();
                     $cat = $cat[0]; {
                        echo $cat->cat_name;
                     }
                  ?>
               </p>
               <p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
               </article>
            <?php endwhile;else:?>
               <p>記事はありません。</p>
            <?php endif;?>
           
         </section>

      </div>

   </main>

<?php get_footer();?>