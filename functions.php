<?php
function my_styles_scripts_method(){
    // load main style.css
    wp_enqueue_style('main_style', get_stylesheet_uri());
    //load aditional css file
    wp_enqueue_style('default_style', get_template_directory_uri().'/assets/css/default.css');
    wp_enqueue_style('layout_style', get_template_directory_uri().'/assets/css/layout.css');
    wp_enqueue_style('media_queries_style', get_template_directory_uri().'/assets/css/media-queries.css');

	// load scripts
	wp_enqueue_script( 'init.js', get_template_directory_uri() . '/assets/js/init.js',array('jquery'));
	wp_enqueue_script( 'flexslider.js', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', true);
	wp_enqueue_script( 'doubletaplogo.js', get_template_directory_uri() . '/assets/js/doubletaptogo.js', true);
	wp_enqueue_script( 'modernizr.js', get_template_directory_uri() . '/assets/js/modernizr.js', false);
}

add_action( 'wp_enqueue_scripts', 'my_styles_scripts_method' );


