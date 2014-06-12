<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

	<div class="row">

		<?php if(has_post_thumbnail()): ?>

			<div class="columns-4">

				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

			</div>

			<div class="columns-8">

		<?php else: ?>

			<div class="columns-12">

		<?php endif; ?>

				<header>
									
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							
					<!-- <p class="post-meta"><?php //echo forge_saas_posted_on();  ?></p> -->
					
				</header> <!-- end article header -->

				<section class="post_content clearfix">
		
					<p>

						<?php if(is_single()): ?>

						<?php the_content(); ?>
						
						<?php else : ?>

							<?php echo excerpt(40); ?>

						<?php endif; ?>	
						
						<?php if( ! is_single() ): ?>
						
						<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
						
						<?php endif; ?>
					</p>

				</section> <!-- end article section -->

				<footer>

					<p class="tags"><?php the_tags('<span class="tags-title">Tags:</span> ', ' ', ''); ?></p>
					
				</footer> <!-- end article footer -->

			</div>

	</div>

</article> <!-- end article -->