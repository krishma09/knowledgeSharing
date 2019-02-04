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
	$sid=213;
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

<p>A <b>union</b> is a special data type available in C that allows to store different data types in the same memory location. You can define a union with many members, but only one member can contain a value at any given time. Unions provide an efficient way of using the same memory location for multiple-purpose.</p>
<h4>Defining a Union</h4>
<p>To define a union, you must use the <b>union</b> statement in the same way as you did while defining a structure. The union statement defines a new data type with more than one member for your program. The format of the union statement is as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">union</span><span class="pln"> </span><span class="pun">[</span><span class="kwd">union</span><span class="pln"> tag</span><span class="pun">]</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   member definition</span><span class="pun">;</span><span class="pln">
   member definition</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">...</span><span class="pln">
   member definition</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln"> </span><span class="pun">[</span><span class="pln">one </span><span class="kwd">or</span><span class="pln"> more </span><span class="kwd">union</span><span class="pln"> variables</span><span class="pun">];</span><span class="pln">  </span></pre>
<p>The <b>union tag</b> is optional and each member definition is a normal variable definition, such as int i; or float f; or any other valid variable definition. At the end of the union's definition, before the final semicolon, you can specify one or more union variables but it is optional. Here is the way you would define a union type named Data having three members i, f, and str −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">union</span><span class="pln"> </span><span class="typ">Data</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">float</span><span class="pln"> f</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> str</span><span class="pun">[</span><span class="lit">20</span><span class="pun">];</span><span class="pln">
</span><span class="pun">}</span><span class="pln"> data</span><span class="pun">;</span><span class="pln">  </span></pre>
<p>Now, a variable of <b>Data</b> type can store an integer, a floating-point number, or a string of characters. It means a single variable, i.e., same memory location, can be used to store multiple types of data. You can use any built-in or user defined data types inside a union based on your requirement.</p>
<p>The memory occupied by a union will be large enough to hold the largest member of the union. For example, in the above example, Data type will occupy 20 bytes of memory space because this is the maximum space which can be occupied by a character string. The following example displays the total memory size occupied by the above union −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;string.h&gt;</span><span class="pln">
 
</span><span class="kwd">union</span><span class="pln"> </span><span class="typ">Data</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">float</span><span class="pln"> f</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> str</span><span class="pun">[</span><span class="lit">20</span><span class="pun">];</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">union</span><span class="pln"> </span><span class="typ">Data</span><span class="pln"> data</span><span class="pun">;</span><span class="pln">        

   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Memory size occupied by data : %d\n"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">sizeof</span><span class="pun">(</span><span class="pln">data</span><span class="pun">));</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Memory size occupied by data : 20
</pre>
<h4>Accessing Union Members</h4>
<p>To access any member of a union, we use the <b>member access operator (.)</b>. The member access operator is coded as a period between the union variable name and the union member that we wish to access. You would use the keyword <b>union</b> to define variables of union type. The following example shows how to use unions in a program −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;string.h&gt;</span><span class="pln">
 
</span><span class="kwd">union</span><span class="pln"> </span><span class="typ">Data</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">float</span><span class="pln"> f</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> str</span><span class="pun">[</span><span class="lit">20</span><span class="pun">];</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">union</span><span class="pln"> </span><span class="typ">Data</span><span class="pln"> data</span><span class="pun">;</span><span class="pln">        

   data</span><span class="pun">.</span><span class="pln">i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
   data</span><span class="pun">.</span><span class="pln">f </span><span class="pun">=</span><span class="pln"> </span><span class="lit">220.5</span><span class="pun">;</span><span class="pln">
   strcpy</span><span class="pun">(</span><span class="pln"> data</span><span class="pun">.</span><span class="pln">str</span><span class="pun">,</span><span class="pln"> </span><span class="str">"C Programming"</span><span class="pun">);</span><span class="pln">

   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"data.i : %d\n"</span><span class="pun">,</span><span class="pln"> data</span><span class="pun">.</span><span class="pln">i</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"data.f : %f\n"</span><span class="pun">,</span><span class="pln"> data</span><span class="pun">.</span><span class="pln">f</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"data.str : %s\n"</span><span class="pun">,</span><span class="pln"> data</span><span class="pun">.</span><span class="pln">str</span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">data.i : 1917853763
data.f : 4122360580327794860452759994368.000000
data.str : C Programming
</pre>
<p>Here, we can see that the values of <b>i</b> and <b>f</b> members of union got corrupted because the final value assigned to the variable has occupied the memory location and this is the reason that the value of <b>str</b> member is getting printed very well.</p>
<p>Now let's look into the same example once again where we will use one variable at a time which is the main purpose of having unions −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;string.h&gt;</span><span class="pln">
 
</span><span class="kwd">union</span><span class="pln"> </span><span class="typ">Data</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">float</span><span class="pln"> f</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> str</span><span class="pun">[</span><span class="lit">20</span><span class="pun">];</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">union</span><span class="pln"> </span><span class="typ">Data</span><span class="pln"> data</span><span class="pun">;</span><span class="pln">        

   data</span><span class="pun">.</span><span class="pln">i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"data.i : %d\n"</span><span class="pun">,</span><span class="pln"> data</span><span class="pun">.</span><span class="pln">i</span><span class="pun">);</span><span class="pln">
   
   data</span><span class="pun">.</span><span class="pln">f </span><span class="pun">=</span><span class="pln"> </span><span class="lit">220.5</span><span class="pun">;</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"data.f : %f\n"</span><span class="pun">,</span><span class="pln"> data</span><span class="pun">.</span><span class="pln">f</span><span class="pun">);</span><span class="pln">
   
   strcpy</span><span class="pun">(</span><span class="pln"> data</span><span class="pun">.</span><span class="pln">str</span><span class="pun">,</span><span class="pln"> </span><span class="str">"C Programming"</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"data.str : %s\n"</span><span class="pun">,</span><span class="pln"> data</span><span class="pun">.</span><span class="pln">str</span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">data.i : 10
data.f : 220.500000
data.str : C Programming
</pre>
<p>Here, all the members are getting printed very well because one member is being used at a time.</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="212_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="214_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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