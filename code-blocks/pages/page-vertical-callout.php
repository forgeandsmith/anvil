<?php
/*
 * Template Name: Vertical Callouts
 */
get_header(); ?>

	<div class="row content-area">

		<div id="content" class="columns-8 site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'templates/content', 'page' ); ?>

				<?php get_template_part('templates/vertical-callout/content', 'vertical-callouts'); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

		<?php get_sidebar(); ?>

	</div>
		
<?php get_footer(); ?>