

<?php	 	
/*
  Template Name: Video gallery custom
 */
?>


<?php	 	 get_header(); ?>
<style type="text/css">

    .videoStrip {  }
    .videoHeader{ font-size: 18 ;}

</style>

<script type="text/javascript" src="<?php	 	 bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php	 	 bloginfo('template_directory'); ?>/js/jquery.galleryScroll.1.5.2.js"></script>

<!-- include Cycle plugin -->
<script type="text/javascript" src="<?php	 	 bloginfo('template_directory'); ?>/js/jquery.cycle.all.latest.js"></script>




<!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="/css/lt7.css" media="screen"/><![endif]-->

<script type="text/javascript">

    jQuery(document).ready(function($){

        /**

                Client decided they wanted an auto-cycling slideshow.
                This library was already being loaded so I used it.
         */

        $('.videoSlider').cycle({
            fx:     'scrollHorz',
            timeout: 0,
            //pager: '#slider-nav',
            pagerClick: stopslider,
            next: '#nextVideo',
            prev: '#prevVideo',
            pause:  1 //on hover pauses


        });

        //    $('.video-slide').onclick(function(){
        //
        //        $('.slideshow').cycle('pause');
        //
        //    });




    });


    function stopslider(id, element){


        jQuery('.videoSlider').cycle('id').cycle('pause');
        //$('.slideshow').cycle('pause');

    }
</script>



<style>
#videoTitle{ color: #A80321;
    font-family: "Caecilialtstd-bold","georgia";
    font-size: 18px;
    font-weight: bold;
	padding:5px 10px;
	background:#eee;
	display:inline;
	margin-left: 90px;
	margin-right: 90px;
	float:left;
	line-height: 30px;
	overflow: auto;
  }
  
  #fullArticle{ float:right; padding-top:10px}
  
  .nextprev{
	  
	  
    cursor: pointer;
    height: 110px;
    line-height: 110px;
    width: 27px;
	background:#A80321;
	color:#FFF;
	  
	  }
	  
	  .videoSlider { margin:0 20px; width:905px; margin-left:38px}
	 
</style>

<div id="main">


    <div class="top-heading" style="float:right; margin-right: 90px;">
        <h1><?php	 	 the_title(); ?> <img src="<?php	 	 bloginfo('template_directory'); ?>/images/vreel.jpg" /></h1>
    </div>
<br  class="clear"/>

    <div id="videoTitle"></div>
	<br  class="clear"/>
	<div style="text-align:center;">
		<div  style="border:10px solid #eee; text-align:center; padding:0 0 0 0; margin-bottom:10px; width: 760px; margin: auto;">
			
			<div id="vPlayer" class="video_player"></div>
			<div id="fullArticle"> <a href="" rel="nofollow" rel="nofollow" rel="nofollow" rel="nofollow">more &raquo;</a></div>
			<br  class="clear"/>
		</div>
	</div>
	
	<div style=" text-align:center; margin-left: 90px; width: 780px;">
    <style>
#prevVideo{float:left}
#nextVideo{float:right}


