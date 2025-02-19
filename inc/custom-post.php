<?php



/* --------------About Me----------------- */

if(function_exists('register_post_type')) {
		register_post_type('aboutme', array(
			'labels' => array(
				'name' => __('About Me', 'themesbazar_aboutme'),
				'menu_name' => __('About Me', 'themesbazar_aboutme'),
				'add_new' => __('Add New Info', 'themesbazar_aboutme'),
				'add_new_item' => __('Add New Info', 'themesbazar_aboutme'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-businessperson',
			'supports' => array('title')
		   ));
	    }
	    
		
	/* --------------SKill----------------- */

if(function_exists('register_post_type')) {
		register_post_type('skill', array(
			'labels' => array(
				'name' => __('Skill', 'themesbazar_aboutme'),
				'menu_name' => __('Skill', 'themesbazar_aboutme'),
				'add_new' => __('Add New Info', 'themesbazar_aboutme'),
				'add_new_item' => __('Add New Info', 'themesbazar_aboutme'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-admin-tools',
			'supports' => array('title')
		   ));
	    }
	    
	

	/**
 * Post Type: Educational Info.
 */
	
function educational_themesbazar() {
	$labels = [
		"name" => __( "Educational Info", "themesbazar_aboutme" ),
		"singular_name" => __( "Educational", "themesbazar_aboutme" ), 
	];
	$args = [
		"label" => __( "Educational", "themesbazar_aboutme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"has_archive" => "educational",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"hierarchical" => false,
		"rewrite" => [ "slug" => "educational", "with_front" => false ],
		"query_var" => true,
		'menu_icon' => 'dashicons-chart-area',
		"supports" => [ "title"], 
	];

	register_post_type( "educational", $args ); 
}

add_action( 'init', 'educational_themesbazar' );
		
	
   
/**
 * Taxonomy: Educational Categories.
 */

function educational_category_themesbazar() {

	$labels = [
		"name" => __( "Educational Categories", "themesbazar_aboutme" ),
		"singular_name" => __( "Educational Category", "themesbazar_aboutme" ),
	];
	$args = [
		"label" => __( "Educational Categories", "themesbazar_aboutme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'educationalcat', 'with_front' => false, ],

		];
	register_taxonomy( "educationalcat", [ "educational" ], $args );
}
add_action( 'init', 'educational_category_themesbazar' ); 



	/* --------------Notice----------------- */

if(function_exists('register_post_type')) {
		register_post_type('notice', array(
			'labels' => array(
				'name' => __('Notice', 'themesbazar_aboutme'),
				'menu_name' => __('Notice', 'themesbazar_aboutme'),
				'add_new' => __('Add New Info', 'themesbazar_aboutme'),
				'add_new_item' => __('Add New Info', 'themesbazar_aboutme'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-media-text',
			'supports' => array('title','editor',)
		   ));
	    }

		
		
		
	/**
 * Post Type: Career Info.
 */
	
function career_themesbazar() {
	$labels = [
		"name" => __( "Career Info", "themesbazar_aboutme" ),
		"singular_name" => __( "Career", "themesbazar_aboutme" ), 
	];
	$args = [
		"label" => __( "Career", "themesbazar_aboutme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"has_archive" => "career",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"hierarchical" => false,
		"rewrite" => [ "slug" => "career", "with_front" => false ],
		"query_var" => true,
		'menu_icon' => 'dashicons-chart-bar',
		"supports" => [ "title" ], 
	];

	register_post_type( "career", $args ); 
}

add_action( 'init', 'career_themesbazar' );
		
	
   
/**
 * Taxonomy: Career Categories.
 */

function career_category_themesbazar() {

	$labels = [
		"name" => __( "Career Categories", "themesbazar_aboutme" ),
		"singular_name" => __( "Career Category", "themesbazar_aboutme" ),
	];
	$args = [
		"label" => __( "Career Categories", "themesbazar_aboutme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'careercat', 'with_front' => false, ],

		];
	register_taxonomy( "careercat", [ "career" ], $args );
}
add_action( 'init', 'career_category_themesbazar' ); 





	/**
 * Post Type: Project Info.
 */
	
function project_themesbazar() {
	$labels = [
		"name" => __( "Project Info", "themesbazar_aboutme" ),
		"singular_name" => __( "Project", "themesbazar_aboutme" ), 
	];
	$args = [
		"label" => __( "Project", "themesbazar_aboutme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"has_archive" => "project",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"hierarchical" => false,
		"rewrite" => [ "slug" => "project", "with_front" => false ],
		"query_var" => true,
		'menu_icon' => 'dashicons-editor-insertmore',
		"supports" => [ "title",'editor' ], 
	];

	register_post_type( "project", $args ); 
}

add_action( 'init', 'project_themesbazar' );
		
	
   
/**
 * Taxonomy: Career Categories.
 */

function project_category_themesbazar() {

	$labels = [
		"name" => __( "Project Categories", "themesbazar_aboutme" ),
		"singular_name" => __( "Project Category", "themesbazar_aboutme" ),
	];
	$args = [
		"label" => __( "Project Categories", "themesbazar_aboutme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'projectcat', 'with_front' => false, ],

		];
	register_taxonomy( "projectcat", [ "project" ], $args );
}
add_action( 'init', 'project_category_themesbazar' ); 







		
/**
 * Post Type: Video Gallery.
 */
	
function video_themesbazar() {
	$labels = [
		"name" => __( "Video Gallery", "themesbazar_aboutme" ),
		"singular_name" => __( "Video", "themesbazar_aboutme" ), 
	];
	$args = [
		"label" => __( "Video", "themesbazar_aboutme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"has_archive" => "video_gallery",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"hierarchical" => false,
		"rewrite" => [ "slug" => "video_gallery", "with_front" => false ],
		"query_var" => true,
		'menu_icon' => 'dashicons-video-alt3',
		"supports" => [ "title","thumbnail" ], 
	];

	register_post_type( "video_gallery", $args ); 
}

add_action( 'init', 'video_themesbazar' );
		
	
   
/**
 * Taxonomy: Video Gallery Categories.
 */

function video_category_themesbazar() {

	$labels = [
		"name" => __( "Video Categories", "themesbazar_aboutme" ),
		"singular_name" => __( "Video Category", "themesbazar_aboutme" ),
	];
	$args = [
		"label" => __( "Video Categories", "themesbazar_aboutme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'videocat', 'with_front' => false, ],

		];
	register_taxonomy( "videocat", [ "video_gallery" ], $args );
}
add_action( 'init', 'video_category_themesbazar' ); 




/**
 * Post Type: Photo Gallery.
 */
	
function photo_themesbazar() {
	$labels = [
		"name" => __( "Photo Gallery", "themesbazar_aboutme" ),
		"singular_name" => __( "Photo", "themesbazar_aboutme" ), 
	];
	$args = [
		"label" => __( "Photo", "themesbazar_aboutme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"has_archive" => "photo_gallery",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"hierarchical" => false,
		"rewrite" => [ "slug" => "photo_gallery", "with_front" => false ],
		"query_var" => true,
		'menu_icon' => 'dashicons-format-gallery',
		"supports" => [ "title" ], 
	];

	register_post_type( "photo_gallery", $args ); 
}

add_action( 'init', 'photo_themesbazar' );
		
	
   
/**
 * Taxonomy: Photo Gallery Categories.
 */

function photo_category_themesbazar() {

	$labels = [
		"name" => __( "Photo Categories", "themesbazar_aboutme" ),
		"singular_name" => __( "Photo Category", "themesbazar_aboutme" ),
	];
	$args = [
		"label" => __( "Photo Categories", "themesbazar_aboutme" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'photocat', 'with_front' => false, ],

		];
	register_taxonomy( "photocat", [ "photo_gallery" ], $args );
}
add_action( 'init', 'photo_category_themesbazar' ); 

		
		
		
		
		
			/* --------------Testimonial----------------- */

if(function_exists('register_post_type')) {
		register_post_type('testimonial', array(
			'labels' => array(
				'name' => __('Testimonial', 'themesbazar_aboutme'),
				'menu_name' => __('Testimonial', 'themesbazar_aboutme'),
				'add_new' => __('Add New Info', 'themesbazar_aboutme'),
				'add_new_item' => __('Add New Info', 'themesbazar_aboutme'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-testimonial',
			'supports' => array('title')
		   ));
	    }
		
		
				
			/* --------------Team----------------- */

if(function_exists('register_post_type')) {
		register_post_type('our_team', array(
			'labels' => array(
				'name' => __('Team', 'themesbazar_aboutme'),
				'menu_name' => __('Team', 'themesbazar_aboutme'),
				'add_new' => __('Add New Info', 'themesbazar_aboutme'),
				'add_new_item' => __('Add New Info', 'themesbazar_aboutme'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-businesswoman',
			'supports' => array('title')
		   ));
	    }
		
		
					/* --------------Pricing----------------- */

if(function_exists('register_post_type')) {
		register_post_type('pricing', array(
			'labels' => array(
				'name' => __('Pricing', 'themesbazar_aboutme'),
				'menu_name' => __('Pricing', 'themesbazar_aboutme'),
				'add_new' => __('Add New Info', 'themesbazar_aboutme'),
				'add_new_item' => __('Add New Info', 'themesbazar_aboutme'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-editor-kitchensink',
			'supports' => array('title')
		   ));
	    }

		
			/* --------------Brands----------------- */

if(function_exists('register_post_type')) {
		register_post_type('brands', array(
			'labels' => array(
				'name' => __('Brands', 'themesbazar_aboutme'),
				'menu_name' => __('Brands', 'themesbazar_aboutme'),
				'add_new' => __('Add New Info', 'themesbazar_aboutme'),
				'add_new_item' => __('Add New Info', 'themesbazar_aboutme'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-images-alt2',
			'supports' => array('title')
		   ));
	    }

		
function root(){
	$txt = "Theme Developed BY <a href='http://www.bongosoft.org' target='_blank'>BongoSoft.org</a>";
	echo $txt;
}