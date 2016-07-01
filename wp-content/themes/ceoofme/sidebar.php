<div id="sidebar_right" class="sidebar">
	<div style="margin-bottom:20px">




<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_left') ) : ?>	
    <h2>Categories</h2>    
	<ul>
    	<?php wp_list_cats('&title_li='); ?>
    </ul>    

	<br />

	<?php endif; ?>





    <form style="border:1px solid #ccc;padding:3px;text-align:center;" action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com/fb/a/emailverifySubmit?feedId=2066173', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p>Enter your email address:</p><p><input type="text" style="width:140px" name="email"/></p><input type="hidden" value="http://feeds.feedburner.com/~e?ffid=2066173" name="url"/><input type="hidden" value="CEO of me" name="title"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe" />
     </form>
    </div>
	<div class="search" style="padding-bottom:10px">
		<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
		<input class="searchinput" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="search_query" />
		<input class="searchbutton" type="submit" value="Find"  />
		</form>
	</div>

<script src="http://pub.mybloglog.com/comm3.php?mblID=2008073100062487&amp;r=widget&amp;is=normal&amp;o=l&amp;ro=4&amp;cs=blue&amp;ww=200&amp;wc=single&amp;l=a"></script>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar_right') ) : ?>	
	<h2>Archives</h2>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
    
	<?php
	if (wp_version() == '20') {
		$link_cats = $wpdb->get_results("SELECT cat_id, cat_name FROM $wpdb->linkcategories");
	}
	else {
	    $link_cats = $wpdb->get_results("SELECT cat_id, cat_name FROM $wpdb->categories WHERE link_count >= 1");	
	}
    foreach ($link_cats as $link_cat) {
    ?>						
		<h2 class="h2"><?php echo $link_cat->cat_name; ?></h2>
        	<ul>
            <?php get_links($link_cat->cat_id, '<li>', '</li>', '<br />', FALSE, 'name', FALSE, FALSE, -1); ?>
            </ul>
    <?php } ?>
<?php endif; ?>
</div>

