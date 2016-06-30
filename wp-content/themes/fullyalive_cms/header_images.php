





<?php if ( in_category('blog') ){?>
	<div id="header-wrap"> <img src="<?php echo get_stylesheet_directory_uri() . "/images/header_blog.jpg" ?>" /> </div>
<?php } elseif ( in_category('clients') ){?>
	<div id="header-wrap"> <img src="<?php echo get_stylesheet_directory_uri() . "/images/header_clients.jpg" ?>" /> </div>
<?php } else {?>
	<!--// Continue with normal Loop-->
	
	
<?php }?>