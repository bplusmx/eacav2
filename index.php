<?php get_header(); ?>
<?php if (have_posts()) : ?>

<?php include 'loop.php' ?>

<?php else : ?>

<?php include("404.php"); ?>
<?php endif; ?>

<?php get_footer(); ?>
