<?php  ?><?php
/*
Template Name: Authorize-payment 
*/
get_header(); 

	$show_aim='true';
	$display='show_form';
require_once 'inc/MCAPI.class.php';
require_once 'inc/config.inc.php'; //contains apikey

$api = new MCAPI($apikey);
	

if(isset($_REQUEST['action']) && ($_REQUEST['action']=="aim_again")){
	$show_aim='true';
}
if(isset($_REQUEST['action']) && ($_REQUEST['action']=="aim")){
		require_once('authorizenet.class.php');

		$a = new authorizenet_class;

		// You login using your login, login and tran_key, or login and password.  It
		// varies depending on how your account is setup.
		// I believe the currently reccomended method is to use a tran_key and not
		// your account password.  See the AIM documentation for additional information.
		//****************** Aktar
		//$a->add_field('x_login', '6zz6m5N4Et');
		//$a->add_field('x_tran_key', '9V9wUv6Yd92t27t5');

		//// BluelinerNY
		$a->add_field('x_login', 'a78rou');
		$a->add_field('x_tran_key', '37v8jgRE6V3rU7Em');

		$amount=199;
		date_default_timezone_set('UTC');
		$date_last= mktime(0, 0, 0, 5, 30, 2011);
		$date_current=mktime(0, 0, 0, date("m")  , date("d"), date("Y"));

		$discount_code=trim($_REQUEST['pcode']);

			if($date_current<=$date_last){		
				$amount=99;
				if($discount_code=="7pillars-academy"){	
					$amount=$amount-25;
				}		
			}else{
				if($discount_code=="blueliner-ny-11"){	
						$amount=99;
				}
				if($discount_code=="7p-roi11"){	
						$amount=149;
				}
				if($discount_code=="7pillars-academy"){	
						$amount=174;
				}	
			}
			if($discount_code=="7pillarsdigital"){	
				$amount=0;	
			}
			if($discount_code=="roiworkshop-ar"){	
				$amount=49;	
			}

		//$a->add_field('x_password', 'CHANGE THIS TO YOUR PASSWORD');

		$a->add_field('x_version', '3.1');
		$a->add_field('x_type', 'AUTH_CAPTURE');
		//$a->add_field('x_type', 'AUTH_ONLY');
		$a->add_field('x_test_request', 'FALSE');    // Just a test transaction TRUE
		$a->add_field('x_relay_response', 'FALSE');

		// You *MUST* specify '|' as the delim char due to the way I wrote the class.
		// I will change this in future versions should I have time.  But for now, just
		// make sure you include the following 3 lines of code when using this class.

		$a->add_field('x_delim_data', 'TRUE');
		$a->add_field('x_delim_char', '|');     
		$a->add_field('x_encap_char', '');


		// Setup fields for customer information.  This would typically come from an
		// array of POST values froma secure HTTPS form.

		$a->add_field('x_first_name',$_REQUEST['fname']);
		$a->add_field('x_last_name', $_REQUEST['lname']);
		$a->add_field('x_address', $_REQUEST['address']);
		$a->add_field('x_city', $_REQUEST['city']);
		$a->add_field('x_state', $_REQUEST['state']);
		$a->add_field('x_zip', $_REQUEST['zip']);
		$a->add_field('x_country', 'US');
		$a->add_field('x_email', $_REQUEST['email']);
		//$a->add_field('x_phone', '555-555-5555');


		// Using credit card number '4007000000027' performs a successful test.  This
		// allows you to test the behavior of your script should the transaction be
		// successful.  If you want to test various failures, use '4222222222222' as
		// the credit card number and set the x_amount field to the value of the
		// Response Reason Code you want to test. 
		//
		// For example, if you are checking for an invalid expiration date on the
		// card, you would have a condition such as:
		// if ($a->response['Response Reason Code'] == 7) ... (do something)
		//
		// Now, in order to cause the gateway to induce that error, you would have to
		// set x_card_num = '4222222222222' and x_amount = '7.00'

		//  Setup fields for payment information
		$a->add_field('x_method', 'CC');
		$a->add_field('x_card_num', $_REQUEST['card_number']);   // test successful visa
		//$a->add_field('x_card_num', '370000000000002');   // test successful american express
		//$a->add_field('x_card_num', '6011000000000012');  // test successful discover
		//$a->add_field('x_card_num', '5424000000000015');  // test successful mastercard
		// $a->add_field('x_card_num', '4222222222222');    // test failure card number
		$a->add_field('x_amount', $amount);
		$a->add_field('x_exp_date', $_REQUEST['pmonth'].$_REQUEST['pyear']);    // march of 2008
		$a->add_field('x_card_code', $_REQUEST['cvv']);    // Card CAVV Security code

		$display='show_form';
		// Process the payment and output the results
				if($amount>0){
					switch ($a->process()) {
					   case 1:  // Successs
					      //echo "<b>Success:</b><br>";
					      $massage= $a->get_response_reason_text();
					      //echo "<br><br>Details of the transaction are shown below...<br><br>";
					     //$a->dump_response();
						 // For mail--------------			 
							$merge_vars = array('FNAME'=>$_REQUEST['fname'], 'LNAME'=>$_REQUEST['lname'],'Email'=>$_REQUEST['email'] );
							$retval = $api->listSubscribe( $listId, $_REQUEST['email'], $merge_vars );
								if ($api->errorCode){
									
								} else {
								   // echo "Subscribed - look for the confirmation email!\n";
								}
								
								$headers = array("From: Admin BluelinerNY.com <info@bluelinerny.com>","Content-Type: text/html");
								$h = implode("\r\n",$headers) . "\r\n";
								$message_val='<h3>New ROI Webinar Attendee:</h3> <br>First Name:'.$_REQUEST['fname'];
								$message_val=$message_val.'<br>Last Name:'.$_REQUEST['lname'];
								$message_val=$message_val.'<br>Email:'.$_REQUEST['email'];
								$message_val=$message_val.'<br>Payment Amount:'.$amount;
								wp_mail( "riyaad@bluelinerny.com", "ROI Webinar payment submit", $message_val ,$h); 
								//wp_mail( "aktar567@gmail.com", "ROI Webinar payment submit", $message_val ,$h); 
							
						 $display='show_form_no';
						// $a->dump_response();
						 ?>
						  <script type="text/javascript">
						<!--
							window.location = "http://www.bluelinerny.com/thankyou.php"
						//-->
						</script>
						 <?php			 
						 break;
					     
					   case 2:  // Declined
					      //echo "<b>Payment Declined:</b><br>";
					      $massage= $a->get_response_reason_text();
					      //echo "<br><br>Details of the transaction are shown below...<br><br>";
						  //$a->dump_response();
						  $display='show_form';
					      break;
					     
					   case 3:  // Error
					      //echo "<b>Error with Transaction:</b><br>";
					       $massage= $a->get_response_reason_text();
						   $display='show_form';
						   //$a->dump_response();
					      //echo "<br><br>Details of the transaction are shown below...<br><br>";
					      break;
					}
				}else{
							 
							$merge_vars = array('FNAME'=>$_REQUEST['fname'], 'LNAME'=>$_REQUEST['lname'],'Email'=>$_REQUEST['email'] );
							$retval = $api->listSubscribe( $listId, $_REQUEST['email'], $merge_vars );
								if ($api->errorCode){
									
								} else {
								   // echo "Subscribed - look for the confirmation email!\n";
								}
								
								$headers = array("From: ROI Webinar BluelinerNY.com <info@bluelinerny.com>","Content-Type: text/html");
								$h = implode("\r\n",$headers) . "\r\n";
								$message_val='<h3>New ROI Webinar Attendee:</h3> <br>First Name:'.$_REQUEST['fname'];
								$message_val=$message_val.'<br>Last Name:'.$_REQUEST['lname'];
								$message_val=$message_val.'<br>Email:'.$_REQUEST['email'];
								$message_val=$message_val.'<br>Payment Amount:'.$amount;
								wp_mail( "riyaad@bluelinerny.com", "ROI Webinar payment submit", $message_val ,$h); 
								//wp_mail( "aktar567@gmail.com", "ROI Webinar payment submit", $message_val ,$h); 
							
						 $display='show_form_no';
						// $a->dump_response();
						 ?>
						  <script type="text/javascript">
						<!--
							window.location = "http://www.bluelinerny.com/thankyou.php"
						//-->
						</script>
						 <?php			 
				
				}

				
				$show_aim='false';
	}
	
	
