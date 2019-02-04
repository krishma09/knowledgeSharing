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
<title>HTML Tutorials | knowledge.com</title>
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
	$sid=20;
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



<p>We have seen how to create hypertext link using text and we also learnt how to use images in our webpages. Now we will learn how to use images to create hyperlinks.</p>
<h5>Example</h5>
<p>It's simple to use an image as hyperlink.  We just need to use an image inside  hyperlink at the place of text as shown below:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Image Hyperlink Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">Click following link</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"https://www.tutorialspoint.com"</span><span class="pln"> </span><span class="atn">target</span><span class="pun">=</span><span class="atv">"_self"</span><span class="tag">&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"/images/logo.png"</span><span class="pln"> </span><span class="atn">alt</span><span class="pun">=</span><span class="atv">"Tutorials Point"</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"0"</span><span class="tag">/&gt;</span><span class="pln"> 
</span><span class="tag">&lt;/a&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Mouse-Sensitive Images</h4>
<p>The HTML and XHTML standards provide a feature that lets you embed many different links inside a single image. You can create different links on the single image based on different coordinates available on the image.  Once different are links attached to different coordinates, we can click different parts of the image to open target documents. Such mouse-sensitive images are known as image maps.</p>
<p>There are two ways to create image maps:</p>
<ul class="list">
<li><b>server-side image maps -</b> This is enabled by the <b>ismap</b> attribute of the &lt;img&gt; tag and requires access to a server and related image-map processing applications.</li>
<li><b>Client-side image maps -</b> This is created with the <b>usemap</b> attribute of the &lt;img&gt; tag, along with corresponding &lt;map&gt; and &lt;area&gt; tags.<p></p></li>
</ul>
<h4>Server-Side Image Maps</h4>

<p>Here you simply put your image inside a hyper link and use <b>ismap</b> attribute which makes it special image and when the user clicks some place within the image, the browser passes the coordinates of the mouse pointer along with the URL specified in the &lt;a&gt; tag to the web server. The server uses the mouse-pointer coordinates to determine which document to deliver back to the browser.</p>
<p>When <i>ismap</i> is used, the href attribute of the containing &lt;a&gt; tag must contain the URL of a server application like a cgi or PHP script etc. to process the incoming request based on the passed coordinates.</p>
<p>The coordinates of the mouse position are screen pixels counted from the upper-left corner of the image, beginning with (0,0). The coordinates, preceded by a question mark, are added to the end of the URL.</p>
<p>Which has been generated by the following code snippet:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">ISMAP Hyperlink Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">Click following link</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"/cgi-bin/ismap.cgi"</span><span class="pln"> </span><span class="atn">target</span><span class="pun">=</span><span class="atv">"_self"</span><span class="tag">&gt;</span><span class="pln"> 
   </span><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">ismap</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"/images/logo.png"</span><span class="pln"> </span><span class="atn">alt</span><span class="pun">=</span><span class="atv">"Tutorials Point"</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"0"</span><span class="tag">/&gt;</span><span class="pln"> 
