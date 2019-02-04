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
	$sid=148;
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



<p>This chapter will discuss about how to add dropdown menu to buttons using Bootstrap classes. To add a dropdown to a button, simply wrap the button and dropdown menu in a <b>.btn-group</b>. You can also use &lt;span class = "caret"&gt;&lt;/span&gt; to act as an indicator that the button is a dropdown.</p>
<p>The following example demonstrates a basic single button dropdowns −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
      Default 
      </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"menu"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Another action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Something else here</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-primary dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
      Primary 
      </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"menu"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Another action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Something else here</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/div&gt;</span></pre>
<h4>Split Button Dropdowns</h4>
<p>Split button dropdowns use the same general style as the dropdown button but add a primary action along with the dropdown. Split buttons have the primary action on the left and a toggle on the right that displays the dropdown.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Default</span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
      </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"sr-only"</span><span class="tag">&gt;</span><span class="pln">Toggle Dropdown</span><span class="tag">&lt;/span&gt;</span><span class="pln">
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"menu"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Another action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Something else here</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-primary"</span><span class="tag">&gt;</span><span class="pln">Primary</span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-primary dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
      </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"sr-only"</span><span class="tag">&gt;</span><span class="pln">Toggle Dropdown</span><span class="tag">&lt;/span&gt;</span><span class="pln">
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"menu"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Another action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Something else here</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
<h4>Button Dropdown Size</h4>
<p>You can use the dropdowns with any button size − <b>.btn-large, .btn-sm, </b>or <b>.btn-xs</b>.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default dropdown-toggle btn-lg"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
      Default
      </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"menu"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Another action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Something else here</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-primary dropdown-toggle btn-sm"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
      Primary
      </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"menu"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Another action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Something else here</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-success dropdown-toggle btn-xs"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
      Success
      </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"menu"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Another action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Something else here</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
   </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/div&gt;</span></pre>
<h4>Dropup Variation</h4>
<p>Menus can also be built to drop up rather than down. To achieve this, simply add <b>.dropup</b> to the parent <b>.btn-group</b> container.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"row"</span><span class="pln"> </span><span class="atn">style</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"</span><span class="pln">margin</span><span class="pun">-</span><span class="pln">left</span><span class="pun">:</span><span class="lit">50px</span><span class="pun">;</span><span class="pln"> margin</span><span class="pun">-</span><span class="pln">top</span><span class="pun">:</span><span class="lit">200px</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group dropup"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
         Default
         </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
      </span><span class="tag">&lt;/button&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"menu"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Another action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Something else here</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group dropup"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-primary dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
         Primary
         </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
      </span><span class="tag">&lt;/button&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"menu"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Another action</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Something else here</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/div&gt;</span></pre>












</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="147_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="149_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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