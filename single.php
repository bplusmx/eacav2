<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

<div class="post" id="post-<?php the_ID(); ?>" style="margin-bottom: 20px;">

<div class="p-head">
<p class="p-date"><?php the_time('d') ?> <?php the_time('M') ?>, <?php the_time('Y') ?></p>
<h2><?php the_title(); ?></h2>
<p class="p-who">Por: <?php the_author() ?> en: <?php the_category('|') ?> <?php edit_post_link(); ?></p>
<?php //the_ratings() ?>
</div>

<div class="p-con">
<div class="post-img">    
    <div class="toolbox-content">
        <?php tellAfriend() ?>
    	<?php tell_a_friend() ?>
    	<?php //print_link() ?>
    	<a href="?article2pdf=1"><img src="<?php bloginfo('template_url') ?>/icons/pdf.gif" alt="Guardar en PDF" /></a>    	
    	<a href="<?php bloginfo('rss2_url') ?>"><img src="<?php bloginfo('template_url') ?>/icons/rss.gif" alt="Agregar al lector RSS" /></a>
	</div>
	
    <?php if (in_category(10)) : ?>

	<script type="Text/JavaScript" src="http://e-travelsolution.com/Partners/ResBox/_lib/JS/Calendar_ESP.js"></script>
	<script type="Text/JavaScript" src="http://e-travelsolution.com/Partners/ResBox/_lib/JS/fechas_ESP.js"></script>
	<script type="text/javaScript" src="http://e-travelsolution.com/Partners/ResBox/_lib/JS/Default.js"></script>

	<link rel="stylesheet" type="text/css" media="all" href="/Partners/ResBox/_lib/CSS/Calendar/Na.css" title="win2k-cold-1" />

 <table><tr><td align="center"><img src="/es/common/reserva3.jpg" width="170" height="82"></td></tr>
