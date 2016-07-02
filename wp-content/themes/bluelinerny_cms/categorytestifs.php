<?php  ?><?php
global $wp_query;
$cat_obj = $wp_query->get_queried_object();
$cat_id = $cat_obj->term_id;
$cat_parent = $cat_obj->parent;
if( $cat_obj->parent ) :
?>
<!-- if its a child category set the template based on its parent -->
<?php 
switch ($cat_parent)
{
	case 1:

  include(TEMPLATEPATH . '/category-blog.php');
  break;
case 3:
  include(TEMPLATEPATH . '/category-news.php');
  break;
default:

if ( in_category(1) ) {
 include(TEMPLATEPATH . '/category-blog.php');
 } else if ( in_category(3) ){
 include(TEMPLATEPATH . '/category-news.php');
 }else {
 include(TEMPLATEPATH . '/archive.php');
}
}
?>
<?php else : ?>
<!-- its a parent category -->
<?php 
switch ($cat_id)
{
case 7:

  include(TEMPLATEPATH . '/category_faq.php');
  break;	
case 4:

  include(TEMPLATEPATH . '/category_mediacenter.php');
  break;
case 3:

   include(TEMPLATEPATH . '/category_blog.php');
  break;
default:

if ( in_category(4) ) {
 include(TEMPLATEPATH . '/category_mediacenter.php');
 }else if ( in_category(7) ){
 include(TEMPLATEPATH . '/category_faq.php');
 } else if ( in_category(3) ){
 include(TEMPLATEPATH . '/category_blog.php');
 }else {
 include(TEMPLATEPATH . '/archive.php');
}
}
?>
<?php endif; ?>
