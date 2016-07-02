<?php
/**
 * Additional Information tab
 *
 * @author        WooThemes
 * @package       WooCommerce/Templates
 * @version       2.0.0
 * 
 * @cmsmasters_package 	Sports Club
 * @cmsmasters_version 	1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$heading = apply_filters( 'woocommerce_product_additional_information_heading', esc_html__( 'Additional Information', 'sports-club' ) );

?>

<?php /* if ( $heading ): ?>
	<h2><?php echo $heading; ?></h2>
<?php endif;*/ ?>

<?php $product->list_attributes(); ?>