</style>

        <div id="prevVideo" class="nextprev">&laquo;</div>
        <div id="nextVideo" class="nextprev">&raquo;</div>
        <div>
            <div>


                <div class="videoStrip">

                    <?php	 	
                    global $wp_query;
                    $options_array = array();

                    $cat_id = get_cat_id("video");

                    query_posts("cat=$cat_id&showposts=1000");

                    //query_posts( 'showposts=1000' );
                    if (have_posts ()):

                        $last_post = $wp_query->post_count - 1; // index for the last post
                        $counter = 0;


                        echo '<ul class= "videoSlider" style="list-style-type: none;">';

                        while (have_posts ()):

                            the_post();

                            if ($counter === 0)
                                echo '<li style="cursor:pointer">';





                            $link = '<a class="videoHeader" href="' . get_permalink($post->id) . '">' . the_title('', '', false) . '</a>';
                            $articleLink = '<a href="' . get_permalink($post->id) . '" rel="nofollow" rel="nofollow" rel="nofollow" rel="nofollow">more &raquo;</a>';

                            // $linkEscaped = addcslashes($link, "\\\'\"&\n\r<>");
                            //echo $linkEscaped ;
                            //$linkEscaped = htmlspecialchars($link, ENT_QUOTES);
                            //echo '<div class="playlist" id="p-' . $post->ID . '" onclick="playYoutubeVideo(' . $post->ID . ',\'' . $linkEscaped . '\',\'' . get_video_code(get_post_meta($post->ID, 'video', true)) . '\')" style="width:215px; height:190px; margin-right:10px; margin-bottom:10px; float:left; background:#FFC">';
                            echo '<div class="popular_posts" style="width:172px; height:110px; float:left; margin-right:9px; overflow:hidden; margin-bottom:10px; text-align: center;"><div class="playlist posts" id="p-' . $post->ID . '" style="width:60px; height:60px; margin-right:10px; margin-bottom:10px; background:#FFC">';
                            the_post_thumbnail(array(170, 110));

                            echo '<div class="text">';
                            echo '<strong>';

                            if (strlen($post->post_title) > 15) {
                                echo substr(the_title($before = '', $after = '', FALSE), 0, 15) . '...';
                            } else {
                                the_title();
                            }
                            echo '</strong><br />';
                            //echo limit_words(get_the_excerpt(), '12');
                            echo '</div>';

                            echo '</div></div>';

                            if ($counter == 3 || $last_post == $wp_query->current_post) {
                                $counter = 0;
                                echo ' '; // close the tag every 4th item, or if we're at the end of the loop
                            } else {
                                $counter++;
                            }

                            $match = get_video_type(get_post_meta($post->ID, 'video', true));
                            $options_array["p-" . $post->ID] = array(
                                "post_id" => $post->ID,
                                "link" => $link,
                                "video" => get_video_code(get_post_meta($post->ID, 'video', true)),
                                "video_type" => $match[0],
                                "articleLink" => $articleLink
                            );
                        endwhile;

                        echo '</ul>';
                    endif;
                    ?>


                </div>


            </div>
        </div>
        <script type="text/javascript">




            var vid_options=<?php	 	 echo json_encode($options_array); ?>;

            jQuery(function($){
                $("div.playlist").click(function(){
                    cid=$(this).attr("id");
                    if(vid_options[cid].video_type == 'youtube'){
                        playYoutubeVideo(vid_options[cid].post_id,vid_options[cid].link,vid_options[cid].video, vid_options[cid].articleLink);
                    }
                    else if(vid_options[cid].video_type == 'blip'){

                        playBlipVideo(vid_options[cid].post_id,vid_options[cid].link,vid_options[cid].video, vid_options[cid].articleLink);

                    }
                })
            })





            jQuery(document).ready(function($){
                $("div.playlist:first").trigger('click');
            });





        </script>


    </div>
    <div id="slider-nav" style="z-index:3" align="right" > </div>
</div><!-- main -->
</div>

