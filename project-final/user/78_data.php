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
	$sid=78;
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






<p>The <b>String</b> object lets you work with a series of characters; it wraps Javascript's string primitive data type with a number of helper methods.</p>
<p>As JavaScript automatically converts between string primitives and String objects, you can call any of the helper methods of the String object on a string primitive.</p>
<h5>Syntax</h5>
<p>Use the following syntax to create a String object −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> val </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">String</span><span class="pun">(</span><span class="kwd">string</span><span class="pun">);</span></pre>
<p>The <b>String</b> parameter is a series of characters that has been properly encoded.</p>
<h4>String  Properties</h4>
<p>Here is a list of the properties of String object and their description.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="20%">Property</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/string_constructor.htm">constructor </a></p></td>
<td>Returns a reference to the String function that created the object.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_length.htm">length </a></p></td>
<td>Returns the length of the string.</td>
</tr>
<tr>
<td><p><a href="/javascript/object_prototype.htm">prototype</a></p></td>
<td>The prototype property allows you to add properties and methods to an object.</td>
</tr>
</tbody></table>
<p>In the following sections, we will have a few examples to demonstrate the usage of String properties.</p>
<h4>String  Methods</h4>
<p>Here is a list of the methods available in String object along with their description.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="20%">Method</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/string_charat.htm">charAt()</a></p></td>
<td>Returns the character at the specified index.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_charcodeat.htm">charCodeAt()</a></p></td>
<td>Returns a number indicating the Unicode value of the character at the given index.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_concat.htm">concat()</a></p></td>
<td>Combines the text of two strings and returns a new string.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_indexof.htm">indexOf()</a></p></td>
<td>Returns the index within the calling String object of the first occurrence of the specified value, or -1 if not found.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_lastindexof.htm">lastIndexOf()</a></p></td>
<td>Returns the index within the calling String object of the last occurrence of the specified value, or -1 if not found.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_localecompare.htm">localeCompare()</a></p></td>
<td>Returns a number indicating whether a reference string comes before or after or is the same as the given string in sort order.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_match.htm">match()</a></p></td>
<td>Used to match a regular expression against a string.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_replace.htm">replace()</a></p></td>
<td>Used to find a match between a regular expression and a string, and to replace the matched substring with a new substring.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_search.htm">search()</a></p></td>
<td>Executes the search for a match between a regular expression and a specified string.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_slice.htm">slice()</a></p></td>
<td>Extracts a section of a string and returns a new string.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_split.htm">split()</a></p></td>
<td>Splits a String object into an array of strings by separating the string into substrings.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_substr.htm">substr()</a></p></td>
<td>Returns the characters in a string beginning at the specified location through the specified number of characters.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_substring.htm">substring()</a></p></td>
<td>Returns the characters in a string between two indexes into the string.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_tolocalelowercase.htm">toLocaleLowerCase()</a></p></td>
<td>The characters within a string are converted to lower case while respecting the current locale.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_tolocaleuppercase.htm">toLocaleUpperCase()</a></p></td>
<td>The characters within a string are converted to upper case while respecting the current locale.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_tolowercase.htm">toLowerCase()</a></p></td>
<td>Returns the calling string value converted to lower case.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_tostring.htm">toString()</a></p></td>
<td>Returns a string representing the specified object.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_touppercase.htm">toUpperCase()</a></p></td>
<td>Returns the calling string value converted to uppercase.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_valueof.htm">valueOf()</a></p></td>
<td>Returns the primitive value of the specified object.</td>
</tr>
</tbody></table>
<h4>String HTML Wrappers</h4>
<p>Here is a list of the methods that return a copy of the string wrapped inside an appropriate HTML tag.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="20%">Method</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/string_anchor.htm">anchor()</a></p></td>
<td>Creates an HTML anchor that is used as a hypertext target.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_big.htm">big()</a></p></td>
<td>Creates a string to be displayed in a big font as if it were in a &lt;big&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_blink.htm">blink()</a></p></td>
<td>Creates a string to blink as if it were in a &lt;blink&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_bold.htm">bold()</a></p></td>
<td>Creates a string to be displayed as bold as if it were in a &lt;b&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_fixed.htm">fixed()</a></p></td>
<td>Causes a string to be displayed in fixed-pitch font as if it were in a &lt;tt&gt; tag</td>
</tr>
<tr>
<td><p><a href="/javascript/string_fontcolor.htm">fontcolor()</a></p></td>
<td>Causes a string to be displayed in the specified color as if it were in a &lt;font color="color"&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_fontsize.htm">fontsize()</a></p></td>
<td>Causes a string to be displayed in the specified font size as if it were in a &lt;font size="size"&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_italics.htm">italics()</a></p></td>
<td>Causes a string to be italic, as if it were in an &lt;i&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_link.htm">link()</a></p></td>
<td>Creates an HTML hypertext link that requests another URL.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_small.htm">small()</a></p></td>
<td>Causes a string to be displayed in a small font, as if it were in a &lt;small&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_strike.htm">strike()</a></p></td>
<td>Causes a string to be displayed as struck-out text, as if it were in a &lt;strike&gt; tag.</td>
</tr>
<tr>
<td><p><a href="/javascript/string_sub.htm">sub()</a></p></td>
<td>Causes a string to be displayed as a subscript, as if it were in a &lt;sub&gt; tag</td>
</tr> 
<tr>
<td><p><a href="/javascript/string_sup.htm">sup()</a></p></td>
<td>Causes a string to be displayed as a superscript, as if it were in a &lt;sup&gt; tag</td>
</tr>
</tbody></table>
<p>In the following sections, we will have a few examples to demonstrate the usage of String methods.</p>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="77_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="79_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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