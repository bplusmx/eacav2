<?php get_header(); ?>
<h2>Pagina no encontrada</h2>
 <p>La pagina que usted intenta acceder no existe o fue movida a otra ubicación, 
 le pedimos una disculpa por este inconveniente</p>
<?php if (have_posts()) : ?>
<?php include 'loop.php' ?>
<?php else : ?>
<?php endif; ?>

<?php get_footer(); ?>
