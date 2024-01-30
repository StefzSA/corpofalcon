<?php
//Constant definitions
define("GET_DIR", get_template_directory());
define("TEMPLATES_DIR", GET_DIR . '/templates');
define("PARTS_DIR", TEMPLATES_DIR . '/template-parts');
define("INCLUDES_DIR", GET_DIR . '/includes');

//MEGA MENU AND ACF
define( 'THEME_MEGAMENU_STYLES', get_stylesheet_directory() . '/includes/inc.megamenu_themes.php' );
define( 'THEME_ACF', get_stylesheet_directory() . '/includes/acf/' );

/* Debug directories*/
$debug = 0;
if ($debug == 1) {
    echo GET_DIR . '<br>';
    echo TEMPLATES_DIR . '<br>';
    echo PARTS_DIR . '<br>';
    echo INCLUDES_DIR . '<br>';
    echo THEME_MEGAMENU_STYLES . '<br>';
    echo THEME_ACF . '<br>';
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
    include_once(THEME_MEGAMENU_STYLES);
}
function load_theme_acfs( $paths ){
    unset($paths[0]);
    $paths[] = THEME_ACF;
	return $paths;
}

function save_theme_acfs( $path ) {
    return THEME_ACF;
}


add_action('after_setup_theme', 'plugins_setup');
add_filter('acf/settings/save_json', 'save_theme_acfs' );
add_filter('acf/settings/load_json', 'load_theme_acfs' );
add_action('wp_enqueue_scripts', 'assets_load_header_top');
add_action('wp_enqueue_scripts', 'assets_load_header_bottom');
add_action('wp_footer', 'assets_load_footer');