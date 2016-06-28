

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php	 	 language_attributes(); ?>="<?php	 	 language_attributes(); ?>">

<head>

<meta charset="<?php	 	 bloginfo('charset'); ?>" />

<title>

<?php	 	



            /*







             * Print the <title> tag based on what is being viewed.







             */







            global $page, $paged;















            wp_title('|', true, 'right');















// Add the blog name.







            bloginfo('name');















// Add the blog description for the home/front page.







            $site_description = get_bloginfo('description', 'display');







            if ($site_description && ( is_home() || is_front_page() ))



                echo " | $site_description";















// Add a page number if necessary:







            if ($paged >= 2 || $page >= 2)



                echo ' | ' . sprintf(__('Page %s', 'twentyten'), max($paged, $page));



            ?>

</title>

<link rel="stylesheet" type="text/css" media="all" href="<?php	 	 bloginfo('template_url'); ?>/reset.css" />

<link rel="stylesheet" type="text/css" media="all" href="<?php	 	 bloginfo('template_url'); ?>/960_24_col.css" />

<link rel="stylesheet" type="text/css" media="all" href="<?php	 	 bloginfo('stylesheet_url'); ?>" />

<link rel="shortcut icon" href="<?php	 	 bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />

<!-- Favi -->

<link rel="pingback" href="<?php	 	 bloginfo('pingback_url'); ?>" />

 <link type="text/css" rel="stylesheet" href="<?php	 	 bloginfo('stylesheet_directory'); ?>/css/slide.css" media="screen" />

<?php	 	



            /* We add some JavaScript to pages with the comment form







             * to support sites with threaded comments (when in use).







             */







            if (is_singular() && get_option('thread_comments'))



                wp_enqueue_script('comment-reply');















            /* Always have wp_head() just before the closing </head>







             * tag of your theme, or you will break many plugins, which







             * generally use this hook to add elements to <head> such







             * as styles, scripts, and meta tags.







             */







            wp_head();















            if (is_home ()) {















                $body_height = '580px';







                $bg_img = 'home_slide_bg.jpg';



            } else {







                $body_height = '270px';







                $bg_img = 'inner-head-bg.png';



            }



?>

		<script type="text/javascript" src="<?php	 	 bloginfo('stylesheet_directory'); ?>/js/slide.js"></script>

</head>

<body <?php	 	 body_class(); ?>>

<?php	 	

      if(isset($_POST[submit])) {

			foreach($_POST as $vblname => $value) {$postcontent[$vblname] = mysql_real_escape_string($value);}

				$validate = TRUE;

				preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/', $_POST['email'], $useremail);

			if(empty($postcontent['firstname'])) {

				$validate = FALSE;

				$errormsg[0] = '<span class="form-error" icon="warning">'.__e('You have to enter your name').'</span>';

			}



		if(empty($useremail)) {

			$validate = FALSE;

			if ($_POST['email']!=$useremail) {

				$errormsg[1] = '<span class="form-error" icon="warning">'.__e('You have to enter a valid email adress!').'</span>';

			} else {

				$errormsg[1] = '<span class="form-error" icon="warning">'.__e('You have to enter an email adress!').'</span>';

			}

		}

                if(empty($postcontent['phone'])) {

			$validate = FALSE;

			$errormsg[0] = '<span class="form-error" icon="warning">'.__e('You have to enter phone number').'</span>';

		}



		/*if(empty($postcontent['subject'])) {

			$validate = FALSE;

			$errormsg[2] = '<span class="form-error" icon="warning">'.__e('You have to enter a subject').'</span>';

		}*/

		/*if(empty($postcontent['message'])) {

			$validate = FALSE;

			$errormsg[3] = '<span class="form-error" icon="warning">'.__e('You have to enter a message').'</span>';

		}*/


//print_r ($_POST);
//print_r ($errormsg);
//echo $validate;

		if($validate) {

				$recipient = get_option('scf_send_to_email');

				$name= $postcontent['firstname'];

				$email = $postcontent['email'];

				$subject = $postcontent['subject'];

				$msg = stripslashes($postcontent['questions']);

				$headers = "MIME-Version: 1.0\r\n";

				$headers .= "From: ".$name." <".$email.">\r\n";

				$headers .= "Content-Type: text/plain; charset=\"".get_settings('blog_charset')."\"\r\n";

				$fullmsg = __e('Sender').': '.$name." <".$email.">\n";

				$fullmsg .= __e('Subject').': '.$subject."\n";

				$fullmsg .= wordwrap($msg, 80, "\n")."\n\n";

				$fullmsg .= "IP: ".$_SERVER['REMOTE_ADDR'];



				//Remove any attempt to modify headers etc

				$fullmsg = message_remove_malicious($fullmsg);

				

				$mail_success = wp_mail($recipient, get_option('scf_mail_subject'), $fullmsg, $headers);

				//echo get_option('scf_mail_subject');
				echo "recipient". $recipient. " mail success :".$mail_success." <br />"; 
				
				exit();

				if($mail_success){

					$output .= '<p icon="accept">'.__e('Your message was sent successfully!').'</p>';

					unset($_POST['email']);

					unset($_POST['sender_name']);

					unset($_POST['message']);

					unset($_POST['subject']);

					//header('Location: '.$page_url.'?msg='.urlencode('Your message was sent successfully!'));

				} else {

					$output .= '<p icon="accept">'.__e('There was a problem sending your message, please try again!').'</p>';

				}



	}

	}?>



            <!-- Panel -->
