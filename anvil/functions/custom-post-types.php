<?php 
/**
 * Forge Saas Custom Post Types
 *
 * @package Forge Saas
 */

// let's create the function for the custom type
function forge_register_post_types() { 

	// pass in an array of post types. Define their post slug and labels
	$the_post_types = array(
		array( 
			'post_slug' 	=>	'people', 
			'post_label' 	=>	'People', 
			'post_single' 	=>	'Person',
			'rewrite_slug'	=>  'our-people',
			'has_archive'	=>	false,
		),
		array( 
			'post_slug' 	=>	'services', 
			'post_label' 	=>	'Services', 
			'post_single' 	=>	'Service',
			'rewrite_slug'	=>  'our-services',
			'has_archive'	=>	false,
		),
		array( 
			'post_slug' 	=>	'testimonials', 
			'post_label' 	=>	'Testimonials', 
			'post_single' 	=>	'Testimonial',
			'rewrite_slug'	=>  'our-testimonials',
			'has_archive'	=>	false,
		),
		array( 
			'post_slug' 	=>	'careers', 
			'post_label' 	=>	'Careers', 
			'post_single' 	=>	'Career',
			'rewrite_slug'	=>  'our-careers',
			'has_archive'	=>	false,
		)
	); 

	// loop through post type array and register post types
	foreach($the_post_types as $post_type){

		register_post_type( $post_type['post_slug'], /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		 	// let's now add all the options for this post type
			array('labels' => array(
				'name' 					=> __($post_type['post_label'], 'post type general name'), /* This is the Title of the Group */
				'singular_name' 		=> __($post_type['post_single'], 'post type singular name'), /* This is the individual type */
				'add_new' 				=> __('Add New', 'custom post type item'), /* The add new menu item */
				'add_new_item'			=> __('Add New '.$post_type['post_single'].''), /* Add New Display Title */
				'edit'					=> __( 'Edit' ), /* Edit Dialog */
				'edit_item'				=> __('Edit '.$post_type['post_single'].''), /* Edit Display Title */
				'new_item'				=> __('New '.$post_type['post_single']), /* New Display Title */
				'view_item'				=> __('View '.$post_type['post_single']), /* View Display Title */
				'search_items'			=> __('Search '.$post_type['post_single']), /* Search Custom Type Title */ 
				'not_found'				=>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */ 
				'not_found_in_trash'	=> __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
				'parent_item_colon'		=> ''
				), /* end of arrays */
				'public' 				=> true,
				'publicly_queryable'	=> true,
				'exclude_from_search'	=> false,
				'show_ui' 				=> true,
				'query_var' 			=> true,
				'has_archive'			=> $post_type['has_archive'],
				'menu_position'			=> 5, /* this is what order you want it to appear in on the left hand side menu */ 
				'rewrite'				=> array('with_front' => false, 'slug' => $post_type['rewrite_slug']),
				'capability_type'		=> 'post',
				'hierarchical'			=> false,
				/* the next one is important, it tells what's enabled in the post editor */
				'supports'				=> array( 'title', 'editor', 'author', 'thumbnail',  'comments', 'revisions','excerpt')
		 	) /* end of options */
		); /* end of register post type */
		
		
	}

	// array used to register taxonomies for post types. 
	$taxonomy_types = array(
		array(
			'tax_slug'		=>	'people-types',
			'tax_label'		=>	'People Types',
			'tax_single'	=>	'People Type',
			'post_type'		=>	'people',
			'rewrite_slug'	=>	'people-types'
		),
		array(
			'tax_slug'		=>	'service-types',
			'tax_label'		=>	'Service Types',
			'tax_single'	=>	'Service Type',	
			'post_type'		=>	'services',
			'rewrite_slug'	=>	'service-types'
		) 
	
	);

	// loop through $taxonomy_types and register taxonomies. 
	foreach($taxonomy_types as $taxonomy){
		
		register_taxonomy( $taxonomy['tax_slug'], 
	    	array($taxonomy['post_type']), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
	    	array('hierarchical' => true,     /* if this is true it acts like categories */             
	    		'labels' => array(
	    			'name' 				=> __( $taxonomy['tax_label'] ), /* name of the custom taxonomy */
	    			'singular_name' 	=> __( $taxonomy['tax_single'] ), /* single taxonomy name */
	    			'search_items'		=>  __( 'Search '.$taxonomy['tax_label'] ), /* search title for taxomony */
	    			'all_items'			=> __( 'All '.$taxonomy['tax_label'] ), /* all title for taxonomies */
	    			'parent_item'		=> __( 'Parent '.$taxonomy['tax_single'] ), /* parent title for taxonomy */
	    			'parent_item_colon' => __( 'Parent '.$taxonomy['tax_single'].':' ), /* parent taxonomy title */
	    			'edit_item'			=> __( 'Edit '.$taxonomy['tax_single'] ), /* edit custom taxonomy title */
	    			'update_item'		=> __( 'Update '.$taxonomy['tax_single'] ), /* update title for taxonomy */
	    			'add_new_item'		=> __( 'Add New '.$taxonomy['tax_single'] ), /* add new title for taxonomy */
	    			'new_item_name'		=> __( 'New '.$taxonomy['tax_single'].' Name' ) /* name title for taxonomy */
	    		),
	    		'show_ui' 	=> true,
	    		'query_var' => true,
	    		'rewrite'   => array( 'slug' => $taxonomy['rewrite_slug'] ),
	    	)
	    );  
		

	}
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'forge_register_post_types');