<?php
/**
 * Testimonial List
 */


?>
<section id="tetimonial-container"> 
    <div class="featured-tetimonial">
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
        <div class="list">
            <div class="tetimonial-image">
                <?php 
                echo get_the_post_thumbnail( $post_id, 'crop_image_380_330', array( 
                  'class' => "img-responsive", 
                  'alt' => trim(strip_tags( $post_title )),
                  'title' => trim(strip_tags( $post_title )),
                  'width' => '',
                  'height' => ''
                )); ?>
            </div>
            <div class="tetimonial-contents wow fadeInUp">
                <p><?php echo $post_content;?></p>
                <div class="profile-info">
                    <span class="name"><?php echo $full_name; ?></span>
                    <span class="designation"><?php echo $designation; ?></span>
                </div>
            </div>
        </div>
        <?php 
        endif; ?> 
    </div>
    <div class="tetimonial-team">
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

            <div class="list">
                <div class="tetimonial-image">
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
                        <img src="http://placehold.it/380x330" class="img-responsive" alt="testimonial" title="testimonial">
                    <?php
                    } ?> 
                </div>
                <div class="tetimonial-contents wow fadeInUp">
                    <p><?php echo $value->post_content;?></p>
                    <div class="profile-info">
                        <span class="name"><?php echo $full_name; ?></span>
                        <span class="designation"><?php echo $designation; ?></span>
                    </div>
                </div>
            </div><?php
        endforeach;
    endif; ?>
    </div> 
</section>