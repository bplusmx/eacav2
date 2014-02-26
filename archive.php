<?php get_header(); ?>
<?php if (have_posts()) : ?>

<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
<h2 class="title"><strong><?php single_cat_title(); ?></strong></h2>
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<h2 class="title"><strong><?php single_tag_title(); ?></strong></h2>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h2 class="title">Archivo de <strong><?php the_time('F jS, Y'); ?></strong></h2>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h2 class="title">Archivo de <strong><?php the_time('F, Y'); ?></strong></h2>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2 class="title">Archivo de <strong><?php the_time('Y'); ?></strong></h2>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h2 class="title">Autor</h2>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2 class="title">Archivo historico</h2>
<?php } ?>

<?php if (is_category(10)): ?>
<div style="clear: both; background-color: #D9EDF7;border: 1px solid #BCE8F1;border-radius: 4px;color: #3A87AD;display: block;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;font-size: 13px;line-height: 18px;margin: 0 auto 18px;padding: 8px 35px 8px 14px;text-shadow: rgba(255, 255, 255, 0.496094) 0px 1px 0px;width: 90%;height: 47px;">
“A continuación te presentamos algunos de los hoteles en Acapulco, si no encuentras el hotel que buscas, te recomendamos <a href="http://www.trivago.com.mx/acapulco-51320/hotel" rel="bookmark" target="_blank" style="text-decoration: underline">trivago México</a> donde puedes buscar tu alojamiento en Acapulco y donde se comparan ofertas de diversas agencias, puntuaciones y comentarios de usuarios.
</div>
<?php endif ?>

<?php //include("nav.php"); ?>

<?php include 'loop.php'; ?>

<?php else : ?>

<h2 class="center">No se encontro nada</h2>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<?php endif; ?>
<?php get_footer(); ?>