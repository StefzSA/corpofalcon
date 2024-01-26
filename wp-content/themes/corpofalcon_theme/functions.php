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
/*
add_action("wpcf7_before_send_mail", "wpcf7_do_something_else");  

function form_redirect($form_ID) {
    $wpcf = WPCF7_ContactForm::get_current();
	
    return $wpcf;
}

*/

function megamenu_add_theme_footer_1706113448($themes) {
    $themes["footer_1706113448"] = array(
        'title' => 'Footer',
        'container_background_from' => 'rgba(51, 51, 51, 0)',
        'container_background_to' => 'rgba(51, 51, 51, 0)',
        'menu_item_background_hover_from' => 'rgba(51, 51, 51, 0)',
        'menu_item_background_hover_to' => 'rgba(51, 51, 51, 0)',
        'menu_item_spacing' => '10px',
        'menu_item_link_font_size' => '16px',
        'menu_item_link_color' => 'rgb(34, 34, 34)',
        'menu_item_link_color_hover' => 'rgb(69, 136, 246)',
        'menu_item_link_padding_top' => '5px',
        'menu_item_link_padding_bottom' => '5px',
        'panel_font_size' => '14px',
        'panel_font_color' => '#666',
        'panel_font_family' => 'inherit',
        'panel_second_level_font_color' => '#555',
        'panel_second_level_font_color_hover' => '#555',
        'panel_second_level_text_transform' => 'uppercase',
        'panel_second_level_font' => 'inherit',
        'panel_second_level_font_size' => '16px',
        'panel_second_level_font_weight' => 'bold',
        'panel_second_level_font_weight_hover' => 'bold',
        'panel_second_level_text_decoration' => 'none',
        'panel_second_level_text_decoration_hover' => 'none',
        'panel_third_level_font_color' => '#666',
        'panel_third_level_font_color_hover' => '#666',
        'panel_third_level_font' => 'inherit',
        'panel_third_level_font_size' => '14px',
        'flyout_link_size' => '14px',
        'flyout_link_color' => '#666',
        'flyout_link_color_hover' => '#666',
        'flyout_link_family' => 'inherit',
        'transitions' => 'on',
        'toggle_background_from' => '#222',
        'toggle_background_to' => '#222',
        'mobile_background_from' => 'rgba(51, 51, 51, 0)',
        'mobile_background_to' => 'rgba(51, 51, 51, 0)',
        'mobile_menu_item_link_font_size' => '16px',
        'mobile_menu_item_link_color' => 'rgb(34, 34, 34)',
        'mobile_menu_item_link_text_align' => 'left',
        'mobile_menu_item_link_color_hover' => 'rgb(69, 136, 246)',
        'mobile_menu_item_background_hover_from' => 'rgba(51, 51, 51, 0)',
        'mobile_menu_item_background_hover_to' => 'rgba(51, 51, 51, 0)',
        'disable_mobile_toggle' => 'on',
        'custom_css' => '#{$wrap} #{$menu} > li.mega-menu-item {
	width:100%;
}
#{$wrap} #{$menu} > li.mega-menu-item > a.mega-menu-link{
	padding-left:0px;
}',
    );
    return $themes;
}
add_filter("megamenu_themes", "megamenu_add_theme_footer_1706113448");

function megamenu_add_theme_default_1706113488($themes) {
    $themes["default_1706113488"] = array(
        'title' => 'Default',
        'container_background_from' => 'rgba(34, 34, 34, 0)',
        'container_background_to' => 'rgba(34, 34, 34, 0)',
        'menu_item_align' => 'right',
        'menu_item_background_hover_from' => 'rgba(51, 51, 51, 0)',
        'menu_item_background_hover_to' => 'rgba(51, 51, 51, 0)',
        'menu_item_link_font_size' => '18px',
        'menu_item_link_color' => 'rgb(85, 85, 85)',
        'menu_item_link_weight' => 'bold',
        'menu_item_link_color_hover' => 'rgb(115, 200, 36)',
        'menu_item_link_weight_hover' => 'bold',
        'panel_font_size' => '14px',
        'panel_font_color' => '#666',
        'panel_font_family' => 'inherit',
        'panel_second_level_font_color' => '#555',
        'panel_second_level_font_color_hover' => '#555',
        'panel_second_level_text_transform' => 'uppercase',
        'panel_second_level_font' => 'inherit',
        'panel_second_level_font_size' => '16px',
        'panel_second_level_font_weight' => 'bold',
        'panel_second_level_font_weight_hover' => 'bold',
        'panel_second_level_text_decoration' => 'none',
        'panel_second_level_text_decoration_hover' => 'none',
        'panel_third_level_font_color' => '#666',
        'panel_third_level_font_color_hover' => '#666',
        'panel_third_level_font' => 'inherit',
        'panel_third_level_font_size' => '14px',
        'flyout_link_size' => '14px',
        'flyout_link_color' => '#666',
        'flyout_link_color_hover' => '#666',
        'flyout_link_family' => 'inherit',
        'transitions' => 'on',
        'toggle_background_from' => 'rgba(34, 34, 34, 0)',
        'toggle_background_to' => 'rgba(34, 34, 34, 0)',
        'mobile_menu_overlay' => 'on',
        'mobile_background_from' => 'rgb(255, 255, 255)',
        'mobile_background_to' => 'rgb(255, 255, 255)',
        'mobile_menu_item_link_font_size' => '16px',
        'mobile_menu_item_link_color' => 'rgb(46, 46, 46)',
        'mobile_menu_item_link_text_align' => 'left',
        'mobile_menu_item_link_color_hover' => 'rgb(69, 136, 246)',
        'mobile_menu_item_background_hover_from' => 'rgba(51, 51, 51, 0)',
        'mobile_menu_item_background_hover_to' => 'rgba(51, 51, 51, 0)',
        'custom_css' => '/** Push menu onto new line **/ 
#{$wrap} { 
    width:100%;
}',
    );
    return $themes;
}
add_filter("megamenu_themes", "megamenu_add_theme_default_1706113488");

/* Start of the register for the local version of the ACF*/ 
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_65b31c1f3f963',
        'title' => 'Home',
        'fields' => array(
            array(
                'key' => 'field_65b31cdc5af78',
                'label' => 'Hero Section',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_65b31c275af74',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_65b31c735af75',
                'label' => 'Hero Description',
                'name' => 'hero_description',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_65b31c915af76',
                'label' => 'Hero Button Text',
                'name' => 'hero_button_text',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_65b31cab5af77',
                'label' => 'Hero Button Link',
                'name' => 'hero_button_link',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_65b31d5f5af79',
                'label' => 'Hero Image',
                'name' => 'hero_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_template',
                    'operator' => '==',
                    'value' => 'templates/home.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    endif;		
    /* End of the register for the local version of the ACF*/ 