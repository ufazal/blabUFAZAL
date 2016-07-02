<?php  ?><?php
/*
Plugin Name: is_child
Plugin URI: http://erik.range-it.de/wordpress/plugins/is_child/
Description: Checks if current page, posting or category is in direct or recursive relation with a specific parent category or parent page.
Version: 1.1.1
Author: Erik Range
Author URI: http://erik.range-it.de/

---------------------------------------------------------------------
Usage:
---------------------------------------------------------------------
	bool is_child( mixed parent [, bool recursive] )


---------------------------------------------------------------------
Examples:
---------------------------------------------------------------------
-->	is_child( 10 )
	Checks if the current page, posting or category is somehow 
	related to category- (or page-)ID 10.
	
--> is_child( "Example Category", false )
	Checks just if the current element is a direct child of "Example 
	Category".
	
--> is_child( "some-page", 1 )
	Checks if the current element (page) is somehow related to a page
	with the slug "some-page".


---------------------------------------------------------------------
History:
---------------------------------------------------------------------
1.1.2 - Fixed a bug which ended up in seldomly sending an invalid 
		SQL-query when browsing archives.
1.1.1 - Fixed a bug which resulted in getting wrong page IDs from 
		SQL-queries.
1.1.0 - Added checking for parental pages.
1.0.0 - Final Release.
0.5.0 - No more catlooping. All categories in queue are now handled 
		with one single query to boost up performance.
	  - Catching IDs if zero, as they're always true.
0.4.0 - Now being able to look for category name or slug instead of the
		plain ID.
0.3.0 - Automated detection of category, page or single posting.
0.2.0 - Added recursive search.
0.1.0 - Initial Test Release.
	
*/

if( !function_exists( "is_child" ) ) {
	
	function is_child( $ofParent, $doRecursive = true ) {

		global $wpdb;
		$allCats = array();
		
		// Turn title or slug into ID if needed.
		if( !is_int( $ofParent ) ) {
			if( is_page() )
				# Different handling for Pages
				$getID = $wpdb->get_results("
					SELECT	ID as cat_ID
					FROM	{$wpdb->posts}
					WHERE	post_title = '{$ofParent}'
					OR		post_name = '{$ofParent}'
					LIMIT	0,1
				");
			else
				# Get catID
				$getID = $wpdb->get_results("
					SELECT	cat_ID
					FROM	{$wpdb->categories}
					WHERE	cat_name = '{$ofParent}'
					OR		category_nicename = '{$ofParent}'
					LIMIT	0,1
				");

			if( !$getID )
				# Not found.
				return false;
			else {
				# Found.
				$ofParent = $getID[0]->cat_ID;
				unset( $getID );
			}
		}
		
		// Everyone's a sub zero.
		if( $ofParent == 0 && $doRecursive )
			return true;
	    
		// Now let's break it down to categories (or pages).
		if( is_page() ) {
			global $post;
			$allCats[] = $post->ID;
		} elseif( is_single() ) {
			$getCats = get_the_category();
			foreach( $getCats as $getCat )
				$allCats[] = $getCat->cat_ID;
			unset( $getCats );
		} elseif( is_category ) {
			global $cat;
			$allCats[] = $cat;
		}

		// Already a match? Would save processing time.
		if( in_array( $ofParent, $allCats ) )
			return true;
			
		// Post without recursive search ends here.
		if( ( is_single() ) && !$doRecursive )
			return false;

		// Otherwise, let's do some genealogy.
		while( count( $allCats ) != 0 ) {
			if( in_array( $ofParent, $allCats ) )
				return true;
			else 
				$allCats = 
					is_child_getParents( $allCats );
		}
		
		// Still here? Then nothing has been found.
		return false;

	}
}


if( !function_exists( "is_child_getParents" ) ) {

	function is_child_getParents( $fromChilds ) {
		
		// As there's only get_category_parents which isn't useful 
		// for fetching parental data, we'll have to query this
		// directly to the DB.
		global $wpdb;
		
		$fromChilds = implode( ", ", $fromChilds );
		if( !$fromChilds ) return array();
		
		$getParents = 
			( is_page() )
			?	# Pages
				$wpdb->get_results("
					SELECT	post_parent AS category_parent
					FROM	{$wpdb->posts}
					WHERE	ID IN ({$fromChilds})
				")
			: 	# Posts / Categories
				$wpdb->get_results("
					SELECT	category_parent
					FROM	{$wpdb->categories}
					WHERE	cat_ID IN ({$fromChilds})
				");
		
		foreach( $getParents as $getParent )
			if( $getParent->category_parent != 0 )
				$allParents[] = $getParent->category_parent;
			
		return $allParents;

	}
}
