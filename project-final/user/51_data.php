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
	$sid=51;
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




<p>The <i>cursor</i> property of CSS allows you to specify the type of cursor that should be displayed to the user.</p>
<p>One good usage of this property is in using images for submit buttons on forms. By default, when a cursor hovers over a link, the cursor changes from a pointer to a hand. However, it does not change form for a submit button on a form. Therefore, whenever someone hovers over an image that is a submit button, it provides a visual clue that the image is clickable.</p>
<p>The following table shows the possible values for the cursor property −</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:18%;">Value</th>
<th>Description</th>
</tr>
<tr>
<td>auto</td>
<td>Shape of the cursor depends on the context area it is over. For example, an 'I' over text, a 'hand' over a link, and so on.</td>
</tr>
<tr>
<td>crosshair</td>
<td>A crosshair or plus sign</td>
</tr>
<tr>
<td>default</td>
<td>An arrow</td>
</tr>
<tr>
<td>pointer</td>
<td>A pointing hand (in IE 4 this value is hand).</td>
</tr>
<tr>
<td>move</td>
<td>The 'I' bar</td>
</tr>
<tr>
<td>e-resize</td>
<td>The cursor indicates that an edge of a box is to be moved right (east).</td>
</tr>
<tr>
<td>ne-resize</td>
<td>The cursor indicates that an edge of a box is to be moved up and right (north/east).</td>
</tr>
<tr>
<td>nw-resize</td>
<td>The cursor indicates that an edge of a box is to be moved up and left (north/west).</td>
</tr>
<tr>
<td>n-resize</td>
<td>The cursor indicates that an edge of a box is to be moved up (north).</td>
</tr>
<tr>
<td>se-resize</td>
<td>The cursor indicates that an edge of a box is to be moved down and right (south/east).</td>
</tr>
<tr>
<td>sw-resize</td>
<td>The cursor indicates that an edge of a box is to be moved down and left (south/west).</td>
</tr>
<tr>
<td>s-resize</td>
<td>The cursor indicates that an edge of a box is to be moved down (south).</td>
</tr>
<tr>
<td>w-resize</td>
<td>The cursor indicates that an edge of a box is to be moved left (west).</td>
</tr>
<tr>
<td>text</td>
<td>The I bar.</td>
</tr>
<tr>
<td>wait</td>
<td>An hour glass.</td>
</tr>
<tr>
<td>help</td>
<td>A question mark or balloon, ideal for use over help buttons.</td>
</tr>
<tr>
<td>&lt;url&gt;</td>
<td>The source of a cursor image file.</td>
</tr>
</tbody></table>
<p><b>NOTE:</b> You should try to use only these values to add helpful information for users, and in places, they would expect to see that cursor. For example, using the crosshair when someone hovers over a link can confuse visitors.</p>
<p>Here is an example −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Move the mouse over the words to see the cursor change:</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="kwd">auto</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">Auto</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="pln">crosshair</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">Crosshair</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="kwd">default</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">Default</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="pln">pointer</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">Pointer</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="pln">move</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">Move</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="pln">e</span><span class="pun">-</span><span class="pln">resize</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">e-resize</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="pln">ne</span><span class="pun">-</span><span class="pln">resize</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">ne-resize</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="pln">nw</span><span class="pun">-</span><span class="pln">resize</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">nw-resize</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="pln">n</span><span class="pun">-</span><span class="pln">resize</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">n-resize</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="pln">se</span><span class="pun">-</span><span class="pln">resize</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">se-resize</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="pln">sw</span><span class="pun">-</span><span class="pln">resize</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">sw-resize</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="pln">s</span><span class="pun">-</span><span class="pln">resize</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">s-resize</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="pln">w</span><span class="pun">-</span><span class="pln">resize</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">w-resize</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="pln">text</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">text</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="pln">wait</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">wait</span><span class="tag">&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">cursor</span><span class="pun">:</span><span class="pln">help</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">help</span><span class="tag">&lt;/div&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>













</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="50_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="52_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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