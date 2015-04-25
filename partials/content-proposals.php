<?php $proposals = ao_get_speaking_proposals(); 
if( empty($proposals) ) {
	return;
}
?>

<section>
	<h2>My talks</h2>

	<?php foreach( $proposals as $talk ): ?>

		<article>
			<h3><?php echo $talk['title']; ?></h3>
			<?php echo apply_filters( 'the_content', $talk['description'] ); ?>
		</article>

	<?php endforeach; ?>
</section>