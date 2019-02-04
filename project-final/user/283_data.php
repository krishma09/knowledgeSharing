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
	$sid=283;
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

<p>A <b>statement</b> is a complete instruction in Visual Basic programs. It may contain keywords, operators, variables, literal values, constants and expressions. </p>
<p>Statements could be categorized as:</p>
<ul class="list">
<li><p><b>Declaration statements</b> - these are the statements where you name a variable, constant, or procedure, and can also specify a data type.</p></li>
<li><p><b>Executable statements</b> - these are the statements, which initiate actions. These statements can call a method or function, loop or branch through blocks of code or assign values or expression to a variable or constant. In the last case, it is called an Assignment statement.</p></li>
</ul>
<h4>Declaration Statements</h4>
<p>The declaration statements are used to name and define procedures, variables, properties, arrays, and constants. When you declare a programming element, you can also define its data type, access level, and scope.</p>
<p>The programming elements you may declare include variables, constants, enumerations, classes, structures, modules, interfaces, procedures, procedure parameters, function returns, external procedure references, operators, properties, events, and delegates.</p>
<p>Following are the declaration statements in VB.Net:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width: 5%;">S.N</th>
<th style="width:50%;">Statements and Description</th>
<th>Example</th>
</tr>
<tr>
<td>1</td>
<td>
<p><b>Dim Statement</b></p>
<p>Declares and allocates storage space for one or more variables.</p>
</td>
<td>
<pre>Dim number As Integer
Dim quantity As Integer = 100
Dim message As String = "Hello!"
</pre>
</td>
</tr>
<tr>
<td>2</td>
<td>
<b>Const Statement</b> <br>
Declares and defines one or more constants.
</td>
<td>
<pre>Const maximum As Long = 1000
Const naturalLogBase As Object 
= CDec(2.7182818284)
</pre>
</td>
</tr>
<tr>
<td>3</td>
<td>
<b>Enum Statement</b> 
<br>
Declares an enumeration and defines the values of its members.
</td>
<td>
<pre>Enum CoffeeMugSize
    Jumbo
    ExtraLarge
    Large
    Medium
    Small
End Enum 
</pre>
</td>
</tr>
<tr>
<td>4</td>
<td>
<p><b>Class Statement</b></p>
<p>Declares the name of a class and introduces the definition of the variables, properties, events, and procedures that the class comprises.</p>
</td>
<td>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Class</span><span class="pln"> </span><span class="typ">Box</span><span class="pln">
</span><span class="typ">Public</span><span class="pln"> length </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">
</span><span class="typ">Public</span><span class="pln"> breadth </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">   
</span><span class="typ">Public</span><span class="pln"> height </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Class</span></pre>
</td>
</tr>
<tr>
<td>5</td>
<td>
<p><b>Structure Statement</b></p>
<p>Declares the name of a structure and introduces the definition of the variables, properties, events, and procedures that the structure comprises.</p>
</td>
<td>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Structure</span><span class="pln"> </span><span class="typ">Box</span><span class="pln">
</span><span class="typ">Public</span><span class="pln"> length </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">           
</span><span class="typ">Public</span><span class="pln"> breadth </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">   
</span><span class="typ">Public</span><span class="pln"> height </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Structure</span></pre>
</td>
</tr>
<tr>
<td>6</td>
<td>
<p><b>Module Statement</b></p>
<p>Declares the name of a module and introduces the definition of the variables, properties, events, and procedures that the module comprises.</p>
</td>
<td>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Public</span><span class="pln"> </span><span class="typ">Module</span><span class="pln"> myModule
</span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
</span><span class="typ">Dim</span><span class="pln"> user </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> 
</span><span class="typ">InputBox</span><span class="pun">(</span><span class="str">"What is your name?"</span><span class="pun">)</span><span class="pln"> 
</span><span class="typ">MsgBox</span><span class="pun">(</span><span class="str">"User name is"</span><span class="pln"> </span><span class="pun">&amp;</span><span class="pln"> user</span><span class="pun">)</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> 
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
</td>
</tr>
<tr>
<td>7</td>
<td>
<p><b>Interface Statement </b></p> 
<br>Declares the name of an interface and introduces the definitions of the members that the interface comprises.<p></p>
</td>
<td>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Public</span><span class="pln"> </span><span class="typ">Interface</span><span class="pln"> </span><span class="typ">MyInterface</span><span class="pln">
    </span><span class="typ">Sub</span><span class="pln"> doSomething</span><span class="pun">()</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Interface</span><span class="pln"> </span></pre>
