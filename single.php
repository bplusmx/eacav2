<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()): the_post() ?>
    <div class="bs-callout bs-callout-info">
        <h2><?php the_title() ?></h2>
        <?php if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb('<p class="breadcrumbs">','</p>') ?>        
    </div>
    
    <article class="col-sm-8 post" id="post-<?php the_ID(); ?>">
        <?php edit_post_link() ?>
        <?php the_content() ?>

        <div style="height:140px; float:left;">
        <a href="http://www.e-travelsolution.com/Partners/Reservations/Tours/IList.aspx?asoc=eaca&moneda=PE&idioma=ESP&destino=1"><img src="<?php bloginfo('stylesheet_directory') ?>/images/vans.jpg" alt="Tours de Acapulco" width="238" /></a>
        <p style="line-height:140%;margin: -110px 0 0 10px;font-size:10pt;color:#fff;font-weight:bold">Tours por<br /> Acapulco</p>
        </div>

        <div style="height:130px; float:left;">
        <a href="http://www.e-travelsolution.com/Partners/Reservations/Tours/IList.aspx?asoc=eaca&moneda=PE&idioma=ESP&destino=1"><img src="<?php bloginfo('stylesheet_directory') ?>/images/yates.jpg" alt="Yates de Acapulco" width="238" /></a>    
        <p style="line-height:140%;margin: -90px 0 0 130px;font-size:10pt;color:#fff;font-weight:bold">Renta Yates<br />en Acapulco</p>
        </div>

        <?php comments_template() ?>
    </article>
    <?php endif ?>
    
    <div class="col-sm-4">
        <?php if ($post->post_type == 'eaca_hoteles') : ?>	
        <?php include 'partials/form-dispo.php' ?>
        <?php endif ?>    

        <div><?php wp_related_posts() ?></div>
        
        <?php get_sidebar() ?>
    </div>
</div>

<?php get_footer() ?>