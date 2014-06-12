<?php
/*
 * Template Name: Contact Page
 */
get_header(); ?>

	<div class="row content-area">

		<div id="content" class="columns-8 site-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'templates/content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->

		<aside id="secondary" class="columns-4 widget-area" role="complementary">
			
			<div class="panel">

				<div class="widget">
			
					<h3 class="widget-title">Contact Info</h3>
					
					<ul class="contact-info">
					
						<?php if(get_field('address', 'options')){ ?><li><strong>Address: </strong> <?php the_field('address', 'options'); ?></li><?php } ?>
						<?php if(get_field('phone', 'options')){ ?><li><strong>Phone: </strong> <?php the_field('phone', 'options'); ?></li><?php } ?>
						<?php if(get_field('email', 'options')){ ?><li><strong>Email: </strong> <a href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a></li><?php } ?>
						<?php if(get_field('map_url', 'options')){ ?>
						<li>
							<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php the_field('map_url', 'options'); ?>&amp;iwloc=near&amp;output=embed"></iframe>
					
						</li><?php } ?>
					
					</ul>

				</div>

			</div>
			
		</aside><!-- #secondary -->

	</div>
		
<?php get_footer(); ?>