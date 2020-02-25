<?php



// enqueue its script anyway.
add_action('wp_enqueue_scripts', 'script_fix', 100);
function script_fix()
{
    wp_dequeue_script('parent_theme_script_handle');
    wp_enqueue_script('child_theme_script_handle', get_stylesheet_directory_uri().'/js/script.js', array('jquery'));
}