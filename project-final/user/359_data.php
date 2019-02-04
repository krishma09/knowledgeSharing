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
<title>UNIX Tutorials | knowledge.com</title>
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
	$sid=359;
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
<p>There are various operators supported by each shell. We will discuss in detail about Bourne shell (default shell) in this chapter.</p>
<p>We will now discuss the following operators −</p>
<ul class="list">
<li>Arithmetic Operators</li>
<li>Relational Operators</li>
<li>Boolean Operators</li>
<li>String Operators</li>
<li>File Test Operators</li>
</ul>
<p>Bourne shell didn't originally have any mechanism to perform simple arithmetic operations but it uses external programs, either <b>awk</b> or <b>expr</b>.</p>
<p>The following example shows how to add two numbers −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

val</span><span class="pun">=</span><span class="str">`expr 2 + 2`</span><span class="pln">
echo </span><span class="str">"Total value : $val"</span></pre>
<p>The above script will generate the following result −</p>
<pre class="result notranslate">Total value : 4
</pre>
<p>The following points need to be considered while adding −</p>
<ul class="list">
<li><p>There must be spaces between operators and expressions. For example, 2+2 is not correct; it should be written as 2 + 2.</p></li>
<li><p>The complete expression should be enclosed between <b>‘ ‘</b>, called the inverted commas.</p></li>
</ul>
<h4>Arithmetic Operators</h4>
<p>The following arithmetic operators are supported by Bourne Shell.</p>
<p>Assume variable <b>a</b> holds 10 and variable <b>b</b> holds 20 then −</p>

<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;width:23%">Operator</th>
<th style="text-align:center;width:50%">Description</th>
<th style="text-align:center;width:40%">Example</th>
</tr>
<tr>
<td class="ts">+ (Addition)</td>
<td>Adds values on either side of the operator</td>
<td>`expr $a + $b` will give 30</td>
</tr>
<tr>
<td class="ts">- (Subtraction)</td>
<td>Subtracts right hand operand from left hand operand</td>
<td>`expr $a - $b` will give -10</td>
</tr>
<tr>
<td class="ts">* (Multiplication)</td>
<td>Multiplies values on either side of the operator</td>
<td>`expr $a \* $b` will give 200</td>
</tr>
<tr>
<td class="ts">/ (Division)</td>
<td>Divides left hand operand by right hand operand</td><td>`expr $b / $a` will give 2</td>
</tr>
<tr>
<td class="ts">% (Modulus)</td>
<td>Divides left hand operand by right hand operand and returns remainder</td>
<td>`expr $b % $a` will give 0</td>
</tr>
<tr>
<td class="ts">= (Assignment)</td>
<td style="vertical-align:middle;">Assigns right operand in left operand</td>
<td>a = $b would assign value of b into a</td>
</tr>
<tr>
<td class="ts">== (Equality)</td>
<td>Compares two numbers, if both are same then returns true.</td>
<td>[ $a == $b ] would return false.</td>
</tr>
<tr>
<td class="ts">!= (Not Equality)</td>
<td>Compares two numbers, if both are different then returns true.</td>
<td>[ $a != $b ] would return true.</td>
</tr>
</tbody></table>
<p>It is very important to understand that all the conditional expressions should be inside square braces with spaces around them, for example <b>[ $a == $b ]</b> is correct whereas, <b>[$a==$b]</b> is incorrect.</p>
<p>All the arithmetical calculations are done using long integers.</p>
<h4>Relational Operators</h4>
<p>Bourne Shell supports the following relational operators that are specific to numeric values. These operators do not work for string values unless their value is numeric.</p>
<p>For example, following operators will work to check a relation between 10 and 20 as well as in between "10" and "20" but not in between "ten" and "twenty".</p>	
<p>Assume variable <b>a</b> holds 10 and variable <b>b</b> holds 20 then −</p>

