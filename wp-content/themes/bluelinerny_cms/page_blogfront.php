<?php  ?><?php
/*
Template Name: Blog Front Page
*/
?>
<?php get_header(); ?>
<!-- begin header big image -->
<?php include('inc_blog_header.php'); ?>
<!-- end header big image -->
<!-- begin content_wrap -->
<div id="content_wrap"  class="clearfix">
  <div id="main-blog">
  <!-- begin content -->
  <div id="content">
  <?php $my_query = new WP_Query('category_name=blog&showposts=5');
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate = $post->ID; ?>
        <ul class="blacklinks">
          <li><a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
            </a></li>
        </ul>
        <?php endwhile; ?>
</div>
  <!-- end content -->
  <?php get_sidebar(); ?>
  </div>
</div>
<!-- end content_wrap -->
<?php get_footer(); ?>
