<?php  ?><?php
if ( function_exists('register_sidebar') ){
    register_sidebar(array(
        'name' => 'rightsidebarTop',
        'before_widget' => '',
        'after_widget' => '<br />',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

register_sidebar(array(
        'name' => 'rightsidebarBottom',
        'before_widget' => '',
        'after_widget' => '<br />',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
register_sidebar(array('name' => 'RightNav Modal','before_widget' => '','after_widget' => '','before_title' => '','after_title' => ''));    
register_sidebar(array('name' => 'LeftNav Modal','before_widget' => '','after_widget' => '','before_title' => '','after_title' => ''));  
}

/* is_child_of can check if a page is a descendant page of a top level page, regardless of how many levels there are in between them */
/* 
Usage
if(is_child_of(5))
{
// executes this code if you are on page or any child pages of 5
}
OR
// the id of the top page is 5
if(is_page(5) || is_child_of(5))
{
// php code goes here to include the styleshet
}
*/

function is_child_of($topid, $thispageid = null)
{
	global $post;
	
	if($thispageid == null)
		$thispageid = $post->ID; # no id set so get the post object's id.
		
	$current = get_page($thispageid);
	
	if($current->post_parent != 0) # so there is a parent
	{
		if($current->post_parent != $topid)
			return is_child_of($topid, $current->post_parent); # not that page, run again
		else
			return true; # are so it is	
	}
	else
	{
		return false; # no parent page so return false
	}	
}







// This is for the custom write panel for portfolio pages
include_once (TEMPLATEPATH . '/portfolioitem_custom-write-panel.php'); // Activating Custom Write Panel NOT CUSTOM PAGE

//include_once (TEMPLATEPATH . '/CUSTOMPAGEFUNTIONFORPORTFOLIO_2.php'); // Activating Custom Write Panel//
//include_once (TEMPLATEPATH . '/functions_team.php'); // Activating Custom Write Panel//



include_once (TEMPLATEPATH . '/function_customtypes.php');

// This is for sliders in posts UL
add_shortcode('sliders', 'func_sliders');

function func_sliders( $atts, $content = null ) {
		// remove unnecessary p tags if wordpress auto p is enabled
	$remove = array('<p>','</p>');
	if(strpos($content, $remove[1]) === 0)
	{
		$content = ltrim($content,$remove[1]);
		$content = rtrim($content,$remove[0]);
	}
	remove_filter ($content,  'wpautop');

	$content = str_replace('<ul>', '<ul class="slides clean">',$content );
	global $wpdb, $post, $table_prefix;
	$thePostID = $post->ID;
	return '<div id="slide'. $thePostID .'" class="slide-container primary-slide-container"><ul class="slide-navigation"></ul>'.$content.'</div><div class="clearfix"></div><script type="text/javascript">
	jQuery(function($){
	$(\'#slide'. $thePostID .' .slides\').cycle({
	fx: 		\'fade\', 
	pager: 	\'#slide'. $thePostID .' .slide-navigation\',
	pause: 	5
	});
	});
	</script>';

}

/* the function below will EXCLUDE regular pages from search results*/
function mySearchFilter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}

add_filter('pre_get_posts','mySearchFilter');





?>
