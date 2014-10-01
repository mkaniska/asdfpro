var siteURL = 'http://'+window.location.hostname+'/asdfpro';
$(document).ready(function() {    
    $("#doRegister").click(function() {
        $("#errorMessage").html('');
        var isFine = validateRegistration();
        if(isFine){
            $('#contact-form').attr('action', siteURL+'/user/process_signup');
            $("#contact-form").ajaxFormUnbind();
            $('#contact-form').submit();
        }
    });    
    $("#doLogin").click(function() {
        $("#errorMessage").html('');
        var isFine = validateLogin();
        if(isFine){$('#contact-form').submit();}
    });
    $("#doCancel").click(function() {
        history.back();
    });	
    $("#editProfile").click(function() {
        $(location).attr('href', siteURL+'/user/editprofile');
    });
    $("#updateProfile").click(function() {
        $("#errorMessage").html('');
        var isFine = validateProfile();
        if(isFine){$('#contact-form').submit();}
    });	
    $("#searchTutors").click(function() {
        $(location).attr('href', siteURL+'/tutor/search');
    });	
	//setInterval(function(){yourownfunction()}, 5000);
});