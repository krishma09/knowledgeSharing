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
	$sid=163;
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




<p>This chapter will discuss about Bootstrap panels. Panel components are used when you want to put your DOM component in a box. To get a basic panel, just add class <b>.panel</b> to the &lt;div&gt; element. Also add class <b>.panel-default</b> to this element as shown in the following example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel panel-default"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-body"</span><span class="tag">&gt;</span><span class="pln">
      This is a Basic panel
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
<h4>Panel with Heading</h4>
<p>There are two ways to add panel heading −</p>
<ul class="list">
<li><p>Use <b>.panel-heading</b> class to easily add a heading container to your panel.</p></li>
<li><p>Use any &lt;h1&gt;-&lt;h6&gt; with a <b>.panel-title</b> class to add a pre-styled heading.</p></li>
</ul>
<p>The following example demonstrates both the ways −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel panel-default"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-heading"</span><span class="tag">&gt;</span><span class="pln">
      Panel heading without title
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-body"</span><span class="tag">&gt;</span><span class="pln">
      Panel content
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel panel-default"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-heading"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;h3</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-title"</span><span class="tag">&gt;</span><span class="pln">
         Panel With title
      </span><span class="tag">&lt;/h3&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-body"</span><span class="tag">&gt;</span><span class="pln">
      Panel content
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
<h4>Panel with Footer</h4>
<p>You can add footers to panels, by wrapping  buttons or secondary text in a &lt;div&gt; containing class <b>.panel-footer</b>. The following example demonstrates this.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel panel-default"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-body"</span><span class="tag">&gt;</span><span class="pln">
      This is a Basic panel
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-footer"</span><span class="tag">&gt;</span><span class="pln">Panel footer</span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
<h4>Panel Contextual Alternatives</h4>
<p>Use contextual state classes such as, <b>panel-primary, panel-success, panel-info, panel-warning, panel-danger</b>, to make a panel more meaningful to a particular context.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel panel-primary"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-heading"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;h3</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-title"</span><span class="tag">&gt;</span><span class="pln">Panel title</span><span class="tag">&lt;/h3&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-body"</span><span class="tag">&gt;</span><span class="pln">
      This is a Basic panel
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel panel-success"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-heading"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;h3</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-title"</span><span class="tag">&gt;</span><span class="pln">Panel title</span><span class="tag">&lt;/h3&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-body"</span><span class="tag">&gt;</span><span class="pln">
      This is a Basic panel
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel panel-info"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-heading"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;h3</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-title"</span><span class="tag">&gt;</span><span class="pln">Panel title</span><span class="tag">&lt;/h3&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-body"</span><span class="tag">&gt;</span><span class="pln">
      This is a Basic panel
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel panel-warning"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-heading"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;h3</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-title"</span><span class="tag">&gt;</span><span class="pln">Panel title</span><span class="tag">&lt;/h3&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-body"</span><span class="tag">&gt;</span><span class="pln">
      This is a Basic panel
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel panel-danger"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-heading"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;h3</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-title"</span><span class="tag">&gt;</span><span class="pln">Panel title</span><span class="tag">&lt;/h3&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-body"</span><span class="tag">&gt;</span><span class="pln">
      This is a Basic panel
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
<h4>Panel with Tables</h4>
<p>To get a non-bordered table within a panel, use the class <b>.table</b> within the panel. Suppose there is a &lt;div&gt; containing <b>.panel-body</b>, we add an extra border to the top of the table for separation. If there is no &lt;div&gt; containing <b>.panel-body</b>, then the  component moves from panel header to table without interruption.</p>
<p>The following example demonstrates this −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel panel-default"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-heading"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;h3</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-title"</span><span class="tag">&gt;</span><span class="pln">Panel title</span><span class="tag">&lt;/h3&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-body"</span><span class="tag">&gt;</span><span class="pln">
      This is a Basic panel
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"table"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;th&gt;</span><span class="pln">Product</span><span class="tag">&lt;/th&gt;</span><span class="pln">
         </span><span class="tag">&lt;th&gt;</span><span class="pln">Price </span><span class="tag">&lt;/th&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td&gt;</span><span class="pln">Product A</span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;td&gt;</span><span class="pln">200</span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td&gt;</span><span class="pln">Product B</span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;td&gt;</span><span class="pln">400</span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
   </span><span class="tag">&lt;/table&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel panel-default"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-heading"</span><span class="tag">&gt;</span><span class="pln">Panel Heading</span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;table</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"table"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;th&gt;</span><span class="pln">Product</span><span class="tag">&lt;/th&gt;</span><span class="pln">
         </span><span class="tag">&lt;th&gt;</span><span class="pln">Price </span><span class="tag">&lt;/th&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td&gt;</span><span class="pln">Product A</span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;td&gt;</span><span class="pln">200</span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;tr&gt;</span><span class="pln">
         </span><span class="tag">&lt;td&gt;</span><span class="pln">Product B</span><span class="tag">&lt;/td&gt;</span><span class="pln">
         </span><span class="tag">&lt;td&gt;</span><span class="pln">400</span><span class="tag">&lt;/td&gt;</span><span class="pln">
      </span><span class="tag">&lt;/tr&gt;</span><span class="pln">
   </span><span class="tag">&lt;/table&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/div&gt;</span></pre>
<h4>Panel with List groups</h4>
<p>You can include list groups within any panel. Create a panel by adding class <b>.panel</b> to the &lt;div&gt; element. Also add class <b>.panel-default</b> to this element. Now within this panel include your list groups. You can learn to create a list group from chapter <a href="/bootstrap/bootstrap_list_group.htm">List Groups</a>.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel panel-default"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="atv">"panel-heading"</span><span class="tag">&gt;</span><span class="pln">Panel heading</span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"panel-body"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;p&gt;</span><span class="pln">This is a Basic panel content. This is a Basic panel content.
         This is a Basic panel content. This is a Basic panel content.
         This is a Basic panel content. This is a Basic panel content.
         This is a Basic panel content.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"list-group"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"list-group-item"</span><span class="tag">&gt;</span><span class="pln">Free Domain Name Registration</span><span class="tag">&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"list-group-item"</span><span class="tag">&gt;</span><span class="pln">Free Window Space hosting</span><span class="tag">&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"list-group-item"</span><span class="tag">&gt;</span><span class="pln">Number of Images</span><span class="tag">&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"list-group-item"</span><span class="tag">&gt;</span><span class="pln">24*7 support</span><span class="tag">&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"list-group-item"</span><span class="tag">&gt;</span><span class="pln">Renewal cost per year</span><span class="tag">&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ul&gt;</span><span class="pln">

</span><span class="tag">&lt;/div&gt;</span></pre>









</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="162_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="164_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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