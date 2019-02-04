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
<title>BOOTSTRAP Tutorials | knowledge.com</title>
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
	$sid=136;
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



<p>Twitter Bootstrap is the most popular front end framework in the recent time. It is sleek, intuitive, and powerful mobile first front-end framework for faster and easier web development. It uses HTML, CSS and Javascript. This tutorial will teach you the basics of Bootstrap Framework using which you can create web projects with ease. The tutorial is divided into sections such as Bootstrap Basic Structure, Bootstrap CSS, Bootstrap Layout Components and Bootstrap Plugins. Each of these sections contain related topics with simple and useful examples.</p>
<h4>Audience</h4>
<p>This tutorial has been prepared for anyone who has a basic knowledge of HTML and CSS and has an urge to develop websites. After completing this tutorial you will find yourself at a moderate level of expertise in developing web projects using Twitter Bootstrap.</p>
<h4>Prerequisites</h4>
<p>Before you start proceeding with this tutorial, we are assuming that you are already aware about the basics of HTML and CSS. If you are not well aware of these concepts then we will suggest you to go through our short tutorial on HTML Tutorial and CSS Tutorial.</p>
<h4>Execute Bootstrap Online</h4>
<p>You do not need to have your own environment to start learning Bootstrap programming! We have set up an on-line compiler for you that can be used to compile and execute the programs on-line.</p>
<p>For most of the examples available in this tutorial, you will find a Try it option at the top right corner of the code box. Use it to verify the programs and check the outcome with different options. Feel free to modify any example and execute it online.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="dec">&lt;!DOCTYPE html&gt;</span><span class="pln">
</span><span class="tag">&lt;html</span><span class="pln"> </span><span class="atn">lang</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"en"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">charset</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"utf-8"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">http-equiv</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"X-UA-Compatible"</span><span class="pln"> </span><span class="atn">content</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"IE = edge"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;meta</span><span class="pln"> </span><span class="atn">name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"viewport"</span><span class="pln"> </span><span class="atn">content</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"width = device-width, initial-scale = 1"</span><span class="tag">&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Bootstrap 101 Template</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      
      </span><span class="com">&lt;!-- Bootstrap --&gt;</span><span class="pln">
      </span><span class="tag">&lt;link</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"</span><span class="pln"> </span><span class="atn">rel</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"stylesheet"</span><span class="tag">&gt;</span><span class="pln">
      
      </span><span class="com">&lt;!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --&gt;</span><span class="pln">
      </span><span class="com">&lt;!-- WARNING: Respond.js doesn't work if you view the page via file:// --&gt;</span><span class="pln">
      
      </span><span class="com">&lt;!--[if lt IE 9]&gt;
      &lt;script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"&gt;&lt;/script&gt;
      &lt;script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"&gt;&lt;/script&gt;
      &lt;![endif]--&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;h4&gt;</span><span class="pln">Hello, world!</span><span class="tag">&lt;/h4&gt;</span><span class="pln">
      
      </span><span class="com">&lt;!-- jQuery (necessary for Bootstrap's JavaScript plugins) --&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      
      </span><span class="com">&lt;!-- Include all compiled plugins (below), or include individual files as needed --&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>


 

<div class="sc_line sc_line_style_solid margin_top_3em"></div>
</strong>

<div class="btn-group" style=" padding-left:550px;" >
<a href="137_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
 </div>
 
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'bootstrap_header.php'; ?>
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