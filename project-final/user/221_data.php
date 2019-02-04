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
	$sid=221;
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
<p>As such, C programming does not provide direct support for error handling but being a system programming language, it provides you access at lower level in the form of return values. Most of the C or even Unix function calls return -1 or NULL in case of any error and set an error code <b>errno</b>. It is set as a global variable and indicates an error occurred during any function call. You can find various error codes defined in &lt;error.h&gt; header file.</p>
<p>So a C programmer can check the returned values and can take appropriate action depending on the return value. It is a good practice, to set errno to 0 at the time of initializing a program. A value of 0 indicates that there is no error in the program.</p>
<h4>errno, perror(). and strerror()</h4>
<p>The C programming language provides <b>perror()</b> and <b>strerror()</b> functions which can be used to display the text message associated with <b>errno</b>.</p>
<ul class="list">
<li><p>The <b>perror()</b> function displays the string you pass to it, followed by a colon, a space, and then the textual representation of the current errno value.</p></li>
<li><p>The <b>strerror()</b> function, which returns a pointer to the textual representation of the current errno value.</p></li>
</ul>
<p>Let's try to simulate an error condition and try to open a file which does not exist. Here I'm using both the functions to show the usage, but you can use one or more ways of printing your errors. Second important point to note is that you should use <b>stderr</b> file stream to output all the errors.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;errno.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;string.h&gt;</span><span class="pln">

</span><span class="kwd">extern</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> errno </span><span class="pun">;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   FILE </span><span class="pun">*</span><span class="pln"> pf</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> errnum</span><span class="pun">;</span><span class="pln">
   pf </span><span class="pun">=</span><span class="pln"> fopen </span><span class="pun">(</span><span class="str">"unexist.txt"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"rb"</span><span class="pun">);</span><span class="pln">
	
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">pf </span><span class="pun">==</span><span class="pln"> NULL</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   
      errnum </span><span class="pun">=</span><span class="pln"> errno</span><span class="pun">;</span><span class="pln">
      fprintf</span><span class="pun">(</span><span class="pln">stderr</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Value of errno: %d\n"</span><span class="pun">,</span><span class="pln"> errno</span><span class="pun">);</span><span class="pln">
      perror</span><span class="pun">(</span><span class="str">"Error printed by perror"</span><span class="pun">);</span><span class="pln">
      fprintf</span><span class="pun">(</span><span class="pln">stderr</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Error opening file: %s\n"</span><span class="pun">,</span><span class="pln"> strerror</span><span class="pun">(</span><span class="pln"> errnum </span><span class="pun">));</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   
      fclose </span><span class="pun">(</span><span class="pln">pf</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Value of errno: 2
Error printed by perror: No such file or directory
Error opening file: No such file or directory
</pre>
<h4>Divide by Zero Errors</h4>
<p>It is a common problem that at the time of dividing any number, programmers do not check if a divisor is zero and finally it creates a runtime error.</p>
<p>The code below fixes this by checking if the divisor is zero before dividing −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdlib.h&gt;</span><span class="pln">

main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">int</span><span class="pln"> dividend </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> divisor </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> quotient</span><span class="pun">;</span><span class="pln">
 
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> divisor </span><span class="pun">==</span><span class="pln"> </span><span class="lit">0</span><span class="pun">){</span><span class="pln">
      fprintf</span><span class="pun">(</span><span class="pln">stderr</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Division by zero! Exiting...\n"</span><span class="pun">);</span><span class="pln">
      </span><span class="kwd">exit</span><span class="pun">(-</span><span class="lit">1</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   quotient </span><span class="pun">=</span><span class="pln"> dividend </span><span class="pun">/</span><span class="pln"> divisor</span><span class="pun">;</span><span class="pln">
   fprintf</span><span class="pun">(</span><span class="pln">stderr</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Value of quotient : %d\n"</span><span class="pun">,</span><span class="pln"> quotient </span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">exit</span><span class="pun">(</span><span class="lit">0</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdlib.h&gt;</span><span class="pln">

main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">int</span><span class="pln"> dividend </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> divisor </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> quotient</span><span class="pun">;</span><span class="pln">
 
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> divisor </span><span class="pun">==</span><span class="pln"> </span><span class="lit">0</span><span class="pun">){</span><span class="pln">
      fprintf</span><span class="pun">(</span><span class="pln">stderr</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Division by zero! Exiting...\n"</span><span class="pun">);</span><span class="pln">
      </span><span class="kwd">exit</span><span class="pun">(-</span><span class="lit">1</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   
   quotient </span><span class="pun">=</span><span class="pln"> dividend </span><span class="pun">/</span><span class="pln"> divisor</span><span class="pun">;</span><span class="pln">
   fprintf</span><span class="pun">(</span><span class="pln">stderr</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Value of quotient : %d\n"</span><span class="pun">,</span><span class="pln"> quotient </span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">exit</span><span class="pun">(</span><span class="lit">0</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Division by zero! Exiting...
</pre>
<h4>Program Exit Status</h4>
<p>It is a common practice to exit with a value of EXIT_SUCCESS in case of program coming out after a successful operation. Here, EXIT_SUCCESS is a macro and it is defined as 0.</p>

<p>If you have an error condition in your program and you are coming out then you should exit with a status EXIT_FAILURE which is defined as -1. So let's write above program as follows −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdlib.h&gt;</span><span class="pln">

main</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">int</span><span class="pln"> dividend </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> divisor </span><span class="pun">=</span><span class="pln"> </span><span class="lit">5</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> quotient</span><span class="pun">;</span><span class="pln">
 
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> divisor </span><span class="pun">==</span><span class="pln"> </span><span class="lit">0</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      fprintf</span><span class="pun">(</span><span class="pln">stderr</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Division by zero! Exiting...\n"</span><span class="pun">);</span><span class="pln">
      </span><span class="kwd">exit</span><span class="pun">(</span><span class="pln">EXIT_FAILURE</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
	
   quotient </span><span class="pun">=</span><span class="pln"> dividend </span><span class="pun">/</span><span class="pln"> divisor</span><span class="pun">;</span><span class="pln">
   fprintf</span><span class="pun">(</span><span class="pln">stderr</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Value of quotient : %d\n"</span><span class="pun">,</span><span class="pln"> quotient </span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">exit</span><span class="pun">(</span><span class="pln">EXIT_SUCCESS</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Value of quotient : 4
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="220_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="222_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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