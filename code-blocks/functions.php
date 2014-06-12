<?php

/**
 * Enqueue Stylesheets
 */
function code_blocks_stylesheets() {
	wp_enqueue_style( 'code-blocks', get_stylesheet_directory_uri() . '/styles/css/code-blocks.css' );
}
add_action( 'wp_enqueue_scripts', 'code_blocks_stylesheets' );

/**
 * Enqueue Scripts
 */
function code_blocks_scripts() {
	wp_register_script( 'bxcarousel', get_stylesheet_directory_uri() . '/scripts/jquery.bxslider.js','jquery','',true );
	wp_enqueue_script('bxcarousel');

	wp_register_script( 'isotope', get_stylesheet_directory_uri() . '/scripts/isotope.min.js','jquery','',true );
	wp_enqueue_script('isotope');

	wp_register_script( 'reveal', get_stylesheet_directory_uri() . '/scripts/jquery.reveal.js','jquery','',true );
	wp_enqueue_script('reveal');	

	wp_register_script( 'fancybox', get_stylesheet_directory_uri() . '/scripts/jquery.fancybox.js','jquery','',true );
	wp_enqueue_script('fancybox');		
}
add_action( 'wp_enqueue_scripts', 'code_blocks_scripts' );

/* Enqueue syntax highlighting scripts */
function syntax_highlight() {
	wp_enqueue_style( 'highlight-css', get_stylesheet_directory_uri() . '/scripts/highlight/styles/github.css' );
	wp_enqueue_script( 'highlight-js', get_stylesheet_directory_uri() . '/scripts/highlight/highlight.pack.js','',true );
	wp_enqueue_script( 'highlight-init', get_stylesheet_directory_uri() . '/scripts/highlight/init.js','highlight-js','',true );
}
add_action( 'wp_enqueue_scripts', 'syntax_highlight' );