<?php $this->load->view('slider'); ?>
<div id="templatemo_main">
	<div class="content_wrapper content_mb_30">
		<div class="col_3 service_home">
			<img src="<?php echo base_url();?>images/teacher.png" alt="Image" />
		  <h2>Tutors & Professors</h2>
			<p style="text-align:left;">
			Curabitur eget nibh id enim laoreet euismod eget ac orci. 
			Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
			Curabitur eget nibh id enim laoreet euismod eget ac orci. 
			Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
			Curabitur eget nibh id enim laoreet euismod eget ac orci. 
			Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
			</p>
			<a href="#" class="more">More</a>
		</div>
		<div class="col_3 service_home">
			<img src="<?php echo base_url();?>images/student.png" alt="Image" />
			<h2>Students & Tution</h2>
			<p style="text-align:left;">
			Curabitur eget nibh id enim laoreet euismod eget ac orci. 
			Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
			Curabitur eget nibh id enim laoreet euismod eget ac orci. 
			Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
			Curabitur eget nibh id enim laoreet euismod eget ac orci. 
			Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
			</p>
			<a href="#" class="more">More</a>
		</div>
		<div class="col_3 no_margin_right service_home">
			<img src="<?php echo base_url();?>images/explorer.png" alt="Image" />
			<h2>Find & Choose</h2>
			<p style="text-align:left;">
			Curabitur eget nibh id enim laoreet euismod eget ac orci. 
			Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
			Curabitur eget nibh id enim laoreet euismod eget ac orci. 
			Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
			Curabitur eget nibh id enim laoreet euismod eget ac orci. 
			Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
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