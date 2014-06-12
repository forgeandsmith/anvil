<?php
/*
 * Template Name: Full Width
 */
get_header(); ?>

	<div class="row content-area">

		<div id="content" class="columns-12 site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'templates/content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

	</div>
		
<?php get_footer(); ?>