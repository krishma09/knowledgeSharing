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
<title>HTML Tutorials | knowledge.com</title>
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
	$sid=3;
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

<h4 class="widget_title" style="text-align:left"><?php echo substr($desc1,0,37);?></h4>

<p><?php echo substr($desc1,38,75);?></p>
<p><?php echo substr($desc1,114,100);?></p>
<p><?php echo substr($desc1,215,70);?></p>
<p><?php echo substr($desc1,286,85);?></p>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>



<h4 class="widget_title" style="text-align:left"><?php echo substr($desc2,0,27);?></h4>


<div class="w3-example" style="padding-left:50px;">
<h5><?php echo substr($desc2,27,22);?></h5> </div>
<p style="padding-left:100px;"><?php echo substr($desc2,50,8);?> <strong style="font-size:18px;"><?php echo substr($desc2,58,12);?></strong><?php echo substr($desc2,70,62);?><strong style="font-size:18px;"><?php echo substr($desc2,132,7);?></strong>.</p>

<h5 class="widget_title" style="padding-left:50px;"><?php echo substr($desc2,140,25);?></h5>
<p style="padding-left:100px;"><?php echo substr($desc2,166,8);?><strong style="font-size:18px;"><?php echo substr($desc2,174,40);?></strong> </p>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<h4 class="widget_title" style="text-align:left"><?php echo substr($desc2,215,30);?></h4>
<p><?php echo substr($desc2,246,5);?><strong style="font-size:18px;"><?php echo substr($desc2,251,35);?></strong> </p>
<p class="auto-style1"><?php echo substr($desc2,286,79);?>
<span class="auto-style1">In </span><strong style="font-size:18px;">Preferences &gt; Format &gt; 
</strong>choose<strong style="font-size:18px;"> "Plain Text"</strong></p>
<p><?php echo substr($desc2,410,155);?> files".</p>
<p style="font-weight: 700"><strong style="font-size:18px;">Then open a new document to place the code.</strong></p>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>


<h4>Step 2: Write Some HTML</h4>
<p style="padding-left:50px; font-size:19px;"><strong>Write or copy some HTML into Notepad.</strong></p>
<div class="w3-example">
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>!DOCTYPE<span style="color:red"> html</span><span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>html<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>body<span style="color:mediumblue">&gt;</span></span><br><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>h1<span style="color:mediumblue">&gt;</span></span>My First Heading<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h1<span style="color:mediumblue">&gt;</span></span><br><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>p<span style="color:mediumblue">&gt;</span></span>My first paragraph.<span style="color:brown"><span style="color:mediumblue">&lt;</span>/p<span style="color:mediumblue">&gt;</span></span><br><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>/body<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>/html<span style="color:mediumblue">&gt;</span></span></div>
</div><br><br>
<p><img alt="Notepad" src="images/img_notepad.png" class="w3-image"></p>
 

<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<h4>Step 3: Save the HTML Page</h4>
<p>Save the file on your computer. Select <strong>File &gt; Save as</strong> in the Notepad menu.</p>
<p>Name the file <strong>"index.htm"</strong> and set the encoding to 
<strong>UTF-8</strong> (which is the preferred encoding for HTML files).</p>
<p><img alt="View in Browser" style="height:auto;width:631px" src="images/img_saveas.png" class="w3-image"></p>
<div class="w3-panel w3-note">
  <p>You can use either .htm or .html as file extension. There is no difference, it is up to you.</p>
</div>






<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<h4>Step 4: View the HTML Page in Your Browser</h4>
<p>Open the saved HTML file in your favorite browser (double click on the file, 
or right-click - and choose "Open with").</p>
<p><img alt="View in Browser" src="images/img_chrome.png" class="w3-image"></p>



</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="2_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="4_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'html_header.php'; ?></aside>
 
  
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