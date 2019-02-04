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
	$sid=2;
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
<strong style="font-size:20px;"> 
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<h4 class="widget_title" style="text-align:left"><?php echo substr($desc1,0,17);?></h4>

<?php echo substr($desc1,18,60);?>
<li><?php echo substr($desc1,83,44);?></li>
<li><?php echo substr($desc1,128,55);?></li>
<li><?php echo substr($desc1,185,52);?></li>
<li><?php echo substr($desc1,239,38);?></li>
<li><?php echo substr($desc1,279,84);?></li>
<li><?php echo substr($desc1,366,87);?></li>

<div class="sc_line sc_line_style_solid margin_top_3em"></div>
<h4 class="widget_title" style="text-align:left">A Simple HTML Document</h4>

<div class="w3-example" style="padding-left:50px;">
<h5>Example :</h5>

<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
 <span style="color:brown"><span style="color:mediumblue">&lt;</span>!DOCTYPE<span style="color:red"> html</span><span style="color:mediumblue">&gt;</span></span><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>html<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>head<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>title<span style="color:mediumblue">&gt;</span></span>Page Title<span style="color:brown"><span style="color:mediumblue">&lt;</span>/title<span style="color:mediumblue">&gt;</span></span><br>
 <span style="color:brown"><span style="color:mediumblue">&lt;</span>/head<span style="color:mediumblue">&gt;</span></span><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>body<span style="color:mediumblue">&gt;</span></span><br><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>h1<span style="color:mediumblue">&gt;</span></span>My First Heading<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h1<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>p<span style="color:mediumblue">&gt;</span></span>My first paragraph.<span style="color:brown"><span style="color:mediumblue">&lt;</span>/p<span style="color:mediumblue">&gt;</span></span><br><br>
    <span style="color:brown"><span style="color:mediumblue">&lt;</span>/body<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>/html<span style="color:mediumblue">&gt;</span></span>
</div>




</div>

<h5 class="widget_title" style="padding-left:50px;"><?php echo substr($desc2,0,17);?></h5>



<ul style="padding-left:100px;">
<li><?php echo substr($desc2,23,4);?> <code class="w3-codespan">&lt;!DOCTYPE html&gt;</code><?php echo substr($desc2,42,48);?></li>
<li><?php echo substr($desc2,91,4);?> <code class="w3-codespan">&lt;html&gt;</code> <?php echo substr($desc2,102,45);?></li>
 <li><?php echo substr($desc2,148,4);?> <code class="w3-codespan">&lt;head&gt;</code> <?php echo substr($desc2,158,54);?></li>
 <li><?php echo substr($desc2,214,4);?><code class="w3-codespan">&lt;title&gt;</code> <?php echo substr($desc2,225,45);?></li>
 <li><?php echo substr($desc2,271,4);?> <code class="w3-codespan">&lt;body&gt;</code> <?php echo substr($desc2,281,44);?></li>
 <li><?php echo substr($desc2,326,4);?> <code class="w3-codespan">&lt;h1&gt;</code> <?php echo substr($desc2,335,33);?></li>
 <li><?php echo substr($desc2,369,4);?><code class="w3-codespan">&lt;p&gt;</code> <?php echo substr($desc2,377,48);?></li>
</ul>

<div class="sc_line sc_line_style_solid margin_top_3em"></div>


<h4 class="widget_title" style="text-align:left">HTML Tags </h4>

<p>HTML tags are element names surrounded by angle brackets:</p>
<div class="w3-panel w3-light-grey w3-border">
<h5 style="padding-left:100px;"><p class="w3-xlarge">&lt;tagname&gt;content goes here...&lt;/tagname&gt;</p></h5>
</div>
<ul>
<li>HTML tags normally come <b>in pairs</b> like &lt;p&gt; and &lt;/p&gt;</li>
<li>The first tag in a pair is the <b> start tag,</b> the second tag is the <b> end tag</b></li>
<li>The end tag is written like the start tag, but with a <strong>forward slash</strong> 
inserted before the tag name </li>
</ul>
<div class="w3-panel w3-note">
  <h6><p><strong>Tip:</strong> The start tag is also called the <b>opening tag</b>, and the end tag the <b>closing tag</b>.</p></h6>
</div>

<div class="sc_line sc_line_style_solid margin_top_3em"></div>


<h4><?php echo substr($desc3,0,4);?> &lt;!DOCTYPE&gt; Declaration</h4>

<p>The &lt;!DOCTYPE&gt; declaration represents the document type, and helps browsers to display web pages correctly.</p>


<p>It must only appear once, at the top of the page (before any HTML tags). </p>
<p>The &lt;!DOCTYPE&gt; declaration is not case sensitive.</p>
<p>The &lt;!DOCTYPE&gt; declaration for HTML is:</p>


<div style="padding-left:275px; font-size:19px;" class="w3-code notranslate htmlHigh">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>!DOCTYPE<span style="color:red"> html</span><span style="color:mediumblue">&gt;</span></span></div>


 

<div class="sc_line sc_line_style_solid margin_top_3em"></div>
</strong>

<div class="btn-group" style=" padding-left:550px;" >
<a href="3_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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