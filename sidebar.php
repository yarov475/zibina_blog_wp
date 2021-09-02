<aside class="sidebar">
    <h2>Популярное: </h2>
    <?php
    $args = array('posts_per_page' => 3, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC');
    query_posts($args);
    while (have_posts()): the_post();
        ?>
        <div class="sideBarCard">
            <p><a href="<?php the_permalink() ?>"
                  title="Ссылка на: <?php the_title_attribute(); ?>"><?php echo get_the_post_thumbnail($id, 'thumbnail'); ?></a>
            </p>

            <p class="postmetadata">Похожее <?php the_category(', '); ?></p>
        </div>
    <?php endwhile;
    wp_reset_query(); ?>
</aside>
