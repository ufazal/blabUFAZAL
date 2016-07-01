<?php

/**
 * @author m.bitenieks
 * @copyright 2010
 */
 ?>

<div id="orbit-slider"> 

<?php 

query_posts( array(  'post_type' => 'slides_options', 'posts_per_page' => '-1') );

if ( have_posts() ) : while ( have_posts() ) : the_post();
$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'orbit-slider-header');

$custom = get_post_custom($post->ID);
$slider_orbit_type = $custom["_orbit_slider_type"][0];

$url = get_post_custom($post->ID);
$link = $url["_slide_link"][0];

    if ($slider_orbit_type=="Image"){ ?>
        
            <?php if ($link==""){ ?>
                
                <img  src="<?php echo $thumbnail[0] ?>" width="<?php echo $thumbnail[1] ?>" height="<?php echo $thumbnail[2] ?>">
                
                <?php } else { ?> 
                
                <a class="read-more-link" href="<?php echo $link; ?>"><img alt="<?php the_content(); ?>"  src="<?php echo $thumbnail[0] ?>" width="<?php echo $thumbnail[1] ?>" height="<?php echo $thumbnail[2] ?>"></a>
        
            <?php } ?>
      
        
    <?php } else if ($slider_bx_type=="Video"){ ?>
       
        
            <?php 
                $video_full = get_post_custom($post->ID);
                echo $video_full_show = $video_full["_orbit_slider_embed"][0];
            ?>
        
        
    <?php } 

endwhile; else:

    echo "UPS error";

endif;

wp_reset_query();

?>

</div>
    
<script type="text/javascript">
     $(window).load(function() {
         $('#orbit-slider').orbit({
             animation:     '<?php if(get_option("of_orbit_slider_animation")) { echo get_option("of_orbit_slider_animation"); } else { echo "fade"; } ?>',               
             animationSpeed: <?php if(get_option("of_orbit_slider_speed")) { echo get_option("of_orbit_slider_speed"); } else { echo "800"; } ?>,              
             advanceSpeed:  <?php if(get_option("of_orbit_slider_pause")) { echo get_option("of_orbit_slider_pause"); } else { echo "4000"; } ?>, 
             timer:         <?php if(get_option("of_orbit_slider_timer")) { echo get_option("of_orbit_slider_timer"); } else { echo "true"; } ?>, 		 
             pauseOnHover:  <?php if(get_option("of_orbit_slider_hover")) { echo get_option("of_orbit_slider_hover"); } else { echo "true"; } ?>, 	
             bullets:       <?php if(get_option("of_orbit_slider_bullets")) { echo get_option("of_orbit_slider_bullets"); } else { echo "true"; } ?>	
         });
     });
</script>