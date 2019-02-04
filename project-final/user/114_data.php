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
	$sid=114;
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





<p>Loops in PHP are used to execute the same block of code a specified number of times. PHP supports following four loop types.</p>
<ul class="list">
<li><p><b>for</b> − loops through a block of code a specified number of times.</p></li>
<li><p><b>while</b> − loops through a block of code if and as long as a specified condition is true.</p></li>
<li><p><b>do...while</b> − loops through a block of code once, and then repeats the loop as long as a special condition is true.</p></li>
<li><p><b>foreach</b> − loops through a block of code for each element in an array.</p></li>
</ul>
<p>We will discuss about <b>continue</b> and <b>break</b> keywords used to control the loops execution.</p>
<h4>The for loop statement</h4>
<p>The for statement is used when you know how many times you want to execute a statement or a block of statements.</p>
<img src="images/php_for_loop.jpg" alt="for loop in Php">
<h5>Syntax</h5>

<pre class="result notranslate">for (<i>initialization</i>; <i>condition</i>; <i>increment</i>){
   <i>code to be executed;</i>
}
</pre>
<p>The initializer is used to set the start value for the counter of the number of loop iterations. A variable may be declared here for this purpose and it is traditional to name it $i.</p>
<h5>Example</h5>
<p>The following example makes five iterations and changes the assigned value of two variables on each pass of the loop −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="pun">&lt;?</span><span class="pln">php
         $a </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
         $b </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
         
         </span><span class="kwd">for</span><span class="pun">(</span><span class="pln"> $i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> $i</span><span class="pun">&lt;</span><span class="lit">5</span><span class="pun">;</span><span class="pln"> $i</span><span class="pun">++</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $a </span><span class="pun">+=</span><span class="pln"> </span><span class="lit">10</span><span class="pun">;</span><span class="pln">
            $b </span><span class="pun">+=</span><span class="pln"> </span><span class="lit">5</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         echo </span><span class="pun">(</span><span class="str">"At the end of the loop a = $a and b = $b"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce the following result −</p>
<pre class="result notranslate">At the end of the loop a = 50 and b = 25
</pre>
<h4>The while loop statement</h4>

<p>The while statement will execute a block of code if and as long as a test expression is true.</p>
<p>If the test expression is true then the code block will be executed. After the code has executed the test expression will again be evaluated and the loop will continue until the test expression is found to be false.</p>
<img src="images/php_while_loop.jpg" alt="for loop in PHP">
<h5>Syntax</h5>

<pre class="result notranslate">while (<i>condition</i>) {
   <i>code to be executed</i>;
}
</pre>
<h5>Example</h5>
<p>This example decrements a variable value on each iteration of the loop and the counter increments until it reaches 10 when the evaluation is false and the loop ends.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="pun">&lt;?</span><span class="pln">php
         $i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
         $num </span><span class="pun">=</span><span class="pln"> </span><span class="lit">50</span><span class="pun">;</span><span class="pln">
         
         </span><span class="kwd">while</span><span class="pun">(</span><span class="pln"> $i </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">10</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $num</span><span class="pun">--;</span><span class="pln">
            $i</span><span class="pun">++;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         echo </span><span class="pun">(</span><span class="str">"Loop stopped at i = $i and num = $num"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce the following result −</p>
<pre class="result notranslate">Loop stopped at i = 10 and num = 40 
</pre>
<h4>The break statement</h4>
<p>The PHP <b>break</b> keyword is used to terminate the execution of a loop prematurely.</p>
<p>The <b>break</b> statement is situated inside the statement block. If gives you full control and whenever you want to exit from the loop you can come out. After coming out of a loop immediate statement to the loop will be executed.</p>
<img src="images/cpp_break_statement.jpg" alt="PHP Break Statement">
<h5>Example</h5>

<p>In the following example condition test becomes true when the counter value reaches 3 and loop terminates.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="pun">&lt;?</span><span class="pln">php
         $i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
         
         </span><span class="kwd">while</span><span class="pun">(</span><span class="pln"> $i </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">10</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $i</span><span class="pun">++;</span><span class="pln">
            </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> $i </span><span class="pun">==</span><span class="pln"> </span><span class="lit">3</span><span class="pln"> </span><span class="pun">)</span><b><span class="kwd">break</span><span class="pun">;</span></b><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         echo </span><span class="pun">(</span><span class="str">"Loop stopped at i = $i"</span><span class="pln"> </span><span class="pun">);</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce the following result −</p>

<pre class="result notranslate">Loop stopped at i = 3
</pre>
<h4>The continue statement</h4>
<p>The PHP <b>continue</b> keyword is used to halt the current iteration of a loop but it does not terminate the loop.</p>
<p>Just like the <b>break</b> statement the <b>continue</b> statement is situated inside the statement block containing the code that the loop executes, preceded by a conditional test. For the pass encountering <b>continue</b> statement, rest of the loop code is skipped and next pass starts.</p>
<img src="images/cpp_continue_statement.jpg" alt="PHP Continue Statement">
<h5>Example</h5>

<p>In the following example loop prints the value of array but for which condition becomes true it just skip the code and next value is printed.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="pun">&lt;?</span><span class="pln">php
         $array </span><span class="pun">=</span><span class="pln"> array</span><span class="pun">(</span><span class="pln"> </span><span class="lit">1</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span class="pun">,</span><span class="pln"> </span><span class="lit">3</span><span class="pun">,</span><span class="pln"> </span><span class="lit">4</span><span class="pun">,</span><span class="pln"> </span><span class="lit">5</span><span class="pun">);</span><span class="pln">
         
         </span><span class="kwd">foreach</span><span class="pun">(</span><span class="pln"> $array </span><span class="kwd">as</span><span class="pln"> $value </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">if</span><span class="pun">(</span><span class="pln"> $value </span><span class="pun">==</span><span class="pln"> </span><span class="lit">3</span><span class="pln"> </span><span class="pun">)</span><b><span class="kwd">continue</span><span class="pun">;</span></b><span class="pln">
            echo </span><span class="str">"Value is $value &lt;br /&gt;"</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce the following result −</p>
<pre class="result notranslate">Value is 1
Value is 2
Value is 4
Value is 5
</pre>












</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="113_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="115_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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