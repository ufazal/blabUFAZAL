<?php
/**
 * Open Position
 */
$args = array(
    'post_type'     => 'career',
    'posts_per_page'  => -1,
    'orderby'       => 'menu_order',
    'order'       => 'ASC'
);

$careers = get_posts($args);
?>
<section id="careers-bottom">            
    <div class="container">                
        <div class="row">
            <div class="col-md-4">
                <div class="empty-seats">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/team-chair.png" alt="Empty Chair" width="" height="" />
                    <h5>Current Empty Seats:</h5><?php
                    if($careers): ?>
                    <ul><?php
                    $count = 1;
                    foreach ($careers as $key => $post):
                        $postContent = $post->post_content;
                        $cmb_open_job = get_post_meta( $post->ID, '_job_open_job', true );
                        if($cmb_open_job == 'on'): ?>
                            <li><a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo $post->post_title; ?></a></li>
                        <?php
                        elseif( $count == 1 ): ?>
                            <li><a href="javascript:void(0);">Currently, No job has been opened!</a></li><?php
                        endif;
                        $count++;
                    endforeach; ?>
                    </ul><?php
                    endif; ?>
                </div>                        
            </div>
            <div class="col-md-8">
                <iframe height="" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://ajustlock.wufoo.com/embed/z1fut02t112axsd/"><a href="https://ajustlock.wufoo.com/forms/z1fut02t112axsd/">Fill out my Wufoo form!</a></iframe>
            </div>
        </div>
    </div>
</section>