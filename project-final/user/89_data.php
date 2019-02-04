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
<title>PL/SQL Tutorials | knowledge.com</title>
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
	$sid=89;
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



<p>In this chapter, we will discuss operators in PL/SQL. An operator is a symbol that tells the compiler to perform specific mathematical or logical manipulation. PL/SQL language is rich in built-in operators and provides the following types of operators −</p>
<ul class="list">
<li>Arithmetic operators</li>
<li>Relational operators</li>
<li>Comparison operators</li>
<li>Logical operators</li>
<li>String operators</li>
</ul>
<p>Here, we will understand the arithmetic, relational, comparison and logical operators one by one. The String operators will be discussed in a later chapter − <b>PL/SQL - Strings</b>.</p>
<h4>Arithmetic Operators</h4>
<p>Following table shows all the arithmetic operators supported by PL/SQL. Let us assume <b>variable A</b> holds 10 and <b>variable B</b> holds 5, then −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">Operator</th>
<th style="text-align:center;">Description</th>
<th style="text-align:center;">Example</th>
</tr>
<tr>
<td style="text-align:center;">+</td>
<td>Adds two operands</td>
<td>A + B will give 15</td>
</tr>
<tr>
<td style="text-align:center;">-</td>
<td>Subtracts second operand from the first</td>
<td>A - B will give 5</td>
</tr>
<tr>
<td style="text-align:center;">*</td>
<td>Multiplies both operands</td>
<td>A * B will give 50</td>
</tr>
<tr>
<td style="text-align:center;">/</td>
<td>Divides numerator by de-numerator</td>
<td>A / B will give 2</td>
</tr>
<tr>
<td style="text-align:center;">**</td>
<td>Exponentiation operator, raises one operand to the power of other</td>
<td>A ** B will give 100000</td>
</tr>
</tbody></table>
<h4>Relational Operators</h4>
<p>Relational operators compare two expressions or values and return a Boolean result. Following table shows all the relational operators supported by PL/SQL. Let us assume <b>variable A</b> holds 10 and <b>variable B</b> holds 20, then −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">Operator</th>
<th style="text-align:center;">Description</th>
<th style="text-align:center;">Example</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">=</td>
<td style="vertical-align:middle;">Checks if the values of two operands are equal or not, if yes then condition becomes true.</td>
<td>(A = B) is not true.</td>
</tr>
<tr>
<td><p style="text-align:center;">!=</p>
<p style="text-align:center;">&lt;&gt;</p>
<p style="text-align:center;">~=</p></td>
<td style="vertical-align:middle;">Checks if the values of two operands are equal or not, if values are not equal then condition becomes true.</td>
<td style="text-align:center; vertical-align:middle;">(A != B) is true.</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">&gt;</td>
<td style="vertical-align:middle;">Checks if the value of left operand is greater than the value of right operand, if yes then condition becomes true.</td>
<td>(A &gt; B) is not true.</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">&lt;</td>
<td style="vertical-align:middle;">Checks if the value of left operand is less than the value of right operand, if yes then condition becomes true.</td>
<td>(A &lt; B) is true.</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">&gt;=</td>
<td style="vertical-align:middle;">Checks if the value of left operand is greater than or equal to the value of right operand, if yes then condition becomes true.</td>
<td> (A &gt;= B) is not true. </td>
</tr>
<tr><td style="text-align:center; vertical-align:middle;">&lt;=</td>
<td style="vertical-align:middle;">Checks if the value of left operand is less than or equal to the value of right operand, if yes then condition becomes true.</td>
<td>(A &lt;= B) is true</td>
</tr>
</tbody></table>
<h4>Comparison Operators</h4>
<p>Comparison operators are used for comparing one expression to another. The result is always either <b>TRUE, FALSE</b> or <b>NULL</b>.</p>

