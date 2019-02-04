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
	$sid=48;
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




<p>The <i>margin</i> property defines the space around an HTML element. It is possible to use negative values to overlap content.</p>
<p>The values of the margin property are not inherited by the child elements. Remember that the adjacent vertical margins (top and bottom margins) will collapse into each other so that the distance between the blocks is not the sum of the margins, but only the greater of the two margins or the same size as one margin if both are equal.</p>
<p>We have the following properties to set an element margin.</p>
<ul class="list">
<li><p>The <b>margin</b> specifies a shorthand property for setting the margin properties in one declaration.</p></li>
<li><p>The <b>margin-bottom</b> specifies the bottom margin of an element.</p></li>
<li><p>The <b>margin-top</b> specifies the top margin of an element.</p></li>
<li><p>The <b>margin-left</b> specifies the left margin of an element.</p></li>
<li><p>The <b>margin-right</b> specifies the right margin of an element.</p></li>
</ul>
<p>Now, we will see how to use these properties with examples.</p>
<h4>The Margin Property</h4>
<p>The margin property allows you set all of the properties for the four margins in one declaration. Here is the syntax to set margin around a paragraph −</p>
<p>Here is an example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">margin</span><span class="pun">:</span><span class="pln"> </span><span class="lit">15px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln"> 
      all four margins will be 15px 
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">margin</span><span class="pun">:</span><span class="lit">10px</span><span class="pln"> </span><span class="lit">2</span><span class="pun">%;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      top and bottom margin will be 10px, left and right margin will be 2% of the total width of the document. 
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">margin</span><span class="pun">:</span><span class="pln"> </span><span class="lit">10px</span><span class="pln"> </span><span class="lit">2</span><span class="pun">%</span><span class="pln"> </span><span class="pun">-</span><span class="lit">10px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      top margin will be 10px, left and right margin will be 2% of the total width of the document, bottom margin will be -10px
      </span><span class="tag">&lt;/p&gt;</span><span class="pln"> 
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">margin</span><span class="pun">:</span><span class="pln"> </span><span class="lit">10px</span><span class="pln"> </span><span class="lit">2</span><span class="pun">%</span><span class="pln"> </span><span class="pun">-</span><span class="lit">10px</span><span class="pln"> </span><span class="kwd">auto</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      top margin will be 10px, right margin will be 2% of the total width of the document, bottom margin will be -10px, left margin will be set by the browser 
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>The margin-bottom Property</h4>
<p>The margin-bottom property allows you set bottom margin of an element. It can have a value in length, % or auto.</p>
<p>Here is an example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">margin</span><span class="pun">-</span><span class="pln">bottom</span><span class="pun">:</span><span class="pln"> </span><span class="lit">15px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln">
      This is a paragraph with a specified bottom margin.
      </span><span class="tag">&lt;/p&gt;</span><span class="pln"> 
   
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">margin</span><span class="pun">-</span><span class="pln">bottom</span><span class="pun">:</span><span class="pln"> </span><span class="lit">5</span><span class="pun">%;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln"> 
      This is another paragraph with a specified bottom margin in percent
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>
<h4>The margin-top Property</h4>
<p>The margin-top property allows you set top margin of an element. It can have a value in length, % or auto.</p>
<p>Here is an example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">margin</span><span class="pun">-</span><span class="pln">top</span><span class="pun">:</span><span class="pln"> </span><span class="lit">15px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln"> 
      This is a paragraph with a specified top margin 
      </span><span class="tag">&lt;/p&gt;</span><span class="pln"> 
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">margin</span><span class="pun">-</span><span class="pln">top</span><span class="pun">:</span><span class="pln"> </span><span class="lit">5</span><span class="pun">%;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln"> 
      This is another paragraph with a specified top margin in percent 
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>
<h4>The margin-left Property</h4>
<p>The margin-left property allows you set left margin of an element. It can have a value in length, % or auto.</p>
<p>Here is an example:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">margin</span><span class="pun">-</span><span class="pln">left</span><span class="pun">:</span><span class="pln"> </span><span class="lit">15px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln"> 
      This is a paragraph with a specified left margin 
      </span><span class="tag">&lt;/p&gt;</span><span class="pln"> 
   
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">margin</span><span class="pun">-</span><span class="pln">left</span><span class="pun">:</span><span class="pln"> </span><span class="lit">5</span><span class="pun">%;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln"> 
      This is another paragraph with a specified top margin in percent 
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>
<h4>The margin-right Property</h4>
<p>The margin-right property allows you set right margin of an element. It can have a value in length, % or auto.</p>
<p>Here is an example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">margin</span><span class="pun">-</span><span class="pln">right</span><span class="pun">:</span><span class="pln"> </span><span class="lit">15px</span><span class="pun">;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln"> 
      This is a paragraph with a specified right margin 
      </span><span class="tag">&lt;/p&gt;</span><span class="pln"> 
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">style</span><span class="pun">=</span><span class="atv">"</span><span class="pln">margin</span><span class="pun">-</span><span class="pln">right</span><span class="pun">:</span><span class="pln"> </span><span class="lit">5</span><span class="pun">%;</span><span class="pln"> border</span><span class="pun">:</span><span class="lit">1px</span><span class="pln"> solid black</span><span class="pun">;</span><span class="atv">"</span><span class="tag">&gt;</span><span class="pln"> 
      This is another paragraph with a specified right margin in percent 
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span><span class="pln"> </span></pre>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="47_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="49_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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