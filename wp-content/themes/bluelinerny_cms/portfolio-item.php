<?php  ?><?php
/*
Template Name: Portfolio Item
*/
?>
<?php get_header(); ?>
<!-- begin header big image -->

<div id="headerImage_wrap" class="clearfix">
  <div id="headerImage">
    <img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/header_images/portfolio_cmsheader.jpg" alt="" width="990" height="110" />
  </div>
</div>
<!-- end header big image -->
<!-- begin content_wrap -->
<div id="content_wrap"  class="clearfix">
  <!-- begin content -->
  <div id="content" class="clearfix">
    <div id="portfolio-page-wrapper">
      <div class="portfolio-page-client">
        <!-- use initial loop as normal -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>">
          <h1>Client:
            <?php the_title(); ?>
          </h1>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <!-- get current page id, this ID will return the top level client page...this id variable will CHANGE in the slider loop -->
      <?php $this_page_id = get_query_var('page_id'); ?>
      <!-- give client_page_id variable the top level page value before it changes in the slider loop -->
      <?php $client_page_id = $post->ID ; ?>
      <!-- query the child pages of the current top level client page you are on -->
      <?php query_posts('post_type=page&order=asc&child_of='.$id); ?>
      <div id="portfolio-page">
        <div id="slider">
          <ul class="navigation">
            <?php while (have_posts()) : the_post(); ?>
            <?php if(is_child($this_page_id)) { ?>
            <li><a href="#<?=$post->post_name?>"><span>
              <?php the_title(); ?>
              </span></a></li>
            <?php } else { ?>
            <!-- do nothing -->
            <?php } ?>
            <?php endwhile;?>
          </ul>
          <div class="scrollButtons scrollMeLeft">
            <a><span>previous</span></a>
          </div>
          <div class="scroll">
            <div class="scrollContainer">
              <?php while (have_posts()) : the_post(); ?>
              <?php if(is_child($this_page_id)) { ?>
              <div class="panel" id="<?=$post->post_name?>">
                <?php the_content(); ?>
                <?php } else { ?>
                <!-- do nothing -->
                <?php } ?>
              </div>
              <?php endwhile;?>
            </div>
          </div>
          <div class="scrollButtons scrollMeRight">
            <a><span>next</span></a>
          </div>
        </div>
        <div id="portfolio-page-bottom">
        </div>
      </div>
      <div class="portfolio-page-client">
        <!-- here we requery the top level id page so we can grab the main client content -->
        <?php query_posts('post_type=page&order=asc&child_of='.$id); ?>
        <?php $my_query = new WP_Query("showposts=1&post_type=page&page_id=$client_page_id");
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate = $post->ID; ?>
        <div class="entry">
          <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
         
          
          <div class="backto_portfolio"> 
<?php $parent_title = get_the_title($post->post_parent);?>
<a href="<?php echo get_permalink($post->post_parent) ?>">&laquo; Back to <?php echo $parent_title;?></a>
  <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
</div>

        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <!-- end content -->
</div>
<!-- end content_wrap -->
<?php get_footer(); ?>
