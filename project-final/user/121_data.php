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
<title>PHP Tutorials | knowledge.com</title>
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
	$sid=121;
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




<p>PHP functions are similar to other programming languages. A function is a piece of code which takes one more input in the form of parameter and does some processing and returns a value.</p>
<p>You already have seen many functions like <b>fopen()</b> and <b>fread()</b> etc. They are built-in functions but PHP gives you option to create your own functions as well.</p>
<p>There are two parts which should be clear to you −</p>
<ul class="list">
<li>Creating a PHP Function</li>
<li>Calling a PHP Function</li>
</ul>
<p>In fact you hardly need to create your own PHP function because there are already more than 1000 of built-in library functions created for different area and you just need to call them according to your requirement.</p>
<p>Please refer to <a href="/php/php_function_reference.htm">PHP Function Reference</a> for a complete set of useful functions.</p>
<h4>Creating PHP Function</h4>
<p>Its very easy to create your own PHP function. Suppose you want to create a PHP function which will simply write a simple message on your browser when you will call it. Following example creates a function called writeMessage() and then calls it just after creating it.</p>
<p>Note that while creating a function its name should start with keyword <b>function</b> and all the PHP code should be put inside { and } braces as shown in the following example below −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Writing PHP Function</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="pun">&lt;?</span><span class="pln">php
         </span><span class="com">/* Defining a PHP Function */</span><span class="pln">
         </span><b><span class="kwd">function</span></b><span class="pln"> writeMessage</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            echo </span><span class="str">"You are really a nice person, Have a nice time!"</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="com">/* Calling a PHP Function */</span><span class="pln">
         writeMessage</span><span class="pun">();</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will display following result −</p>
<pre class="result notranslate">You are really a nice person, Have a nice time!
</pre>
<h4>PHP Functions with Parameters</h4>
<p>PHP gives you option to pass your parameters inside a function. You can pass as many as parameters your like. These parameters work like variables inside your function. Following example takes two integer parameters and add them together and then print them.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Writing PHP Function with Parameters</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="pun">&lt;?</span><span class="pln">php
         </span><b><span class="kwd">function</span></b><span class="pln"> addFunction</span><span class="pun">(</span><span class="pln">$num1</span><span class="pun">,</span><span class="pln"> $num2</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $sum </span><span class="pun">=</span><span class="pln"> $num1 </span><span class="pun">+</span><span class="pln"> $num2</span><span class="pun">;</span><span class="pln">
            echo </span><span class="str">"Sum of the two numbers is : $sum"</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         addFunction</span><span class="pun">(</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">20</span><span class="pun">);</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will display following result −</p>
<pre class="result notranslate">Sum of the two numbers is : 30
</pre>
<h4>Passing Arguments by Reference</h4>
<p>It is possible to pass arguments to functions by reference. This means that a reference to the variable is manipulated by the function rather than a copy of the variable's value.</p>
<p>Any changes made to an argument in these cases will change the value of the original variable. You can pass an argument by reference by adding an ampersand to the variable name in either the function call or the function definition.</p>
<p>Following example depicts both the cases.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Passing Argument by Reference</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="pun">&lt;?</span><span class="pln">php
         </span><b><span class="kwd">function</span></b><span class="pln"> addFive</span><span class="pun">(</span><span class="pln">$num</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $num </span><span class="pun">+=</span><span class="pln"> </span><span class="lit">5</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><b><span class="kwd">function</span></b><span class="pln"> addSix</span><span class="pun">(</span><b><span class="pun">&amp;</span></b><span class="pln">$num</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $num </span><span class="pun">+=</span><span class="pln"> </span><span class="lit">6</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         $orignum </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
         addFive</span><span class="pun">(</span><span class="pln"> $orignum </span><span class="pun">);</span><span class="pln">
         
         echo </span><span class="str">"Original Value is $orignum&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         
         addSix</span><span class="pun">(</span><span class="pln"> $orignum </span><span class="pun">);</span><span class="pln">
         echo </span><span class="str">"Original Value is $orignum&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will display following result −</p>
<pre class="result notranslate">Original Value is 10
Original Value is 16 
</pre>
<h4>PHP Functions returning value</h4>
<p>A function can return a value using the <b>return</b> statement in conjunction with a value or object. return stops the execution of the function and sends the value back to the calling code.</p>
<p>You can return more than one value from a function using <b>return array(1,2,3,4)</b>.</p>
<p>Following example takes two integer parameters and add them together and then returns their sum to the calling program. Note that <b>return</b> keyword is used to return a value from a function.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Writing PHP Function which returns value</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="pun">&lt;?</span><span class="pln">php
         </span><b><span class="kwd">function</span></b><span class="pln"> addFunction</span><span class="pun">(</span><span class="pln">$num1</span><span class="pun">,</span><span class="pln"> $num2</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $sum </span><span class="pun">=</span><span class="pln"> $num1 </span><span class="pun">+</span><span class="pln"> $num2</span><span class="pun">;</span><span class="pln">
            </span><b><span class="kwd">return</span></b><span class="pln"> $sum</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         $return_value </span><span class="pun">=</span><span class="pln"> addFunction</span><span class="pun">(</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">20</span><span class="pun">);</span><span class="pln">
         
         echo </span><span class="str">"Returned value from the function : $return_value"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will display following result −</p>
<pre class="result notranslate">Returned value from the function : 30
</pre>
<h4>Dynamic Function Calls</h4>
<p>It is possible to assign function names as strings to variables and then treat these variables exactly as you would the function name itself. Following example depicts this behaviour.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">Dynamic Function Calls</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="pun">&lt;?</span><span class="pln">php
         </span><b><span class="kwd">function</span></b><span class="pln"> sayHello</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            echo </span><span class="str">"Hello&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         $function_holder </span><span class="pun">=</span><span class="pln"> </span><span class="str">"sayHello"</span><span class="pun">;</span><span class="pln">
         $function_holder</span><span class="pun">();</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will display following result −</p>
<pre class="result notranslate">Hello
</pre>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="120_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="122_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'php_header.php'; ?>
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