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
	$sid=262;
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

<p>Callback is an asynchronous equivalent for a function. A callback function is called at the completion of a given task. Node makes heavy use of callbacks. All the APIs of Node are written in such a way that they support callbacks.</p>
<p>For example, a function to read a file may start reading file and return the control to the execution environment immediately so that the next instruction can be executed. Once file I/O is complete, it will call the callback function while passing the callback function, the content of the file as a parameter. So there is no blocking or wait for File I/O. This makes Node.js highly scalable, as it can process a high number of requests without waiting for any function to return results.</p>
<h5>Blocking Code Example</h5>
<p>Create a text file named <b>input.txt</b> with the following content −</p>
<pre class="result notranslate">Tutorials Point is giving self learning content
to teach the world in simple and easy way!!!!!
</pre>
<p>Create a js file named <b>main.js</b> with the following code −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> fs </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">"fs"</span><span class="pun">);</span><span class="pln">

</span><span class="kwd">var</span><span class="pln"> data </span><span class="pun">=</span><span class="pln"> fs</span><span class="pun">.</span><span class="pln">readFileSync</span><span class="pun">(</span><span class="str">'input.txt'</span><span class="pun">);</span><span class="pln">

console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">data</span><span class="pun">.</span><span class="pln">toString</span><span class="pun">());</span><span class="pln">
console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="str">"Program Ended"</span><span class="pun">);</span></pre>
<p>Now run the main.js to see the result −</p>

<pre class="result notranslate">$ node main.js
</pre>
<p>Verify the Output.</p>
<pre class="result notranslate">Tutorials Point is giving self learning content
to teach the world in simple and easy way!!!!!
Program Ended
</pre>
<h5>Non-Blocking Code Example</h5>
<p>Create a text file named input.txt with the following content.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Tutorials</span><span class="pln"> </span><span class="typ">Point</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> giving </span><span class="kwd">self</span><span class="pln"> learning content
to teach the world </span><span class="kwd">in</span><span class="pln"> simple </span><span class="kwd">and</span><span class="pln"> easy way</span><span class="pun">!!!!!</span></pre>
<p>Update main.js to have the following code −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> fs </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">require</span><span class="pun">(</span><span class="str">"fs"</span><span class="pun">);</span><span class="pln">

fs</span><span class="pun">.</span><span class="pln">readFile</span><span class="pun">(</span><span class="str">'input.txt'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">err</span><span class="pun">,</span><span class="pln"> data</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">err</span><span class="pun">)</span><span class="pln"> </span><span class="kwd">return</span><span class="pln"> console</span><span class="pun">.</span><span class="pln">error</span><span class="pun">(</span><span class="pln">err</span><span class="pun">);</span><span class="pln">
   console</span><span class="pun">.</span><span class="pln">log</span><span class="pun">(</span><span class="pln">data</span><span class="pun">.</span><span class="pln">toString</span><span class="pun">());</span><span class="pln">
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
<p>These two examples explain the concept of blocking and non-blocking calls.</p>
<ul class="list"> 
<li><p>The first example shows that the program blocks until it reads the file and then only it proceeds to end the program.</p></li>
<li><p>The second example shows that the program does not wait for file reading and proceeds to print "Program Ended" and at the same time, the program without blocking continues reading the file.</p></li>
</ul>
<p>Thus, a blocking program executes very much in sequence. From the programming point of view, it is easier to implement the logic but non-blocking programs do not execute in sequence. In case a program needs to use any data to be processed, it should be kept within the same block to make it sequential execution.</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="261_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="263_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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