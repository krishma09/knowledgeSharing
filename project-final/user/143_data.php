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
	$sid=143;
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




<p>In this chapter, we will study how to create forms with ease using Bootstrap. Bootstrap makes it easy with the simple HTML markup and extended classes for different styles of forms. In this chapter we will study how to create forms with ease using Bootstrap.</p>
<h4>Form Layout</h4>
<p>Bootstrap provides you with following types of form layouts −</p>
<ul class="list">
<li>Vertical (default) form</li>
<li>In-line form</li>
<li>Horizontal form</li>
</ul>
<h5>Vertical or Basic Form</h5>
<p>The basic form structure comes with Bootstrap; individual form controls automatically receive some global styling. To create a basic form do the following −</p>
<ul class="list">
<li><p>Add a role <i>form</i> to the parent &lt;form&gt; element.</p></li>
<li><p>Wrap labels and controls in a &lt;div&gt; with class <i>.form-group</i>. This is needed for optimum spacing.</p></li>
<li><p>Add a class of <i>.form-control</i> to all textual &lt;input&gt;, &lt;textarea&gt;, and &lt;select&gt; elements.</p></li>
</ul>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form"</span><span class="tag">&gt;</span><span class="pln">

   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"name"</span><span class="tag">&gt;</span><span class="pln">Name</span><span class="tag">&lt;/label&gt;</span><span class="pln">
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"name"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Enter Name"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"inputfile"</span><span class="tag">&gt;</span><span class="pln">File input</span><span class="tag">&lt;/label&gt;</span><span class="pln">
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"file"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"inputfile"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"help-block"</span><span class="tag">&gt;</span><span class="pln">Example block-level help text here.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;label&gt;&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox"</span><span class="tag">&gt;</span><span class="pln"> Check me out</span><span class="tag">&lt;/label&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Submit</span><span class="tag">&lt;/button&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span></pre> 
<h5>Inline Form</h5>
<p>To create a form where all of the elements are inline, left aligned and labels are alongside, add the class <i>.form-inline</i> to the &lt;form&gt; tag.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-inline"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"sr-only"</span><span class="pln"> </span><span class="atn">for</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"name"</span><span class="tag">&gt;</span><span class="pln">Name</span><span class="tag">&lt;/label&gt;</span><span class="pln">
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"name"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Enter Name"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"sr-only"</span><span class="pln"> </span><span class="atn">for</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"inputfile"</span><span class="tag">&gt;</span><span class="pln">File input</span><span class="tag">&lt;/label&gt;</span><span class="pln">
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"file"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"inputfile"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;label&gt;&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox"</span><span class="tag">&gt;</span><span class="pln"> Check me out</span><span class="tag">&lt;/label&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Submit</span><span class="tag">&lt;/button&gt;</span><span class="pln">
</span><span class="tag">&lt;/form&gt;</span></pre>
<h5>Horizontal Form</h5>
<p>Horizontal forms stands apart from the others not only in the amount of markup, but also in the presentation of the form. To create a form that uses the horizontal layout, do the following −</p>
<ul class="list">
<li><p>Add a class of <i>.form-horizontal</i> to the parent &lt;form&gt; element.</p></li>
<li><p>Wrap labels and controls in a &lt;div&gt; with class <i>.form-group</i>.</p></li>
<li><p>Add a class of <i>.control-label</i> to the labels.</p></li>
</ul>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-horizontal"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"firstname"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"col-sm-2 control-label"</span><span class="tag">&gt;</span><span class="pln">First Name</span><span class="tag">&lt;/label&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"col-sm-10"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"firstname"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Enter First Name"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"lastname"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"col-sm-2 control-label"</span><span class="tag">&gt;</span><span class="pln">Last Name</span><span class="tag">&lt;/label&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"col-sm-10"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"lastname"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Enter Last Name"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"col-sm-offset-2 col-sm-10"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;label&gt;&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox"</span><span class="tag">&gt;</span><span class="pln"> Remember me</span><span class="tag">&lt;/label&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"col-sm-offset-2 col-sm-10"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Sign in</span><span class="tag">&lt;/button&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/form&gt;</span></pre>
<h4>Supported Form Controls</h4>
<p>Bootstrap natively supports the most common form controls mainly <i>input, textarea, checkbox, radio, and select.</i></p>
<h5>Inputs</h5>
<p>The most common form text field is the input field. This is where users will enter most of the essential form data. Bootstrap offers support for all native HTML5 input types: <i>text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel,</i> and <i>color</i>. Proper <i>type</i> declaration is required to make <i>Inputs</i> fully styled.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"name"</span><span class="tag">&gt;</span><span class="pln">Label</span><span class="tag">&lt;/label&gt;</span><span class="pln">
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Text input"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
  
