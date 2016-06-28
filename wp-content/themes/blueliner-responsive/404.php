<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */

get_header(); ?>

<section id="not-found-page">
            
	<div class="container">
	    
	    <div class="row">
	        <div class="col-md-12">
	            <div>
	                <h3 class="wow flipInX"><?php _e( '404', 'blueliner-responsive' ); ?></h3>
	                <h4 class="wow fadeInUp"><?php _e( 'Oops! That page can’t be found.', 'blueliner-responsive' ); ?></h4>
	                <p class="wow fadeInUp"><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'blueliner-responsive' ); ?></p>
	                <div class="col-lg-4 col-lg-offset-4 wow fadeInUp">
	                    <?php get_search_form(); ?>
	                </div>
	                <div class="clearfix"></div>
	                <p class="wow fadeInUp">Or You can go back to Home or give us a Knock</p>
	                <div class="col-lg-4 col-lg-offset-4">
	                    <div class="btn-group btn-group-justified">
	                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-info wow slideInLeft"><span class="glyphicon glyphicon-home"></span> Home</a> 
	                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-warning wow slideInRight"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a> 
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    
	</div>
</section>

<?php get_footer(); ?>
