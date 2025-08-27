<?php 

function lapizzeria_styles(){
	//Registar los estilos
	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1' );
	wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');
	
	// Llamar los estilos
	wp_enqueue_style('style');
	wp_enqueue_style('normalize');
}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');

