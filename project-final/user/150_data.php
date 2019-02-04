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
	$sid=150;
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



<p>This chapter explains about one more feature Bootstrap supports, the Input Groups. Input groups are extended <a href="/bootstrap/bootstrap_forms.htm">Form Controls</a>. Using input groups you can easily prepend and append text or buttons to the text-based  inputs.</p>
<p>By adding prepended and appended content to an input field, you can add common elements to the user’s input. For example, you can add the dollar symbol, the @ for a Twitter username, or anything else that might be common for your application interface.</p>
<p>To prepend or append elements to a <b>.form-control</b>−</p>
<ul class="list">
<li><p>Wrap it in a &lt;div&gt; with class <b>.input-group</b></p></li>
<li><p>As a next step, within that same &lt;div&gt; , place your extra content inside a &lt;span&gt; with class <b>.input-group-addon</b>.</p></li>
<li><p>Now place this &lt;span&gt; either before or after the &lt;input&gt; element.</p></li>
</ul>
<blockquote>For cross browser compatibility, avoid using &lt;select&gt; elements here as they cannot be fully styled in WebKit browsers. Also do not apply input group classes directly to form groups. An input group is an isolated component.</blockquote>
<h4>Basic Input Group</h4>
<p>The following example demonstrates basic input group −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">padding</span><span class="pun">:</span><span class="pln"> </span><span class="lit">100px</span><span class="pln"> </span><span class="lit">100px</span><span class="pln"> </span><span class="lit">10px</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"bs-example bs-example-form"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group-addon"</span><span class="tag">&gt;</span><span class="pln">@</span><span class="tag">&lt;/span&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"twitterhandle"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;br&gt;</span><span class="pln">

      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group-addon"</span><span class="tag">&gt;</span><span class="pln">.00</span><span class="tag">&lt;/span&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;br&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group-addon"</span><span class="tag">&gt;</span><span class="pln">$</span><span class="tag">&lt;/span&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="atv">" form-control"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group-addon"</span><span class="tag">&gt;</span><span class="pln">.00</span><span class="tag">&lt;/span&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/div&gt;</span></pre>
<h4>Input Group Sizing</h4>
<p>You can change the size of the input groups, by adding the relative form sizing classes like <b>.input-group-lg, input-group-sm, input-group-xs</b> to the <b>.input-group</b> itself. The contents within will automatically resize.</p>
<p>Following examples demonstrates this −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">padding</span><span class="pun">:</span><span class="pln"> </span><span class="lit">100px</span><span class="pln"> </span><span class="lit">100px</span><span class="pln"> </span><span class="lit">10px</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"bs-example bs-example-form"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group input-group-lg"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group-addon"</span><span class="tag">&gt;</span><span class="pln">@</span><span class="tag">&lt;/span&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Twitterhandle"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;br&gt;</span><span class="pln">

      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group-addon"</span><span class="tag">&gt;</span><span class="pln">@</span><span class="tag">&lt;/span&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Twitterhandle"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;br&gt;</span><span class="pln">

      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group input-group-sm"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group-addon"</span><span class="tag">&gt;</span><span class="pln">@</span><span class="tag">&lt;/span&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Twitterhandle"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/div&gt;</span></pre>
<h4>Checkboxes and Radio Addons</h4>
<p>You can preappend or append radio buttons and checkboxes instead of text as demonstrated in the following example −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">padding</span><span class="pun">:</span><span class="pln"> </span><span class="lit">100px</span><span class="pln"> </span><span class="lit">100px</span><span class="pln"> </span><span class="lit">10px</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"bs-example bs-example-form"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"row"</span><span class="tag">&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"col-lg-6"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group"</span><span class="tag">&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group-addon"</span><span class="tag">&gt;</span><span class="pln">
                  </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;/span&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /input-group --&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /.col-lg-6 --&gt;</span><span class="tag">&lt;br&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"col-lg-6"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group"</span><span class="tag">&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group-addon"</span><span class="tag">&gt;</span><span class="pln">
                  </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"radio"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;/span&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /input-group --&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /.col-lg-6 --&gt;</span><span class="pln">
         
      </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /.row --&gt;</span><span class="pln">
   </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/div&gt;</span></pre>
<h4>Button Addons</h4>
<p>You can even preappend or append buttons in input groups. Instead of <b>.input-group-addon</b> class, you'll need to use class <b>.input-group-btn</b> to wrap the buttons. This is required due to the default browser styles that cannot be overridden. Following examples demonstrates this −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">padding</span><span class="pun">:</span><span class="pln"> </span><span class="lit">100px</span><span class="pln"> </span><span class="lit">100px</span><span class="pln"> </span><span class="lit">10px</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"bs-example bs-example-form"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"row"</span><span class="tag">&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"col-lg-6"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group"</span><span class="tag">&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group-btn"</span><span class="tag">&gt;</span><span class="pln">
                  </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="tag">&gt;</span><span class="pln">
                     Go!
                  </span><span class="tag">&lt;/button&gt;</span><span class="pln">
               </span><span class="tag">&lt;/span&gt;</span><span class="pln">
					
               </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="tag">&gt;</span><span class="pln">
               
            </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /input-group --&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /.col-lg-6 --&gt;</span><span class="tag">&lt;br&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"col-lg-6"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="tag">&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group-btn"</span><span class="tag">&gt;</span><span class="pln">
                  </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="tag">&gt;</span><span class="pln">
                     Go!
                  </span><span class="tag">&lt;/button&gt;</span><span class="pln">
               </span><span class="tag">&lt;/span&gt;</span><span class="pln">
               
            </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /input-group --&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /.col-lg-6 --&gt;</span><span class="pln">
         
      </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /.row --&gt;</span><span class="pln">
   </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/div&gt;</span></pre>
<h4>Buttons with Dropdowns</h4>
<p>Adding buttons with dropdown menus in input groups can be done by simply wrapping the button and dropdown menu in a <b>.input-group-btn</b> class as demonstrated in the following example −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">padding</span><span class="pun">:</span><span class="pln"> </span><span class="lit">100px</span><span class="pln"> </span><span class="lit">100px</span><span class="pln"> </span><span class="lit">10px</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"bs-example bs-example-form"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"row"</span><span class="tag">&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"col-lg-6"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group"</span><span class="tag">&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group-btn"</span><span class="tag">&gt;</span><span class="pln">
                  </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default dropdown-toggle"</span><span class="pln"> 
                     </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
                     DropdownMenu 
                     </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/button&gt;</span><span class="pln">
                  
                  </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
                     </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Another action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
                     </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Something else here</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
                     
                     </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
                     </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
               </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /btn-group --&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /input-group --&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /.col-lg-6 --&gt;</span><span class="tag">&lt;br&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"col-lg-6"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group"</span><span class="tag">&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"input-group-btn"</span><span class="tag">&gt;</span><span class="pln">
                  
                  </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default dropdown-toggle"</span><span class="pln"> 
                     </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
                     DropdownMenu 
                     </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/button&gt;</span><span class="pln">
                  
                  </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu pull-right"</span><span class="tag">&gt;</span><span class="pln">
                     </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
                     </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Another action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
                     </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Something else here</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
                     
                     </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
                     </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
                  </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
               </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /btn-group --&gt;</span><span class="pln">
               
            </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /input-group --&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /.col-lg-6 --&gt;</span><span class="pln">
         
      </span><span class="tag">&lt;/div&gt;</span><span class="com">&lt;!-- /.row --&gt;</span><span class="pln">
   </span><span class="tag">&lt;/form&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/div&gt;</span></pre>











</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="149_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="151_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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