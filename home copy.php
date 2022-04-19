<?php get_header();?>

   <main>
      <div class="p-archive">
         <h2 class="p-archive__title c-title">News & Press</h2>

<!--タブ切り替え-->
         <div class="tab_wrap">   <!--タブ全体を囲むクラス-->  
            <div class="tab-group">  <!--すべてのタブの名前を定義するクラス。中にタブ1つ1つの名前を定義する-->
               <div class="tab is-active"><?php echo get_the_category();?></div>  <!--タブの名前を定義するクラス。「is-active」は初期表示時に選択しているタブ-->
               <div class="tab">プレスリリース</div>
               <div class="tab"></div>
            </div>
            <div class="panel-group">   <!--すべてのタブの中身を定義するクラス。中にタブ1つ1つの中身を定義する-->
               <div class="panel is-show">
                  タブ名1の内容</div>  <!--タブの中身を定義するクラス。「is-show」は初期表示時に表示するタブの中身-->
               <div class="panel">タブ名2の内容</div>
               <div class="panel">タブ名3の内容</div>
            </div>
         </div>



            <!-- <ul class="p-archive__tab c-underline">
               <li class="p-archive__tab__news c-underline--bold">ニュース</p>
               <li class="p-archive__tab__press c-underline--normal">プレスリリース</p>
               <li class="p-archive__tab__list c-underline--empty">  </p>
            </ul> -->
      
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