<?php
add_action( 'init', 'sunil_portfolio_services_register_post_type' );
function sunil_portfolio_services_register_post_type() {
	$args = [
		'label'  => esc_html__( 'Services', 'sunil_portfolio' ),
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
		'show_in_graphql' 	  => true,
		'graphql_single_name' => 'Service',
        'graphql_plural_name' => 'Services',
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


add_action( 'init', 'projects' );
function projects() {
	$args = [
		'label'  => esc_html__( 'Projects', 'text-domain' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Projects', 'sunil-portfolio' ),
			'name_admin_bar'     => esc_html__( 'Project', 'sunil-portfolio' ),
			'add_new'            => esc_html__( 'Add Project', 'sunil-portfolio' ),
			'add_new_item'       => esc_html__( 'Add new Project', 'sunil-portfolio' ),
			'new_item'           => esc_html__( 'New Project', 'sunil-portfolio' ),
			'edit_item'          => esc_html__( 'Edit Project', 'sunil-portfolio' ),
			'view_item'          => esc_html__( 'View Project', 'sunil-portfolio' ),
			'update_item'        => esc_html__( 'View Project', 'sunil-portfolio' ),
			'all_items'          => esc_html__( 'All Projects', 'sunil-portfolio' ),
			'search_items'       => esc_html__( 'Search Projects', 'sunil-portfolio' ),
			'parent_item_colon'  => esc_html__( 'Parent Project', 'sunil-portfolio' ),
			'not_found'          => esc_html__( 'No Projects found', 'sunil-portfolio' ),
			'not_found_in_trash' => esc_html__( 'No Projects found in Trash', 'sunil-portfolio' ),
			'name'               => esc_html__( 'Projects', 'sunil-portfolio' ),
			'singular_name'      => esc_html__( 'Project', 'sunil-portfolio' ),
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
		'show_in_graphql' 	  => true,
		'graphql_single_name' => 'Project',
        'graphql_plural_name' => 'Projects',
		'menu_icon'           => 'dashicons-megaphone',
		'supports' => [
			'title',
			'editor',
			'author',
			'thumbnail',
			'custom-fields',
			'page-attributes',
		],
		'taxonomies' => [
			'category',
		],
		'rewrite' => true
	];

	register_post_type( 'project', $args );
}


add_action( 'init', 'sunil_portfolio_testimonial' );
function sunil_portfolio_testimonial() {
	$args = [
		'label'  => esc_html__( 'Testimonials', 'text-domain' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Testimonials', 'sunil-portfolio' ),
			'name_admin_bar'     => esc_html__( 'Testimonial', 'sunil-portfolio' ),
			'add_new'            => esc_html__( 'Add Testimonial', 'sunil-portfolio' ),
			'add_new_item'       => esc_html__( 'Add new Testimonial', 'sunil-portfolio' ),
			'new_item'           => esc_html__( 'New Testimonial', 'sunil-portfolio' ),
			'edit_item'          => esc_html__( 'Edit Testimonial', 'sunil-portfolio' ),
			'view_item'          => esc_html__( 'View Testimonial', 'sunil-portfolio' ),
			'update_item'        => esc_html__( 'View Testimonial', 'sunil-portfolio' ),
			'all_items'          => esc_html__( 'All Testimonials', 'sunil-portfolio' ),
			'search_items'       => esc_html__( 'Search Testimonials', 'sunil-portfolio' ),
			'parent_item_colon'  => esc_html__( 'Parent Testimonial', 'sunil-portfolio' ),
			'not_found'          => esc_html__( 'No Testimonials found', 'sunil-portfolio' ),
			'not_found_in_trash' => esc_html__( 'No Testimonials found in Trash', 'sunil-portfolio' ),
			'name'               => esc_html__( 'Testimonials', 'sunil-portfolio' ),
			'singular_name'      => esc_html__( 'Testimonial', 'sunil-portfolio' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'menu_position'       => 20,
		'show_in_graphql' 	  => true,
		'graphql_single_name' => 'Testimonial',
        'graphql_plural_name' => 'Testimonials',
		'menu_icon'           => 'dashicons-admin-users',
		'supports' => [
			'title',
			'editor',
			'author',
			'thumbnail',
			'trackbacks',
			'custom-fields',
			'comments',
			'revisions',
			'page-attributes',
		],
		
		'rewrite' => true
	];

	register_post_type( 'testimonial', $args );
}