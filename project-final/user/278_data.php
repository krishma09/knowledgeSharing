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
	$sid=278;
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
<p>VB.Net is an object-oriented programming language. In Object-Oriented Programming methodology, a program consists of various objects that interact with each other by means of actions. The actions that an object may take are called methods. Objects of the same kind are said to have the same type or, more often, are said to be in the same class.</p>
<p>When we consider a VB.Net program, it can be defined as a collection of objects that communicate via invoking each other's methods.  Let us now briefly look into what do class, object, methods and instance variables mean.</p>
<ul class="list">
<li><p><b>Object</b> - Objects have states and behaviors. Example: A dog has states - color, name, breed as well as behaviors - wagging, barking, eating, etc. An object is an instance of a class.</p></li>
<li><p><b>Class</b> - A class can be defined as a template/blueprint that describes the behaviors/states that objects of its type support.</p></li>
<li><p><b>Methods</b> - A method is basically a behavior. A class can contain many methods. It is in methods where the logics are written, data is manipulated and all the actions are executed.</p></li>
<li><p><b>Instance Variables</b> - Each object has its unique set of instance variables. An object's state is created by the values assigned to these instance variables.</p></li>
</ul>
<h4>A Rectangle Class in VB.Net</h4>
<p>For example, let us consider a Rectangle object. It has attributes like length and width. Depending upon the design, it may need ways for accepting the values of these attributes, calculating area and displaying details.</p>
<p>Let us look at an implementation of a Rectangle class and discuss VB.Net basic syntax on the basis of our observations in it:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Imports</span><span class="pln"> </span><span class="typ">System</span><span class="pln">
</span><span class="typ">Public</span><span class="pln"> </span><span class="typ">Class</span><span class="pln"> </span><span class="typ">Rectangle</span><span class="pln">
    </span><span class="typ">Private</span><span class="pln"> length </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">
    </span><span class="typ">Private</span><span class="pln"> width </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">

    </span><span class="str">'Public methods
    Public Sub AcceptDetails()
        length = 4.5
        width = 3.5
    End Sub

    Public Function GetArea() As Double
        GetArea = length * width
    End Function
    Public Sub Display()
        Console.WriteLine("Length: {0}", length)
        Console.WriteLine("Width: {0}", width)
        Console.WriteLine("Area: {0}", GetArea())

    End Sub

    Shared Sub Main()
        Dim r As New Rectangle()
        r.Acceptdetails()
        r.Display()
        Console.ReadLine()
    End Sub
End Class</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Length</span><span class="pun">:</span><span class="pln"> </span><span class="lit">4.5</span><span class="pln">
</span><span class="typ">Width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">3.5</span><span class="pln">
</span><span class="typ">Area</span><span class="pun">:</span><span class="pln"> </span><span class="lit">15.75</span></pre>
<p>In previous chapter, we created a Visual Basic module that held the code. Sub Main indicates the entry point of VB.Net program.
Here, we are using Class that contains both code and data. You use classes to create objects. For example, in the code, r is a Rectangle object.</p>
<p>An object is an instance of a class:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Dim</span><span class="pln"> r </span><span class="typ">As</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">Rectangle</span><span class="pun">()</span></pre>
<p>A class may have members that can be accessible from outside class, if so specified. Data members are called fields and procedure members are called methods.</p>
<p>A class may have members that can be accessible from outside class, if so specified. Data members are called fields and procedure members are called methods.</p>
<p><b>Shared</b> methods or <b>static</b> methods can be invoked without creating an object of the class. Instance methods are invoked through an object of the class:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Shared</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">Dim</span><span class="pln"> r </span><span class="typ">As</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">Rectangle</span><span class="pun">()</span><span class="pln">
   r</span><span class="pun">.</span><span class="typ">Acceptdetails</span><span class="pun">()</span><span class="pln">
   r</span><span class="pun">.</span><span class="typ">Display</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span><span class="pun">()</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span></pre>
