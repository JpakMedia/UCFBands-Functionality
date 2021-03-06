<?php
/*
 *  UCFBands Theme Functionality
 *  CPT: Staff Member
 *
 *  @author Jordan Pakrosnis
*/


/**
 * UCFBands CPT: Staff Member Registration
 * Register Staff Member
 *
 * @author Jordan Pakrosnis
 */
function ucfbands_cpt_staff() {
	$labels = array(
		'name'                => _x( 'Staff Members', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Staff Member', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Staff', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Staff', 'text_domain' ),
		'view_item'           => __( 'View Staff Member', 'text_domain' ),
		'add_new_item'        => __( 'Add New Staff Member', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Staff Member', 'text_domain' ),
		'update_item'         => __( 'Update Staff Member', 'text_domain' ),
		'search_items'        => __( 'Search Staff', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                => 'staff',
		'with_front'          => true,
		'pages'               => false,
		'feeds'               => false,
	);
	$args = array(
		'label'               => __( 'ucfbands_staff', 'text_domain' ),
		'description'         => __( 'UCF Bands Staff or Faculty Member', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', 'revisions'),
		'taxonomies'          => array(''),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-id-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'ucfbands_staff', $args );
}
// Hook into the 'init' action
add_action( 'init', 'ucfbands_cpt_staff', 0 );
