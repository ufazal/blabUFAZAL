<?php
/**
 * Loads up all the widgets defined by this theme. Note that this function will not work for versions of WordPress 2.7 or lower
 *
 */

include_once (TEMPLATEPATH . '/includes/widgets/bf-recent-comment.php');
include_once (TEMPLATEPATH . '/includes/widgets/bf-recent-posts.php');




add_action("widgets_init", "load_bf_widgets");

function load_bf_widgets() {
	register_widget("BF_RecentCommentWidget");
	register_widget("BF_RecentPostWidget");


}
?>