</span><span class="tag">&lt;/form&gt;</span></pre>
<h5>Textarea</h5>
<p>The textarea is used when you need multiple lines of input. Change <i>rows</i> attribute as necessary (fewer rows = smaller box, more rows = bigger box).</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"name"</span><span class="tag">&gt;</span><span class="pln">Text Area</span><span class="tag">&lt;/label&gt;</span><span class="pln">
      </span><span class="tag">&lt;textarea</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">rows</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"3"</span><span class="tag">&gt;&lt;/textarea&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/form&gt;</span></pre>
<h5>CheckBoxes and Radio Buttons</h5>
<p>Checkboxes and radio buttons are great when you want users to choose from a list of preset options.</p>
<ul class="list">
<li><p>When building a form, use <i>checkbox</i> if you want the user to select any number of options from a list. Use <i>radio</i> if you want to limit the user to just one selection.</p></li>
<li><p>Use <i>.checkbox-inline</i> or <i>.radio-inline</i> class to a series of checkboxes or radios for controls appear on the same line.</p></li>
</ul>
<p>The following example demonstrates both (default and inline) types −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"name"</span><span class="tag">&gt;</span><span class="pln">Example of Default Checkbox and radio button </span><span class="tag">&lt;/label&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;label&gt;</span><span class="pln">
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">""</span><span class="tag">&gt;</span><span class="pln">Option 1
   </span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;label&gt;</span><span class="pln">
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">""</span><span class="tag">&gt;</span><span class="pln">Option 2
   </span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"radio"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;label&gt;</span><span class="pln">
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"radio"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"optionsRadios"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"optionsRadios1"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"option1"</span><span class="pln"> </span><span class="atn">checked</span><span class="tag">&gt;</span><span class="pln"> Option 1
   </span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"radio"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;label&gt;</span><span class="pln">
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"radio"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"optionsRadios"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"optionsRadios2"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"option2"</span><span class="tag">&gt;</span><span class="pln">
      Option 2 - selecting it will deselect option 1
   </span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">for</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"name"</span><span class="tag">&gt;</span><span class="pln">Example of Inline Checkbox and radio button </span><span class="tag">&lt;/label&gt;</span><span class="pln">

</span><span class="tag">&lt;div&gt;</span><span class="pln">
   </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox-inline"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"inlineCheckbox1"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"option1"</span><span class="tag">&gt;</span><span class="pln"> Option 1
   </span><span class="tag">&lt;/label&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox-inline"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"inlineCheckbox2"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"option2"</span><span class="tag">&gt;</span><span class="pln"> Option 2
   </span><span class="tag">&lt;/label&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox-inline"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"inlineCheckbox3"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"option3"</span><span class="tag">&gt;</span><span class="pln"> Option 3
   </span><span class="tag">&lt;/label&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox-inline"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"radio"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"optionsRadiosinline"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"optionsRadios3"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"option1"</span><span class="pln"> </span><span class="atn">checked</span><span class="tag">&gt;</span><span class="pln"> Option 1
   </span><span class="tag">&lt;/label&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;label</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"checkbox-inline"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"radio"</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"optionsRadiosinline"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"optionsRadios4"</span><span class="pln"> </span><span class="atn">value</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"option2"</span><span class="tag">&gt;</span><span class="pln"> Option 2
   </span><span class="tag">&lt;/label&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="142_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="144_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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