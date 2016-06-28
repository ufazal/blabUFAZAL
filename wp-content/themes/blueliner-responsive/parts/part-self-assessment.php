<?php
/**
 * Self Assessment
 */
$args = array(
    'post_type'     => 'career',
    'posts_per_page'  => -1,
    'orderby'       => 'menu_order',
    'order'       => 'ASC'
);

$careers = get_posts($args);

// Start the loop.
while ( have_posts() ) : the_post();
$fb_url = get_post_meta( $post->ID, '_area_manager_fb_url', true );
$twitter_url = get_post_meta( $post->ID, '_area_manager_twitter_url', true );
?>
<section id="careers-bottom">            
    <div class="container">                
        <div class="row">
            <div class="col-md-8">
                <div class="interest-quiz">
                    <h5>Are you interested in helping us <br>Explore the digital marketing world?</h5>
<!--                    <div class="warning-box">
                        <div class="top"></div>
                        <p><strong>bold text</strong></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Pellentesque hendrerit sagittis tortor, non fringilla metus bibendum vel. <br>Integer malesuada odio massa, <br>sit amet luctus sapien finibus vel.</p>
                        <div class="bottom"></div>
                    </div>-->
                    <p>Take 7 Pillars Self-Assessment: HR Edition quiz and tell us how you will fit in...</p>
                    <!--<a target="_blank" href="http://7pillarsdigital.com/">Take the quiz now</a>-->
                </div>
            </div>
            <div class="col-md-4">
                <div class="link-7pillar">
                    <a target="_blank" href="http://7pillarsdigital.com/">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/blue-7-pillars.png" alt="">
                    </a>
                    <ul class="team-socials">
                        <li><a class="fb" href="<?php echo $fb_url; ?>" target="_blank">FB</a></li>
                        <li><a class="tt" href="<?php echo $twitter_url; ?>" target="_blank">TT</a></li>
                    </ul>
                </div>                
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>