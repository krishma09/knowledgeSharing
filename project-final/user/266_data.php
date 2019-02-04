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
	$sid=266;
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

<h4>What are Streams?</h4>
<p>Streams are objects that let you read data from a source or write data to a destination in continuous fashion. In Node.js, there are four types of streams −</p>

<ul class="list">
<li><p><b>Readable</b> − Stream which is used for read operation.</p></li>
<li><p><b>Writable</b> − Stream which is used for write operation.</p></li>
<li><p><b>Duplex</b> − Stream which can be used for both read and write operation.</p></li>
<li><p><b>Transform</b> − A type of duplex stream where the output is computed based on input.</p></li>
</ul>
<p>Each type of Stream is an <b>EventEmitter</b> instance and throws several events at different instance of times. For example, some of the commonly used events are −</p>
<ul class="list">
<li><p><b>data</b> − This event is fired when there is data is available to read.</p></li>
<li><p><b>end</b> − This event is fired when there is no more data to read.</p></li>
<li><p><b>error</b> − This event is fired when there is any error receiving or writing data.</p></li>
<li><p><b>finish</b> − This event is fired when all the data has been flushed to underlying system.</p></li>
</ul>
<p>This tutorial provides a basic understanding of the commonly used operations on Streams.</p>
<h4>Reading from a Stream</h4>
<p>Create a text file named input.txt having the following content −</p>
<pre class="result notranslate">Tutorials Point is giving self learning content
to teach the world in simple and easy way!!!!!
</pre>
<p>Create a js file named main.js with the following code −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> fs </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">"fs"</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> data </span><span class="pun">=</span><span class="pln"> </span><span class="str">''</span><span class="pun">;</span><span class="pln">

</span><span class="com">// Create a readable stream</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> readerStream </span><span class="pun">=</span><span class="pln"> fs</span><span class="pun">.</span><span class="pln">createReadStream</span><span class="pun">(</span><span class="str">'input.txt'</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Set the encoding to be utf8. </span><span class="pln">
readerStream</span><span class="pun">.</span><span class="pln">setEncoding</span><span class="pun">(</span><span class="str">'UTF8'</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Handle stream events --&gt; data, end, and error</span><span class="pln">
readerStream</span><span class="pun">.</span><span class="pln">on</span><span class="pun">(</span><span class="str">'data'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">chunk</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   data </span><span class="pun">+=</span><span class="pln"> chunk</span><span class="pun">;</span><span class="pln">
</span><span class="pun">});</span><span class="pln">

readerStream</span><span class="pun">.</span><span class="pln">on</span><span class="pun">(</span><span class="str">'end'</span><span class="pun">,</span><span class="kwd">function</span><span class="pun">(){</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">data</span><span class="pun">);</span><span class="pln">
</span><span class="pun">});</span><span class="pln">

readerStream</span><span class="pun">.</span><span class="pln">on</span><span class="pun">(</span><span class="str">'error'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">err</span><span class="pun">){</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">err</span><span class="pun">.</span><span class="pln">stack</span><span class="pun">);</span><span class="pln">
</span><span class="pun">});</span><span class="pln">

console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Program Ended"</span><span class="pun">);</span></pre>
<p>Now run the main.js to see the result −</p>
<pre class="result notranslate">$ node main.js
</pre>
<p>Verify the Output.</p>
<pre class="result notranslate">Program Ended
Tutorials Point is giving self learning content
to teach the world in simple and easy way!!!!!
</pre>
<h4>Writing to a Stream</h4>
<p>Create a js file named main.js with the following code −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> fs </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">"fs"</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> data </span><span class="pun">=</span><span class="pln"> </span><span class="str">'Simply Easy Learning'</span><span class="pun">;</span><span class="pln">

</span><span class="com">// Create a writable stream</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> writerStream </span><span class="pun">=</span><span class="pln"> fs</span><span class="pun">.</span><span class="pln">createWriteStream</span><span class="pun">(</span><span class="str">'output.txt'</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Write the data to stream with encoding to be utf8</span><span class="pln">
writerStream</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln">data</span><span class="pun">,</span><span class="str">'UTF8'</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Mark the end of file</span><span class="pln">
writerStream</span><span class="pun">.</span><span class="kwd">end</span><span class="pun">();</span><span class="pln">

</span><span class="com">// Handle stream events --&gt; finish, and error</span><span class="pln">
writerStream</span><span class="pun">.</span><span class="pln">on</span><span class="pun">(</span><span class="str">'finish'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
    console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Write completed."</span><span class="pun">);</span><span class="pln">
</span><span class="pun">});</span><span class="pln">

