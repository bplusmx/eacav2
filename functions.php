<?php


/** Tell WordPress to run twentyten_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'eaca2009_setup' );

if (!function_exists('eaca2009_setup')) {
function eaca2009_setup() {

    // This theme styles the visual editor with editor-style.css to match the theme style.
    add_editor_style();

    // This theme uses post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => __( 'Menu superior'),
    ) );
}
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

function dp_get_author($comment) {
	$author = "";

	if ( empty($comment->comment_author) )
		$author = __('Anonymous');
	else
		$author = $comment->comment_author;
		
	return $author;
}

/*
Plugin Name: Gravatar
Plugin URI: http://www.gravatar.com/implement.php#section_2_2
Description: This plugin allows you to generate a gravatar URL complete with rating, size, default, and border options. See the <a href="http://www.gravatar.com/implement.php#section_2_2">documentation</a> for syntax and usage.
Version: 1.1
Author: Tom Werner
Author URI: http://www.mojombo.com/

CHANGES
2004-11-14 Fixed URL ampersand XHTML encoding issue by updating to use proper entity
*/

function gravatar($rating = false, $size = false, $default = false, $border = false) {
	global $comment;
	$out = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($comment->comment_author_email);
	if($rating && $rating != '')
		$out .= "&amp;rating=".$rating;
	if($size && $size != '')
		$out .="&amp;size=".$size;
	if($default && $default != '')
		$out .= "&amp;default=".urlencode($default);
	if($border && $border != '')
		$out .= "&amp;border=".$border;
	echo $out;
}

/* Trackback */
function trackTheme($name=""){
}

?>