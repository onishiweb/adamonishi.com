<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php wp_title(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href='http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic|Merriweather+Sans:800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:800' rel='stylesheet' type='text/css'>

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
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<p class="byline">
							Posted on <time><?php echo get_the_date(); ?></time>, in <?php the_category(', '); ?>
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

			<footer class="global-footer">
				
			</footer>
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
		
		<?php wp_footer(); ?>
		
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
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
