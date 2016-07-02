<?php  ?><?php
/*
Template Name: Contact Page
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
      
            <!-- onepager callout -->
      <a href="http://www.bluelinerny.com/public/Blueliner_OnePager.pdf"><img src="http://www.bluelinerny.com/wp-content/themes/bluelinerny_cms/images/onesheet_callout.jpg" width="240" height="200" border="0" /></a>
      <!-- onepager callout -->
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
      <div id="page">
        <div class="item entry" id="post-<?php the_ID(); ?>">
          <?php the_content('Read more &raquo;'); ?>
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
<div id="right_column_contact">

<table border="0" align="right" cellpadding="10" cellspacing="0">
<tr>
<td><p><strong>Headquarters</strong> </p>
<p>Blueliner, LLC<br />
55 Broad Street<br />
8th Floor<br />
New York, NY 10004<br />
</p>
<p>Main:  212-904-1240 <br />
Fax:  212-904-1243<br />

<a href="mailto:info@bluelinerny.com">Email  Us</a></p>
<p><strong>Hours of Operation</strong><br />
24/7.  We Don&rsquo;t Sleep.<br />
But If You Get Our Voicemail,<br /> 
Leave a  Message.</p>
<p>&nbsp;</p></td>
</tr>

</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
    </div>           
    <!-- end content_right -->
  </div>
  <!-- end content -->
</div>
<!-- end content_wrap -->
<?php get_footer(); ?>
