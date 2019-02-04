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
	$sid=242;
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
<p>C++ provides following two types of string representations:</p>
<ul class="list">
<li><p>The C-style character string.</p></li>
<li><p>The string class type introduced with Standard C++.</p></li>
</ul>
<h4>The C-Style Character String</h4>
<p>The C-style character string originated within the C language and continues to be supported within C++.  This string is actually a one-dimensional array of characters which is terminated by a <b>null</b> character '\0'. Thus a null-terminated string contains the characters that comprise the string followed by a <b>null</b>.</p>
<p>The following declaration and initialization create a string consisting of the word "Hello". To hold the null character at the end of the array, the size of the character array containing the string is one more than the number of characters in the word "Hello."</p>
<pre class="result notranlate">char greeting[6] = {'H', 'e', 'l', 'l', 'o', '\0'};
</pre>
<p>If you follow the rule  of array initialization, then you can write the above statement as follows: </p>
<pre class="result notranlate">char greeting[] = "Hello";
</pre>
<p>Following is the memory presentation of above defined string in C/C++:</p>
<center>
<img src="images/string_representation.jpg" alt="String Presentation in C/C++">
</center>
<p>Actually, you do not place the null character at the end of a string constant. The C++ compiler automatically places the '\0' at the end of the string when it initializes the array. Let us try to print above-mentioned string:</p>
<pre class="prettyprint notranlate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> greeting</span><span class="pun">[</span><span class="lit">6</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="str">'H'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'e'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'l'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'l'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'o'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'\0'</span><span class="pun">};</span><span class="pln">

   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"Greeting message: "</span><span class="pun">;</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> greeting </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces result something as follows:</p>
<pre class="result notranlate">Greeting message: Hello
</pre>
<p>C++ supports a wide range of functions that manipulate null-terminated strings:</p>
<table class="table table-bordered">
<tbody><tr>
<th width="5%">S.N.</th>
<th>Function &amp; Purpose</th>
</tr>
<tr>
<td>1</td>
<td><b>strcpy(s1, s2);</b>
<p>Copies string s2 into string s1.</p>
</td>
</tr>
<tr>
<td>2</td>
<td><b>strcat(s1, s2);</b>
<p>Concatenates string s2 onto the end of string s1.</p>
</td>
</tr>
<tr>
<td>3</td>
<td><b>strlen(s1);</b>
<p>Returns the length of string s1.</p>
</td>
</tr>
<tr>
<td>4</td>
<td><b>strcmp(s1, s2);</b>
<p>Returns 0 if s1 and s2 are the same; less than 0 if s1&lt;s2; greater than 0 if s1&gt;s2.</p>
</td>
</tr>
<tr>
<td>5</td>
<td><b>strchr(s1, ch);</b>
<p>Returns a pointer to the first occurrence of character ch in string s1.</p>
</td>
</tr>
<tr>
<td>6</td>
<td><b>strstr(s1, s2);</b>
<p>Returns a pointer to the first occurrence of string s2 in string s1.</p>
</td>
</tr>
</tbody></table>
<p>Following example makes use of few of the above-mentioned functions:</p>
<pre class="prettyprint notranlate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;iostream&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;cstring&gt;</span><span class="pln">

</span><span class="kwd">using</span><span class="pln"> </span><span class="kwd">namespace</span><span class="pln"> std</span><span class="pun">;</span><span class="pln">

</span><span class="kwd">int</span><span class="pln"> main </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> str1</span><span class="pun">[</span><span class="lit">10</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Hello"</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> str2</span><span class="pun">[</span><span class="lit">10</span><span class="pun">]</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"World"</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln"> str3</span><span class="pun">[</span><span class="lit">10</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln">  len </span><span class="pun">;</span><span class="pln">

   </span><span class="com">// copy str1 into str3</span><span class="pln">
   strcpy</span><span class="pun">(</span><span class="pln"> str3</span><span class="pun">,</span><span class="pln"> str1</span><span class="pun">);</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"strcpy( str3, str1) : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> str3 </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">

   </span><span class="com">// concatenates str1 and str2</span><span class="pln">
   strcat</span><span class="pun">(</span><span class="pln"> str1</span><span class="pun">,</span><span class="pln"> str2</span><span class="pun">);</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"strcat( str1, str2): "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> str1 </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">

   </span><span class="com">// total lenghth of str1 after concatenation</span><span class="pln">
   len </span><span class="pun">=</span><span class="pln"> strlen</span><span class="pun">(</span><span class="pln">str1</span><span class="pun">);</span><span class="pln">
   cout </span><span class="pun">&lt;&lt;</span><span class="pln"> </span><span class="str">"strlen(str1) : "</span><span class="pln"> </span><span class="pun">&lt;&lt;</span><span class="pln"> len </span><span class="pun">&lt;&lt;</span><span class="pln"> endl</span><span class="pun">;</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<pre class="result notranlate">strcpy( str3, str1) : Hello
strcat( str1, str2): HelloWorld
strlen(str1) : 10
</pre>
<h4>The String Class in C++</h4>
<p>The standard C++ library provides a <b>string</b> class type that supports all the operations mentioned above, additionally much more functionality. We will study this class in C++ Standard Library but for now let us check following example:</p>
<p>At this point, you may not understand this example because so far we have not discussed Classes and Objects. So can have a look and proceed until you have understanding on Object Oriented Concepts.</p>
<pre class="result notranlate">str3 : Hello
str1 + str2 : HelloWorld
str3.size() :  10
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="241_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="243_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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