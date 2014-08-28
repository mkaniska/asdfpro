<?php $this->load->view('slider'); ?>
<div id="templatemo_main">
	<div class="content_wrapper content_mb_30">
		<div class="col_3 service_home">
			<img src="<?php echo base_url();?>images/teacher.png" alt="Image" />
		  <h2>Tutors & Professors</h2>
			<p style="text-align:left;"> We do services for the Interested people from the below category to train interested students & earn parallelly.
				<ol style="list-style-type: upper-roman;text-align:left;line-height:30px;">
					<li>School Teachers</li>
					<li>College Professors</li>
					<li>Private Tution Masters</li>
					<li>Private Tutorial Institution</li>
					<li>Home Tution Professionals</li>
					<li>Social Service Academy</li>
				</ol>
			</p>
			<a href="#" class="more">More</a>
		</div>
		<div class="col_3 service_home">
			<img src="<?php echo base_url();?>images/student.png" alt="Image" />
			<h2>Students & Tution</h2>
			<p style="text-align:left;"> We have a big pool of experienced trainers for students to find a correct tutor for their need to improve their education.
				<ol style="list-style-type: upper-roman;text-align:left;line-height:30px;">
					<li>School Students</li>
					<li>College Students</li>
					<li>Need Home Tution</li>
					<li>Need Private Tutorials</li>
					<li>Students want to study in Social Service Academy</li>
				</ol>
			</p>
			<a href="#" class="more">More</a>
		</div>
		<div class="col_3 no_margin_right service_home">
			<img src="<?php echo base_url();?>images/explorer.png" alt="Image" />
			<h2>Find & Choose</h2>
			<p style="text-align:left;"> Search for your need & find a best matching tutors/students for extra classes.
				<ol style="list-style-type: upper-roman;text-align:left;line-height:30px;">
					<li>Search for your need</li>
					<li>Read the profiles/class requirements</li>
					<li>Choose a best matching profile</li>
					<li>Pay us the commission</li>
					<li>Get the contact details of choosen profile</li>
				</ol>
			</p>
			<a href="#" class="more">More</a>
		</div>
	</div>
	<div class="clear"></div>
</div>
<script type='text/javascript'>
$(window).load(function(){
jQuery(document).ready(function ($) {
    $('[data-popup-target]').click(function () {
        $('html').addClass('overlay');
        var activePopup = $(this).attr('data-popup-target');
        $(activePopup).addClass('visible');
    });
    $(document).keyup(function (e) {
        if (e.keyCode == 27 && $('html').hasClass('overlay')) {
            clearPopup();
        }
    });
    $('.popup-exit').click(function () {
        clearPopup();

    });
    $('.popup-overlay').click(function () {
        clearPopup();
    });
    function clearPopup() {
        $('.popup.visible').addClass('transitioning').removeClass('visible');
        $('html').removeClass('overlay');

        setTimeout(function () {
            $('.popup').removeClass('transitioning');
        }, 200);
    }	
});
});//]]>  

</script>