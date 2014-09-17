var siteURL = 'http://'+window.location.hostname+'/asdfpro';
$(document).ready(function() {
	$("#doRegister").click(function() {
		$('#contact-form').attr('action', siteURL+'/user/process_signup');
		$("#errorMessage").html('');
		var isFine = validateRegistration();
		if(isFine){$('#contact-form').submit();}else{alert('kjhk');}
	});
	
	//setInterval(function(){yourownfunction()}, 5000);
});