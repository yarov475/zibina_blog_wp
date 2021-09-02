<!DOCTYPE html>
<html>
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161575006-1"></script>
    <noscript><img src="https://vk.com/rtrg?p=VK-RTRG-468381-eNfbj" style="position:fixed; left:-999px;" alt=""/>
    </noscript>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="shortcut icon" href="favicon.ico">
    <?php wp_head(); ?>
    <?php
    if ( is_singular('post') ) {
  echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/asset/css/post.css">';
    } ?>
    <?php
    if ( is_category() ) {
        echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/asset/css/category.css">';
        echo '<title>Все в этой категории</title>';
        echo '<meta name="description" content=" Все в этой категории">';
        echo '<meta name="keywords" content="категория, событие">';
    } ?>
    <?php
    if ( is_page('contact') ) {
        echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/asset/css/contact.css">';
        echo '<title>Контакты Зыбиной Галины Николаевны</title>';
        echo '<meta name="description" content="Оформить заказ, предложить коллаборацию ">';
        echo '<meta name="keywords" content="телефон, вк, оформить заказ">';
    } ?>
    <?php
    if ( is_page('portfolio') ) {
        echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/asset/css/portfolio.css">';
        echo '<title>Новые Картины Художника Зыбиной</title>';
        echo '<meta name="description" content="Посмотреть новые картины Зыбиной Г.Н.">';
        echo '<meta name="keywords" content="Живопись, графика, творчество, вдохновение, референс">';
    } ?>
    <?php if ( is_404() ) {
    echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/asset/css/404.css">';
    } ?>
    <?php if ( is_front_page() ) {
        echo '<title>Биография и философия художника Зыбиной Галины Николаевны</title>';
        echo '<meta name="description" content="Биография, график выставок и философия художника, дарящего радость:  Г.Н. Зыбиной">';
        echo '<meta name="keywords" content="биография, философия, купить картину, радость">';
    } ?>
 </head>
<body>
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
        <h1 class="h1_header"> Художник Зыбина Галина.</h1>
        <?php
        }
        ?>