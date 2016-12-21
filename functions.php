<?php

// Register jquery and style on initialization

add_action('init', 'register_script');
function register_script(){
	wp_register_script( 'jpl_plugin_jquery', plugins_url('/js/plugin.js', __FILE__), array('jquery'), '2.5.1' );
	
	wp_register_style( 'jpl_plugin_style', plugins_url('/style.css', __FILE__), false, '1.0.0', 'all');
}
 
// Use the registered jquery and style above

add_action('wp_enqueue_scripts', 'enqueue_style');
function enqueue_style(){
	wp_enqueue_script('jpl_plugin_jquery');
	
	wp_enqueue_style( 'jpl_plugin_style' );
}