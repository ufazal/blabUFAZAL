<script type="text/javascript">
  $(document).ready(function(){
    $('#slider-bx-ul').bxSlider({
        
        speed: <?php if(get_option("of_bx_slider_speed")) { echo get_option("of_bx_slider_speed"); } else { echo "2000"; } ?>,
        pause: <?php if(get_option("of_bx_slider_pause")) { echo get_option("of_bx_slider_pause"); } else { echo "3000"; } ?>,
        pager: <?php if(get_option("of_bx_slider_pager")) { echo get_option("of_bx_slider_pager"); } else { echo "true"; } ?>,
        auto:  <?php if(get_option("of_bx_slider_auto")) { echo get_option("of_bx_slider_auto"); } else { echo "true"; } ?>, 
        controls: <?php if(get_option("of_bx_slider_controls")) { echo get_option("of_bx_slider_controls"); } else { echo "false"; } ?>,
        autoHover: <?php if(get_option("of_bx_slider_hover")) { echo get_option("of_bx_slider_hover"); } else { echo "true"; } ?>,
        });
  });
</script>
<div id="bx-slider">
<?php

//The Query
query_posts( array(  'post_type' => 'slides_options', 'posts_per_page' => '-1') );

echo '<ul id="slider-bx-ul">';


//The Loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); 
global $post;
$portfolio_title = $post->post_title;
$custom = get_post_custom($post->ID);
$slider_bx_type = $custom["_bx_slider_type"][0];

$url = get_post_custom($post->ID);
$link = $url["_slide_link"][0];

$url_name = get_post_custom($post->ID);
$link_name = $url_name["_slide_link_name"][0];

    if ($slider_bx_type=="Image"){ ?>
        
        <li class="slider-bx-full-image">
        
            <?php if ($link==""){
                
                the_post_thumbnail("bx-slider-header");
                
            } else {
                
                ?> <a href="<?php echo $link; ?>"><?php  the_post_thumbnail("bx-slider-header"); ?></a>
                
            <?php } ?>
            
        </li>
        
    <?php } else if ($slider_bx_type=="Video"){ ?>
        
        <li class="slider-bx-full-video">
        
            <?php 
                $video_full = get_post_custom($post->ID);
                echo $video_full_show = $video_full["_dresscode"][0];
            ?>
            
        </li>
        
    <?php } else if ($slider_bx_type=="Content & Left Image"){ ?>
    
        <li class="slider-bx-left-image">
        
            <div class="bx-slider-small-image float-left">
                <?php the_post_thumbnail("bx-slider-header-half"); ?>
            </div>
            <div class="bx-slider-small-text-right float-left">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <?php if ($link==""){ } else {
                    
                    ?>
                    
                    <a id="" class="link bx_button" href="<?php echo $link; ?>"><span><?php if($link_name) { echo $link_name; } else { echo "Read more"; }?></span></a>
                    
                    
                    
                <?php } ?>
            </div>
            
        </li>
    
    <?php } else if ($slider_bx_type=="Content & Right Image"){ ?>
    
        <li class="slider-bx-right-image">
        
            <div class="bx-slider-small-image float-right">
                <?php the_post_thumbnail("bx-slider-header-half"); ?>
            </div>
            <div class="bx-slider-small-text-left float-right">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <?php if ($link==""){ } else {
                    
                    ?> <a id="" class="link bx_button" href="<?php echo $link; ?>"><span><?php if($link_name) { echo $link_name; } else { echo "Read more"; }?></span></a>
                    
                <?php } ?>
            </div>
            
        </li>
    
    <?php } else if ($slider_bx_type=="Content & Left Video"){ ?>
    
        <li class="slider-bx-left-video">
        
            <div class="bx-slider-small-image float-left">
                <?php 
                    $video_full = get_post_custom($post->ID);
                    echo $video_full_show = $video_full["_dresscode"][0];
                ?>
            </div>
            <div class="bx-slider-small-text-right float-left">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <?php if ($link==""){ } else {
                    
                    ?> <a id="" class="link bx_button" href="<?php echo $link; ?>"><span><?php if($link_name) { echo $link_name; } else { echo "Read more"; }?></span></a>
                    
                <?php } ?>
            </div>
            
        </li>
    
    <?php } else if ($slider_bx_type=="Content & Right Video"){ ?>
    
        <li class="slider-bx-right-video">
        
            <div class="bx-slider-small-image float-right">
                <?php 
                    $video_full = get_post_custom($post->ID);
                    echo $video_full_show = $video_full["_dresscode"][0];
                ?>
            </div>
            <div class="bx-slider-small-text-left float-right">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <?php if ($link==""){ } else {
                    
                    ?> <a id="" class="link bx_button" href="<?php echo $link; ?>"><span><?php if($link_name) { echo $link_name; } else { echo "Read more"; }?></span></a>
                    
                    
                <?php } ?>
            </div>
            
        </li>
    
    <?php }

endwhile; else:

    echo "UPS error";

endif;

echo '</ul>';

//Reset Query
wp_reset_query();

?>

</div>
