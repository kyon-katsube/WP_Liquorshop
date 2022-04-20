<?php get_header();?>

   <main>
      <div class="p-archive">
         <h2 class="p-archive__title c-title">News & Press</h2>

         <div class="p-archive__contents">  <!--full content-->

            <div class="p-archive__contents__tab"> <!--タブのくくり--><!--tabmenu tabactive mr01-->
               <p class="p-archive__contents__tab__category is-active">すべての記事</p>
               <p class="p-archive__contents__tab__category">ニュース</p>
               <p class="p-archive__contents__tab__category">プレスリリース</p>
            </div>

            <div class="p-archive__contents__post">
               <section class="p-archive__contents__post__wrapper is-show">  <!--すべての記事を取得-->
                     <?php query_posts('posts_per_page=5'); ?>
                        <?php if (have_posts()):while(have_posts()):the_post();?>
                           <article class="p-archive__contents__post__detail">
                              <time><?php echo get_the_date('Y.m.d');?></time>  <!--echoにしておけば同日で複数投稿があっても表示される-->
                              <p class="p-news__post__detail__mark"> <!--カテゴリ名を取得・表示-->
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