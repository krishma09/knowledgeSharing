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
	$sid=424;
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
<p>Joomla is an open source <b>Content Management System (CMS)</b>, which is used to build websites and online applications. It is free and extendable which is separated into front-end and back-end templates (administrator). Joomla is developed using PHP, Object Oriented Programming, software design patterns and MySQL (used for storing the data).</p>
<h4>What is Content Management System (CMS)?</h4>
<p>The <b>Content Management System (CMS)</b> is a software which keeps track of the entire data (such as text, photos, music, document, etc.) which will be available on your website. It helps in editing, publishing and modifying the content of the website.</p>
<h4>History</h4>
<p>Joomla is based on <b>Mambo</b> CMS which was developed by an Australian company in 2001 and initially released on <i>August 17, 2005</i>. The official version of Joomla 1.0 was released on <i>September 22, 2005</i>.</p>
<h4>Features</h4>
<p>Joomla has its own powerful built-in features (core features).</p>
<img src="images/joomla-feature.jpg" alt="Joomla Features">
<ul class="list">
<li><p><b>User Manager</b> − It allows managing the user information such as permission to edit, access, publish, create or delete the user, change the password and languages. The main part of the user manager is <i>Authentication</i>.</p></li>
<li><p><b>Content Manager</b> − It allows managing the content using WYSIWYG editor to create or edit the content in a very simple way.</p></li>
<li><p><b>Banner Manager</b> − It is used to add or edit the banners on the website.</p></li>
<li><p><b>Template Manager</b> − It manages the designs that are used on the website. The templates can be implemented without changing the content structure within a few seconds.</p></li>
<li><p><b>Media Manager</b> − It is the tool for managing the media files and folder in which you can easily upload, organize and manage your media files into your article editor tool.</p></li>
<li><p><b>Contact Manager</b> − It allows to add contacts, managing the contact information of the particular users.</p></li>
<li><p><b>Web Link Manager</b> − The link resource is provided for user of the site and can be sorted into categories.</p></li>
<li><p><b>Search</b> − It allows users to search the appropriate information on the site. You can use smart indexing, advanced search options, auto suggest searches to make Joomla search best.</p></li>
<li><p><b>Menu Manager</b> − It allows to create menus and menu items and can be managed subsequently. You can put menu in any style and in multiple places.</p></li>
<li><p><b>RSS</b> − It stands for Really Simple syndication which helps your site contents and RSS files to be automatically updated.</p></li>
</ul>
<h4>Advantages</h4>
<ul class="list">
<li><p>It is an open source platform and available for free.</p></li>
<li><p>Joomla is designed to be easy to install and set up even if you're not an advanced user.</p></li>
<li><p>Since Joomla is so easy to use, as a web designer or developer, you can quickly build sites for your clients. With minimal instructions to the clients, clients can easily manage their sites on their own.</p></li>
<li><p>It is very easy to edit the content as it uses WYSIWYG editor (<b>W</b>hat <b>Y</b>ou <b>S</b>ee <b>I</b>s <b>W</b>hat <b>Y</b>ou <b>G</b>et is a user interface that allows the user to directly manipulate the layout of the document without having a layout command).</p></li>
<li><p>It ensures the safety of data content and doesn't allow anyone to edit the data.</p></li>
<li><p>By default, Joomla is compatible with all browsers.</p></li>
<li><p>The templates are very flexible to use.</p></li>
<li><p>Media files can be uploaded easily in the article editor tool.</p></li>
<li><p>Provides easy menu creation tool.</p></li>
</ul>
<h4>Disadvantages</h4>
<ul class="list">
<li><p>It gives compatibility problem while installing several modules, extensions and plugins simultaneously.</p></li>
<li><p>Plugins and modules are not free in Joomla.</p></li>
<li><p>Development is too difficult to handle when you want to change the layout.</p></li>
<li><p>Joomla is not much SEO (Search Engine Optimization) friendly.</p></li>
<li><p>It makes website heavy to load and run.</p></li>
</ul>
<h4>Real World Examples of What Joomla Can Create?</h4>
<ul class="list">
<li>Corporate web sites or portals</li>
<li>Corporate intranets and extranets</li>
<li>Online magazines, newspapers, and publications</li>
<li>E-commerce and online reservations</li>
<li>Government applications</li>
<li>Small business web sites</li>
<li>Non-profit and organizational web sites</li>
<li>Community-based portals</li>
<li>School and religious web sites</li>
<li>Personal or family homepages</li>
</ul>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="423_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="425_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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