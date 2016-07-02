<?php  ?><?php
/*
	Plugin Name: Custom Portfolio Item Write Panel
	Plugin URI: http://wefunction.com/2008/10/tutorial-create-custom-write-panels-in-wordpress
	Description: hack to add custom fields area for portfolio within the admin panel
	Version: 1.0
	Author: Adam
	Author URI: http://bluelinerny.com
/* ----------------------------------------------*/

	$work_meta_boxes =
	array(
	"client" => array(
	"name" => "client",
	"std" => "",
	"title" => "Client",
	"description" => "This is internal for the moment and doesnt need to be filled in -adam</strong>."), // "," Important to separate arrays
	
	"src_thumb" => array(
	"name" => "src_thumb",
	"std" => "",
	"title" => "Client Thumbnail or Logo Image (this will be used in the index page)",
	"description" => "upload a thumbnail to wordpress and copy and paste the url here <strong>save the post</strong>."),
	
	
	);
	
	
	
	function work_meta_boxes() {
		global $post, $work_meta_boxes, $hcard_meta_boxes;
		foreach($work_meta_boxes as $meta_box) {
			$meta_box_value = get_post_meta($post->ID, $meta_box['name'].'_value', true);

			if($meta_box_value == "")
			$meta_box_value = $meta_box['std'];
		
			echo'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';

			echo'<h2>'.$meta_box['title'].'</h2>';

			echo'<input type="text" name="'.$meta_box['name'].'_value" value="'.$meta_box_value.'" size="55" /><br />';

			echo'<p><label for="'.$meta_box['name'].'_value">'.$meta_box['description'].'</label></p>';
		}
	}

	
	function create_meta_box() {
		global $theme_name;
	
		if ( function_exists('add_meta_box') )
			add_meta_box( 'work-meta-boxes', 'Portfolio Post Settings', 'work_meta_boxes', 'page', 'normal', 'high' );
			
	}



	function save_pagedata( $post_id ) {
		global $post, $work_meta_boxes;
		foreach($work_meta_boxes as $meta_box) {
		// Verify
			if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) )) {
				return $post_id;
			}

			if ( 'page' == $_POST['post_type'] ) {
				if ( !current_user_can( 'edit_page', $post_id ))
					return $post_id;
			} else {
				if ( !current_user_can( 'edit_post', $post_id ))
					return $post_id;
			}

			$data = $_POST[$meta_box['name'].'_value'];

			if(get_post_meta($post_id, $meta_box['name'].'_value') == "")
				add_post_meta($post_id, $meta_box['name'].'_value', $data, true);
			elseif($data != get_post_meta($post_id, $meta_box['name'].'_value', true))
				update_post_meta($post_id, $meta_box['name'].'_value', $data);
			elseif($data == "")
				delete_post_meta($post_id, $meta_box['name'].'_value', get_post_meta($post_id, $meta_box['name'].'_value', true));
		}
	}
	


	add_action('admin_menu', 'create_meta_box');  
	add_action('save_post', 'save_pagedata');
?>
