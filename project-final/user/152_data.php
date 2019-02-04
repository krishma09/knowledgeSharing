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
	$sid=152;
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




<p>The navbar is one of the prominent features of Bootstrap sites. Navbars are responsive 'meta' components that serve as navigation headers for your application or site. Navbars collapse in mobile views and become horizontal as the available viewport width increases. At its core, the navbar includes styling for site names and basic navigation.</p>
<h4>Default Navbar</h4>
<p>To create a default navbar −</p>
<ul class="list">
<li><p>Add the classes <b>.navbar, .navbar-default</b> to the &lt;nav&gt; tag.</p></li>
<li><p>Add <b>role = "navigation"</b> to the above element, to help with accessibility.</p></li>
<li><p>Add a header class <b>.navbar-header</b> to the &lt;div&gt; element. Include an &lt;a&gt; element with class <b>navbar-brand</b>. This will give the text a slightly larger size.</p></li>
<li><p>To add links to the navbar, simply add an unordered list with the classes of <b>.nav, .navbar-nav</b>.</p></li>
</ul>
<p>The following example demonstrates this −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;nav</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar navbar-default"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navigation"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-header"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-brand"</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">TutorialsPoint</span><span class="tag">&lt;/a&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
      </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"nav navbar-nav"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"active"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">iOS</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">SVN</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
			
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
               Java 
               </span><span class="tag">&lt;b</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/b&gt;</span><span class="pln">
            </span><span class="tag">&lt;/a&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">jmeter</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">EJB</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Jasper Report</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">One more separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
            
         </span><span class="tag">&lt;/li&gt;</span><span class="pln">
			
      </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/nav&gt;</span></pre>
<img src="images/defaultnavbar_demo.jpg" alt="Default Navbar Demo">
<h4>Responsive Navbar</h4>
<p>To add responsive features to the navbar, the content that you want to be collapsed needs to be wrapped in a &lt;div&gt; with classes <b>.collapse, .navbar-collapse</b>. The collapsing nature is tripped by a button that has the class of <b>.navbar-toggle</b> and then features two data- elements. The first, <b>data-toggle</b>, is used to tell the JavaScript what to do with the button, and the second, <b>data-target</b>, indicates which element to toggle. Then <spans> with a class <b>.icon-bar</b> create what we like to call the hamburger button. This will toggle the elements that are in the <b>.nav-collapse</b> &lt;div&gt;. For this feature to work, you need to include the <a href="/bootstrap/bootstrap_collapse_plugin.htm">Bootstrap Collapse Plugin</a>.</spans></p>
<p>The following example demonstrates this −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;nav</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar navbar-default"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navigation"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-header"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-toggle"</span><span class="pln"> 
         </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"collapse"</span><span class="pln"> </span><span class="atn">data-target</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#example-navbar-collapse"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"sr-only"</span><span class="tag">&gt;</span><span class="pln">Toggle navigation</span><span class="tag">&lt;/span&gt;</span><span class="pln">
         </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"icon-bar"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
         </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"icon-bar"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
         </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"icon-bar"</span><span class="tag">&gt;&lt;/span&gt;</span><span class="pln">
      </span><span class="tag">&lt;/button&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-brand"</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">TutorialsPoint</span><span class="tag">&lt;/a&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"collapse navbar-collapse"</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"example-navbar-collapse"</span><span class="tag">&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"nav navbar-nav"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"active"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">iOS</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">SVN</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
			
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
               Java 
               </span><span class="tag">&lt;b</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/b&gt;</span><span class="pln">
            </span><span class="tag">&lt;/a&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">jmeter</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">EJB</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Jasper Report</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">One more separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
            
         </span><span class="tag">&lt;/li&gt;</span><span class="pln">
			
      </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/nav&gt;</span></pre>
<img src="images/responsivenavbar_demo.jpg" alt="Responsive Navbar Demo">

