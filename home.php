<?php
/* 
Template Name: HomePage
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
    
    
    
<div class="itemdestacado">
<?php 
$nPosts = 0;
$exclude_list = array(2361, 2364, 2369);

while (have_posts()) : 
the_post(); 
$nPosts++; 

if (is_home() && $nPosts > 10) {
    break;
}

if (in_array($post->ID, $exclude_list)) {
    continue;
}
?>
    <div class="post" id="<?php echo $post->ID ?>"  style="width: 48%; float: left; padding-right: 5px;">
    <span class="edit-link" style="position: absolute; float: right; margin-right: -10px; margin-top: -15px;" id="edit-<?php echo $post->ID ?>"><?php edit_post_link('<img style="border:0; width: 40px; height: 40px;" src="' . get_bloginfo('template_url') . '/icons/pencil_48.png" border="0" width="48" height="48" />') ?></span>
    <?php //if ($nPosts <= 2): ?>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace a <?php the_title_attribute(); ?>"><?php the_feature_thumb($post->ID, '');  ?></a>
    <?php //endif; ?>
    <h2><span class="category"><?php the_category('|') ?></span> <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace a <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
    
    <?php if (!is_home()): ?>
        <?php if (function_exists('the_tags')) { ?> <?php the_tags('<div class="p-tag">Tags: ', ', ', '</div>'); ?> <?php } ?>
    <?php endif; ?>
    </div>
    <?php if ($nPosts % 2 == 0): ?>
        <div style="clear:both;"></div>
    <?php endif; ?>
<?php endwhile; ?>
</div>

<div style="clear:both"><hr noshade="noshade" style="border-bottom: 1px solid #53B7EA; display: block"></div>

<div class="home-hoteles">
<h3>Hoteles de todo México a precios bajos</h3>

<table width="70%" align="center" cellspacing="0" cellpadding="0" border="0">
    <tbody>
        <tr valign="top">
            <td width="30%">
            <ul>
                <li><a rel="nofollow" title="Lista de Hoteles de Acapulco" 
                    href="http://www.e-travelsolution.com/Partners/Reservations/Hotels/List.aspx?asoc=eaca&amp;moneda=PE&amp;idioma=ESP&amp;destino=1">Acapulco</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Cancun"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=2&amp;Moneda=PE">Cancun</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Chiapas"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=3&amp;Moneda=PE">Chiapas</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Cozumel"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=4&amp;Moneda=PE">Cozumel</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Huatulco"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=5&amp;Moneda=PE">Huatulco</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Isla Mujeres"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=6&amp;Moneda=PE">Isla
                Mujeres</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Ixtapa &amp; Zihuatanejo"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=7&amp;Moneda=PE">Ixtapa
                y Zihuatanejo</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Los Cabos"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=8&amp;Moneda=PE">Los
                Cabos</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Mazatlan"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=9&amp;Moneda=PE">Mazatlan</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Merida &amp; Yucatan"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=10&amp;Moneda=PE">Merida
                &amp; Yucatan</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Mexico City"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=11&amp;Moneda=PE">Ciudad
                de México</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Puerto Vallarta"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=12&amp;Moneda=PE">Puerto
                Vallarta</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Riviera Maya"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=13&amp;Moneda=PE">Riviera
                Maya</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Holbox"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=14&amp;Moneda=PE">Isla
                Holbox</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Guadalajara"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=15&amp;Moneda=PE">Guadalajara</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Playa del Carmen"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=16&amp;Moneda=PE">Playa
                del Carmen</a></li>                
            </ul>
            </td>
            <td width="33%">
            <ul>
            <li><a rel="nofollow" title="Lista de Hoteles de Oaxaca"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=17&amp;Moneda=PE">Oaxaca</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Manzanillo"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=30&amp;Moneda=PE">Manzanillo</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Veracruz"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=31&amp;Moneda=PE">Veracruz</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Monterrey"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=32&amp;Moneda=PE">Monterrey</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de La Paz"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=35&amp;Moneda=PE">La
                Paz</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Costa Alegre"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=36&amp;Moneda=PE">Costa
                Alegre</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Puebla"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=39&amp;Moneda=PE">Puebla</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Queretaro"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=40&amp;Moneda=PE">Queretaro</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Taxco"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=41&amp;Moneda=PE">Taxco</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Villahermosa"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=42&amp;Moneda=PE">Villahermosa</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Tampico"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=43&amp;Moneda=PE">Tampico</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Toluca"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=44&amp;Moneda=PE">Toluca</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Ciudad del Carmen"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=45&amp;Moneda=PE">Ciudad
                del Carmen</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Campeche"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=46&amp;Moneda=PE">Campeche</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Guanajuato"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=47&amp;Moneda=PE">Guanajuato</a></li>                               
            </ul>
            </td>
            <td width="33%">
                <ul>
                <li><a rel="nofollow" title="Lista de Hoteles de Chihuahua"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=48&amp;Moneda=PE">Chihuahua</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Aguascalientes"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=49&amp;Moneda=PE">Aguascalientes</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Tijuana"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=50&amp;Moneda=PE">Tijuana</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Morelia &amp; Michoacan"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=51&amp;Moneda=PE">Morelia
                y Michoacan</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Puerto Escondido"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=52&amp;Moneda=PE">Puerto
                Escondido</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Ciudad Juarez"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=53&amp;Moneda=PE">Ciudad
                Juárez</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Leon"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=54&amp;Moneda=PE">Leon</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Copper Canyon"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=55&amp;Moneda=PE">Copper
                Canyon</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Tamaulipas"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=56&amp;Moneda=PE">Tamaulipas</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Cuernavaca"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=57&amp;Moneda=PE">Cuernavaca</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Coahuila"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=58&amp;Moneda=PE">Coahuila</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de San Luis Potosi"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=59&amp;Moneda=PE">San
                Luis Potosi</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Zacatecas"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=60&amp;Moneda=PE">Zacatecas</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Sinaloa"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=64&amp;Moneda=PE">Sinaloa</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Sonora"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=65&amp;Moneda=PE">Sonora</a></li>
                <li><a rel="nofollow" title="Lista de Hoteles de Chetumal"
                    href="http://www.e-travelsolution.com/Reservations/Partners.aspx?Type=Hotel&amp;Idioma=ESP&amp;asoc=eaca&amp;View=List&amp;destino=66&amp;Moneda=PE&amp;Moneda=PE&amp;Moneda=PE">Chetumal</a></li>
                </ul>                
            </td>
        </tr>
    </tbody>
</table>

</div>
    
    
<?php else : ?>
    <?php include("404.php"); ?>
<?php endif; ?>
<?php get_footer(); ?>