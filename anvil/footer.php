<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the id=main div and all content after
 */
?>

	</section><!-- #main -->

	<footer class="site-footer" role="contentinfo">
		
		<div class="row">
		
			<div class="columns-12 site-info text-center">

				<?php //do_action( 'forge_saas_credits' ); ?>	

				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'items_wrap' => '<ul id="footer-nav" class="nav menu">%3$s</ul>' ) ); ?>

		
				<p><small>&copy; <?php echo date('Y'); ?> Forge and Smith. All rights reserved. Design and development by <a href="http://forgeandsmith.com/">Forge and Smith</a>. Powered by Anvil</small></p>
				
			</div><!-- .site-info -->

		</div>

	</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>