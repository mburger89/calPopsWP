<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package calPops
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheet.css" media="screen" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'calpops' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="headerSS">
		<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
		</div>
		<div class="site-branding">
		<!--<h6>California POPS Orchestra</h6> replaced by image-->
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'calpops' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?><!-- site nav -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
