<?php
/*
Template Name: Plantilla de la CURP
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post-page" id="post-<?php the_ID(); ?>">
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>

<iframe src="http://www.emexico.gob.mx/work/resources/ContenidoLocal/CurpPS_HTML_eMexico/CurpPS_HTML/jsp/CurpTDP.html" width="500" height="600" frameborder="0">
</iframe>

<?php wp_link_pages(array('before' => '<p><strong>Paginas:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>
<?php endwhile; endif; ?>
<?php edit_post_link('Editar nota.', '<p>', '</p>'); ?>

<?php get_footer(); ?>