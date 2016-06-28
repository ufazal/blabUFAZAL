<?php
/* Create B-Lab type */

// let's create the function for the B-Lab
function blab_post_type() { 
	// creating (registering) the B-Lab 
	register_post_type( 'blab', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this B-Lab
		array( 'labels' => array(
			'name' => __( 'B-Lab', 'blueliner-responsive' ), /* This is the Title of the Group */
			'singular_name' => __( 'B-Lab', 'blueliner-responsive' ), /* This is the individual type */
			'all_items' => __( 'All B-Labs', 'blueliner-responsive' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'blueliner-responsive' ), /* The add new menu item */
			'add_new_item' => __( 'Add New B-Lab', 'blueliner-responsive' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'blueliner-responsive' ), /* Edit Dialog */
			'edit_item' => __( 'Edit B-Lab', 'blueliner-responsive' ), /* Edit Display Title */
			'new_item' => __( 'New B-Lab', 'blueliner-responsive' ), /* New Display Title */
			'view_item' => __( 'View B-Lab', 'blueliner-responsive' ), /* View Display Title */
			'search_items' => __( 'Search B-Lab', 'blueliner-responsive' ), /* Search B-Lab Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'blueliner-responsive' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'blueliner-responsive' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example B-Lab type', 'blueliner-responsive' ), /* B-Lab Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'rewrite'	=> array( 'slug' => 'blab', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'blab', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'page-attributes', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register B-Lab */
	
	flush_rewrite_rules();
	
}

// adding the function to the Wordpress init
add_action( 'init', 'blab_post_type');

/*
for more information on taxonomies, go here:
http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

// now let's add B-Lab Categories (these act like categories)
register_taxonomy( 'blab_cat', 
	array('blab'), /* if you change the name of register_post_type( 'blab', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'B-Lab Categories', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'B-Lab Category', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search B-Lab Categories', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All B-Lab Categories', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent B-Lab Category', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent B-Lab Category:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit B-Lab Category', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update B-Lab Category', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New B-Lab Category', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New B-Lab Category Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'blab-cat' ),
	)
);

register_taxonomy( 'blab_item_menu', 
	array('blab'), 
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'B-Lab item', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'B-Lab item', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search blab-slug', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All B-Labs items', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent B-Labs item', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent B-Labs Category:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit B-Labs Category', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update B-Labs Category', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New B-Labs Category', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New B-Labs Category Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'blab-slug' ),
	)
);

// now let's add B-Lab Tags (these act like categories)
register_taxonomy( 'blab_tag', 
	array('blab'), /* if you change the name of register_post_type( 'blab', then you have to change this */
	array('hierarchical' => false,    /* if this is false, it acts like tags */
		'labels' => array(
			'name' => __( 'B-Lab Tags', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'B-Lab Tag', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search B-Lab Tags', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All B-Lab Tags', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent B-Lab Tag', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent B-Lab Tag:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit B-Lab Tag', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update B-Lab Tag', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New B-Lab Tag', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New B-Lab Tag Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
	)
);


/**************************************** 
* Added CMB2 Meta Boxes
*****************************************/

add_action( 'cmb2_init', 'cmb_blab_metaboxes' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function cmb_blab_metaboxes() {


  // Start with an underscore to hide fields from custom fields list
    $prefix = '_blab_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'blab_metabox',
        'title'         => __( 'Additional Info', 'cmb2' ),
        'object_types'  => array( 'blab', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Company Name', 'cmb2' ),
        'desc'       => __( 'Please enter company Name', 'cmb2' ),
        'id'         => $prefix . 'company',
        'type'       => 'text',
        //'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Sub Title', 'cmb2' ),
        'desc'       => __( 'Please enter Sub Title', 'cmb2' ),
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
        'desc' => __( 'Please enter website url', 'cmb2' ),
        'id'   => $prefix . 'url',
        'type' => 'text_url',
        // 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
        // 'repeatable' => true,
    ) );
}
	

?>
