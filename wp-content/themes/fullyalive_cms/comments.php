<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to bf_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Foundation
 * @since foundation 1.0
 */
?>

			<div id="comments">
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'bluelinerfoundation' ); ?></p>
			</div><!-- #comments -->
<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */
		return;
	endif;
?>

<?php
	// You can start editing here -- including this comment!
?>

<?php if ( have_comments() ) : ?>
			<h3 id="comments-title"><?php
			printf( _n( 'One Comment to %2$s', '%1$s Comments to %2$s', get_comments_number(), 'bluelinerfoundation' ),
			number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
			?></h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'bluelinerfoundation' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'bluelinerfoundation' ) ); ?></div>
			</div> <!-- .navigation -->
<?php endif; // check for comment navigation ?>

			<ol class="commentlist">
				<?php
					/* Loop through and list the comments. Tell wp_list_comments()
					 * to use bluelinerfoundation_comment() to format the comments.
					 * If you want to overload this in a child theme then you can
					 * define bluelinerfoundation_comment() and that will be used instead.
					 * See bluelinerfoundation_comment() in bluelinerfoundation/functions.php for more.
					 */
					wp_list_comments( array( 'callback' => 'bf_comment' ) );
				?>
			</ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'bluelinerfoundation' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'bluelinerfoundation' ) ); ?></div>
			</div><!-- .navigation -->
<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:
	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) :
?>
	<p class="nocomments"><?php _e( 'Comments are closed.', 'bluelinerfoundation' ); ?></p>
<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>

<?php comment_form(array(
'title_reply'          => __( 'What do you think?' ),
'label_submit'         => __( 'Submit' ),
'comment_notes_after' => '',
'comment_notes_before' => '<p>Keep the conversation going by both adding your comments and by passing this along to three colleagues. That’s how we all improve.</p><br /><p><i><small>Your email address will not be published. Required fields are marked *</i></small></p><br />'

)); ?>


</div><!-- #comments -->

