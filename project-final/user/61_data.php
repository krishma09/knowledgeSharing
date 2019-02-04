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
	$sid=61;
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




<h4>What is an operator?</h4>
<p>Let us take a simple expression <b>4 + 5 is equal to 9</b>. Here 4 and 5 are called <b>operands</b> and ‘+’ is called the <b>operator</b>. JavaScript supports the following types of operators.</p>
<ul class="list">
<li><p>Arithmetic Operators</p></li>
<li><p>Comparision Operators</p></li>
<li><p>Logical (or Relational) Operators</p></li>
<li><p>Assignment Operators</p></li>
<li><p>Conditional (or ternary) Operators</p></li>
</ul>
<p>Lets have a look on all operators one by one.</p>
<h4>Arithmetic Operators</h4>
<p>JavaScript supports the following arithmetic operators −</p>
<p>Assume variable A holds 10 and variable B holds 20, then −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:9%;">Sr.No</th>
<th>Operator and Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>+ (Addition)</b></p>
<p>Adds two operands</p>
<p><b>Ex:</b> A + B will give 30</p>
</td>
</tr>
<tr>
<td>2</td>
<td><p><b>- (Subtraction)</b></p>
<p>Subtracts the second operand from the first</p>
<p><b>Ex:</b> A - B will give -10</p>
</td>
</tr>
<tr>
<td>3</td>
<td><p><b>* (Multiplication)</b></p>
<p>Multiply both operands</p>
<p><b>Ex:</b> A * B will give 200</p>
</td>
</tr>
<tr>
<td>4</td>
<td><p><b>/ (Division)</b></p>
<p>Divide the numerator by the denominator</p>
<p><b>Ex:</b> B / A will give 2</p>
</td>
</tr>
<tr>
<td>5</td>
<td><p><b>% (Modulus)</b></p>
<p>Outputs the remainder of an integer division</p>
<p><b>Ex:</b> B % A will give 0</p>
</td>
</tr>
<tr>
<td>6</td>
<td><p><b>++ (Increment)</b></p>
<p>Increases an integer value by one</p>
<p><b>Ex:</b> A++ will give 11</p>
</td>
</tr>
<tr>
<td>7</td>
<td><p><b>-- (Decrement)</b></p>
<p>Decreases an integer value by one</p>
<p><b>Ex:</b> A-- will give 9</p>
</td>
</tr>
</tbody></table>
<p><b>Note</b> − Addition operator (+) works for Numeric as well as Strings. e.g. "a" + 10 will give "a10".</p>
<h5>Example</h5>
<p>The following code shows how to use arithmetic operators in JavaScript.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">33</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> c </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Test"</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> linebreak </span><span class="pun">=</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"a + b = "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> a </span><span class="pun">+</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"a - b = "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> a </span><span class="pun">-</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"a / b = "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> a </span><span class="pun">/</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"a % b = "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> a </span><span class="pun">%</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"a + b + c = "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> a </span><span class="pun">+</span><span class="pln"> b </span><span class="pun">+</span><span class="pln"> c</span><span class="pun">;</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            a </span><span class="pun">=</span><span class="pln"> </span><span class="pun">++</span><span class="pln">a</span><span class="pun">;</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"++a = "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">++</span><span class="pln">a</span><span class="pun">;</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            b </span><span class="pun">=</span><span class="pln"> </span><span class="pun">--</span><span class="pln">b</span><span class="pun">;</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"--b = "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">--</span><span class="pln">b</span><span class="pun">;</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
      Set the variables to different values and then try...
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h5>Output</h5>
<pre class="result notranslate">a + b = 43
a - b = 23
a / b = 3.3
a % b = 3
a + b + c = 43Test
++a = 35
--b = 8
Set the variables to different values and then try...
</pre>
<h4>Comparison Operators</h4>
<p>JavaScript supports the following comparison operators −</p>
<p>Assume variable A holds 10 and variable B holds 20, then −</p>
<table class="table table-bordered">
<tbody><tr>
<th>Sr.No</th>
<th>Operator and Description</th>
</tr>
<tr>
<td>1</td>
<td>
<p>= = <b>(Equal)</b></p>
<p>Checks if the value of two operands are equal or not, if yes, then the condition becomes true.</p>
<p><b>Ex:</b> (A == B) is not true.</p>
</td>
</tr>
<tr>
<td>2</td>
<td>
<p><b>!= (Not Equal)</b></p>
<p>Checks if the value of two operands are equal or not, if the values are not equal, then the condition becomes true.</p>
<p><b>Ex:</b> (A != B) is true.</p>
</td>
</tr>
<tr>
<td>3</td>
<td>
<p><b>&gt; (Greater than)</b></p>
<p>Checks if the value of the left operand is greater than the value of the right operand, if yes, then the condition becomes true.</p>
<p><b>Ex:</b> (A &gt; B) is not true.</p>
</td>
</tr>
<tr>
<td>4</td>
<td>
<p><b>&lt; (Less than)</b></p>
<p>Checks if the value of the left operand is less than the value of the right operand, if yes, then the condition becomes true.</p>
<p><b>Ex:</b> (A &lt; B) is true.</p>
</td>
</tr>
<tr>
<td>5</td>
<td>
<p><b>&gt;= (Greater than or Equal to)</b></p>
<p>Checks if the value of the left operand is greater than or equal to the value of the right operand, if yes, then the condition becomes true.</p>
<p><b>Ex:</b> (A &gt;= B) is not true.</p>
</td>
</tr>
<tr>
<td>6</td>
<td>
<p><b>&lt;= (Less than or Equal to)</b></p>
<p>Checks if the value of the left operand is less than or equal to the value of the right operand, if yes, then the condition becomes true.</p>
<p><b>Ex:</b> (A &lt;= B) is true.</p>
</td>
</tr>
</tbody></table>
<h5>Example</h5>
<p>The following code shows how to use comparison operators in JavaScript.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> linebreak </span><span class="pun">=</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
      
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"(a == b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">==</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"(a &lt; b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">&lt;</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"(a &gt; b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">&gt;</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"(a != b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">!=</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"(a &gt;= b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">&gt;=</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"(a &lt;= b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">&lt;=</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
      Set the variables to different values and different operators and then try...
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h5>Output</h5>
<pre class="result notranslate">(a == b) =&gt; false 
(a &lt; b) =&gt; true 
(a &gt; b) =&gt; false 
(a != b) =&gt; true 
(a &gt;= b) =&gt; false 
a &lt;= b) =&gt; true
Set the variables to different values and different operators and then try...
</pre>
<h4>Logical Operators</h4>
<p>JavaScript supports the following logical operators −</p>
<p>Assume variable A holds 10 and variable B holds 20, then −</p>
<table class="table table-bordered">
<tbody><tr>
<th>Sr.No</th>
<th>Operator and Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>&amp;&amp; (Logical AND)</b></p>
<p>If both the operands are non-zero, then the condition becomes true.</p>
<p><b>Ex:</b> (A &amp;&amp; B) is true.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><p><b>|| (Logical OR)</b></p>
<p>If any of the two operands are non-zero, then the condition becomes true.</p>
<p><b>Ex:</b> (A || B) is true.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><p><b>! (Logical NOT)</b></p>
<p>Reverses the logical state of its operand. If a condition is true, then the Logical NOT operator will make it false.</p>
<p><b>Ex:</b> ! (A &amp;&amp; B) is false.</p>
</td>
</tr>
</tbody></table>
<h5>Example</h5>
<p>Try the following code to learn how to implement Logical Operators in JavaScript.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> linebreak </span><span class="pun">=</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
      
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"(a &amp;&amp; b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">&amp;&amp;</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"(a || b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">||</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"!(a &amp;&amp; b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(!(</span><span class="pln">a </span><span class="pun">&amp;&amp;</span><span class="pln"> b</span><span class="pun">));</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Set the variables to different values and different operators and then try...</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h5>Output</h5>
<pre class="result notranslate">(a &amp;&amp; b) =&gt; false 
(a || b) =&gt; true 
!(a &amp;&amp; b) =&gt; true
Set the variables to different values and different operators and then try...
</pre>
<h4>Bitwise Operators</h4>
<p>JavaScript supports the following bitwise operators −</p>
<p>Assume variable A holds 2 and variable B holds 3, then −</p>
<table class="table table-bordered">
<tbody><tr>
<th>Sr.No</th>
<th>Operator and Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>&amp; (Bitwise AND)</b></p>
<p>It performs a Boolean AND operation on each bit of its integer arguments.</p>
<p><b>Ex:</b> (A &amp; B) is 2.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><p><b>| (BitWise OR)</b></p>
<p>It performs a Boolean OR operation on each bit of its integer arguments.</p>
<p><b>Ex:</b> (A | B) is 3.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><p><b>^ (Bitwise XOR)</b></p>
<p>It performs a Boolean exclusive OR operation on each bit of its integer arguments. Exclusive OR means that either operand one is true or operand two is true, but not both.</p>
<p><b>Ex:</b> (A ^ B) is 1.</p>
</td>
</tr>
<tr>
<td>4</td>
<td><p><b>~ (Bitwise Not)</b></p>
<p>It is a unary operator and operates by reversing all the bits in the operand.</p>
<p><b>Ex:</b> (~B) is -4.</p>
</td>
</tr>
<tr>
<td>5</td>
<td><p><b>&lt;&lt; (Left Shift)</b></p>
<p>It moves all the bits in its first operand to the left by the number of places specified in the second operand. New bits are filled with zeros. Shifting a value left by one position is equivalent to multiplying it by 2, shifting two positions is equivalent to multiplying by 4, and so on.</p>
<p><b>Ex:</b> (A &lt;&lt; 1) is 4.</p>
</td>
</tr>
<tr>
<td>6</td>
<td><p><b>&gt;&gt; (Right Shift)</b></p>
<p>Binary Right Shift Operator. The left operand’s value is moved right by the number of bits specified by the right operand.</p>
<p><b>Ex:</b> (A &gt;&gt; 1) is 1.</p>
</td>
</tr>
<tr>
<td>7</td>
<td><p><b>&gt;&gt;&gt; (Right shift with Zero)</b></p>
<p>This operator is just like the &gt;&gt; operator, except that the bits shifted in on the left are always zero.</p>
<p><b>Ex:</b> (A &gt;&gt;&gt; 1) is 1.</p>
</td>
</tr>
</tbody></table>
<h5>Example</h5>
<p>Try the following code to implement Bitwise operator in JavaScript.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">2</span><span class="pun">;</span><span class="pln"> </span><span class="com">// Bit presentation 10</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">3</span><span class="pun">;</span><span class="pln"> </span><span class="com">// Bit presentation 11</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> linebreak </span><span class="pun">=</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"(a &amp; b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">&amp;</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"(a | b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">|</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"(a ^ b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">^</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"(~b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(~</span><span class="pln">b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"(a &lt;&lt; b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">&lt;&lt;</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"(a &gt;&gt; b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">&gt;&gt;</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Set the variables to different values and different operators and then try...</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<pre class="result notranslate">(a &amp; b) =&gt; 2 
(a | b) =&gt; 3 
(a ^ b) =&gt; 1 
(~b) =&gt; -4 
(a &lt;&lt; b) =&gt; 16 
(a &gt;&gt; b) =&gt; 0
Set the variables to different values and different operators and then try...
</pre>
<h4>Assignment Operators</h4>
<p>JavaScript supports the following assignment operators −</p>
<table class="table table-bordered">
<tbody><tr>
<th>Sr.No</th>
<th>Operator and Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>= (Simple Assignment )</b></p>
<p>Assigns values from the right side operand to the left side operand</p>
<p><b>Ex:</b> C = A + B will assign the value of A + B into C</p>
</td>
</tr>
<tr>
<td>2</td>
<td><p><b>+= (Add and Assignment)</b></p>
<p>It adds the right operand to the left operand and assigns the result to the left operand.</p>
<p><b>Ex:</b> C += A is equivalent to C = C + A</p>
</td>
</tr>
<tr>
<td>3</td>
<td><p><b>−= (Subtract and Assignment)</b></p>
<p>It subtracts the right operand from the left operand and assigns the result to the left operand.</p>
<p><b>Ex:</b> C -= A is equivalent to C = C - A</p>
</td>
</tr>
<tr>
<td>4</td>
<td><p><b>*= (Multiply and Assignment)</b></p>
<p>It multiplies the right operand with the left operand and assigns the result to the left operand.</p>
<p><b>Ex:</b> C *= A is equivalent to C = C * A</p>
</td>
</tr>
<tr>
<td>5</td>
<td><p><b>/= (Divide and Assignment)</b></p>
<p>It divides the left operand with the right operand and assigns the result to the left operand.</p>
<p><b>Ex:</b> C /= A is equivalent to C = C / A</p>
</td>
</tr>
<tr>
<td>6</td>
<td><p><b>%= (Modules and Assignment)</b></p>
<p>It takes modulus using two operands and assigns the result to the left operand.</p>
<p><b>Ex:</b> C %= A is equivalent to C = C % A</p>
</td>
</tr>
</tbody></table>
<p><b>Note</b> − Same logic applies to Bitwise operators so they will become like &lt;&lt;=, &gt;&gt;=, &gt;&gt;=, &amp;=, |= and ^=.</p>
<h5>Example</h5>
<p>Try the following code to implement assignment operator in JavaScript.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">33</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> linebreak </span><span class="pun">=</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Value of a =&gt; (a = b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">=</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Value of a =&gt; (a += b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">+=</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Value of a =&gt; (a -= b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">-=</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Value of a =&gt; (a *= b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">*=</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Value of a =&gt; (a /= b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">/=</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Value of a =&gt; (a %= b) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">%=</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Set the variables to different values and different operators and then try...</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h5>Output</h5>
<pre class="result notranslate">Value of a =&gt; (a = b) =&gt; 10
Value of a =&gt; (a += b) =&gt; 20 
Value of a =&gt; (a -= b) =&gt; 10 
Value of a =&gt; (a *= b) =&gt; 100 
Value of a =&gt; (a /= b) =&gt; 10
Value of a =&gt; (a %= b) =&gt; 0
Set the variables to different values and different operators and then try...
</pre>
<h4>Miscellaneous Operator</h4>
<p>We will discuss two operators here that are quite useful in JavaScript: the <b>conditional operator</b> (? :) and the <b>typeof operator</b>.</p>
<h5>Conditional Operator (? :)</h5>
<p>The conditional operator first evaluates an expression for a true or false value and then executes one of the two given statements depending upon the result of the evaluation.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="10%">Sr.No</th>
<th>Operator and Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>? : (Conditional )</b></p>
<p>If Condition is true? Then value X : Otherwise value Y</p>
</td>
</tr>
</tbody></table>
<h5>Example</h5>
<p>Try the following code to understand how the Conditional Operator works in JavaScript.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> linebreak </span><span class="pun">=</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write </span><span class="pun">(</span><span class="str">"((a &gt; b) ? 100 : 200) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">&gt;</span><span class="pln"> b</span><span class="pun">)</span><span class="pln"> </span><span class="pun">?</span><span class="pln"> </span><span class="lit">100</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="lit">200</span><span class="pun">;</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write </span><span class="pun">(</span><span class="str">"((a &lt; b) ? 100 : 200) =&gt; "</span><span class="pun">);</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">&lt;</span><span class="pln"> b</span><span class="pun">)</span><span class="pln"> </span><span class="pun">?</span><span class="pln"> </span><span class="lit">100</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="lit">200</span><span class="pun">;</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Set the variables to different values and different operators and then try...</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h5>Output</h5>
<pre class="result notranslate">((a &gt; b) ? 100 : 200) =&gt; 200 
((a &lt; b) ? 100 : 200) =&gt; 100
Set the variables to different values and different operators and then try...
</pre>
<h4>typeof Operator</h4>
<p>The <b>typeof</b> operator is a unary operator that is placed before its single operand, which can be of any type. Its value is a string indicating the data type of the operand.</p>
<p>The <i>typeof</i> operator evaluates to "number", "string", or "boolean" if its operand is a number, string, or boolean value and returns true or false based on the evaluation.</p>
<p>Here is a list of the return values for the <b>typeof</b> Operator.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="20%">Type</th>
<th>String Returned by typeof</th>
</tr>
<tr>
<td>Number</td>
<td>"number"</td>
</tr>
<tr>
<td>String</td>
<td>"string"</td>
</tr>
<tr>
<td>Boolean</td>
<td>"boolean"</td>
</tr>
<tr>
<td>Object</td>
<td>"object"</td>
</tr>
<tr>
<td>Function</td>
<td>"function"</td>
</tr>
<tr>
<td>Undefined</td>
<td>"undefined"</td>
</tr>
<tr>
<td>Null</td>
<td>"object"</td>
</tr>
</tbody></table>
<h5>Example</h5>
<p>The following code shows how to implement <b>typeof</b> operator.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="str">"String"</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> linebreak </span><span class="pun">=</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">typeof</span><span class="pln"> b </span><span class="pun">==</span><span class="pln"> </span><span class="str">"string"</span><span class="pln"> </span><span class="pun">?</span><span class="pln"> </span><span class="str">"B is String"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"B is Numeric"</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Result =&gt; "</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         
            result </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">typeof</span><span class="pln"> a </span><span class="pun">==</span><span class="pln"> </span><span class="str">"string"</span><span class="pln"> </span><span class="pun">?</span><span class="pln"> </span><span class="str">"A is String"</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="str">"A is Numeric"</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Result =&gt; "</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">result</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">linebreak</span><span class="pun">);</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Set the variables to different values and different operators and then try...</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h5>Output</h5>
<pre class="result notranslate">Result =&gt; B is String 
Result =&gt; A is Numeric
Set the variables to different values and different operators and then try...
</pre>







</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="60_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="62_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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