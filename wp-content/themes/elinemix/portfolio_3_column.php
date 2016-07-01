<?php
/*
Template Name: Portfolio 3 Column
*/
?>

<?php get_header(); ?>

<div id="portfolio_column">
  
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
       <?php function portfolio__function() { ?>
            
            <?php $term_obj =  get_terms('portfolio_taxonomy',$args); ?>
            
                <form id="filter">
                
                  <fieldset>
                  
                    <label class="portfolio-categoria-button"><input type="radio" name="type" value="all" checked="checked"/>All</label>
                    
                    <?php foreach ($term_obj as $term) : ?>
                     
                    <label class="portfolio-categoria-button"><input type="radio" name="type" value="<?php echo $term->name; ?>" /><?php echo $term->name; ?></label>
                    
                    <?php endforeach; ?>
                    
                </fieldset>
                
                </form><!--END form -->
            
                <ul id="applications" class="image-grid">
                    
                    <?php
                        
                        $loop = new WP_Query( array('post_type' => 'portfolio', 'posts_per_page' => 999, 'orderby' => 'date', 'order' => 'DSC'));
                        
                        while ( $loop->have_posts() ) : $loop->the_post();
                    
                        global $post;
                        
                        $portfolio_title = $post->post_title;
                        
                        $portfolio_taxonomy = get_the_term_list($post->ID, 'portfolio_taxonomy', '', ' ', '' );
                        
                        $portfolio_taxonomy_format = preg_replace('/\<a(.*)\>(.*)\<\/a\>/iU', '<li>$2</li>', $portfolio_taxonomy);
                        
                        $terms_as_text = strip_tags( get_the_term_list( $wp_query->post->ID, 'portfolio_taxonomy', '', ' ', '' ) );
                        
                        $image_id = get_post_thumbnail_id();  
                        
                        $image_url = wp_get_attachment_image_src($image_id,'large');  
                        
                        $image_url = $image_url[0]; 
                      
                        $portfolio_slug = basename(get_permalink());
                        
                        $portfolio_image = get_the_post_thumbnail($post->ID, 'thumbnail_3_column');
                      
                        if ((!(empty($portfolio_title))) && (!(empty($portfolio_image))) && (!(empty($portfolio_taxonomy)))) { ?>
                        
                        <li data-id="id-<?php the_ID(); ?>" data-type="<?php echo $terms_as_text; ?>" class="portfolio_3_column">
                        
                        <a id="image_post" rel="prettyPhoto[<?php echo $terms_as_text; ?>]" title="<?php echo $portfolio_title; ?>" href="<?php echo $image_url ?>"><?php echo $portfolio_image; ?></a>
                        
                        <h2 id="<?php echo $portfolio_slug; ?>"><?php echo $portfolio_title; ?></h2>
                        
                        <?php
                            
                            the_content();
                        
                        ?>
                        <div class="post_line"></div>
                        </li><!--END li -->
                    
                    <?php } endwhile; wp_reset_query(); ?>
                    
                </ul><!--END ul -->
                
            <?php } ?>
      
      <?php portfolio__function(); ?>
    
    </div><!--END post -->
  
</div><!--END portfolio column -->

<?php get_footer(); ?>