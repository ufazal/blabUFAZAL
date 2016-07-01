<?php
/*
Template Name: press
*/
get_header(); 

	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	  query_posts('paged=' . $paged . '&cat=6'); 
?>
<div class="<?php 
    if($sidebar=="Right"){ echo "right-content"; } else if($sidebar=="Left") { echo "left-content"; } 
    
    else {  echo of_page_layout(); echo "-content";   } ?>">
    <?php
if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

   
     
    <div class="small-image-diver"> 		
        
         <h2 class="entry-title"><a href="<?php echo get_post_meta($post->ID, 'download', true); ?>" title="<?php printf( esc_attr__( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"  onclick="<?php echo get_post_meta($post->ID, 'onclick', true); ?>" target="_blank"><?php the_title(); ?></a></h2>
		
		
         <div class="post-small-image"><a href="<?php echo get_post_meta($post->ID, 'download', true); ?>" title="<?php printf( esc_attr__( 'Permalink to %s'), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_post_thumbnail('post_small_image');?></a></div>
        <div class="entry-meta">
                
        	<?php the_content(); ?>

			<a href="<?php echo get_post_meta($post->ID, 'download', true); ?>" class="download_btn" onclick="<?php echo get_post_meta($post->ID, 'onclick', true); ?>" target="_blank">Download</a>
			
        
        </div>
        
    
    </div>   
    
    <div class="clear"></div>                
                   


<?php endwhile ?>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
<?php $wp_query = null; $wp_query = $temp; ?>
<?php wp_reset_query(); ?>  
</div>

<div class="right-sidebar">
	<div class="menu_categories">
    	<h2>Company</h2>
    	<ul>
			<?php wp_list_pages("title_li=&child_of=2"); ?> 
        </ul>
	</div>
</div>




<?php  get_footer(); ?>
