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
	$sid=37;
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




<p>A CSS comprises of style rules that are interpreted by the browser and then applied to the corresponding elements in your document. A style rule is made of three parts −</p>
<ul class="list">
<li><p><b>Selector</b> − A selector is an HTML tag at which a style will be applied. This could be any tag like &lt;h1&gt; or &lt;table&gt; etc.</p></li>
<li><p><b>Property</b> - A property is a type of attribute of HTML tag. Put simply, all the HTML attributes are converted into CSS properties. They could be <i>color</i>, <i>border</i> etc.</p></li>
<li><p><b>Value</b> - Values are assigned to properties. For example, <i>color</i> property can have value either <i>red</i> or <i>#F1F1F1</i> etc.</p></li>
</ul>
<p>You can put CSS Style Rule Syntax as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">selector </span><span class="pun">{</span><span class="pln"> </span><span class="kwd">property</span><span class="pun">:</span><span class="pln"> value </span><span class="pun">}</span></pre>
<img src="images/syntax.png" alt="Syntax">
<p><b>Example:</b> You can define a table border as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">table</span><span class="pun">{</span><span class="pln"> border </span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid </span><span class="com">#C00; }</span></pre>

<p>Here table is a selector and border is a property and given value <i>1px solid #C00</i> is the value of that property.</p>
<p>You can define selectors in various simple ways based on your comfort. Let me put these selectors one by one.</p>

<h4>The Type Selectors</h4>
<p>This is the same selector we have seen above. Again, one more example to give a color to all level 1 headings:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">h1 </span><span class="pun">{</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#36CFFF; </span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>The Universal Selectors</h4>
<p>Rather than selecting elements of a specific type, the universal selector quite simply matches the name of any element type −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">*</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> 
   color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#000000; </span><span class="pln">
</span><span class="pun">}</span></pre>
<p>This rule renders the content of every element in our document in black.</p>
<h4>The Descendant Selectors</h4>
<p>Suppose you want to apply a style rule to a particular element only when it lies inside a particular element. As given in the following example, style rule will apply to &lt;em&gt; element only when it lies inside &lt;ul&gt; tag.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">ul em </span><span class="pun">{</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#000000; </span><span class="pln">
</span><span class="pun">}</span></pre>
<h4>The Class Selectors</h4>
<p>You can define style rules based on the class attribute of the elements. All the elements having that class will be formatted according to the defined rule.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">.</span><span class="pln">black </span><span class="pun">{</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#000000; </span><span class="pln">
</span><span class="pun">}</span></pre>
<p>This rule renders the content in black for every element with class attribute set to <i>black</i> in our document. You can make it a bit more particular. For example:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">h1</span><span class="pun">.</span><span class="pln">black </span><span class="pun">{</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#000000; </span><span class="pln">
</span><span class="pun">}</span></pre>
<p>This rule renders the content in black for only &lt;h1&gt; elements with class attribute set to <i>black</i>.</p>
<p>You can apply more than one class selectors to given element. Consider the following example:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"center bold"</span><span class="tag">&gt;</span><span class="pln">
   This para will be styled by the classes </span><i><span class="pln">center</span></i><span class="pln"> and </span><i><span class="pln">bold</span></i><span class="pln">.
</span><span class="tag">&lt;/p&gt;</span></pre>
<h4>The ID Selectors</h4>
<p>You can define style rules based on the <i>id</i> attribute of the elements. All the elements having that <i>id</i> will be formatted according to the defined rule.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#black {</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#000000; </span><span class="pln">
</span><span class="pun">}</span></pre>
<p>This rule renders the content in black for every element with <i>id</i> attribute set to <i>black</i> in our document. You can make it a bit more particular. For example −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">h1</span><span class="com">#black {</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#000000; </span><span class="pln">
</span><span class="pun">}</span></pre>
<p>This rule renders the content in black for only &lt;h1&gt; elements with <i>id</i> attribute set to <i>black</i>. </p>
<p>The true power of <i>id</i> selectors is when they are used as the foundation for descendant selectors, For example:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#black h4 {</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#000000; </span><span class="pln">
</span><span class="pun">}</span></pre>
<p>In this example all level 2 headings will be displayed in black color when those headings will lie with in tags having <i>id</i> attribute set to <i>black</i>.</p>
<h4>The Child Selectors</h4>

