<?php
/**
 * @author madars.bitenieks
 * @copyright 2011
 */

get_header(); 

?>

<?php

$sidebar_key="madza_sidebar_type"; 
$sidebar=get_post_meta($post->ID, $sidebar_key, true); 

?>

<!--TEXT CONTENT -->
<div class="<?php 
    
    if($sidebar=="Right"){ echo "right-content"; } else if($sidebar=="Left") { echo "left-content"; } 
    
    else { 
    
    echo of_single_layout(); echo "-content";   
    
    } ?>">
<?php 

if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                     <?php 
                           
                           if (get_option("of_single_featured_image")=="true"){ ?>
                            
                                <div class="thumb-image" style="float:left; padding:0 20px 0px 0px"><?php the_post_thumbnail(); ?></div>
                                
                            <?php } ?>
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) {return;}
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>	
                    <div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-send="false" data-width="450" data-show-faces="false"></div>
					<div class="entry-content">
                    
                        <?php the_content(); ?>
                        
						<div id="socialmedia">
							<?php if(function_exists('selfserv_shareaholic')) { selfserv_shareaholic(); } ?>
						</div>
						
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'Gooseo' ), 'after' => '</div>' ) ); ?>
                        
					</div><!-- .entry_content -->
                   
                   <?php if ( ! dynamic_sidebar( 'text-widget-area' ) ) : ?>
                   
                   <?php endif; // end text widget area ?>     
                   
                           
                           
                           <?php 
                           
                           if (get_option("of_about_author")=="true"){
                           
                           if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
                            <br /><br />
                            <h2>About the author </h2>
                            
                            <div id="entry_author_info">
                            
                                <div id="author_avatar">
                                
        							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'Gooseo_author_bio_avatar_size', 60 ) ); ?>
                                    
        						</div><!-- #euthor_avatar -->
                                
        						<div id="author_description">
                                
        							<h4><?php printf( esc_attr__( '%s', 'Gooseo' ), get_the_author() ); ?></h4>
                                    
        							<p><?php the_author_meta( 'description' ); ?></p>
        							
        						</div><!-- #author_description -->
                                
                                <div class="clear"></div>
                                
        					</div><!-- #entry_author_info -->
                            
                            <?php endif; }?>

                  <div class="clear"></div>  
                  
				</div><!-- #post-## -->
    <div class="clear"></div>
    
    <div id="comments_frame">
    
	<?php comments_template( '', true ); ?>
    
    </div>

<?php endwhile; // end of the loop. ?>

</div><!--END TEXT CONTENT -->

<?php  get_sidebar(); ?>

<?php get_footer(); ?>
