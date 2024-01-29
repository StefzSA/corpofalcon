<?php
//Constant definitions
define("GET_DIR", get_template_directory());
define("TEMPLATES_DIR", GET_DIR . '/templates');
define("PARTS_DIR", TEMPLATES_DIR . '/template-parts');
define("INCLUDES_DIR", GET_DIR . '/includes');

/* Debug directories*/
$debug = 0;
if ($debug == 1) {
    echo GET_DIR . '<br>';
    echo TEMPLATES_DIR . '<br>';
    echo PARTS_DIR . '<br>';
    echo INCLUDES_DIR . '<br>';
}

// frontend script & style
function assets_load_header_top()
{
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/resources/css/tailwind/output.css');
    wp_enqueue_style('fontawesome6', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
    wp_enqueue_style('Font Include', get_template_directory_uri() . '/resources/css/font-include.css');
}

function assets_load_header_bottom()
{
    wp_enqueue_script('jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js');
    if (is_page_template('templates/home.php')) {
        wp_enqueue_script('Carousel', get_template_directory_uri() . '/resources/js/carousel.js');
    }

}

function assets_load_footer()
{

}

function plugin_activation($plugin)
{
    if (!function_exists('activate_plugin')) {
        require_once ABSPATH . 'wp-admin/includes/plugin.php';
    }

    if (!is_plugin_active($plugin)) {
        activate_plugin($plugin);
    }
}
function plugins_setup()
{
    plugin_activation('advanced-custom-fields-pro/acf.php');
    plugin_activation('megamenu/megamenu.php');
    include_once(INCLUDES_DIR . '/inc.megamenu_themes.php');
}

add_action('after_setup_theme', 'plugins_setup');
add_action('wp_enqueue_scripts', 'assets_load_header_top');
add_action('wp_enqueue_scripts', 'assets_load_header_bottom');
add_action('wp_footer', 'assets_load_footer');