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
<title>C++ Tutorials | knowledge.com</title>
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
	$sid=236;
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

<p>An operator is a symbol that tells the compiler to perform specific mathematical or logical manipulations. C++ is rich in built-in operators and provides the following types of operators:</p>
<ul class="list">
<li><p>Arithmetic Operators</p></li>
<li><p>Relational Operators</p></li>
<li><p>Logical Operators</p></li>
<li><p>Bitwise Operators</p></li>
<li><p>Assignment Operators</p></li>
<li><p>Misc Operators</p></li>
</ul>
<p>This chapter will examine the arithmetic, relational, logical, bitwise, assignment and other operators one by one.</p>
<h4>Arithmetic Operators</h4>
<p>There are following arithmetic operators supported by C++ language:</p>
<p>Assume variable A holds 10 and variable B holds 20, then:</p>
<p>Show Examples</a></p>
<table class="table table-bordered">
<tbody><tr><th width="10%">Operator</th><th width="45%">Description</th><th>Example</th></tr>
<tr><td>+</td><td>Adds two operands</td><td> A + B will give 30</td></tr>
<tr><td>-</td><td>Subtracts second operand from the first</td><td> A - B will give -10</td></tr>
<tr><td>*</td><td>Multiplies both operands</td><td> A * B will give 200</td></tr>
<tr><td>/</td><td>Divides numerator by de-numerator</td><td> B / A will give 2</td></tr>
<tr><td>%</td><td>Modulus Operator and remainder of after an integer division</td><td> B % A will give 0</td></tr>
<tr><td>++</td><td>Increment operator</a>, increases integer value by one</td><td> A++ will give 11</td></tr>
<tr><td>--</td><td>Decrement operator</a>, decreases integer value by one</td><td> A-- will give 9</td></tr>
</tbody></table>
<h4>Relational Operators</h4>
<p>There are following relational operators supported by C++ language</p>
<p>Assume variable A holds 10 and variable B holds 20, then:</p>
<table class="table table-bordered">
<tbody><tr><th width="10%">Operator</th><th width="45%">Description</th><th>Example</th></tr>
<tr><td>==</td><td> Checks if the values of two operands are equal or not, if yes then condition becomes true.</td><td> (A == B) is not true. </td></tr>
<tr><td>!=</td><td> Checks if the values of two operands are equal or not, if values are not equal then condition becomes true.</td><td> (A != B) is true. </td></tr>
<tr><td>&gt;</td><td> Checks if the value of left  operand is greater than the value of right operand, if yes then condition becomes true.</td><td> (A &gt; B) is not true. </td></tr>
<tr><td>&lt;</td><td> Checks if the value of left  operand is less than the value of right operand, if yes then condition becomes true.</td><td> (A &lt; B) is true. </td></tr>
<tr><td>&gt;=</td><td> Checks if the value of left  operand is greater than or equal to the value of right operand, if yes then condition becomes true.</td><td> (A &gt;= B) is not true. </td></tr>
<tr><td>&lt;=</td><td> Checks if the value of left  operand is less than or equal to the value of right operand, if yes then condition becomes true.</td><td> (A &lt;= B) is true. </td></tr>
</tbody></table>

<h4>Logical Operators</h4>
<p>There are following logical operators supported by C++ language</p>
<p>Assume variable A holds 1 and variable B holds 0, then:</p>

<table class="table table-bordered">
<tbody><tr><th width="10%">Operator</th><th width="45%">Description</th><th>Example</th></tr>
<tr><td>&amp;&amp;</td><td> Called Logical AND  operator. If both the operands are non-zero, then condition becomes true.</td><td> (A &amp;&amp; B) is false. </td></tr>
<tr><td>||</td><td>Called Logical OR Operator.  If any of the two operands is non-zero, then condition becomes true.</td><td> (A || B) is true. </td></tr>
<tr><td>!</td><td>Called Logical NOT Operator.  Use to reverses the logical state of its operand. If a condition is true, then Logical NOT operator will make false.</td><td> !(A &amp;&amp; B) is true. </td></tr>
</tbody></table>
<h4>Bitwise Operators</h4>
<p>Bitwise operator works on bits and perform bit-by-bit operation. The truth tables for &amp;, |, and ^ are as follows:</p>
<table class="table table-bordered">
<tbody><tr><th>p</th><th>q</th><th>p &amp; q</th><th>p | q</th><th>p ^ q</th></tr>
<tr><td>0</td><td>0</td><td>0</td><td>0</td><td>0</td></tr>
<tr><td>0</td><td>1</td><td>0</td><td>1</td><td>1</td></tr>
<tr><td>1</td><td>1</td><td>1</td><td>1</td><td>0</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>1</td><td>1</td></tr>
</tbody></table>

<p>Assume if A = 60; and B = 13; now in binary format they will be as follows:</p>

<p>A = 0011 1100</p>
<p>B = 0000 1101</p>
<p>-----------------</p>
<p>A&amp;B = 0000 1100</p>
<p>A|B = 0011 1101</p>
<p>A^B = 0011 0001</p>
<p>~A&nbsp; = 1100 0011</p>
<p>The Bitwise operators supported by C++ language are listed in the following table. Assume variable A holds 60 and variable B holds 13, then:</p>
<p>Show Examples</a></p>
<table class="table table-bordered">
<tbody><tr><th width="10%">Operator</th><th width="45%">Description</th><th>Example</th></tr>
<tr><td>&amp;</td><td> Binary AND Operator copies a bit to the result if it exists in both operands. </td><td> (A &amp; B) will give 12 which is 0000 1100</td></tr>
<tr><td>|</td><td> Binary OR Operator copies a bit if it exists in either operand. </td><td> (A | B) will give 61 which is 0011 1101</td></tr>
<tr><td>^</td><td> Binary XOR Operator copies the bit if it is set in one operand but not both. </td><td> (A ^ B) will give 49 which is 0011 0001</td></tr>
<tr><td>~</td><td> Binary Ones Complement Operator is unary and has the effect of 'flipping' bits. </td><td>(~A ) will give -61 which is 1100 0011 in 2's complement form due to a signed binary number.</td></tr>
<tr><td>&lt;&lt;</td><td> Binary Left Shift Operator. The left operands value is moved left by the number of bits specified by the right operand. </td><td> A &lt;&lt; 2 will give 240 which is 1111 0000</td></tr>
<tr><td>&gt;&gt;</td><td> Binary Right Shift Operator. The left operands value is moved right by the number of bits specified by the right operand. </td><td> A &gt;&gt; 2 will give 15 which is 0000 1111</td></tr>
</tbody></table>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="235_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="237_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'c++header_header.php'; ?></aside>
 
  
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