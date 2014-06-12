<!-- Isotope Filter Section--> 
<div id="options" class="filters sorting-block" style="clear:both;">

	<label for="people-categories"><?php _e('People Type:','forge_saas'); ?></label>
	<select id="people-type" class="option-set" data-filter-group="people-type">
		<?php 
			$terms = get_terms('people-types');
			$count = count($terms);
			if($count > 0) {
				echo "<option value='' selected>" .__('All','forge_saas') ."</option>";									
				foreach($terms as $term) {
					echo "<option value='.".sanitize_title($term->slug)."'>" . $term->name . "</option>";
				}
			}
		?>
	</select>

	<a id="clear-filters" href="#">Clear Filters</a>

</div>

<!-- Isotope -->
<ul class="isotope-list">
<?php 
	/* 
		This is a sample Isotope build.  
	*/ 
	$args = array(
		'post_type' => 'people',
		'posts_per_page' => -1,
	); 
	$second_query = new WP_Query($args);
	if($second_query->have_posts()): while($second_query->have_posts()): $second_query->the_post();
?>

<?php $terms = get_the_terms($post->ID, 'people-types'); ?>
<?php 
 if ( !empty( $terms ) && !is_wp_error( $terms ) ){
	$classes = ''; 
	foreach($terms as $term ){
		$classes .= ' '.$term->slug;
	}
}
?>

<li class='element text-center <?php echo $classes; ?>'>
	<?php the_post_thumbnail( 'thumbnail' ); ?>
	<h3><?php the_title(); ?></h3>
	<?php 
	if ( !empty( $terms ) && !is_wp_error( $terms ) ){
		foreach($terms as $term){
			echo "<p>".$term->name."</p>"; 
		}
	}
	?>
</li>

<?php endwhile; endif; wp_reset_postdata(); ?>

</ul>
<script>
	jQuery(window).load(function($){

		// initialize Isotope
	var jQuerycontainer = jQuery('.isotope-list'),
	filters = {};

	jQuerycontainer.isotope({
		itemSelector : '.element',
		layoutMode: 'masonry'
	});

	// get all select boxes used for filtering
	var jQueryoptionSets = jQuery('#options .option-set');

	// filter function 
	jQueryoptionSets.change(function(){
 
        var isoFilters = [];     
        // For each select filter
        jQuery(jQueryoptionSets).each(function( index ) {
            var newfilter = jQuery(this).val();
            isoFilters.push( newfilter);                
        });

		var selector = isoFilters.join('');
		jQuerycontainer.isotope({ filter: selector });

		return false;
	});

    // When someone clicks the clear filters button we remove isotope filtering
	jQuery("#clear-filters").click(function(){
		// Clear the select box filters
		jQuery( "div.filters#options select" ).each(function( index ) {
			jQuery(this).val("");					
		});
		// Reset isotope
	    jQuerycontainer.isotope({
	        filter: '*'
	    });
	});

	jQuerycontainer.removeClass("loading"); 
	jQuery('.filter-container, .filters').animate({
		opacity: 1
	}, 1000);

});
	</script>