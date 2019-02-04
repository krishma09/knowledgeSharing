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
	$sid=22;
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



<p>HTML frames are used to divide your browser window into multiple sections where each section can load a separate HTML document. A collection of frames in the browser window is known as a frameset. The window is divided into frames in a similar way the tables are organized: into rows and columns.</p>
<h4>Disadvantages of Frames</h4>
<p>There are few drawbacks with using frames, so it's never recommended to use frames in your webpages:</p>
<ul class="list">
<li>Some smaller devices cannot cope with frames often because their screen is not big enough to be divided up.</li>
<li>Sometimes your page will be displayed differently on different computers due to different screen resolution.</li>
<li>The browser's <i>back button</i> might not work as the user hopes.</li>
<li>There are still few browsers that do not support frame technology.</li>
</ul>
<h4>Creating Frames</h4>
<p>To use frames on a page we use &lt;frameset&gt; tag instead of &lt;body&gt; tag. The &lt;frameset&gt; tag defines how to divide the window into frames. The <b>rows</b> attribute of &lt;frameset&gt; tag defines horizontal frames and <b>cols</b> attribute defines vertical frames. Each frame is indicated by &lt;frame&gt; tag and it defines which HTML document shall open into the frame.</p>
<h5>Example</h5>
<p>Following is the example to create three horizontal frames:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Frames</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;frameset</span><span class="pln"> </span><span class="atn">rows</span><span class="pun">=</span><span class="atv">"10%,80%,10%"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;frame</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"top"</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"/html/top_frame.htm"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;frame</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"main"</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"/html/main_frame.htm"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;frame</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"bottom"</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"/html/bottom_frame.htm"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;noframes&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      Your browser does not support frames.
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   </span><span class="tag">&lt;/noframes&gt;</span><span class="pln">
</span><span class="tag">&lt;/frameset&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<img src="images/html_frames.jpg" alt="HTML Horizontal Frames">
</div>
<h5>Example</h5>
<p>Let's put above example as follows, here we replaced rows attribute by cols and changed their width. This will create all the three frames vertically:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Frames</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;frameset</span><span class="pln"> </span><span class="atn">cols</span><span class="pun">=</span><span class="atv">"25%,50%,25%"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;frame</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"left"</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"/html/top_frame.htm"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;frame</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"center"</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"/html/main_frame.htm"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;frame</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"right"</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"/html/bottom_frame.htm"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;noframes&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      Your browser does not support frames.
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   </span><span class="tag">&lt;/noframes&gt;</span><span class="pln">
</span><span class="tag">&lt;/frameset&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result:</p>
<div class="result notranslate">
<img src="images/html_vertical_frames.jpg" alt="HTML Vertical Frames">
</div>
<h4>The &lt;frameset&gt; Tag Attributes</h4>
<p>Following are important attributes of the &lt;frameset&gt; tag:</p>
<table class="table table-bordered">
<tbody><tr><th>Attribute</th><th>Description</th></tr>
<tr><td>cols</td><td>specifies how many columns are contained in the frameset and the size of each column. You can specify the width of each column in one of four ways:
	<ul>
	<li><p>Absolute values in pixels. For example to create three vertical frames, use <i>cols="100, 500,100"</i>.</p></li>
	<li><p>A percentage of the browser window. For example to create three vertical frames, use <i>cols="10%, 80%,10%"</i>.</p></li>
	<li><p>Using a wildcard symbol. For example to create three  vertical frames, use <i>cols="10%, *,10%"</i>. In this case wildcard takes remainder of the window.</p></li>
	<li><p>As relative widths of the browser window. For example to create three vertical  frames, use <i>cols="3*,2*,1*"</i>. This is an alternative to percentages. You can use relative widths of the browser window. Here the window is divided into sixths: the first column takes up half of the window, the second takes one third, and the third takes one sixth.</p></li>
	</ul>
