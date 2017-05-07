<?php
function majak_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/majak.css', [], $ver, 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/majak.js', [], $ver, true); 
}

add_action('wp_enqueue_scripts', 'majak_script_enqueue');