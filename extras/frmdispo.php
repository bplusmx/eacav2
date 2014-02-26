<div id="extra" class="extra">
	<div id="mnSel">		  
		<div onclick="SelOpc(0,'A'); MnOp('formaflight'); sbMnOp('sbSelFL',1,' _h');" class="Sel1A"><span id="mnItm2" class="mnItemA">Vuelos</span></div>			
		<div onclick="SelOpc(1,'A'); MnOp('formahotel'); sbMnOp('sbSelHT',1,' _h');" class="Sel2"><span id="mnItm3" class="mnItem">Hoteles</span></div>
		<div onclick="SelOpc(2,'A'); MnOp('formatour'); sbMnOp('',0,' _h');" class="Sel3"><span id="mnItm4" class="mnItem">Servicios</span></div>
	</div>
	
	<div class="RBCt2"><div id="RBCt" class="RBCt">
			<div id="sbSelFL" class="sbMn spSp">
			<div onclick="SelOpc(0,'A'); MnOp('formaflight'); sbMnOp('sbSelFL',1,' _h');" class="opFL"><input type="radio" /> Solo Avi&oacute;n</div>
			<div onclick="SelOpc(0,'A'); MnOp('formapackage'); sbMnOp('sbSelFL',2,' _h');" class="opHF"><input type="radio" /> Hotel + Avi&oacute;n</div></div>
		<div id="sbSelHT" class="sbMn spSp">
			<div onclick="SelOpc(1,'A'); MnOp('formahotel'); sbMnOp('sbSelHT',1,' _h');" class="opHT"><input type="radio"/> Solo Hotel</div>
			<div onclick="SelOpc(1,'A'); MnOp('formapackage'); sbMnOp('sbSelHT',2,' _h');" class="opHF"><input type="radio" /> Hotel + Avi&oacute;n</div></div>
		<form id="formapackage" name="formapackage" method="post" action="http://www.e-TravelSolution.com.mx/Partners/Reservations/Packages/IResult.aspx?asoc=eaca"
			onsubmit="return validaPackAvion('formapackage',9,document.formapackage.anio_desde.value,document.formapackage.mes_desde.value,document.formapackage.dia_desde.value,document.formapackage.anio_hasta.value,document.formapackage.mes_hasta.value,document.formapackage.dia_hasta.value);">
			<input type="hidden" value="PE" name="moneda" />
			<input type="hidden" value="ESP" name="Idioma" id="Idioma" />
			<input Type="hidden" name="conAjax" value="OFF" />
			<input Type="hidden" name="termina" value="false" />
			<input type="hidden" name="PKfechaFrom" id="PKfechaFrom" onchange="FechaGet(document.formapackage.PKfechaFrom,document.formapackage.anio_desde, document.formapackage.mes_desde, document.formapackage.dia_desde)" />
			<input type="hidden" name="PKfechaTo" id="PKfechaTo" onchange="FechaGet(document.formapackage.PKfechaTo,document.formapackage.anio_hasta, document.formapackage.mes_hasta, document.formapackage.dia_hasta)" />
			<div class="spWidth">
				<span class="spMs">Origen:</span>
				<input name="Leavingfrom" id="Leavingfrom" class="inLv" value="Ciudad o Clave IATA"
					autocomplete="off" maxlength="120" size="41" onfocus="DfltIn(this,'Ciudad o Clave IATA');" />
			</div>
			<div class="spWidth">
				<span class="spMs">Destino:</span>
				<select class="cmbDst" name="ciudades" id="ciudades">
					<option style="width:150px;" value="">Selecciona un Destino</option>
					<option value="">---------------------</option>
				</select>
			</div>
			<div class="spWidth spB left spSp">
				<div>Fecha de Llegada:</div>
				<select name="anio_desde" onchange="javascript:fillMonthsSelect(document.formapackage.anio_desde.value, document.formapackage.mes_desde, document.formapackage.dia_desde, false);ManualCambia(document.formapackage.PKfechaFrom,document.formapackage.anio_desde, document.formapackage.mes_desde, document.formapackage.dia_desde);" id="anio_desdeF" class="fad">
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
				</select>
				<select id="mes_desdeF" name="mes_desde" class="fmd" onchange="javascript:fillDaysSelect(document.formapackage.anio_desde.value, document.formapackage.mes_desde.value, document.formapackage.dia_desde, false);ManualCambia(document.formapackage.PKfechaFrom,document.formapackage.anio_desde, document.formapackage.mes_desde, document.formapackage.dia_desde);"></select>
				<select id="dia_desdeF" name="dia_desde" class="fdd" onchange="javascript:ManualCambia(document.formapackage.PKfechaFrom,document.formapackage.anio_desde, document.formapackage.mes_desde, document.formapackage.dia_desde);"></select>
				
			</div>
			<div class="spWidth spB left">
				<div>Fecha de Regreso:</div>
				<select name="anio_hasta" onchange="javascript:fillMonthsSelect(document.formapackage.anio_hasta.value, document.formapackage.mes_hasta, document.formapackage.dia_hasta, false);ManualCambia(document.formapackage.PKfechaTo,document.formapackage.anio_hasta, document.formapackage.mes_hasta, document.formapackage.dia_hasta);" id="anio_hastaF" class="fah">
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
				</select>
				<select name="mes_hasta" onchange="javascript:fillDaysSelect(document.formapackage.anio_hasta.value, document.formapackage.mes_hasta.value, document.formapackage.dia_hasta, false);ManualCambia(document.formapackage.PKfechaTo,document.formapackage.anio_hasta, document.formapackage.mes_hasta, document.formapackage.dia_hasta);" id="mes_hastaF" class="fmh"></select>
				<select name="dia_hasta" onchange="javascript:ManualCambia(document.formapackage.PKfechaTo,document.formapackage.anio_hasta, document.formapackage.mes_hasta, document.formapackage.dia_hasta);" id="dia_hastaF" class="fdh"></select>
				
			</div>
			<div class="spWidth spRms">
				<span>Cuartos:</span>
				<select name="num_cuartos" size="1" class="comboP" onchange="javascript:FRB_ShowRoom('formapackage')">
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
			</div>
			<!--	INICIA Cuarto #: [1] -->
			<div class="spWidth spRmsX">
				<span class="spOt">Adultos</span><span class="spTtlRgt">Ni&ntilde;os</span><br />
				<input type="hidden" value="no" name="Adult_Only" />
				<span class="CuartosText">Cuarto 1:</span>
				<select id="num_adultos1" name="num_adultos" size="1" class="comboP spLft">
					<option value="1">1</option>
				</select>
				<select id="num_ninos" name="num_ninos" size="1" onchange="javascript:FRB_ShowNinos('formapackage',1)" class="comboP">
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
				<select id="num_ninos_2" name="num_ninos_2" size="1" onchange="javascript:FRB_ShowNinos('formapackage',2)" class="comboP">
					<option value="0">0</option>
				</select>
			</div>
			<!--	FIN Cuarto #: [2] -->
			<div style="display: none;" id="DivTablaNinos" class="tbNn"><span class="tbTtl">Edad de los Ni&ntilde;os</span>
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
				<a target="_top" href="http://www.e-travelsolution.com.mx/Partners/Reservations/Packages/ISearch.aspx?asoc=eaca">M&aacute;s Opciones</a>
				<input type="image" src="/Partners/ResBox/_lib/Img/btnBuscar.gif" name="Search" class="botonSearch" alt="Buscar" onmouseover="this.src='/Partners/ResBox/_lib/Img/btnBuscar_Ov.gif';" onmouseout="this.src='/Partners/ResBox/_lib/Img/btnBuscar.gif';" />
			</div>
		</form>
	 <form id="formaflight" name="formaflight" method="post" onsubmit="return validaPackAvion('formaflight',9,document.formaflight.anio_desde.value,document.formaflight.mes_desde.value,document.formaflight.dia_desde.value,document.formaflight.anio_hasta.value,document.formaflight.mes_hasta.value,document.formaflight.dia_hasta.value);"
		action="http://www.e-TravelSolution.com.mx/Partners/Reservations/Flights/IResult.aspx?asoc=eaca">
		 <input Type="hidden" name="moneda" value="PE" />
		 <input Type="hidden" name="aerolinea" value="" />
		 <input Type="hidden" name="cabina" value="T" />
		 <input Type="hidden" name="conAjax" value="OFF" />
		 <input Type="hidden" name="termina" value="false" />
		 <input type="hidden" name="cont" value="yes" />
		 <input type="hidden" name="Package" value="YES" />
		 <input type="hidden" name="PackageType" value="SAV" />
		 <input type="hidden" name="wait"  value="1" />
		 <input type="hidden" name="ConResults" id="Hidden1" value="0" />
		 <input type="hidden" name="SoloHotel" id="Hidden2" value="1" />
		 <input Type="hidden" name="Idioma" id="Hidden3" value="ESP" />
		 <input type="hidden" name="Promos" value="" />
		 <input type="hidden" name="LastMin" value="" />
		 <input type="hidden" name="NightFree" value="" />
		 <input type="hidden" name="FOfechaFrom" id="FOfechaFrom" value="17-3-2008" readonly="1" onchange="FechaGet(document.formaflight.FOfechaFrom,document.formaflight.anio_desde, document.formaflight.mes_desde, document.formaflight.dia_desde)" />
		 <input type="hidden" name="FOfechaTo" id="FOfechaTo" value="24-3-2008" readonly="1" onchange="FechaGet(document.formaflight.FOfechaTo,document.formaflight.anio_hasta, document.formaflight.mes_hasta, document.formaflight.dia_hasta)" />
			<div class="spWidth">
			<span class="spTT">Tipo de Viaje:</span>
			<select name="TipoVuelo" id="bTipoVuelo" class="ComboP cbFlT" onchange="MuestraOcultaPorObj(this,'one','FlightReturn');">
				<option value="round" selected="selected">Viaje redondo</option>
				<option value="one">Viaje sencillo</option>
			</select>
			</div>
			<div class="spWidth spSp">
			 <span class="spMs">Origen:</span>
			 <input name="Leavingfrom" id="bLeavingfrom" class="inLv" value="Ciudad o Clave IATA" autocomplete="off" size="41" maxlength="120" onfocus="DfltIn(this,'Ciudad o Clave IATA');">
			 <input name="CodeAirport" id="bCodeAirport" type="hidden"  value="" size="41">
			</div>
			<div class="spWidth">
			 <span class="spMs">Destino:</span>
			 <input name="ciudades" id="bciudades" class="inLv" autocomplete="off" value="Ciudad o Clave IATA" size="41" onfocus="DfltIn(this,'Ciudad o Clave IATA');" alt="ajax.off">
			 <input name="Clav_ciudad" id="bClav_ciudad" type="hidden"  value="" size="10">
			</div>
			<div class="spWidth spB left spSp">
				<div>Fecha de Llegada:</div>
					<select name="anio_desde" onchange="javascript:fillMonthsSelect(document.formaflight.anio_desde.value, document.formaflight.mes_desde, document.formaflight.dia_desde, false);ManualCambia(document.formaflight.FOfechaFrom,document.formaflight.anio_desde, document.formaflight.mes_desde, document.formaflight.dia_desde);" id="anio_desde" class="fad">
						<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					</select>
					<select id="mes_desde" name="mes_desde" class="fmd" onchange="javascript:fillDaysSelect(document.formaflight.anio_desde.value, document.formaflight.mes_desde.value, document.formaflight.dia_desde, false);ManualCambia(document.formaflight.FOfechaFrom,document.formaflight.anio_desde, document.formaflight.mes_desde, document.formaflight.dia_desde);"></select>
					<select id="dia_desde" name="dia_desde" class="fdd" onchange="javascript:ManualCambia(document.formaflight.FOfechaFrom,document.formaflight.anio_desde, document.formaflight.mes_desde, document.formaflight.dia_desde);"></select>
					
				</div>
			<br/>