</td></tr>
<tr><td>rows</td><td>This attribute works just like the cols attribute and takes the same values, but it is used to specify the rows in the frameset. For example to create two horizontal frames, use <i>rows="10%, 90%"</i>. You can specify the height of each row in the same way as explained  above for columns.</td></tr>
<tr><td>border</td><td>This attribute specifies the width of the border of each frame in pixels. For example border="5". A value of zero means no border.</td></tr>
<tr><td>frameborder</td><td>This attribute specifies whether a three-dimensional border should be displayed between frames. This attrubute takes value either 1 (yes)  or 0 (no). For example frameborder="0" specifies no border.</td></tr>
<tr><td>framespacing</td><td>This attribute specifies the amount of space between frames in a frameset. This can take any integer value. For example framespacing="10" means there should be 10 pixels spacing between each frames.</td></tr>
</tbody></table>
<h4>The &lt;frame&gt; Tag Attributes</h4>
<p>Following are important attributes of &lt;frame&gt; tag:</p>
<table class="table table-bordered">
<tbody><tr><th>Attribute</th><th>Description</th></tr>
<tr><td>src</td><td>This attribute is used to give the file name that should be loaded in the frame. Its value can be any URL. For example, src="/html/top_frame.htm" will load an HTML file available in html directory.</td></tr>
<tr><td>name</td><td>This attribute allows you to give a name to a frame. It is used to indicate which frame a document should be loaded into. This is especially important when you want to create links in one frame that load pages into an another frame, in which case the second frame needs a name to identify itself as the target of the link.</td></tr>
<tr><td>frameborder</td><td>This attribute specifies whether or not the borders of that frame are shown; it overrides the value given in the frameborder attribute on the &lt;frameset&gt; tag if one is given, and this can take values either 1 (yes) or 0 (no).</td></tr>
<tr><td>marginwidth</td><td>This attribute allows you to specify the width of the space between the left and right of the frame's borders and the frame's content. The value is given in pixels. For example marginwidth="10".</td></tr>
<tr><td>marginheight</td><td>This attribute allows you to specify the height of the space between the top and bottom of the frame's borders and its contents. The value is given in pixels. For example marginheight="10".</td></tr>
<tr><td>noresize</td><td>By default you can resize any frame by clicking and dragging on the borders of a frame. The noresize attribute prevents a user from being able to resize the frame. For example noresize="noresize".</td></tr>
<tr><td>scrolling</td><td>This attribute controls the appearance of the scrollbars that appear on the frame. This takes values either "yes", "no" or "auto". For example scrolling="no" means it should not have scroll bars.</td></tr>
<tr><td>longdesc</td><td>This attribute allows you to provide a link to another page containing a long description of the contents of the frame. For example longdesc="framedescription.htm"</td></tr>
</tbody></table>
<h4>Frame's name and target attributes</h4>
<p>One of the most popular uses of frames is to place navigation bars in one frame and then load main pages into a separate frame.</p>
<p>Let's see following example where a test.htm file has following code:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;head&gt;</span><span class="pln">
</span><span class="tag">&lt;title&gt;</span><span class="pln">HTML Target Frames</span><span class="tag">&lt;/title&gt;</span><span class="pln">
</span><span class="tag">&lt;/head&gt;</span><span class="pln">
</span><span class="tag">&lt;frameset</span><span class="pln"> </span><span class="atn">cols</span><span class="pun">=</span><span class="atv">"200, *"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="tag">&lt;frame</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"/html/menu.htm"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"menu_page"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;frame</span><span class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span class="atv">"/html/main.htm"</span><span class="pln"> </span><span class="atn">name</span><span class="pun">=</span><span class="atv">"main_page"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
   </span><span class="tag">&lt;noframes&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      Your browser does not support frames.
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
   </span><span class="tag">&lt;/noframes&gt;</span><span class="pln">
</span><span class="tag">&lt;/frameset&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>Here we have created two columns  to fill with two frames. The first frame is 200 pixels wide and will contain the navigation menubar implemented by <b>menu.htm</b> file. The second column fills in remaining space and will contain the main part of the page and it is implemented by <b>main.htm</b> file. For all the three links available in menubar, we have mentioned target frame as <b>main_page</b>, so whenever you click any of the links in menubar, available link will open in main_page.</p>
<p>Following is the content of menu.htm file</p>
<pre class="prettyprint notranslate prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;body</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"#4a7d49"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"https://www.google.com"</span><span class="pln"> </span><span class="atn">target</span><span class="pun">=</span><span class="atv">"main_page"</span><span class="tag">&gt;</span><span class="pln">Google</span><span class="tag">&lt;/a&gt;</span><span class="pln">
</span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"https://www.microsoft.com"</span><span class="pln"> </span><span class="atn">target</span><span class="pun">=</span><span class="atv">"main_page"</span><span class="tag">&gt;</span><span class="pln">Microsoft</span><span class="tag">&lt;/a&gt;</span><span class="pln">
</span><span class="tag">&lt;br</span><span class="pln"> </span><span class="tag">/&gt;&lt;br</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
</span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"https://news.bbc.co.uk"</span><span class="pln"> </span><span class="atn">target</span><span class="pun">=</span><span class="atv">"main_page"</span><span class="tag">&gt;</span><span class="pln">BBC News</span><span class="tag">&lt;/a&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>Following is the content of main.htm file:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html&gt;</span><span class="pln">
</span><span class="tag">&lt;body</span><span class="pln"> </span><span class="atn">bgcolor</span><span class="pun">=</span><span class="atv">"#b5dcb3"</span><span class="tag">&gt;</span><span class="pln">
</span><span class="tag">&lt;h5&gt;</span><span class="pln">This is main page and content from any link will be displayed here.</span><span class="tag">&lt;/h5&gt;</span><span class="pln">
</span><span class="tag">&lt;p&gt;</span><span class="pln">So now click any link and see the result.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
</span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>When we load <b>test.htm</b> file, it produces following result:</p>
<div class="result notranslate">
<img src="images/frame_target_attribute.jpg" alt="Frame Target Attribute">
</div>
<p>Now you can try to click links available in the left panel and see the result. The <i>target</i> attribute can also take one of the following values:</p>
<table class="table table-bordered">
<tbody><tr><th>Option</th><th>Description</th></tr>
<tr><td>_self</td><td>Loads the page into the current frame.</td></tr>
<tr><td>_blank</td><td>Loads a page into a new browser window.opening a new window.</td></tr>
<tr><td>_parent</td><td>Loads the page into the parent window, which in the case of a single frameset is the main browser window.</td></tr>
<tr><td>_top</td><td>Loads the page into the browser window, replacing any current frames.</td></tr>
<tr><td>targetframe</td><td>Loads the page into a named targetframe.</td></tr>
</tbody></table>








</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="21_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="23_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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