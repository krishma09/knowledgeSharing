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
<title>WORDPRESS Tutorials | knowledge.com</title>
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
	$sid=408;
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

<p>In this chapter, we will study how to use plugins in your WordPress site. Plugin allows to easily modify, customize or enhance WordPress blog or post. The WordPress Plugin is a software that can be uploaded to expand the functionality of the site. They add services or features to WordPress blog. Plugins are used to make your work easier. Following are the simple steps to add plugins.</p>
<p><b>Step (1)</b> − On the left side bar, Click on <b>Plugins → Installed Plugins</b> as shown in the screen.</p>
<img src="images/wordpress-plugin-settings-step1.jpg" alt="Wordpress Plugin Settings">
<p><b>Step (2)</b> − The following page appears.</p>
<img src="images/wordpress-plugin-settings-step2.jpg" alt="Wordpress Plugin Settings">
<p>In this section, you can view the already installed plugins.</p>
<p><b>Step (3)</b> − Click on → <b>Plugins → Add New</b> menu as shown in the following screen.</p>
<img src="images/wordpress-plugin-settings-step3.jpg" alt="Wordpress Plugin Settings">
<p><b>Step (4)</b> − A list of plugins appears that are used in WordPress. Here you can directly install plugins from the available list or you can upload it by clicking on <b>Upload Plugin</b>.</p>
<img src="images/wordpress-plugin-settings-step4.jpg" alt="Wordpress Plugin Settings">
<p>When you click on Upload Plugin you'll get the following page.</p>
<img src="images/wordpress-plugin-settings-step4(a).jpg" alt="Wordpress Plugin Settings">
<p>Click on <b>Browse</b>, it goes back to the page where you can select plugins from WordPress site. And if you click on <b>Choose File</b>, you can add files from your system. Otherwise, you can directly choose the plugin that you need and click on <b>Install now</b> as seen in the following screenshot.</p>
<img src="images//wordpress-plugin-settings-step4(b).jpg" alt="Wordpress Plugin Settings">
<p>When you click on Install Now, the package starts to download and gets installed. Then, click on <b>Activate plugin</b> to active that plugin to use in WordPress as seen in the following screen.</p>
<img src="images/wordpress-plugin-settings-step4(c).jpg" alt="Wordpress Plugin Settings">
<p>After clicking on Activate Plugin you'll get a message as <i>Plugin activated</i> and you can also find the installed plugin in the list.</p>
<img src="images/wordpress-plugin-settings-step4(d).jpg" alt="Wordpress Plugin Settings">
<p>Below the <i>plugin activated</i> message, you can view few options such as <b>All, Active, Inactive</b> and <b>Update available</b>.</p>
<p>When you click on <b>Active</b> the following page appears. Here you can view all the activated plugins.</p>
<img src="images/wordpress-plugin-settings-step4(e).jpg" alt="Wordpress Plugin Settings">
<p>When we click on <b>Inactive</b>, the plugins which are available but are not activated gets displayed. You can activate this plugin by clicking on <b>Activate</b>.</p>
<img src="images/wordpress-plugin-settings-step4(f).jpg" alt="Wordpress Plugin Settings">
<p>When you click on <b>Update available</b>, you'll get a list of plugins that must be updated. Click on <b>Update</b> and you get a message as <i>Updated</i>.</p>
<img src="images/wordpress-plugin-settings-step4(g).jpg" alt="Wordpress Plugin Settings">
<p>Click on <b>Bulk Actions</b> and select any of the options. Click on <b>Apply</b> button to <b>update, delete, activate</b> or <b>deactivate</b> each of the plugins by checking the boxes.</p>
<img src="images/wordpress-plugin-settings-step4(h).jpg" alt="Wordpress Plugin Settings">
<p>In <b>Search Installed Plugins</b> you can just type your plugin name in the text box that is already installed and click on the <b>Search Installed Plugins</b> button.</p>
<img src="images/wordpress-plugin-settings-step4(i).jpg" alt="Wordpress Plugin Settings">
<p>When you click on the <b>Search installed Plugin</b> button you get the following page with your respective plugin.</p>
<img src="images/wordpress-plugin-settings-step4(j).jpg" alt="Wordpress Plugin Settings">
<p><b>Step (5)</b> − Click on <b>Plugins → Editor</b> from the side bar.</p>
<img src="images/wordpress-plugin-settings-step5.jpg" alt="Wordpress Plugin Settings">
<p><b>Step (6)</b> − The following page gets displayed.</p>
<img src="images/wordpress-plugin-settings-step6.jpg" alt="Wordpress Plugin Settings">
<p>This page lets you edit your plugins. A few options are explained.</p>
<ul class="list">
<li><p><b>Select plugin to edit</b> − Allows you to select a plugin from the dropdown and edit it.</p></li>
<li><p><b>Documentation</b> − Allows you to select the tools from the dropdown to edit the plugin.</p></li>
<li><p><b>Plugin files</b> − Allows you to select files from the list and edit accordingly.</p></li>
</ul>
<p>Finally, after editing the plugin files, click on <b>Update</b> file.</p>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="407_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="409_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'wordpress_header.php'; ?></aside>
 
  
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