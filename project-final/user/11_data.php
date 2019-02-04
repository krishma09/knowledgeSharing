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
	$sid=11;
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

<h4>HTML Formatting Elements</h4>
<p>In the previous chapter, you learned about the HTML <strong>style attribute</strong>.</p>
<p>HTML also defines special <strong>elements</strong> for defining 
text with a special <strong>meaning</strong>.</p>
<p>HTML uses elements like &lt;b&gt; and &lt;i&gt; for formatting output,
like <b>bold</b> or <i>italic</i> text.</p>
<p>Formatting elements were designed to display special types of text:</p>
<ul>
 <li>&lt;b&gt; - Bold text</li>
 <li>&lt;strong&gt; - Important text</li>
 <li>&lt;i&gt; - Italic text</li>
 <li>&lt;em&gt; - Emphasized text</li>
 <li>&lt;mark&gt; - Marked text</li>
 <li>&lt;small&gt; - Small text</li>
 <li>&lt;del&gt; - Deleted text</li>
 <li>&lt;ins&gt; - Inserted text</li>
 <li>&lt;sub&gt; - Subscript text</li>
 <li>&lt;sup&gt; - Superscript text</li>
</ul>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>


<h4>HTML &lt;b&gt; and &lt;strong&gt; Elements</h4>
<p>The HTML <strong>&lt;b&gt;</strong> element defines <strong>bold</strong> text, 
without any extra importance.</p>
<div class="w3-example" style="padding-left:50px;">
<h5>Example :</h5>
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
    <span style="color:brown"><span style="color:mediumblue">&lt;</span>b<span style="color:mediumblue">&gt;</span></span>This text is bold<span style="color:brown"><span style="color:mediumblue">&lt;</span>/b<span style="color:mediumblue">&gt;</span></span></div>
</div><br>
<p>The HTML <strong>&lt;strong&gt;</strong> element defines <strong>strong</strong> 
text, with added semantic "strong" importance.</p>
<div class="w3-example" style="padding-left:50px;">
<h5>Example :</h5>
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
     <span style="color:brown"><span style="color:mediumblue">&lt;</span>strong<span style="color:mediumblue">&gt;</span></span>This text is strong<span style="color:brown"><span style="color:mediumblue">&lt;</span>/strong<span style="color:mediumblue">&gt;</span></span></div>
</div><br>
<h4>HTML &lt;i&gt; and &lt;em&gt; Elements</h4>
<p>The HTML <strong>&lt;i&gt;</strong> element defines <em>italic</em> text, without any extra importance.</p>
<div class="w3-example" style="padding-left:50px;">
<h5>Example :</h5>
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
    <span style="color:brown"><span style="color:mediumblue">&lt;</span>i<span style="color:mediumblue">&gt;</span></span>This text is italic<span style="color:brown"><span style="color:mediumblue">&lt;</span>/i<span style="color:mediumblue">&gt;</span></span></div>
</div>
<br>
<p>The HTML <strong>&lt;em&gt;</strong> element defines <em>emphasized</em> 
text, with added semantic importance.</p>
<div class="w3-example" style="padding-left:50px;">
<h5>Example :</h5>
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
    <span style="color:brown"><span style="color:mediumblue">&lt;</span>em<span style="color:mediumblue">&gt;</span></span>This text is 
 emphasized<span style="color:brown"><span style="color:mediumblue">&lt;</span>/em<span style="color:mediumblue">&gt;</span></span></div>
</div>
<br>
<div class="w3-panel w3-note">
  <p><strong>Note:</strong> Browsers display &lt;strong&gt; as &lt;b&gt;, and &lt;em&gt; as &lt;i&gt;.
However, there is a difference in the meaning of these tags:
&lt;b&gt; and &lt;i&gt; defines bold and italic text, but
&lt;strong&gt; and &lt;em&gt; means that the text is "important".</p>
</div>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>


<h4>HTML Text Formatting Elements</h4>
<table class="w3-table-all notranslate">
<tbody><tr>
<th style="width:20%">Tag</th>
<th>Description</th>
</tr>
<tr>
<td>&lt;b&gt;</td>
<td>Defines bold text</td>
</tr>
<tr>
<td>&lt;em&gt;</td>
<td>Defines emphasized text&nbsp;</td>
</tr>
<tr>
<td>&lt;i&gt;</td>
<td>Defines italic text</td>
</tr>
<tr>
<td>&lt;small&gt;</td>
<td>Defines smaller text</td>
</tr>
<tr>
<td>&lt;strong&gt;</td>
<td>Defines important text</td>
</tr>
<tr>
<td>&lt;sub&gt;</td>
<td>Defines subscripted text</td>
</tr>
<tr>
<td>&lt;sup&gt;</td>
<td>Defines superscripted text</td>
</tr>
<tr>
<td>&lt;ins&gt;</td>
<td>Defines inserted text</td>
</tr>
<tr>
<td>&lt;del&gt;</td>
<td>Defines deleted text</td>
</tr>
<tr>
<td>&lt;mark&gt;</td>
<td>Defines marked/highlighted text</td>
</tr>
</tbody></table>

</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="10_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="12_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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