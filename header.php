<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />	
<title><?php bloginfo('name'); ?> :: <?php wp_title('::', true, 'right'); ?><?php bloginfo('description'); ?></title>  
<meta name="robots" content="noindex, nofollow" />


<!-- Remy Sharp Shim -->
<!-- [if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif -->

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />




<?php /*?> Always have wp_head() just before the closing </head>
	   tag of your theme. Many plugins use this hook to add 
       elements to <head> such as styles, scripts, and meta tags.
	  <?php */?>
      
<?php wp_head(); ?>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css"  />


</head>

<body <?php body_class(); ?>>


<div id="wrapper">

	<header>
    	<h1>
             <a href="http://edison.seattlecentral.edu/~cmelvi02/edison/web170/final/single.html">Northwest Design & Construction</a>
              </a> 
        </h1>    
        
     </header>

	<!-- START NAVIGATION -->
        <nav class="main">
    	  <?php wp_nav_menu( array( 
			'final-theme-2014' => 'main-menu' ,
			'menu' => 'Main Menu' ,
			'container'  => 'ul', 
			) ); ?>
		</nav>
	<!-- END NAVIGATION -->

    
	
    
   
    <!--<section class="asideleft">-->
    
	<div id="middle">
    
   <?php /*?> if ( is_front_page() ) {
    get_header( 'home' );
} elseif ( is_page( 'About' ) ) {
    get_header( 'about' );
} else {
    get_header();
}<?php */?>

<?php /*?>if ( is_front_page() ) {
    get_sidebar ( 'home' );
} elseif ( is_home( 'Home' ) ) {
    get_sidebar ( 'home' );
} elseif ( is_about( 'About' ) ) {
    get_sidebar ( 'about' );
} elseif ( is_blog( 'Blog' ) ) {
    get_sidebar-blog( 'blog' );
} elseif ( is_contact( 'Contact' ) ) {
    get_sidebar-contact( 'contact' );    
} else {
    get_sidebar();
}<?php */?>
