<?php

function immoklte_css_js(){
    wp_enqueue_style('immoklte_main_style', get_stylesheet_uri());
    wp_enqueue_style('immoklte_theme_', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_style('immoklte_theme_clasic', get_template_directory_uri() . '/css/themes/theme-classic.css');
    
    wp_enqueue_style('immoklte_bootstrap', get_template_directory_uri() . '/css/jquery.smartmenus.bootstrap.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/jquery-1.12.3.min.js');
    wp_enqueue_script('js_plugin', get_template_directory_uri() . '/js/plugins.js');
    wp_enqueue_script('smartmenu_plugin', get_template_directory_uri() . '/js/jquery.smartmenus.js');
    wp_enqueue_script('bootstrap_addon', get_template_directory_uri() . '/js/bootstrap/jquery.smartmenus.bootstrap.js');
    wp_enqueue_script('custom_js', get_template_directory_uri() . '/js/custom.js');    
}

add_action('wp_enqueue_scripts', 'immoklte_css_js');

function r_theme_default_function(){
    add_theme_support('title-tag');
    add_theme_support('custom-header', array(
        'default_image' => get_template_directory().'/images/header.png'
    ));
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    // menu register
    register_nav_menus(array(
        'main-menu'=> 'Header Menu',
        'footer-menu'=> 'Footer Menu',
    ));


}

add_action('after_setup_theme', 'r_theme_default_function');
   

