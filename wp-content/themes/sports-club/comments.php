<?php
/**
 * @package 	WordPress
 * @subpackage 	Sports Club
 * @version		1.0.0
 * 
 * Comments Template
 * Created by CMSMasters
 * 
 */


if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
    die(esc_html__('Please do not load this page directly. Thanks!', 'sports-club'));
}


if (post_password_required()) { 
	echo '<p class="nocomments">' . esc_html__('This post is password protected. Enter the password to view comments.', 'sports-club') . '</p>';
	
	
    return;
}


if (comments_open()) {
	if (have_comments()) {
		echo '<aside id="comments" class="post_comments">' . "\n" . 
			'<h3 class="post_comments_title">';
		
		
		comments_number(esc_attr__('No Comments', 'sports-club'), esc_attr__('Comment', 'sports-club') . ' (1)', esc_attr__('Comments', 'sports-club') . ' (%)');
		
		
		echo '</h3>' . "\n";
		
		
		if (get_previous_comments_link() || get_next_comments_link()) {
			echo '<aside class="project_navi" role="navigation">' . "\n\t" . 
				'<span class="fl">' . "\n\t\t";
			
			
			previous_comments_link('&larr; ' . esc_attr__('Older Comments', 'sports-club'));
			
			
			echo "\n\t" . '</span>' . "\n\t" . 
			'<span class="fr">' . "\n\t\t";
			
			
			next_comments_link(esc_attr__('Newer Comments', 'sports-club') . ' &rarr;');
			
			
			echo "\n\t" . '</span>' . "\r" . 
			'</aside>' . "\n";
		}
		
		
		echo '<ol class="commentlist">' . "\n";
		
		
		wp_list_comments(array( 
			'type' => 'comment', 
			'callback' => 'mytheme_comment' 
		));
		
		
		echo '</ol>' . "\n";
		
		
		if (get_previous_comments_link() || get_next_comments_link()) {
			echo '<aside class="project_navi" role="navigation">' . "\n\t" . 
				'<span class="fl">' . "\n\t\t";
			
			
			previous_comments_link('&larr; ' . esc_attr__('Older Comments', 'sports-club'));
			
			
			echo "\n\t" . '</span>' . "\n\t" . 
			'<span class="fr">' . "\n\t\t";
			
			
			next_comments_link(esc_attr__('Newer Comments', 'sports-club') . ' &rarr;');
			
			
			echo "\n\t" . '</span>' . "\r" . 
			'</aside>' . "\n";
		}
		
		
		echo '</aside>';
	}
	
	
	$form_fields =  array( 
		'author' => '<div class="form_wrapper"><p class="comment-form-author">' . "\n" . 
			'<input type="text" id="author" name="author" placeholder="' . esc_html__('Your name', 'sports-club') .'" value="' . esc_attr($commenter['comment_author']) . '" size="45"' . ((isset($aria_req)) ? $aria_req : '') . ' />' . "\n" . 
			'<label for="author">' . esc_html__('Your name', 'sports-club') . (($req) ? ' <span class="color_2">*</span>' : '') . '</label>' . "\n" . 
		'</p>' . "\n", 
		'email' => '<p class="comment-form-email">' . "\n" . 
			'<input type="text" id="email" name="email" placeholder="' . esc_html__('Email', 'sports-club') . '" value="' . esc_attr($commenter['comment_author_email']) . '" size="45"' . ((isset($aria_req)) ? $aria_req : '') . ' />' . "\n" . 
			'<label for="email">' . esc_html__('Email', 'sports-club') . (($req) ? ' <span class="color_2">*</span>' : '') . '</label>' . "\n" . 
		'</p>' . "\n", 
		'url' => '<p class="comment-form-url">' . "\n" . 
			'<input type="text" id="url" name="url" placeholder="' . esc_html__('Website', 'sports-club') . '" value="' . esc_attr($commenter['comment_author_url']) . '" size="45" />' . "\n" . 
			'<label for="url">' . esc_html__('Website', 'sports-club') . '</label>' . "\n" . 
		'</p></div>' . "\n" 
	);
	
	
	echo "\n\n";
	
	
	comment_form(array( 
		'comment_field' => 	'<p class="comment-form-comment">' . 
			'<textarea name="comment" id="comment" cols="60" rows="4" placeholder="Message"  ></textarea>' . 
		'</p>', 
		'fields' => 			apply_filters('comment_form_default_fields', $form_fields), 
		'must_log_in' => 		'<p class="must-log-in">' . 
									esc_html__('You must be', 'sports-club') . 
									' <a href="' . esc_url(wp_login_url(apply_filters('the_permalink', get_permalink()))) . '">' 
										. esc_html__('logged in', 'sports-club') . 
									'</a> ' 
									. esc_html__('to post a comment', 'sports-club') . 
								'.</p>' . "\n", 
		'logged_in_as' => 		'<p class="logged-in-as">' . 
									esc_html__('Logged in as', 'sports-club') . 
									' <a href="' . esc_url(admin_url('profile.php')) . '">' . 
										$user_identity . 
									'</a>. ' . 
									'<a class="all" href="' . esc_url(wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '" title="' . esc_attr__('Log out of this account', 'sports-club') . '">' . 
										esc_html__('Log out?', 'sports-club') . 
									'</a>' . 
								'</p>' . "\n", 
		'comment_notes_before' => 	'' . "\n", 
		'comment_notes_after' => 	'', 
		'id_form' => 				'commentform', 
		'id_submit' => 				'submit', 
		'title_reply' => 			esc_attr__('Leave a Reply', 'sports-club'), 
		'title_reply_to' => 		esc_attr__('Leave your comment to', 'sports-club'), 
		'cancel_reply_link' => 		esc_attr__('Cancel Reply', 'sports-club'), 
		'label_submit' => 			esc_attr__('Send message', 'sports-club') 
	));
}

