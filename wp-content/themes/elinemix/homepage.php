<?php
/*
Template Name: Home page
*/

get_header(); 

?>

<div id="full-page">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
            <?php the_content( __( '<div class="reed_more">Reed More &raquo;</div>', 'Gooseo' ) ); ?>
           
                <div class="one_third">
                    <div class="one_fifth"><img height="48" width="48" alt="configuration management software, erp software, manufacturing software, job shop software, business process software" src="<?php bloginfo( 'template_directory' ); ?>/images/monotone_star_favorite.png"></div>
                    <div class="three_fourth_last">
                        <?php echo get_post_meta($post->ID, 'widget_1', true); ?>
                    </div>
                </div>
                <div class="one_third">
                    <div class="one_fifth"><img height="48" width="48" alt="data processing software, enterprise resource planning, erp services, erp solutions, inventory manufacturing, job shop software" src="<?php bloginfo( 'template_directory' ); ?>/images/monotone_paper_clip_attachment_document.png"></div>
                    <div class="three_fourth_last">
						<?php echo get_post_meta($post->ID, 'widget_2', true); ?>
                    </div>
                </div>
                <div class="one_third_last">
                    <div class="one_fifth"><img height="48" width="48" alt="manufacturer software, manufacturing accounting, manufacturing erp, manufacturing management software, quoting software" src="<?php bloginfo( 'template_directory' ); ?>/images/monotone_email.png"></div>
                    <div class="three_fourth_last">
						<?php echo get_post_meta($post->ID, 'widget_3', true); ?>
                    </div>
                </div>
                <div class="line_padding"></div>
                <div class="line_padding"></div>
                <div class="one_third">
                    <div class="one_fifth"><img height="48" width="48" alt="supply chain management software, erp manufacturing software, erp packages, erp program, erp software companies" src="<?php bloginfo( 'template_directory' ); ?>/images/monotone_tag.png"></div>
                    <div class="three_fourth_last">
						<?php echo get_post_meta($post->ID, 'widget_4', true); ?>
                    </div>
                </div>
                <div class="one_third">
                    <div class="one_fifth"><img height="48" width="48" alt="job estimating, job management software, job scheduling software, job tracking software, management software manufacturing" src="<?php bloginfo( 'template_directory' ); ?>/images/monotone_check_yes_ok.png"></div>
                    <div class="three_fourth_last">
						<?php echo get_post_meta($post->ID, 'widget_5', true); ?>
                    </div>
                </div>
                <div class="one_third_last">
                    <div class="one_fifth"><img height="48" width="48" alt="manufacturing business software, manufacturing erp software, manufacturing process software, manufacturing resource planning" src="<?php bloginfo( 'template_directory' ); ?>/images/monotone_pen_write.png"></div>
                    <div class="three_fourth_last">
						<?php echo get_post_meta($post->ID, 'widget_6', true); ?>
                    </div>
                </div>
                
                <div class="line_padding"></div>
                <div class="line_padding"></div>
                <div class="line_padding"></div>
                <div class="line_zero"></div>

                <div class="one_half">
                <div class="line_padding"></div>
                <div class="line_padding"></div>
                <div class="line_padding"></div>
					<?php echo get_post_meta($post->ID, 'widget_7', true); ?>
                    <div class="one_half">
						<?php echo get_post_meta($post->ID, 'widget_8', true); ?>
                    </div>
                    <div class="one_half_last">
						<?php echo get_post_meta($post->ID, 'widget_9', true); ?>
                    </div>
                <div class="line_padding"><div style="padding-top:40px; width:355px; padding-left:25px"> <div style="float:left; "><img src="<?php echo bloginfo( 'template_url' ); ?>/images/mcpartner.png" border="0"> </div><div style="float:right; "><img src="<?php echo bloginfo( 'template_url' ); ?>/images/uscanada.png" border="0"></div></div></div>
                </div>

                <div class="one_half_last">
					<?php echo get_post_meta($post->ID, 'widget_10', true); ?>
                </div>
                <div class="clear"></div>
                
           <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'Gooseo' ), 'after' => '</div>' ) ); ?>
			
           <div class="clear"></div>
	
    </div><!--END POST -->
    
<?php endwhile; ?>

</div><!--END TEXT CONTENT -->

<?php get_footer(); ?>