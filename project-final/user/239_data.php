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
	$sid=239;
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
<p>A function is a group of statements that together perform a task. Every C++ program has at least one function, which is <b>main()</b>, and all the most trivial programs can define additional functions.</p>
<p>You can divide up your code into separate functions. How you divide up your code among different functions is up to you, but logically the division usually is so each function performs a specific task.</p>
<p>A function <b>declaration</b> tells the compiler about a function's name, return type, and parameters. A function <b>definition</b> provides the actual body of the function.</p>
<p>The C++ standard library provides numerous built-in functions that your program can call. For example, function <b>strcat()</b> to concatenate two strings, function <b>memcpy()</b> to copy one memory location to another location and many more functions.</p>
<p>Different programming languages name functions differently like a method or a sub-routine or a procedure etc.</p>
<h4>Defining a Function</h4>
<p>The general form of a C++ function definition is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">return_type function_name</span><span class="pun">(</span><span class="pln"> parameter list </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   body of the </span><span class="kwd">function</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>A C++ function definition consists of a function header and a function body. Here are all the parts of a function:</p>
<ul class="list">
<li><p><b>Return Type</b>: A function may return a value. The <b>return_type</b> is the data type of the value the function returns. Some functions perform the desired operations without returning a value. In this case, the return_type is the keyword <b>void</b>.</p></li>
<li><p><b>Function Name:</b> This is the actual name of the function. The function name and the parameter list together constitute the function signature.</p></li>
<li><p><b>Parameters:</b> A parameter is like a placeholder. When a function is invoked, you pass a value to the parameter. This value is referred to as actual parameter or argument. The parameter list refers to the type, order, and number of the parameters of a function. Parameters are optional; that is, a function may contain no parameters.</p></li>
<li><p><b>Function Body:</b> The function body contains a collection of statements that define what the function does.</p></li>
</ul>
<h4>Example</h4>
<p>Following is the source code for a function called <b>max()</b>. This function takes two parameters num1 and num2 and returns the maximum between the two:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">// function returning the max between two numbers</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> max</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> num1</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> num2</span><span class="pun">)</span><span class="pln">  </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// local variable declaration</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> result</span><span class="pun">;</span><span class="pln">
 
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">num1 </span><span class="pun">&gt;</span><span class="pln"> num2</span><span class="pun">)</span><span class="pln">
      result </span><span class="pun">=</span><span class="pln"> num1</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln">
      result </span><span class="pun">=</span><span class="pln"> num2</span><span class="pun">;</span><span class="pln">
 
   </span><span class="kwd">return</span><span class="pln"> result</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">}</span></pre>
<h4>Function Declarations</h4>
<p>A function <b>declaration</b> tells the compiler about a function name and how to call the function. The actual body of the function can be defined separately.</p>
<p>A function declaration has the following parts:</p>
<pre class="result notranslate">return_type function_name( parameter list );
</pre>
<p>For the above defined function max(), following is the function declaration:</p>
<pre class="result notranslate">int max(int num1, int num2);
</pre>
<p>Parameter names are not importan in function declaration only their type is required, so following is also valid declaration:</p>
<pre class="result notranslate">int max(int, int);
</pre>
<p>Function declaration is required when you define a function in one source file and you call that function in another file. In such case, you should declare the function at the top of the file calling the function.</p>
<h4>Calling a Function</h4>
<p>While creating a C++ function, you give a definition of what the function has to do. To use a function, you will have to call or invoke that function.</p>
<p>When a program calls a function, program control is transferred to the called function. A called function performs defined task and when its return statement is executed or when its function-ending closing brace is reached, it returns program control back to the main program.</p>
<p>To call a function, you simply need to pass the required parameters along with function name, and if function returns a value, then you can store returned value. For example:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
 
</span><span class="com">// function declaration</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> max</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> num1</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> num2</span><span class="pun">);</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// local variable declaration:</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">100</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">200</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> ret</span><span class="pun">;</span><span class="pln">
 
   </span><span class="com">// calling a function to get max value.</span><span class="pln">
   ret </span><span class="pun">=</span><span class="pln"> max</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
 
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Max value is : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> ret </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
 
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
 
</span><span class="com">// function returning the max between two numbers</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> max</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> num1</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> num2</span><span class="pun">)</span><span class="pln">  </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// local variable declaration</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> result</span><span class="pun">;</span><span class="pln">
 
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">num1 </span><span class="pun">&gt;</span><span class="pln"> num2</span><span class="pun">)</span><span class="pln">
      result </span><span class="pun">=</span><span class="pln"> num1</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln">
      result </span><span class="pun">=</span><span class="pln"> num2</span><span class="pun">;</span><span class="pln">
 
   </span><span class="kwd">return</span><span class="pln"> result</span><span class="pun">;</span><span class="pln"> 
</span><span class="pun">}</span></pre>
<p>I kept max() function along with main() function and compiled the source code. While running final executable, it would produce the following result:</p>
<pre class="result notranslate">Max value is : 200
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="238_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="240_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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