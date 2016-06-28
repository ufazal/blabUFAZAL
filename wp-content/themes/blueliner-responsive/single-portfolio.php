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
	$post_id = get_the_ID();
	$sub_title = get_post_meta( $post_id, '_portfolio_sub_title', true );
	$web_url = get_post_meta( $post_id, '_portfolio_url', true );
	$regi = get_post_meta( $post_id, '_portfolio_registration', true );
	$bounce_rate = get_post_meta( $post_id, '_portfolio_bounce_rate', true );
	$mobile_app = get_post_meta( $post_id, '_portfolio_mobile_app', true );
	$portfolioimages = get_post_meta( $post->ID, '_portfolio_file_list', true );

	$testimonials = get_post_meta( $post->ID, '_portfolio_testimonial_portfolio', true );
	      
	?>
	<section id="header-project"> 
	    <!-- Top Banner -->
	    <div class="container-fluid">
	        <div class="top-banner-container" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/header-project-bg.jpg');">                        
	            <div class="top-banner">  
<!--	                <div class="container">
	                     Heading 
	                    <div class="heading wow fadeInUp">
	                        <?php //the_title( '<h3>', '</h3>' ); ?>
	                        <span><?php //echo $sub_title; ?></span>
	                    </div>
	                     Heading - End 
	                </div>-->
	                <div class="container">
	                    <div class="row">
	                        <div class="col-md-12">
	                            <!-- Image Slider -->
	                            <div id="project-slider" class="carousel slide" data-ride="carousel">

	                                <!-- Wrapper for slides -->
	                                <div class="carousel-inner" role="listbox">
	                                	<?php
	                                	if($portfolioimages): 
	                                		$count = 0;
	                                		foreach ($portfolioimages as $key => $img): 
	                                			$count++;
	                                			?>
	                                			<div class="item <?php echo ($count == 1)? 'active': ''; ?>">
			                                        <img class="img-responsive" src="<?php echo $img; ?>" alt="blueliner" />
			                                    </div>
	                                		<?php
	                                		endforeach;
	                                	else: ?>
	                                		<img class="img-responsive" src="https://placehold.it/1110x865" alt="Online advertising" />
	                                	
	                                	<?php
	                                	endif;?>
	                                </div>

	                                <!-- Controls -->
	                                <?php
                                	if(count($portfolioimages) > 1): ?>
	                                <a class="left carousel-control" href="#project-slider" role="button" data-slide="prev">
	                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	                                </a>
	                                <a class="right carousel-control" href="#project-slider" role="button" data-slide="next">
	                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	                                </a><?php
                                	endif; ?>
	                            </div>
	                            <!-- Image Slider - End -->
	                        </div>
	                    </div>                            
	                </div>
	            </div>                                        
	        </div>                
	    </div>
	    <!-- Top Banner - End -->
	    
	</section>
	<!-- HEADER with Slider - End -->

	<!-- Client Description -->
	<section id="client-info">            
	    <div class="container">
	        
	        <div class="client-title">
	            <div class="row">
	                <div class="col-xs-12 col-sm-6 col-md-6">
	                	<?php the_title( '<h3 class="wow slideInRight">', '</h3>' ); ?>
	                </div>
	                <div class="col-xs-12 col-sm-6 col-md-6 wow slideInLeft">
	                    <a target="_blank" class="read-more" href="<?php echo $web_url; ?>">visit website</a>
	                </div>
	            </div>
	        </div>                    
	        <div class="client-desc">
	            <div class="row">
	                <div class="col-md-12">
	                    <p class="wow flipInX"><?php the_content(); ?></p>
	                </div>
	            </div>
	        </div>                    
	        <div class="client-pillars">
	            <div class="row">
	                <div class="col-sm-12 col-md-6">
	                    <?php
                        $pillars = get_the_terms( $post->ID, 'pillar_cat' );
                        $pillarArray = array();
                        if($pillars) {
                            foreach ($pillars as $key => $pillar) {
                            	array_push($pillarArray, $pillar->slug);
                            }
                        }

                        if (!empty($pillarArray)): ?>
	                    <div class="pillars">
	                        <ul>
	                            <li>Pillars used</li>
	                            
	                            <?php
	                            if( in_array('social-media', $pillarArray)): ?>
	                            <li class="wow flipInY">
	                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pillar-social.png" data-toggle="tooltip" data-placement="top" data-delay="500" title="Social" alt="Social" width="48" height="51" />
	                            </li><?php
	                            endif; ?>

	                            <?php
	                            if( in_array('crm-email', $pillarArray)): ?>
	                            <li class="wow flipInY">
	                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pillar-crm.png" data-toggle="tooltip" data-placement="top" title="CRM" alt="CRM" width="38" height="51" />
	                            </li><?php
	                            endif; ?>

	                            <?php
	                            if( in_array('ux-design', $pillarArray)): ?>
	                            <li class="wow flipInY">
	                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pillar-design.png" data-toggle="tooltip" data-placement="top" title="Design" alt="Design" width="53" height="51" />
	                            </li><?php
	                            endif; ?>

	                            <?php
	                            if( in_array('content-marketing', $pillarArray)): ?>
	                            <li class="wow flipInY">
	                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pillar-content.png" data-toggle="tooltip" data-placement="top" title="Content" alt="Content" width="53" height="51" />
	                            </li><?php
	                            endif; ?>

	                            <?php
	                            if( in_array('search', $pillarArray)): ?>
	                            <li class="wow flipInY">
	                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pillar-search.png" data-toggle="tooltip" data-placement="top" title="Search" alt="Search" width="53" height="51" />
	                            </li><?php
	                            endif; ?>

	                            <?php
	                            if( in_array('media', $pillarArray)): ?>
	                            <li class="wow flipInY">
	                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pillar-media.png" data-toggle="tooltip" data-placement="top" title="Media" alt="Media" width="53" height="51" />
	                            </li><?php
	                            endif; ?>

	                            <?php
	                            if( in_array('mobile', $pillarArray)): ?>
	                            <li class="wow flipInY">
	                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pillar-mobile.png" data-toggle="tooltip" data-placement="top" title="Mobile" alt="Mobile" width="53" height="51" />
	                            </li><?php
	                            endif; ?>
	                        </ul>
	                    </div><?php
	                    endif; ?>

	                </div>

	                <div class="col-sm-12 col-md-6">
	                    <div class="others">
	                        <div class="container">
	                        	<?php
	                            if($regi): ?>
	                            <div class="counters wow slideInLeft">
	                                <p class="digit">+<span class="counter"><?php echo $regi; ?></span>%</p>
	                                <p class="title">Registrations</p>
	                            </div><?php
	                            endif; ?>

	                            <?php
	                            if($bounce_rate): ?>
	                            <div class="counters wow slideInLeft">
	                                <p class="digit"><span class="counter"><?php echo $bounce_rate; ?></span>%</p>
	                                <p class="title">Bounce rate</p>
	                            </div><?php
	                            endif; ?>

	                            <?php
	                            if($mobile_app): ?>
	                            <div class="counters wow slideInLeft">
	                                <p class="digit">+<span class="counter"><?php echo $mobile_app; ?></span>%</p>
	                                <p class="title">Mobile applications</p>
	                            </div><?php
	                            endif; ?>
	                        </div>                    
	                    </div>
	                </div>
	            </div>

	            <div class="row">
                    <div class="col-md-12">
                    	<?php
                    	if(!empty($testimonials)):
                        foreach ($testimonials as $key => $testimo): ?>
                        <div class="testimonials-wrapper">
                            <h5><?php echo $testimo['title']; ?></h5>
                            <p><?php echo $testimo['description']; ?></p>
                            <div class="author">
                            	<img src="<?php echo $testimo['image']; ?>" height="50" alt="<?php echo $testimo['title']; ?>" />
                        		<span class="name"><?php echo $testimo['author']; ?></span>
                        		<span class="website"><strong>Website: </strong> <a target="_blank" href="<?php echo $testimo['web_url']; ?>" alt=""><?php echo $testimo['web_url']; ?></a></span>
                        	</div>
                        </div><?php
                        endforeach; 
                        endif; ?>
                    </div>
                </div>

	        </div>

	        <div class="blog-bottom wow fadeInUp animated">
	            <div class="row">
	                <div class="col-md-12 text-center">
	                    <?php previous_post_link('%link', 'Previous', false ); ?> 
	                    <?php next_post_link( '%link', 'Next', false ); ?>
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
