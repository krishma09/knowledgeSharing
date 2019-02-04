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
	$sid=425;
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

<h4>System Requirements for Joomla 3.x</h4>
<ul class="list">
<li><p><b>Database</b> − MySQL 5.1 + </p></li>
<li><p><b>Web Server</b> −</p>
<ul class="list">
<li>WAMP (Windows)</li>
<li>LAMP (Linux)</li>
<li>XAMP (Multi-platform)</li>
<li>MAMP (Macintosh)</li>
<li>Nginx</li>
<li>Microsoft IIS</li>
</ul>
</li>
<li><p><b>Operating System</b> − Cross-platform</p></li>
<li><p><b>Browser Support</b> − IE (Internet Explorer 7), Firefox, Google chrome</p></li>
<li><p><b>SSL (Secure Socket Layer)</b> − A valid security certificate is required for HTTPS</p></li>
<li><p><b>PHP Compatibility</b> − PHP 5.4+ or PHP 5.3.10+</p></li>
</ul>
<h4>Download Joomla</h4>
<p>When you open the link <a target="_blank" rel="nofollow" href="http://www.joomla.org/download.html">http://www.joomla.org/download.html</a>, you will get to see a screen as below −</p>
<img src="images/joomla-setup.JPG" alt="joomla Setup">
<p>Download the Joomla zip file from the official site or if you want to update the files of your previous version, then click on Upgrade Package option.</p>
<h4>Create Store Database</h4>
<ul class="list">
<li><p>Joomla requires MySQL database. So create a new empty database and user/password (for e.g. User as "root" and password as "root" or else you can set as per your convenience) for Joomla.</p></li>	
<li><p>After following the above step, you can continue with the installation process.</p></li>
</ul>
<h4>SetUp Wizard</h4>
<p>It's very easy to set up Joomla into your system. The following steps describe how to setup Joomla locally on your system.</p>
<p><b>Step (1)</b> − Extract the downloaded Joomla folder and upload it on your web server or localhost.</p>
<p><b>Step (2)</b> − Open your browser and navigate to your Joomla file path, then you will get the first screen of the Joomla installer as shown in the following screen. In our case the path is <b>localhost/&lt; Your_joomla_folder &gt;</b>.</p>
<img src="images/joomla-installation-1.jpg" alt="joomla Setup">
<p>It contains the following fields −</p>
<ul class="list">
<li><p><b>Site Name</b> − Enter the name of the site which you are going to create in Joomla.</p></li>
<li><p><b>Description</b> − Add a small description about your site.</p></li>
<li><p><b>Admin Email</b> − Enter your email address which helps to recover our password or any update.</p></li>
<li><p><b>Admin Username</b> − Enter the username as per your choice while logging into Joomla.</p></li>
<li><p><b>Admin Password</b> − Enter password to protect your site.</p></li>
<li><p><b>Site Offline</b> − It specifies whether your site should be offline or online after completion of installation by clicking on Yes/No.</p></li>
</ul>
<p>After filling all the information, click on the Next button.</p>
<p><b>Step (3)</b> − Here, you have to enter the information about the MYSQL database as seen in the screen below.</p>
<img src="images/joomla-installation-2.jpg" alt="joomla Setup">
<ul class="list">
<li><p><b>Database Type</b> − Select your database type. By default it will be MySQLi.</p></li>
<li><p><b>Host Name</b> − Write the host name by default it will be localhost.</p></li>
<li><p><b>Username</b> − Enter the user name of your MySQL database.</p></li>
<li><p><b>Password</b> − Enter the password which you had set for MySQL Database.</p></li>
<li><p><b>Database Name</b> − Enter the database name which you have created in MySQL database for Joomla.</p></li>
<li><p><b>Table Prefix</b> − It is used to add prefix in the database tables which helps to run multiple sites on the same database. It takes the default value.</p></li>
<li><p><b>Old Database Process</b> − It gives two options <b>Backup</b> or <b>Remove</b>. If you had already created a database then you can either remove it or select the backup option to create a backup of your whole database information.</p></li>
</ul>
<p>After filling all information, click on Next button.</p>
<p><b>Step (4)</b> − In this step, you will be on last page of the installation process.</p>
<img src="images/joomla-installation-3.jpg" alt="joomla Setup">
<p>Here you can view all the information added to Joomla.</p>
<p>Choose <b>Default English (GB) Sample Data</b> as an example to build your website and click on <b>Install</b> button.</p>
<p><b>Step (5)</b> − Next, you can see that Joomla starts the installation process on your machine.</p>
<img src="images/joomla-installation-4.jpg" alt="joomla Setup">
<p><b>Step (6)</b> − After a few minutes, after installation is successful and you will get a screen of the Joomla web installer as shown below.</p>
<img src="images/joomla-installation-5.jpg" alt="joomla Setup">
<p>Next, click on the "Remove installation folder" button which will help you to protect your site, so that no other person can re-install your site.</p>
<p><b>Note</b> − If your installation gets stuck and does not get completed for more than an hour, then do some changes as shown below.</p>
<p>Go to Joomla folder → installation → sql folder → mysql folder
Open <i>joomla.sql</i> file and find the following term: "ENGINE=InnoDB". Replace this term with "ENGINE=MyIsam" and save the file.</p>
<p>Before MySQL 5.5.5, MyISAM is the default storage engine. (The default was changed to InnoDB in MySQL 5.5.5.)</p>
<p>Then your installation will begin.</p>
<h4>Admin Panel</h4>
<p>After installing Joomla you are able to login to your Joomla Admin Panel as described below −</p>
<p><b>Step (1)</b> − To access Joomla administrative panel, open the browser and type the URL as <b>http://localhost/ &lt; Your_joomla_folder &gt;/administrator/index.php</b>, then you will get the screen as shown below −</p>
<img src="images/joomla-login.jpg" alt="joomla Setup">
<p><b>Step (2)</b> − Enter the username and password which you had mentioned during installation as shown in the step 3 of Set Up Wizard section and click on the login button.</p>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="424_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="426_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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