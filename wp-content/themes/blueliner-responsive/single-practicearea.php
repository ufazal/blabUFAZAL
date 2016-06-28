<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */
get_header(); ?>
      
        
<?php
// Start the loop.
while ( have_posts() ) : the_post();
    $termname = '';
    $defaultTerms = array('Creative', 'Marketing', 'Technical', 'Mobile');
    $term_list = wp_get_post_terms($post->ID, 'practicearea_cat', array("fields" => "all"));
    $term_s_pillar = @current(wp_get_post_terms($post->ID, 'service_pillar', array("fields" => "all")));
	
    if($term_list) {
        foreach ($term_list as $key => $term) {
            if( in_array($term->name, $defaultTerms) ) {
                $termname = $term->name;
            }
        }
    }

    $name_pillar = isset($term_s_pillar->name) ? $term_s_pillar->name : '';

    ?>
	<section id="services-details">
        
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="heading wow fadeInUp">
                  <!--       <h3><?php //echo $termname; ?></h3> -->
                        <?php the_title( '<h3>', '</h3>' ); ?>
                        <?php echo '<p>'.$name_pillar.'</p>'; ?>
                        <div class="heading-border"></div>
                    </div>
                </div>
            </div>
            
            <div class="details">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5 wow slideInLeft">
                        <?php 
                        $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
                        if ($post_thumbnail_id) {
                            echo get_the_post_thumbnail( $post->ID, 'crop_image_530_490', array( 
                              'class' => "img-responsive", 
                              'alt' => trim(strip_tags( $post->post_title )),
                              'title' => trim(strip_tags( $post->post_title ))
                            )); 
                        } 
                        else { ?>
                        <img class="img-responsive" src="http://placehold.it/450x305" alt="Online advertising" />
                        <?php
                        } ?> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-7 wow slideInRight">
                        <?php the_content(); ?>
                    </div>                    
                </div>
            </div>
            
            <div class="prev-next">
                <div class="row">
                    <div class="col-md-12 wow slideInUp">
                        <?php bl_post_single_nav($postTYpe = 'practicearea'); ?>
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>
<?php
// End the loop.
endwhile;
?>

<?php get_footer(); ?>
