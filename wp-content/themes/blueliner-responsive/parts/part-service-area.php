<?php
/**
 * Service Area
 */
?>

<section id="services">          
    <div class="container">
        
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h3>Our Services</h3>
                    <span>Our philosophy and expertise are best represented by our work.</span>
                    <div class="heading-border"></div>
                </div>
            </div>
        </div>
                    
        <div class="row">
        <?php
            $practice_terms = get_terms('practicearea_cat', array( 'parent' => 0, 'orderby' => 'id', 'hide_empty'=> true ));
            foreach ($practice_terms as $key => $p_term): ?>
            <div class="service-items col-sm-6 col-md-3 wow flipInX">
                <div class="circle <?php echo $p_term->slug; ?>">
                    <p><?php echo $p_term->name; ?></p>
                </div>
                <ul>
                    <?php 
                    $terms = get_terms('practicearea_cat', array( 'parent' => $p_term->term_id, 'order' => 'ASC', 'hide_empty'=> true ));
                    if($terms):
                        foreach ($terms as $term):?>
                            <li><a class="" href="<?php echo site_url(); ?>/practice-areas/<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
                        <?php
                        endforeach; 
                    endif; ?>
                </ul>
            </div><?php
            endforeach; ?>

        </div>
        
        <div class="row">
            <div class="col-md-12 quote-btn wow fadeIn">
                <a class="read-more" href="<?php echo site_url(); ?>/contact">Request A Quote</a>
            </div>
        </div>
        
    </div>
    
</section>

            