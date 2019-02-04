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
	$sid=260;
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

<p>REPL stands for Read Eval Print Loop and it represents a computer environment like a Windows console or Unix/Linux shell where a command is entered and the system responds with an output in an interactive mode. Node.js or <b>Node</b> comes bundled with a REPL environment. It performs the following tasks −</p>
<ul class="list">
<li><p><b>Read</b> − Reads user's input, parses the input into JavaScript data-structure, and stores in memory.</p></li>
<li><p><b>Eval</b> − Takes and evaluates the data structure.</p></li>
<li><p><b>Print</b> − Prints the result.</p></li>
<li><p><b>Loop</b> − Loops the above command until the user presses <b>ctrl-c</b> twice.</p></li>
</ul>

<p>The REPL feature of Node is very useful in experimenting with Node.js codes and to debug JavaScript codes.</p>
<h4>Online REPL Terminal</h4>
<p>To simplify your learning, we have set up an easy to use Node.js REPL environment online, where you can practice Node.js syntax − <a href="/nodejs_terminal_online.php" target="_blank" title="Node.js Terminal Online" class="launcher">Launch Node.js REPL Terminal <i class="fa fa-send-o"></i></a></p>
<h4>Starting REPL</h4>
<p>REPL can be started by simply running node on shell/console without any arguments as follows.</p>
<pre class="result notranslate">$ node
</pre>
<p>You will see the REPL Command prompt &gt; where you can type any Node.js command −</p>
<pre class="result notranslate">$ node
&gt;
</pre>
<h5>Simple Expression</h5>
<p>Let's try a simple mathematics at the Node.js REPL command prompt −</p>
<pre class="result notranslate">$ node
&gt; 1 + 3
4
&gt; 1 + ( 2 * 3 ) - 4
3
&gt;
</pre>
<h5>Use Variables</h5>
<p>You can make use variables to store values and print later like any conventional script. If <b>var</b> keyword is not used, then the value is stored in the variable and printed. Whereas if <b>var</b> keyword is used, then the value is stored but not printed. You can print variables using <b>console.log()</b>.</p>
<pre class="result notranslate">$ node
&gt; x = 10
10
&gt; var y = 10
undefined
&gt; x + y
20
&gt; console.log("Hello World")
Hello Workd
undefined
</pre>
<h5>Multiline Expression</h5>
<p>Node REPL supports multiline expression similar to JavaScript. Let's check the following do-while loop in action −</p>
<pre class="result notranslate">$ node
&gt; var x = 0
undefined
&gt; do {
... x++;
... console.log("x: " + x);
... } while ( x &lt; 5 );
x: 1
x: 2
x: 3
x: 4
x: 5
undefined
&gt;
</pre>
<p><b>...</b> comes automatically when you press Enter after the opening bracket. Node automatically checks the continuity of expressions.</p>
<h5>Underscore Variable</h5>
<p>You can use underscore <b>(_)</b> to get the last result −</p>
<pre class="result notranslate">$ node
&gt; var x = 10
undefined
&gt; var y = 20
undefined
&gt; x + y
30
&gt; var sum = _
undefined
&gt; console.log(sum)
30
undefined
&gt;
</pre>
<h4>REPL Commands</h4>
<ul class="list">
<li><p><b>ctrl + c</b> − terminate the current command.</p></li>
<li><p><b>ctrl + c twice</b> − terminate the Node REPL.</p></li>
<li><p><b>ctrl + d</b> − terminate the Node REPL.</p></li>
<li><p><b>Up/Down Keys</b> − see command history and modify previous commands.</p></li>
<li><p><b>tab Keys</b> − list of current commands.</p></li>
<li><p><b>.help</b> − list of all commands.</p></li>
<li><p><b>.break</b> − exit from multiline expression.</p></li>
<li><p><b>.clear</b> − exit from multiline expression.</p></li>
<li><p><b>.save <i>filename</i></b> − save the current Node REPL session to a file.</p></li>
<li><p><b>.load <i>filename</i></b> − load file content in current Node REPL session.</p></li>
</ul>
<h4>Stopping REPL</h4>
<p>As mentioned above, you will need to use <b>ctrl-c twice</b> to come out of Node.js REPL.</p>
<pre class="result notranslate">$ node
&gt;
(^C again to quit)
&gt;
</pre>



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="259_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="261_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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