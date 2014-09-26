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
        //$(location).attr('href', siteURL+'/user/profile');
        history.back();
    });

    //setInterval(function(){yourownfunction()}, 5000);
});