<?php
/* Create Our Services type */

// let's create the function for the Our Services
function practicearea_post_type() { 
	// creating (registering) the Our Services 
	register_post_type( 'practicearea', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this Our Services
		array( 'labels' => array(
			'name' => __( 'Our Services', 'blueliner_responsive' ), /* This is the Title of the Group */
			'singular_name' => __( 'Our Service', 'blueliner_responsive' ), /* This is the individual type */
			'all_items' => __( 'All Services', 'blueliner_responsive' ), /* the all items menu item */
			'add_new' => __( 'Add New Service', 'blueliner_responsive' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Services', 'blueliner_responsive' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'blueliner_responsive' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Services', 'blueliner_responsive' ), /* Edit Display Title */
			'new_item' => __( 'New Services', 'blueliner_responsive' ), /* New Display Title */
			'view_item' => __( 'View Services', 'blueliner_responsive' ), /* View Display Title */
			'search_items' => __( 'Search Services', 'blueliner_responsive' ), /* Search Our Services Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'blueliner_responsive' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'blueliner_responsive' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example Our Services type', 'blueliner_responsive' ), /* Our Services Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 12, /* this is what order you want it to appear in on the left hand side menu */ 
			'rewrite'	=> array( 'slug' => 'practicearea', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'practicearea', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
		) /* end of options */
	); /* end of register Our Services */
	
	/* this adds your post categories to your Our Services type */
	//register_taxonomy_for_object_type( 'category', 'practicearea' );
	/* this adds your post tags to your Our Services type */
	//register_taxonomy_for_object_type( 'post_tag', 'practicearea' );

	flush_rewrite_rules();
	
}

// adding the function to the Wordpress init
add_action( 'init', 'practicearea_post_type');

/*
for more information on taxonomies, go here:
http://codex.wordpress.org/Function_Reference/register_taxonomy
*/

// now let's add Our Services Categories (these act like categories)
register_taxonomy( 'practicearea_cat', 
	array('practicearea'), /* if you change the name of register_post_type( 'practicearea', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Our Services Categories', 'blueliner_responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Our Services Category', 'blueliner_responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Our Services Categories', 'blueliner_responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Our Services Categories', 'blueliner_responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Our Services Category', 'blueliner_responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Our Services Category:', 'blueliner_responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Our Services Category', 'blueliner_responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Our Services Category', 'blueliner_responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Our Services Category', 'blueliner_responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Our Services Category Name', 'blueliner_responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'practice-areas' ),
	)
);

register_taxonomy( 'service_pillar', 
	array('practicearea'), /* if you change the name of register_post_type( 'blab', then you have to change this */
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Service Pillar', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Services Pillars', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Service Pillar', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Pillars', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Pillar', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Pillar', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Pillar', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Pillar', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add new Pillar', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Pillar', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'service-pillar' ),
	)
);

register_taxonomy( 'practicearea_cat_menu', 
	array('practicearea'), 
	array('hierarchical' => true,     /* if this is true, it acts like categories */
		'labels' => array(
			'name' => __( 'Our Services item', 'blueliner-responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Our Services item', 'blueliner-responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Our Services', 'blueliner-responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Our Services items', 'blueliner-responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Our Services item', 'blueliner-responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Our Services Category:', 'blueliner-responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Our Services Category', 'blueliner-responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Our Services Category', 'blueliner-responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Our Services Category', 'blueliner-responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Our Services Category Name', 'blueliner-responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true, 
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'practicearea-cat' ),
	)
);

// now let's add Our Services Tags (these act like categories)
register_taxonomy( 'practicearea_tag', 
	array('practicearea'), /* if you change the name of register_post_type( 'practicearea', then you have to change this */
	array('hierarchical' => false,    /* if this is false, it acts like tags */
		'labels' => array(
			'name' => __( 'Our Services Tags', 'blueliner_responsive' ), /* name of the custom taxonomy */
			'singular_name' => __( 'Our Services Tag', 'blueliner_responsive' ), /* single taxonomy name */
			'search_items' =>  __( 'Search Our Services Tags', 'blueliner_responsive' ), /* search title for taxomony */
			'all_items' => __( 'All Our Services Tags', 'blueliner_responsive' ), /* all title for taxonomies */
			'parent_item' => __( 'Parent Our Services Tag', 'blueliner_responsive' ), /* parent title for taxonomy */
			'parent_item_colon' => __( 'Parent Our Services Tag:', 'blueliner_responsive' ), /* parent taxonomy title */
			'edit_item' => __( 'Edit Our Services Tag', 'blueliner_responsive' ), /* edit custom taxonomy title */
			'update_item' => __( 'Update Our Services Tag', 'blueliner_responsive' ), /* update title for taxonomy */
			'add_new_item' => __( 'Add New Our Services Tag', 'blueliner_responsive' ), /* add new title for taxonomy */
			'new_item_name' => __( 'New Our Services Tag Name', 'blueliner_responsive' ) /* name title for taxonomy */
		),
		'show_admin_column' => true,
		'show_ui' => true,
		'query_var' => true,
	)
);

?>
