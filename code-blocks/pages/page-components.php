<?php
/*
 * Template Name: Components
 */
get_header(); ?>

	<div class="row content-area">

		<div id="content" class="columns-8 site-content" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<h1>heading 1</h1>

				<h2>heading 2</h2>

				<h3>heading 3</h3>

				<h4>heading 4</h4>

				<h5>heading 5</h5>

				<h6>heading 6</h6>

				<p><a href="#">Default link</a></p>

				<p><a class="button" href="#">Default Button Link</a></p>

				<p><a class="read-more" href="#">Read More Link</a></p>

				<p><strong>Strong paragrph text</strong></p>

				<p><em>Emphasised paragraph text</em></p>

				<p>A paragrph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla molestie erat et dolor lacinia, sit amet varius dui elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla molestie erat et dolor lacinia, sit amet varius dui elementum.</p>

				<ul>
					<li>Unordered list item 1</li>
					<li>Unordered list item 2</li>
					<li>Unordered list item 3</li>
					<li>Unordered list item 4</li>
				</ul>

				<ol>
					<li>Ordered list item 1</li>
					<li>Ordered list item 2</li>
					<li>Ordered list item 3</li>
					<li>Ordered list item 4</li>
				</ol>

				<blockquote>
					<p>Blockquote quote content. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla molestie erat et dolor lacinia, sit amet varius dui elementum.</p>
					<p>Blockquote quote source</p>
				</blockquote>

				<div class="blocks">

					<h3>6-up Grid</h3>

					<ul class="block-grid-6">
						<li>Block item 1</li>
						<li>Block item 2</li>
						<li>Block item 3</li>
						<li>Block item 4</li>
						<li>Block item 5</li>
						<li>Block item 6</li>
						<li>Block item 7<br />extra line of content</li>
						<li>Block item 8</li>
						<li>Block item 9</li>
						<li>Block item 10</li>
						<li>Block item 11</li>
						<li>Block item 12</li>
					</ul>

					<h3>5-up Grid</h3>

					<ul class="block-grid-5">
						<li>Block item 1</li>
						<li>Block item 2</li>
						<li>Block item 3</li>
						<li>Block item 4</li>
						<li>Block item 5</li>
						<li>Block item 6<br />extra line of content</li>
						<li>Block item 7</li>
						<li>Block item 8</li>
						<li>Block item 9</li>
						<li>Block item 10</li>
						<li>Block item 11<br />extra line of content</li>
						<li>Block item 12</li>
					</ul>

					<h3>4-up Grid</h3>

					<ul class="block-grid-4">
						<li>Block item 1</li>
						<li>Block item 2</li>
						<li>Block item 3</li>
						<li>Block item 4</li>
						<li>Block item 5<br />extra line of content</li>
						<li>Block item 6</li>
						<li>Block item 7</li>
						<li>Block item 8</li>
						<li>Block item 9<br />extra line of content</li>
						<li>Block item 10</li>
						<li>Block item 11</li>
						<li>Block item 12</li>
					</ul>

					<h3>3-up Grid</h3>

					<ul class="block-grid-3">
						<li>Block item 1</li>
						<li>Block item 2</li>
						<li>Block item 3</li>
						<li>Block item 4<br />extra line of content</li>
						<li>Block item 5</li>
						<li>Block item 6</li>
						<li>Block item 7<br />extra line of content</li>
						<li>Block item 8</li>
						<li>Block item 9</li>
						<li>Block item 10<br />extra line of content</li>
						<li>Block item 11</li>
						<li>Block item 12</li>
					</ul>

					<h3>2-up Grid</h3>

					<ul class="block-grid-2">
						<li>Block item 1</li>
						<li>Block item 2</li>
						<li>Block item 3<br />extra line of content</li>
						<li>Block item 4</li>
						<li>Block item 5<br />extra line of content</li>
						<li>Block item 6</li>
						<li>Block item 7<br />extra line of content</li>
						<li>Block item 8</li>
						<li>Block item 9<br />extra line of content</li>
						<li>Block item 10</li>
						<li>Block item 11<br />extra line of content</li>
						<li>Block item 12</li>
					</ul>

				</div>

			</article><!-- #post-## -->

		</div><!-- #content -->

		<?php get_sidebar(); ?>

	</div>
		
<?php get_footer(); ?>