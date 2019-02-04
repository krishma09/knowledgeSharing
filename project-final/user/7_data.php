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
	$sid=7;
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


<p class="intro">Headings are important in HTML documents.</p>

<div class="sc_line sc_line_style_solid margin_top_3em"></div>



<h4>HTML Headings</h4>
<p>Headings are defined with the &lt;h1&gt; to &lt;h6&gt; tags.</p>
<p>&lt;h1&gt; defines the most important heading. &lt;h6&gt; defines the least important heading.</p>
<div class="w3-example" style="padding-left:50px;">
<h5>Example :</h5>
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>h1<span style="color:mediumblue">&gt;</span></span>This is heading 1<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h1<span style="color:mediumblue">&gt;</span></span><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>h2<span style="color:mediumblue">&gt;</span></span>This is heading 2<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h2<span style="color:mediumblue">&gt;</span></span><br>
<span style="color:brown"><span style="color:mediumblue">&lt;</span>h3<span style="color:mediumblue">&gt;</span></span>This is heading 3<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h3<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>h4<span style="color:mediumblue">&gt;</span></span>This is heading 4<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h4<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>h5<span style="color:mediumblue">&gt;</span></span>This is heading 5<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h5<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>h6<span style="color:mediumblue">&gt;</span></span>This is heading 6<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h6<span style="color:mediumblue">&gt;</span></span></div>
</div>
<br><br>
<div class="w3-panel w3-note">
  <p><strong>Note:</strong> Browsers automatically add some white space (a margin) before and after a heading.</p>
</div>






<div class="sc_line sc_line_style_solid margin_top_3em"></div>




<h4>Headings Are Important</h4>
<p>Search engines use the headings to index the structure and content of your web pages.</p>
<p>Users skim your pages by its headings. It is important to use headings to show the document structure.</p>
<p>&lt;h1&gt; headings should be used for main headings, followed by &lt;h2&gt; headings, then the less important 
&lt;h3&gt;, and so on.</p>
<div class="w3-panel w3-note">
  <p><strong>Note:</strong> Use HTML headings for headings only. Don't use headings to make text 
  <strong>BIG</strong> or <strong>bold</strong>.</p>
</div>


<div class="sc_line sc_line_style_solid margin_top_3em"></div>


<h4>HTML Horizontal Rules</h4>
<p>The &lt;hr&gt; tag defines a thematic break in an HTML page, and is most often 
displayed as a horizontal rule.</p>
<p>The &lt;hr&gt; element is used to separate content (or define a change) in an HTML 
page:</p>
<div class="w3-example" style="padding-left:50px;">
<h5>Example :</h5>
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
 <span style="color:brown"><span style="color:mediumblue">&lt;</span>h1<span style="color:mediumblue">&gt;</span></span>This is heading 1<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h1<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>p<span style="color:mediumblue">&gt;</span></span>This is some text.<span style="color:brown"><span style="color:mediumblue">&lt;</span>/p<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>hr<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>h2<span style="color:mediumblue">&gt;</span></span>This is heading 2<span style="color:brown"><span style="color:mediumblue">&lt;</span>/h2<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>p<span style="color:mediumblue">&gt;</span></span>This is some other text.<span style="color:brown"><span style="color:mediumblue">&lt;</span>/p<span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>hr<span style="color:mediumblue">&gt;</span></span>
</div>
</div>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>



<h4>The HTML &lt;head&gt; Element</h4>
<p>The HTML <strong>&lt;head&gt;</strong> element has nothing to do with HTML 
headings.</p>
<p>The &lt;head&gt; element is a container for metadata. HTML metadata is data about the HTML document. Metadata is not displayed.</p>
<p>The &lt;head&gt; element is placed between the &lt;html&gt; tag and the &lt;body&gt; tag:</p>
<div class="w3-example" style="padding-left:50px;">
<h5>Example :</h5>
<div class="w3-code notranslate htmlHigh" style="padding-left:100px; font-size:19px;">
<span style="color:brown"><span style="color:mediumblue">&lt;</span>!DOCTYPE<span style="color:red"> html</span><span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>html<span style="color:mediumblue">&gt;</span></span><br><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>head<span style="color:mediumblue">&gt;</span></span><br>&nbsp; <span style="color:brown"><span style="color:mediumblue">&lt;</span>title<span style="color:mediumblue">&gt;</span></span>My First HTML<span style="color:brown"><span style="color:mediumblue">&lt;</span>/title<span style="color:mediumblue">&gt;</span></span><br>&nbsp; <span style="color:brown"><span style="color:mediumblue">&lt;</span>meta<span style="color:red"> charset<span style="color:mediumblue">="UTF-8"</span></span><span style="color:mediumblue">&gt;</span></span><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>/head<span style="color:mediumblue">&gt;</span></span><br><br><span style="color:brown"><span style="color:mediumblue">&lt;</span>body<span style="color:mediumblue">&gt;</span></span><br>.<br>
 .<br>.</div>
</div>
<br><br>
<div class="w3-panel w3-note">
  <p><strong>Note:</strong> Metadata typically define the document title, character set, styles, links, scripts, and other meta information.</p>
</div>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>


<h4>HTML Tag Reference</h4>
<p>W3Schools' tag reference contains additional information about these tags and their attributes.</p>
 <p>You will learn more about HTML tags and attributes in the next chapters of this tutorial.</p>
 <table class="w3-table-all notranslate">
<tbody><tr>
  <th>Tag</th>
  <th>Description</th>
</tr>
<tr>
  <td>&lt;html&gt;</td>
  <td>Defines the root of an HTML document</td>
</tr>
<tr>
  <td>&lt;body&gt;</td>
  <td>Defines the document's body</td>
</tr>
<tr>
  <td>&lt;head&gt;</td>
  <td>A container for all the head elements (title, scripts, styles, meta information, and more)</td>
</tr>
<tr>
  <td>&lt;h1&gt; to &lt;h6&gt;</td>
  <td>Defines HTML headings</td>
</tr>
<tr>
  <td>&lt;hr&gt;</td>
  <td>Defines a thematic change in the content</td>
</tr>
</tbody></table>


</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="6_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="9_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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