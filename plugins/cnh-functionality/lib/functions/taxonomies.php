<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

// Register Custom Taxonomy for Programs
function cnh_program_types() {

	$labels = array(
		'name'                       => 'Program types',
		'singular_name'              => 'Program type',
		'menu_name'                  => 'Program Type',
		'all_items'                  => 'All Program Types',
		'parent_item'                => 'Parent Program Type',
		'parent_item_colon'          => 'Parent Program Type:',
		'new_item_name'              => 'New Program Type Name',
		'add_new_item'               => 'Add New Program Type',
		'edit_item'                  => 'Edit Program Type',
		'update_item'                => 'Update Program Type',
		'view_item'                  => 'View Program Type',
		'separate_items_with_commas' => 'Separate program types with commas',
		'add_or_remove_items'        => 'Add or remove program types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Program Types',
		'search_items'               => 'Search Program Types',
		'not_found'                  => 'Program Type Not Found',
		'no_terms'                   => 'No Program Type',
		'items_list'                 => 'Program Types List',
		'items_list_navigation'      => 'Program Types List Navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'program_type', array( 'program' ), $args );

}
add_action( 'init', 'cnh_program_types', 0 );

// Register Custom Taxonomy for Services
function cnh_service_types() {

	$labels = array(
		'name'                       => 'Services Types',
		'singular_name'              => 'Service Type',
		'menu_name'                  => 'Service Type',
		'all_items'                  => 'All Service Types',
		'parent_item'                => 'Parent Service Type',
		'parent_item_colon'          => 'Parent Service Type:',
		'new_item_name'              => 'New Service Type Name',
		'add_new_item'               => 'Add New Service Type',
		'edit_item'                  => 'Edit Service Type',
		'update_item'                => 'Update Service Type',
		'view_item'                  => 'View Service Type',
		'separate_items_with_commas' => 'Separate service types with commas',
		'add_or_remove_items'        => 'Add or remove service types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Service Types',
		'search_items'               => 'Search Service Types',
		'not_found'                  => 'Service Type Not Found',
		'no_terms'                   => 'No service types',
		'items_list'                 => 'Service Types list',
		'items_list_navigation'      => 'Service Types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'service_type', array( 'service' ), $args );

}
add_action( 'init', 'cnh_service_types', 0 );

// Register Custom Taxonomy for Opportunities
function cnh_opportunity_types() {

	$labels = array(
		'name'                       => 'Opportunities Types',
		'singular_name'              => 'Opportunity Type',
		'menu_name'                  => 'Opportunity Type',
		'all_items'                  => 'All Opportunity Types',
		'parent_item'                => 'Parent Opportunity Type',
		'parent_item_colon'          => 'Parent Opportunity Type:',
		'new_item_name'              => 'New Opportunity Type Name',
		'add_new_item'               => 'Add New Opportunity Type',
		'edit_item'                  => 'Edit Opportunity Type',
		'update_item'                => 'Update Opportunity Type',
		'view_item'                  => 'View Opportunity Type',
		'separate_items_with_commas' => 'Separate opportunity types with commas',
		'add_or_remove_items'        => 'Add or remove opportunity types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Opportunity Types',
		'search_items'               => 'Search Opportunity Types',
		'not_found'                  => 'Opportunity Type Not Found',
		'no_terms'                   => 'No opportunity types',
		'items_list'                 => 'Opportunity Types list',
		'items_list_navigation'      => 'Opportunity Types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'opportunity_type', array( 'opportunity' ), $args );

}
add_action( 'init', 'cnh_opportunity_types', 0 );



