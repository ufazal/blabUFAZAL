

<?php $featured_image_post = get_featured_recursive($post); if ($featured_image_post != null) : $featured_image_src = wp_get_attachment_image_src(get_post_thumbnail_id($featured_image_post), 'page-header-image'); ?>

<div id="header-wrap"> <img src="<?php echo$featured_image_src[0]; ?>" /> </div>
<?php else : { ?>
<?php /*?><div id="header-wrap"> <img src="<?php echo get_stylesheet_directory_uri() . "/images/default_header.jpg" ?>" /> </div><?php */?>
<?php } ?>
<?php endif; ?>

