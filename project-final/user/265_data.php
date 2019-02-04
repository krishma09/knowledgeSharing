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
<title>NODE.JS Tutorials | knowledge.com</title>
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
	$sid=265;
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

<p>Pure JavaScript is Unicode friendly, but it is not so for binary data. While dealing with TCP streams or the file system, it's necessary to handle octet streams. Node provides Buffer class which provides instances to store raw data similar to an array of integers but corresponds to a raw memory allocation outside the V8 heap.</p>
<p>Buffer class is a global class that can be accessed in an application without importing the buffer module.</p>
<h4>Creating Buffers</h4>
<p>Node Buffer can be constructed in a variety of ways.</p>
<h5>Method 1</h5>
<p>Following is the syntax to create an uninitiated Buffer of <b>10</b> octets −</p>
<pre class="result notranslate">var buf = new Buffer(10);
</pre>
<h5>Method 2</h5>
<p>Following is the syntax to create a Buffer from a given array −</p>
<pre class="result notranslate">var buf = new Buffer([10, 20, 30, 40, 50]);
</pre>
<h5>Method 3</h5>
<p>Following is the syntax to create a Buffer from a given string and optionally encoding type −</p>
<pre class="result notranslate">var buf = new Buffer("Simply Easy Learning", "utf-8");
</pre>
<p>Though "utf8" is the default encoding, you can use any of the following encodings "ascii", "utf8", "utf16le", "ucs2", "base64" or "hex".</p>
<h4>Writing to Buffers</h4>
<h5>Syntax</h5>
<p>Following is the syntax of the method to write into a Node Buffer −</p>
<pre class="result notranslate">buf.write(string[, offset][, length][, encoding])
</pre>
<h5>Parameters</h5>
<p>Here is the description of the parameters used −</p>
<ul class="list">
<li><p><b>string</b> − This is the string data to be written to buffer.</p></li>
<li><p><b>offset</b> − This is the index of the buffer to start writing at. Default value is 0.</p></li>
<li><p><b>length</b> − This is the number of bytes to write. Defaults to buffer.length.</p></li>
<li><p><b>encoding</b> − Encoding to use. 'utf8' is the default encoding.</p></li>
</ul>
<h5>Return Value</h5>
<p>This method returns the number of octets written. If there is not enough space in the buffer to fit the entire string, it will write a part of the string.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="pln">buf </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Buffer</span><span class="pun">(</span><span class="lit">256</span><span class="pun">);</span><span class="pln">
len </span><span class="pun">=</span><span class="pln"> buf</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Simply Easy Learning"</span><span class="pun">);</span><span class="pln">

