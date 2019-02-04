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
<title>PHP Tutorials | knowledge.com</title>
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
	$sid=110;
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




<p>The main way to store information in the middle of a PHP program is by using a variable.</p>
<p>Here are the most important things to know about variables in PHP.</p>
<ul class="list">
<li><p>All variables in PHP are denoted with a leading dollar sign ($).</p></li>
<li><p>The value of a variable is the value of its most recent assignment.</p></li>
<li><p>Variables are assigned with the = operator, with the variable on the left-hand side and the expression to be evaluated on the right.</p></li>
<li><p>Variables can, but do not need, to be declared before assignment.</p></li>
<li><p>Variables in PHP do not have intrinsic types - a variable does not know in advance whether it will be used to store a number or a string of characters.</p></li>
<li><p>Variables used before they are assigned have default values.</p></li>
<li><p>PHP does a good job of automatically converting types from one to another when necessary.</p></li>
<li><p>PHP variables are Perl-like.</p></li>
</ul>
<p>PHP has a total of eight data types which we use to construct our variables −</p>
<ul class="list">
<li><p><b>Integers</b> − are whole numbers, without a decimal point, like 4195.</p></li>
<li><p><b>Doubles</b> − are floating-point numbers, like 3.14159 or 49.1.</p></li>
<li><p><b>Booleans</b> − have only two possible values either true or false.</p></li>
<li><p><b>NULL</b> − is a special type that only has one value: NULL.</p></li>
<li><p><b>Strings</b> − are sequences of characters, like 'PHP supports string operations.'</p></li>
<li><p><b>Arrays</b> − are named and indexed collections of other values.</p></li>
<li><p><b>Objects</b> − are instances of programmer-defined classes, which can package up both other kinds of values and functions that are specific to the class.</p></li>
<li><p><b>Resources</b> − are special variables that hold references to resources external to PHP (such as database connections).</p></li>
</ul>
<p>The first five are <i>simple types</i>, and the next two (arrays and objects) are compound - the compound types can package up other arbitrary values of arbitrary type, whereas the simple types cannot.</p>
<p>We will explain only simple data type in this chapters. Array and Objects will be explained separately.</p>
<h4>Integers</h4>
<p>They are whole numbers, without a decimal point, like 4195. They are the simplest type .they correspond to simple whole numbers, both positive and negative. Integers can be assigned to variables, or they can be used in expressions, like so −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$int_var </span><span class="pun">=</span><span class="pln"> </span><span class="lit">12345</span><span class="pun">;</span><span class="pln">
$another_int </span><span class="pun">=</span><span class="pln"> </span><span class="pun">-</span><span class="lit">12345</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="lit">12345</span><span class="pun">;</span></pre>
<p>Integer can be in decimal (base 10), octal (base 8), and hexadecimal (base 16) format. Decimal format is the default, octal integers are specified with a leading 0, and hexadecimals have a leading 0x.</p>
<p>For most common platforms, the largest integer is (2**31 . 1) (or 2,147,483,647), and the smallest (most negative) integer is . (2**31 . 1) (or .2,147,483,647).</p>
<h4>Doubles</h4>
<p>They like 3.14159 or 49.1. By default, doubles print with the minimum number of decimal places needed. For example, the code −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   $many </span><span class="pun">=</span><span class="pln"> </span><span class="lit">2.2888800</span><span class="pun">;</span><span class="pln">
   $many_2 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">2.2111200</span><span class="pun">;</span><span class="pln">
   $few </span><span class="pun">=</span><span class="pln"> $many </span><span class="pun">+</span><span class="pln"> $many_2</span><span class="pun">;</span><span class="pln">
   
   </span><span class="kwd">print</span><span class="pun">(</span><span class="str">"$many + $many_2 = $few &lt;br&gt;"</span><span class="pun">);</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<p>It produces the following browser output −</p>
<pre class="result notranslate">2.28888 + 2.21112 = 4.5
</pre>
<h4>Boolean</h4>
<p>They have only two possible values either true or false. PHP provides a couple of constants especially for use as Booleans: TRUE and FALSE, which can be used like so −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">TRUE</span><span class="pun">)</span><span class="pln">
   </span><span class="kwd">print</span><span class="pun">(</span><span class="str">"This will always print&lt;br&gt;"</span><span class="pun">);</span><span class="pln">

</span><span class="kwd">else</span><span class="pln">
   </span><span class="kwd">print</span><span class="pun">(</span><span class="str">"This will never print&lt;br&gt;"</span><span class="pun">);</span></pre>
   <h5>Interpreting other types as Booleans</h5>
   <p>Here are the rules for determine the "truth" of any value not already of the Boolean type −</p>
   <ul class="list">
<li><p>If the value is a number, it is false if exactly equal to zero and true otherwise.</p></li>
<li><p>If the value is a string, it is false if the string is empty (has zero characters) or is the string "0", and is true otherwise.</p></li>
<li><p>Values of type NULL are always false.</p></li>
<li><p>If the value is an array, it is false if it contains no other values, and it is true otherwise. For an object, containing a value means having a member variable that has been assigned a value.</p></li>
<li><p>Valid resources are true (although some functions that return resources when they are successful will return FALSE when unsuccessful).</p></li>
<li><p>Don't use double as Booleans.</p></li>
</ul>
<p>Each of the following variables has the truth value embedded in its name when it is used in a Boolean context.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$true_num </span><span class="pun">=</span><span class="pln"> </span><span class="lit">3</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="lit">0.14159</span><span class="pun">;</span><span class="pln">
$true_str </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Tried and true"</span><span class="pln">
$true_array</span><span class="pun">[</span><span class="lit">49</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"An array element"</span><span class="pun">;</span><span class="pln">
$false_array </span><span class="pun">=</span><span class="pln"> array</span><span class="pun">();</span><span class="pln">
$false_null </span><span class="pun">=</span><span class="pln"> NULL</span><span class="pun">;</span><span class="pln">
$false_num </span><span class="pun">=</span><span class="pln"> </span><span class="lit">999</span><span class="pln"> </span><span class="pun">-</span><span class="pln"> </span><span class="lit">999</span><span class="pun">;</span><span class="pln">
$false_str </span><span class="pun">=</span><span class="pln"> </span><span class="str">""</span><span class="pun">;</span></pre>











</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="109_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="111_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'php_header.php'; ?>
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