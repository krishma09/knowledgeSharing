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
	$sid=224;
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
<p>This chapter explains dynamic memory management in C. The C programming language provides several functions for memory allocation and management. These functions can be found in the <b>&lt;stdlib.h&gt;</b> header file.</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th style="text-align:center;">Function &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><p><b>void *calloc(int num, int size);</b></p>
<p>This function allocates an array of <b>num</b> elements each of which size in bytes will be <b>size</b>.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><p><b>void free(void *address);</b></p>
<p>This function releases a block of memory block specified by address.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><p><b>void *malloc(int num);</b></p>
<p>This function allocates an array of <b>num</b> bytes and leave them uninitialized.</p>
</td>
</tr>
<tr>
<td>4</td>
<td><p><b>void *realloc(void *address, int newsize);</b></p>
<p>This function re-allocates memory extending it upto <b>newsize</b>.</p>
</td>
</tr>
</tbody></table>
<h4>Allocating Memory Dynamically</h4>
<p>While programming, if you are aware of the size of an array, then it is easy and you can define it as an array. For example, to store a name of any person, it can go up to a maximum of 100 characters, so you can define something as follows −</p>
<pre class="result notranslate">char name[100];
</pre>
<p>But now let us consider a situation where you have no idea about the length of the text you need to store, for example, you want to store a detailed description about a topic. Here we need to define a pointer to character without defining how much memory is required and later, based on requirement, we can allocate memory as shown in the below example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdlib.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;string.h&gt;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">char</span><span class="pln"> name</span><span class="pun">[</span><span class="lit">100</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> </span><span class="pun">*</span><span class="pln">description</span><span class="pun">;</span><span class="pln">

   strcpy</span><span class="pun">(</span><span class="pln">name</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Zara Ali"</span><span class="pun">);</span><span class="pln">

   </span><span class="com">/* allocate memory dynamically */</span><span class="pln">
   description </span><span class="pun">=</span><span class="pln"> malloc</span><span class="pun">(</span><span class="pln"> </span><span class="lit">200</span><span class="pln"> </span><span class="pun">*</span><span class="pln"> </span><span class="kwd">sizeof</span><span class="pun">(</span><span class="kwd">char</span><span class="pun">)</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
	
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> description </span><span class="pun">==</span><span class="pln"> NULL </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      fprintf</span><span class="pun">(</span><span class="pln">stderr</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Error - unable to allocate required memory\n"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      strcpy</span><span class="pun">(</span><span class="pln"> description</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Zara ali a DPS student in class 10th"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   printf</span><span class="pun">(</span><span class="str">"Name = %s\n"</span><span class="pun">,</span><span class="pln"> name </span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"Description: %s\n"</span><span class="pun">,</span><span class="pln"> description </span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result.</p>
<pre class="result notranslate">Name = Zara Ali
Description: Zara ali a DPS student in class 10th
</pre>
<p>Same program can be written using <b>calloc();</b> only thing is you need to replace malloc with calloc as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">calloc</span><span class="pun">(</span><span class="lit">200</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">sizeof</span><span class="pun">(</span><span class="kwd">char</span><span class="pun">));</span></pre>
<p>So you have complete control and you can pass any size value while allocating memory, unlike arrays where once the size defined, you cannot change it.</p>
<h4>Resizing and Releasing Memory</h4>
<p>When your program comes out, operating system automatically release all the memory allocated by your program but as a good practice when you are not in need of memory anymore then you should release that memory by calling the function <b>free()</b>.</p>
<p>Alternatively, you can increase or decrease the size of an allocated memory block by calling the function <b>realloc()</b>. Let us check the above program once again and make use of realloc() and free() functions −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdlib.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;string.h&gt;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">char</span><span class="pln"> name</span><span class="pun">[</span><span class="lit">100</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> </span><span class="pun">*</span><span class="pln">description</span><span class="pun">;</span><span class="pln">

   strcpy</span><span class="pun">(</span><span class="pln">name</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Zara Ali"</span><span class="pun">);</span><span class="pln">

   </span><span class="com">/* allocate memory dynamically */</span><span class="pln">
   description </span><span class="pun">=</span><span class="pln"> malloc</span><span class="pun">(</span><span class="pln"> </span><span class="lit">30</span><span class="pln"> </span><span class="pun">*</span><span class="pln"> </span><span class="kwd">sizeof</span><span class="pun">(</span><span class="kwd">char</span><span class="pun">)</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
	
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> description </span><span class="pun">==</span><span class="pln"> NULL </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      fprintf</span><span class="pun">(</span><span class="pln">stderr</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Error - unable to allocate required memory\n"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      strcpy</span><span class="pun">(</span><span class="pln"> description</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Zara ali a DPS student."</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
	
   </span><span class="com">/* suppose you want to store bigger description */</span><span class="pln">
   description </span><span class="pun">=</span><span class="pln"> realloc</span><span class="pun">(</span><span class="pln"> description</span><span class="pun">,</span><span class="pln"> </span><span class="lit">100</span><span class="pln"> </span><span class="pun">*</span><span class="pln"> </span><span class="kwd">sizeof</span><span class="pun">(</span><span class="kwd">char</span><span class="pun">)</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
	
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> description </span><span class="pun">==</span><span class="pln"> NULL </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      fprintf</span><span class="pun">(</span><span class="pln">stderr</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Error - unable to allocate required memory\n"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      strcat</span><span class="pun">(</span><span class="pln"> description</span><span class="pun">,</span><span class="pln"> </span><span class="str">"She is in class 10th"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   printf</span><span class="pun">(</span><span class="str">"Name = %s\n"</span><span class="pun">,</span><span class="pln"> name </span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"Description: %s\n"</span><span class="pun">,</span><span class="pln"> description </span><span class="pun">);</span><span class="pln">

   </span><span class="com">/* release memory using free() function */</span><span class="pln">
   free</span><span class="pun">(</span><span class="pln">description</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result.</p>
<pre class="result notranslate">Name = Zara Ali
Description: Zara ali a DPS student.She is in class 10th
</pre>
<p>You can try the above example without re-allocating extra memory, and strcat() function will give an error due to lack of available memory in description.</p>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="223_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="225_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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