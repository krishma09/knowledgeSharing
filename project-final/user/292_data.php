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
<title>VB.NET Tutorials | knowledge.com</title>
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
	$sid=292;
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

<p>As we mentioned in the previous chapter, Sub procedures are procedures that do not return any value. We have been using the Sub procedure Main in all our examples. We have been writing console applications so far in these tutorials. When these applications start, the control goes to the Main Sub procedure, and it in turn, runs any other statements constituting the body of the program. </p>
<h4>Defining Sub Procedures</h4>
<p>The <b>Sub</b> statement is used to declare the name, parameter and the body of a sub procedure. The syntax for the Sub statement is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">[</span><span class="typ">Modifiers</span><span class="pun">]</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">SubName</span><span class="pln"> </span><span class="pun">[(</span><span class="typ">ParameterList</span><span class="pun">)]</span><span class="pln"> 
    </span><span class="pun">[</span><span class="typ">Statements</span><span class="pun">]</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span></pre>
<p>Where,</p>
<ul class="list">
<li><p><b><i>Modifiers</i></b>: specify the access level of the procedure; possible values are: Public, Private, Protected, Friend, Protected Friend and information regarding overloading, overriding, sharing, and shadowing.</p></li>
<li><p><b><i>SubName</i></b>: indicates the name of the Sub</p></li>
<li><p><b><i>ParameterList</i></b>: specifies the list of the parameters</p></li>
</ul>
<h4>Example</h4>
<p>The following example demonstrates a Sub procedure <i>CalculatePay</i> that takes two parameters <i>hours</i> and <i>wages</i> and displays the total pay of an employee:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> mysub
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">CalculatePay</span><span class="pun">(</span><span class="typ">ByRef</span><span class="pln"> hours </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pun">,</span><span class="pln"> </span><span class="typ">ByRef</span><span class="pln"> wage </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Decimal</span><span class="pun">)</span><span class="pln">
      </span><span class="str">'local variable declaration
      Dim pay As Double
      pay = hours * wage
      Console.WriteLine("Total Pay: {0:C}", pay)
   End Sub
   Sub Main()
      '</span><span class="pln">calling the </span><span class="typ">CalculatePay</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Procedure</span><span class="pln">
      </span><span class="typ">CalculatePay</span><span class="pun">(</span><span class="lit">25</span><span class="pun">,</span><span class="pln"> </span><span class="lit">10</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">CalculatePay</span><span class="pun">(</span><span class="lit">40</span><span class="pun">,</span><span class="pln"> </span><span class="lit">20</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">CalculatePay</span><span class="pun">(</span><span class="lit">30</span><span class="pun">,</span><span class="pln"> </span><span class="lit">27.5</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Total</span><span class="pln"> </span><span class="typ">Pay</span><span class="pun">:</span><span class="pln"> $250</span><span class="pun">.</span><span class="lit">00</span><span class="pln">
</span><span class="typ">Total</span><span class="pln"> </span><span class="typ">Pay</span><span class="pun">:</span><span class="pln"> $800</span><span class="pun">.</span><span class="lit">00</span><span class="pln">
</span><span class="typ">Total</span><span class="pln"> </span><span class="typ">Pay</span><span class="pun">:</span><span class="pln"> $825</span><span class="pun">.</span><span class="lit">00</span></pre>
<h4>Passing Parameters by Value</h4>
<p>This is the default mechanism for passing parameters to a method. In this mechanism, when a method is called, a new storage location is created for each value parameter. The values of the actual parameters are copied into them. So, the changes made to the parameter inside the method have no effect on the argument.</p>
<p>In VB.Net, you declare the reference parameters using the <b>ByVal</b> keyword. The following example demonstrates the concept:</p>

<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> paramByval
   </span><span class="typ">Sub</span><span class="pln"> swap</span><span class="pun">(</span><span class="typ">ByVal</span><span class="pln"> x </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">,</span><span class="pln"> </span><span class="typ">ByVal</span><span class="pln"> y </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> temp </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      temp </span><span class="pun">=</span><span class="pln"> x </span><span class="str">' save the value of x 
      x = y    '</span><span class="pln"> put y </span><span class="kwd">into</span><span class="pln"> x 
      y </span><span class="pun">=</span><span class="pln"> temp </span><span class="str">'put temp into y 
   End Sub
   Sub Main()
      '</span><span class="pln"> </span><span class="kwd">local</span><span class="pln"> variable definition 
      </span><span class="typ">Dim</span><span class="pln"> a </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">100</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> b </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">200</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Before swap, value of a : {0}"</span><span class="pun">,</span><span class="pln"> a</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Before swap, value of b : {0}"</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln">
      </span><span class="str">' calling a function to swap the values '</span><span class="pln">
      swap</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"After swap, value of a : {0}"</span><span class="pun">,</span><span class="pln"> a</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"After swap, value of b : {0}"</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Before</span><span class="pln"> swap</span><span class="pun">,</span><span class="pln"> value of a </span><span class="pun">:</span><span class="lit">100</span><span class="pln">
</span><span class="typ">Before</span><span class="pln"> swap</span><span class="pun">,</span><span class="pln"> value of b </span><span class="pun">:</span><span class="lit">200</span><span class="pln">
</span><span class="typ">After</span><span class="pln"> swap</span><span class="pun">,</span><span class="pln"> value of a </span><span class="pun">:</span><span class="lit">100</span><span class="pln">
</span><span class="typ">After</span><span class="pln"> swap</span><span class="pun">,</span><span class="pln"> value of b </span><span class="pun">:</span><span class="lit">200</span></pre>
<p>It shows that there is no change in the values though they had been changed inside the function.</p>
<h4>Passing Parameters by Reference</h4>
<p>A reference parameter is a reference to a memory location of a variable. When you pass parameters by reference, unlike value parameters, a new storage location is not created for these parameters. The reference parameters represent the same memory location as the actual parameters that are supplied to the method. </p>
<p>In VB.Net, you declare the reference parameters using the <b>ByRef</b> keyword. The following example demonstrates this:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> paramByref
   </span><span class="typ">Sub</span><span class="pln"> swap</span><span class="pun">(</span><span class="typ">ByRef</span><span class="pln"> x </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">,</span><span class="pln"> </span><span class="typ">ByRef</span><span class="pln"> y </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> temp </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      temp </span><span class="pun">=</span><span class="pln"> x </span><span class="str">' save the value of x 
      x = y    '</span><span class="pln"> put y </span><span class="kwd">into</span><span class="pln"> x 
      y </span><span class="pun">=</span><span class="pln"> temp </span><span class="str">'put temp into y 
   End Sub
   Sub Main()
      '</span><span class="pln"> </span><span class="kwd">local</span><span class="pln"> variable definition 
      </span><span class="typ">Dim</span><span class="pln"> a </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">100</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> b </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">200</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Before swap, value of a : {0}"</span><span class="pun">,</span><span class="pln"> a</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Before swap, value of b : {0}"</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln">
      </span><span class="str">' calling a function to swap the values '</span><span class="pln">
      swap</span><span class="pun">(</span><span class="pln">a</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"After swap, value of a : {0}"</span><span class="pun">,</span><span class="pln"> a</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"After swap, value of b : {0}"</span><span class="pun">,</span><span class="pln"> b</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Before</span><span class="pln"> swap</span><span class="pun">,</span><span class="pln"> value of a </span><span class="pun">:</span><span class="pln"> </span><span class="lit">100</span><span class="pln">
</span><span class="typ">Before</span><span class="pln"> swap</span><span class="pun">,</span><span class="pln"> value of b </span><span class="pun">:</span><span class="pln"> </span><span class="lit">200</span><span class="pln">
</span><span class="typ">After</span><span class="pln"> swap</span><span class="pun">,</span><span class="pln"> value of a </span><span class="pun">:</span><span class="pln"> </span><span class="lit">200</span><span class="pln">
</span><span class="typ">After</span><span class="pln"> swap</span><span class="pun">,</span><span class="pln"> value of b </span><span class="pun">:</span><span class="pln"> </span><span class="lit">100</span></pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="291_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="293_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'vbnet_header.php'; ?></aside>
 
  
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