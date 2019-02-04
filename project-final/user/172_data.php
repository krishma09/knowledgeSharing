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
<title>JQuery Tutorials | knowledge.com</title>
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
	$sid=172;
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




<p>JQuery provides methods to manipulate DOM in efficient way. You do not need to write big code to modify the value of any element's attribute or to extract HTML code from a paragraph or division.</p>
<p>JQuery provides methods such as .attr(), .html(), and .val() which act as getters, retrieving information from DOM elements for later use.</p>
<h4>Content Manipulation</h4>
<p>The <b>html( )</b> method gets the html contents (innerHTML) of the first matched element.</p>
<p>Here is the syntax for the method −</p>
<pre class="result notranslate"><i>selector</i>.html( )
</pre>
<h5>Example</h5>
<p>Following is an example which makes use of .html() and .text(val) methods. Here .html() retrieves HTML content from the object and then .text( val ) method sets value of the object using passed parameter −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"div"</span><span class="pun">).</span><span class="pln">click</span><span class="pun">(</span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               </span><span class="kwd">var</span><span class="pln"> content </span><span class="pun">=</span><span class="pln"> $</span><span class="pun">(</span><span class="kwd">this</span><span class="pun">).</span><span class="pln">html</span><span class="pun">();</span><span class="pln">
               $</span><span class="pun">(</span><span class="str">"#result"</span><span class="pun">).</span><span class="pln">text</span><span class="pun">(</span><span class="pln"> content </span><span class="pun">);</span><span class="pln">
            </span><span class="pun">});</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         </span><span class="com">#division{ margin:10px;padding:12px; border:2px solid #666; width:60px;}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Click on the square below:</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"result"</span><span class="tag">&gt;</span><span class="pln"> </span><span class="tag">&lt;/span&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"division"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">blue</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
         This is Blue Square!!
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>

<h4>DOM Element Replacement</h4>
<p>You can replace a complete DOM element with the specified HTML or DOM elements. The <b>replaceWith( content )</b> method serves this purpose very well.</p>
<p>Here is the syntax for the method −</p>
<pre class="result notranslate"><i>selector</i>.replaceWith( content )
</pre>
<p>Here content is what you want to have instead of original element. This could be HTML or simple text.</p>
<h5>Example</h5>
<p>Following is an example which would replace division element with "&lt;h1&gt;JQuery is Great &lt;/h1&gt;" −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"div"</span><span class="pun">).</span><span class="pln">click</span><span class="pun">(</span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $</span><span class="pun">(</span><span class="kwd">this</span><span class="pun">).</span><span class="pln">replaceWith</span><span class="pun">(</span><span class="str">"&lt;h1&gt;JQuery is Great&lt;/h1&gt;"</span><span class="pun">);</span><span class="pln">
            </span><span class="pun">});</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         </span><span class="com">#division{ margin:10px;padding:12px; border:2px solid #666; width:60px;}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Click on the square below:</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"result"</span><span class="tag">&gt;</span><span class="pln"> </span><span class="tag">&lt;/span&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"division"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">blue</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
         This is Blue Square!!
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>

<h4>Removing DOM Elements</h4>
<p>There may be a situation when you would like to remove one or more DOM elements from the document. JQuery provides two methods to handle the situation.</p>
<p>The <b>empty( )</b> method remove all child nodes from the set of matched elements where as the method <b>remove( expr )</b> method removes all matched elements from the DOM.</p>
<p>Here is the syntax for the method −</p>
<pre class="result notranslate"><i>selector</i>.remove( [ expr ])

or 

