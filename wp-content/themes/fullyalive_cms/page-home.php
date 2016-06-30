<?php
/**
 * Template Name: Home Page
 *
 * A custom page template without sidebar.
 * @package WordPress
 * @subpackage Foundation
 * @since foundation 1.0
 */
get_header(); ?>
	<div id="content">
		<div id="main">
		            <?php if ( function_exists('yoast_breadcrumb') && !is_front_page() ) {
				yoast_breadcrumb('<div id="breadcrumbs">','</div>');
				} ?>
			<div id="maincontent">

				
				
				
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content( __( 'Read More', 'bluelinerfoundation' ) ); ?>
				
				  </div><!-- .entry-content -->
				</div><!-- #post -->
	
			

	<div>
    

    </div>
				<?php endwhile; ?>
			  <div class="clear"></div>
				<h1><!-- clear float -->
				  What others are saying about Jack     </h1>          
				  
  <?php $postslist = get_posts('category=3&numberposts=3&order=DESC&orderby=rand');
foreach ($postslist as $post) :
setup_postdata($post); ?>
				  
				  <!--  thumbnail-->
			 
			  <div class="homeclientbox">
			    <div class="homeclient_thumb">
                 <?php
				$custom = get_post_custom($post->ID);
				$cf_thumb = (isset($custom["thumb"][0]))? $custom["thumb"][0] : "";
				
				if($cf_thumb!=""){
					$cf_thumb = "<img src='" . $cf_thumb . "' alt='' width='125' height='125' class=''/>";
				}
			?>
  <?php if($cf_thumb!=""){ 
			// linkthumb
			echo '<a href="' .  get_permalink($post->ID )  . '">';
			echo $cf_thumb;
			    echo '</a>';
				 }else{ 
			echo '<a href="' .  get_permalink($post->ID ) . '" >';
			the_post_thumbnail( 'blog-post-thumbnail', array('class' => '','alt' =>'', 'title' =>'') );}
			    echo '</a>'; ?>
                </div>
                <!-- end thumb -->
<div class="homeclient_item">
<?php $excerpt = get_the_excerpt(); echo bf_string_limit_words($excerpt,50);?><br /><br />


-<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
</div><div class="clear"></div><!-- clear float -->
</div>
<?php endforeach; ?>


			<div id="nsa_member_logo">
            <img src="http://www.fullyaliveleadership.com//wp-content/themes/fullyalive_cms/images/nsa_member_logo3.jpg" />
            </div>
		  </div><!-- end #maincontent -->
			
			<div id="side">
				<?php get_sidebar('page');?>
			</div><!-- end #side -->
			
		  <div class="clear"></div><!-- clear float -->
		  
		</div><!-- end #main -->
	</div><!-- end #content -->
<?php get_footer(); ?>
