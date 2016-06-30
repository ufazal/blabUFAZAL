

<?php	 	
/*
  Template Name: Video details page
 */
?>
<script type="text/javascript" src="<?php	 	 bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php	 	 bloginfo('template_directory'); ?>/js/jquery.galleryScroll.1.5.2.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="<?php	 	 bloginfo('template_directory'); ?>/js/jquery.cycle.all.latest.js"></script>
<!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="/css/lt7.css" media="screen"/><![endif]-->
<?php	 	 get_header(); ?>
<div class="container_24">
    <div class="grid_24" >
        <div class="grid_10" id="content">
             <?php	 	 wp_reset_query();?>
            
            <?php	 	 if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <div class="entry-content">

						<?php	 	 //the_post_thumbnail ('slider');?>
                                                <?php	 	 the_title ();?>
                                               
						
                                                 <?php	 	
                                                        //ob_start();
                                                        //the_content('Read the full post', true);
                                                        $pattern = '~href=([\'\"])([^"^\']+)(?(1)[\'\"])~';
							preg_match_all($pattern, $post->post_content, $res );
                                                        $video_link = $res[2][0];
                                                        $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), thumbnail );

                                                        //$pattern = "/$video_anchor/";
                                                        //$postOutput = preg_replace('/<img[^>]+./', '', ob_get_contents());
                                                       /// preg_replace('<img[^>]+./', '123', $var, 1);

                                                        //ob_end_clean();
                                                        //echo $video_link;
                                                    ?>
            </div><!-- .entry-content -->
        </div>
        
        <div class="grid_10" id="main_player">

              <object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" name="player" width="528" height="300">
		<param name="movie" value="<?php	 	 bloginfo('template_directory'); ?>/player/player.swf" />
		<param name="allowfullscreen" value="true" />
		<param name="allowscriptaccess" value="always" />
		<param name="flashvars" value="file=<?php	 	 echo $video_link;?>&image=<?php	 	 echo $thumbnail[0];?>" />
		<embed
			type="application/x-shockwave-flash"
			id="player2"
			name="player2"
			src="<?php	 	 bloginfo('template_directory'); ?>/player/player.swf"
			width="528"
			height="300"
			allowscriptaccess="always"
			allowfullscreen="true"
			flashvars="file=<?php	 	 echo $video_link;?>&image=<?php	 	 echo $thumbnail[0];?>"
		/>
            </object>
        </div>
        <?php	 	 
            endwhile;
             ?>
    </div>
</div>