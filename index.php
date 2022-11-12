<!-- header読み込み -->
<?php get_header(); ?>

    <main class="content">
        <section class="articles-wrap">
            <h1 class="articles-title">Latest Articles</h1>  
            <article class="articles-content">
                  <!-- メインループの記載 繰り返し　コロン構文-->
            <?php
             if(have_posts()):
             while(have_posts()):
              the_post();
            ?>  
                <div class="post-wrap">
                    <div>
                        <img src="<?php the_post_thumbnail_url('medium');?>" alt="">
                    </div>
                    <div class="post-content">
                        <div class="post-title">
                            <p class="post-date"><?php echo get_the_date(); ?></p>
                            <p class="post-text"><?php the_title(); ?></p>
                        </div>
                        <div class="readmore">
                            <p>READ MORE</p>
                        </div>
                    </div>
                </div>
                <?php
                  endwhile;
                  else:
                 ?>
                <div class="post-wrap">
                    <div class="post-title">表示する記事がありません</div>      
                </div>
                <?php endif; ?>


                <!-- <div class="post-wrap">
                    <div>
                        <img src="<?php echo get_template_directory_uri();?>/img/post_img_2.png" alt="">
                    </div>
                    <div class="post-content">
                        <div class="post-title">
                            <p class="post-date">2018/5/19</p>
                            <p class="post-text">あのネオンはいつ交換するのか！観覧車の謎に迫る！</p>
                        </div>
                        <div class="readmore">
                            <p>READ MORE</p>
                        </div>
                    </div> -->
                <!-- </div>
                <div class="post-wrap">
                    <div>
                        <img src="<?php echo get_template_directory_uri();?>/img/post_img_3.png" alt="">
                    </div>
                    <div class="post-content">
                        <div class="post-title">
                            <p class="post-date">2018/5/18</p>
                            <p class="post-text">ラソナの社内はこんなのよ</p>
                        </div>
                        <div class="readmore">
                            <p>READ MORE</p>
                        </div> -->
                    <!-- </div>
                </div>
                <div class="post-wrap">
                    <div>
                        <img src="<?php echo get_template_directory_uri();?>/img/post_img_4.png" alt="">
                    </div>
                    <div class="post-content">
                        <div class="post-title">
                            <p class="post-date">2018/5/17</p>
                            <p class="post-text">お隣のアラハはハワイ？</p>
                        </div>
                        <div class="readmore">
                            <p>READ MORE</p> -->
                        <!-- </div>
                    </div>
                </div>
                <div class="post-wrap">
                    <div>
                        <img src="<?php echo get_template_directory_uri();?>/img/post_img_5.png" alt="">
                    </div>
                    <div class="post-content">
                        <div class="post-title">
                            <p class="post-date">2018/5/16</p>
                            <p class="post-text">なせテント？ラソナの人に聞いてみた</p>
                        </div> -->
                        <!-- <div class="readmore">
                            <p>READ MORE</p>

                        </div>
                    </div>
                </div>
                <div class="post-wrap">
                    <div>
                        <img src="/img/post_img_6.png" alt="">
                    </div> -->
                    <!-- <div class="post-content">
                        <div class="post-title">
                            <p class="post-date">2018/5/15</p>
                            <p class="post-text">ベイエリアおしゃれすぎる問題</p>
                        </div>
                        <div class="readmore">
                            <p>READ MORE</p>

                        </div>
                    </div> -->
                <!-- </div> -->
            </article>
        </section>
    </main>
</div>
   <!-- footer読み込み -->
   <?php get_footer(); ?>