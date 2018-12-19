<?php

add_action( 'after_setup_theme', 'cdltbisou_custom_header_setup' );

if ( ! function_exists ( 'cdltbisou_custom_header_setup' ) ) {
  function cdltbisou_custom_header_setup() {

    add_theme_support('custom-header', array(
      'default-image'     => get_template_directory_uri() . '/img/headers/default.jpg',
      'header-text'     => false,
      'default-text-color'    => '000',
      'width'       => 1000,
      'height'      => 198,
      'random-default'    => false,
      'wp-head-callback'    => $wphead_cb,
      'admin-head-callback'   => $adminhead_cb,
      'admin-preview-callback'  => $adminpreview_cb
    ));
  }
}
