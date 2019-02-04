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
	$sid=291;
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


<p>A procedure is a group of statements that together perform a task when called. After the procedure is executed, the control returns to the statement calling the procedure. VB.Net has two types of procedures:</p>
<ul class="list">
<li><p>Functions </p></li>
<li><p>Sub procedures or Subs</p></li>
</ul>
<p>Functions return a value, whereas Subs do not return a value.</p>
<h4>Defining a Function</h4>
<p>The Function statement is used to declare the name, parameter and the body of a function. The syntax for the Function statement is:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">[</span><span class="typ">Modifiers</span><span class="pun">]</span><span class="pln"> </span><span class="typ">Function</span><span class="pln"> </span><span class="typ">FunctionName</span><span class="pln"> </span><span class="pun">[(</span><span class="typ">ParameterList</span><span class="pun">)]</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">ReturnType</span><span class="pln">
    </span><span class="pun">[</span><span class="typ">Statements</span><span class="pun">]</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Function</span></pre>
<p>Where,</p>
<ul class="list">
<li><p><b><i>Modifiers</i></b>: specify the access level of the function; possible values are: Public, Private, Protected, Friend, Protected Friend and information regarding overloading, overriding, sharing, and shadowing.</p></li>
<li><p><b><i>FunctionName</i></b>: indicates the name of the function</p></li>
<li><p><b><i>ParameterList</i></b>: specifies the list of the parameters</p></li>
<li><p><b><i>ReturnType</i></b>: specifies the data type of the variable the function returns</p></li>
</ul>
<h4>Example</h4>
<p>Following code snippet shows a function <i>FindMax</i> that takes two integer values and returns the larger of the two. </p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Function</span><span class="pln"> </span><span class="typ">FindMax</span><span class="pun">(</span><span class="typ">ByVal</span><span class="pln"> num1 </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">,</span><span class="pln"> </span><span class="typ">ByVal</span><span class="pln"> num2 </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">)</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
   </span><span class="str">' local variable declaration */
   Dim result As Integer
   If (num1 &gt; num2) Then
       result = num1
   Else
       result = num2
   End If
   FindMax = result
End Function</span></pre>
<h4>Function Returning a Value</h4>
<p>In VB.Net, a function can return a value to the calling code in two ways:</p>
<ul class="list">
<li><p>By using the return statement</p></li>
<li><p>By assigning the value to the function name</p></li>
</ul>
<p>The following example demonstrates using the <i>FindMax</i> function:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> myfunctions
   </span><span class="typ">Function</span><span class="pln"> </span><span class="typ">FindMax</span><span class="pun">(</span><span class="typ">ByVal</span><span class="pln"> num1 </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">,</span><span class="pln"> </span><span class="typ">ByVal</span><span class="pln"> num2 </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">)</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      </span><span class="str">' local variable declaration */
      Dim result As Integer
      If (num1 &gt; num2) Then
          result = num1
      Else
          result = num2
      End If
      FindMax = result
   End Function
   Sub Main()
      Dim a As Integer = 100
      Dim b As Integer = 200
      Dim res As Integer
      res = FindMax(a, b)
      Console.WriteLine("Max value is : {0}", res)
      Console.ReadLine()
   End Sub
End Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Max</span><span class="pln"> value </span><span class="kwd">is</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="lit">200</span></pre>
<h4>Recursive Function</h4>
<p>A function can call itself. This is known as recursion. Following is an example that calculates factorial for a given number using a recursive function:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> myfunctions
   </span><span class="typ">Function</span><span class="pln"> factorial</span><span class="pun">(</span><span class="typ">ByVal</span><span class="pln"> num </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">)</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      </span><span class="str">' local variable declaration */
      Dim result As Integer
      If (num = 1) Then
          Return 1
      Else
          result = factorial(num - 1) * num
          Return result
      End If
   End Function
   Sub Main()
      '</span><span class="pln">calling the factorial method
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Factorial of 6 is : {0}"</span><span class="pun">,</span><span class="pln"> factorial</span><span class="pun">(</span><span class="lit">6</span><span class="pun">))</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Factorial of 7 is : {0}"</span><span class="pun">,</span><span class="pln"> factorial</span><span class="pun">(</span><span class="lit">7</span><span class="pun">))</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Factorial of 8 is : {0}"</span><span class="pun">,</span><span class="pln"> factorial</span><span class="pun">(</span><span class="lit">8</span><span class="pun">))</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Factorial</span><span class="pln"> of </span><span class="lit">6</span><span class="pln"> </span><span class="kwd">is</span><span class="pun">:</span><span class="pln"> </span><span class="lit">720</span><span class="pln">
</span><span class="typ">Factorial</span><span class="pln"> of </span><span class="lit">7</span><span class="pln"> </span><span class="kwd">is</span><span class="pun">:</span><span class="pln"> </span><span class="lit">5040</span><span class="pln">
</span><span class="typ">Factorial</span><span class="pln"> of </span><span class="lit">8</span><span class="pln"> </span><span class="kwd">is</span><span class="pun">:</span><span class="pln"> </span><span class="lit">40320</span></pre>

