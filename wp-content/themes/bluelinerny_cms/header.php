<?php  ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title>

<?php wp_title('&laquo;', true, 'right'); ?>

<?php bloginfo('name'); ?>

</title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/global_assets/css/blueliner.css" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/style-blog.css" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/style-portfolio.css" />

<!--<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/slickmap.css" />-->

<?php if (in_category('news')) /* load news section styles in news page */{ ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/style-news.css" />

<?php } ?>

<?php if (is_page('news')) /* load news section styles in news categories*/{ ?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/style-news.css" />

<?php } ?>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/javascript/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/javascript/filterable.pack.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function(){
				//To switch directions up/down and left/right just place a "-" in front of the top/left attribute


				//Horizontal Sliding
				jQuery('.boxgrid.slideright').hover(function(){
					jQuery(".cover", this).stop().animate({left:'300px'},{queue:false,duration:300});
				}, function() {
					jQuery(".cover", this).stop().animate({left:'0px'},{queue:false,duration:300});
				});

			});
		</script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory') ?>/javascript/thickbox/thickbox-compressed.js"></script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory') ?>/javascript/thickbox/thickbox.css" />




<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/javascript/cycle.js"></script>


</head>

<body <?php body_class( str_ireplace( '/', ' ', get_page_uri($post->ID) ) ); ?>>

<!-- begin socials -->

<div class="head_socialicon_list_wrap">

<div id="head_livechat_wrap" style="padding-top:9px">
	<!-- webim button --><a href="/livechat/client.php?locale=en" target="_blank" onclick="if(navigator.userAgent.toLowerCase().indexOf('opera') != -1 &amp;&amp; window.event.preventDefault) window.event.preventDefault();this.newWindow = window.open('/livechat/client.php?locale=en&amp;url='+escape(document.location.href)+'&amp;referrer='+escape(document.referrer), 'webim', 'toolbar=0,scrollbars=0,location=0,status=1,menubar=0,width=640,height=480,resizable=1');this.newWindow.focus();this.newWindow.opener=window;return false;"><img src="/livechat/b.php?i=webim&amp;lang=en" border="0" width="76" height="18" alt=""/></a><!-- / webim button -->

<div id="craftysyntax">

<!--
<script type="text/javascript" src="http://bluelinerny.com/livehelp/livehelp_js.php?eo=1&relative=Y&amp;department=1&amp;serversession=1&amp;pingtimes=15"></script>
-->

<!-- Google +1 JavaScript-->
<link rel="canonical" href="http://www.bluelinerny.com" />
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
      /*{"parsetags": "explicit"}*/
</script>

</div>

</div>

<ul class="head_socialicon_list">

<!-- Google +1-->

<div id="content" style="width:24px; height:15px; float:right; position:relative; top:9px; left:8px; ">
	<g:plusone size="small" count="false" callback="GoogleLIKE_Analytics" ></g:plusone>
</div>
<script type="text/javascript">
	gapi.plusone.go("content");
	function GoogleLIKE_Analytics(obj) {_gaq.push(['_trackEvent', 'GooglePlusOne', obj.state, window.location.href]); } 
</script>

<li><a href="http://www.youtube.com/BluelinerPodcasts" target="_blank"><img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/youtube_16.png" class="small" alt=""><img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/youtube_32.png" alt=""><strong>youtube</strong></a></li>

<li><a href="http://www.linkedin.com/companies/blueliner-marketing" target="_blank"><img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/linkedin_16.png" class="small" alt=""><img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/linkedin_32.png" alt=""><strong>Linkedin</strong></a></li>

<li><a href="http://twitter.com/blueliner" target="_blank"><img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/twitter_16.png" class="small" alt=""><img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/twitter_32.png" alt=""><strong>twitter</strong></a></li>

<li><a href="http://www.facebook.com/bluelinerny" target="_blank"><img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/facebook_16.png" class="small" alt=""><img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/facebook_32.png" alt=""><strong>Facebook</strong></a></li>

</ul><span style="float:right">Connect with us:</span> </div>

<!-- begin header -->

<div id="head_wrap" class="clearfix">

  <div id="head">

    <div id="head_logo">

      <a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/main_layout/main_logo.jpg" alt="blueliner marketing agency" border="0" title="Blueliner Marketing Agency" /></a>

    </div>

    <div id="stub_nav">

    </div>

    <!-- begin main nav -->

    <div id="header_main_nav">

      <ul>

        <?php wp_list_pages('title_li=&include=104,3,5,8,12,14,10' ); ?>

     

      </ul>

    </div>

    <!-- end main nav -->

    <!-- start stublinks -->

    <div id="header_stublinks">

      <ul>

        <li><a href="<?php bloginfo('url'); ?>/about.php" title="About Blueliner">About</a></li>

        <li><a href="<?php bloginfo('url'); ?>/locations.php" title="Locations">Locations</a></li>

        <li><a href="<?php bloginfo('url'); ?>/careers.php" title="Careers">Careers</a></li>

        <li><a href="<?php bloginfo('url'); ?>/news" title="RSS">RSS<img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/main_layout/stublink_rss.gif" alt="feed" border="0" /></a></li>

      </ul>

    </div>

    <!-- end stublinks -->

  </div>

</div>

<!-- end header -->

