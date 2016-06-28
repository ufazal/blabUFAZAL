<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $post;
$ftitle = explode(' ', $post->post_title);

?>

<div class="row">
    <div class="col-md-12">
    	<div id="<?php echo $post->post_name; ?>"></div>
        <div class="heading wow fadeInUp">
            <h3><?php echo current($ftitle); ?></h3>
            <h3>Branding package</h3>
            <span>Full description of services included in this package</span>
            <div class="heading-border"></div>
        </div>
    </div>
</div>
<div class="row"><?php the_content(); ?></div>
