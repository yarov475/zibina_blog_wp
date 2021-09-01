<?php get_header(); ?>
<?php require('menu.php'); ?>
<div class="main">
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

        <?php get_header(); ?>

        <section id="primary" class="site-content">
            <div id="content" role="main">

                <?php
                // Check if there are any posts to display
                if (have_posts()) : ?>

                    <h1>  <?php $category = get_the_category();
                        echo $category[0]->cat_name
                        ?>  </h1>
                    <?php

// The Loop
                    while (have_posts()) : the_post(); ?>


                        <h2><a href="<?php the_permalink() ?>" rel="bookmark"
                               title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                        <div class="card">
                            <?php the_content(); ?>
                            <?php echo get_the_post_thumbnail($id, 'large'); ?>

                        </div>

                    <?php endwhile;

                else: ?>
                    <p>Sorry, no posts matched your criteria.</p>


                <?php endif; ?>
            </div>
        </section>


        <?php get_sidebar(); ?>
        <?php get_footer(); ?>
    </section>
    <?php get_sidebar(); ?>
    <?php get_footer() ?>
