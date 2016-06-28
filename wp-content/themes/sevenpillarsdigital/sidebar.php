<?php
/**
 * The sidebar containing the main widget area
 *
 * @package SevenPillarsDigital
 */
?>

	</div><!-- close .main-content-inner -->

	<div class="sidebar col-sm-12 col-md-4">
	<div class="social">
		
		<a href="http://www.facebook.com/bluelinerny"><i class="fa fa-facebook fa-2x"></i></a>
		<a href="http://twitter.com/blueliner"><i class="fa fa-twitter fa-2x"></i></a>
		<a href="http://www.linkedin.com/companies/blueliner-marketing"><i class="fa fa-linkedin fa-2x"></i></a>
		<a href="http://www.youtube.com/BluelinerPodcasts"><i class="fa fa-youtube fa-2x"></i></a>
		
	</div>
    <br />

    <div class="panel clear">
    <div class="tab-spacer" style="background-color:#FFFFFF">

		<!-- Nav tabs -->
		<ul class="nav nav-tabs" id="myTab">
		
			<li class="active"><a href="#home" data-toggle="tab"> <i class="fa fa-bolt"></i> Popular</a></li>
			<li><a href="#profile" data-toggle="tab"> <i class="fa fa-clock-o"></i> Latest</a></li>
			
		</ul>
			
		<!-- Tab panes -->
		<div class="tab-content" style="background-color:#FFFFFF">
			
			<div class="tab-pane fade in active" id="home">
	
				<?php // POPULAR POST
				$popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
				while ( $popularpost->have_posts() ) : $popularpost->the_post();?>
		
				<a href="<?php the_permalink(); ?>">
				
					<?php $video = get_post_meta($post->ID, 'fullby_video', true );
		  
					if($video != '') {?>
		
						<img src="http://img.youtube.com/vi/<?php echo $video ?>/1.jpg" class="grid-cop"/>
	
					<?php 				                 
	           
	             	} else if ( has_post_thumbnail() ) { ?>
	
	                    <?php the_post_thumbnail('thumbnail', array('class' => 'thumbnail')); ?>
	
	                <?php } ?>
	
		    		<h2 class="title"><?php the_title(); ?></h2>
		    		
		    		<div class="date"><i class="fa fa-clock-o"></i> <?php the_time('j M , Y') ?> &nbsp;
		    		
						<?php 
						$video = get_post_meta($post->ID, 'fullby_video', true );
						
						if($video != '') { ?>
		             			
		             		<i class="fa fa-video-camera"></i> Video
		             			
		             	<?php } else if (strpos($post->post_content,'[gallery') !== false) { ?>
		             			
		             		<i class="fa fa-th"></i> Gallery
	
	             		<?php } else {?>
	
	             		<?php } ?>
	
		    		</div>
	
		    	</a>
		
				<?php endwhile; ?>
			
			</div>
			
			<div class="tab-pane fade" id="profile">
			  	
		  		<?php 
				$popularpost = new WP_Query( array( 'posts_per_page' => 4) );
				while ( $popularpost->have_posts() ) : $popularpost->the_post();?>
		
					<a href="<?php the_permalink(); ?>">
					
						<?php $video = get_post_meta($post->ID, 'fullby_video', true );
			  
						if($video != '') {?>
	
							<img src="http://img.youtube.com/vi/<?php echo $video ?>/1.jpg" class="grid-cop"/>
	
						<?php 				                 
	               
		             	} else if ( has_post_thumbnail() ) { ?>
	
	                        <?php the_post_thumbnail('thumbnail', array('class' => 'thumbnail')); ?>
	   
	                    <?php } ?>
		
			    		<h2 class="title"><?php the_title(); ?></h2>
			    		
			    		<div class="date"><i class="fa fa-clock-o"></i> <?php the_time('j M , Y') ?> &nbsp;
			    		
							<?php 
							$video = get_post_meta($post->ID, 'fullby_video', true );
							
							if($video != '') { ?>
			             			
			             		<i class="fa fa-video-camera"></i> Video
			             			
			             	<?php } else if (strpos($post->post_content,'[gallery') !== false) { ?>
			             			
			             		<i class="fa fa-th"></i> Gallery
		
		             		<?php } else {?>
		
		             		<?php } ?>
		
			    		</div>
			    		
			    	</a>
		
				<?php endwhile; ?>
			  	
			</div>
					 
		</div>
	
	</div>
    <br />
<div class="clear"></div>
    </div>


    
		<?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) ?>
		<div class="sidebar-padder">

			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="search" class="widget widget_search">
					<?php get_search_form(); ?>
				</aside>

				<aside id="archives" class="widget widget_archive">
					<h3 class="widget-title"><?php _e( 'Archives', 'sevenpillarsdigital' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget widget_meta">
					<h3 class="widget-title"><?php _e( 'Meta', 'sevenpillarsdigital' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; ?>

		</div><!-- close .sidebar-padder -->
