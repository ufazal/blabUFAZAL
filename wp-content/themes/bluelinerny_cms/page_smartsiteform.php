<?php  ?><?php
/*
Template Name: Smartsite form
*/
?>


         

             <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
 <?php the_content('Read more &raquo;'); ?>
         <?php endwhile; ?>
        <?php else : ?>
        <h2 class="center">Not Found</h2>
        <p class="center">Sorry, but you are looking for something that isn't here.</p>
        <?php endif; ?>
		
