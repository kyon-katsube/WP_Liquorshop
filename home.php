<?php get_header();?>

   <main>
      <div class="p-archive">
         <h1 class="p-archive__title c-title u-margin-bottom-60">News & Press</h1>

         <div class="p-archive__contents">

            <div class="p-archive__contents__tab"> <!--タブのくくり--><!--tabmenu tabactive mr01-->
               <p class="p-archive__contents__tab__category">すべての記事</p>
               <p class="p-archive__contents__tab__category">ニュース</p>
               <p class="p-archive__contents__tab__category">プレスリリース</p>
            </div>

            <div class="p-archive__contents__post">
               <section class="p-archive__contents__post__wrapper is-show">  <!--すべての記事を取得-->
                  <?php $args = array("post_type" => "post", "posts_per_page" => -5); ?>
                  <?php $myposts = get_posts($args); ?>
                  <?php if($myposts): ?>
                  <?php foreach($myposts as $post) : setup_postdata($post); ?>
                     <article class="p-archive__contents__post__detail">
                        <?php get_template_part('post-category');?>    <!--日付・カテゴリ名を呼び出し-->  
                        <p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
                     </article>
                  <?php endforeach; ?>
                  <?php endif; ?>
                  <?php wp_reset_postdata();?>
               </section>
            
               <section class="p-archive__contents__post__wrapper"> <!--category newsの記事を取得-->
                  <?php
                     $newslist = get_posts( array(
                     'category_name' => 'news', //特定のカテゴリースラッグを指定
                     'posts_per_page' => 5 //取得記事件数
                     ));
                     foreach( $newslist as $post ):
                     setup_postdata( $post );
                  ?>
                  <article class="p-archive__contents__post__detail">
                  <?php get_template_part('post-category');?>    <!--日付・カテゴリ名を呼び出し-->  
                     <p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
                  </article>
                  <?php
                  endforeach;
                  wp_reset_postdata();
                  ?>
               </section>

               <section class="p-archive__contents__post__wrapper"> <!--category pressの記事を取得-->
                  <?php
                     $newslist = get_posts( array(
                     'category_name' => 'press', //特定のカテゴリースラッグを指定
                     'posts_per_page' => 5 //取得記事件数
                     ));
                     foreach( $newslist as $post ):
                     setup_postdata( $post );
                  ?>
                  <article class="p-archive__contents__post__detail">
                    <?php get_template_part('post-category');?>    <!--日付・カテゴリ名を呼び出し-->  
                     <p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
                  </article>
                  <?php
                  endforeach;
                  wp_reset_postdata();
                  ?>
               </section>

            </div> <!--wrapper-->
         </div> <!--p-archive__tab-->
      </div> <!--p-archive-->
   </main>

<?php get_footer();?>