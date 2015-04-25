<?php get_header(); ?>

	<div class="container outer">

		<main class="inner align-left" role="main">
			<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

				<article <?php post_class(); ?>>
					<header>
						<h1><?php the_title(); ?></h1>

						<p class="byline">
							Posted on <time><?php echo get_the_date(); ?></time>, in <?php the_category(' and '); ?>
						</p>
					</header>

					<?php the_content(); ?>

					<?php comments_template(); ?>
				</article>

			<?php endwhile; endif; ?>

			<nav class="page-nav clearfix">
				<div class="align-left">
					<?php previous_post_link( '%link', '&laquo; previous post' ); ?>
				</div>
				<div class="align-right">
					<?php next_post_link( '%link', 'next post &raquo;'); ?>
				</div>
			</nav>
		</main>

		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>