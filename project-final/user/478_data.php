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
<title>JAVA Tutorials | knowledge.com</title>
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
	$sid=478;
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
<h4>Introduction</h4>
<p>The <b>Java.io.PrintWriter</b> class prints formatted representations of objects to a text-output stream.</p>
<h4>Class declaration</h4>
<p>Following is the declaration for <b>Java.io.PrintWriter</b> class −</p>
<pre class="result notranslate">public class PrintWriter
   extends Writer
</pre>
<h4>Field</h4>
<p>Following are the fields for <b>Java.io.PrintWriter</b> class −</p>
<ul class="list">
<li><p><b>protected Writer out</b> − This is the character-output stream of this PrintWriter.</p></li>
<li><p><b>protected Object lock</b> − This is the object used to synchronize operations on this stream.</p></li>
</ul>
<h4>Class constructors</h4>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.N.</th>
<th style="text-align:center;">Constructor &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td><p><b>PrintWriter(File file)</b></p>
<p>This creates a new PrintWriter, without automatic line flushing, with the specified file.</p></td>
</tr>
<tr>
<td class="ts">2</td>
<td><p><b>PrintWriter(File file, String csn)</b></p>
<p>This creates a new PrintWriter, without automatic line flushing, with the specified file and charset.</p></td>
</tr>
<tr>
<td class="ts">3</td>
<td><p><b>PrintWriter(OutputStream out)</b></p>
<p>This creates a new PrintWriter, without automatic line flushing, from an existing OutputStream.</p></td>
</tr>
<tr>
<td class="ts">4</td>
<td><p><b>PrintWriter(OutputStream out, boolean autoFlush)</b></p>
<p>This creates a new PrintWriter from an existing OutputStream.</p></td>
</tr>
<tr>
<td class="ts">5</td>
<td><p><b>PrintWriter(String fileName)</b></p>
<p>This creates a new PrintWriter, without automatic line flushing, with the specified file name.</p></td>
</tr>
<tr>
<td class="ts">6</td>
<td><p><b>PrintWriter(String fileName, String csn)</b></p>
<p>This creates a new PrintWriter, without automatic line flushing, with the specified file name and charset.</p></td>
</tr>
<tr>
<td class="ts">7</td>
<td><p><b>PrintWriter(Writer out)</b></p>
<p>This creates a new PrintWriter, without automatic line flushing.</p></td>
</tr>
<tr>
<td class="ts">8</td>
<td><p><b>PrintWriter(Writer out, boolean autoFlush)</b></p>
<p>This creates a new PrintWriter.</p></td>
</tr>
</tbody></table>
<h4>Class methods</h4>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.N.</th>
<th style="text-align:center;">Method &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td>PrintWriter append(char c)</a>
<p>This method appends the specified character to this writer.</p></td>
</tr>
<tr>
<td class="ts">2</td>
<td>PrintWriter append(CharSequence csq)</a>
<p>This method appends the specified character sequence to this writer.</p></td>
</tr>
<tr>
<td class="ts">3</td>
<td>PrintWriter append(CharSequence csq, int start, int end)</a>
<p>This method appends a subsequence of the specified character sequence to this writer.</p></td>
</tr>
<tr>
<td class="ts">4</td>
<td>boolean checkError()</a>
<p>This method flushes the stream if it's not closed and checks its error state.</p></td>
</tr>
<tr>
<td class="ts">5</td>
<td>protected void clearError()</a>
<p>This method Clears the error state of this stream.</p></td>
</tr>
<tr>
<td class="ts">6</td>
<td>void close()</a>
<p>This method Closes the stream and releases any system resources associated with it.</p></td>
</tr>
<tr>
<td class="ts">7</td>
<td>void flush()</a>
<p>This method Flushes the stream.</p></td>
</tr>
<tr>
<td class="ts">8</td>
<td>PrintWriter format(Locale l, String format, Object... args)</a>
<p>This method writes a formatted string to this writer using the specified format string and arguments.</p></td>
</tr>
<tr>
<td class="ts">9</td>
<td>PrintWriter format(String format, Object... args)</a>
<p>This method writes a formatted string to this writer using the specified format string and arguments.</p></td>
</tr>
<tr>
<td class="ts">10</td>
<td>void print(boolean b)</a>
<p>This method prints a boolean value.</p></td>
</tr>
<tr>
<td class="ts">11</td>
<td>void print(char c)</a>
<p>This method prints a character.</p></td>
</tr>
<tr>
<td class="ts">12</td>
<td>void print(char[] s)</a>
<p>This method Prints an array of characters.</p></td>
</tr>
<tr>
<td class="ts">13</td>
<td>void print(double d)</a>
<p>This method Prints a double-precision floating-point number.</p></td>
</tr>
<tr>
<td class="ts">14</td>
<td>void print(float f)</a>
<p>This method prints a floating-point number.</p></td>
</tr>
<tr>
<td class="ts">15</td>
<td>void print(int i)</a>
<p>This method prints an integer.</p></td>
</tr>
<tr>
<td class="ts">16</td>
<td>void print(long l)</a>
<p>This method prints a long integer.</p></td>
</tr>
<tr>
<td class="ts">17</td>
<td>void print(Object obj)</a>
<p>This method prints an object.</p></td>
</tr>
<tr>
<td class="ts">18</td>
<td>void print(String s)</a>
<p>This method prints a string.</p></td>
</tr>
<tr>
<td class="ts">19</td>
<td>PrintWriter printf(Locale l, String format, Object... args)</a>
<p>This is a convenience method to write a formatted string to this writer using the specified format string and arguments.</p></td>
</tr>
<tr>
<td class="ts">20</td>
<td>PrintWriter printf(String format, Object... args)</a>
<p>This is a convenience method to write a formatted string to this writer using the specified format string and arguments.</p></td>
</tr>
<tr>
<td class="ts">21</td>
<td>void println()</a>
<p>This method terminates the current line by writing the line separator string.</p></td>
</tr>
<tr>
<td class="ts">22</td>
<td>void println(boolean x)</a>
<p>This method prints a boolean value and then terminates the line.</p></td>
</tr>
<tr>
<td class="ts">23</td>
<td>void println(char x)</a>
<p>This method prints a character and then terminates the line.</p></td>
</tr>
<tr>
<td class="ts">24</td>
<td>void println(char[] x)</a>
<p>This method prints an array of characters and then terminates the line.</p></td>
</tr>
<tr>
<td class="ts">25</td>
<td>void println(double x)</a>
<p>This method prints a double-precision floating-point number and then terminates the line.</p></td>
</tr>
<tr>
<td class="ts">26</td>
<td>void println(float x)</a>
<p>This method prints a floating-point number and then terminates the line.</p></td>
</tr>
<tr>
<td class="ts">27</td>
<td>>void println(int x)</a>
<p>This method prints an integer and then terminates the line.</p></td>
</tr>
<tr>
<td class="ts">28</td>
<td>void println(long x)</a>
<p>This method prints a long integer and then terminates the line.</p></td>
</tr>
<tr>
<td class="ts">29</td>
<td>void println(Object x)</a>
<p>This method prints an Object and then terminates the line.</p></td>
</tr>
<tr>
<td class="ts">30</td>
<td>void println(String x)</a>
<p>This method prints a String and then terminates the line.</p></td>
</tr>
<tr>
<td class="ts">31</td>
<td>protected void setError()</a>
<p>This method indicates that an error has occurred.</p></td>
</tr>
<tr>
<td class="ts">32</td>
<td>void write(char[] buf)</a>
<p>This method writes an array of characters.</p></td>
</tr>
<tr>
<td class="ts">33</td>
<td>void write(char[] buf, int off, int len)</a>
<p>This method writes a portion of an array of characters.</p></td>
</tr>
<tr>
<td class="ts">34</td>
<td>void write(int c)</a>
<p>This methodWrites a single character.</p></td>
</tr>
<tr>
<td class="ts">35</td>
<td>void write(String s)</a>
<p>This method writes a string.</p></td>
</tr>
<tr>
<td class="ts">36</td>
<td>void write(String s, int off, int len)</a>
<p>This method writes a portion of a string.</p></td>
</tr>
</tbody></table>
<h4>Methods inherited</h4>
<p>This class inherits methods from the following classes −</p>
<ul class="list">
<li>Java.io.Object</li>
</ul>

<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="477_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="479_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'java_header.php'; ?></aside>
 
  
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