<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">Operator</th>
<th style="text-align:center;">Description</th>
<th style="text-align:center;width:25%">Example</th>
</tr>
<tr>
<td class="ts"><b>-eq</b></td>
<td>Checks if the value of two operands are equal or not; if yes, then the condition becomes true.</td>
<td>[ $a -eq $b ] is not true.</td>
</tr>
<tr>
<td class="ts"><b>-ne</b></td>
<td>Checks if the value of two operands are equal or not; if values are not equal, then the condition becomes true.</td>
<td style="vertical-align:middle;">[ $a -ne $b ] is true.</td>
</tr>
<tr>
<td class="ts"><b>-gt</b></td>
<td>Checks if the value of left operand is greater than the value of right operand; if yes, then the condition becomes true.</td>
<td style="vertical-align:middle;">[ $a -gt $b ] is not true.</td>
</tr>
<tr>
<td class="ts"><b>-lt</b></td>
<td>Checks if the value of left operand is less than the value of right operand; if yes, then the condition becomes true.</td>
<td style="vertical-align:middle;">[ $a -lt $b ] is true.</td>
</tr>
<tr>
<td class="ts"><b>-ge</b></td>
<td>Checks if the value of left operand is greater than or equal to the value of right operand; if yes, then the condition becomes true.</td>
<td style="vertical-align:middle;">[ $a -ge $b ] is not true.</td>
</tr>
<tr>
<td class="ts"><b>-le</b></td>
<td>Checks if the value of left operand is less than or equal to the value of right operand; if yes, then the condition becomes true.</td>
<td style="vertical-align:middle;">[ $a -le $b ] is true.</td>
</tr>
</tbody></table>
<p>It is very important to understand that all the conditional expressions should be placed inside square braces with spaces around them. For example, <b>[ $a &lt;= $b ]</b> is correct whereas, <b>[$a &lt;= $b]</b> is incorrect.</p>
<h4>Boolean Operators</h4>
<p>The following Boolean operators are supported by the Bourne Shell. </p>
<p>Assume variable <b>a</b> holds 10 and variable <b>b</b> holds 20 then −</p>

<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">Operator</th>
<th style="text-align:center;">Description</th>
<th style="text-align:center;width:25%">Example</th>
</tr>
<tr>
<td class="ts"><b>!</b></td>
<td>This is logical negation. This inverts a true condition into false and vice versa.</td>
<td style="vertical-align:middle;">[ ! false  ] is true.</td>
</tr>
<tr>
<td class="ts"><b>-o</b></td>
<td>This is logical <b>OR</b>. If one of the operands is true, then the condition becomes true.</td>
<td>[  $a -lt 20  -o $b -gt 100 ] is true.</td>
</tr>
<tr>
<td class="ts"><b>-a</b></td>
<td>This is logical <b>AND</b>. If both the operands are true, then the condition becomes true otherwise false.</td>
<td style="vertical-align:middle;">[  $a -lt 20  -a $b -gt 100 ] is false. </td>
</tr>
</tbody></table>
<h4>String Operators</h4>
<p>The following string operators are supported by Bourne Shell.</p>
<p>Assume variable <b>a</b> holds "abc" and variable <b>b</b> holds "efg" then −</p>

