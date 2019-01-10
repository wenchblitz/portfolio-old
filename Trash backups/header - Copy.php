<?php

/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="main">
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!--<meta http-equiv="Page-Enter" content="RevealTrans(Duration=1,Transition=12)" />-->

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

		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
	
    <!--<meta name="title" content="¤ Silent Hunters ¤" />
    <meta name="description" content="This is the official website of ¤ Silent Hunters ¤ Guild" />-->
    <!--<link rel="profile" href="http://gmpg.org/xfn/11" />-->
    <!--<link rel="image_src" type="image/jpeg" href="<?php //bloginfo('template_url');?>/images/silenthunters-logo-emboss.jpg" />   
    <link rel="shortcut icon" href="<?php //bloginfo('stylesheet_directory'); ?>/SH-Emblem.ico" type="image/x-icon"/>-->
    
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/javascripts.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery-1.7.1.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery-1.3.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.easing.1.3.js"></script>    
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.inputhints.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.inputhints.min.js"></script>
   	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.capSlide.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/jquery.bxGallery.1.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/html5.js"></script>

	<!--Conditional Stylesheets-->
        <!--[if !IE]><!-->
            <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/reset.css" type="text/css" />
            <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" /> 
        <!--<![endif]-->
        
        <!--[if IE]>
            <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/reset.css" type="text/css" />
            <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/IEstyle.css" type="text/css" /> 
        <![endif]--> 
	<!--//Conditional Stylesheets-->

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_enqueue_script('jquery'); ?>
<?php

	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */

	wp_head();

?>

</head>

<body <?php body_class(); ?>>

<header>
	<div id="header">
    	<h1><a href="<?php bloginfo('url'); ?>" class="logo">My Portfolio</a></h1>
        <span class="scotch-tape-half">Scotch Tape</span>
        <span class="scotch-tape">Scotch Tape</span>
    </div><!--.header-->
    
    	<div class="clear"></div><!--.clear-->
    
   	<div id="banner">
    	<div id="banner-content">
        	<ul id="slider">
            	<li><img src="<?php bloginfo('template_url');?>/images/banner/1.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_url');?>/images/banner/2.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_url');?>/images/banner/3.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_url');?>/images/banner/4.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_url');?>/images/banner/5.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_url');?>/images/banner/6.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_url');?>/images/banner/7.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_url');?>/images/banner/8.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_url');?>/images/banner/9.jpg" alt="" /></li>
                <li><img src="<?php bloginfo('template_url');?>/images/banner/10.jpg" alt="" /></li>
            </ul>
        </div><!--.banner-content-->
    </div><!--.banner-->
</header><!--header-->

	<div class="clear"></div><!--.clear-->

<nav>
	<div id="menu">
    	<ul>
        	<li id="home"			
			<?php
			if (is_page('Home'))
				{
					echo "class=\"home-current\"";
				} 
			?>><a href="<?php bloginfo('url'); ?>/home" class="home">Home</a></li>                
            
            <li id="blog"			
			<?php
			if ($wp_query->is_posts_page || is_single() || is_category() || is_archive() || is_search() || is_author())
				{
					echo "class=\"blog-current\"";
				} 
			?>><a href="<?php bloginfo('url'); ?>/blog" class="blog">Blog</a></li>
            
            <li id="portfolio"			
			<?php
			if (is_page('Portfolio') || is_page('silenthunters'))
				{
					echo "class=\"portfolio-current\"";
				} 
			?>><a href="<?php bloginfo('url'); ?>/portfolio" class="portfolio">Portfolio</a></li>
            
            <li id="about"			
			<?php
			if (is_page('About'))
				{
					echo "class=\"about-current\"";
				} 
			?>><a href="<?php bloginfo('url'); ?>/about" class="about">About</a></li>
            
            <li id="contact"			
			<?php
			if (is_page('Contact'))
				{
					echo "class=\"contact-current\"";
				} 
			?>><a href="<?php bloginfo('url'); ?>/contact" class="contact">Contact</a></li>
            
            <li id="extras"			
			<?php
			if (is_page('Extras'))
				{
					echo "class=\"extras-current\"";
				} 
			?>><a href="<?php bloginfo('url'); ?>/extras" class="extras">Extras</a></li>
        </ul>
        
       <div id="social-media" class="right">
       
       </div><!--#socila-media-->
        
    </div><!--#menu-->
</nav><!--nav-->

	<div class="clear"></div><!--.clear-->

<div id="container">