<?php
add_action( 'init', 'services_register_post_type' );
function services_register_post_type() {
	$args = [
		'label'  => esc_html__( 'Services', 'text-domain' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Services', 'sunil_portfolio' ),
			'name_admin_bar'     => esc_html__( 'Service', 'sunil_portfolio' ),
			'add_new'            => esc_html__( 'Add Service', 'sunil_portfolio' ),
			'add_new_item'       => esc_html__( 'Add new Service', 'sunil_portfolio' ),
			'new_item'           => esc_html__( 'New Service', 'sunil_portfolio' ),
			'edit_item'          => esc_html__( 'Edit Service', 'sunil_portfolio' ),
			'view_item'          => esc_html__( 'View Service', 'sunil_portfolio' ),
			'update_item'        => esc_html__( 'View Service', 'sunil_portfolio' ),
			'all_items'          => esc_html__( 'All Services', 'sunil_portfolio' ),
			'search_items'       => esc_html__( 'Search Services', 'sunil_portfolio' ),
			'parent_item_colon'  => esc_html__( 'Parent Service', 'sunil_portfolio' ),
			'not_found'          => esc_html__( 'No Services found', 'sunil_portfolio' ),
			'not_found_in_trash' => esc_html__( 'No Services found in Trash', 'sunil_portfolio' ),
			'name'               => esc_html__( 'Services', 'sunil_portfolio' ),
			'singular_name'      => esc_html__( 'Service', 'sunil_portfolio' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => true,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'menu_icon'           => 'dashicons-heart',
		'supports' => [
			'title',
			'editor',
			'author',
			'thumbnail',
			'page-attributes',
		],
		
		'rewrite' => true
	];

	register_post_type( 'service', $args );
}