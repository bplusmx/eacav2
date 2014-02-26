    </div>

</div>

<?php if (!is_category(5) && !is_category(10)): ?>
<div class="s1">
 <?php include TEMPLATEPATH . '/sidebar-2.php' ?>
</div>
<?php endif; ?>
</div>

<!-- End Con -->
<div style="background-color: #fff; " class="con">
	<div style="margin: 5px;">
		<h3>Temas populares</h3>
		<?php wp_tag_cloud(''); ?>
	</div>
</div>


<div id="pie">
<ul>
<?php  wp_list_pages('title_li=&child_of=1680&exclude=2'); ?>
<li><a href="/publicidad">Publicidad</a></li>
</ul>

    <div>
		e-Acapulco.com &reg; 2001-<?php echo date('Y') ?> | Comentarios y Sugerencias a <a href="mailto:info@e-acapulco.com">info@e-acapulco.com</a>
		<br />Acapulco, Guerrero
	</div>
</div>

<div id="close">
	<div>&nbsp;</div>
	<p><br />Powered By: <a style="color: #878; font-size: 90%" href="http://justoalblanco.com/?utm_source=clients&utm_medium=banner&utm_term=e-acapulco&utm_content=footertext&utm_campaign=branding">Justo al Blanco</a></p>
</div>

</div>

<!-- End BG -->
<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function()
{
    jQuery(".top-title").click(function()
    {
        window.location = "http://e-acapulco.com/";
    }).css('cursor', 'pointer');

    /*
    $('.vans,.yates,.mapa').css('cursor', 'pointer');

    $('.vans,.yates,.mapa').click(function()
    {
        clase = $(this).attr('class');
        url = $('.' + clase + ' a').attr('href');
        window.location = url;
    });
    */
});
</script>


<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0017/9761.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>

</body>
</html>