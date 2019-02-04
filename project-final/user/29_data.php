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
	$sid=29;
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




<p>Sometimes you need to add music or video into your web page. The easiest way to add video or sound to your web site is to include the special HTML tag called <b>&lt;embed&gt;</b>. This tag causes the browser itself to include controls for the multimedia automatically provided browser supports &lt;embed&gt; tag and given media type.</p>

<p>You can also include a <b>&lt;noembed&gt;</b> tag for the browsers which don't recognize the &lt;embed&gt; tag. You could, for example, use &lt;embed&gt; to display a movie of your choice, and &lt;noembed&gt;  to display a single  JPG image if browser does not support &lt;embed&gt; tag.</p>
<h5>Example</h5>
<p>Here is a simple example to play an embedded  midi file:</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML embed Tag</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;embed</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"/html/yourfile.mid"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"100%"</span><span class="pln"> </span><span class="atn">height</span><span class="pun">=</span><span class="atv">"60"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;noembed&gt;&lt;img</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"yourimage.gif"</span><span class="pln"> </span><span class="atn">alt</span><span class="pun">=</span><span class="atv">"Alternative Media"</span><span class="pln"> </span><span class="tag">&gt;&lt;/noembed&gt;</span><span class="pln">
</span><span class="tag">&lt;/embed&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<embed src="/html/yourfile.mid" width="100%" height="60">
   <noembed>&lt;img src="/html/images/html.jpg" alt="Alternative Media" /&gt;</noembed>

</div>
<p>You can put any media file in src attribute. You can try it yourself by giving various types of files.</p>
<h4>The &lt;embed&gt; Tag Attributes</h4>
<p>Following is the list of important attributes which can be used with &lt;embed&gt; tag.</p>
<table class="table table-bordered">
<tbody><tr><th>Attribute</th><th>Description</th></tr>
<tr><td>align</td><td>Determines how to align the object. It can be set to either <i>center, left or right</i>.</td></tr>
<tr><td>autostart</td><td>This boolean attribute indicates if the media should start automatically. You can set it either true or false.</td></tr>
<tr><td>loop</td><td>Specifies if the sound should be played continuously (set loop to true), a certain number of times (a positive value) or not at all (false)</td></tr>
<tr><td>playcount</td><td>Specifies the number of times to play the sound. This is alternate option for <i>loop</i> if you are usiong IE.</td></tr>
<tr><td>hidden</td><td>Specifies if the multimedia object should be shown on the page. A false value  means no and true values means yes.</td></tr>
<tr><td>width</td><td>Width of the object in pixels</td></tr>
<tr><td>height</td><td>Height of the object in pixels</td></tr>
<tr><td>name</td><td>A name used to reference the object.</td></tr>
<tr><td>src</td><td>URL of the object to be embedded. </td></tr>
<tr><td>volume</td><td>Controls volume of the sound. Can be from 0 (off) to 100 (full volume).</td></tr>
</tbody></table>
<h4>Supported Video Types</h4>
<p>You can use various media types like Flash movies (.swf), AVI's (.avi), and MOV's (.mov) file types inside embed tag.</p>
<ul class="list">
<li>.swf files - are the file types created by Macromedia's Flash program.</li>
<li>.wmv files - are Microsoft's Window's Media Video file types.</li>
<li>.mov files - are Apple's Quick Time Movie format.</li>
<li>.mpeg files - are movie files created by the Moving Pictures Expert Group.</li>
</ul>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML embed Tag</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;embed</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"/html/yourfile.swf"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"200"</span><span class="pln"> </span><span class="atn">height</span><span class="pun">=</span><span class="atv">"200"</span><span class="pln"> </span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;noembed&gt;&lt;img</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"yourimage.gif"</span><span class="pln"> </span><span class="atn">alt</span><span class="pun">=</span><span class="atv">"Alternative Media"</span><span class="pln"> </span><span class="tag">&gt;&lt;/noembed&gt;</span><span class="pln">
</span><span class="tag">&lt;/embed&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Background Audio</h4>
<p>You can use HTML <b>&lt;bgsound&gt;</b> tag to play a soundtrack in the background of your webpage. This tag is supported by Internet Explorer only and most of the other browsers ignore this tag. It downloads and plays an audio file when the host document is first downloaded by the user and displayed. The background sound file also will replay whenever the user refreshes the browser.</p>
<p>This tag is having only two attributes <i>loop</i> and <i>src</i>. Both these attributes have same meaning as explained above.</p>
<p>Here is a simple example to play a small midi file:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML embed Tag</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;body&gt;</span><span class="pln">
</span><span class="tag">&lt;bgsound</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"/html/yourfile.mid"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;noembed&gt;&lt;img</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"yourimage.gif"</span><span class="pln"> </span><span class="tag">&gt;&lt;/noembed&gt;</span><span class="pln">
</span><span class="tag">&lt;/bgsound&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce blank screen. This tag does not display any component and remains hidden.</p>
<div class="result notranslate">
<bgsound src="/html/yourfile.mid"></bgsound>
   <noembed>&lt;img src="/html/images/html.jpg" alt="Alternative Media" /&gt;</noembed>

