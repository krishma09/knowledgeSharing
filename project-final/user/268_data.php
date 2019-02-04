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
	$sid=268;
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
<p>Node.js global objects are global in nature and they are available in all modules. We do not need to include these objects in our application, rather we can use them directly. These objects are modules, functions, strings and object itself as explained below.</p>
<h4>__filename</h4>
<p>The <b>__filename</b> represents the filename of the code being executed. This is the resolved absolute path of this code file. For a main program, this is not necessarily the same filename used in the command line. The value inside a module is the path to that module file.</p>
<h5>Example</h5>
<p>Create a js file named main.js with the following code −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">// Let's try to print the value of __filename</span><span class="pln">

console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln"> __filename </span><span class="pun">);</span></pre>
<p>Now run the main.js to see the result −</p>
<pre class="result notranslate">$ node main.js
</pre>
<p>Based on the location of your program, it will print the main file name as follows −</p>
<pre class="result notranslate">/web/com/1427091028_21099/main.js
</pre>
<h4>__dirname</h4>
<p>The <b>__dirname</b> represents the name of the directory that the currently executing script resides in.</p>
<h5>Example</h5>
<p>Create a js file named main.js with the following code −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">// Let's try to print the value of __dirname</span><span class="pln">

console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln"> __dirname </span><span class="pun">);</span></pre>
<p>Now run the main.js to see the result −</p>
<pre class="result notranslate">$ node main.js
</pre>
<p>Based on the location of your program, it will print current directory name as follows −</p>
<pre class="result notranslate">/web/com/1427091028_21099
</pre>
<h4>setTimeout(cb, ms)</h4>
<p>The <b>setTimeout(cb, ms)</b> global function is used to run callback cb after at least ms milliseconds. The actual delay depends on external factors like OS timer granularity and system load. A timer cannot span more than 24.8 days.</p>
<p>This function returns an opaque value that represents the timer which can be used to clear the timer.</p>
<h5>Example</h5>
<p>Create a js file named main.js with the following code −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="kwd">function</span><span class="pln"> printHello</span><span class="pun">(){</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Hello, World!"</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="com">// Now call above function after 2 seconds</span><span class="pln">
setTimeout</span><span class="pun">(</span><span class="pln">printHello</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2000</span><span class="pun">);</span></pre>
<p>Now run the main.js to see the result −</p>
<pre class="result notranslate">$ node main.js
</pre>
<p>Verify the output is printed after a little delay.</p>
<pre class="result notranslate">Hello, World!
</pre>
<h4>clearTimeout(t)</h4>
<p>The <b>clearTimeout(t)</b> global function is used to stop a timer that was previously created with setTimeout(). Here <b>t</b> is the timer returned by the setTimeout() function.</p>
<h5>Example</h5>
<p>Create a js file named main.js with the following code −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="kwd">function</span><span class="pln"> printHello</span><span class="pun">(){</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Hello, World!"</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="com">// Now call above function after 2 seconds</span><span class="pln">
</span><span class="kwd">var</span><span class="pln"> t </span><span class="pun">=</span><span class="pln"> setTimeout</span><span class="pun">(</span><span class="pln">printHello</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2000</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Now clear the timer</span><span class="pln">
clearTimeout</span><span class="pun">(</span><span class="pln">t</span><span class="pun">);</span></pre>
<p>Now run the main.js to see the result −</p>
<pre class="result notranslate">$ node main.js
</pre>
<p>Verify the output where you will not find anything printed.</p>
<h4>setInterval(cb, ms)</h4>
<p>The <b>setInterval(cb, ms)</b> global function is used to run callback cb repeatedly after at least ms milliseconds. The actual delay depends on external factors like OS timer granularity and system load. A timer cannot span more than 24.8 days.</p>
<h5>Example</h5>
<p>Create a js file named main.js with the following code −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="kwd">function</span><span class="pln"> printHello</span><span class="pun">(){</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Hello, World!"</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="com">// Now call above function after 2 seconds</span><span class="pln">
setInterval</span><span class="pun">(</span><span class="pln">printHello</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2000</span><span class="pun">);</span></pre>
<p>Now run the main.js to see the result −</p>
<pre class="result notranslate">$ node main.js
</pre>
<p>The above program will execute printHello() after every 2 second. Due to system limitation, this program can not be executed with Try it option so you can check it in your machine locally.</p>
<h4>Global Objects</h4>
<p>The following table provides a list of other objects which we use frequently in our applications. For a more detail, you can refer to the official documentation.</p>
<table class="table table-bordered">
<tbody><tr>
<th style="text-align:enter">S.No.</th>
<th style="text-align:enter">Module Name &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><b>Console</b></a>
<p> Used to print information on stdout and stderr.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><b>Process</b></a>
<p>Used to get information on current process. Provides multiple events related to process activities.</p>
</td>
</tr>
</tbody></table>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="267_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="269_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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