</td>
</tr>
<tr>
<td>8</td>
<td>
<p><b>Function Statement</b></p> 
<p>Declares the name, parameters, and code that define a Function procedure.</p>
</td>
<td>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Function</span><span class="pln"> myFunction
</span><span class="pun">(</span><span class="typ">ByVal</span><span class="pln"> n </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">)</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln"> 
    </span><span class="typ">Return</span><span class="pln"> </span><span class="lit">5.87</span><span class="pln"> </span><span class="pun">*</span><span class="pln"> n
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Function</span></pre>
</td>
</tr>
<tr>
<td>9</td>
<td>
<p><b>Sub Statement</b></p>
<p>Declares the name, parameters, and code that define a Sub procedure.</p>
</td>
<td>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Sub</span><span class="pln"> mySub</span><span class="pun">(</span><span class="typ">ByVal</span><span class="pln"> s </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pun">)</span><span class="pln">
    </span><span class="typ">Return</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span></pre>
</td>
</tr>
<tr>
<td>10</td>
<td>
<p><b>Declare Statement</b></p>
<p>Declares a reference to a procedure implemented in an external file.</p>
</td>
<td>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Declare</span><span class="pln"> </span><span class="typ">Function</span><span class="pln"> getUserName
</span><span class="typ">Lib</span><span class="pln"> </span><span class="str">"advapi32.dll"</span><span class="pln"> 
</span><span class="typ">Alias</span><span class="pln"> </span><span class="str">"GetUserNameA"</span><span class="pln"> 
</span><span class="pun">(</span><span class="pln">
  </span><span class="typ">ByVal</span><span class="pln"> lpBuffer </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pun">,</span><span class="pln"> 
  </span><span class="typ">ByRef</span><span class="pln"> nSize </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">)</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln"> </span></pre>
</td>
</tr>
<tr>
<td>11</td>
<td>
<p><b>Operator Statement</b></p>
<p>Declares the operator symbol, operands, and code that define an operator procedure on a class or structure.</p>
</td>
<td>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Public</span><span class="pln"> </span><span class="typ">Shared</span><span class="pln"> </span><span class="typ">Operator</span><span class="pln"> </span><span class="pun">+</span><span class="pln">
</span><span class="pun">(</span><span class="typ">ByVal</span><span class="pln"> x </span><span class="typ">As</span><span class="pln"> obj</span><span class="pun">,</span><span class="pln"> </span><span class="typ">ByVal</span><span class="pln"> y </span><span class="typ">As</span><span class="pln"> obj</span><span class="pun">)</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> obj
        </span><span class="typ">Dim</span><span class="pln"> r </span><span class="typ">As</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> obj
</span><span class="str">' implemention code for r = x + y
        Return r
    End Operator </span></pre>
</td>
</tr>
<tr>
<td>12</td>
<td>
<p><b>Property Statement</b></p>
<p>Declares the name of a property, and the property procedures used to store and retrieve the value of the property.</p>
</td>
<td>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">ReadOnly</span><span class="pln"> </span><span class="typ">Property</span><span class="pln"> quote</span><span class="pun">()</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln"> 
    </span><span class="typ">Get</span><span class="pln"> 
        </span><span class="typ">Return</span><span class="pln"> quoteString
    </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Get</span><span class="pln"> 
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Property</span></pre>
</td>
</tr>
<tr>
<td>13</td>
<td>
<p><b>Event Statement</b></p>
<p>Declares a user-defined event.</p>
</td>
<td>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Public</span><span class="pln"> </span><span class="typ">Event</span><span class="pln"> </span><span class="typ">Finished</span><span class="pun">()</span></pre>
</td>
</tr>
<tr>
<td>14</td>
<td>
<p><b>Delegate Statement</b></p>
<p>Used to declare a delegate.</p>
</td>
<td>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Delegate</span><span class="pln"> </span><span class="typ">Function</span><span class="pln"> </span><span class="typ">MathOperator</span><span class="pun">(</span><span class="pln"> 
    </span><span class="typ">ByVal</span><span class="pln"> x </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pun">,</span><span class="pln"> 
    </span><span class="typ">ByVal</span><span class="pln"> y </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln"> 
</span><span class="pun">)</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln"> </span></pre>
</td>
</tr>
</tbody></table>
<h4>Executable Statements</h4>

<p>An executable statement performs an action. Statements calling a procedure, branching to another place in the code, looping through several statements, or evaluating an expression are executable statements. An assignment statement is a special case of an executable statement.</p>
<b>Example</b>
<p>The following example demonstrates a decision making statement:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> decisions
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="str">'local variable definition '</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> a </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pln">

      </span><span class="str">' check the boolean condition using if statement '</span><span class="pln">
      </span><span class="typ">If</span><span class="pln"> </span><span class="pun">(</span><span class="pln">a </span><span class="pun">&lt;</span><span class="pln"> </span><span class="lit">20</span><span class="pun">)</span><span class="pln"> </span><span class="typ">Then</span><span class="pln">
         </span><span class="str">' if condition is true then print the following '</span><span class="pln">
         </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"a is less than 20"</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">End</span><span class="pln"> </span><span class="typ">If</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"value of a is : {0}"</span><span class="pun">,</span><span class="pln"> a</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">a </span><span class="kwd">is</span><span class="pln"> less than </span><span class="lit">20</span><span class="pun">;</span><span class="pln">
value of a </span><span class="kwd">is</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="lit">10</span></pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="282_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="284_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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