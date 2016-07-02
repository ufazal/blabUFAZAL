<?php  ?><?php

/*

Template Name: Team Page

*/

?>
<?php get_header(); ?>
<!-- begin header big image -->
<?php include('inc_header_image.php'); ?>
<!-- end header big image -->
<!-- begin content_wrap -->
<div id="content_wrap"  class="clearfix">
  <!-- begin content -->
  <div id="content" class="clearfix">
    <!-- begin content_left -->
    <div id="content_left">
      <!-- beginleftnav -->
      <?php include('left_nav_itdev.php'); ?>
      <!-- endleft nav -->
      <?php include('inc_left_column.php'); ?>
    </div>
    <!-- end content_left -->
    <!-- begin content_right -->
    <div id="content_right">
      <?php 

//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)



$taxonomy     = 'locations';

$orderby      = 'name'; 

$show_count   = 0;      // 1 for yes, 0 for no

$pad_counts   = 0;      // 1 for yes, 0 for no

$hierarchical = 1;      // 1 for yes, 0 for no

$title        = '';



$args = array(

  'taxonomy'     => $taxonomy,

  'orderby'      => $orderby,

  'show_count'   => $show_count,

  'pad_counts'   => $pad_counts,

  'hierarchical' => $hierarchical,

  'title_li'     => $title

);

?>
      <ul class="sortby clearfix">
        <?php wp_list_categories( $args ); ?>
        <li>Sort By Office Locations:</li>
      </ul>
      <?php

global $wp_query;

$wp_query = new WP_Query("post_type=team&post_status=publish&order=ASC&posts_per_page=30");



?>
      <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
      <div style="background-color: #F9F9F9; border: 1px solid #EEE; float:left; width:167px; height:250px; margin:5px; padding:0px; position:relative;">
        <?php // CUSTOM FIELDS | http://codex.wordpress.org/Using_Custom_Fields

			  	$customentries = get_post_custom($post->ID);

				$teamTitle =  $customentries["teamTitle"][0];

				$teamlocal =  $customentries["teamlocal"][0];

				$teamPicture =  $customentries["teamPicture"][0];		

				$tedlink =  $customentries["tedlink"][0];

				$bluelinertwitterlink =  $customentries["bluelinertwitterlink"][0];		



 				?>
        <?php if($teamPicture !== '') { ?>
        <div style="height:125px; width:167px; overflow:hidden; border-bottom-style: solid; border-bottom-color: #EEE; border-left-style: none; border-right-style: none; border-top-style: none; border-left-width: 0px; border-bottom-width: 1px; border-right-width: 0px; border-top-width: 0px">
          <a href="<?php the_permalink();?>" ><img src="<?php echo $teamPicture; ?>" border="0" /></a>
        </div>
        <?php } ?>
        <h1 style="padding:0px; margin:0px;"><a href="<?php the_permalink(); ?> "title="<?php the_title(); ?>" style="font-size: 14px; font-family: Arial, Helvetica, sans-serif; padding-left: 4px; padding-bottom: 0px; padding-right: 4px; padding-top: 4px; margin-left: 4px; margin-bottom: 0px; margin-right: 4px; margin-top: 4px; outline: none; text-decoration: none; color: #000000; width: auto;">
          <?php the_title(); ?>
          </a></h1>
        <?php if($teamTitle !== '') { ?>
        <p style="padding-left: 4px; padding-bottom: 4px; padding-right: 4px; padding-top: 0px; margin-left: 4px; margin-bottom: 4px; margin-right: 4px; margin-top: 0px; font-size:11px; color: #000; width: auto;"><?php echo $teamTitle;?></p>
        <?php } ?>
        <a href="<?php the_permalink(); ?> "title="<?php the_title(); ?>" style="padding: 0px; margin: 0px; font-size: 10px; text-decoration: none; text-align: center; display: block; color: #FFF; line-height: 20px; bottom: 0px; right: 0px; width: 80px; height: 20px; position: absolute; background-color: #999;">view profile</a>
        <p style="padding-left: 4px; padding-bottom: 4px; padding-right: 4px; padding-top: 0px; margin-left: 4px; margin-bottom: 4px; margin-right: 4px; margin-top: 0px; font-size:11px; color: #000; width: auto;">
          <?php

$taxonomy = 'locations';

$terms = get_the_terms( $post->ID , $taxonomy );

if ( !empty( $terms ) ) :

foreach ( $terms as $term ) {

	$link = get_term_link( $term, $taxonomy );

	if ( !is_wp_error( $link ) )

	

		echo '<a href="' . $link . '" rel="tag" style="outline: none; text-decoration: none; color: #0063A4;">' . $term->name . '</a><br />';

}

endif;

?>
          <?php if($teamlocal !== '') { ?>
          <?php echo $teamlocal;?>
          <?php } ?>
        </p>
      </div>
      <!-- end team -->
      <?php endwhile;

endif; ?>
      <?php wp_reset_query(); ?>
    </div>
    <!-- end content_right -->
  </div>
  <!-- end content -->
</div>
<!-- end content_wrap -->
<?php get_footer(); ?>
