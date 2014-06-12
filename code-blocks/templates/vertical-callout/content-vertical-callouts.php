<?php
/*
 * The template used for displaying vertical callout sections from a repeater field. It will alternate having the images on the left and right. 
 */
?>

<?php 

// check if the repeater field has rows of data
if( have_rows('callouts') ):
 	$count = 1; 
 	// loop through the rows of data
    while ( have_rows('callouts') ) : the_row();
 ?>
<div class="vertical-callout row">
	<?php 
		$class_right = ""; 
		$class_left = "";
		if($count %2 == 0 ){
			$class_right = "right-6";
			$class_left = "left-6"; 
		}
	?>
	<div class="columns-6 <?php echo $class_right; ?>">
		<?php $image = wp_get_attachment_image_src(get_sub_field('callout_image'), 'large'); ?>				 
		<img src="<?php echo $image[0]; ?>" alt="<?php esc_attr( the_sub_field('title') );?>">
	</div>
	<div class="columns-6 <?php echo $class_left; ?>">
		<h3><?php the_sub_field('title'); ?></h3>
		<p><?php the_sub_field('content'); ?></p>
		<a href="<?php the_sub_field('link'); ?>" class="read-more"><?php the_sub_field('link_text'); ?></a>
	</div>
</div>
<?php
	$count++; 
    endwhile;
 
else :
    // no rows found
endif;

?>