function state_selection() {
	echo '<select name="state">';
		$states = array(
			'Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'District of Columbia', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
		);
		foreach ($states as $state_name) {
			echo '<option value="'.$state_name.'"'. ($state_name ==$_REQUEST['state'] ? "Selected" : "").'>'.$state_name.'</option>';
		}
	echo '</select>';
}

?>

<!-- begin header big image -->
<?php include('inc_header_image.php'); ?>
<!-- end header big image -->
<!-- begin content_wrap -->
<div id="content_wrap"  class="clearfix">
  <!-- begin content -->
  <div id="content" class="clearfix">
    <!-- begin content_left -->
    <div id="content_left">
      <!-- beginleftnav -->
      <?php include('left_nav_itdev.php'); ?>
      <!-- endleft nav -->
      
            <!-- onepager callout -->
      <a href="https://www.bluelinerny.com/public/Blueliner_OnePager.pdf"><img src="https://www.bluelinerny.com/wp-content/themes/bluelinerny_cms/images/onesheet_callout.jpg" width="240" height="200" border="0" /></a>
      <!-- onepager callout -->
    </div>
    <!-- end content_left -->
    <!-- begin content_right -->
    <div id="content_right">
	<script language="javascript">
	var validated="no"
	function check_pform(){						
			var x=document.forms["form1"].fname.value;			
			if (x==null || x==""){
				alert("Please Enter First Name");			
				return false;
			}
			var x=document.forms["form1"].lname.value;			
			if (x==null || x==""){
				alert("Please Enter Last Name");			
				return false;
			}
			var x=document.forms["form1"].email.value;
			var atpos=x.indexOf("@");
			var dotpos=x.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
			  {
			  alert("Not a valid e-mail address");
			  return false;
			  }
			var x=document.forms["form1"].zip.value;			
			if (x==null || x==""){
				alert("Please Enter Zip Code");			
				return false;
			}
			var x=document.forms["form1"].card_number.value;			
			if (x==null || x==""){
				alert("Please Enter Card Number");			
				return false;
			}
			var x=document.forms["form1"].cvv.value;			
			if (x==null || x==""){
				alert("Please Enter CVV");			
				return false;
			}			
			if(validated=="yes"){				
				return true;
			}else{
				return show_confirmation();
			}
			
	}
	
	function show_confirmation(){		
		jQuery("#form_confirm #confirm_content").html(jQuery("#form1").html()).show().modal();		
		jQuery("#confirm_content table").find("tr:lt(3)").remove();
		jQuery("#confirm_content table").find("tr:gt(11)").remove();
		jQuery("#confirm_content table").attr("width","94%");
		with(jQuery(".simplemodal-wrap")){
			find("input[name=fname]").val(jQuery("#form1 input[name=fname]").val());
			find("input[name=lname]").val(jQuery("#form1 input[name=lname]").val());
			find("input[name=email]").val(jQuery("#form1 input[name=email]").val());
			find("input[name=zip]").val(jQuery("#form1 input[name=zip]").val());
			find("input[name=address]").val(jQuery("#form1 input[name=address]").val());
			find("input[name=city]").val(jQuery("#form1 input[name=city]").val());
			find("input[name=card_number]").val(jQuery("#form1 input[name=card_number]").val());
			find("input[name=cvv]").val(jQuery("#form1 input[name=cvv]").val());
			find("select[name=pmonth]").val(jQuery("#form1 select[name=pmonth]").val());
			find("select[name=pyear]").val(jQuery("#form1 select[name=pyear]").val());
			find("select[name=state]").val(jQuery("#form1 select[name=state]").val());
			find("input[name=pcode]").val(jQuery("#form1 input[name=pcode]").val());
		}
		jQuery(".simplemodal-wrap").find("input").attr('readonly','readonly');
		jQuery(".simplemodal-wrap").find("select").attr('disabled','disabled');		
		jQuery(".simplemodal-wrap").prepend(jQuery("#form_confirm h1").clone());
		jQuery(".simplemodal-wrap").append(jQuery(".buttons").clone());		
		return false;
	}
	
 jQuery(document).ready(function() {
       
		do_func();
    });
		
	function do_func(){
		
		jQuery.ajax({
            type: "GET",
            url: "/ajax_pcode.php?pcode="+jQuery("#pcode").val(),
            
			cache: false,            
            success: function(msd){
			//alert(msd);
                jQuery("#lamount").text(msd);
            }
        });
        return false;
	 
	}	
	
