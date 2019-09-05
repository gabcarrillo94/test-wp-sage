<?php
/*
Plugin Name: Custom Post - Product
Description: Add post types for products and products reviews
Author: Gabriel Carrillo
*/
 
// Hook <strong>ts_custom_post_product()</strong> to the init action hook
add_action( 'init', 'ts_custom_post_product' );
 
// The custom function to register a product post type
function ts_custom_post_product() {
 
  // Set the labels, this variable is used in the $args array
  $labels = array(
    'name'               => __( 'Products' ),
    'singular_name'      => __( 'Product' ),
    'add_new'            => __( 'Add New Product' ),
    'add_new_item'       => __( 'Add New Product' ),
    'edit_item'          => __( 'Edit Product' ),
    'new_item'           => __( 'New Product' ),
    'all_items'          => __( 'All Products' ),
    'view_item'          => __( 'View Product' ),
    'search_items'       => __( 'Search Products' ),
    'featured_image'     => 'Logo',
    'set_featured_image' => 'Add Logo'
  );
 
  // The arguments for our post type, to be entered as parameter 2 of register_post_type()
  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our products and product specific data',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'has_archive'       => true,
    'query_var'         => 'product'
  );
 
  // Call the actual WordPress function
  // Parameter 1 is a name for the post type
  // Parameter 2 is the $args array
  register_post_type( 'product', $args);
}
 
// Hook <strong>ts_custom_post_product_reviews()</strong> to the init action hook
add_action( 'init', 'ts_custom_post_product_reviews' );
 
// The custom function to register a product review post type
function ts_custom_post_product_reviews() {
 
  // Set the labels, this variable is used in the $args array
  $labels = array(
    'name'               => __( 'Product Reviews' ),
    'singular_name'      => __( 'Product Review' ),
    'add_new'            => __( 'Add New Product Review' ),
    'add_new_item'       => __( 'Add New Product Review' ),
    'edit_item'          => __( 'Edit Product Review' ),
    'new_item'           => __( 'New Product Review' ),
    'all_items'          => __( 'All Product Reviews' ),
    'view_item'          => __( 'View Product Reviews' ),
    'search_items'       => __( 'Search Product Reviews' )
  );
 
  // The arguments for our post type, to be entered as parameter 2 of register_post_type()
  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our product reviews',
    'public'            => true,
    'menu_position'     => 6,
    'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'has_archive'       => true
  );
 
  // Call the actual WordPress function
  // Parameter 1 is a name for the post type
  // $args array goes in parameter 2.
  register_post_type( 'review', $args);
}