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
	$sid=225;
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
<p>It is possible to pass some values from the command line to your C programs when they are executed. These values are called <b>command line arguments</b> and many times they are important for your program especially when you want to control your program from outside instead of hard coding those values inside the code.</p>
<p>The command line arguments are handled using main() function arguments where <b>argc</b> refers to the number of arguments passed, and <b>argv[]</b> is a pointer array which points to each argument passed to the program. Following is a simple example which checks if there is any argument supplied from the command line and take action accordingly −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> argc</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">char</span><span class="pln"> </span><span class="pun">*</span><span class="pln">argv</span><span class="pun">[]</span><span class="pln"> </span><span class="pun">)</span><span class="pln">  </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> argc </span><span class="pun">==</span><span class="pln"> </span><span class="lit">2</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      printf</span><span class="pun">(</span><span class="str">"The argument supplied is %s\n"</span><span class="pun">,</span><span class="pln"> argv</span><span class="pun">[</span><span class="lit">1</span><span class="pun">]);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln"> </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> argc </span><span class="pun">&gt;</span><span class="pln"> </span><span class="lit">2</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      printf</span><span class="pun">(</span><span class="str">"Too many arguments supplied.\n"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      printf</span><span class="pun">(</span><span class="str">"One argument expected.\n"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed with single argument, it produces the following result.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$</span><span class="pun">./</span><span class="pln">a</span><span class="pun">.</span><span class="kwd">out</span><span class="pln"> testing
</span><span class="typ">The</span><span class="pln"> argument supplied </span><span class="kwd">is</span><span class="pln"> testing</span></pre>
<p>When the above code is compiled and executed with a two arguments, it produces the following result.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$</span><span class="pun">./</span><span class="pln">a</span><span class="pun">.</span><span class="kwd">out</span><span class="pln"> testing1 testing2
</span><span class="typ">Too</span><span class="pln"> many arguments supplied</span><span class="pun">.</span></pre>
<p>When the above code is compiled and executed without passing any argument, it produces the following result.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">$</span><span class="pun">./</span><span class="pln">a</span><span class="pun">.</span><span class="kwd">out</span><span class="pln">
</span><span class="typ">One</span><span class="pln"> argument expected</span></pre>
<p>It should be noted that <b>argv[0]</b> holds the name of the program itself and <b>argv[1]</b> is a pointer to the first command line argument supplied, and *argv[n] is the last argument. If no arguments are supplied, argc will be one, and if you pass one argument then <b>argc</b> is set at 2.</p>
<p>You pass all the command line arguments separated by a space, but if argument itself has a space then you can pass such arguments by putting them inside double quotes "" or single quotes ''. Let us re-write above example once again where we will print program name and we also pass a command line argument by putting inside double quotes −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> argc</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">char</span><span class="pln"> </span><span class="pun">*</span><span class="pln">argv</span><span class="pun">[]</span><span class="pln"> </span><span class="pun">)</span><span class="pln">  </span><span class="pun">{</span><span class="pln">

   printf</span><span class="pun">(</span><span class="str">"Program name %s\n"</span><span class="pun">,</span><span class="pln"> argv</span><span class="pun">[</span><span class="lit">0</span><span class="pun">]);</span><span class="pln">
 
   </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> argc </span><span class="pun">==</span><span class="pln"> </span><span class="lit">2</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      printf</span><span class="pun">(</span><span class="str">"The argument supplied is %s\n"</span><span class="pun">,</span><span class="pln"> argv</span><span class="pun">[</span><span class="lit">1</span><span class="pun">]);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln"> </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> argc </span><span class="pun">&gt;</span><span class="pln"> </span><span class="lit">2</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      printf</span><span class="pun">(</span><span class="str">"Too many arguments supplied.\n"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
      printf</span><span class="pun">(</span><span class="str">"One argument expected.\n"</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed with a single argument separated by space but inside double quotes, it produces the following result.</p>
<pre class="result notranslate">$./a.out "testing1 testing2"

Progranm name ./a.out
The argument supplied is testing1 testing2
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="224_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<!--<a href="2_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>-->
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