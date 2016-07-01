<?php

/**
 * @author m.bitenieks
 * @copyright 2010
 */
 ?>

<div id="slider_image">

<?php 

if (get_option("of_slide_image_1")){
    
    if(get_option("of_slide_link_1")) echo '<a href="';  echo get_option("of_slide_link_1"); ?>
    
	<img src="<?php echo get_option("of_slide_image_1"); ?>" alt="" title="<?php echo get_option("of_slide_caption_1"); ?>">
    
	<?php if(get_option("of_slide_link_1")) { echo '</a>'; 
    
    }
}

if (get_option("of_slide_image_2")){
    
    if(get_option("of_slide_link_2")) echo '<a href="';  echo get_option("of_slide_link_2"); ?>
    
	<img src="<?php echo get_option("of_slide_image_2"); ?>" alt="" title="<?php echo get_option("of_slide_caption_2"); ?>">
    
	<?php if(get_option("of_slide_link_2")) { echo '</a>'; 
    
    }
}

if (get_option("of_slide_image_3")){
    
    if(get_option("of_slide_link_3")) echo '<a href="';  echo get_option("of_slide_link_3"); ?>
    
	<img src="<?php echo get_option("of_slide_image_3"); ?>" alt="" title="<?php echo get_option("of_slide_caption_3"); ?>">
    
	<?php if(get_option("of_slide_link_3")) { echo '</a>'; 
    
    }
}

if (get_option("of_slide_image_4")){
    
    if(get_option("of_slide_link_4")) echo '<a href="';  echo get_option("of_slide_link_4"); ?>
    
	<img src="<?php echo get_option("of_slide_image_4"); ?>" alt="" title="<?php echo get_option("of_slide_caption_4"); ?>">
    
	<?php if(get_option("of_slide_link_4")) { echo '</a>'; 
    
    }
}

if (get_option("of_slide_image_5")){
    
    if(get_option("of_slide_link_5")) echo '<a href="';  echo get_option("of_slide_link_5");  ?>
    
	<img src="<?php echo get_option("of_slide_image_5"); ?>" alt="" title="<?php echo get_option("of_slide_caption_5"); ?>">
    
	<?php if(get_option("of_slide_link_5")) { echo '</a>'; 
    
    }
} 

if (get_option("of_slide_image_6")){
    
    if(get_option("of_slide_link_6")) echo '<a href="';  echo get_option("of_slide_link_6");  ?>
    
	<img src="<?php echo get_option("of_slide_image_6"); ?>" alt="" title="<?php echo get_option("of_slide_caption_6"); ?>">
    
	<?php if(get_option("of_slide_link_6")) { echo '</a>'; 
    
    }
}   

if (get_option("of_slide_image_7")){
    
    if(get_option("of_slide_link_7")) echo '<a href="';  echo get_option("of_slide_link_7");  ?>
    
	<img src="<?php echo get_option("of_slide_image_7"); ?>" alt="" title="<?php echo get_option("of_slide_caption_7"); ?>">
    
	<?php if(get_option("of_slide_link_7")) { echo '</a>'; 
    
    }
}   

if (get_option("of_slide_image_8")){
    
    if(get_option("of_slide_link_8")) echo '<a href="';  echo get_option("of_slide_link_8");  ?>
    
	<img src="<?php echo get_option("of_slide_image_8"); ?>" alt="" title="<?php echo get_option("of_slide_caption_8"); ?>">
    
	<?php if(get_option("of_slide_link_8")) { echo '</a>'; 
    
    }
}   

if (get_option("of_slide_image_9")){
    
    if(get_option("of_slide_link_9")) echo '<a href="';  echo get_option("of_slide_link_9"); ?>
    
	<img src="<?php echo get_option("of_slide_image_9"); ?>" alt="" title="<?php echo get_option("of_slide_caption_9"); ?>">
    
	<?php if(get_option("of_slide_link_9")) { echo '</a>'; 
    
    }
} 

if (get_option("of_slide_image_10")){
    
    if(get_option("of_slide_link_10")) echo '<a href="';  echo get_option("of_slide_link_10");  ?>
    
	<img src="<?php echo get_option("of_slide_image_10"); ?>" alt="" title="<?php echo get_option("of_slide_caption_10"); ?>">
    
	<?php if(get_option("of_slide_link_10")) { echo '</a>'; 
    
    }
}        
    ?>
							
							
							
<?php ?>

</div>

<script type="text/javascript">
$(window).load(function() {
    $('#slider_image').nivoSlider({
        effect:'<?php if(get_option("of_nivo_slider_effect")) { echo get_option("of_nivo_slider_effect"); } else { echo "random"; } ?>',
        animSpeed:<?php if(get_option("of_nivo_slider_speed")) { echo get_option("of_nivo_slider_speed"); } else { echo "1000"; } ?>, 
        pauseTime:<?php if(get_option("of_nivo_slider_pause")) { echo get_option("of_nivo_slider_pause"); } else { echo "3000"; } ?>,
        slices:<?php if(get_option("of_nivo_slider_slices")) { echo get_option("of_nivo_slider_slices"); } else { echo "20"; } ?>,
        startSlide:<?php if(get_option("of_nivo_slider_start")) { echo get_option("of_nivo_slider_start"); } else { echo "0"; } ?>
  
    });
});
</script>