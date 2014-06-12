<?php 

	/**
	 * Forge Saas functions and definitions
	 *
	 * @package Anvil 2
	 */

	/*
		functions.php

		Functions File for Anvil Theme. 

		This is the functions file for the Anvil theme.
		It functions as an index of include files. 
		The functions folder contains all functions that 
		will be loaded in the functions.php file. 

		Default WordPress functions are included at the top 
		of the file, then includes start after.

		Each set of related functions should be contained 
		in its own file, with a descriptive name. The 
		file should be saved in the functions folder. 

		Each function should be well commented. The start
		of each file should contain a comment that 
		describes the function(s) contained.

		EXAMPLE:
	*/


	/*	FUNCTION NAME 
	*	
	*	Short description of functions
	*
	*/
	//require_once 'functions/file_name.php';



/**
 * Register Nav Menus
 */
register_nav_menus( array(
	'primary' => 'Primary Menu',
	'footer'  => 'Footer Menu',
	'utility' => 'Utility Menu'
));

/**
 * Register Image Sizes
 */
add_image_size ( 'fs-home-featured', 1260, 540, true );

/**
 * Register Sidebars
 */
function forge_widget_sidebars() {
	register_sidebar( array(
		'name' => __('Main Sidebar'),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on pages' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
	register_sidebar( array(
		'name' => __('Blog Sidebar'),
		'id' => 'sidebar-2',
		'description' => __( 'Appears on the blog page' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	));
}
add_action( 'widgets_init', 'forge_widget_sidebars' );


/**
 * Enqueue Stylesheets
 */
function forge_stylesheets() {
	// wp_enqueue_style( 'symbolset-css', get_template_directory_uri() . '/webfonts/ss-social-circle.css');
	wp_enqueue_style( 'symbolset-css', get_template_directory_uri() . '/webfonts/ss-social-regular.css');
	wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/styles/css/main-style.css' );
}
add_action( 'wp_enqueue_scripts', 'forge_stylesheets' );


/**
 * Enqueue Scripts
 */
function forge_scripts() {
	wp_enqueue_script('jquery');

	// Register Scripts
	wp_register_script('flexslider', get_template_directory_uri() . '/scripts/jquery.flexslider.js', array('jquery'), '2.2',true );

	// Enqueue scripts we need
	wp_enqueue_script('site_js', get_template_directory_uri().'/scripts/site-js.js',  array('jquery','flexslider'), '', true );
	wp_enqueue_script('symbolset-js', get_template_directory_uri() . '/webfonts/ss-social.js',  array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'forge_scripts' );








	// INCLUDES //



	/*	BUTTONS & SHORTCODES
	*	
	*	Used to setup Shortcodes, and buttons 
	*	for the WYSIWYG editors.
	*
	*/
	require_once 'functions/buttons_and_shortcodes.php';


	/**
	 *  Custom Excerpts.
	 *	EXAMPLE: <?php echo exerpt(140); ?> <-regular excerpt of the_content();
	 *	EXAMPLE: <?php echo except(140, 'field_name'); ?> <- excerpt of custom field 'field_name' for current post_id
	 *	EXAMPLE: <?php echo except(140, 'field_name', '88'); ?> <- excerpt of custom field 'field_name' for post '88'
	 */
	require_once 'functions/custom-excerpt.php';



	/**
	 * Load custom post types.
	 * and custom taxonomies.
	 */
	require_once 'functions/custom-post-types.php';



	/*	AUTOMATIC FLEXVIDEO
	*	
	*	Automatically add Flex-video around iframe videos
	*
	*/
	require_once 'functions/flexvideo.php';



	/*	GRAVITY FORMS PLACEHOLDERS
	*	
	*	Adds placeholder option to Gravity Forms.
	*
	*/
	require_once 'functions/gf_placeholder.php';



	/*	OPTIONS PAGES 
	*	
	*	Used to register extra options pages
	*
	*/
	require_once 'functions/options_pages.php';



	/*	GALLERY FUNCTIONS
	*	
	*	Used for any functions related to gallery
	* 	orge_gallery_filter function.
	* 	This filter overrides the default WordPress gallery to allow for fancybox JS effect on click. 
	* 
	*/
	require_once 'functions/options_pages.php';



	/*	Theme Support
	*	
	*	Used to add theme support for 
	*	required functionality ( add_theme_support() )	
	*
	*/
	require_once 'functions/theme_support.php';



	/*	Pagination Functions
	*	
	*	Functions pertaining to Pagination
	*
	*	forge_page_navi($before = '', $after = '', $query = '')	
	*
	*	forge_saas_content_nav( $nav_id )
	*
	*/
	require_once 'functions/pagination.php';





	/*	Forge WP Title
	*	
	*	Filters wp_title to print a neat <title> tag based on what is being viewed.
	*
	*	forge_saas_wp_title( $title, $sep ) 
	*
	*/
	require_once 'functions/forge_wp_title.php';


	/*	Forge Terms
	*	
	*	Functions related to listing taxonomy terms
	*
	* 	1. List terms related to a post
	*	forge_list_terms($taxonomy, $format = "link", $postID = NULL )
	*
	*	2. List terms from a taxonomy
	*	function forge_taxonomy_terms($taxonomy, $format = "link")
	*
	*
	*/
	require_once 'functions/forge_terms.php';



	/*	Blog Functions
	*	
	*	Functions related to Blog posts (comments, post meta, etc)
	*
	* 	1. Used as a callback by wp_list_comments() for displaying the comments.
	*	forge_saas_comment( $comment, $args, $depth )
	*
	*	2. Prints HTML with meta information for the current post-date/time and author.
	*	forge_saas_posted_on()
	*
	*
	*/
	require_once 'functions/blog_functions.php';
