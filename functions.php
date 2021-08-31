<?php
function blog_assets()
{
    wp_enqueue_style('animate', get_template_directory_uri() . '/asset/css/animate.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/asset/css/font-awesome.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/asset/css/style.css');

    wp_enqueue_script('scripts', get_template_directory_uri() . '/asset/js/scripts.js');
}

add_action('wp_enqueue_scripts', 'blog_assets');

show_admin_bar(false);

#создай читать дальше

add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more)
{
    global $post;
    return '<a href="' . get_permalink($post) . '">Читать дальше...</a>';
}

add_theme_support('post-thumbnails');

//count post views
function gt_get_post_view()
{
    $count = get_post_meta(get_the_ID(), 'post_views_count', true);
    if ($count > 0) return "$count ";
}

function gt_set_post_view()
{
    $key = 'post_views_count';
    $post_id = get_the_ID();
    $count = (int)get_post_meta($post_id, $key, true);
    $count++;
    update_post_meta($post_id, $key, $count);
}

function gt_posts_column_views($columns)
{
    $columns['post_views'] = 'Views';
    return $columns;
}

function gt_posts_custom_column_views($column)
{
    if ($column === 'post_views') {
        echo gt_get_post_view();
    }
}

add_filter('manage_posts_columns', 'gt_posts_column_views');
add_action('manage_posts_custom_column', 'gt_posts_custom_column_views');