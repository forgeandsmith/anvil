<a name="galleries"></a><h2>Galleries</h2>
Documentation: <a href="http://www.advancedcustomfields.com/resources/field-types/gallery/">http://www.advancedcustomfields.com/resources/field-types/gallery/</a>
<br /><br />

<h3>Hardcoded</h3>
<ul class="block-grid-6 gallery">
	<li class=""><img src="http://placehold.it/190x190&text=FooBar1"></li>
	<li class=""><img src="http://placehold.it/190x190&text=FooBar2"></li>
	<li class=""><img src="http://placehold.it/190x190&text=FooBar3"></li>
	<li class=""><img src="http://placehold.it/190x190&text=FooBar4"></li>
	<li class=""><img src="http://placehold.it/190x190&text=FooBar5"></li>
	<li class=""><img src="http://placehold.it/190x190&text=FooBar6"></li>
	<li class=""><img src="http://placehold.it/190x190&text=FooBar7"></li>
	<li class=""><img src="http://placehold.it/190x190&text=FooBar8"></li>
</ul>

<h3>How its done:</h3>
<pre>
	<code>
&lt;ul class=&quot;block-grid-6 gallery&quot;&gt;
	&lt;li class=&quot;&quot;&gt;&lt;img src=&quot;http://placehold.it/190x190&amp;text=FooBar1&quot;&gt;&lt;/li&gt;
	&lt;li class=&quot;&quot;&gt;&lt;img src=&quot;http://placehold.it/190x190&amp;text=FooBar2&quot;&gt;&lt;/li&gt;
	&lt;li class=&quot;&quot;&gt;&lt;img src=&quot;http://placehold.it/190x190&amp;text=FooBar3&quot;&gt;&lt;/li&gt;
	&lt;li class=&quot;&quot;&gt;&lt;img src=&quot;http://placehold.it/190x190&amp;text=FooBar4&quot;&gt;&lt;/li&gt;
	&lt;li class=&quot;&quot;&gt;&lt;img src=&quot;http://placehold.it/190x190&amp;text=FooBar5&quot;&gt;&lt;/li&gt;
	&lt;li class=&quot;&quot;&gt;&lt;img src=&quot;http://placehold.it/190x190&amp;text=FooBar6&quot;&gt;&lt;/li&gt;
	&lt;li class=&quot;&quot;&gt;&lt;img src=&quot;http://placehold.it/190x190&amp;text=FooBar7&quot;&gt;&lt;/li&gt;
	&lt;li class=&quot;&quot;&gt;&lt;img src=&quot;http://placehold.it/190x190&amp;text=FooBar8&quot;&gt;&lt;/li&gt;
&lt;/ul&gt;
	</code>
</pre>

<h3>ACF Gallery</h3>
<?php $gallery_images = get_field('gallery_images');?>
<?php if($gallery_images):?>
	<ul class="block-grid-6 gallery">
	<?php foreach ($gallery_images as $image):?>
		<li>
			<?php
			/*
			Typical information available for each $image:
			Array
			(
			    [id] => 540
			    [alt] => A Movie
			    [title] => Movie Poster: UP
			    [caption] => sweet image
			    [description] => a man and a baloon
			    [url] => http://localhost:8888/acf/wp-content/uploads/2012/05/up.jpg
			    [sizes] => Array
			        (
			            [thumbnail] => http://localhost:8888/acf/wp-content/uploads/2012/05/up-150x150.jpg
			            [medium] => http://localhost:8888/acf/wp-content/uploads/2012/05/up-300x119.jpg
			            [large] => http://localhost:8888/acf/wp-content/uploads/2012/05/up.jpg
			            [post-thumbnail] => http://localhost:8888/acf/wp-content/uploads/2012/05/up.jpg
			            [large-feature] => http://localhost:8888/acf/wp-content/uploads/2012/05/up.jpg
			            [small-feature] => http://localhost:8888/acf/wp-content/uploads/2012/05/up-500x199.jpg
			        )
			 
			)

			 */
			?>
			<a href="<?php echo $image['url']; ?>"><img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
		</li>
	<?php endforeach;?>
	</ul>
<?php endif;?>

<h3>How its done</h3>
<h4>1. Import the acf-gallery.xml file to create custom fields</h4>
<h4>2. Add some gallery images</h4>
<h4>3. Use this code as a basic structure that loads those images:</h4>
<pre>
	<code>
&lt;?php $gallery_images = get_field('gallery_images');?&gt;
&lt;?php if($gallery_images):?&gt;
	&lt;ul class=&quot;block-grid-6 gallery&quot;&gt;
	&lt;?php foreach ($gallery_images as $image):?&gt;
		&lt;li&gt;
			&lt;?php
			/*
			Typical information available for each $image:
			Array
			(
			    [id] =&gt; 540
			    [alt] =&gt; A Movie
			    [title] =&gt; Movie Poster: UP
			    [caption] =&gt; sweet image
			    [description] =&gt; a man and a baloon
			    [url] =&gt; http://localhost:8888/acf/wp-content/uploads/2012/05/up.jpg
			    [sizes] =&gt; Array
			        (
			            [thumbnail] =&gt; http://localhost:8888/acf/wp-content/uploads/2012/05/up-150x150.jpg
			            [medium] =&gt; http://localhost:8888/acf/wp-content/uploads/2012/05/up-300x119.jpg
			            [large] =&gt; http://localhost:8888/acf/wp-content/uploads/2012/05/up.jpg
			            [post-thumbnail] =&gt; http://localhost:8888/acf/wp-content/uploads/2012/05/up.jpg
			            [large-feature] =&gt; http://localhost:8888/acf/wp-content/uploads/2012/05/up.jpg
			            [small-feature] =&gt; http://localhost:8888/acf/wp-content/uploads/2012/05/up-500x199.jpg
			        )
			 
			)

			 */
			?&gt;
			&lt;a href=&quot;&lt;?php echo $image['url']; ?&gt;&quot;&gt;&lt;img src=&quot;&lt;?php echo $image['sizes']['medium']; ?&gt;&quot; alt=&quot;&lt;?php echo $image['alt']; ?&gt;&quot; /&gt;&lt;/a&gt;
		&lt;/li&gt;
	&lt;?php endforeach;?&gt;
	&lt;/ul&gt;
&lt;?php endif;?&gt;
	</code>
</pre>