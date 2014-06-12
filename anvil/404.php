<?php
/*
 * This is the template that displays on all pages by default.
 */
get_header(); ?>

	<div class="row content-area">

		<div id="content" class="columns-12 site-content" role="main">


				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<header class="entry-header">
						
						<h1 class="entry-title"><?php _e( 'Error! Error!', 'anvil' ); ?></h1>
					
					</header><!-- .entry-header -->

					<div class="entry-content">
					
						<p><?php _e( 'It seems the page you are looking for has been lost!','anvil'); ?></p>

						<p><?php _e( 'Search our site','anvil'); ?></p>

						<form method="get" id="searchform" class="searchform s404" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
							<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php echo esc_attr_x( 'What are you looking for?', 'placeholder', 'forge_saas' ); ?>" />
							<input type="submit" class="submit" id="searchsubmit" value="<?php _e('Go', 'anvil')?>" />
						</form>

						<p><?php _e( 'Or','anvil'); ?></p>

						<a href="<?php bloginfo('url'); ?>" class="button"><?php _e( 'Return Home','anvil'); ?></a>

					</div><!-- .entry-content -->

				</article><!-- #post-## -->


		</div><!-- #content -->

	</div>
		
<?php get_footer(); ?>