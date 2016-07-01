<?php
/**
 * @author madars.bitenieks
 * @copyright 2011
 */
?>

<div class="clear"></div>
 
</div><!--END CONTENT --> 

</div><!--END CONTENT FULL --> 

<!-- ******************** FOOTER START ******************** -->
<div id="footer">

<?php 
if  (get_option('of_top_footer') == 'true') { ?>

        <!-- FOOTER COLUMNS START -->
        <div id="footer_columns">
        <div class="midle">
        
        <div class="clear"></div>
        
        </div> <!-- MIDLE END -->
        
        </div> <!--FOOTER COLUMNS END -->
        
<?php
 
} 

if  (get_option('of_midle_footer') == 'true') { ?>

        <!-- FOOTER COLUMNS START -->
        <div id="footer_columns_midle">
        <div class="midle">
        <div class="three_fourth_last" style="width:65%">
            <h2>Sitemap</h2>
			<div style="float:left; margin-bottom:20px"><?php wp_nav_menu( array('menu' => 'footer' )); ?></div>


<g:plusone></g:plusone>
        </div>
        <div class="one_fourth_last" style="width:35%">
        <h2>News &amp; Articles</h2>
            <?php $postslist = get_posts('numberposts=3&order=DEC');
                         foreach ($postslist as $post) : setup_postdata($post);
                    ?>
            <span style="float:left; padding-right:10px"><a style="color:#D1D1D1; text-decoration:none; font-size:12px;" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?> ">
              <?php if (strlen($post->post_title) > 15) {
                                    echo substr(the_title($before = '', $after = '', FALSE), 0, 30) . '...'; } 
                                        else {the_title();
                                            } ?>
              </a> </span>
                        <span style="padding-left:10px; border-left:1px solid; display:block; float:left; height:15px; color:#7c7c7c; font-size:10px">
                            <?php the_time('M j, Y'); ?>
                        </span>
                        <div class="clear"></div>


        
            <span style="font-size:11px"><?php echo limit_words(get_the_excerpt(), '18'); ?>...</span><br/><span style="padding:5px; display:block"></span>
            <?php endforeach; ?>
        </div>
        

        <div class="one_fourth_last">
            <h2>Contact info</h2>
            <p><span class="icon_text icon_pen gray">1-800-961-0288</span></p>
            <p><span class="icon_text icon_mail gray"><a href="mailto:sales@coss-systems.com">sales@coss-systems.com</a></span></p>
            <p><span class="icon_text icon_home gray">COSS Training USA <br />
 New Jersey, USA <br />

700 Plaza Drive<br />

Secaucus, NJ 07094

</span></p>
           <!-- <p><span class="icon_text icon_person gray">Madars Bitenieks</span></p>-->

        </div>
		
		
        <div class="clear"></div>
        </div> <!-- MIDLE END -->
        
        </div> <!--FOOTER COLUMNS MIDLE END -->
        
<?php
 
} 
/*
if  (get_option('of_bottom_footer') == 'true') { ?>
        
        <!-- SUB FOOTER START -->
        <div id="sub_footer">
        
        <div class="midle">
        
                <!-- SUB FOOTER LEFT COLUMN START -->
                <div class="one_half">
                
                        <?php 
                        
                        echo get_option('of_bottom_footer_copyright'); 
                        
                        ?>
                
                </div> <!-- SUB FOOTER LEFT COLUMN END -->
                
                <!-- SUB FOOTER RIGHT COLUMN START -->
                <div class="one_half last">
                
                
                </div> <!-- SUB FOOTER RIGHT COLUMN END -->
        
        <div class="clear"></div>
        
        </div> <!-- MIDLE END -->
        
        </div> <!-- SUB FOOTER END -->
<?php        
    
}
*/
?>

</div><!--END Footer --> 

<?php wp_footer(); ?>


<!-- Google Analytics -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20617433-1']);
  _gaq.push(['_setDomainName', '.coss-systems.com']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_trackPageLoadTime']);


  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- End of Google Analytics -->

<script type="text/javascript" language="javascript">llactid=18926</script> 
<script type="text/javascript" language="javascript" src="http://t2.trackalyzer.com/trackalyze.js"></script> 

<!-- +1 button -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<!-- End of +1 button -->


</body>

</html>
