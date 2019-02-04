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
	$sid=24;
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



<p>All the HTML elements can be categorized into  two categories <b>(a)</b> Block Level Elements <b>(b)</b> Inline Elements</p>
<h4>Block Elements</h4>
<p>Block elements appear on the screen as if they have a line break before and after them. For example the &lt;p&gt;, &lt;h1&gt;, &lt;h4&gt;, &lt;h5&gt;, &lt;h4&gt;, &lt;h5&gt;, &lt;h6&gt;, &lt;ul&gt;, &lt;ol&gt;, &lt;dl&gt;, &lt;pre&gt;, &lt;hr /&gt;, &lt;blockquote&gt;, and &lt;address&gt; elements are all block level elements. They all start on their own new line, and anything that follows them appears on its own new line.</p>
<h4>Inline Elements</h4>
<p>Inline elements, on the other hand, can appear within sentences and do not have to appear on a new line of their own. The &lt;b&gt;, &lt;i&gt;, &lt;u&gt;, &lt;em&gt;, &lt;strong&gt;, &lt;sup&gt;, &lt;sub&gt;, &lt;big&gt;, &lt;small&gt;, &lt;li&gt;, &lt;ins&gt;, &lt;del&gt;, &lt;code&gt;, &lt;cite&gt;, &lt;dfn&gt;, &lt;kbd&gt;, and &lt;var&gt; elements are all inline elements.<h4>Inline Elements</h4></p>
<h4>Grouping HTML Elements</h4>
<p>There are two important tags which we use very frequently to group various other HTML tags (i) &lt;div&gt; tag and (ii) &lt;span&gt; tag</p>
<h4>The &lt;div&gt; tag</h4>
<p>This is the very important block level tag which plays a big role in grouping various other HTML tags and applying CSS on group of elements. Even now &lt;div&gt; tag can be used to create webpage layout where we define different parts ( Left, Right, Top etc) of the page using &lt;div&gt; tag.  This tag does not provide any visual change on the block but this has more meaning when it is used with CSS.</p>
<h5>Example</h5>
<p>Following is a simple example of &lt;div&gt; tag. We will learn Cascading Style Sheet (CSS) in a separate chapter but we used it here to show the usage of &lt;div&gt; tag:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML div Tag</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">

</span><span class="com">&lt;!-- First group of tags --&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">color</span><span class="pun">:</span><span class="pln">red</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;h4&gt;</span><span class="pln">This is first group</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
   </span><span class="tag">&lt;p&gt;</span><span class="pln">Following is a list of vegetables</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;ul&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Beetroot</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Ginger</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Potato</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Radish</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Second group of tags --&gt;</span><span class="pln">
</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">color</span><span class="pun">:</span><span class="pln">green</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;h4&gt;</span><span class="pln">This is second group</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
   </span><span class="tag">&lt;p&gt;</span><span class="pln">Following is a list of fruits</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;ul&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Apple</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Banana</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Mango</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;li&gt;</span><span class="pln">Strawberry</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>The &lt;span&gt; tag</h4>
<p>The HTML &lt;span&gt; is an inline element and it can be used to group inline-elements in an HTML document.  This tag also does not provide any visual change on the block but has more meaning when it is used with CSS.</p>
<p>The difference between the &lt;span&gt; tag and the &lt;div&gt; tag is that the &lt;span&gt; tag is used with inline elements where as the &lt;div&gt; tag is used with block-level elements.</p>
<h5>Example</h5>
<p>Following is a simple example of &lt;span&gt; tag. We will learn Cascading Style Sheet (CSS) in a separate chapter but we used it here to show the usage of &lt;span&gt; tag:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: pointer;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML span Tag</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">

</span><span class="tag">&lt;p&gt;</span><span class="pln">This is </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">color</span><span class="pun">:</span><span class="pln">red</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">red</span><span class="tag">&lt;/span&gt;</span><span class="pln"> and this is </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">color</span><span class="pun">:</span><span class="pln">green</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">green</span><span class="tag">&lt;/span&gt;&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<p>This is <span style="color:red">red</span>, and this is <span style="color:green">green</span></p>
</div>





</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="23_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="25_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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