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
	$sid=19;
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




<p>A webpage can contain various links that take you directly to other pages and even specific parts of a given page. These links are known as hyperlinks.</p>
<p>Hyperlinks allow visitors to navigate between Web sites by clicking on words, phrases, and images. Thus you can create hyperlinks using text or images available on a webpage.</p>
<p><b>Note: </b>I recommend to go through a short tutorial on <a href="/html/understanding_url_tutorial.htm"><b>Understanding URL</b></a></p>
<h4>Linking Documents</h4>
<p>A link is specified using HTML tag &lt;a&gt;. This tag is called <b>anchor tag</b> and anything between the opening &lt;a&gt; tag and the closing &lt;/a&gt; tag becomes part of the link and a user can click that part to reach to the linked document. Following is the simple syntax to use &lt;a&gt; tag.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"Document URL"</span><span class="pln"> ... </span><span class="atn">attributes-list</span><span class="tag">&gt;</span><span class="pln">Link Text</span><span class="tag">&lt;/a&gt;</span></pre>
<h5>Example</h5>
<p>Let's try following example which links https://www.tutorialspoint.com at your page:</p>

<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Hyperlink Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">Click following link</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"https://www.tutorialspoint.com"</span><span class="pln"> </span><span class="atn">target</span><span class="pun">=</span><span class="atv">"_self"</span><span class="tag">&gt;</span><span class="pln">Tutorials Point</span><span class="tag">&lt;/a&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result, where you can click on the link generated <b>Tutorials Point</b> to reach to the home page of Tutorials Point.</p>
<div class="result notranslate">
<p>Click following link</p>
<a href="https://www.tutorialspoint.com" target="_self">Tutorials Point</a>
</div>
<h4>The target Attribute</h4>
<p>We have used <b>target</b> attribute in our previous example. This attribute is used to specify the location where linked document is opened. Following are possible options:</p>
<table class="table table-bordered">
<tbody><tr><th>Option</th><th>Description</th></tr>
<tr><td>_blank</td><td>Opens the linked document in a new window or tab.</td></tr>
<tr><td>_self</td><td>Opens the linked document in the same frame.</td></tr>
<tr><td>_parent</td><td>Opens the linked document in the parent frame.</td></tr>
<tr><td>_top</td><td>Opens the linked document in the full body of the window.</td></tr>
<tr><td>targetframe</td><td>Opens the linked document in a named <i>targetframe</i>.</td></tr>
</tbody></table>
<h5>Example</h5>
<p>Try following example to understand basic difference in few options given for target attribute.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Hyperlink Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;base</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"https://www.tutorialspoint.com/"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">Click any of the following links</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"/html/index.htm"</span><span class="pln"> </span><span class="atn">target</span><span class="pun">=</span><span class="atv">"_blank"</span><span class="tag">&gt;</span><span class="pln">Opens in New</span><span class="tag">&lt;/a&gt;</span><span class="pln"> |
</span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"/html/index.htm"</span><span class="pln"> </span><span class="atn">target</span><span class="pun">=</span><span class="atv">"_self"</span><span class="tag">&gt;</span><span class="pln">Opens in Self</span><span class="tag">&lt;/a&gt;</span><span class="pln"> |
</span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"/html/index.htm"</span><span class="pln"> </span><span class="atn">target</span><span class="pun">=</span><span class="atv">"_parent"</span><span class="tag">&gt;</span><span class="pln">Opens in Parent</span><span class="tag">&lt;/a&gt;</span><span class="pln"> |
</span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"/html/index.htm"</span><span class="pln"> </span><span class="atn">target</span><span class="pun">=</span><span class="atv">"_top"</span><span class="tag">&gt;</span><span class="pln">Opens in Body</span><span class="tag">&lt;/a&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result, where you can click on different links to understand the difference between various options given for target attribute.</p>
<div class="result notranslate">
<p>Click any of the following links</p>
<a href="/html/index.htm" target="_blank">Opens in New</a> |
<a href="/html/index.htm" target="_self">Opens in Self</a> |
<a href="/html/index.htm" target="_parent">Opens in Parent</a> |
<a href="/html/index.htm" target="_top">Opens in Body</a>
</div>
<h4>Linking to a Page Section</h4>
<p>You can create a link to a particular section of a given webpage by using <b>name</b> attribute. This is a two step process.</p>
<p>First create a link to the place where you want to reach with-in a webpage and name it using &lt;a...&gt; tag as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;h1&gt;</span><span class="pln">HTML Text Links </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"top"</span><span class="tag">&gt;&lt;/a&gt;&lt;/h1&gt;</span></pre>
<p>Second step is to create a hyperlink to link the document and place where you want to reach:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"/html/html_text_links.htm#top"</span><span class="tag">&gt;</span><span class="pln">Go to the Top</span><span class="tag">&lt;/a&gt;</span></pre>
<p>This will produce following link, where you can click on the link generated <b>Go to the Top</b> to reach to the top of the HTML  Text Link tutorial.</p>
<table class="src" cellpadding="5"><tbody><tr><td>
<a href="/html/html_text_links.htm#top">Go to the Top</a>  
</td></tr></tbody></table>
<h4>Setting Link Colors</h4>
<p>You can set colors of your links, active links and visited links using <b>link</b>, <b>alink</b> and <b>vlink</b> attributes of &lt;body&gt; tag.</p>
<h5>Example</h5>
<p>Save the following in test.htm and open it in any web browser to see how <b>link</b>, <b>alink</b> and <b>vlink</b> attributes work.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Hyperlink Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;base</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"https://www.tutorialspoint.com/"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body</span><span class="pln"> </span><span class="atn">alink</span><span class="pun">=</span><span class="atv">"#54A250"</span><span class="pln"> </span><span class="atn">link</span><span class="pun">=</span><span class="atv">"#040404"</span><span class="pln"> </span><span class="atn">vlink</span><span class="pun">=</span><span class="atv">"#F40633"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">Click following link</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"/html/index.htm"</span><span class="pln"> </span><span class="atn">target</span><span class="pun">=</span><span class="atv">"_blank"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">HTML Tutorial</span><span class="tag">&lt;/a&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result. Just check color of the link before clicking on it, next check its color when you activate it and when the link has been visited.</p>
<div class="result notranslate">

