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
	$sid=6;
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


<p class="intro">Attributes provide additional information about HTML elements.</p>


<div class="sc_line sc_line_style_solid margin_top_3em"></div>




<h4>HTML Attributes</h4>
<ul>
  <li>All HTML elements can have <b>attributes</b></li>
  <li>Attributes provide <b>additional information</b> about an element</li>
  <li>Attributes are always specified in <b>the start tag</b></li>
  <li>Attributes usually come in name/value pairs like: <b>name="value"</b></li>
</ul>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>


<h4>The lang Attribute</h4>
<p>The language of the document can be declared in the <strong>&lt;html&gt;</strong> tag.</p>
<p>The language is declared with the <strong>lang</strong> attribute.</p>
<p>Declaring a language is important for accessibility applications (screen readers) and search engines:</p>
<div class="w3-example" style="padding-left:50px;">
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>!DOCTYPE<span style="color:red"> html</span><span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>html<span style="color:red"> lang<span style="color:mediumblue">="en-US"</span></span><span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>body<span style="color:mediumblue">&gt;</span></span><br><br>
 ...<br><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>/body<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>/html<span style="color:mediumblue">&gt;</span></span>
</div>
</div>

<p>The first two letters specify the language (en). If there is a dialect, use two more letters (US).</p>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>



<h4>The title Attribute</h4>
<p>Here, a <strong>title</strong> attribute is added to the <strong>&lt;p&gt;</strong> 
element.
The value of the title attribute will be displayed as a tooltip when 
you mouse over the paragraph:</p>
<div class="w3-example" style="padding-left:50px;">
<h5>Example :</h5>
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
 <span style="color:brown"><span style="color:mediumblue">&lt;</span>p<span style="color:red"> title<span style="color:mediumblue">="I'm a tooltip"</span></span><span style="color:mediumblue">&gt;</span></span><br>This is a paragraph.<br><span style="color:brown"><span style="color:mediumblue">&lt;</span>/p<span style="color:mediumblue">&gt;</span></span>
</div>
</div>

<h4>The href Attribute</h4>

<p>HTML links are defined with the <strong>&lt;a&gt;</strong> tag. The link address is specified in the <b>href</b> attribute:</p>
<div class="w3-example" style="padding-left:50px;">
<h5>Example :</h5>
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>a<span style="color:red"> href<span style="color:mediumblue">="https://www.knowledge.com"</span></span><span style="color:mediumblue">&gt;</span></span>This is a link<span style="color:brown"><span style="color:mediumblue">&lt;</span>/a<span style="color:mediumblue">&gt;</span></span>
</div>
</div>
<br>
<p>You will learn more about links and the &lt;a&gt; tag later in this tutorial.</p>


<h4>Size Attributes</h4>
<p>HTML images are defined with the <strong>&lt;img&gt;</strong> tag.</p>
<p>The filename of the source (<strong>src</strong>), and the size of the image (<strong>width</strong>
and <strong>height</strong>) are all provided as <strong>attributes</strong>:</p>

<div class="w3-example" style="padding-left:50px;">
<h5>Example :</h5>
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>img<span style="color:red"> src<span style="color:mediumblue">="knowledge.jpg"</span> width<span style="color:mediumblue">="104"</span> height<span style="color:mediumblue">="142"</span></span><span style="color:mediumblue">&gt;</span></span>
</div>
</div>
<br>
<p>The image size is specified in pixels: width="104" means 104 screen pixels wide.</p>
<p>You will learn more about images and the &lt;img&gt; tag later in this tutorial.</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>



<h4>Chapter Summary</h4>
<ul>
  <li>All HTML elements can have <strong>attributes</strong></li>
  <li>The <strong>title</strong> attribute provides additional "tool-tip"  information</li>
  <li>The <strong>href</strong> attribute provides address information for links</li>
  <li>The <strong>width</strong> and <strong>height</strong> attributes provide size information for images</li>
  <li>The <strong>alt</strong> attribute provides text for screen readers</li>
  <li>At W3Schools we always use <strong>lowercase</strong> attribute names</li>
  <li>At W3Schools we always <strong>quote</strong> attribute values with double quotes</li>
</ul>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>



<h4>HTML Attributes</h4>
<p>Below is an alphabetical list of some attributes often used in HTML:</p>
<table class="w3-table-all notranslate">
<tbody><tr>
<th style="width:15%">Attribute</th>
<th>Description</th>
</tr>
<tr>
<td>alt</td>
<td>Specifies an alternative text for an image, when the image cannot be 
displayed</td>
</tr>
<tr>
<td>disabled</td>
<td>Specifies that an input element should be disabled</td>
</tr>
<tr>
<td>href</td>
<td>Specifies the URL (web address) for a link</td>
</tr>
<tr>
<td>id</td>
<td>Specifies a unique id for an element</td>
</tr>
<tr>
<td>src</td>
<td>Specifies the URL (web address) for an image</td>
</tr>
<tr>
<td>style</td>
<td>Specifies an inline CSS style for an element</td>
</tr>
<tr>
<td>title</td>
<td>Specifies extra information about an element (displayed as a tool tip)</td>
</tr>
</tbody></table>

 


</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="5_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="7_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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