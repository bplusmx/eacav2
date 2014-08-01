<?php get_header(); ?>

<?php $i = 0; if (have_posts()) : ?>
<div class="container">
    <div class="col-sm-9">
        <?php while (have_posts()) :  the_post(); $i++; ?>
    <article class="post col-sm-4" id="post<?php echo $post->ID ?>">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace a <?php the_title_attribute(); ?>">
            <?php the_feature_thumb($post->ID, '');  ?>
        </a>
        <h3>            
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace a <?php the_title_attribute(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
        <?php the_excerpt() ?>
    </article>
<?php if ($i >= 4) break; endwhile; ?>
    </div>
    <div class="col-sm-3">
        <?php //,include 'sidebar-2.php' ?>
    </div>
</div>

<?php else: ?>
    <?php //include '404.php' ?>
<?php endif ?>
<?php get_footer(); ?>