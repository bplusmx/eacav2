<?php get_header(); ?>
<?php if (have_posts()) : ?>

<h2 class="title">Resultado de la busqueda</h2>

<?php include 'loop.php' ?>

<?php else : ?>

<h2 class="title">No se encontraron notas.</h2>
<p>Prueba otra busqueda!</p>
<?php endif; ?>

<?php get_footer(); ?>