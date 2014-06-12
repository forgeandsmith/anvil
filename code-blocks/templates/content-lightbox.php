<a name="lightbox"></a><h2>Lightbox(fancybox)</h2>
Documentation: <a href="http://fancyapps.com/fancybox/">http://fancyapps.com/fancybox/</a>
<br /><br />


<a href="http://ourworkshop.ca/anvil-2/wp-content/uploads/2014/05/13933888249_ae7e8c005a_o-300x199.jpg" class="fancybox" rel="gallery1" title="Sample title 1"><img src="http://placehold.it/350x150&text=FooBar1"></a>
<a href="http://ourworkshop.ca/anvil-2/wp-content/uploads/2014/05/14117242871_730c48acf4_o-300x199.jpg" class="fancybox" rel="gallery1" title="Sample title 1"><img src="http://placehold.it/350x150&text=FooBar1"></a>



<h3>How its done:</h3>
<h4>1. Add a class of "fancybox" to anything you want to show up in a lightbox, like this:</h4>
<pre>
	<code>
&lt;a href=&quot;http://ourworkshop.ca/anvil-2/wp-content/uploads/2014/05/13933888249_ae7e8c005a_o-300x199.jpg&quot; class=&quot;fancybox&quot; title=&quot;Sample title 1&quot;&gt;&lt;img src=&quot;http://placehold.it/350x150&amp;text=FooBar1&quot;&gt;&lt;/a&gt;
	</code>
</pre>

<h4>2. Optionally add a "rel" attribute so that images can be joined into a gallery that cna be cycled through:</h4>
<pre>
	<code>
&lt;a href=&quot;http://ourworkshop.ca/anvil-2/wp-content/uploads/2014/05/13933888249_ae7e8c005a_o-300x199.jpg&quot; class=&quot;fancybox&quot; rel=&quot;gallery1&quot; title=&quot;Sample title 1&quot;&gt;&lt;img src=&quot;http://placehold.it/350x150&amp;text=FooBar1&quot;&gt;&lt;/a&gt;
	</code>
</pre>

<h4>3. Copy jquery.fancybox.js from the code-blocks/scripts into your anvil/scripts folder</h4>

<h4>4. Copy this code into your anvil functions.php, it goes in the "Enqueue Scripts" > "Register Scripts" section:</h4>
<pre>
<code>
	wp_register_script( 'fancybox', get_stylesheet_directory_uri() . '/scripts/jquery.fancybox.js','jquery','',true );
	wp_enqueue_script('fancybox');	
</code>
</pre>

<h4>5. Add this code to your anvil site.js file:</h4>
<pre>
	<code>
$('.fancybox').fancybox();
	</code>
</pre>

<script>
	jQuery(document).ready(function($) {
		$('.fancybox').fancybox();
	});
</script>