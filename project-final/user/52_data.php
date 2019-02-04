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
	$sid=52;
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





<p>Outlines are very similar to borders, but there are few major differences as well −</p>
<ul class="list">
<li><p>An outline does not take up space.</p></li>
<li><p>Outlines do not have to be rectangular.</p></li>
<li><p>Outline is always the same on all sides; you cannot specify different values for different sides of an element.</p></li>
</ul>
<p><b>NOTE</b> − The outline properties are not supported by IE 6 or Netscape 7.</p>
<p>You can set the following outline properties using CSS.</p>
<ul class="list">
<li><p>The <b>outline-width</b> property is used to set the width of the outline.</p></li>
<li><p>The <b>outline-style</b> property is used to set the line style for the outline.</p></li>
<li><p>The <b>outline-color</b> property is used to set the color of the outline.</p></li>
<li><p>The <b>outline</b> property is used to set all the above three properties in a single statement.</p></li>
</ul>
<h4>The outline-width Property</h4>
<p>The <i>outline-width</i> property specifies the width of the outline to be added to the box. Its value should be a length or one of the values <i>thin, medium, or thick,</i> just like the border-width attribute.</p>
<p>A width of zero pixels means no outline.</p>
<p>Here is an example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">outline</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln">thin</span><span class="pun">;</span><span class="pln"> outline</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">solid</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This text is having thin outline.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">outline</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln">thick</span><span class="pun">;</span><span class="pln"> outline</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">solid</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This text is having thick outline.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">outline</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">5px</span><span class="pun">;</span><span class="pln"> outline</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">solid</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This text is having 5x outline.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>
<h4>The outline-style Property</h4>
<p>The <i>outline-style</i> property specifies the style for the line (solid, dotted, or dashed) that goes around an element. It can take one of the following values −</p>
<ul class="list">
<li><p><b>none:</b> No border. (Equivalent of outline-width:0;)</p></li>
<li><p><b>solid:</b> Outline is a single solid line.</p></li>
<li><p><b>dotted:</b> Outline is a series of dots.</p></li>
<li><p><b>dashed:</b> Outline is a series of short lines.</p></li>
<li><p><b>double:</b> Outline is two solid lines.</p></li>
<li><p><b>groove:</b> Outline looks as though it is carved into the page.</p></li>
<li><p><b>ridge:</b> Outline looks the opposite of groove.</p></li>
<li><p><b>inset:</b> Outline makes the box look like it is embedded in the page.</p></li>
<li><p><b>outset:</b> Outline makes the box look like it is coming out of the canvas.</p></li>
<li><p><b>hidden:</b> Same as none.</p></li>
</ul>
<p>Here is an example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">outline</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln">thin</span><span class="pun">;</span><span class="pln"> outline</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">solid</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This text is having thin solid  outline.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">outline</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln">thick</span><span class="pun">;</span><span class="pln"> outline</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">dashed</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This text is having thick dashed outline.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">outline</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">5px</span><span class="pun">;</span><span class="pln">outline</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">dotted</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This text is having 5x dotted outline.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>

<h4>The outline-color Property</h4>
<p>The <i>outline-color</i> property allows you to specify the color of the outline. Its value should either be a color name, a hex color, or an RGB value, as with the color and border-color properties.</p>
<p>Here is an example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">outline</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln">thin</span><span class="pun">;</span><span class="pln"> outline</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">solid</span><span class="pun">;</span><span class="pln">outline</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">red</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This text is having thin solid red  outline.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">outline</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="pln">thick</span><span class="pun">;</span><span class="pln"> outline</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">dashed</span><span class="pun">;</span><span class="pln">outline</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:#</span><span class="lit">009900</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This text is having thick dashed green outline.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">outline</span><span class="pun">-</span><span class="pln">width</span><span class="pun">:</span><span class="lit">5px</span><span class="pun">;</span><span class="pln">outline</span><span class="pun">-</span><span class="pln">style</span><span class="pun">:</span><span class="pln">dotted</span><span class="pun">;</span><span class="pln">outline</span><span class="pun">-</span><span class="pln">color</span><span class="pun">:</span><span class="pln">rgb</span><span class="pun">(</span><span class="lit">13</span><span class="pun">,</span><span class="lit">33</span><span class="pun">,</span><span class="lit">232</span><span class="pun">)</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This text is having 5x dotted blue outline.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>
<h4>The outline Property</h4>
<p>The <i>outline</i> property is a shorthand property that allows you to specify values for any of the three properties discussed previously in any order but in a single statement.</p>
<p>Here is an example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">outline</span><span class="pun">:</span><span class="pln">thin solid red</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This text is having thin solid red outline.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
       
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">outline</span><span class="pun">:</span><span class="pln">thick dashed </span><span class="com">#009900;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This text is having thick dashed green outline.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">outline</span><span class="pun">:</span><span class="lit">5px</span><span class="pln"> dotted rgb</span><span class="pun">(</span><span class="lit">13</span><span class="pun">,</span><span class="lit">33</span><span class="pun">,</span><span class="lit">232</span><span class="pun">);</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This text is having 5x dotted blue outline.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="51_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="53_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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