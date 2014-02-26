<?php get_header(); ?>
<?php if (have_posts()) : ?>

<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<h2 class="title"><strong><?php single_cat_title(); ?></strong></h2>

<div style="border:1px solid #ccc; margin: 5px 2px">
<a href="/contacto/"><img src="/eventos/eventos_acapulco.jpg" style="margin-right: 5px; width: 147px; height: 123px;" align="left" border="0"></a>
<h2>Anuncia noticias de Acapulco</h2>
<p>Anuncia tus noticias importantes para nuestros turistas de Acapulco GRATIS, publica noticias y que todo el mundo se entere, envialo a <a href="mailto:info@e-acapulco.com"><strong>info@e-acapulco.com</strong></a>.
</p>
</div>

<?php include 'loop.php'; ?>

<?php else : ?>

<h2 class="center">No se encontro nada</h2>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<?php endif; ?>
<?php get_footer(); ?>