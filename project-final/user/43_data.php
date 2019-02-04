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
	$sid=43;
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




<p>This chapter teaches you how to manipulate text using CSS properties. You can set following text properties of an element −</p>
<ul class="list">
<li><p>The <b>color</b> property is used to set the color of a text.</p></li>
<li><p>The <b>direction</b> property is used to set the text direction.</p></li>
<li><p>The <b>letter-spacing</b> property is used to add or subtract space between the letters that make up a word.</p></li>
<li><p>The <b>word-spacing</b> property is used to add or subtract space between the words of a sentence.</p></li>
<li><p>The <b>text-indent</b> property is used to indent the text of a paragraph.</p></li>
<li><p>The <b>text-align</b> property is used to align the text of a document.</p></li>
<li><p>The <b>text-decoration</b> property is used to underline, overline, and strikethrough text.</p></li>
<li><p>The <b>text-transform</b> property is used to capitalize text or convert text to uppercase or lowercase letters.</p></li>
<li><p>The <b>white-space</b> property is used to control the flow and formatting of text.</p></li>
<li><p>The <b>text-shadow</b> property is used to set the text shadow around a text.</p></li>
</ul>
<h4>Set the Text Color</h4>
<p>The following example demonstrates how to set the text color. Possible value could be any color name in any valid format.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">color</span><span class="pun">:</span><span class="pln">red</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This text will be written in red.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Set the Text Direction</h4>
<p>The following example demonstrates how to set the direction of a text. Possible values are <i>ltr or rtl</i>.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">direction</span><span class="pun">:</span><span class="pln">rtl</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This text will be renedered from right to left
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Set the Space between Characters</h4>
<p>The following example demonstrates how to set the space between characters. Possible values are <i>normal or a number specifying space.</i>.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">letter</span><span class="pun">-</span><span class="pln">spacing</span><span class="pun">:</span><span class="lit">5px</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This text is having space between letters.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Set the Space between Words</h4>
<p>The following example demonstrates how to set the space between words. Possible values are <i>normal or a number specifying space</i>.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">word</span><span class="pun">-</span><span class="pln">spacing</span><span class="pun">:</span><span class="lit">5px</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This text is having space between words.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Set the Text Indent</h4>
<p>The following example demonstrates how to indent the first line of a paragraph. Possible values are <i>% or  a number specifying indent space</i>.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">text</span><span class="pun">-</span><span class="pln">indent</span><span class="pun">:</span><span class="lit">1cm</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This text will have first line indented by 1cm and this line will remain at 
      its actual position this is done by CSS text-indent property.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Set the Text Alignment</h4>
<p>The following example demonstrates how to align a text. Possible values are <i>left, right, center, justify</i>.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">text</span><span class="pun">-</span><span class="pln">align</span><span class="pun">:</span><span class="pln">right</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This will be right aligned.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">text</span><span class="pun">-</span><span class="pln">align</span><span class="pun">:</span><span class="pln">center</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This will be center aligned.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">text</span><span class="pun">-</span><span class="pln">align</span><span class="pun">:</span><span class="pln">left</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This will be left aligned.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Decorating the Text</h4>
<p>The following example demonstrates how to decorate a text. Possible values are <i>none, underline, overline, line-through, blink</i>.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">text</span><span class="pun">-</span><span class="pln">decoration</span><span class="pun">:</span><span class="pln">underline</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This will be underlined
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">text</span><span class="pun">-</span><span class="pln">decoration</span><span class="pun">:</span><span class="pln">line</span><span class="pun">-</span><span class="pln">through</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This will be striked through.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">text</span><span class="pun">-</span><span class="pln">decoration</span><span class="pun">:</span><span class="pln">overline</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This will have a over line.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">text</span><span class="pun">-</span><span class="pln">decoration</span><span class="pun">:</span><span class="pln">blink</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This text will have blinking effect
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Set the Text Cases</h4>
<p>The following example demonstrates how to set the cases for a text. Possible values are <i>none, capitalize, uppercase, lowercase</i>.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">text</span><span class="pun">-</span><span class="pln">transform</span><span class="pun">:</span><span class="pln">capitalize</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This will be capitalized
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">text</span><span class="pun">-</span><span class="pln">transform</span><span class="pun">:</span><span class="pln">uppercase</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This will be in uppercase
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">text</span><span class="pun">-</span><span class="pln">transform</span><span class="pun">:</span><span class="pln">lowercase</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This will be in lowercase
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;/body&gt;</span><span class="pln">

</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Set the White Space between Text</h4>
<p>The following example demonstrates how white space inside an element is handled. Possible values are <i>normal, pre, nowrap</i>.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">white</span><span class="pun">-</span><span class="pln">space</span><span class="pun">:</span><span class="pln">pre</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      This text has a line break and the white-space pre setting tells the browser to honor 
      it just like the HTML pre tag.</span><span class="tag">&lt;/p&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>
<h4>Set the Text Shadow</h4>
<p>The following example demonstrates how to set the shadow around a text. This may not be supported by all the browsers.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><b><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">text</span><span class="pun">-</span><span class="pln">shadow</span><span class="pun">:</span><span class="lit">4px</span><span class="pln"> </span><span class="lit">4px</span><span class="pln"> </span><span class="lit">8px</span><span class="pln"> blue</span><span class="pun">;</span><span class="atv">"</span></b><span class="tag">&gt;</span><span class="pln">
      If your browser supports the CSS text-shadow property, this text will have a blue shadow.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>








</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="42_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="44_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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