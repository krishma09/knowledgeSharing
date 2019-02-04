<?php 
session_start();
$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:../index.php');	 
 }

?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from education-html.themerex.net/video-tutorials.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:27:37 GMT -->
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../content/bootstrap.css" rel="stylesheet" />
<script src="../scripts/jquery-1.9.1.js"></script>
<script src="../scripts/bootstrap.js"></script>

<link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
<title>Edit Profile | knowledge.com</title>
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
<link rel="stylesheet" href="css/custom-style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"/>
<link rel="stylesheet" href="css/skins/skin-responsive.css" type="text/css" media="all"/>
</head>
<body class="page body_style_wide body_filled article_style_boxed template_single-standard top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_show sidebar_right">
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
  
<div class="body_wrap">
<div class="page_wrap">
<div class="top_panel_fixed_wrap"></div>

<?php include 'userheader.php'; ?> 
<div class="page_content_wrap">
<div class="content_wrap" style=" padding-left:200px;">
<div class="content" style=" padding-right:0px;">

<article class="post_item post_item_single page">
<section class="post_content">
<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">

<strong style="font-size:20px;">    <h3 style="text-align:center;">Edit Profile</h3></strong>
<br>
<div class="container" style="text-align:left;">
<?php

$obj=new conclass();
$res=$obj->getdata("select * from user_tbl where pk_email_id='$email'");
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
{
	$u_name=$row["u_name"];
	$u_gender=$row["u_gender"];
	$u_city=$row["u_city"];
	$u_pic=$row["u_pic"];
}

?>

<form method="post" action="editprofile1.php?photo=<?php echo $u_pic; ?>" enctype="multipart/form-data">
  	
	<div class="row">
      <!-- left column -->
      <div class="col-md-7">
        <div class="text-center">
          <img src="../user_images/<?php echo $u_pic ;?>" style="text-align:center;" height="200" width="150" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
        <center><input type="file" name="txtfile" value="change profile photo"></center>
        </div>
       <br><br>
<strong style="font-size:20px;">        
        <form class="form-horizontal" role="form">
		<div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
				<label class=" control-label"><?php echo $email ;?></label>
			</div>
          </div>
		  <br><br>
          
          <div class="form-group">
            <label class="col-lg-3 control-label"> Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="u_name" value="<?php echo $u_name ;?>" required>
            </div>
          </div>
		  <br><br>
          <div class="form-group">
            <label class="col-lg-3 control-label">City:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" name="u_city" class="form-control">
  
  <option value="ahmedabad" <?php if($u_city=="ahmedabad") echo"selected";?>> Ahemedabad</option>
  <option value="baroda" <?php if($u_city=="baroda") echo"selected";?>> baroda</option>
  
  <option value="rajkot" <?php if($u_city=="rajkot") echo"selected";?>>Rajkot </option>
  <option value="vadodara" <?php if($u_city=="vadodara") echo"selected";?>>Vadodara </option>
  <option value="bhavnagar" <?php if($u_city=="bhavnagar") echo"selected";?>>Bhavnagar </option>
  
				
				</select>
              </div>
            </div>
          </div>
		  <br><br>
		  <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
              <input type="radio" name="u_gender" value="Female" <?php if($u_gender=="Female") echo "checked"; ?>>Female
			  <input type="radio" name="u_gender" value="Male" <?php if($u_gender=="Male") echo "checked"; ?>>Male<br><br>
            </div>
          </div>
		  </div>
         <br><br><br>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
			<br><br>
            <div class="col-md-8">  <button type="submit" name="addque" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Save Changes</a>

            </div>
          </div>
        </form>
		</strong>
      </div>
  </div>
</div>




</div>

</section>
</article>
</div>
</div>
</div> 
 </form>
 
 
 

 
<?php include 'userfooter.php'; ?>  
 
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
<script type="text/javascript" src="js/superfish.min.js"></script>
<script type="text/javascript" src="js/jquery.slidemenu.min.js"></script>
<script type="text/javascript" src="js/mediaelement/mediaelement-and-player.min.js"></script>
<script type="text/javascript" src="js/mediaelement/wp-mediaelement.min.js"></script>
<script type="text/javascript" src="js/core.messages/core.messages.min.js"></script>
<script type="text/javascript" src="js/swiper/idangerous.swiper-2.7.min.js"></script>
<script type="text/javascript" src="js/swiper/idangerous.swiper.scrollbar-2.4.min.js"></script>
<script type="text/javascript" src="js/prettyPhoto/jquery.prettyPhoto.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/core.googlemap.min.js"></script>
<script type="text/javascript" src="js/diagram/chart.min.js"></script>
<script type="text/javascript" src="js/core.customizer/front.customizer.min.js"></script>
<script type="text/javascript" src="js/skin.customizer.min.js"></script>
</body>

<!-- Mirrored from education-html.themerex.net/shortcodes.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:27:37 GMT -->
</html>