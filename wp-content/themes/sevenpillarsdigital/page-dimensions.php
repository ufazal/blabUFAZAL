<?php
/**
* Template Name: dimensions
*/
get_header();
?>
	<!-- headerpic -->
    <div class="bood">
	<section id="defaulthead">
	<h1 id="catchphrase">"marketing is in everything"</h1>
	</section>
	 </div>
<div class="container">
  <div class="col-md-12">
    <h1 class="featurette-heading">The 7 Pillars framework <span class="text-muted"> has 7 Core Dimensions. </span> </h1>
    <p>There are 7 core Dimensions in the 7 Pillars system, that allow us to organize and view our marketing in a way that puts everything in perspective.  </p>
    <br>
  </div>
</div>
<div class="container-fluid" style="background-color:#efefef; padding-bottom:50px;"  id="greyico">
  <div class="container">
    <br>
    <h1 style="text-align:center; color:#0A66B1;"><strong>7 Dimensions of Digital Marketing</strong></h1>
    <br>
    <br>
    <div id="accordion1">
      <ul>
        <li>
          <h1>7 PILLARS</h1>
          <div>
            <span>
            <h3>Dimension 1. 7 PILLARS </h3>
            The Pillars constitute the first and highest-level Dimension of the model.  Everything in Digital Marketing ultimately flows through and falls under one or more of these central tenets.  They are like the planets in a solar system - the core energy centers that govern all things in the DM Universe.
 </span>
          </div>
        </li>
        <li>
          <h1>7 MODES</h1>
          <div>
            <span>
            <h3>Dimension 2. 7 MODES </h3>
            The Modes are nearly equal to the Pillars in importance.  While the Pillars are more high-level and conceptual, the Modes exist on the plane of action.  They describe the different stages or modalities through which various marketing actions are taken.  For a list of what the 7 Modes are, click here or the Modes tab above.

</span>
          </div>
        </li>
        <li>
          <h1>7 LEVELS </h1>
          <div>
                     <span>
            <h3>Dimension 3. 7 LEVELS </h3>
            <p>The Levels refer to expertise and skill along each Pillar and Mode "track".  7 Pillars operates on objective measures that take 'the fluff' out.  The 7 Pillars Self-Assessment App gives marketers a starting point from which they can gauge their true level.  Karate Dojo analogies are used to depict the Levels by Belts - White, Yellow, Orange, Green, Brown, Black and the ultimate level reserved for masters of the game - Blue Belts.</p>
            </span>
          </div>
        </li>
        <li>
          <h1> 8 ANGLES</h1>
          <div>
 <span>
           

            <h3>Dimension 4. 8 ANGLES</h3>
           The angles can be literally translated, as they refer to what one’s primary method or approach to Digital Marketing is.  Are you coming at this from the standpoint of a Designer?  Then you’re likely to take the Creative Angle.  The Angles combine with Levels to bring to life another key visual of the 7 Pillars Model - the Pyramids of Knowledge.  The 4 Major Angles are - Creative, Technical, Marketing and Research; and the 4 Minor Angles are - Management, Financial/Venture and Legal. </span>
          </div>
        </li>
        <li>
          <h1>Markets</h1>
          <div>
            <span>
            <h3>Dimension 5: Markets </h3>
            This includes all of the global markets and the various ways of segmenting them (by Continent, Country, City or State).  Multi-lingual websites, campaigns and overall marketing are topics for this Dimension.  Dimension 5 is a powerful and age-old segmentation concept, which has been turbo-charged by the explosion of Internet connectivity and smartphone ubiquity.  Local Social and Search Marketing are essentially leveraging knowledge from this Dimension.</span>
          </div>
        </li>
        <li>
          <h1>Industries</h1>
          <div>
            <span>
            <h3>Dimension 6: Industries</h3>
           This includes all industries, as well as sub-industries (ie. Airlines as a sub-group of Travel & Tourism).  Best practices and marketing tactics differ widely by industry, as does lingo and the regulatory environment.  Having industry domain knowledge is a big plus, and often takes time to learn.  While most principles from the 7 Pillars are agnostic and transfer well across industries, the benefits of domain knowledge allow those who possess it to navigate with more precision and tact.</span>
          </div>
        </li>
        <li>
          <h1>Time</h1>
          <div>
            <span>
            <h3>Dimension 7: Time [Eras]</h3> Digital Marketing best practices and tools are constantly changing.  What was relevant yesterday may not be tomorrow.  Dimension 7 highlights these trends, by parsing Digital Marketing into Eras – most broadly, The Past, Present and Future.  Here we consider historical trends, Digital Marketing history, present day realities and future possibilities (ie. in terms of CPC costs, keyword searches, cost of goods sold, etc).  One can also utilize this Dimension to map out their career history and set goals for upcoming periods.</span>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<br>
<div class="container">
  <br>
  <div class="row well">
    <div class="col-lg-3 col-md-3">
<a href="http://amzn.to/204x3B5" class="thumbnail" target="_blank"><img  class="img-responsive img-thumbnail" src="<?php bloginfo('stylesheet_directory') ?>/images/7-pillars-book-250.jpg" alt="7-pillars Book"></a>
    </div>
    <div class="col-lg-9 col-md-9">
      <h3>Get The Book!</h3></br>
      <h4>Pick up your copy of The 7 Pillars of Digital Marketing on Amazon today!</h4></br></br>
 <p class="text-center">  <a href="http://amzn.to/204x3B5"class="btn btn-primary btn-lg " role="button"> BUY NOW!</a></p>
    </div>
    
  </div>
  <!-- /.row -->
  
</div>




<script>    
    $("#accordion1").awsAccordion({
    type:"horizontal",
    cssAttrsVer:{
        ulWidth:"responsive",
        liHeight:50
    },
    cssAttrsHor:{
        ulWidth:"responsive",
        liWidth:60,
        liHeight:360,
		responsiveMedia:"(max-width: 768px)"
    },
    startSlide:1,
    openCloseHelper:{
        openIcon:"ok-circle",
        closeIcon:"ok-sign"
    },
    openOnebyOne:true,
    classTab:"active",
    slideOn:"click"
})

    </script>  
    
<div class="main-content">
<div class="container">
<div class="row">
<div id="content" class="main-content-inner col-sm-12 col-md-8">
  <?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'content', 'page' ); ?>

  <?php endwhile; // end of the loop. ?>
</div>
<!-- close .main-content-inner -->
<?php get_footer(); ?>
