<a name="tabs"></a><h2>Tabs</h2>
Documentation: 
<br /><br />

<div class="tabs">
	<ul class="slider-thumbs">
		<li>Overview</li> 
		<li>Downloads</li>
		<li>Details</li>
	</ul>
	<div class="flexslider tab-slider">
		<ul class="slides">
			<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
			<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
			officia deserunt mollit anim id est laborum.</li>
			<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>			
		</ul>

	</div>
</div>



<h3>How its done:</h3>
<h4>1. Copy this code into your template:</h4>
<pre>
	<code>
&lt;div class=&quot;tabs&quot;&gt;
	&lt;ul class=&quot;slider-thumbs&quot;&gt;
		&lt;li&gt;Overview&lt;/li&gt; 
		&lt;li&gt;Downloads&lt;/li&gt;
		&lt;li&gt;Details&lt;/li&gt;
	&lt;/ul&gt;
	&lt;div class=&quot;flexslider tab-slider&quot;&gt;
		&lt;ul class=&quot;slides&quot;&gt;
			&lt;li&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/li&gt;
			&lt;li&gt;Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
			officia deserunt mollit anim id est laborum.&lt;/li&gt;
			&lt;li&gt;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/li&gt;			
		&lt;/ul&gt;

	&lt;/div&gt;
&lt;/div&gt;
	</code>
</pre>

<br /><br />
<h4>2. Copy this code into site.js</h4>
<pre>
	<code>
$('.tab-slider').flexslider({
	animation: "fade",
	manualControls: ".slider-thumbs li",
	animationSpeed: 500,
	// controlNav: false,
	directionNav: false,
	slideshow: false
});
	</code>
</pre>
<br /><br />




<script>
	jQuery(document).ready(function($) {
		$('.tab-slider').flexslider({
			animation: "fade",
			manualControls: ".slider-thumbs li",
			animationSpeed: 1,
			// controlNav: false,
			directionNav: false,
			slideshow: false
		});
	});
</script>