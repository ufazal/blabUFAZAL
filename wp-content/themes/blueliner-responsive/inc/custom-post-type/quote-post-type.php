<?php
/* Create Quote type */

// let's create the function for the Quote
function quote_post_type() { 
	// creating (registering) the Quote 
	register_post_type( 'quote', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this Quote
		array( 'labels' => array(
			'name' => __( 'Testimonial', 'blueliner-responsive' ), /* This is the Title of the Group */
			'singular_name' => __( 'Testimonial', 'blueliner-responsive' ), /* This is the individual type */
			'all_items' => __( 'All Testimonials', 'blueliner-responsive' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'blueliner-responsive' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Testimonial', 'blueliner-responsive' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'blueliner-responsive' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Testimonial', 'blueliner-responsive' ), /* Edit Display Title */
			'new_item' => __( 'New Testimonial', 'blueliner-responsive' ), /* New Display Title */
			'view_item' => __( 'View Testimonial', 'blueliner-responsive' ), /* View Display Title */
			'search_items' => __( 'Search Testimonial', 'blueliner-responsive' ), /* Search Quote Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'blueliner-responsive' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'blueliner-responsive' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example Quote type', 'blueliner-responsive' ), /* Quote Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 13, /* this is what order you want it to appear in on the left hand side menu */ 
			'rewrite'	=> array( 'slug' => 'testimonial', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'quote', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register Quote */
	
	flush_rewrite_rules();
	
}

// adding the function to the Wordpress init
add_action( 'init', 'quote_post_type');

/*
for more information on taxonomies, go here:
http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

// now let's add Quote Categories (these act like categories)
register_taxonomy( 'quote_cat', 
	array('quote'), /* if you change the name of register_post_type( 'quote', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Testimonial Categories', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Testimonial Category', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Testimonial Categories', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Testimonial Categories', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Testimonial Category', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Testimonial Category:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Testimonial Category', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Testimonial Category', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Testimonial Category', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Testimonial Category Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'testimonial-cat' ),
	)
);

// now let's add Quote Tags (these act like categories)
register_taxonomy( 'quote_tag', 
	array('quote'), /* if you change the name of register_post_type( 'quote', then you have to change this */
	array('hierarchical' => false,    /* if this is false, it acts like tags */
		'labels' => array(
			'name' => __( 'Testimonial Tags', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Testimonial Tag', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Testimonial Tags', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Testimonial Tags', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Testimonial Tag', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Testimonial Tag:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Testimonial Tag', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Testimonial Tag', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Testimonial Tag', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Testimonial Tag Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
	)
);


/**************************************** 
* Added CMB2 Meta Boxes
*****************************************/

add_action( 'cmb2_init', 'cmb_quote_metaboxes' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function cmb_quote_metaboxes() {


  // Start with an underscore to hide fields from custom fields list
    $prefix = '_quote_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'quote_metabox',
        'title'         => __( 'Additional Info', 'cmb2' ),
        'object_types'  => array( 'quote', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Full Name', 'cmb2' ),
        'desc'       => __( 'Enter Full Name', 'cmb2' ),
        'id'         => $prefix . 'full_name',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Designation', 'cmb2' ),
        'desc'       => __( 'Enter Designation', 'cmb2' ),
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
