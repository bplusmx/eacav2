<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

<div id="content" role="main" class="span-24">
    <div class="span-19 sidebar-shadow">
        <div class="inner-content">
        
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
        
    <?php query_posts('page_id=25') ?>    
        
	<?php if (have_posts()) : the_post(); ?>
 	  <div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
		<?php edit_post_link('Editar.', '<p>', '</p>'); ?>
			<div class="entry">
				<?php the_content('<p class="serif">Leer más &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Páginas:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		</div>
	<?php 
	endif;
?>
       </div>
	</div>
	

<?php get_sidebar(); ?>
<?php get_footer(); ?>