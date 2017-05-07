<?php
function majak_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/majak.css', [], $ver, 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/majak.js', [], $ver, true); 
}

add_action('wp_enqueue_scripts', 'majak_script_enqueue');

function majak_theme_setup() {
    
    add_theme_support('menus');
    
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer  Navigation');
}

add_action('init', 'majak_theme_setup');