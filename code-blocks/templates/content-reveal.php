<div class="row">

	<div class="columns-12">	

		<a name="reveal"></a><h2>Reveals</h2>
		Documentation: <a href="http://zurb.com/playground/reveal-modal-plugin">http://zurb.com/playground/reveal-modal-plugin</a>
		<br /><br />

		

		<a href="#" data-reveal-id="myModal">Click Me For A Modal</a> <br />

		<a href="#" data-reveal-id="smallModal">Click Me For A Small Modal</a> <br />

		<a href="#" data-reveal-id="mediumModal">Click Me For A Medium Modal</a> <br />

		<a href="#" data-reveal-id="largeModal">Click Me For A Large Modal</a> <br />

		<a href="#" data-reveal-id="xlargeModal">Click Me For An XLarge Modal</a>

		<h3>How its done:</h3>
		<h4>1. Set up some content like this</h4>
		<pre>
			<code>
		&lt;div id=&quot;myModal&quot; class=&quot;reveal-modal&quot;&gt;
			&lt;div class=&quot;reveal-title&quot;&gt;
				&lt;h1&gt;Modal Title&lt;/h1&gt;
			&lt;/div&gt;
			&lt;p&gt;Any content could go in here.&lt;/p&gt;
			&lt;a class=&quot;close-reveal-modal&quot;&gt;&amp;#215;&lt;/a&gt;
		&lt;/div&gt;
			</code>
		</pre>

		<h4>2. Set up a link to reference that content</h4>
		<pre>
			<code>
		&lt;a href=&quot;#&quot; data-reveal-id=&quot;myModal&quot;&gt;Click Me For A Modal&lt;/a&gt;
			</code>
		</pre>

		<h4>3. Copy jquery.reveal.js from the code-blocks/scripts into your anvil/scripts folder</h4>

		<h4>4. Add the reveal js to the anvil functions.php</h4>
		<pre>
			<code>
			wp_register_script( 'reveal', get_stylesheet_directory_uri() . '/scripts/jquery.reveal.js','jquery','',true );
			wp_enqueue_script('reveal');	
			</code>
		</pre>

		<h4>5. Style it</h4>
		Style code is in code-blocks.scss

	</div>

</div>

<div id="myModal" class="reveal-modal standard">
	<div class="reveal-title">
		<h3>Modal Title</h3>
	</div>
	<div class="reveal-content">
		<p>Any content could go in here.</p>
		<a href="#" class="button">Submit</a>
	</div>
	<a class="close-reveal-modal">&#215;</a>
</div>

<div id="smallModal" class="reveal-modal small">
	<div class="reveal-title">
		<h3>Modal Title</h3>
	</div>
	<div class="reveal-content">
		<p>Any content could go in here.</p>
		<a href="#" class="button">Submit</a>
	</div>
	<a class="close-reveal-modal">&#215;</a>
</div>

<div id="mediumModal" class="reveal-modal medium">
	<div class="reveal-title">
		<h3>Modal Title</h3>
	</div>
	<div class="reveal-content">
		<p>Any content could go in here.</p>
		<a href="#" class="button">Submit</a>
	</div>
	<a class="close-reveal-modal">&#215;</a>
</div>

<div id="largeModal" class="reveal-modal large">
	<div class="reveal-title">
		<h3>Modal Title</h3>
	</div>
	<div class="reveal-content">
		<p>Any content could go in here.</p>
		<a href="#" class="button">Submit</a>
	</div>
	<a class="close-reveal-modal">&#215;</a>
</div>

<div id="xlargeModal" class="reveal-modal xlarge">
	<div class="reveal-title">
		<h3>Modal Title</h3>
	</div>
	<div class="reveal-content">
		<p>Any content could go in here.</p>
		<a href="#" class="button">Submit</a>
	</div>
	<a class="close-reveal-modal">&#215;</a>
</div>