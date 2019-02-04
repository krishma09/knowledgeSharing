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
	$sid=144;
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



<p>This chapter covers the use age of Bootstrap button with examples. Anything that is given a class of <b>.btn</b> will inherit the default look of a gray button with rounded corners. However, Bootstrap provides some options to style buttons, which are summarized in the following table −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:20%">Class</th>
<th>Description</th>
</tr>
<tr>
<td>btn</td>
<td>Default/ Standard button.</td>
</tr>
<tr>
<td>btn-primary</td>
<td>Provides extra visual weight and identifies the primary action in a set of buttons.</td>
</tr>
<tr>
<td>btn-success</td>
<td>Indicates a successful or positive action.</td>
</tr>
<tr>
<td>btn-info</td>
<td>Contextual button for informational alert messages.</td>
</tr>
<tr>
<td>btn-warning</td>
<td>Indicates caution should be taken with this action.</td>
</tr>
<tr>
<td>btn-danger</td>
<td>Indicates a dangerous or potentially negative action.</td>
</tr>
<tr>
<td>btn-link</td>
<td>Deemphasize a button by making it look like a link while maintaining button behavior.</td>
</tr>
</tbody></table>
<p>The following example demonstrates all the above button classes −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">&lt;!-- Standard button --&gt;</span><span class="pln">
</span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Default Button</span><span class="tag">&lt;/button&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Provides extra visual weight and identifies the primary action in a set of buttons --&gt;</span><span class="pln">
</span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-primary"</span><span class="tag">&gt;</span><span class="pln">Primary Button</span><span class="tag">&lt;/button&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Indicates a successful or positive action --&gt;</span><span class="pln">
</span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-success"</span><span class="tag">&gt;</span><span class="pln">Success Button</span><span class="tag">&lt;/button&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Contextual button for informational alert messages --&gt;</span><span class="pln">
</span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-info"</span><span class="tag">&gt;</span><span class="pln">Info Button</span><span class="tag">&lt;/button&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Indicates caution should be taken with this action --&gt;</span><span class="pln">
</span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-warning"</span><span class="tag">&gt;</span><span class="pln">Warning Button</span><span class="tag">&lt;/button&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Indicates a dangerous or potentially negative action --&gt;</span><span class="pln">
</span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-danger"</span><span class="tag">&gt;</span><span class="pln">Danger Button</span><span class="tag">&lt;/button&gt;</span><span class="pln">

</span><span class="com">&lt;!-- Deemphasize a button by making it look like a link while maintaining button behavior --&gt;</span><span class="pln">
</span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-link"</span><span class="tag">&gt;</span><span class="pln">Link Button</span><span class="tag">&lt;/button&gt;</span></pre>
<h4>Button Size</h4>
<p>The following table summarizes the classes used to get buttons of various sizes −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:20%">Class</th>
<th>Description</th>
</tr>
<tr>
<td>.btn-lg</td>
<td>This makes the button size large.</td>
</tr>
<tr>
<td>.btn-sm</td>
<td>This makes the button size small.</td>
</tr>
<tr>
<td>.btn-xs</td>
<td>This makes the button size extra small.</td>
</tr>
<tr>
<td>.btn-block</td>
<td>This creates block level buttons—those that span the full width of a parent.</td>
</tr>
</tbody></table>
<p>The following example demonstrates this −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;p&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-primary btn-lg"</span><span class="tag">&gt;</span><span class="pln">
      Large Primary button
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default btn-lg"</span><span class="tag">&gt;</span><span class="pln">
      Large button
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
</span><span class="tag">&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;p&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-primary"</span><span class="tag">&gt;</span><span class="pln">
      Default size Primary button
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">
      Default size button
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
</span><span class="tag">&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;p&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-primary btn-sm"</span><span class="tag">&gt;</span><span class="pln">
      Small Primary button
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default btn-sm"</span><span class="tag">&gt;</span><span class="pln">
      Small button
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
</span><span class="tag">&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;p&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-primary btn-xs"</span><span class="tag">&gt;</span><span class="pln">
      Extra small Primary button
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default btn-xs"</span><span class="tag">&gt;</span><span class="pln">
      Extra small button
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
</span><span class="tag">&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;p&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-primary btn-lg btn-block"</span><span class="tag">&gt;</span><span class="pln">
      Block level Primary button
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default btn-lg btn-block"</span><span class="tag">&gt;</span><span class="pln">
      Block level button
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
</span><span class="tag">&lt;/p&gt;</span></pre>
<h4>Button State</h4>

<p>Bootstrap provides classes which allow you to change the state of buttons as active, disabled etc. each of which are discussed in the following sections.</p>
<h5>Active State</h5>
<p>Buttons will appear pressed (with a darker background, darker border, and inset shadow) when active. The following table summarizes classes used to make button elements and anchor elements active −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:20%">Element</th>
<th>Class</th>
</tr>
<tr>
<td>Button element</td>
<td>Use <b>.active</b> class to show that it is activated.</td>
</tr>
<tr>
<td>Anchor element</td>
<td>Use <b>.active</b> class to &lt;a&gt; buttons  to show that it is activated.</td>
</tr>
</tbody></table>
<p>The following example demonstrates this −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;p&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default btn-lg "</span><span class="tag">&gt;</span><span class="pln">
      Default Button
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default btn-lg active"</span><span class="tag">&gt;</span><span class="pln">
      Active Button
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
</span><span class="tag">&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;p&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-primary btn-lg"</span><span class="tag">&gt;</span><span class="pln">
      Primary button
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-primary btn-lg active"</span><span class="tag">&gt;</span><span class="pln">
      Active Primary button
   </span><span class="tag">&lt;/button&gt;</span><span class="pln">
</span><span class="tag">&lt;/p&gt;</span></pre>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="143_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="145_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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