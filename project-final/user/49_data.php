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
<title>CSS Tutorials | knowledge.com</title>
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
	$sid=49;
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





<p>Lists are very helpful in conveying a set of either numbered or bullet points. This chapter teaches you how to control list type, position, style, etc., using CSS.</p>
<p>We have the following five CSS properties, which can be used to control lists:</p>
<ul class="list">
<li><p>The <b>list-style-type</b> allows you to control the shape or appearance of the marker.</p></li>
<li><p>The <b>list-style-position</b> specifies whether a long point that wraps to a second line should align with the first line or start underneath the start of the marker.</p></li>
<li><p>The <b>list-style-image</b> specifies an image for the marker rather than a bullet point or number.</p></li>
<li><p>The <b>list-style</b> serves as shorthand for the preceding properties.</p></li>
<li><p>The <b>marker-offset</b> specifies the distance between a marker and the text in the list.</p></li>
</ul>
<p>Now, we will see how to use these properties with examples.</p>
<h4>The list-style-type Property</h4>
<p>The <i>list-style-type</i> property allows you to control the shape or style of bullet point (also known as a marker) in the case of unordered lists and the style of numbering characters in ordered lists.</p>
<p>Here are the values which can be used for an unordered list −</p>
<table class="table table-bordered">
<tbody><tr>
<th>Value</th>
<th>Description</th>
</tr>
<tr>
<td>none</td>
<td>NA</td>
</tr>
<tr>
<td>disc (default)</td>
<td>A filled-in circle</td>
</tr>
<tr>
<td>circle</td>
<td>An empty circle</td>
</tr>
<tr>
<td>square</td>
<td>A filled-in square</td>
</tr>
</tbody></table>
<p>Here are the values, which can be used for an ordered list −</p>
<table class="table table-bordered">
<tbody><tr>
<th>Value</th>
<th>Description</th>
<th>Example</th>
</tr>
<tr>
<td>decimal</td>
<td>Number</td>
<td>1,2,3,4,5</td>
</tr>
<tr>
<td style="width:26%;">decimal-leading-zero</td>
<td>0 before the number</td>
<td>01, 02, 03, 04, 05</td>
</tr>
<tr>
<td>lower-alpha</td>
<td>Lowercase alphanumeric characters</td>
<td>a, b, c, d, e</td>
</tr>
<tr>
<td>upper-alpha</td>
<td>Uppercase alphanumeric characters</td>
<td>A, B, C, D, E</td>
</tr>
<tr>
<td>lower-roman</td>
<td>Lowercase Roman numerals</td>
<td>i, ii, iii, iv, v</td>
</tr>
<tr>
<td>upper-roman</td>
<td>Uppercase Roman numerals</td>
<td>I, II, III, IV, V</td>
</tr>
<tr>
<td>lower-greek</td>
<td>The marker is lower-greek</td>
<td>alpha, beta, gamma</td>
</tr>
<tr>
<td>lower-latin</td>
<td>The marker is lower-latin</td>
<td>a, b, c, d, e</td>
</tr>
<tr>
<td>upper-latin</td>
<td>The marker is upper-latin</td>
<td>A, B, C, D, E</td>
</tr>
<tr>
<td>hebrew</td>
<td style="width:54%;">The marker is traditional Hebrew numbering</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>armenian</td>
<td>The marker is traditional Armenian numbering</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>georgian</td>
<td>The marker is traditional Georgian numbering</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>cjk-ideographic</td>
<td>The marker is plain ideographic numbers</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>hiragana</td>
<td>The marker is hiragana</td>
<td>a, i, u, e, o, ka, ki</td>
</tr>
<tr>
<td>katakana</td>
<td>The marker is katakana</td>
<td>A, I, U, E, O, KA, KI</td>
</tr>
<tr>
<td>hiragana-iroha</td>
<td>The marker is hiragana-iroha</td>
<td>i, ro, ha, ni, ho, he, to</td>
</tr>
<tr>
<td>katakana-iroha</td>
<td>The marker is katakana-iroha</td>
<td>I, RO, HA, NI, HO, HE, TO</td>
</tr>
</tbody></table>
<p>Here is an example −</p>
<pre class="prettyprint notranslate tryit">&lt;html&gt;
   &lt;head&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;ul style="list-style-type:circle;"&gt;
         &lt;li&gt;Maths&lt;/li&gt;
         &lt;li&gt;Social Science&lt;/li&gt;
         &lt;li&gt;Physics&lt;/li&gt;
      &lt;/ul&gt;
      
      &lt;ul style="list-style-type:square;"&gt;
         &lt;li&gt;Maths&lt;/li&gt;
         &lt;li&gt;Social Science&lt;/li&gt;
         &lt;li&gt;Physics&lt;/li&gt;
      &lt;/ul&gt;
      
      &lt;ol style="list-style-type:decimal;"&gt;
         &lt;li&gt;Maths&lt;/li&gt;
         &lt;li&gt;Social Science&lt;/li&gt;
         &lt;li&gt;Physics&lt;/li&gt;
      &lt;/ol&gt;
      
      &lt;ol style="list-style-type:lower-alpha;"&gt;
         &lt;li&gt;Maths&lt;/li&gt;
         &lt;li&gt;Social Science&lt;/li&gt;
         &lt;li&gt;Physics&lt;/li&gt;
      &lt;/ol&gt;
      
      &lt;ol style="list-style-type:lower-roman;"&gt;
         &lt;li&gt;Maths&lt;/li&gt;
         &lt;li&gt;Social Science&lt;/li&gt;
         &lt;li&gt;Physics&lt;/li&gt;
      &lt;/ol&gt;
   &lt;/body&gt;
   
