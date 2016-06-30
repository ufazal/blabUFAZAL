<?php
	/* Recent Posts */
	add_shortcode('recent-posts', 'bf_recentposts');
	
	/* -----------------------------------------------------------------
		Recent Posts
	----------------------------------------------------------------- */
	function bf_recentposts($atts, $content){
	
		extract(shortcode_atts(array(
			'showposts' => '2',
			'catname' => '',
			'title' => ''
		), $atts));
		$content =bf_remove_autop($content);
		query_posts("showposts=".$showposts."&category_name=" . $catname);
		global $post;
		
		if($title!=""){$title='<h2 class="title">'.$title.'</h2>';}
		
		$output  = '
		'.$title.'
		<ul class="recent">';
		
		while (have_posts()) : the_post();
		
		$excerpt = get_the_excerpt();
		$custom = get_post_custom($post->ID);
		$cf_thumb = (isset($custom["thumb"][0]))? $custom["thumb"][0] : "";
		
		if($cf_thumb!=""){
			$cf_thumb = "<img src='" . $cf_thumb . "' alt='' width='143' height='88' class='alignleft imgborder'/>";
		}
		
		 
		$output .= '<li>';
		if($cf_thumb!=""){
		$output .= $cf_thumb;
		}else{
		$output .= get_the_post_thumbnail( $post->ID, 'blog-post-thumbnail2', array('class' => 'alignleft imgborder','alt' =>'', 'title' =>'') );
		}
		$output .='<h5><a href="'.get_permalink().'" rel="bookmark" title="'.__('Permanent Link to','bluelinerfoundation') .'">'.get_the_title().'</a></h5>';
		$output .= bf_string_limit_words($excerpt,15).'. <a href="'.get_permalink().'">'.__('Read more...','bluelinerfoundation').'</a>';
		$output .='</li>';
		 endwhile; 
		 
		wp_reset_query();
		
		return do_shortcode($output).'</ul>';
	}
?>