<h4>Param Arrays</h4>
<p>At times, while declaring a function or sub procedure, you are not sure of the number of arguments passed as a parameter. 
VB.Net param arrays (or parameter arrays) come into help at these times. </p>
<p>The following example demonstrates this:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> myparamfunc
   </span><span class="typ">Function</span><span class="pln"> </span><span class="typ">AddElements</span><span class="pun">(</span><span class="typ">ParamArray</span><span class="pln"> arr </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">())</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> sum </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> i </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pln">
      </span><span class="typ">For</span><span class="pln"> </span><span class="typ">Each</span><span class="pln"> i </span><span class="typ">In</span><span class="pln"> arr
          sum </span><span class="pun">+=</span><span class="pln"> i
      </span><span class="typ">Next</span><span class="pln"> i
      </span><span class="typ">Return</span><span class="pln"> sum
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Function</span><span class="pln">
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> sum </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      sum </span><span class="pun">=</span><span class="pln"> </span><span class="typ">AddElements</span><span class="pun">(</span><span class="lit">512</span><span class="pun">,</span><span class="pln"> </span><span class="lit">720</span><span class="pun">,</span><span class="pln"> </span><span class="lit">250</span><span class="pun">,</span><span class="pln"> </span><span class="lit">567</span><span class="pun">,</span><span class="pln"> </span><span class="lit">889</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"The sum is: {0}"</span><span class="pun">,</span><span class="pln"> sum</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">The</span><span class="pln"> sum </span><span class="kwd">is</span><span class="pun">:</span><span class="pln"> </span><span class="lit">2938</span></pre>
<h4>Passing Arrays as Function Arguments</h4>
<p>You can pass an array as a function argument in VB.Net. The following example demonstrates this:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> arrayParameter
   </span><span class="typ">Function</span><span class="pln"> getAverage</span><span class="pun">(</span><span class="typ">ByVal</span><span class="pln"> arr </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">(),</span><span class="pln"> </span><span class="typ">ByVal</span><span class="pln"> size </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">)</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">
      </span><span class="str">'local variables
       Dim i As Integer
       Dim avg As Double
       Dim sum As Integer = 0
       For i = 0 To size - 1
           sum += arr(i)
       Next i
       avg = sum / size
       Return avg
    End Function
    Sub Main()
        '</span><span class="pln"> an </span><span class="kwd">int</span><span class="pln"> array </span><span class="kwd">with</span><span class="pln"> </span><span class="lit">5</span><span class="pln"> elements </span><span class="str">'
        Dim balance As Integer() = {1000, 2, 3, 17, 50}
        Dim avg As Double
        '</span><span class="kwd">pass</span><span class="pln"> pointer to the array </span><span class="kwd">as</span><span class="pln"> an argument 
        avg </span><span class="pun">=</span><span class="pln"> getAverage</span><span class="pun">(</span><span class="pln">balance</span><span class="pun">,</span><span class="pln"> </span><span class="lit">5</span><span class="pun">)</span><span class="pln">
        </span><span class="str">' output the returned value '</span><span class="pln">
        </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Average value is: {0} "</span><span class="pun">,</span><span class="pln"> avg</span><span class="pun">)</span><span class="pln">
        </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span><span class="pun">()</span><span class="pln">
    </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Average</span><span class="pln"> value </span><span class="kwd">is</span><span class="pun">:</span><span class="pln"> </span><span class="lit">214.4</span></pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="290_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="292_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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