<div id="templatemo_main">
		<h2>Sign Up !</h2>
		<div id="contact_form" class="col_2_new">
				<div id="form-container">
				<form id="contact-form" name="contact-form" method="post" action="<?php echo base_url();?>welcome/process_contact">
				  <table width="100%" border="0" cellspacing="0" cellpadding="5">
					<tr>
					  <td width="10%"><label for="first_name">First Name</label></td>
					  <td width="30%"><input type="text" class="validate[required,custom[onlyLetter]]" name="first_name" id="first_name" value="" /></td>
					  <td width="10%" id="errOffset">&nbsp;</td>
					  <td width="10%"><label for="last_name">Last Name</label></td>
					  <td width="30%"><input type="text" class="validate[required,custom[onlyLetter]]" name="last_name" id="last_name" value="" /></td>
					  <td width="10%" id="errOffset">&nbsp;</td>						  
					</tr>
					<tr>
					  <td><label for="email">Email</label></td>
					  <td><input type="text" class="validate[required,custom[email]]" name="email" id="email" value="" /></td>
					  <td>&nbsp;</td>
					  <td><label for="phone">Phone</label></td>
					  <td><input type="text" class="validate[required,custom[onlyNumber]]" name="phone" id="phone" value="" /></td>
					  <td>&nbsp;</td>
					</tr>
					<tr>
					  <td><label for="password">Password</label></td>
					  <td><input type="text" class="validate[required,custom[email]]" name="password" id="password" value="" /></td>
					  <td>&nbsp;</td>
					  <td><label for="repassword">Re-Type Password</label></td>
					  <td><input type="text" class="validate[required,custom[onlyNumber]]" name="repassword" id="repassword" value="" /></td>
					  <td>&nbsp;</td>
					</tr>
					<tr>
					  <td><label for="gender">Gender</label></td>
					  <td>
						  <input type="radio" name="gender" id="gender" value="Male" checked="checked" /> 
						  <label for="gender">Male</label>
						  <input type="radio" name="gender" id="gender" value="Female" /> 
						  <label for="gender">Female</label>
					  </td>
					  <td>&nbsp;</td>
					  <td><label for="address">Address</label></td>
					  <td>
						<input type="text" class="validate[required,custom[onlyNumber]]" name="address" id="address" value="" />
					  </td>
					  <td>&nbsp;</td>
					</tr>
					<tr>
					  <td><label for="state">State</label></td>
					  <td>
						  <select name="state" id="state">
							<option value="" selected="selected"> - Choose -</option>
							<option value="General">General Question</option>
							<option value="Business proposal">Business proposal</option>
							<option value="Advertisement">Advertising</option>
							<option value="Complaint">Complaint</option>
						  </select>
					  </td>
					  <td>&nbsp;</td>
					  <td valign="top">
					  <label for="city">City</label></td>
					  <td>
						  <select name="city" id="city">
							<option value="" selected="selected"> - Choose -</option>
							<option value="General">General Question</option>
							<option value="Business proposal">Business proposal</option>
							<option value="Advertisement">Advertising</option>
							<option value="Complaint">Complaint</option>
						  </select>
					  </td>
					  <td valign="top">&nbsp;</td>
					</tr>
					<tr>
					  <td><label for="zipcode">Zipcode</label></td>
					  <td>
						  <input type="text" class="validate[required,custom[onlyNumber]]" name="zipcode" id="zipcode" value="" />
					  </td>
					  <td>&nbsp;</td>
					  <td><label for="userImage">Upload Picture</label></td>
					  <td>
						<input name="userImage" id="userImage" type="file" /> <a id="uploadNow" href="#">Upload</a>
					  </td>
					  <td>&nbsp;</td>
					</tr>					
					<tr>
					  <td><label for="captcha"><?php echo $this->session->userdata('display');?> =</label></td>
					  <td><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>
					  <td valign="top">&nbsp;</td>
					  <td valign="top">&nbsp;</td>
					  <td colspan="2">
						<div id="targetLayer">Your Image Preview</div>
					  </td>
					</tr>
					<tr>
					  <td colspan="6" style="text-align:center;">
						<input type="submit" name="doContact" id="doContact" value="Submit" />
						<input type="reset" name="button2" id="button2" value="Reset" />					  
					  </td>
					</tr>
				  </table>
				  </form>
				</div>
		</div> 
	<div class="clear"></div>
</div> <!-- END of templatemo_main -->
