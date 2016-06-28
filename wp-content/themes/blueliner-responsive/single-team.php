<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */

get_header(); ?>
<section id="case-details">  <!-- will replace by team-details when fix matrix design -->
    <div class="container">
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post(); 
        $_team_full_name = get_post_meta( $post->ID, '_team_full_name', true );
        $_team_designation = get_post_meta( $post->ID, '_team_designation', true );

        $_team_fb_url = get_post_meta( $post->ID, '_team_fb_url', true );
        $_team_twitter_url = get_post_meta( $post->ID, '_team_twitter_url', true );
        $_team_google_url = get_post_meta( $post->ID, '_team_google_url', true );
        $_team_linkedin_url = get_post_meta( $post->ID, '_team_linkedin_url', true );

        $_team_cats = get_the_terms($post->ID, 'team_cat');

        $by_location = array('85' => 'by-location');
        $by_speciality = array('86' => 'by-speciality');
        $featured_skills = array('2181' => 'featured-skills');

        $featured_skills_all = array();

        if($_team_cats) {
            foreach ($_team_cats as $key => $cat) {
                if( in_array($cat->parent, array_keys($featured_skills) ) ) {
                    array_push($featured_skills_all, $cat->name );
                }
            }
        }

        $featured_skills_title = '';
        if($featured_skills_all) {
            $featured_skills_title = implode(', ', $featured_skills_all);
        }
        ?>                
        <div class="team">
            <div class="row">
                <div class="col-md-4 pad-right">
                <?php 
                $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
                if ($post_thumbnail_id) {
                    echo get_the_post_thumbnail( $post->ID, 'crop_image_530_490', array( 
                      'class' => "img-responsive", 
                      'alt' => trim(strip_tags( $post->post_title )),
                      'title' => trim(strip_tags( $post->post_title )),
                      'width' => '',
                      'height' => ''
                    )); 
                } 
                else { ?>
                <img class="img-responsive" src="http://placehold.it/530x490" alt="Online advertising" />
                <?php
                } ?>
                </div>
                <div class="col-md-8 pad-left">
                    <div class="heading wow fadeInUp">
                        <h3><?php echo !empty($_team_full_name) ? $_team_full_name : $post->post_title; ?></h3>
                        <span><?php echo $_team_designation; ?></span>
                    </div>
                    <div class="heading wow fadeInUp">
                        <span><?php echo $featured_skills_title; ?></span>
                    </div>
                    <ul class="team-socials">
                        <li><a class="fb" href="<?php echo !empty($_team_fb_url) ? $_team_fb_url : '#'; ?>" target="_blank">FB</a></li>
                        <li><a class="tt" href="<?php echo !empty($_team_twitter_url) ? $_team_twitter_url : '#'; ?>" target="_blank">TT</a></li>
                        <li><a class="gp" href="<?php echo !empty($_team_google_url) ? $_team_google_url : '#'; ?>" target="_blank">GP</a></li>
                        <li><a class="li" href="<?php echo !empty($_team_linkedin_url) ? $_team_linkedin_url : '#'; ?>" target="_blank">LI</a></li>
                    </ul>
                    <?php the_content(); ?> 
                    <div class="blog-bottom wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <?php previous_post_link('%link', 'Previous', false ); ?> 
                                <?php next_post_link( '%link', 'Next', false ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        // End the loop.
    endwhile; ?>

<!--     <div class="case-chart">
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
                    $terms = get_terms('matrix_speciality', array( 'parent' => 0, 'orderby' => 'id', 'hide_empty'=> false));
                    if($terms):
                        foreach ($terms as $term): 

                            $args = array(
                                'posts_per_page' => -1,
                                'post_type'      =>  'matrix',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'matrix_speciality',
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
                                <div class="chart-td default-img"></div>
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
