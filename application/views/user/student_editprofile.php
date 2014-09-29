<?php $data_restore = $this->session->flashdata('refill_data'); ?>
<div id="vision_main">
    <h2>Edit your Profile !</h2>
    <div id="contact_form" class="col_2_new">
        <div id="form-container" style="margin-left:15px;">
        <form id="contact-form" name="contact-form" method="post" action="<?php echo base_url();?>user/updateprofile">
          <table width="100%" border="0" cellspacing="0" cellpadding="5" style="margin-left:10px;">
                <tr>
                    <td class="formError" id="errorMessage" colspan="6">
                        <?php if($this->session->flashdata('flash_message') !='') { ?>
                                <?php echo $this->session->flashdata('flash_message'); ?>
                        <?php } ?>
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
           </table>
            <table width="100%" border="0" cellspacing="0" cellpadding="5" style="margin-left:10px;">
                <tr>
                  <td width="10%"><label for="qualification">Qualification</label></td>
                  <td width="30%">
                      <input type="text" name="qualification" id="qualification" value="<?php echo $data_restore['user_firstname'];?>" />
                  </td>
                  <td width="10%" id="errOffset">&nbsp;</td>
                  <td width="10%"><label for="skills">Skills</label></td>
                  <td width="30%">
                      <input type="text" name="skills" id="skills" value="<?php echo $data_restore['student_skills'];?>" />
                  </td>
                  <td width="10%" id="errOffset">&nbsp;</td>						  
                </tr>
                <tr>
                  <td width="10%"><label for="study_status">Current Work Status</label></td>
                  <td width="30%">
                    <input type="radio" name="study_status" id="study_status1" value="Institute" checked="checked" /> 
                    <label for="study_status1">Institute</label>
                    <input type="radio" name="study_status" id="study_status2" value="Self" <?php if($data_restore['student_current_study_status']=='self'){?> checked="checked"<?php }?> /> 
                    <label for="study_status2">Self</label>
                  </td>
                  <td width="10%" id="errOffset">&nbsp;</td>
                  <td width="10%"><label for="institute">Institute</label></td>
                  <td width="30%">
                      <input type="text" name="institute" id="institute" value="<?php echo $data_restore['student_institute'];?>" />
                  </td>
                  <td width="10%" id="errOffset">&nbsp;</td>						  
                </tr>
                <tr>
                  <td colspan="6" style="text-align:center;">
                        <input type="submit" name="updateProfile" id="updateProfile" value="Update" />
                        <input type="button" name="doCancel" id="doCancel" value="Cancel" />					  
                  </td>
                </tr>
            </table>
          </form>
        </div>
    </div> 
    <div class="clear"></div>
</div>