writerStream</span><span class="pun">.</span><span class="pln">on</span><span class="pun">(</span><span class="str">'error'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">err</span><span class="pun">){</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">err</span><span class="pun">.</span><span class="pln">stack</span><span class="pun">);</span><span class="pln">
</span><span class="pun">});</span><span class="pln">

console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Program Ended"</span><span class="pun">);</span></pre>	
<p>Now run the main.js to see the result −</p>
<pre class="result notranslate">$ node main.js
</pre>
<p>Verify the Output.</p>
<pre class="result notranslate">Program Ended
Write completed.
</pre>
<p>Now open output.txt created in your current directory; it should contain the following −</p>
<pre class="result notranslate">Simply Easy Learning
</pre>
<h4>Piping the Streams</h4>
<p>Piping is a mechanism where we provide the output of one stream as the input to another stream. It is normally used to get data from one stream and to pass the output of that stream to another stream. There is no limit on piping operations. Now we'll show a piping example for reading from one file and writing it to another file.</p>
<p>Create a js file named main.js with the following code −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> fs </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">"fs"</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Create a readable stream</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> readerStream </span><span class="pun">=</span><span class="pln"> fs</span><span class="pun">.</span><span class="pln">createReadStream</span><span class="pun">(</span><span class="str">'input.txt'</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Create a writable stream</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> writerStream </span><span class="pun">=</span><span class="pln"> fs</span><span class="pun">.</span><span class="pln">createWriteStream</span><span class="pun">(</span><span class="str">'output.txt'</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Pipe the read and write operations</span><span class="pln">
</span><span class="com">// read input.txt and write data to output.txt</span><span class="pln">
readerStream</span><span class="pun">.</span><span class="pln">pipe</span><span class="pun">(</span><span class="pln">writerStream</span><span class="pun">);</span><span class="pln">

console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Program Ended"</span><span class="pun">);</span></pre>
<p>Now run the main.js to see the result −</p>

<pre class="result notranslate">$ node main.js
</pre>
<p>Verify the Output.</p>
<pre class="result notranslate">Program Ended
</pre>
<p>Open output.txt created in your current directory; it should contain the following −</p>

<pre class="result notranslate">Tutorials Point is giving self learning content
to teach the world in simple and easy way!!!!!
</pre>
<h4>Chaining the Streams</h4>
<p>Chaining is a mechanism to connect the output of one stream to another stream and create a chain of multiple stream operations. It is normally used with piping operations. Now we'll use piping and chaining to first compress a file and then decompress the same.</p>
<p>Create a js file named main.js with the following code −</p><pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> fs </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">"fs"</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> zlib </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'zlib'</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Compress the file input.txt to input.txt.gz</span><span class="pln">
fs</span><span class="pun">.</span><span class="pln">createReadStream</span><span class="pun">(</span><span class="str">'input.txt'</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">.</span><span class="pln">pipe</span><span class="pun">(</span><span class="pln">zlib</span><span class="pun">.</span><span class="pln">createGzip</span><span class="pun">())</span><span class="pln">
   </span><span class="pun">.</span><span class="pln">pipe</span><span class="pun">(</span><span class="pln">fs</span><span class="pun">.</span><span class="pln">createWriteStream</span><span class="pun">(</span><span class="str">'input.txt.gz'</span><span class="pun">));</span><span class="pln">
  
console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"File Compressed."</span><span class="pun">);</span></pre>
<p>Now run the main.js to see the result −</p>
<pre class="result notranslate">$ node main.js
</pre>
<p>Verify the Output.</p>
<pre class="result notranslate">File Compressed.
</pre>
<p>You will find that input.txt has been compressed and it created a file input.txt.gz in the current directory. Now let's try to decompress the same file using the following code −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> fs </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">"fs"</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> zlib </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">'zlib'</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Decompress the file input.txt.gz to input.txt</span><span class="pln">
fs</span><span class="pun">.</span><span class="pln">createReadStream</span><span class="pun">(</span><span class="str">'input.txt.gz'</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">.</span><span class="pln">pipe</span><span class="pun">(</span><span class="pln">zlib</span><span class="pun">.</span><span class="pln">createGunzip</span><span class="pun">())</span><span class="pln">
   </span><span class="pun">.</span><span class="pln">pipe</span><span class="pun">(</span><span class="pln">fs</span><span class="pun">.</span><span class="pln">createWriteStream</span><span class="pun">(</span><span class="str">'input.txt'</span><span class="pun">));</span><span class="pln">
  
console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"File Decompressed."</span><span class="pun">);</span></pre>
<p>Now run the main.js to see the result −</p>
<pre class="result notranslate">$ node main.js
</pre>
<p>Verify the Output.</p>
<pre class="result notranslate">File Decompressed.
</pre>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="265_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="267_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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