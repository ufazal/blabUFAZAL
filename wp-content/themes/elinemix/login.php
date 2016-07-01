<?php
/*
Template Name: login
*/
?>

<?php get_header(); ?>
<div class="<?php 
    
    if($sidebar=="Right"){ echo "right-content"; } else if($sidebar=="Left") { echo "left-content"; } 
    
    else { 
    
    echo of_blog_layout(); echo "-content";   
    
    } ?>">
<input type="text" value="user" />
<br />
<br />
<input type="password" value="pass" />
<br />
<br />
<input type="button" value="Login" />

</div>

<?php get_footer(); ?>