<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Secured Theme by templatemo</title>
<link href="<?php echo base_url();?>css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/popups.css" />
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.9.1.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
	});
</script>
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
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<link rel="stylesheet" href="<?php echo base_url();?>css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="<?php echo base_url();?>js/slimbox2.js"></script>
</head>
<body>
<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><a href="http://www.templatemo.com/preview/templatemo_376_secured" rel="nofollow">Secured Theme</a></div>
        <div id="templatemo_search">
            <a href="#" id="popup_window_login" data-popup-target="#login-popup">Login</a> / <a href="#" id="popup_window_signup" data-popup-target="#signup-popup">Register</a>
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
<div class="popup-overlay"></div>