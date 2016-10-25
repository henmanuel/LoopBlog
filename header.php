<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta name="viewport" content="width=device-width, minimum-scale=1">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-3.1.0.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/loopController.js"></script>
</head>

<body>

<div class="wrapper">

<header id="barra">
	<div id="plusCont"></div>
	<a href="http://www.loopzone.org"><img src="<?php bloginfo('template_directory'); ?>/images/favicon.png" /></a>
	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
		<input type="text" placeholder="Buscar"  name="s" id="s" />
	</form>
</header>
