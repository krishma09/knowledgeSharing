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
	$sid=67;
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




<p>JavaScript provides full control to handle loops and switch statements. There may be a situation when you need to come out of a loop without reaching its bottom. There may also be a situation when you want to skip a part of your code block and start the next iteration of the loop.</p>
<p>To handle all such situations, JavaScript provides <b>break</b> and <b>continue</b> statements. These statements are used to immediately come out of any loop or to start the next iteration of any loop respectively.</p>
<h4>The break Statement</h4>
<p>The <b>break</b> statement, which was briefly introduced with the <i>switch</i> statement, is used to exit a loop early, breaking out of the enclosing curly braces.</p>
<h5>Flow Chart</h5>
<p>The flow chart of a break statement would look as follows −</p>
<img src="images/break_statement.jpg" alt="Break Statement">
<h5>Example</h5>
<p>The following example illustrates the use of a <b>break</b> statement with a while loop. Notice how the loop breaks out early once <b>x</b> reaches 5 and reaches to <b>document.write (..)</b> statement just below to the closing curly brace −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
         </span><span class="kwd">var</span><span class="pln"> x </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln">
         document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Entering the loop&lt;br /&gt; "</span><span class="pun">);</span><span class="pln">
         
         </span><span class="kwd">while</span><span class="pln"> </span><span class="pun">(</span><span class="pln">x </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">20</span><span class="pun">)</span><span class="pln">
         </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">x </span><span class="pun">==</span><span class="pln"> </span><span class="lit">5</span><span class="pun">){</span><span class="pln">
               </span><span class="kwd">break</span><span class="pun">;</span><span class="pln"> </span><span class="com">// breaks out of loop completely</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
            x </span><span class="pun">=</span><span class="pln"> x </span><span class="pun">+</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln"> x </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
         
         document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Exiting the loop!&lt;br /&gt; "</span><span class="pun">);</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Set the variable to different value and then try...</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h5>Output</h5>
<pre class="result notranslate">Entering the loop
2
3
4
5
Exiting the loop!
Set the variable to different value and then try...
</pre>
<p>We already have seen the usage of <b>break</b> statement inside <b>a switch</b> statement.</p>
<h4>The continue Statement</h4>
<p>The <b>continue</b> statement tells the interpreter to immediately start the next iteration of the loop and skip the remaining code block. When a <b>continue</b> statement is encountered, the program flow moves to the loop check expression immediately and if the condition remains true, then it starts the next iteration, otherwise the control comes out of the loop.</p>
<h5>Example</h5>
<p>This example illustrates the use of a <b>continue</b> statement with a while loop. Notice how the <b>continue</b> statement is used to skip printing when the index held in variable <b>x</b> reaches 5 −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> x </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Entering the loop&lt;br /&gt; "</span><span class="pun">);</span><span class="pln">
         
            </span><span class="kwd">while</span><span class="pln"> </span><span class="pun">(</span><span class="pln">x </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">10</span><span class="pun">)</span><span class="pln">
            </span><span class="pun">{</span><span class="pln">
               x </span><span class="pun">=</span><span class="pln"> x </span><span class="pun">+</span><span class="pln"> </span><span class="lit">1</span><span class="pun">;</span><span class="pln">
               
               </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">x </span><span class="pun">==</span><span class="pln"> </span><span class="lit">5</span><span class="pun">){</span><span class="pln">
                  </span><span class="kwd">continue</span><span class="pun">;</span><span class="pln"> </span><span class="com">// skip rest of the loop body</span><span class="pln">
               </span><span class="pun">}</span><span class="pln">
               document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="pln"> x </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">);</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Exiting the loop!&lt;br /&gt; "</span><span class="pun">);</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;p&gt;</span><span class="pln">Set the variable to different value and then try...</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h5>Output</h5>
<pre class="result notranslate">Entering the loop
2
3
4
6
7
8
9
10
Exiting the loop!
</pre>
<h4>Using Labels to Control the Flow</h4>
<p>Starting from JavaScript 1.2, a label can be used with <b>break</b> and <b>continue</b> to control the flow more precisely. A <b>label</b> is simply an identifier followed by a colon (:) that is applied to a statement or a block of code. We will see two different examples to understand how to use labels with break and continue.</p>
<p><b>Note</b> − Line breaks are not allowed between the <b>‘continue’</b> or <b>‘break’</b> statement and its label name. Also, there should not be any other statement in between a label name and associated loop.</p>
<p>Try the following two examples for a better understanding of Labels.</p>
<h5>Example</h5>
<p>The following example shows how to implement Label with a break statement.</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pun">=</span><span class="atv">"text/javascript"</span><span class="tag">&gt;</span><span class="pln">
         </span><span class="pun">&lt;!--</span><span class="pln">
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Entering the loop!&lt;br /&gt; "</span><span class="pun">);</span><span class="pln">
            outerloop</span><span class="pun">:</span><span class="pln"> </span><span class="com">// This is the label name</span><span class="pln">
         
            </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">var</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> i </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">5</span><span class="pun">;</span><span class="pln"> i</span><span class="pun">++)</span><span class="pln">
            </span><span class="pun">{</span><span class="pln">
               document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Outerloop: "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> i </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;br /&gt;"</span><span class="pun">);</span><span class="pln">
               innerloop</span><span class="pun">:</span><span class="pln">
               </span><span class="kwd">for</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">var</span><span class="pln"> j </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln"> j </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">5</span><span class="pun">;</span><span class="pln"> j</span><span class="pun">++)</span><span class="pln">
               </span><span class="pun">{</span><span class="pln">
                  </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">j </span><span class="pun">&gt;</span><span class="pln"> </span><span class="lit">3</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="kwd">break</span><span class="pln"> </span><span class="pun">;</span><span class="pln"> </span><span class="com">// Quit the innermost loop</span><span class="pln">
                  </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">i </span><span class="pun">==</span><span class="pln"> </span><span class="lit">2</span><span class="pun">)</span><span class="pln"> </span><span class="kwd">break</span><span class="pln"> innerloop</span><span class="pun">;</span><span class="pln"> </span><span class="com">// Do the same thing</span><span class="pln">
                  </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">i </span><span class="pun">==</span><span class="pln"> </span><span class="lit">4</span><span class="pun">)</span><span class="pln"> </span><span class="kwd">break</span><span class="pln"> outerloop</span><span class="pun">;</span><span class="pln"> </span><span class="com">// Quit the outer loop</span><span class="pln">
                  document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Innerloop: "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> j </span><span class="pun">+</span><span class="pln"> </span><span class="str">" &lt;br /&gt;"</span><span class="pun">);</span><span class="pln">
               </span><span class="pun">}</span><span class="pln">
            </span><span class="pun">}</span><span class="pln">
         
            document</span><span class="pun">.</span><span class="pln">write</span><span class="pun">(</span><span class="str">"Exiting the loop!&lt;br /&gt; "</span><span class="pun">);</span><span class="pln">
         </span><span class="com">//--&gt;</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<h5>Output</h5>
<pre class="result notranslate">Entering the loop!
Outerloop: 0
Innerloop: 0 
Innerloop: 1 
Innerloop: 2 
Innerloop: 3 
Outerloop: 1
Innerloop: 0 
Innerloop: 1 
Innerloop: 2 
Innerloop: 3 
Outerloop: 2
Outerloop: 3
Innerloop: 0 
Innerloop: 1 
Innerloop: 2 
Innerloop: 3 
Outerloop: 4
Exiting the loop!
</pre>










</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="66_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="68_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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