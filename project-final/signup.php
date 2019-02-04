<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from education-html.themerex.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:23:54 GMT -->
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
<title>SignUp | Education Center</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.3.1" type="text/css" media="all"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" type="text/css" media="all"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister:400&amp;subset=latin" type="text/css" media="all"/>
<link rel="stylesheet" href="css/fontello/css/fontello.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/rs-plugin/settings.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/woocommerce/woocommerce-layout.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/woocommerce/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)"/>
<link rel="stylesheet" href="css/woocommerce/woocommerce.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/shortcodes.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/core.animation.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/tribe-style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/skins/skin.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/core.portfolio.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/mediaelement/mediaelementplayer.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/mediaelement/wp-mediaelement.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/core.customizer/front.customizer.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/core.messages/core.messages.css" type="text/css" media="all"/>
<link rel="stylesheet" href="js/swiper/idangerous.swiper.min.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/skins/skin-responsive.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/slider-style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/custom-style.css" type="text/css" media="all"/>

<link href="Content/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.dataTables_themeroller.css" rel="stylesheet">
    <link href="css/endless.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="js/jquery-1.10.2.min.js"></script>
  <script src="Scripts/bootstrap.min.js"></script>
  <script src='js/jquery.dataTables.min.js'></script>


<script type="text/javascript">



function userid_validation(uid,mx,my)
{
	var ul=uid.value.length;
		if(ul==0 || ul>=my || ul<mx)
	{
		alert("username should not be empty/length must be between "+mx+" to "+my);
		uid.focus();
		return false;
	}
	return true;
}
function passid_validation(passid,mx,my)
{
	var pl=passid.value.length;
	if(pl==0 || pl>=my || pl<mx)
	{
		alert("password should not be empty/length must be between "+mx+" to "+my);
		passid.focus();
		return false;
	}
	return true;
}


</script>
</head>
<body  class="page body_style_wide body_filled article_style_boxed template_single-standard top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide">
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
 
<div class="body_wrap" >
<div class="page_wrap">
<div class="top_panel_fixed_wrap"></div>
<header class="top_panel_wrap bg_tint_dark">
 
<div class="menu_user_wrap">
<div class="content_wrap clearfix">
<div class="menu_user_area menu_user_left menu_user_contact_area"></a></div>
</div>
</div>
 
 
<div class="menu_main_wrap logo_left">
<div class="content_wrap clearfix">
 
<div class="logo">
<a href="index-2.php">
<h2 class="logo_main" alt="">knowledge.com</h2>
<h3 class="logo_fixed" alt="">knowledge.com</h3>
</a>
</div>
 
 
 
 
<a href="#" class="menu_main_responsive_button icon-menu-1"></a>
 
</div>
</div>
 
</header>
 
 
 
 
 
<?php 
if(isset($_POST["btnsubmit"]))
{
	include 'conclass.php';
	$email=$_POST["email"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$cnfpassword=$_POST["confirmpassword"];
	$city=$_POST["city"];
	$photo="user_images/".$_FILES["txtimg"]["name"];
	move_uploaded_file($_FILES["txtimg"]["tmp_name"],$photo);
	$photo1=$_FILES["txtimg"]["name"];
	$gender=$_POST["gender"];
	$type="user";
	$obj=new conclass();
	$res=$obj->getdata("insert into user_tbl values('$username','$email','$password','$gender','$city','$photo1','$type')");
	if ($res==1 and $cnfpassword==$password)
	{
		header('location:index.php');
	}
	else
	{
		echo "Something went wrong";
	}
}
?>

<br>
<form action="signup.php" enctype="multipart/form-data" method="post" name="form1">
    
 
	<div class="container">
	<div class="col-md-3">
	</div>

	<div class="col-md-6">
		<div class="panel panel-default">
  <div class="panel-body">
	<center><h1>SignUp Form</h1><h4>Welcome to knowledge.com !!</h4> </center>
	<br>
	<div class="form-group">
    <label for="username"><font color="000080">User Name</label>
    <input type="text" class="form-control" name="username" placeholder="User Name" 
	onblur="return userid_validation(document.form1.username,5,12);" required />
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Email" required />
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password"
	onblur="return passid_validation(document.form1.password,5,12);" required />
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required />
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <select class="form-control" name="city">
	
	<option>ahmedabad</option>
	<option>baroda</option>
	<option>surat</option>
	<option>rajkot</option>
	<option>bhavnagar</option>
	<option>delhi</option>
	
	</select>

  </div>
  
    <div class="input-group">
      <label for="gender">Gender</label>
	  <br>
        <input type="radio" name="gender" value="Male" checked>Male
      <input type="radio" name="gender" value="Female">Female
     </div>
  
  <br>
  <div class="form-group">
    <label for="profile">Profile Photo</label>
    <input type="file" name="txtimg">
    
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="captcha" placeholder="Captcha Code" required /><br>
	<img src="captcha.php" />
  </div>

  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember Me
		</label>
  </div>
  <center>
  <button type="submit" name="btnsubmit" class="btn btn-success">Submit</button>
  </center>
   </div>
</div>
</font>
</form>
</div>
<div class="col-md-3">
</div>
</div>
 
 
 
 
 
 
 
<a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>
<div class="custom_html_section"></div>
<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/core.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/widget.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/tabs.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/accordion.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/effect.min.js"></script>
<script type="text/javascript" src="js/jquery/ui/effect-fade.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.blockUI.min.js"></script>
<script type="text/javascript" src="js/jquery/jquery.cookie.min.js"></script>
<script type="text/javascript" src="js/global.min.js"></script>
<script type="text/javascript" src="js/core.utils.min.js"></script>
<script type="text/javascript" src="js/core.init.min.js"></script>
<script type="text/javascript" src="js/shortcodes/shortcodes.min.js"></script>
<script type="text/javascript" src="js/rs-plugin/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/rs-plugin/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/slider_init.js"></script>
<script type="text/javascript" src="js/superfish.min.js"></script>
<script type="text/javascript" src="js/jquery.slidemenu.min.js"></script>
<script type="text/javascript" src="js/mediaelement/mediaelement-and-player.min.js"></script>
<script type="text/javascript" src="js/mediaelement/wp-mediaelement.min.js"></script>
<script type="text/javascript" src="js/core.messages/core.messages.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/hover/jquery.hoverdir.min.js"></script>
<script type="text/javascript" src="js/prettyPhoto/jquery.prettyPhoto.min.js"></script>
<script type="text/javascript" src="js/swiper/idangerous.swiper-2.7.min.js"></script>
<script type="text/javascript" src="js/swiper/idangerous.swiper.scrollbar-2.4.min.js"></script>
<script type="text/javascript" src="js/diagram/chart.min.js"></script>
<script type="text/javascript" src="js/core.customizer/front.customizer.min.js"></script>
<script type="text/javascript" src="js/skin.customizer.min.js"></script>
</body>

<!-- Mirrored from education-html.themerex.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:24:53 GMT -->
</html>