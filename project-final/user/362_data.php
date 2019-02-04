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
<title>UNIX Tutorials | knowledge.com</title>
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
	$sid=362;
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
<p>In this chapter, we will discuss shell loop control in Unix. So far you have looked at creating loops and working with loops to accomplish different tasks. Sometimes you need to stop a loop or skip iterations of the loop.</p>
<p>In this chapter, we will learn following two statements that are used to control shell loops−</p>
<ul class="list">
<li><p>The <b>break</b> statement</p></li>
<li><p>The <b>continue</b> statement</p></li>
</ul>
<h4>The infinite Loop</h4>
<p>All the loops have a limited life and they come out once the condition is false or true depending on the loop.</p>
<p>A loop may continue forever if the required condition is not met. A loop that executes forever without terminating executes for an infinite number of times. For this reason, such loops are called infinite loops.</p>
<h5>Example</h5>
<p>Here is a simple example that uses the <b>while</b> loop to display the numbers zero to nine −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

a</span><span class="pun">=</span><span class="lit">10</span><span class="pln">

</span><span class="kwd">until</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> $a </span><span class="pun">-</span><span class="pln">lt </span><span class="lit">10</span><span class="pln"> </span><span class="pun">]</span><span class="pln">
</span><span class="kwd">do</span><span class="pln">
   echo $a
   a</span><span class="pun">=</span><span class="pln">expr $a </span><span class="pun">+</span><span class="pln"> </span><span class="lit">1</span><span class="str">`
done</span></pre>
<p>This loop continues forever because <b>a</b> is always <b>greater than</b> or <b>equal to 10</b> and it is never less than 10.</p>
<h4>The break Statement</h4>
<p>The <b>break</b> statement is used to terminate the execution of the entire loop, after completing the execution of all of the lines of code up to the break statement. It then steps down to the code following the end of the loop.</p>
<h5>Syntax</h5>
<p>The following <b>break</b> statement is used to come out of a loop −</p>
<pre class="result notranslate">break
</pre>
<p>The break command can also be used to exit from a nested loop using this format −</p>
<pre class="result notranslate">break n
</pre>
<p>Here <b>n</b> specifies the <b>n<sup>th</sup></b> enclosing loop to the exit from.</p>
<h5>Example</h5>
<p>Here is a simple example which shows that loop terminates as soon as <b>a</b> becomes 5 −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

a</span><span class="pun">=</span><span class="lit">0</span><span class="pln">

</span><span class="kwd">while</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> $a </span><span class="pun">-</span><span class="pln">lt </span><span class="lit">10</span><span class="pln"> </span><span class="pun">]</span><span class="pln">
</span><span class="kwd">do</span><span class="pln">
   echo $a
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> $a </span><span class="pun">-</span><span class="pln">eq </span><span class="lit">5</span><span class="pln"> </span><span class="pun">]</span><span class="pln">
   </span><span class="kwd">then</span><span class="pln">
      </span><span class="kwd">break</span><span class="pln">
   </span><span class="kwd">fi</span><span class="pln">
   a</span><span class="pun">=</span><span class="str">`expr $a + 1`</span><span class="pln">
</span><span class="kwd">done</span></pre>
<p>Upon execution, you will receive the following result −</p>
<pre class="result notranslate">0
1
2
3
4
5
</pre>
<p>Here is a simple example of nested for loop. This script breaks out of both loops if <b>var1 equals 2</b> and <b>var2 equals 0</b> −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

</span><span class="kwd">for</span><span class="pln"> var1 </span><span class="kwd">in</span><span class="pln"> </span><span class="lit">1</span><span class="pln"> </span><span class="lit">2</span><span class="pln"> </span><span class="lit">3</span><span class="pln">
</span><span class="kwd">do</span><span class="pln">
   </span><span class="kwd">for</span><span class="pln"> var2 </span><span class="kwd">in</span><span class="pln"> </span><span class="lit">0</span><span class="pln"> </span><span class="lit">5</span><span class="pln">
   </span><span class="kwd">do</span><span class="pln">
      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> $var1 </span><span class="pun">-</span><span class="pln">eq </span><span class="lit">2</span><span class="pln"> </span><span class="pun">-</span><span class="pln">a $var2 </span><span class="pun">-</span><span class="pln">eq </span><span class="lit">0</span><span class="pln"> </span><span class="pun">]</span><span class="pln">
      </span><span class="kwd">then</span><span class="pln">
         </span><span class="kwd">break</span><span class="pln"> </span><span class="lit">2</span><span class="pln">
      </span><span class="kwd">else</span><span class="pln">
         echo </span><span class="str">"$var1 $var2"</span><span class="pln">
      </span><span class="kwd">fi</span><span class="pln">
   </span><span class="kwd">done</span><span class="pln">
</span><span class="kwd">done</span></pre>
<p>Upon execution, you will receive the following result. In the inner loop, you have a break command with the argument 2. This indicates that if a condition is met you should break out of outer loop and ultimately from the inner loop as well.</p>
<pre class="result notranslate">1 0
1 5
</pre>
<h4>The continue statement</h4>
<p>The <b>continue</b> statement is similar to the <b>break</b> command, except that it causes the current iteration of the loop to exit, rather than the entire loop.</p>
<p>This statement is useful when an error has occurred but you want to try to execute the next iteration of the loop.</p>
<h5>Syntax</h5>
<pre class="result notranslate">continue
</pre>
<p>Like with the break statement, an integer argument can be given to the continue command to skip commands from nested loops.</p>
<pre class="result notranslate">continue n
</pre>
<p>Here <b>n</b> specifies the <b>n<sup>th</sup></b> enclosing loop to continue from.</p>
<h5>Example</h5>
<p>The following loop makes use of the <b>continue</b> statement which returns from the continue statement and starts processing the next statement −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

NUMS</span><span class="pun">=</span><span class="str">"1 2 3 4 5 6 7"</span><span class="pln">

</span><span class="kwd">for</span><span class="pln"> NUM </span><span class="kwd">in</span><span class="pln"> $NUMS
</span><span class="kwd">do</span><span class="pln">
   Q</span><span class="pun">=</span><span class="str">`expr $NUM % 2`</span><span class="pln">
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> $Q </span><span class="pun">-</span><span class="pln">eq </span><span class="lit">0</span><span class="pln"> </span><span class="pun">]</span><span class="pln">
   </span><span class="kwd">then</span><span class="pln">
      echo </span><span class="str">"Number is an even number!!"</span><span class="pln">
      </span><span class="kwd">continue</span><span class="pln">
   </span><span class="kwd">fi</span><span class="pln">
   echo </span><span class="str">"Found odd number"</span><span class="pln">
</span><span class="kwd">done</span></pre>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#!/bin/sh</span><span class="pln">

NUMS</span><span class="pun">=</span><span class="str">"1 2 3 4 5 6 7"</span><span class="pln">

</span><span class="kwd">for</span><span class="pln"> NUM </span><span class="kwd">in</span><span class="pln"> $NUMS
</span><span class="kwd">do</span><span class="pln">
   Q</span><span class="pun">=</span><span class="str">`expr $NUM % 2`</span><span class="pln">
   </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> $Q </span><span class="pun">-</span><span class="pln">eq </span><span class="lit">0</span><span class="pln"> </span><span class="pun">]</span><span class="pln">
   </span><span class="kwd">then</span><span class="pln">
      echo </span><span class="str">"Number is an even number!!"</span><span class="pln">
      </span><span class="kwd">continue</span><span class="pln">
   </span><span class="kwd">fi</span><span class="pln">
   echo </span><span class="str">"Found odd number"</span><span class="pln">
</span><span class="kwd">done</span></pre>
<p>Upon execution, you will receive the following result −</p>
<pre class="result notranslate">Found odd number
Number is an even number!!
Found odd number
Number is an even number!!
Found odd number
Number is an even number!!
Found odd number
</pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="361_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="363_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'unix_header.php'; ?></aside>
 
  
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