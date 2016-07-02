<?php  ?><?php
/*
Template Name: Portfolio Index
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
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>">
          <h1>
            <?php the_title(); ?>
            : </h1>
          <div>
            <h2></h2>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <div id="portfolio-indexpage">
        <?php query_posts('static=true&posts_per_page=-1&child_of='.$id.'&order=ASC'); ?>
        <?php 
$thumbs_per_page=15;
$thumb_count=0;
 ?>
        <div id="slider">
          <div class="scrollButtons scrollMeLeft">
            <a><span>previous</span></a>
          </div>
          <div class="scroll">
            <div class="scrollContainer">
              <?php echo '<!-- begin slides --><div class="panel">'; ?>
              <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
              <?php // CUSTOM FIELDS | http://codex.wordpress.org/Using_Custom_Fields
$src_thumb = get_post_meta($post->ID, "src_thumb_value", $single = true); ?>
              <?php if($src_thumb !== '') { ?>
              <a href="<?php the_permalink();?>"><img src="<?php echo $src_thumb; ?>" border="0" /></a>
              <?php } ?>
              <?php $thumbs_count++;
    if($thumbs_count % $thumbs_per_page==0)
    {
        echo '</div><div class="panel">';
    } ?>
              <?php endwhile; endif; ?>
              <?php echo '</div><!-- end slides -->'; ?>
            </div>
          </div>
          <div class="scrollButtons scrollMeRight">
            <a><span>next</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end content -->
</div>
<!-- end content_wrap -->
<?php get_footer(); ?>