<tr><td>

	<div id="extra" class="extra" style="margin: 0 auto 0 15px">
		<div class="RBCt2">

		<div id="RBCt" class="RBCt">
			<div id="sbSelHT" class="sbMn spSp">
				<div onClick="MnOp('formahotel'); sbMnOp('sbSelHT',1,' _h');" class="opHT"><input name="product" type="radio" checked="checked" /> Solo Hotel</div>
				<div onClick="MnOp('formapackage'); sbMnOp('sbSelHT',2,' _h');" class="opHF"><input name="product" type="radio" /> Hotel + Avión</div></div>
			<form id="formapackage" name="formapackage" method="post" action="http://www.e-TravelSolution.com.mx/Partners/Reservations/Hotels/IPackageResult.aspx?asoc=eaca&destino=1"
				onsubmit="return validaPackAvion('formapackage',9,document.formapackage.anio_desde.value,document.formapackage.mes_desde.value,document.formapackage.dia_desde.value,document.formapackage.anio_hasta.value,document.formapackage.mes_hasta.value,document.formapackage.dia_hasta.value);">
				<input type="hidden" value="PE" name="moneda" />
				<input type="hidden" value="ESP" name="Idioma" id="Idioma" />

				<input Type="hidden" name="conAjax" value="OFF" />
				<input Type="hidden" name="termina" value="false" />
				<input type="hidden" name="PKfechaFrom" id="PKfechaFrom" onChange="FechaGet(document.formapackage.PKfechaFrom,document.formapackage.anio_desde, document.formapackage.mes_desde, document.formapackage.dia_desde)" />
				<input type="hidden" name="PKfechaTo" id="PKfechaTo" onChange="FechaGet(document.formapackage.PKfechaTo,document.formapackage.anio_hasta, document.formapackage.mes_hasta, document.formapackage.dia_hasta)" />
				<div class="spWidth">
					<span class="spMs">Origen:</span>
					<input name="Leavingfrom" id="Leavingfrom" class="inLv" value="Ciudad"
						autocomplete="off" maxlength="120" size="41" onFocus="DfltIn(this,'Ciudad');" />
				</div>

				<div class="spWidth">
					<span class="spMs">Destino:</span>
					<input type="hidden" value="ACA" name="bbAeroDest" id="bbAeroDest" />
					<input type="hidden" name="ID" id="ID" value="<?php get_post_meta(get_the_ID(), 'etravel-ID', true) ?>" />

					</select>
				</div>

				<div class="spWidth spB left spSp">
					<div>Fecha de Llegada:</div>
					<select id="anio_desdeF" name="anio_desde" class="fad" onChange="javascript:fillMonthsSelect(document.formapackage.anio_desde.value, document.formapackage.mes_desde, document.formapackage.dia_desde, false);ManualCambia(document.formapackage.PKfechaFrom,document.formapackage.anio_desde, document.formapackage.mes_desde, document.formapackage.dia_desde);">
						<option value="2010">2010</option>
						<option value="2011">2011</option>
					</select>
					<select id="mes_desdeF" name="mes_desde" class="fmd" onChange="javascript:fillDaysSelect(document.formapackage.anio_desde.value, document.formapackage.mes_desde.value, document.formapackage.dia_desde, false);ManualCambia(document.formapackage.PKfechaFrom,document.formapackage.anio_desde, document.formapackage.mes_desde, document.formapackage.dia_desde);"></select>

					<select id="dia_desdeF" name="dia_desde" class="fdd" onChange="javascript:ManualCambia(document.formapackage.PKfechaFrom,document.formapackage.anio_desde, document.formapackage.mes_desde, document.formapackage.dia_desde);"></select>
					<img id="PKCalFrom" src="/Partners/ResBox/_lib/Img/cal.gif" class="cal" alt="Calendario..." />
				</div>
				<div class="spWidth spB left">
					<div>Fecha de Regreso:</div>
					<select id="anio_hastaF" name="anio_hasta" class="fah"onchange="javascript:fillMonthsSelect(document.formapackage.anio_hasta.value, document.formapackage.mes_hasta, document.formapackage.dia_hasta, false);ManualCambia(document.formapackage.PKfechaTo,document.formapackage.anio_hasta, document.formapackage.mes_hasta, document.formapackage.dia_hasta);">
						<option value="2010">2010</option>
						<option value="2011">2011</option>

					</select>
					<select id="mes_hastaF" name="mes_hasta" class="fmh" onChange="javascript:fillDaysSelect(document.formapackage.anio_hasta.value, document.formapackage.mes_hasta.value, document.formapackage.dia_hasta, false);ManualCambia(document.formapackage.PKfechaTo,document.formapackage.anio_hasta, document.formapackage.mes_hasta, document.formapackage.dia_hasta);"></select>
					<select id="dia_hastaF" name="dia_hasta" class="fdh" onChange="javascript:ManualCambia(document.formapackage.PKfechaTo,document.formapackage.anio_hasta, document.formapackage.mes_hasta, document.formapackage.dia_hasta);"></select>
					<img id="PKCalTo" src="/Partners/ResBox/_lib/Img/cal.gif" class="cal" alt="Calendario..." />
				</div>
				<div class="spWidth spRms">
					<span>Cuartos:</span>
					<select name="num_cuartos" size="1" class="comboP" onChange="javascript:FRB_ShowRoom('formapackage')">

						<option value="1">1</option>
						<option value="2">2</option>
					</select>
				</div>
				<!--	INICIA Cuarto #: [1] -->
				<div class="spWidth spRmsX">
					<span class="spOt">Adultos</span><span class="spTtlRgt">Niños</span><br />

					<input type="hidden" value="no" name="Adult_Only" />
					<span class="CuartosText">Cuarto 1:</span>
					<select id="num_adultos1" name="num_adultos" size="1" class="comboP spLft">
						<option value="1">1</option>
					</select>
					<select id="num_ninos" name="num_ninos" size="1" onChange="javascript:FRB_ShowNinos('formapackage',1)" class="comboP">
						<option value="0">0</option>

						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>
				<!--	FIN Cuarto #: [1] -->
				<div style="display: none;" class="spLftRm2" id="DivHab_2">

					<span class="CuartosText">Cuarto 2:</span>
					<select id="num_adultos_2" name="num_adultos_2" size="1" class="comboP spLft">
						<option value="0">0</option>
					</select>
					<select id="num_ninos_2" name="num_ninos_2" size="1" onChange="javascript:FRB_ShowNinos('formapackage',2)" class="comboP">
						<option value="0">0</option>
					</select>

				</div>
				<!--	FIN Cuarto #: [2] -->
				<div style="display: none;" id="DivTablaNinos" class="tbNn"><span class="tbTtl">Edad de los niños</span>
					<div style="display: none;" id="DivTablaNinos_1" class="dRooms sprRms">
						<span class="RmNm">Cuarto 1:</span>
						<select id="EdadNino1" name="EdadNino1" size="1" class="CmbEdNn">
							<option value="-1">-?-</option>

							<option value="0"><1</option>
						</select>
						<select id="EdadNino2" name="EdadNino2" size="1" class="CmbEdNn">
							<option value="-1">-?-</option>
							<option value="0"><1</option>
						</select>
						<select id="EdadNino3" name="EdadNino3" size="1" class="CmbEdNn">

							<option value="-1">-?-</option>
							<option value="0"><1</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>

							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>

							<option value="11">11</option>
							<option value="12">12</option>
						</select>
						<input type="hidden" value="-1" name="EdadNino4" />
						<input type="hidden" value="-1" name="EdadNino5" />
						<input type="hidden" value="-1" name="EdadNino6" />
						<input type="hidden" value="-1" name="EdadNino7" />
						<input type="hidden" value="-1" name="EdadNino8" />

					</div>
					<div style="display: none;" id="DivTablaNinos_2" class="dRooms">
						<span class="RmNm">Cuarto 2:</span>
						<select id="EdadNino1_2" name="EdadNino1_2" size="1" class="CmbEdNn">
							<option value="-1">-?-</option>
							<option value="0"><1</option>
						</select>

						<select id="EdadNino2_2" name="EdadNino2_2" size="1" class="CmbEdNn">
							<option value="-1">-?-</option>
							<option value="0"><1</option>
						</select>
						<select id="EdadNino3_2" name="EdadNino3_2" size="1" class="CmbEdNn">
							<option value="-1">-?-</option>
							<option value="0"><1</option>

							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>

							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>

						</select>
						<input type="hidden" value="-1" name="EdadNino4_2" />
						<input type="hidden" value="-1" name="EdadNino5_2" />
						<input type="hidden" value="-1" name="EdadNino6_2" />
						<input type="hidden" value="-1" name="EdadNino7_2" />
						<input type="hidden" value="-1" name="EdadNino8_2" />
					</div>
				</div>
				<div class="iFSearch"  style="margin-top:2px;">

					<a href="http://www.e-travelsolution.com.mx/Partners/Reservations/Packages/ISearch.aspx?asoc=eaca&destino=1">Más Opciones</a>
				</div>
				<div class="iFSearch"  style="margin-top:2px;">
					<input type="image" src="/Partners/ResBox/_lib/Img/btnBuscar.gif" name="Search" class="botonSearch" alt="Buscar" onMouseOver="this.src='/Partners/ResBox/_lib/Img/btnBuscar_Ov.gif';" onMouseOut="this.src='/Partners/ResBox/_lib/Img/btnBuscar.gif';" />
				</div>
			</form>
			
		  <form id="formahotel" name="formahotel" method="post" action="http://www.e-TravelSolution.com.mx/Partners/Reservations/Hotels/IRates.aspx?asoc=eaca&destino=1"
				onsubmit="return validaFechas(document.formahotel.anio_desde.value, document.formahotel.mes_desde.value, document.formahotel.dia_desde.value, document.formahotel.anio_hasta.value, document.formahotel.mes_hasta.value, document.formahotel.dia_hasta.value);">
				<input type="hidden" name="HTfechaFrom" onChange="FechaGet(document.formahotel.HTfechaFrom,document.formahotel.anio_desde, document.formahotel.mes_desde, document.formahotel.dia_desde)" id="HTfechaFrom" />

				<input type="hidden" name="HTfechaTo" onChange="FechaGet(document.formahotel.HTfechaTo,document.formahotel.anio_hasta, document.formahotel.mes_hasta, document.formahotel.dia_hasta)" id="HTfechaTo" />
				<input type="hidden" name="moneda" value="PE" />
				<input type="hidden" name="Idioma" value="ESP" />
				<!--Id del Hotel-->
				<div class="spWidth">
					<div>
					
					<input type="hidden" name="ID" id="ID" value="<?php echo get_post_meta(get_the_ID(), 'etravel-ID', true) ?>">
						 
