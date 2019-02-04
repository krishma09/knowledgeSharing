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
	$sid=68;
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




<p>A function is a group of reusable code which can be called anywhere in your program. This eliminates the need of writing the same code again and again. It helps programmers in writing modular codes. Functions allow a programmer to divide a big program into a number of small and manageable functions.</p>
<p>Like any other advanced programming language, JavaScript also supports all the features necessary to write modular code using functions. You must have seen functions like <b>alert()</b> and <b>write()</b> in the earlier chapters. We were using these functions again and again, but they had been written in core JavaScript only once.</p>
<p>JavaScript allows us to write our own functions as well. This section explains how to write your own functions in JavaScript.</p>
<h4>Function Definition</h4>
<p>Before we use a function, we need to define it. The most common way to define a function in JavaScript is by using the <b>function</b> keyword, followed by a unique function name, a list of parameters (that might be empty), and a statement block surrounded by curly braces.</p>
<h3>Syntax</h3>
<p>The basic syntax is shown here.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="pun">&lt;!--</span><span class="pln">
      </span><span class="kwd">function</span><span class="pln"> functionname</span><span class="pun">(</span><span class="pln">parameter</span><span class="pun">-</span><span class="pln">list</span><span class="pun">)</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         statements
      </span><span class="pun">}</span><span class="pln">
   </span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span></pre>
<h3>Example</h3>
<p>Try the following example. It defines a function called sayHello that takes no parameters −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="pun">&lt;!--</span><span class="pln">
      </span><span class="kwd">function</span><span class="pln"> sayHello</span><span class="pun">()</span><span class="pln">
      </span><span class="pun">{</span><span class="pln">
         alert</span><span class="pun">(</span><span class="str">"Hello there"</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
   </span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span></pre>
<h4>Calling a Function</h4>
<p>To invoke a function somewhere later in the script, you would simply need to write the name of that function as shown in the following code.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="kwd">function</span><span class="pln"> sayHello</span><span class="pun">()</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write </span><span class="pun">(</span><span class="str">"Hello there!"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Click the following button to call the function</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;form&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="pln">sayHello</span><span class="pun">()</span><span class="atv">"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Say Hello"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Use different text in write method and then try...</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>Function Parameters</h4>
<p>Till now, we have seen functions without parameters. But there is a facility to pass different parameters while calling a function. These passed parameters can be captured inside the function and any manipulation can be done over those parameters. A function can take multiple parameters separated by comma.</p>
<h3>Example</h3>
<p>Try the following example. We have modified our <b>sayHello</b> function here. Now it takes two parameters.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
   
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="kwd">function</span><span class="pln"> sayHello</span><span class="pun">(</span><span class="pln">name</span><span class="pun">,</span><span class="pln"> age</span><span class="pun">)</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write </span><span class="pun">(</span><span class="pln">name </span><span class="pun">+</span><span class="pln"> </span><span class="str">" is "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> age </span><span class="pun">+</span><span class="pln"> </span><span class="str">" years old."</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Click the following button to call the function</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;form&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="pln">sayHello</span><span class="pun">(</span><span class="str">'Zara'</span><span class="pun">,</span><span class="pln"> </span><span class="lit">7</span><span class="pun">)</span><span class="atv">"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Say Hello"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Use different parameters inside the function and then try...</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>The return Statement</h4>
<p>A JavaScript function can have an optional <b>return</b> statement. This is required if you want to return a value from a function. This statement should be the last statement in a function.</p>
<p>For example, you can pass two numbers in a function and then you can expect the function to return their multiplication in your calling program.</p>
<h3>Example</h3>
<p>Try the following example. It defines a function that takes two parameters and concatenates them before returning the resultant in the calling program.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="kwd">function</span><span class="pln"> concatenate</span><span class="pun">(</span><span class="pln">first</span><span class="pun">,</span><span class="pln"> last</span><span class="pun">)</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> full</span><span class="pun">;</span><span class="pln">
            full </span><span class="pun">=</span><span class="pln"> first </span><span class="pun">+</span><span class="pln"> last</span><span class="pun">;</span><span class="pln">
            </span><span class="kwd">return</span><span class="pln"> full</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="kwd">function</span><span class="pln"> secondFunction</span><span class="pun">()</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> result</span><span class="pun">;</span><span class="pln">
            result </span><span class="pun">=</span><span class="pln"> concatenate</span><span class="pun">(</span><span class="str">'Zara'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Ali'</span><span class="pun">);</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write </span><span class="pun">(</span><span class="pln">result </span><span class="pun">);</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Click the following button to call the function</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;form&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="pln">secondFunction</span><span class="pun">()</span><span class="atv">"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Call Function"</span><span class="tag">&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Use different parameters inside the function and then try...</span><span class="tag">&lt;/p&gt;</span><span class="pln">
  
  </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>There is a lot to learn about JavaScript functions, however we have covered the most important concepts in this tutorial.</p>
<ul class="list">
<li><p>JavaScript Nested Functions</p></li>
<li><p>JavaScript  Function( ) Constructor</p></li>
<li><p>JavaScript Function Literals</p></li>
</ul>








</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="67_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="69_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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