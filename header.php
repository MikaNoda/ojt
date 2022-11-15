<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <?php wp_head();?>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
</head>

<body>
    <div class="body-wrap">
    <header>
        <input type="checkbox" id="hamburger">
        <label class="hamburger" for="hamburger">
            <span class="pate"></span>
        </label>
        <div class="sp-menu">
            <?php 
                wp_nav_menu( array( 
              'theme_location' => 'main-menu' 
              ) ); 
            ?>
        </div>

<!-- テンプレートファイルのメニューを表示したい場所に記述 -->

        <div class="header-menu">
            <?php 
                wp_nav_menu( array( 
              'theme_location' => 'main-menu' 
              ) ); 
            ?>
        </div>
       
        <div class="content">
            <div class="kv">
                <img class="kv-logo" src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo">
                <!-- wp-slider pc -->
                <?php echo do_shortcode('[metaslider id="61"]'); ?>
               
                <!-- wp-slider sp -->
                
                <img class="kv-text" src="<?php echo get_template_directory_uri();?>/img/visual_text_pc.png" alt="text">
                <img class="sp-text" src="<?php echo get_template_directory_uri();?>/img/visual_text_sp.png" alt="text">
            </div>
            <p class="kv-p">進化し続ける「街」アメリカンビレッジマガジン</p>
            <p class="sp-p">進化し続ける「街」<br>アメリカンビレッジマガジン</p>
        </div>
    </header>    
    
</body>