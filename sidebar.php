<aside class="sidebar">
   <ul class="popular-posts">
       <button id="sideBarClose">x</button>
            <?php
           $args = array('posts_per_page'=>3, 'meta_key'=>'post_views_count','orderby'=>'meta_value_num','order'=>'DESC');
           query_posts($args);
           while(have_posts()): the_post();
           ?>
           <li>    <div class="">
                   <?= gt_get_post_view(); ?>
                   <p> <?php the_title(); ?></p>
                   <p><a href="<?php the_permalink() ?>"
                         title="Ссылка на: <?php the_title_attribute(); ?>"><?php echo get_the_post_thumbnail($id, 'thumbnail'); ?></a>
                   </p>
                   <p> <?php the_excerpt() ?> </p>
                   <p class="postmetadata">Похожее <?php the_category(', '); ?></p>
               </div>
           </li>
       </ul>
<?php endwhile; wp_reset_query();?>
</aside>




<!--    <button class="sidebar_close" id="mySidebar"> &times;</button>-->
<!--    <p>most popular</p>-->
<!--    <p>subscribe</p>-->
<!--    <p>купить</p>-->
