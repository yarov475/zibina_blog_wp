<?php /* Template Name: contact */ ?>
<?php get_header(); ?>
<?php require('menu.php'); ?>
<div class="main">
    <br/><br/><br/>
    <div class="buttond" style="text-align:center"><a
                href="https://docs.google.com/forms/d/e/1FAIpQLSdy6W0lBPP67kJrQwBN1FEb-LViqeMrCwXzCcSUYYClGLhxSw/viewform?usp=sf_link"
                target="_blank"
                style="cursor: pointer; font-size:22px;  text-decoration: none; padding:2px 135px; color:white; background-color:#f07d10; border-radius:9px; border: 2px solid #5e6970;">Купить
            картину</a></div>
    <br>
    <br/><br/>
    <hr>
    <i>для сотрудничества и оформления заказов</i><br/><br/>
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?167"></script>
    <div id="vk_contact_us"></div>
    <script type="text/javascript">
        VK.Widgets.ContactUs("vk_contact_us", {text: "Пишите Галине Вконтакте"}, 253808274);
    </script>
    <br/>
    Пишите на почту: <a href="mailto:ya.yarochkin@yandex.ru">ya.yarochkin@yandex.ru </a><br/><br/>
    Звоните: <a href="tel:8 903 099 20 74">8 903 099 20 74</a>
    <br/> <br/><br/><br/>
    <hr>
    <br/><br/>
    <script type="text/javascript">(function () {
            if (window.pluso) if (typeof window.pluso.start == "function") return;
            if (window.ifpluso == undefined) {
                window.ifpluso = 1;
                var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                s.type = 'text/javascript';
                s.charset = 'UTF-8';
                s.async = true;
                s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://share.pluso.ru/pluso-like.js';
                var h = d[g]('body')[0];
                h.appendChild(s);
            }
        })();</script>
    <div class="pluso" data-background="transparent" data-options="big,square,line,horizontal,counter,theme=01"
         data-services="vkontakte,odnoklassniki,facebook,email"></div>
    <br><br>
    <hr>
    <?php get_footer() ?>
