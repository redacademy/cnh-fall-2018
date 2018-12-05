<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type for Programs
function cnh_programs() {

	$labels = array(
		'name'                  => 'Programs',
		'singular_name'         => 'Program',
		'menu_name'             => 'Programs',
		'name_admin_bar'        => 'Program',
		'archives'              => 'Program Archives',
		'attributes'            => 'Program Attributes',
		'parent_item_colon'     => 'Parent Program:',
		'all_items'             => 'All Programs',
		'add_new_item'          => 'Add New Program',
		'add_new'               => 'Add New Program',
		'new_item'              => 'New Program',
		'edit_item'             => 'Edit Program',
		'update_item'           => 'Update Program',
		'view_item'             => 'View Program',
		'view_items'            => 'View Programs',
		'search_items'          => 'Search Program',
		'not_found'             => 'Program Not Found',
		'not_found_in_trash'    => 'Program Not Found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into program',
		'uploaded_to_this_item' => 'Uploaded to this program',
		'items_list'            => 'Programs list',
		'items_list_navigation' => 'Programs list navigation',
		'filter_items_list'     => 'Filter programs list',
	);
	$args = array(
		'label'                 => 'Program',
		'description'           => 'CNH Programs',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-tickets-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'program', $args );

}
add_action( 'init', 'cnh_programs', 0 );

// Register Custom Post Type for Services
function cnh_service() {

	$labels = array(
		'name'                  => 'Services',
		'singular_name'         => 'Service',
		'menu_name'             => 'Services',
		'name_admin_bar'        => 'Service',
		'archives'              => 'Service Archives',
		'attributes'            => 'Service Attributes',
		'parent_item_colon'     => 'Parent Service:',
		'all_items'             => 'All Services',
		'add_new_item'          => 'Add New Service',
		'add_new'               => 'Add New Service',
		'new_item'              => 'New Service',
		'edit_item'             => 'Edit Service',
		'update_item'           => 'Update Service',
		'view_item'             => 'View Service',
		'view_items'            => 'View Services',
		'search_items'          => 'Search Service',
		'not_found'             => 'Service Not found',
		'not_found_in_trash'    => 'Service Not Found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into service',
		'uploaded_to_this_item' => 'Uploaded to this service',
		'items_list'            => 'Services list',
		'items_list_navigation' => 'Services list navigation',
		'filter_items_list'     => 'Filter services list',
	);
	$args = array(
		'label'                 => 'Service',
		'description'           => 'CNH Services',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'cnh_service', 0 );
