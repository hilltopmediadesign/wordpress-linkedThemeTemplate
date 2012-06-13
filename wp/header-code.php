<!-- Main META-->
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">

<!-- Not sure what this does -->
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Include wordpress custom head info -->
<?php wp_head(); ?>

<!-- Links to main CSS (style.css) -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<!--	RSS 2.0 -->
<link rel="alternate" type="application/rss+xml" title="Subscribe to <?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />


<!-- RSS 0.92 -->
<link rel="alternate" type="application/rss xml" title="Subscribe to <?php bloginfo('name'); ?>" href="<?php bloginfo('rss_url'); ?>" />
	
<!-- Atom -->
<link rel="alternate" type="application/rss xml" title="Subscribe to <?php bloginfo('name'); ?>" href=" <?php bloginfo('atom_url'); ?>" />

<!-- Include WP custom header code -->
<?php wp_head(); ?>			


<!-- Javescript Libraries  -->
<script type="text/javascript" src="/lib/js/jquery-1.7.1.min.js"></script>

<!--  Title  -->
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
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
