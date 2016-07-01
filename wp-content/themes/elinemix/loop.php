<?php
/**
 * @author madars.bitenieks
 * @copyright 2011
 */
?>

<!-- Start the Loop. -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


   
     
    <div class="small-image-diver"> 	
	 <div class="post-small-image"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s'), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_post_thumbnail('homepage-thumbnails');?></a></div>	
        
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

                 

 <?php endwhile; else: ?>

 <p>Sorry, no posts matched your criteria.</p>

 <!-- REALLY stop The Loop. -->
 <?php endif; ?>
 
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

<?php wp_reset_query(); ?>  