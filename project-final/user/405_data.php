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
	$sid=405;
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

<p>In this chapter, we will study about <b>Discussion settings</b> in WordPress. WordPress discussion setting can be defined as the interaction between the blogger and the visitors. These settings are done by the admin to have a control over the posts/pages that come in through users.</p>
<p>Following are the steps to access the Discussion setting −</p>
<p><b>Step (1)</b> − Click on <b>Settings → Discussion</b> option in WordPress.</p>
<img src="images/wordpress-discussion-settings-step1.jpg" alt="WordPress Discussion Setting">
<div class="sc_line sc_line_style_solid margin_top_3em"></div>
<p><b>Step (2)</b> − The Discussion Settings page is displayed as shown in the following snapshot.</p>
<img src="images/wordpress-discussion-settings-step2.jpg" alt="WordPress Discussion Setting">
<div class="row"><p>Following fields are seen in Discussion settings.</p>

<ul class="list">
<li><p><b>Default article settings</b> − These settings are default to the new pages you create or new posts. This contains three more settings. They are −</p>
<ul class="list">
<li><p><b>Attempt to notify any blogs linked to from the article</b> − When you publish articles then it sends a notification (sends pings and trackback) to other blogs.</p></li>
<li><p><b>Allow link notifications from other blogs (pingbacks and trackbacks)</b> − Accepts pings from other blogs.</p></li>
<li><p><b>Allow people to post comments on new articles</b> − You can allow or disallow other people to comment on your article using this setting.</p></li>
</ul>
<p>You can change the settings as per your will for individual articles.</p></li>
<li><p><b>Other Comment Settings</b> − This setting has the following options −</p>
<ul class="list">
<li><p><b>Comment author must fill out name and e-mail</b> − When you check this box, it is mandatory for visitors to fill their name and email address.</p></li>
<li><p><b>Users must be registered and logged in to comment</b> − If you check this box, only those registered visitors can leave comments, if not checked anyone can leave any number of comments.</p></li>
<li><p><b>Automatically close comments on articles older than days</b> − This option allows you to accept comments only for a particular time period as per your wish.</p></li>
<li><p><b>Enable threaded (nested) comments</b> − When you check this option, visitors can reply or have a discussion and get responses.</p></li>
<li><p><b>Break comments into pages with top level comments per page and the page displayed by default</b> − If your pages are getting a lot of comments then you can split them into different pages by checking this box.</p></li>
<li><p><b>Comments should be displayed with the comments at the top of each page</b> − You can arrange the comments in the form of ascending or descending order.</p></li>
</ul></li>
<li><p><b>Email me whenever</b> − This setting contains two options, namely −</p>
<ul class="list">
<li><p><b>Anyone posts a comment</b> − When you check into this box, the author gets an e-mail for every single comment that is posted.</p></li>
<li><p><b>A comment is held for moderation</b> − This is used in case you do not want your comment to be updated before it's moderated by the admin.</p></li>
</ul>
</li>
<li><p><b>Before a comment appears</b> − This setting allows how your posts are controlled. There are two more settings as followed −</p>
<ul class="list">
<li><p><b>Comment must be manually approved</b> − If you check this box then only the approved comments by the admin can be displayed on the posts or pages.</p></li>
<li><p><b>Comment author must have a previously approved comment</b> − This can be checked when you want to approve a comment of an author whose has commented and his e-mail address matches the e-mail address of the previous posted comment. Otherwise the comment is held for moderation.</p></li>
</ul></li>
<li><p><b>Comment Moderation</b> − Contain only a specific number of links that are allowed into a comment.</p></li>
<li><p><b>Comment Blacklist</b> − You can input your own spam words which you do not want your visitors to enter into the comments, URL, e-mail etc.; later it would filter the comments.</p></li>
<li><p><b>Avatars</b> − Avatar is a small image that displays at the top-right-hand corner of the dashboard screen beside your name. It is like your profile picture. Here you have a few more options where you can set your avatar for WordPress site.</p>
<ul class="list">
<li><p><b>Avatar Display</b> − It displays your avatar besides your name when it is checked.</p></li>
<li><p><b>Maximum rating</b> − You have a four other options of avatars you can use. They are G, PG, R and X. This is the age section where you select according to which type of audience you want to display your posts.</p></li>
<li><p><b>Default Avatar</b> − In this option, there are few more types of avatars with images; you can keep these avatars according to your visitors e-mail address.</p></li>
</ul></li>
</ul>
<p><b>Step (3)</b> − Click on <b>Save Changes</b> button to save the changes.</p>


<a href="404_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="406_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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