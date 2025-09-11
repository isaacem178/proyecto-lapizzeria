<?php 

function lapizzeria_setup(){
    add_theme_support('post-thumbnails');
    add_image_size('nosotros', 437, 291, true);
}

add_action('after_setup_theme', 'lapizzeria_setup');

function lapizzeria_styles(){
	//Registar los estilos
	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1' );
	wp_register_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"', array(), '1.0.0' );
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/all.min.css', array('normalize'), '7.0.0' );
    wp_register_style('fa-solid', get_template_directory_uri() . '/css/solid.min.css', array('normalize'), '7.0.0' );
	wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');
	
	// Llamar los estilos
	wp_enqueue_style('style');
	wp_enqueue_style('google_fonts');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('fa-solid');
	wp_enqueue_style('normalize');

    // Registrar JS
    wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);

    // LLamar JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('scripts');
    
}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');

// Creacion de menus
function lapizzeria_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'lapizzeria'),
        'social-menu' => __('Social Menu', 'lapizzeria')
    ));
}

add_action('init', 'lapizzeria_menus');
