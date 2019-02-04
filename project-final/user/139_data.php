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
<title>BOOTSTRAP Tutorials | knowledge.com</title>
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
	$sid=139;
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





<p>This chapter provides an overview of the key pieces of Bootstrap's infrastructure, including Bootstrap's approach to better, faster, stronger web development.</p>
<h4>HTML5 doctype</h4>
<p>Bootstrap makes use of certain HTML elements and CSS properties that require the use of the HTML5 doctype. Hence include the below piece of code for HTML5 doctype at the beginning of all your projects using Bootstrap.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
   ....
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Mobile First</h4>
<p>Since Bootstrap 3 has been launched, Bootstrap has become mobile first. It means 'mobile first' styles can be found throughout the entire library instead of them in separate files. You need to add the <b>viewport meta tag</b> to the <b>&lt;head&gt;</b> element, to ensure proper rendering and touch zooming on mobile devices.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"viewport"</span><span class="pln"> </span><span class="atn">content</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"width = device-width, initial-scale = 1.0"</span><span class="tag">&gt;</span></pre>
<ul class="list">
<li><p><i>width</i> property controls the width of the device. Setting it to <i>device-width</i> will make sure that it is rendered across various devices (mobiles, desktops, tablets...) properly.</p></li>
<li><p><i>initial-scale = 1.0</i> ensures that when loaded, your web page will be rendered at a 1:1 scale, and no zooming will be applied out of the box.</p></li>
</ul>
<p>Add <b>user-scalable = no</b> to the <b>content</b> attribute to disable zooming capabilities on mobile devices as shown below. Users are only able to scroll and not zoom with this change, and results in your site feeling a bit more like a native application.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"viewport"</span><span class="pln"> </span><span class="atn">content</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"width = device-width, initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no"</span><span class="tag">&gt;</span></pre>
<p>Normally <i>maximum-scale = 1.0</i> is used along with <i>user-scalable = no</i>. As mentioned above <b>user-scalable = no</b> may give users an experience more like a native app, hence Bootstrap doesn't recommend using this attribute.</p>
<h4>Responsive Images</h4>
<p>Bootstrap 3 allows you to make the images responsive by adding a class <b>.img-responsive</b> to the <b>&lt;img&gt;</b> tag. This class applies <b>max-width: 100%;</b> and <b>height: auto;</b> to the image so that it scales nicely to the parent element.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"..."</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"img-responsive"</span><span class="pln"> </span><span class="atn">alt</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Responsive image"</span><span class="tag">&gt;</span></pre>
<h4>Typography and Links</h4>
<p>Bootstrap sets a basic global display (background), typography, and link styles −</p>
<ul class="list">
<li><p><b>Basic Global display</b> − Sets <i>background-color: #fff;</i> on the <i>&lt;body&gt;</i> element.</p></li>
<li><p><b>Typography</b> − Uses the <i>@font-family-base</i>, <i>@font-size-base</i>, and <i>@line-height-base</i> attributes as the typographic base.</p></li>
<li><p><b>Link styles</b> − Sets the global link color via attribute <i>@link-color</i> and apply link underlines only on <i>:hover</i>.</p></li>
</ul>
If you intend to use LESS code, you may find all these within <i>scaffolding.less</i>.
<h4>Normalize</h4>
<p>Bootstrap uses <a target="_blank" rel="nofollow" href="http://necolas.github.io/normalize.css/">Normalize</a> to establish cross browser consistency.</p>
<p>Normalize.css is a modern, HTML5-ready alternative to CSS resets. It is a small CSS file that provides better cross-browser consistency in the default styling of HTML elements.</p>
<h4>Containers</h4>
<p>Use class <b>.container</b> to wrap a page's content and easily center the content's as shown below.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"container"</span><span class="tag">&gt;</span><span class="pln">
   ...
</span><span class="tag">&lt;/div&gt;</span></pre>
<p>Take a look at the <b>.container</b> class in <i>bootstrap.css</i> file −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">.</span><span class="pln">container </span><span class="pun">{</span><span class="pln">
   padding</span><span class="pun">-</span><span class="pln">right</span><span class="pun">:</span><span class="pln"> </span><span class="lit">15px</span><span class="pun">;</span><span class="pln">
   padding</span><span class="pun">-</span><span class="pln">left</span><span class="pun">:</span><span class="pln"> </span><span class="lit">15px</span><span class="pun">;</span><span class="pln">
   margin</span><span class="pun">-</span><span class="pln">right</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">auto</span><span class="pun">;</span><span class="pln">
   margin</span><span class="pun">-</span><span class="pln">left</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">auto</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Note that, due to padding and fixed widths, containers are not nestable by default.</p>
<p>Take a look at <i>bootstrap.css</i> file −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="lit">@media</span><span class="pln"> </span><span class="pun">(</span><span class="pln">min</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">768px</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="pun">.</span><span class="pln">container </span><span class="pun">{</span><span class="pln">
      width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">750px</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Here you can see that CSS has media-queries for containers with <b>width</b>. This helps for applying responsiveness and within those the container class is modified accordingly to render the grid system properly.</p>













</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="138_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="140_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'bootstrap_header.php'; ?>
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