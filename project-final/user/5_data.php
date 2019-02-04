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
	$sid=5;
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

<h4>HTML Elements</h4>
<p>An HTML element usually consists of a <strong>start</strong> tag and <strong>end</strong> tag, 
with the content inserted in between:</p>
<div class="htmlHigh" style="font-size:20px;padding:30px;margin-bottom:20px;">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>tagname<span style="color:mediumblue">&gt;</span></span>Content goes here...<span style="color:brown"><span style="color:mediumblue">&lt;</span>/tagname<span style="color:mediumblue">&gt;</span></span>
</div>
<p>The HTML <strong>element</strong> is everything from the start tag to the end tag:</p>
<div class="htmlHigh" style="font-size:20px;padding:30px;margin-bottom:20px;">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>p<span style="color:mediumblue">&gt;</span></span>My first paragraph.<span style="color:brown"><span style="color:mediumblue">&lt;</span>/p<span style="color:mediumblue">&gt;</span></span>
</div>
<table class="w3-table-all notranslate">
<tbody><tr>
<th style="width:33%">Start tag</th>
<th style="width:33%">Element content</th>
<th>End tag</th>
</tr>
<tr>
<td>&lt;h1&gt;</td>
<td>My First Heading</td>
<td>&lt;/h1&gt;</td>
</tr>
<tr>
<td>&lt;p&gt;</td>
<td>My first paragraph.</td>
<td>&lt;/p&gt;</td>
</tr>
<tr>
<td>&lt;br&gt;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</tbody></table>
<br><br>
<div class="w3-panel w3-note">
<p>HTML elements with no content are called empty elements. Empty elements do not have an end tag, such as the &lt;br&gt; 
  element (which indicates a line break).</p>
</div>


<div class="sc_line sc_line_style_solid margin_top_3em"></div>


<h4>Nested HTML Elements</h4>
<p>HTML elements can be nested (elements can contain elements).</p>
<p>All HTML documents consist of nested HTML elements.</p>
<p>This example contains four HTML elements:</p>
<div class="w3-example">
<h5>Example :</h5>
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>!DOCTYPE<span style="color:red"> html</span><span style="color:mediumblue">&gt;</span></span><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>html<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>body<span style="color:mediumblue">&gt;</span></span><br><br>
 <span style="color:brown"><span style="color:mediumblue">&lt;</span>h1<span style="color:mediumblue">&gt;</span></span>My First Heading<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h1<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>p<span style="color:mediumblue">&gt;</span></span>My first paragraph.<span style="color:brown"><span style="color:mediumblue">&lt;</span>/p<span style="color:mediumblue">&gt;</span></span><br><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>/body<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>/html<span style="color:mediumblue">&gt;</span></span>
</div>
</div>

<h5>Example Explained :</h5>
<p>The <strong>&lt;html&gt;</strong> element defines the <strong>whole document</strong>.</p>
<p>It has a <strong>start</strong> tag &lt;html&gt; and an <strong>end</strong> tag &lt;/html&gt;.</p>
<p>The element <strong>content</strong> is another HTML element (the &lt;body&gt; element).</p>

<div class="w3-example" style="padding-left:50px;">
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>html<span style="color:mediumblue">&gt;</span></span><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>body<span style="color:mediumblue">&gt;</span></span><br><br>
 <span style="color:brown"><span style="color:mediumblue">&lt;</span>h1<span style="color:mediumblue">&gt;</span></span>My First Heading<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h1<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>p<span style="color:mediumblue">&gt;</span></span>My first paragraph.<span style="color:brown"><span style="color:mediumblue">&lt;</span>/p<span style="color:mediumblue">&gt;</span></span><br><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>/body<span style="color:mediumblue">&gt;</span></span><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>/html<span style="color:mediumblue">&gt;</span></span>
</div></div>
<p>The <strong>&lt;body&gt;</strong> element defines the <strong>document body</strong>.</p>
<p>It has a <strong>start</strong> tag &lt;body&gt; and an <strong>end</strong> tag &lt;/body&gt;.</p>
<p>The element <strong>content</strong> is two other HTML elements (&lt;h1&gt; and &lt;p&gt;).</p>


<div class="w3-example" style="padding-left:50px;">
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>body<span style="color:mediumblue">&gt;</span></span><br><br>
 <span style="color:brown"><span style="color:mediumblue">&lt;</span>h1<span style="color:mediumblue">&gt;</span></span>My First Heading<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h1<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>p<span style="color:mediumblue">&gt;</span></span>My first paragraph.<span style="color:brown"><span style="color:mediumblue">&lt;</span>/p<span style="color:mediumblue">&gt;</span></span><br><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>/body<span style="color:mediumblue">&gt;</span></span>
</div></div>
<br>
<p>The <strong>&lt;h1&gt;</strong> element defines a <strong>heading</strong>.</p>
<p>It has a <strong>start</strong> tag &lt;h1&gt; and an 
<strong>end</strong> tag &lt;/h1&gt;.</p>
<p>The element <strong>content</strong> is: My First Heading.</p>


<div class="w3-example" style="padding-left:50px;">
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>h1<span style="color:mediumblue">&gt;</span></span>My First Heading<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h1<span style="color:mediumblue">&gt;</span></span>
</div>
</div>
<br>

<p>The <strong>&lt;p&gt;</strong> element defines a <strong>paragraph</strong>.</p>
<p>It has a <strong>start</strong> tag &lt;p&gt; and an 
<strong>end</strong> tag &lt;/p&gt;.</p>
<p>The element <strong>content</strong> is: My first paragraph.</p>
<div class="w3-example" style="padding-left:50px;">
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>p<span style="color:mediumblue">&gt;</span></span>My first paragraph.<span style="color:brown"><span style="color:mediumblue">&lt;</span>/p<span style="color:mediumblue">&gt;</span></span>
</div>
</div>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<h4>Empty HTML Elements</h4>
<p>HTML elements with no content are called empty elements.</p>
<p>&lt;br&gt; is an empty element without a closing tag (the &lt;br&gt; tag defines a line break).</p>
<p>Empty elements can be "closed" in the opening tag like this: &lt;br /&gt;.</p>
<p>HTML5 does not require empty elements to be closed. But if you want stricter 
validation, or if you need to make your document readable by XML parsers, you 
must close all HTML elements properly.</p>
 


</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="4_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="6_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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