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
