<div id="vision_menu" class="ddsmoothmenu">
	<ul>
		<li><a href="<?php echo base_url();?>" <?php if($menu=='home'){?> class="selected" <?php }?>>Home</a></li>
		<li><a href="<?php echo base_url();?>tutor/ourtutors" <?php if($menu=='ourtutors'){?> class="selected" <?php }?>>Our Tutors</a>
			<ul>
				<li><a href="news.html">Category One</a></li>
				<li><a href="news.html">Category Two</a></li>
				<li><a href="news.html">Category Three</a></li>
				<li><a href="news.html">Category Four</a></li>
				<li><a href="news.html">Category Five</a></li>                                                                        
		  </ul>
		</li>
		<li><a href="<?php echo base_url();?>tutor/subjects" <?php if($menu=='subjects'){?> class="selected" <?php }?>>Subjects</a></li>
		<li><a href="about.html" <?php if($menu=='about'){?> class="selected" <?php }?>>About</a></li>                
		<li class="last">
			<a href="<?php echo base_url();?>welcome/contactus" <?php if($menu=='contactus'){?> class="selected" <?php }else{ ?>class="last"<?php }?>>Contact</a>
		</li>
	</ul>
	<br style="clear: left" />
</div> <!-- end of vision_menu -->	
	