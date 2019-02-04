<?php 
session_start();
$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:../index.php');	 
 }

$_SESSION["num"]=1;
$_SESSION["mark"]=0;
?>

<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from education-html.themerex.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:26:48 GMT -->
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/x-icon" href="images/favicon.ico"/>
<title>Homepage | knowledge.com</title>
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
</head>
<body class="home page body_style_fullscreen body_filled article_style_stretch layout_single-standard top_panel_style_dark top_panel_opacity_transparent top_panel_show top_panel_over menu_right user_menu_show sidebar_hide">

 
<div class="body_wrap">
<div class="page_wrap">
<div class="top_panel_fixed_wrap"></div>
<header class="top_panel_wrap bg_tint_dark">
 
<div class="menu_user_wrap">
<div class="content_wrap clearfix">
<div class="menu_user_area menu_user_right menu_user_nav_area">
<ul id="menu_user" class="menu_user_nav">

<li class="menu_user_controls">
<a href="#">

<?php 
		$email=$_SESSION["email"];
		
require '../conclass.php';
$obj=new conclass();
$res=$obj->getdata("select * from user_tbl where pk_email_id='$email'");
		
		while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
{
	$uname=$row["u_name"];
	$pic=$row["u_pic"];
}

?>

<span class="user_name"><?php echo $uname;?></span></a>
<ul>
<li><a href="viewprofile.php" class="icon icon-doc-inv">view profile</a></li>
<li><a href="editprofil.php" class="icon icon-cog-1">edit profile</a></li>
<li><a href="changepwd.php" class="icon icon-cog-1">change password</a></li>
</ul>
</li>
<li class="menu_user_logout">
<a href="../logout.php" class="icon icon-logout">Logout</a>
</li>
</ul>
</div>

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
 
 
<div class="search_wrap search_style_regular search_ajax" title="Open/close search form">

</form>
</div>
<div class="search_results widget_area bg_tint_light">

<div class="search_results_content">
</div>
</div>
</div>
 
 
<a href="#" class="menu_main_responsive_button icon-menu-1"></a>
<nav class="menu_main_nav_area">
<ul id="menu_main" class="menu_main_nav">
<li class="menu-item menu-item-has-children current-menu-ancestor current-menu-parent"><a href="index-2.php">Homepage</a>

</li>
<li class="menu-item menu-item-has-children"><a href="#">Tutorial</a>
<ul class="sub-menu">
<li class="menu-item menu-item-has-children"><a href="">Tutorial</a>
<ul class="sub-menu">
<li class="menu-item"><a href="2_data.php">HTML</a></li>
<li class="menu-item"><a href="35_data.php">CSS</a></li>
<li class="menu-item"><a href="55_data.php">JAVASCRIPT</a></li>
<li class="menu-item"><a href="83_data.php">PL/SQL</a></li>
<li class="menu-item"><a href="106_data.php">PHP</a></li>
<li class="menu-item"><a href="136_data.php">BOOTSTRAP</a></li>
<li class="menu-item"><a href="165_data.php">JQUERY</a></li>
<li class="menu-item"><a href="176_data.php">ANGULARJS</a></li>
<li class="menu-item"><a href="196_data.php">C</a></li>
<li class="menu-item"><a href="226_data.php">C++</a></li>
<li class="menu-item"><a href="257_data.php">NODE.JS</a></li>
<li class="menu-item"><a href="275_data.php">VB.NET</a></li>
<li class="menu-item"><a href="300_data.php">ASP.NET</a></li>
<li class="menu-item"><a href="348_data.php">UNIX</a></li>
<li class="menu-item"><a href="360_data.php">DCN</a></li>
<li class="menu-item"><a href="490_data.php">ANGULAR2</a></li>
<li class="menu-item"><a href="368_data.php">AJAX</a></li>
<li class="menu-item"><a href="396_data.php">WORDPRESS</a></li>
<li class="menu-item"><a href="423_data.php">JOOMLA</a></li>
<li class="menu-item"><a href="438_data.php">JAVA</a></li>
<li class="menu-item"><a href="332_data.php">OS</a></li>
</ul>