<div id="FlightReturn" class="spWidth spB Left">
		<div>Fecha de Regreso:</div>
		<select name="anio_hasta" onchange="javascript:fillMonthsSelect(document.formaflight.anio_hasta.value, document.formaflight.mes_hasta, document.formaflight.dia_hasta, false);ManualCambia(document.formaflight.FOfechaTo,document.formaflight.anio_hasta, document.formaflight.mes_hasta, document.formaflight.dia_hasta);" id="anio_hasta" class="fah">
			<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
		</select>
		<select name="mes_hasta" onchange="javascript:fillDaysSelect(document.formaflight.anio_hasta.value, document.formaflight.mes_hasta.value, document.formaflight.dia_hasta, false);ManualCambia(document.formaflight.FOfechaTo,document.formaflight.anio_hasta, document.formaflight.mes_hasta, document.formaflight.dia_hasta);" id="mes_hasta" class="fmh"></select>
		<select name="dia_hasta" onchange="javascript:ManualCambia(document.formaflight.FOfechaTo,document.formaflight.anio_hasta, document.formaflight.mes_hasta, document.formaflight.dia_hasta);" id="dia_hasta" class="fdh"></select>
		
</div>
<!--	INICIO ROOM #: [1] -->
<div class="spWidth spRmsX">
	<span class="spOt">Adultos</span><span class="spTtlRgt">Ni&ntilde;os</span><br />
	<input type="hidden" value="no" name="Adult_Only" />
	<input type="hidden" value="1" name="num_cuartos" />
	<span class="CuartosText">Pasajeros:</span>
	<select id="num_adultosF1" name="num_adultos" size="1" class="comboP spLft">
		<option value="1">1</option>
	</select>
	<select id="num_ninosF" name="num_ninos" size="1" onchange="javascript:FRB_ShowNinos1('formaflight',1)" class="comboP">
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
	</select>
