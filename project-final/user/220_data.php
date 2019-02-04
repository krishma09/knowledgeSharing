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
	$sid=220;
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

<p>Type casting is a way to convert a variable from one data type to another data type. For example, if you want to store a 'long' value into a simple integer then you can type cast 'long' to 'int'. You can convert the values from one type to another explicitly using the <b>cast operator</b> as follows −</p>
<pre class="result notranslate">(type_name) expression
</pre>
<p>Consider the following example where the cast operator causes the division of one integer variable by another to be performed as a floating-point operation −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">int</span><span class="pln"> sum </span><span class="pun">=</span><span class="pln"> </span><span class="lit">17</span><span class="pun">,</span><span class="pln"> count </span><span class="pun">=</span><span class="pln"> </span><span class="lit">5</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">double</span><span class="pln"> mean</span><span class="pun">;</span><span class="pln">

   mean </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">double</span><span class="pun">)</span><span class="pln"> sum </span><span class="pun">/</span><span class="pln"> count</span><span class="pun">;</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"Value of mean : %f\n"</span><span class="pun">,</span><span class="pln"> mean </span><span class="pun">);</span><span class="pln">

</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Value of mean : 3.400000
</pre>
<p>It should be noted here that the cast operator has precedence over division, so the value of <b>sum</b> is first converted to type <b>double</b> and finally it gets divided by count yielding a double value.</p>
<p>Type conversions can be implicit which is performed by the compiler automatically, or it can be specified explicitly through the use of the <b>cast operator</b>. It is considered good programming practice to use the cast operator whenever type conversions are necessary.</p>
<h4>Integer Promotion</h4>
<p>Integer promotion is the process by which values of integer type "smaller" than <b>int</b> or <b>unsigned int</b> are converted either to <b>int</b> or <b>unsigned int</b>. Consider an example of adding a character with an integer −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">int</span><span class="pln">  i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">17</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> c </span><span class="pun">=</span><span class="pln"> </span><span class="str">'c'</span><span class="pun">;</span><span class="pln"> </span><span class="com">/* ascii value is 99 */</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> sum</span><span class="pun">;</span><span class="pln">

   sum </span><span class="pun">=</span><span class="pln"> i </span><span class="pun">+</span><span class="pln"> c</span><span class="pun">;</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"Value of sum : %d\n"</span><span class="pun">,</span><span class="pln"> sum </span><span class="pun">);</span><span class="pln">

</span><span class="pun">}</span></pre>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">int</span><span class="pln">  i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">17</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> c </span><span class="pun">=</span><span class="pln"> </span><span class="str">'c'</span><span class="pun">;</span><span class="pln"> </span><span class="com">/* ascii value is 99 */</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> sum</span><span class="pun">;</span><span class="pln">

   sum </span><span class="pun">=</span><span class="pln"> i </span><span class="pun">+</span><span class="pln"> c</span><span class="pun">;</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"Value of sum : %d\n"</span><span class="pun">,</span><span class="pln"> sum </span><span class="pun">);</span><span class="pln">

</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Value of sum : 116
</pre>
<p>Here, the value of sum is 116 because the compiler is doing integer promotion and converting the value of 'c' to ASCII before performing the actual addition operation.</p>
<h4>Usual Arithmetic Conversion</h4>
<p>The <b>usual arithmetic conversions</b> are implicitly performed to cast their values to a common type. The compiler first performs <i>integer promotion</i>; if the operands still have different types, then they are converted to the type that appears highest in the following hierarchy −</p>
<img src="/cprogramming/images/usual_arithmetic_conversion.png" alt="Usual Arithmetic Conversion">
<p>The usual arithmetic conversions are not performed for the assignment operators, nor for the logical operators &amp;&amp; and ||. Let us take the following example to understand the concept −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">int</span><span class="pln">  i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">17</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> c </span><span class="pun">=</span><span class="pln"> </span><span class="str">'c'</span><span class="pun">;</span><span class="pln"> </span><span class="com">/* ascii value is 99 */</span><span class="pln">
   </span><span class="kwd">float</span><span class="pln"> sum</span><span class="pun">;</span><span class="pln">

   sum </span><span class="pun">=</span><span class="pln"> i </span><span class="pun">+</span><span class="pln"> c</span><span class="pun">;</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"Value of sum : %f\n"</span><span class="pun">,</span><span class="pln"> sum </span><span class="pun">);</span><span class="pln">

</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Value of sum : 116.000000
</pre>
<p>Here, it is simple to understand that first c gets converted to integer, but as the final value is double, usual arithmetic conversion applies and the compiler converts i and c into 'float' and adds them yielding a 'float' result.</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="219_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="221_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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