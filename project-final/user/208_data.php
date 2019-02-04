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
	$sid=208;
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


<p>A scope in any programming is a region of the program where a defined variable can have its existence and beyond that variable it cannot be accessed. There are three places where variables can be declared in C programming language −</p>
<ul class="list">
<li><p>Inside a function or a block which is called <b>local</b> variables.</p></li>
<li><p>Outside of all functions which is called <b>global</b> variables.</p></li>
<li><p>In the definition of function parameters which are called <b>formal</b> parameters.</p></li>
</ul>
<p>Let us understand what are <b>local</b> and <b>global</b> variables, and <b>formal</b> parameters.</p>
<h4>Local Variables</h4>
<p>Variables that are declared inside a function or block are called local variables. They can be used only by statements that are inside that function or block of code. Local variables are not known to functions outside their own. The following  example shows how local variables are used. Here all the variables a, b, and c are local to main() function.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

  </span><span class="com">/* local variable declaration */</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> c</span><span class="pun">;</span><span class="pln">
 
  </span><span class="com">/* actual initialization */</span><span class="pln">
  a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
  b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">
  c </span><span class="pun">=</span><span class="pln"> a </span><span class="pun">+</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
 
  printf </span><span class="pun">(</span><span class="str">"value of a = %d, b = %d and c = %d\n"</span><span class="pun">,</span><span class="pln"> a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">,</span><span class="pln"> c</span><span class="pun">);</span><span class="pln">
 
  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>Global Variables</h4>
<p>Global variables are defined outside a function, usually on top of the program. Global variables hold their values throughout the lifetime of your program and they can be accessed inside any of the functions defined for the program.</p>
<p>A global variable can be accessed by any function. That is, a global variable is available for use throughout your entire program after its declaration. The following program show how global variables are used in a program.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
 
</span><span class="com">/* global variable declaration */</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> g</span><span class="pun">;</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

  </span><span class="com">/* local variable declaration */</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
 
  </span><span class="com">/* actual initialization */</span><span class="pln">
  a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
  b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">
  g </span><span class="pun">=</span><span class="pln"> a </span><span class="pun">+</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
 
  printf </span><span class="pun">(</span><span class="str">"value of a = %d, b = %d and g = %d\n"</span><span class="pun">,</span><span class="pln"> a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">,</span><span class="pln"> g</span><span class="pun">);</span><span class="pln">
 
  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>A program can have same name for local and global variables but the value of local variable inside a function will take preference. Here is an example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
 
</span><span class="com">/* global variable declaration */</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> g </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

  </span><span class="com">/* local variable declaration */</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> g </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
 
  printf </span><span class="pun">(</span><span class="str">"value of g = %d\n"</span><span class="pun">,</span><span class="pln">  g</span><span class="pun">);</span><span class="pln">
 
  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">value of g = 10
</pre>
<h4>Formal Parameters</h4>
<p>Formal parameters, are treated as local variables with-in a function and they take precedence over global variables. Following is an example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
 
</span><span class="com">/* global variable declaration */</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

  </span><span class="com">/* local variable declaration in main function */</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">
  </span><span class="kwd">int</span><span class="pln"> c </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">

  printf </span><span class="pun">(</span><span class="str">"value of a in main() = %d\n"</span><span class="pun">,</span><span class="pln">  a</span><span class="pun">);</span><span class="pln">
  c </span><span class="pun">=</span><span class="pln"> sum</span><span class="pun">(</span><span class="pln"> a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">);</span><span class="pln">
  printf </span><span class="pun">(</span><span class="str">"value of c in main() = %d\n"</span><span class="pun">,</span><span class="pln">  c</span><span class="pun">);</span><span class="pln">

  </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="com">/* function to add two integers */</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> sum</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> a</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> b</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   printf </span><span class="pun">(</span><span class="str">"value of a in sum() = %d\n"</span><span class="pun">,</span><span class="pln">  a</span><span class="pun">);</span><span class="pln">
   printf </span><span class="pun">(</span><span class="str">"value of b in sum() = %d\n"</span><span class="pun">,</span><span class="pln">  b</span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> a </span><span class="pun">+</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">value of a in main() = 10
value of a in sum() = 10
value of b in sum() = 20
value of c in main() = 30
</pre>
<h4>Initializing Local and Global Variables</h4>
<p>When a local variable is defined, it is not initialized  by the system, you must initialize it yourself. Global variables are initialized automatically by the system when you define them as follows −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Data Type</th>
<th>Initial Default Value</th>
</tr>
<tr>
<td>int</td>
<td>0 </td>
</tr>
<tr>
<td>char</td>
<td>'\0'</td>
</tr>
<tr>
<td>float</td>
<td>0</td>
</tr>
<tr>
<td>double</td>
<td>0</td>
</tr>
<tr>
<td>pointer</td>
<td>NULL</td>
</tr>
</tbody></table>
<p>It is a good programming practice to initialize variables properly, otherwise your program may produce unexpected results, because uninitialized variables will take some garbage value already available at their memory location.</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="207_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="209_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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