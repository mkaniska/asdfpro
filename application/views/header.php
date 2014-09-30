<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<link href="<?php echo base_url();?>css/site_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/ddsmoothmenu.css" />

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/ddsmoothmenu.js"></script>
<script type="text/javascript">
ddsmoothmenu.init({
    mainmenuid: "vision_menu", //menu DIV id
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

<?php if($page_name=='welcome/home' || $page_name=='') { ?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
    });
</script>
<?php } ?>

<?php if($page_name=='welcome/contactus' || $page_name=='user/signup' || $page_name=='user/login' || $menu=='editprofile') { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>jqtransformplugin/jqtransform.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/fancyform.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqtransformplugin/jquery.jqtransform.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/fancy_script.js"></script>
<?php } ?>

<script type="text/javascript" src="<?php echo base_url();?>js/jquery.form.js"></script>
<script type="text/javascript" >
    $(document).ready(function() {
        $('#userImage').live('change', function() {
            $("#view").html('');
            $("#view").html('<img src="http://localhost/asdfpro/images/loading.gif" />');
            $("#contact-form").ajaxForm({target:'#view'}).submit();
            $("#userImage").hide();
            $("#userImageLabel").html('Click here to upload different image');
            $("#userImageLabel").css({'color':'#ff0000'});
        });
    });
</script>

<script type="text/javascript" src="<?php echo base_url();?>js/init.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/check.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/custom.css" />
</head>
<body>
<div id="vision_wrapper">
    <div id="vision_header">
        <div id="site_title"><a href="#" rel="nofollow">Secured Theme</a></div>
        <div id="vision_search">
            <?php if($this->session->userdata('_user_id')=='') { ?>
            <a href="<?php echo base_url();?>user/login" id="loginButton" style="color:#771300;font-size: 11px;"><span>LOGIN</span><em></em></a> / 
            <a href="<?php echo base_url();?>user/signup" style="color:#771300;font-size: 11px;" id="popup_window_signup">SIGNUP</a>
            <?php }else { ?>
            Welcome <?php echo $this->session->userdata('_user_name');?> &nbsp; 
			<a href="<?php echo base_url();?>user/logout" style="color:#771300;font-size: 11px;">Logout</a>
            <?php } ?>
        </div>
    </div> <!-- END of header -->