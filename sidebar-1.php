<?php 
/*
?>
<!--Start Categories -->
<div class="categ-all"><div class="categ">
 <h3>Categorias</h3>
 <ul>
  <?php wp_list_categories('show_count=1&title_li='); ?>
 </ul>
</div></div>
<!--End Categories -->

<!--Start Categories -->
<div class="categ-all"><div class="categ">
<h3>Archivo</h3>
 <ul>
  <?php wp_get_archives('type=monthly'); ?>
 </ul>
</div></div>
<!--End Categories -->
<?php
*/
?>

<!--Start Dynamic Sidebar -->
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>

<?php endif; ?>
<!--End Dynamic Sidebar -->