<p>Click following link</p>
<a href="/html/index.htm" target="_blank">HTML Tutorial</a>

</div>
<h4>Download Links</h4>
<p>You can create text link to make your PDF, or DOC or ZIP files downloadable. This is very simple, you just need to give complete URL of the downloadable file as follows:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Hyperlink Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"https://www.tutorialspoint.com/page.pdf"</span><span class="tag">&gt;</span><span class="pln">Download PDF File</span><span class="tag">&lt;/a&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following link and will be used to download a file.</p>
<div class="result notranslate">
<a href="https://www.tutorialspoint.com/page.pdf">Download PDF File</a>
</div>
<h4>File Download Dialog Box</h4>
<p>Sometimes it is desired that you want to give an option where a user will click a link and it will pop up a "File Download" box to the user in stead of displaying actual content. This is very easy and can be achieved using an HTTP header in your HTTP response.</p>
<p>For example, if you want make a <b>FileName</b> file downloadable from a given link then its syntax will be as follows.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#!/usr/bin/perl</span><span class="pln">

</span><span class="com"># Addtional HTTP Header</span><span class="pln">
</span><span class="kwd">print</span><span class="pln"> </span><span class="str">"</span><b><span class="str">Content-Type:</span></b><span class="str">application/octet-stream; name=\"FileName\"\r\n"</span><span class="pun">;</span><span class="pln">
</span><span class="kwd">print</span><span class="pln"> </span><span class="str">"</span><b><span class="str">Content-Disposition:</span></b><span class="str"> attachment; filename=\"FileName\"\r\n\n"</span><span class="pun">;</span><span class="pln">

</span><span class="com"># Open the target file and list down its content as follows</span><span class="pln">
open</span><span class="pun">(</span><span class="pln"> FILE</span><span class="pun">,</span><span class="pln"> </span><span class="str">"&lt;FileName"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
</span><span class="kwd">while</span><span class="pun">(</span><span class="pln">read</span><span class="pun">(</span><span class="pln">FILE</span><span class="pun">,</span><span class="pln"> $buffer</span><span class="pun">,</span><span class="pln"> </span><span class="lit">100</span><span class="pun">)){</span><span class="pln">
   </span><span class="kwd">print</span><span class="pun">(</span><span class="str">"$buffer"</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p><b>Note: </b>For more detail on PERL CGI  programs, go through tutorial <a href="https://www.tutorialspoint.com/perl/perl_cgi.htm">PERL and CGI</a>.</p>





</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="18_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="20_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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