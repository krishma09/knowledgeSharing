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
	$sid=116;
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




<p>They are sequences of characters, like "PHP supports string operations".</p>
<p><b>NOTE</b> − Built-in string functions is given in function reference <a rel="nofollow" target="_blank" href="http://in.php.net/manual/en/ref.strings.php">PHP String Functions</a></p>
<p>Following are valid examples of string</p>
<pre class="result notranslate">$string_1 = "This is a string in double quotes";
$string_2 = "This is a somewhat longer, singly quoted string";
$string_39 = "This string has thirty-nine characters";
$string_0 = ""; // a string with zero characters
</pre>
<p>Singly quoted strings are treated almost literally, whereas doubly quoted strings replace variables with their values as well as specially interpreting certain character sequences.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="pun">&lt;?</span><span class="pln">php
   $variable </span><span class="pun">=</span><span class="pln"> </span><span class="str">"name"</span><span class="pun">;</span><span class="pln">
   $literally </span><span class="pun">=</span><span class="pln"> </span><span class="str">'My $variable will not print!\\n'</span><span class="pun">;</span><span class="pln">
   
   </span><span class="kwd">print</span><span class="pun">(</span><span class="pln">$literally</span><span class="pun">);</span><span class="pln">
   </span><span class="kwd">print</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
   
   $literally </span><span class="pun">=</span><span class="pln"> </span><span class="str">"My $variable will print!\\n"</span><span class="pun">;</span><span class="pln">
   
   </span><span class="kwd">print</span><span class="pun">(</span><span class="pln">$literally</span><span class="pun">);</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<p>This will produce the following result −</p>
<pre class="result notranslate">My $variable will not print!\n
My name will print
</pre>
<p>There are no artificial limits on string length - within the bounds of available memory, you ought to be able to make arbitrarily long strings.</p>
<p>Strings that are delimited by double quotes (as in "this") are preprocessed in both the following two ways by PHP −</p>
<ul class="list">
<li><p>Certain character sequences beginning with backslash (\) are replaced with special characters</p></li>
<li><p>Variable names (starting with $) are replaced with string representations of their values.</p></li>
</ul>
<p>The escape-sequence replacements are −</p>
<ul class="list">
<li>\n is replaced by the newline character</li>
<li>\r is replaced by the carriage-return character</li>
<li>\t is replaced by the tab character</li>
<li>\$ is replaced by the dollar sign itself ($)</li>
<li>\" is replaced by a single double-quote (")</li>
<li>\\ is replaced by a single backslash (\)</li>
</ul>
<h4>String Concatenation Operator</h4>
<p>To concatenate two string variables together, use the dot (.) operator −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   $string1</span><span class="pun">=</span><span class="str">"Hello World"</span><span class="pun">;</span><span class="pln">
   $string2</span><span class="pun">=</span><span class="str">"1234"</span><span class="pun">;</span><span class="pln">
   
   echo $string1 </span><span class="pun">.</span><span class="pln"> </span><span class="str">" "</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> $string2</span><span class="pun">;</span><span class="pln">
</span><span class="pun">?&gt;</span></pre> 
<p>This will produce the following result −</p>
<pre class="result notranslate">Hello World 1234
</pre>
<p>If we look at the code above you see that we used the concatenation operator two times. This is because we had to insert a third string.</p>
<p>Between the two string variables we added a string with a single character, an empty space, to separate the two variables.</p>
<h4>Using the strlen() function</h4>
<p>The strlen() function is used to find the length of a string.</p>
<p>Let's find the length of our string "Hello world!":</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   echo strlen</span><span class="pun">(</span><span class="str">"Hello world!"</span><span class="pun">);</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<p>This will produce the following result −</p>
<pre class="result notranslate">12
</pre>
<p>The length of a string is often used in loops or other functions, when it is important to know when the string ends. (i.e. in a loop, we would want to stop the loop after the last character in the string)</p>
<h4>Using the strpos() function</h4>
<p>The strpos() function is used to search for a string or character within a string.</p>
<p>If a match is found in the string, this function will return the position of the first match. If no match is found, it will return FALSE.</p>
<p>Let's see if we can find the string "world" in our string −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="pun">&lt;?</span><span class="pln">php
   echo strpos</span><span class="pun">(</span><span class="str">"Hello world!"</span><span class="pun">,</span><span class="str">"world"</span><span class="pun">);</span><span class="pln">
</span><span class="pun">?&gt;</span></pre>
<p>This will produce the following result −</p>
<pre class="result notranslate"> 6
</pre>
<p>As you see the position of the string "world" in our string is position 6. The reason that it is 6, and not 7, is that the first position in the string is 0, and not 1.</p>











</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="115_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="117_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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