&lt;/html&gt;
</pre>

<h4>The list-style-position Property</h4>
<p>The <i>list-style-position</i> property indicates whether the marker should appear inside or outside of the box containing the bullet points. It can have one the two values −</p>
<table class="table table-bordered">
<tbody><tr>
<th>Value</th>
<th>Description</th>
</tr>
<tr>
<td>none</td>
<td>NA</td>
</tr>
<tr>
<td>inside</td>
<td>If the text goes onto a second line, the text will wrap underneath the marker. It will also appear indented to where the text would have started if the list had a value of outside.</td>
</tr>
<tr>
<td>outside</td>
<td>If the text goes onto a second line, the text will be aligned with the start of the first line (to the right of the bullet).</td>
</tr>
</tbody></table>
<p>Here is an example −</p>
<pre class="prettyprint notranslate tryit">&lt;html&gt;
   &lt;head&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;ul style="list-style-type:circle; list-style-position:outside;"&gt;
         &lt;li&gt;Maths&lt;/li&gt;
         &lt;li&gt;Social Science&lt;/li&gt;
         &lt;li&gt;Physics&lt;/li&gt;
      &lt;/ul&gt;
      
      &lt;ul style="list-style-type:square;list-style-position:inside;"&gt;
         &lt;li&gt;Maths&lt;/li&gt;
         &lt;li&gt;Social Science&lt;/li&gt;
         &lt;li&gt;Physics&lt;/li&gt;
      &lt;/ul&gt;
      
      &lt;ol style="list-style-type:decimal;list-style-position:outside;"&gt;
         &lt;li&gt;Maths&lt;/li&gt;
         &lt;li&gt;Social Science&lt;/li&gt;
         &lt;li&gt;Physics&lt;/li&gt;
      &lt;/ol&gt;
      
      &lt;ol style="list-style-type:lower-alpha;list-style-position:inside;"&gt;
         &lt;li&gt;Maths&lt;/li&gt;
         &lt;li&gt;Social Science&lt;/li&gt;
         &lt;li&gt;Physics&lt;/li&gt;
      &lt;/ol&gt;
   &lt;/body&gt;
   
&lt;/html&gt;
</pre>
<h4>The list-style-image Property</h4>
<p>The <i>list-style-image</i> allows you to specify an image so that you can use your own bullet style. The syntax is similar to the background-image property with the letters url starting the value of the property followed by the URL in brackets. If it does not find the given image then default bullets are used.</p>
<p>Here is an example −</p>
<pre class="prettyprint notranslate tryit">&lt;html&gt;
   &lt;head&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;ul&gt;
         &lt;li style="list-style-image: url(/images/bullet.gif);"&gt;Maths&lt;/li&gt;
         &lt;li&gt;Social Science&lt;/li&gt;
         &lt;li&gt;Physics&lt;/li&gt;
      &lt;/ul&gt;
      
      &lt;ol&gt;
         &lt;li style="list-style-image: url(/images/bullet.gif);"&gt;Maths&lt;/li&gt;
         &lt;li&gt;Social Science&lt;/li&gt;
         &lt;li&gt;Physics&lt;/li&gt;
      &lt;/ol&gt;
   &lt;/body&gt;
   
&lt;/html&gt;
</pre>
<h4>The list-style Property</h4>
<p>The <i>list-style</i> allows you to specify all the list properties into a single expression. These properties can appear in any order.</p>
<p>Here is an example −</p>
<pre class="prettyprint notranslate tryit">&lt;html&gt;
   &lt;head&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;ul style="list-style: inside square;"&gt;
         &lt;li&gt;Maths&lt;/li&gt;
         &lt;li&gt;Social Science&lt;/li&gt;
         &lt;li&gt;Physics&lt;/li&gt;
      &lt;/ul&gt;
      
      &lt;ol style="list-style: outside upper-alpha;"&gt;
         &lt;li&gt;Maths&lt;/li&gt;
         &lt;li&gt;Social Science&lt;/li&gt;
         &lt;li&gt;Physics&lt;/li&gt;
      &lt;/ol&gt;
   &lt;/body&gt;
   
&lt;/html&gt; 
</pre>
<h4>The marker-offset Property</h4>
<p>The <i>marker-offset</i> property allows you to specify the distance between the marker and the text relating to that marker. Its value should be a length as shown in the following example −</p>
<p>Unfortunately, this property is not supported in IE 6 or Netscape 7.</p>
<p>Here is an example −</p>
<pre class="prettyprint notranslate tryit">&lt;html&gt;
   &lt;head&gt;
   &lt;/head&gt;
   
   &lt;body&gt;
      &lt;ul style="list-style: inside square; marker-offset:2em;"&gt;
         &lt;li&gt;Maths&lt;/li&gt;
         &lt;li&gt;Social Science&lt;/li&gt;
         &lt;li&gt;Physics&lt;/li&gt;
      &lt;/ul&gt;
      
      &lt;ol style="list-style: outside upper-alpha; marker-offset:2cm;"&gt;
         &lt;li&gt;Maths&lt;/li&gt;
         &lt;li&gt;Social Science&lt;/li&gt;
         &lt;li&gt;Physics&lt;/li&gt;
      &lt;/ol&gt;
   &lt;/body&gt;
   
&lt;/html&gt;
</pre>












</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="48_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="50_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'css_header.php'; ?>
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