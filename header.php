<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title><?php wp_title(); ?></title>		

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!--[if lt IE 9]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		
			<div class="container">
				<header class="global-header" role="banner">
				
					<h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="tagline"><?php bloginfo( 'description' ); ?></p>
				</header>

				<nav class="global-navigation" role="navigation">
					<?php
						$args = array(
							'theme_location' => 'main',
							'container' => '',
							'menu_class' => 'menu',
						);
					
						wp_nav_menu( $args );
					?>
				
				</nav>
			</div>