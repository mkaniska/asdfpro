<div id="templatemo_main">
    <h3>Profile Details</h3>
        <div id="contact_form" class="col_2">
            <div id="form-container">
              <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr>
                        <td width="100%" colspan="2" style="text-align: center;">
                          <img src="upload_images/<?php echo $info->user_picture;?>" />
                      </td>
                    </tr>
              </table>
            </div>
        </div> 
        <div class="col_2 no_margin_right">
            <table width="100%" border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td width="15%"><label for="name">Name</label></td>
                      <td width="70%">
                          <?php echo $info->user_firstname;?>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="email">Email</label></td>
                      <td>
                        <?php echo $info->user_lastname;?>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="email">Phone</label></td>
                      <td>
                          <?php echo $info->user_phone;?>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="email">Address</label></td>
                      <td>
                          <?php echo $info->user_address;?>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="email">City, Zip code & State</label></td>
                      <td>
                          <?php echo $info->user_city.','.$info->user_zipcode.' & '.$info->user_state;?>
                      </td>
                    </tr>
                    <tr>
                      <td><label for="email">Last Login</label></td>
                      <td>
                          <?php echo date("d,M 'y h:i A",$info->user_last_login);?>
                      </td>
                    </tr>
              </table>
        </div>
    <div class="clear"></div>
</div>