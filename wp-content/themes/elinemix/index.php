<?php
/**
 * @author madars.bitenieks
 * @copyright 2011
 */

get_header(); ?>

<?php

$sidebar_key="madza_sidebar_type"; 
$sidebar=get_post_meta($post->ID, $sidebar_key, true); 

?>

<!--TEXT CONTENT -->
<div class="<?php 
    
    if($sidebar=="Right"){ echo "right-content"; } else if($sidebar=="Left") { echo "left-content"; } 
    
    else { 
    
        if(is_page()){ echo of_page_layout(); echo "-content"; }   
        
        else if (is_single()){ echo of_single_layout(); echo "-content";  }    
        
        else { echo of_blog_layout(); echo "-content";  }
        
        } ?>">
<?php

get_template_part( 'loop', 'index' );

?>

</div>			

<?php get_sidebar(); ?>

<?php get_footer(); ?>
