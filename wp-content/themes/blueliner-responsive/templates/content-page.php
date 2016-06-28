<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */
?>

<div class="heading wow fadeInUp">
	<?php
    $alter_title = get_post_meta( $post->ID, '_allpage_title', true );
    $sub_title = get_post_meta( $post->ID, '_allpage_sub_title', true );

    if (!empty($alter_title)): ?>
    	<h3><?php echo $alter_title; ?></h3>
	<?php
	else: ?>
    	<?php the_title( '<h3>', '</h3>' ); ?>
	<?php
	endif; ?>
    <span><?php echo $sub_title; ?></span>

    <div class="heading-border"></div>
</div>

<div class="row">
    <div class="col-md-12 wow slideInRight">
        <?php 
        echo get_the_post_thumbnail( $post->ID, 'medium', array( 
          'class' => "img-responsive", 
          'alt' => trim(strip_tags( $post->post_title )),
          'title' => trim(strip_tags( $post->post_title ))
          )); ?>
        <?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'blueliner-responsive' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'blueliner-responsive' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>                    
    	<?php edit_post_link( __( 'Edit', 'blueliner-responsive' ), '<div class="entry-edit"><span class="edit-link">', '</span></div>' ); ?>
    </div>
</div>
