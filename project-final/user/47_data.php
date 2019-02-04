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
	$sid=47;
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


<p>The <i>border</i> properties allow you to specify how the border of the box representing an element should look. There are three properties of a border you can change:</p>
<ul class="list">
<li><p>The <b>border-color</b> specifies the color of a border.</p></li>
<li><p>The <b>border-style</b> specifies whether a border should be solid, dashed line, double line, or one of the other possible values.</p></li>
<li><p>The <b>border-width</b> specifies the width of a border.</p></li>
</ul>
<p>Now, we will see how to use these properties with examples.</p>
<h4>The border-color Property</h4>
<p>The border-color property allows you to change the color of the border surrounding an element. You can individually change the color of the bottom, left, top and right sides of an element's border using the properties −</p>
<ul class="list">
<li><p><b>border-bottom-color</b> changes the color of bottom border.</p></li>
<li><p><b>border-top-color</b> changes the color of top border.</p></li>
<li><p><b>border-left-color</b> changes the color of left border.</p></li>
<li><p><b>border-right-color</b> changes the color of right border.</p></li>
</ul>
<p>The following example shows the effect of all these properties −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;style</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/css"</span><span class="tag">&gt;</span><span class="pln">
         p</span><span class="pun">.</span><span class="pln">example1</span><span class="pun">{</span><span class="pln">
            border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">bottom</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="lit">009900</span><span class="pun">;</span><span class="pln"> </span><span class="com">/* Green */</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">top</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="pln">FF0000</span><span class="pun">;</span><span class="pln">    </span><span class="com">/* Red */</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">left</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="lit">330000</span><span class="pun">;</span><span class="pln">   </span><span class="com">/* Black */</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">right</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="lit">0000CC</span><span class="pun">;</span><span class="pln">  </span><span class="com">/* Blue */</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         p</span><span class="pun">.</span><span class="pln">example2</span><span class="pun">{</span><span class="pln">
            border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="lit">009900</span><span class="pun">;</span><span class="pln">        </span><span class="com">/* Green */</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"example1"</span><span class="tag">&gt;</span><span class="pln">
      This example is showing all borders in different colors.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"example2"</span><span class="tag">&gt;</span><span class="pln">
      This example is showing all borders in green color only.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>
<h4>The border-style Property</h4>
<p>The border-style property allows you to select one of the following styles of border −</p>
<ul class="list">
<li><p><b>none:</b> No border. (Equivalent of border-width:0;)</p></li>
<li><p><b>solid:</b> Border is a single solid line.</p></li>
<li><p><b>dotted:</b> Border is a series of dots.</p></li>
<li><p><b>dashed:</b> Border is a series of short lines.</p></li>
<li><p><b>double:</b> Border is two solid lines.</p></li>
<li><p><b>groove:</b> Border looks as though it is carved into the page.</p></li>
<li><p><b>ridge:</b> Border looks the opposite of groove.</p></li>
<li><p><b>inset:</b> Border makes the box look like it is embedded in the page.</p></li>
<li><p><b>outset:</b> Border makes the box look like it is coming out of the canvas.</p></li>
<li><p><b>hidden:</b> Same as none, except in terms of border-conflict resolution for table elements.</p></li>
</ul>
<p>You can individually change the style of the bottom, left, top, and right borders of an element using the following properties −</p>
<ul class="list">
<li><p><b>border-bottom-style</b> changes the style of bottom border.</p></li>
<li><p><b>border-top-style</b> changes the style of top border.</p></li>
<li><p><b>border-left-style</b> changes the style of left border.</p></li>
<li><p><b>border-right-style</b> changes the style of right border.</p></li>
</ul>
<p>The following example shows all these border styles −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: pointer;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">.
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">4px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">none</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a border with none width.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">4px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">solid</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a solid border.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">4px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">dashed</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a dahsed border.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">4px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="kwd">double</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a double border.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">4px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">groove</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a groove border.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">4px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">ridge</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is aridge  border.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">4px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">inset</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a inset border.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">4px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">outset</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a outset border.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">4px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">hidden</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a hidden border.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">4px</span><span class="pun">;</span><span class="pln">border</span><span class="pun">-</span><span class="pln">top</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">solid</span><span class="pun">;</span><span class="pln">
      border</span><span class="pun">-</span><span class="pln">bottom</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">dashed</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">left</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">groove</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">right</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="kwd">double</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a a border with four different styles.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>
<h4>The border-width Property −</h4>
<p>The border-width property allows you to set the width of an element borders. The value of this property could be either a length in px, pt or cm or it should be set to <i>thin, medium or thick.</i></p>
<p>You can individually change the width of the bottom, top, left, and right borders of an element using the following properties −</p>
<ul class="list">
<li><p><b>border-bottom-width</b> changes the width of bottom border.</p></li>
<li><p><b>border-top-width</b> changes the width of top border.</p></li>
<li><p><b>border-left-width</b> changes the width of left border.</p></li>
<li><p><b>border-right-width</b> changes the width of right border.</p></li>
</ul>
<p>The following example shows all these border width −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">4px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">solid</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a solid border whose width is 4px.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">4pt</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">solid</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a solid border whose width is 4pt.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln">thin</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">solid</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a solid border whose width is thin.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln">medium</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">solid</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a solid border whose width is medium;
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln">thick</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">solid</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a solid border whose width is thick.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">-</span><span class="pln">bottom</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">4px</span><span class="pun">;</span><span class="pln">border</span><span class="pun">-</span><span class="pln">top</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">10px</span><span class="pun">;</span><span class="pln">
      border</span><span class="pun">-</span><span class="pln">left</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">2px</span><span class="pun">;</span><span class="pln">border</span><span class="pun">-</span><span class="pln">right</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">15px</span><span class="pun">;</span><span class="pln">border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">solid</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a a border with four different width.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Border Properties Using Shorthand</h4>
<p>The border property allows you to specify color, style, and width of lines in one property −</p>
<p>The following example shows how to use all the three properties into a single property. This is the most frequently used property to set border around any element.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">border</span><span class="pun">:</span><span class="lit">4px</span><span class="pln"> solid red</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This example is showing shorthand property for border.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>











</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="46_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="48_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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