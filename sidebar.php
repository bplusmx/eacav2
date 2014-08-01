<div id="sidebar" role="complementary">	    
    <?php if (function_exists('dynamic_sidebar')) dynamic_sidebar(); ?>
        
    <?php if (!is_home()): ?>
    <?php $tmp = $post; ?>
    <?php $posts = query_posts(array('post__in' => get_option('sticky_posts'), 'showposts' => 5)) ?>
    <div style="clear: both;"></div>
    <h3 style="color: #E26D05; font-family: Arial;">Recomendados en Acapulco</h3>
    <ul class="related_post sidebar">
    <?php while(have_posts()): the_post(); ?>
        <li><a href="<?php the_permalink() ?>"><?php the_feature_thumb($post->ID, 'thumbnail'); ?></a> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
    <?php endwhile; ?>
    </ul>
    <?php $post = $tmp; ?>
    <div style="clear: both;"></div>
    <?php endif; ?>
    
    <?php /* ?>
    <iframe src='http://api.eflyer.com.mx/index.php/widget/smsbox/2ab56412b1163ee131e1246da0955bd1' frameborder='0'  scrolling='no' marginheight='0' marginwidth='0' width='223' height='258' style='width:225px; height:260px; background-color:transparent;' allowtransparency='yes'></iframe>
    */
    ?>
</div>