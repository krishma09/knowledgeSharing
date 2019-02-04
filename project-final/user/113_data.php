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
	$sid=113;
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



<p>The if, elseif ...else and switch statements are used to take decision based on the different condition.</p>
<p>You can use conditional statements in your code to make your decisions. PHP supports following three decision making statements −</p>
<img src="images/decision_making(2).jpg" alt="Decision making statements in PHP">

<ul class="list">
<li><p><b>if...else statement</b> − use this statement if you want to execute a set of code when a condition is true and another if the condition is not true</p></li>
<li><p><b>elseif statement</b> − is used with the if...else statement to execute a set of code if <b>one</b> of the several condition is true</p></li>
<li><p><b>switch statement</b> − is used if you want to select one of many blocks of code to be executed, use the Switch statement. The switch statement is used to avoid long blocks of if..elseif..else code.</p></li>
</ul>
<h4>The If...Else Statement</h4>
<p>If you want to execute some code if a condition is true and another code if a condition is false, use the if....else statement.</p>
<h5>Syntax</h5>
<pre class="result notranslate">if (<i>condition</i>)
   <i>code to be executed if condition is true;</i>
else
   <i>code to be executed if condition is false;</i>
</pre>
<h5>Example</h5>
<p>The following example will output "Have a nice weekend!" if the current day is Friday, Otherwise, it will output "Have a nice day!":</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="pun">&lt;?</span><span class="pln">php
         $d </span><span class="pun">=</span><span class="pln"> date</span><span class="pun">(</span><span class="str">"D"</span><span class="pun">);</span><span class="pln">
         
         </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">$d </span><span class="pun">==</span><span class="pln"> </span><span class="str">"Fri"</span><span class="pun">)</span><span class="pln">
            echo </span><span class="str">"Have a nice weekend!"</span><span class="pun">;</span><span class="pln"> 
         
         </span><span class="kwd">else</span><span class="pln">
            echo </span><span class="str">"Have a nice day!"</span><span class="pun">;</span><span class="pln"> 
      </span><span class="pun">?&gt;</span><span class="pln">
   
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It will produce the following result −</p>
<pre class="result notranslate">Have a nice day!
</pre>
<h4>The ElseIf Statement</h4>
<p>If you want to execute some code if one of the several conditions are true use the elseif statement</p>
<h5>Syntax</h5>
<pre class="result notranslate">if (<i>condition</i>)
   <i>code to be executed if condition is true;</i>
elseif (<i>condition</i>)
   <i>code to be executed if condition is true;</i>
else
   <i>code to be executed if condition is false;</i>
</pre>
<h5>Example</h5>
<p>The following example will output "Have a nice weekend!" if the current day is Friday, and "Have a nice Sunday!" if the current day is Sunday. Otherwise, it will output "Have a nice day!" −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
   
      </span><span class="pun">&lt;?</span><span class="pln">php
         $d </span><span class="pun">=</span><span class="pln"> date</span><span class="pun">(</span><span class="str">"D"</span><span class="pun">);</span><span class="pln">
         
         </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">$d </span><span class="pun">==</span><span class="pln"> </span><span class="str">"Fri"</span><span class="pun">)</span><span class="pln">
            echo </span><span class="str">"Have a nice weekend!"</span><span class="pun">;</span><span class="pln">
         
         elseif </span><span class="pun">(</span><span class="pln">$d </span><span class="pun">==</span><span class="pln"> </span><span class="str">"Sun"</span><span class="pun">)</span><span class="pln">
            echo </span><span class="str">"Have a nice Sunday!"</span><span class="pun">;</span><span class="pln"> 
         
         </span><span class="kwd">else</span><span class="pln">
            echo </span><span class="str">"Have a nice day!"</span><span class="pun">;</span><span class="pln"> 
      </span><span class="pun">?&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It will produce the following result −</p>
