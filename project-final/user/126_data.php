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
<title>PHP Tutorials | knowledge.com</title>
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
	$sid=126;
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




<p>Every company follows a different coding standard based on their best practices. Coding standard is required  because there may be many developers working on different modules so if they will start inventing their own standards then source will become very un-manageable and it will become difficult to maintain that source code in future.</p>
<p>Here are several reasons why to use coding specifications −</p>
<ul class="list">
<li><p>Your peer programmers have to understand the code you produce. A coding standard acts as the blueprint for all the team to decipher the code.</p></li>
<li><p>Simplicity and clarity achieved by consistent coding saves you from common mistakes.</p></li>
<li><p>If you revise your code after some time then it becomes easy to understand that code.</p></li>
<li><p>Its industry standard to follow a particular standard to being more quality in software.</p></li>
</ul>
<p>There are few guidelines which can be followed while coding in PHP.</p>
<ul class="list">
<li><p><b>Indenting and Line Length</b> − Use an indent of 4 spaces and don't use any tab because different computers use different setting for tab. It is recommended to keep lines at approximately 75-85 characters long for better code readability.</p></li>
<li><p><b>Control Structures</b> − These include if, for, while, switch, etc. Control statements should have one space between the control keyword and opening parenthesis, to distinguish them from function calls.  You are strongly encouraged to always use curly braces even in situations where they are technically optional.</p></li>
</ul>
<p><b>Examples</b></p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">if</span><span class="pln"> </span><span class="pun">((</span><span class="pln">condition1</span><span class="pun">)</span><span class="pln"> </span><span class="pun">||</span><span class="pln"> </span><span class="pun">(</span><span class="pln">condition2</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   action1</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">elseif </span><span class="pun">((</span><span class="pln">condition3</span><span class="pun">)</span><span class="pln"> </span><span class="pun">&amp;&amp;</span><span class="pln"> </span><span class="pun">(</span><span class="pln">condition4</span><span class="pun">))</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   action2</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">default</span><span class="pln"> action</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>You can write switch statements as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">switch</span><span class="pln"> </span><span class="pun">(</span><span class="pln">condition</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">case</span><span class="pln"> </span><span class="lit">1</span><span class="pun">:</span><span class="pln">
      action1</span><span class="pun">;</span><span class="pln">
      </span><span class="kwd">break</span><span class="pun">;</span><span class="pln">
   
   </span><span class="kwd">case</span><span class="pln"> </span><span class="lit">2</span><span class="pun">:</span><span class="pln">
      action2</span><span class="pun">;</span><span class="pln">
      </span><span class="kwd">break</span><span class="pun">;</span><span class="pln">
         
   </span><span class="kwd">default</span><span class="pun">:</span><span class="pln">
      defaultaction</span><span class="pun">;</span><span class="pln">
      </span><span class="kwd">break</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<ul class="list">
<li><p><b>Function Calls</b> − Functions should be called with no spaces between the function name, the opening parenthesis, and the first parameter; spaces between commas and each parameter, and no space between the last parameter, the closing parenthesis, and the semicolon. Here's an example −</p></li>
</ul>
<pre class="result notranslate">$var = foo($bar, $baz, $quux);
</pre>
<ul class="list">
<li><p><b>Function Definitions</b> − Function declarations follow the "BSD/Allman style" −</p></li>
</ul>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">function</span><span class="pln"> fooFunction</span><span class="pun">(</span><span class="pln">$arg1</span><span class="pun">,</span><span class="pln"> $arg2 </span><span class="pun">=</span><span class="pln"> </span><span class="str">''</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">condition</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      statement</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">return</span><span class="pln"> $val</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<ul class="list">
<li><p><b>Comments</b> − C style comments (/* */) and standard C++ comments (//) are both fine. Use of Perl/shell style comments (#) is discouraged.</p></li>
<li><p><b>PHP Code Tags</b> − Always use &lt;?php ?&gt; to delimit PHP code, not the &lt;? ?&gt; shorthand. This is required for PHP compliance and is also the most portable way to include PHP code on differing operating systems and setups.</p></li>
<li><p><b>Variable Names</b> −</p>
<ul class="list">
<li>Use all lower case letters</li>
<li>Use '_' as the word separator.</li>
<li>Global variables should be prepended with a 'g'.</li>
<li>Global constants should be all caps with '_' separators.</li>
<li>Static variables may be prepended with 's'.</li>
</ul>
</li>
<li><p><b>Make Functions Reentrant</b> − Functions should not keep static variables that prevent a function from being reentrant.</p></li>
<li><p><b>Alignment of Declaration Blocks</b> − Block of declarations should be aligned.</p></li>
<li><p><b>One Statement Per Line</b> − There should be only one statement per line unless the statements are very closely related.</p></li>
<li><p><b>Short Methods or Functions</b> − Methods should limit themselves to a single page of code.</p></li>
</ul>
<p>There could be many more points which should be considered while writing your PHP program. Over all intention should be to be consistent throughout of the code programming and it will be possible only when you will follow any coding standard. You can device your own standard if you like something different.</p>
















</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="125_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="127_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'php_header.php'; ?>
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