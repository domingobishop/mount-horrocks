<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="initial-scale = 1.0" name="viewport">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116226755-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-116226755-1');
	</script>

    <?php get_template_part( 'partials/wpsc-cart' ); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">

        <?php get_template_part( 'partials/nav' ); ?>

        <?php get_template_part( 'partials/home-banner' ); ?>

        <?php get_template_part( 'partials/page-banner' ); ?>

		<div id="main" class="site-main">