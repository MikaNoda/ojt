<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <header>
        <input type="checkbox" id="hamburger">
        <label class="hamburger" for="hamburger">
            <span class="pate"></span>
        </label>

<!-- テンプレートファイルのメニューを表示したい場所に記述 -->
<?php 
  wp_nav_menu( array( 
    'theme_location' => 'main-menu' 
  ) ); 
?>
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
        </div>
    </header>