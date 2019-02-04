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
	$sid=79;
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




<p>The <b>Array</b> object lets you store multiple values in a single variable. It stores a fixed-size sequential collection of elements of the same type. An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.</p>
<h5>Syntax</h5>
<p>Use the following syntax to create an <b>Array</b> object −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> fruits </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Array</span><span class="pun">(</span><span class="pln"> </span><span class="str">"apple"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"orange"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"mango"</span><span class="pln"> </span><span class="pun">);</span></pre>
<p>The <b>Array</b> parameter is a list of strings or integers. When you specify a single numeric parameter with the Array constructor, you specify the initial length of the array. The maximum length allowed for an array is 4,294,967,295.</p>
<p>You can create array by simply assigning values as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> fruits </span><span class="pun">=</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> </span><span class="str">"apple"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"orange"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"mango"</span><span class="pln"> </span><span class="pun">];</span></pre>
<p>You will use ordinal numbers to access and to set values inside an array as follows.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">fruits</span><span class="pun">[</span><span class="lit">0</span><span class="pun">]</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> the first element
fruits</span><span class="pun">[</span><span class="lit">1</span><span class="pun">]</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> the second element
fruits</span><span class="pun">[</span><span class="lit">2</span><span class="pun">]</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> the third element</span></pre>
<h4>Array  Properties</h4>
<p>Here is a list of the properties of the Array object along with their description.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="20%">Property</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/array_constructor.htm">constructor </a></p></td>
<td>Returns a reference to the array function that created the object.</td>
</tr>
<tr>
<td>index</td>
<td>The property represents the zero-based index of the match in the string</td>
</tr>
<tr>
<td>input</td>
<td>This property is only present in arrays created by regular expression matches.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_length.htm">length </a></p></td>
<td>Reflects the number of elements in an array.</td>
</tr>
<tr>
<td><p><a href="/javascript/object_prototype.htm">prototype</a></p></td>
<td>The prototype property allows you to add properties and methods to an object.</td>
</tr>
</tbody></table>
<p>In the following sections, we will have a few examples to illustrate the usage of Array properties.</p>
<h4>Array  Methods</h4>
<p>Here is a list of the methods of the Array object along with their description.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="20%">Method</th>
<th width="80%">Description</th>
</tr>
<tr>
<td><p><a href="/javascript/array_concat.htm">concat()</a></p></td>
<td>Returns a new array comprised of this array joined with other array(s) and/or value(s).</td>
</tr>
<tr>
<td><p><a href="/javascript/array_every.htm">every()</a></p></td>
<td>Returns true if every element in this array satisfies the provided testing function.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_filter.htm">filter()</a></p></td>
<td>Creates a new array with all of the elements of this array for which the provided filtering function returns true.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_foreach.htm">forEach()</a></p></td>
<td>Calls a function for each element in the array.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_indexof.htm">indexOf()</a></p></td>
<td>Returns the first (least) index of an element within the array equal to the specified value, or -1 if none is found.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_join.htm">join()</a></p></td>
<td>Joins all elements of an array into a string.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_lastindexof.htm">lastIndexOf()</a></p></td>
<td>Returns the last (greatest) index of an element within the array equal to the specified value, or -1 if none is found.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_map.htm">map()</a></p></td>
<td>Creates a new array with the results of calling a provided function on every element in this array.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_pop.htm">pop()</a></p></td>
<td>Removes the last element from an array and returns that element.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_push.htm">push()</a></p></td>
<td>Adds one or more elements to the end of an array and returns the new length of the array.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_reduce.htm">reduce()</a></p></td>
<td>Apply a function simultaneously against two values of the array (from left-to-right) as to reduce it to a single value.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_reduceright.htm">reduceRight()</a></p></td>
<td>Apply a function simultaneously against two values of the array (from right-to-left) as to reduce it to a single value.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_reverse.htm">reverse()</a></p></td>
<td>Reverses the order of the elements of an array -- the first becomes the last, and the last becomes the first.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_shift.htm">shift()</a></p></td>
<td>Removes the first element from an array and returns that element.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_slice.htm">slice()</a></p></td>
<td>Extracts a section of an array and returns a new array.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_some.htm">some()</a></p></td>
<td>Returns true if at least one element in this array satisfies the provided testing function.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_tosource.htm">toSource()</a></p></td>
<td>Represents the source code of an object</td>
</tr>
<tr>
<td><p><a href="/javascript/array_sort.htm">sort()</a></p></td>
<td>Sorts the elements of an array</td>
</tr>
<tr>
<td><p><a href="/javascript/array_splice.htm">splice()</a></p></td>
<td>Adds and/or removes elements from an array.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_tostring.htm">toString()</a></p></td>
<td>Returns a string representing the array and its elements.</td>
</tr>
<tr>
<td><p><a href="/javascript/array_unshift.htm">unshift()</a></p></td>
<td>Adds one or more elements to the front of an array and returns the new length of the array.</td>
</tr>
</tbody></table>
<p>In the following sections, we will have a few examples to demonstrate the usage of Array methods.</p>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="78_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="80_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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