console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Octets written : "</span><span class="pun">+</span><span class="pln">  len</span><span class="pun">);</span></pre>
<p>When the above program is executed, it produces the following result −</p>
<pre class="result notranslate">Octets written : 20
</pre>
<h4>Reading from Buffers</h4>
<h5>Syntax</h5>
<p>Following is the syntax of the method to read data from a Node Buffer −</p>
<pre class="result notranslate">buf.toString([encoding][, start][, end])
</pre>
<h5>Parameters</h5>
<p>Here is the description of the parameters used −</p>
<ul class="list">
<li><p><b>encoding</b> − Encoding to use. 'utf8' is the default encoding.</p></li>
<li><p><b>start</b> − Beginning index to start reading, defaults to 0.</p></li>
<li><p><b>end</b> − End index to end reading, defaults is complete buffer.</p></li>
</ul>
<h5>Return Value</h5>
<p>This method decodes and returns a string from buffer data encoded using the specified character set encoding.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="pln">buf </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Buffer</span><span class="pun">(</span><span class="lit">26</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">var</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pln"> </span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">26</span><span class="pln"> </span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
  buf</span><span class="pun">[</span><span class="pln">i</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> i </span><span class="pun">+</span><span class="pln"> </span><span class="lit">97</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln"> buf</span><span class="pun">.</span><span class="pln">toString</span><span class="pun">(</span><span class="str">'ascii'</span><span class="pun">));</span><span class="pln">       </span><span class="com">// outputs: abcdefghijklmnopqrstuvwxyz</span><span class="pln">
console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln"> buf</span><span class="pun">.</span><span class="pln">toString</span><span class="pun">(</span><span class="str">'ascii'</span><span class="pun">,</span><span class="lit">0</span><span class="pun">,</span><span class="lit">5</span><span class="pun">));</span><span class="pln">   </span><span class="com">// outputs: abcde</span><span class="pln">
console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln"> buf</span><span class="pun">.</span><span class="pln">toString</span><span class="pun">(</span><span class="str">'utf8'</span><span class="pun">,</span><span class="lit">0</span><span class="pun">,</span><span class="lit">5</span><span class="pun">));</span><span class="pln">    </span><span class="com">// outputs: abcde</span><span class="pln">
console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln"> buf</span><span class="pun">.</span><span class="pln">toString</span><span class="pun">(</span><span class="kwd">undefined</span><span class="pun">,</span><span class="lit">0</span><span class="pun">,</span><span class="lit">5</span><span class="pun">));</span><span class="pln"> </span><span class="com">// encoding defaults to 'utf8', outputs abcde</span></pre>
<p>When the above program is executed, it produces the following result −</p>
<pre class="result notranslate">abcdefghijklmnopqrstuvwxyz
abcde
abcde
abcde
</pre>
<h4>Convert Buffer to JSON</h4>
<h5>Syntax</h5>
<p>Following is the syntax of the method to convert a Node Buffer into JSON object −</p>
<p>Following is the syntax of the method to convert a Node Buffer into JSON object −</p>
<pre class="result notranslate">buf.toJSON()
</pre>
<h5>Return Value</h5>
<p>This method returns a JSON-representation of the Buffer instance.</p>
<h5>Example</h5>

<pre class="prettyprint notranslate tryit prettyprinted"><span class="kwd">var</span><span class="pln"> buf </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Buffer</span><span class="pun">(</span><span class="str">'Simply Easy Learning'</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> json </span><span class="pun">=</span><span class="pln"> buf</span><span class="pun">.</span><span class="pln">toJSON</span><span class="pun">(</span><span class="pln">buf</span><span class="pun">);</span><span class="pln">

console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">json</span><span class="pun">);</span></pre>
<p>When the above program is executed, it produces the following result −</p>
<pre class="result notranslate">[ 83, 105, 109, 112, 108, 121, 32, 69, 97, 115, 121, 32, 76, 101, 97, 114, 110, 105, 110,
   103 ]
</pre>
<h4>Concatenate Buffers</h4>
<h5>Syntax</h5>
<p>Following is the syntax of the method to concatenate Node buffers to a single Node Buffer −</p>
<pre class="result notranslate">Buffer.concat(list[, totalLength])
</pre>
<h5>Parameters</h5>
<p>Here is the description of the parameters used −</p>
<ul class="list">
<li><p><b>list</b> − Array List of Buffer objects to be concatenated.</p></li>
<li><p><b>totalLength</b> − This is the total length of the buffers when concatenated.</p></li>
</ul>
<h5>Return Value</h5>
<p>This method returns a Buffer instance.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="kwd">var</span><span class="pln"> buffer1 </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Buffer</span><span class="pun">(</span><span class="str">'TutorialsPoint '</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> buffer2 </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Buffer</span><span class="pun">(</span><span class="str">'Simply Easy Learning'</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> buffer3 </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Buffer</span><span class="pun">.</span><span class="pln">concat</span><span class="pun">([</span><span class="pln">buffer1</span><span class="pun">,</span><span class="pln">buffer2</span><span class="pun">]);</span><span class="pln">
console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"buffer3 content: "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> buffer3</span><span class="pun">.</span><span class="pln">toString</span><span class="pun">());</span></pre>
<p>When the above program is executed, it produces the following result −</p>
<pre class="result notranslate">buffer3 content: TutorialsPoint Simply Easy Learning
</pre>
<h4>Compare Buffers</h4>
<h5>Syntax</h5>
<p>Following is the syntax of the method to compare two Node buffers −</p>
<pre class="result notranslate">buf.compare(otherBuffer);
</pre>
<h5>Parameters</h5>
<p>Here is the description of the parameters used −</p>
<ul class="list">
<li><p><b>otherBuffer</b> − This is the other buffer which will be compared with <b>buf</b></p></li>
</ul>
<h5>Return Value</h5>
<p>Returns a number indicating whether it comes before or after or is the same as the otherBuffer in sort order.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> buffer1 </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Buffer</span><span class="pun">(</span><span class="str">'ABC'</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> buffer2 </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Buffer</span><span class="pun">(</span><span class="str">'ABCD'</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> result </span><span class="pun">=</span><span class="pln"> buffer1</span><span class="pun">.</span><span class="pln">compare</span><span class="pun">(</span><span class="pln">buffer2</span><span class="pun">);</span><span class="pln">

</span><span class="kwd">if</span><span class="pun">(</span><span class="pln">result </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">0</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">buffer1 </span><span class="pun">+</span><span class="str">" comes before "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> buffer2</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="kwd">if</span><span class="pun">(</span><span class="pln">result </span><span class="pun">==</span><span class="pln"> </span><span class="lit">0</span><span class="pun">){</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">buffer1 </span><span class="pun">+</span><span class="str">" is same as "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> buffer2</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">buffer1 </span><span class="pun">+</span><span class="str">" comes after "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> buffer2</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above program is executed, it produces the following result −</p>
<pre class="result notranslate">ABC comes before ABCD
</pre>
<h4>Copy Buffer</h4>
<h5>Syntax</h5>
<p>Following is the syntax of the method to copy a node buffer −</p>
<pre class="result notranslate">buf.copy(targetBuffer[, targetStart][, sourceStart][, sourceEnd])
</pre>
<h5>Parameters</h5>
<p>Here is the description of the parameters used −</p>
<ul class="list">
<li><p><b>targetBuffer</b> − Buffer object where buffer will be copied.</p></li>
<li><p><b>targetStart</b> − Number, Optional, Default: 0</p></li>
<li><p><b>sourceStart</b> − Number, Optional, Default: 0</p></li>
<li><p><b>sourceEnd</b> − Number, Optional, Default: buffer.length</p></li>
</ul>

<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="kwd">var</span><span class="pln"> buffer1 </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Buffer</span><span class="pun">(</span><span class="str">'ABC'</span><span class="pun">);</span><span class="pln">

</span><span class="com">//copy a buffer</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> buffer2 </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Buffer</span><span class="pun">(</span><span class="lit">3</span><span class="pun">);</span><span class="pln">
buffer1</span><span class="pun">.</span><span class="pln">copy</span><span class="pun">(</span><span class="pln">buffer2</span><span class="pun">);</span><span class="pln">
console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"buffer2 content: "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> buffer2</span><span class="pun">.</span><span class="pln">toString</span><span class="pun">());</span></pre>
<p>When the above program is executed, it produces the following result −</p>
<pre class="result notranslate">buffer2 content: ABC
</pre>


<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="264_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="266_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'nodejs_header.php'; ?></aside>
 
  
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