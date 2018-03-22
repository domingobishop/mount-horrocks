<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116226755-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-116226755-1');
	</script>
</head>
<?php if ( is_page( 537 ) ) { echo '<style>.widget_wpsc_shopping_cart{display:block;}</style>'; } else { echo '<style>.widget_wpsc_shopping_cart{display:none;}</style>'; } ?>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">

			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<div class="logo-box"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mh_logo.png"></div>
					<h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
		<?php if ( is_front_page() ) { echo '<div style="display:block;">'; } else { echo '<div style="display:none;">'; } ?>
		<div class="front-page-banner">
			<h1>One of Australia’s ‘Ten Most Exciting Names to Watch’</h1>
			<h3>Max Allen, Decanter Magazine</h3>
		</div>
		<!-- <?php
			if( function_exists('FA_display_slider') ){
			    FA_display_slider(948);
			}
		?> -->
		</div>
		<?php if ( is_front_page() ) { echo '<div style="display:none;">'; } else { echo '<div style="display:block;">'; } ?>
		<header id="masthead" class="site-header" role="banner">
			<!-- <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a> -->


		</header><!-- #masthead -->
		</div>

		<div id="main" class="site-main">