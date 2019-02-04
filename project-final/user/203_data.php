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
	$sid=203;
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
<p>A storage class defines the scope (visibility) and life-time of variables and/or functions within a C Program. They precede the type that they modify. We have four different storage classes in a C program −</p>
<ul class="list">
<li>auto</li>
<li>register</li>
<li>static</li>
<li>extern</li>
</ul>
<h4>The auto Storage Class</h4>
<p>The <b>auto</b> storage class is the default storage class for all local variables.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> mount</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">auto</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> month</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>The example above defines two variables with in the same storage class. 'auto' can only be used within functions, i.e., local variables.</p>
<h4>The register Storage Class</h4>
<p>The <b>register</b> storage class is used to define local variables that should be stored in a register instead of RAM. This means that the variable has a maximum size equal to the register size (usually one word) and can't have the unary '&amp;' operator applied to it (as it does not have a memory location).</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">{</span><span class="pln">
   </span><span class="kwd">register</span><span class="pln"> </span><span class="kwd">int</span><span class="pln">  miles</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>The register should only be used for variables that require quick access such as counters. It should also be noted that defining 'register' does not mean that the variable will be stored in a register. It means that it MIGHT be stored in a register depending on hardware and implementation restrictions.</p>
<h4>The static Storage Class</h4>
<p>The <b>static</b> storage class instructs the compiler to keep a local variable in existence during the life-time of the program instead of creating and destroying it each time it comes into and goes out of scope. Therefore, making local variables static allows them to maintain their values between function calls.</p>
<p>The static modifier may also be applied to global variables. When this is done, it causes that variable's scope to be restricted to the file in which it is declared.</p>
<p>In C programming, when <b>static</b> is used on a class data member, it causes only one copy of that member to be shared by all the objects of its class.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
 
</span><span class="com">/* function declaration */</span><span class="pln">
</span><span class="kwd">void</span><span class="pln"> func</span><span class="pun">(</span><span class="kwd">void</span><span class="pun">);</span><span class="pln">
 
</span><span class="kwd">static</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> count </span><span class="pun">=</span><span class="pln"> </span><span class="lit">5</span><span class="pun">;</span><span class="pln"> </span><span class="com">/* global variable */</span><span class="pln">
 
main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">while</span><span class="pun">(</span><span class="pln">count</span><span class="pun">--)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      func</span><span class="pun">();</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
	
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="com">/* function definition */</span><span class="pln">
</span><span class="kwd">void</span><span class="pln"> func</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">static</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">5</span><span class="pun">;</span><span class="pln"> </span><span class="com">/* local static variable */</span><span class="pln">
   i</span><span class="pun">++;</span><span class="pln">

   printf</span><span class="pun">(</span><span class="str">"i is %d and count is %d\n"</span><span class="pun">,</span><span class="pln"> i</span><span class="pun">,</span><span class="pln"> count</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">i is 6 and count is 4
i is 7 and count is 3
i is 8 and count is 2
i is 9 and count is 1
i is 10 and count is 0
</pre>
<h4>The extern Storage Class</h4>
<p>The <b>extern</b> storage class is used to give a reference of a global variable that is visible to ALL the program files. When you use 'extern', the variable cannot be initialized however, it points the variable name at a storage location that has been previously defined.</p>
<p>When you have multiple files and you define a global variable or function, which will also be used in other files, then <i>extern</i> will be used in another file to provide the reference of defined variable or function. Just for understanding, <i>extern</i> is used to declare a global variable or function  in another file.</p>
<p>The extern modifier is most commonly used when there are two or more files sharing the same global variables or functions as explained below.</p>
<p><b>First File: main.c</b></p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> count </span><span class="pun">;</span><span class="pln">
</span><span class="kwd">extern</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> write_extern</span><span class="pun">();</span><span class="pln">
 
main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   count </span><span class="pun">=</span><span class="pln"> </span><span class="lit">5</span><span class="pun">;</span><span class="pln">
   write_extern</span><span class="pun">();</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><b>Second File: support.c</b></p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
 
</span><span class="kwd">extern</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> count</span><span class="pun">;</span><span class="pln">
 
</span><span class="kwd">void</span><span class="pln"> write_extern</span><span class="pun">(</span><span class="kwd">void</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"count is %d\n"</span><span class="pun">,</span><span class="pln"> count</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Here, <i>extern</i> is being used to declare <i>count</i> in the second file, where as it has its definition in the first file, main.c. Now, compile these two files as follows −</p>
<pre class="result notranslate">$gcc main.c support.c
</pre>
<p>It will produce the executable program <b>a.out</b>. When this program is executed, it produces the following result −</p>
<pre class="result notranslate">count is 5
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="202_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="204_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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