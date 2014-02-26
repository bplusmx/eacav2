<div class="itemdestacado">
<?php 
$nPosts = 0; 

while (have_posts()) : 
the_post(); 
$nPosts++; 
?>
    <div class="post" id="<?php echo $post->ID ?>" style="width: 48%; float: left; padding-right: 5px;">
    <span class="edit-link" style="position: absolute; float: right; margin-right: -10px; margin-top: -15px;" id="edit-<?php echo $post->ID ?>"><?php edit_post_link('<img style="border:0; width: 40px; height: 40px;" src="' . get_bloginfo('template_url') . '/icons/pencil_48.png" border="0" width="48" height="48" />') ?></span>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace a <?php the_title_attribute(); ?>"><?php the_feature_thumb($post->ID, '');  ?></a>    
    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
    
    <?php if (!is_home()): ?>
        <?php if (function_exists('the_tags')) { ?> <?php the_tags('<div class="p-tag">Tags: ', ', ', '</div>'); ?> <?php } ?>
    <?php endif; ?>
    </div>
    <?php if ($nPosts % 2 == 0): ?>
        <div style="clear:both;"></div>
    <?php endif; ?>
<?php endwhile; ?>
</div>

<div style="clear:both;"></div>

<?php if (!is_home()): ?>
    <?php include("nav.php"); ?>
<?php endif; ?>

<div style="clear:both;"></div>