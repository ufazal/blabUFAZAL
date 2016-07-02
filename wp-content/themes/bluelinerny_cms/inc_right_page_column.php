<?php  ?><!--production dev-->
<?php if(is_page(97) || is_child_of(97)) : ?>
<script type="text/javascript">
			var flashvars = {};
			var params = {};
			params.wmode = "transparent";
			params.allowscriptaccess = "always";
			var attributes = {};
			attributes.id = "productionrotation";
			swfobject.embedSWF("<?php bloginfo('template_directory') ?>/global_assets/flash_assets/production_rotation.swf", "productionrotationdiv", "240", "325", "9.0.0", false, flashvars, params, attributes);
		</script>

<div id="productionrotationdiv">
	<a href="http://www.adobe.com/go/getflashplayer"> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /> </a>
</div>
<?php endif; ?>







<!--e commerce-->
<?php if(is_page(94) || is_child_of(94)) : ?>
<a href="team.php"><img src="<?php bloginfo('template_directory') ?>/global_assets/images/ecommerce_team.jpg" width="240" border="0" height="203" /></a>
<?php endif; ?>


<!--affiliate marketing-->
<?php if(is_page(68) || is_child_of(68)) : ?>
<script type="text/javascript">
			var flashvars = {};
			var params = {};
			params.wmode = "transparent";
			params.allowscriptaccess = "always";
			var attributes = {};
			attributes.id = "networksrotation";
			swfobject.embedSWF("<?php bloginfo('template_directory') ?>/global_assets/flash_assets/networks_rotation.swf", "networksrotationdiv", "240", "140", "9.0.0", false, flashvars, params, attributes);
		</script>

<div id="networksrotationdiv">
	<a href="http://www.adobe.com/go/getflashplayer"> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /> </a>
</div>
<?php endif; ?>

<!--web analytics pop up 71-->
<?php if(is_page(71) || is_child_of(71)) : ?>
<a href="<?php bloginfo('template_directory') ?>/global_assets/images/campaignreport.jpg" title="sample reports" class="thickbox"><img src="<?php bloginfo('template_directory') ?>/global_assets/images/sample_reports_2.jpg" width="240" border="0" height="203" /></a><br>
<?php endif; ?>

<!--interactive PR  -->
<?php if(is_page(63) || is_child_of(63)) : ?>
<a href="portfolio.php"><img src="<?php bloginfo('template_directory') ?>/global_assets/images/interactive_pr.jpg" alt="see our portfolio" width="240" height="203" border="0" /></a><br />
<?php endif; ?>
<!--adds social media links to social media pages-->
<?php if(is_page(74) || is_child_of(74))
{
// adds social media links
 echo '<div id="bloglikesidebar">';
    echo '<ul><h2>';
       wp_list_pages('hide_empty=0&include=74&title_li=' );
   echo '</h2></ul>
    <ul>';
      wp_list_pages('hide_empty=0&child_of=74&exclude_tree=&title_li=' ); 
   echo '</ul>';
   echo '</div>';
}
?>
<!-- adds adword qualified graphic except social media pages 74 and affiliate-68 -->
<?php if(is_page(35) || is_page(41) || is_page(57) ||is_page(60) || is_page(71) || is_child_of(35) || is_child_of(41) || is_child_of(57) ||is_child_of(60) || is_child_of(71)) : ?>
<img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/images/adwords_qualified.jpg" width="240" height="280" />
<?php endif; ?>
<!-- adds email samples popup to email marketing page id-->
<?php if(is_page(60)) : ?>
<br />
<a href="<?php bloginfo('stylesheet_directory') ?>/email_samples.html?keepThis=true&TB_iframe=true&height=530&width=780" class="thickbox" title="email samples"><img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/images/emailsamples2.jpg" alt="email" width="240" height="203" border="0" /></a> <br />
<?php endif; ?>
<!--// adds blog samples popup to blog marketing page id-->
<?php if(is_page(143)) : ?>
<br />
<a href="<?php bloginfo('stylesheet_directory') ?>/blog_viewer.html?keepThis=true&TB_iframe=true&height=530&width=780"class="thickbox" title="blog samples"><img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/images/blog_marketing.jpg" width="240" height="203" border="0" /></a> <br />
<?php endif; ?>
<!--all pages-->
<?php include('inc_consult_callout.php'); ?>
<?php if(is_page(74) || is_child_of(74)) : ?>
<script type="text/javascript">
			var flashvars = {};
			var params = {};
			params.wmode = "transparent";
			params.allowscriptaccess = "always";
			var attributes = {};
			attributes.id = "didyouknow";
			swfobject.embedSWF("<?php bloginfo('template_directory') ?>/global_assets/flash_assets/didyouknow_rotation.swf", "didyouknowdiv", "240", "140", "9.0.0", false, flashvars, params, attributes);
		</script>
<div id="didyouknowdiv">
	<a href="http://www.adobe.com/go/getflashplayer"> <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /> </a>
</div>
<?php endif; ?>
<!--affiliate marketing-->
<?php if(is_page(68) || is_child_of(68)) : ?>
<img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/images/testimonials2.jpg" />
<?php endif; ?>



<br>

<!-- offshore and subs-->
<?php if(is_page(101) || is_page(897) || is_page(882) || is_page(911) || is_page(913) || is_page(915) || is_page(917) || is_child_of(101)) : ?>
<img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/images/offshore_certifications.jpg" />
<?php endif; ?>