</li>
<li class="menu-item"><a href="videotutorial.php">Video Tutorials</a></li>
</ul>
</li>
<li class="menu-item menu-item-has-children"><a href="">Question-Answer</a>
<ul class="sub-menu">
<li class="menu-item"><a href="addque.php">Ask Question</a></li>
<li class="menu-item"><a href="que-ans.php">View Questions-Answers</a></li>
<li class="menu-item"><a href="myque.php">View MyQuestions</a></li>
<li class="menu-item"><a href="myans.php">View MyAnswers</a></li>
</ul>

</li>
<li class="menu-item menu-item-has-children"><a href="disforum.php">Discussion forum</a>

</li>
<li class="menu-item menu-item-has-children"><a href="">Test</a>
<ul class="sub-menu">
<?php //include 'conclass.php';
$obj=new conclass();

		$res=$obj->getdata("select * from category_tbl");
		$obj1=new conclass();

		while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
		{
			echo '<li class="menu-item"><a href="test.php?id='.$row["pk_cat_id"].'">'.$row["cat_name"];
			echo '</a>
				<li>';

		}
?>

</ul>

</li>

<li class="menu-item menu-item-has-children"><a href="feedback.php">Feedback</a>

</li>
</ul>
</nav>
 
</div>
</div>
 
</header>
 
<section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_education_home_slider">
<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
<div id="rev_slider_1_1" class="rev_slider fullwidthabanner disp_none height_630 max-height_630">
<ul>
 
<li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
<img src="images/green.jpg" alt="green" data-bgposition="center top" data-bgfit="normal" data-bgrepeat="repeat">
<div class="tp-caption customin stl cust-z-index-5 rs-cust-style8" data-x="20" data-y="230" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="1300" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8250" data-endspeed="300">
<img src="images/slide-1-1.png" alt="">
</div>
<div class="tp-caption title sfr stl tp-resizeme cust-z-index-6 rs-cust-style1" data-x="570" data-y="190" data-speed="500" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8400" data-endspeed="300">Take great courses from the world's best universities
</div>
<div class="tp-caption slide_text sfr stl tp-resizeme cust-z-index-7 rs-cust-style2" data-x="570" data-y="380" data-speed="500" data-start="1750" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8500" data-endspeed="300">
<span class="font-w_400">Our courses are built in partnership with technology leaders and are relevant to industry needs.</span>
</div>
</li>
 
<li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
<img src="images/green.jpg" alt="blue" data-bgposition="center top" data-bgfit="normal" data-bgrepeat="repeat">
<div class="tp-caption customin stl cust-z-index-5 rs-cust-style8" data-x="40" data-y="200" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:360;scaleX:0.1;scaleY:0.1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" data-speed="1300" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8250" data-endspeed="300">
<img src="images/slide-2-1.png" alt="">
</div>
<div class="tp-caption title sfb stb tp-resizeme cust-z-index-6 rs-cust-style1" data-x="570" data-y="200" data-speed="500" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8400" data-endspeed="300">Education Center
<br> and distance education
</div>
<div class="tp-caption slide_text sfb stb tp-resizeme cust-z-index-7 rs-cust-style2" data-x="570" data-y="355" data-speed="500" data-start="1750" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8500" data-endspeed="300">
<span class="font-w_400">Online Education leads the world in distance education with high quality online degrees and online courses.</span>
</div>
</li>
 
<li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">
<img src="images/green.jpg" alt="yellow" data-bgposition="center top" data-bgfit="normal" data-bgrepeat="repeat">
<div class="tp-caption roundedimage sfl stl cust-z-index-5 rs-cust-style8" data-x="50" data-y="200" data-speed="1300" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8250" data-endspeed="300">
<img src="images/slide-3-1.jpg" alt="">
</div>
<div class="tp-caption title customin stb tp-resizeme cust-z-index-6 rs-cust-style1" data-x="570" data-y="200" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="500" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8400" data-endspeed="300">Receive personalized
<br> coaching
</div>
<div class="tp-caption slide_text customin stb tp-resizeme cust-z-index-7 rs-cust-style2" data-x="570" data-y="355" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="500" data-start="1750" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8500" data-endspeed="300">
<span class="font-w_400">Learning is a collaborative process, and we're here to provide you with guidance every step of the way.</span>
</div>
</li>
</ul>
<div class="tp-bannertimer"></div>
</div>
</div>
</section>
  
 