</div>
<!--	FIN ROOM #: [1] -->
<div style="display: none;" id="DivTablaNinosF" class="tbNn"><span class="tbTtl">Edad de los Ni&ntilde;os</span>
	<div style="display: none;" id="DivTablaNinosF_1" class="dRooms sprRms">
		<select id="EdadNinoF1" name="EdadNino1" size="1" class="CmbEdNn">
			<option value="-1">-?-</option>
			<option value="0"><1</option>
		</select>
		<select id="EdadNinoF2" name="EdadNino2" size="1" class="CmbEdNn">
			<option value="-1">-?-</option>
			<option value="0"><1</option>
		</select>
		<select id="EdadNinoF3" name="EdadNino3" size="1" class="CmbEdNn">
			<option value="-1">-?-</option>
			<option value="0"><1</option>
		</select>
	</div>
	<input type="hidden" value="-1" name="EdadNino4" />
	<input type="hidden" value="-1" name="EdadNino5" />
	<input type="hidden" value="-1" name="EdadNino6" />
	<input type="hidden" value="-1" name="EdadNino7" />
	<input type="hidden" value="-1" name="EdadNino8" />
	<span class="note">Favor de especificar la edad de los Ni&ntilde;os (0 - 12 a&ntilde;os).</span>
</div>
<!-- FIN EDADES DE LOS Ni&ntilde;os # 1  -->
<div class="iFSearch">
<a target="_top" href="http://www.e-travelsolution.com.mx/Partners/Reservations/Flights/ISearch.aspx?asoc=eaca">M&aacute;s Opciones</a>
<input type="image" src="/Partners/ResBox/_lib/Img/btnBuscar.gif" name="Search" class="botonSearch" alt="Buscar" onmouseover="this.src='/Partners/ResBox/_lib/Img/btnBuscar_Ov.gif';" onmouseout="this.src='/Partners/ResBox/_lib/Img/btnBuscar.gif';" />
</div>
</form>
		<form id="formahotel" name="formahotel" method="post" action="http://www.e-TravelSolution.com.mx/Partners/Reservations/Hotels/List.aspx?asoc=eaca"
			onsubmit="return validaFechas(document.formahotel.anio_desde.value, document.formahotel.mes_desde.value, document.formahotel.dia_desde.value, document.formahotel.anio_hasta.value, document.formahotel.mes_hasta.value, document.formahotel.dia_hasta.value);">
			<input type="hidden" name="HTfechaFrom" onchange="FechaGet(document.formahotel.HTfechaFrom,document.formahotel.anio_desde, document.formahotel.mes_desde, document.formahotel.dia_desde)" id="HTfechaFrom" />
			<input type="hidden" name="HTfechaTo" onchange="FechaGet(document.formahotel.HTfechaTo,document.formahotel.anio_hasta, document.formahotel.mes_hasta, document.formahotel.dia_hasta)" id="HTfechaTo" />
			<input type="hidden" value="PE" name="moneda" />
			<input type="hidden" value="ESP" name="Idioma" />
			<div class="spWidth">
				Destino:<br />
				<select class="comboLn" name="Destino"></select>
			</div>
			<div class="spWidth">
				Nombre del Hotel:<br />
				<input value="" maxlength="80" class="inLn" name="Nombre" />
			</div>
			<div class="spWidth spB">
				<div>Fecha de Llegada:</div>
				<select name="anio_desde" onchange="javascript:fillMonthsSelect(document.formahotel.anio_desde.value, document.formahotel.mes_desde, document.formahotel.dia_desde, false);ManualCambia(document.formahotel.HTfechaFrom,document.formahotel.anio_desde, document.formahotel.mes_desde, document.formahotel.dia_desde);" id="anio_desdeHT" class="fad">
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
				</select>
				<select name="mes_desde" onchange="javascript:fillDaysSelect(document.formahotel.anio_desde.value, document.formahotel.mes_desde.value, document.formahotel.dia_desde, false);ManualCambia(document.formahotel.HTfechaFrom,document.formahotel.anio_desde, document.formahotel.mes_desde, document.formahotel.dia_desde);" id="mes_desdeHT" class="fmd"></select>
				<select name="dia_desde" onchange="javascript:ManualCambia(document.formahotel.HTfechaFrom,document.formahotel.anio_desde, document.formahotel.mes_desde, document.formahotel.dia_desde);" id="dia_desdeHT" class="fdd"></select>
				
			</div>
			<div class="spWidth spB">
				<div>Fecha de Regreso:</div>
				<select name="anio_hasta" onchange="javascript:fillMonthsSelect(document.formahotel.anio_hasta.value, document.formahotel.mes_hasta, document.formahotel.dia_hasta, false);ManualCambia(document.formahotel.HTfechaTo,document.formahotel.anio_hasta, document.formahotel.mes_hasta, document.formahotel.dia_hasta);" id="anio_hastaHT" class="fah">
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
				</select>
				<select name="mes_hasta" onchange="javascript:fillDaysSelect(document.formahotel.anio_hasta.value, document.formahotel.mes_hasta.value, document.formahotel.dia_hasta, false);ManualCambia(document.formahotel.HTfechaTo,document.formahotel.anio_hasta, document.formahotel.mes_hasta, document.formahotel.dia_hasta);" id="mes_hastaHT" class="fmh"></select>
				<select name="dia_hasta" onchange="javascript:ManualCambia(document.formahotel.HTfechaTo,document.formahotel.anio_hasta, document.formahotel.mes_hasta, document.formahotel.dia_hasta);" id="dia_hastaHT" class="fdh"></select>
				
			</div>
			<div class="iFSearch">
				<a target="_top" href="http://www.e-travelsolution.com.mx/Partners/Reservations/Hotels/List.aspx?asoc=eaca">M&aacute;s Opciones</a>
				<input type="image" src="/Partners/ResBox/_lib/Img/btnBuscar.gif" name="Search" class="botonSearch" alt="Buscar" onmouseover="this.src='/Partners/ResBox/_lib/Img/btnBuscar_Ov.gif';" onmouseout="this.src='/Partners/ResBox/_lib/Img/btnBuscar.gif';"  />
			</div>
		</form>
		<form id="formatour" name="formatour" method="post" action="http://www.e-TravelSolution.com.mx/Partners/Reservations/Tours/IList.aspx?asoc=eaca">
			<div class="RbTtlTr">Tours</div>
			<div class="spWidth">
				Selecciona el Destino:<br />
				<select name="Destino" class="comboLn">
					<option value="">Todos los Destinos</option>
					<option value="1" selected="selected">Acapulco</option>
					<option value="33">Cabo San Lucas</option>
					<option value="2">Cancun</option>
					<option value="4">Cozumel</option>
					<option value="6">Isla Mujeres</option>
					<option value="8">Los Cabos</option>
					<option value="10">Merida & Yucatan</option>
					<option value="16">Playa del Carmen</option>
					<option value="12">Puerto Vallarta</option>
					<option value="13">Riviera Maya</option>
				</select>
				<input type="hidden" value="" name="Ciudad" />
			</div>
			<div class="spWidth spSp">
				Selecciona la Categor&iacute;a:<br />
				<select name="Clav_Categoria" class="comboLn">
					<option value="">Todas las Categorias</option>
					<option value="ADVT">Aventura</option>
					<option value="MAYA">Sitios Arqueol&oacute;gicos</option>
					<option value="CULT">Viajes Culturales</option>
					<option value="DAY">Paseos en el dia</option>
					<option value="DIVI">Buceo</option>
					<option value="DOLP">Nado con Delfin</option>
					<option value="ECOL">Ecol&oacute;gico</option>
					<option value="FISH">Pesca</option>
					<option value="GOLF">Golf</option>
					<option value="CABA">Carrera de Caballos</option>
					<option value="NIGH">Paseos nocturnos</option>
					<option value="PARK">Parques</option>
					<option value="CITY">Citadinos</option>
					<option value="SNOR">Snorkeling</option>
					<option value="WATE">Actividades Acuaticas</option>
					<option value="WHLE">Ballenas</option>
				</select>
			</div>
			<div class="iFSearch">
				<a target="_top" href="http://www.e-travelsolution.com.mx/Partners/Reservations/Tours/IList.aspx?asoc=eaca">M&aacute;s Opciones</a>
				<input type="image" src="/Partners/ResBox/_lib/Img/btnBuscar.gif" name="Search" class="botonSearch" alt="Buscar" onmouseover="this.src='/Partners/ResBox/_lib/Img/btnBuscar_Ov.gif';" onmouseout="this.src='/Partners/ResBox/_lib/Img/btnBuscar.gif';" />
			</div>
		</form>
		<form id="formatransfers" name="formatransfers" method="post" target="_top" action="http://www.e-TravelSolution.com.mx/Partners/Reservations/Shuttles/List.aspx?asoc=eaca">
			<input type="Hidden" name="Destino" value="0" />
			<input type="Hidden" name="menu" value="yes" />
			<div class="RbTtlTr">Traslados</div>
			<div class="spWidth">
				Selecciona el Destino:<br />
				<select name="Airport" class="comboLn">
					<option value="Acapulco" selected="selected">Acapulco</option>
					<option value="Cancun">Canc&uacute;n</option>
					<option value="Guadalajara">Guadalajara</option>
					<option value="Ixtapa">Ixtapa & Zihuatanejo</option>
					<option value="Cabos">Los Cabos</option>
					<option value="Mazatlan">Mazatl&aacute;n</option>
					<option value="Merida">M&eacute;rida & Yucat&aacute;n</option>
					<option value="Monterrey">Monterrey</option>
					<option value="Vallarta">Puerto Vallarta</option>
				</select>
			</div>
			<div class="iFSearch">
				<a href="http://www.e-travelsolution.com.mx/Partners/Reservations/Shuttles/List.aspx?asoc=eaca" target="_top">M&aacute;s Opciones</a>
				<input type="image" src="/Partners/ResBox/_lib/Img/btnBuscar.gif" name="Search" class="botonSearch" alt="Buscar" onmouseover="this.src='/Partners/ResBox/_lib/Img/btnBuscar_Ov.gif';" onmouseout="this.src='/Partners/ResBox/_lib/Img/btnBuscar.gif';"  />
			</div>
		</form>
	</div><span>&nbsp</span><div class="Lns Lnx1"></div>
	<div class="Lns Lnx2"></div>
	<div class="Lns Lnx3"></div></div>
	<script type="text/javascript" language="javascript">PgEnd();</script>
</div>