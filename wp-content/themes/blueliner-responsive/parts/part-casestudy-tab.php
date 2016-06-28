<?php
/**
 * Portfolio General
 */
?>

<section id="case-studies">
    <div class="container">
        <div class="heading wow fadeInUp">
            <h3><?php _e( 'Selected Case Studies', 'blueliner-responsive' ); ?></h3>
            <span>Integrated (IM) = Digital Marketing (DM) + Traditional (TM)</span>
            <div class="heading-border"></div>
        </div>
    </div>
    
    <div class="container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
        <?php 
            $count = 0;
            $terms = get_terms( 'casestudy_cat', 
                array( 
                    'orderby' => 'name',
                    'order' => 'ASC', 
                    'parent' => '0',
                    'number' => '5',
                    'orderby' => 'name',
                    'hide_empty'=> true 
                    )
                );
            foreach ($terms as $key => $term): 
                $term_id = $term->term_id;
                $term_data = get_option("taxonomy_$term_id");
                $count++;
                ?>
                <li role="presentation" class="<?php echo ($count == 1 ) ? 'active' : ''; ?>">
                    <a class="wow slideInUp" id="btn-<?php echo $term->slug; ?>" href="#<?php echo $term->slug; ?>" aria-controls="<?php echo $term->slug; ?>" role="tab" data-toggle="tab">
                        <?php
                        if(!empty($term_data['cs_tab_img'])): ?>
                            <img class="img-responsive" src="<?php echo $term_data['cs_tab_img']; ?>" alt="<?php echo $term->name; ?>">
                        <?php
                        else: ?>
                            <span><?php echo $term->name; ?></span>
                        <?php
                        endif; ?>
                    </a>
                </li>
            <?php
            endforeach; ?>
        </ul>
    </div>

    <div class="tab-content">

        <?php
        $count = 0;
        foreach ($terms as $term): 
        $count++;?>
        <div role="tabpanel" class="tab-pane <?php echo ($count == 1 ) ? 'active' : ''; ?>" id="<?php echo $term->slug; ?>">
            <div class="case-studies-container">
                <div class="container-fluid">
                    <div id="case-studies-<?php echo $term->slug; ?>" class="case-studies-slider carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="container">
                            <div class="carousel-inner">
                                <?php
                             
                                $args = array(
                                    'post_type' => 'casestudy',
                                    'casestudy_cat' => $term->slug,
                                    'posts_per_page' => -1,
                                    'orderby' => 'menu_order',
                                    'order' => 'DESC'
                                );

                                $casestudies = get_posts($args);

                                foreach ($casestudies as $key => $post): 
                                $cmb_title = get_post_meta( $post->ID, '_casestudy_title', true );

                                $cmb_sub_title = get_post_meta( $post->ID, '_casestudy_sub_title', true );
                                $cmb_url = get_post_meta( $post->ID, '_casestudy_url', true );
                                $cmb_icon = get_post_meta( $post->ID, '_casestudy_icon', true );
                                $post_content = $post->post_content;

                                $thumbnail =  get_the_post_thumbnail( $post->ID, 'crop_image_550_590', array( 
                                    'class' => "img-responsive", 
                                    'alt' => trim(strip_tags( $post->post_title )),
                                    'title' => trim(strip_tags( $post->post_title ))
                                ) ); ?>
                                <div class="item <?php echo ($key == 0 ) ? 'active' : ''; ?>">
                                    <div class="row">
                                        <div class="wow slideInLeft holder col-md-6" data-wow-duration="2s">
                                            <?php echo $thumbnail; ?>
                                        </div>
                                        <div class="wow slideInRight col-md-6" data-wow-duration="2s">
                                            <div class="carousel-caption">
                                                <h3><?php echo $cmb_title; ?></h3>
                                                <span>
                                                    <?php
                                                    if ( $cmb_icon == '' ) {}
                                                    else {
                                                    ?>
                                                    <img src="<?php echo $cmb_icon ?>" title="<?php echo $cmb_sub_title; ?>" />
                                                    <?php } echo $cmb_sub_title; ?>
                                                </span>
                                                <p><?php echo $post_content; ?></p>
                                                <p class="view-more"><a class="read-more" href="<?php echo get_permalink( $post->ID ); ?>">View Case Study</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div><?php
                                endforeach; ?>
                                <?php
                                if(count($casestudies) > 1): ?>
                                <div class="controllers col-md-offset-6 col-md-6">
                                    <a class="left carousel-control" href="#case-studies-<?php echo $term->slug; ?>" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="right carousel-control" href="#case-studies-<?php echo $term->slug; ?>" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div><?php
                                endif; ?>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>

        <?php
        endforeach; ?>
    </div>
</section>