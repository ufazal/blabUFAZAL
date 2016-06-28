<?php
/**
 * Testimonial List
 */


?>
<section id="testiomonials-featured"> 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="featured-item wow fadeInUp">
                    <?php
                    $args = array(
                        'posts_per_page' => -1,
                        'post_type'      =>  'quote',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'quote_cat',
                                'field' => 'slug',
                                'terms' => 'featured'
                            )
                        )
                    );

                    $quotes = get_posts( $args );
                    if(count($quotes)>0): 
                    foreach ($quotes as $key => $value) {
                        $post_content = $value->post_content;
                        $post_id = $value->ID;
                        $post_title = $value->post_title;
                        $full_name = get_post_meta( $value->ID, '_quote_full_name', true );
                        $designation = get_post_meta( $value->ID, '_quote_designation', true );
                    } ?>
                    <div class="tm-icon"></div>
                    <div class="featured-item-info">
                        <div class="col-md-4 featured-item-img">
                            <?php 
                            echo get_the_post_thumbnail( $post_id, 'crop_image_380_330', array( 
                              'class' => "img-circle img-responsive", 
                              'alt' => trim(strip_tags( $post_title )),
                              'title' => trim(strip_tags( $post_title )),
                              'width' => '',
                              'height' => ''
                            )); ?>
                        </div>
                        <div class="col-md-8 featured-item-desc">
                            <p><?php echo $post_content;?></p>
                            <p>
                                <span class="name"><?php echo $full_name; ?></span>
                                <span class="designation"><?php echo $designation; ?></span>
                            </p>
                        </div>
                    </div>
                    <?php 
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testiomonials-others-container">             
    <div id="testiomonials-others">
        <div class="container-fluid">
            
            <div class="container">                    
                <div class="row">
                    <div class="thumbnails">
                        <?php
                        $args = array(
                            'posts_per_page' => -1,
                            'post_type'      =>  'quote',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'quote_cat',
                                    'field' => 'slug',
                                    'terms' => 'team-member'
                                )
                            )
                        );

                        $quotes = get_posts( $args );
                        if(count($quotes)>0): 
                            foreach ($quotes as $key => $value):
                                $full_name = get_post_meta( $value->ID, '_quote_full_name', true );
                                $designation = get_post_meta( $value->ID, '_quote_designation', true );
                                ?>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <div class="tm-icon"></div>
                                        <?php 
                                        if (get_post_thumbnail_id($value->ID)) {
                                            echo get_the_post_thumbnail( $value->ID, 'crop_image_380_330', array( 
                                              'class' => "img-responsive", 
                                              'alt' => trim(strip_tags( $value->post_title )),
                                              'title' => trim(strip_tags( $value->post_title )),
                                              'width' => '',
                                              'height' => ''
                                            )); 
                                        } 
                                        else {?>
                                            <img src="http://placehold.it/380x331" class="img-responsive" alt="testimonial" title="testimonial">
                                        <?php
                                        } ?>
                                        <div class="caption">
                                            <p><?php echo $value->post_content;?></p>
                                            <h3><?php echo $full_name; ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                        endif; ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
        
        
