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
	$sid=280;
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
<p>A variable is nothing but a name given to a storage area that our programs can manipulate. Each variable in VB.Net has a specific type, which determines the size and layout of the variable's memory; the range of values that can be stored within that memory; and the set of operations that can be applied to the variable.</p>
<p>We have already discussed various data types. The basic value types provided in VB.Net can be categorized as:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:25%;">Type</th>
<th>Example</th>
</tr>
<tr>
<td>Integral types</td>
<td>SByte, Byte, Short, UShort, Integer, UInteger, Long, ULong and Char</td>
</tr>
<tr>
<td>Floating point types</td>
<td>Single and Double</td>
</tr>
<tr>
<td>Decimal types</td>
<td>Decimal</td>
</tr>
<tr>
<td>Boolean types</td>
<td>True or False values, as assigned</td>
</tr>
<tr>
<td>Date types</td>
<td>Date</td>
</tr>
</tbody></table>
<p>VB.Net also allows defining other value types of variable like <b>Enum</b> and reference types of variables like <b>Class</b>. We will discuss date types and Classes in subsequent chapters.</p>
<h4>Variable Declaration in VB.Net</h4>
<p>The <b>Dim</b> statement is used for variable declaration and storage allocation for one or more variables. The Dim statement is used at module, class, structure, procedure or block level. </p>
<p>Syntax for variable declaration in VB.Net is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">[</span><span class="pln"> </span><span class="pun">&lt;</span><span class="pln"> attributelist</span><span class="pun">&gt;</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> accessmodifier </span><span class="pun">]</span><span class="pln"> </span><span class="pun">[[</span><span class="pln"> </span><span class="typ">Shared</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> </span><span class="typ">Shadows</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> </span><span class="pun">|</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> </span><span class="typ">Static</span><span class="pln"> </span><span class="pun">]]</span><span class="pln">
</span><span class="pun">[</span><span class="pln"> </span><span class="typ">ReadOnly</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> </span><span class="typ">Dim</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> </span><span class="typ">WithEvents</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> variablelist</span></pre>
<p>Where,</p>
<ul class="list">
<li><p><b><i>attributelist</i></b> is a list of attributes that apply to the variable. Optional. </p></li>
<li><p><b><i>accessmodifier</i></b> defines the access levels of the variables, it has values as  - Public, Protected, Friend, Protected Friend and Private. Optional. </p></li>
<li><p><i><b>Shared</b></i> declares a shared variable, which is not associated with any specific instance of a class or structure, rather available to all the instances of the class or structure. Optional.</p></li>
<li><p><b><i>Shadows</i></b> indicate that the variable re-declares and hides an identically named element, or set of overloaded elements, in a base class. Optional. </p></li>
<li><p><b><i>Static</i></b> indicates that the variable will retain its value, even when the after termination of the procedure in which it is declared. Optional. </p></li>
<li><p><b><i>ReadOnly</i></b> means the variable can be read, but not written. Optional. </p></li>
<li><p><b><i>WithEvents</i></b> specifies that the variable is used to respond to events raised by the instance assigned to the variable. Optional. </p></li>
<li><p><b><i>Variablelist</i></b> provides the list of variables declared.</p></li>
</ul>
<p>Each variable in the variable list has the following syntax and parts:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">variablename</span><span class="pun">[</span><span class="pln"> </span><span class="pun">(</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> boundslist </span><span class="pun">]</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> datatype </span><span class="pun">]</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> initializer </span><span class="pun">]</span></pre>
<p>Where,</p>
<ul class="list">
<li><p><i><b>variablename</b></i>: is the name of the variable</p></li>
<li><p><i><b>boundslist</b></i>: optional. It provides list of bounds of each dimension of an array variable.</p></li>
<li><p><i><b>New</b></i>: optional. It creates a new instance of the class when the Dim statement runs.</p></li>
<li><p><b><i>datatype</i></b>: Required if Option Strict is On. It specifies the data type of the variable.</p></li>
<li><p><i><b>initializer</b></i>: Optional if New is not specified. Expression that is evaluated and assigned to the variable when it is created.</p></li>
</ul>
<p>Some valid variable declarations along with their definition are shown here:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Dim</span><span class="pln"> </span><span class="typ">StudentID</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
</span><span class="typ">Dim</span><span class="pln"> </span><span class="typ">StudentName</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln">
</span><span class="typ">Dim</span><span class="pln"> </span><span class="typ">Salary</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">
</span><span class="typ">Dim</span><span class="pln"> count1</span><span class="pun">,</span><span class="pln"> count2 </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
</span><span class="typ">Dim</span><span class="pln"> status </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Boolean</span><span class="pln">
</span><span class="typ">Dim</span><span class="pln"> exitButton </span><span class="typ">As</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Windows</span><span class="pun">.</span><span class="typ">Forms</span><span class="pun">.</span><span class="typ">Button</span><span class="pln">
</span><span class="typ">Dim</span><span class="pln"> lastTime</span><span class="pun">,</span><span class="pln"> nextTime </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Date</span></pre>
<h4>Variable Initialization in VB.Net</h4>
<p>Variables are initialized (assigned a value) with an equal sign followed by a constant expression. The general form of initialization is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">variable_name </span><span class="pun">=</span><span class="pln"> value</span><span class="pun">;</span></pre>
<p>for example,</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Dim</span><span class="pln"> pi </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">
pi </span><span class="pun">=</span><span class="pln"> </span><span class="lit">3.14159</span></pre>
<p>You can initialize a variable at the time of declaration as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Dim</span><span class="pln"> </span><span class="typ">StudentID</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">100</span><span class="pln">
</span><span class="typ">Dim</span><span class="pln"> </span><span class="typ">StudentName</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Bill Smith"</span></pre>
<h4>Example</h4>
<p>Try the following example which makes use of various types of variables:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> variablesNdataypes
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> a </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Short</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> b </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> c </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">
      a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pln">
      b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pln">
      c </span><span class="pun">=</span><span class="pln"> a </span><span class="pun">+</span><span class="pln"> b
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"a = {0}, b = {1}, c = {2}"</span><span class="pun">,</span><span class="pln"> a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">,</span><span class="pln"> c</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">,</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">,</span><span class="pln"> c </span><span class="pun">=</span><span class="pln"> </span><span class="lit">30</span></pre>
<h4>Accepting Values from User</h4>
<p>The Console class in the System namespace provides a function <b>ReadLine</b> for accepting input from the user and store it into a variable. For example,</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Dim</span><span class="pln"> message </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln">
message </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span></pre>
<p>The following example demonstrates it:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> variablesNdataypes
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> message </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"Enter message: "</span><span class="pun">)</span><span class="pln">
      message </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Your Message: {0}"</span><span class="pun">,</span><span class="pln"> message</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result (assume the user inputs Hello World):</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Enter</span><span class="pln"> message</span><span class="pun">:</span><span class="pln"> </span><span class="typ">Hello</span><span class="pln"> </span><span class="typ">World</span><span class="pln">   
