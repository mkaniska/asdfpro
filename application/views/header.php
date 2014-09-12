<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<link href="<?php echo base_url();?>css/site_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/popups.css" />
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.9.1.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui.min.js" ></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<?php if($page_name=='welcome/home' || $page_name=='') { ?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
		
		$("#uploadNow").on('click',(function(e) {
			e.preventDefault();
			alert('');
			$.ajax({
				url: "user/uploadimage",
				type: "POST",
				data:  new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				success: function(data) {
					$("#targetLayer").html(data);
					alert('');
				},
				error: function() { }
		   });
		}));
	
	});
</script>
<?php } ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/ddsmoothmenu.css" />
<script type="text/javascript" src="<?php echo base_url();?>js/ddsmoothmenu.js"></script>
<script type="text/javascript">
ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
function clearText(field) {
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="<?php echo base_url();?>css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="<?php echo base_url();?>js/slimbox2.js"></script>
<?php if($page_name=='welcome/contactus' || $page_name=='user/signup') { ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>jqtransformplugin/jqtransform.css" />
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>formValidator/validationEngine.jquery.css" /> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/fancyform.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>jqtransformplugin/jquery.jqtransform.js"></script>
	<!-- <script type="text/javascript" src="<?php echo base_url();?>formValidator/jquery.validationEngine.js"></script>-->
	<script type="text/javascript" src="<?php echo base_url();?>js/fancy_script.js"></script>
<?php } ?>
</head>
<body>
<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><a href="http://www.templatemo.com/preview/templatemo_376_secured" rel="nofollow">Secured Theme</a></div>
        <div id="templatemo_search">
            <a href="#" id="popup_window_login" style="color:#771300;" data-popup-target="#login-popup">Login</a> / 
			<a href="<?php echo base_url();?>user/signup" style="color:#771300;" id="popup_window_signup">Register</a>
        </div>
    </div> <!-- END of header -->
<div id="login-popup" class="popup">
    <div class="popup-body">
		<span class="popup-exit"></span>
        <div class="popup-content">
            <h2 class="popup-title">Login</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ullamcorper nulla et gravida interdum. 
			Quisque dignissim a turpis at posuere. Praesent cursus turpis magna, quis pulvinar est vehicula</p>
        </div>
    </div>
</div>
<div class="popup-overlay"></div>