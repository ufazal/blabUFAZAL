<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */
    get_header('servicelanding'); 
    // Start the loop.
    while ( have_posts() ) : the_post(); 

    $_sub_title = get_post_meta( $post->ID, '_services_l_manager_sub_title', true );
    $_manage_img = get_post_meta( $post->ID, '_services_l_manager_image', true );
    $team_url = get_post_meta( $post->ID, '_services_l_manager_team_url', true );
    
    $full_name = get_post_meta( $post->ID, '_services_l_manager_full_name', true );
    $designation = get_post_meta( $post->ID, '_services_l_manager_designation', true );
    $fb_url = get_post_meta( $post->ID, '_services_l_manager_fb_url', true );
    $twitter_url = get_post_meta( $post->ID, '_services_l_manager_twitter_url', true );
    $google_url = get_post_meta( $post->ID, '_services_l_manager_google_url', true );
    $linkedin_url = get_post_meta( $post->ID, '_services_l_manager_linkedin_url', true );
    
    $adimage = get_post_meta( $post->ID, '_services_l_manager_adimage', true );
    $advertise_url = get_post_meta( $post->ID, '_services_l_manager_advertise_url', true );

    //Case Study
    $casestudyimg = get_post_meta( $post->ID, '_services_l_case_study_image', true );
    $case_study_title = get_post_meta( $post->ID, '_services_l_case_study_title', true );
    $case_study_page_url = get_post_meta( $post->ID, '_services_l_case_study_page_url', true );
    $case_study_member_url = get_post_meta( $post->ID, '_services_l_case_study_member_url', true );
    $case_study_location_url = get_post_meta( $post->ID, '_services_l_case_study_location_url', true );
    $case_study_security_url = get_post_meta( $post->ID, '_services_l_case_study_security_url', true );
    $case_study_cart_url = get_post_meta( $post->ID, '_services_l_case_study_cart_url', true );
    $case_study_summary = get_post_meta( $post->ID, '_services_l_case_study_summary', true );
    
    //Services
    $our_s_cat_id = get_the_terms( $post->ID, 'practicearea_cat', true );
    
    if(!empty($our_s_cat_id)) {
        $cat_obj = current($our_s_cat_id);
    }

    $sArgs = array(
        'posts_per_page' => -1,
        'post_type'      =>  'practicearea',
        'tax_query' => array(
            array(
                'taxonomy' => 'practicearea_cat',
                'field' => 'slug',
                'terms' => $cat_obj->slug
            )
        )
    );

    $_area_s_service = get_posts( $sArgs );


    ?>    
    <!-- Body content -->
    <div id="body-content">
        <div class="container">
            <div class="row">
                <!-- Left -->
                <div class="col-xs-12 col-md-8">
                    <div class="pa-sinlge-intro">
                        <h3><?php echo $_sub_title; ?></h3>
                        <?php echo the_content(); ?>
                    </div>
                    <div class="pa-sinlge-services">
                        <h3>Services</h3>
                        <ul><?php 
                            foreach ($_area_s_service as $key => $post) {
                                $term_s_pillar = @current(get_the_terms( $post->ID, 'service_pillar', true ));
                                $getPerm = esc_url( get_permalink($post->post_id) );
                                $permaLInk = end(explode('/practicearea/', $getPerm));
                                $permaLInk = current(explode('/', $permaLInk));
                                $permaLInk = ($permaLInk == '7-pillars-marketing-audit') ? 'pillars-marketing-audit' : $permaLInk;
                                $name_pillar = isset($term_s_pillar->name) ? ' ('. $term_s_pillar->name .')' : '';
                                //$term = get_term_by( 'id', $child, 'practicearea_cat' );
                                echo '<li class="'. $permaLInk .' icon-service'. $key .'"><a href="' . $getPerm . '">' . $post->post_title . $name_pillar . '</a></li>';
                            } ?>
                        </ul>
                    </div>
                </div>
                <!-- Left - End -->

                <!-- Right -->
                <div class="col-xs-12 col-md-4">
                    <div class="pa-sinlge-manager">
                        <div class="col-md-12">
                            <h3>Practice area manager</h3>
                            <div class="item team-item col-md-12">
                                <img class="img-responsive" src="<?php echo $_manage_img; ?>" alt="<?php echo $full_name; ?>" width="" height="" />
                                <h5><a href="<?php echo $team_url; ?>"><?php echo $full_name; ?></a></h5>
                                <span><?php echo $designation; ?></span>
                                <ul class="team-socials">
                                    <li><a class="fb" href="<?php echo $fb_url; ?>" target="_blank">FB</a></li>
                                    <li><a class="tt" href="<?php echo $twitter_url; ?>" target="_blank">TT</a></li>
                                    <li><a class="gp" href="<?php echo $google_url; ?>" target="_blank">GP</a></li>
                                    <li><a class="li" href="<?php echo $linkedin_url; ?>" target="_blank">LI</a></li>
                                </ul>
                            </div>
                        </div>                            
                    </div>
                    <div class="pa-sinlge-website-analysis">
                        <div class="col-md-12">
                            <a href="<?php echo $advertise_url; ?>">
                                <img class="img-responsive" src="<?php echo $adimage; ?>" alt="" width="100%" height="" />
                            </a>
                        </div>                            
                    </div>
                </div>
                <!-- Right - End -->
            </div>
        </div>
    </div>        
    <!-- Body content - End -->
    
    <!-- Case studies features -->
    <?php
    if(!empty($case_study_title)): ?>
    <div class="pa-single-cs-header container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Case study features</h3>
                </div>
            </div>
        </div>            
    </div>
    <section id="pa-single-cs-feature">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <img class="img-responsive" src="<?php echo $casestudyimg; ?>" alt="" />
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <h4><a target="_blank" href="<?php echo $case_study_page_url; ?>" title=""><?php echo $case_study_title; ?></a></h4>
                    <div class="icons">
                        <ul>
                            <li><a target="_blank" href="<?php echo $case_study_member_url; ?>" title=""></a></li>
                            <li><a target="_blank" href="<?php echo $case_study_location_url; ?>" title=""></a></li>
                            <li><a target="_blank" href="<?php echo $case_study_security_url; ?>" title=""></a></li>
                            <li><a target="_blank" href="<?php echo $case_study_cart_url; ?>" title=""></a></li>
                        </ul>
                    </div>
                    <p><?php echo $case_study_summary; ?></p>
                    <div class="view-btn">
                        <a target="_blank" href="<?php echo $case_study_page_url; ?>" title="">Webpage <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>            
    </section><?php
    endif;
    // End the loop.
    endwhile; ?>
    <!-- Case studies features - End -->
    
    <!-- Request a quote -->
    <section id="pa-single-request-quote">            
        <div class="container">

            <?php
            echo do_shortcode( '[contact-form-7 id="10582" title="Request Quote"]' ); ?>
            
            <div class="blog-bottom wow fadeInUp animated">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <?php //previous_post_link('%link', '<i class="fa fa-arrow-circle-left"></i> %title', ''); ?>
                        <?php previous_post_link('%link', 'Previous', false ); ?> 
                        <?php //next_post_link('%link', '%title <i class="fa fa-arrow-circle-right"></i>', ''); ?>
                        <?php next_post_link( '%link', 'Next', false ); ?>
                    </div>
                </div>
            </div>

        </div>            
    </section>
    <!-- Request a quote - End -->

<?php get_footer(); ?>