<p><span style="font-weight:bold"><?php the_title() ?></span></p>
</div>
					<input name="Destino" type="hidden" value="1" />
				</div>
				<div class="spWidth spB">
					<div>Fecha de Llegada:</div>
					<select name="anio_desde" onChange="javascript:fillMonthsSelect(document.formahotel.anio_desde.value, document.formahotel.mes_desde, document.formahotel.dia_desde, false);ManualCambia(document.formahotel.HTfechaFrom,document.formahotel.anio_desde, document.formahotel.mes_desde, document.formahotel.dia_desde);" id="anio_desdeHT" class="fad">
						<option value="2010">2010</option>
						<option value="2011">2011</option>

					</select>
					<select name="mes_desde" onChange="javascript:fillDaysSelect(document.formahotel.anio_desde.value, document.formahotel.mes_desde.value, document.formahotel.dia_desde, false);ManualCambia(document.formahotel.HTfechaFrom,document.formahotel.anio_desde, document.formahotel.mes_desde, document.formahotel.dia_desde);" id="mes_desdeHT" class="fmd"></select>
					<select name="dia_desde" onChange="javascript:ManualCambia(document.formahotel.HTfechaFrom,document.formahotel.anio_desde, document.formahotel.mes_desde, document.formahotel.dia_desde);" id="dia_desdeHT" class="fdd"></select>
					<img id="HTCalFrom" src="/Partners/ResBox/_lib/Img/cal.gif" class="cal" alt="Calendario..." />
				</div>
				<div class="spWidth spB">
					<div>Fecha de Regreso:</div>
					<select name="anio_hasta" onChange="javascript:fillMonthsSelect(document.formahotel.anio_hasta.value, document.formahotel.mes_hasta, document.formahotel.dia_hasta, false);ManualCambia(document.formahotel.HTfechaTo,document.formahotel.anio_hasta, document.formahotel.mes_hasta, document.formahotel.dia_hasta);" id="anio_hastaHT" class="fah">

						<option value="2010">2010</option>
						<option value="2011">2011</option>
					</select>
					<select name="mes_hasta" onChange="javascript:fillDaysSelect(document.formahotel.anio_hasta.value, document.formahotel.mes_hasta.value, document.formahotel.dia_hasta, false);ManualCambia(document.formahotel.HTfechaTo,document.formahotel.anio_hasta, document.formahotel.mes_hasta, document.formahotel.dia_hasta);" id="mes_hastaHT" class="fmh"></select>
					<select name="dia_hasta" onChange="javascript:ManualCambia(document.formahotel.HTfechaTo,document.formahotel.anio_hasta, document.formahotel.mes_hasta, document.formahotel.dia_hasta);" id="dia_hastaHT" class="fdh"></select>
					<img id="HTCalTo" src="/Partners/ResBox/_lib/Img/cal.gif" class="cal" alt="Calendario..." />
				</div>
				<div class="iFSearch">

					<a href="http://www.e-travelsolution.com.mx/Partners/Reservations/Hotels/List.aspx?asoc=eaca&destino=1">Más Opciones</a>
				</div>
				<div class="iFSearch">
					<input type="image" src="/Partners/ResBox/_lib/Img/btnBuscar.gif" name="Search" class="botonSearch" alt="Buscar" onMouseOver="this.src='/Partners/ResBox/_lib/Img/btnBuscar_Ov.gif';" onMouseOut="this.src='/Partners/ResBox/_lib/Img/btnBuscar.gif';"  />
				</div>
			</form>
		</div></div>
		<script type="text/javascript" language="javascript">PgEndHO();</script>

	</div>
 

