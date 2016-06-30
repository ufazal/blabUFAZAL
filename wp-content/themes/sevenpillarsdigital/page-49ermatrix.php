<?php
/**
* Template Name: 49ermatrix
*/
get_header();
?>


<!-- headerpic -->
    <div class="bood">
	<section id="defaulthead">
	<h1 id="catchphrase">"marketing is in everything"</h1>
	</section>
	 </div>



<div class="main-content">
<div class="container">
<div class="row">
<div id="content" class="main-content-inner col-sm-12 col-md-12">
  <?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'content', 'page' ); ?>

  <?php endwhile; // end of the loop. ?>
</div>
<!-- close .main-content-inner -->
<?php get_footer(); ?>
