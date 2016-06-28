<?php
/**
 * Portfolio Main for Inner page
 */

$main_terms = get_terms('portfolio_cat', array( 'parent' => 0, 'order' => 'ASC', 'hide_empty'=> true ));
foreach ($main_terms as $term) $new_terms[] = $term->slug;
$main_slugs = implode(', ', $new_terms);

$args = array(
    'posts_per_page' => -1,
    'post_type'      =>  'portfolio',
    'tax_query' => array(
        array(
            'taxonomy' => 'portfolio_cat',
            'field' => 'slug',
            'terms' => $new_terms
        )
    )
);

$portfolios = get_posts( $args );

?>

<section id="portfolio-main">
    <div class="container">
        <div class="heading wow fadeInUp">
            <h3><?php _e( 'Portfolio', 'blueliner-responsive' ); ?></h3>
            <span>Our philosophy and expertise are best represented by our work.</span>
            <div class="heading-border"></div>
        </div>
    </div>

    <?php
    if(count($portfolios)>0): ?>
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-12">
                <div id="portfolio-filter" class="button-group wow flipInX">
                    <ul>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-filter="*">All</a>
                        </li>
                        <?php

                        foreach ($main_terms as $p_term): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="" data-close-others="false"><?php echo $p_term->name; ?></a>
                            <ul class="dropdown-menu">
                                <li><a data-filter=".<?php echo $p_term->slug; ?>">All - <?php echo $p_term->name; ?></a></li>
                                <?php 
                                $terms = get_terms('portfolio_cat', array( 'parent' => $p_term->term_id, 'order' => 'ASC', 'hide_empty'=> true ));
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

        <div class="container-fluid no-gutter">
            <div id="portfolio-items" class="row wow flipInX">
                <?php 
                foreach ($portfolios as $key => $value): 
                    $terms = wp_get_post_terms( $value->ID, 'portfolio_cat' );
                    $new_terms = array();
                    foreach ($terms as $term) $new_terms[] = $term->slug;
                    $slugs = implode(' ', $new_terms);
                    ?>
                    <div id="<?php echo $key; ?>" class="wow fadeIn item item-hover col-xs-12 col-sm-6 col-md-4 <?php echo $slugs; ?>">
                        <?php 
                        $portfilio_thumb = get_post_thumbnail_id($value->ID);
                        if(!empty($portfilio_thumb)): //array(635,420)
                        
                        echo get_the_post_thumbnail( $value->ID, 'crop_image_635_420', array( 
                          'class' => "img-responsive", 
                          'alt' => trim(strip_tags( $value->post_title )),
                          'title' => trim(strip_tags( $value->post_title ))
                          )); 

                        else: ?>
                        <img width="635" height="420" src="http://placehold.it/635x420" class="img-responsive" alt="Blueliner Portfolio" title="Blueliner Portfolio">
                        <?php
                        endif; ?>
                        <div class="mask">
                            <h2><?php echo $value->post_title; ?></h2>                              
                        </div>
                        <div class="btn-details"><a href="<?php echo esc_url( get_permalink( $value->ID ) ); ?>" class="info">Read More <i class="fa fa-plus"></i></a></div>
                    </div>
                <?php
                endforeach; ?>
            </div>
        </div>
            
    </div>
    <?php
    endif; ?>
</section>
            