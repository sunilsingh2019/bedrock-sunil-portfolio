<?php 
//creating custom blocks
add_action('acf/init', 'nextgen_doncaster_acf_init');

function nextgen_doncaster_acf_init() {
	// check function exists
	if( function_exists('acf_register_block') ) {

		acf_register_block(array(
			'name'				=> 'hero-module',
			'title'				=> __('Hero Module'),
			'description'		=> __('Hero Module for header section'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'hero image', 'header', 'banner' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));

		acf_register_block(array(
			'name'				=> 'home-intro-module',
			'title'				=> __('Home Intro Module'),
			'description'		=> __('Home Intro Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'intro', 'home', 'about' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));

		acf_register_block(array(
			'name'				=> 'services-module',
			'title'				=> __('Services Module'),
			'description'		=> __('Services Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'service', 'services', 'work' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));

		acf_register_block(array(
			'name'				=> 'cta-module',
			'title'				=> __('CTA Module'),
			'description'		=> __('CTA Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'cta', 'call to action', 'banner' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));

    acf_register_block(array(
			'name'				=> 'left-right-image-accordion-module',
			'title'				=> __('Left Right Image Accordion Module'),
			'description'		=> __('Left Right Image Accordion Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'cta', 'call to action', 'banner' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));
    acf_register_block(array(
			'name'				=> 'cards-module',
			'title'				=> __('Cards Module'),
			'description'		=> __('Cards Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'card', 'cards', 'post' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));

    acf_register_block(array(
			'name'				=> 'membership-module',
			'title'				=> __('Membership Module'),
			'description'		=> __('Membership Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'membership', 'member', 'post' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));

		acf_register_block(array(
			'name'				=> 'enquire-form-module',
			'title'				=> __('Enquire Form Module'),
			'description'		=> __('Enquire Form Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'enquire', 'form', 'enquire' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));

		acf_register_block(array(
			'name'				=> 'book-now-module',
			'title'				=> __('Book Now Module'),
			'description'		=> __('Book Now Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'book', 'booking', 'book now' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));

		acf_register_block(array(
			'name'				=> 'news-module',
			'title'				=> __('News Module'),
			'description'		=> __('News Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'News', 'blog', 'content' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));
		acf_register_block(array(
			'name'				=> 'banner-module',
			'title'				=> __('Banner Module'),
			'description'		=> __('Banner Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'banner', 'blog', 'content' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));
		acf_register_block(array(
			'name'				=> 'location-module',
			'title'				=> __('Location Module'),
			'description'		=> __('Location Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'location', 'blog', 'content' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',			
		));
		acf_register_block(array(
			'name'				=> 'profile-module',
			'title'				=> __('Profile Module'),
			'description'		=> __('Profile Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'location', 'blog', 'content' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));
		acf_register_block(array(
			'name'				=> 'tab-module',
			'title'				=> __('Tab Module'),
			'description'		=> __('Tab Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'location', 'blog', 'content' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));


		acf_register_block(array(
			'name'				=> 'left-right-text-image-module',
			'title'				=> __('Left Right Image text Module'),
			'description'		=> __('Left Right Image text Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'location', 'blog', 'content' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));
		acf_register_block(array(
			'name'				=> 'counter-module',
			'title'				=> __('Counter Module'),
			'description'		=> __('Counter Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'location', 'blog', 'content' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));
		acf_register_block(array(
			'name'				=> 'Image-module',
			'title'				=> __('Image Module'),
			'description'		=> __('Image Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'location', 'blog', 'content' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));
		acf_register_block(array(
			'name'				=> 'logo-module',
			'title'				=> __('Logo Module'),
			'description'		=> __('Logo Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'location', 'blog', 'content' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));
		acf_register_block(array(
			'name'				=> 'full-card-module',
			'title'				=> __('Full card Module'),
			'description'		=> __('Full Card Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'location', 'blog', 'content' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));
		acf_register_block(array(
			'name'				=> 'full-card-module',
			'title'				=> __('Full card Module'),
			'description'		=> __('Full Card Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'location', 'blog', 'content' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));
		acf_register_block(array(
			'name'				=> 'get-in-touch-module',
			'title'				=> __('Get in touch Module'),
			'description'		=> __('Get in touch Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'location', 'blog', 'content' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));

		acf_register_block(array(
			'name'				=> 'free-text-module',
			'title'				=> __('Free text Module'),
			'description'		=> __('Free text Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'location', 'blog', 'content' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));

		acf_register_block(array(
			'name'				=> 'step-module',
			'title'				=> __('Step Module'),
			'description'		=> __('Step Module'),
			'render_callback'	=> 'nextgen_doncaster_acf_module_template_block_render_callback',
			'icon'              => 'superhero',
			'keywords'          => array( 'location', 'blog', 'content' ),
			'mode'				=> 'edit',
			'category'			=> 'custom_modules',
			
		));

	}
}