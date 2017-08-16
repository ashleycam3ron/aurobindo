<?php function cptui_register_my_cpts() {
	/**
	 * Post Type: Products.
	 */

	$labels = array(
		"name" => __( 'Products', 'aurobindo' ),
		"singular_name" => __( 'Product', 'aurobindo' ),
	);

	$args = array(
		"label" => __( 'Products', 'aurobindo' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "products", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
		'menu_position' => 0
	);

	register_post_type( "products", $args );

	/**
	 * Post Type: Job Listings.
	 */

	$labels = array(
		"name" => __( 'Job Listings', 'aurobindo' ),
		"singular_name" => __( 'Job Listing', 'aurobindo' ),
	);

	$args = array(
		"label" => __( 'Job Listings', 'aurobindo' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "job-listings", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "job-listings", $args );


	/**
	 * Post Type: Home Slider.
	 */

	$labels = array(
		"name" => __( 'Home Slider', 'aurobindo' ),
		"singular_name" => __( 'Home Slider', 'aurobindo' ),
	);

	$args = array(
		"label" => __( 'Home Slides', 'aurobindo' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "home-slides", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "page-attributes" ),
	);

	register_post_type( "home-slider", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );