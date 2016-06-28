<?php
/**
 * Team Members
 */

$main_terms = get_terms('team_cat', array( 'parent' => 0, 'order' => 'ASC', 'hide_empty'=> true ));
foreach ($main_terms as $term) $new_terms[] = $term->slug;
$main_slugs = implode(', ', $new_terms);

$args = array(
    'posts_per_page' => -1,
    'post_type'      =>  'team',
    'tax_query' => array(
        array(
            'taxonomy' => 'team_cat',
            'field' => 'slug',
            'terms' => $new_terms
        )
    )
);

$teams = get_posts( $args );

?>

		<div class="row">
            <div class="col-md-12">
                <div id="team-filter" class="button-group wow">
                    <ul>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-filter="*">All</a>
                        </li>
                        <?php

                        foreach ($main_terms as $p_term): ?>
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="" data-close-others="false"><?php echo $p_term->name; ?></a>
                            <ul class="dropdown-menu">
                                <li><a data-filter=".by-location">All - <?php echo $p_term->name; ?></a></li>
                                <?php
                                $terms = get_terms('team_cat', array( 'parent' => $p_term->term_id, 'order' => 'ASC', 'hide_empty'=> true ));
                                if($terms):
                                    foreach ($terms as $term):?>
                                        <li><a data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
                                    <?php
                                    endforeach; 
                                endif; ?>
                            </ul>
                        </li><?php
                        endforeach; ?>

                    </ul>                            
                </div>
            </div>
        </div>
        
    </div>            
</section>

<section id="team-others-container">  
    <div id="team-others">
        <div class="container-fluid">

            <div class="container-fluid no-gutter">
                <div id="team-items" class="row wow">
	                <?php 
	                foreach ($teams as $key => $value): 
	                    $terms = wp_get_post_terms( $value->ID, 'team_cat' );
	                    $new_terms = array();
	                    foreach ($terms as $term) $new_terms[] = $term->slug;
	                    $slugs = implode(' ', $new_terms);

	                    $_team_fb_url = get_post_meta( $value->ID, '_team_fb_url', true );
			            $_team_twitter_url = get_post_meta( $value->ID, '_team_twitter_url', true );
			            $_team_google_url = get_post_meta( $value->ID, '_team_google_url', true );
			            $_team_linkedin_url = get_post_meta( $value->ID, '_team_linkedin_url', true );
			            $_team_full_name = get_post_meta( $value->ID, '_team_full_name', true );
			            $_team_designation = get_post_meta( $value->ID, '_team_designation', true );

	                    ?>
	                    <div id="<?php echo $key; ?>" class="item team-item col-xs-12 col-sm-6 col-md-3 <?php echo $slugs; ?>">
                                <div class="team-img">
                                    <?php 
                                    echo get_the_post_thumbnail( $value->ID, 'crop_image_380_330', array( 
                                      'class' => "img-responsive", 
                                      'alt' => trim(strip_tags( $value->post_title )),
                                      'title' => trim(strip_tags( $value->post_title )),
                                      'width' => '',
                                      'height' => ''
                                    )); ?>
                                </div>
	                        <h5><a href="<?php echo esc_url( get_permalink( $value->ID ) ); ?>"><?php echo !empty($_team_full_name) ? $_team_full_name : $value->post_title; ?></a></h5>
	                        <span><?php echo $_team_designation; ?></span>
	                        <ul class="team-socials">
	                            <li><a class="fb" href="<?php echo !empty($_team_fb_url) ? $_team_fb_url : '#'; ?>" target="_blank">FB</a></li>
	                            <li><a class="tt" href="<?php echo !empty($_team_twitter_url) ? $_team_twitter_url : '#'; ?>" target="_blank">TT</a></li>
	                            <li><a class="gp" href="<?php echo !empty($_team_google_url) ? $_team_google_url : '#'; ?>" target="_blank">GP</a></li>
	                            <li><a class="li" href="<?php echo !empty($_team_linkedin_url) ? $_team_linkedin_url : '#'; ?>" target="_blank">LI</a></li>
	                        </ul>
	                    </div><?php
	                endforeach; ?>

                </div>
            </div>                    
        </div>
    </div>
</section>