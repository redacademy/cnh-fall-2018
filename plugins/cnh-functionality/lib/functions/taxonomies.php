<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

// Register Custom Taxonomy
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
