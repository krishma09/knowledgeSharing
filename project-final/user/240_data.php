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
	$sid=240;
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

<p>Normally, when we work with Numbers, we use primitive data types such as int, short, long, float and double, etc. The number data types, their possible values and number ranges have been explained while discussing C++ Data Types.</p>
<h4>Defining Numbers in C++</h4>
<p>You have already defined numbers in various examples given in previous chapters. Here is another consolidated example to define various types of numbers in C++:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// number definition:</span><span class="pln">
   </span><span class="kwd">short</span><span class="pln">  s</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln">    i</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">long</span><span class="pln">   l</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">float</span><span class="pln">  f</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">double</span><span class="pln"> d</span><span class="pun">;</span><span class="pln">
   
   </span><span class="com">// number assignments;</span><span class="pln">
   s </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">      
   i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1000</span><span class="pun">;</span><span class="pln">    
   l </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1000000</span><span class="pun">;</span><span class="pln"> 
   f </span><span class="pun">=</span><span class="pln"> </span><span class="lit">230.47</span><span class="pun">;</span><span class="pln">  
   d </span><span class="pun">=</span><span class="pln"> </span><span class="lit">30949.374</span><span class="pun">;</span><span class="pln">
   
   </span><span class="com">// number printing;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"short  s :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> s </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"int    i :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> i </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"long   l :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> l </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"float  f :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> f </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"double d :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> d </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
 
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result notranslate">short  s :10
int    i :1000
long   l :1000000
float  f :230.47
double d :30949.4
</pre>
<h4>Math Operations in C++</h4>
<p>In addition to the various functions you can create, C++ also includes some useful functions you can use. These functions are available in standard C and C++ libraries and called <b>built-in</b> functions. These are functions that can be included in your program and then use.</p>
<p>C++ has a rich set of mathematical operations, which can be performed on various numbers. Following table lists down some useful built-in mathematical functions available in C++.</p>
<p>To utilize these functions you need to include the math header file <b>&lt;cmath&gt;</b>.</p>
<table class="table table-bordered">
<tbody><tr>
<th width="5%">S.N.</th>
<th>Function &amp; Purpose</th>
</tr>
<tr>
<td>1</td>
<td><b>double cos(double);</b>
<p>This function takes an angle (as a double) and returns the cosine.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><b>double sin(double);</b>
<p>This function takes an angle (as a double) and returns the sine.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><b>double tan(double);</b>
<p>This function takes an angle (as a double) and returns the tangent.</p>
</td>
</tr>
<tr>
<td>4</td>
<td><b>double log(double);</b>
<p>This function takes a number and returns the natural log of that number.</p>
</td>
</tr>
<tr>
<td>5</td>
<td><b>double pow(double, double);</b>
<p>The first is a number you wish to raise and the second is the power you wish to raise it t</p>
</td>
</tr>
<tr>
<td>6</td>
<td><b>double hypot(double, double);</b>
<p>If you pass this function the length of two sides of a right triangle, it will return you the length of the hypotenuse.</p>
</td>
</tr>
<tr>
<td>7</td>
<td><b>double sqrt(double);</b>
<p>You pass this function a number and it gives you this square root.</p>
</td>
</tr>
<tr>
<td>8</td>
<td><b>int abs(int);</b>
<p>This function returns the absolute value of an integer that is passed to it.</p>
</td>
</tr>
<tr>
<td>9</td>
<td><b>double fabs(double);</b>
<p>This function returns the absolute value of any decimal number passed to it.</p>
</td>
</tr>
<tr>
<td>10</td>
<td><b>double floor(double);</b>
<p>Finds the integer which is less than or equal to the argument passed to it.</p>
</td>
</tr>
</tbody></table>
<p>Following a simple example to show few of the mathematical operations:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;cmath&gt;</span><span class="pln">
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="com">// number definition:</span><span class="pln">
   </span><span class="kwd">short</span><span class="pln">  s </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln">    i </span><span class="pun">=</span><span class="pln"> </span><span class="pun">-</span><span class="lit">1000</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">long</span><span class="pln">   l </span><span class="pun">=</span><span class="pln"> </span><span class="lit">100000</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">float</span><span class="pln">  f </span><span class="pun">=</span><span class="pln"> </span><span class="lit">230.47</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">double</span><span class="pln"> d </span><span class="pun">=</span><span class="pln"> </span><span class="lit">200.374</span><span class="pun">;</span><span class="pln">

   </span><span class="com">// mathematical operations;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"sin(d) :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> sin</span><span class="pun">(</span><span class="pln">d</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"abs(i)  :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> abs</span><span class="pun">(</span><span class="pln">i</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"floor(d) :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> floor</span><span class="pun">(</span><span class="pln">d</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"sqrt(f) :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> sqrt</span><span class="pun">(</span><span class="pln">f</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"pow( d, 2) :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> pow</span><span class="pun">(</span><span class="pln">d</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
 
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result notranslate">sign(d) :-0.634939
abs(i)  :1000
floor(d) :200
sqrt(f) :15.1812
pow( d, 2 ) :40149.7
</pre>
<h4>Random Numbers in C++</h4>
<p>There are many cases where you will wish to generate a random number. There are actually two functions you will need to know about random number generation. The first is <b>rand()</b>, this function will only return a pseudo random number. The way to fix this is to first call the <b>srand()</b> function.</p>
<p>Following is a simple example to generate few random numbers. This example makes use of <b>time()</b> function to get the number of seconds on your system time, to randomly seed the rand() function: </p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;ctime&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;cstdlib&gt;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">,</span><span class="pln">j</span><span class="pun">;</span><span class="pln">
 
   </span><span class="com">// set the seed</span><span class="pln">
   srand</span><span class="pun">(</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">unsigned</span><span class="pun">)</span><span class="pln">time</span><span class="pun">(</span><span class="pln"> NULL </span><span class="pun">)</span><span class="pln"> </span><span class="pun">);</span><span class="pln">

   </span><span class="com">/* generate 10  random numbers. */</span><span class="pln">
   </span><span class="kwd">for</span><span class="pun">(</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="com">// generate actual random number</span><span class="pln">
      j</span><span class="pun">=</span><span class="pln"> rand</span><span class="pun">();</span><span class="pln">
      cout </span><span class="pun">&lt;&lt;</span><span class="str">" Random Number : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> j </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;ctime&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;cstdlib&gt;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">,</span><span class="pln">j</span><span class="pun">;</span><span class="pln">
 
   </span><span class="com">// set the seed</span><span class="pln">
   srand</span><span class="pun">(</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">unsigned</span><span class="pun">)</span><span class="pln">time</span><span class="pun">(</span><span class="pln"> NULL </span><span class="pun">)</span><span class="pln"> </span><span class="pun">);</span><span class="pln">

   </span><span class="com">/* generate 10  random numbers. */</span><span class="pln">
   </span><span class="kwd">for</span><span class="pun">(</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      </span><span class="com">// generate actual random number</span><span class="pln">
      j</span><span class="pun">=</span><span class="pln"> rand</span><span class="pun">();</span><span class="pln">
      cout </span><span class="pun">&lt;&lt;</span><span class="str">" Random Number : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> j </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result notranslate"> Random Number : 1748144778
 Random Number : 630873888
 Random Number : 2134540646
 Random Number : 219404170
 Random Number : 902129458
 Random Number : 920445370
 Random Number : 1319072661
 Random Number : 257938873
 Random Number : 1256201101
 Random Number : 580322989
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="239_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="241_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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