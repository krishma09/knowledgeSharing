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
	$sid=223;
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
<p>Sometimes, you may come across a situation, when you want to have a function, which can take variable number of arguments, i.e., parameters, instead of predefined number of parameters. The C programming language provides a solution for this situation and you are allowed to define a function which can accept variable number of parameters based on your requirement. The following example shows the definition of such a function.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">int</span><span class="pln"> func</span><span class="pun">(</span><span class="kwd">int</span><span class="pun">,</span><span class="pln"> </span><span class="pun">...</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="pun">.</span><span class="pln">
   </span><span class="pun">.</span><span class="pln">
   </span><span class="pun">.</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   func</span><span class="pun">(</span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">,</span><span class="pln"> </span><span class="lit">3</span><span class="pun">);</span><span class="pln">
   func</span><span class="pun">(</span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">,</span><span class="pln"> </span><span class="lit">3</span><span class="pun">,</span><span class="pln"> </span><span class="lit">4</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>It should be noted that the function <b>func()</b> has its last argument as ellipses, i.e. three dotes (<b>...</b>) and the one just before the ellipses is always an <b>int</b> which will represent the total number variable arguments passed. To use such functionality, you need to make use of <b>stdarg.h</b> header file which provides the functions and macros to implement the functionality of variable arguments and follow the given steps −</p>
<ul class="list">
<li><p>Define a function with its last parameter as ellipses and the one just before the ellipses is always an <b>int</b> which will represent the number of arguments.</p></li>
<li><p>Create a <b>va_list</b> type variable in the function definition. This type is defined in stdarg.h header file.</p></li>
<li><p>Use <b>int</b> parameter and <b>va_start</b> macro to initialize the <b>va_list</b> variable to an argument list. The macro va_start is defined in stdarg.h header file.</p></li>
<li><p>Use <b>va_arg</b> macro and <b>va_list</b> variable to access each item in argument list.</p></li>
<li><p>Use a macro <b>va_end</b> to clean up the memory assigned to <b>va_list</b> variable.</p></li>
</ul>
<p>Now let us follow the above steps and write down a simple function which can take the variable number of parameters and return their average −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdarg.h&gt;</span><span class="pln">

</span><span class="kwd">double</span><span class="pln"> average</span><span class="pun">(</span><span class="kwd">int</span><span class="pln"> num</span><span class="pun">,...)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   va_list valist</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">double</span><span class="pln"> sum </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0.0</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">;</span><span class="pln">

   </span><span class="com">/* initialize valist for num number of arguments */</span><span class="pln">
   va_start</span><span class="pun">(</span><span class="pln">valist</span><span class="pun">,</span><span class="pln"> num</span><span class="pun">);</span><span class="pln">

   </span><span class="com">/* access all the arguments assigned to valist */</span><span class="pln">
   </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="pln">i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;</span><span class="pln"> num</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      sum </span><span class="pun">+=</span><span class="pln"> va_arg</span><span class="pun">(</span><span class="pln">valist</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
	
   </span><span class="com">/* clean memory reserved for valist */</span><span class="pln">
   va_end</span><span class="pun">(</span><span class="pln">valist</span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> sum</span><span class="pun">/</span><span class="pln">num</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"Average of 2, 3, 4, 5 = %f\n"</span><span class="pun">,</span><span class="pln"> average</span><span class="pun">(</span><span class="lit">4</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">,</span><span class="lit">3</span><span class="pun">,</span><span class="lit">4</span><span class="pun">,</span><span class="lit">5</span><span class="pun">));</span><span class="pln">
   printf</span><span class="pun">(</span><span class="str">"Average of 5, 10, 15 = %f\n"</span><span class="pun">,</span><span class="pln"> average</span><span class="pun">(</span><span class="lit">3</span><span class="pun">,</span><span class="pln"> </span><span class="lit">5</span><span class="pun">,</span><span class="lit">10</span><span class="pun">,</span><span class="lit">15</span><span class="pun">));</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result. It should be noted that the function <b>average()</b> has been called twice and each time the first argument represents the total number of variable arguments being passed. Only ellipses will be used to pass variable number of arguments.</p>
<pre class="result notranslate">Average of 2, 3, 4, 5 = 3.500000
Average of 5, 10, 15 = 10.000000
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="222_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="224_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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