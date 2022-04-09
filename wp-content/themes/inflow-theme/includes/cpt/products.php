<?php

function inflow_register_post_type() {
    $singular = 'Product'; // Book
	$plural = 'Product';  // Books
	
    $slug = str_replace( ' ', '-', strtolower( $plural ) );

    $labels = array(
        'name' 			      => __( $plural, 'inflow' ),
        'singular_name' 	  => __( $singular, 'inflow' ),
        'add_new' 		      => _x( 'Add New', 'inflow', 'inflow' ),
        'add_new_item'  	  => __( 'Add New ' . $singular, 'inflow' ),
        'edit'		          => __( 'Edit', 'inflow' ),
        'edit_item'	          => __( 'Edit ' . $singular, 'inflow' ),
        'new_item'	          => __( 'New ' . $singular, 'inflow' ),
        'view' 			      => __( 'View ' . $singular, 'inflow' ),
        'view_item' 		  => __( 'View ' . $singular, 'inflow' ),
        'search_term'   	  => __( 'Search ' . $plural, 'inflow' ),
        'parent' 		      => __( 'Parent ' . $singular, 'inflow' ),
        'not_found'           => __( 'No ' . $plural .' found', 'inflow' ),
        'not_found_in_trash'  => __( 'No ' . $plural .' in Trash', 'inflow' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'public'              => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'has_archive'         => true,
        // 'rewrite'             => array('slug' => $slug),
        'rewrite'             => array('slug' => 'products'),
        'menu_icon'           => 'dashicons-products',
        'supports'            => array( 'title', 'thumbnail', 'editor', 'excerpt' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'inflow_register_post_type' );

function inflow_register_custom_taxonomy() {
    $singular = 'Product category'; // Book category
	$plural = 'Product categories'; // Book categories
	
    $slug = str_replace( ' ', '-', strtolower( $singular ) );

    $labels = array(
        'name'              => _x( $plural, 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search ' . $plural ),
        'all_items'         => __( 'All ' . $plural ),
        'parent_item'       => __( 'Parent ' . $singular ),
        'parent_item_colon' => __( 'Parent:' . $singular ),
        'edit_item'         => __( 'Edit ' . $singular ),
        'update_item'       => __( 'Update ' . $singular ),
        'add_new_item'      => __( 'Add New ' . $singular ),
        'new_item_name'     => __( 'New ' . $singular ),
        'menu_name'         => __( $plural ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical'  => true,
        'public'        => true,
        'show_admin_column' => true,
	);
	
    register_taxonomy( $slug, 'product', $args );
}
add_action( 'init', 'inflow_register_custom_taxonomy', 0 );