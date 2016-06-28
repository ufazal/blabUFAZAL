<?php
/* Create Portfolio type */

// let's create the function for the Portfolio
function portfolio_post_type() { 
	register_post_type( 'portfolio',
		// let's now add all the options for this Portfolio
		array( 'labels' => array(
			'name' => __( 'Portfolio', 'blueliner-responsive' ), /* This is the Title of the Group */
			'singular_name' => __( 'Portfolio', 'blueliner-responsive' ), /* This is the individual type */
			'all_items' => __( 'All Portfolios', 'blueliner-responsive' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'blueliner-responsive' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Portfolio', 'blueliner-responsive' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'blueliner-responsive' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Portfolio', 'blueliner-responsive' ), /* Edit Display Title */
			'new_item' => __( 'New Portfolio', 'blueliner-responsive' ), /* New Display Title */
			'view_item' => __( 'View Portfolio', 'blueliner-responsive' ), /* View Display Title */
			'search_items' => __( 'Search Portfolio', 'blueliner-responsive' ), /* Search Portfolio Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'blueliner-responsive' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'blueliner-responsive' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example Portfolio type', 'blueliner-responsive' ), /* Portfolio Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 11, /* this is what order you want it to appear in on the left hand side menu */ 
			'rewrite'	=> array( 'slug' => 'portfolio', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'portfolio', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register Portfolio */
	
	/* this adds your post categories to your Portfolio type */
	//register_taxonomy_for_object_type( 'category', 'portfolio' );
	/* this adds your post tags to your Portfolio type */
	//register_taxonomy_for_object_type( 'post_tag', 'portfolio' );

	flush_rewrite_rules();
	
}

// adding the function to the Wordpress init
add_action( 'init', 'portfolio_post_type');

/*
for more information on taxonomies, go here:
http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

// now let's add Portfolio Categories (these act like categories)
register_taxonomy( 'portfolio_cat', 
	array('portfolio'), /* if you change the name of register_post_type( 'portfolio', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Portfolio Categories', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Portfolio Category', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Portfolio Categories', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Portfolio Categories', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Portfolio Category', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Portfolio Category:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Portfolio Category', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Portfolio Category', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Portfolio Category', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Portfolio Category Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'portfolio-cat' ),
	)
);

// now let's add Portfolio Categories (these act like categories)
register_taxonomy( 'portfolio_genaral_cat', 
	array('portfolio'), /* if you change the name of register_post_type( 'portfolio', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Portfolio frontpage item', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Portfolio frontpage item', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Portfolio frontpage', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Portfolio frontpage', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Portfolio frontpage item', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Portfolio frontpage Category:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Portfolio frontpage Category', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Portfolio frontpage Category', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Portfolio frontpage Category', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Portfolio frontpage Category Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'portfolio-frontpage-cat' ),
	)
);

// now let's add Portfolio Categories (these act like categories)
register_taxonomy( 'pillar_cat', 
	array('portfolio'), /* if you change the name of register_post_type( 'portfolio', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( '7 pillars item', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( '7 pillars item', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search 7 pillar-slug', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All 7 pillars item', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent 7 pillars item', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent 7 pillar Category:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit 7 pillar Category', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update 7 pillar Category', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New 7 pillar Category', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New 7 pillar Category Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'pillar-cat' ),
	)
);

// now let's add Portfolio Tags (these act like categories)
register_taxonomy( 'portfolio_tag', 
	array('portfolio'), /* if you change the name of register_post_type( 'portfolio', then you have to change this */
	array('hierarchical' => false,    /* if this is false, it acts like tags */
		'labels' => array(
			'name' => __( 'Portfolio Tags', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Portfolio Tag', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Portfolio Tags', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Portfolio Tags', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Portfolio Tag', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Portfolio Tag:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Portfolio Tag', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Portfolio Tag', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Portfolio Tag', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Portfolio Tag Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
	)
);

/**************************************** 
* Added CMB2 Meta Boxes
*****************************************/

add_action( 'cmb2_init', 'cmb_portfolio_metaboxes' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_init' hook.
 */
function cmb_portfolio_metaboxes() {


  // Start with an underscore to hide fields from custom fields list
    $prefix = '_portfolio_';

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box( array(
        'id'            => 'portfolio_metabox',
        'title'         => __( 'Additional Info', 'cmb2' ),
        'object_types'  => array( 'portfolio', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );

    $cmb->add_field( array(
		'name' => __( 'Sub Title', 'blueliner-responsive' ),
		'desc' => __( 'Enter Sub Title', 'blueliner-responsive' ),
		'id'   => $prefix . 'sub_title',
		'type' => 'text',
	) );

    $cmb->add_field( array(
        'name' => __( 'Website URL', 'cmb2' ),
        'desc' => __( 'Website url here', 'cmb2' ),
        'id'   => $prefix . 'url',
        'type' => 'text_url',
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Registrations', 'cmb2' ),
        'desc'       => __( 'Enter Percentage of Registrations', 'cmb2' ),
        'id'         => $prefix . 'registration',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Bounce Rate', 'cmb2' ),
        'desc'       => __( 'Enter Percentage of Bounce Rate', 'cmb2' ),
        'id'         => $prefix . 'bounce_rate',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
        'name'       => __( 'Mobile Application', 'cmb2' ),
        'desc'       => __( 'Enter Percentage of Mobile Application', 'cmb2' ),
        'id'         => $prefix . 'mobile_app',
        'type'       => 'text',
    ) );

    $cmb->add_field( array(
		'name'         => __( 'Portfolio Images', 'cmb2' ),
		'desc'         => __( 'Upload or add multiple images/attachments.', 'cmb2' ),
		'id'           => $prefix . 'file_list',
		'type'         => 'file_list',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );
}

add_action( 'cmb2_init', 'portfolio_repeatable_group_metabox' );

function portfolio_repeatable_group_metabox() {

	$prefix = '_portfolio_';

	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'testimonial_metabox',
		'title'        => __( 'Testimonials of portfolio', 'cmb2' ),
		'object_types' => array( 'portfolio', ),
	) );

	// $group_field_id is the field id string, so in this case: $prefix . 'demo'
	$group_field_id = $cmb_group->add_field( array(
		'id'          => $prefix . 'testimonial_portfolio',
		'type'        => 'group',
		'description' => __( 'Enter Testimonial for this portfolio', 'cmb2' ),
		'options'     => array(
			'group_title'   => __( 'Testimonial', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => __( 'Add Testimonial', 'cmb2' ),
			'remove_button' => __( 'Remove Testimonial', 'cmb2' ),
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
		'name'       => __( 'Testimonial Title', 'cmb2' ),
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
		'name'       => __( 'Author', 'cmb2' ),
		'id'         => 'author',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name'       => __( 'Website URL', 'cmb2' ),
		'id'         => 'web_url',
		'type'       => 'text',
		// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
	) );

	$cmb_group->add_group_field( $group_field_id, array(
		'name' => __( 'Image', 'cmb2' ),
		'id'   => 'image',
		'type' => 'file',
	) );

}
	

?>
