<?php

/**
 * This file registers the Projects custom post type
 *
 * @package    	Sydney_Toolbox
 * @link        http://athemes.com
 * Author:      aThemes
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


// Register the Projects custom post type
function sydney_toolbox_register_projects() {

	$slug = apply_filters( 'sydney_projects_rewrite_slug', 'projects' );	

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'sydney-toolbox' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'sydney-toolbox' ),
		'menu_name'             => __( 'Projects', 'sydney-toolbox' ),
		'name_admin_bar'        => __( 'Projects', 'sydney-toolbox' ),
		'archives'              => __( 'Item Archives', 'sydney-toolbox' ),
		'parent_item_colon'     => __( 'Parent Item:', 'sydney-toolbox' ),
		'all_items'             => __( 'All Projects', 'sydney-toolbox' ),
		'add_new_item'          => __( 'Add New Project', 'sydney-toolbox' ),
		'add_new'               => __( 'Add New Project', 'sydney-toolbox' ),
		'new_item'              => __( 'New Project', 'sydney-toolbox' ),
		'edit_item'             => __( 'Edit Project', 'sydney-toolbox' ),
		'update_item'           => __( 'Update Project', 'sydney-toolbox' ),
		'view_item'             => __( 'View Project', 'sydney-toolbox' ),
		'search_items'          => __( 'Search Project', 'sydney-toolbox' ),
		'not_found'             => __( 'Not found', 'sydney-toolbox' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'sydney-toolbox' ),
		'featured_image'        => __( 'Featured Image', 'sydney-toolbox' ),
		'set_featured_image'    => __( 'Set featured image', 'sydney-toolbox' ),
		'remove_featured_image' => __( 'Remove featured image', 'sydney-toolbox' ),
		'use_featured_image'    => __( 'Use as featured image', 'sydney-toolbox' ),
		'insert_into_item'      => __( 'Insert into item', 'sydney-toolbox' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'sydney-toolbox' ),
		'items_list'            => __( 'Items list', 'sydney-toolbox' ),
		'items_list_navigation' => __( 'Items list navigation', 'sydney-toolbox' ),
		'filter_items_list'     => __( 'Filter items list', 'sydney-toolbox' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'sydney-toolbox' ),
		'description'           => __( 'A post type for your projects', 'sydney-toolbox' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 26,
		'menu_icon'             => 'dashicons-desktop',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'rewrite' 				=> array( 'slug' => $slug ),		
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'sydney_toolbox_register_projects', 0 );