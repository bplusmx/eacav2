<?php 
/*
Template Name: Boletines
*/
$myID = 0;
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); $myID = $post->ID ?>
<html>
<head>
<body>
<div style="BACKGROUND-COLOR: rgb(232,232,232); TEXT-ALIGN: left" bgcolor="#e8e8e8" link="#0099cc" alink="#0099cc" vlink="#0099cc">
<center>
<table cellspacing="0" cellpadding="0" width="700" border="0">
<tr>

<td style="PADDING-BOTTOM: 30px; PADDING-TOP: 10px; TEXT-ALIGN: left">
<div style="TEXT-ALIGN: center">
<span class="Apple-style-span" style="WORD-SPACING: 0px; FONT: 9px verdana; TEXT-TRANSFORM: none; COLOR: rgb(187,187,187); TEXT-INDENT: 0px; WHITE-SPACE: normal; LETTER-SPACING: normal; BORDER-COLLAPSE: separate; orphans: 2; widows: 2">
Recibes este correo porque %%emailaddress%% esta registrado para recibir información de e-Acapulco.com</span>
<br/><span class="Apple-style-span" style="WORD-SPACING: 0px; FONT: 9px verdana; TEXT-TRANSFORM: none; COLOR: rgb(187,187,187); TEXT-INDENT: 0px; WHITE-SPACE: normal; LETTER-SPACING: normal; BORDER-COLLAPSE: separate; orphans: 2; widows: 2">
Si no puedes ver este correo correctamente, pruebe la<span class="Apple-converted-space">&nbsp;</span><a href="%%webversion%%">versión completa en la web</a>.</span>
</div>
<br />
<center>


<table cellspacing="0" cellpadding="0" width="650" border="0">
<tr>
<td style="PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 20px; PADDING-TOP: 10px; BACKGROUND-COLOR: rgb(255,255,255); TEXT-ALIGN: left" colspan="2">
 <a href="http://e-acapulco.com/?src=eacamailing&utm_content=%%emailaddress%%" target="_blank"><img title="" height="87" alt="Ir a e-Acapulco.com" hspace="0" src="http://e-acapulco.com/wp-content/themes/eaca2009/images/logo.png" width="240" align="left" border="0"/></a> 
