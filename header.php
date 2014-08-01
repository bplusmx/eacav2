<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
  <head>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Windows 8 Apps -->
    <meta name="application-name" content="e-Acapulco.com"/>
    <meta name="msapplication-TileColor" content="#00189e"/>
    <meta name="msapplication-square70x70logo" content="<?php bloginfo('template_directory'); ?>/ie/tiny.png"/>
    <meta name="msapplication-square150x150logo" content="<?php bloginfo('template_directory'); ?>/ie/square.png"/>
    <meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_directory'); ?>/ie/wide.png"/>
    <meta name="msapplication-square310x310logo" content="<?php bloginfo('template_directory'); ?>/ie/large.png"/>
    <meta name="msapplication-notification" content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=http://e-acapulco.com/eventos/feed&amp;id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=http://e-acapulco.com/acapulco/noticias/feed&amp;id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=http://e-acapulco.com/feed&amp;id=3; cycle=1"/>

    <meta name="DC.title" content="<?php wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Página %s', 'jab' ), max( $paged, $page ) );
		 ?>" />
    <meta name="geo.region" content="MX-GRO" />
    <meta name="geo.placename" content="Acapulco" />
    <meta name="geo.position" content="16.856463;-99.856796" />
    <meta name="ICBM" content="16.856463, -99.856796" />


<?php if (is_single()): ?>
<?php
$foto_id = get_post_thumbnail_id($post->ID);
$foto = '';

if ($foto_id > 0) {
    $foto = wp_get_attachment_image_src($foto_id, 'large');
}

$terms = get_the_terms($post->ID, 'category');

foreach ($terms as $term) {
    $seccion = $term;
    break;
}

unset($terms);
?>    
    
<?php if (empty($foto)): ?>    
<meta name="twitter:card" content="summary">
<meta name="twitter:image:src" content="http://e-acapulco.com/wp-content/themes/eaca2009/images/logo.png">
<?php else: ?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image:src" content="<?php echo $foto[0] ?>">
<?php endif ?>
<meta name="twitter:site" content="@eacapulcocom">
<meta name="twitter:creator" content="@eacapulcocom">
<meta name="twitter:title" content="<?php echo $post->post_title ?>">
<meta name="twitter:description" content="<?php echo $post->post_excerpt ?>">
<?php if (is_single() && in_category('eventos')): ?>
<meta property="og:type" content="e-acapulco:evento">
<?php else: ?>
<meta property="og:type"            content="article" /> 
<?php endif ?>
<meta property="og:site_name"       content="<?php  bloginfo('name') ?>" /> 
<meta property="og:url"             content="<?php echo get_permalink($post->ID) ?>" /> 
<meta property="og:title"           content="<?php echo $post->post_title ?>" /> 
<meta property="og:image"           content="<?php echo $foto[0] ?>" />
<meta property="og:description"     content="<?php echo $post->post_excerpt ?>">
<meta property="article:published_time"     content="<?php echo $post->post_date ?>">
<meta property="article:publisher"  content="https://www.facebook.com/e.acapulcocom" />
<meta property="article:section"    content="<?php echo $seccion->name ?>" />
<meta property="article:tag"        content="<?php //echo get_the_tag_list('', ', ') ?>" />
<?php endif ?>

    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feedproxy.google.com/E-acapulco" />
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory') ?>/icons/favicone-16x16.png">

    <title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Página %s', 'jab' ), max( $paged, $page ) );

	?></title>

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('stylesheet_directory') ?>/components/html5shiv-dist/html5shiv.js"></script>
      <script src="<?php bloginfo('stylesheet_directory') ?>/components/respond/dest/respond.min.js"></script>
    <![endif]-->
    
<?php wp_head() ?>
</head>
<body <?php body_class() ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=177452048987122";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 

<h1 class="hidden"><a href="/"><?php bloginfo('name') ?> <?php if ( is_single() ) { ?> &raquo; Archivo <?php } ?> <?php wp_title(); ?></a></h1>

<h2 class="hidden"><?php bloginfo('description') ?></h2>	

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static-top navbar-lg" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="<?php bloginfo('home') ?>">
          <img src="<?php bloginfo('stylesheet_directory') ?>/images/logo.png" alt="e-Acapulco.com" />
        </a>
    </div>
    <div class="navbar-collapse collapse">
    <?php the_menu_primary() ?>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<!-- Start Con-->
<div class="container home-slider">
<?php if (is_home()): ?>
    <div class="col-sm-9">
        <?php include 'partials/features.php' ?>
    </div>
    <div class="col-sm-3">
        <?php include 'partials/form-dispo.php' ?>
    </div>
<?php endif ?>
</div>

<div class="page container">