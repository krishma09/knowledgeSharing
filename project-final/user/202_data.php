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
<title>C Tutorials | knowledge.com</title>
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
	$sid=202;
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
 <strong style="font-size:20px;">
<div class="sc_line sc_line_style_solid margin_top_3em"></div>
<p>Constants refer to fixed values that the program may not alter during its execution. These fixed values are also called <b>literals</b>.</p>
<p>Constants can be of any of the basic data types like <i>an integer constant, a floating constant, a character constant, or a string literal</i>. There are enumeration constants as well.</p>
<p>Constants are treated just like regular variables except that their values cannot be modified after their definition.</p>
<h4>Integer Literals</h4>
<p>An integer literal can be a decimal, octal, or hexadecimal constant. A prefix specifies the base or radix: 0x or 0X for hexadecimal, 0 for octal, and nothing for decimal.</p>
<p>An integer literal can also have a suffix that is a combination of U and L, for unsigned and long, respectively. The suffix can be uppercase or lowercase and can be in any order.</p>
<p>Here are some examples of integer literals −</p>
<pre class="result notranslate">212         /* Legal */
215u        /* Legal */
0xFeeL      /* Legal */
078         /* Illegal: 8 is not an octal digit */
032UU       /* Illegal: cannot repeat a suffix */
</pre>
<p>Following are other examples of various types of integer literals −</p>
<pre class="result notranslate">85         /* decimal */
0213       /* octal */
0x4b       /* hexadecimal */
30         /* int */
30u        /* unsigned int */
30l        /* long */
30ul       /* unsigned long */
</pre>
<h4>Floating-point Literals</h4>
<p>A floating-point literal has an integer part, a decimal point, a fractional part, and an exponent part. You can represent floating point literals either in decimal form or exponential form.</p>
<p>While representing decimal form, you must include the decimal point, the exponent, or both; and while representing exponential form, you must include the integer part, the fractional part, or both. The signed exponent is introduced by e or E.</p>
<p>Here are some examples of floating-point literals −</p>
<pre class="result notranslate">3.14159       /* Legal */
314159E-5L    /* Legal */
510E          /* Illegal: incomplete exponent */
210f          /* Illegal: no decimal or exponent */
.e55          /* Illegal: missing integer or fraction */
</pre>
<h4>Character Constants</h4>
<p>Character literals are enclosed in single quotes, e.g., 'x' can be stored in a simple variable of <b>char</b> type.</p>
<p>A character literal can be a plain character (e.g., 'x'), an escape sequence (e.g., '\t'), or a universal character (e.g., '\u02C0').</p>
<p>There are certain characters in C that represent special meaning when preceded by a backslash for example, newline (\n) or tab (\t).</p>
<section class="toggle">
<label><i class="icon icon-minus"></i><i class="icon icon-plus"></i>Here, you have a list of such escape sequence codes −</label>
<div class="toggle-content">
<table class="table table-bordered">
<tbody><tr>
<th style="width:25%">Escape sequence</th>
<th>Meaning</th>
</tr>
<tr>
<td>\\</td>
<td>\ character</td>
</tr>
<tr>
<td>\'</td>
<td> ' character</td>
</tr>
<tr>
<td>\"</td>
<td>" character</td>
</tr>
<tr>
<td>\?</td>
<td>? character</td>
</tr>
<tr>
<td>\a</td>
<td>Alert or bell</td>
</tr>
<tr>
<td>\b</td>
<td>Backspace</td>
</tr>
<tr>
<td>\f</td>
<td>Form feed</td>
</tr>
<tr>
<td>\n</td>
<td>Newline</td>
</tr>
<tr>
<td>\r</td>
<td>Carriage return</td>
</tr>
<tr>
<td>\t</td>
<td>Horizontal tab</td>
</tr>
<tr>
<td>\v</td>
<td>Vertical tab</td>
</tr>
<tr>
<td>\ooo</td>
<td>Octal number of one to three digits</td>
</tr>
<tr>
<td>\xhh . . .</td>
<td>Hexadecimal number of one or more digits</td>
</tr>
</tbody></table>
</div>
</section>
<p>Following is the example to show a few escape sequence characters −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   printf</span><span class="pun">(</span><span class="str">"Hello\tWorld\n\n"</span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Hello World
</pre>
<h4>String Literals</h4>
<p>String literals or constants are enclosed in double quotes "". A string contains characters that are similar to character literals: plain characters, escape sequences, and universal characters.</p>
<p>You can break a long line into multiple lines using string literals and separating them using white spaces.</p>
<p>Here are some examples of string literals. All the three forms are identical strings.</p>
<pre class="result notranslate">"hello, dear"

"hello, \

dear"

"hello, " "d" "ear"
</pre>
<h4>Defining Constants</h4>
<p>There are two simple ways in C to define constants −</p>
<ul class="list">
<li><p>Using <b>#define</b> preprocessor.</p></li>
<li><p>Using <b>const</b> keyword.</p></li>
</ul>
<h4>The #define Preprocessor</h4>
<p>Given below is the form to use #define preprocessor to define a constant −</p>
<pre class="result notranslate">#define identifier value
</pre>
<p>The following example explains it in detail −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

</span><span class="com">#define</span><span class="pln"> LENGTH </span><span class="lit">10</span><span class="pln">   
</span><span class="com">#define</span><span class="pln"> WIDTH  </span><span class="lit">5</span><span class="pln">
</span><span class="com">#define</span><span class="pln"> NEWLINE </span><span class="str">'\n'</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">int</span><span class="pln"> area</span><span class="pun">;</span><span class="pln">  
  
   area </span><span class="pun">=</span><span class="pln"> LENGTH </span><span class="pun">*</span><span class="pln"> WIDTH</span><span class="pun">;</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"value of area : %d"</span><span class="pun">,</span><span class="pln"> area</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"%c"</span><span class="pun">,</span><span class="pln"> NEWLINE</span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">value of area : 50
</pre>
<h4>The const Keyword</h4>
<p>You can use <b>const</b> prefix to declare constants with a specific type as follows −</p>
<pre class="result notranslate">const type variable = value;
</pre>
<p>The following example explains it in detail −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">const</span><span class="pln"> </span><span class="kwd">int</span><span class="pln">  LENGTH </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">const</span><span class="pln"> </span><span class="kwd">int</span><span class="pln">  WIDTH </span><span class="pun">=</span><span class="pln"> </span><span class="lit">5</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">const</span><span class="pln"> </span><span class="kwd">char</span><span class="pln"> NEWLINE </span><span class="pun">=</span><span class="pln"> </span><span class="str">'\n'</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> area</span><span class="pun">;</span><span class="pln">  
   
   area </span><span class="pun">=</span><span class="pln"> LENGTH </span><span class="pun">*</span><span class="pln"> WIDTH</span><span class="pun">;</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"value of area : %d"</span><span class="pun">,</span><span class="pln"> area</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"%c"</span><span class="pun">,</span><span class="pln"> NEWLINE</span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">value of area : 50
</pre>
<p>Note that it is a good programming practice to define constants in CAPITALS.</p>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="201_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="203_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'c_header.php'; ?></aside>
 
  
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