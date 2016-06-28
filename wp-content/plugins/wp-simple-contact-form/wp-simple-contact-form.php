<?php	 	

/**
* Plugin Name: WP-Simple-Contact-Form-with-Captcha
* Plugin URI: http://www.payema.se/wp-simple-contact-form-plugin/
* Description: Developed to provide a simple contact for with spam protection.
* Author: Jesper Knutsson
* Author URI: http://www.payema.se
* Version: 0.9.2
*/

$plugin_dir =  ABSPATH . 'wp-content/plugins/wp-simple-contact-form/';
if(file_exists($plugin_dir.WPLANG.'.php')) include_once($plugin_dir.WPLANG.'.php');
if (!session_id()) session_start();

function message_remove_malicious($input) {
        if (empty($input)) return;
        $bad_inputs=array("\r", "mime-version", "content-type", "cc:", "to:");
        $input = str_replace($bad_inputs,"",$input);
        return $input;
    }

function __e($phrase) {
	global $language_array,$wpdb;
	if(!is_array($language_array)) $language_array = array();
	$phrase = mysql_real_escape_string($phrase);
	if (!array_key_exists($phrase,$language_array)) {
		$translation = $phrase;
	} else {
		$translation  = $language_array[$phrase];
	}	
	return $translation;
}


function wp_simple_contact_form() {
	global $wpdb;
	
	$plugin_path = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));
	$plugin_dir =  ABSPATH . 'wp-content/plugins/wp-simple-contact-form/';	
	$page_url = get_permalink($post->ID);
	$ip = $_SERVER['REMOTE_ADDR'];
	
	if(isset($_GET[msg])) {
		$output .= '<p icon="accept">'.__e(urldecode($_GET[msg])).'</p>';
	}
	
	//Process form
	if(isset($_POST[submit])) {
		
		foreach($_POST as $vblname => $value) {$postcontent[$vblname] = mysql_real_escape_string($value);}
		$validate = TRUE;
		preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/', $_POST['email'], $useremail);
		
		
		if($_POST['captcha'] != $_SESSION['rand_code'] OR empty($_POST['captcha'])) {
			$validate = FALSE;
			$errormsg[4] = '<span class="form-error" icon="warning">'.__e('The entered letters did not match the control').'</span>';		
		}		
		
		if(empty($postcontent['sender_name'])) {
			$validate = FALSE;
			$errormsg[0] = '<span class="form-error" icon="warning">'.__e('You have to enter your name').'</span>';		
		}
		
		if(empty($useremail)) {
			$validate = FALSE;
			if ($_POST['email']!=$useremail) {
				$errormsg[1] = '<span class="form-error" icon="warning">'.__e('You have to enter a valid email adress!').'</span>';
			} else {
				$errormsg[1] = '<span class="form-error" icon="warning">'.__e('You have to enter an email adress!').'</span>';
			}		
		}
		if(empty($postcontent['subject'])) {
			$validate = FALSE;
			$errormsg[2] = '<span class="form-error" icon="warning">'.__e('You have to enter a subject').'</span>';		
		}
		if(empty($postcontent['message'])) {
			$validate = FALSE;
			$errormsg[3] = '<span class="form-error" icon="warning">'.__e('You have to enter a message').'</span>';		
		}
		
		if($validate) {
				$recipient = get_option('scf_send_to_email');
				$name= $postcontent['sender_name'];
				$email = $postcontent['email'];
				$subject = $postcontent['subject'];
				$msg = stripslashes($postcontent['message']);
				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "From: ".$name." <".$email.">\r\n";
				$headers .= "Content-Type: text/plain; charset=\"".get_settings('blog_charset')."\"\r\n";
				$fullmsg = __e('Sender').': '.$name." <".$email.">\n";
				$fullmsg .= __e('Subject').': '.$subject."\n";
				$fullmsg .= wordwrap($msg, 80, "\n")."\n\n";
				$fullmsg .= "IP: ".$_SERVER['REMOTE_ADDR'];
				
				//Remove any attempt to modify headers etc
				$fullmsg = message_remove_malicious($fullmsg);
				
				$mail_success = wp_mail($recipient, get_option('scf_mail_subject'), $fullmsg, $headers);
				
				if($mail_success){
					$output .= '<p icon="accept">'.__e('Your message was sent successfully!').'</p>';
					unset($_POST['email']);
					unset($_POST['sender_name']);
					unset($_POST['message']);
					unset($_POST['subject']);
					//header('Location: '.$page_url.'?msg='.urlencode('Your message was sent successfully!'));
				} else {
					$output .= '<p icon="accept">'.__e('There was a problem sending your message, please try again!').'</p>';
				}
				
	}	
	}
	
	
	//Generate form
	$output .= '<form method="POST" action="'.$page_url.'" class="horizontal"><fieldset>'."\n";

	$output .= '<div class="field">
						<label for="sender_name">'.__e('Name').'</label>
						<input type="text" name="sender_name" value="'.$_POST['sender_name'].'"> '.$errormsg[0].'
					</div>'."\n";
	
	
	$output .= '<div class="field">
						<label for="sender_name">'.__e('Email').'</label>
						<input type="text" name="email" value="'.$_POST['email'].'"> '.$errormsg[1].'
					</div>'."\n";
	
	$output .= '<div class="field">
						<label for="subject">'.__e('Subject').'</label>
						<input type="text" name="subject" value="'.$_POST['subject'].'"> '.$errormsg[2].'
				</div>'."\n";

						
	$output .= '<div class="field">
						<label for="sender_name">'.__e('Message').' <br />'.$errormsg[3].'</label> 
						 <textarea name="message">'.$_POST['message'].'</textarea>';
	$output .= '</div>';
	
	//Set number of letters to user with captcha
	$num_letters = get_option('scf_captcha_num_letters');
	if($num_letters<1) $num_letters = 5; //If not set by admin, set to 5
	
	$output .= '<div class="field">
						<img src="'.$plugin_path.'captcha.php?n='.$num_letters.'" /><br />
						<label for="captcha">'.__e('Enter the text above').'</label>
						<input type="text" name="captcha" value=""> '.$errormsg[4].'
					</div>'."\n";				
	
			
	$output .='<div class="buttons">
					<input type = "submit" name = "submit" value="'.__e('Submit').'" style="" />
				</div>'."\n";
	$output .='</fieldset></form>'."\n";
	
	return $output;
}

