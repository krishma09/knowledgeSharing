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
	$sid=10;
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
 
<div class="sc_line sc_line_style_solid margin_top_3em"></div>
<strong style="font-size:20px;">


<div class="w3-example" style="padding-left:50px;">
<h5>Example :</h5>
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
<p style="font-size:20px;color:red;">I am Red</p>
<p style="font-size:20px;color:blue;">I am Blue</p>
<p style="font-size:36px;margin:12px 0">I am Big</p>
</div>
</div>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>


<h4>The HTML Style Attribute</h4>
<p>Setting the style of an HTML element, can be done with the <strong>style attribute</strong>.</p>
<p>The HTML style attribute has the following <strong>syntax</strong>:</p>
<div class="w3-example">
<div class="w3-code notranslate">
 &lt;tagname
style="<em>property</em>:<em>value;</em>"&gt;
</div>
</div><br><br>
<p>The <em><strong>property</strong></em> is a CSS property. The <em><strong>value</strong></em> is a CSS value.</p>
<p>You will learn more about CSS later in this tutorial.</p>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>


<h4>HTML Background Color</h4>
<p>The <strong>background-color</strong> property defines the background color 
for an HTML element.</p>
<p>This example sets the background color for a page to powderblue:</p>
<div class="w3-example" style="padding-left:50px;">
<h5>Example :</h5>
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
 <span style="color:brown"><span style="color:mediumblue">&lt;</span>body<span style="color:red"> style<span style="color:mediumblue">="background-color:powderblue;"</span></span><span style="color:mediumblue">&gt;</span></span><br><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>h1<span style="color:mediumblue">&gt;</span></span>This is a heading<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h1<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>p<span style="color:mediumblue">&gt;</span></span>This is a paragraph.<span style="color:brown"><span style="color:mediumblue">&lt;</span>/p<span style="color:mediumblue">&gt;</span></span><br><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>/body<span style="color:mediumblue">&gt;</span></span></div>
</div>

<h4>HTML Text Color</h4>
<p>The <strong>color</strong> property defines the text color for 
an HTML element:</p>
<div class="w3-example" style="padding-left:50px;">
<h5>Example :</h5>
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
 <span style="color:brown"><span style="color:mediumblue">&lt;</span>h1<span style="color:red"> style<span style="color:mediumblue">="color:blue;"</span></span><span style="color:mediumblue">&gt;</span></span>This is a heading<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h1<span style="color:mediumblue">&gt;</span></span><br>
 <span style="color:brown"><span style="color:mediumblue">&lt;</span>p<span style="color:red"> style<span style="color:mediumblue">="color:red;"</span></span><span style="color:mediumblue">&gt;</span></span>This is a paragraph.<span style="color:brown"><span style="color:mediumblue">&lt;</span>/p<span style="color:mediumblue">&gt;</span></span></div>
</div>

<h4>HTML Fonts</h4>
<p>The <strong>font-family</strong> property defines the font to be used  
for an HTML element:</p>
<div class="w3-example" style="padding-left:50px;">
<h5>Example :</h5>
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
 <span style="color:brown"><span style="color:mediumblue">&lt;</span>h1<span style="color:red"> style<span style="color:mediumblue">="font-family:verdana;"</span></span><span style="color:mediumblue">&gt;</span></span>This is a heading<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h1<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>p<span style="color:red"> style<span style="color:mediumblue">="font-family:courier;"</span></span><span style="color:mediumblue">&gt;</span></span>This is a paragraph.<span style="color:brown"><span style="color:mediumblue">&lt;</span>/p<span style="color:mediumblue">&gt;</span></span></div>
</div>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<h4>Chapter Summary</h4>
<ul>
  <li>Use the <strong>style</strong> attribute for styling HTML elements</li>
  <li>Use <strong>background-color</strong> for background color</li>
  <li>Use <strong>color</strong> for text colors</li>
  <li>Use <strong>font-family</strong> for text fonts</li>
  <li>Use <strong>font-size</strong> for text sizes</li>
  <li>Use <strong>text-align</strong> for text alignment</li>
</ul>


</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="9_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="11_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'html_header.php'; ?>
</aside>
 
  
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