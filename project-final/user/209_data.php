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
	$sid=209;
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

<p>Arrays a kind of data structure that can store a fixed-size sequential collection of elements of the same type. An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.</p>
<p>Instead of declaring individual variables, such as number0, number1, ..., and number99, you declare one array variable such as numbers and use numbers[0], numbers[1], and ..., numbers[99] to represent individual variables. A specific element in an array is accessed by an index.</p>
<p>All arrays consist of contiguous memory locations. The lowest address corresponds to the first element and the highest address to the last element.</p>
<img src="images/arrays.jpg" alt="Arrays in C">
<h4>Declaring Arrays</h4>
<p>To declare an array in C, a programmer specifies the type of the elements and the number of elements required by an array as follows −</p>
<pre class="result notranslate">type arrayName [ arraySize ];
</pre>
<p>This is called a <i>single-dimensional</i> array. The <b>arraySize</b> must be an integer constant greater than zero and <b>type</b> can be any valid C data type. For example, to declare a 10-element array called <b>balance</b> of type double, use this statement −</p>
<pre class="result notranslate">double balance[10];
</pre>
<p>Here <i>balance</i> is a variable array which is sufficient to hold up to 10 double numbers.</p>
<h4>Initializing Arrays</h4>
<p>You can initialize an array in C either one by one or using a single statement as follows −</p>
<pre class="result notranslate">double balance[5] = {1000.0, 2.0, 3.4, 7.0, 50.0};
</pre>
<p>The number of values between braces { } cannot be larger than the number of elements that we declare for the array between square brackets [ ].</p>
<p>If you omit the size of the array, an array just big enough to hold the initialization is created. Therefore, if you write −</p>
<pre class="result notranslate">double balance[] = {1000.0, 2.0, 3.4, 7.0, 50.0};
</pre>
<p>You will create exactly the same array as you did in the previous example. Following is an example to assign a single element of the array −</p>
<p>You will create exactly the same array as you did in the previous example. Following is an example to assign a single element of the array −</p>
<pre class="result notranslate">balance[4] = 50.0;
</pre>
<p>The above statement assigns the 5<sup>th</sup> element in the array with a value of 50.0. All arrays have 0 as the index of their first element which is also called the base index and the last index of an array will be total size of the array minus 1. Shown below is the pictorial representation of the array we discussed above −</p>
<img src="images/array_presentation.jpg" alt="Array Presentation">
<h4>Accessing Array Elements</h4>
<p>An element is accessed by indexing the array name. This is done by placing the index of the element within square brackets after the name of the array. For example −</p>
<pre class="result notranslate">double salary = balance[9];
</pre>
<p>The above statement will take the 10<sup>th</sup> element from the array and assign the value to salary variable. The following example Shows how to use all the three above mentioned concepts viz. declaration, assignment, and accessing arrays −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">int</span><span class="pln"> n</span><span class="pun">[</span><span class="pln"> </span><span class="lit">10</span><span class="pln"> </span><span class="pun">];</span><span class="pln"> </span><span class="com">/* n is an array of 10 integers */</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">,</span><span class="pln">j</span><span class="pun">;</span><span class="pln">
 
   </span><span class="com">/* initialize elements of array n to 0 */</span><span class="pln">         
   </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      n</span><span class="pun">[</span><span class="pln"> i </span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> i </span><span class="pun">+</span><span class="pln"> </span><span class="lit">100</span><span class="pun">;</span><span class="pln"> </span><span class="com">/* set element at location i to i + 100 */</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="com">/* output each array element's value */</span><span class="pln">
   </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="pln">j </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> j </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln"> j</span><span class="pun">++</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      printf</span><span class="pun">(</span><span class="str">"Element[%d] = %d\n"</span><span class="pun">,</span><span class="pln"> j</span><span class="pun">,</span><span class="pln"> n</span><span class="pun">[</span><span class="pln">j</span><span class="pun">]</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
 
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Element[0] = 100
Element[1] = 101
Element[2] = 102
Element[3] = 103
Element[4] = 104
Element[5] = 105
Element[6] = 106
Element[7] = 107
Element[8] = 108
Element[9] = 109
</pre>
<h4>Arrays in Detail</h4>
<p>Arrays are important to C and should need a lot more attention. The following important concepts related to array should be clear to a C programmer −</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th style="text-align:center;">Concept &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td>Multi-dimensional arrays</a>
<p>C supports multidimensional arrays. The simplest form of the multidimensional array is the two-dimensional array.</p></td> 
</tr>
<tr>
<td>2</td>
<td>Passing arrays to functions</a>
<p>You can pass to the function a pointer to an array by specifying the array's name without an index.</p></td> 
</tr>
<tr>
<td>3</td>
<td>Return array from a function</a>
<p>C allows a function to return an array.</p></td> 
</tr>
<tr>
<td>4</td>
<td>Pointer to an array</a>
<p>You can generate a pointer to the first element of an array by simply specifying the array name, without any index.</p></td> 
</tr>
</tbody></table>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="208_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="210_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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