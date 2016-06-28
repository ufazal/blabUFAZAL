<?php
/**
* Template Name: Right Sidebar
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
			<div id="content" class="main-content-inner col-sm-12 col-md-8">

	<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>
    
	<div class="content-padder panel">

	<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				
			<?php endwhile; // end of the loop. ?>


	</div><!-- .content-padder -->
   

<?php get_sidebar('page'); ?>
<?php get_footer(); ?>
