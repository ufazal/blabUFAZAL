<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>="<?php language_attributes(); ?>">
      <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.validate.min.js"></script>
		<script type="text/javascript">	var RecaptchaOptions = {theme : 'white'}; </script>
		<script type="text/javascript">
			var $j = jQuery.noConflict();

			$j(document).ready(function() {
                $j('#mycarousel').jcarousel();
                $j('#homecarousel').jcarousel();
                // Expand Panel
                $j("#open").click(function(){
                    $j("div#panel").slideDown("slow");
                });
                // Collapse Panel
                $j("#close").click(function(){
                    $j("div#panel").slideUp("slow");
                });
                // Switch buttons from "Log In | Register" to "Close Panel" on click
                $j("#toggle a").click(function () {
                    $j("#toggle a").toggle();
                });
            });

		</script>


        <script type="text/javascript">
			/*
            $j(document).ready(function() {
                $j("#email").blur(function() {
                   // alert ($j("#email").val());
                    var email_data      = $j("#email").val();
                    var email           = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    if (email_data.match(email)) {
                        $j(".email_form-error").hide();
                    } else {
                        $j(".email_form-error").show();
                        //doError(this,'not a valid email');
                    };
                    //$(this).validate.init(this);
                });
             $j("#firstname").blur(function() {
                   var data      = $j("#firstname").val();
                    if (data!='') {
                        $j(".firstname_form-error").hide();
                    } else {
                        $j(".firstname_form-error").show();
                        //doError(this,'not a valid email');
                    };
                    //$(this).validate.init(this);
                });
                $j('#mycarousel').jcarousel();
                $j('#homecarousel').jcarousel();
                // Expand Panel
                $j("#open").click(function(){
                    $j("div#panel").slideDown("slow");
                });

                // Collapse Panel
                $j("#close").click(function(){
                    $j("div#panel").slideUp("slow");
                });
                // Switch buttons from "Log In | Register" to "Close Panel" on click
                $j("#toggle a").click(function () {
                    $j("#toggle a").toggle();
                });
            });
			*/
        </script>
        <title>
            <?php
            /** Print the <title> tag based on what is being viewed. */
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
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/960_24_col.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/validationEngine.jquery.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/skins/tango/skin.css" />
		<link rel="Shortcut Icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />
        <!-- Favi -->
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/slide.css" media="screen" />
        <?php
            /* We add some JavaScript to pages with the comment form
             * to support sites with threaded comments (when in use).
             */
            if (is_singular() && get_option('thread_comments'))
                wp_enqueue_script('comment-reply');
                /* Always have wp_head() just before the closing </head>
                * tag of your theme, or you will break many plugins, which
                * generally use this hook to add elements to head such
             * as styles, scripts, and meta tags.
             */
            wp_head();
             $the_title = get_the_title($post->ID);
            if (is_home ()) {
                $body_height = '580px';
                $bg_img = 'home_slide_bg.jpg';
            }else if (cat_match('portfolio') || $the_title=='Video Reel'){
                $body_height = '110px';
                $bg_img = 'inner-head-bg.png';
            }
            else {
                $body_height = '270px';
                $bg_img = 'inner-head-bg.png';
            }
        ?>
        </head>
        <body <?php body_class(); ?>>
        <?php
            /**
             * contact-form post submit
             *
             */
        ?>
		<?php require_once(TEMPLATEPATH . '/scripts/phpmailer/class.phpmailer.php'); ?>
        <?php
			/*reCaptcha Server Code*/
			require_once('recaptchalib.php');
			$privatekey = "6LecScYSAAAAADKWBzfM2BwxITO6-n6eLKuR2L3n";
			$resp_recaptcha = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);

              $output = '';
            if (isset($_POST['submit'])) {

				if (!$resp_recaptcha->is_valid)
				{
					unset($_POST['submit']);
					// What happens when the CAPTCHA was entered incorrectly
					//echo "Sorry!! You don't got it!";
					//die ("The reCAPTCHA wasn't entered correctly. Go back and try it again.(reCAPTCHA said: " . $resp_recaptcha->error . ")");
				}
				else
				{
				// Your code here to handle a successful verification
				//echo "You got it!";

                foreach ($_POST as $vblname => $value) {
                    $postcontent[$vblname] = mysql_real_escape_string($value);
                }
                $validate = TRUE;
                preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/', $_POST['email'], $useremail);
                if ( empty($postcontent['firstname']) || empty($useremail) || empty($postcontent['phone']) || empty($postcontent['companyname']) || empty($postcontent['questions']) ) {
                    $validate = FALSE;
                }
                if ($validate) {
                    $recipient = get_option('scf_send_to_email');
                    $name = $postcontent['firstname'];
                    $email = $postcontent['email'];
                    $subject = $postcontent['subject'];

                    $phone = $postcontent['phone'];
                    $companyname = $postcontent['companyname'];
                    $websiteurl = $postcontent['websiteurl'];

					$msg = nl2br(str_replace('\\r\\n', "\r\n", $postcontent['questions']));

                    $fullmsg = __e('Name') . " : " . $name."<br />";
					$fullmsg .= __e('Email') . " : " . $email. "<br />";

					$fullmsg .= __e('Phone') . " : " . $phone. "<br />";
					$fullmsg .= __e('Company Name') . " : " . $companyname. "<br />";
					$fullmsg .= __e('Website URL') . " : " . $websiteurl. "<br />";


					//$contact_referrer = unserialize(base64_decode($_COOKIE['contact_referrer']));
					$iplocation_api_key 	= '2359bc7ea1cdd951b519bd370849c1005f1494ccce6c0d401294227c83385be4';
					$iplocation 			= @simplexml_load_file('http://api.ipinfodb.com/v2/ip_query.php?key='.$iplocation_api_key.'&ip='.$_SERVER['REMOTE_ADDR'].'&timezone=false');
					//$iplocation = @simplexml_load_file('http://ipinfodb.com/ip_query.php?ip='.$_SERVER['REMOTE_ADDR'].'&timezone=false');

					//print_r($_COOKIE['ContactReferrer']);
					//print_r($_SERVER);
					//print_r($_SESSION['HTTP_REFERER']);

					//print_r($_SERVER['HTTP_REFERER']);
					//print_r($_SERVER['HTTP_USER_AGENT']);
					if (isset( $_SESSION['ContactReferer'] ))
					{

						$referer = $_SESSION['ContactReferer'];
						$sep = (ereg('(\?q=|\?qt=|\?p=)', $referer)) ? '\?' : '\&';

						if (!empty($referer))
						{
							if (ereg('www\.google', $referer))
							{
								// Google
								preg_match("#{$sep}q=(.*?)\&#si", $referer, $keys);
								//$search_engine = 'Google';
								$fullmsg .= __e('Search Engine'). " : Google <br />";
								$fullmsg .= __e('Keyword'). " : ". (!is_array($keys) ? $keys : $keys[1])." <br />";
							}
							else if (ereg('(yahoo\.com|search\.yahoo)', $referer))
							{
								// Yahoo
								preg_match("#{$sep}p=(.*?)\&#si", $referer, $keys);
								//$this->search_engine = 'Yahoo';
								$fullmsg .= __e('Search Engine'). " : Yahoo <br />";
								$fullmsg .= __e('Keyword'). " : ". (!is_array($keys) ? $keys : $keys[1])." <br />";
							}
							else if (ereg('search\.msn', $referer))
							{
								// MSN
								preg_match("#{$sep}q=(.*?)\&#si", $referer, $keys);
								//$this->search_engine = 'MSN';
								$fullmsg .= __e('Search Engine'). " : MSN <br />";
								$fullmsg .= __e('Keyword'). " : ". (!is_array($keys) ? $keys : $keys[1])." <br />";
							}
							else if (ereg('www\.alltheweb', $referer))
							{
								// AllTheWeb
								preg_match("#{$sep}q=(.*?)\&#si", $referer, $keys);
								//$this->search_engine = 'AllTheWeb';
								$fullmsg .= __e('Search Engine'). " : All The Web <br />";
								$fullmsg .= __e('Keyword'). " : ". (!is_array($keys) ? $keys : $keys[1])." <br />";
							}
							else if (ereg('(looksmart\.com|search\.looksmart)', $referer))
							{
								// Looksmart
								preg_match("#{$sep}qt=(.*?)\&#si", $referer, $keys);
								//$this->search_engine = 'Looksmart';
								$fullmsg .= __e('Search Engine'). " : Looksmart <br />";
								$fullmsg .= __e('Keyword'). " : ". (!is_array($keys) ? $keys : $keys[1])." <br />";
							}
							else if (ereg('(askjeeves\.com|ask\.com)', $referer))
							{
								// AskJeeves
								preg_match("#{$sep}q=(.*?)\&#si", $referer, $keys);
								//$this->search_engine = 'AskJeeves';
								$fullmsg .= __e('Search Engine'). " : AskJeeves <br />";
								$fullmsg .= __e('Keyword'). " : ". (!is_array($keys) ? $keys : $keys[1])." <br />";
							}
							else if (ereg('(bing\.com|search\.bing)', $referer))
							{
								// Bing
								preg_match("#{$sep}q=(.*?)\&#si", $referer, $keys);
								//$this->search_engine = 'Bing';
								$fullmsg .= __e('Search Engine'). " : Bing <br />";
								$fullmsg .= __e('Keyword'). " : ". (!is_array($keys) ? $keys : $keys[1])." <br />";
							}
							else
							{
								$fullmsg .= __e('Search Engine'). " : Unknown Search Engine<br />";
								$fullmsg .= __e('Keyword'). " : No Search keyword <br />";
							}
						}

						$fullmsg .= __e('Contact Referer'). " : " . $_SESSION['ContactReferer'] . "<br />";
						//unset( $_SESSION['ContactReferer']);
					}
					else
					{
						$fullmsg .= __e('Contact Referer'). " : no referer<br />";
					}
					//session_destroy();

					//$fullmsg .= __e('ContactReferrer'). " : " . unserialize(base64_decode( $_COOKIE['ContactReferrer'] )) . "<br />";
					$fullmsg .= __e('HTTP REFERER'). " : " . $_SERVER['HTTP_REFERER']. "<br />";
					$fullmsg .= __e('HTTP USER AGENT'). " : " . $_SERVER['HTTP_USER_AGENT']. "<br />";
					/*
					if ($contact_referrer['search_engine']!='')
					{
						//$str=$str."<b>Referral : </b>".$contact_referrer['search_engine']."<br/>";
						$fullmsg .= __e('Referral') . " : " . $contact_referrer['search_engine'] . "<br />";
					}
					else
					{
						//$str=$str."<b>Referral : </b>"."Direct "."<br/>";
						$fullmsg .= __e('Referral') . " : " . "Direct " . "<br />";
					}
					//$str=$str."<b>Search Keywords : </b>".$contact_referrer['keywords']."<br/>";
					$fullmsg .= __e('Search Keywords') . " : " . $contact_referrer['keywords'] . "<br />";

					//$str=$str."<b>Last Visited : </b>".$contact_referrer['last_visited']."<br/>";
					$fullmsg .= __e('Last Visited') . " : " . $contact_referrer['last_visited'] . "<br />";

					//$str=$str."<b>Visited : </b>".@implode(" <br/>", $contact_referrer['visited'])."<br/>";
					$fullmsg .= __e('Visited') . " : " . @implode(" <br/>", $contact_referrer['visited']) . "<br />";

					//$str=$str."<b>Time on Site : </b>".convertReadable($_COOKIE['mystaytime'])."<br/>";
					$fullmsg .= __e('Time on Site') . " : " . convertReadable($_COOKIE['mystaytime']) . "<br />";
					*/

					//$str=$str."<b>IP location : </b>".$iplocation->City.', '.$iplocation->RegionName.', ('.$iplocation->CountryName.")<br/>";
					$fullmsg .= __e('IP location') . " : City->" . $iplocation->City. " , RegionName->" . $iplocation->RegionName . " , CountryName->" . $iplocation->CountryName . "<br />";
					$fullmsg .= __e('Sender IP'). " : " . $_SERVER['REMOTE_ADDR']. "<br />";
                    $fullmsg .= __e('Subject') . " : " . $subject . "<br />";
                    $fullmsg .= __e('Message') . " :<hr />".$msg . "<br />";

                    //Remove any attempt to modify headers etc
                    $fullmsg = message_remove_malicious($fullmsg);

					/*
                    $headers = "MIME-Version: 1.0\r\n";
                    $headers .= "From: " . $name . " <" . $email . ">\r\n";
                    $headers .= "Content-type: text/html; charset=\"" . get_settings('blog_charset') . "\"\r\n";
					$mail_success = wp_mail($recipient, 'AnarStudios :: Contact request', $fullmsg, $headers);
                    //$mail_success = wp_mail($recipient, 'nurulamin@gmail.com', $fullmsg, $headers);
                    //echo get_option('scf_mail_subject');
                    if ($mail_success) {
						$output = '<div class="flash" id="flash">Your message was sent successfully !</div>';
                    } else {
                        $output = '<div class="flash-error" id="flash">There was a problem sending your message, please try again !</div>';
                    }
					*/
					// Send Mail by PHPMailer
					$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
					$mail->IsSMTP(); // telling the class to use SMTP
					try {
						$mail->Host       = "mail.anarstudios.com"; // SMTP server
						//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
						$mail->SMTPAuth   = true;                  // enable SMTP authentication
						$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
						$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
						$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
						$mail->Username   = "web_submissions@anarstudios.com";  // GMAIL username
						$mail->Password   = "AnarSt159";            // GMAIL password

						//$mail->AddReplyTo($email, $name);
						$mail->AddAddress('contact_form@anarstudios.com', 'AnarStudios Contact');
						//$mail->AddAddress('tanzim@bluelinerbangla.com', 'Tahmid Tanzim');
						$mail->SetFrom('web_submissions@anarstudios.com', 'AnarStudios WebSubmission');

						$mail->Subject = 'AnarStudios.com Contact Submission';
						$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
						$mail->MsgHTML($fullmsg);
						$mail->Send();
						//echo "Message Sent OK</p>\n";
						//exit;
						$output = '<div class="flash" id="flash">Your message was sent successfully !</div>';
					} catch (phpmailerException $e) {
						//echo $e->errorMessage(); //Pretty error messages from PHPMailer
						$output = '<div class="flash-error" id="flash">There was a problem sending your message, please try again !</div>';
					} catch (Exception $e) {
						//echo $e->getMessage(); //Boring error messages from anything else!
						$output = '<div class="flash-error" id="flash">There was a problem sending your message, please try again !</div>';
					}
                } else {
					$output = '<div class="flash-error" id="flash">There was a problem sending your message, please try again !</div>';
				}
            }
            } ?>

            <!-- Panel -->
			<?php if( isset($_POST['submit']) ) : ?>
			<script type="text/javascript" >
				$j(document).ready(function($){
					setTimeout(function(){
						$("#flash").fadeOut("slow", function () {
							//$(".flash").remove();
						});
					}, 5000);
				});
			</script>
			<?php echo $output; ?>
			<?php endif; ?>

            <!-- contact  form  -->
            <div id="toppanel">
                <div id="panel">
                    <div class="content clearfix">

                            <div class="left">
                                <ul style="margin-left:0px; list-style:none">
                                    <li style="float:left;">
                                        <p> <h2>Contact Address</h2>
                                            150 Bay Street, Suite 718<br />
                                            Jersey City, NJ-07302
                                        </p>
                                        <p> <h2>Freight and Delivery</h2>
                                            1st Street,<br />
                                            Jersey City, NJ-07302
                                        </p>
                                       <p>
                                           <h2>Corporate Headquarters:</h2>
                                                55 Broad Street, 17th Floor<br />
                                                New York, NY 10004<br />
                                        </p>

                                    </li>
                                </ul>
                            </div>
                        <form class="clearfix" id="contactForm" action="" method="post">
							<div class="mid">
                                <!-- Login Form -->
                                <h1>Contact Us</h1>
                                <label class="grey" for="firstname">Name:*</label>
                                <input class="field" type="text" name="firstname" id="firstname" value="" size="23" />

                                <label class="grey" for="email">Email:*</label>
                                <input class="field" type="text" class="validated" name="email" id="email" size="23" />

                                <label class="grey" for="email">Phone:*</label>
                                <input class="field" type="text" name="phone" id="phone" size="23" />

                                <label class="grey" for="email">Company Name:*</label>
                                <input class="field" type="text" name="companyname" id="companyname" size="23" />

                                <label class="grey" for="email">Website URL:</label>
                                <input class="field" type="text" name="websiteurl" id="websiteurl" size="23" />

                                <!--<label class="grey" for="signup">Please choose from one of the subject matter listed below.</label>

                                <select name="subject" class="select_field"  >
                                    <option value="Photography">Photography</option>
                                    <option value="Web Video Production">Web Video Production</option>
                                    <option value="Equipment Rental">Equipment Rental</option>
                                    <option value="Space Rental">Space Rental</option>
                                    <option value="Database Upgrade Services">Production Crew</option>
                                </select>-->

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
								<label class="grey" for="signup">Questions / Comments*</label>
								<textarea name="questions" id="questions" rows="4" cols="44"  class="textarea_field"></textarea>
                                <!--<label class="grey" for="math" style="padding-right: 6px;">
									<span style="font-size: 18px; font-weight: bold;">7 + 4 = </span><input id="math" name="math" title="Please enter the correct result!" />
								</label>-->

								<div style="float:right; border: 1px solid #fff; margin-right: 5px; margin-top: 4px; padding:4px; border-radius:5px;">
								<?php
									/*reCaptcha Client Code*/
									require_once('recaptchalib.php');
									$publickey = "6LecScYSAAAAAAX1lOm3qcZaTstElTM8Sx78Ip8G"; // you got this from the signup page
									echo recaptcha_get_html($publickey);
								?>
								</div>

                                 <input type="submit" name="submit" value="Submit &raquo;" class="bt_contact" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- contact  form  -->
			<script type="text/javascript">
				var RecaptchaOptions = {
				theme : 'clean'
				};
				$j.validator.methods.equal = function(value, element, param) {
					return value == param;
				};
				// validate signup form on keyup and submit
				$j("#contactForm").validate({
					rules: {
						firstname: {
							required: true,
							minlength: 3
						},
						email: {
							required: true,
							email: true
						},
						phone: {
							required: true,
							minlength: 8
						},
						companyname: {
							required: true
						},
						questions: {
							required: true,
							minlength: 20
						},
						math: {
							equal: 11
						}/*,
						agree: "required" */
					},
					messages: {
						firstname: {
							required: "Please enter your Name",
							minlength: "Name must be at least 3 characters"
						},
						email: "Please enter a valid email address",
						phone: {
							required: "Please provide a Phone",
							minlength: "Phone must be at least 8 characters"
						},
						companyname: {
							required: "Please enter your Company Name"
						},
						questions: {
							required: "Please provide a Questions/Comments",
							minlength: "Questions/Comments must be at least 20 characters"
						}
						,
						math: "Please enter the correct result!"/*,
						agree: "Please accept our policy" */
					}
				});
			</script>
            <!--panel -->
            <!-- The contact tab on top -->
            <div class="tab">
                <ul class="login">
                    <li class="left">&nbsp;</li>
                    <li style="width:660px"><a href="http://www.anarstudios.com" rel="nofollow" rel="nofollow" rel="nofollow" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/home_icon.png" alt="anar-studios" border="0" /></a> <span style="color:#ba0131">anar = seeds of potential, brought to fruition; the art of storytelling; creative content production house.</span></li>
                    <li class="sep"></li><li class="sep"></li><li style="color:#ba0131">call us: <strong>212-904-1240</strong></li>
                    <li id="toggle">  <a id="open" class="open" href="#"><img src="<?php bloginfo('template_url'); ?>/images/contact.gif" alt="open" border="0" style="vertical-align:middle" /> Contact Us</a> <a id="close" style="display: none;" class="close" href="#"><img src="<?php bloginfo('template_url'); ?>/images/close_icon.png" alt="close" border="0" style="vertical-align:middle" /> Close Panel</a> </li>
                    <li class="right">&nbsp;</li>
                </ul>
            </div>
            <!-- / top -->
            <div style="height:<?php echo $body_height; ?>; background:url(<?php bloginfo('template_url'); ?>/images/<?php echo $bg_img; ?>) repeat-x top; padding-top:10px; position:relative">
                <div class="container_24">
                    <div class="grid_8"><a href="http://www.anarstudios.com" rel="nofollow" rel="nofollow" rel="nofollow" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/images/anar-studios-logo.png" alt="anar-studios" border="0" /></a></div>
                    <div class="grid_12" id="access">
                        <?php wp_nav_menu(array('container_class' => 'menu-header', 'menu' => 'Parent-menu', 'theme_location' => 'Top')); ?>
                    </div>
                <div class="clear"></div>
                <br />

                <?php //$category = get_the_category(); ?>
                <?php if (is_home ()) {
					//print_r('c');
					//include('visitorinfo.php');
					//$visitorinfo = new visitorinfo();
					//$visitorinfo->get_keys();

					//print_r($visitorinfo->search_engine);
				    //die('Mu ha ha ha');
					  //$_POST['ContactReferer'] = $ContactReferer;
					  //print_r($_POST['ContactReferer']);
					  //die('Mu ha ha ha');
					  session_start();
					  $ContactReferer = $_SERVER['HTTP_REFERER'];
					  //unset($_SESSION['ContactReferer']);
					  /*if($ContactReferer != "http://www.anarstudios.com")
					  {
						  unset($_SESSION['ContactReferer']);
						  $_SESSION['ContactReferer'] = $ContactReferer;
						  //unset( $_SESSION['ContactReferer']);
						  //$_SESSION['ContactReferer'] = '';
					  }
					  else
					  {
						  $_SESSION['ContactReferer'] = '';
					  }*/
					  	if($_SESSION['ContactReferer'] == '' or !(ereg('www\.anarstudios.com', $ContactReferer)))
					  {
						  //unset($_SESSION['ContactReferer']);
						  $_SESSION['ContactReferer'] = $ContactReferer;
						  //unset( $_SESSION['ContactReferer']);
						  //$_SESSION['ContactReferer'] = '';
					  }

					  //print_r($_SESSION['ContactReferer']);


					  //setcookie('ContactReferer' , $_SERVER['HTTP_REFERER'] );
					  //print_r($_COOKIE['ContactReferrer']);
					  //print_r($ContactReferrer);

					?>
                        <div style="background:#fff; padding:5px; border:1px solid #ccc; width:950px">
                            <!--<?php //aio_slideshow();     ?>-->
                            <?php include (ABSPATH . '/wp-content/plugins/featured-content-gallery/gallery.php'); ?>
                    </div>
                    <div><img src="<?php bloginfo('template_url'); ?>/images/slide_shadow.png" alt="anar-studios" border="0" /></div>
                <?php }else if (cat_match('portfolio') || $the_title=='Video Reel'){}
                else {
               ?>
                        <div class="carousel_slider" style="margin:0 auto; width:960px; margin-top:-24px">
                            <ul id="mycarousel" class="jcarousel-skin-tango">
                                <?php


                                $category_id = get_cat_ID('portfolio');
                                $postslist = query_posts(array('cat' => $category_id, 'post_type' => 'post', 'showposts' => 10, 'orderby' => rand));
                                foreach ($postslist as $post) :
                                    $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), thumbnail);
                                ?>
                                    <li> <a href="<?php echo get_permalink($post->ID); ?>" rel="nofollow" rel="nofollow" rel="nofollow" rel="nofollow"> <img src="<?php echo $thumbnail[0]; ?>"  /> </a> </li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="clear">&nbsp;</div>
                        </div>
                <?php
                        }
                ?>
                    </div>
                </div>
                <div class="clear"></div>
                <?php wp_reset_query(); ?>
                <?php if (is_home ()) {
					//print_r('b');
					//$ContactReferer = $_SERVER['HTTP_REFERER'];
					//session_start();
					//$_SESSION['ContactReferer'] = $ContactReferer;

					//$ContactReferer = $_SERVER['HTTP_REFERER'];
					//setcookie('ContactReferer' , $ContactReferer , time() + (86400 * 7)); // 86400 = 1 day

					?>
                            <div id="latest_buzz">
                                <div style="background:url(<?php bloginfo('template_url'); ?>/images/big_anar_bg.png) no-repeat; height:270px; width:1200px; margin:0 auto">
                                    <div style="margin:0 auto; width:960px; padding:15px">
                                        <div style="color:#FFFFFF;  padding-bottom:20px; font-size: 30px;	font-family:'Caecilialtstd-bold', 'arial narrow';  font-weight:bold; margin-top:6px">Recent Projects</div>
                                        <?php
                                                $category_id = get_cat_ID('portfolio');
                                                $postslist = query_posts(array('cat' => $category_id, 'post_type' => 'post', 'showposts' => 10, 'orderby' => rand));
                                        ?>
                            <ul id="homecarousel" class="jcarousel-skin-tango">
                                <?php
                                    foreach ($postslist as $post) :
                                        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), thumbnail);
                                ?>
                                <li> <a href="<?php echo get_permalink($post->ID); ?>" rel="nofollow" rel="nofollow" rel="nofollow" rel="nofollow"> <img src="<?php echo $thumbnail[0]; ?>"  /> </a> </li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="clear">&nbsp;</div>
                            <?php /*?><div style="text-align:right"><br />
								<?php
                                wp_reset_query();
                                $buzz_page = get_page_by_title('Projects');
								?>
                                <a href="<?php echo get_permalink($buzz_page->ID); ?> " rel="nofollow" rel="nofollow" rel="nofollow" rel="nofollow" style="background:#660000; color:#FFFFFF; padding:5px 10px; text-decoration:none">View All Projects</a></div><?php */?>
                        </div>
                    </div>
                </div>
        <?php } ?>

            <!-- #header -->
            <div id="main">
                <?php if (is_home ()) {
					//$ContactReferer = $_SERVER['HTTP_REFERER'];
					  //session_start();
					  //$_SESSION['ContactReferer'] = $ContactReferer;

					//$ContactReferer = $_SERVER['HTTP_REFERER'];
					//setcookie('ContactReferer' , $ContactReferer , time() + (86400 * 7)); // 86400 = 1 day

                } else{ ?>
                                <div class="breadcrumbs">
                <?php
                            wp_reset_query();
                            if (function_exists('dimox_breadcrumbs'))
                                dimox_breadcrumbs();
                            /* if (function_exists('bcn_display') && !is_home()) {
                              bcn_display();
                              } */
                ?>
            </div>
             <?php } ?>