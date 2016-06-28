<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */
?>

<div class="row">
    <div class="col-md-4">
  	
    <?php
    $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
    if ( $post_thumbnail_id ) {
        echo '<a href="'; the_permalink(); echo '" class="">';
        echo get_the_post_thumbnail( $post->ID, 'crop_image_525_350', array( 
            'class' => "img-responsive", 
            'alt' => trim(strip_tags( $post->post_title )),
            'title' => trim(strip_tags( $post->post_title )),
            'width' => '',
            'height' => ''
        ));
        echo '</a>';
    } else {
        echo '<a href="'; the_permalink(); echo '" class="">';
        echo '<img width="" height="" src="';
        echo bl_blog_catch_that_image();
        echo '" alt="" />';
        echo '</a>';
    }
    ?>
    </div>
    <div class="col-md-8">
    	<?php
		if ( is_single() ) :
			the_title( '<h4>', '</h4>' );
			edit_post_link( __( 'Edit', 'blueliner-responsive' ), '<span class="edit-link">', '</span>' ); 
		else :
			the_title( sprintf( '<h4><a href="%s">', esc_url( get_permalink() ) ), '</a></h4>' );
		endif;
		?>
        <span><?php echo get_human_time_ago($post); ?></span>
        <?php
		/* translators: %s: Name of current post */
		 the_excerpt(); 

		?>
        <a href="<?php echo esc_url(get_permalink()); ?>" title="">Read more -</a>
        <?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
		?>
    </div>
</div>