<!-- End include -->
</td></tr></table>
    <?php endif; ?>    
    
    <div style="width:350px"><?php wp_related_posts() ?></div>
    <br />


</div>

<?php if (in_category('eventos_off')): ?>
<div class="fb-login-button" data-show-faces="true" data-width="200" data-max-rows="1" data-scope="publish_actions">
</div>
<input type="button" value="¡Quiero ir!" onclick="postLike();">
<div id="result"></div>
<?php endif ?>

<?php the_content(); ?>
</div>


<div style="clear:both"></div>

<div style="height:140px; float:left;">
<a href="http://www.e-travelsolution.com/Partners/Reservations/Tours/IList.aspx?asoc=eaca&moneda=PE&idioma=ESP&destino=1"><img src="<?php bloginfo('stylesheet_directory') ?>/images/vans.jpg" alt="Tours de Acapulco" width="238" /></a>
<p style="line-height:140%;margin: -110px 0 0 10px;font-size:10pt;color:#fff;font-weight:bold">Tours por<br /> Acapulco</p>
</div>

<div style="height:130px; float:left;">
<a href="http://www.e-travelsolution.com/Partners/Reservations/Tours/IList.aspx?asoc=eaca&moneda=PE&idioma=ESP&destino=1"><img src="<?php bloginfo('stylesheet_directory') ?>/images/yates.jpg" alt="Yates de Acapulco" width="238" /></a>    
<p style="line-height:140%;margin: -90px 0 0 130px;font-size:10pt;color:#fff;font-weight:bold">Renta Yates<br />en Acapulco</p>
</div>

<div style="clear:both"></div>


<?php if (function_exists('the_tags')) { ?> <?php the_tags('<div class="p-tag">Tags: ', ', ', '</div>'); ?> <?php } ?>
</div>	

<?php comments_template(); ?>
<?php endwhile; else: ?>

<p>Disculpa, ninguna nota se parece a lo que buscas.</p>

<?php endif; ?>
<?php get_footer(); ?>