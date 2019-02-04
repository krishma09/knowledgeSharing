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
	$sid=25;
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




<p>By default, your webpage background is white in color. You may not like it, but no worries. HTML provides you following two good ways to decorate your webpage background.</p>
<ul class="list">
<li>Html Background with Colors</li>
<li>Html Background with Images</li>
</ul>
<p>Now let's see both the approaches one by one using appropriate examples.</p>
<h4>Html Background with Colors</h4>
<p>The <b>bgcolor</b> attribute is used to control the background of an HTML element, specifically page body and table backgrounds. Following is the syntax to use bgcolor attribute with any HTML tag.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;tagname</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"color_value"</span><span class="pln">...</span><span class="tag">&gt;</span></pre>
<p>This color_value can be given in any of the following formats:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">&lt;!-- Format 1 - Use color name --&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"lime"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">
 
</span><span class="com">&lt;!-- Format 2 - Use hex value --&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"#f1f1f1"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">
 
</span><span class="com">&lt;!-- Format 3 - Use color value in RGB terms --&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"rgb(0,0,120)"</span><span class="pln"> </span><span class="tag">&gt;</span></pre>
<h5>Example</h5>
<p>Here are the examples to set background of an HTML tag:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Background Colors</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Format 1 - Use color name --&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"yellow"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100%"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;&lt;td&gt;</span><span class="pln">
This background is yellow
</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">
 
</span><span class="com">&lt;!-- Format 2 - Use hex value --&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"#6666FF"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100%"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;&lt;td&gt;</span><span class="pln">
This background is sky blue
</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">
 
</span><span class="com">&lt;!-- Format 3 - Use color value in RGB terms --&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"rgb(255,0,255)"</span><span class="pln">  </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100%"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;&lt;td&gt;</span><span class="pln">
This background is green
</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">

</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<!-- Format 1 - Use color name -->
<table style="background-color:yellow; color:#000" width="100%">
<tbody><tr><td>
This background is yellow
</td></tr>
</tbody></table>
 
<!-- Format 2 - Use hex value -->
<table style="background-color:#6666FF; color:#000" width="100%">
<tbody><tr><td>
This background is sky blue
</td></tr>
</tbody></table>
 
<!-- Format 3 - Use color value in RGB terms -->
<table style="background-color:#4a7d49; color:#000" width="100%">
<tbody><tr><td>
This background is green
</td></tr>
</tbody></table>
</div>
<h4>Html Background with Images</h4>
<p>The <b>background</b> attribute can also be used to control the background of an HTML elmement, specifically page body and table backgrounds. You can specify an image to set background of your HTML page or table. Following is the syntax to use background attribute with any HTML tag.</p>
<blockquote><b>Note: </b>The <i>background</i> attribute is deprecated and it is recommended to use Style Sheet for background setting.</blockquote>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;tagname</span><span class="pln"> </span><span class="atn">background</span><span class="pun">=</span><span class="atv">"Image URL"</span><span class="pln">...</span><span class="tag">&gt;</span></pre>
<p>The most frequently used image formats are JPEG, GIF and PNG images.</p>
<h5>Example</h5>
<p>Here are the examples to set background  images of a  table.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Background Images</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Set table background --&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">background</span><span class="pun">=</span><span class="atv">"/images/html.gif"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100%"</span><span class="pln"> </span><span class="atn">height</span><span class="pun">=</span><span class="atv">"100"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;&lt;td&gt;</span><span class="pln">
This background is filled up with HTML image.
</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">
 
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Patterned &amp; Transparent Backgrounds</h4>
<p>You might have seen many pattern or transparent backgrounds on various websites. This simply can be achieved by using patterned image or transparent image in the background.</p>
<p>It is suggested that while creating patterns or transparent GIF or PNG images, use the smallest dimensions possible even as small as 1x1 to avoid slow loading.</p>
<h5>Example</h5>
<p>Here are the examples to set background  pattern of a  table:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Background Images</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Set a table background using pattrern --&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">background</span><span class="pun">=</span><span class="atv">"/images/pattern1.gif"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100%"</span><span class="pln"> </span><span class="atn">height</span><span class="pun">=</span><span class="atv">"100"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;&lt;td&gt;</span><span class="pln">
This background is filled up with a pattern image.
</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Another example on table background using pattrern --&gt;</span><span class="pln">
</span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">background</span><span class="pun">=</span><span class="atv">"/images/pattern2.gif"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100%"</span><span class="pln"> </span><span class="atn">height</span><span class="pun">=</span><span class="atv">"100"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;tr&gt;&lt;td&gt;</span><span class="pln">
This background is filled up with a pattern image.
</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
</span><span class="tag">&lt;/table&gt;</span><span class="pln">
 
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>











</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="24_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="26_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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