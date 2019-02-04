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
	$sid=112;
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



<p><b>What is Operator?</b> Simple answer can be given using expression <i>4 + 5 is equal to 9</i>. Here 4 and 5 are called operands and + is called operator. PHP language supports following type of operators.</p>
<ul class="list">
<li>Arithmetic Operators</li>
<li>Comparison Operators</li>
<li>Logical (or Relational) Operators</li>
<li>Assignment Operators</li>
<li>Conditional (or ternary) Operators</li>
</ul>
<p>Lets have a look on all operators one by one.</p>
<h4>Arithmetic Operators</h4>
<p>There are following arithmetic operators supported by PHP language −</p>
<p>Assume variable A holds 10 and variable B holds 20 then −</p>
<p><a href="/php/php_arithmatic_operators_examples.htm">Show Examples</a></p>
<table class="table table-bordered">
<tbody><tr>
<th width="10%">Operator</th>
<th width="45%">Description</th>
<th>Example</th>
</tr>
<tr>
<td>+</td>
<td>Adds two operands</td>
<td>A + B will give 30</td>
</tr>
<tr>
<td>-</td>
<td>Subtracts second operand from the first</td>
<td>A - B will give -10</td>
</tr>
<tr>
<td>*</td>
<td>Multiply both operands</td>
<td>A * B will give 200</td>
</tr>
<tr>
<td>/</td>
<td>Divide numerator by de-numerator</td>
<td>B / A will give 2</td>
</tr>
<tr>
<td>%</td>
<td>Modulus Operator and remainder of after an integer division</td>
<td>B % A will give 0</td>
</tr>
<tr>
<td>++</td>
<td>Increment operator, increases integer value by one</td>
<td>A++ will give 11</td>
</tr>
<tr>
<td>--</td>
<td>Decrement operator, decreases integer value by one</td>
<td>A-- will give 9</td>
</tr>
</tbody></table>
<h4>Comparison Operators</h4>
<p>There are following comparison operators supported by PHP language</p>
<p>Assume variable A holds 10 and variable B holds 20 then −</p>
<p><a href="/php/php_comparison_operators_examples.htm">Show Examples</a></p>
<table class="table table-bordered">
<tbody><tr>
<th width="10%">Operator</th>
<th width="45%">Description</th>
<th>Example</th>
</tr>
<tr>
<td>==</td>
<td>Checks if the value of two operands are equal or not, if yes then condition becomes true.</td>
<td>(A == B) is not true.</td>
</tr>
<tr>
<td>!=</td>
<td>Checks if the value of two operands are equal or not, if values are not equal then condition becomes true.</td>
<td>(A != B) is true.</td>
</tr>
<tr>
<td>&gt;</td>
<td>Checks if the value of left operand is greater than the value of right operand, if yes then condition becomes true.</td>
<td>(A &gt; B) is not true.</td>
</tr>
<tr>
<td>&lt;</td>
<td>Checks if the value of left operand is less than the value of right operand, if yes then condition becomes true.</td>
<td>(A &lt; B) is true.</td>
</tr>
<tr>
<td>&gt;=</td>
<td>Checks if the value of left operand is greater than or equal to the value of right operand, if yes then condition becomes true.</td>
<td>(A &gt;= B) is not true.</td>
</tr>
<tr>
<td>&lt;=</td>
<td>Checks if the value of left operand is less than or equal to the value of right operand, if yes then condition becomes true.</td>
<td>(A &lt;= B) is true.</td>
</tr>
</tbody></table>
<h4>Logical Operators</h4>
<p>There are following logical operators supported by PHP language</p>
<p>Assume variable A holds 10 and variable B holds 20 then −</p>

<table class="table table-bordered">
<tbody><tr>
<th width="10%">Operator</th>
<th width="45%">Description</th>
<th>Example</th>
</tr>
<tr>
<td>and</td>
<td>Called Logical AND operator. If both the operands are true then condition becomes true.</td>
<td>(A and B) is true.</td>
</tr>
<tr>
<td>or</td>
<td>Called Logical OR Operator. If any of the two operands are non zero then condition becomes true.</td>
<td>(A or B) is true.</td>
</tr>
<tr>
<td>&amp;&amp;</td>
<td>Called Logical AND operator. If both the operands are non zero then condition becomes true.</td>
<td>(A &amp;&amp; B) is true.</td>
</tr>
<tr>
<td>||</td>
<td>Called Logical OR Operator. If any of the two operands are non zero then condition becomes true.</td>
<td>(A || B) is true.</td>
</tr>
<tr>
<td>!</td>
<td>Called Logical NOT Operator. Use to reverses the logical state of its operand. If a condition is true then Logical NOT operator will make false.</td>
<td>!(A &amp;&amp; B) is false.</td>
</tr>
</tbody></table>

