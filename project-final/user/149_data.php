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
	$sid=149;
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




<p>Button groups allow multiple buttons to be stacked together on a single line. This is useful when you want to place items like alignment buttons together. You can add on optional JavaScript radio and checkbox style behavior with <a href="/bootstrap/bootstrap_button_plugin.htm">Bootstrap Button Plugin</a>.</p>
<p>Following table summarizes the important classes Bootstrap provides to use button groups −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="30%">Class</th>
<th>Description</th>
<th>Code Sample</th>
</tr>
<tr>
<td>.btn-group</td>
<td>This class is used for a basic button group. Wrap a series of buttons with class <b>.btn</b> in <b>.btn-group</b>.</td>
<td>
<pre class="prettyprint notranslate">&lt;div class = "btn-group"&gt;
   &lt;button type = "button" class = "btn btn-default"&gt;Button1&lt;/button&gt;
   &lt;button type = "button" class = "btn btn-default"&gt;Button2&lt;/button&gt;
&lt;/div&gt;
</pre>
</td>
</tr>
<tr>
<td>.btn-toolbar</td>
<td>This helps to combine sets of &lt;div class = "btn-group"&gt; into a &lt;div class = "btn-toolbar"&gt; for more complex components.</td>
<td>
<pre class="prettyprint notranslate">&lt;div class = "btn-toolbar" role = "toolbar"&gt;
   &lt;div class = "btn-group"&gt;...&lt;/div&gt;
   &lt;div class = "btn-group"&gt;...&lt;/div&gt;
&lt;/div&gt;</pre>
</td>
</tr>
<tr>
<td>.btn-group-lg, .btn-group-sm, .btn-group-xs</td>
<td>These classes can be applied to button group instead of resizing each button.</td>
<td>
<pre class="prettyprint notranslate">&lt;div class = "btn-group btn-group-lg"&gt;...&lt;/div&gt;
&lt;div class = "btn-group btn-group-sm"&gt;...&lt;/div&gt;
&lt;div class = "btn-group btn-group-xs"&gt;...&lt;/div&gt;
</pre>
</td>
</tr>
<tr>
<td>.btn-group-vertical</td>
<td>This class make a set of buttons appear vertically stacked rather than horizontally.</td>
<td>
<pre class="prettyprint notranslate">&lt;div class = "btn-group-vertical"&gt;
   ...
&lt;/div&gt;
</pre>
</td>
</tr>
</tbody></table>
<h4>Basic Button Group</h4>
<p>The following example demonstrates the use of class <b>.btn-group</b> discussed in the above table −</p>
<pre class="prettyprint notranslate tryit">&lt;div class = "btn-group"&gt;
   
   &lt;button type = "button" class = "btn btn-default"&gt;Button 1&lt;/button&gt;
   &lt;button type = "button" class = "btn btn-default"&gt;Button 2&lt;/button&gt;
   &lt;button type = "button" class = "btn btn-default"&gt;Button 3&lt;/button&gt;
   
&lt;/div&gt;
</pre>
<h4>Button Toolbar</h4>
<p>The following example demonstrates the use of class <b>.btn-toolbar</b> discussed in the above table −</p>
<pre class="prettyprint notranslate tryit">&lt;div class = "btn-toolbar" role = "toolbar"&gt;
   
   &lt;div class = "btn-group"&gt;
      &lt;button type = "button" class = "btn btn-default"&gt;Button 1&lt;/button&gt;
      &lt;button type = "button" class = "btn btn-default"&gt;Button 2&lt;/button&gt;
      &lt;button type = "button" class = "btn btn-default"&gt;Button 3&lt;/button&gt;
   &lt;/div&gt;
   
   &lt;div class = "btn-group"&gt;
      &lt;button type = "button" class = "btn btn-default"&gt;Button 4&lt;/button&gt;
      &lt;button type = "button" class = "btn btn-default"&gt;Button 5&lt;/button&gt;
      &lt;button type = "button" class = "btn btn-default"&gt;Button 6&lt;/button&gt;
   &lt;/div&gt;
   
   &lt;div class = "btn-group"&gt;
      &lt;button type = "button" class = "btn btn-default"&gt;Button 7&lt;/button&gt;
      &lt;button type = "button" class = "btn btn-default"&gt;Button 8&lt;/button&gt;
      &lt;button type = "button" class = "btn btn-default"&gt;Button 9&lt;/button&gt;
   &lt;/div&gt;
   
&lt;/div&gt;
</pre>
<h4>Button Size</h4>
<p>The following example demonstrates the use of class <b>.btn-group-*</b> discussed in the above table −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group btn-group-lg"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Button 1</span><span class="tag">&lt;/button&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Button 2</span><span class="tag">&lt;/button&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Button 3</span><span class="tag">&lt;/button&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group btn-group-sm"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Button 4</span><span class="tag">&lt;/button&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Button 5</span><span class="tag">&lt;/button&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Button 6</span><span class="tag">&lt;/button&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span><span class="pln">

</span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group btn-group-xs"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Button 7</span><span class="tag">&lt;/button&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Button 8</span><span class="tag">&lt;/button&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Button 9</span><span class="tag">&lt;/button&gt;</span><span class="pln">
</span><span class="tag">&lt;/div&gt;</span></pre>
<h4>Nesting</h4>
<p>You can nest button groups within another button group i.e, place a <b>.btn-group</b> within another <b>.btn-group </b>. This is done when you want dropdown menus mixed with a series of buttons.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Button 1</span><span class="tag">&lt;/button&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Button 2</span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
         Dropdown
         </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
      </span><span class="tag">&lt;/button&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Dropdown link 1</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Dropdown link 2</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
  
</span><span class="tag">&lt;/div&gt;</span></pre>
<h4>Vertical Buttongroup</h4>
<p>The following example demonstrates the use of class <b>.btn-group-vertical</b> discussed in the above table −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group-vertical"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Button 1</span><span class="tag">&lt;/button&gt;</span><span class="pln">
   </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Button 2</span><span class="tag">&lt;/button&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn-group-vertical"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
         Dropdown
         </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
      </span><span class="tag">&lt;/button&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Dropdown link 1</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Dropdown link 2</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
  
</span><span class="tag">&lt;/div&gt;</span></pre>






</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="148_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="150_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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