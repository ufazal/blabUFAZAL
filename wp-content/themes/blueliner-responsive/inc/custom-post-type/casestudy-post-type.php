<?php
/* Create Case Study type */

// let's create the function for the Case Study
function casestudy_post_type() { 
	// creating (registering) the Case Study 
	register_post_type( 'casestudy', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this Case Study
		array( 'labels' => array(
			'name' => __( 'Case Study', 'blueliner-responsive' ), /* This is the Title of the Group */
			'singular_name' => __( 'Case Study', 'blueliner-responsive' ), /* This is the individual type */
			'all_items' => __( 'All Case Studys', 'blueliner-responsive' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'blueliner-responsive' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Case Study', 'blueliner-responsive' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'blueliner-responsive' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Case Study', 'blueliner-responsive' ), /* Edit Display Title */
			'new_item' => __( 'New Case Study', 'blueliner-responsive' ), /* New Display Title */
			'view_item' => __( 'View Case Study', 'blueliner-responsive' ), /* View Display Title */
			'search_items' => __( 'Search Case Study', 'blueliner-responsive' ), /* Search Case Study Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'blueliner-responsive' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'blueliner-responsive' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example Case Study type', 'blueliner-responsive' ), /* Case Study Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => null, /* this is what order you want it to appear in on the left hand side menu */ 
			'rewrite'	=> array( 'slug' => 'casestudy' ), /* you can specify its url slug */
			'has_archive' => true,
			'capability_type' => 'post',
			'hierarchical' => true,
			'supports' => array( 'title', 'page-attributes', 'editor', 'thumbnail', 'revisions')
		) 
	); 
	
	/* this adds your post categories to your Case Study type */
	//register_taxonomy_for_object_type( 'category', 'casestudy' );
	/* this adds your post tags to your Case Study type */
	//register_taxonomy_for_object_type( 'post_tag', 'casestudy' );

	blueliner_flush_rewrite_rules();
	
}

// adding the function to the Wordpress init
add_action( 'init', 'casestudy_post_type');

/*
for more information on taxonomies, go here:
http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

// now let's add Case Study Categories (these act like categories)
register_taxonomy( 'casestudy_cat', 
	array('casestudy'), /* if you change the name of register_post_type( 'casestudy', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Case Study Categories', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Case Study Category', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Case Study Categories', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Case Study Categories', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Case Study Category', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Case Study Category:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Case Study Category', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Case Study Category', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Case Study Category', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Case Study Category Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'casestudy-cat' ),
	)
);


/**************************************** 
* Added CMB2 Meta Boxes
*****************************************/

add_action( 'cmb2_init', 'cmb_casestudy_metaboxes' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function cmb_casestudy_metaboxes() {


  // Start with an underscore to hide fields from custom fields list
    $prefix = '_casestudy_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'casestudy_metabox',
        'title'         => __( 'Additional Info', 'cmb2' ),
        'object_types'  => array( 'casestudy', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Title', 'cmb2' ),
        'desc'       => __( 'Enter title', 'cmb2' ),
        'id'         => $prefix . 'title',
        'type'       => 'text',
        //'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Sub Title', 'cmb2' ),
        'desc'       => __( 'Enter sub title', 'cmb2' ),
        'id'         => $prefix . 'sub_title',
        'type'       => 'text',
        //'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );

    // URL text field
    $cmb->add_field( array(
        'name' => __( 'Website URL', 'cmb2' ),
        'desc' => __( 'Website url here', 'cmb2' ),
        'id'   => $prefix . 'url',
        'type' => 'text_url',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );
    
    $cmb->add_field( array(
        'name' => __( '7 Pillar Icon', 'cmb2' ),
        'desc' => __( 'Enter 7 Pillar Icon', 'cmb2' ),
        'id'   => $prefix . 'icon',
        'type' => 'file',
    ) );

/*    $cmb->add_field( array(
		'name' => __( 'Menu Logo', 'cmb2' ),
		'desc' => __( 'Upload an logo. Size should be 100x80', 'cmb2' ),
		'id'   => $prefix . 'logo',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Menu hover Logo', 'cmb2' ),
		'desc' => __( 'Upload an logo. Size should be 100x80', 'cmb2' ),
		'id'   => $prefix . 'hover_logo',
		'type' => 'file',
	) );*/
}
	

?>
