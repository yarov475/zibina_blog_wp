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
            картину</a></div>
    <br>
    <br>
    <div align="center">
        <h2><i>Хочешь украсить свой дом - пиши!</i></h2><br><a
                href=https://vk.com/id253808274>вконтакте</a></div>
    <section class="card_posts_all">
        <div class="card_old">


           <?php if (have_posts()) : ?>
                <?php while (have_posts()) :
                    the_post(); ?>
                    <?php if (in_category('3')) { ?>
                <?php } else { ?>
                <?php } ?>
                    <div class="">
                        <p> <?php the_title(); ?></p>
                        <p><a href="<?php the_permalink() ?>"
                              title="Ссылка на: <?php the_title_attribute(); ?>"><?php echo get_the_post_thumbnail($id, 'thumbnail'); ?></a>
                        </p>
                        <p> <?php the_excerpt() ?> </p>
                        <p class="postmetadata">Похожее <?php the_category(', '); ?></p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Нет постов в цикле.</p>
            <?php endif; ?>
        </div>
        <div class="card_new">
            <h2>Новости</h2>
            <img src="" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </section>





<?php get_footer() ?>