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
<title>VB.NET Tutorials | knowledge.com</title>
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
	$sid=284;
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
<p>An operator is a symbol that tells the compiler to perform specific mathematical or logical manipulations. VB.Net is rich in built-in operators and provides following types of commonly used operators:</p>
<ul class="list">
<li><p>Arithmetic Operators</p></li>
<li><p>Comparison Operators</p></li>
<li><p>Logical/Bitwise Operators</p></li>
<li><p>Bit Shift Operators</p></li>
<li><p>Assignment Operators</p></li>
<li><p>Miscellaneous Operators</p></li>
</ul>
<p>This tutorial will explain the most commonly used operators.</p>
<h4>Arithmetic Operators</h4>
<p>Following table shows all the arithmetic operators supported by VB.Net. Assume variable <b>A</b> holds 2 and variable <b>B</b> holds 7, then:</p>
<p></p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:10%">Operator</th>
<th style="width:55%;">Description</th>
<th>Example</th>
</tr>
<tr>
<td>^</td>
<td>Raises one operand to the power of another</td>
<td> B^A will give 49</td>
</tr>
<tr>
<td>+</td>
<td>Adds two operands</td>
<td>A + B will give 9</td>
</tr>
<tr>
<td>-</td>
<td>Subtracts second operand from the first</td>
<td>A - B will give -5</td>
</tr>
<tr>
<td>*</td>
<td>Multiplies both operands</td>
<td> A * B will give 14</td>
</tr>
<tr>
<td>/</td>
<td>Divides one operand by another and returns a floating point result</td>
<td> B / A will give 3.5</td>
</tr>
<tr>
<td>\</td>
<td>Divides one operand by another and returns an integer result</td>
<td> B \ A will give 3</td>
</tr>
<tr>
<td>MOD</td>
<td>Modulus Operator and remainder of after an integer division</td>
<td> B MOD A will give 1</td>
</tr>
</tbody></table>
<h4>Comparison Operators</h4>
<p>Following table shows all the comparison operators supported by VB.Net. Assume variable <b>A</b> holds 10 and variable <b>B</b> holds 20, then:</p>
<p></p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:10%">Operator</th>
<th style="width:55%;">Description</th>
<th>Example</th>
</tr>
<tr>
<td>=</td>
<td> Checks if the values of two operands are equal or not; if yes, then condition becomes true.</td>
<td> (A = B) is not true. </td>
</tr>
<tr>
<td> &lt;&gt; </td>
<td> Checks if the values of two operands are equal or not; if values are not equal, then condition becomes true.</td>
<td> (A &lt;&gt; B) is true. </td>
</tr>
<tr>
<td>&gt;</td>
<td> Checks if the value of left  operand is greater than the value of right operand; if yes, then condition becomes true.</td>
<td> (A &gt; B) is not true. </td>
</tr>
<tr>
<td>&lt;</td>
<td> Checks if the value of left  operand is less than the value of right operand; if yes, then condition becomes true.</td>
<td> (A &lt; B) is true. </td>
</tr>
<tr>
<td>&gt;=</td>
<td> Checks if the value of left  operand is greater than or equal to the value of right operand; if yes, then condition becomes true.</td>
<td> (A &gt;= B) is not true. </td>
</tr>
<tr>
<td>&lt;=</td>
<td> Checks if the value of left  operand is less than or equal to the value of right operand; if yes, then condition becomes true.</td>
<td> (A &lt;= B) is true. </td>
</tr>
</tbody></table>
<p>Apart from the above, VB.Net provides three more comparison operators, which we will be using in forthcoming chapters; however, we give a brief description here.</p>
<ul class="list">
<li><p><b>Is</b> Operator - It compares two object reference variables and determines if two object references refer to the same object without performing value comparisons. If object1 and object2 both refer to the exact same object instance, result is <b>True</b>; otherwise, result is False.</p></li>
<li><p><b>IsNot</b> Operator - It also compares two object reference variables and determines if two object references refer to different objects. If object1 and object2 both refer to the exact same object instance, result is <b>False</b>; otherwise, result is True.</p></li>
<li><p><b>Like</b> Operator - It compares a string against a pattern.</p></li>
</ul>
<h4>Logical/Bitwise Operators</h4>
<p>Following table shows all the logical operators supported by VB.Net. Assume variable A holds Boolean value True and variable B holds Boolean value False, then:</p>
<p></p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:10%">Operator</th>
<th style="width:55%;">Description</th>
<th>Example</th>
</tr>
<tr>
<td>And</td>
<td> It is the logical as well as bitwise AND operator. If both the operands are true, then condition becomes true. This operator does not perform short-circuiting, i.e., it evaluates both the expressions. </td><td> (A And B) is False. </td>
</tr>
<tr>
<td>Or</td>
<td>It is the logical as well as bitwise OR operator. If any of the two operands is true, then condition becomes true. This operator does not perform short-circuiting, i.e., it evaluates both the expressions.</td>
<td> (A Or B) is True. </td>
</tr>
<tr>
<td>Not</td>
<td>It is the logical as well as bitwise NOT operator. Use to reverses the logical state of its operand. If a condition is true, then Logical NOT operator will make false.</td>
<td> Not(A And B) is True. </td>
</tr>
<tr>
<td>Xor</td>
<td>It is the logical as well as bitwise Logical Exclusive OR operator. It returns True if both expressions are True or both expressions are False; otherwise it returns False. This operator does not perform short-circuiting, it always evaluates both expressions and there is no short-circuiting counterpart of this operator.</td>
<td> A Xor B is True. </td>
</tr>
<tr>
<td>AndAlso</td>
<td>It is the logical AND operator. It works only on Boolean data. It performs short-circuiting.</td>
<td>(A AndAlso B) is False.</td>
</tr>
<tr>
<td>OrElse</td>
<td>It is the logical OR operator. It works only on Boolean data. It performs short-circuiting.</td>
<td>(A OrElse B) is True.</td>
</tr>
<tr>
<td>IsFalse</td>
<td>It determines whether an expression is False.</td>
<td></td>
</tr>
<tr><td>IsTrue</td>
<td>It determines whether an expression is True.</td>
<td></td>
</tr>
</tbody></table>
<h4>Bit Shift Operators</h4>
<p>We have already discussed the bitwise operators. The bit shift operators perform the shift operations on binary values. Before coming into the bit shift operators, let us understand the bit operations. </p>
<p>Bitwise operators work on bits and perform bit-by-bit operations. The truth tables for &amp;, |, and ^ are as follows:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:20%">p</th>
<th style="width:20%">q</th>
<th style="width:20%">p &amp; q</th>
<th style="width:20%">p | q</th>
<th style="width:20%">p ^ q</th>
</tr>
<tr>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
<td>0</td>
</tr>
<tr>
<td>0</td>
<td>1</td>
<td>0</td>
<td>1</td>
<td>1</td>
</tr>
<tr>
<td>1</td>
<td>1</td>
<td>1</td>
<td>1</td>
<td>0</td>
</tr>
<tr>
<td>1</td>
<td>0</td>
<td>0</td>
<td>1</td>
<td>1</td>
</tr>
</tbody></table>
<p>Assume if A = 60; and B = 13; now in binary format they will be as follows:</p>

