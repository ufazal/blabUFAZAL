<?php	 	
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<div id="primary" class="widget-area" role="complementary">
    <ul class="xoxo">

        <?php	 	 $category_id = get_cat_ID('Buzz'); ?>

        <div class="sidebar-posts">
            <div class="postheader"></div>
            <div>
                <ul style="margin-left:0px;">

                    <li style="float:left; margin-top:10px">
                        <?php	 	 //wp_cumulus_insert(); ?>
                    </li>

                </ul>
            </div>

        </div>



</div>



</ul>
</div><!-- #primary .widget-area -->

<?php	 	
        // A second sidebar for widgets, just because.
        if (is_active_sidebar('secondary-widget-area')) : ?>

            <div id="secondary" class="widget-area" role="complementary">
                <ul class="xoxo">
        <?php	 	 dynamic_sidebar('secondary-widget-area'); ?>
        </ul>
    </div><!-- #secondary .widget-area -->

<?php	 	 endif; ?>