<pre class="result notranslate">Have a nice day!
</pre>
<h4>The Switch Statement</h4>
<p>If you want to select one of many blocks of code to be executed, use the Switch statement.</p>
<p>The switch statement is used to avoid long blocks of if..elseif..else code.</p>
<h5>Syntax</h5>
<pre class="result notranslate">switch (<i>expression</i>){
   case <i>label1:</i>
      <i>code to be executed if expression = label1;</i>
      break;  
   
   case <i>label2:</i>
      <i>code to be executed if expression = label2;</i>
      break;
      default:
   
   <i>code to be executed
   if expression is different 
   from both label1 and label2;</i>
}
</pre>
<h5>Example</h5>
<p>The <i>switch</i> statement works in an unusual way. First it evaluates given expression then seeks a lable to match the resulting value. If a matching value is found then the code associated with the matching label will be executed or if none of the lable matches then statement will  execute any specified default code.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      
      </span><span class="pun">&lt;?</span><span class="pln">php
         $d </span><span class="pun">=</span><span class="pln"> date</span><span class="pun">(</span><span class="str">"D"</span><span class="pun">);</span><span class="pln">
         
         </span><span class="kwd">switch</span><span class="pln"> </span><span class="pun">(</span><span class="pln">$d</span><span class="pun">){</span><span class="pln">
            </span><span class="kwd">case</span><span class="pln"> </span><span class="str">"Mon"</span><span class="pun">:</span><span class="pln">
               echo </span><span class="str">"Today is Monday"</span><span class="pun">;</span><span class="pln">
               </span><span class="kwd">break</span><span class="pun">;</span><span class="pln">
            
            </span><span class="kwd">case</span><span class="pln"> </span><span class="str">"Tue"</span><span class="pun">:</span><span class="pln">
               echo </span><span class="str">"Today is Tuesday"</span><span class="pun">;</span><span class="pln">
               </span><span class="kwd">break</span><span class="pun">;</span><span class="pln">
            
            </span><span class="kwd">case</span><span class="pln"> </span><span class="str">"Wed"</span><span class="pun">:</span><span class="pln">
               echo </span><span class="str">"Today is Wednesday"</span><span class="pun">;</span><span class="pln">
               </span><span class="kwd">break</span><span class="pun">;</span><span class="pln">
            
            </span><span class="kwd">case</span><span class="pln"> </span><span class="str">"Thu"</span><span class="pun">:</span><span class="pln">
               echo </span><span class="str">"Today is Thursday"</span><span class="pun">;</span><span class="pln">
               </span><span class="kwd">break</span><span class="pun">;</span><span class="pln">
            
            </span><span class="kwd">case</span><span class="pln"> </span><span class="str">"Fri"</span><span class="pun">:</span><span class="pln">
               echo </span><span class="str">"Today is Friday"</span><span class="pun">;</span><span class="pln">
               </span><span class="kwd">break</span><span class="pun">;</span><span class="pln">
            
            </span><span class="kwd">case</span><span class="pln"> </span><span class="str">"Sat"</span><span class="pun">:</span><span class="pln">
               echo </span><span class="str">"Today is Saturday"</span><span class="pun">;</span><span class="pln">
               </span><span class="kwd">break</span><span class="pun">;</span><span class="pln">
            
            </span><span class="kwd">case</span><span class="pln"> </span><span class="str">"Sun"</span><span class="pun">:</span><span class="pln">
               echo </span><span class="str">"Today is Sunday"</span><span class="pun">;</span><span class="pln">
               </span><span class="kwd">break</span><span class="pun">;</span><span class="pln">
            
            </span><span class="kwd">default</span><span class="pun">:</span><span class="pln">
               echo </span><span class="str">"Wonder which day is this ?"</span><span class="pun">;</span><span class="pln">
         </span><span class="pun">}</span><span class="pln">
      </span><span class="pun">?&gt;</span><span class="pln">
      
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>It will produce the following result −</p>
<pre class="result notranslate">Today is Monday
</pre>









</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="112_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="114_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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