function scf_add_admin_page() {
	add_options_page('Simple Contact Form options', 'Simple Contact Form options', 8, __FILE__, 'wp_simple_contact_form_admin_page');
}

function wp_simple_contact_form_admin_page() { 
	$base_name = plugin_basename('useronline/useronline-options.php');
	$base_page = 'admin.php?page='.$base_name;
	
	if(!current_user_can('edit_themes')) {
		die('Access Denied');
	}
	
	if(isset($_POST[submit])) {
	 	foreach($_POST as $vblname => $value) {$postcontent[$vblname] = mysql_real_escape_string($value); }
		
		update_option('scf_send_to_email', $postcontent[send_to_email]);
		update_option('scf_captcha_num_letters', $postcontent[captcha_num_letters]);
		update_option('scf_mail_subject', $postcontent[scf_mail_subject]);
		
		$ui_feedback = 'Your changes were saved';
	}
	
	
	?>
	
	<div class="wrap">
	<?php	 	 if(!empty($ui_feedback)) echo '<div id="message" class="updated fade"><p>'.$ui_feedback.'</p></div>'; ?>
		<h2>Simple Contact Form options</h2>
			<form method="post" action="<?php	 	 echo $_SERVER['REQUEST_URI']; ?>">
				<fieldset class="options">
			 		<legend></legend>
			 		<table width="50%"  border="0" cellspacing="3" cellpadding="3">
			 		
					 <tr valign="top">
						<th align="left">Send completed form to</th>
						<td align="left">
							<input type="text" name="send_to_email" value="<?php	 	 echo get_option('scf_send_to_email'); ?>" size="40" />
						</td>
					</tr>

					<tr valign="top">
						<th align="left">Subject heading of mail</th>
						<td align="left">
							<input type="text" name="scf_mail_subject" value="<?php	 	 echo get_option('scf_mail_subject'); ?>" size="40" />
						</td>
					</tr>
					
					<tr valign="top">
						<th align="left">Number of letters in capcha</th>
						<td align="left">
							<input type="text" name="captcha_num_letters" value="<?php	 	 echo get_option('scf_captcha_num_letters'); ?>" size="10" />
						</td>
					</tr>
					
					</table>
				<input type="submit" name="submit" value="Submit" />
				</fieldset>
			</form>
	<h2>Usage</h2>
	To use WP Simple Contact Form, simply add a page with the following text:
	<code>[wp_simple_contact_form]</code>
	<h2>Localization</h2>
	If you wish to localize the contact form, open the original language file in the plugin folder (sv_SE.php), add your translations and save the file as <code>language_code.php</code>, as defined by WPLANG in wp-config.php (for your setup we suggest <code><?php	 	 echo WPLANG; ?>.php</code>.
	
	</div>
	
	<?php	 	
	
}


add_action('admin_menu', 'scf_add_admin_page');

add_filter('the_content', 'place_wp_simple_contact_form', '7');

function place_wp_simple_contact_form($content){
	 $output = wp_simple_contact_form();
     $content = str_replace( '[wp_simple_contact_form]', $output, $content); 
	 return $content;
}

function writeCSS() {
	$path = WP_PLUGIN_URL.'/'.str_replace(basename( __FILE__),"",plugin_basename(__FILE__));
 	echo ( '<link rel="stylesheet" type="text/css" href="'. $path . 'form.css"> <!-- Added by the WP Simple contact form plugin --> ' ); 
}
add_action('wp_head', 'writeCSS');

?>