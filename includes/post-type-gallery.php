<?php

if ( ! function_exists( 'gallerama_register_post_type_gallery' ) ) {

	// Register Custom Post Type
	function gallerama_register_post_type_gallery() {

		$labels = array(
			'name'                => _x( 'Galleries', 'Post Type General Name', 'gallerama' ),
			'singular_name'       => _x( 'Gallery', 'Post Type Singular Name', 'gallerama' ),
			'menu_name'           => __( 'Gallery', 'gallerama' ),
			'parent_item_colon'   => __( 'Parent Item:', 'gallerama' ),
			'all_items'           => __( 'All Galleries', 'gallerama' ),
			'view_item'           => __( 'View Item', 'gallerama' ),
			'add_new_item'        => __( 'Add New Gallery', 'gallerama' ),
			'add_new'             => __( 'Add New Gallery', 'gallerama' ),
			'edit_item'           => __( 'Edit Item', 'gallerama' ),
			'update_item'         => __( 'Update Item', 'gallerama' ),
			'search_items'        => __( 'Search Item', 'gallerama' ),
			'not_found'           => __( 'Not found', 'gallerama' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'gallerama' ),
		);
		$args = array(
			'label'               => __( 'gallery', 'gallerama' ),
			'description'         => __( 'Post Type Description', 'gallerama' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes', ),
			'taxonomies'          => array( 'gallery_category', 'gallery_tag' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		register_post_type( 'gallery', $args );

	}

	// Hook into the 'init' action
	add_action( 'init', 'gallerama_register_post_type_gallery', 0 );

}
