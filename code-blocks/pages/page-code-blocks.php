<?php
/*
 * Template Name: Code Blocks
 */
get_header(); ?>

	<div class="row">

		<div class="columns-12">

			<h3>Table of Contents</h3>

			<ul>
				<li>Double Full Width</li>
				<li><a href="#tabs">Tabs</a></li>
				<li><a href="#accordions">Accordions</a></li>
				<li><a href="#carousel">Carousel</a></li>
				<li><a href="#reveal">Reveal</a></li>
				<li><a href="#galleries">Galleries</a></li>
				<li><a href="#lightbox">Lightbox</a></li>		
				<li><a href="#block-grid">Block Grids</a></li>		
			</ul>

		</div>

	</div>


	<div class="seperator"></div>


	<!-- DOUBLE FULL WIDTH -->
	<?php get_template_part('templates/content','double-full-width'); ?>

	<div class="seperator"></div>

	<div class="row">

		<div class="columns-12">

			<!-- TABS -->
			<?php get_template_part('templates/content','tabs'); ?>

		</div>

	</div>


	<div class="seperator"></div>


	<div class="row">

		<div class="columns-12">

			<!-- ACCORDIONS -->
			<?php get_template_part('templates/content','accordions'); ?>

		</div>

	</div>


	<div class="seperator"></div>


	<div class="row">

		<div class="columns-12">

			<!-- CAROUSEL -->
			<?php get_template_part('templates/content','carousel'); ?>

		</div>

	</div>


	<div class="seperator"></div>


	<!-- REVEAL -->
	<?php get_template_part('templates/content','reveal'); ?>


	<div class="seperator"></div>


	<div class="row">

		<div class="columns-12">

			<!-- GALLERIES -->
			<?php get_template_part('templates/content','galleries'); ?>

		</div>

	</div>


	<div class="seperator"></div>


	<div class="row">

		<div class="columns-12">

			<!-- LIGHTBOX -->
			<?php get_template_part('templates/content','lightbox'); ?>

		</div>

	</div>


	<div class="seperator"></div>


	<div class="row">

		<div class="columns-12">

			<!-- LIGHTBOX -->
			<?php get_template_part('templates/content','block-grid'); ?>

		</div>

	</div>

<?php get_footer(); ?>