<?php /* Template Name: portfolio */ ?>
<?php get_header(); ?>
<?php require('menu.php'); ?>
    <div class="main">
    <div align="center">
    <hr color="#f07d10">
    <h1>Галерея</h1>
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
            <?php
            $arr = ['posts_per_page' => 10,
                'offset' => 0,
                'category_name' => 'Живопись',
                'orderby' => 'date',
            ];
            $recent = new WP_Query($arr);
            while ($recent->have_posts()) : $recent->the_post(); ?>
                <div class="">
                    <?= gt_get_post_view(); ?>
                    <p> <?php the_title(); ?></p>
                    <p><a href="<?php the_permalink() ?>"
                          title="Ссылка на: <?php the_title_attribute(); ?>"><?php echo get_the_post_thumbnail($id, 'thumbnail'); ?></a>
                    </p>
                    <p> <?php the_excerpt() ?> </p>
                    <p class="postmetadata">Похожее <?php the_category(', '); ?></p>
                </div>
            <?php endwhile; ?>

    </section>
<?php get_sidebar(); ?>
<?php get_footer() ?>