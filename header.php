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
                
                <ul class="slide-items">
                 <li><img class="kv-img" src="<?php echo get_template_directory_uri();?>/img/visual_1_pc.png" alt="kv">
                     <img class="sp-img" src="<?php echo get_template_directory_uri();?>/img/visual_1_sp.png" alt="kv">
                 </li>
                 <li><img class="kv-img" src="<?php echo get_template_directory_uri();?>/img/visual_2_pc.png" alt="kv">
                     <img class="sp-img" src="<?php echo get_template_directory_uri();?>/img/visual_2_sp.png" alt="kv">
                 </li>
            
            <li><img class="kv-img" src="<?php echo get_template_directory_uri();?>/img/visual_3_pc.png" alt="kv">
                     <img class="sp-img" src="<?php echo get_template_directory_uri();?>/img/visual_3_sp.png" alt="kv">
                 </li>
                 <li><img class="kv-img" src="<?php echo get_template_directory_uri();?>/img/visual_4_pc.png" alt="kv">
                     <img class="sp-img" src="<?php echo get_template_directory_uri();?>/img/visual_4_sp.png" alt="kv">
                 </li>
                 <li><img class="kv-img" src="<?php echo get_template_directory_uri();?>/img/visual_5_pc.png" alt="kv">
                     <img class="sp-img" src="<?php echo get_template_directory_uri();?>/img/visual_5_sp.png" alt="kv">
                 </li>
                 <li><img class="kv-img" src="<?php echo get_template_directory_uri();?>/img/visual_6_pc.png" alt="kv">
                     <img class="sp-img" src="<?php echo get_template_directory_uri();?>/img/visual_6_sp.png" alt="kv">
                 </li>
                 </ul>
                
                <img class="kv-text" src="<?php echo get_template_directory_uri();?>/img/visual_text_pc.png" alt="text">
                <img class="sp-text" src="<?php echo get_template_directory_uri();?>/img/visual_text_sp.png" alt="text">
            </div>
            <p class="kv-p">進化し続ける「街」アメリカンビレッジマガジン</p>
            <p class="sp-p">進化し続ける「街」<br>アメリカンビレッジマガジン</p>
        </div>
    </header>    
    
</body>