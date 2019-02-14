<?php


add_action('init', 'cdltbisou_widgets_init');
function cdltbisou_widgets_init() {

  // If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Front Page widget area', 'cdltbisou'),
        'description' => __('this is where the main homepage content goes', 'cdltbisou'),
        'id' => 'widget-frontpage-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'cdltbisou'),
        'description' => __('Description for this widget-area...', 'cdltbisou'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

        // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 3', 'cdltbisou'),
        'description' => __('Description for this widget-area...', 'cdltbisou'),
        'id' => 'widget-area-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}


}
