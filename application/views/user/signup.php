<?php $data_restore = $this->session->flashdata('refill_data'); ?>
<div id="templatemo_main">
	<h2>Sign Up !</h2>
	<div id="contact_form" class="col_2_new">
		<div id="form-container">
		<form id="contact-form" enctype="multipart/form-data" name="contact-form" method="post" action="<?php echo base_url();?>user/uploadimage">
		  <table width="100%" border="0" cellspacing="0" cellpadding="5">
			<tr>
			  <td class="formError" id="errorMessage" colspan="6"></td>						  
			</tr>			
			<tr>
			  <td width="10%"><label for="first_name">First Name</label></td>
			  <td width="30%">
                              <input type="text" name="first_name" id="first_name" value="<?php echo $data_restore['user_firstname'];?>" />
                          </td>
			  <td width="10%" id="errOffset">&nbsp;</td>
			  <td width="10%"><label for="last_name">Last Name</label></td>
			  <td width="30%">
                              <input type="text" name="last_name" id="last_name" value="<?php echo $data_restore['user_lastname'];?>" />
                          </td>
			  <td width="10%" id="errOffset">&nbsp;</td>						  
			</tr>
			<tr>
			  <td><label for="email">Email</label></td>
			  <td>
                              <input type="text" name="email" id="email" value="<?php echo $data_restore['user_email'];?>" />
                          </td>
			  <td>&nbsp;</td>
			  <td><label for="phone">Phone</label></td>
			  <td>
                              <input type="text" name="phone" id="phone" value="<?php echo $data_restore['user_phone'];?>" />
                          </td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td><label for="password">Password</label></td>
			  <td>
                              <input type="password" name="password" id="password" value="" />
                          </td>
			  <td>&nbsp;</td>
			  <td><label for="repassword">Re-Type Password</label></td>
			  <td>
                              <input type="password" name="repassword" id="repassword" value="" />
                          </td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td><label for="gender">Gender</label></td>
			  <td>
				  <input type="radio" name="gender" id="gender" value="Male" checked="checked" /> 
				  <label for="gender">Male</label>
                                  <input type="radio" name="gender" id="gender" value="Female" <?php if($data_restore['user_gender']=='Female'){?> checked="checked"<?php }?> /> 
				  <label for="gender">Female</label>
			  </td>
			  <td>&nbsp;</td>
			  <td><label for="address">Address</label></td>
			  <td>
				<input type="text" name="address" id="address" value="<?php echo $data_restore['user_address'];?>" />
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
				<input type="text" name="zipcode" id="zipcode" value="<?php echo $data_restore['user_zipcode'];?>" />
			  </td>
			  <td>&nbsp;</td>
			  <td><label for="userImage" id="userImageLabel">Upload Picture</label></td>
			  <td>
				<input name="userImage" id="userImage" type="file" />
			  </td>
			  <td>&nbsp;</td>
			</tr>
			<tr>
			  <td><label for="captcha">What is <?php echo $this->session->userdata('display');?> ?</label></td>
			  <td>
				<input type="text" name="captcha" id="captcha" />
			  </td>
			  <td valign="top">&nbsp;</td>
			  <td valign="top">&nbsp;</td>
			  <td colspan="2">
				<div id="view"> </div>
			  </td>
			</tr>
			<tr>
			  <td colspan="6" style="text-align:center;">
				<input type="button" name="doRegister" id="doRegister" value="Submit" />
				<input type="reset" name="doReset" id="doReset" value="Reset" />					  
			  </td>
			</tr>
		  </table>
		  </form>
		</div>
	</div> 
	<div class="clear"></div>
</div>