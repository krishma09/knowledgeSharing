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
<title>C Tutorials | knowledge.com</title>
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
	$sid=215;
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

<p>The C programming language provides a keyword called <b>typedef</b>, which you can use to give a type, a new name. Following is an example to define a term <b>BYTE</b> for one-byte numbers −</p>
<pre class="result notranslate">typedef unsigned char BYTE;
</pre>
<p>After this type definition, the identifier BYTE can be used as an abbreviation for the type <b>unsigned char, for example.</b>.</p>
<pre class="result notranslate">BYTE  b1, b2;
</pre>
<p>By convention, uppercase letters are used for these definitions to remind the user that the type name is really a symbolic abbreviation, but you can use lowercase, as follows −</p>
<pre class="result notranslate">typedef unsigned char byte;
</pre>
<p>You can use <b>typedef</b> to give a name to your user defined data types as well. For example, you can use typedef with structure to define a new data type and then use that data type to define structure variables directly as follows −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;string.h&gt;</span><span class="pln">
 
</span><span class="kwd">typedef</span><span class="pln"> </span><span class="kwd">struct</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> title</span><span class="pun">[</span><span class="lit">50</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> author</span><span class="pun">[</span><span class="lit">50</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> subject</span><span class="pun">[</span><span class="lit">100</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln"> book_id</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln"> </span><span class="typ">Book</span><span class="pun">;</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="typ">Book</span><span class="pln"> book</span><span class="pun">;</span><span class="pln">
 
   strcpy</span><span class="pun">(</span><span class="pln"> book</span><span class="pun">.</span><span class="pln">title</span><span class="pun">,</span><span class="pln"> </span><span class="str">"C Programming"</span><span class="pun">);</span><span class="pln">
   strcpy</span><span class="pun">(</span><span class="pln"> book</span><span class="pun">.</span><span class="pln">author</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Nuha Ali"</span><span class="pun">);</span><span class="pln"> 
   strcpy</span><span class="pun">(</span><span class="pln"> book</span><span class="pun">.</span><span class="pln">subject</span><span class="pun">,</span><span class="pln"> </span><span class="str">"C Programming Tutorial"</span><span class="pun">);</span><span class="pln">
   book</span><span class="pun">.</span><span class="pln">book_id </span><span class="pun">=</span><span class="pln"> </span><span class="lit">6495407</span><span class="pun">;</span><span class="pln">
 
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book title : %s\n"</span><span class="pun">,</span><span class="pln"> book</span><span class="pun">.</span><span class="pln">title</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book author : %s\n"</span><span class="pun">,</span><span class="pln"> book</span><span class="pun">.</span><span class="pln">author</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book subject : %s\n"</span><span class="pun">,</span><span class="pln"> book</span><span class="pun">.</span><span class="pln">subject</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book book_id : %d\n"</span><span class="pun">,</span><span class="pln"> book</span><span class="pun">.</span><span class="pln">book_id</span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Book  title : C Programming
Book  author : Nuha Ali
Book  subject : C Programming Tutorial
Book  book_id : 6495407
</pre>
<h4>typedef vs #define</h4>
<p><b>#define</b> is a C-directive which is also used to define the aliases for various data types similar to <b>typedef</b> but with the following differences −</p>
<ul class="list">
<li><p><b>typedef</b> is limited to giving symbolic names to types only where as <b>#define</b> can be used to define alias for values as well, q., you can define 1 as ONE etc.</p></li>
<li><p><b>typedef</b> interpretation is performed by the compiler whereas <b>#define</b> statements are processed by the pre-processor.</p></li>
</ul>

<p>The following example shows how to use #define in a program −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
 
</span><span class="com">#define</span><span class="pln"> TRUE  </span><span class="lit">1</span><span class="pln">
</span><span class="com">#define</span><span class="pln"> FALSE </span><span class="lit">0</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Value of TRUE : %d\n"</span><span class="pun">,</span><span class="pln"> TRUE</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Value of FALSE : %d\n"</span><span class="pun">,</span><span class="pln"> FALSE</span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Value of TRUE : 1
Value of FALSE : 0
</pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="214_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="216_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'c_header.php'; ?></aside>
 
  
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