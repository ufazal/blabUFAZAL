<?php
/**
 * @author m.bitenieks
 * @copyright 2010
 */

    
$madza = 'madza_';

$meta_box = array(
	'id' => 'my-meta-box',
	'title' => 'Page Options',
	'page' => 'page',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		
        array(
			'name' => 'Header:',
            'desc' => 'Select header type.',
			'id' => $madza . 'header_type',
			'type' => 'select',
			'options' => array('Not selected', 'Nivo Slider', 'BX Slider', 'Orbit Slider', 'Image from URL')
		),
        
        array(
			'name' => 'Image URL:',
			'desc' => 'Enter Image URL here if selected "Image from URL", included http://',
			'id' => $madza . 'header_url',
			'type' => 'text',
			'std' => ''
		),
        
        array(
			'name' => 'Title Type:',
            'desc' => 'Select page title type.',
			'id' => $madza . 'title_type',
			'type' => 'select',
			'options' => array('Title only', 'SubTitle only', 'Title & SubTitle text', 'disable')
		), 
        
        array(
			'name' => 'SubTitle:',
            'desc' => 'Enter custom SubTitle text, can use HTML atributes.',
			'id' => $madza . 'custom_text',
			'type' => 'textarea',
			'std' => ''
		),
        
        array(
			'name' => 'Sidebar:',
            'desc' => 'Select sidebar position.',
			'id' => $madza . 'sidebar_type',
			'type' => 'select',
			'options' => array('Not selected','Right', 'Left')
		),
        
        array(
			'name' => 'SubPages:',
            'desc' => 'Turn ON/OFF Subpages in sidebar.',
			'id' => $madza . 'subpages',
			'type' => 'checkbox',
			'std' => ''
		), 
        
        array(
			'name' => 'ParentPages:',
            'desc' => 'Turn ON/OFF ParentPages in sidebar.',
			'id' => $madza . 'parentpages',
			'type' => 'checkbox',
			'std' => ''
		), 
        
        array(
			'name' => 'Categories:',
            'desc' => 'Turn ON/OFF Categories in sidebar.',
			'id' => $madza . 'categories',
			'type' => 'checkbox',
			'std' => ''
		), 
        
        array(
			'name' => 'Page Widgets:',
            'desc' => 'Turn ON/OFF page widget in sidebar.',
			'id' => $madza . 'widget_1',
			'type' => 'checkbox',
			'std' => ''
		),
        
        array(
			'name' => 'Blog Widgets:',
            'desc' => 'Turn ON/OFF blog widget in sidebar.',
			'id' => $madza . 'widget_2',
			'type' => 'checkbox',
			'std' => ''
		),
        
        array(
			'name' => 'Contact Page Widgets:',
            'desc' => 'Turn ON/OFF contact page widget in sidebar.',
			'id' => $madza . 'widget_3',
			'type' => 'checkbox',
			'std' => ''
		)
        
        
	)
);

add_action('admin_menu', 'mytheme_add_box');

// Add meta box
function mytheme_add_box() {
	global $meta_box;
	
	add_meta_box($meta_box['id'], $meta_box['title'], 'mytheme_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
}

// Callback function to show fields in meta box
function mytheme_show_box() {
	global $meta_box, $post;
	
    

  
	// Use nonce for verification
	echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	
	echo '<table class="form-table">';

	foreach ($meta_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		
		echo '<tr>',
				'<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
				'<td>';
		switch ($field['type']) {
		  
            case 'select':
				echo '<select name="', $field['id'], '" id="', $field['id'], '">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
				}
				echo '</select>',
                '<br />', $field['desc'];
				break;
		
			case 'text':
				echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />',
					'<br />', $field['desc'];
				break;
                
            case 'select':
				echo '<select name="', $field['id'], '" id="', $field['id'], '">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
				}
				echo '</select>', '<br />', $field['desc'];
				break;
		
			case 'textarea':
				echo '<textarea name="', $field['id'], '" id="', $field['id'], '"  size="30" style="width:97%" >', $meta ? $meta : $field['std'], '</textarea>',
					'<br />', $field['desc'];
				break;
           
            case 'select':
				echo '<select name="', $field['id'], '" id="', $field['id'], '">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option ? ' selected="selected"' : '', '>', $option, '</option>';
				}
				echo '</select>', '<br />', $field['desc'];
				break;
            
   
            case "checkbox": 
                echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />','<br />', $field['desc'];
	       	break;
            
            case "checkbox": 
                echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '" value="true" ', $meta ? ' checked="checked"' : '', ' />','<br />', $field['desc'];
	       	break;
            
             case "checkbox": 
                echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />','<br />', $field['desc'];
	       	break;
            
            case "checkbox": 
                echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />','<br />', $field['desc'];
	       	break;
            
            case "checkbox": 
                echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />','<br />', $field['desc'];
	       	break;
            
            case "checkbox": 
                echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"', $meta ? ' checked="checked"' : '', ' />','<br />', $field['desc'];
	       	break;
		
		}
		echo 	'<td>',
			'</tr>';
	}
	
	echo '</table>';
}

add_action('save_post', 'mytheme_save_data');

// Save data from meta box
function mytheme_save_data($post_id) {
	global $meta_box;
	
	// verify nonce
	if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}

	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}

	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
	
	foreach ($meta_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}

?>