<h1 style="MARGIN-TOP: 25px; FONT-WEIGHT: bold; FONT-SIZE: 28px; MARGIN-BOTTOM: 5px; COLOR: rgb(51,51,51); FONT-FAMILY: Helvetica,sans-serif; TEXT-ALIGN: right">
<span style="FONT-WEIGHT: normal">Boletín de <span style="FONT-WEIGHT: bold"><?php echo get_post_meta($post->ID, 'Newsletter Month', true) ?></span></span> <?php echo get_post_meta($post->ID, 'Newsletter Year', true) ?><br/></h1>
</td></tr>
<tr>
<td style="PADDING-RIGHT: 15px; PADDING-LEFT: 15px; FONT-SIZE: 14px; PADDING-BOTTOM: 15px; COLOR: rgb(0,0,0); PADDING-TOP: 15px; FONT-FAMILY: Helvetica,sans-serif; BACKGROUND-COLOR: rgb(255,255,255); TEXT-ALIGN: left" valign="top" width="330">
<p>Saludos %%First Name%%</p>    
    <?php /*
    <table cellpadding="2" cellspacing="2" border="0">
    <tr>
    <td>
    <a href="http://www.e-travelsolution.com/Partners/Reservations/Hotels/Info.aspx?id=586&anio_desde=2010&mes_desde=8&dia_desde=12&anio_hasta=2010&mes_hasta=8&dia_hasta=19&asoc=eaca&moneda=PE&idioma=ESP&destino=1">
    <img src="http://www.e-travelsolution.com/_lib/vimages/Acapulco/Hotels/Las_Brisas_Acapulco/fachada_m.jpg" alt="Las Brisas" style="border:0" /></a>
    </td>
    <td style="font-size: 0.8em;">
    <span style="COLOR: rgb(204,0,0); font-size: 1.3em"><b>Hotel Recomendado:</b></span><br><br>
    <a style="font-size: 1.1em" href="http://www.e-travelsolution.com/Partners/Reservations/Hotels/Info.aspx?id=586&anio_desde=2010&mes_desde=8&dia_desde=12&anio_hasta=2010&mes_hasta=8&dia_hasta=19&asoc=eaca&moneda=PE&idioma=ESP&destino=1">Las Brisas Acapulco</a><br />
    <strong>Destino:</strong> Zona Diamante<br>
    <strong>Planes: </strong> Habitación con Alimentos
    </td>
    </tr>
    </table>

    <table cellspacing="0" cellpadding="0" bgcolor="#ffff66" border="0" width="100%">
    <tbody>
    <tr>
    <td style="PADDING-RIGHT: 0px; PADDING-LEFT: 15px; FONT-SIZE: 12px; PADDING-BOTTOM: 15px; PADDING-TOP: 15px; TEXT-ALIGN: left">
    <font size="3"><span style="COLOR: rgb(204,0,0)"><b>Oferta especial:</b></span></font>
    <br/><?php echo get_post_meta($post->ID, 'Newsletter Oferta', true) ?> <sup>(1)</sup><br/></td>
    </tr>
    </tbody>
    </table>
    */ ?>
    
    <p style="text-align:left; line-height: 30px">
    
        <img src="<?php bloginfo('template_directory') ?>/images/facebook.jpg" width="25" height="25" alt="Hazte fan" style="border:0" /> <a style="font-size: 18px" href="http://www.facebook.com/e.acapulcocom">Hazte Fan</a>
        &nbsp; &nbsp;  
        <img src="<?php bloginfo('template_directory') ?>/images/twitter.png" width="25" height="25"  alt="Siguenos" style="border:0" /> <a style="font-size: 18px" href="http://www.twitter.com/deacapulco">Siguenos en Twitter</a>
    
    </p>
    
</td>

<?php /*
<td style="BORDER-TOP: rgb(204,204,204) 1px solid; FONT-SIZE: 12px; BORDER-LEFT: rgb(204,204,204) 1px solid; COLOR: rgb(0,0,0); BORDER-BOTTOM: rgb(204,204,204) 1px solid; FONT-FAMILY: Helvetica,sans-serif; BACKGROUND-COLOR: rgb(255,255,204); TEXT-ALIGN: left" width="321">
*/ ?>

<td style="background-color: #ffffff; FONT-FAMILY: Helvetica,sans-serif; TEXT-ALIGN: left" width="321">

    <?php /*
    <table cellpadding="8" cellspacing="8" border="0">
    <tr>
    <td><img src="<?php bloginfo('template_directory') ?>/images/facebook.jpg" width="30" height="30" alt="Hazte fan" style="border:0" /></td>
    <td><a style="font-size: 0.8em" href="http://www.facebook.com/e.acapulcocom">Hazte Fan en Facebook</a></td>
    </tr>
    <tr>
    <td><img src="<?php bloginfo('template_directory') ?>/images/twitter.png" width="30" height="30"  alt="Siguenos" style="border:0" /></td>
    <td><a style="font-size: 0.8em" href="http://www.twitter.com/deacapulco">Siguenos en Twitter</a></td>
    </tr>
    </table>
    */ ?>
    
    <p style="text-align: center; width: 100%; background-color: #fff"><a href="%%sendfriend_3%%" target="_blank"><img src="<?php bloginfo('template_directory') ?>/images/recomienda.jpg" alt="Recomienda este email" style="border:0" /></a></p>
</td>
</tr>

<tr>
<td style="PADDING-RIGHT: 15px; PADDING-LEFT: 15px; FONT-SIZE: x-small; PADDING-BOTTOM: 15px; COLOR: rgb(0,0,0); PADDING-TOP: 20px; FONT-FAMILY: Helvetica,sans-serif; BACKGROUND-COLOR: rgb(255,255,255); TEXT-ALIGN: left" colspan="2">