<p>A = 0011 1100</p>
<p>B = 0000 1101</p>
<p>-----------------</p>
<p>A&amp;B = 0000 1100</p>
<p>A|B = 0011 1101</p>
<p>A^B = 0011 0001</p>
<p>~A&nbsp; = 1100 0011</p>
<p>We have seen that the Bitwise operators supported by VB.Net are And, Or, Xor and Not. The Bit shift operators are &gt;&gt; and &lt;&lt; for left shift and right shift, respectively. </p>
<p>Assume that the variable A holds 60 and variable B holds 13, then:</p>
<p></p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:10%">Operator</th>
<th style="width:55%;">Description</th>
<th>Example</th>
</tr>
<tr>
<td>And</td>
<td> Bitwise AND Operator copies a bit to the result if it exists in both operands. </td><td> (A AND B) will give 12, which is 0000 1100</td>
</tr>
<tr>
<td>Or</td>
<td> Binary OR Operator copies a bit if it exists in either operand. </td>
<td> (A Or B) will give 61, which is 0011 1101</td>
</tr>
<tr>
<td>Xor</td>
<td> Binary XOR Operator copies the bit if it is set in one operand but not both. </td><td> (A Xor B) will give 49, which is 0011 0001</td>
</tr>
<tr>
<td>Not</td>
<td> Binary Ones Complement Operator is unary and has the effect of 'flipping' bits. </td>
<td> (Not A ) will give -61, which is 1100 0011 in 2's complement form due to a signed binary number. </td>
</tr>
<tr>
<td>&lt;&lt;</td>
<td> Binary Left Shift Operator. The left operands value is moved left by the number of bits specified by the right operand. </td>
<td> A &lt;&lt; 2 will give 240, which is 1111 0000</td></tr>
<tr>
<td>&gt;&gt;</td>
<td> Binary Right Shift Operator. The left operands value is moved right by the number of bits specified by the right operand. </td>
<td> A &gt;&gt; 2 will give 15, which is 0000 1111</td>
</tr>
</tbody></table>
<h4>Assignment Operators</h4>
<p>There are following assignment operators supported by VB.Net:</p>
<p></p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:10%">Operator</th>
<th style="width:55%;">Description</th><th>Example</th></tr>
<tr>
<td>=</td>
<td>Simple assignment operator, Assigns values from right side operands to left side operand</td><td> C = A + B will assign value of A + B into C</td>
</tr>
<tr>
<td>+=</td>
<td>Add AND assignment operator, It adds right operand to the left operand and assigns the result to left operand</td>
<td> C += A is equivalent to C = C + A</td>
</tr>
<tr>
<td>-=</td>
<td>Subtract AND assignment operator, It subtracts right operand from the left operand and assigns the result to left operand</td>
<td> C -= A is equivalent to C = C - A</td>
</tr>
<tr>
<td>*=</td>
<td>Multiply AND assignment operator, It multiplies right operand with the left operand and assigns the result to left operand</td>
<td> C *= A is equivalent to C = C * A</td>
</tr>
<tr>
<td>/=</td>
<td>Divide AND assignment operator, It divides left operand with the right operand and assigns the result to left operand (floating point division)</td>
<td> C /= A is equivalent to C = C / A</td>
</tr>
<tr>
<td>\=</td>
<td>Divide AND assignment operator, It divides left operand with the right operand and assigns the result to left operand (Integer division)</td>
<td> C \= A is equivalent to C = C \A</td>
</tr>
<tr>
<td>^=</td>
<td>Exponentiation and assignment operator. It raises the left operand to the power of the right operand and assigns the result to left operand. </td>
<td> C^=A is equivalent to C = C ^ A</td>
</tr>
<tr>
<td>&lt;&lt;=</td>
<td>Left shift AND assignment operator </td>
<td> C &lt;&lt;= 2 is same as  C = C &lt;&lt; 2</td>
</tr>
<tr>
<td>&gt;&gt;=</td>
<td>Right shift AND assignment operator </td>
<td> C &gt;&gt;= 2 is same as  C = C &gt;&gt; 2</td>
</tr>
<tr>
<td>&amp;=</td>
<td>Concatenates a String expression to a String variable or property and assigns the result to the variable or property.</td>
<td><p>Str1 &amp;= Str2 is same as</p>
<p>Str1 = Str1 &amp; Str2</p>
</td>
</tr>
</tbody></table>
<h4>Miscellaneous Operators</h4>
<p>There are few other important operators supported by VB.Net.</p>
<p></p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:10%">Operator</th>
<th style="width:55%;">Description</th>
<th>Example</th>
</tr>
<tr>
<td>AddressOf</td>
<td>Returns the address of a procedure.</td>
<td>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">AddHandler</span><span class="pln"> </span><span class="typ">Button1</span><span class="pun">.</span><span class="typ">Click</span><span class="pun">,</span><span class="pln">
</span><span class="typ">AddressOf</span><span class="pln"> </span><span class="typ">Button1_Click</span></pre>
</td>
</tr>
<tr>
<td>Await</td>
<td>It is applied to an operand in an asynchronous method or lambda expression to suspend execution of the method until the awaited task completes.</td>
<td>
<pre class="prettyprint notranslate prettyprinted"><span class="pln"> 
</span><span class="typ">Dim</span><span class="pln"> result </span><span class="typ">As</span><span class="pln"> res
</span><span class="pun">=</span><span class="pln"> </span><span class="typ">Await</span><span class="pln"> </span><span class="typ">AsyncMethodThatReturnsResult</span><span class="pun">()</span><span class="pln">
</span><span class="typ">Await</span><span class="pln"> </span><span class="typ">AsyncMethod</span><span class="pun">()</span></pre></td>
</tr>
<tr>
<td>GetType</td>
<td>It returns a Type object for the specified type. The Type object provides information about the type such as its properties, methods, and events.</td>
<td>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">MsgBox</span><span class="pun">(</span><span class="typ">GetType</span><span class="pun">(</span><span class="typ">Integer</span><span class="pun">).</span><span class="typ">ToString</span><span class="pun">())</span></pre>
</td>
</tr>
<tr>
<td>Function Expression</td>
<td>It declares the parameters and code that define a function lambda expression.</td>
<td>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Dim</span><span class="pln"> add5 </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Function</span><span class="pun">(</span><span class="pln">num </span><span class="typ">As</span><span class="pln">
 </span><span class="typ">Integer</span><span class="pun">)</span><span class="pln"> num </span><span class="pun">+</span><span class="pln"> </span><span class="lit">5</span><span class="pln">
