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
	$sid=398;
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

<h4>System Requirements for WordPress</h4>
<ul class="list">
<li><p><b>Database</b> − MySQL 5.0 +</p></li>
<li><p><b>Web Server</b> −</p>
<ul class="list">
<li><p>WAMP (Windows)</p></li>
<li><p>LAMP (Linux)</p></li>
<li><p>XAMP (Multi-platform)</p></li>
<li><p>MAMP (Macintosh)</p></li>
</ul></li>
<li><p><b>Operating System</b> − Cross-platform</p></li>
<li><p><b>Browser Support</b> − IE (Internet Explorer 8+), Firefox, Google chrome, Safari, Opera</p></li>
<li><p><b>PHP Compatibility</b> − PHP 5.2+</p></li>
</ul>
<h4>Download WordPress</h4>
<p>When you open the link <a target="_blank" rel="nofollow" href="https://wordpress.org/download/">https://wordpress.org/download/</a>, you will get to see a screen as the following snapshot −</p>
<img src="images/wordpress-installation.jpg" alt="WordPress Installation">
<h4>Create Store Database</h4>
<ul class="list">
<li><p>WordPress requires MySQL database. So create a new empty database with user/password (for example, user as "root" and password as "root" or else you can set as per your convenience).</p></li>
<li><p>Then, you can continue with the installation process as discussed further.</p></li>
</ul>
<p>It's very easy to set up WordPress into your system. The following steps describe how to set up WordPress locally on your system.</p>
<p><b>Step (1)</b> − Extract the downloaded WordPress folder and upload it into your web server or localhost.</p>
<p><b>Step (2)</b> − Open your browser and navigate to your WordPress file path, then you will get the first screen of the WordPress installer as shown in the following screen. In our case, the path is <b>localhost/&lt; Your_wordpress_folder &gt;</b>.</p>
<img src="images/wordpress-installation-step1.jpg" alt="WordPress Installation">
<p>Select your language for the WordPress and click on <b>Continue</b>.</p>
<p><b>Step (3)</b> − In this step, you can view the information needed for the database before proceeding with WordPress installation.</p>
<img src="images/wordpress-installation-step2.jpg" alt="WordPress Installation">
<p>Click on <b>Let's go!</b></p>
<p><b>Step (4)</b> − Here, you have to enter the information about the MySQL database as described in the following screen.</p>
<img src="images/wordpress-installation-step3.jpg" alt="WordPress Installation">
<ul class="list">
<li><p><b>Database Name</b> − Enter the database name which you have created in MySQL database for WordPress.</p></li>
<li><p><b>Username</b> − Enter the user name of your MySQL database.</p></li>
<li><p><b>Password</b> − Enter the password which you had set for MySQL database.</p></li>
<li><p><b>Database Host</b> − Write the host name, by default it will be localhost.</p></li>
<li><p><b>Table Prefix</b> − It is used to add prefix in the database tables which helps to run multiple sites on the same database. It takes the default value.</p></li>
</ul>
<p>After filling all information, click on <b>Submit</b> button.</p>
<p><b>Step (5)</b> − WordPress checks the database setting and gives you the confirmation screen as shown in the following snapshot.</p>
<img src="images/wordpress-installation-step4.jpg" alt="WordPress Installation">
<p>Click on <b>Run the install</b></p>
<p><b>Step (6)</b> − Enter administrative information.</p>
<img src="images/wordpress-installation-step5.jpg" alt="WordPress Installation">
<p>It contains the following fields −</p>
<ul class="list">
<li><p><b>Site Title</b> − Enter the name of the site which you are going to create in WordPress.</p></li>
<li><p><b>Username</b> − Enter the username as per your choice while logging in the WordPress.</p></li>
<li><p><b>Password twice</b> − Enter password two times to protect your site.</p></li>
<li><p><b>Your E-mail</b> − Enter your e-mail address which helps to recover the password or any update.</p></li>
<li><p><b>Privacy</b> − It allows the search engine to index this site after checking the checkbox.</p></li>
</ul>
<p>After filling all the information, click on the <b>Install WordPress</b> button.</p>
<p><b>Step (7)</b> − After installation being successful, you will get a screen of the stating success as seen in the following screen.</p>
<img src="images/ordpress-installation-step6.jpg" alt="WordPress Installation">
<p>You can view your username and password detail added in WordPress.</p>
<p>Click on <b>Log In</b> button.</p>
<p><b>Step (8)</b> − After clicking on login, you will get a WordPress Admin Panel as depicted in the following screen.</p>
<img src="images/wordpress-installation-step7.jpg" alt="WordPress Installation">
<p>Enter the username and password which you had mentioned during installation as shown in step 6 and click on the <b>Log In</b> button.</p>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="397_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="401_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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