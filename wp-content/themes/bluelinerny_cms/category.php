<?php  ?><?php
if ( is_category( 'News' ) ) {
 include(TEMPLATEPATH . '/category-news.php');
 }else if ( is_category( 'Events' ) ) {
 include(TEMPLATEPATH . '/category-events.php');
 }else if ( is_category( 'in-the-news' ) || in_category( 'in-the-news' ) ) {
 include(TEMPLATEPATH . '/category-inthenews.php');
 }else if ( is_category( 'latest-news' ) || in_category( 'latest-news' ) ) {
 include(TEMPLATEPATH . '/category-latestnews.php');
 }else {
 include(TEMPLATEPATH . '/category-default.php');
}




 ?>