</span><span class="tag">&lt;/a&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>Then the browser sends the following search parameters to the web server which can be processed by <b>ismap.cgi</b> script or <b>map file</b> and you can link whatever documents you like to these coordinates:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="str">/cgi-bin/</span><span class="pln">ismap</span><span class="pun">.</span><span class="pln">cgi</span><span class="pun">?</span><span class="lit">20</span><span class="pun">,</span><span class="lit">30</span></pre>
<p>This way you can assign different links to different coordinates of the image and when those coordinates are clicked, you can open corresponding linked document. To learn more about <b>ismap</b> attribute, you can check <a href="/html/using_html_ismap.htm"><b>How to use Image ismap?</b></a></p>
<blockquote><b>Note: </b>You will learn CGI programming when you will study Perl programming. You can write your script to process these passed coordinates using PHP or any other script as well. For now let's concentrate on learning HTML and later you can revisit this section.</blockquote>
<h4>Client-Side Image Maps</h4>
<p>Client side image maps are enabled by the <b>usemap</b> attribute of the &lt;img /&gt; tag and defined by special &lt;map&gt; and &lt;area&gt; extension tags.</p>
<p>The image that is going to form the map is inserted into the page using the &lt;img /&gt; tag as a normal image, except it carries an extra attribute called <b>usemap</b>. The value of the usemap attribute is the value which will be used in a &lt;map&gt; tag to link map and image tags. The  &lt;map&gt; along with &lt;area&gt; tags define all the image coordinates and corresponding links.</p>
<p>The &lt;area&gt; tag inside the map tag, specifies the shape and the coordinates to define the boundaries of each clickable hotspot available on the image. Here's an example from the image map:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">USEMAP Hyperlink Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">Search and click the hotspot</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">/images/html.gif</span><span class="pln"> </span><span class="atn">alt</span><span class="pun">=</span><span class="atv">"HTML Map"</span><span class="pln"> </span><span class="atn">border</span><span class="pun">=</span><span class="atv">"0"</span><span class="pln"> </span><span class="atn">usemap</span><span class="pun">=</span><span class="atv">"#html"</span><span class="tag">/&gt;</span><span class="pln">
</span><span class="com">&lt;!-- Create  Mappings --&gt;</span><span class="pln">
</span><span class="tag">&lt;map</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"html"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;area</span><span class="pln"> </span><span class="atn">shape</span><span class="pun">=</span><span class="atv">"circle"</span><span class="pln"> 
   </span><span class="atn">coords</span><span class="pun">=</span><span class="atv">"80,80,20"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"/css/index.htm"</span><span class="pln"> </span><span class="atn">alt</span><span class="pun">=</span><span class="atv">"CSS Link"</span><span class="pln"> </span><span class="atn">target</span><span class="pun">=</span><span class="atv">"_self"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;area</span><span class="pln"> </span><span class="atn">shape</span><span class="pun">=</span><span class="atv">"rect"</span><span class="pln"> 
   </span><span class="atn">coords</span><span class="pun">=</span><span class="atv">"5,5,40,40"</span><span class="pln"> </span><span class="atn">alt</span><span class="pun">=</span><span class="atv">"jQuery Link"</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"/jquery/index.htm"</span><span class="pln"> </span><span class="atn">target</span><span class="pun">=</span><span class="atv">"_self"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/map&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Coordinate System</h4>
<p>The actual value of coords is totally dependent on the shape in question. Here is a summary, to be followed by detailed examples:</p>
<dl>
<dt><b>rect = x<sub>1</sub> , y<sub>1</sub> , x<sub>2</sub> , y<sub>2</sub></b>
</dt><dd><p>x<sub>1</sub> and y<sub>1</sub> are the coordinates of the upper left corner of the rectangle; x<sub>2</sub> and y<sub>2</sub> are the coordinates of the lower right corner.</p>
</dd><dt><b>circle = x<sub>c</sub> , y<sub>c</sub> , radius</b>
</dt><dd><p>x<sub>c</sub> and y<sub>c</sub> are the coordinates of the center of the circle, and radius is the circle's radius.  A circle centered at 200,50 with a radius of 25 would have the attribute <i>coords="200,50,25"</i></p>
</dd><dt><b>poly = x<sub>1</sub> , y<sub>1</sub> , x<sub>2</sub> , y<sub>2</sub> , x<sub>3</sub> , y<sub>3</sub> ,  ... x<sub>n</sub> , y<sub>n</sub></b>
</dt><dd><p>The various x-y pairs define vertices (points) of the polygon, with a "line" being drawn from one point to the next point.  A diamond-shaped polygon with its top point at 20,20 and 40 pixels across at its widest points would have the attribute <i>coords="20,20,40,40,20,60,0,40"</i>.</p>
</dd>
</dl>
<p>All coordinates are relative to the upper-left corner of the image (0,0). Each shape has a related URL.You can use any image software to know the coordinates of different positions.</p>














</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="19_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="21_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'html_header.php'; ?>
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