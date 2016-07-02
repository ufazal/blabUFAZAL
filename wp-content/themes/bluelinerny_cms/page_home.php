<?php  ?><?php

/*Template Name: Home Page*/

?>

<?php get_header(); ?>

<div id="content_wrap"  class="clearfix">

  <div id="content"class="clearfix">

    <div id="content_left">

      <!-- beginleftnav -->

      <?php include('left_nav_itdev.php'); ?>

      <!-- endleft nav -->

    <div style="margin-left:5px;">
      <a href="https://www.google.com/partners/#a_profile;idtf=9885010384;" target="_new"><img src="http://www.bluelinerny.com/wp-content/uploads/2015/06/PartnerBadge-Horizontal-250.png" width="250" height="94" alt="google partner" /></a>
      </div>
      <br />


            <!-- begin featured clients -->

      <div id="featuredClient_callout">

        <h1>Featured Clients</h1>

        <center>

          <div id="featuredclients">

            <?php 

			// podcasting flash header

			wp_swfobject_echo("flash_assets/featured_clients.swf", "228", "228");  ?>

          </div>

        </center>

      </div>

      <!-- end featured clients-->

        <!-- onepager callout -->

      <a href="http://www.bluelinerny.com/public/Blueliner_OnePager.pdf"><img src="http://www.bluelinerny.com/wp-content/themes/bluelinerny_cms/images/onesheet_callout.jpg" width="240" height="200" border="0" /></a>

      <!-- onepager callout -->

      <!-- pillars callout -->

      <div id="callout_7pillars">

        <center>

          <a href="http://www.bluelinerny.com/blog/"><img name="n7pillars_callout" src="<?php bloginfo('stylesheet_directory') ?>/global_assets/callouts/7pillars_callout.jpg" width="240" height="180" border="0" id="n7pillars_callout" alt="" /></a>

        </center>

      </div>

      <!-- end pillars callout -->

           <?php include('inc_smartsite_callout.php'); ?>

         <table width="250">
<tr>
   <td align="center"><a href="http://www.sempo.org/members/?id=10836299" target="_blank"><img name="sempo" src="<?php bloginfo('stylesheet_directory') ?>/images/sempo_white.jpg" id="sempo" alt="" border="0" height="100" width="215"></a></td>
  </tr>
<tr>
  <td align="center"><a href="http://www.bluelinerny.com/portfolio/chaa-creek%20"><img name="w3award" src="<?php bloginfo('stylesheet_directory') ?>/images/w3award_white.jpg" id="w3award" alt="" border="0" height="150" width="125" /></a></td>
  </tr>
  </table> 

    </div>

    <div id="content_right">

      <div id="homeflash">
         <div id="promo_01" class="promo-container primary-promo-container">
          <ul class="promo-navigation"></ul>
          <!-- //promo-navigation (auto generated)-->
          <ul class="promos clean">
          <?php
$my_query = new WP_Query('category_name=home-featured&showposts=6&order=dec');
while ($my_query->have_posts()) : $my_query->the_post();
?>
<li class="hidden"><?php the_content(); ?></li>
<?php endwhile; ?>

          </ul>
          <!-- // promo list-->
                 

        </div>
        <!-- //promo-container-->

       <script type="text/javascript">
						jQuery(function($){
							// Full options at http://jquery.malsup.com/cycle/options.html
							$('#promo_01 .promos').cycle({
								fx: 		'fade', 
								pager: 	'#promo_01 .promo-navigation',
								pause: 	5
							});
							
						});
					</script>

</div>

      <div id="page">

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="item entry" id="post-<?php the_ID(); ?>">

          <?php the_content('Read more &raquo;'); ?>

          <?php endwhile; ?>

        </div>

        <div class="module_events clearfix">

          <h2><a href="http://www.bluelinerny.com/blog">7 Pillars of Digital Marketing Blog</a></h2>

          <?php $my_query = new WP_Query('category_name=Blog&showposts=4');  while ($my_query->have_posts()) : $my_query->the_post();  $do_not_duplicate = $post->ID; ?>

          <div class="module_events_inner">

            <div class="event_title">

              <a href="<?php the_permalink(); ?>">

              <?php the_title(); ?>

              </a>

            </div>

            <div class="event_desc">

                <?php

            //Get images attached to the post

			$args = array(	'post_type' => 'attachment',	'post_mime_type' => 'image',	'numberposts' => -1,        'order' => 'ASC',	'post_status' => null,	'post_parent' => $post->ID);$attachments = get_posts($args);if ($attachments) {	foreach ($attachments as $attachment) {		$img = wp_get_attachment_thumb_url( $attachment->ID );                break;        }

			//Display image

			echo '<a href="';echo the_permalink();echo '" >';echo '<img src="'.$img.'" width="80" height="70" align="left" style="margin-right:12px;margin-bottom:0px;margin-top:12px; float:left;" /></a>';}?>

            <?php  ; ?>

            <?php the_excerpt(); ?>

            </div>

          </div>

          <?php endwhile; ?>

          <!-- end events module -->

        </div>

      </div>

      <div id="right_column">

        <div id="module_latestpodcast">

          <h1>Latest Videos</h1>

          <div id="module_latestpodcast_inner">

            <?php query_posts('static=true&page_id=2384&showposts=1'); ?>

            <?php while (have_posts()) : the_post(); ?>

            <?php  ; ?>

            <?php the_content(); ?>

          </div>

          <?php endwhile;?>

        </div>

        <!-- start blog feed authors-->

        <div class="module_latestblog">

          <h1>Latest News</h1>

          <?php query_posts('category_name=news&showposts=3'); ?>

          <?php while (have_posts()) : the_post(); ?>

          <div class="module_latestblog_inner">

            <h3><a href="<?php the_permalink(); ?>">

              <?php the_title(); ?>

              </a></h3>

          </div>

          <div class="module_latestblog_inner">

            <?php

            //Get images attached to the post

			$args = array(	'post_type' => 'attachment',	'post_mime_type' => 'image',	'numberposts' => -1,        'order' => 'ASC',	'post_status' => null,	'post_parent' => $post->ID);$attachments = get_posts($args);if ($attachments) {	foreach ($attachments as $attachment) {		$img = wp_get_attachment_thumb_url( $attachment->ID );                break;        }

			//Display image

			echo '<a href="';echo the_permalink();echo '" >';echo '<img src="'.$img.'" width="80" height="70" align="left" style="margin-right:8px;margin-bottom:0px; float:left;" /></a>';}?>

            <?php  ; ?>

            <?php the_excerpt(); ?>

          </div>

          <?php endwhile;?>

          <!--end blog feed authors-->

        </div>

      </div>

    </div>

  </div>

</div>

<?php get_footer(); ?>

