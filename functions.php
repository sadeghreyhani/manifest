<?php

//  add theme support

function theme_functions() {

    add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo');
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'theme_functions' );

// styles import
function wp_notes_styles() {
	wp_enqueue_style( 'wp_notes-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0' );
	wp_enqueue_style( 'wp_notes-fontawsome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' , array() , '6.2.0' , 'all' );
}

add_action( 'wp_enqueue_scripts', 'wp_notes_styles' );

// javascript import
function wp_notes_scripts() {
	wp_enqueue_script( 'wp_notes-flickity', get_template_directory_uri() . '/assets/src/js/flickity.js', array() , '2.2' , true );
	wp_enqueue_script( 'wp_notes-script', get_template_directory_uri() . '/assets/src/js/main.js', array() , '1.0' , true );
}

add_action( 'wp_enqueue_scripts', 'wp_notes_scripts' );


// menu
function manifest_menus() {
	$locations = array(
		'primary' => "header navbar" , 
		'footer' => "footer navbar"
	);
	register_nav_menus($locations);
}
add_action('init' , 'manifest_menus');



function widget_areas(){
	register_sidebar(array(
		'before_title' => '',
		'after_title' => '',
		'before_widget' => '',
		'after_widget' => '',
		'name' => 'sidebar area',
		'id' => 'sidebar-1',
		'description' => 'sidebar widget area '
	)
);
add_action('widgets_init' , 'widget_areas');
}

?>