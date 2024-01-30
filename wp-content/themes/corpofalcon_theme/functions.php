<?php
//Constant definitions
define("PARTS_DIR", 'wp-content\themes\corpofalcon_theme\templates\template-parts');

// frontend script & style
function assets_load_header_top()
{
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/resources/css/tailwind/output.css');
    wp_enqueue_style('fontawesome6', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
    wp_enqueue_style('Font Include', get_template_directory_uri() . '/resources/css/font-include.css');
    wp_enqueue_style('Neue Montreal', 'https://fonts.cdnfonts.com/css/montreal');
}

function modalAjax()
{
    wp_enqueue_script('modal', get_template_directory_uri() . '/resources/js/modal.js');
    wp_localize_script('modal', 'modal_ajax', array(
        'url' => admin_url('admin_ajax.php'),
        'nonce' => wp_create_nonce('modal_nonce'),
        'action' => 'modal_controller'
    ));
}

function contact_form()
{
    $nonce = sanitize_text_field($_POST['nonce']);
    if (!wp_verify_nonce($nonce, 'modal_nonce')) {
        die();
    }
    if($_POST['type'] == 1){
        echo apply_shortcodes('[contact-form-7 id="8001c47" title="Contact form 1"]');
    }
    wp_die();
}

function assets_load_footer()
{
    wp_enqueue_script('jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js');
    modalAJax();
}

add_action('wp_ajax_nopriv_modal_controller', 'contact_form');
add_action('wp_ajax_modal_controller', 'contact_form');
add_action('wp_enqueue_scripts', 'assets_load_header_top');
add_action('wp_footer', 'assets_load_footer');

