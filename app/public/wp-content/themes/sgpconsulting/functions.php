<?php
/*
@package: wwd blankslate
*/
require get_template_directory() . '/inc/theme-support.php';

function wwd_load_scripts() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', false, '3.3.1', true);
    wp_enqueue_style('wwd-core-css', get_template_directory_uri() . '/css/style.min.css', array(), '0.0.2', 'all');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.5.0', true);
    wp_enqueue_script('wwd-core-js', get_template_directory_uri() . '/js/core.min.js', array('jquery'), '0.0.2', true);
}
add_action('wp_enqueue_scripts', 'wwd_load_scripts');