<p>You have seen the descendant selectors. There is one more type of selector, which is very similar to descendants but have different functionality. Consider the following example −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">body </span><span class="pun">&gt;</span><span class="pln"> p </span><span class="pun">{</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#000000; </span><span class="pln">
</span><span class="pun">}</span></pre>
<p>This rule will render all the paragraphs in black if they are direct child of &lt;body&gt; element. Other paragraphs put inside other elements like &lt;div&gt; or &lt;td&gt; would not have any effect of this rule.</p>
<h4>The Attribute Selectors</h4>
<p>You can also apply styles to HTML elements with particular attributes. The style rule below will match all the input elements having a type attribute with a value of <i>text</i> −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">input</span><span class="pun">[</span><span class="pln">type </span><span class="pun">=</span><span class="pln"> </span><span class="str">"text"</span><span class="pun">]{</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#000000; </span><span class="pln">
</span><span class="pun">}</span></pre>
<p>The advantage to this method is that the &lt;input type = "submit" /&gt; element is unaffected, and the color applied only to the desired text fields.</p>
<p>There are following rules applied to attribute selector.</p>
<ul class="list">
<li><p><b>p[lang]</b> - Selects all paragraph elements with a <i>lang</i> attribute.</p></li>
<li><p><b>p[lang="fr"]</b> - Selects all paragraph elements whose <i>lang</i> attribute has a value of exactly "fr".</p></li>
<li><p><b>p[lang~="fr"]</b> - Selects all paragraph elements whose <i>lang</i> attribute contains the word "fr".</p></li>
<li><p><b>p[lang|="en"]</b> - Selects all paragraph elements whose <i>lang</i> attribute contains values that are exactly "en", or begin with "en-".</p></li>
</ul>
<h4>Multiple Style Rules</h4>
<p>You may need to define multiple style rules for a single element. You can define these rules to combine multiple properties and corresponding values into a single block as defined in the following example −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">h1 </span><span class="pun">{</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#36C;</span><span class="pln">
   font</span><span class="pun">-</span><span class="pln">weight</span><span class="pun">:</span><span class="pln"> normal</span><span class="pun">;</span><span class="pln">
   letter</span><span class="pun">-</span><span class="pln">spacing</span><span class="pun">:</span><span class="pln"> </span><span class="pun">.</span><span class="lit">4em</span><span class="pun">;</span><span class="pln">
   margin</span><span class="pun">-</span><span class="pln">bottom</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1em</span><span class="pun">;</span><span class="pln">
   text</span><span class="pun">-</span><span class="pln">transform</span><span class="pun">:</span><span class="pln"> lowercase</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Here all the property and value pairs are separated by a <b>semi colon (;)</b>. You can keep them in a single line or multiple lines. For better readability we keep them into separate lines.</p>
<p>For a while, don't bother about the properties mentioned in the above block. These properties will be explained in the coming chapters and you can find complete detail about properties in <a href="/css/css_references.htm">CSS References</a>.</p>
<h4>Grouping Selectors</h4>
<p>You can apply a style to many selectors if you like. Just separate the selectors with a comma, as given in the following example −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">h1</span><span class="pun">,</span><span class="pln"> h4</span><span class="pun">,</span><span class="pln"> h5 </span><span class="pun">{</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#36C;</span><span class="pln">
   font</span><span class="pun">-</span><span class="pln">weight</span><span class="pun">:</span><span class="pln"> normal</span><span class="pun">;</span><span class="pln">
   letter</span><span class="pun">-</span><span class="pln">spacing</span><span class="pun">:</span><span class="pln"> </span><span class="pun">.</span><span class="lit">4em</span><span class="pun">;</span><span class="pln">
   margin</span><span class="pun">-</span><span class="pln">bottom</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1em</span><span class="pun">;</span><span class="pln">
   text</span><span class="pun">-</span><span class="pln">transform</span><span class="pun">:</span><span class="pln"> lowercase</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>This define style rule will be applicable to h1, h4 and h5 element as well. The order of the list is irrelevant. All the elements in the selector will have the corresponding declarations applied to them.</p>
<p>You can combine the various <i>id</i> selectors together as shown below −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#content, #footer, #supplement {</span><span class="pln">
   position</span><span class="pun">:</span><span class="pln"> absolute</span><span class="pun">;</span><span class="pln">
   left</span><span class="pun">:</span><span class="pln"> </span><span class="lit">510px</span><span class="pun">;</span><span class="pln">
   width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">200px</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>











</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="36_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="38_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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