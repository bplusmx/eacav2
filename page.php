<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post-page" id="post-<?php the_ID(); ?>">
    <h1><?php the_title(); ?></h1>
    <?php the_content('<p class="serif">Seguir leyendo &raquo;</p>'); ?>
    <?php wp_link_pages(array('before' => '<p><strong>Paginas:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    </div>
    <?php endwhile; endif; ?>
    <?php edit_post_link('Editar nota.', '<p>', '</p>'); ?>
</div>

<?php get_footer(); ?>