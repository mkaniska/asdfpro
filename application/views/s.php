<div id="signup-popup" class="popup">
    <div class="popup-body">
		<span class="popup-exit"></span>
        <div class="popup-content">
            <h2 class="popup-title">Signup/Registration</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ullamcorper nulla et gravida interdum. 
			Quisque dignissim a turpis at posuere. Praesent cursus turpis magna, quis pulvinar est vehicula</p>
        </div>
    </div>
</div>

<script>
/*
	$("button").click(function(){

		$(".formError").hide();

	});

	var use_ajax=true;
	
	//$.validationEngine.settings={};
	
	
	$("#contact-form").validationEngine({
		inlineValidation: false,
		promptPosition: "centerRight",
		success :  function(){use_ajax=true},
		failure : function(){use_ajax=false;}
	 })

	$("#contact-form").submit(function(e){

			if(!$('#subject').val().length)
			{
				//$.validationEngine.buildPrompt(".jqTransformSelectWrapper","* This field is required","error")
				return false;
			}
			
			if(use_ajax)
			{
				$('#loading').css('visibility','visible');
				$.post('submit.php',$(this).serialize()+'&ajax=1',
				
					function(data){
						if(parseInt(data)==-1)
							$.validationEngine.buildPrompt("#captcha","* Wrong verification number!","error");
							
						else
						{
							$("#contact-form").hide('slow').after('<h1>Thank you!</h1>');
						}
						
						$('#loading').css('visibility','hidden');
					}
				
				);
			}
			e.preventDefault();
	})
	*/
</script>