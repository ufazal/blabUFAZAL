<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */
get_header(); 

?>


<section id="case-details">         
    <div class="container">
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post(); 

        $cmb_sub_title = get_post_meta( $post->ID, '_casestudy_sub_title', true );

        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h3><?php the_title( '<h3>', '</h3>' ); ?></h3>
                    <span><?php echo $cmb_sub_title; ?></span>
                    <div class="heading-border"></div>
                </div>
            </div>
        </div>
        
        <div class="details">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 wow slideInLeft">
                    <?php
                    $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
                    if ($post_thumbnail_id) {
                        echo get_the_post_thumbnail( $post->ID, 'crop_image_525_350', array( 
                          'class' => "img-responsive wow slideInLeft", 
                          'alt' => trim(strip_tags( $post->post_title )),
                          'title' => trim(strip_tags( $post->post_title ))
                        )); 
                    } 
                    else { ?>
                        <img class="img-responsive" src="http://placehold.it/450x305" alt="blog image" />
                    <?php
                    } ?>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-8 wow slideInRight">
                    <?php echo the_content(); ?>
                </div>                    
            </div>
            <div class="blog-bottom wow fadeInUp">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-offset-4 col-md-8 text-center">
                        <?php previous_post_link('%link', 'Previous', false ); ?> 
                        <?php next_post_link( '%link', 'Next', false ); ?>
                    </div>
                </div>
            </div>

        </div><?php
        // End the loop.
        endwhile; ?>
        
     <!--    <div class="case-chart">
            <div class="table-responsive">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>49er Matrix</th>
                            <?php 
                            $pillars = array();
                            $terms = get_terms('matrix_pillar', array( 'parent' => 0, 'orderby' => 'id', 'hide_empty'=> false ));
                            if($terms):
                                foreach ($terms as $term):
                                    array_push($pillars, $term->slug); ?>
                                    <th><?php echo $term->name; ?></th>
                                <?php
                                endforeach; 
                            endif; ?>
                        </tr>
                        <?php 
                        $terms = get_terms('matrix_mode', array( 'parent' => 0, 'orderby' => 'id', 'hide_empty'=> false));
                        if($terms):
                            foreach ($terms as $term): 

                                $args = array(
                                    'posts_per_page' => -1,
                                    'post_type'      =>  'matrix',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'matrix_mode',
                                            'field' => 'slug',
                                            'terms' => array($term->slug)
                                        )
                                    )
                                );
                                $matrixs = get_posts( $args );
                                $matrixArray = array();

                                if(!empty($matrixs)) {
                                    foreach ($matrixs as $key => $matrix) {
                                        $pillar_terms = wp_get_post_terms( $matrix->ID, 'matrix_pillar' );
                                        foreach ($pillar_terms as $key => $p_terms) {
                                            $matrixArray[$p_terms->slug] =  array(
                                                'ID' => $matrix->ID,
                                                'post_title' => $matrix->post_title,
                                                'post_content' => $matrix->post_content 
                                            );
                                        }
                                    }
                                }

                                ?>
                            <tr>
                                <th><?php echo $term->name; ?></th>
                                <?php
                                
                                foreach ($pillars as $key => $column): 

                                if( in_array($column, array_keys($matrixArray)) ): 

                                    $real_matrix = $matrixArray[$column];
                            
                                    $matrix_members = get_post_meta( $real_matrix['ID'], '_matrix_matrix_members', true );
                                    ?>

                                    <td>
                                        <div class="chart-td">
                                        <?php
                                        foreach ($matrix_members as $key => $member): ?>
                                            <img src="<?php echo $member['image']; ?>" width="35" height="35" alt="<?php echo $member['title']; ?>" />
                                        <?php
                                        endforeach; ?>
                                            <div class="content-td">
                                                <h3><?php echo $real_matrix['post_title']; ?></h3>
                                                <?php
                                                foreach ($matrix_members as $key => $member): ?>
                                                <div class="member-group">
                                                    <h5><?php echo $member['title']; ?></h5>
                                                    <img src="<?php echo $member['image']; ?>" width="150" height="150" alt="<?php echo $member['title']; ?>" />
                                                    <p><?php echo $member['description']; ?></p>
                                                </div><?php
                                                endforeach; ?>
                                            </div>
                                        
                                        </div>
                                
                                    </td><?php
                                else: ?>
                                <td>
                                    <div class="chart-td default-img">
                                    </div>
                                </td><?php
                                endif;
                            endforeach; 
                            ?>

                            </tr> <?php
                            endforeach; 
                        endif; ?>
                   
                    </tbody>
                </table>
            </div>                    
            
        </div> -->
        
    </div>

    </section>

<?php get_footer(); ?>