<p style="margin:0 auto; text-align: center;">
    <?php echo get_post_meta($post->ID, 'Newsletter Banners', true) ?>
</p>

<p style="FONT-WEIGHT: bold; FONT-SIZE: 16px; COLOR: rgb(204,51,51)">
<font size="5">Eventos y Noticias para el mes de <?php echo get_post_meta($post->ID, 'Newsletter Month', true) ?> del <?php echo get_post_meta($post->ID, 'Newsletter Year', true) ?><br/></font>
</p>&nbsp; &nbsp; &nbsp; 

<style>
.imgthumb img {border: 1px solid #888; width: 130px; height: 100px;}
.info p {font-size: 11px; font-family: Arial}
</style>
<table cellspacing="0" cellpadding="10" width="100%" border="0">
<?php 
$i = 0;
$items = 0;
$max = get_post_meta($post->ID, 'Newsletter Items', true);
$exclude = explode(',', get_post_meta($post->ID, 'Newsletter Exclude', true));

$eacadb = new WP_Query();
$sql = 'cat=11,8&showposts=' . $max;
$eacadb->query($sql);

while($eacadb->have_posts()) : 
    $eacadb->the_post(); 
    if ($i > $max) break;
        
    if (in_array($post->ID, $exclude)) {
        continue;
    }
    
    $is_par = (($i % 4) == 0 ? true : false);
    
    ?>
    <?php if($items == 0) : ?>  
        <tr valign="top" <?php echo ($is_par ? 'bgcolor="#f4f4f4"' : '') ?>><td width="50%">
    <?php else: ?>
        <td width="50%" style="border-left: 1px solid #ddd">
    <?php endif; ?>
    <table border="0" cellpadding="2" cellspacing="2">
    <tr><td valign="top" class="imgthumb" style="padding: 0 10px 10px 0">
        <a href="<?php the_permalink() ?>?utm_content=%%emailaddress%%" rel="bookmark"><?php the_feature_thumb($post->ID, ''); ?></a>
    </td>
    <td valign="top" class="info">
        <strong style="font-size: 12px; font-family: verdana"><a href="<?php the_permalink() ?>?utm_content=%%emailaddress%%" rel="bookmark"><?php the_title() ?></a></strong>
        <p><?php echo $post->post_excerpt ?></p>
    </td>
    </tr>
    </table>        
    
    <?php if($items == 0) : $items++; ?>
        </td>
    <?php else: ?>
        </td></tr>        
    <?php $items = 0; endif; ?>
    
    
<?php $i++; endwhile; unset($eacadb); ?>

<?php 

/*
<tr <?php echo ($is_par ? 'bgcolor="#f4f4f4"' : '') ?>>
    
    <td valign="top">
    <?php the_feature_thumb($post->ID, ''); ?>
    </td>
    
    <td style="FONT-SIZE: 11px; PADDING-BOTTOM: 20px; COLOR: rgb(0,0,0); PADDING-TOP: 10px; FONT-FAMILY: Verdana,sans-serif; TEXT-ALIGN: left" valign="top">
    <h3><a href="<?php the_permalink() ?>?utm_content=%%emailaddress%%" rel="bookmark"><?php the_title() ?></a></h3>
    <p><?php the_excerpt() ?><br/></p>
    </td>
    
    </tr>

<tr>
    <td style="PADDING-RIGHT: 15px; PADDING-LEFT: 15px; FONT-SIZE: 14px; PADDING-BOTTOM: 25px; COLOR: rgb(0,0,0); PADDING-TOP: 15px; FONT-FAMILY: Helvetica,sans-serif; BACKGROUND-COLOR: rgb(255,255,255); TEXT-ALIGN: left" colspan="2">
    <p style="FONT-WEIGHT: bold; FONT-SIZE: 16px; COLOR: rgb(204,51,51)">
	<font size="5">Cupones promocionales</font>
	</p>
    </td>
</tr>
*/    
?>


<?php $leaderboard = get_post_meta($myID, 'Newsletter Leaderboard', true); ?>
<?php if(!empty($leaderboard)): ?>
<tr>
    <td align="center" style="border: dotted 2px #ccc; text-align: center; PADDING-RIGHT: 15px; PADDING-LEFT: 15px; FONT-SIZE: 14px; PADDING-BOTTOM: 25px; COLOR: rgb(0,0,0); PADDING-TOP: 15px; FONT-FAMILY: Helvetica,sans-serif; BACKGROUND-COLOR: rgb(255,255,255);" colspan="2">
    <img src="<?php echo $leaderboard; ?>" width="600" alt="" border="0" />
    </td>
</tr>
<?php endif; ?>
<?php $banner1 = get_post_meta($myID, 'Newsletter Banner1', true); ?>
<?php $banner2 = get_post_meta($myID, 'Newsletter Banner2', true); ?>
<?php if(!empty($banner1)): ?>
<tr>
    <td colspan="2">	
	<table width="100%" cellspacing="0" cellpadding="10" border="5" bordercolor="#ffffff">
	<tr>
	<td style="border: dotted 2px #ccc; PADDING-RIGHT: 15px; PADDING-LEFT: 15px; FONT-SIZE: 14px; PADDING-BOTTOM: 25px; COLOR: rgb(0,0,0); PADDING-TOP: 15px; FONT-FAMILY: Helvetica,sans-serif; BACKGROUND-COLOR: rgb(255,255,255); TEXT-ALIGN: left" width="50%">
	<img src="<?php echo $banner1 ; ?>" width="300" height="250" alt="" border="0" />
	</td>
	<td style="border: dotted 2px #ccc; PADDING-RIGHT: 15px; PADDING-LEFT: 15px; FONT-SIZE: 14px; PADDING-BOTTOM: 25px; COLOR: rgb(0,0,0); PADDING-TOP: 15px; FONT-FAMILY: Helvetica,sans-serif; BACKGROUND-COLOR: rgb(255,255,255); TEXT-ALIGN: left" width="50%">
    <img src="<?php echo $banner2; ?>" width="300" height="250" alt="" border="0" />
	</td>
	</tr>
	</table>
	</td>
</tr>
<?php endif; ?>
<?php $banner3 = get_post_meta($myID, 'Newsletter Banner3', true); ?>
<?php $banner4 = get_post_meta($myID, 'Newsletter Banner4', true); ?>
<?php if(!empty($banner3)): ?>
<tr>
    <td colspan="2">    
    <table width="100%" cellspacing="0" cellpadding="10" border="5" bordercolor="#ffffff">
    <tr>
    <td style="border: dotted 2px #ccc; PADDING-RIGHT: 15px; PADDING-LEFT: 15px; FONT-SIZE: 14px; PADDING-BOTTOM: 25px; COLOR: rgb(0,0,0); PADDING-TOP: 15px; FONT-FAMILY: Helvetica,sans-serif; BACKGROUND-COLOR: rgb(255,255,255); TEXT-ALIGN: left" width="50%">
    <img src="<?php echo $banner3 ; ?>" width="300" height="250" alt="" border="0" />
    </td>
    <td style="border: dotted 2px #ccc; PADDING-RIGHT: 15px; PADDING-LEFT: 15px; FONT-SIZE: 14px; PADDING-BOTTOM: 25px; COLOR: rgb(0,0,0); PADDING-TOP: 15px; FONT-FAMILY: Helvetica,sans-serif; BACKGROUND-COLOR: rgb(255,255,255); TEXT-ALIGN: left" width="50%">
    <img src="<?php echo $banner4; ?>" width="300" height="250" alt="" border="0" />
    </td>
    </tr>
    </table>
    </td>
</tr>
<?php endif; ?>
<?php $leaderboardBottom = get_post_meta($myID, 'Newsletter LeaderboardBottom', true); ?>
<?php if(!empty($leaderboardBottom)): ?>
<tr>
    <td align="center" style="border: dotted 2px #ccc; text-align: center; PADDING-RIGHT: 15px; PADDING-LEFT: 15px; FONT-SIZE: 14px; PADDING-BOTTOM: 25px; COLOR: rgb(0,0,0); PADDING-TOP: 15px; FONT-FAMILY: Helvetica,sans-serif; BACKGROUND-COLOR: rgb(255,255,255);" colspan="2">
    <img src="<?php echo $leaderboardBottom; ?>" width="600" alt="" border="0" />
    </td>
</tr>
<?php endif; ?>

<tr>
    <td style="PADDING-RIGHT: 15px; PADDING-LEFT: 15px; FONT-SIZE: 14px; PADDING-BOTTOM: 25px; COLOR: rgb(0,0,0); PADDING-TOP: 15px; FONT-FAMILY: Helvetica,sans-serif; BACKGROUND-COLOR: rgb(255,255,255); TEXT-ALIGN: left" colspan="2">
    <p>Gracias por seleccionarnos para mantenerte informado. </p>
    <p style="FONT-WEIGHT: bold">El equipo de e-Acapulco.com</p>

    </td>
</tr>

<tr>
<td style="PADDING-RIGHT: 15px; BORDER-TOP: rgb(153,153,153) 1px dashed; PADDING-LEFT: 15px; FONT-SIZE: 14px; PADDING-BOTTOM: 30px; COLOR: rgb(0,0,0); PADDING-TOP: 15px; BORDER-BOTTOM: rgb(153,153,153) 1px dashed; FONT-FAMILY: Helvetica,sans-serif; BACKGROUND-COLOR: rgb(225,240,246); TEXT-ALIGN: left" colspan="2">
&nbsp; <span style="FONT-WEIGHT: bold; FONT-SIZE: 16px; COLOR: rgb(204,51,51)">Tiene dudas?</span> &nbsp; 
<p>Necesitas saber algo sobre Acapulco, mandanos un correo con tu pregunta, no importa cual sea el tema, con gusto te atenderemos. <br/></p>
</td>
</tr>
</table>


<table style="BACKGROUND-COLOR: rgb(255,255,255)" cellspacing="0" cellpadding="0" width="650" border="0">
<tr>
<td style="PADDING-RIGHT: 15px; PADDING-LEFT: 15px; FONT-SIZE: 16px; PADDING-BOTTOM: 15px; PADDING-TOP: 15px; FONT-FAMILY: Helvetica,sans-serif; BACKGROUND-COLOR: rgb(255,255,102); TEXT-ALIGN: center">
<?php echo get_post_meta($myID, 'Newsletter Promo Titulo', true) ?>.<br/>
<?php echo get_post_meta($myID, 'Newsletter Promo Body', true) ?>
<p><font size="2"><?php echo get_post_meta($myID, 'Newsletter Promo Legales', true) ?>.</font><br/></p>
</td>
</tr>
</table>

<table cellspacing="0" cellpadding="0" width="650" border="0">
<tr>
<td style="FONT-SIZE: 10px; PADDING-BOTTOM: 20px; COLOR: rgb(0,0,0); PADDING-TOP: 10px; FONT-FAMILY: Verdana,sans-serif; TEXT-ALIGN: left">
Los nombres y logos son marcas registradas de e-Acapulco.com. <br/>Los textos y diseños tienen derechos de autor © 2004-<?php echo date('Y') ?> por e-Acapulco.com, Todos los derechos reservados. 
<br/>Si no desea seguir recibiendo más información de nosotros, puede <a href="%%unsubscribelink%%">darse de baja</a>
</td>
</tr>
</table>

</td>
</tr>
</table>
</center>
</div>
</body>
</html> 
<?php endwhile; endif; ?>