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
	$sid=429;
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
<p>Menu manager allows creating custom menus for your website and allows navigation through your website.</p>
<p><b>Step (1)</b> − Click on <b>Menus</b> → <b>Menu Manager</b> in Joomla administrator, you will get the following screen −</p>
<img src="images/joomla-menumanager-step1.jpg" alt="Joomla Menus Menu">
<p>You can see the menu and menu items point to logical page on the website. </p>
<p><b>Step (2)</b> − To add a new menu to your website, go to <b>Menus</b> → <b>Menu Manager</b> → <b>Add New Menu</b> as shown in the following screen −</p>
<img src="images/joomla-menumanager-newmenu.jpg" alt="Joomla Menus Menu">
<p>After clicking on <b>Add New Menu</b>, you will get the screen as shown below. Here you can create a new menu.</p>
<img src="images/joomla-menumanager-step2.jpg" alt="Joomla Menus Menu">
<ul class="list">
<li><p><b>Title</b> − Title of the menu.</p></li>
<li><p><b>Menu Type</b> − Type of menu.</p></li>
<li><p><b>Description</b> − Brief description about the menu.</p></li>
</ul>
<p><b>Step (3)</b> − To create a new menu item, go to <b>Menus</b> → <b>Name of the Menu</b> → <b>Add New Menu Item</b> as shown in the following screen −</p>
<img src="images/joomla-menumanager-newmenuitem.jpg" alt="Joomla Adding New Item">
<p>You can also add new menu item via <i>User Menu</i>. All the steps described below applies to menu item creation via this method.</p>
<p>When you open the page of a New Menu Item, you will get the following screen −</p>
<img src="images/joomla-menumanager-newmenuitem1.jpg" alt="Joomla Menus Menu">
<p>There are two main sections under New Menu Item −</p>
<ul class="list">
<li><p><b>Menu Title</b> − It displays the title of the menu item in the menu.</p></li>
<li><p><b>Alias</b> − It is used as SEF url. Joomla will automatically fill the value of the title. It will produce UTF-8 aliases; it does not allow spaces and underscores.</p></li>
</ul>
<p>There are some tabs present while creating menu items as shown in the following screen −</p>
<h4>Details</h4>
<p>The <i>Details</i> tab in <i>Add New Menu Item</i>, is as shown below −</p>
<img src="images/joomla-menumanager-details.jpg" alt="Joomla Menus Menu">
<p>It contains the following options −</p>
<ul class="list">
<li><p><b>Menu Item Type</b> − It specifies the type of menu item such as articles, tags, web links, system links, contacts etc.</p></li>
<li><p><b>Link</b> − It determines the link in the menu.</p></li>
<li><p><b>Target Window</b> − It provides three options− <i>Parent</i>, <i>New Window with Navigation</i> and <i>New without Navigation</i> which targets the browser window when a menu item is clicked.</p></li>
<li><p><b>Template Style</b> − You can select a template style for your website by clicking dropdown menu which gives <i>Beez3 - Default</i> and <i>protostar - Default</i> styles or provides default templates for your website.</p></li>
<li><p><b>Menu Location</b> − It specifies which menu link will appear; either <i>Main Menu</i> or <i>User Menu</i>.</p></li>
<li><p><b>Parent Item</b> − This helps you select a parent item by selecting either <i>Menu Item Root</i> or <i>Home</i>.</p></li>
<li><p><b>Status</b> − It displays the status of the article. Status such as <i>Published</i>, <i>Unpublished</i> and <i>Trashed</i>.</p></li>
<li><p><b>Default Page</b> − It provides <i>Yes</i> or <i>No</i> options to set the menu item as default or home page of the site.</p></li>
<li><p><b>Access</b> − Only the selected option from this dropdown list such as <i>Guest</i>, <i>Public</i>, <i>Super Users</i>, Registered and <i>Special</i> can view the site.</p></li>
<li><p><b>Language</b> − It specifies the language of the site. It provides either <i>ALL</i> or <i>English (UK)</i> options.</p></li>
<li><p><b>Note</b> − It is used to enter the text information.</p></li>
</ul>
<h4>Link Type</h4>
<p>The next tab is <i>Link Type</i> in <i>Add New Menu Item</i>, as show below −</p>
<img src="images/joomla-menumanager-linktype.jpg" alt="Joomla Menus Menu">
<ul class="list">
<li><p><b>Link Title Attribute</b> − It specifies a description for the title attribute of the given hyperlink.</p></li>
<li><p><b>Link CSS Style</b> − It applies a custom CSS style to the hyperlink.</p></li>
<li><p><b>Link Image</b> − It uses an image to be used with hyperlink.</p></li>
<li><p><b>Add Menu Title</b> − It provides <i>Yes</i> or <i>No</i> options and adds the menu title next to the image. The default is <i>Yes</i>.</p></li>
</ul><h4>Page Display</h4>
<p>The next tab <i>Page Display</i> in <i>Add New Menu Item</i>, is as shown below −</p>
<img src="images/joomla-menumanager-pagedisplay.jpg" alt="Joomla Menus Menu">
<ul class="list">
<li><p><b>Browser Page Title</b> − It specifies the description of the browser page title.</p></li>
<li><p><b>Show Page Heading</b> − It provides <i>Yes</i> or <i>No</i> option which hides or shows the page title in the page heading.</p></li>
<li><p><b>Page Heading</b> − It specifies the text for the page heading.</p></li>
<li><p><b>Page Class</b> − It defines the optional CSS class to styling the elements in the page.</p></li>
</ul>
<h4>Metadata</h4>
<p>The next tab <i>Metadata</i> in <i>Add New Menu Item</i>, is as shown below −</p>
<img src="images/joomla-menumanager-metadata.jpg" alt="Joomla Menus Menu">
<p>It contains following options as described below −</p>
<ul class="list">
<li><p><b>Meta Description</b> − It is used as an optional paragraph which includes a description of the page and is displayed in the results of the search engines.</p></li>
<li><p><b>Meta Keywords</b> − These are the optional keywords to be used in the html page.</p></li>
<li><p><b>Robots</b> − It specifies robot instructions such as <i>use Global</i>, <i>Index</i>, <i>Follow</i>, <i>No Index</i>,<i>No Index</i>, <i>No follow</i>.</p></li>
<li><p><b>Secure</b> − It defines whether link must use SSL or Secure Site URL. It provides three options such as <i>Off</i>, <i>On</i> and <i>Ignore</i>.</p></li>
</ul>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="428_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="430_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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