<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">Operator</th>
<th style="text-align:center;">Description</th>
<th style="text-align:center;">Example</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">LIKE</td>
<td style="vertical-align:middle;">The LIKE operator compares a character, string, or CLOB value to a pattern and returns TRUE if the value matches the pattern and FALSE if it does not.</td>
<td style="vertical-align:middle;">If 'Zara Ali' like 'Z% A_i' returns a Boolean true, whereas, 'Nuha Ali' like 'Z% A_i' returns a Boolean false.</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">BETWEEN</td>
<td style="vertical-align:middle;">The BETWEEN operator tests whether a value lies in a specified range. x BETWEEN a AND b means that x &gt;= a and x &lt;= b.</td>
<td style="vertical-align:middle;">If x = 10 then, x between 5 and 20 returns true, x between 5 and 10 returns true, but x between 11 and 20 returns false.</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">IN</td>
<td style="vertical-align:middle;">The IN operator tests set membership. x IN (set) means that x is equal to any member of set.</td>
<td style="vertical-align:middle;">If x = 'm' then, x in ('a', 'b', 'c') returns Boolean false but x in ('m', 'n', 'o') returns Boolean true.</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">IS NULL</td>
<td style="vertical-align:middle;">The IS NULL operator returns the BOOLEAN value TRUE if its operand is NULL or FALSE if it is not NULL. Comparisons involving NULL values always yield NULL.</td>
<td style="vertical-align:middle;">If x = 'm', then 'x is null' returns Boolean false.</td>
</tr>
</tbody></table>
<h4>Logical Operators</h4>
<p>Following table shows the Logical operators supported by PL/SQL. All these operators work on Boolean operands and produce Boolean results. Let us assume <b>variable A</b> holds true and <b>variable B</b> holds false, then −</p>
<table class=" table table-bordered">
<tbody><tr>
<th style="text-align:center;">Operator</th>
<th style="text-align:center;">Description</th>
<th style="text-align:center;">Examples</th>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">and</td>
<td style="vertical-align:middle;">Called the logical AND operator. If both the operands are true then condition becomes true.</td>
<td>(A and B) is false.</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">or</td>
<td style="vertical-align:middle;">Called the logical OR Operator. If any of the two operands is true then condition becomes true.</td>
<td>(A or B) is true.</td>
</tr>
<tr>
<td style="text-align:center; vertical-align:middle;">not</td>
<td style="vertical-align:middle;">Called the logical NOT Operator. Used to reverse the logical state of its operand. If a condition is true then Logical NOT operator will make it false.</td>
<td>not (A and B) is true.</td>
</tr>
</tbody></table>
<h4>PL/SQL Operator Precedence</h4>
<p>Operator precedence determines the grouping of terms in an expression. This affects how an expression is evaluated. Certain operators have higher precedence than others; for example, the multiplication operator has higher precedence than the addition operator.</p>
<p>For example, <b>x = 7 + 3 * 2</b>; here, <b>x</b> is assigned <b>13</b>, not 20 because operator * has higher precedence than +, so it first gets multiplied with <b>3*2</b> and then adds into <b>7</b>.</p>
<p>Here, operators with the highest precedence appear at the top of the table, those with the lowest appear at the bottom. Within an expression, higher precedence operators will be evaluated first.</p>
<p>The precedence of operators goes as follows: =, &lt;, &gt;, &lt;=, &gt;=, &lt;&gt;, !=, ~=, ^=, IS NULL, LIKE, BETWEEN, IN.</p>

<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">Operator</th>
<th style="text-align:center;">Operation</th>
</tr>
<tr>
<td style="text-align:center;">**</td>
<td>exponentiation</td>
</tr>
<tr>
<td style="text-align:center;">+, -</td>
<td>identity, negation</td>
</tr>
<tr>
<td style="text-align:center;">*, /</td>
<td>multiplication, division</td>
</tr>
<tr>
<td style="text-align:center;">+, -, ||</td>
<td>addition, subtraction, concatenation</td>
</tr>
<tr>
<td style="text-align:center;">comparison</td>
<td></td>
</tr>
<tr>
<td style="text-align:center;">NOT</td>
<td>logical negation</td>
</tr>
<tr>
<td style="text-align:center;">AND</td>
<td>conjunction</td>
</tr>
<tr>
<td style="text-align:center;">OR</td>
<td>inclusion</td>
</tr>
</tbody></table>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="88_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="90_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'plsql_header.php'; ?>
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