<?php
/* Create Client type */

// let's create the function for the Client
function client_post_type() { 
	// creating (registering) the Client 
	register_post_type( 'client', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this Client
		array( 'labels' => array(
			'name' => __( 'Client', 'blueliner-responsive' ), /* This is the Title of the Group */
			'singular_name' => __( 'Client', 'blueliner-responsive' ), /* This is the individual type */
			'all_items' => __( 'All Clients', 'blueliner-responsive' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'blueliner-responsive' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Client', 'blueliner-responsive' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'blueliner-responsive' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Client', 'blueliner-responsive' ), /* Edit Display Title */
			'new_item' => __( 'New Client', 'blueliner-responsive' ), /* New Display Title */
			'view_item' => __( 'View Client', 'blueliner-responsive' ), /* View Display Title */
			'search_items' => __( 'Search Client', 'blueliner-responsive' ), /* Search Client Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'blueliner-responsive' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'blueliner-responsive' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example Client type', 'blueliner-responsive' ), /* Client Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 10, /* this is what order you want it to appear in on the left hand side menu */ 
			'rewrite'	=> array( 'slug' => 'client', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'client', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register Client */
	
	/* this adds your post categories to your Client type */
	//register_taxonomy_for_object_type( 'category', 'client' );
	/* this adds your post tags to your Client type */
	//register_taxonomy_for_object_type( 'post_tag', 'client' );

	blueliner_flush_rewrite_rules();
	
}

// adding the function to the Wordpress init
add_action( 'init', 'client_post_type');

/*
for more information on taxonomies, go here:
http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

// now let's add Client Categories (these act like categories)
register_taxonomy( 'client_cat', 
	array('client'), /* if you change the name of register_post_type( 'client', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Client Categories', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Client Category', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Client Categories', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Client Categories', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Client Category', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Client Category:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Client Category', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Client Category', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Client Category', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Client Category Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'client-cat' ),
	)
);

// now let's add Client Tags (these act like categories)
register_taxonomy( 'client_tag', 
	array('client'), /* if you change the name of register_post_type( 'client', then you have to change this */
	array('hierarchical' => false,    /* if this is false, it acts like tags */
		'labels' => array(
			'name' => __( 'Client Tags', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Client Tag', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Client Tags', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Client Tags', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Client Tag', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Client Tag:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Client Tag', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Client Tag', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Client Tag', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Client Tag Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
	)
);

/**************************************** 
* Added CMB2 Meta Boxes
*****************************************/

add_action( 'cmb2_init', 'cmb_client_metaboxes' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function cmb_client_metaboxes() {


  // Start with an underscore to hide fields from custom fields list
    $prefix = '_client_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'client_metabox',
        'title'         => __( 'Additional Info', 'cmb2' ),
        'object_types'  => array( 'client', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Company Name', 'cmb2' ),
        'desc'       => __( 'Company Name description (optional)', 'cmb2' ),
        'id'         => $prefix . 'company',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Website URL', 'cmb2' ),
        'desc' => __( 'Website url here', 'cmb2' ),
        'id'   => $prefix . 'url',
        'type' => 'text_url',
    ) );

}

?>