</span><span class="typ">Your</span><span class="pln"> </span><span class="typ">Message</span><span class="pun">:</span><span class="pln"> </span><span class="typ">Hello</span><span class="pln"> </span><span class="typ">World</span></pre>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Enter</span><span class="pln"> message</span><span class="pun">:</span><span class="pln"> </span><span class="typ">Hello</span><span class="pln"> </span><span class="typ">World</span><span class="pln">   
</span><span class="typ">Your</span><span class="pln"> </span><span class="typ">Message</span><span class="pun">:</span><span class="pln"> </span><span class="typ">Hello</span><span class="pln"> </span><span class="typ">World</span></pre>
<h4>Lvalues and Rvalues</h4>
<p>There are two kinds of expressions:</p>

<ul class="list">
<li><p><b>lvalue :</b> An expression that is an lvalue may appear as either the left-hand or right-hand side of an assignment.</p></li>
<li><p><b>rvalue :</b> An expression that is an rvalue may appear on the right- but not left-hand side of an assignment.</p></li>
</ul>
<ul class="list">
<li><p><b>lvalue :</b> An expression that is an lvalue may appear as either the left-hand or right-hand side of an assignment.</p></li>
<li><p><b>rvalue :</b> An expression that is an rvalue may appear on the right- but not left-hand side of an assignment.</p></li>
</ul>
<p>Variables are lvalues and so may appear on the left-hand side of an assignment. Numeric literals are rvalues and so may not be assigned and can not appear on the left-hand side. Following is a valid statement:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Dim</span><span class="pln"> g </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span></pre>
<p>But following is not a valid statement and would generate compile-time error:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="lit">20</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> g</span></pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="279_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="281_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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