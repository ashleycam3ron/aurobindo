<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="<?php bloginfo('language'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#335295">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="copyright" content="Copyright <?php bloginfo('name');?> <?php echo date('Y');?>. All Rights Reserved.">
    <meta name="dc.language" CONTENT="US">
	<meta name="dc.source" CONTENT="<?php echo esc_url( home_url() ) ?>">
	<meta name="dc.title" CONTENT="<?php echo wp_title(); ?>">
	<meta name="dc.subject" CONTENT="<?php bloginfo('description');?>">
	<meta name="dc.creator" content="Ashley Cameron Design">
	<title><?php echo wp_title();?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/favicon.ico" />
    <link rel="icon" sizes="192x192" href="<?php echo get_stylesheet_directory_uri() ?>/images/favicon-192.png">
    <link rel="alternate" href="<?php echo esc_url( home_url() ) ?>" hreflang="en-us" />
    <link rel="image_src" href="<?php echo get_stylesheet_directory_uri() ?>/images/logo.png" />
<!--     <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Lato|Roboto+Condensed" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<h3 class="hidden"><?php bloginfo('name')?> – <?php bloginfo('description');?></h3>

<header id="header" role="banner">
	<div class="container">
		<a class="navbar-brand" href="<?php echo esc_url( home_url() ) ?>">
			<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/Aurobindo-Logo.png" alt="Aurobindo logo">
		</a>
		<nav class="header">
			<a href="#" id="textsize" alt="Increase text size"><span><strong>Font Size</strong></span></a>
			<h2>Header Navigation</h2>
			<?php wp_nav_menu( array('menu' => 'header')); ?></nav>
		<nav class="navbar navbar-default" role="navigation">
			<h2>Primary Navigation</h2>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar top-bar"></span>
	            <span class="icon-bar middle-bar"></span>
	            <span class="icon-bar bottom-bar"></span>
	        </button>
			<div id="navbar" class="navbar-collapse collapse navbar-ex1-collapse">
			<?php wp_nav_menu( array(
				  'menu' => 'primary',
				  'depth' => 3,
				  'container' => false,
				  'menu_class' => 'nav navbar-nav',
				  'walker' => new wp_bootstrap_navwalker())
				); ?>
			</div>
			<?php get_search_form(); ?>
		</nav>
	</div>
</header>
<?php if (!is_front_page()){ get_template_part('/template-parts/banner'); } ?>