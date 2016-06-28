<?php	
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

    <!-- DIGITAL MARKETING -->
    <section id="digital-marketing">
        <div class="container-fluid">   
            
            <!-- Description - End -->
            <div class="container">
                <?php
                // Start the loop.
                while ( have_posts() ) : the_post(); ?>

                <div class="heading wow fadeInUp">
                    <?php
                    $post_id = get_the_ID();
                    $alter_title = get_post_meta( $post_id, '_allpage_title', true );
                    $sub_title = get_post_meta( $post_id, '_allpage_sub_title', true );
                    $open_paragraph_text = get_post_meta( $post_id, '_homepage_open_paragraph_text', true );
                    ?>
                    <h3><?php echo $alter_title; ?></h3>
                    <span><?php echo $sub_title; ?></span>
                    
                    <div class="heading-border"></div>
                </div>
                <div class="description <?php post_class(); ?>">
                    <?php
                    if($open_paragraph_text): ?>
                    <div class="row">
                        <div class="col-md-12 wow slideInLeft">
                            <p><?php echo $open_paragraph_text; ?></p>
                        </div>
                    </div><?php
                    endif; ?>

                    <div class="row">
                        <div class="col-md-6 wow slideInLeft">
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
                        </div>
                        <div class="col-md-6 wow slideInRight">
                            <?php
                            $agency_right_text = get_post_meta( $post_id, '_homepage_agency_right_text', true );
                            $agency_url = get_post_meta( $post_id, '_homepage_agency_url', true ); 
                            $agency_text = get_post_meta( $post_id, '_homepage_agency_url_text', true ); 
                            ?>
                            <p><?php echo $agency_right_text; ?></p>
                            <!-- <a class="read-more hvr-grow" href="<?php echo site_url() . $agency_url ; ?>"><?php echo $agency_text; ?></a> -->
                        </div>
                    </div>
                    <?php edit_post_link( __( 'Edit', 'blueliner-responsive' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
                </div><?php
                endwhile; ?>                          
            </div>
            <!-- Description - End -->
            
            <!-- Service Icons -->
            <div class="service-container">
                <div class="container-fluid">
                    <div class="container">                            
                        <div class="row">
                            <?php
                            $blr_agency_url = blr_get_option( 'agency_url' ); 
                            $blr_labs_url = blr_get_option( 'labs_url' ); 
                            $blr_service_url = blr_get_option( 'service_url' ); 
                            ?>
                            <div class="col-xs-12 col-sm-4 col-md-4 wow zoomIn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-agency.png" alt="Agency" width="84" height="105" />
                                <h4>Agency</h4>
                                <a class="read-more hvr-grow" href="<?php echo site_url() . $blr_agency_url ; ?>">Read more -</a>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 wow zoomIn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-labs.png" alt="Agency" width="83" height="105" />
                                <h4>Labs</h4>
                                <a class="read-more hvr-grow" href="<?php echo site_url() . $blr_labs_url ; ?>">Read more -</a>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 wow zoomIn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-services.png" alt="Agency" width="65" height="105" />
                                <h4>Services</h4>
                                <a class="read-more hvr-grow" href="<?php echo site_url() . $blr_service_url ; ?>">Read more -</a>
                            </div>
                        </div>
                    </div> 
                </div>                                       
            </div>
            <!-- Service Icons - End -->
            
            <!-- Counter -->
            <div class="counter-container">
                <div class="container">
                    <?php
                    $client_serve_no = blr_get_option( 'client_serve_no' ); 
                    $active_campaign_no = blr_get_option( 'active_campaign_no' ); 
                    $employee_no = blr_get_option( 'employee_no' ); 
                    $industry_explore_no = blr_get_option( 'industry_explore_no' ); 
                    ?>
                    <div class="counters">
                        <p class="digit"><span class="counter"><?php echo $client_serve_no; ?></span></p>
                        <p class="title">Clients Served</p>
                    </div>
                    <div class="counters">
                        <p class="digit"><span class="counter"><?php echo $active_campaign_no; ?></span></p>
                        <p class="title">Active Campaigns</p>
                    </div>
                    <div class="counters">
                        <p class="digit"><span class="counter"><?php echo $employee_no; ?></span></p>
                        <p class="title">Employees</p>
                    </div>
                    <div class="counters">
                        <p class="digit"><span class="counter"><?php echo $industry_explore_no; ?></span></p>
                        <p class="title">Industries Explored</p>
                    </div>
                </div>                    
            </div>
            <!-- Counter - End -->
            
        </div>
    </section>
    <!-- DIGITAL MARKETING - End -->
    
    <?php do_action( 'wds_page_builder_load_parts' ); ?>
    
<?php get_footer(); ?>   