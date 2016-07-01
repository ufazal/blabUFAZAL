<?php
/*
Template Name: Event Calendar
*/

get_header(); 

?>

<div id="full-page">

   <?php if ( is_active_sidebar( 'event_calendar' ) ) : dynamic_sidebar( 'event_calendar' );  endif; ?> 

</div><!--END TEXT CONTENT -->

<?php get_footer(); ?>