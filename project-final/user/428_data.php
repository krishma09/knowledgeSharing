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
	$sid=428;
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

<p>In this chapter we will study about the various <b>toolbar</b> options in Joomla. Given below is a list of toolbars −</p>
<ul class="list">
<li>Article Manager Toolbar</li>
<li>Category Manager Toolbar</li>
<li>Media Manager Toolbar</li>
<li>Menu Manager Toolbar</li>
<li>Module Manager Toolbar</li>
<li>User Manager Toolbar</li>
<li>Global Configuration Toolbar</li>
<li>Template Manager Toolbar</li>
</ul>
<h4>Article Manager Toolbar</h4>
<p>Click on <b>Content</b> → <b>Article Manager</b> in Joomla administrator control panel. In Article Manager, you can create the standard pages that consist of images, text and hyperlinks. The following figure depicts the Article Manager Toolbar.</p>
<img src="images/joomla-articlemanager-toolbar.jpg" alt="joomla Article Manager Toolbar">
<ul class="list">
<li><p><b>New</b> − Create a new article.</p></li>
<li><p><b>Edit</b> − Edit any specific article.</p></li>
<li><p><b>Publish </b> − Publish the article to the user on the website.</p></li>
<li><p><b>Unpublish</b> − Unpublish the article to the user on the website.</p></li>
<li><p><b>Featured</b> − Selected article is featured. Multiple articles can also be featured.</p></li>
<li><p><b>Archive</b> − It can change the status of the articles to published or unpublished by selecting archived in the select status filter. </p></li>
<li><p><b>Check In</b> − Check-in the selected article. Multiple articles can be checked-in.</p></li>
<li><p><b>Trash</b> − Delete the selected article permanently.</p></li>
<li><p><b>Batch</b> − Selected articles are processed by batch. </p></li>
<li><p><b>Help</b> − Help button is used to open the help screen. </p></li>
<li><p><b>Option</b> − It opens the setting window where you can change the setting of the articles.</p></li>
</ul>
<h4>Category Manager Toolbar</h4>
<p>Click on <b>Content</b> → <b>Category Manager</b> in Joomla administrator control panel. It manages to create categorize the articles which allows to group your content better. The following figure depicts the Category Manager Toolbar.</p>
<img src="images/joomla-categorymanager-toolbar.jpg" alt="joomla Category Manager Toolbar">
<ul class="list">
<li><p><b>New</b> − Add a new category.</p></li>
<li><p><b>Edit</b> − Edits an existing category.</p></li>
<li><p><b>Publish</b> − Publish the categories to the user on the website.</p></li>
<li><p><b>Unpublish</b> − Unpublish the categories to the user on the website.</p></li>
<li><p><b>Archive</b> − It can change the status of the categories to published or unpublished by selecting archived in the select status filter. </p></li>
<li><p><b>Check In</b> − Check-in the particular selected category. Multiple categories can be checked-in.</p></li>
<li><p><b>Trash</b> − Delete the selected category permanently.</p></li>
<li><p><b>Batch</b> − Selected categories are processed by batch.</p></li>
<li><p><b>Rebuild</b> − It is used to rebuild the categories tree data.</p></li>
<li><p><b>Help</b> − Help button is used to open the help screen. </p></li>
<li><p><b>Option</b> − It opens the setting window where you can change the setting of the articles.</p></li>
</ul>
<h4>Media Manager Toolbar</h4>
<p>Click on <b>Content</b> → <b>Media Manager</b> in Joomla administrator control panel. It manages the files by uploading a new file or deleting the existing ones on your web server. Given below is a snapshot of the Media Manager Toolbar.</p>
<img src="images/joomla-mediammanager-toolbar.jpg" alt="joomla Media Manager Toolbar">
<ul class="list">
<li><p><b>Upload</b> − Upload images from your system.</p></li>
<li><p><b>Create New Folder</b> − Create a new folder on Joomla server.</p></li>
<li><p><b>Delete</b> − Deletes the selected item/images permanently. </p></li>
<li><p><b>Help</b> − This opens the help screen.</p></li>
<li><p><b>Option</b> &amp;minus It opens the setting window where you can change the setting of the articles.</p></li>
</ul>
<h4>Menu Manager Toolbar</h4>
<p>Click on <b>Menus</b> → <b>Menu Manager</b> in Joomla administrator control panel. It manages the menu items. Here new menus are created, deleted or menus are managed subsequently. Given below is a snapshot of the Menu Manager Toolbar.</p>
<img src="images/joomla-menumanager-toolbar.jpg" alt="joomla Menu Manager Toolbar">
<ul class="list">
<li><p><b>New</b> − It creates a new menu item.</p></li>
<li><p><b>Edit</b> − Edits the selected menu item.</p></li>
<li><p><b>Delete</b> − Deletes the selected menu item permanently.  </p></li>
<li><p><b>Rebuild</b> − It rebuilds or refreshes the relevant menu items present.</p></li>
<li><p><b>Help</b> − Help button is used to open the help screen.</p></li>
<li><p><b>Option</b> − It opens the setting window where you can change the setting of the articles.</p></li>
</ul>
<h4>Module Manager Toolbar</h4>
<p>Click on <b>Extension</b> → <b>Module Manager</b> in Joomla administrator control panel. It manages the modules location and functions that are installed. The following figure depicts the Module Manager Toolbar.</p>
<img src="images/joomla-modulemanager-toolbar.jpg" alt="joomla Module Manager Toolbar">
<ul class="list">
<li><p><b>New</b> − It creates new modules.</p></li>
<li><p><b>Edit</b> − It edits the selected modules.</p></li>
<li><p><b>Duplicate</b> − A copy of the selected module can be created using this button.</p></li>
<li><p><b>Publish</b> − Publish the selected modules to the user on the website.</p></li>
<li><p><b>Unpublish</b> − Unpublish the selected modules to the user on the website.</p></li>
<li><p><b>Check In</b> − Check-in the particular selected modules. Multiple modules can be checked-in.</p></li>
<li><p><b>Trash</b> − Delete the selected modules permanently.</p></li>
<li><p><b>Batch</b> − Selected modules are processed by batch.  </p></li>
<li><p><b>Help</b> − Help button is used to open the help screen. </p></li>
<li><p><b>Option</b> − It opens the setting window where you can change the setting of the articles.</p></li>
</ul>
<h4>User Manager Toolbar</h4>
<p>Click on <b>Users</b> → <b>User Manager</b> in Joomla administrator control panel. It manages all the user information such as Username, Email, Last Visit Date and Registration Date. Given below is the snapshot of the User Manager Toolbar.</p>
<img src="images/joomla-usermanager-toolbar.jpg" alt="joomla User Manager Toolbar">
<ul class="list">
<li><p><b>New</b> − It creates a new user.</p></li>
<li><p><b>Edit</b> − It edits the selected user.</p></li>
<li><p><b>Activate</b> − It activates multiple users.</p></li>
<li><p><b>Block</b> − It blocks the selected user.</p></li>
<li><p><b>Unblock</b> − It unblocks the selected users.</p></li>
<li><p><b>Delete</b> − It deletes the particular users.</p></li>
<li><p><b>Batch</b> − Selected users are processed as a batch.</p></li>
<li><p><b>Help</b> − Help button is used to open the help screen.</p></li>
<li><p><b>Option</b> − It opens the setting window where you can change the setting of the articles.</p></li>
</ul>
<h4>Global Configuration Toolbar</h4>
<p>Click on <b>System</b> → <b>Global Configuration</b> in Joomla administrator control panel. It manages the global setting of the Joomla site. Given below is a snapshot of the Global Configuration Toolbar.</p>
<img src="images/joomla-globalconfiguration-toolbar.jpg" alt="joomla Global Configuration toolbar">
<ul class="list">
<li><p><b>Save</b> − Saves the configuration and stays on the same screen.</p></li>
<li><p><b>Save &amp; Close</b> − Saves the configuration and closes the screen.</p></li>
<li><p><b>Cancel</b> − Cancels the configuration changes and returns to the previous screen without saving.</p></li>
<li><p><b>Help</b> − Help button is used to open the help screen. </p></li>
</ul>
<h4>Template Manager Toolbar</h4>
<p>Click on <b>Extension</b> → <b>Template Manager</b> in Joomla administrator control panel. It manages the templates that you use in the website. The following picture shows the Template Manager Toolbar −</p>
<img src="images/joomla-templatemanager-toolbar.jpg" alt="joomla Template Manager Toolbar">
<ul class="list">
<li><p><b>Default</b> − Sets the particular selected style as default. </p></li>
<li><p><b>Edit</b> − Edits the template pages.</p></li>
<li><p><b>Duplicate</b> − Creates a duplicate template.</p></li>
<li><p><b>Delete</b> − Deletes the template.</p></li>
<li><p><b>Help</b> − Help button is used to open the help screen. </p></li>
<li><p><b>Option</b> − It opens the setting window where you can change the setting of the articles.</p></li>
</ul>
<h4>Language Manager Toolbar</h4>
<p>Click on <b>Extension</b> → <b>Language Manager</b> in Joomla administrator control panel. It manages the languages that you use in the website. The following picture shows the Language Manager Toolbar −</p>
<img src="images/joomla-languagemanager-toolbar.jpg" alt="joomla Language Manager Toolbar">
<img src="images/joomla-languagemanager-toolbar.jpg" alt="joomla Language Manager Toolbar">
<img src="images/joomla-languagemanager-toolbar.jpg" alt="joomla Language Manager Toolbar">
<ul class="list">
<li><p><b>Default</b> − Sets the particular selected language as default.</p></li>
<li><p><b>Install Language</b> − Install the required language.</p></li>
<li><p><b>Help</b> − Help button is used to open the help screen. </p></li>
<li><p><b>Option</b> − It opens the setting window where you can change the setting of the articles.</p></li>
</ul>
<ul class="list">
<li><p><b>Default</b> − Sets the particular selected language as default.</p></li>
<li><p><b>Install Language</b> − Install the required language.</p></li>
<li><p><b>Help</b> − Help button is used to open the help screen. </p></li>
<li><p><b>Option</b> − It opens the setting window where you can change the setting of the articles.</p></li>
</ul>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="427_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="429_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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