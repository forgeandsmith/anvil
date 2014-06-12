	<!-- SLIDER CODE BLOCK -->
	<div class="slideshow-wrapper clearing-container">
				
		<div class="flexslider slider">
			
			<ul class="slides">
			
			<?php while(has_sub_field('slider')): ?>							
				
				<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'fs-home-featured'); ?>								
				
				<li style="
				background-image: url('<?php echo $image[0]; ?>');
				background-repeat: no-repeat;
				background-position: center;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover; 
				">
					<div class="text-container">
																
						<h1><?php the_sub_field('title'); ?></h1>

						<p><?php the_sub_field('content'); ?></p>

						<?php if(get_sub_field('link') && get_sub_field('link_text')): ?>

							<a class="button" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_text'); ?></a>

						<?php endif; ?>

					</div>

				</li>

			<?php endwhile;  ?>
			
			</ul>
			
		</div>
		
	</div>
	<!-- END SLIDER CODE BLOCK -->