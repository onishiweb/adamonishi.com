<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<title><?php wp_title(); ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

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

			<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

				<article role="main" <?php post_class(); ?>>
					<header>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="byline">
							Posted on <time><?php echo get_the_date(); ?></time>, in <?php the_category(' and '); ?>
						</p>
					</header>

					<?php if( is_single() ): ?>
						<?php the_content(); ?>
					<?php else: ?>
						<p class="excerpt"><?php the_excerpt(); ?></p>
						<p class="read-more"><a href="<?php the_permalink(); ?>">Read full post &raquo;</a></p>
					<?php endif; ?>
				</article>

			<?php endwhile; endif; ?>

			<nav class="page-nav clearfix">
				<?php if( is_single() ): ?>
				<div class="align-left">
						<?php previous_post_link( '%link', '&laquo; previous post' ); ?>
					</div>
					<div class="align-right">
						<?php next_post_link( '%link', 'next post &raquo;'); ?>
					</div>
				<?php else: ?>
					<div class="align-left">
						<?php next_posts_link( '&laquo; previous posts'); ?>
					</div>
					<div class="align-right">
						<?php previous_posts_link( 'next posts &raquo;' ); ?>
					</div>
				<?php endif; ?>
			</nav>
			
		</div>

		<footer class="global-footer">
			<div class="container clearfix">
				<div class="footer-col">
					<h2>Buy now!</h2>
					<a href="http://www.amazon.co.uk/gp/product/1430259140/ref=as_li_ss_il?ie=UTF8&camp=1634&creative=19450&creativeASIN=1430259140&linkCode=as2&tag=adamonishicom-21" class="book-advert">
						<img border="0" src="http://ws-eu.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=1430259140&Format=_SL250_&ID=AsinImage&MarketPlace=GB&ServiceVersion=20070822&WS=1&tag=adamonishicom-21" >
						Buy Pro WordPress Theme Development on&nbsp;Amazon
					</a>
					<img src="http://ir-uk.amazon-adsystem.com/e/ir?t=adamonishicom-21&l=as2&o=2&a=1430259140" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
				</div>
				<div class="footer-col">
					<h2>Find me on&hellip;</h2>
					<?php
						$args = array(
							'theme_location' => 'external-links',
							'container' => '',
							'menu_class' => 'menu',
						);
					
						wp_nav_menu( $args );
					?>
					<h2>Other projects&hellip;</h2>
					<?php
						$args = array(
							'theme_location' => 'other-projects',
							'container' => '',
							'menu_class' => 'menu',
						);
					
						wp_nav_menu( $args );
					?>
				</div>
			</div>		
		</footer>

		<?php wp_footer(); ?>
		
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-33181687-1', 'adamonishi.com');
			ga('send', 'pageview');
		</script>
	</body>
</html>
