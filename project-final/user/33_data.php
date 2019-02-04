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
<title>HTML Tutorials | knowledge.com</title>
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
	$sid=33;
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
 
<div class="sc_line sc_line_style_solid margin_top_3em"></div>
<strong style="font-size:20px;">




<p>A <b>script</b> is a small piece of program that can add interactivity to your website. For example, a script could generate a pop-up alert box message, or provide a dropdown menu. This script could be written using Javascript or VBScript.</p>
<p>You can write various small functions, called event handlers using any of the scripting language and then you can trigger those functions using HTML attributes.</p>
<p>Now a days only <b>Javascript</b> and associated frameworks are being used by most of the web developers, VBScript is not even supported by various major browsers.</p>
<p>You can keep Javascript code in a separate file and then include it whereever it's needed, or you can define functionality inside HTML document itself. Let's see both the cases one by one with suitable examples.</p>
<h4>External Javascript</h4>
<p>If you are going to define a functionality which will be used in various HTML documents then it's better to keep that functionality in a separate Javascript file and then include that file in your HTML documents. A Javascript file will have extension as <b>.js</b> and it will be included in HTML files using &lt;script&gt; tag.</p>
<h5>Example</h5>
<p>Consider we define  a small function using Javascript in <b>script.js</b> which has following code:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">function</span><span class="pln"> </span><span class="typ">Hello</span><span class="pun">()</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
    alert</span><span class="pun">(</span><span class="str">"Hello, World"</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Now let's make use of the above external Javascript file in our following HTML document:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Javascript External Script</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"/html/script.js"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">/&gt;&lt;/script&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="typ">Hello</span><span class="pun">();</span><span class="atv">"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"ok"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Click Me"</span><span class="pln">  </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result, where you can try to click on the given button:</p>
<div class="result notranslate">
<script type="text/javascript">
function Hello(){
   alert("Hello, World");
}
</script>

<input type="button" onclick="Hello();" name="ok" value="Click Me">
</div>
<h4>Internal Script</h4>
<p>You can write your script code directly into your HTML document. Usually we keep script code in header of the document using &lt;script&gt; tag, otherwise there is no restriction and you can put your source code anywhere in the document but inside &lt;script&gt; tag.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Javascript Internal Script</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;base</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"https://www.tutorialspoint.com/"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="kwd">function</span><span class="pln"> </span><span class="typ">Hello</span><span class="pun">(){</span><span class="pln">
   alert</span><span class="pun">(</span><span class="str">"Hello, World"</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="typ">Hello</span><span class="pun">();</span><span class="atv">"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"ok"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Click Me"</span><span class="pln">  </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result, where you can try to click on the given button:</p>
<div class="result notranslate">
<input type="button" onclick="Hello();" name="ok" value="Click Me">
</div>
<h4>Event Handlers</h4>
<p>Event handlers are nothing but simply defined functions which can be called against any mouse or keyboard event. You can define your business logic inside your event handler which can vary from a single to 1000s of line code.</p>
<p>Following example explains how to write an event handler. Let's write one simple function <i>EventHandler()</i> in the header of the document. We will call this function when any user brings mouse over a paragraph.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Event Handlers Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;base</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"https://www.tutorialspoint.com/"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="kwd">function</span><span class="pln"> </span><span class="typ">EventHandler</span><span class="pun">(){</span><span class="pln">
   alert</span><span class="pun">(</span><span class="str">"I'm event handler!!"</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">onmouseover</span><span class="pun">=</span><span class="atv">"</span><span class="typ">EventHandler</span><span class="pun">();</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">Bring your mouse here to see an alert</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>Now this will produce following result. Bring your mouse over this line and see the result:</p>
<div class="result notranslate">
<script type="text/javascript">
function EventHandler(){
   alert("I'm event handler!!");
}
</script>
<p onmouseover="EventHandler();">Bring your mouse here to see an alert</p>
</div>
<h4>Hide Scripts from Older Browsers</h4>x
<p>Although most (if not all) browsers these days support Javascript, but still some older browsers don't. If a browser doesn't support JavaScript, instead of running your script, it would display the code to the user. To prevent this, you can simply place HTML comments around the script as shown below.</p>
<pre class="prettyprint notranslate prettyprinted"><b><span class="typ">JavaScript</span><span class="pln"> </span><span class="typ">Example</span><span class="pun">:</span></b><span class="pln">
</span><span class="pun">&lt;</span><span class="pln">script type</span><span class="pun">=</span><span class="str">"text/javascript"</span><span class="pun">&gt;</span><span class="pln">
</span><span class="pun">&lt;!--</span><span class="pln">
document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Hello Javascript!"</span><span class="pun">);</span><span class="pln">
</span><span class="com">//--&gt;</span><span class="pln">
</span><span class="pun">&lt;/</span><span class="pln">script</span><span class="pun">&gt;</span><span class="pln">

</span><b><span class="typ">VBScript</span><span class="pln"> </span><span class="typ">Example</span><span class="pun">:</span></b><span class="pln">
</span><span class="pun">&lt;</span><span class="pln">script type</span><span class="pun">=</span><span class="str">"text/vbscript"</span><span class="pun">&gt;</span><span class="pln">
</span><span class="pun">&lt;!--</span><span class="pln">
document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Hello VBScript!"</span><span class="pun">)</span><span class="pln">
</span><span class="str">'--&gt;
&lt;/script&gt;</span></pre>
<h4>The &lt;noscript&gt; Element</h4>
<p>You can also provide alternative info to the users whose browsers don't support scripts and for those users who have disabled script option their browsers. You can do this using the <b>&lt;noscript&gt;</b> tag.</p>
<pre class="prettyprint notranslate prettyprinted"><b><span class="typ">JavaScript</span><span class="pln"> </span><span class="typ">Example</span><span class="pun">:</span></b><span class="pln">
</span><span class="pun">&lt;</span><span class="pln">script type</span><span class="pun">=</span><span class="str">"text/javascript"</span><span class="pun">&gt;</span><span class="pln">
</span><span class="pun">&lt;!--</span><span class="pln">
document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Hello Javascript!"</span><span class="pun">);</span><span class="pln">
</span><span class="com">//--&gt;</span><span class="pln">
</span><span class="pun">&lt;/</span><span class="pln">script</span><span class="pun">&gt;</span><span class="pln">
</span><span class="str">&lt;noscript&gt;</span><span class="typ">Your</span><span class="pln"> browser does </span><span class="kwd">not</span><span class="pln"> support </span><span class="typ">Javascript</span><span class="pun">!&lt;/</span><span class="pln">noscript</span><span class="pun">&gt;</span><span class="pln">
</span><b><span class="typ">VBScript</span><span class="pln"> </span><span class="typ">Example</span><span class="pun">:</span></b><span class="pln">
</span><span class="pun">&lt;</span><span class="pln">script type</span><span class="pun">=</span><span class="str">"text/vbscript"</span><span class="pun">&gt;</span><span class="pln">
</span><span class="pun">&lt;!--</span><span class="pln">
document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Hello VBScript!"</span><span class="pun">)</span><span class="pln">
</span><span class="str">'--&gt;
&lt;/script&gt;
&lt;noscript&gt;Your browser does not support VBScript!&lt;/noscript&gt;</span></pre>
<h4>Default Scripting Language</h4>
<p>There may be a situation when you will include multiple script files and ultimately using multiple &lt;script&gt; tags. You can specify a default scripting language for all your <i>script</i> tags. This saves you from specifying the language everytime you use a script tag within the page. Below is the example: </p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">http-equiv</span><span class="pun">=</span><span class="atv">"Content-Script-Type"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"text/JavaScript"</span><span class="pln"> </span><span class="tag">/&gt;</span></pre>
<p>Note that you can still override the default by specifying a language within the script tag.</p>









</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="32_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="34_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'html_header.php'; ?>
</aside>
 
  
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