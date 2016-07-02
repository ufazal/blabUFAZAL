<?php  ?><?php if ( is_page(array(63,68,80,87,97)))  {
    // This is a subpage

} else {
     include('inc_smartsite_callout.php');
}

?>



<!--all pages-->

<div id="newsfeed_box"><h2>Latest News</h2>
 <ul>
 <?php
 global $post;
 $myposts = get_posts('numberposts=4&category=3');
 foreach($myposts as $post) :
 ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
 <?php endforeach; ?>
 </ul> 

</div>




<div id="blogfeed_box"><h2>New in the 7 Pillars Blog</h2>
 <ul>
 <?php
 global $post;
 $myposts = get_posts('numberposts=4&category=1');
 foreach($myposts as $post) :
 ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
 <?php endforeach; ?>
 </ul> 

</div>
<a href="http://www.bluelinerny.com/public/Blueliner_OnePager.pdf"><img src="http://www.bluelinerny.com/wp-content/themes/bluelinerny_cms/images/onesheet_callout.jpg" width="240" height="200" border="0" /></a>

<table width="250">
<tr>
   <td align="center"><a href="http://www.sempo.org/members/?id=10836299" target="_blank"><img name="sempo" src="<?php bloginfo('stylesheet_directory') ?>/images/sempo_white.jpg" id="sempo" alt="" border="0" height="100" width="215"></a></td>
  </tr>
<tr>
  <td align="center"><a href="http://www.bluelinerny.com/portfolio/chaa-creek%20"><img name="w3award" src="<?php bloginfo('stylesheet_directory') ?>/images/w3award_white.jpg" id="w3award" alt="" border="0" height="150" width="125" /></a></td>
  </tr>
  </table>
