<?php get_header(); ?>
<?php gt_set_post_view(); ?>
<?php
require('menu.php');
?>
<?php if (have_posts()) : ?>


<?php while (have_posts()) :
the_post(); ?>
<?php if (in_category('3')) { ?>
<div>
    <?php } else { ?>
    <div>
        <?php } ?>
        <p class="card">
            <br>   <br>   <br>
            <?php echo get_the_post_thumbnail($id, 'large'); ?>
            <br>   <br>   <br>
            <?php the_content(); ?>
            <br>   <br>   <br>

        </p>
        <p class="postmetadata">Расположено в <?php the_category(', '); ?></p>
    </div>
    <?php previous_post_link('<strong class="post-nav"><< Назад  %link</strong>'); ?>
    <?php next_post_link( '<strong class="post-nav" > Вперед %link >> </strong>' ); ?>
    <?php endwhile; ?>
    <?php else: ?>
        <p>Нет постов в цикле.</p>
    <?php endif; ?>
    <br><br><br>  <br><br><br>  <br><br><br>
    <?php
    require('menu.php');
    ?>
<?php get_footer(); ?>