<h4>Assignment Operators</h4>
<p>There are following assignment operators supported by PHP language −</p>
<p><a href="/php/php_assignment_operators_examples.htm">Show Examples</a></p><table class="table table-bordered">
<tbody><tr>
<th width="10%">Operator</th>
<th width="40%">Description</th>
<th>Example</th>
</tr>
<tr>
<td>=</td>
<td>Simple assignment operator, Assigns values from right side operands to left side operand</td>
<td>C = A + B will assign value of A + B into C</td>
</tr>
<tr>
<td>+=</td>
<td>Add AND assignment operator, It adds right operand to the left operand and assign the result to left operand</td>
<td>C += A is equivalent to C = C + A</td>
</tr>
<tr>
<td>-=</td>
<td>Subtract AND assignment operator, It subtracts right operand from the left operand and assign the result to left operand</td>
<td>C -= A is equivalent to C = C - A</td>
</tr>
<tr>
<td>*=</td>
<td>Multiply AND assignment operator, It multiplies right operand with the left operand and assign the result to left operand</td>
<td>C *= A is equivalent to C = C * A</td>
</tr>
<tr>
<td>/=</td>
<td>Divide AND assignment operator, It divides left operand with the right operand and assign the result to left operand</td>
<td>C /= A is equivalent to C = C / A</td>
</tr>
<tr>
<td>%=</td>
<td>Modulus AND assignment operator, It takes modulus using two operands and assign the result to left operand</td>
<td>C %= A is equivalent to C = C % A</td>
</tr>
</tbody></table>
<h4>Conditional Operator</h4>
<p>There is one more operator called conditional operator. This first evaluates an expression for a true or false value and then execute one of the two given statements depending upon the result of the evaluation. The conditional operator has this syntax −</p>
<table class="table table-bordered">
<tbody><tr>
<th width="10%">Operator</th>
<th width="40%">Description</th>
<th>Example</th>
</tr>
<tr>
<td>? :</td>
<td>Conditional Expression</td>
<td>If Condition is true ? Then value X : Otherwise value Y</td>
</tr>
</tbody></table>
<h4>Operators Categories</h4>
<p>All the operators we have discussed above can be categorised into following categories −</p>
<ul class="list">
<li><p>Unary prefix operators, which precede a single operand.</p></li>
<li><p>Binary operators, which take two operands and perform a variety of arithmetic and logical operations.</p></li>
<li><p>The conditional operator (a ternary operator), which takes three operands and evaluates either the second or third expression, depending on the evaluation of the first expression.</p></li>
<li><p>Assignment operators, which assign a value to a variable.</p></li>
</ul>
<h4>Precedence of PHP Operators</h4>
<p>Operator precedence determines the grouping of terms in an expression. This affects how an expression is evaluated. Certain operators have higher precedence than others; for example, the multiplication operator has higher precedence than the addition operator −</p>
<p>For example x = 7 + 3 * 2; Here  x is assigned 13, not 20 because operator * has higher precedence than + so it first get multiplied with 3*2 and then adds into 7.</p>
<table class="table table-bordered">
<tbody><tr>
<th>Category</th>
<th>Operator</th>
<th>Associativity</th>
</tr> 
<tr>
<td>Unary</td>
<td>! ++ --</td> 
<td>Right to left</td>
</tr>
<tr>
<td>Multiplicative</td> 
<td>*  /  %</td>
<td>Left to right</td> 
</tr> 
<tr> 
<td>Additive</td>
<td>+  -</td> 
<td>Left to right</td> 
</tr>
<tr> 
<td>Relational</td>
<td>&lt; &lt;=  &gt; &gt;=</td> 
<td>Left to right</td> 
</tr>
<tr> 
<td>Equality</td> 
<td>==  !=</td> 
<td>Left to right</td> 
</tr> 
<tr> 
<td>Logical AND</td>
<td>&amp;&amp;</td> 
<td>Left to right</td> 
</tr> 
<tr>
<td>Logical OR</td> 
<td>||</td> 
<td>Left to right</td> 
</tr> 
<tr> 
<td>Conditional</td>
<td>?:</td> 
<td>Right to left</td> 
</tr> 
<tr>
<td>Assignment</td> 
<td>=  +=  -=  *=  /=  %=</td> 
<td>Right to left</td>
</tr> 
</tbody></table>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="111_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="113_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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