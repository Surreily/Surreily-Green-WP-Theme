<!DOCTYPE html>

<html>

	<head>
		<title><?php bloginfo('name'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet" type="text/css" media="all" />
		<?php wp_head(); ?>
	</head>
	
	<body>
		
		<!-- Navigation -->
		<nav class="navbar navbar-custom navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
				
					<!-- Menu button for smaller screens -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<!-- Title -->
					<a href="<?php echo home_url(); ?>" class="navbar-brand">
						<?php bloginfo('name'); ?>
					</a>
					
				</div>

				<div class="collapse navbar-collapse" id="main-navbar">
				
					 <?php
					 	// Bootstrap Navwalker menu bar
			            wp_nav_menu( array(
			                'menu'              => 'primary',
			                'theme_location'    => 'primary',
			                'depth'             => 2,
			                'menu_class'        => 'nav navbar-nav navbar-right',
			                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			                'walker'            => new wp_bootstrap_navwalker())
			            );
			        ?>
					
				</div>
			</div>
		</nav>
		
		<div class="max-width body">
			<div class="container main-page">
		
				<!-- Beginning of main page -->