</script>	




 <form id="form1" name="form1" method="post" onsubmit="return check_pform()" action="payment.php">
	  
	     <table width="100%" border="0">
	       <tr>
	         <td>&nbsp;</td>
	         <td>&nbsp;</td>
	         <td><h2> </h2></td>
           </tr>
		   <?php if($display=='show_form'){  ?>
	       <tr>	         
	         <td colspan="3" align="center"> <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>  
					<?php the_content(); ?>           
				<?php endwhile; ?>
</td>
          
	       <tr>
	         <td>&nbsp;</td>
	         <td>&nbsp;</td>
	         <td><h3 style="color:red"><?php echo $massage; ?> </h3></td>
           </tr>
	      
         
           <tr>
	         <td align="right">*First Name </td>
	         <td align="center">:</td>
	         <td><input name="fname" type="text" id="fname" value="<?php echo $_REQUEST['fname']; ?>" size="50" maxlength="255" /></td>
           </tr>
	       <tr>
	         <td align="right">*Last Name </td>
	         <td align="center">:</td>
	         <td><input name="lname" type="text" id="lname" value="<?php echo $_REQUEST['lname']; ?>" size="50" maxlength="250" /></td>
           </tr>
		    <tr>
	         <td align="right">*Email Address </td>
	         <td align="center">:</td>
	         <td><input name="email" type="text" id="email" value="<?php echo $_REQUEST['email']; ?>" size="50" maxlength="250" /></td>
           </tr>
		    <tr>
	         <td align="right">Address</td>
	         <td align="center">:</td>
	         <td><input name="address" type="text" id="address" value="<?php echo $_REQUEST['address']; ?>" size="50" maxlength="250" /></td>
           </tr>
		   <tr>
	         <td align="right">City</td>
	         <td align="center">:</td>
	         <td><input name="city" type="text" id="city" value="<?php echo $_REQUEST['city']; ?>" size="50" maxlength="250" /></td>
           </tr>
		   <tr>
	         <td align="right">State</td>
	         <td align="center">:</td>
	         <td><?php state_selection(); ?></td>
           </tr>
		   
	       <tr>
	         <td align="right">*Zip</td>
	         <td align="center">:</td>
	         <td><input name="zip" type="text" id="zip" value="<?php echo $_REQUEST['zip']; ?>" size="50" maxlength="250" /></td>
           </tr>
	       <tr>
	         <td align="right">*Card Number (without spaces)  </td>
	         <td align="center">:</td>
	         <td><input name="card_number" type="text" id="card_number" value="<?php echo $_REQUEST['card_number']; ?>" size="50" maxlength="250" /></td>
           </tr>
	       <tr>
	         <td align="right">*Expiration Date (mm yy)
	           </td>
	         <td align="center">:</td>
	         <td><select name="pmonth">
	           <option value="01" selected="selected">Jan</option>
	           <option value="02">Feb</option>
	           <option value="03">Mar</option>
	           <option value="04">Apr</option>
	           <option value="05">May</option>
	           <option value="06">Jun</option>
	           <option value="07">Jul</option>
	           <option value="08">Aug</option>
	           <option value="09">Sep</option>
	           <option value="10">Oct</option>
	           <option value="11">Nov</option>
	           <option value="12">Dec</option>
             </select>
	           <select name="pyear">
	         
	             <option value="2011">2011</option>
	             <option value="2012" selected="selected">2012</option>
	             <option value="2013">2013</option>
	             <option value="2014">2014</option>
	             <option value="2015">2015</option>
	             <option value="2016">2016</option>
	             <option value="2017">2017</option>
	             <option value="2018">2018</option>
             </select></td>
           </tr>
	       <tr>
	         <td align="right">*Card Sercurity Code (CVV) </td>
	         <td align="center">:</td>
	         <td><input name="cvv" type="text" id="cvv" value="<?php echo $_REQUEST['cvv']; ?>" size="50" maxlength="250" /></td>
           </tr>
	      
		    <tr>
	         <td align="right">Promotion Code</td>
	         <td align="center">:</td>
	         <td><input name="pcode" type="text" id="pcode" value="<?php echo $_REQUEST['pcode']; ?>" size="50" maxlength="250" onkeyup="do_func();" /></td>
           </tr>
	       <tr>
	         <td align="right">Amount</td>
	         <td align="center">:</td>
	         <td style="font-size:20px;">$ <label id="lamount" name="lamount"></label>.00</td>
           </tr>
	       <tr>
	         <td>&nbsp;</td>
	         <td>&nbsp;</td>
	         <td><input type="submit" name="Submit" id="Submit" value="Submit" />
             <input type="hidden" value="aim" name="action"/></td>
           </tr>
		    <tr>
	         <td>&nbsp;</td>
	         <td>&nbsp;</td>
	         <td>* Required Fields</td>
           </tr>
		    </tr>
			<tr>
	         <td>&nbsp;</td>
	         <td>&nbsp;</td>
	         <td>&nbsp;</td>
           </tr>
		    <tr>
	         <td>&nbsp;</td>
	         <td></td>
	         <td><img src="https://www.bluelinerny.com/wp-content/themes/bluelinerny_cms/images/card_logo.jpg" border="0"  /></td>
           </tr>
		    <tr>
	         <td>&nbsp;</td>
	         <td>&nbsp;</td>
	         <td>&nbsp;</td>
           </tr>
			<tr>
	         <td>&nbsp;</td>
	         <td>&nbsp;</td>
	         <td><img src="https://www.bluelinerny.com/wp-content/themes/bluelinerny_cms/images/rapidssl_ssl_certificate.gif" border="0" /></td>
           </tr>

		   <?php }
		         ?>
         </table>
