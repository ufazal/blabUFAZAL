<div class="portfolio-wide sixteen columns clearfix">

	<?php if( get_post_meta( get_the_ID(), 'minti_embed', true ) == "" ){ ?>

		<div class="portfolio-noslider">
			<?php $images = rwmb_meta( 'minti_screenshot', 'type=image_advanced&size=standard' );
				foreach ( $images as $image ) {
					echo "<div class='noslide'><img src='".esc_url($image['url'])."' width='".esc_attr($image['width'])."' height='".esc_attr($image['height'])."' alt='".esc_attr($image['alt'])."' /></div>";
				} 
			?>
		</div>
			    
	<?php } else { ?>
			    
	    <div id="portfolio-embed">
		    <?php   
		    if (get_post_meta( get_the_ID(), 'minti_source', true ) == 'videourl') {  
		    	$embed_code = wp_oembed_get(esc_url(get_post_meta( get_the_ID(), 'minti_embed', true )));
		    	echo $embed_code; // No need to escape here
		    }  
		    else {  
		        echo wp_kses(get_post_meta( get_the_ID(), 'minti_embed', true ), minti_expand_allowed_tags()); 
		    }  
		    ?>
	    </div>
	    
	<?php } ?>
		
	<div class="portfolio-detail-title sixteen alpha omega columns">
		<h3><?php the_title(); ?></h3>
	</div>

	<div class="portfolio-detail-description <?php if( get_post_meta( get_the_ID(), 'minti_portfolio-details', true ) == 1 ) { echo 'eleven alpha'; } else { echo 'sixteen alpha omega'; } ?> columns">
		<div class="portfolio-detail-description-text"><?php the_content(); ?></div>
	</div>
	
	<?php if( get_post_meta( get_the_ID(), 'minti_portfolio-details', true ) == 1 ) { ?>
	<div class="portfolio-detail-attributes five omega columns">
		<ul>
			<?php if( get_post_meta( get_the_ID(), 'minti_portfolio-client', true ) != "") { ?>
			<li class="clearfix"><strong><?php _e('Client', 'minti'); ?></strong> <span><?php echo esc_html(get_post_meta( get_the_ID(), 'minti_portfolio-client', true )); ?></span></li>
			<?php } ?>	
			<li class="clearfix"><strong><?php _e('Date', 'minti'); ?></strong> <span><?php the_date() ?></span></li>
			<li class="clearfix"><strong><?php _e('Tags', 'minti'); ?></strong> <span><?php $taxonomy = strip_tags( get_the_term_list($post->ID, 'portfolio_filter', '', ', ', '') ); echo esc_html($taxonomy); ?></span></li>
			<?php if( get_post_meta( get_the_ID(), 'minti_portfolio-link', true ) != "") { ?>
			<li class="clearfix"><strong><?php _e('URL', 'minti'); ?></strong> <span><a href="<?php echo esc_url(get_post_meta( get_the_ID(), 'minti_portfolio-link', true )); ?>" target="_blank"><?php _e('View Project', 'minti'); ?></a></span></li>
			<?php } ?>	
		</ul>	
	</div>
	<?php } ?>
	
</div> <!-- End of portfolio-wide -->