<h4>Forms in Navbar</h4>
<p>Instead of using the default class-based forms from Chapter <a href="/bootstrap/bootstrap_forms.htm">Bootstrap Forms</a>, forms that are in the navbar, use the <b>.navbar-form</b> class. This ensures that the form’s proper vertical alignment and collapsed behavior in narrow viewports. Use the alignment options (explained in Component alignment section) to decide where it resides within the navbar content.</p>
<p>The following example demonstrates this −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;nav</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar navbar-default"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navigation"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-header"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-brand"</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">TutorialsPoint</span><span class="tag">&lt;/a&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-form navbar-left"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"search"</span><span class="tag">&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Search"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
         </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Submit</span><span class="tag">&lt;/button&gt;</span><span class="pln">
         
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">    
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/nav&gt;</span></pre>
<h4>Buttons in Navbar</h4>
<p>You can add buttons using class <b>.navbar-btn</b>  to &lt;button&gt; elements not residing in a &lt;form&gt; to vertically center them in the navbar. <b>.navbar-btn</b> can be used on &lt;a&gt; and &lt;input&gt; elements.</p>
<p>The following example demonstrates this −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;nav</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar navbar-default"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navigation"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-header"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-brand"</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">TutorialsPoint</span><span class="tag">&lt;/a&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-form navbar-left"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"search"</span><span class="tag">&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-group"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"form-control"</span><span class="pln"> </span><span class="atn">placeholder</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Search"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;/div&gt;</span><span class="pln">
			
         </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Submit Button</span><span class="tag">&lt;/button&gt;</span><span class="pln">
         
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">  
		
      </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default navbar-btn"</span><span class="tag">&gt;</span><span class="pln">Navbar Button</span><span class="tag">&lt;/button&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/nav&gt;</span></pre>
<h4>Text in Navbar</h4>
<p>To wrap strings of text in an element use the class <b>.navbar-text</b>. This is usually used with &lt;p&gt; tag for proper leading and color. The following example demonstrates this −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;nav</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar navbar-default"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navigation"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-header"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-brand"</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">TutorialsPoint</span><span class="tag">&lt;/a&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-text"</span><span class="tag">&gt;</span><span class="pln">Signed in as Thomas</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/nav&gt;</span></pre>
<h4>Non-nav Links</h4>
<p>If you want to use the standard links that are not within the regular navbar navigation component, then use the class <b>navbar-link</b> to add proper colors for the default and inverse navbar options as shown in the following example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;nav</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar navbar-default"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navigation"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-header"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-brand"</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">TutorialsPoint</span><span class="tag">&lt;/a&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-text navbar-right"</span><span class="tag">&gt;</span><span class="pln">
         Signed in as 
         </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-link"</span><span class="tag">&gt;</span><span class="pln">Thomas</span><span class="tag">&lt;/a&gt;</span><span class="pln">
      </span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/nav&gt;</span></pre>
<img src="images/nonnavlinks_demo.jpg" alt="Non-Nav Links Demo">
<h4>Component Alignment</h4>
<p>You can align the components like <i>nav links, forms, buttons, or text</i> to left or right in a navbar using the utility classes <b>.navbar-left</b> or <b>.navbar-right</b>. Both classes will add a CSS float in the specified direction. The following example demonstrates this −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;nav</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar navbar-default"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navigation"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-header"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-brand"</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">TutorialsPoint</span><span class="tag">&lt;/a&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
      
      </span><span class="com">&lt;!--Left Align--&gt;</span><span class="pln">
      </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"nav navbar-nav navbar-left"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
               Java 
               </span><span class="tag">&lt;b</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/b&gt;</span><span class="pln">
            </span><span class="tag">&lt;/a&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">jmeter</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">EJB</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Jasper Report</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">One more separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
            
         </span><span class="tag">&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-form navbar-left"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"search"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">Left align-Submit Button</span><span class="tag">&lt;/button&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln"> 
      
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-text navbar-left"</span><span class="tag">&gt;</span><span class="pln">Left align-Text</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="com">&lt;!--Right Align--&gt;</span><span class="pln">
      </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"nav navbar-nav navbar-right"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
               Java 
               </span><span class="tag">&lt;b</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/b&gt;</span><span class="pln">
            </span><span class="tag">&lt;/a&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">jmeter</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">EJB</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Jasper Report</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">One more separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
            
         </span><span class="tag">&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;form</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-form navbar-right"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"search"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;button</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"submit"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"btn btn-default"</span><span class="tag">&gt;</span><span class="pln">
            Right align-Submit Button
         </span><span class="tag">&lt;/button&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln"> 
		
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-text navbar-right"</span><span class="tag">&gt;</span><span class="pln">Right align-Text</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/nav&gt;</span></pre>
<img src="images/compalignment_demo.jpg" alt="Component Alignment Demo">
<h4>Fixed to Top</h4>

