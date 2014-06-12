<a name="carousel"></a><h2>Carousel</h2>
Documentation: <a href="http://bxslider.com/examples/carousel-demystified">http://bxslider.com/examples/carousel-demystified</a>
<br /><br />

<div class="carousel">
	<div class="slide"><a href="#"><img src="http://placehold.it/200x200&text=FooBar1"><div class="overlay"></div></a></div>
	<div class="slide"><img src="http://placehold.it/200x200&text=FooBar2"></div>
	<div class="slide"><img src="http://placehold.it/200x200&text=FooBar3"></div>
	<div class="slide"><img src="http://placehold.it/200x200&text=FooBar4"></div>
	<div class="slide"><img src="http://placehold.it/200x200&text=FooBar5"></div>
	<div class="slide"><img src="http://placehold.it/200x200&text=FooBar6"></div>
	<div class="slide"><img src="http://placehold.it/200x200&text=FooBar7"></div>
	<div class="slide"><img src="http://placehold.it/200x200&text=FooBar8"></div>
	<div class="slide"><img src="http://placehold.it/200x200&text=FooBar9"></div>
</div>

<h3>How its done:</h3>
<h4>1. Set up some content like this</h4>
<pre>
	<code>
&lt;div class=&quot;carousel&quot;&gt;
	&lt;div class=&quot;slide&quot;&gt;&lt;img src=&quot;http://placehold.it/350x150&amp;text=FooBar1&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;slide&quot;&gt;&lt;img src=&quot;http://placehold.it/350x150&amp;text=FooBar2&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;slide&quot;&gt;&lt;img src=&quot;http://placehold.it/350x150&amp;text=FooBar3&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;slide&quot;&gt;&lt;img src=&quot;http://placehold.it/350x150&amp;text=FooBar4&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;slide&quot;&gt;&lt;img src=&quot;http://placehold.it/350x150&amp;text=FooBar5&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;slide&quot;&gt;&lt;img src=&quot;http://placehold.it/350x150&amp;text=FooBar6&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;slide&quot;&gt;&lt;img src=&quot;http://placehold.it/350x150&amp;text=FooBar7&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;slide&quot;&gt;&lt;img src=&quot;http://placehold.it/350x150&amp;text=FooBar8&quot;&gt;&lt;/div&gt;
	&lt;div class=&quot;slide&quot;&gt;&lt;img src=&quot;http://placehold.it/350x150&amp;text=FooBar9&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
	</code>
</pre>

<h4>2. Copy jquery.bxslider.js from the code-blocks/scripts into your anvil/scripts folder</h4>

<h4>3. Copy this code into your anvil functions.php, it goes in the "Enqueue Scripts" > "Register Scripts" section:</h4>
<pre>
<code>
	wp_register_script( 'bxcarousel', get_stylesheet_directory_uri() . '/scripts/jquery.bxslider.js','jquery','',true );
	wp_enqueue_script('bxcarousel');
</code>
</pre>

<h4>4. Initialize the script in document ready of site.js:</h4>
<pre>
	<code>
$('.carousel').bxSlider({
	slideWidth: 200,
	minSlides: 1,
	maxSlides: 5, /* set this the same as the minSlides to have it locked */
	slideMargin: 0,
	pager: false,
	infiniteLoop: false
});
	</code>
</pre>


<script>
	jQuery(document).ready(function($) {
		 $('.carousel').bxSlider({
			slideWidth: 200,
			minSlides: 1,
			maxSlides: 5, /* set this the same as the minSlides to have it locked */
			slideMargin: 0,
			pager: false,
			infiniteLoop: false
		  });
	});
</script>