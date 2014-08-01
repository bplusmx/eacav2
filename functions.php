<?php

include 'vendor/class-tgm-plugin-activation.php';
include 'lib/required-plugins.php';
//include 'lib/custom-fields.php';

add_action('after_setup_theme', 'eacav2_setup' );

function wp_no_menu($class = '')
{
    ?>
    <ul class="nav nav-pills pull-right">
        <li><a href="<?php echo admin_url('nav-menus.php') ?>">1. Defina un menú</a></li>
        <li><a href="<?php echo admin_url('nav-menus.php?action=locations') ?>">2. Asignelo a esta sección (menú superior)</a></li>
    </ul>
    <?php 
}

function the_menu_primary()
{
    $menu_args = array( 
        'theme_location' => 'primary',
        'menu_class' => 'nav nav-pills pull-right', 
        'fallback_cb' => 'wp_no_menu',
        'sort_column' => 'menu_order', 
        'menu_class' => 'nav nav-pills pull-right', 
        'echo' => 0
    );
    
    echo wp_nav_menu($menu_args);
}

if (!function_exists('eacav2_setup')) {
    function eacav2_setup() 
    {
        // This theme styles the visual editor with editor-style.css to match the theme style.
        add_editor_style();

        // This theme uses post thumbnails
        add_theme_support( 'post-thumbnails' );

        // Add default posts and comments RSS feed links to head
        add_theme_support( 'automatic-feed-links' );
        
        // Tipos de entradas
        add_theme_support('post-formats', array( 
            'aside', 'image', 'gallery', 'link', 'quote', 'status', 'video', 'audio' 
        ));

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => __( 'Menu superior'),
        ) );
    }
}


add_action('wp_enqueue_scripts', 'eacav2_add_scripts');

function eacav2_add_scripts()
{
    $path = get_bloginfo('stylesheet_directory');

    wp_enqueue_script('jquery', $path . '/components/jquery/dist/jquery.js');
    
    wp_enqueue_script('bootstrap', $path . '/components/bootstrap/dist/js/bootstrap.min.js', array('jquery'));
    
    wp_enqueue_script('resbox', $path . '/ResBox/JS/Default_ESPX.js', array('jquery'));
    wp_enqueue_script('resbox-calendar', $path . '/ResBox/JS/Calendar_ESPX.js', array('resbox'));
    wp_enqueue_script('resbox-fechas', $path . '/ResBox/JS/fechas_ESPX.js', array('resbox-calendar'));
    wp_enqueue_script('resbox-default', $path . '/ResBox/JS/DefaultX.js', array('resbox-fechas'));

    wp_enqueue_script('jquery-jcarousel', $path . '/js/jquery.jcarousel.js', array('jquery'));
    wp_enqueue_script('jquery-actions', $path . '/js/jquery.actions.js', array('jquery-jcarousel'));
}

add_action('wp_enqueue_scripts', 'eacav2_add_styles');

function eacav2_add_styles()
{
    $path = get_bloginfo('stylesheet_directory');
    
    wp_enqueue_style('font-nunito', 'http://fonts.googleapis.com/css?family=Nunito:400,700');
    wp_enqueue_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
    
    wp_enqueue_style('bootstrap', $path . '/components/bootstrap/dist/css/bootstrap.css');    
    wp_enqueue_style('bootstrap-flat-ui', $path . '/components/flat-ui-official/css/flat-ui.css', array('bootstrap'));
    wp_enqueue_style('eacapulco', $path . '/css/styles.css', array('bootstrap'));
    
    wp_enqueue_style('resbox', $path . '/ResBox/CSS/ResBox.css');
}

if ( function_exists('register_sidebar') )
    register_sidebars(2, array(
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget-all">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));

if (!function_exists('the_feature_thumb')) {
function the_feature_thumb($ID, $size = 'intermediate', $echo = true)
{
    global $wpdb;
    
    $sql = "SELECT ID FROM {$wpdb->posts} 
            WHERE post_parent = {$ID} AND post_status = 'inherit'  
            AND post_type = 'attachment' 
            ORDER BY menu_order ASC"; 
    
    $rs = $wpdb->get_results($sql);
    
    if (empty($size)) {
        $size = 'thumbnail';
    }

    $res = wp_get_attachment_image($rs[0]->ID, $size);
    
    if ($echo) {
    	echo $res;
    }
    
    return $res;
}
}


function dp_recent_comments($no_comments = 10, $comment_len = 150) { 
    global $wpdb; 
	
	$request = "SELECT * FROM $wpdb->comments";
	$request .= " JOIN $wpdb->posts ON ID = comment_post_ID";
	$request .= " WHERE comment_approved = '1' AND post_status = 'publish' AND post_password =''"; 
	$request .= " ORDER BY comment_date DESC LIMIT $no_comments"; 
		
	$comments = $wpdb->get_results($request);
		
	if ($comments) { 
		foreach ($comments as $comment) { 
			ob_start();
			?>
				<li>
					<a href="<?php echo get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID; ?>"><?php echo dp_get_author($comment); ?>:</a>
					<?php echo strip_tags(substr(apply_filters('get_comment_text', $comment->comment_content), 0, $comment_len)); ?>
				</li>
			<?php
			ob_end_flush();
		} 
	} else { 
		echo "<li>No comments</li>";
	}
}