</form>


<div id="form_confirm" style="display:none">
<h1>Please Review Your Payment Information</h1>

			
			 <div class="buttons" >
				<button type="button" onclick="jQuery.modal.close()">Edit</button>
				<button type="button" onclick="validated='yes'; jQuery('#form1').submit();" />Confirm</button>
				</div>
				<div id="confirm_content">
				</div>
		


</div>

    </div>           
    <!-- end content_right -->
  </div>
  <!-- end content -->
</div>
<script type="text/javascript" src="/libs/jquery.simplemodal.js"></script>
<style type="text/css">
.buttons{ text-align:center;

}
#basic-modal-content {display:none;}

/* Overlay */
#simplemodal-overlay {background-color:#DDD; cursor:wait;}

/* Container */
#simplemodal-container {height:550px; width:550px; color:#000; background-color:#FFF; border:4px solid #444; padding:12px;}
#simplemodal-container h1{ font:bold 14pt arial,helvetica; color:#F70}
#simplemodal-container td{padding:4px;}
#simplemodal-container input{border:0px}
#simplemodal-container .simplemodal-data {padding:8px;}
#simplemodal-container code {background:#141414; border-left:3px solid #65B43D; color:#bbb; display:block; font-size:12px; margin-bottom:12px; padding:4px 6px 6px;}
#simplemodal-container a {color:#ddd;}
#simplemodal-container a.modalCloseImg {background:url(/libs/x.png) no-repeat; width:25px; height:29px; display:inline; z-index:3200; position:absolute; top:-15px; right:-16px; cursor:pointer;}
#simplemodal-container h3 {color:#84b8d9;}
</style>
<!-- end content_wrap -->
<?php get_footer(); ?>
