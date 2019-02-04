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
<title>C++ Tutorials | knowledge.com</title>
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
	$sid=251;
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

<p>The word <b>polymorphism</b> means having many forms. Typically, polymorphism occurs when there is a hierarchy of classes and they are related by inheritance.</p>
<p>C++ polymorphism means that a call to a member function will cause a different function to be executed depending on the type of object that invokes the function.</p>
<p>Consider the following example where a base class has been derived by other two classes:</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln"> 
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
 
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Shape</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">protected</span><span class="pun">:</span><span class="pln">
      </span><span class="kwd">int</span><span class="pln"> width</span><span class="pun">,</span><span class="pln"> height</span><span class="pun">;</span><span class="pln">
		
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="typ">Shape</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         width </span><span class="pun">=</span><span class="pln"> a</span><span class="pun">;</span><span class="pln">
         height </span><span class="pun">=</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
		
      </span><span class="kwd">int</span><span class="pln"> area</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Parent class area :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">

</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Rectangle</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> </span><span class="typ">Shape</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="typ">Rectangle</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">):</span><span class="typ">Shape</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
      </span><span class="kwd">int</span><span class="pln"> area </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> 
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Rectangle class area :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> </span><span class="pun">(</span><span class="pln">width </span><span class="pun">*</span><span class="pln"> height</span><span class="pun">);</span><span class="pln"> 
      </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">

</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Triangle</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> </span><span class="typ">Shape</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="typ">Triangle</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">):</span><span class="typ">Shape</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
      </span><span class="kwd">int</span><span class="pln"> area </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> 
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Triangle class area :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> </span><span class="pun">(</span><span class="pln">width </span><span class="pun">*</span><span class="pln"> height </span><span class="pun">/</span><span class="pln"> </span><span class="lit">2</span><span class="pun">);</span><span class="pln"> 
      </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">

</span><span class="com">// Main function for the program</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="typ">Shape</span><span class="pln"> </span><span class="pun">*</span><span class="pln">shape</span><span class="pun">;</span><span class="pln">
   </span><span class="typ">Rectangle</span><span class="pln"> rec</span><span class="pun">(</span><span class="lit">10</span><span class="pun">,</span><span class="lit">7</span><span class="pun">);</span><span class="pln">
   </span><span class="typ">Triangle</span><span class="pln">  tri</span><span class="pun">(</span><span class="lit">10</span><span class="pun">,</span><span class="lit">5</span><span class="pun">);</span><span class="pln">

   </span><span class="com">// store the address of Rectangle</span><span class="pln">
   shape </span><span class="pun">=</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln">rec</span><span class="pun">;</span><span class="pln">
	
   </span><span class="com">// call rectangle area.</span><span class="pln">
   shape</span><span class="pun">-&gt;</span><span class="pln">area</span><span class="pun">();</span><span class="pln">

   </span><span class="com">// store the address of Triangle</span><span class="pln">
   shape </span><span class="pun">=</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln">tri</span><span class="pun">;</span><span class="pln">
	
   </span><span class="com">// call triangle area.</span><span class="pln">
   shape</span><span class="pun">-&gt;</span><span class="pln">area</span><span class="pun">();</span><span class="pln">
   
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln"> 
</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">
 
</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Shape</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">protected</span><span class="pun">:</span><span class="pln">
      </span><span class="kwd">int</span><span class="pln"> width</span><span class="pun">,</span><span class="pln"> height</span><span class="pun">;</span><span class="pln">
		
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="typ">Shape</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         width </span><span class="pun">=</span><span class="pln"> a</span><span class="pun">;</span><span class="pln">
         height </span><span class="pun">=</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
		
      </span><span class="kwd">int</span><span class="pln"> area</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Parent class area :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">

</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Rectangle</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> </span><span class="typ">Shape</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="typ">Rectangle</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">):</span><span class="typ">Shape</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
      </span><span class="kwd">int</span><span class="pln"> area </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> 
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Rectangle class area :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> </span><span class="pun">(</span><span class="pln">width </span><span class="pun">*</span><span class="pln"> height</span><span class="pun">);</span><span class="pln"> 
      </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">

</span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Triangle</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">public</span><span class="pln"> </span><span class="typ">Shape</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="typ">Triangle</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">):</span><span class="typ">Shape</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
      </span><span class="kwd">int</span><span class="pln"> area </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> 
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Triangle class area :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> </span><span class="pun">(</span><span class="pln">width </span><span class="pun">*</span><span class="pln"> height </span><span class="pun">/</span><span class="pln"> </span><span class="lit">2</span><span class="pun">);</span><span class="pln"> 
      </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span><span class="pln">

