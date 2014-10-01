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
            <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td width="40%"><label for="email">Email</label></td>
                      <td width="60%">
                        <?php echo $info->user_email;?>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="experience">Experience</label></td>
                      <td>
                        <?php echo $info->tutor_experience;?>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="skills">Sills</label></td>
                      <td>
                        <?php echo $info->tutor_skills;?>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="status">Current Status</label></td>
                      <td>
                        <?php echo $info->tutor_current_work_status;?>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="institute">Institution</label></td>
                      <td>
                        <?php echo $info->tutor_institute;?>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="phone">Phone</label></td>
                      <td>
                          <?php echo $info->user_phone;?>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="address">Address</label></td>
                      <td>
                          <?php echo $info->user_address;?>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="city">City</label></td>
                      <td>
                          <?php echo $info->user_city;?>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="city">Zip code & State</label></td>
                      <td>
                          <?php echo $info->user_zipcode.' & '.$info->user_state;?>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="lastlogin">Last Login</label></td>
                      <td>
                          <?php echo date("d,M 'y h:i A",$info->user_last_login);?>
                      </td>
                    </tr>
              </table>
        </div>
    <div class="clear"></div>
</div> <!-- END of vision_main -->