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
<title>Javascript Tutorials | knowledge.com</title>
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
	$sid=76;
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



<p>The <b>Number</b> object represents numerical date, either integers or floating-point numbers. In general, you do not need to worry about <b>Number</b> objects because the browser automatically converts number literals to instances of the number class.</p>
<h5>Syntax</h5>
<p>The syntax for creating a <b>number</b> object is as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> val </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Number</span><span class="pun">(</span><span class="pln">number</span><span class="pun">);</span></pre>
<p>In the place of number, if you provide any non-number argument, then the argument cannot be converted into a number, it returns <b>NaN</b> (Not-a-Number).</p>
<h4>Number  Properties</h4>
<p>Here is a list of each property and their description.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="20%">Property</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/number_max_value.htm">MAX_VALUE</a></p></td>
<td>The largest possible value a number in JavaScript can have 1.7976931348623157E+308</td>
</tr>
<tr>
<td><p><a href="/javascript/number_min_value.htm">MIN_VALUE</a></p></td>
<td>The smallest possible value a number in JavaScript can have 5E-324</td>
</tr>
<tr>
<td><p><a href="/javascript/number_nan.htm">NaN</a></p></td>
<td>Equal to a value that is not a number.</td>
</tr>
<tr>
<td><p><a href="/javascript/number_negative_infinity.htm">NEGATIVE_INFINITY</a></p></td>
<td>A value that is less than MIN_VALUE.</td>
</tr>
<tr>
<td><p><a href="/javascript/number_positive_infinity.htm">POSITIVE_INFINITY</a></p></td>
<td>A value that is greater than MAX_VALUE</td>
</tr>
<tr>
<td><p><a href="/javascript/object_prototype.htm">prototype</a></p></td>
<td>A static property of the Number object. Use the prototype property to assign new properties and methods to the Number object in the current document</td>
</tr>
<tr>
<td><p><a href="/javascript/number_constructor.htm">constructor</a></p></td>
<td>Returns the function that created this object's instance. By default this is the Number object.</td>
</tr>
</tbody></table>
<p>In the following sections, we will take a few examples to demonstrate the properties of Number.</p>
<h4>Number  Methods</h4>
<p>The Number object contains only the default methods that are a part of every object's definition.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="20%">Method</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/number_toexponential.htm">toExponential()</a></p></td>
<td>Forces a number to display in exponential notation, even if the number is in the range in which JavaScript normally uses standard notation.</td>
</tr>
<tr>
<td><p><a href="/javascript/number_tofixed.htm">toFixed()</a></p></td>
<td>Formats a number with a specific number of digits to the right of the decimal.</td>
</tr>
<tr>
<td><p><a href="/javascript/number_tolocalestring.htm">toLocaleString()</a></p></td>
<td>Returns a string value version of the current number in a format that may vary according to a browser's local settings.</td>
</tr>
<tr>
<td><p><a href="/javascript/number_toprecision.htm">toPrecision()</a></p></td>
<td>Defines how many total digits (including digits to the left and right of the decimal) to display of a number.</td>
</tr>
<tr>
<td><p><a href="/javascript/number_tostring.htm">toString()</a></p></td>
<td>Returns the string representation of the number's value.</td>
</tr>
<tr>
<td><p><a href="/javascript/number_valueof.htm">valueOf()</a></p></td>
<td>Returns the number's value.</td>
</tr>
</tbody></table>
<p>In the following sections, we will have a few examples to explain the methods of Number.</p>







</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="75_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="77_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'javascript_header.php'; ?>
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