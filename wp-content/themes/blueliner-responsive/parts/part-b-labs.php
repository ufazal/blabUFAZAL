<?php
/**
 * B-Labs page
 */

$args = array(
    'post_type'     => 'blab',
    'posts_per_page'  => -1,
    'orderby'       => 'menu_order',
    'order'       => 'ASC'
);

$blabs = get_posts( $args );

?>

<ul class="nav nav-tabs" role="tablist">
    <?php 
    if(!empty($blabs)):
        $count = 0;
        foreach ($blabs as $key => $value): 
            $count++;
            $terms = wp_get_post_terms( $value->ID, 'blab_cat' );
            $new_terms = array();
            foreach ($terms as $term) $new_terms[] = $term->slug;
            $slugs = implode(' ', $new_terms);
            $term_id = $term->term_id;
            $term_data = get_option("taxonomy_$term_id");
            ?>
            <li role="presentation" class="<?php echo ($count == 1) ? 'active' : '' ;?>">
                <a class="wow slideInUp" id="btn-logo-1" href="#<?php echo $slugs; ?>" aria-controls="<?php echo $slugs; ?>" role="tab" data-toggle="tab">
                    <?php
                    if(!empty($term_data['cs_tab_img'])): ?>
                        <img class="off img-responsive" src="<?php echo $term_data['cs_tab_img']; ?>" alt="<?php echo $term->name; ?>">
                    <?php
                    else: ?>
                        <span><?php echo $term->name; ?></span>
                    <?php
                    endif; 

                    if(!empty($term_data['cs_tab_hover_img'])): ?>
                        <img class="on img-responsive" src="<?php echo $term_data['cs_tab_hover_img']; ?>" alt="<?php echo $term->name; ?>">
                    <?php
                    else: ?>
                        <span><?php echo $term->name; ?></span>
                    <?php
                    endif;

                    ?>
                </a>
            </li>
        <?php
        endforeach; 
    endif; ?>

</ul>

<div class="tab-content">

    <?php 
    if(!empty($blabs)):
        $count = 0;
        foreach ($blabs as $key => $value): 
            $count++;
            $post_content = $value->post_content;
            $web_url = get_post_meta( $value->ID, '_blab_url', true );
            $sub_title = get_post_meta( $value->ID, '_blab_sub_title', true );

            $terms = wp_get_post_terms( $value->ID, 'blab_cat' );
            $new_terms = array();
            foreach ($terms as $term) $new_terms[] = $term->slug;
            $slugs = implode(' ', $new_terms);
            ?>
            <div role="tabpanel" class="tab-pane <?php echo ($count == 1) ? 'active':''; ?>" id="<?php echo $slugs; ?>">
                <div class="row">
                    <div class="animated slideInLeft col-md-6">
                        <?php 
                        echo get_the_post_thumbnail( $value->ID, 'crop_image_530_490', array( 
                          'class' => "img-responsive", 
                          'alt' => trim(strip_tags( $value->post_title )),
                          'title' => trim(strip_tags( $value->post_title ))
                        )); ?>

                    </div>
                    <div class="animated slideInRight col-md-6">
                        <h3><?php echo $value->post_title; ?></h3>
                        <span><?php echo $sub_title; ?></span>
                        <p><?php echo $post_content; ?></p>
                        <a target="_blank" class="read-more" href="<?php echo $web_url; ?>">Website</a>   
                    </div>
                </div>
            </div><?php
        endforeach;
    endif; ?>

</div>

            