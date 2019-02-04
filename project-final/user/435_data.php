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
	$sid=435;
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

<p>In this chapter, we will study the step-by-step procedure of how to <b>add new menu items</b> in Joomla. Menu items can be created in the main menu (menu1), which we have already created in chapter <a href="/joomla/joomla_create_menus.htm">Joomla - Create Menus</a>.</p>
<h4>Adding Menu Items</h4>
<p>Following are the simple steps to add a menu item in Joomla.</p>
<p><b>Step (1)</b> − Click on <b>Menus</b> → <b>Menu1</b> → <b>Add New Menu Item</b> as shown below.</p>
<img src="images/joomla-addingmenuitems-step1.jpg" alt="joomla Adding Menu Items">
<p><b>Step (2)</b> − After clicking on Add New Menu Item, the <b>Menu Manager − New Menu Item</b> page is displayed as shown below.</p>
<img src="images/joomla-addingmenuitems-step2.jpg" alt="joomla Adding Menu Items">
<p>You can view various tabs present in this page. The <b>Details</b> tab gets active by default.</p>
<p>There are two main sections under <i>New Menu Item</i> −</p>
<ul class="list">
<li><p><b>Menu Title</b> − It displays the title of the menu item.</p></li>
<li><p><b>Alias</b> − It is used as SEF URL. Joomla will automatically fill the value from the title. It will produce UTF-8 aliases, however, it does not allow any spaces and underscores.</p></li>
<li><p><b>Menu Item Type</b> − In Menu item type, it specifies the type of menu item such as articles, tags, web links, system links, contacts etc. Here you can select menu item type by clicking on the <b>Select</b> button. By clicking on this button, a screen appears as shown below.</p></li>
</ul>
<img src="images/joomla-addingmenuitems-step2(b).jpg" alt="joomla Adding Menu Items">
<p>Click on <b>Articles</b> menu type, you get following screen. Now select <b>Single Article</b> as shown below.</p>
<img src="images/joomla-addingmenuitems-step2(c).jpg" alt="joomla Adding Menu Items">
<p>After selecting <b>Single Article</b> you will get the following screen.</p>
<img src="images/joomla-addingmenuitems-step2(d).jpg" alt="joomla Adding Menu Items">
<ul class="list">
<li><p><b>Select Article</b> − Selects the article from the list. </p></li>
<li><p><b>Link</b> − Specifies link reference for the menu item.</p></li>
<li><p><b>Template Style</b> − You can select a template style for your website by clicking at the dropdown menu which gives you <i>Beez3 - Default</i> and <i>Protostar - Default</i> styles or provides default template for your website.</p></li>
<li><p><b>Target Window</b> − It targets the window for menu items such as <i>Parent</i>, <i>New Window With Navigation</i> and <i>New Without Navigation</i>.</p></li>
<li><p><b>Menu Location</b> − It specifies which menu link will appear either <i>Main Menu</i> or <i>User Menu</i>.</p></li>
<li><p><b>Parent Item</b> − It selects parent item by selecting either <i>Menu Item Root</i> or <i>Home</i>.</p></li>
<li><p><b>Status</b> − It displays the status of the article such as <i>Published</i>, <i>Unpublished</i> and <i>Trashed</i>.</p></li>
<li><p><b>Default Page</b> − It provides <i>Yes</i> or <i>No</i> options to set the menu item as default or home page of the site.</p></li>
<li><p><b>Access</b> − It allows access only to selected users from the dropdown list such as <i>Guest, Public, Super Users</i>, Registered and <i>Special</i> option to view the items.</p></li>
<li><p><b>Language</b> − It specifies the language of the site. It provides either <i>ALL</i> or <i>English (UK)</i> options.</p></li>
<li><p><b>Note</b> − It is used to enter the text information.</p></li>
</ul>
<p>After selecting <b>Menu Item Type</b> it will generate an <b>Options</b> tab automatically.</p>
<p><b>Step (3)</b> − When we click on <b>Options</b> tab we will get the following screen.</p>
<img src="images/joomla-addingmenuitems-step3.jpg" alt="joomla Adding Menu Items">
<p><b>Step (4)</b> − Click on <b>Link Type</b> tab we will get the following screen.</p>
<img src="images/joomla-addingmenuitems-step4.jpg" alt="joomla Adding Menu Items">
<ul class="list">
<li><p><b>Link Title Attribute</b> − It specifies description for the title attribute of the given hyperlink.</p></li>
<li><p><b>Link CSS Style</b> − It applies custom CSS style to the hyperlink.</p></li>
<li><p><b>Link Image</b> − It uses an image to be used with hyperlink.</p></li>
<li><p><b>Add Menu Title</b> − It provides <i>Yes</i> or No options and adds the menu title next to the image. The default is <i>Yes</i>.</p></li>
</ul>
<p><b>Step (5)</b> − Click on <b>Page Display</b> tab we will get the following screen.</p>
<img src="images/joomla-addingmenuitems-step5.jpg" alt="joomla Adding Menu Items">
<ul class="list">
<li><p><b>Browser Page Title</b> − It specifies the description for the browser page title.</p></li>
<li><p><b>Show Page Heading</b> − It provides <i>Yes</i> or <i>No</i> option to show the page heading.</p></li>
<li><p><b>Page Heading</b> − It specifies the text for the page heading.</p></li>
<li><p><b>Page Class</b> − It defines the optional CSS class to style the elements in the page.</p></li>
</ul>
<p><b>Step (6)</b> − Click on <b>Metadata</b> tab we get the screen given below.</p>
<img src="images/joomla-addingmenuitems-step6.jpg" alt="joomla Adding Menu Items">
<ul class="list">
<li><p><b>Meta Description</b> − It is used as optional paragraph which includes description of the page and displays in the results of the search engines.</p></li>
<li><p><b>Meta Keywords</b> − These are the optional keywords to be used in the html page.</p></li>
<li><p><b>Robots</b> − It specifies robotic instructions such as <i>Use Global</i>, <i>Index, Follow</i>, <i>No Index, No follow</i></p></li>
<li><p><b>Secure</b> − It defines whether link must use SSL or Secure Site URL. It provides three options such as <i>Off</i>, <i>On</i> and <i>Ignore</i>.</p></li>
</ul>
<p><b>Step (7)</b> − The <b>Module Assignment</b> controls the module display on the page by assigning modules in menu items.</p>
<img src="images/joomla-addingmenuitems-step7.jpg" alt="joomla Adding Menu Items">
<h4>Toolbar</h4>
<p>Below, we have mentioned details of the functions of the toolbar buttons present while <i>adding menu items</i>.</p>
<ul class="list">
<li><p><b>Save</b> − Saves your created menu items.</p></li>
<li><p><b>Save &amp; Close</b> − Saves the menu item and closes the current screen.</p></li>
<li><p><b>Save &amp; New</b> − Menu item will get saved and it will open a new <i>adding menu items</i> screen.</p></li>
<li><p><b>Cancel</b> − Cancels the current action.</p></li>
</ul>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="434_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="436_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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