</div>
<p>Internet Explorer can also handle only three different sound format files: wav, the native format for PCs; au, the native format for most Unix workstations; and MIDI, a universal music-encoding scheme.</p>
<h4>HTML Object tag</h4>
<p>HTML 4 introduces the <b>&lt;object&gt;</b> element, which offers an all-purpose solution to generic object inclusion. The &lt;object&gt; element allows HTML authors to specify everything required by an object for its presentation by a user agent</p>
<p>Here are few examples:</p>
<h5>Example - 1</h5>

<p>You can embed an HTML document in an HTML document itself as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;object</span><span class="pln"> </span><span class="atn">data</span><span class="pun">=</span><span class="atv">"data/test.htm"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/html"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"300"</span><span class="pln"> </span><span class="atn">height</span><span class="pun">=</span><span class="atv">"200"</span><span class="tag">&gt;</span><span class="pln">
  alt : </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"data/test.htm"</span><span class="tag">&gt;</span><span class="pln">test.htm</span><span class="tag">&lt;/a&gt;</span><span class="pln">
</span><span class="tag">&lt;/object&gt;</span></pre>
<p>Here <i>alt</i> attribute will come into picture if browser does not support <i>object</i> tag.</p>
<h5>Example - 2</h5>
<p>You can embed a PDF document in an HTML document as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;object</span><span class="pln"> </span><span class="atn">data</span><span class="pun">=</span><span class="atv">"data/test.pdf"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"application/pdf"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"300"</span><span class="pln"> </span><span class="atn">height</span><span class="pun">=</span><span class="atv">"200"</span><span class="tag">&gt;</span><span class="pln">
  alt : </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"data/test.pdf"</span><span class="tag">&gt;</span><span class="pln">test.htm</span><span class="tag">&lt;/a&gt;</span><span class="pln">
</span><span class="tag">&lt;/object&gt;</span></pre> 

<h5>Example - 3</h5>
<p>You can specify some parameters related to the document with the <b>&lt;param&gt;</b> tag. Here is an example to embed a wav  file:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;object</span><span class="pln"> </span><span class="atn">data</span><span class="pun">=</span><span class="atv">"data/test.wav"</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"audio/x-wav"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"200"</span><span class="pln"> </span><span class="atn">height</span><span class="pun">=</span><span class="atv">"20"</span><span class="tag">&gt;</span><span class="pln">
  </span><span class="tag">&lt;param</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"src"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"data/test.wav"</span><span class="tag">&gt;</span><span class="pln">
  </span><span class="tag">&lt;param</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"autoplay"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"false"</span><span class="tag">&gt;</span><span class="pln">
  </span><span class="tag">&lt;param</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"autoStart"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"0"</span><span class="tag">&gt;</span><span class="pln">
  alt : </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"data/test.wav"</span><span class="tag">&gt;</span><span class="pln">test.wav</span><span class="tag">&lt;/a&gt;</span><span class="pln">
</span><span class="tag">&lt;/object&gt;</span></pre>
<h5>Example - 4</h5>
<p>You can add a flash document as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;object</span><span class="pln"> </span><span class="atn">classid</span><span class="pun">=</span><span class="atv">"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"</span><span class="pln"> </span><span class="atn">id</span><span class="pun">=</span><span class="atv">"penguin"</span><span class="pln"> 
   </span><span class="atn">codebase</span><span class="pun">=</span><span class="atv">"someplace/swflash.cab"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"200"</span><span class="pln"> </span><span class="atn">height</span><span class="pun">=</span><span class="atv">"300"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;param</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"movie"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"flash/penguin.swf"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;param</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"quality"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"high"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"penguin.jpg"</span><span class="pln"> </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"200"</span><span class="pln"> </span><span class="atn">height</span><span class="pun">=</span><span class="atv">"300"</span><span class="pln"> </span><span class="atn">alt</span><span class="pun">=</span><span class="atv">"Penguin"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;/object&gt;</span></pre>
<h5>Example - 5</h5>
<p>You can add a java applet into HTML document as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;object</span><span class="pln"> </span><span class="atn">classid</span><span class="pun">=</span><span class="atv">"clsid:8ad9c840-044e-11d1-b3e9-00805f499d93"</span><span class="pln"> 
   </span><span class="atn">width</span><span class="pun">=</span><span class="atv">"200"</span><span class="pln"> </span><span class="atn">height</span><span class="pun">=</span><span class="atv">"200"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;param</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"code"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"applet.class"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;/object&gt;</span></pre>
<p>The <b>classid</b> attribute identifies which version of Java Plug-in to use. You can use the optional <i>codebase</i> attribute to specify if and how to download the JRE.</p>














</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="28_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="30_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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