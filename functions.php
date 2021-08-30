<?php
function blog_assets(){
    wp_enqueue_style('animate', get_template_directory_uri() . '/asset/css/animate.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/asset/css/font-awesome.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/asset/css/style.css');

    wp_enqueue_script('scripts', get_template_directory_uri() . '/asset/js/scripts.js');
}
add_action('wp_enqueue_scripts','blog_assets');

show_admin_bar(false);

#создай читать дальше

add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
    global $post;
    return '<a href="'. get_permalink($post) . '">Читать дальше...</a>';
}

add_theme_support( 'post-thumbnails' );