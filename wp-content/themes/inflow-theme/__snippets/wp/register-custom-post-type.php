<?php

function inflow_register_post_type() {
    $singular = 'Custom post type name'; // Book
	$plural = 'Custom post type names';  // Books
	
    $slug = str_replace( ' ', '-', strtolower( $singular ) );

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
        'rewrite'             => array('slug' => $slug),
        'menu_icon'           => '',
        'supports'            => array( 'title', 'thumbnail', 'editor' )
    );

    register_post_type( $slug, $args );
}

add_action( 'init', 'inflow_register_post_type' );