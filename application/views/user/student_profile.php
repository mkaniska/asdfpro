<div id="vision_main">
    <h3><?php echo $info->user_firstname.' '.$info->user_lastname;?></h3>
        <div id="contact_form" class="cols_2_left">
            <div id="form-container">
              <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr>
                        <td width="100%" colspan="2" style="text-align: left;">
                          <img src="<?php echo base_url();?>upload_images/<?php echo $info->user_picture;?>" height="150" width="150" />
						</td>
                    </tr>
                    <tr>
                        <td width="100%" colspan="2" style="text-align: left;">
                          <input type="button" class="formButtons" name="editProfile" id="editProfile" value="Edit Profile" />
						</td>
                    </tr>
              </table>
            </div>
        </div> 
        <div class="cols_2 no_margin_right">
            <table width="100%" border="0" cellspacing="0" cellpadding="3">
				<tr>
				  <td width="50%">Email</td>
				  <td width="50%">
					<?php echo $info->user_email;?>
				  </td>
				</tr>
				<tr>
				  <td>Qualification</td>
				  <td>
					<?php echo $info->student_qualification;?>
				  </td>
				</tr>
				<tr>
				  <td>Sills</td>
				  <td>
					<?php echo $info->student_skills;?>
				  </td>
				</tr>
				<tr>
				  <td>Current Status</td>
				  <td>
					<?php echo $info-> 	student_current_study_status;?>
				  </td>
				</tr>
				<tr>
				  <td>Institution</td>
				  <td>
					<?php echo $info->student_institute;?>
				  </td>
				</tr>
				<tr>
				  <td>Phone</td>
				  <td>
					  <?php echo $info->user_phone;?>
				  </td>
				</tr>
				<tr>
				  <td>Address</td>
				  <td>
					  <?php echo $info->user_address;?>
				  </td>
				</tr>
				<tr>
				  <td>City</td>
				  <td>
					  <?php echo $info->user_city;?>
				  </td>
				</tr>
				<tr>
				  <td>Zip code & State</td>
				  <td>
					  <?php echo $info->user_zipcode.' & '.$info->user_state;?>
				  </td>
				</tr>
				<tr>
				  <td>Last Login</td>
				  <td>
					  <?php echo date("d,M 'y h:i A",$info->user_last_login);?>
				  </td>
				</tr>
              </table>
        </div>
    <div class="clear"></div>
</div> <!-- END of vision_main -->