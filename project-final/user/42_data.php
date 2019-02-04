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
<title>CSS Tutorials | knowledge.com</title>
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
	$sid=42;
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





<p>This chapter teaches you how to set fonts of a content, available in an HTML element. You can set following font properties of an element −</p>
<ul class="list">
<li><p>The <b>font-family</b> property is used to change the face of a font.</p></li>
<li><p>The <b>font-style</b> property is used to make a font italic or oblique.</p></li>
<li><p>The <b>font-variant</b> property is used to create a small-caps effect.</p></li>
<li><p>The <b>font-weight</b> property is used to increase or decrease how bold or light a font appears.</p></li>
<li><p>The <b>font-size</b> property is used to increase or decrease the size of a font.</p></li>
<li><p>The <b>font</b> property is used as shorthand to specify a number of other font properties.</p></li>
</ul>
<h4>Set the Font Family</h4>
<p>Following is the example, which demonstrates how to set the font family of an element. Possible value could be any font family name.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">font</span><span class="pun">-</span><span class="pln">family</span><span class="pun">:</span><span class="pln">georgia</span><span class="pun">,</span><span class="pln">garamond</span><span class="pun">,</span><span class="pln">serif</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This text is rendered in either georgia, garamond, or the default serif font 
      depending on which font  you have at your system.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Set the Font Style</h4>
<p>Following is the example, which demonstrates how to set the font style of an element. Possible values are <i>normal, italic and oblique</i>.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">font</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">italic</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This text will be rendered in italic style
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Set the Font Variant</h4>
<p>The following example demonstrates how to set the font variant of an element. Possible values are <i>normal and small-caps</i>.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">font</span><span class="pun">-</span><span class="pln">variant</span><span class="pun">:</span><span class="pln">small</span><span class="pun">-</span><span class="pln">caps</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This text will be rendered as small caps
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Set the Font Weight</h4>
<p>The following example demonstrates how to set the font weight of an element. The font-weight property provides the functionality to specify how bold a font is. Possible values could be <i>normal, bold, bolder, lighter, 100, 200, 300, 400, 500, 600, 700, 800, 900</i>.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">font</span><span class="pun">-</span><span class="pln">weight</span><span class="pun">:</span><span class="pln">bold</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">This font is bold.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">font</span><span class="pun">-</span><span class="pln">weight</span><span class="pun">:</span><span class="pln">bolder</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">This font is bolder.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">font</span><span class="pun">-</span><span class="pln">weight</span><span class="pun">:</span><span class="lit">500</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">This font is 500 weight.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Set the Font Size</h4>
<p>The following example demonstrates how to set the font size of an element. The font-size property is used to control the size of fonts. Possible values could be <i>xx-small, x-small, small, medium, large, x-large, xx-large, smaller, larger, size in pixels or in %</i>.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">font</span><span class="pun">-</span><span class="pln">size</span><span class="pun">:</span><span class="lit">20px</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">This font size is 20 pixels</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">font</span><span class="pun">-</span><span class="pln">size</span><span class="pun">:</span><span class="pln">small</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">This font size is small</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">font</span><span class="pun">-</span><span class="pln">size</span><span class="pun">:</span><span class="pln">large</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">This font size is large</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Set the Font Size Adjust</h4>
<p>The following example demonstrates how to set the font size adjust of an element. This property enables you to adjust the x-height to make fonts more legible. Possible value could be any number.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">font</span><span class="pun">-</span><span class="pln">size</span><span class="pun">-</span><span class="pln">adjust</span><span class="pun">:</span><span class="lit">0.61</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
         This text is using a font-size-adjust value.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Set the Font Stretch</h4>
<p>The following example demonstrates how to set the font stretch of an element. This property relies on the user's computer to have an expanded or condensed version of the font being used.</p>
<p>Possible values could be <i>normal, wider, narrower, ultra-condensed, extra-condensed, condensed, semi-condensed, semi-expanded, expanded, extra-expanded, ultra-expanded</i>.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">font</span><span class="pun">-</span><span class="pln">stretch</span><span class="pun">:</span><span class="pln">ultra</span><span class="pun">-</span><span class="pln">expanded</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
         If this doesn't appear to work, it is likely that your computer doesn't have a  
         condensed or expanded version of the font being used.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Shorthand Property</h4>
<p>You can use the <i>font</i> property to set all the font properties at once. For example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">font</span><span class="pun">:</span><span class="pln">italic small</span><span class="pun">-</span><span class="pln">caps bold </span><span class="lit">15px</span><span class="pln"> georgia</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      Applying all the properties on the text at once.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>









</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="41_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="43_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'css_header.php'; ?>
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