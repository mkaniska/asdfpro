<div id="vision_main">
    <h2>Edit your Profile Information</h2>
    <div id="contact_form" class="col_2_new">
        <div id="form-container" style="margin-left:20px;">
        <form id="contact-form" name="contact-form" method="post" action="<?php echo base_url();?>user/updateprofile">
          <table width="100%" border="0" cellspacing="0" cellpadding="5" style="margin-left:20px;">
                <tr>
                    <td class="formError" id="errorMessage" colspan="6">
                        <?php if($this->session->flashdata('flash_message') !='') { ?>
                                <?php echo $this->session->flashdata('flash_message'); ?>
                        <?php } ?>
                    </td>						  
                </tr>
                <tr>
                  <td width="10%"><label for="email">Email</label></td>
                  <td width="30%" style="color:#000;">
                      [<?php echo $info->user_email;?>]  <img align="absmiddle" src="<?php echo base_url();?>images/help.png" alt="Unique, cannot be changed" title="Unique, cannot be changed" /> 
                  </td>
                  <td width="10%" id="errOffset">&nbsp;</td>
                  <td width="10%"><label for="phone">* Phone</label></td>
                  <td width="30%">
                      <input type="text" name="phone" id="phone" value="<?php echo $info->user_phone;?>" />
                  </td>
                  <td width="10%">&nbsp;</td>
                </tr>
                <tr>
                  <td><label for="password"> Password</label></td>
                  <td>
                      <input type="password" name="password" id="password" value="" /> 
					  <img style="padding:5px;" src="<?php echo base_url();?>images/help.png" alt="Leave blank if not to change" title="Leave blank if not to change" />
                  </td>
                  <td id="errOffset">&nbsp;</td>
                  <td><label for="repassword"> Re-type Password</label></td>
                  <td>
                      <input type="password" name="repassword" id="repassword" value="" /> 
					  <img style="padding:5px;" src="<?php echo base_url();?>images/help.png" alt="Leave blank if not to change" title="Leave blank if not to change" />
                  </td>
                  <td id="errOffset">&nbsp;</td>						  
                </tr>
                <tr>
                  <td><label>* Gender</label></td>
                  <td>
                    <input type="radio" name="gender" id="gender1" value="Male" checked="checked" /> 
                    <label for="gender1">Male</label>
                    <input type="radio" name="gender" id="gender2" value="Female" <?php if($info->user_gender=='Female'){?> checked="checked"<?php }?> /> 
                    <label for="gender2">Female</label>
                  </td>
                  <td>&nbsp;</td>
                  <td><label for="address">* Address</label></td>
                  <td>
                        <input type="text" name="address" id="address" value="<?php echo $info->user_address;?>" />
                  </td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><label for="state">* State</label></td>
                  <td>
                      <select name="state" id="state">
                        <?php foreach($states as $key=>$vals) {?>
                        <option value="<?php echo $vals->state_id;?>" <?php if($vals->state=='Karnataka'){?> selected="selected" <?php } ?>><?php echo $vals->state;?></option>
                        <?php } ?>
                    </select>
                  </td>
                  <td>&nbsp;</td>
                  <td valign="top">
                  <label for="city">* City</label></td>
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
                  <td><label for="qualification">* Qualification</label></td>
                  <td>
                      <input type="text" name="qualification" id="qualification" value="<?php echo $info->student_qualification;?>" />
                  </td>
                  <td id="errOffset">&nbsp;</td>
					<td><label for="work_status">* Current Study Status</label></td>
                  <td>
                    <input type="radio" name="study_status" id="study_status1" value="Institute" checked="checked" /> 
                    <label for="study_status1">Institute</label>
                    <input type="radio" name="study_status" id="study_status2" value="Self" <?php if($info->student_current_study_status=='Self'){?> checked="checked"<?php }?> /> 
                    <label for="study_status2">Self</label>
                  </td>
                  <td id="errOffset">&nbsp;</td>
                </tr>
                <tr>
                  <td><label for="institute">Institute</label></td>
                  <td colspan="4">
                      <input type="text" name="institute" id="institute" value="<?php echo $info->student_institute;?>" size="45" />
                  </td>
                  <td id="errOffset">&nbsp;</td>						  
                </tr>
                <tr>
                  <td valign="top"><label for="skills">* Skills</label></td>
                  <td colspan="4">
                      <textarea rows="5" cols="90" name="skills" id="skills"><?php echo $info->student_skills;?></textarea> </br>
					  [Enter your professional experience or skills summary]
                  </td>
                  <td> </td>
                </tr>
                <tr>
                  <td colspan="6" style="text-align:center;">
                        <input type="button" name="updateProfile" id="updateProfile" value="Update" />
                        <input type="button" name="doCancel" id="doCancel" value="Cancel" />					  
                  </td>
                </tr>
           </table>
          </form>
        </div>
    </div> 
    <div class="clear"></div>
</div>