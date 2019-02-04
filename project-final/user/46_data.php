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
	$sid=46;
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




<p>This tutorial will teach you how to set different properties of an HTML table using CSS. You can set following properties of a table −</p>

<ul class="list">
<li><p>The <b>border-collapse</b> specifies whether the browser should control the appearance of the adjacent borders that touch each other or whether each cell should maintain its style.</p></li>
<li><p>The <b>border-spacing</b> specifies the width that should appear between table cells.</p></li>
<li><p>The <b>caption-side</b> captions are presented in the &lt;caption&gt; element. By default, these are rendered above the table in the document. You use the <i>caption-side</i> property to control the placement of the table caption.</p></li>
<li><p>The <b>empty-cells</b> specifies whether the border should be shown if a cell is empty.</p></li>
<li><p>The <b>table-layout</b> allows browsers to speed up layout of a table by using the first width properties it comes across for the rest of a column rather than having to load the whole table before rendering it.</p></li>
</ul>
<p>Now, we will see how to use these properties with examples.</p>
<h4>The border-collapse Property:</h4>
<p>This property can have two values <i>collapse</i> and <i>separate</i>. The following example uses both the values:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;style</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/css"</span><span class="tag">&gt;</span><span class="pln">
         table</span><span class="pun">.</span><span class="pln">one </span><span class="pun">{</span><span class="pln">border</span><span class="pun">-</span><span class="pln">collapse</span><span class="pun">:</span><span class="pln">collapse</span><span class="pun">;}</span><span class="pln">
         table</span><span class="pun">.</span><span class="pln">two </span><span class="pun">{</span><span class="pln">border</span><span class="pun">-</span><span class="pln">collapse</span><span class="pun">:</span><span class="pln">separate</span><span class="pun">;}</span><span class="pln">
         td</span><span class="pun">.</span><span class="pln">a </span><span class="pun">{</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">dotted</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">3px</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="lit">000000</span><span class="pun">;</span><span class="pln"> 
            padding</span><span class="pun">:</span><span class="pln"> </span><span class="lit">10px</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         td</span><span class="pun">.</span><span class="pln">b </span><span class="pun">{</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">solid</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">3px</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="lit">333333</span><span class="pun">;</span><span class="pln">
            padding</span><span class="pun">:</span><span class="lit">10px</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"one"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;caption&gt;</span><span class="pln">Collapse Border Example</span><span class="tag">&lt;/caption&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"a"</span><span class="tag">&gt;</span><span class="pln"> Cell A Collapse Example</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"b"</span><span class="tag">&gt;</span><span class="pln"> Cell B Collapse Example</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;/table&gt;</span><span class="pln">
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"two"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;caption&gt;</span><span class="pln">Separate Border Example</span><span class="tag">&lt;/caption&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"a"</span><span class="tag">&gt;</span><span class="pln"> Cell A Separate Example</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"b"</span><span class="tag">&gt;</span><span class="pln"> Cell B Separate Example</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;/table&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>
<h4>The border-spacing Property</h4>
<p>The border-spacing property specifies the distance that separates adjacent cells'. borders. It can take either one or two values; these should be units of length.</p>
<p>If you provide one value, it will applies to both vertical and horizontal borders. Or you can specify two values, in which case, the first refers to the horizontal spacing and the second to the vertical spacing −</p>
<p><b>NOTE</b> − Unfortunately, this property does not work in Netscape 7 or IE 6.</p>
<pre class="result notranslate">&lt;style type="text/css"&gt;
   /* If you provide one value */
   table.example {border-spacing:10px;}
   /* This is how you can provide two values */
   table.example {border-spacing:10px; 15px;}
&lt;/style&gt;
</pre>
<p>Now let's modify the previous example and see the effect −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;style</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/css"</span><span class="tag">&gt;</span><span class="pln">
         table</span><span class="pun">.</span><span class="pln">one </span><span class="pun">{</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">collapse</span><span class="pun">:</span><span class="pln">separate</span><span class="pun">;</span><span class="pln">
            width</span><span class="pun">:</span><span class="lit">400px</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">spacing</span><span class="pun">:</span><span class="lit">10px</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         table</span><span class="pun">.</span><span class="pln">two </span><span class="pun">{</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">collapse</span><span class="pun">:</span><span class="pln">separate</span><span class="pun">;</span><span class="pln">
            width</span><span class="pun">:</span><span class="lit">400px</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">spacing</span><span class="pun">:</span><span class="lit">10px</span><span class="pln"> </span><span class="lit">50px</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"one"</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;caption&gt;</span><span class="pln">Separate Border Example with border-spacing</span><span class="tag">&lt;/caption&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td&gt;</span><span class="pln"> Cell A Collapse Example</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td&gt;</span><span class="pln"> Cell B Collapse Example</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;/table&gt;</span><span class="pln">
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"two"</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;caption&gt;</span><span class="pln">Separate Border Example with border-spacing</span><span class="tag">&lt;/caption&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td&gt;</span><span class="pln"> Cell A Separate Example</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td&gt;</span><span class="pln"> Cell B Separate Example</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;/table&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>
<h4>The caption-side Property</h4>
<p>The caption-side property allows you to specify where the content of a &lt;caption&gt; element should be placed in relationship to the table. The table that follows lists the possible values.</p>
<p>This property can have one of the four values <i>top, bottom, left </i> or <i> right</i>. The following example uses each value.</p>
<p><b>NOTE:</b> These properties may not work with your IE Browser.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;style</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/css"</span><span class="tag">&gt;</span><span class="pln">
         caption</span><span class="pun">.</span><span class="pln">top </span><span class="pun">{</span><span class="pln">caption</span><span class="pun">-</span><span class="pln">side</span><span class="pun">:</span><span class="pln">top</span><span class="pun">}</span><span class="pln">
         caption</span><span class="pun">.</span><span class="pln">bottom </span><span class="pun">{</span><span class="pln">caption</span><span class="pun">-</span><span class="pln">side</span><span class="pun">:</span><span class="pln">bottom</span><span class="pun">}</span><span class="pln">
         caption</span><span class="pun">.</span><span class="pln">left </span><span class="pun">{</span><span class="pln">caption</span><span class="pun">-</span><span class="pln">side</span><span class="pun">:</span><span class="pln">left</span><span class="pun">}</span><span class="pln">
         caption</span><span class="pun">.</span><span class="pln">right </span><span class="pun">{</span><span class="pln">caption</span><span class="pun">-</span><span class="pln">side</span><span class="pun">:</span><span class="pln">right</span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">400px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;caption</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"top"</span><span class="tag">&gt;</span><span class="pln">
         This caption will appear at the top
         </span><span class="tag">&lt;/caption&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln"> Cell A</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln"> Cell B</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;/table&gt;</span><span class="pln">
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">400px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;caption</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"bottom"</span><span class="tag">&gt;</span><span class="pln">
         This caption will appear at the bottom
         </span><span class="tag">&lt;/caption&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln"> Cell A</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln"> Cell B</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;/table&gt;</span><span class="pln">
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">400px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;caption</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"left"</span><span class="tag">&gt;</span><span class="pln">
         This caption will appear at the left
         </span><span class="tag">&lt;/caption&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln"> Cell A</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln"> Cell B</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;/table&gt;</span><span class="pln">
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">width</span><span class="pun">:</span><span class="lit">400px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;caption</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"right"</span><span class="tag">&gt;</span><span class="pln">
         This caption will appear at the right
         </span><span class="tag">&lt;/caption&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln"> Cell A</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;tr&gt;&lt;td</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln"> Cell B</span><span class="tag">&lt;/td&gt;&lt;/tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;/table&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>
<h4>The empty-cells Property</h4>
<p>The empty-cells property indicates whether a cell without any content should have a border displayed.</p>
<p>This property can have one of the three values - <i>show, hide</i> or <i>inherit</i>.</p>
<p>Here is the empty-cells property used to hide borders of empty cells in the &lt;table&gt; element.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;style</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/css"</span><span class="tag">&gt;</span><span class="pln">
         table</span><span class="pun">.</span><span class="pln">empty</span><span class="pun">{</span><span class="pln">
            width</span><span class="pun">:</span><span class="lit">350px</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">collapse</span><span class="pun">:</span><span class="pln">separate</span><span class="pun">;</span><span class="pln">
            empty</span><span class="pun">-</span><span class="pln">cells</span><span class="pun">:</span><span class="pln">hide</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         td</span><span class="pun">.</span><span class="pln">empty</span><span class="pun">{</span><span class="pln">
            padding</span><span class="pun">:</span><span class="lit">5px</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">solid</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">1px</span><span class="pun">;</span><span class="pln">
            border</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="lit">999999</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"empty"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;th&gt;&lt;/th&gt;</span><span class="pln">
         </span><span class="tag">&lt;th&gt;</span><span class="pln">Title one</span><span class="tag">&lt;/th&gt;</span><span class="pln">
         </span><span class="tag">&lt;th&gt;</span><span class="pln">Title two</span><span class="tag">&lt;/th&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;th&gt;</span><span class="pln">Row Title</span><span class="tag">&lt;/th&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"empty"</span><span class="tag">&gt;</span><span class="pln">value</span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"empty"</span><span class="tag">&gt;</span><span class="pln">value</span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;th&gt;</span><span class="pln">Row Title</span><span class="tag">&lt;/th&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"empty"</span><span class="tag">&gt;</span><span class="pln">value</span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"empty"</span><span class="tag">&gt;&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;/table&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>
<h4>The table-layout Property</h4>
<p>The table-layout property is supposed to help you control how a browser should render or lay out a table.</p>
<p>This property can have one of the three values: <i>fixed, auto</i> or <i>inherit</i>. </p>
<p>The following example shows the difference between these properties.</p>
<p><b>NOTE</b> − This property is not supported by many browsers so do not rely on this property.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;style</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/css"</span><span class="tag">&gt;</span><span class="pln">
         table</span><span class="pun">.</span><span class="kwd">auto</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            table</span><span class="pun">-</span><span class="pln">layout</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">auto</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         table</span><span class="pun">.</span><span class="kwd">fixed</span><span class="pun">{</span><span class="pln">
            table</span><span class="pun">-</span><span class="pln">layout</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">fixed</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"auto"</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100%"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"20%"</span><span class="tag">&gt;</span><span class="pln">1000000000000000000000000000</span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"40%"</span><span class="tag">&gt;</span><span class="pln">10000000</span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"40%"</span><span class="tag">&gt;</span><span class="pln">100</span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;/table&gt;</span><span class="pln">
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"fixed"</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"1"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100%"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"20%"</span><span class="tag">&gt;</span><span class="pln">1000000000000000000000000000</span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"40%"</span><span class="tag">&gt;</span><span class="pln">10000000</span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;td</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"40%"</span><span class="tag">&gt;</span><span class="pln">100</span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
      </span><span class="tag">&lt;/table&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="45_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="47_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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