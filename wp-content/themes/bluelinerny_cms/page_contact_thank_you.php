<?php  ?>﻿<?php

/*

Template Name: Contact Page Thank You

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

      <div id="leftNavigation">
  <div id="InteractiveMedia" <?php if(is_page(35) || is_page(41) || is_page(57) ||is_page(60) ||is_page(63) ||is_page(68) ||is_page(71) ||is_page(74) || is_child_of(35) || is_child_of(41) || is_child_of(57) ||is_child_of(60) ||is_child_of(63) ||is_child_of(68) ||is_child_of(71) ||is_child_of(74))

{

// over

echo 'class="over"';

}

?> >
    <ul class="leftnav_links">
      <?php wp_list_pages('title_li=&include=35,41,57,60,63,68,71,74' ); ?>
    </ul>
  </div>
  <div id="TraditionalMedia" <?php if(is_page(80) || is_page(83) || is_page(87) || is_child_of(80) || is_child_of(83) || is_child_of(87))

{

// over

echo 'class="over"';

}

?>>
    <ul class="leftnav_links">
      <?php wp_list_pages('title_li=&include=80,83,87' ); ?>
    </ul>
  </div>
  <div id="ItDevelopment" <?php if(is_page(91) || is_page(94) || is_page(97) || is_page(101) || is_child_of(91) || is_child_of(94) || is_child_of(97) || is_child_of(101))

{

// over

echo 'class="over"';

}

?>>
    <ul class="leftnav_links">
      <?php wp_list_pages('title_li=&include=91,94,97,101' ); ?>
    </ul>
  </div>
</div>

      <!-- endleft nav -->

      

            <!-- contact info-->

<table width="220" border="0" align="right" cellpadding="10" cellspacing="0">

<tr>

<td><p><strong>Headquarters</strong> </p>

<p>Blueliner, LLC<br />
100 Church Street<br />
8th Floor, Room 800,<br />
New York, NY 10007<br />
</p>

<p>Main:  212-904-1240 <br />

Fax:  212-904-1243<br />



<a href="mailto:info@bluelinerny.com">Email  Us</a></p>

<p><strong>Hours of Operation</strong></p>

<p>24/7.  We Don&rsquo;t Sleep.<br />

But If You Get Our Voicemail,<br /> 

Leave a  Message.</p>

<p>&nbsp;</p></td>

</tr>

</table>

      <!-- contact info -->

    </div>

    <!-- end content_left -->

    <!-- begin content_right -->

    <div id="content_right">

      <?php if (have_posts()) : ?>

      <?php //while (have_posts()) : the_post(); ?>

      <!-- item -->

     

      <div id="text_header">

        <h1 id="h1_replace"><?php echo $post->post_title; ?></h1>

      </div>

      <div id="page_widecontact">

        <div class="item entry" id="post-<?php echo $post->ID; ?>">

          <?php //the_content('Read more &raquo;'); ?>

		  <?php  

		//print_r ($_COOKIE);

		$the_content = str_replace("<first-name>", $_COOKIE['contact_thanks-fname'],$post->post_content);

		//setcookie("contact_thanks-fname",''); 

		echo $the_content;

		// the_post(); 

	  ?>

		  

		  

        </div>

        <!-- end item -->

        <?php //endwhile; ?>

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

