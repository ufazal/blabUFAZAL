<?php  ?>
<?php get_header(); ?>
<!-- begin header big image -->
<?php include('inc_header_image.php'); ?>
<!-- end header big image -->
<!-- begin content_wrap -->
<div id="content_wrap"  class="clearfix">
  <!-- begin content -->
  <div id="content" class="clearfix">
  <div class="sitemapdiv">
  <ul id="utilityNav">
			<?php wp_list_pages('title_li=&include=2,30,31'); ?>
		</ul>

      <ul id="primaryNav" class="col7">
<?php wp_list_pages('title_li=&exclude=2,30,31'); ?>
</ul>



     </div>
    </div>
    <!-- end content_right -->
  </div>
  <!-- end content -->
</div>
<!-- end content_wrap -->
<?php get_footer(); ?>
