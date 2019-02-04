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
	$sid=431;
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
<p>In this chapter, we will study about Components Menu in Joomla. Click on <b>Components Menu</b>, a dropdown menu as shown below will be displayed −</p>
<img src="images/joomla-componentmenu.jpg" alt="joomla Component Menu">
<h4>Banners</h4>
<p><b>Components</b> → <b>Banners</b> are used to setup the banners on the website. When you click on Banners, you see a submenu as shown below − </p>
<img src="images/joomla-componentmenu-bannermenu.jpg" alt="joomla Component Menu">
<p>Let us study each of the submenu as follows −</p>
<h4>Banners</h4>
<p>It is used to edit or add banners in the Joomla website to display.</p>
<p>Click <b>Components</b> → <b>Banners</b> → <b>Banners</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-componentmenu-banners.jpg" alt="joomla Component Menu">
<p>We will study about <b>Adding Banners</b> in detail in the chapter <a href="/joomla/joomla_adding_banners.htm">Joomla - Adding Banners</a>.</p>
<h4>Categories</h4>
<p>With Category Manager you can create new banner categories or edit the existing banner categories.</p>
<p>Click <b>Components</b> → <b>Banners</b> → <b>Categories</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-componentmenu-categories.jpg" alt="joomla Component Menu">
<p>You can study more about <b>Category Manager Toolbar</b> in detail in the chapter <a href="/joomla/joomla_toolbar.htm">Joomla Toolbar</a>.</p>
<p>Below, we have mentioned the details about the column header present under the Category Manager - Banner page.</p>
<ul class="list">
<li><p><b>Checkbox</b> − It is used to select one or more category items by clicking on the box.</p></li>
<li><p><b>Status</b> − Specifies the status of the category i.e. Publish/Unpublish.</p></li>
<li><p><b>Title</b> − Specifies the name of the title in the category.</p></li>
<li><p><b>Access</b> − Specifies the access level, i.e. public or private.</p></li>
<li><p><b>Language</b> − Specifies the item language used.</p></li>
<li><p><b>ID</b> − It is the unique identification number assigned to the items automatically.</p></li>
</ul>
<p>The <b>Search</b> box in the Category manager - Banners page is used to search the category items very easily.</p>
<p>You can search the item in the article manager page by selecting any of the following ways i.e. through <b>Select Status, Select Max Levels, Select Access, Select language or Select Tag</b>.</p>
<h4>Clients</h4>
<p>With Client Manager you can create a new client banner or edit the existing ones.</p>
<p>Click <b>Components</b> → <b>Banners</b> → <b>Clients</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-componentmenu-clients.jpg" alt="joomla Component Menu">
<p>Below, we have mentioned the details about the column header present in the Banner Manager − Clients page.</p>
<ul class="list">
<li><p><b>Checkbox</b> − It is used to select one or more clients by clicking on the box.</p></li>
<li><p><b>Status</b> − Specifies the status of the category i.e. Publish/Unpublish.</p></li>
<li><p><b>Client</b> − Specifies the name of the Banner clients.</p></li>
<li><p><b>Contact</b> − Specifies Contact information of the client.</p></li>
<li><p><b>Banners</b> − Specifies the number of banners defined for this client.</p></li>
<li><p><b>Purchase Type</b> − It indicates how the clients are purchasing the banners i.e. Yearly or Monthly. By default it is monthly.</p></li>
<li><p><b>ID</b> − It is the unique identification number assigned to the items automatically.</p></li>
</ul>
<p>The <b>Search</b> box in the  Banner Manager− Clients page is used to search the client items very easily.</p>
<p>You can search the item on the Client Banners page by selecting the <b>Status</b> or <b>Type</b>.</p>
<h4>Tracks</h4>
<p>In Tracks, you can view the tracking information for a list of existing banners.</p>
<p>Click <b>Components</b> → <b>Banners</b> → <b>Tracks</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-componentmenu-tracks.jpg" alt="joomla Component Menu">
<p>The <b>Begin Date</b> and <b>End date</b> is used to track the information of the banner within a particular period (For instance, consider begin date as 2015-07-06 and end date as 2015-07-10, within this period of time the banner information will get tracked).</p>
<h4>Toolbars</h4>
<ul class="list">
<li><p><b>Export</b> − It exports the banner tracking information in the CSV file.</p></li>
<li><p><b>Delete Tracks</b> − Deletes the information of the selected tracks.</p></li>
</ul>
<h4>Contacts</h4>
<p>It adds contact information of client on Joomla site such as name, address, telephone number, email etc.</p>
<p>Click <b>Components</b> → <b>Contacts</b> → <b>Contacts</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-componentmenu-contacts.jpg" alt="joomla Component Menu">
<p>We will study about <i>Adding Contacts</i> in detail in the chapter <a href="/joomla/joomla_adding_contacts.htm">Joomla - Adding Contacts</a>.</p>
<h4>Joomla Update</h4>
<p>It specifies the Joomla latest version which is being used.</p>
<p>Click <b>Components</b> → <b>Joomla! Update</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-componentmenu-joomlaupdate.jpg" alt="joomla Component Menu">
<h4>Messaging</h4>
<p><b>Components</b> → <b>Messaging</b> allows sending and reading messages in Joomla. When you click on Messaging, you see a submenu as shown below.</p>
<img src="images/joomla-componentmenu-messaging.jpg" alt="joomla Component Menu">
<h4>New Private Message</h4>
<p>It is used to send messages to the other backend of Joomla site. You can read, write or delete the messages.</p>
<p>Click <b>Components</b> → <b>Messaging</b> → <b>New Private Message</b>, a New Private Message page opens up. We will study about <b>Private Message</b> in detail in the chapter <a href="/joomla/joomla_private_messages.htm">Joomla - Private Messages</a>.</p>
<h4>Read Private Messages</h4>
<p>In this section, you can read all the private messages.</p>
<p>Click on <b>Components</b> → <b>Messaging</b> → <b>Read Private Message</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-componentmenu-readprivatemessage.jpg" alt="joomla Component Menu">
<h4>Toolbars</h4>
<p>Below, we have mentioned details about the toolbars present in Read Private Message.</p>
<ul class="list">
<li><p><b>New</b> − Creates a new message.</p></li>
<li><p><b>Mark as Read</b> − Marks the messages as read from this section.</p></li>
<li><p><b>Mark as Unread</b> − It marks the messages which have not been read yet.</p></li>
<li><p><b>Trash</b> − It deletes the messages permanently.</p></li>
<li><p><b>My Settings</b> − It is used to set the messages i.e. Lock the inbox, email a new message and auto-purge the message.</p></li>
</ul>
<h4>Newsfeeds</h4>
<p>It allows adding news feed on your Joomla site from other sites.</p>
<p>Click <b>Components</b> → <b>Newsfeeds</b> → <b>Feeds</b>, a Newsfeeds page will open. We will study about <b>Newsfeeds</b> in detail in the chapter <a href="/joomla/joomla_adding_news_feed.htm">Joomla - Adding News Feed</a>.</p>

<h4>Redirect</h4>
<p>Redirect Manager is used to redirect the URL's that do not exist on the website with web pages that are working.</p>
<p>Click <b>Components</b> → <b>Redirect</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-componentmenu-redirect.jpg" alt="joomla Component Menu">
<p>The details about the column header present in the Redirect Manager page are mentioned below.</p>
<ul class="list">
<li><p><b>Checkbox</b> − It is used to select one or more items by clicking on the box.</p></li>
<li><p><b>Expired URL</b> − The URL is redirected towards the website.</p></li>
<li><p><b>New URL</b> − Redirects the designated URL.</p></li>
<li><p><b>Referring Page</b> − Redirects the referring web pages. </p></li>
<li><p><b>Created Date</b> − Specifies the date the URL was created.</p></li>
<li><p><b>404 Hits</b> − The pages were not forwarded after making the number of requests.</p></li>
<li><p><b>ID</b> − It is the unique identification number assigned to the items automatically.</p></li>
</ul>
<h4>Toolbars</h4>
<p>Below, we have mentioned details about the toolbars present on Redirect page.</p>
<ul class="list">
<li><p><b>New</b> − Creates a new Redirect URL.</p></li>
<li><p><b>Edit</b> − Edits the selected redirect.</p></li>
<li><p><b>Enable</b> − It makes available the selected redirect to use.</p></li>
<li><p><b>Disable</b> − It makes unavailable the selected redirect to use.</p></li>
<li><p><b>Archive</b> − It can change the status of the selected redirect to published or unpublished by selecting archived in the select status filter.</p></li>
<li><p><b>Trash</b> − It changes the status of the selected redirect to trash.</p></li>
</ul>

<h4>Search</h4>
<p>Search Manager allows you to see how many searches were done for each key combination and what was the result for each search.</p>
<p>Click <b>Components</b> → <b>Search</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-componentmenu-search.jpg" alt="joomla Component Menu">
<h4>Smart Search</h4>
<p>It enhances site search.</p>
<p>Click <b>Components</b> → <b>Smart Search</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-componentmenu-smartsearch.jpg" alt="joomla Component Menu">
<p>Below, we have mentioned the details about the column header present in the Smart Search page.</p>
<ul class="list">
<li><p><b>Checkbox</b> − It is used to select one or more items by clicking on the box.</p></li>
<li><p><b>Status</b> − Specifies the status of the items i.e. Publish/Unpublish.</p></li>
<li><p><b>Title</b> − Specifies the name of the title.</p></li>
<li><p><b>Type</b> − Specifies the type of the page i.e. Article or Tag.</p></li>
<li><p><b>Last Updated</b> − Specifies the date of the last modification.</p></li>
</ul>
<h4>Tags</h4>
<p>It is used to display the list of the tagged pages.</p>
<p>Click <b>Components</b> → <b>Tags</b>, a screen as shown below will get displayed.</p>
<img src="images/joomla-componentmenu-tags.jpg" alt="joomla Component Menu">
<h4>Weblinks</h4>
<p>The link resource is provided very easily for user of the site and can be sorted into categories. It is used to add, edit or delete the links to other website on your Joomla.</p>
<p>Click <b>Components</b> → <b>Weblinks</b> → <b>Links</b>, Weblinks page will get open. We will study about <b>Weblinks</b> in detail in the chapter <a href="/joomla/joomla_adding_web_links.htm">Joomla - Adding Web Links</a>.</p>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="430_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="432_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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