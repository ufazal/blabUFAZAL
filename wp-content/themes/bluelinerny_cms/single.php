<?php  ?><?php

 if ( have_posts() ) { the_post(); rewind_posts(); }
 if ( in_category( 'News' ) || in_category( 'Events' ) || in_category( 'Past Events' ) || in_category( 'Latest News' ) || in_category( 'In the News' ) ) {
 include(TEMPLATEPATH . '/single-news.php');
 }else {
 include(TEMPLATEPATH . '/single-default.php');
}
 
 ?>