<div id="toppanel">
  <div id="panel">
    <div class="content clearfix">
    <form class="clearfix" action="#" method="post">
      <div class="left">
        <h1>Corporate Offices</h1>
        <h2>Enterprise Engineering, Inc.</h2>
        <p class="grey"> 115 Broadway,  Suite# 1705<br />
          New York, NY 10006<br />
          Phone: 212.344.2000<br />
          Fax: 212.344.2700 </p>
      </div>
      <div class="mid">
      <!-- Login Form -->
      
        <h1>Contact Us</h1>
        <label class="grey" for="email">First Name:</label>
        <input class="field" type="text" name="firstname" id="firstname" value="" size="23" />
        <label class="grey" for="email">Email:</label>
        <input class="field" type="text" name="email" id="email" size="23" />
		<label class="grey" for="email">Phone:</label>
        <input class="field" type="text" name="phone" id="phone" size="23" />
        
        <p>*required fields</p>
        </div>
        <div class="right">
        <label class="grey" for="signup">Please choose from one of the subject matter listed below.</label>
       <select name="subject" class="select_field">
                                    <option value="Photography">Photography</option>
                                    <option value="Web Video Production">Web Video Production</option>
                                    <option value="Equipment Rental">Equipment Rental</option>
                                    <option value="Space Rental">Space Rental</option>
                                    <option value="Database Upgrade Services">Production Crew</option>

                                </select>
        <label class="grey" for="signup">Questions/Comments*</label>
        <textarea name="questions" rows="5" cols="44"  class="textarea_field"></textarea>
        <input type="submit" name="submit" value="Submit &raquo;" class="bt_contact" />
     
    </div>
     </form>
  </div>
</div>
<!-- /login -->
</div>
<!--panel -->

			 <!-- The tab on top -->

            <div class="tab">

                <ul class="login">

                    <li class="left">&nbsp;</li>

                   <li><a href="http://www.anarstudios.com" rel="nofollow" rel="nofollow" rel="nofollow" rel="nofollow"><img src="<?php	 	 bloginfo('template_url'); ?>/images/home_icon.png" alt="anar-studios" border="0" /></a> a full-fledged production house in jersey city, an epitome of creativity with enterprenuership at its best.</li>

    			<li class="sep"></li><li class="sep"></li><li class="sep"></li><li class="sep"></li><li class="sep"></li><li class="sep"></li><li class="sep"></li><li class="sep"></li><li class="sep"></li><li >call us: <strong>212-904-1240</strong></li>

                    <li id="toggle">  <a id="open" class="open" href="#"><img src="<?php	 	 bloginfo('template_url'); ?>/images/contact.gif" alt="open" border="0" style="vertical-align:middle" /> Contact Us</a> <a id="close" style="display: none;" class="close" href="#"><img src="<?php	 	 bloginfo('template_url'); ?>/images/close_icon.png" alt="close" border="0" style="vertical-align:middle" /> Close Panel</a> </li>

                    <li class="right">&nbsp;</li>

                </ul>

            </div>

            <!-- / top -->



