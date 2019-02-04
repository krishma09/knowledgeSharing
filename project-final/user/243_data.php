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
	$sid=243;
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
<p>C++ pointers are easy and fun to learn. Some C++ tasks are performed more easily with pointers, and other C++ tasks, such as dynamic memory allocation, cannot be performed without them.</p>
<p>As you know every variable is a memory location and every memory location has its address defined which can be accessed using ampersand (&amp;) operator which denotes an address in memory. Consider the following which will print the address of the variables defined:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: pointer;"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln">  var1</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> var2</span><span class="pun">[</span><span class="lit">10</span><span class="pun">];</span><span class="pln">

   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Address of var1 variable: "</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln">var1 </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">

   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Address of var2 variable: "</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln">var2 </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces result something as follows:</p>
<pre class="result notranslate">Address of var1 variable: 0xbfebd5c0
Address of var2 variable: 0xbfebd5b6
</pre>
<h4>What Are Pointers?</h4>
<p>A <b>pointer</b> is a variable whose value is the address of another variable. Like any variable or constant, you must declare a pointer before you can work with it. The general form of a pointer variable declaration is:</p>

<p>Here, <b>type</b> is the pointer's base type; it must be a valid C++ type and <b>var-name</b> is the name of the pointer variable. The asterisk you used to declare a pointer is the same asterisk that you use for multiplication. However, in this statement the asterisk is being used to designate a variable as a pointer. Following are the valid pointer declaration:</p>
<pre class="result notranslate">int    *ip;    // pointer to an integer
double *dp;    // pointer to a double
float  *fp;    // pointer to a float
char   *ch     // pointer to character
</pre>
<p>The actual data type of the value of all pointers, whether integer, float, character, or otherwise, is the same, a long hexadecimal number that represents a memory address. The only difference between pointers of different data types is the data type of the variable or constant that the pointer points to.</p>
<h4>Using Pointers in C++:</h4>
<p>There are few important operations, which we will do with the pointers very frequently. <b>(a)</b> we define a pointer variables <b>(b)</b> assign the address of a variable to a pointer and <b>(c)</b> finally access the value at the address available in the pointer variable. This is done by using unary operator <b>*</b> that returns the value of the variable located at the address specified by its operand. Following example makes use of these operations:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln">  </span><span class="kwd">var</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">   </span><span class="com">// actual variable declaration.</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln">  </span><span class="pun">*</span><span class="pln">ip</span><span class="pun">;</span><span class="pln">        </span><span class="com">// pointer variable </span><span class="pln">

   ip </span><span class="pun">=</span><span class="pln"> </span><span class="pun">&amp;</span><span class="kwd">var</span><span class="pun">;</span><span class="pln">       </span><span class="com">// store address of var in pointer variable</span><span class="pln">

   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Value of var variable: "</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="kwd">var</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">

   </span><span class="com">// print the address stored in ip pointer variable</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Address stored in ip variable: "</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> ip </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">

   </span><span class="com">// access the value at the address available in pointer</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Value of *ip variable: "</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="pun">*</span><span class="pln">ip </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces result something as follows:</p>
<pre class="result notranslate">Value of var variable: 20
Address stored in ip variable: 0xbfc601ac
Value of *ip variable: 20
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="242_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="244_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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