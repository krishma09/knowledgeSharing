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
	$sid=14;
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

<p>HTML lets you specify metadata - additional important information about a document in a variety of ways. The META elements can be used to include name/value pairs describing properties of the HTML document, such as author, expiry date, a list of keywords, document author etc.</p>
<p>The <b>&lt;meta&gt;</b> tag is used to provide such additional information. This tag is an empty element and so does not have a closing tag but it carries information within its attributes.</p>
<p>You can include one or more meta tags in your document based on what information you want to keep in your document but in general, meta tags do not impact physical appearance of the document so from appearance point of view, it does not matter if you include them or not.</p>
<h4>Adding Meta Tags to Your Documents</h4>
<p>You can add metadata to your web pages by placing &lt;meta&gt; tags inside the header of the document which is represented by <b>&lt;head&gt;</b> and <b>&lt;/head&gt;</b> tags.  A meta tag can have following attributes in addition to core attributes:</p>

<table class="table table-bordered">
<tbody><tr><th>Attribute</th><th>Description</th></tr>
<tr><td>Name</td><td>Name for the property. Can be anything. Examples include, keywords, description, author, revised, generator etc.</td></tr>
<tr><td>content</td><td>Specifies the property's value.</td></tr>
<tr><td>scheme</td><td>Specifies a scheme to interpret the property's value (as declared in the content attribute).</td></tr>
<tr><td>http-equiv</td><td>Used for http response message headers. For example http-equiv can be used to refresh the page or to set a cookie. Values include content-type, expires, refresh and set-cookie.</td></tr>
</tbody></table>
<h4>Specifying Keywords</h4>
<p>You can use &lt;meta&gt; tag to specify important keywords related to the document and later these  keywords are used by the search engines while indexing your webpage for searching purpose.</p>

<h5>Example</h5>

<p>Following is an example where we are adding HTML, Meta Tags, Metadata as important keywords about the document.</p>

<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Meta Tags Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"keywords"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"HTML, Meta Tags, Metadata"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">Hello HTML5!</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<p>Hello HTML5!</p>
</div>
<h4>Page Redirection</h4>
<p>You can use &lt;meta&gt; tag to redirect your page to any other webpage. You can also specify a duration if you want to redirect the page after a certain number of seconds.</p>

<h5>Example</h5>

<p>Following is an example of redirecting current page to another page after 5 seconds. If you want to redirect page immediately then do not specify <i>content</i> attribute.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Meta Tags Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"keywords"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"HTML, Meta Tags, Metadata"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"description"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"Learning about Meta Tags."</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"revised"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"Tutorialspoint, 3/7/2014"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">http-equiv</span><span class="pun">=</span><span class="atv">"refresh"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"5; url=https://www.tutorialspoint.com"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">Hello HTML5!</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Setting Cookies</h4>
<p>Cookies are data, stored in small text files on your computer and it is exchanged between web browser and web server to keep track of various information based on your web application need.</p>
<p>You can use &lt;meta&gt; tag to store cookies on client side and later this information can be used by the Web Server to track a site visitor.</p>

<h5>Example</h5>
<p>Following is an example of redirecting current page to another page after 5 seconds. If you want to redirect page immediately then do not specify <i>content</i> attribute.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Meta Tags Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"keywords"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"HTML, Meta Tags, Metadata"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"description"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"Learning about Meta Tags."</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"revised"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"Tutorialspoint, 3/7/2014"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">http-equiv</span><span class="pun">=</span><span class="atv">"cookie"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"userid=xyz; expires=Wednesday, 08-Aug-15 23:59:59 GMT;"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">Hello HTML5!</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>If you do not include the expiration date and time, the cookie is considered a session cookie and will be deleted when the user exits the browser.</p>
<p><b>Note: </b>You can check <a href="https://www.tutorialspoint.com/php/php_cookies.htm"><b>PHP and Cookies</b></a> tutorial for a complete detail on Cookies.</p>
<h4>Setting Author Name</h4>
<p>You can set an author name in a web page using meta tag. See an example below:</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Meta Tags Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"keywords"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"HTML, Meta Tags, Metadata"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"description"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"Learning about Meta Tags."</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"author"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"Mahnaz Mohtashim"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">Hello HTML5!</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Specify Character Set</h4>
<p>You can  use &lt;meta&gt; tag to specify character set used within the webpage.</p>
<h5>Example</h5>
<p>By default, Web servers and Web browsers use ISO-8859-1 (Latin1) encoding to process Web pages. Following is an example to set UTF-8 encoding:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Meta Tags Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"keywords"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"HTML, Meta Tags, Metadata"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"description"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"Learning about Meta Tags."</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"author"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"Mahnaz Mohtashim"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">http-equiv</span><span class="pun">=</span><span class="atv">"Content-Type"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"text/html; charset=UTF-8"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">Hello HTML5!</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>To serve the static page with traditional Chinese characters, the webpage must contain a &lt;meta&gt; tag to set Big5 encoding:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Meta Tags Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"keywords"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"HTML, Meta Tags, Metadata"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"description"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"Learning about Meta Tags."</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"author"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"Mahnaz Mohtashim"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">http-equiv</span><span class="pun">=</span><span class="atv">"Content-Type"</span><span class="pln"> </span><span class="atn">content</span><span class="pun">=</span><span class="atv">"text/html; charset=Big5"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">Hello HTML5!</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>


</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="13_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="15_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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