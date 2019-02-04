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
	$sid=38;
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





<p>There are four ways to associate styles with your HTML document. Most commonly used methods are inline CSS and External CSS.</p>

<h4>Embedded CSS - The &lt;style&gt; Element</h4>
<p>You can put your CSS rules into an HTML document using the &lt;style&gt; element. This tag is placed inside &lt;head&gt;...&lt;/head&gt; tags. Rules defined using this syntax will be applied to all the elements available in the document. Here is the generic syntax −</p>
<p>Following is the example of embed CSS based on the above syntax −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;style</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/css"</span><span class="pln"> </span><span class="atn">media</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"all"</span><span class="tag">&gt;</span><span class="pln">
         body </span><span class="pun">{</span><span class="pln">
            background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln"> linen</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         h1 </span><span class="pun">{</span><span class="pln">
            color</span><span class="pun">:</span><span class="pln"> maroon</span><span class="pun">;</span><span class="pln">
            margin</span><span class="pun">-</span><span class="pln">left</span><span class="pun">:</span><span class="pln"> </span><span class="lit">40px</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;h1&gt;</span><span class="pln">This is a heading</span><span class="tag">&lt;/h1&gt;</span><span class="pln">
      </span><span class="tag">&lt;p&gt;</span><span class="pln">This is a paragraph.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h5>Attributes</h5>

<p>Attributes associated with &lt;style&gt; elements are −</p>
<table class="table table-bordered">
<tbody><tr>
<th>Attribute</th>
<th>Value</th>
<th>Description</th>
</tr>
<tr>
<td>type</td>
<td>text/css</td>
<td>Specifies the style sheet language as a content-type (MIME type). This is required attribute.</td>
</tr>
<tr>
<td>media</td>
<td><p>screen</p>
<p>tty</p>
<p>tv</p>
<p>projection</p>
<p>handheld</p>
<p>print</p>
<p>braille</p>
<p>aural</p>
<p>all</p>
</td>
<td style="vertical-align:middle;">Specifies the device the document will be displayed on. Default value is <i>all</i>. This is an optional attribute.</td>
</tr>
</tbody></table>
<h4>Inline CSS - The <i>style</i> Attribute</h4>
<p>You can use <i>style</i> attribute of any HTML element to define style rules. These rules will be applied to that element only. Here is the generic syntax −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;element</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pun">...</span><span class="pln">style rules</span><span class="pun">....</span><span class="atv">"</span><span class="tag">&gt;</span></pre>
<h5>Attributes</h5>
<table class="table table-bordered">
<tbody><tr>
<th>Attribute</th>
<th style="width:15%">Value</th>
<th>Description</th>
</tr>
<tr>
<td>style</td>
<td>style rules</td>
<td>The value of <i>style</i> attribute is a combination of style declarations separated by semicolon (;).</td>
</tr>
</tbody></table>
<h5>Example</h5>
<p>Following is the example of inline CSS based on the above syntax −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;h1</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">color</span><span class="pun">:#</span><span class="lit">36C</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln"> This is inline CSS </span><span class="tag">&lt;/h1&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>External CSS - The &lt;link&gt; Element</h4><h4>External CSS - The &lt;link&gt; Element</h4>
<p>The &lt;link&gt; element can be used to include an external stylesheet file in your HTML document.</p>
<p>An external style sheet is a separate text file with <b>.css</b> extension. You define all the Style rules within this text file and then you can include this file in any HTML document using &lt;link&gt; element.</p>
<p>Here is the generic syntax of including external CSS file −</p>
<pre class="result notranslate">&lt;head&gt;
   &lt;link type = "text/css" href = "..." media = "..." /&gt;
&lt;/head&gt;
</pre>
<h5>Attributes</h5>
<p>Attributes associated with &lt;style&gt; elements are −</p>
<table class="table table-bordered">
<tbody><tr>
<th>Attribute</th>
<th>Value</th>
<th>Description</th>
</tr>
<tr>
<td>type</td>
<td>text/css</td>
<td>Specifies the style sheet language as a content-type (MIME type). This attribute is required.</td>
</tr>
<tr>
<td>href</td>
<td>URL</td>
<td>Specifies the style sheet file having Style rules. This attribute is a required.</td>
</tr>
<tr>
<td>media</td>
<td>
<p>screen</p>
<p>tty</p>
<p>tv</p>
<p>projection</p>
<p>handheld</p>
<p>print</p>
<p>braille</p>
<p>aural</p>
<p>all</p>
</td>
<td style="vertical-align:middle;">Specifies the device the document will be displayed on. Default value is <i>all</i>. This is optional attribute.</td>
</tr>
</tbody></table>
<h5>Example</h5>
<p>Consider a simple style sheet file with a name <i>mystyle.css</i> having the following rules −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">h1</span><span class="pun">,</span><span class="pln"> h4</span><span class="pun">,</span><span class="pln"> h5 </span><span class="pun">{</span><span class="pln">
   color</span><span class="pun">:</span><span class="pln"> </span><span class="com">#36C;</span><span class="pln">
   font</span><span class="pun">-</span><span class="pln">weight</span><span class="pun">:</span><span class="pln"> normal</span><span class="pun">;</span><span class="pln">
   letter</span><span class="pun">-</span><span class="pln">spacing</span><span class="pun">:</span><span class="pln"> </span><span class="pun">.</span><span class="lit">4em</span><span class="pun">;</span><span class="pln">
   margin</span><span class="pun">-</span><span class="pln">bottom</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1em</span><span class="pun">;</span><span class="pln">
   text</span><span class="pun">-</span><span class="pln">transform</span><span class="pun">:</span><span class="pln"> lowercase</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Now you can include this file <i>mystyle.css</i> in any HTML document as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;link</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/css"</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"mystyle.css"</span><span class="pln"> </span><span class="atn">media</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">" all"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span></pre>
<h4>Imported CSS - @import Rule</h4>
<p>@import is used to import an external stylesheet in a manner similar to the &lt;link&gt; element. Here is the generic syntax of @import rule.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;head&gt;</span><span class="pln">
   &lt;@import "URL";
</span><span class="tag">&lt;/head&gt;</span></pre>
<p>Here URL is the URL of the style sheet file having style rules. You can use another syntax as well −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;head&gt;</span><span class="pln">
   &lt;@import url("URL");
</span><span class="tag">&lt;/head&gt;</span></pre>
<h5>Example</h5>
<p>Following is the example showing you how to import a style sheet file into HTML document −</p>
<pre class="result notranslate">&lt;head&gt;
   @import "mystyle.css";
&lt;/head&gt;
</pre>
<h4>CSS Rules Overriding</h4>
<p>We have discussed four ways to include style sheet rules in a an HTML document. Here is the rule to override any Style Sheet Rule.</p>
<ul class="list">
<li><p>Any inline style sheet takes highest priority. So, it will override any rule defined in &lt;style&gt;...&lt;/style&gt; tags or rules defined in any external style sheet file.</p></li>
<li><p>Any rule defined in &lt;style&gt;...&lt;/style&gt; tags will override rules defined in any external style sheet file.</p></li>
<li><p>Any rule defined in external style sheet file takes lowest priority, and rules defined in this file will be applied only when above two rules are not applicable.</p></li>
</ul>
<h4>Handling old Browsers</h4>
<p>There are still many old browsers who do not support CSS. So, we should take care while writing our Embedded CSS in an HTML document. The following snippet shows how you can use comment tags to hide CSS from older browsers −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;style</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/css"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="com">&lt;!--
      body, td {
         color: blue;
      }
   --&gt;</span><span class="pln">
</span><span class="tag">&lt;/style&gt;</span></pre>
<h4>CSS Comments</h4>
<p>Many times, you may need to put additional comments in your style sheet blocks. So, it is very easy to comment any part in style sheet. You can simple put your comments inside /*.....this is a comment in style sheet.....*/.</p>
<p>You can use /* ....*/ to comment multi-line blocks in similar way you do in C and C++ programming languages.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         p </span><span class="pun">{</span><span class="pln">
            color</span><span class="pun">:</span><span class="pln"> red</span><span class="pun">;</span><span class="pln">
            </span><span class="com">/* This is a single-line comment */</span><span class="pln">
            text</span><span class="pun">-</span><span class="pln">align</span><span class="pun">:</span><span class="pln"> center</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         </span><span class="com">/* This is a multi-line comment */</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Hello World!</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>









</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="37_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="39_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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