<div style="height:<?php	 	 echo $body_height; ?>; background:url(<?php	 	 bloginfo('template_url'); ?>/images/<?php	 	 echo $bg_img; ?>) repeat-x bottom; padding-top:10px; position:relative">

  <div class="container_24">

    <div class="grid_8"><a href="http://www.anarstudios.com" rel="nofollow" rel="nofollow" rel="nofollow" rel="nofollow"><img src="<?php	 	 bloginfo('template_url'); ?>/images/anar-studios-logo.png" alt="anar-studios" border="0" /></a></div>

    <div class="grid_11" id="access">

      <?php	 	 wp_nav_menu(array('container_class' => 'menu-header', 'menu' => 'Parent-menu', 'theme_location' => 'Top')); ?>

    </div>

    <div class="clear"></div>

   

    <br />

    <?php	 	 if (is_home ()) { ?>

    <div style="background:#fff; padding:5px; border:1px solid #ccc; width:950px">

      <?php	 	 aio_slideshow(); ?>

    </div>

	<div><img src="<?php	 	 bloginfo('template_url'); ?>/images/slide_shadow.png" alt="anar-studios" border="0" /></div>

    <?php	 	 } else { ?>

    <div style="margin:0 auto; width:960px;">

      <?php	 	



                //$page		=	get_page_by_title('Projects');



                //$postslist 	= get_pages('number=4&hierarchical=0&parent='.$page->ID);







                $category_id = get_cat_ID('portfolio');







                $postslist = query_posts(array('cat' => $category_id, 'post_type' => 'post', 'showposts' => 4, 'orderby' => rand));







                foreach ($postslist as $post) :







                    $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), thumbnail);



?>

      <div  id ="latest_posts">

        <div> <a href="<?php	 	 echo get_permalink($post->ID); ?>"> <img src="<?php	 	 echo $thumbnail[0]; ?>"  /> </a> </div>

      </div>

      <?php	 	 endforeach; ?>

      <div class="clear">&nbsp;</div>

    </div>

    <?php	 	



                }



                    ?>

  </div>

</div>

<div class="clear"></div>

<?php	 	 if (is_home()) {



 ?>

<div id="latest_buzz">

  <div style="background:url(<?php	 	 bloginfo('template_url'); ?>/images/big_anar_bg.png) no-repeat; height:270px; width:1200px; margin:0 auto">

    <div style="margin:0 auto; width:960px; padding:15px">

      <div style="color:#FFFFFF;  padding-bottom:20px; font-size: 30px;	font-family:'Caecilialtstd-bold', 'arial narrow';  font-weight:bold; margin-top:6px">Recent Projects</div>

      <?php	 	



                        //$page		=	get_page_by_title('Projects');



                        //$postslist 	= get_pages('number=4&hierarchical=0&parent='.$page->ID);







                        $category_id = get_cat_ID('portfolio');







                        $postslist = query_posts(array('cat' => $category_id, 'post_type' => 'post', 'showposts' => 4, 'orderby' => rand));







                        foreach ($postslist as $post) :







                            $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), thumbnail);



?>

      <div  id ="latest_posts">

        <div> <a href="<?php	 	 echo get_permalink($post->ID); ?>"> <img src="<?php	 	 echo $thumbnail[0]; ?>"  /> </a> </div>

      </div>

      <?php	 	 endforeach; ?>

      <div class="clear">&nbsp;</div>

      <div style="text-align:right"><br />

        <?php	 	



                            wp_reset_query();







                            $buzz_page = get_page_by_title('Projects');



                ?>

        <a href="<?php	 	 echo get_permalink($buzz_page->ID); ?> " style="background:#660000; color:#FFFFFF; padding:5px 10px; text-decoration:none">View All Projects</a></div>

    </div>

  </div>

</div>

<?php	 	 } ?>

<!-- #header -->

<div id="main">