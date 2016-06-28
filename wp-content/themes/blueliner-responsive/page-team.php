<?php
/**
 * Template Name: Our Team page
 */
get_header(); ?>

<section id="team-featured">            
    <div class="container">                
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post(); 
            $post_id = get_the_ID();
            $allpage_title = get_post_meta( $post_id, '_allpage_title', true );
            $allpage_sub_title = get_post_meta( $post_id, '_allpage_sub_title', true );
            
            $cw_full_name = get_post_meta( $post_id, '_ceoword_full_name', true );
            $cw_designation = get_post_meta( $post_id, '_ceoword_designation', true );

            $cw_fb_url = get_post_meta( $post_id, '_ceoword_fb_url', true );
            $cw_twitter_url = get_post_meta( $post_id, '_ceoword_twitter_url', true );
            $cw_google_url = get_post_meta( $post_id, '_ceoword_google_url', true );
            $cw_linkedin_url = get_post_meta( $post_id, '_ceoword_linkedin_url', true );
            

            ?>

            
            <div class="row">
                <div class="col-md-12">
                    <?php 
                    if($allpage_title): ?>
                    <div class="team-heading wow fadeInUp">
                        <h4><?php echo $allpage_title; ?></h4>
                        <p>(def. "Blue Line = the Belt of Blue Ninja, the highest form of Marketing Expert")</p>
                        <p><?php echo $allpage_sub_title; ?></p>
                    </div><?php
                    endif; ?>
                </div>
            </div>

            <?php
            if($cw_full_name): ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="team-featured-item wow fadeInUp">
                        <div class="col-xs-12 col-md-8">
                            <h2>A word from our CEO</h2>
                            <?php the_content(); ?>
                            <div class="designation">
                                <h4><?php echo $cw_full_name; ?></h4>
                                <h5><?php echo $cw_designation; ?></h5>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <?php 
                            echo get_the_post_thumbnail( $post_id, 'large', array( 
                              'class' => "img-responsive", 
                              'alt' => trim(strip_tags( $post->post_title )),
                              'title' => trim(strip_tags( $post->post_title )),
                              'width' => '',
                              'height' => ''
                            )); ?>
                            <ul class="team-socials">
                                <li><a class="fb" href="<?php echo $cw_fb_url; ?>" target="_blank">FB</a></li>
                                <li><a class="tt" href="<?php echo $cw_twitter_url; ?>" target="_blank">TT</a></li>
                                <li><a class="gp" href="<?php echo $cw_google_url; ?>" target="_blank">GP</a></li>
                                <li><a class="li" href="<?php echo $cw_linkedin_url; ?>" target="_blank">LI</a></li>
                            </ul>
                        </div>                            
                    </div>
                </div>
            </div><?php
            endif; ?>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="heading wow fadeInUp">
                        <h3><?php _e( 'The Team', 'blueliner-responsive' ); ?></h3>
                        <span>view our team</span>
                    </div>
                </div>
            </div><?php
        endwhile; ?>

        <?php do_action( 'wds_page_builder_load_parts' ); ?>
        
<?php get_footer(); ?>        
        