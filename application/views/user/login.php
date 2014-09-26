<div id="templatemo_main">
	<h2>Login !</h2>
	<div id="contact_form" class="col_2_new">
            <div id="form-container" style="margin-left:40px;background-color:#F2D0CB;">
		<form id="contact-form" name="contact-form" method="post" action="<?php echo base_url();?>user/process_login">
		  <table width="60%" border="0" cellspacing="3" cellpadding="5" style="margin-left:40px;">
			<tr>
			  <td colspan="2"> </td>
			</tr>
			<tr>
			  <td colspan="2"> </td>
			</tr>
                        <tr>
                            <td class="formError" id="errorMessage" colspan="2">
                                <?php if($this->session->flashdata('flash_message') !='') { ?>
                                        <?php echo $this->session->flashdata('flash_message'); ?>
                                <?php } ?>
                            </td>						  
			</tr>			
			<tr>
			  <td width="10%"><label for="user_name">User Name/Email</label></td>
			  <td width="30%">
                              <input type="text" name="user_name" id="user_name" value="" />
                          </td>
			</tr>
			<tr>
			  <td><label for="password">Password</label></td>
			  <td>
                              <input type="password" name="password" id="password" value="" />
                          </td>
			</tr>
			<tr>
			  <td colspan="2" style="text-align:center;">
                            <input type="button" name="doLogin" id="doLogin" value="Login" />
                            <input type="reset" name="doReset" id="doReset" value="Reset" />					  
			  </td>
			</tr>
			<tr>
			  <td colspan="2"> </td>
			</tr>
			<tr>
			  <td colspan="2"> </td>
			</tr>
			<tr>
			  <td colspan="2"> </td>
			</tr>
		  </table>
		  </form>
		</div>
	</div> 
	<div class="clear"></div>
</div>