<div class="page_content_wrap">
<div class="content">
<article class="post_item post_item_single page">
<section class="post_content">
 
 
 <div class="sc_section accent_top bg_tint_light sc_bg1" data-animation="animated fadeInUp normal">
<div class="sc_section_overlay">
<div class="sc_section_content">
<div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp">
<h2 class="sc_title sc_title_regular sc_align_center margin_top_0 margin_bottom_085em text_center">Features</h2>
<div class="sc_blogger layout_courses_3 template_portfolio sc_blogger_horizontal no_description">
<div class="isotope_wrap" data-columns="2">

 
<div class="sc_section" data-animation="animated zoomIn normal">
<div class="sc_content content_wrap margin_top_3em_imp margin_bottom_3em_imp sc_features_st1">
<div class="columns_wrap sc_columns columns_fluid sc_columns_count_3">
<div class="column-1_3 sc_column_item sc_column_item_1 odd first text_center">
<a href="#" class="sc_icon icon-woman-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em"></a>
<div class="sc_section font-w_400 margin_top_1em_imp">
<p>
<a class="menu_color" href="#">Take computer science courses<br/>
with personalized support</a>
</p>
</div>
</div>
<div class="column-1_3 sc_column_item sc_column_item_2 even text_center">
<a href="#" class="sc_icon icon-rocket-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em"></a>
<div class="sc_section font-w_400 margin_top_1em_imp">
<p>
<a class="menu_color" href="#">Build cool projects<br/>
to showcase your skills</a>
</p>
</div>
</div>
<div class="column-1_3 sc_column_item sc_column_item_3 odd text_center">
<a href="#" class="sc_icon icon-world-2 sc_icon_bg_menu menu_dark_color font_5em lh_1em"></a>
<div class="sc_section font-w_400 margin_top_1em_imp">
<p>
<a class="menu_color" href="#">Earn certificates<br/>
recognized by Industry</a>
</p>
</div>
</div>
</div>
</div>
</div>
 
 
<div class="isotope_item isotope_item_courses isotope_column_2">
<div class="post_item post_item_courses even">
<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
<div class="post_featured img">
<a href="paid-course.html">
<img alt="Entrepreneurship 101: Who is your customer?" src="images/masonry_06-400x400.jpg">
</a>
<h2 class="post_title" style="padding-left:80px; padding-top:40px;">
<a href="videotutorial.php">Tutorial</a>
</h2>
</div>
<div class="post_info_wrap info">
<div class="info-back">
<h2 class="post_title" style="font-size:50px;">
<a href="videotutorial.php">Tutorial</a>
</h2>
<h1 class="post_title" style="padding-left:160px; padding-top:30px;" >

<div class="post_descr">
<p style="font-size:30px;">
<a href="videotutorial.php">ask your questions and get thier answers...</a>
</p>
<div class="post_buttons">
<div class="post_button">
<a href="videotutorial.php" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
 
 
<div class="isotope_item isotope_item_courses isotope_column_2">
<div class="post_item post_item_courses even">
<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
<div class="post_featured img">
<a href="paid-course.html">
<img alt="Entrepreneurship 101: Who is your customer?" src="images/masonry_06-400x400.jpg">
</a>
<h2 class="post_title" style="padding-left:80px; padding-top:40px;">
<a href="que-ans.php">Question-Answer</a>
</h2>
</div>
<div class="post_info_wrap info">
<div class="info-back">
<h2 class="post_title" style="font-size:50px;">
<a href="que-ans.php">Question-Answer</a>
</h2>
<div class="post_descr">
<p style="font-size:30px;">
<a href="que-ans.php">ask your questions and get thier answers...</a>
</p>
<div class="post_buttons">
<div class="post_button">
<a href="que-ans.php" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
 
 
<div class="isotope_item isotope_item_courses isotope_column_2">
<div class="post_item post_item_courses odd">
<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
<div class="post_featured img">
<a href="free-course.html">
<img alt="Evaluating Social  Programs" src="images/masonry_04-400x400.jpg">
</a>
<h2 class="post_title" style="padding-left:80px; padding-top:40px;">
<a href="disforum.php">Discussion Forum</a>
</h2>
</div>
<div class="post_info_wrap info">
<div class="info-back">
<h2 class="post_title" style="font-size:50px;">
<a href="disforum.php">Discussion Forum</a>
</h2>
<div class="post_descr">
<p style="font-size:30px;">
<a href="#">Nunc finibus vestibulum dui a fringilla. Maecenas maximus in massa sit amet maximus.</a>
</p>
<div class="post_buttons">
<div class="post_button">
<a href="disforum.php" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 
 
