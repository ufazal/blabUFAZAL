<?php

/*********For Localization**************/
load_theme_textdomain( 'bluelinerfoundation', TEMPLATEPATH.'/languages' );

$locale = get_locale();
$locale_file = TEMPLATEPATH."/languages/$locale.php";
if ( is_readable($locale_file) )
    require_once($locale_file);
/*********End For Localization**************/


// The excerpt based on character
if(!function_exists("bf_string_limit_char")){
	function bf_string_limit_char($excerpt, $substr=0, $strmore = "..."){
		$string = strip_tags(str_replace('...', '...', $excerpt));
		if ($substr>0) {
			$string = substr($string, 0, $substr);
		}
		if(strlen($excerpt)>=$substr){
			$string .= $strmore;
		}
		return $string;
	}
}
// The excerpt based on words
if(!function_exists("bf_string_limit_words")){
	function bf_string_limit_words($string, $word_limit){
	  $words = explode(' ', $string, ($word_limit + 1));
	  if(count($words) > $word_limit)
	  array_pop($words);
	  
	  return implode(' ', $words);
	}
}

if ( ! isset( $content_width ) )
	$content_width = 620;

add_action( 'after_setup_theme', 'bf_setup' );



/*Template for comments and pingbacks. */
if ( ! function_exists( 'bf_comment' ) ) :
function bf_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>" class="con-comment">
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 60 ); ?>
		</div><!-- .comment-author .vcard -->


		<div class="comment-body">
			<?php  printf( __( '%s ', 'bluelinerfoundation' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?><br />
			<span class="time">
			<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s %2$s', 'bluelinerfoundation' ), get_comment_date(),  get_comment_time() ); ?></a>
				<?php edit_comment_link( __( '(Edit)', 'bluelinerfoundation' ), ' ' );?>
			</span>
			<?php comment_text(); ?>
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em><?php _e( 'Your comment is awaiting moderation.', 'bluelinerfoundation' ); ?></em>
			<?php endif; ?>
			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</div>
		<div class="clear"></div>
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'bluelinerfoundation' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'bluelinerfoundation'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

/*Prints HTML with meta information for the current post (category, tags and permalink).*/
if ( ! function_exists( 'bf_posted_in' ) ) :
function bf_posted_in() {
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'Posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'bluelinerfoundation' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( 'Posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'bluelinerfoundation' );
	} else {
		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'bluelinerfoundation' );
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}
endif;

/*Clearing the automatic paragraphs and breaks on shortcodes that WordPress is adding automatically when filtering content.*/
function bf_remove_wpautop($content) { 
	$content = do_shortcode(shortcode_unautop($content)); 
	$content = preg_replace('#^<\/p>|^<br \/>|<p>$#', '', $content);
	$content = str_replace('<br />', '', $content);
	$content = str_replace('<p><div', '<div', $content);
	return $content;
}
	
/*Used in shortcodes to remove the default paragraphs WordPress adds */
function bf_remove_autop($content) { 
	$content = do_shortcode( shortcode_unautop($content) ); 
	$content = preg_replace( '#^<\/p>|^<br \/>|<p>$#', '', $content );
	return $content;
}

/* for top menu */
function nav_page_fallback() {
if(is_front_page()){$class="current_page_item";}
print '<ul class="lavaLamp " id="topnav"><li class="'.$class.'"><a href=" '.home_url( '/') .' " title=" '.__('Click for Home','bluelinerfoundation').' ">'.__('Home','bluelinerfoundation').'</a></li>';
    wp_list_pages( 'title_li=&sort_column=menu_order' );
print '</ul>';
}
/* add home link as menu option */
function home_page_menu_args( $args ) {
$args['show_home'] = true;
return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );
/* for widget shortcode */
add_filter('widget_text', 'do_shortcode');


// recurively looks for featured images
function get_featured_recursive($post) {
  if (has_post_thumbnail( $post->ID ) ) {
    return $post->ID;
  } else if ($post->post_parent != 0) {
    return get_featured_recursive(get_post($post->post_parent));
  } else {
    return null;
  }
}






?>