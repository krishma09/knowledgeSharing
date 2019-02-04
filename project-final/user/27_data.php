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
	$sid=27;
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




<p>Fonts play very important role in making a website more user friendly and increasing content readability. Font face and color depends entirely on the computer and browser that is being used to view your page but you can use HTML <b>&lt;font&gt;</b> tag to add style, size, and color to the text on your website. You can use a <b>&lt;basefont&gt;</b> tag to set all of your text to the same size, face, and color.</p>

<p>The font tag is having three attributes called <b>size, color</b>, and <b>face</b> to customize your fonts.  To change any of the font attributes at any time within your webpage, simply use the &lt;font&gt; tag. The text that follows will remain changed until you close with the &lt;/font&gt; tag. You can change one or all of the font attributes within one &lt;font&gt; tag.</p>
<blockquote><b>Note: </b>The font and basefont tags are deprecated and it is supposed to be removed in a future version of HTML. So they should not be used rather, it's suggested to use CSS styles to manipulate your fonts. But still for learning purpose, this chapter will explain font and basefont tags in detail.</blockquote>
<h4>Set Font Size</h4>
<p>You can set content font size using <b>size</b> attribute. The range of accepted values is from 1(smallest) to 7(largest). The default size of a font is 3.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Setting Font Size</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"1"</span><span class="tag">&gt;</span><span class="pln">Font size="1"</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"2"</span><span class="tag">&gt;</span><span class="pln">Font size="2"</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"3"</span><span class="tag">&gt;</span><span class="pln">Font size="3"</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"4"</span><span class="tag">&gt;</span><span class="pln">Font size="4"</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"5"</span><span class="tag">&gt;</span><span class="pln">Font size="5"</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"6"</span><span class="tag">&gt;</span><span class="pln">Font size="6"</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"7"</span><span class="tag">&gt;</span><span class="pln">Font size="7"</span><span class="tag">&lt;/font&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<font size="1">Font size="1"</font><br>
<font size="2">Font size="2"</font><br>
<font size="3">Font size="3"</font><br>
<font size="4">Font size="4"</font><br>
<font size="5">Font size="5"</font><br>
<font size="6">Font size="6"</font><br>
<font size="7">Font size="7"</font>
</div>
<h4>Relative Font Size</h4>
<p>You can specify how many sizes larger or how many sizes smaller than the preset font size should be.  You can specify it like <b>&lt;font size="+n"&gt; or &lt;font size="-n"&gt;</b></p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Relative Font Size</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"-1"</span><span class="tag">&gt;</span><span class="pln">Font size="-1"</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"+1"</span><span class="tag">&gt;</span><span class="pln">Font size="+1"</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"+2"</span><span class="tag">&gt;</span><span class="pln">Font size="+2"</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"+3"</span><span class="tag">&gt;</span><span class="pln">Font size="+3"</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"+4"</span><span class="tag">&gt;</span><span class="pln">Font size="+4"</span><span class="tag">&lt;/font&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<font size="-1">Font size="-1"</font><br>
<font size="+1">Font size="+1"</font><br>
<font size="+2">Font size="+2"</font><br>
<font size="+3">Font size="+3"</font><br>
<font size="+4">Font size="+4"</font>
</div>
<h4>Setting Font Face</h4>
<p>You can set  font face using <i>face</i> attribute but be aware that if the user viewing the page doesn't have the font installed, they will not be able to see it. Instead user will see the default font face applicable to the user's computer.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Font Face</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">face</span><span class="pun">=</span><span class="atv">"Times New Roman"</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"5"</span><span class="tag">&gt;</span><span class="pln">Times New Roman</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">face</span><span class="pun">=</span><span class="atv">"Verdana"</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"5"</span><span class="tag">&gt;</span><span class="pln">Verdana</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">face</span><span class="pun">=</span><span class="atv">"Comic sans MS"</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"5"</span><span class="tag">&gt;</span><span class="pln">Comic Sans MS</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">face</span><span class="pun">=</span><span class="atv">"WildWest"</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"5"</span><span class="tag">&gt;</span><span class="pln">WildWest</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">face</span><span class="pun">=</span><span class="atv">"Bedrock"</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"5"</span><span class="tag">&gt;</span><span class="pln">Bedrock</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<font face="Times New Roman" size="5">Times New Roman</font><br>
<font face="Verdana" size="5">Verdana</font><br>
<font face="Comic sans MS" size="5">Comic Sans MS</font><br>
<font face="WildWest" size="5">WildWest</font><br>
<font face="Bedrock" size="5">Bedrock</font>
</div>
<h4>Specify alternate font faces</h4>
<p>A visitor will only be able to see your font if they have that font installed on their computer. So, it is possible to specify two or more font face alternatives by listing the font face names, separated by a comma. </p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">face</span><span class="pun">=</span><span class="atv">"arial,helvetica"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">face</span><span class="pun">=</span><span class="atv">"Lucida Calligraphy,Comic Sans MS,Lucida Console"</span><span class="tag">&gt;</span></pre>
<p>When your page is loaded, their browser will display the first font face available. If none of  the given fonts are installed, then it will display the default font face <i>Times New Roman</i>.</p>
<p><b>Note: </b>Check a complete list of <a href="/html/html_fonts_ref.htm"><b>HTML Standard Fonts</b></a>.</p>
<h4>Setting Font Color</h4>
<p>You can set any font color you like using <i>color</i> attribute. You can specify the color that you want by either the color name or hexadecimal code for that color.</p>
<p><b>Note: </b>You can check a complete list of <a href="/html/html_color_names.htm"><b>HTML Color Name with Codes</b></a>.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Setting Font Color</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">color</span><span class="pun">=</span><span class="atv">"#FF00FF"</span><span class="tag">&gt;</span><span class="pln">This text is in pink</span><span class="tag">&lt;/font&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;font</span><span class="pln"> </span><span class="atn">color</span><span class="pun">=</span><span class="atv">"red"</span><span class="tag">&gt;</span><span class="pln">This text is red</span><span class="tag">&lt;/font&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<font color="#FF00FF">This text is in pink</font><br>
<font color="red">This text is red</font>
</div>
<h4>The &lt;basefont&gt; Element:</h4>
<p>The &lt;basefont&gt; element is supposed to set a default font size, color, and typeface for any parts of the document that are not otherwise contained within a &lt;font&gt; tag. You can  use the &lt;font&gt; elements to override the &lt;basefont&gt; settings.</p>
<p>The &lt;basefont&gt; tag also takes color, size and face attributes and it will support relative font setting  by giving size a value of +1 for a size larger or -2 for two sizes smaller.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">Setting Basefont Color</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;basefont</span><span class="pln"> </span><span class="atn">face</span><span class="pun">=</span><span class="atv">"arial, verdana, sans-serif"</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"2"</span><span class="pln"> </span><span class="atn">color</span><span class="pun">=</span><span class="atv">"#ff0000"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">This is the page's default font.</span><span class="tag">&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;h4&gt;</span><span class="pln">Example of the &amp;lt;basefont&amp;gt; Element</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;&lt;font</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"+2"</span><span class="pln"> </span><span class="atn">color</span><span class="pun">=</span><span class="atv">"darkgray"</span><span class="tag">&gt;</span><span class="pln">
This is darkgray text with two sizes larger
</span><span class="tag">&lt;/font&gt;&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;p&gt;&lt;font</span><span class="pln"> </span><span class="atn">face</span><span class="pun">=</span><span class="atv">"courier"</span><span class="pln"> </span><span class="atn">size</span><span class="pun">=</span><span class="atv">"-1"</span><span class="pln"> </span><span class="atn">color</span><span class="pun">=</span><span class="atv">"#000000"</span><span class="tag">&gt;</span><span class="pln">
It is a courier font, a size smaller and black in color.
</span><span class="tag">&lt;/font&gt;&lt;/p&gt;</span><span class="pln">

</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<basefont face="arial, verdana, sans-serif" size="2" color="#ff0000">
<p>This is the page's default font.</p>

<h4>Example of the &lt;basefont&gt; Element</h4>
<p><font size="+2" color="darkgray">
This is darkgray text with two sizes larger
</font></p>

<p><font face="courier" size="-1" color="#000000">
It is a courier font, a size smaller and black in color.
</font></p>
</div>






</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="26_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="28_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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