// Signup Form Validation
function validateRegistration() {
    var inputs = $("form").serializeArray();
    var isAllFine = true;
    $.each(inputs, function (i, input) {
        if($.trim(input.value)==''){
            var fieldName = input.name.replace("_", " ");
            $("#errorMessage").html('Please provide value for '+(fieldName.charAt(0).toUpperCase() + fieldName.slice(1)));
            $("#"+input.name).focus();
            isAllFine = false;
            return false;
        }
    });
    return isAllFine;
}

// Login Form Validation
function validateLogin() {
    var inputs = $("form").serializeArray();
    var isAllFine = true;
    $.each(inputs, function (i, input) {
        if($.trim(input.value)==''){
            var fieldName = input.name.replace("_", " ");
            $("#errorMessage").html('Please provide value for '+(fieldName.charAt(0).toUpperCase() + fieldName.slice(1)));
            $("#"+input.name).focus();
            isAllFine = false;
            return false;
        }
    });
    return isAllFine;
}

// Edit Profile Form Validation
function validateProfile() {
    var inputs = $("form").serializeArray();
    var isAllFine = true;
    $.each(inputs, function (i, input) {
		if(input.name!='password' && input.name!='repassword' && input.name!='institute'){
			if($.trim(input.value)==''){
				var fieldName = input.name.replace("_", " ");
				$("#errorMessage").html('Please provide value for '+(fieldName.charAt(0).toUpperCase() + fieldName.slice(1)));
				$("#"+input.name).focus();
				isAllFine = false;
				return false;
			}
		}
    });
    return isAllFine;
}