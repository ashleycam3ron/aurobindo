<?php
	function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Job Categories.
	 */

	$labels = array(
		"name" => __( 'Job Categories', 'aurobindo' ),
		"singular_name" => __( 'Job Category', 'aurobindo' ),
	);

	$args = array(
		"label" => __( 'Job Categories', 'aurobindo' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Job Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'job-categories', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "job-categories", array( "job_listings" ), $args );

	/**
	 * Taxonomy: Job Locations.
	 */

	$labels = array(
		"name" => __( 'Job Locations', 'aurobindo' ),
		"singular_name" => __( 'Job Location', 'aurobindo' ),
	);

	$args = array(
		"label" => __( 'Job Locations', 'aurobindo' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Job Locations",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'job-locations', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "job-locations", array( "job_listings" ), $args );

	/**
	 * Taxonomy: Product Categories.
	 */

	$labels = array(
		"name" => __( 'Product Categories', 'aurobindo' ),
		"singular_name" => __( 'Product Category', 'aurobindo' ),
	);

	$args = array(
		"label" => __( 'Product Categories', 'aurobindo' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,
		"label" => "Product Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'product_category', 'with_front' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "product_category", array( "products" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );