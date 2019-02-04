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
	$sid=430;
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


<p>In this chapter, we will study about menus present under the Joomla <i>content</i>. A drop-down menu is displayed when you click on <b>Content Menu</b>.</p>
<img src="images/joomla-contentmenu.jpg" alt="joomla Content Menu">
<h4>Article Manager</h4>
<p>In Article Manager, you can create the standard pages that consist of images, text and hyperlinks. Click on <b>Content</b> → <b>Article Manager</b> menu on Joomla administrative panel, you will get the following screen −</p>
<img src="images/joomla-contentmenu-articlemanager.jpg" alt="joomla Content Menu">
<p>Here, we have mentioned the details about the column header present on the Article Manager page.</p>
<ul class="list">
<li><p><b>Checkbox</b> − It is used to select one or more items.</p></li>
<li><p><b>Status</b> − specifies the status of  the page or article, i.e., Publish/Unpublish/Archieve/trashed.</p></li>
<li><p><b>Title</b> − Specifies the name of the title that will be displayed in the menu.</p></li>
<li><p><b>Access</b> − Specifies the access level, i.e. public or private.</p></li>
<li><p><b>Author</b> − This is the author name who has created that particular item.</p></li>
<li><p><b>Language</b> − Specifies the item language used.</p></li>
<li><p><b>Date</b> − Specifies the article creation date.</p></li>
<li><p><b>Hits</b> − Specifies the number of times the item was viewed.</p></li>
<li><p><b>ID</b> − It is the unique identification number assigned to the items automatically.</p></li>
</ul>
<p>Let us learn about the <b>Search</b> box in the article manager page which is used to search the items very easily.</p>
<img src="images/joomla-contentmenu-articlemanager-searchbox.jpg" alt="joomla Content Menu">
<p>Here you can search the item in the article manager page by selecting any of these − <b>Select Status, Select category, Select Max Levels, Select Access, Select Author, Select language or Select Tag</b>.</p>
<p>We will study about <b>Article Manager Toolbar</b> in detail in the chapter <a href="/joomla/joomla_toolbar.htm">Joomla Toolbar</a>.</p>
<h4>Add New Article</h4>
<p>Click on <b>Content</b> → <b>Article Manager</b> → <b>Add New Article</b> menu on the Joomla administrative panel, then you will get the following screen. The same page can be viewed when you click on <b>Category Manager</b> → <b>Add New Category</b></p>
<img src="images/joomla-contentmenu-articlemanager-newarticle.jpg" alt="joomla Content Menu">
<p>Here you can create your article or web page by specifying the title in <b>Title</b> bar and we can add or write content in the <b>content</b> tab. We will study about this in detail in the chapter <a href="/joomla/joomla_adding_content.htm">Joomla Adding Content</a>.</p>
<h4>Category Manager</h4>
<p>Category Manager is used to create categories for the articles which allows grouping your content better. Click on <b>Content</b> → <b>Category Manager</b> menu on the Joomla administrative panel, then you will get the following screen image −</p>
<img src="images/joomla-contentmenu-categorymanager.jpg" alt="joomla Content Menu">
<p>We will study about <b>Category Manager Toolbar</b> in detail in the chapter <a href="/joomla/joomla_toolbar.htm">Joomla Toolbar</a>.</p>
<p>Here, we have mentioned the details about the column header present on the Category Manager page.</p>
<ul class="list">
<li><p><b>Checkbox</b> − It is used to select one or more category items by clicking on the box.</p></li>
<li><p><b>Status</b> − Specifies the status of the category i.e. Publish/Unpublish.</p></li>
<li><p><b>Title</b> − Specifies the name of the title in the category.</p></li>
<li><p><b>Access</b> − Specifies the access level, i.e. Public or Private.</p></li>
<li><p><b>Language</b> − Specifies the item language used.</p></li>
<li><p><b>ID</b> − It is the unique identification number assigned to the items automatically.</p></li>
</ul>
<h4>Featured Article</h4>
<p>Click on <b>Content</b> → <b>Featured Manager</b> menu on the Joomla administrative panel, then you will get the following screen −</p>
<img src="images/joomla-contentmenu-featuredmanager.jpg" alt="joomla Content Menu">
<p>Here the yellow star mark indicates the article is featured. The star mark is present next to each article for featured articles.</p>
<p>Here, we have mentioned the details about the column header present in the<i>Featured Article</i> page.</p>
<ul class="list">
<li><p><b>Checkbox</b> − It is used to select one or more items by clicking on the box.</p></li>
<li><p><b>Status</b> − Specifies the status of the page or article, i.e. Publish/Unpublish.</p></li>
<li><p><b>Title</b> − Specifies the name of the title that displays in the menu.</p></li>
<li><p><b>Ordering</b> − Specifies the order of item creation.</p></li>
<li><p><b>Access</b> − Specifies the access level, i.e. public or private.</p></li>
<li><p><b>Author</b> − Describes the author name who has created that particular item.</p></li>
<li><p><b>Language</b> − Specifies the item language used.</p></li>
<li><p><b>Date</b> − Specifies the date of the article it was created on.</p></li>
<li><p><b>ID</b> − It is the unique identification number assigned to the items automatically.</p></li>
</ul>
<h4>Media Manager</h4>
<p>You can manage your media files by uploading a new file or deleting the existing ones using media manager. Click on <b>Content</b>→<b>Media Manager</b> menu on the Joomla administrative panel, then you will get the following screen −</p>
<img src="images/joomla-contentmenu-mediamanager.jpg" alt="joomla Content Menu">
<p>We will study about <b>Media Manager Toolbar</b> in detail in the chapter <a href="/joomla/joomla_toolbar.htm">Joomla Toolbar</a>.</p>
<h4>Thumbnail View</h4>
<p>Thumbnail view contains previews of images and icons of sub-folder. When we click on <b>Thumbnail View</b> then the media manager will look like as shown below.</p>
<img src="images/joomla-contentmenu-mediamanager-thumbnail.jpg" alt="joomla Content Menu">
<h4>Detail View </h4>
<p>Detail view contains the file details. In the detail view, the file information such as dimension and file size are displayed. When we click on the <b>Detail View</b> then the media manager will look like as shown below.</p>
<img src="images/joomla-contentmenu-mediamanager-detail.jpg" alt="joomla Content Menu">


<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="429_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="431_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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