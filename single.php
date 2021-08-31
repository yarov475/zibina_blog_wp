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
            <?php echo get_the_post_thumbnail($id, 'large'); ?>
            <?php the_content(); ?>
        </p>
        <p class="postmetadata">Расположено в <?php the_category(', '); ?></p>
    </div>
    <?php endwhile; ?>
    <?php else: ?>
        <p>Нет постов в цикле.</p>
    <?php endif; ?>
    <?php get_footer(); ?>
    <?php
    require('menu.php');
    ?>
