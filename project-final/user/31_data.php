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
	$sid=31;
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




<p>We have learnt that a typical HTML document will have following structure:</p>
<pre class="result">Document declaration tag 
</pre>
<pre class="result" style="margin-top:5px;">&lt;html&gt;
   &lt;head&gt;
       Document header related tags
   &lt;/head&gt;

   &lt;body&gt;
       Document body related tags
   &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>This chapter will give a little more detail about header part which is represented by  HTML &lt;head&gt; tag.  The  &lt;head&gt; tag is a container of various important tags like &lt;title&gt;, &lt;meta&gt;, &lt;link&gt;, &lt;base&gt;, &lt;style&gt;, &lt;script&gt;, and &lt;noscript&gt; tags.</p>
<h4>The HTML &lt;title&gt; Tag</h4>
<p>The HTML &lt;title&gt; tag is used for specifying the title of the HTML document. Following is an example to give a title to an HTML document:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Title Tag Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">Hello, World!</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<p>Hello, World!</p>
</div>
<h4>The HTML &lt;meta&gt; Tag</h4>
<p>The HTML &lt;meta&gt; tag is used to provide metadata about the HTML document which includes information about page expiry, page author, list of keywords, page description etc.</p>
<p>Following are few of the important usages of &lt;meta&gt; tag inside an HTML document:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Meta Tag Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Provide list of keywords --&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"keywords"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"C, C++, Java, PHP, Perl, Python"</span><span class="tag">&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Provide description of the page --&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"description"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"Simply Easy Learning by Tutorials Point"</span><span class="tag">&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Author information --&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"author"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"Tutorials Point"</span><span class="tag">&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Page content type --&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">http-equiv</span><span class="pun">=</span><span class="atv">"content-type"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"text/html; charset=UTF-8"</span><span class="tag">&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Page refreshing delay --&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">http-equiv</span><span class="pun">=</span><span class="atv">"refresh"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"30"</span><span class="tag">&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Page expiry --&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">http-equiv</span><span class="pun">=</span><span class="atv">"expires"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"Wed, 21 June 2006 14:25:27 GMT"</span><span class="tag">&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Tag to tell robots not to index the content of a page --&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"robots"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"noindex, nofollow"</span><span class="tag">&gt;</span><span class="pln">

</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">Hello, World!</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<p>Hello, World!</p>
</div>
<h4>The HTML &lt;link&gt; Tag</h4>
<p>The HTML &lt;link&gt; tag is used to specify relationships between the current document and external resource. Following is an example to  link an external style sheet file available in <b>css</b> sub-directory within web root:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML link Tag Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;base</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"https://www.tutorialspoint.com/"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;link</span><span class="pln"> </span><span class="atn">rel</span><span class="pun">=</span><span class="atv">"stylesheet"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/css"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"/css/style.css"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">Hello, World!</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<p>Hello, World!</p>
</div>
<h4>The HTML &lt;style&gt; Tag</h4>
<p>The HTML &lt;style&gt; tag is used to specify style sheet for the current HTML document. Following is an example to  define few style sheet rules inside &lt;style&gt; tag:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML style Tag Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;base</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"https://www.tutorialspoint.com/"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;style</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/css"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="pun">.</span><span class="pln">myclass</span><span class="pun">{</span><span class="pln">
   background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#aaa;</span><span class="pln">
   padding</span><span class="pun">:</span><span class="pln"> </span><span class="lit">10px</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="tag">&lt;/style&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"myclass"</span><span class="tag">&gt;</span><span class="pln">Hello, World!</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<style type="text/css">
.myclass{
   background-color: #aaa;
   padding: 10px;
}
</style>
<p class="myclass">Hello, World!</p>
</div>
<p><b>Note: </b>To learn about how Cascading Style Sheet works, kindly check a separate tutorial available at <a href="https://www.tutorialspoint.com/css">https://www.tutorialspoint.com/css</a></p>
<h4>The HTML &lt;script&gt; Tag</h4>
<p>The HTML &lt;script&gt; tag is used to include either external script file or to define internal script for the HTML document. Following is an example where we are using Javascript to define a simple Javascript function:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML script Tag Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;base</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"https://www.tutorialspoint.com/"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="kwd">function</span><span class="pln"> </span><span class="typ">Hello</span><span class="pun">(){</span><span class="pln">
   alert</span><span class="pun">(</span><span class="str">"Hello, World"</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="typ">Hello</span><span class="pun">();</span><span class="atv">"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"ok"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"OK"</span><span class="pln">  </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>











</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="30_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="32_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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