<div class="isotope_item isotope_item_courses isotope_column_2">
<div class="post_item post_item_courses even">
<div class="post_content isotope_item_content ih-item colored square effect_dir left_to_right">
<div class="post_featured img">
<a href="test.php">
<img alt="Principles of Written English, Part 1" src="images/masonry_05-400x400.jpg">
</a>
<h1 class="post_title" style="padding-left:200px; padding-top:40px;">
<a href="">Test</a>
</h1>
</div>
<div class="post_info_wrap info">
<div class="info-back">
<h1 class="post_title" style="font-size:50px;">
<a href="">Test</a>
</h1>
<div class="post_descr">
<p style="font-size:30px;">
<a href="">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</a>
</p>
<div class="post_buttons">
<div class="post_button">
<a href="" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small">LEARN MORE</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 
 
<a href="courses-streampage.html" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_menu sc_button_size_small aligncenter sc_button_iconed icon-graduation margin_top_1em margin_bottom_4 widht_12em">VIEW ALL COURSES</a>
</div>
</div>
</div>
</div>
 
 
<div class="sc_section" data-animation="animated fadeInUp normal">
<div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp">
<div class="sc_section aligncenter width_70per">
<h2 class="sc_title sc_title_regular margin_top_0">Learn From the Best</h2>
<p>Our online courses are built in partnership with technology leaders and are relevant to industry needs.
<br/> Upon completing a Online course, you&#8217;ll receive a verified completion certificate recognized by industry leaders.
</p>
</div>
<div id="sc_section_4" class="sc_section margin_top_1_5em_imp margin_bottom_0_imp height_75">
<div id="sc_section_4_scroll" class="sc_scroll sc_scroll_horizontal swiper-slider-container scroll-container height_75">
<div class="sc_scroll_wrapper swiper-wrapper">
<div class="sc_scroll_slide swiper-slide">
<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp">
<img src="images/partners_01_bw.jpg" alt=""/>
</figure>
<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp">
<img src="images/partners_02_bw.jpg" alt=""/>
</figure>
<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp">
<img src="images/partners_03_bw.jpg" alt=""/>
</figure>
<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp">
<img src="images/partners_04_bw.jpg" alt=""/>
</figure>
<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp">
<img src="images/partners_05_bw.jpg" alt=""/>
</figure>
<figure class="sc_image  alignleft sc_image_shape_square margin_right_0_imp margin_left_4em_imp">
<img src="images/partners_06_bw.jpg" alt=""/>
</figure>
</div>
</div>
<div id="sc_section_4_scroll_bar" class="sc_scroll_bar sc_scroll_bar_horizontal sc_section_471175375_scroll_bar"></div>
</div>
</div>
</div>
</div>
 
 
<div class="sc_line sc_line_style_solid margin_top_0 margin_bottom_0"></div>
<div class="sc_section" data-animation="animated fadeInUp normal">
<div class="sc_content content_wrap margin_top_2_5em_imp margin_bottom_2_5em_imp ">
<div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
<div class="column-1_2 sc_column_item sc_column_item_1 odd first res_width_100per_imp">
<h3 class="sc_title sc_title_iconed sc_align_left text_left">
<span class="sc_title_icon sc_title_icon_top sc_title_icon_medium icon-video-2"></span>
Our Video Training for Microsoft products and technologies
</h3>
<p>Mauris vitae quam ligula. In tincidunt sapien sed nibh scelerisque congue. Maecenas ut libero eu metus tincidunt lobortis. Duis accumsan at mauris vel lacinia.</p>

