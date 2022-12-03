<!-- header読み込み -->
<?php get_header(); ?>

    <main class="content">
        <section class="articles-wrap">
            <h1 class="articles-title">Latest Articles</h1>  
            <article class="articles-content">
                <!-- 最大６件まで表示 -->
                <?php query_posts('posts_per_page=6'); ?>
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
            </article>
        </section>
    </main>
    </div>
   <!-- footer読み込み -->
   <?php get_footer(); ?>