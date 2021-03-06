<?php get_header(); ?>

	<div class="container inner">
		<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

			<article role="main" <?php post_class(); ?>>
				<header>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
					<p class="byline">
						Posted on <time><?php echo get_the_date(); ?></time>, in <?php the_category(' and '); ?>
					</p>
				</header>

				<div class="excerpt"><?php the_excerpt(); ?></div>
				<p class="read-more"><a href="<?php the_permalink(); ?>">Read full post &raquo;</a></p>
			</article>

		<?php endwhile; endif; ?>

		<nav class="page-nav clearfix">
			<div class="align-left">
				<?php next_posts_link( '&laquo; previous posts'); ?>
			</div>
			<div class="align-right">
				<?php previous_posts_link( 'next posts &raquo;' ); ?>
			</div>
		</nav>
	</div>

<?php get_footer(); ?>