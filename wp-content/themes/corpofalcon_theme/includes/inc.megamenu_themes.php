<?php
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
