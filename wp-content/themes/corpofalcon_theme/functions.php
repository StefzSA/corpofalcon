<?php

// frontend script & style
function assets_load() {
	wp_enqueue_style('tailwind-css', get_template_directory_uri() .'/resources/css/tailwind/output.css');
	wp_enqueue_style('fontawesome6', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'assets_load');



