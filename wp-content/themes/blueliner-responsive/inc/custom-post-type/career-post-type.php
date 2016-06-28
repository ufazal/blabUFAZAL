<?php
// let's create the function for the career
function career_post_type() { 
	// creating (registering) the career 
	register_post_type( 'career', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this career
		array( 'labels' => array(
			'name' => __( 'Career', 'blueliner-responsive' ), /* This is the Title of the Group */
			'singular_name' => __( 'Career', 'blueliner-responsive' ), /* This is the individual type */
			'all_items' => __( 'All careers', 'blueliner-responsive' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'blueliner-responsive' ), /* The add new menu item */
			'add_new_item' => __( 'Add New career', 'blueliner-responsive' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'blueliner-responsive' ), /* Edit Dialog */
			'edit_item' => __( 'Edit career', 'blueliner-responsive' ), /* Edit Display Title */
			'new_item' => __( 'New career', 'blueliner-responsive' ), /* New Display Title */
			'view_item' => __( 'View career', 'blueliner-responsive' ), /* View Display Title */
			'search_items' => __( 'Search career', 'blueliner-responsive' ), /* Search career Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'blueliner-responsive' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'blueliner-responsive' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example career type', 'blueliner-responsive' ), /* career Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'rewrite'	=> array( 'slug' => 'career', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'career', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register career */
	
	/* this adds your post categories to your career type */
	//register_taxonomy_for_object_type( 'category', 'career' );
	/* this adds your post tags to your career type */
	//register_taxonomy_for_object_type( 'post_tag', 'career' );

	blueliner_flush_rewrite_rules();
	
}

// adding the function to the Wordpress init
add_action( 'init', 'career_post_type');

/*
for more information on taxonomies, go here:
http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

// now let's add career Categories (these act like categories)
register_taxonomy( 'career_cat', 
	array('career'), /* if you change the name of register_post_type( 'career', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Career Categories', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Career Category', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search career Categories', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All career Categories', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent career Category', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent career Category:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit career Category', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update career Category', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New career Category', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New career Category Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'career-cat' ),
	)
);

// now let's add career Tags (these act like categories)
register_taxonomy( 'career_tag', 
	array('career'), /* if you change the name of register_post_type( 'career', then you have to change this */
	array('hierarchical' => false,    /* if this is false, it acts like tags */
		'labels' => array(
			'name' => __( 'career Tags', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'career Tag', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search career Tags', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All career Tags', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent career Tag', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent career Tag:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit career Tag', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update career Tag', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New career Tag', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New career Tag Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
	)
);

/**************************************** 
* Added CMB2 Meta Boxes
*****************************************/

add_action( 'cmb2_init', 'cmb_career_metaboxes' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function cmb_career_metaboxes() {


  // Start with an underscore to hide fields from custom fields list
    $prefix = '_job_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'job_position_metabox',
        'title'         => __( 'Job More Information', 'cmb2' ),
        'object_types'  => array( 'career', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    // Regular text field
    $cmb->add_field( array(
        'name'       => __( 'Job Title', 'cmb2' ),
        'desc'       => __( 'Enter Job title', 'cmb2' ),
        'id'         => $prefix . 'title',
        'type'       => 'text',
        //'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
        // 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
        // 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
        // 'on_front'        => false, // Optionally designate a field to wp-admin only
        // 'repeatable'      => true,
    ) );

    $cmb->add_field( array(
		'name' => __( 'Open position', 'cmb2' ),
		'desc' => __( 'Is it still open?', 'cmb2' ),
		'id'   => $prefix . 'open_job',
		'type' => 'checkbox',
	) );

	$cmb->add_field( array(
		'name' => __( 'Last date for apply', 'cmb2' ),
		'desc' => __( 'Set last date for application ', 'cmb2' ),
		'id'   => $prefix . 'last_date',
		'type' => 'text_date_timestamp',
		// 'timezone_meta_key' => $prefix . 'timezone', // Optionally make this field honor the timezone selected in the select_timezone specified above
	) );
}

add_action( 'cmb2_init', 'cmb_ceoword_metaboxes' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function cmb_ceoword_metaboxes() {


  // Start with an underscore to hide fields from custom fields list
    $prefix = '_ceoword_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'ceo_words_metabox',
        'title'         => __( 'A Word From Our CEO Setting', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
        'show_on'      => array( 'id' => array( 330, ) ), // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Full Name', 'cmb2' ),
        'desc'       => __( 'Enter Full Name', 'cmb2' ),
        'id'         => $prefix . 'full_name',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Designation', 'cmb2' ),
        'desc'       => __( 'Enter CEO Designation', 'cmb2' ),
        'id'         => $prefix . 'designation',
        'type'       => 'text',
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
