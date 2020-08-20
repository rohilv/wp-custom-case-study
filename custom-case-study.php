<?php 
/*
Plugin Name: Custom Case Studies
Plugin URI: https://github.com/rohilv/custom-case-study
Description: This WordPress plugin registers as the 'Case Study' post type.
Version: 1.0
License: GPLv2
Author: Rohil Visariya
Author URI: https://github.com/rohilv
*/

function register_custom_case_study(){

	$labels = array(
		'name'                  => 'Case Studies',
		'singular_name'         => 'Case Study',
		'menu_name'             => 'Case Studies',
		'name_admin_bar'        => 'Case Study',
		'archives'              => 'Case Study Archives',
		'attributes'            => 'Case Study Attributes',
		'parent_item_colon'     => 'Parent Case Study:',
		'all_items'             => 'All Case Studies',
		'add_new_item'          => 'Add New Case Study',
		'add_new'               => 'Add New',
		'new_item'              => 'New Case Study',
		'edit_item'             => 'Edit Case Study',
		'update_item'           => 'Update Case Study',
		'view_item'             => 'View Case Study',
		'view_items'            => 'View Case Studies',
		'search_items'          => 'Search Case Study',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Case Study',
		'uploaded_to_this_item' => 'Uploaded to this Case Study',
		'items_list'            => 'Case Studies list',
		'items_list_navigation' => 'Case Studies list navigation',
		'filter_items_list'     => 'Filter Case Studies list',
    );
    
    
	$rewrite = array(
		'slug'                  => 'case-study',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
    );
    

	$args = array(
		'label'                 => 'Case Study',
		'description'           => 'Case Study Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'case_study', $args );
}

add_action('init', 'register_custom_case_study')

?>