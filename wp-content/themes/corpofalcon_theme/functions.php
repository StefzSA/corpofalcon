<?php
//Constant definitions
define("PARTS_DIR", 'wp-content\themes\corpofalcon_theme\templates\template-parts');
define("TEMPLATES_DIR", 'wp-content\themes\corpofalcon_theme\templates');
define("INCLUDES_DIR", 'wp-content\themes\corpofalcon_theme\includes');

// frontend script & style
function assets_load_header_top() {
	wp_enqueue_style('tailwind-css', get_template_directory_uri() .'/resources/css/tailwind/output.css');
	wp_enqueue_style('fontawesome6', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
	wp_enqueue_style('Font Include', get_template_directory_uri() .'/resources/css/font-include.css');
}

function assets_load_header_bottom() {
	wp_enqueue_script('jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js');
}

function assets_load_footer(){
	
}
add_action('wp_enqueue_scripts', 'assets_load_header_top');
add_action('wp_enqueue_scripts', 'assets_load_header_bottom');
add_action('wp_footer', 'assets_load_footer');


include(INCLUDES_DIR . '/inc.megamenu_themes.php');