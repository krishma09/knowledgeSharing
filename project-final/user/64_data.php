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
<title>Javascript Tutorials | knowledge.com</title>
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
	$sid=64;
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




<p>While writing a program, you may encounter a situation where you need to perform an action over and over again. In such situations, you would need to write loop statements to reduce the number of lines.</p>
<p>JavaScript supports all the necessary loops to ease down the pressure of programming.</p>
<h4>The while Loop</h4>
<p>The most basic loop in JavaScript is the <b>while</b> loop which would be discussed in this chapter. The purpose of a <b>while</b> loop is to execute a statement or code block repeatedly as long as an <b>expression</b> is true. Once the expression becomes <b>false,</b> the loop terminates.</p>
<h5>Flow Chart</h5>
<p>The flow chart of <b>while loop</b> looks as follows −</p>
<img src="images/while_loop.jpg" alt="While loop">
<h5>Syntax</h5>
<p>The syntax of <b>while loop</b> in JavaScript is as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">while</span><span class="pln"> </span><span class="pun">(</span><span class="pln">expression</span><span class="pun">){</span><span class="pln">
   </span><span class="typ">Statement</span><span class="pun">(</span><span class="pln">s</span><span class="pun">)</span><span class="pln"> to be executed </span><span class="kwd">if</span><span class="pln"> expression </span><span class="kwd">is</span><span class="pln"> </span><span class="kwd">true</span><span class="pln">
</span><span class="pun">}</span></pre>
<h5>Example</h5>
<p>Try the following example to implement while loop.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> count </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Starting Loop "</span><span class="pun">);</span><span class="pln">
         
            </span><span class="kwd">while</span><span class="pln"> </span><span class="pun">(</span><span class="pln">count </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">10</span><span class="pun">){</span><span class="pln">
               document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Current Count : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> count </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">);</span><span class="pln">
               count</span><span class="pun">++;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Loop stopped!"</span><span class="pun">);</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Set the variable to different value and then try...</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h5>Output</h5>
<pre class="result notranslate">Starting Loop
Current Count : 0
Current Count : 1
Current Count : 2
Current Count : 3
Current Count : 4
Current Count : 5
Current Count : 6
Current Count : 7
Current Count : 8
Current Count : 9
Loop stopped!
Set the variable to different value and then try... 
</pre>
<h4>The do...while Loop</h4>
<p>The <b>do...while</b> loop is similar to the <b>while</b> loop except that the condition check happens at the end of the loop. This means that the loop will always be executed at least once, even if the condition is <b>false</b>.</p>
<h5>Flow Chart</h5>
<p>The flow chart of a <b>do-while</b> loop would be as follows −</p>
<img src="images/do_while_loop.jpg" alt="Do While Loop">
<h5>Syntax</h5>
<p>The syntax for <b>do-while</b> loop in JavaScript is as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">do</span><span class="pun">{</span><span class="pln">
   </span><span class="typ">Statement</span><span class="pun">(</span><span class="pln">s</span><span class="pun">)</span><span class="pln"> to be executed</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln"> </span><span class="kwd">while</span><span class="pln"> </span><span class="pun">(</span><span class="pln">expression</span><span class="pun">);</span></pre>
<p><b>Note</b> − Don’t miss the semicolon used at the end of the do...while loop.</p>
<h5>Example</h5>
<p>Try the following example to learn how to implement a <b>do-while</b> loop in JavaScript.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> count </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
            
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Starting Loop"</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">);</span><span class="pln">
            </span><span class="kwd">do</span><span class="pun">{</span><span class="pln">
               document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Current Count : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> count </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">);</span><span class="pln">
               count</span><span class="pun">++;</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            
            </span><span class="kwd">while</span><span class="pln"> </span><span class="pun">(</span><span class="pln">count </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">5</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write </span><span class="pun">(</span><span class="str">"Loop stopped!"</span><span class="pun">);</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Set the variable to different value and then try...</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h5>Output</h5>
<pre class="result notranslate">Starting Loop
Current Count : 0 
Current Count : 1 
Current Count : 2 
Current Count : 3 
Current Count : 4
Loop Stopped!
Set the variable to different value and then try...
</pre>








</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="63_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="65_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'javascript_header.php'; ?>
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