<?php

// add_action('init', 'cdltbisou_header_scripts');

// Load HTML5 Blank scripts (header.php)
add_action('init', 'html5blank_header_scripts');
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

      wp_register_script('conditionizr', get_template_directory_uri() . '/js/src/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/src/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('cdltbisou_app', get_template_directory_uri() . '/js/build/app.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('cdltbisou_app'); // Enqueue it!
    }
}


// Load HTML5 Blank styles
add_action('wp_enqueue_scripts', 'cdltbisou_styles');
function cdltbisou_styles()
{
    wp_register_style('cdltbisou', get_template_directory_uri() . '/css/build/main.min.css', array(), '1.0', 'all');
    wp_enqueue_style('cdltbisou'); // Enqueue it!
}

// Load HTML5 Blank conditional scripts
add_action('wp_print_scripts', 'html5blank_conditional_scripts');
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Register HTML5 Blank Navigation
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}
