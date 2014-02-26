<?php ?>

<?php get_header(); ?>

<h2>Archivos por mes:</h2>
	<ul>
	 <?php wp_get_archives('type=monthly'); ?>
	</ul>

<h2>Archivpos por tema:</h2>
	<ul>
	 <?php wp_list_categories(); ?>
	</ul>

<?php get_footer(); ?>