<h4>Identifiers</h4>
<p>An identifier is a name used to identify a class, variable, function, or any other user-defined item. The basic rules for naming classes in VB.Net are as follows:</p>
<ul class="list">
<li><p>A name must begin with a letter that could be followed by a sequence of letters, digits (0 - 9) or underscore. The first character in an identifier cannot be a digit. </p></li>
<li><p>It must not contain any embedded space or symbol like ? - +! @ # % ^ &amp; * ( ) [ ] { } . ; : " ' / and \. However, an underscore ( _ ) can be used. </p></li>
<li><p>It should not be a reserved keyword. </p></li>
</ul>
<h4>VB.Net Keywords</h4>
<p>The following table lists the VB.Net reserved keywords:</p>
<table class="table table-bordered" style="font-size:12px;">
<tbody><tr>
<td>AddHandler</td>
<td>AddressOf</td>
<td>Alias</td>
<td>And</td>
<td>AndAlso</td>
<td>As</td>
<td>Boolean</td>
</tr>
<tr>
<td>ByRef</td>
<td>Byte</td>
<td>ByVal</td>
<td>Call</td>
<td>Case</td>
<td>Catch</td>
<td>CBool</td>
</tr>
<tr>
<td>CByte</td>
<td>CChar</td>
<td>CDate</td>
<td>CDec</td>
<td>CDbl</td>
<td>Char</td>
<td>CInt</td>
</tr>
<tr>
<td>Class</td>
<td>CLng</td>
<td>CObj</td>
<td>Const</td>
<td>Continue</td>
<td>CSByte</td>
<td>CShort</td>
</tr>
<tr>
<td>CSng</td>
<td>CStr</td>
<td>CType</td>
<td>CUInt</td>
<td>CULng</td>
<td>CUShort</td>
<td>Date</td>
</tr>
<tr>
<td>Decimal</td>
<td>Declare</td>
<td>Default</td>
<td>Delegate</td>
<td>Dim</td>
<td>DirectCast</td>
<td>Do</td>
</tr>
<tr>
<td>Double</td>
<td>Each</td>
<td>Else</td>
<td>ElseIf</td>
<td>End</td>
<td>End If</td>
<td>Enum</td>
</tr>
<tr>
<td>Erase</td>
<td>Error</td>
<td>Event</td>
<td>Exit</td>
<td>False</td>
<td>Finally</td>
<td>For</td>
</tr>
<tr>
<td>Friend</td>
<td>Function</td>
<td>Get</td>
<td>GetType</td>
<td><p>GetXML</p>
<p>Namespace</p>
</td>
<td>Global</td>
<td>GoTo</td>
</tr>
<tr>
<td>Handles</td>
<td>If</td>
<td>Implements</td>
<td>Imports</td>
<td>In</td>
<td>Inherits</td>
<td>Integer</td></tr>
<tr>
<td>Interface</td>
<td>Is</td>
<td>IsNot</td>
<td>Let</td>
<td>Lib</td>
<td>Like</td>
<td>Long</td>
</tr>
<tr>
<td>Loop</td>
<td>Me</td>
<td>Mod</td>
<td>Module</td>
<td>MustInherit</td>
<td>MustOverride</td>
<td>MyBase</td>
</tr>
<tr>
<td>MyClass</td>
<td>Namespace</td>
<td>Narrowing</td>
<td>New</td>
<td>Next</td>
<td>Not</td>
<td>Nothing</td>
</tr>
<tr>
<td><p>Not</p>
<p>Inheritable</p>
</td>
<td>
<p>Not</p>
<p>Overridable</p>
</td>
<td>Object</td>
<td>Of</td>
<td>On</td>
<td>Operator</td>
<td>Option</td>
</tr>
<tr>
<td>Optional</td>
<td>Or</td>
<td>OrElse</td>
<td>Overloads</td>
<td>Overridable</td>
<td>Overrides</td>
<td>ParamArray</td>
</tr>
<tr>
<td>Partial</td>
<td>Private</td>
<td>Property</td>
<td>Protected</td>
<td>Public</td>
<td>RaiseEvent</td>
<td>ReadOnly</td>
</tr>
<tr>
<td>ReDim</td>
<td>REM</td>
<td>
<p>Remove</p>
<p>Handler</p>
</td>
<td>Resume</td>
<td>Return</td>
<td>SByte</td>
<td>Select</td>
</tr>
<tr>
<td>Set</td>
<td>Shadows</td>
<td>Shared</td>
<td>Short</td>
<td>Single</td>
<td>Static</td>
<td>Step</td>
</tr>
<tr>
<td>Stop</td>
<td>String</td>
<td>Structure</td>
<td>Sub</td>
<td>SyncLock</td>
<td>Then</td>
<td>Throw</td>
</tr>
<tr>
<td>To</td>
<td>True</td>
<td>Try</td>
<td>TryCast</td>
<td>TypeOf</td>
<td>UInteger</td>
<td>While</td>
</tr>
<tr>
<td>Widening</td>
<td>With</td>
<td>WithEvents</td>
<td>WriteOnly</td>
<td>Xor</td>
<td></td>
<td></td>
</tr>
</tbody></table>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="277_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="279_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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