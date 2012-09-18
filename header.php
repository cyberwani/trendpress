<!DOCTYPE html>
<!--[if IE 7 ]><html class="no-js ie ie7" lang="nl"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="nl"><![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="nl"><![endif]-->
<!--[if gt IE 9]><html class="no-js ie" lang="nl"><![endif]-->
<!--[if !IE]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name ="viewport" content ="user-scalable=yes, width=device-width" />
		<title><?php wp_title('-'); ?></title>
		<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php bloginfo('name'); ?> RSS Feed" />
		<link rel="apple-touch-icon" type="image/x-icon" href="<?php bloginfo('template_url')?>/assets/img/favicon/apple-touch-icon.png" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_url')?>/assets/img/favicon/favicon.ico" />
		<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="stylesheet" type="text/css" media="print" href="<?php echo get_template_directory_uri() ?>/assets/css/print.css" />
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/script/functions.js"><\/script>')</script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/script/functions.js"></script>
		
		<!-- 
		<link rel="stylesheet/less" type="text/css" media="screen, projections" href="<?php bloginfo('template_url')?>/assets/script/less/styles.less">
		<script src="<?php bloginfo('template_url')?>/assets/script/less/less-1.3.0.min.js" type="text/javascript"></script>
		-->
		<script type="text/javascript" src="<?php bloginfo('template_url')?>/assets/script/modernizr/modernizr.dev.js"></script>
		<?php wp_head();?>
	</head>
	<body <?php body_class('g1140'); ?>>
		<header id="header" class="container">
			<div class="container-inner">
				<div id="logo" class="ninecol">
					<p id="sitename"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></p>
					<p id="description"><?php bloginfo('description'); ?></p>
				</div>
				<nav id="topnav" class="navigation threecol">
					<?php wp_nav_menu( array(
						'theme_location' => 'topnav',
						'depth' => '0' )); 
					?>					
				</nav>
				<div id="search" class="threecol">
					<?php get_search_form(); ?>
				</div>
			</div>
		</header>
		<section id="navigation" class="container">
			<div class="container-inner">
				<nav id="mainnav" class="navigation twelvecol">
					<ul class="sf-menu">
						<?php wp_nav_menu( array(
							'theme_location' => 'mainnav',
							'depth' => '0',
							'container' => '',
							'items_wrap' => '%3$s'
						)); ?>
					</ul>
				</nav>
				<?php if ( is_front_page() ) { ?>
					<!-- Enter code here for custom homepage header -->
				<?php } else { ?>
					<nav id="breadcrumbs" class="twelvecol">
						<?php _e('You are here:','tp') ?>
						<?php if (function_exists('tp_breadcrumbs')) tp_breadcrumbs(); ?>
					</nav>
				<?php } ?>
			</div>
		</section>
		<section id="main" class="container">