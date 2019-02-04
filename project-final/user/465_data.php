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
	$sid=465;
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
<p>The <b>Java.io.ObjectInputStream</b> class deserializes primitive data and objects previously written using an ObjectOutputStream. Following are the important points about BufferedInputStream −</p>
<ul class="list">
<li><p>It is used to recover those objects previously serialized. It ensures that the types of all objects in the graph created from the stream match the classes present in the Java Virtual Machine.</p></li>
<li><p>Classes are loaded as required using the standard mechanisms.</p></li>
</ul>
<h4>Class declaration</h4>
<p>Following is the declaration for <b>Java.io.ObjectInputStream</b> class −</p>
<pre class="result notranslate">public class ObjectInputStream
   extends InputStream
      implements ObjectInput, ObjectStreamConstants
</pre>
<h4>Class constructors</h4>

<table class="table table-bordered">
<tbody><tr>
<th style="text-align:center;">S.N.</th>
<th style="text-align:center;">Constructor &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td><p><b>protected ObjectInputStream()</b></p>
<p>This provide a way for subclasses that are completely reimplementing ObjectInputStream to not have to allocate private data just used by this implementation of ObjectInputStream.</p></td>
</tr>
<tr>
<td class="ts">2</td>
<td><p><b>ObjectInputStream(InputStream in)</b></p>
<p>This creates an ObjectInputStream that reads from the specified InputStream.</p></td>
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
<td>int available()</a>
<p>This method returns the number of bytes that can be read without blocking.</p></td>
</tr>
<tr>
<td class="ts">2</td>
<td>void close()</a>
<p>This method closes the input stream.</p></td>
</tr>
<tr>
<td class="ts">3</td>
<td>void defaultReadObject()</a>
<p>This method reads the non-static and non-transient fields of the current class from this stream.</p></td>
</tr>
<tr>
<td class="ts">4</td>
<td>protected boolean enableResolveObject(boolean enable)</a>
<p>This method enables the stream to allow objects read from the stream to be replaced.</p></td>
</tr>
<tr>
<td class="ts">5</td>
<td>int read()</a>
<p>This method reads a byte of data.</p></td>
</tr>
<tr>
<td class="ts">6</td>
<td>int read(byte[] buf, int off, int len)</a>
<p>This method reads into an array of bytes.</p></td>
</tr>
<tr>
<td class="ts">7</td>
<td>boolean readBoolean()</a>
<p>This method reads in a boolean.</p></td>
</tr>
<tr>
<td class="ts">8</td>
<td>byte readByte()</a>
<p>This method reads an 8 bit byte.</p></td>
</tr>
<tr>
<td class="ts">9</td>
<td>char readChar()</a>
<p>This method r a 16 bit char.</p></td>
</tr>
<tr>
<td class="ts">10</td>
<td>protected  ObjectStreamClass readClassDescriptor()</a>
<p>This method read a class descriptor from the serialization stream.</p></td>
</tr>
<tr>
<td class="ts">11</td>
<td>double readDouble()</a>
<p>This method reads a 64 bit double.</p></td>
</tr>
<tr>
<td class="ts">12</td>
<td>ObjectInputStream.GetField readFields()</a>
<p>This method reads the persistent fields from the stream and makes them available by name.</p></td>
</tr>
<tr>
<td class="ts">13</td>
<td>float readFloat()</a>
<p>This method reads a 32 bit float.</p></td>
</tr>
<tr>
<td class="ts">14</td>
<td>void readFully(byte[] buf)</a>
<p>This method reads bytes, blocking until all bytes are read.</p></td>
</tr>
<tr>
<td class="ts">15</td>
<td>void readFully(byte[] buf, int off, int len)</a>
<p>This method reads bytes, blocking until all bytes are read.</p></td>
</tr>
<tr>
<td class="ts">16</td>
<td>int readInt()</a>
<p>This method reads a 32 bit int.</p></td>
</tr>
<tr>
<td class="ts">17</td>
<td>long readLong()</a>
<p>This method reads a 64 bit long.</p></td>
</tr>
<tr>
<td class="ts">18</td>
<td>Object readObject()</a>
<p>This method reads an object from the ObjectInputStream.</p></td>
</tr>
<tr>
<td class="ts">19</td>
<td>protected Object readObjectOverride()</a>
<p>This method is called by trusted subclasses of ObjectOutputStream that constructed ObjectOutputStream using the protected no-arg constructor.</p></td>
</tr>
<tr>
<td class="ts">20</td>
<td>short readShort()</a>
<p>This method reads a 16 bit short.</p></td>
</tr>
<tr>
<td class="ts">21</td>
<td>protected void 	readStreamHeader()</a>
<p>This method is provided to allow subclasses to read and verify their own stream headers.</p></td>
</tr>
<tr>
<td class="ts">22</td>
<td>Object readUnshared()</a>
<p>This method reads an "unshared" object from the ObjectInputStream.</p></td>
</tr>
<tr>
<td class="ts">23</td>
<td>int readUnsignedByte()</a>
<p>This method reads an unsigned 8 bit byte.</p></td>
</tr>
<tr>
<td class="ts">24</td>
<td>int readUnsignedShort() </a>
<p>This method reads an unsigned 16 bit short.</p></td>
</tr>
<tr>
<td class="ts">25</td>
<td>String readUTF()</a>
<p>This method reads a String in modified UTF-8 format.</p></td>
</tr>
<tr>
<td class="ts">26</td>
<td>void 	registerValidation(ObjectInputValidation obj, int prio)</a>
<p>This method register an object to be validated before the graph is returned.</p></td>
</tr>
<tr>
<td class="ts">27</td>
<td>protected Class&lt;?&gt; 	resolveClass(ObjectStreamClass desc)</a>
<p>This method loads the local class equivalent of the specified stream class description.</p></td>
</tr>
<tr>
<td class="ts">28</td>
<td>protected Object resolveObject(Object obj)</a>
<p>This method will allow trusted subclasses of ObjectInputStream to substitute one object for another during deserialization.</p></td>
</tr>
<tr>
<td class="ts">29</td>
<td>protected Class&lt;?&gt; resolveProxyClass(String[] interfaces)</a>
<p>This method returns a proxy class that implements the interfaces named in a proxy class descriptor; subclasses may implement this method to read custom data from the stream along with the descriptors for dynamic proxy classes, allowing them to use an alternate loading mechanism for the interfaces and the proxy class.</p></td>
</tr>
<tr>
<td class="ts">30</td>
<td>int skipBytes(int len)</a>
<p>This method skips bytes.</p></td>
</tr>
</tbody></table>
<h4>Methods inherited</h4>
<p>This class inherits methods from the following classes −</p>
<ul class="list">
<li>Java.io.InputStream</li>
<li>Java.io.Object</li>
<li>Java.io.ObjectInput</li>
</ul>

<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="464_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="466_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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