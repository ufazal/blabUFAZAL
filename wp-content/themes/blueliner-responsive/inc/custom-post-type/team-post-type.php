<?php
/* Create Team type */

// let's create the function for the Team
function team_post_type() { 
	// creating (registering) the Team 
	register_post_type( 'team', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this Team
		array( 'labels' => array(
			'name' => __( 'Team', 'blueliner-responsive' ), /* This is the Title of the Group */
			'singular_name' => __( 'Team', 'blueliner-responsive' ), /* This is the individual type */
			'all_items' => __( 'All Teams', 'blueliner-responsive' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'blueliner-responsive' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Team', 'blueliner-responsive' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'blueliner-responsive' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Team', 'blueliner-responsive' ), /* Edit Display Title */
			'new_item' => __( 'New Team', 'blueliner-responsive' ), /* New Display Title */
			'view_item' => __( 'View Team', 'blueliner-responsive' ), /* View Display Title */
			'search_items' => __( 'Search Team', 'blueliner-responsive' ), /* Search Team Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'blueliner-responsive' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'blueliner-responsive' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
		), /* end of arrays */
		'description' => __( 'This is the example Team type', 'blueliner-responsive' ), /* Team Description */
		'public' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'show_ui' => true,
		'query_var' => true,
		'menu_position' => 14, /* this is what order you want it to appear in on the left hand side menu */ 
		'rewrite'	=> array( 'slug' => 'team', 'with_front' => false ), /* you can specify its url slug */
		'has_archive' => 'team', /* you can rename the slug here */
		'capability_type' => 'post',
		'hierarchical' => false,
		/* the next one is important, it tells what's enabled in the post editor */
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register Team */
	
	/* this adds your post categories to your Team type */
	//register_taxonomy_for_object_type( 'category', 'team' );
	/* this adds your post tags to your Team type */
	//register_taxonomy_for_object_type( 'post_tag', 'team' );

	blueliner_flush_rewrite_rules();
	
}

// adding the function to the Wordpress init
add_action( 'init', 'team_post_type');

/*
for more information on taxonomies, go here:
http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

// now let's add Team Categories (these act like categories)
register_taxonomy( 'team_cat', 
	array('team'), /* if you change the name of register_post_type( 'team', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Team Categories', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Team Category', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Team Categories', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Team Categories', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Team Category', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Team Category:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Team Category', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Team Category', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Team Category', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Team Category Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'team-cat' ),
	)
);

// now let's add Team Tags (these act like categories)
register_taxonomy( 'team_tag', 
	array('team'), /* if you change the name of register_post_type( 'team', then you have to change this */
	array('hierarchical' => false,    /* if this is false, it acts like tags */
		'labels' => array(
			'name' => __( 'Team Tags', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Team Tag', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Team Tags', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Team Tags', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Team Tag', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Team Tag:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Team Tag', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Team Tag', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Team Tag', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Team Tag Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
	)
);


/**************************************** 
* Added CMB2 Meta Boxes
*****************************************/

add_action( 'cmb2_init', 'cmb_team_metaboxes' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function cmb_team_metaboxes() {


  // Start with an underscore to hide fields from custom fields list
    $prefix = '_team_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'team_metabox',
        'title'         => __( 'Team Meta Information', 'cmb2' ),
        'object_types'  => array( 'team', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Location', 'cmb2' ),
        'desc'       => __( 'Enter Location', 'cmb2' ),
        'id'         => $prefix . 'location',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Full Name', 'cmb2' ),
        'desc'       => __( 'Enter Full Name', 'cmb2' ),
        'id'         => $prefix . 'full_name',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Designation', 'cmb2' ),
        'desc'       => __( 'Enter Member Designation', 'cmb2' ),
        'id'         => $prefix . 'designation',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Website URL', 'cmb2' ),
        'desc' => __( 'Enter Website URL', 'cmb2' ),
        'id'   => $prefix . 'url',
        'type' => 'text_url',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Facebook URL', 'cmb2' ),
        'desc' => __( 'Enter Facebook URL', 'cmb2' ),
        'id'   => $prefix . 'fb_url',
        'type' => 'text_url',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Twitter URL', 'cmb2' ),
        'desc' => __( 'Enter Twitter URL', 'cmb2' ),
        'id'   => $prefix . 'twitter_url',
        'type' => 'text_url',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Google+ URL', 'cmb2' ),
        'desc' => __( 'Enter Google+ URL', 'cmb2' ),
        'id'   => $prefix . 'google_url',
        'type' => 'text_url',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Linkedin URL', 'cmb2' ),
        'desc' => __( 'Enter Linkedin URL', 'cmb2' ),
        'id'   => $prefix . 'linkedin_url',
        'type' => 'text_url',
    ) );

}
	

?>
