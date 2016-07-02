<?php  ?><div id="log">
	<div id="log_res" >	
		<div id="smartsite_pop">
			<br />
			<h1> Yes, I'd like to get a FREE consultation!
</h1>
			<h3><strong>Fill out the form below to schedule your free consultation.</strong>
			</h3><br />
			<form method="post" action="#" name="form1" class="style2" id="myForm" onsubmit="send_req();return false;">
				Fields marked * are required
				<table width="372" border="0" cellpadding="2" cellspacing="0">
				<tr>

				<td width="108">*First Name  <br />
				<input name="client_fname" type="text" class="txtfield" size="18" /></td>
				<td width="108">*Last Name  <br />
				<input name="client_lname" type="text" class="txtfield" size="18" /></td>
				<td width="144">Company  <br />
				<input name="client_company" class="txtfield" type="text" /></td>
				</tr>
				<tr>
				<td>*Phone Number  <br />
				<input name="client_phone" type="text" class="txtfield" size="18" /></td>
				<td>*Email Address  <br />
				<input name="client_email" type="text" class="txtfield" size="18" /></td>
				<td>Website  <br />
				<input name="client_website" type="text" class="txtfield" /></td>
				<input name="application_type" type="hidden" value="consultation" />
				<input name="req_came_from" type="hidden" value="<?=$_SERVER['HTTP_REFERER']?>" />
				</tr>
				<tr>
					<td colspan="2">Comments<br/><textarea name="client_comments" rows="2" cols="20"></textarea>
</td><td align="right" valign="bottom">
				<input name="submit" value="Submit" type="submit" /></td></tr>
				</table>
				<div class="hr">
					<!-- spanner -->
				</div>
				
			</form>

		</div>
		<!-- spanner -->
	</div>
</div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script><script type="text/javascript"> _uacct = "UA-291276-7";urchinTracker();</script>
	
