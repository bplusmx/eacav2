<ul class="itemdestacado">
<?php while (have_posts()) : the_post(); ?>
<li class="post">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace a <?php the_title_attribute(); ?>">
<?php the_feature_thumb($post->ID, '');  ?>
</a>

<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<?php edit_post_link('Editar') ?>
</li>

<?php endwhile; ?>
</ul>