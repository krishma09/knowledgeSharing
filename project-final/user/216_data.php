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
	$sid=216;
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
<p>When we say <b>Input</b>, it means to feed some data into a program. An input can be given in the form of a file or from the command line. C programming provides a set of built-in functions to read the given input and feed it to the program as per requirement.</p>
<p>When we say <b>Output</b>, it means to display some data on screen, printer, or in any file. C programming provides a set of built-in functions to output the data on the computer screen as well as to save it in text or binary files.</p>
<h4>The Standard Files</h4>
<p>C programming treats all the devices as files. So devices such as the display are addressed in the same way as files and the following three files are automatically opened when a program executes to provide access to the keyboard and screen.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:30%">Standard File</th>
<th>File Pointer</th>
<th>Device</th>
</tr>
<tr>
<td>Standard input</td>
<td>stdin</td>
<td>Keyboard</td>
</tr>
<tr>
<td>Standard output</td>
<td>stdout</td>
<td>Screen</td>
</tr>
<tr>
<td>Standard error</td>
<td>stderr</td>
<td>Your screen</td>
</tr>
</tbody></table>
<p>The file pointers are the means to access the file for reading and writing purpose. This section explains how to read values from the screen and how to print the result on the screen.</p>
<h4>The getchar() and putchar() Functions</h4>
<p>The <b>int getchar(void)</b> function reads the next available character from the screen and returns it as an integer. This function reads only single character at a time. You can use this method in the loop in case you want to read more than one character from the screen.</p>
<p>The <b>int putchar(int c)</b> function puts the passed character on the screen and returns the same character. This function puts only single character at a time. You can use this method in the loop in case you want to display more than one character on the screen. Check the following example −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">int</span><span class="pln"> c</span><span class="pun">;</span><span class="pln">

   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Enter a value :"</span><span class="pun">);</span><span class="pln">
   c </span><span class="pun">=</span><span class="pln"> getchar</span><span class="pun">(</span><span class="pln"> </span><span class="pun">);</span><span class="pln">

   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"\nYou entered: "</span><span class="pun">);</span><span class="pln">
   putchar</span><span class="pun">(</span><span class="pln"> c </span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it waits for you to input some text. When you enter a text and press enter, then the program proceeds and reads only a single character and displays it as follows −</p>
<pre class="result notranslate">$./a.out
<b>Enter a value :</b> this is test
<b>You entered:</b> t
</pre>
<h4>The gets() and puts() Functions</h4>
<p>The <b>char *gets(char *s)</b> function reads a line from <b>stdin</b> into the buffer pointed to by <b>s</b> until either a terminating newline or EOF (End of File).</p>
<p>The <b>int puts(const char *s)</b> function writes the string 's' and 'a' trailing newline to <b>stdout</b>.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">char</span><span class="pln"> str</span><span class="pun">[</span><span class="lit">100</span><span class="pun">];</span><span class="pln">

   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Enter a value :"</span><span class="pun">);</span><span class="pln">
   gets</span><span class="pun">(</span><span class="pln"> str </span><span class="pun">);</span><span class="pln">

   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"\nYou entered: "</span><span class="pun">);</span><span class="pln">
   puts</span><span class="pun">(</span><span class="pln"> str </span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it waits for you to input some text. When you enter a text and press enter, then the program proceeds and reads the complete line till end, and displays it as follows −</p>
<pre class="result notranslate">$./a.out
<b>Enter a value :</b> this is test
<b>You entered:</b> this is test
</pre>
<h4>The scanf() and printf() Functions</h4>
<p>The <b>int scanf(const char *format, ...)</b>  function reads the input from the standard input stream <b>stdin</b> and scans that input according to the <b>format</b> provided.</p>
<p>The <b>int printf(const char *format, ...)</b> function writes the output to the standard output stream <b>stdout</b> and produces the output according to the format provided.</p>
<p>The <b>format</b> can be a simple constant string, but you can specify %s, %d, %c, %f, etc., to print or read strings, integer, character or float respectively. There are many other formatting options available which can be used based on requirements. Let us now proceed with a simple example to understand the concepts better −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">char</span><span class="pln"> str</span><span class="pun">[</span><span class="lit">100</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> i</span><span class="pun">;</span><span class="pln">

   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Enter a value :"</span><span class="pun">);</span><span class="pln">
   scanf</span><span class="pun">(</span><span class="str">"%s %d"</span><span class="pun">,</span><span class="pln"> str</span><span class="pun">,</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln">i</span><span class="pun">);</span><span class="pln">

   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"\nYou entered: %s %d "</span><span class="pun">,</span><span class="pln"> str</span><span class="pun">,</span><span class="pln"> i</span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it waits for you to input some text. When you enter a text and press enter, then program proceeds and reads the input and displays it as follows −</p>
<pre class="result notranslate">$./a.out
<b>Enter a value :</b> seven 7
<b>You entered:</b> seven 7
</pre>
<p>Here, it should be noted that scanf() expects input in the same format as you provided %s and %d, which means you have to provide valid inputs like "string integer". If you provide "string string" or "integer integer", then it will be assumed as wrong input. Secondly, while reading a string, scanf() stops reading as soon as it encounters a space, so "this is test" are three strings for scanf().</p>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="215_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="217_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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