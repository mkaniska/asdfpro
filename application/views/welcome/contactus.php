    
    <div id="templatemo_main">
			<h2>Contact Us</h2>
            <div id="contact_form" class="col_2">
					<div id="form-container">
					<form id="contact-form" name="contact-form" method="post" action="<?php echo base_url();?>welcome/process_contact">
					  <table width="100%" border="0" cellspacing="0" cellpadding="5">
						<tr>
						  <td width="15%"><label for="name">Name</label></td>
						  <td width="70%"><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="" /></td>
						  <td width="15%" id="errOffset">&nbsp;</td>
						</tr>
						<tr>
						  <td><label for="email">Email</label></td>
						  <td><input type="text" class="validate[required,custom[email]]" name="email" id="email" value="" /></td>
						  <td>&nbsp;</td>
						</tr>
						<tr>
						  <td><label for="email">Phone</label></td>
						  <td><input type="text" class="validate[required,custom[onlyNumber]]" name="phone" id="phone" value="" /></td>
						  <td>&nbsp;</td>
						</tr>
						<tr>
						  <td><label for="subject">Subject</label></td>
						  <td>
							  <select name="subject" id="subject">
								<option value="" selected="selected"> - Choose -</option>
								<option value="General">General Question</option>
								<option value="Business proposal">Business proposal</option>
								<option value="Advertisement">Advertising</option>
								<option value="Complaint">Complaint</option>
							  </select>
						  </td>
						  <td>&nbsp;</td>
						</tr>
						<tr>
						  <td valign="top"><label for="message">Message</label></td>
						  <td><textarea name="message" id="message" class="validate[required]" cols="40" rows="6"></textarea></td>
						  <td valign="top">&nbsp;</td>
						</tr>
						<tr>
						  <td><label for="captcha"><?php echo $this->session->userdata('display');?> =</label></td>
						  <td><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>
						  <td valign="top">&nbsp;</td>
						</tr>
						<tr>
						  <td valign="top">&nbsp;</td>
						  <td colspan="2"><input type="submit" name="doContact" id="doContact" value="Submit" />
						  <input type="reset" name="button2" id="button2" value="Reset" />
						  <img id="loading" src="images/ajax-load.gif" width="16" height="16" alt="loading" /></td>
						</tr>
					  </table>
					  </form>
					</div>
            </div> 
            <div class="col_2 no_margin_right">
                <div class="col_4">
                    <h3>Office One</h3>
                    330-660 Nullam lacus diam,<br />
                  	Pulvinar sit amet, 13560<br />
                	Lorem ipsum<br /><br />                    
                    Tel: 090-020-9922<br />
                    Fax: 090-020-2299<br /><br />
                    
                    Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a></div>
                <div class="col_4 no_margin_right">
                    <h3>Office Two</h3>
                  	440-550 Donec vitae dui,<br />
                  	Duis gravida,  12840<br />
                	Pellentesque<br /><br />                    
                    Tel: 080-010-1188<br />
                    Fax: 080-010-8811 
                </div>
            </div>
        <div class="clear"></div>
    </div> <!-- END of templatemo_main -->