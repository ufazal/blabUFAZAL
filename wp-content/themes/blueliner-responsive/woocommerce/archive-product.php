<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<section id="default-page" class="service-bg">    
    <div class="container">
    	<div class="row">
        	<div class="col-md-12">
        	<?php
            $post_id = 12917;
            $allpage_title = get_post_meta( $post_id, '_allpage_title', true );
            $allpage_sub_title = get_post_meta( $post_id, '_allpage_sub_title', true );
            $post_info = get_post( $post_id );
            $brandingContent = isset($post_info->post_content) ? $post_info->post_content : '';
            ?>

            <?php 
            if($allpage_title): ?>

            <div class="heading wow fadeInUp">
                <h3><?php echo $allpage_title; ?></h3>
                 <span><?php echo $allpage_sub_title; ?></span>
                <div class="heading-border"></div>
            </div>
            <div class="branding-content"><?php echo $brandingContent; ?></div>

            <?php
            endif; ?>
        <?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
		?>

			<?php
				/**
				 * woocommerce_archive_description hook.
				 *
				 * @hooked woocommerce_taxonomy_archive_description - 10
				 * @hooked woocommerce_product_archive_description - 10
				 */
				do_action( 'woocommerce_archive_description' );
			?>

			<?php if ( have_posts() ) : ?>

				<?php
					/**
					 * woocommerce_before_shop_loop hook.
					 *
					 * @hooked woocommerce_result_count - 20
					 * @hooked woocommerce_catalog_ordering - 30
					 */
					do_action( 'woocommerce_before_shop_loop' );
				?>

				<?php woocommerce_product_loop_start(); ?>

					<?php woocommerce_product_subcategories(); ?>

					<?php 
					$args = array(
				        'posts_per_page' => -1,
				        'product_cat' => 'package',
				        'post_type' => 'product',
				        'orderby' => 'ID',
				        'order' => 'ASC'
				    );
					$the_query = new WP_Query( $args );
					// The Loop
					while ( $the_query->have_posts() ) {
						$the_query->the_post();
						global $post;
						$terms = current(wp_get_post_terms( $post->ID, 'product_cat' ));
					
						if ($terms->slug == 'package'): 

							wc_get_template_part( 'content', 'product' );

						endif;
					}; // end of the loop. ?>

				<?php woocommerce_product_loop_end(); ?>

				<?php
					/**
					 * woocommerce_after_shop_loop hook.
					 *
					 * @hooked woocommerce_pagination - 10
					 */
					do_action( 'woocommerce_after_shop_loop' );
				?>

			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

				<?php wc_get_template( 'loop/no-products-found.php' ); ?>

			<?php endif; ?>

			<?php
			/**
			 * woocommerce_after_main_content hook.
			 *
			 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
			 */
			do_action( 'woocommerce_after_main_content' ); ?>
			</div>

		</div>
    </div>

    <div class="container">
    	<div class="row">
    		<div id="compare-pck"></div>
    		<?php
            $post_id = 12930;
            $allpage_title = get_post_meta( $post_id, '_allpage_title', true );
            $allpage_sub_title = get_post_meta( $post_id, '_allpage_sub_title', true );
            ?>
        	<div class="col-md-12"><br /><br /><br />
	            <div class="heading wow fadeInUp">
	                <h3><?php echo $allpage_title; ?></h3>
	                 <span><?php echo $allpage_sub_title; ?></span>
	                <div class="heading-border"></div>
	            </div>
        	</div>

        	
			<div class="col-md-12">
	            <div class="wow fadeInUp">
	            	<?php
	            	$post = get_post($post_id); 
					$content = apply_filters('the_content', $post->post_content); 
					echo $content; ?>
	            </div>
            </div>
    	</div>
	</div>
</section>
<script type="text/javascript">
jQuery(function() {
    jQuery('li.product_cat-package').each(function(i, items_list){
        jQuery(items_list).find('.price-btn').hide();
        var getPrice = jQuery(items_list).find('.price .amount').html() + '<div class="pb-buy-now">Buy now</div>';
	  	jQuery(items_list).find(".add_to_cart_button").html(getPrice);

    });
});
</script>
	

<?php get_footer( 'shop' ); ?>
