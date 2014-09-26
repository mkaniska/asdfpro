// Signup Form Validation
function validateRegistration() {
    var formObj = {};
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
    var formObj = {};
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

/*
function getCities(stateName){
    $('#city').each(function() {this.options.length = 0; $(this)[0].options.length = 0;});
    $.ajax({
            type: 'POST',
            url: siteURL+'/welcome/listcities',
            beforeSend: function(){  },
            data: 'state_name='+stateName,
            dataType: "text",
            success: function(resultData) {
               var jsonResult = JSON.parse(resultData);
               //alert(jsonResult);
                $( ".jqTransformSelectWrapper ul li" ).remove();
                $.each(jsonResult, function(index, value) {
                   //obj.tagName 
                   //alert(index+' '+value);
                   $('.jqTransformSelectWrapper ul').append('<li index="'+value+'" href="#">'+ value+'</li>');
                    //$('.jqTransformSelectWrapper ul').append($('<li>').text(value).val(index));
                });
                
            }
        });
}
*/