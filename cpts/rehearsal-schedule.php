<?php
/*
 *  UCFBands Theme Functionality
 *  CPT: Rehearsal
 *    
 *  @author Jordan Pakrosnis
*/


/**
 * UCFBands CPT: Rehearsal
 * Register CPT
 *
 * @author Jordan Pakrosnis
 */
function ucfbands_cpt_rehearsal() {
	$labels = array(
		'name'                => _x( 'Rehearsals', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Rehearsal', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Rehearsals', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Rehearsals', 'text_domain' ),
		'view_item'           => __( 'View Rehearsal', 'text_domain' ),
		'add_new_item'        => __( 'Add New Rehearsal', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'edit_item'           => __( 'Edit Rehearsal', 'text_domain' ),
		'update_item'         => __( 'Update Rehearsal', 'text_domain' ),
		'search_items'        => __( 'Search Rehearsals', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'ucfbands_rehearsal', 'text_domain' ),
		'description'         => __( 'Rehearsal Schedule with Details', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'revisions', /*'page-attributes',*/ ),
		'taxonomies'          => array( /*'category'*/ ), // Taxonomy field instead!!
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 9,
		'menu_icon'           => 'dashicons-list-view',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'ucfbands_rehearsal', $args );
}
// Hook into the 'init' action
add_action( 'init', 'ucfbands_cpt_rehearsal', 0 );



/**
 * UCFBands CPT: Rehearsal CMB
 * Register Rehearsal CMB
 *
 * @author Jordan Pakrosnis
 */
function ucfbands_rehearsal_metabox() {
	$prefix = '_ucfbands_rehearsal_';

    // Initialize
    $cmb = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => __( 'Rehearsal Details', 'cmb' ),
        'object_types'  => array( 'ucfbands_rehearsal' ),
        'context'       => 'normal',
        'priority'      => 'core',
    ) );

    // Date
    $cmb->add_field( array(
        'name' => 'Date',
        'id'   => $prefix . 'date',
        'type' => 'text_date_timestamp',
        // 'timezone_meta_key' => 'wiki_test_timezone',
        // 'date_format' => 'l jS \of F Y',
    ) );
    
    // Schedule Group
    $group_field_id = $cmb->add_field( array(
        'id'          => $prefix . 'schedule_group',
        'name'        => 'Schedule',
        'type'        => 'group',
        'description' => __( 'Add Schedule List Items', 'cmb' ),
        'options'     => array(
            'group_title'   => __( 'Item {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add Schedule Item', 'cmb' ),
            'remove_button' => __( 'Remove Schedule Item', 'cmb' ),
            'sortable'      => true // beta
        ),
    ) );

    // Schedule Group: Listing Time
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Time',
        'id'   => 'time',
        'type' => 'text_time',
    ) );
    
    // Schedule Group: Listing Thing
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Thing',
        'id'   => 'thing',
        'type' => 'text',
    ) );

    // Schedule Group: Sub-Item
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Sub-Items (Optional)',
        'id'   => 'sub-item',
        'type' => 'text',
        'repeatable' => true,
    ) );

    // Announcements
    $cmb->add_field( array(
        'name'    => 'Announcements',
        'desc'    => 'Click "Add Row" to add multiple announcements',
        'id'      => $prefix . 'announcements',
        'type'    => 'text',
        'repeatable' => true,
    ) );    
    
    // Rehearsal Cancelled
    $cmb->add_field( array(
        'name' => 'Reherasal Cancelled',
        'desc' => 'Check to show rehearsal as cancelled',
        'id'   => $prefix . 'is_rehearsal_cancelled',
        'type' => 'checkbox'
    ) );    
}
add_action( 'cmb2_init', 'ucfbands_rehearsal_metabox' );
