<?php get_header(); ?>
<?php
require('menu.php');
?>
    <div class="main">
    <div align="center">
        <hr color="#f07d10">
        <br>
        <i>В своих работах я несу цвет! В основном оранжевый.
            <br>это гимн жизни и радости</i><br>
        <br>
        <div class="animated  bounceInLeft delay-1s"><h1>Биография</h1></div>
        <br/>
        <blockquote> Не засеряйте себе жизнь!</blockquote>
        <p class="animated  fadeInRightBig delay-2s"> Зыбина Г.Н. <em>биолог</em>. Долгое время она работала педагогом в<acronym
                    title="Санкт Петербургский Государственный Университет"> СПБГУ</acronym>. Любовь к
            <strong>жизни</strong>, природе и наукам о ней <q>придают</q> картинам особое волшебство. Зыбина -
            талантливый педагог и живописец, но стала художником только выучив сына. Судьба свела женщину с тем же <a
                    href="http://www.lediartdom.ru">педагогом</a>, который учмл ее ребенка. Ее картины это творчество
            человека, который, наконец, стал свободным и осмелился заниматься тем, что любит. <dfn>Философия </dfn>ее
            работ в передаче радости и света через цвет и композицию. Линия, пятно - все выразительные средства
            направленны на то чтобы успокоить и преободрить зрителя. Это живопись вносит яркие краски в мир. В
            мастерской художника можно услышать совет "не засеряй жизнь!" Это кредо автора, которое значит: "рисуй
            картину своей жизни яркими и чистыми цветами". Художник без устали эсперементриует. На пересечении искусства
            и арттерапии рождаются полотна, облагораживающие жизнь.</p></div>
    <br/><br/><br/>
    <br>
    <div class="buttond" style="text-align:center"><a
                href="https://docs.google.com/forms/d/e/1FAIpQLSdy6W0lBPP67kJrQwBN1FEb-LViqeMrCwXzCcSUYYClGLhxSw/viewform?usp=sf_link"
                target="_blank"
                style="cursor: pointer; font-size:22px;  text-decoration: none; padding:2px 135px; color:white; background-color:#f07d10; border-radius:9px; border: 2px solid #5e6970;">Купить
            картину</a></div><br>
    <br>
    <div align="center">
        <h2><i>для сотрудничества и оформления заказов пишите!</i></h2><br><a
                href=https://vk.com/id253808274>вконтакте</a></div>

            <!-- Проверка наличия записей в цикле -->
            <?php if (have_posts()) : ?>

            <!-- Начало цикла -->
            <?php while (have_posts()) :
            the_post(); ?>
            <!-- Цикл WordPress -->
            <!-- Здесь уже определилась переменная $post, -->
            <!-- на основе которой будет строится дальнейший код. -->
            <!-- $post будет меняться для каждого поста while( have_posts() ). -->
            <!-- $post нужна, чтобы работали теги шаблона: in_category('3'), the_permalink() и т.д. -->

            <!-- Проверка находится ли этот пост в категории 3. -->
            <!-- Если да, то задаем CSS класс div-у class="post-cat-three". -->
            <!-- Если нет, то класс будет post class="post". -->
            <?php if (in_category('3')) { ?>

        <?php } else { ?>
        <div>
            <?php } ?>

            <!-- Выводим заголовок поста, как ссылку на сам пост. -->
            <p> <?php the_title(); ?></p>

            <p> <a href="<?php the_permalink() ?>"                   title="Ссылка на: <?php the_title_attribute(); ?>"><?php echo get_the_post_thumbnail($id, 'thumbnail');?></a></p>
           <p> <?php the_excerpt()?> </p>
            <!-- Выводим категории поста, через запятую. -->
            <p class="postmetadata">Похожее <?php the_category(', '); ?></p>
        </div> <!-- закрываем основной тег div -->
        <!-- Отсюда цикл начинает повторятся, если есть еще посты -->
        <!-- Останавливаем цикл (endwhile), -->
        <?php endwhile; ?>
        <!-- Полное окончание цикла. -->
        <!-- Если записей в цикле нет — цикл не сработал (else) -->
        <?php else: ?>
            <p>Нет постов в цикле.</p>
        <?php endif; ?>
        <!---->
        <!--                       <img src="img/03.jpg" alt="пион" width = "100" height = "100">-->
        <!--                       <img src="img/04.jpg" alt="деревенский пейзаж" width = "100" height = "100">-->
        <!--                       <img src="img/05.jpg" alt="рассвет" width = "100" height = "100">-->
        <!--                       <br /><img src="img/06.jpg" alt="пейзаж в петергофе" width = "100" height = "100">-->
        <!--                       <img src="img/07.jpg" alt="тверская область" width = "100" height = "100">-->
        <!--                       <img src="img/08.jpg" alt="осенний пейзаж" width = "100" height = "100">-->
        <!--                       <img src="img/09.jpg" alt="Петербургский пейзаж" width = "100" height = "100">-->
        <!--                       <br /><img src="img/10.jpg" alt="прованс" width = "100" height = "100">-->
        <!--                       <img src="img/11.jpg" alt="весенний пейзаж" width = "100" height = "100">-->
        <!--                       <img src="img/12.jpg" alt="натюрморт малые голандцы" width = "100" height = "100"></a></p></div>-->
        <script type="text/javascript" src="https://vk.com/js/api/openapi.js?167"></script>
        <script type="text/javascript" src="https://vk.com/js/api/openapi.js?167"></script>


    </li>
    </div>
<?php get_footer() ?>