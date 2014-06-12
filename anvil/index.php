<?php
/**
 * The main template file.
 */
get_header(); ?>
		
	<div class="row content-area">	

		<div id="content" class="columns-8 site-content" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header">
				
					<!-- blog page title is set in the Page Options panel -->
					<h1 class="entry-title">Blog</h1>
				
				</header><!-- .entry-header -->	

			</article>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'templates/content', get_post_format() );
				?>

			<?php endwhile; ?>
			
			<?php if (function_exists('forge_page_navi')) { // if expirimental feature is active ?>
				
				<?php forge_page_navi(); // use the page navi function ?>
				
			<?php } else { // if it is disabled, display regular wp prev & next links ?>

				<?php forge_saas_content_nav( 'nav-below' ); ?>

			<?php } ?>

		<?php else : ?>

			<?php //get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</div><!-- #content -->

		<?php get_sidebar(); ?>
		
	</div>


<?php get_footer(); ?>