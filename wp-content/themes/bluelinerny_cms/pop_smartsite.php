<?php  ?><div id="log">
	<div id="log_res" >
				<div id="smartsite_pop">
			<br />
			<h1>Yes, I&rsquo;d like to get a free Smartsite report!</h1><br />
			<h3><strong>Simply fill out the form and your on your way<br /> 
			to a free smartsite analysis from blueliner. </strong><br />
			</h3>
			<form method="post" action="#" name="form1" class="style2" id="myForm" onsubmit="send_req();return false;">
				<table border="0" cellpadding="2" cellspacing="0">
				<tr>

				<td>company : <br />
				<input name="client_company" class="txtfield" type="text" /></td>
				<td>contact name : <br />
				<input name="client_name" class="txtfield" type="text" /></td>
				<td>email address : <br />
				<input name="client_email" class="txtfield" type="text" /></td>
				</tr>
				<tr>
				<td>phone number : <br />
				<input name="client_phone" class="txtfield" type="text" /></td>
				<td colspan="2">website url : <br />
				<input name="client_website" type="text" class="txtfield" size="42" /></td>
				<input name="application_type" type="hidden" value="smartsite" />
				<input name="req_came_from" type="hidden" value="<?=$_SERVER['HTTP_REFERER']?>" />
				</tr>
				</table>
				<div class="hr">
					<!-- spanner -->
				</div>
				<p align="center">
				<input name="submit" value="Submit" type="submit" /></p>
			</form>
		</div>
		<!-- spanner -->
	</div>
</div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script><script type="text/javascript"> _uacct = "UA-291276-7";urchinTracker();</script>
	
