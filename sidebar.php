<div id="sidebar" class="span-8 last" role="complementary">
    <div>
	    <div style="width: 290px; background-color: #4e75b8; color: #fff; margin: 0 auto 5px auto; padding: 3px;">
	    <form style="padding: 5px 10px;" method="post" class="myForm" action="http://envios.deacapulco.com/form.php?form=3" id="frmSS3" onSubmit="return CheckForm3(this);">
	    <p style="text-align: left; font-size: 1.1em; padding: 4px">
	    Noticias, eventos y oferta de hoteles en tu correo electrónico: </p>
	    <p><label>Nombre :</label><br /><input type="text" name="CustomFields[2]" id="CustomFields_2_3" value="" /></p>
<p><label>* e-mail : </label><br /><input type="text" name="email" value="" /></p>
<input type="hidden" name="format" value="h">
<p><input type="submit" value="Registrarme" style="border: 1px solid #333; background-color: #000033; color: #fff; font-size: 1.0em"  /></p>

	    </form>
	    </div>
	    
<script language="javascript">

            function CheckMultiple3(frm, name) {
                for (var i=0; i < frm.length; i++)
                {
                    fldObj = frm.elements[i];
                    fldId = fldObj.id;
                    if (fldId) {
                        var fieldnamecheck=fldObj.id.indexOf(name);
                        if (fieldnamecheck != -1) {
                            if (fldObj.checked) {
                                return true;
                            }
                        }
                    }
                }
                return false;
            }
        function CheckForm3(f) {
            if (f.email.value == "") {
                alert("Olvidaste escribir tu email.");
                f.email.focus();
                return false;
            }
        
                return true;
            };
        
</script>

    <!-- Yahoo! Weather Badge --><iframe allowtransparency="true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" src="http://mx.weather.yahoo.com/badge/?id=110978&u=c&t=lawn&l=horizontal" height="155px" width="278px"></iframe><!-- Yahoo! Weather Badge -->
	    
        
    <?php if (function_exists('dynamic_sidebar')) dynamic_sidebar(); ?>
    
    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fe.acapulcocom&amp;width=300&amp;connections=10&amp;stream=false&amp;header=true&amp;height=320" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:320px;" allowTransparency="true"></iframe>
    
    <?php if (!is_home()): ?>
    <?php $tmp = $post; ?>
    <?php $posts = query_posts(array('post__in' => get_option('sticky_posts'), 'showposts' => 5)) ?>
    <div style="clear: both;"></div>
    <h3 style="color: #E26D05; font-family: Arial;">Lo actual en Acapulco</h3>
    <ul class="related_post sidebar">
    <?php while(have_posts()): the_post(); ?>
        <li><a href="<?php the_permalink() ?>"><?php the_feature_thumb($post->ID, 'thumbnail'); ?></a> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
    <?php endwhile; ?>
    </ul>
    <?php $post = $tmp; ?>
    <div style="clear: both;"></div>
    <?php endif; ?>
    
    <?php /* ?>
    <iframe src='http://api.eflyer.com.mx/index.php/widget/smsbox/2ab56412b1163ee131e1246da0955bd1' frameborder='0'  scrolling='no' marginheight='0' marginwidth='0' width='223' height='258' style='width:225px; height:260px; background-color:transparent;' allowtransparency='yes'></iframe>
    */
    ?>
    
    <!--/* OpenX Javascript Tag v2.8.0 */-->

<script type='text/javascript'>
//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://ads.e-acapulco.com/delivery/ajs.php':'http://ads.e-acapulco.com/delivery/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=4");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
   document.write ("&amp;loc=" + escape(window.location));
   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>
</script><noscript><a href='http://ads.e-acapulco.com/delivery/ck.php?n=a0d8e575&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://ads.e-acapulco.com/delivery/avw.php?zoneid=4&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a0d8e575' border='0' alt='' /></a></noscript>

<?php if (!is_home()): ?>

    <p style="text-align:center; margin: 0 auto">
    <br />
    <script type="text/javascript">
	google_ad_client = "pub-2625295105356550";
	/* Eaca Sidebar 200x200 */
	google_ad_slot = "7248586636";
	google_ad_width = 200;
	google_ad_height = 200;
	</script>
	<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
	</p>
<?php endif; ?>

    <p>&nbsp;</p>
	</div>
</div>