<i>selector</i>.empty( )
</pre>
<p>You can pass optional parameter <i>expr</i> to filter the set of elements to be removed.</p>
<h5>Example</h5>
<p>Following is an example  where elements are being removed as soon as they are clicked −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"div"</span><span class="pun">).</span><span class="pln">click</span><span class="pun">(</span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $</span><span class="pun">(</span><span class="kwd">this</span><span class="pun">).</span><span class="pln">remove</span><span class="pun">(</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
            </span><span class="pun">});</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         </span><span class="pun">.</span><span class="pln">div</span><span class="pun">{</span><span class="pln"> margin</span><span class="pun">:</span><span class="lit">10px</span><span class="pun">;</span><span class="pln">padding</span><span class="pun">:</span><span class="lit">12px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">2px</span><span class="pln"> solid </span><span class="com">#666; width:60px;}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Click on any square below:</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"result"</span><span class="tag">&gt;</span><span class="pln"> </span><span class="tag">&lt;/span&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"div"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">blue</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"div"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">green</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"div"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">red</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;&lt;/div&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>

<h4>Inserting DOM elements</h4>
<p>There may be a situation when you would like to insert new one or more DOM elements in your existing document. JQuery provides various methods to insert elements at various locations.</p>
<p>The <b>after( content )</b> method insert content after each of the matched elements where as the method <b>before( content )</b> method inserts content before each of the matched elements.</p>
<p>Here is the syntax for the method −</p>
<pre class="result notranslate"><i>selector</i>.after( content )

or

<i>selector</i>.before( content )
</pre>
<p>Here content is what you want to insert. This could be HTML or simple text.</p>
<h5>Example</h5>
<p>Following is an example where &lt;div&gt; elements are being inserted just before the clicked element −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"div"</span><span class="pun">).</span><span class="pln">click</span><span class="pun">(</span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
               $</span><span class="pun">(</span><span class="kwd">this</span><span class="pun">).</span><span class="pln">before</span><span class="pun">(</span><span class="str">'&lt;div class="div"&gt;&lt;/div&gt;'</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
            </span><span class="pun">});</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         </span><span class="pun">.</span><span class="pln">div</span><span class="pun">{</span><span class="pln"> margin</span><span class="pun">:</span><span class="lit">10px</span><span class="pun">;</span><span class="pln">padding</span><span class="pun">:</span><span class="lit">12px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">2px</span><span class="pln"> solid </span><span class="com">#666; width:60px;}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Click on any square below:</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"result"</span><span class="tag">&gt;</span><span class="pln"> </span><span class="tag">&lt;/span&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"div"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">blue</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"div"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">green</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"div"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">background</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">red</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;&lt;/div&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>DOM Manipulation Methods</h4>
<p>Following table lists down all the methods which you can use to manipulate DOM elements −</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Method &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><a href="/jquery/dom-after.htm">after( content )</a>
<p>Insert content after each of the matched elements.</p></td>
</tr>
<tr>
<td>2</td>
<td>
<a href="/jquery/dom-append.htm">append( content )</a>
<p>Append content to the inside of every matched element.</p></td>
</tr>
<tr>
<td>3</td>
<td><a href="/jquery/dom-appendto.htm">appendTo( selector )</a>
<p>Append all of the matched elements to another, specified, set of elements.</p></td>
</tr>
<tr>
<td>4</td>
<td><a href="/jquery/dom-before.htm">before( content )</a>
<p>Insert content before each of the matched elements.</p></td>
</tr>
<tr>
<td>5</td>
<td><a href="/jquery/dom-clone-bool.htm">clone( bool )</a>
<p>Clone matched DOM Elements, and all their event handlers, and select the clones.</p></td>
</tr>
<tr>
<td>6</td>
<td><a href="/jquery/dom-clone.htm">clone( )</a>
<p>Clone matched DOM Elements and select the clones.</p></td>
</tr>
<tr>
<td>7</td>
<td><a href="/jquery/dom-empty.htm">empty( )</a>
<p>Remove all child nodes from the set of matched elements.</p></td>
</tr>
<tr>
<td>8</td>
<td><a href="/jquery/dom-html-val.htm">html( val )</a>
<p>Set the html contents of every matched element.</p></td>
</tr>
<tr>
<td>9</td>
<td><a href="/jquery/dom-html.htm">html( )</a>
<p>Get the html contents (innerHTML) of the first matched element.</p></td>
</tr>
<tr>
<td>10</td>
<td><a href="/jquery/dom-insertafter.htm">insertAfter( selector )</a>
<p>Insert all of the matched elements after another, specified, set of elements.</p></td>
</tr>
<tr>
<td>11</td>
<td><a href="/jquery/dom-insertbefore.htm">insertBefore( selector )</a>
<p>Insert all of the matched elements before another, specified, set of elements.</p></td>
</tr>
<tr>
<td>12</td>
<td><a href="/jquery/dom-prepend.htm">prepend( content )</a>
<p>Prepend content to the inside of every matched element.</p></td>
</tr>
<tr>
<td>13</td>
<td><a href="/jquery/dom-prependto.htm">prependTo( selector )</a>
<p>Prepend all of the matched elements to another, specified, set of elements.</p></td>
</tr>
<tr>
<td>14</td>
<td><a href="/jquery/dom-remove-expr.htm">remove( expr )</a>
<p>Removes all matched elements from the DOM.</p></td>
</tr>
<tr>
<td>15</td>
<td><a href="/jquery/dom-replaceall.htm">replaceAll( selector )</a>
<p>Replaces the elements matched by the specified selector with the matched elements.</p></td>
</tr>
<tr>
<td>16</td>
<td><a href="/jquery/dom-replacewith.htm">replaceWith( content )</a>
<p>Replaces all matched elements with the specified HTML or DOM elements.</p></td>
</tr>
<tr>
<td>17</td>
<td><a href="/jquery/dom-text-val.htm">text( val )</a>
<p>Set the text contents of all matched elements.</p></td>
</tr>
<tr>
<td>18</td>
<td><a href="/jquery/dom-text.htm">text( )</a>
<p>Get the combined text contents of all matched elements.</p></td>
</tr>
<tr>
<td>19</td>
<td><a href="/jquery/dom-wrap-elem.htm">wrap( elem )</a>
<p>Wrap each matched element with the specified element.</p></td>
</tr>
<tr>
<td>20</td>
<td><a href="/jquery/dom-wrap-html.htm">wrap( html )</a>
<p>Wrap each matched element with the specified HTML content.</p></td>
</tr>
<tr>
<td>21</td>
<td><a href="/jquery/dom-wrapall-elem.htm">wrapAll( elem )</a>
<p>Wrap all the elements in the matched set into a single wrapper element.</p></td>
</tr>
<tr>
<td>22</td>
<td><a href="/jquery/dom-wrapall-html.htm">wrapAll( html )</a>
<p>Wrap all the elements in the matched set into a single wrapper element.</p></td>
</tr>
<tr>
<td>23</td>
<td><a href="/jquery/dom-wrapinner-elem.htm">wrapInner( elem )</a>
<p>Wrap the inner child contents of each matched element (including text nodes) with a DOM element.</p></td>
</tr>
<tr>
<td>24</td>
<td><a href="/jquery/dom-wrapinner-html.htm">wrapInner( html )</a>
<p>Wrap the inner child contents of each matched element (including text nodes) with an HTML structure.</p></td>
</tr>
</tbody></table>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="171_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="173_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'jquery_header.php'; ?>
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