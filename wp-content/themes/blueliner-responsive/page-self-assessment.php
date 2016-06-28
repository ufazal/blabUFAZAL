<?php
/**
 * Template Name: Self Assessment page
 */

get_header(); ?>

<?php
    // Start the loop.
    while ( have_posts() ) : the_post(); 
    $post_id = get_the_ID();
    $allpage_title = get_post_meta( $post_id, '_allpage_title', true );
    $allpage_sub_title = get_post_meta( $post_id, '_allpage_sub_title', true );
    
    $sa_url = get_post_meta( $post_id, '_selfassessment_url', true );
    $sa_fb_url = get_post_meta( $post_id, '_selfassessment_fb_url', true );
    $sa_twitter_url = get_post_meta( $post_id, '_selfassessment_twitter_url', true );
    ?>
	<section id="careers-bottom">            
	    <div class="container">                
	        <div class="row">
	            <div class="col-md-8">
	                <div class="interest-quiz">
	                    <h5><?php echo $allpage_title; ?></h5>
	<!--                    <div class="warning-box">
	                        <div class="top"></div>
	                        <p><strong>bold text</strong></p>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Pellentesque hendrerit sagittis tortor, non fringilla metus bibendum vel. <br>Integer malesuada odio massa, <br>sit amet luctus sapien finibus vel.</p>
	                        <div class="bottom"></div>
	                    </div>-->
	                    <p><?php echo $allpage_sub_title; ?></p>
	                    <!--<a target="_blank" href="http://7pillarsdigital.com/">Take the quiz now</a>-->
	                </div>
	            </div>
	            <div class="col-md-4">
	                <div class="link-7pillar">
	                    <a target="_blank" href="<?php echo $sa_url; ?>">
	                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/blue-7-pillars.png" alt="">
	                    </a>
	                    <ul class="team-socials">
	                        <li><a class="fb" href="<?php echo $sa_fb_url; ?>" target="_blank">FB</a></li>
	                        <li><a class="tt" href="<?php echo $sa_twitter_url; ?>" target="_blank">TT</a></li>
	                    </ul>
	                </div>                
	            </div>
	        </div>
	    </div>
	</section>
    
    <section id="self-assessment">
    	<div class="container">
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
    </section><?php
    endwhile; ?>
    
    <?php do_action( 'wds_page_builder_load_parts' ); ?>

<?php get_footer(); ?>        
