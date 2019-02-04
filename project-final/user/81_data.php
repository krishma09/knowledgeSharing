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
	$sid=81;
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




<p>There are three types of errors in programming: (a) Syntax Errors, (b) Runtime Errors, and (c) Logical Errors.</p>
<h4>Syntax Errors</h4>
<p>Syntax errors, also called <b>parsing errors,</b> occur at compile time in traditional programming languages and at interpret time in JavaScript.</p>
<p>For example, the following line causes a syntax error because it is missing a closing parenthesis.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="pun">&lt;!--</span><span class="pln">
      window</span><span class="pun">.</span><span class="pln">print</span><span class="pun">(;</span><span class="pln">
   </span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span></pre>
<p>When a syntax error occurs in JavaScript, only the code contained within the same thread as the syntax error is affected and the rest of the code in other threads gets executed assuming nothing in them depends on the code containing the error.</p>
<h4>Runtime Errors</h4>
<p>Runtime errors, also called <b>exceptions,</b> occur during execution (after compilation/interpretation).</p>
<p>For example, the following line causes a runtime error because here the syntax is correct, but at runtime, it is trying to call a method that does not exist.</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="pun">&lt;!--</span><span class="pln">
      window</span><span class="pun">.</span><span class="pln">printme</span><span class="pun">();</span><span class="pln">
   </span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span></pre>
<p>Exceptions also affect the thread in which they occur, allowing other JavaScript threads to continue normal execution.</p>
<h4>Logical Errors</h4>
<p>Logic errors can be the most difficult type of errors to track down. These errors are not the result of a syntax or runtime error. Instead, they occur when you make a mistake in the logic that drives your script and you do not get the result you expected.</p>
<p>You cannot catch those errors, because it depends on your business requirement what type of logic you want to put in your program.</p>
<h4>The try...catch...finally Statement</h4>
<p>The latest versions of JavaScript added exception handling capabilities. JavaScript implements the <b>try...catch...finally</b> construct as well as the <b>throw</b> operator to handle exceptions.</p>
<p>The latest versions of JavaScript added exception handling capabilities. JavaScript implements the <b>try...catch...finally</b> construct as well as the <b>throw</b> operator to handle exceptions.</p>
<p>You can <b>catch</b> programmer-generated and <b>runtime</b> exceptions, but you cannot <b>catch</b> JavaScript syntax errors.</p>
<p>Here is the <b>try...catch...finally</b> block syntax −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
   </span><span class="pun">&lt;!--</span><span class="pln">
      </span><span class="kwd">try</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         </span><span class="com">// Code to run</span><span class="pln">
         </span><span class="pun">[</span><span class="kwd">break</span><span class="pun">;]</span><span class="pln">
      </span><span class="pun">}</span><span class="pln"> 
      
      </span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="pln"> e </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         </span><span class="com">// Code to run if an exception occurs</span><span class="pln">
         </span><span class="pun">[</span><span class="kwd">break</span><span class="pun">;]</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
      
      </span><span class="pun">[</span><span class="pln"> finally </span><span class="pun">{</span><span class="pln">
         </span><span class="com">// Code that is always executed regardless of </span><span class="pln">
         </span><span class="com">// an exception occurring</span><span class="pln">
      </span><span class="pun">}]</span><span class="pln">
   </span><span class="com">//--&gt;</span><span class="pln">
</span><span class="tag">&lt;/script&gt;</span></pre>
<p>The <b>try</b> block must be followed by either exactly one <b>catch</b> block or one <b>finally</b> block (or one of both). When an exception occurs in the <b>try</b> block, the exception is placed in <b>e</b> and the <b>catch</b> block is executed. The optional <b>finally</b> block executes unconditionally after try/catch.</p>
<h5>Examples</h5>
<p>Here is an example where we are trying to call a non-existing function which in turn is raising an exception. Let us see how it behaves without <b>try...catch</b>−</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">function</span><span class="pln"> myFunc</span><span class="pun">()</span><span class="pln">
            </span><span class="pun">{</span><span class="pln">
               </span><span class="kwd">var</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">100</span><span class="pun">;</span><span class="pln">
               alert</span><span class="pun">(</span><span class="str">"Value of variable a is : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> a </span><span class="pun">);</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Click the following to see the result:</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;form&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Click Me"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="pln">myFunc</span><span class="pun">();</span><span class="atv">"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>

<p>Now let us try to catch this exception using <b>try...catch</b> and display a user-friendly message. You can also suppress this message, if you want to hide this error from a user.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">function</span><span class="pln"> myFunc</span><span class="pun">()</span><span class="pln">
            </span><span class="pun">{</span><span class="pln">
               </span><span class="kwd">var</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">100</span><span class="pun">;</span><span class="pln">
               </span><span class="kwd">try</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                  alert</span><span class="pun">(</span><span class="str">"Value of variable a is : "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> a </span><span class="pun">);</span><span class="pln">
               </span><span class="pun">}</span><span class="pln"> 
               
               </span><span class="kwd">catch</span><span class="pln"> </span><span class="pun">(</span><span class="pln"> e </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
                  alert</span><span class="pun">(</span><span class="str">"Error: "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> e</span><span class="pun">.</span><span class="pln">description </span><span class="pun">);</span><span class="pln">
               </span><span class="pun">}</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Click the following to see the result:</span><span class="tag">&lt;/p&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;form&gt;</span><span class="pln">
         </span><span class="tag">&lt;input</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"button"</span><span class="pln"> </span><span class="atn">value</span><span class="pun">=</span><span class="atv">"Click Me"</span><span class="pln"> </span><span class="atn">onclick</span><span class="pun">=</span><span class="atv">"</span><span class="pln">myFunc</span><span class="pun">();</span><span class="atv">"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/form&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="80_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="82_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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