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
	$sid=115;
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




<p>An array is a data structure that stores one or more similar type of values in a single value. For example if you want to store 100 numbers then instead of defining 100 variables its easy to define an array of 100 length.</p>
<p>There are three different kind of arrays and each array value is accessed using an ID c which is called array index.</p>
<ul class="list">
<li><p><b>Numeric array</b> − An array with a numeric index. Values are stored and accessed in linear fashion.</p></li>
<li><p><b>Associative array</b> − An array with strings as index. This stores element values in association with key values rather than in a strict linear index order.</p></li>
<li><p><b>Multidimensional array</b> − An array containing one or more arrays and values are accessed using multiple indices</p></li>
</ul>
<p><b>NOTE</b> − Built-in array functions is given in function reference <a href="/php/php_array_functions.htm">PHP Array Functions</a></p>
<h4>Numeric Array</h4>
<p>These arrays can store numbers, strings and any object but their index will be represented by numbers. By default array index starts from zero.</p>
<h5>Example</h5>
<p>Following is the example showing how to create and access numeric arrays.</p>
<p>Here we have used <b>array()</b> function to create array. This function is explained in function reference.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="pun">&lt;?</span><span class="pln">php
         </span><span class="com">/* First method to create array. */</span><span class="pln">
         $numbers </span><span class="pun">=</span><span class="pln"> array</span><span class="pun">(</span><span class="pln"> </span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">,</span><span class="pln"> </span><span class="lit">3</span><span class="pun">,</span><span class="pln"> </span><span class="lit">4</span><span class="pun">,</span><span class="pln"> </span><span class="lit">5</span><span class="pun">);</span><span class="pln">
         
         </span><span class="kwd">foreach</span><span class="pun">(</span><span class="pln"> $numbers </span><span class="kwd">as</span><span class="pln"> $value </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            echo </span><span class="str">"Value is $value &lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         </span><span class="com">/* Second method to create array. */</span><span class="pln">
         $numbers</span><span class="pun">[</span><span class="lit">0</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"one"</span><span class="pun">;</span><span class="pln">
         $numbers</span><span class="pun">[</span><span class="lit">1</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"two"</span><span class="pun">;</span><span class="pln">
         $numbers</span><span class="pun">[</span><span class="lit">2</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"three"</span><span class="pun">;</span><span class="pln">
         $numbers</span><span class="pun">[</span><span class="lit">3</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"four"</span><span class="pun">;</span><span class="pln">
         $numbers</span><span class="pun">[</span><span class="lit">4</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"five"</span><span class="pun">;</span><span class="pln">
         
         </span><span class="kwd">foreach</span><span class="pun">(</span><span class="pln"> $numbers </span><span class="kwd">as</span><span class="pln"> $value </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            echo </span><span class="str">"Value is $value &lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce the following result −</p>
<pre class="result notranslate">Value is 1 
Value is 2 
Value is 3 
Value is 4 
Value is 5 
Value is one 
Value is two 
Value is three 
Value is four 
Value is five 
</pre>
<h4>Associative Arrays</h4>
<p>The associative arrays are very similar to numeric arrays in term of functionality but they are different in terms of their index. Associative array will have their index as string so that you can establish a strong association between key and values.</p>
<p>To store the salaries of employees in an array, a numerically indexed array would not be the best choice. Instead, we could use the employees names as the keys in our associative array, and the value would be their respective salary.</p>
<p><b>NOTE</b> − Don't keep associative array inside double quote while printing otherwise it would not return any value.</p>
<h5>Example</h5>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="pun">&lt;?</span><span class="pln">php
         </span><span class="com">/* First method to associate create array. */</span><span class="pln">
         $salaries </span><span class="pun">=</span><span class="pln"> array</span><span class="pun">(</span><span class="str">"mohammad"</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="lit">2000</span><span class="pun">,</span><span class="pln"> </span><span class="str">"qadir"</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="lit">1000</span><span class="pun">,</span><span class="pln"> </span><span class="str">"zara"</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="lit">500</span><span class="pun">);</span><span class="pln">
         
         echo </span><span class="str">"Salary of mohammad is "</span><span class="pun">.</span><span class="pln"> $salaries</span><span class="pun">[</span><span class="str">'mohammad'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         echo </span><span class="str">"Salary of qadir is "</span><span class="pun">.</span><span class="pln">  $salaries</span><span class="pun">[</span><span class="str">'qadir'</span><span class="pun">].</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         echo </span><span class="str">"Salary of zara is "</span><span class="pun">.</span><span class="pln">  $salaries</span><span class="pun">[</span><span class="str">'zara'</span><span class="pun">].</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         
         </span><span class="com">/* Second method to create array. */</span><span class="pln">
         $salaries</span><span class="pun">[</span><span class="str">'mohammad'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"high"</span><span class="pun">;</span><span class="pln">
         $salaries</span><span class="pun">[</span><span class="str">'qadir'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"medium"</span><span class="pun">;</span><span class="pln">
         $salaries</span><span class="pun">[</span><span class="str">'zara'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"low"</span><span class="pun">;</span><span class="pln">
         
         echo </span><span class="str">"Salary of mohammad is "</span><span class="pun">.</span><span class="pln"> $salaries</span><span class="pun">[</span><span class="str">'mohammad'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         echo </span><span class="str">"Salary of qadir is "</span><span class="pun">.</span><span class="pln">  $salaries</span><span class="pun">[</span><span class="str">'qadir'</span><span class="pun">].</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         echo </span><span class="str">"Salary of zara is "</span><span class="pun">.</span><span class="pln">  $salaries</span><span class="pun">[</span><span class="str">'zara'</span><span class="pun">].</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>

<p>This will produce the following result −</p>
<pre class="result notranslate">Salary of mohammad is 2000
Salary of qadir is 1000
Salary of zara is 500
Salary of mohammad is high
Salary of qadir is medium
Salary of zara is low
</pre>
<h4>Multidimensional Arrays</h4> 
<p>A multi-dimensional array each element in the main array can also be an array. And each element in the sub-array can be an array, and so on. Values in the multi-dimensional array are accessed using multiple index.</p>
<h5>Example</h5> 
<p>In this example we create a two dimensional array to store marks of three students in three subjects −</p>
<p>This example is an associative array, you can create numeric array in the same fashion.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="pun">&lt;?</span><span class="pln">php
         $marks </span><span class="pun">=</span><span class="pln"> array</span><span class="pun">(</span><span class="pln"> 
            </span><span class="str">"mohammad"</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> array </span><span class="pun">(</span><span class="pln">
               </span><span class="str">"physics"</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="lit">35</span><span class="pun">,</span><span class="pln">
               </span><span class="str">"maths"</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="lit">30</span><span class="pun">,</span><span class="pln">	
               </span><span class="str">"chemistry"</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="lit">39</span><span class="pln">
            </span><span class="pun">),</span><span class="pln">
            
            </span><span class="str">"qadir"</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> array </span><span class="pun">(</span><span class="pln">
               </span><span class="str">"physics"</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="lit">30</span><span class="pun">,</span><span class="pln">
               </span><span class="str">"maths"</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="lit">32</span><span class="pun">,</span><span class="pln">
               </span><span class="str">"chemistry"</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="lit">29</span><span class="pln">
            </span><span class="pun">),</span><span class="pln">
            
            </span><span class="str">"zara"</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> array </span><span class="pun">(</span><span class="pln">
               </span><span class="str">"physics"</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="lit">31</span><span class="pun">,</span><span class="pln">
               </span><span class="str">"maths"</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="lit">22</span><span class="pun">,</span><span class="pln">
               </span><span class="str">"chemistry"</span><span class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="lit">39</span><span class="pln">
            </span><span class="pun">)</span><span class="pln">
         </span><span class="pun">);</span><span class="pln">
         
         </span><span class="com">/* Accessing multi-dimensional array values */</span><span class="pln">
         echo </span><span class="str">"Marks for mohammad in physics : "</span><span class="pln"> </span><span class="pun">;</span><span class="pln">
         echo $marks</span><span class="pun">[</span><span class="str">'mohammad'</span><span class="pun">][</span><span class="str">'physics'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln"> 
         
         echo </span><span class="str">"Marks for qadir in maths : "</span><span class="pun">;</span><span class="pln">
         echo $marks</span><span class="pun">[</span><span class="str">'qadir'</span><span class="pun">][</span><span class="str">'maths'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln"> 
         
         echo </span><span class="str">"Marks for zara in chemistry : "</span><span class="pln"> </span><span class="pun">;</span><span class="pln">
         echo $marks</span><span class="pun">[</span><span class="str">'zara'</span><span class="pun">][</span><span class="str">'chemistry'</span><span class="pun">]</span><span class="pln"> </span><span class="pun">.</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">;</span><span class="pln"> 
      </span><span class="pun">?&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce the following result −</p>
<pre class="result notranslate">Marks for mohammad in physics : 35
Marks for qadir in maths : 32
Marks for zara in chemistry : 39
</pre>












</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="114_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="116_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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