</span><span class="com">// Main function for the program</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="typ">Shape</span><span class="pln"> </span><span class="pun">*</span><span class="pln">shape</span><span class="pun">;</span><span class="pln">
   </span><span class="typ">Rectangle</span><span class="pln"> rec</span><span class="pun">(</span><span class="lit">10</span><span class="pun">,</span><span class="lit">7</span><span class="pun">);</span><span class="pln">
   </span><span class="typ">Triangle</span><span class="pln">  tri</span><span class="pun">(</span><span class="lit">10</span><span class="pun">,</span><span class="lit">5</span><span class="pun">);</span><span class="pln">

   </span><span class="com">// store the address of Rectangle</span><span class="pln">
   shape </span><span class="pun">=</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln">rec</span><span class="pun">;</span><span class="pln">
	
   </span><span class="com">// call rectangle area.</span><span class="pln">
   shape</span><span class="pun">-&gt;</span><span class="pln">area</span><span class="pun">();</span><span class="pln">

   </span><span class="com">// store the address of Triangle</span><span class="pln">
   shape </span><span class="pun">=</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln">tri</span><span class="pun">;</span><span class="pln">
	
   </span><span class="com">// call triangle area.</span><span class="pln">
   shape</span><span class="pun">-&gt;</span><span class="pln">area</span><span class="pun">();</span><span class="pln">
   
   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="result notranslate">Parent class area
Parent class area
</pre>
<p>The reason for the incorrect output is that the call of the function area() is being set once by the compiler as the version defined in the base class. This is called <b>static resolution</b> of the function call, or <b>static linkage</b> - the function call is fixed before the program is executed. This is also sometimes called <b>early binding</b> because the area() function is set during the compilation of the program.</p>
<p>But now, let's make a slight modification in our program and precede the declaration of area() in the Shape class with the keyword <b>virtual</b> so that it  looks like this:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">class</span><span class="pln"> </span><span class="typ">Shape</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">protected</span><span class="pun">:</span><span class="pln">
      </span><span class="kwd">int</span><span class="pln"> width</span><span class="pun">,</span><span class="pln"> height</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="typ">Shape</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         width </span><span class="pun">=</span><span class="pln"> a</span><span class="pun">;</span><span class="pln">
         height </span><span class="pun">=</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
		
      </span><span class="kwd">virtual</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> area</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Parent class area :"</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln">endl</span><span class="pun">;</span><span class="pln">
         </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
</span><span class="pun">};</span></pre>
<p>After this slight modification, when the previous example code is compiled and executed, it produces the following result:</p>
<pre class="result notranslate">Rectangle class area
Triangle class area
</pre>
<p>This time, the compiler looks at the contents of the pointer instead of it's type. Hence, since addresses of objects of tri and rec classes are stored in *shape the respective area() function is called.</p>
<p>As you can see, each of the child classes has a separate implementation for the function area(). This is how <b>polymorphism</b> is generally used. You have different classes with a function of the same name, and even the same parameters, but with different implementations.</p>
<h4>Virtual Function</h4>
<p>A <b>virtual</b> function is a function in a base class that is declared using the keyword <b>virtual</b>. Defining in a base class a virtual function, with another version in a derived class, signals to the compiler that we don't want static linkage for this function.</p>
<p>What we do want is the selection of the function to be called at any given point in the program to be based on the kind of object for which it is called.  This sort of operation is referred to as <b>dynamic linkage</b>, or <b>late binding</b>.</p>
<h4>Pure Virtual Functions</h4>
<p>It's possible that you'd want to include a virtual function in a base class so that it may be redefined in a derived class to suit the objects of that class, but that there is no meaningful definition you could give for the function in the base class.</p>
<p>We can change the virtual function area() in the base class to the following:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">class</span><span class="pln"> </span><span class="typ">Shape</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">protected</span><span class="pun">:</span><span class="pln">
      </span><span class="kwd">int</span><span class="pln"> width</span><span class="pun">,</span><span class="pln"> height</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="typ">Shape</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         width </span><span class="pun">=</span><span class="pln"> a</span><span class="pun">;</span><span class="pln">
         height </span><span class="pun">=</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
		
      </span><span class="com">// pure virtual function</span><span class="pln">
      </span><span class="kwd">virtual</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> area</span><span class="pun">()</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">};</span></pre>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">class</span><span class="pln"> </span><span class="typ">Shape</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">protected</span><span class="pun">:</span><span class="pln">
      </span><span class="kwd">int</span><span class="pln"> width</span><span class="pun">,</span><span class="pln"> height</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">public</span><span class="pun">:</span><span class="pln">
      </span><span class="typ">Shape</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
         width </span><span class="pun">=</span><span class="pln"> a</span><span class="pun">;</span><span class="pln">
         height </span><span class="pun">=</span><span class="pln"> b</span><span class="pun">;</span><span class="pln">
      </span><span class="pun">}</span><span class="pln">
		
      </span><span class="com">// pure virtual function</span><span class="pln">
      </span><span class="kwd">virtual</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> area</span><span class="pun">()</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">};</span></pre>
<p>The = 0 tells the compiler that the function has no body  and above virtual function will be called <b>pure virtual function</b>.</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="250_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="252_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'c++header_header.php'; ?></aside>
 
  
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