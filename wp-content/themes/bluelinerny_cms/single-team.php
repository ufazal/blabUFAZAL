<?php  ?><?php
/*
Template Name: portfolio flash
*/
?>
<?php get_header(); ?>
<!-- begin header big image -->
<div id="headerImage_wrap" class="clearfix">
<div id="headerImage"class="clearfix">
<a href="<?php bloginfo('url'); ?>" title="Team"><img src="<?php bloginfo('stylesheet_directory') ?>/global_assets/header_images/team_header.jpg" border="0" alt="What's up" /></a>
</div>
</div>
<!-- end header big image -->
<!-- begin content_wrap -->
<div id="content_wrap"  class="clearfix">
<!-- begin content -->

<div id="content" class="clearfix">

        <?php // CUSTOM FIELDS | http://codex.wordpress.org/Using_Custom_Fields
			  	$customentries = get_post_custom($post->ID);
				$teamTitle =  $customentries["teamTitle"][0];
				$teamlocal =  $customentries["teamlocal"][0];
				$teamPicture =  $customentries["teamPicture"][0];		
				$tedlink =  $customentries["tedlink"][0];
				$bluelinertwitterlink =  $customentries["bluelinertwitterlink"][0];	
				$personaltwitterlink =  $customentries["personaltwitterlink"][0];	

 				?>
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <!-- item -->
     
      <div id="team_container" class="clearfix">
	
	<div id="team_navigation"class="clearfix">
		<a href="<?php echo get_option('home'); ?>/team.php">Team </a> &raquo; <?php the_title(); ?>
	</div>
	<div id="team_content-container">
		<div id="team_content">
			<h1  style="margin-left: 0px; margin-bottom: 30px; margin-right: 0px; margin-top: 0px; padding: 0px; line-height: 40px; font-family: Arial, Helvetica, sans-serif; color: #000000;">About <?php the_title(); ?></h1> 
<?php the_content('Read more &raquo;'); ?>
<div id="team_bnnav">
<span style="width:200px;float:left;"><?php previous_post('&laquo; &laquo; %',
 'Team: ', 'yes'); ?>
</span>    <span style="text-align: right; width:200px; float:right; "><?php next_post('% &raquo; &raquo; ',
 'Team: ', 'yes'); ?>
</span>

</div>
      </div>
		<div id="team_aside">

          <?php if($teamPicture !== '') { ?>
      <div style="border: 1px solid #CCC; width:167px; float:left;">  <a href="<?php the_permalink();?>" ><img src="<?php echo $teamPicture; ?>" border="0" /></a></div>   
        <?php } ?>
			
            <div style="width:170px; float:right;">
<b><?php the_title(); ?></b><br>
<?php if($teamTitle !== '') { ?>
<?php echo $teamTitle;?>
<?php } ?>

<!-- location block-->
<p>
<?php
$taxonomy = 'locations';
$terms = get_the_terms( $post->ID , $taxonomy );
if ( !empty( $terms ) ) :
foreach ( $terms as $term ) {
	$link = get_term_link( $term, $taxonomy );
	if ( !is_wp_error( $link ) )
	echo '<b>Location: </b><br />';
		echo '<a href="' . $link . '" rel="tag" style="outline: none; text-decoration: none; color: #0063A4;">' . $term->name . '</a><br />';
}
endif;
?>
<?php if($teamlocal !== '') { ?>
<?php echo $teamlocal;?>
<?php } ?>
</p>
<!-- location block-->
		 </div>
         
         
 <div class="team_infobit">
         <b>Social Links:</b><br />
<?php if($tedlink !== '') { ?>
my TED profile:<br />
<a href="<?php echo $tedlink;?>" style="outline: none; text-decoration: none; color: #0063A4;" target="_blank"><?php echo $tedlink;?></a> <br />
<?php } ?>  
<?php if($personaltwitterlink !== '') { ?>
my twitter: <br />
<a href="<?php echo $personaltwitterlink;?>" style="outline: none; text-decoration: none; color: #0063A4;" target="_blank"><?php echo $personaltwitterlink;?></a> <br />
<?php } ?>
<?php if($bluelinertwitterlink !== '') { ?>
blueliner on twitter: <br />
<a href="<?php echo $bluelinertwitterlink;?>" style="outline: none; text-decoration: none; color: #0063A4;" target="_blank"><?php echo $bluelinertwitterlink;?></a><br />
<?php } ?>         
         
         </div>        
         
         
         
         
		</div>
  <div id="team_footer">
			
		</div>
  </div>

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

<!-- end content -->
</div>
<!-- end content_wrap -->
<?php get_footer(); ?>
