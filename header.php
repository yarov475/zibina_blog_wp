<!DOCTYPE html>
<html>
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161575006-1"></script>
    <noscript><img src="https://vk.com/rtrg?p=VK-RTRG-468381-eNfbj" style="position:fixed; left:-999px;" alt=""/>
    </noscript>
    <title>Биография и философия художника Зыбиной Галины Николаевны</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Биография выставки и философия художника, дарящего радость Г.Н. Зыбиной">
    <meta name="keywords" content="биография философия купить картину радость">
    <link rel="shortcut icon" href="favicon.ico">

<!--    include styles and scripts-->
    <?php wp_head(); ?>
  <!-- другой стиль для поста -->
    <?php
    if ( is_singular('post') ) {
  echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/asset/css/post.css">';
    } ?>
</head>


<body>
<!-- Yandex.Metrika counter -->

<noscript>
    <div><img src="https://mc.yandex.ru/watch/61199074" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript> <!-- /Yandex.Metrika counter -->
<div style="width:100%">
    <div style="width: 640px; margin: 0 auto">
        <p>
        <div id="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php  echo  get_template_directory_uri();?>/asset/img/dove.png"
                     alt="галка"
                     height="50"
                     width="50"                >
            </a></div>
        <?php
        if(is_front_page()){
            ?>
             '<div class="animated fadeInDown warning"><img src="<?php echo  get_template_directory_uri(); ?>/asset/img/maport.jpg" alt="портрет Зыбиной Галины Николаевны."></div>';
        <?php
        }else{
            ?>
        <h1> Художник Зыбина Галина.</h1>
        <?php
        }
            ?>


