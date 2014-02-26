<?php get_header(); ?>
<?php if (have_posts()) : ?>

<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<h2 class="title"><strong><?php single_cat_title(); ?></strong></h2>

<div style="border: 1px solid #ccc; margin: 5px 2px">
<a href="/contacto/"><img src="/eventos/eventos_acapulco.jpg" style="margin-right: 5px; width: 147px; height: 123px;" align="left" border="0"></a>
<h2>Anuncia tus eventos de Acapulco</h2>
<p>Anuncia tus eventos, fiestas, cumpleaños, baby shower o reuniones, publica esa fecha especial y que todo el mundo se entere. Envialos al correo electronico <a href="mailto:info@e-acapulco.com"><strong>info@e-acapulco.com</strong></a> (Aplican restricciones).
</p><p><span style="font-family: Arial,Verdana; font-style: normal; font-variant: normal; font-weight: normal; font-size: 8pt; line-height: normal; font-size-adjust: none; font-stretch: normal; -x-system-font: none;"></p>
</div>

<?php include 'loop.php'; ?>

<?php else : ?>

<h2 class="center">No se encontro nada</h2>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<?php endif; ?>
<?php get_footer(); ?>