</div>
<div class="column-1_2 sc_column_item sc_column_item_2 even res_width_100per_imp">
<div class="sc_video_player sc_video_bordered sc_video_st1">
<div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play width_100per" data-width="100%" data-height="647" data-video="&lt;iframe class=&quot;video_frame&quot; src=_http_/youtube.com/embed/636Dp8eHWnM5782.html?autoplay=1%22 width=&quot;100%&quot; height=&quot;647&quot; frameborder=&quot;0&quot; webkitAllowFullScreen=&quot;webkitAllowFullScreen&quot; mozallowfullscreen=&quot;mozallowfullscreen&quot; allowFullScreen=&quot;allowFullScreen&quot;&gt;&lt;/iframe&gt;">
<img alt="" src="images/douglas_adams_full-400x225.jpg">
</div>
</div>
</div>
</div>
</div>
</div>
 
 
 
</section>
</article>
</div>
</div>
 
 
 
 
<footer class="testimonials_wrap sc_section bg_tint_dark post_ts_bg3">
<div class="sc_section_overlay" data-bg_color="#1eaace" data-overlay="0">
<div class="content_wrap">
 
<div class="sc_testimonials sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_height_fixed aligncenter height_12em width_100per" data-old-height="12em" data-interval="7000">
<div class="slides swiper-wrapper">
<div class="swiper-slide height_12em width_100per" data-style="width:100%;height:12em;">
<div class="sc_testimonial_item">
<div class="sc_testimonial_avatar">
<img alt="" src="images/IMG-20160524-WA0011 (2).jpg"></div>
<div class="sc_testimonial_content">
<p>Thank you for all your help and assistance over the years with our products.
<br/> I would have no hesitation in recommending you to my clients.</p>
</div>

<h5>Shivani Shah</h5>

</div>
</div>
<div class="swiper-slide height_12em width_100per" data-style="width:100%;height:12em;">
<div class="sc_testimonial_item">
<div class="sc_testimonial_avatar">
<img alt="" src="images/IMG_3634 (2).jpg"></div>
<div class="sc_testimonial_content">
<p>Thank you for all your help and assistance over the years with our products.
<br/> I would have no hesitation in recommending you to my clients.</p>
</div>

<h5>Krishma Bagadia<h5>

</div>
</div>

<div class="swiper-slide height_12em width_100per" data-style="width:100%;height:12em;">
<div class="sc_testimonial_item">
<div class="sc_testimonial_avatar">
<img alt="" src="images/IMG_3627 (2).jpg"></div>
<div class="sc_testimonial_content">
<p>Thank you for all your help and assistance over the years with our products.
<br/> I would have no hesitation in recommending you to my clients.</p>
</div>

<h5>Palak Darji<h5>

</div>
</div>

</div>
<div class="sc_slider_controls_wrap">
<a class="sc_slider_prev" href="#"></a>
<a class="sc_slider_next" href="#"></a>
</div>
</div>
 
</div>
</div>
</footer>
 
 
<footer class="contacts_wrap bg_tint_dark contacts_style_dark">
<div class="content_wrap">
<div class="logo">
<h2 class="logo_main" alt="">knowledge.com</h2>
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
<a  target="_blank" class="social_icons social_facebook">
<span class="sc_socials_hover social_facebook"></span>
</a>
</div>
<div class="sc_socials_item">
<a  target="_blank" class="social_icons social_pinterest">
<span class="sc_socials_hover social_pinterest"></span>
</a>
</div>
<div class="sc_socials_item">
<a  target="_blank" class="social_icons social_twitter">
<span class="sc_socials_hover social_twitter"></span>
</a>
</div>
<div class="sc_socials_item">
<a  target="_blank" class="social_icons social_gplus">
<span class="sc_socials_hover social_gplus"></span>
</a>
</div>
<div class="sc_socials_item">
<a target="_blank" class="social_icons social_rss">
<span class="sc_socials_hover social_rss"></span>
</a>
</div>
<div class="sc_socials_item">
<a  target="_blank" class="social_icons social_dribbble">
<span class="sc_socials_hover social_dribbble"></span>
</a>
</div>
</div>
</div>
</footer>
 
 
 
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

<!-- Mirrored from education-html.themerex.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Mar 2017 03:26:48 GMT -->
</html>