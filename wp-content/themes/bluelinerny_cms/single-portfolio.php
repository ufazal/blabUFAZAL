<?php  ?><?php get_header(); ?>
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
  <div id="port_content" class="clearfix">
    <div id="portfolio-page-wrapper">
      <div id="portfolio_navigation"class="clearfix">
        <a href="<?php echo get_option('home'); ?>/portfolio">Portfolio </a> &raquo;
        <?php the_title(); ?>
      </div>
      <div id="port_content_left">
        <div id="shortbox">
          <!-- use initial loop as normal -->
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h1>Client:
            <?php the_title(); ?>
          </h1>
          <?php // Retreive CUSTOM portfolio fields 
			  	$custom = get_post_custom($post->ID);
				$clientname = $custom["clientname"][0];
				$clientdescription = $custom["clientdescription"][0];
				$clientquote = $custom["clientquote"][0];
				$companyname = $custom["companyname"][0];
				$clientlink = $custom["clientlink"][0];
				$clientindexthumb = $custom["clientindexthumb"][0];
 				?>
          <!--   client Short description-->
          <?php if ($clientdescription == ""){
	echo "";
	}else {
		echo $clientdescription . '<br /><br />';
		} ?>
          <!--   client Visit Link-->
          <?php if ($clientlink == ""){
	echo "";
	}else {
		echo 'Visit: <br />';
		echo '<a href="'.$clientlink .'" target="_blank">'.$clientlink .'</a><br /><br />';
		} ?>
          Services Provided:<br />
          <?php 


$theSkills = get_the_terms($post->ID,'services');

$i = 0;
$len = count($theSkills);
echo '<span>';	
  foreach ($theSkills as $theSkill) {

echo '<a href="';
echo bloginfo('home').'/' .get_post_type( $post ).'#'. $theSkill->slug .'">'  ;
  if ($i < $len -1) {
      echo $theSkill->name .'</a>, ';
    } else if ($i == $len - 1) {
       echo $theSkill->name .'</a> ';
    }
  $i++;

 }
echo '</span><br /><br />';

 ?>
        </div>
        <!--    endshortbox       -->
        <div id="undershortbox_sidebar">
          <!--   clientquote-->
          <?php if ($clientquote == ""){
	echo "";
	}else {
		echo '<blockquote><p>'.$clientquote.'</p></blockquote>';
		} ?>
          <!--   client signed-->
          <?php if ($clientname == ""){
	echo "";
	}else {
		echo '<span class="clientname">- '.$clientname.'</span>';
		} ?>
        </div>
      </div>
      <div id="port_content_right">
       <?php the_content(); ?>
        
        <?php endwhile; endif; ?>
      </div>
    </div>
    <!-- end content -->
  </div>
</div>
<!-- end content_wrap -->
<?php get_footer(); ?>
