<?php

/**
 * @author m.bitenieks
 * @copyright 2010
 */
 ?>

<div id="slider_image">

<?php 

query_posts( array(  'post_type' => 'slides_options', 'posts_per_page' => '-1') );

if ( have_posts() ) : while ( have_posts() ) : the_post();
$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'nivo-slider-header');
 ?>

     <?php if ($link==""){ ?>
    
        <img title="<?php the_content(); ?>" src="<?php echo $thumbnail[0] ?>" width="<?php echo $thumbnail[1] ?>" height="<?php echo $thumbnail[2] ?>">
    
    <?php } else { ?> 
    
        <a class="read-more-link" href="<?php echo $link; ?>"><img title="<?php the_content(); ?>"  src="<?php echo $thumbnail[0] ?>" width="<?php echo $thumbnail[1] ?>" height="<?php echo $thumbnail[2] ?>"></a>
                    
    <?php } ?>
    
    

<?php

endwhile; else:

    echo "UPS error";

endif;

wp_reset_query();

?>

</div>
    
<script type="text/javascript">
$(window).load(function() {
    $('#slider_image').nivoSlider({
        captionOpacity:<?php if(get_option("of_nivo_slider_opacity")) { echo "0."; echo get_option("of_nivo_slider_opacity"); } else { echo "0"; } ?>,
        pauseOnHover:<?php if(get_option("of_nivo_slider_hover")) { echo get_option("of_nivo_slider_hover"); } else { echo "true"; } ?>,
        controlNav:<?php if(get_option("of_nivo_slider_control")) { echo get_option("of_nivo_slider_control"); } else { echo "true"; } ?>,
        directionNav:<?php if(get_option("of_nivo_slider_nav")) { echo get_option("of_nivo_slider_nav"); } else { echo "true"; } ?>,
        
        effect:'<?php if(get_option("of_nivo_slider_effect")) { echo get_option("of_nivo_slider_effect"); } else { echo "random"; } ?>',
        animSpeed:<?php if(get_option("of_nivo_slider_speed")) { echo get_option("of_nivo_slider_speed"); } else { echo "1000"; } ?>, 
        pauseTime:<?php if(get_option("of_nivo_slider_pause")) { echo get_option("of_nivo_slider_pause"); } else { echo "3000"; } ?>,
        slices:<?php if(get_option("of_nivo_slider_slices")) { echo get_option("of_nivo_slider_slices"); } else { echo "20"; } ?>,
        startSlide:<?php if(get_option("of_nivo_slider_start")) { echo get_option("of_nivo_slider_start"); } else { echo "0"; } ?>
  
    });
});
</script>