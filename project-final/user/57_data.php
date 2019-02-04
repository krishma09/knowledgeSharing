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
<title>Javascript Tutorials | knowledge.com</title>
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
	$sid=57;
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




<p>JavaScript can be implemented using JavaScript statements that are placed within the <b>&lt;script&gt;... &lt;/script&gt;</b> HTML tags in a web page.</p>
<p>You can place the <b>&lt;script&gt;</b> tags, containing your JavaScript, anywhere within your web page, but it is normally recommended that you should keep it within the <b>&lt;head&gt;</b> tags.</p>
<p>The &lt;script&gt; tag alerts the browser program to start interpreting all the text between these tags as a script. A simple syntax of your JavaScript will appear as follows.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> ...</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="typ">JavaScript</span><span class="pln"> code
</span><span class="tag">&lt;/script&gt;</span></pre>
<p>The script tag takes two important attributes −</p>
<ul class="list">
<li><p><b>Language</b> − This attribute specifies what scripting language you are using. Typically, its value will be javascript. Although recent versions of HTML (and XHTML, its successor) have phased out the use of this attribute.</p></li>
<li><p><b>Type</b> − This attribute is what is now recommended to indicate the scripting language in use and its value should be set to "text/javascript".</p></li>
</ul>
<p>So your JavaScript segment will look like −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">language</span><span class="pun">=</span><span class="atv">"javascript"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="typ">JavaScript</span><span class="pln"> code
</span><span class="tag">&lt;/script&gt;</span></pre>
<h4>Your First JavaScript Script</h4>
<p>Let us take a sample example to print out "Hello World". We added an optional HTML comment that surrounds our JavaScript code. This is to save our code from a browser that does not support JavaScript. The comment ends with a "//--&gt;". Here "//" signifies a comment in JavaScript, so we add that to prevent a browser from reading the end of the HTML comment as a piece of JavaScript code. Next, we call a function <b>document.write</b> which writes a string into our HTML document.</p>
<p>This function can be used to write text, HTML, or both. Take a look at the following code.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">language</span><span class="pun">=</span><span class="atv">"javascript"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Hello World!"</span><span class="pun">)</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This code will produce the following result −</p>
<pre class="result notranslate">Hello World!
</pre>
<h4>Whitespace and Line Breaks</h4>
<p>JavaScript ignores spaces, tabs, and newlines that appear in JavaScript programs. You can use spaces, tabs, and newlines freely in your program and you are free to format and indent your programs in a neat and consistent way that makes the code easy to read and understand.</p>
<h4>Semicolons are Optional</h4>
<p>Simple statements in JavaScript are generally followed by a semicolon character, just as they are in C, C++, and Java. JavaScript, however, allows you to omit this semicolon if each of your statements are placed on a separate line. For example, the following code could be written without semicolons.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">language</span><span class="pun">=</span><span class="atv">"javascript"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="pun">&lt;!--</span><span class="pln">
      var1 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pln">
      var2 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pln">
   </span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span></pre>
<p>But when formatted in a single line as follows, you must use semicolons −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">language</span><span class="pun">=</span><span class="atv">"javascript"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="pun">&lt;!--</span><span class="pln">
      var1 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln"> var2 </span><span class="pun">=</span><span class="pln"> </span><span class="lit">20</span><span class="pun">;</span><span class="pln">
   </span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span></pre>
<p><b>Note</b> − It is a good programming practice to use semicolons.</p>
<h4>Case Sensitivity</h4>
<p>JavaScript is a case-sensitive language. This means that the language keywords, variables, function names, and any other identifiers must always be typed with a consistent capitalization of letters.</p>
<p>So the identifiers <b>Time</b> and <b>TIME</b> will convey different meanings in JavaScript.</p>
<p><b>NOTE</b> − Care should be taken while writing variable and function names in JavaScript.</p>
<h4>Comments in JavaScript</h4>
<p>JavaScript supports both C-style and C++-style comments, Thus −</p>
<ul class="list">
<li><p>Any text between a // and the end of a line is treated as a comment and is ignored by JavaScript.</p></li>
<li><p>Any text between the characters /* and */ is treated as a comment. This may span multiple lines.</p></li>
<li><p>JavaScript also recognizes the HTML comment opening sequence &lt;!--. JavaScript treats this as a single-line comment, just as it does the // comment.</p></li>
<li><p>The HTML comment closing sequence --&gt; is  not recognized by JavaScript so it should be written as //--&gt;.</p></li>
</ul>
<h5>Example</h5>
<p>The following example shows how to use comments in JavaScript.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">language</span><span class="pun">=</span><span class="atv">"javascript"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="pun">&lt;!--</span><span class="pln">
   
      </span><span class="com">// This is a comment. It is similar to comments in C++</span><span class="pln">
   
      </span><span class="com">/*
      * This is a multiline comment in JavaScript
      * It is very similar to comments in C Programming
      */</span><span class="pln">
   
   </span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span></pre>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="56_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="58_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'javascript_header.php'; ?>
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