<?php
/**
 * Portfolio General
 */
$new_terms = array();
$gen_terms = get_terms('portfolio_genaral_cat', array( 'parent' => 0, 'order' => 'ASC', 'hide_empty'=> true ));
foreach ($gen_terms as $term) $new_terms[] = $term->slug;

$args = array(
    'posts_per_page' => -1,
    'post_type'      =>  'portfolio',
    'tax_query' => array(
        array(
            'taxonomy' => 'portfolio_genaral_cat',
            'field' => 'slug',
            'terms' => $new_terms
        )
    )
);

$portfolios = get_posts( $args );

?>

<section id="portfolio">
    <div class="container">
        <div class="heading wow fadeInUp">
            <h3><?php _e( 'Portfolio', 'blueliner-responsive' ); ?></h3>
            <span>Integrated (IM) = Digital Marketing (DM) + Traditional (TM)</span>
            <div class="heading-border"></div>
        </div>
    </div>

    <?php
    if(!empty($gen_terms)>0): ?>
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-12">
                <div id="portfolio-filter" class="wow zoomIn button-group">
                    <a class="btn active" data-filter="*"><?php _e('All', 'blueliner-responsive'); ?></a>
                    <?php 
                    foreach ($gen_terms as $term):?>
                        <a class="btn" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></a> 
                    <?php
                    endforeach; ?>
                </div>
            </div>
        </div>

        <div class="container-fluid no-gutter">
            <div id="portfolio-items" class="row">
            <?php 
            foreach ($portfolios as $key => $value): 
            $terms = wp_get_post_terms( $value->ID, 'portfolio_genaral_cat' );
            $new_terms = array();
            foreach ($terms as $term) $new_terms[] = $term->slug;
            $slugs = implode(' ', $new_terms);
            ?>
                <div id="1" class="wow fadeIn item item-hover col-xs-12 col-sm-6 col-md-3 <?php echo $slugs; ?>">
                    <?php 
                    $portfilio_thumb = get_post_thumbnail_id($value->ID);
                    if(!empty($portfilio_thumb)):
                    echo get_the_post_thumbnail( $value->ID, 'crop_image_525_350', array( 
                      'class' => "img-responsive", 
                      'alt' => trim(strip_tags( $value->post_title )),
                      'title' => trim(strip_tags( $value->post_title ))
                      )); 
                    else: ?>
                    <img width="525" height="350" src="http://placehold.it/525x350" class="img-responsive" alt="Blueliner Portfolio" title="Blueliner Portfolio">
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
        
        <div class="row">
            <div class="col-md-12">
                <div class="load-more">
                    <a class="read-more" href="<?php echo site_url(); ?>/our-portfolio">Load More</a>
                </div>
            </div>
        </div>
            
    </div>
    <?php
    endif; ?>
</section>