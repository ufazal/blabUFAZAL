 <?php
 /*
 Template Name: Blog Small Image
 */
?>

<?php get_header(); ?>

<?php

$sidebar_key="madza_sidebar_type"; 
$sidebar=get_post_meta($post->ID, $sidebar_key, true); 
$post_in_page=get_option("of_posts_in_page");
?>

<!--BLOG CONTENT -->
<div class="<?php 
    
    if($sidebar=="Right"){ echo "right-content"; } else if($sidebar=="Left") { echo "left-content"; } 
    
    else {  echo of_page_layout(); echo "-content";   } ?>">
    
<?php
$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query("paged=$page");
while ($wp_query->have_posts()) : $wp_query->the_post();
?>   

    <div class="post-small-image"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s'), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_post_thumbnail('post_small_image');?></a></div>
     
    <div class="small-image-diver"> 		
        
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        
        <div class="entry-meta">
                
        <?php if ( count( get_the_category() ) ) : ?>
        	
           <div class="cat-links">Posted: <?php the_modified_date('j'); ?> <?php the_modified_date('M'); ?> <?php the_modified_date('Y'); ?> | In 
        		
                <?php printf( __( '%2$s' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
                
                <div class="float-right">
                             
                    <?php comments_popup_link( __( '0 Coment'), __( '1 Coment' ), __( '% Coments'), __( '0'), __( '0') ); ?>
                 
                 </div>
        	
            </div>
        
        <?php endif; ?>
        
        </div><!-- entry_first END -->
        
        
            
        <div class="entry-content">
        
        	<?php the_excerpt(); ?>
            
            
        </div><!-- entry_content END -->
    
    </div>   
    
    <div class="clear"></div>                

<?php endwhile ?>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
<?php $wp_query = null; $wp_query = $temp; ?>
<?php wp_reset_query(); ?>  
 
</div><!--END BLOG CONTENT -->
 
<?php get_sidebar(); ?>

<?php get_footer(); ?>
