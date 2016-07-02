<?php  ?><div id="headerImage_wrap" class="clearfix">
<div id="headerImage">
<?php if(is_page(80) || is_child_of(80))
{
// podcasting flash header
wp_swfobject_echo("http://localhost/bluelinerny_cms/wp-content/themes/bluelinerny_cms/global_assets/header_images/header_videoproduction.swf", "990", "110");
}
?> 
<?php if(is_page(101) || is_page(897) ||  is_page(882) || is_page(911) || is_page(913) || is_page(915) ||  is_page(917) || is_child_of(101) || is_child_of(897) ||  is_child_of(882) || is_child_of(911) || is_child_of(913) || is_child_of(915) ||  is_child_of(917))
{
// offshore flash header
wp_swfobject_echo("http://localhost/bluelinerny_cms/wp-content/themes/bluelinerny_cms/global_assets/flash_assets/offshore_header.swf", "990", "110");
}
?> 


<!-- adds news section header to news page id and category -->
<?php if(is_category('News') || in_category( 'News' )) : ?>
<a href="<?php bloginfo('url'); ?>" title="Whats Up"><img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/header_images/news_header.jpg" border="0" alt="What's up" /></a>
<?php endif; ?>
<?php if(is_page(12) || is_child_of(12)) : ?>
<a href="<?php bloginfo('url'); ?>" title="Whats Up"><img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/header_images/news_header.jpg" border="0" alt="What's up" /></a>
<?php endif; ?>







</div>
</div>
  


