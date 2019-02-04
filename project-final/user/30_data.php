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
	$sid=30;
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




<p>An HTML marquee is a scrolling piece of text displayed either horizontally across or vertically down your webpage depending on the settings. This is created by using HTML &lt;marquees&gt; tag.</p>
<h4>Syntax</h4>
<p>A simple syntax to use HTML &lt;marquee&gt; tag is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;marquee</span><span class="pln"> </span><span class="atn">attribute_name</span><span class="pun">=</span><span class="atv">"attribute_value"</span><span class="pln">....</span><span class="atn">more</span><span class="pln"> </span><span class="atn">attributes</span><span class="tag">&gt;</span><span class="pln">

One or more lines or text message or image

</span><span class="tag">&lt;/marquee&gt;</span></pre>
<h4>The &lt;marquee&gt; Tag Attributes</h4>
<p>Following is the list of important attributes which can be used with &lt;marquee&gt; tag.</p>
<table class="table table-bordered">
<tbody><tr><th>Attribute</th><th>Description</th></tr>
<tr><td>width</td><td>This specifies the width of the marquee. This can be a value like 10 or 20% etc.</td></tr>
<tr><td>height</td><td>This specifies the height of the marquee. This can be a value like 10 or 20% etc.</td></tr>
<tr><td>direction</td><td>This specifies the direction in which marquee should scroll. This can be a value like <i>up</i>, <i>down</i>, <i>left</i> or <i>right</i>.</td></tr>
<tr><td>behavior</td><td>This specifies the type of scrolling of the marquee. This can have a value like <i>scroll</i>, <i>slide</i> and <i>alternate</i>.</td></tr>
<tr><td>scrolldelay</td><td>This specifies how long to delay between each jump. This will have a value like 10 etc.</td></tr>
<tr><td>scrollamount</td><td>This specifies the speed of marquee text. This can have a value like 10 etc.</td></tr>
<tr><td>loop</td><td>This specifies how many times to loop. The default value is INFINITE, which means that the marquee loops endlessly.</td></tr>
<tr><td>bgcolor</td><td>This specifies background color in terms of color name or color hex value.</td></tr>
<tr><td>hspace</td><td>This specifies horizontal space around the marquee.  This can be a value like 10 or 20% etc.</td></tr>
<tr><td>vspace</td><td>This specifies vertical space around the marquee. This can be a value like 10 or 20% etc.</td></tr>
</tbody></table>
<p>Below are few examples to demonstrate the usage of marquee tag.</p>
<h4>Examples - 1</h4>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML marquee Tag</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;marquee&gt;</span><span class="pln">This is basic example of marquee</span><span class="tag">&lt;/marquee&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<marquee>This is basic example of marquee</marquee>
</div>
<h4>Examples - 2</h4>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML marquee Tag</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;marquee</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"50%"</span><span class="tag">&gt;</span><span class="pln">This example will take only 50% width</span><span class="tag">&lt;/marquee&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<marquee width="50%" style="width: 50%;">This example will take only 50% width</marquee>
</div>
<h4>Examples - 3</h4>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML marquee Tag</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;marquee</span><span class="pln"> </span><span class="atn">direction</span><span class="pun">=</span><span class="atv">"right"</span><span class="tag">&gt;</span><span class="pln">This text will scroll from left to right</span><span class="tag">&lt;/marquee&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
 <marquee direction="right">This text will scroll from left to right</marquee>
</div>
<h4>Examples - 4</h4>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML marquee Tag</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;marquee</span><span class="pln"> </span><span class="atn">direction</span><span class="pun">=</span><span class="atv">"up"</span><span class="tag">&gt;</span><span class="pln">This text will scroll from bottom to up</span><span class="tag">&lt;/marquee&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<marquee direction="up">This text will scroll from bottom to up</marquee>
</div>












</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="29_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="31_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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