<?php
function add_css()
{
    wp_register_style('first', get_template_directory_uri() . '/assets/css/style.css', false, '1.1', 'all');
    wp_enqueue_style('first');
}
add_action('wp_enqueue_scripts', 'add_css');
add_theme_support('menus');
