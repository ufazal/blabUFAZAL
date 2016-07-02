<?php  ?><?php
/*
Template Name: portfolio index page
*/
?><?php get_header(); ?>
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
  <div id="port_content">
    <div class="boundingbox" id="filtercontent">
      <?php 
//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)

$taxonomy     = 'services';
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
      <ul id="portfolio-filter">
        <li>Sort By Services:</li>
        <li><a href="#all" title="">All</a></li>
        <?php 
  $categories = get_categories($args); 
  foreach ($categories as $category) {

	echo '<li><a href="#' . $category->slug . '" rel="'. $category->slug .'">'. $category->name .'</a></li>'  ;
	
  }
 ?>
      </ul>

      <ul id="portfolio-list">
        <?php
global $wp_query;
$wp_query = new WP_Query("post_type=portfolio&post_status=publish&order=DEC&posts_per_page=-1");

?>
        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        <li style="display: block;" class="<?php $theSkills = get_the_terms($post->ID,'services');
  foreach ($theSkills as $theSkill) {
 echo $theSkill->slug . ' ';} ?>">
          <!-- retreive and apply slugs as classes for filterable jquery -->
          <?php // Retreive CUSTOM portfolio fields 
			  	$custom = get_post_custom($post->ID);
				$clientname = $custom["clientname"][0];
				 $clientdescription = $custom["clientdescription"][0];
				$clientquote = $custom["clientquote"][0];
				$companyname = $custom["companyname"][0];
				$clientlink = $custom["clientlink"][0];
				$clientindexthumb = $custom["clientindexthumb"][0];
 				?>
          <div class="boxgrid slideright">
            <?php /*?>          <?php echo $clientlink; ?><br />
          <?php echo $clientdescription; ?><?php */?>
            <img class="cover" src="<?php echo $clientindexthumb; ?>" alt="<?php the_title(); ?>"border="0" />
            <h3><?php echo $companyname; ?></h3>
            <p><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">View Case Study</a></p>
          </div>
          <!-- end slidebox -->
        </li>
        <?php endwhile;
endif; ?>
      </ul>

      <?php wp_reset_query(); ?>
    </div><br />
<br />
  </div>
  <!-- end content_right -->
</div>
<!-- end content_wrap -->
<?php get_footer(); ?>
