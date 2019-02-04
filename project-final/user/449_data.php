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
	$sid=449;
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
<p>The <b>Java.io.DataOutputStream</b> class lets an application write primitive Java data types to an output stream in a portable way. An application can then use a data input stream to read the data back in.</p>
<h4>Class declaration</h4>
<p>Following is the declaration for <b>Java.io.DataOutputStream</b> class −</p>
<pre class="result notranslate">public class DataOutputStream
   extends FilterOutputStream
      implements DataOutput
</pre>
<h4>Field</h4>
<p>Following are the fields for <b>Java.io.DataOutputStream</b> class −</p>
<ul class="list">
<li><p><b>protected int written</b> − This is the number of bytes written to the data output stream so far.</p></li>
<li><p><b>protected OutputStream out</b> − This is the underlying output stream to be filtered.</p></li>
</ul>
<h4>Class constructors</h4>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.N.</th>
<th style="text-align:center;">Constructor &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td><p><b>DataOutputStream(OutputStream out)</b></p>
<p>This creates a new data output stream to write data to the specified underlying output stream.</p></td>
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
<td>void flush()</a>
<p>This method flushes this data output stream.</p></td>
</tr>
<tr>
<td class="ts">2</td>
<td>int size()</a>
<p>This method returns the current value of the counter written, the number of bytes written to this data output stream so far.</p></td>
</tr>
<tr>
<td class="ts">3</td>
<td>void write(byte[] b, int off, int len)</a>
<p>This method writes len bytes from the specified byte array starting at offset off to the underlying output stream.</p></td>
</tr>
<tr>
<td class="ts">4</td>
<td>void write(int b)</a>
<p>This method writes the specified byte (the low eight bits of the argument b) to the underlying output stream.</p></td>
</tr>
<tr>
<td class="ts">5</td>
<td>void writeBoolean(boolean v)</a>
<p>This method writes a boolean to the underlying output stream as a 1-byte value.</p></td>
</tr>
<tr>
<td class="ts">6</td>
<td>void writeByte(int v)</a>
<p>This method writes out a byte to the underlying output stream as a 1-byte value.</p></td>
</tr>
<tr>
<td class="ts">7</td>
<td>void writeBytes(String s)</a>
<p>This method writes out the string to the underlying output stream as a sequence of bytes.</p></td>
</tr>
<tr>
<td class="ts">8</td>
<td>void writeChar(int v)</a>
<p>This method writes a char to the underlying output stream as a 2-byte value, high byte first.</p></td>
</tr>
<tr>
<td class="ts">9</td>
<td>void writeChars(String s)</a>
<p>This method writes a string to the underlying output stream as a sequence of characters.</p></td>
</tr>
<tr>
<td class="ts">10</td>
<td>void writeDouble(double v)</a>
<p>This method converts the double argument to a long using the doubleToLongBits method in class Double, and then writes that long value to the underlying output stream as an 8-byte quantity, high byte first.</p></td>
</tr>
<tr>
<td class="ts">11</td>
<td>void writeFloat(float v)</a>
<p>This method converts the float argument to an int using the floatToIntBits method in class Float, and then writes that int value to the underlying output stream as a 4-byte quantity, high byte first.</p></td>
</tr>
<tr>
<td class="ts">12</td>
<td>void writeInt(int v)</a>
<p>This method writes an int to the underlying output stream as four bytes, high byte first.</p></td>
</tr>
<tr>
<td class="ts">13</td>
<td>void writeLong(long v)</a>
<p>This method writes a long to the underlying output stream as eight bytes, high byte first.</p></td>
</tr>
<tr>
<td class="ts">14</td>
<td>void writeShort(int v)</a>
<p>This method writes a short to the underlying output stream as two bytes, high byte first.</p></td>
</tr>
<tr>
<td class="ts">15</td>
<td>void writeUTF(String str)</a>
<p>This method writes a string to the underlying output stream using modified UTF-8 encoding in a machine-independent manner.</p></td>
</tr>
</tbody></table>
<h4>Methods inherited</h4>
<p>This class inherits methods from the following classes −</p>
<ul class="list">
<li>Java.io.FilterOutputStream</li>
<li>Java.io.Object</li>
<li>Java.io.DataOutput</li>
</ul>

<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="448_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="450_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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