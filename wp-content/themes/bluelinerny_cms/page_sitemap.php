<?php  ?><?php
/*
Template Name: sitemap
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
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <!-- item -->
     
      <div id="text_header">
        <h1 id="h1_replace"><?php the_title(); ?></h1>
      </div>
      <div id="page_wide">
        <div class="item entry" id="post-<?php the_ID(); ?>">
          <?php the_content('Read more &raquo;'); ?>
		    <ul id="utilityNav">
			<?php wp_list_pages('sort_column=menu_order&title_li=&include=2,30,31'); ?>
		</ul>

      <ul id="primaryNav" class="col7">
<?php wp_list_pages('sort_column=menu_order&title_li=&exclude=2,30,31,2384,4382,4384,938'); ?>
</ul>

        </div>
        <!-- end item -->
        <?php endwhile; ?>
        <?php else : ?>
        <h2 class="center">Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
        <?php endif; ?>
        <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
        <!-- end content -->
      </div>
     
    </div>
    <!-- end content_right -->
  </div>
  <!-- end content -->
</div>
<!-- end content_wrap -->
<?php get_footer(); ?>
