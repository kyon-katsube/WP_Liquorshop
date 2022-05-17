<time>
    <?php echo get_the_date('Y.m.d');?>
</time>  <!--echoにしておけば同日で複数投稿があっても表示される-->

<p class="p-news__post__detail__mark"> <!--カテゴリ名を取得・表示-->
    <?php
        $cat = get_the_category();
        $cat = $cat[0]; {
            echo $cat->cat_name;
        }
    ?>
</p>