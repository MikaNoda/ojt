<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentt</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="header-menu">
            <ul class="header-li">
                <li>Menu01</li>
                <li>Menu02</li>
                <li>Menu03</li>
                <li>Menu04</li>
            </ul>
        </div>
        <div class="content">
            <div class="kv">
                <img class="kv-logo" src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo">
                <img class="kv-img" src="<?php echo get_template_directory_uri();?>/img/visual_1_pc.png" alt="kv">
                <img class="sp-img" src="<?php echo get_template_directory_uri();?>/img/visual_1_sp.png" alt="kv">
                <img class="kv-text" src="<?php echo get_template_directory_uri();?>/img/visual_text_pc.png" alt="text">
                <img class="sp-text" src="<?php echo get_template_directory_uri();?>/img/visual_text_sp.png" alt="text">
            </div>
            <p class="kv-p">進化し続ける「街」アメリカンビレッジマガジン</p>
            <p class="sp-p">進化し続ける「街」<br>アメリカンビレッジマガジン</p>
        
    </header>

    <main>
        <section class="articles-wrap">
            <h1 class="articles-title">Latest Articles</h1>
            <article class="articles-content">
                <div class="post-wrap">
                    <div>
                        <img src="<?php echo get_template_directory_uri();?>/img/post_img_1.png" alt="">
                    </div>
                    <div class="post-content">
                        <div class="post-title">
                            <p class="post-date">2018/5/20</p>
                            <p class="post-text">おしゃれなカフェがありますよ</p>
                        </div>
                        <div class="readmore">
                            <p>READ MORE</p>
                        </div>
                    </div>
                </div>
                <div class="post-wrap">
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
                    </div>
                </div>
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
                        </div>
                    </div>
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
                            <p>READ MORE</p>
                        </div>
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
                        </div>
                        <div class="readmore">
                            <p>READ MORE</p>

                        </div>
                    </div>
                </div>
                <div class="post-wrap">
                    <div>
                        <img src="<?php echo get_template_directory_uri();?>/img/post_img_6.png" alt="">
                    </div>
                    <div class="post-content">
                        <div class="post-title">
                            <p class="post-date">2018/5/15</p>
                            <p class="post-text">ベイエリアおしゃれすぎる問題</p>
                        </div>
                        <div class="readmore">
                            <p>READ MORE</p>

                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>
    <footer>
        <span>Copyright<small>&copy;</small>Shinohara.ALL RIGHTS RESERVED.</span>
    </footer>

    <script src="./script.js"></script>
</body>

</html>