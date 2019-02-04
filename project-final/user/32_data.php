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
	$sid=32;
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




<p>Cascading Style Sheets (CSS) describe how documents are presented on screens, in print, or perhaps how they are pronounced. W3C has actively promoted the use of style sheets on the Web since the Consortium was founded in 1994.</p>
<p>Cascading Style Sheets (CSS) provide easy and effective alternatives to specify various attributes for the HTML tags.  Using CSS, you can specify a number of style properties for a given HTML element. Each property has a name and a value, separated by a colon (:). Each property declaration is separated by a semi-colon (;).</p>
<h5>Example</h5>
<p>First let's consider an example of HTML document which makes use of &lt;font&gt; tag and associated attributes to specify text color and font size:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML CSS</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;&lt;font</span><span class="pln"> </span><span class="atn">color</span><span class="pun">=</span><span class="atv">"green"</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"5"</span><span class="tag">&gt;</span><span class="pln">Hello, World!</span><span class="tag">&lt;/font&gt;&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>We can re-write above example with the help of Style Sheet as follows:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML CSS</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">color</span><span class="pun">:</span><span class="pln">green</span><span class="pun">;</span><span class="pln">font</span><span class="pun">-</span><span class="pln">size</span><span class="pun">:</span><span class="lit">24px</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">Hello, World!</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<p style="color:green;font-size:24px;">Hello, World!</p>
</div>
<p>You can use CSS in three ways in your HTML document:</p>
<ul class="list">
<li><p><b>External Style Sheet</b> - Define style sheet rules in a separate .css file and then include that file in your HTML document using HTML &lt;link&gt; tag.</p></li>
<li><p><b>Internal Style Sheet</b> - Define style sheet rules in header section of the HTML document using &lt;style&gt; tag.</p></li>
<li><p><b>Inline Style Sheet</b> - Define style sheet rules directly along-with the HTML elements using <b>style</b> attribute.</p></li>
</ul>
<p>Let's see all the three cases one by one with the help of suitable examples.</p>
<h4>External Style Sheet</h4>
<p>If you need to use your style sheet to various pages, then its always recommended to define a common style sheet in a separate file. A cascading style sheet file will have extension as <b>.css</b> and it will be included in HTML files using &lt;link&gt; tag.</p>
<h5>Example</h5>
<p>Consider we define  a style sheet file <b>style.css</b> which has following rules:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">.</span><span class="pln">red</span><span class="pun">{</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln"> red</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="pun">.</span><span class="pln">thick</span><span class="pun">{</span><span class="pln">
   font</span><span class="pun">-</span><span class="pln">size</span><span class="pun">:</span><span class="lit">20px</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="pun">.</span><span class="pln">green</span><span class="pun">{</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln">green</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Here we defined three CSS rules which will be applicable to three different classes defined for the HTML tags. I suggest you should not bother about how these rules are being defined because you will learn them while studying CSS. Now let's make use of the above external CSS file in our following HTML document:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML External CSS</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;link</span><span class="pln"> </span><span class="atn">rel</span><span class="pun">=</span><span class="atv">"stylesheet"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/css"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"/html/style.css"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"red"</span><span class="tag">&gt;</span><span class="pln">This is red</span><span class="tag">&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"thick"</span><span class="tag">&gt;</span><span class="pln">This is thick</span><span class="tag">&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"green"</span><span class="tag">&gt;</span><span class="pln">This is green</span><span class="tag">&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"thick green"</span><span class="tag">&gt;</span><span class="pln">This is thick and green</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<p style="color:red;">This is red</p>

<p style="font-size:20px;">This is thick</p>

<p style="color:green;">This is green</p>

<p style="color:green;font-size:20px;">This is thick and green</p>
</div>
<h4>Internal Style Sheet</h4>
<p>If you want to apply Style Sheet rules to a single document only then you can include those rules in header section of the HTML document using &lt;style&gt; tag.</p>
<p>Rules defined in internal style sheet overrides the rules defined in an external CSS file.</p>
<h5>Example</h5>
<p>Let's re-write above example once again, but here we will write style sheet rules in the same HTML document using &lt;style&gt; tag:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Internal CSS</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;style</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/css"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="pun">.</span><span class="pln">red</span><span class="pun">{</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln"> red</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="pun">.</span><span class="pln">thick</span><span class="pun">{</span><span class="pln">
   font</span><span class="pun">-</span><span class="pln">size</span><span class="pun">:</span><span class="lit">20px</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="pun">.</span><span class="pln">green</span><span class="pun">{</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln">green</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="tag">&lt;/style&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"red"</span><span class="tag">&gt;</span><span class="pln">This is red</span><span class="tag">&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"thick"</span><span class="tag">&gt;</span><span class="pln">This is thick</span><span class="tag">&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"green"</span><span class="tag">&gt;</span><span class="pln">This is green</span><span class="tag">&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"thick green"</span><span class="tag">&gt;</span><span class="pln">This is thick and green</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<p style="color:red;">This is red</p>

<p style="font-size:20px;">This is thick</p>

<p style="color:green;">This is green</p>

<p style="color:green;font-size:20px;">This is thick and green</p>
</div>
<h4>Inline Style Sheet</h4>
<p>You can apply style sheet rules directly to any HTML element using <b>style</b> attribute of the relevant tag. This should be done only when you are interested to make a particular change in any HTML element only.</p>
<p>Rules defined inline with the element overrides the rules defined in an external CSS file as well as the rules defined in &lt;style&gt; element.</p>
<h5>Example</h5>
<p>Let's re-write above example once again, but here we will write style sheet rules along with the HTML elements using <b>style</b> attribute of those elements.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Inline CSS</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">color</span><span class="pun">:</span><span class="pln">red</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">This is red</span><span class="tag">&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">font</span><span class="pun">-</span><span class="pln">size</span><span class="pun">:</span><span class="lit">20px</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">This is thick</span><span class="tag">&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">color</span><span class="pun">:</span><span class="pln">green</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">This is green</span><span class="tag">&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">color</span><span class="pun">:</span><span class="pln">green</span><span class="pun">;</span><span class="pln">font</span><span class="pun">-</span><span class="pln">size</span><span class="pun">:</span><span class="lit">20px</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">This is thick and green</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<p style="color:red;">This is red</p>

<p style="font-size:20px;">This is thick</p>

<p style="color:green;">This is green</p>

<p style="color:green;font-size:20px;">This is thick and green</p>
</div>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="31_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="33_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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