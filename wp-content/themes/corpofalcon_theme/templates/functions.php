<?php

// frontend script & style
function assets_load() {
	wp_enqueue_style('tailwind-css', get_template_directory_uri() .'/resources/css/tailwind/output.css');
	
}
add_action('wp_enqueue_scripts', 'assets_load');



