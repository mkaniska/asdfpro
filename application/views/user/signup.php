<?php $data_restore = $this->session->flashdata('refill_data'); ?>
<div id="vision_main">
	<h2>Sign Up !</h2>
	<div id="contact_form" class="col_2_new">
		<div id="form-container" style="margin-left:15px;">
		<form id="contact-form" enctype="multipart/form-data" name="contact-form" method="post" action="<?php echo base_url();?>user/uploadimage">
		  <table width="100%" border="0" cellspacing="0" cellpadding="5" style="margin-left:10px;">
			<tr>
                            <td class="formError" id="errorMessage" colspan="6">
                                <?php if($this->session->flashdata('flash_message') !='') { ?>
                                        <?php echo $this->session->flashdata('flash_message'); ?>
                                <?php } ?>
                            </td>						  
			</tr>
			<tr>
			  <td><label>Signup As </label></td>
			  <td colspan="5">
                            <input type="radio" name="user_type" id="user_type1" value="tutor" checked="checked" /> 
                            <label for="user_type1">Tutor/Teacher/Lecturer</label>
                            <input type="radio" name="user_type" id="user_type2" value="student" <?php if($data_restore['user_type']=='student'){?> checked="checked"<?php }?> /> 
                            <label for="user_type2">Student/Trainee</label>
			  </td>
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
			  <td><label>Gender</label></td>
			  <td>
                            <input type="radio" name="gender" id="gender1" value="Male" checked="checked" /> 
                            <label for="gender1">Male</label>
                            <input type="radio" name="gender" id="gender2" value="Female" <?php if($data_restore['user_gender']=='Female'){?> checked="checked"<?php }?> /> 
                            <label for="gender2">Female</label>
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
                                <?php foreach($states as $key=>$vals) {?>
                                <option value="<?php echo $vals->state_id;?>" <?php if($vals->state=='Karnataka'){?> selected="selected" <?php } ?>><?php echo $vals->state;?></option>
                                <?php } ?>
                            </select>
			  </td>
			  <td>&nbsp;</td>
			  <td valign="top">
			  <label for="city">City</label></td>
                          <td id="cityplace">
                                <select name="city" id="city">
                                <?php foreach($cities as $key1=>$vals1) {?>
                                <option value="<?php echo $vals1;?>" <?php if($vals1=='Bangalore'){?> selected="selected" <?php } ?>><?php echo $vals1;?></option>
                                <?php } ?>
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
			  <td colspan='2'>
				<input name="userImage" id="userImage" type="file" />
			  </td>
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