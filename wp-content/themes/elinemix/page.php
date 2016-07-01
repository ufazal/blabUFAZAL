<?php
/**
 * @author madars.bitenieks
 * @copyright 2011
 */

get_header(); 

?>

<?php

$sidebar_key="madza_sidebar_type"; 
$sidebar=get_post_meta($post->ID, $sidebar_key, true); 

?>

<!--TEXT CONTENT -->
<div class="<?php 
    
    if($sidebar=="Right"){ echo "right-content"; } else if($sidebar=="Left") { echo "left-content"; } 
    
    else { 
    
    echo of_page_layout(); echo "-content";   
    
    } ?>">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
           <?php the_content( __( '<div class="reed_more">Reed More &raquo;</div>', 'Gooseo' ) ); ?>
		   
           <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'Gooseo' ), 'after' => '</div>' ) ); ?>
			
           <div class="clear"></div>
	
    </div><!--END POST -->
    

<?php endwhile; ?>

</div><!--END TEXT CONTENT -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>