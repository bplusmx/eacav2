<div style="width:240px">
	
<div style="width: 240px; margin: 0 auto 5px auto; padding: 3px;">
        <form style="padding: 5px 10px;" class="myForm" method="post" action="http://envios.justoalblanco.com/form.php?form=4" id="frmSS4" onsubmit="return CheckForm4(this);">
	    <p style="text-align: left; font-size: 1.1em; padding: 4px">
	    Noticias, eventos y oferta de hoteles en tu correo electrónico: </p>
	    <p><label>Nombre :</label>
	    <br />
	    <input type="text" name="CustomFields[2]" id="CustomFields_2_4" value="" />
	    </p>
	    <p>
	    <label>* e-mail : </label><br />
	    <input type="text" name="email" value="" />
	    </p>
	    <input type="hidden" name="format" value="h">
	    <p>
	    <input type="submit" value="Registrarme" style="border: 1px solid #333; background-color: #000033; color: #fff; font-size: 1.0em"  />
	    </p>

	    </form>
	    </div>
	    
<script type="text/javascript">
// <![CDATA[

			function CheckMultiple4(frm, name) {
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
		function CheckForm4(f) {
			var email_re = /[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/i;
			if (!email_re.test(f.email.value)) {
				alert("Ingresa tu email.");
				f.email.focus();
				return false;
			}
					
				return true;
			}
		
// ]]>
</script>
        
    <?php if (function_exists('dynamic_sidebar')) dynamic_sidebar(); ?>
    
    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fe.acapulcocom&amp;width=240&amp;connections=10&amp;stream=false&amp;header=true&amp;height=320" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:320px;" allowTransparency="true"></iframe>

    <p style="margin: 8px; auto"><a href="http://acapulcocasas.net/" target="_blank"><img src="http://acapulcocasas.net/images/banner1.jpg" alt="" /></a></p>
        
    <!--Start Dynamic Sidebar -->
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
    <?php endif; ?>
    <!--End Dynamic Sidebar -->
    
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
    
</div>