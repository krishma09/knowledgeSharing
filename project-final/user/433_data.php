<?php 
session_start();
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
<title>JOOMLA Tutorials | knowledge.com</title>
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
<div class="content_wrap">
 
<div class="content">


<article class="post_item post_item_single page">
<section class="post_content">
<?php 
	$sid=433;
	$obj=new conclass();
	$res=$obj->getdata("select * from subcat_tbl where pk_s_id='$sid'");
		
		while($row=MYSQL_fetch_array($res,MYSQL_ASSOC))
		{
			$sname=$row["s_name"];
			$desc1=$row["s_desc1"];
			$desc2=$row["s_desc2"];
			$desc3=$row["s_desc3"];
		}
?>



<h3 class="widget_title" style="text-align:center"><?php echo $sname;?></h3>
 <strong style="font-size:20px;">
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<p>In this chapter, we will study about menus present in the Help Menu in Joomla. Click on <b>Help</b>, a dropdown menu as shown below will be displayed −</p>
<img src="images/joomla-helpmenu-menu.jpg" alt="joomla Help Menu">
<h4>Joomla Help</h4>
<p>This Help page guides the user to create Joomla website.</p>
<p>Click <b>Help</b> → <b>Joomla Help</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-helpmenu-joomlahelp.jpg" alt="joomla Help Menu">
<img src="images/joomla-helpmenu-joomlahelp.jpg" alt="joomla Help Menu">
<h4>Official Support Forum</h4>
<p>Official Support Forum helps in supporting the exchange of ideas and views officially in Joomla.</p>
<p>Click <b>Help</b> → <b>Official Support Forum</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-helpmenu-officialsupporforum.jpg" alt="joomla Help Menu">
<h4>Documentation Wiki</h4>
<p>The Documentation Wiki is used for formatting the content of articles, cross linking pages and creating the documentation of Wiki template by themselves.</p>
<p>Click <b>Help</b> → <b>Documentation Wiki</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-helpmenu-documentationwiki.jpg" alt="joomla Help Menu">
<h4>Joomla Extensions</h4>
<p>Joomla extension extends the functionality of Joomla websites. In this Joomla extension page there are many extensions available to apply on Joomla websites.</p>
<p>Click <b>Help</b> → <b>Joomla Extensions</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-helpmenu-joomlaextension.jpg" alt="joomla Help Menu">
<h4>Joomla! Translations</h4>
<p>Joomla translations help in translation of language in Joomla core files. It helps in documentation and screens along with other tasks to meet the need of diverse language community.</p>
<p>Click <b>Help</b> → <b>Joomla Translations</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-helpmenu-joomlatranslations.jpg" alt="joomla Help Menu">
<h4>Joomla Resources</h4>
<p>Joomla Resources help in locating the professional service providers. It helps the users to connect and do many more things in the Joomla CMS.</p>
<p>Click <b>Help</b> → <b>Joomla Resources</b>, a screen as shown below will get displayed.</p>

<img src="images/joomla-helpmenu-joomlaresources.jpg" alt="joomla Help Menu">
<h4>Community Portal</h4>
<p>Community Portal helps in bringing Joomla news from all over the world at one place.</p>
<p>Click <b>Help</b> → <b>Community Portal</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-helpmenu-communityportal.jpg" alt="joomla Help Menu">
<h4>Security Center</h4>
<p>Security Center helps in providing a public presence for security issues. It helps to detect a problem or service attack.</p>
<p>Click <b>Help</b> → <b>Security Center</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-helpmenu-securitycenter.jpg" alt="joomla Help Menu">
<h4>Developer Resources</h4>
<p>Developer Resources helps in providing resources for the users who are willing to build or maintain software based on the Joomla platform.</p>
<p>Click <b>Help</b> → <b>Developer Resources</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-helpmenu-developerresources.jpg" alt="joomla Help Menu">
<h4>Joomla Shop</h4>
<p>Joomla shop helps the user to shop maximum number of products related to Joomla, when you click on a particular product then you will get the brief description about that product where users can read and buy it.</p>
<p>Click <b>Help</b> → <b>Joomla Shop</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-helpmenu-joomlashop.jpg" alt="joomla Help Menu">


<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="432_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="434_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'joomla_header.php'; ?></aside>
 
  
</div>
 
</div>
</div>
 
 

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