<script type="text/javascript">

    function playBlipVideo(id, title, video_id, articleLink){

        //alert('hello');

        // var embedCode = '<object data="http://blip.tv/file/2639308?utm_source=featured_ep&utm_medium=featured_ep" type="application/x-shockwave-flash" height="500" width="600">\n\
        //                <param name="movie" value="http://blip.tv/file/2639308?utm_source=featured_ep&utm_medium=featured_ep">\n\
        //              <param name="wmode" value="transparent"></object>' ;

        var embedCode = '<object data="http://blip.tv/play/'+video_id+'" type="application/x-shockwave-flash" height=510" width="640">'
            +'<param name="src" value="http://blip.tv/play/'+video_id+'">'
            +'<param name="allowfullscreen" value="true"></object>';



        // document.getElementById('vPlayer').innerHTML = embedCode;
        jQuery('#vPlayer').html(embedCode);


        //title = 'hello world';
        // document.getElementById('videoTitle').innerHTML = title ;
        jQuery('#videoTitle').html(title);
        //alert(url);

        jQuery('#fullArticle').html(articleLink);

    }

    function playYoutubeVideo(id, title, video_id, articleLink){

        // alert('hello');

        //        var embedCode = '<object data="http://www.youtube.com/v/'+video_id+'" type="application/x-shockwave-flash" height="440" width="488>'
        //            +'<param name="src" value="http://www.youtube.com/v/'+video_id+'">'
        //            +'<param name="allowfullscreen" value="true"></object>';

      /*  var embedCode = '<object width="530" height="390"><param name="movie" value="http://www.youtube.com/v/'+video_id+'?fs=1&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param>\n\
                      <param name="allowscriptaccess" value="always"></param>\n\
<embed src="http://www.youtube.com/v/'+video_id+'?fs=1&amp;hl=en_US" \n\
type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="530" height="390">\n\
</embed></object>'; */

                         var embedCode = '<iframe title="YouTube video player" width="760" height="600" src="http://www.youtube.com/embed/'+video_id+'" frameborder="0" allowfullscreen></iframe>';

                              //document.getElementById('vPlayer').innerHTML = embedCode;
                              jQuery('#vPlayer').html(embedCode);

                              // title = 'hello world';
                              // document.getElementById('videoTitle').innerHTML = title ;

                              jQuery('#videoTitle').html(title);

                              jQuery('#fullArticle').html(articleLink);


                          }


</script>

<?php	 	 get_footer(); ?>


<?php	 	

                    function get_video_type($src) {

                        //preg_match('#\[([blip|youtube]+).*\](.*)\[/[blip|youtube]+\]#', $src, $match);
                        preg_match("/\b(?:blip|youtube|dailymotion)\b/i", $src, $match);

                        // print_r($match);
                        if (isset($match[0])) {
                            return $match;
                        }
                    }

                    function get_video_code($src) {

                        //preg_match('#\[([blip|youtube]+).*\](.*)\[/[blip|youtube]+\]#', $src, $match);
                        preg_match("/\b(?:blip|youtube|dailymotion)\b/i", $src, $match);

                        // print_r($match);
                        if (isset($match[0])) {


                            if ($match[0] == 'youtube') {
                                return get_youtube_embed($src);
                                // echo 'hello you';
                            } else if ($match[0] == 'blip') {
                                return get_bliptv_embed($src);
                                // echo 'hello blip';
                            }
                        }
                    }

                    function get_youtube_embed($src) {

                        preg_match('#(?<=youtube\.com/v/)[^\?]+#', $src, $matches);
                         //preg_match('#(?<=youtube\.com/embed/)[^\"]+#', $src, $matches);

                        $videoId = $matches[0];

                        //print_r($matches);
//                            $embed = '<object data="http://www.youtube.com/v/' . $videoId . '" type="application/x-shockwave-flash" height="500" width="600">
//                                                 <param name="src" value="http://www.youtube.com/v/' . $videoId . '">\n\
//                                                 <param name="allowfullscreen" value="true"></object>';
                        return $videoId;
                    }

                    function get_bliptv_embed($src) {

                        preg_match('#(?<=blip\.tv/play/)[^\"]+#', $src, $matches);
                        $videoId = $matches[0];
//
//                            $embed = '<object data="http://www.youtube.com/v/' . $videoId . '" type="application/x-shockwave-flash" height="500" width="600">\n\
//                                                 <param name="src" value="http://www.youtube.com/v/' . $videoId . '">\n\
//                                                 <param name="allowfullscreen" value="true"></object>';
//                            $embed = '<embed src="http://blip.tv/play/AYKC8w4C" type="application/x-shockwave-flash" width="480" height="300"
//                                allowscriptaccess="always" allowfullscreen="true"></embed>';

                        return $videoId;
                    }
?>