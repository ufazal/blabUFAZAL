<?php
/* Create Services Landing type */

// let's create the function for the Services Landing
function serviceslanding_post_type() { 
	// creating (registering) the Services Landing 
	register_post_type( 'serviceslanding', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this Services Landing
		array( 'labels' => array (
			'name' => __( 'Services Landing', 'blueliner-responsive' ), /* This is the Title of the Group */
			'singular_name' => __( 'Services Landing', 'blueliner-responsive' ), /* This is the individual type */
			'all_items' => __( 'All Services Landings', 'blueliner-responsive' ), /* the all items menu item */
			'add_new' => __( 'Add New S. Landing', 'blueliner-responsive' ), /* The add new menu item */
			'add_new_item' => __( 'Add New S. Landings', 'blueliner-responsive' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'blueliner-responsive' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Services Landings', 'blueliner-responsive' ), /* Edit Display Title */
			'new_item' => __( 'New Services Landings', 'blueliner-responsive' ), /* New Display Title */
			'view_item' => __( 'View Services Landings', 'blueliner-responsive' ), /* View Display Title */
			'search_items' => __( 'Search Services Landings', 'blueliner-responsive' ), /* Search Services Landing Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'blueliner-responsive' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'blueliner-responsive' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example Services Landing type', 'blueliner-responsive' ), /* Services Landing Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 12, /* this is what order you want it to appear in on the left hand side menu */ 
			'rewrite'	=> array( 'slug' => 'serviceslanding', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'serviceslanding', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register Services Landing */
	
	/* this adds your post categories to your Services Landing type */
	//register_taxonomy_for_object_type( 'category', 'serviceslanding' );
	/* this adds your post tags to your Services Landing type */
	//register_taxonomy_for_object_type( 'post_tag', 'serviceslanding' );

	flush_rewrite_rules();
	
}

// adding the function to the Wordpress init
add_action( 'init', 'serviceslanding_post_type');

/*
for more information on taxonomies, go here:
http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

// now let's add Services Landing Categories (these act like categories)
register_taxonomy( 'serviceslanding_cat', 
	array('serviceslanding'), /* if you change the name of register_post_type( 'serviceslanding', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Services L. Categories', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Services L. Category', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Services L. Categories', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Services L. Categories', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Services L. Category', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Services L. Category:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Services L. Category', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Services L. Category', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Services L. Category', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Services L. Category Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'service-landing-cat' ),
	)
);

// now let's add Services Landing Tags (these act like categories)
register_taxonomy( 'serviceslanding_tag', 
	array('serviceslanding'), /* if you change the name of register_post_type( 'serviceslanding', then you have to change this */
	array('hierarchical' => false,    /* if this is false, it acts like tags */
		'labels' => array(
			'name' => __( 'Services Landing Tags', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Services Landing Tag', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Services Landing Tags', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Services Landing Tags', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Services Landing Tag', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Services L. Tag:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Services Landing Tag', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Services Landing Tag', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Services Landing Tag', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Services Landing Tag Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
	)
);

/**************************************** 
* Added CMB2 Meta Boxes
*****************************************/

add_action( 'cmb2_init', 'cmb_services_l_manager_metaboxes' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function cmb_services_l_manager_metaboxes() {


  // Start with an underscore to hide fields from custom fields list
    $prefix = '_services_l_manager_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'services_l_manager_metabox',
        'title'         => __( 'Page Banner & Services Landing Manager Metadata', 'cmb2' ),
        'object_types'  => array( 'serviceslanding', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
		'name' => __( 'Page Banner Image', 'cmb2' ),
		'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'banner_img',
		'type' => 'file',
	) );

    $cmb->add_field( array(
        'name' => __( 'Alter Title', 'cmb2' ),
        'desc' => __( 'Enter Alter Page Title', 'cmb2' ),
        'id'   => $prefix . 'title',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Page Sub Title', 'cmb2' ),
        'desc'       => __( 'Enter Page Sub Title', 'cmb2' ),
        'id'         => $prefix . 'sub_title',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
		'name' => __( 'Profile Image', 'cmb2' ),
		'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image',
		'type' => 'file',
	) );

    $cmb->add_field( array(
        'name'       => __( 'Team page URL', 'cmb2' ),
        'desc'       => __( 'Enter Team page URL', 'cmb2' ),
        'id'         => $prefix . 'team_url',
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

    $cmb->add_field( array(
		'name' => __( 'Advertise Image', 'cmb2' ),
		'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'adimage',
		'type' => 'file',
	) );

    $cmb->add_field( array(
        'name'       => __( 'Advertise URL', 'cmb2' ),
        'desc'       => __( 'Enter Advertise URL', 'cmb2' ),
        'id'         => $prefix . 'advertise_url',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
		'name'     => __( 'Category of Our Services', 'cmb2' ),
		'desc'     => __( 'Select Category of Our Services', 'cmb2' ),
		'id'       => $prefix . 'our_cat',
		'type'     => 'taxonomy_radio',
		'taxonomy' => 'practicearea_cat', // Taxonomy Slug
		// 'inline'  => true, // Toggles display to inline
	) );

}

/******
** Case study 
***********/
add_action( 'cmb2_init', 'cmb_services_l_case_study_metaboxes' );

function cmb_services_l_case_study_metaboxes() {


  // Start with an underscore to hide fields from custom fields list
    $prefix = '_services_l_case_study_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'services_l_case_study_metabox',
        'title'         => __( 'Case Study Metadata', 'cmb2' ),
        'object_types'  => array( 'serviceslanding', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
		'name' => __( 'Case Study Image', 'cmb2' ),
		'desc' => __( 'Upload an image or enter a URL.', 'cmb2' ),
		'id'   => $prefix . 'image',
		'type' => 'file',
	) );

   
    $cmb->add_field( array(
        'name'       => __( 'Title of Case Study', 'cmb2' ),
        'desc'       => __( 'Enter Title of Case Study', 'cmb2' ),
        'id'         => $prefix . 'title',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Case Study Page URL', 'cmb2' ),
        'desc'       => __( 'Case Study Page URL', 'cmb2' ),
        'id'         => $prefix . 'page_url',
        'type'       => 'text',
    ) );


    $cmb->add_field( array(
        'name' => __( 'Member URL', 'cmb2' ),
        'desc' => __( 'Enter Member URL', 'cmb2' ),
        'id'   => $prefix . 'member_url',
        'type' => 'text_url',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Location URL', 'cmb2' ),
        'desc' => __( 'Enter Location URL', 'cmb2' ),
        'id'   => $prefix . 'location_url',
        'type' => 'text_url',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Security URL', 'cmb2' ),
        'desc' => __( 'Enter Security URL', 'cmb2' ),
        'id'   => $prefix . 'security_url',
        'type' => 'text_url',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Shopping Cart URL', 'cmb2' ),
        'desc' => __( 'Enter Shopping Cart URL', 'cmb2' ),
        'id'   => $prefix . 'cart_url',
        'type' => 'text_url',
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Summary text', 'cmb2' ),
        'desc'       => __( 'Enter Summary text', 'cmb2' ),
        'id'         => $prefix . 'summary',
        'type'       => 'text',
    ) );
}