</span><span class="str">'prints 10
Console.WriteLine(add5(5))</span></pre>
</td>
</tr>
<tr>
<td>If</td>
<td>It uses short-circuit evaluation to conditionally return one of two values. The If operator can be called with three arguments or with two arguments.</td>
<td> 
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Dim</span><span class="pln"> num </span><span class="pun">=</span><span class="pln"> </span><span class="lit">5</span><span class="pln">
</span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="typ">If</span><span class="pun">(</span><span class="pln">num </span><span class="pun">&gt;=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">,</span><span class="pln">
</span><span class="str">"Positive"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Negative"</span><span class="pun">))</span></pre>
</td>
</tr>
</tbody></table>
<h4>Operators Precedence in VB.Net</h4>
<p>Operator precedence determines the grouping of terms in an expression. This affects how an expression is evaluated. Certain operators have higher precedence than others; for example, the multiplication operator has higher precedence than the addition operator:</p>
<p>For example, x = 7 + 3 * 2; here, x is assigned 13, not 20 because operator * has higher precedence than +, so it first gets multiplied with 3*2 and then adds into 7.</p>
<p>Here, operators with the highest precedence appear at the top of the table, those with the lowest appear at the bottom. Within an expression, higher precedence operators will be evaluated first.</p>
<p></p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:60%;">Operator</th>
<th>Precedence</th>
</tr>
<tr>
<td>Await</td>
<td>Highest</td>
</tr>
<tr>
<td>Exponentiation (^)</td>
<td></td>
</tr>
<tr>
<td>Unary identity and negation (+, -)</td>
<td></td>
</tr>
<tr>
<td>Multiplication and floating-point division (*, /)</td>
<td></td>
</tr>
<tr>
<td>Integer division (\)</td>
<td></td>
</tr>
<tr>
<td>Modulus arithmetic (Mod)</td>
<td></td>
</tr>
<tr>
<td>Addition and subtraction (+, -)</td>
<td></td>
</tr>
<tr>
<td>Arithmetic bit shift (&lt;&lt;, &gt;&gt;)</td>
<td></td>
</tr>
<tr>
<td>All comparison operators (=, &lt;&gt;, &lt;, &lt;=, &gt;, &gt;=, Is, IsNot, Like, TypeOf...Is)</td>
<td></td>
</tr>
<tr>
<td>Negation (Not)</td>
<td></td>
</tr>
<tr>
<td>Conjunction (And, AndAlso)</td>
<td></td>
</tr>
<tr>
<td>Inclusive disjunction (Or, OrElse)</td>
<td></td>
</tr>
<tr>
<td>Exclusive disjunction (Xor)</td>
<td>Lowest</td>
</tr>
</tbody></table>
<table class="table table-bordered">
<tbody><tr>
<th style="width:60%;">Operator</th>
<th>Precedence</th>
</tr>
<tr>
<td>Await</td>
<td>Highest</td>
</tr>
<tr>
<td>Exponentiation (^)</td>
<td></td>
</tr>
<tr>
<td>Unary identity and negation (+, -)</td>
<td></td>
</tr>
<tr>
<td>Multiplication and floating-point division (*, /)</td>
<td></td>
</tr>
<tr>
<td>Integer division (\)</td>
<td></td>
</tr>
<tr>
<td>Modulus arithmetic (Mod)</td>
<td></td>
</tr>
<tr>
<td>Addition and subtraction (+, -)</td>
<td></td>
</tr>
<tr>
<td>Arithmetic bit shift (&lt;&lt;, &gt;&gt;)</td>
<td></td>
</tr>
<tr>
<td>All comparison operators (=, &lt;&gt;, &lt;, &lt;=, &gt;, &gt;=, Is, IsNot, Like, TypeOf...Is)</td>
<td></td>
</tr>
<tr>
<td>Negation (Not)</td>
<td></td>
</tr>
<tr>
<td>Conjunction (And, AndAlso)</td>
<td></td>
</tr>
<tr>
<td>Inclusive disjunction (Or, OrElse)</td>
<td></td>
</tr>
<tr>
<td>Exclusive disjunction (Xor)</td>
<td>Lowest</td>
</tr>
</tbody></table>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="283_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="285_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'vbnet_header.php'; ?></aside>
 
  
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