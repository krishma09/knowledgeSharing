<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from education-html.themerex.net/video-tutorials.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:27:37 GMT -->
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
<title>Privacy | knowledge.com</title>
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

<link href="content/bootstrap.css" rel="stylesheet" />
<script src="scripts/jquery-1.9.1.js"></script>
<script src="scripts/bootstrap.js"></script>



</head>
<body class="page body_style_wide body_filled article_style_boxed template_single-standard top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide">
<div class="body_wrap">
<div class="page_wrap">
<div class="top_panel_fixed_wrap"></div>

<body class="home page body_style_fullscreen body_filled article_style_stretch layout_single-standard top_panel_style_dark top_panel_opacity_transparent top_panel_show top_panel_over menu_right user_menu_show sidebar_hide">
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>
 
<div class="body_wrap">
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
<h4 class="logo_main" alt="">knowledge.com</h4>
<h4 class="logo_fixed" alt="">knowledge.com</h4>
</a>
</div>
 
 
 
 
<a href="#" class="menu_main_responsive_button icon-menu-1"></a>
 
</div>
</div>
 
</header>
 
 
<div class="page_content_wrap">
<div class="content_wrap" >
<div class="content" >

<article class="post_item post_item_single page">
<section class="post_content">


<?php 

include 'conclass.php';
$obj=new conclass();
$res=$obj->getdata("select * from feedback_tbl");
while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
{
	$f_cat=$row["f_cat"];
	$email=$row["fk_email_id"];
	$desc=$row["f_desc"];
	$date=$row["f_date"];
	
	$obj=new conclass();
			$res3=mysql_query("select * from user_tbl where pk_email_id='$email'");
			while($row=MYSQL_fetch_array($res3,MYSQL_ASSOC))
			{
				
				$photo=$row["u_pic"];
				$name=$row["u_name"];
			}

			
			
			
			echo '<a original-title="ahmed" class="question-author-img tooltip-n"><span></span>';
			
			echo '<figure class="sc_image alignleft ">';
			
				echo '<img  height="100px" width="70px"  alt="" src="user_images/'.$photo.'"> ';
			//	echo $email;
	
			echo '</figure>';
			echo '<strong><h6>';
			echo '<a>'.$desc.'</a><br></h6>';
			echo '<div class="post_info" style="font-size:20px">';
			echo '<span class="post_info_item post_info_counters"><span class="glyphicon glyphicon-time"></span>';
			echo '<a class="post_info_date">'.$date.'</a>';
			echo '</span>';
			echo '</div>';
			echo '<br><br><br>';

}

?>






</div>

</section>
</article>
</div>
</div>
</div> 
 </form>
 <footer class="contacts_wrap bg_tint_dark contacts_style_dark">
<div class="content_wrap">
<div class="logo">
<h3 class="logo_main" alt="">knowledge.com</h3>
</div>
<div class="contacts_address">
<address class="address_right">
<h5><a href="viewfeedback.php">Feedback</a></h5>
</address>

<address class="address_left">
<h5><a href="aboutus.php">About Us</a></h5>
</address><br><br><br>
<address class="address_center">
<h5><a href="privacy.php">Privacy Policy</a></h5>
</address>

</div>
<div class="sc_socials sc_socials_size_big">
<div class="sc_socials_item">
<a target="_blank" class="social_icons social_facebook">
<span class="sc_socials_hover social_facebook"></span>
</a>
</div>
<div class="sc_socials_item">
<a target="_blank" class="social_icons social_pinterest">
<span class="sc_socials_hover social_pinterest"></span>
</a>
</div>
<div class="sc_socials_item">
<a target="_blank" class="social_icons social_twitter">
<span class="sc_socials_hover social_twitter"></span>
</a>
</div>
<div class="sc_socials_item">
<a target="_blank" class="social_icons social_gplus">
<span class="sc_socials_hover social_gplus"></span>
</a>
</div>
<div class="sc_socials_item">
<a target="_blank" class="social_icons social_rss">
<span class="sc_socials_hover social_rss"></span>
</a>
</div>
<div class="sc_socials_item">
<a target="_blank" class="social_icons social_dribbble">
<span class="sc_socials_hover social_dribbble"></span>
</a>
</div>
</div>
</div>
</footer>

 
 
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
<script type="text/javascript" src="js/diagram/chart.min.js"></script>
<script type="text/javascript" src="js/core.customizer/front.customizer.min.js"></script>
<script type="text/javascript" src="js/skin.customizer.min.js"></script>
</body>

<!-- Mirrored from education-html.themerex.net/video-tutorials.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:27:44 GMT -->
</html>