<?php
/* Create B-Lab type */

// let's create the function for the B-Lab
function matrix_post_type() { 
	// creating (registering) the B-Lab 
	register_post_type( 'matrix', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this B-Lab
		array( 'labels' => array(
			'name' => __( '49er Matrix', 'blueliner-responsive' ), /* This is the Title of the Group */
			'singular_name' => __( '49er Matrix', 'blueliner-responsive' ), /* This is the individual type */
			'all_items' => __( 'All 49er Matrix', 'blueliner-responsive' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'blueliner-responsive' ), /* The add new menu item */
			'add_new_item' => __( 'Add New 49er Matrix', 'blueliner-responsive' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'blueliner-responsive' ), /* Edit Dialog */
			'edit_item' => __( 'Edit 49er Matrix', 'blueliner-responsive' ), /* Edit Display Title */
			'new_item' => __( 'New 49er Matrix', 'blueliner-responsive' ), /* New Display Title */
			'view_item' => __( 'View 49er Matrix', 'blueliner-responsive' ), /* View Display Title */
			'search_items' => __( 'Search 49er Matrix', 'blueliner-responsive' ), /* Search B-Lab Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'blueliner-responsive' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'blueliner-responsive' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example 49er Matrix type', 'blueliner-responsive' ), /* B-Lab Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'rewrite'	=> array( 'slug' => 'matrix', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'matrix', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'page-attributes', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register B-Lab */
	
	flush_rewrite_rules();
	
}

// adding the function to the Wordpress init
add_action( 'init', 'matrix_post_type');

/*
for more information on taxonomies, go here:
http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

// now let's add B-Lab Categories (these act like categories)
register_taxonomy( 'matrix_pillar', 
	array('matrix'), /* if you change the name of register_post_type( 'blab', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Pillars of 49er Matrix', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Pillar of 49er Matrix', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Pillars of 49er Matrix', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Pillars of 49er Matrix', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Pillar of 49er Matrix', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Pillar of 49er Matrix', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Pillar of 49er Matrix', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Pillar of 49er Matrix', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add new Pillar of 49er Matrix', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Pillar of 49er Matrix', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'matrix-pillar' ),
	)
);

register_taxonomy( 'matrix_mode', 
	array('matrix'), 
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Modes of 49er Matrix', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Mode of 49er Matrix', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Mode of 49er Matrix', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Modes of 49er Matrix', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Mode of 49er Matrix', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Mode of 49er Matrix', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Mode of 49er Matrix', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Mode of 49er Matrix', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Mode of 49er Matrix', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Mode of 49er Matrix', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'matrix-mode' ),
	)
);

register_taxonomy( 'matrix_speciality', 
	array('matrix'), 
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Speciality of 49er Matrix', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Speciality of 49er Matrix', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Speciality of 49er Matrix', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Specialities of 49er Matrix', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Speciality of 49er Matrix', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Speciality of 49er Matrix', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Speciality of 49er Matrix', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Speciality of 49er Matrix', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Speciality of 49er Matrix', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Speciality of 49er Matrix', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'matrix-speciality' ),
	)
);

// now let's add B-Lab Tags (these act like categories)
register_taxonomy( 'matrix_tag', 
	array('matrix'), /* if you change the name of register_post_type( 'blab', then you have to change this */
	array('hierarchical' => false,    /* if this is false, it acts like tags */
		'labels' => array(
			'name' => __( '49er Matrix Tags', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( '49er Matrix Tag', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search 49er Matrix Tags', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All 49er Matrix Tags', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent 49er Matrix Tag', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent 49er Matrix Tag', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit 49er Matrix Tag', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update 49er Matrix Tag', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New 49er Matrix Tag', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New 49er Matrix Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
	)
);


/**************************************** 
* Added CMB2 Meta Boxes
*****************************************/

add_action( 'cmb2_init', 'matrix_repeatable_group_metabox' );

function matrix_repeatable_group_metabox() {

	$prefix = '_matrix_';

	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( '49er Matrix group members', 'cmb2' ),
		'object_types' => array( 'matrix', ),
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'matrix_members',
		'type'        => 'group',
		'description' => __( 'Enter members in column of 49er Matrix', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( '49er Matrix {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add member in column of 49er Matrix', 'cmb2' ),
			'remove_button' => __( 'Remove member in column of 49er Matrix', 'cmb2' ),
			'sortable'      => true, // beta
		),
	) );

	/**
	 * Group fields works the same, except ids only need
	 * to be unique to the group. Prefix is not needed.
	 *
	 * The parent field's id needs to be passed as the first argument.
	 */
	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Title', 'cmb2' ),
		'id'         => 'title',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'        => __( 'Description', 'cmb2' ),
		'description' => __( 'Write a short description for this entry', 'cmb2' ),
		'id'          => 'description',
		'type'        => 'textarea_small',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Image', 'cmb2' ),
		'id'   => 'image',
		'type' => 'file',
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Image Caption', 'cmb2' ),
		'id'   => 'image_caption',
		'type' => 'text',
	) );

}
	

?>