<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">Operator</th>
<th style="text-align:center;">Description</th>
<th style="text-align:center;width:30%">Example</th>
</tr>
<tr>
<td class="ts"><b>=</b></td>
<td>Checks if the value of two operands are equal or not; if yes, then the condition becomes true.</td>
<td class="ts">[ $a = $b ] is not true.</td>
</tr>
<tr>
<td class="ts"><b>!=</b></td>
<td>Checks if the value of two operands are equal or not; if values are not equal then the condition becomes true.</td>
<td class="ts">[ $a != $b ] is true.</td>
</tr>
<tr>
<td class="ts"><b>-z</b></td>
<td>Checks if the given string operand size is zero; if it is zero length, then it returns true.</td>
<td class="ts">[ -z $a ] is not true.</td>
</tr>
<tr>
<td class="ts"><b>-n</b></td>
<td>Checks if the given string operand size is non-zero; if it is nonzero length, then it returns true.</td>
<td class="ts">[ -n $a ] is not false.</td>
</tr>
<tr>
<td class="ts"><b>str</b></td>
<td>Checks if <b>str</b> is not the empty string; if it is empty, then it returns false.</td>
<td class="ts">[ $a ] is not false.</td>
</tr>
</tbody></table>
<h4>File Test Operators</h4>
<p>We have a few operators that can be used to test various properties associated with a Unix file.</p>
<p>Assume a variable <b>file</b> holds an existing file name "test" the size of which is 100 bytes and has <b>read</b>, <b>write</b> and <b>execute</b> permission on −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">Operator</th>
<th style="text-align:center;">Description</th>
<th style="text-align:center;width:29%">Example</th>
</tr>
<tr>
<td class="ts"><b>-b file</b></td>
<td>Checks if file is a block special file; if yes, then the condition becomes true.</td>
<td class="ts">[ -b $file ] is  false.</td>
</tr>
<tr>
<td class="ts"><b>-c file</b></td>
<td>Checks if file is a character special file; if yes, then the condition becomes true.</td>
<td class="ts">[ -c $file ] is  false.</td>
</tr>
<tr>
<td class="ts"><b>-d file</b></td>
<td>Checks if file is a directory; if yes, then the condition becomes true.</td>
<td class="ts">[ -d $file ] is not true.</td>
</tr>
<tr>
<td class="ts"><b>-f file</b></td>
<td>Checks if file is an ordinary file as opposed to a directory or special file; if yes, then the condition becomes true.</td>
<td class="ts">[ -f $file ] is  true.</td>
</tr>
<tr>
<td class="ts"><b>-g file</b></td>
<td>Checks if file has its set group ID (SGID) bit set; if yes, then the condition becomes true.</td>
<td class="ts">[ -g $file ] is  false.</td>
</tr>
<tr>
<td class="ts"><b>-k file</b></td>
<td>Checks if file has its sticky bit set; if yes, then the condition becomes true.</td>
<td class="ts">[ -k $file ] is  false.</td>
</tr>
<tr>
<td class="ts"><b>-p file</b></td>
<td>Checks if file is a named pipe; if yes, then the condition becomes true.</td>
<td class="ts">[ -p $file ] is  false.</td>
</tr>
<tr>
<td class="ts"><b>-t file</b></td>
<td>Checks if file descriptor is open and associated with a terminal; if yes, then the condition becomes true.</td>
<td class="ts">[ -t $file ] is  false.</td>
</tr>
<tr>
<td class="ts"><b>-u file</b></td>
<td>Checks if file has its Set User ID (SUID) bit set; if yes, then the condition becomes true.</td>
<td class="ts">[ -u $file ] is  false.</td>
</tr>
<tr>
<td class="ts"><b>-r file</b></td>
<td>Checks if file is readable; if yes, then the condition becomes true.</td>
<td class="ts">[ -r $file ] is  true.</td>
</tr>
<tr>
<td class="ts"><b>-w file</b></td>
<td>Checks if file is writable; if yes, then the condition becomes true.</td>
<td class="ts">[ -w $file ] is  true.</td>
</tr>
<tr>
<td class="ts"><b>-x file</b></td>
<td>Checks if file is executable; if yes, then the condition becomes true.</td>
<td class="ts">[ -x $file ] is  true.</td>
</tr>
<tr>
<td class="ts"><b>-s file</b></td>
<td>Checks if file has size greater than 0; if yes, then condition becomes true.</td>
<td class="ts">[ -s $file ] is true.</td>
</tr>
<tr>
<td class="ts"><b>-e file</b></td>
<td>Checks if file exists; is true even if file is a directory but exists.</td>
<td class="ts">[ -e $file ] is true.</td>
</tr>
</tbody></table>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="358_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="360_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'unix_header.php'; ?></aside>
 
  
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