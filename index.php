<?php get_header();?>

   <main>
      <div class="p-mainvisual">
         <ul class="p-mainvisual__slider">
            <li><img src="<?php echo esc_url(get_theme_file_uri('/images/liquorshop_main.jpeg'));?>" alt="酒屋イメージ"></li>
            <li><img src="<?php echo esc_url(get_theme_file_uri('/images/liquorshop_main_sake.jpeg'));?>" alt="お酒イメージ"></li>
            <li><img src="<?php echo esc_url(get_theme_file_uri('/images/liquorshop_main_wine.jpeg'));?>" alt="ワインイメージ"></li>
        </ul>
      </div>

      <section class="p-news">
         <div class="p-title">
            <h2 class="c-title">News</a></h2>
            <p class="c-title__sub">ニュース</p> 
         </div>

         <div class="p-news__post">
           <?php query_posts('posts_per_page=3'); ?>
             <?php if (have_posts()):while(have_posts()):the_post();?>
               <article class="p-news__post__detail">
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
         </div>
         <div class="p-news__post__button">
               <button class="p-news__post__button__next c-button"type=“button” onclick="location.href='/index.php?page_id=25'">他の記事へ→</button>
         </div>  
      </section>

      <section class="p-about">
         <div class="p-about__img">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/liquorshop_about.png '));?>">
         </div>
         <div class="p-about__contents">
            <div class="p-title">
               <h2 class="c-title">About</h2>
               <p class="c-title__sub">私たちについて</p> 
            </div>
            <div class="p-about__contents__text">
               <p>昭和14年に現在の〇〇市〇〇町に開業以来、地元のお客様に愛される小売店として、創業83年を迎えました。</p>
               <p>現在は、酒類・たばこ類の販売を行っています。</p>
               <p>地元の銘酒をはじめ、全国各地のレアな日本酒なども取り揃えております。</p>
            </div>
         </div>
      </section>

      <section class="p-item">
         <div class="p-item__contents">
            <div class="p-title">
               <h2 class="c-title">Items</h2>
               <p class="c-title__sub">取扱商品</p> 
            </div>
            <div class="p-item__contents__figures">
               <div class="p-item__contents__figures__first">
                  <figure>
                     <figcaption>－日本酒</figcaption>
                     <img src="<?php echo esc_url(get_theme_file_uri('/images/liquorshop_item_japanese-sake.jpeg'));?>" href="<?php the_permalink();?>">
                  </figure>
                  <figure>
                     <figcaption>－ビール</figcaption>
                     <img src="<?php echo esc_url(get_theme_file_uri('/images/liquorshop_item_beer.jpeg'));?>">
                  </figure>
               </div>
               <div class="p-item__contents__figures__second">
                  <figure>
                     <figcaption>－焼酎</figcaption>
                     <img src="<?php echo esc_url(get_theme_file_uri('/images/liquorshop_item_shochu.jpeg'));?>">
                  </figure>
                  <figure>
                     <figcaption>－ワイン</figcaption>
                     <img src="<?php echo esc_url(get_theme_file_uri('/images/liquorshop_item_wine.jpeg'));?>">
                  </figure>
               </div>
            </div>
      </section>

      <section class="p-company">
         <div class="p-company__contents">
            <div class="p-title">
               <h2 class="c-title">Company</h2>
               <p class="c-title__sub">会社情報</p> 
            </div>
            <dl class="p-company__contents__detail">
               <dt>会社名</dt>
                  <dd>〇〇株式会社</dd>
               <dt>所在地</dt>
                  <dd>〇〇県〇〇市西新町1-2453</dd>
               <dt>代表者名</dt>
                  <dd>〇〇〇〇</dd>
               <dt>設立</dt>
                  <dd>1939年4月</dd>
               <dt>資本金</dt>
                  <dd>30,000,000円</dd>
               <dt>事業内容</dt>
                  <dd>酒類小売業</dd>
            </dl>
         </div>
         <div class="p-company__img">
         <img src="<?php echo esc_url(get_theme_file_uri('/images/liquorshop_company.jpeg'));?>">
         </div>
      </section>
   </main>

<?php get_footer();?>