<p>The Bootstrap navbar can be dynamic in its positioning. By default, it is a block-level element that takes its positioning based on its placement in the HTML. With a few helper classes, you can place it either on the top or bottom of the page, or you can make it scroll statically with the page.</p>
<p>If you want the navbar fixed to the top, add class <b>.navbar-fixed-top</b> to the <b>.navbar class</b>. The following example demonstrates this −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;nav</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar navbar-default navbar-fixed-top"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navigation"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-header"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-brand"</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">TutorialsPoint</span><span class="tag">&lt;/a&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
      </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"nav navbar-nav"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"active"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">iOS</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">SVN</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
               Java
               </span><span class="tag">&lt;b</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/b&gt;</span><span class="pln">
            </span><span class="tag">&lt;/a&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">jmeter</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">EJB</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Jasper Report</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">One more separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
            
         </span><span class="tag">&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/nav&gt;</span></pre>
<img src="images/fixedtotop_demo.jpg" alt="Fixed To Top Demo">
<h4>Fixed to Bottom</h4>
<p>If you want the navbar fixed to the bottom of the page, add class <b>.navbar-fixed-bottom</b> to the <b>.navbar class</b>. The following example demonstrates this −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;nav</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar navbar-default navbar-fixed-bottom"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navigation"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-header"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-brand"</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">TutorialsPoint</span><span class="tag">&lt;/a&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
      </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"nav navbar-nav"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"active"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">iOS</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">SVN</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
               Java
               </span><span class="tag">&lt;b</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/b&gt;</span><span class="pln">
            </span><span class="tag">&lt;/a&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">jmeter</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">EJB</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Jasper Report</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">One more separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
            
         </span><span class="tag">&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/nav&gt;</span></pre>
<img src="images/fixedtobottom_demo.jpg" alt="Fixed To Bottom Demo">
<h4>Static Top</h4>
<p>To create a navbar that scrolls with the page, add the <b>.navbar-static-top</b> class. This class does not require adding the padding to the &lt;body&gt;.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;nav</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar navbar-default navbar-static-top"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navigation"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-header"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-brand"</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">TutorialsPoint</span><span class="tag">&lt;/a&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
      </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"nav navbar-nav"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"active"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">iOS</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">SVN</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
               Java
               </span><span class="tag">&lt;b</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/b&gt;</span><span class="pln">
            </span><span class="tag">&lt;/a&gt;</span><span class="pln">
				
            </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">jmeter</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">EJB</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Jasper Report</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">One more separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
            
         </span><span class="tag">&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/nav&gt;</span></pre>
<img src="images/statictop_demo.jpg" alt="Static Top Demo">
<h4>Inverted Navbar</h4>
<p>To create an inverted navbar with a black background and with white text, simply add the <b>.navbar-inverse</b> class to the <b>.navbar</b> class as demonstrated in the following example −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;nav</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar navbar-inverse"</span><span class="pln"> </span><span class="atn">role</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navigation"</span><span class="tag">&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-header"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"navbar-brand"</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">TutorialsPoint</span><span class="tag">&lt;/a&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;div&gt;</span><span class="pln">
      </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"nav navbar-nav"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"active"</span><span class="tag">&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">iOS</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">SVN</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
            </span><span class="tag">&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-toggle"</span><span class="pln"> </span><span class="atn">data-toggle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown"</span><span class="tag">&gt;</span><span class="pln">
               Java
               </span><span class="tag">&lt;b</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"caret"</span><span class="tag">&gt;&lt;/b&gt;</span><span class="pln">
            </span><span class="tag">&lt;/a&gt;</span><span class="pln">
            
            </span><span class="tag">&lt;ul</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"dropdown-menu"</span><span class="tag">&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">jmeter</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">EJB</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Jasper Report</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">Separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
               
               </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divider"</span><span class="tag">&gt;&lt;/li&gt;</span><span class="pln">
               </span><span class="tag">&lt;li&gt;&lt;a</span><span class="pln"> </span><span class="atn">href</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"#"</span><span class="tag">&gt;</span><span class="pln">One more separated link</span><span class="tag">&lt;/a&gt;&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
            
         </span><span class="tag">&lt;/li&gt;</span><span class="pln">
      </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
   </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   
</span><span class="tag">&lt;/nav&gt;</span></pre>
<img src="images/invertednavbar_demo.jpg" alt="Inverted Navbar Demo">







</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="151_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="153_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
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