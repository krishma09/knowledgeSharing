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
	$sid=293;
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


<p>When you define a class, you define a blueprint for a data type. This doesn't actually define any data, but it does define what the class name means, that is, what an object of the class will consist of and what operations can be performed on such an object. </p>

<p>Objects are instances of a class. The methods and variables that constitute a class are called members of the class.</p>
<h4>Class Definition</h4>
<p>A class definition starts with the keyword <b>Class</b> followed by the class name; and the class body, ended by the End Class statement. Following is the general form of a class definition:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pun">[</span><span class="pln"> </span><span class="str">&lt;attributelist&gt;</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> accessmodifier </span><span class="pun">]</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> </span><span class="typ">Shadows</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> </span><span class="typ">MustInherit</span><span class="pln"> </span><span class="pun">|</span><span class="pln"> </span><span class="typ">NotInheritable</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> </span><span class="typ">Partial</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> _
</span><span class="typ">Class</span><span class="pln"> name </span><span class="pun">[</span><span class="pln"> </span><span class="pun">(</span><span class="pln"> </span><span class="typ">Of</span><span class="pln"> typelist </span><span class="pun">)</span><span class="pln"> </span><span class="pun">]</span><span class="pln">
    </span><span class="pun">[</span><span class="pln"> </span><span class="typ">Inherits</span><span class="pln"> classname </span><span class="pun">]</span><span class="pln">
    </span><span class="pun">[</span><span class="pln"> </span><span class="typ">Implements</span><span class="pln"> interfacenames </span><span class="pun">]</span><span class="pln">
    </span><span class="pun">[</span><span class="pln"> statements </span><span class="pun">]</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Class</span></pre>
<p>Where,</p>
<ul class="list">
<li><p><b><i>attributelist</i></b> is a list of attributes that apply to the class. Optional. </p></li>
<li><p><b><i>accessmodifier</i></b> defines the access levels of the class, it has values as - Public, Protected, Friend, Protected Friend and Private. Optional. </p></li>
<li><p><b><i>Shadows</i></b> indicate that the variable re-declares and hides an identically named element, or set of overloaded elements, in a base class. Optional. </p></li>
<li><p><b><i>MustInherit</i></b> specifies that the class can be used only as a base class and that you cannot create an object directly from it, i.e., an abstract class. Optional.</p></li>
<li><p><b><i>NotInheritable</i></b> specifies that the class cannot be used as a base class.</p></li>
<li><p><b><i>Partial</i></b> indicates a partial definition of the class.</p></li>
<li><p><b><i>Inherits</i></b> specifies the base class it is inheriting from.</p></li>
<li><p><b><i>Implements</i></b> specifies the interfaces the class is inheriting from.</p></li>
</ul>
<p>The following example demonstrates a Box class, with three data members, length, breadth and height:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> mybox
   </span><span class="typ">Class</span><span class="pln"> </span><span class="typ">Box</span><span class="pln">
      </span><span class="typ">Public</span><span class="pln"> length </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">   </span><span class="str">' Length of a box
      Public breadth As Double   '</span><span class="pln"> </span><span class="typ">Breadth</span><span class="pln"> of a box
      </span><span class="typ">Public</span><span class="pln"> height </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">    </span><span class="str">' Height of a box
   End Class
   Sub Main()
      Dim Box1 As Box = New Box()        '</span><span class="pln"> </span><span class="typ">Declare</span><span class="pln"> </span><span class="typ">Box1</span><span class="pln"> of type </span><span class="typ">Box</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> </span><span class="typ">Box2</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Box</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">Box</span><span class="pun">()</span><span class="pln">        </span><span class="str">' Declare Box2 of type Box
      Dim volume As Double = 0.0     '</span><span class="pln"> </span><span class="typ">Store</span><span class="pln"> the volume of a box here
      </span><span class="str">' box 1 specification
      Box1.height = 5.0
      Box1.length = 6.0
      Box1.breadth = 7.0
       '</span><span class="pln"> box </span><span class="lit">2</span><span class="pln"> specification
      </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">height </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10.0</span><span class="pln">
      </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">length </span><span class="pun">=</span><span class="pln"> </span><span class="lit">12.0</span><span class="pln">	
      </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">breadth </span><span class="pun">=</span><span class="pln"> </span><span class="lit">13.0</span><span class="pln">
      </span><span class="str">'volume of box 1
      volume = Box1.height * Box1.length * Box1.breadth
      Console.WriteLine("Volume of Box1 : {0}", volume)
      '</span><span class="pln">volume of box </span><span class="lit">2</span><span class="pln">
      volume </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">height </span><span class="pun">*</span><span class="pln"> </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">length </span><span class="pun">*</span><span class="pln"> </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">breadth
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Volume of Box2 : {0}"</span><span class="pun">,</span><span class="pln"> volume</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Volume</span><span class="pln"> of </span><span class="typ">Box1</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="lit">210</span><span class="pln">
</span><span class="typ">Volume</span><span class="pln"> of </span><span class="typ">Box2</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="lit">1560</span></pre>
<h4>Member Functions and Encapsulation</h4>
<p>A member function of a class is a function that has its definition or its prototype within the class definition like any other variable. It operates on any object of the class of which it is a member and has access to all the members of a class for that object. </p>
<p>Member variables are attributes of an object (from design perspective) and they are kept private to implement encapsulation. These variables can only be accessed using the public member functions. </p>
<p>Let us put above concepts to set and get the value of different class members in a class:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> mybox
   </span><span class="typ">Class</span><span class="pln"> </span><span class="typ">Box</span><span class="pln">
      </span><span class="typ">Public</span><span class="pln"> length </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">   </span><span class="str">' Length of a box
      Public breadth As Double   '</span><span class="pln"> </span><span class="typ">Breadth</span><span class="pln"> of a box
      </span><span class="typ">Public</span><span class="pln"> height </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">    </span><span class="str">' Height of a box
      Public Sub setLength(ByVal len As Double)
          length = len
      End Sub
      Public Sub setBreadth(ByVal bre As Double)
          breadth = bre
      End Sub
      Public Sub setHeight(ByVal hei As Double)
          height = hei
      End Sub
      Public Function getVolume() As Double
          Return length * breadth * height
      End Function
   End Class
   Sub Main()
      Dim Box1 As Box = New Box()        '</span><span class="pln"> </span><span class="typ">Declare</span><span class="pln"> </span><span class="typ">Box1</span><span class="pln"> of type </span><span class="typ">Box</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> </span><span class="typ">Box2</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Box</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">Box</span><span class="pun">()</span><span class="pln">        </span><span class="str">' Declare Box2 of type Box
      Dim volume As Double = 0.0     '</span><span class="pln"> </span><span class="typ">Store</span><span class="pln"> the volume of a box here

     </span><span class="str">' box 1 specification
      Box1.setLength(6.0)
      Box1.setBreadth(7.0)
      Box1.setHeight(5.0)
      
      '</span><span class="pln">box </span><span class="lit">2</span><span class="pln"> specification
      </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">setLength</span><span class="pun">(</span><span class="lit">12.0</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">setBreadth</span><span class="pun">(</span><span class="lit">13.0</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">setHeight</span><span class="pun">(</span><span class="lit">10.0</span><span class="pun">)</span><span class="pln">
      
      </span><span class="str">' volume of box 1
      volume = Box1.getVolume()
      Console.WriteLine("Volume of Box1 : {0}", volume)

      '</span><span class="pln">volume of box </span><span class="lit">2</span><span class="pln">
      volume </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Box2</span><span class="pun">.</span><span class="pln">getVolume</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Volume of Box2 : {0}"</span><span class="pun">,</span><span class="pln"> volume</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Volume</span><span class="pln"> of </span><span class="typ">Box1</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="lit">210</span><span class="pln">
</span><span class="typ">Volume</span><span class="pln"> of </span><span class="typ">Box2</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="lit">1560</span></pre>
<h4>Constructors and Destructors</h4>
<p>A class <b>constructor</b> is a special member Sub of a class that is executed whenever we create new objects of that class. A constructor has the name <b>New</b> and it does not have any return type.</p>
<p>Following program explains the concept of constructor:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Class</span><span class="pln"> </span><span class="typ">Line</span><span class="pln">
   </span><span class="typ">Private</span><span class="pln"> length </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">    </span><span class="str">' Length of a line
   Public Sub New()   '</span><span class="pln">constructor
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Object is being created"</span><span class="pun">)</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
   </span><span class="typ">Public</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> setLength</span><span class="pun">(</span><span class="typ">ByVal</span><span class="pln"> len </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pun">)</span><span class="pln">
      length </span><span class="pun">=</span><span class="pln"> len
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
     
   </span><span class="typ">Public</span><span class="pln"> </span><span class="typ">Function</span><span class="pln"> getLength</span><span class="pun">()</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">
      </span><span class="typ">Return</span><span class="pln"> length
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Function</span><span class="pln">
   </span><span class="typ">Shared</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> line </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Line</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">Line</span><span class="pun">()</span><span class="pln">
      </span><span class="str">'set line length
      line.setLength(6.0)
      Console.WriteLine("Length of line : {0}", line.getLength())
      Console.ReadKey()
   End Sub
End Class</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Object</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> being created
</span><span class="typ">Length</span><span class="pln"> of line </span><span class="pun">:</span><span class="pln"> </span><span class="lit">6</span></pre>
<p>A default constructor does not have any parameter, but if you need, a constructor can have parameters. Such constructors are called <b>parameterized constructors</b>. This technique helps you to assign initial value to an object at the time of its creation as shown in the following example:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Class</span><span class="pln"> </span><span class="typ">Line</span><span class="pln">
   </span><span class="typ">Private</span><span class="pln"> length </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">    </span><span class="str">' Length of a line
   Public Sub New(ByVal len As Double)   '</span><span class="pln">parameterised constructor
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Object is being created, length = {0}"</span><span class="pun">,</span><span class="pln"> len</span><span class="pun">)</span><span class="pln">
      length </span><span class="pun">=</span><span class="pln"> len
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
   </span><span class="typ">Public</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> setLength</span><span class="pun">(</span><span class="typ">ByVal</span><span class="pln"> len </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pun">)</span><span class="pln">
      length </span><span class="pun">=</span><span class="pln"> len
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
       
   </span><span class="typ">Public</span><span class="pln"> </span><span class="typ">Function</span><span class="pln"> getLength</span><span class="pun">()</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">
      </span><span class="typ">Return</span><span class="pln"> length
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Function</span><span class="pln">
   </span><span class="typ">Shared</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> line </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Line</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">Line</span><span class="pun">(</span><span class="lit">10.0</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Length of line set by constructor : {0}"</span><span class="pun">,</span><span class="pln"> line</span><span class="pun">.</span><span class="pln">getLength</span><span class="pun">())</span><span class="pln">
      </span><span class="str">'set line length
      line.setLength(6.0)
      Console.WriteLine("Length of line set by setLength : {0}", line.getLength())
      Console.ReadKey()
   End Sub
End Class</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Object</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> being created</span><span class="pun">,</span><span class="pln"> length </span><span class="pun">=</span><span class="pln"> </span><span class="lit">10</span><span class="pln">
</span><span class="typ">Length</span><span class="pln"> of line </span><span class="kwd">set</span><span class="pln"> </span><span class="kwd">by</span><span class="pln"> constructor </span><span class="pun">:</span><span class="pln"> </span><span class="lit">10</span><span class="pln">
</span><span class="typ">Length</span><span class="pln"> of line </span><span class="kwd">set</span><span class="pln"> </span><span class="kwd">by</span><span class="pln"> setLength </span><span class="pun">:</span><span class="pln"> </span><span class="lit">6</span></pre>
<p>A <b>destructor</b> is a special member Sub of a class that is executed whenever an object of its class goes out of scope.</p>
<p>A <b>destructor</b> has the name <b>Finalize</b> and it can neither return a value nor can it take any parameters. Destructor can be very useful for releasing resources before coming out of the program like closing files, releasing memories, etc.</p>
<p>Destructors cannot be inherited or overloaded. </p>
<p>Following example explains the concept of destructor:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Class</span><span class="pln"> </span><span class="typ">Line</span><span class="pln">
   </span><span class="typ">Private</span><span class="pln"> length </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Double</span><span class="pln">    </span><span class="str">' Length of a line
   Public Sub New()   '</span><span class="pln">parameterised constructor
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Object is being created"</span><span class="pun">)</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
   </span><span class="typ">Protected</span><span class="pln"> </span><span class="typ">Overrides</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Finalize</span><span class="pun">()</span><span class="pln">  </span><span class="str">' destructor
      Console.WriteLine("Object is being deleted")
   End Sub
   Public Sub setLength(ByVal len As Double)
      length = len
   End Sub
   Public Function getLength() As Double
      Return length
   End Function
   Shared Sub Main()
      Dim line As Line = New Line()
      '</span><span class="kwd">set</span><span class="pln"> line length
      line</span><span class="pun">.</span><span class="pln">setLength</span><span class="pun">(</span><span class="lit">6.0</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Length of line : {0}"</span><span class="pun">,</span><span class="pln"> line</span><span class="pun">.</span><span class="pln">getLength</span><span class="pun">())</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Class</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Object</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> being created
</span><span class="typ">Length</span><span class="pln"> of line </span><span class="pun">:</span><span class="pln"> </span><span class="lit">6</span><span class="pln">
</span><span class="typ">Object</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> being deleted</span></pre>
<h4>Shared Members of a VB.Net Class</h4>
<p>We can define class members as static using the Shared keyword. When we declare a member of a class as Shared, it means no matter how many objects of the class are created, there is only one copy of the member.</p>
<p>The keyword <b>Shared</b> implies that only one instance of the member exists for a class. Shared variables are used for defining constants because their values can be retrieved by invoking the class without creating an instance of it. </p>
<p>Shared variables can be initialized outside the member function or class definition. You can also initialize Shared variables inside the class definition. </p>
<p>You can also declare a member function as Shared. Such functions can access only Shared variables. The Shared functions exist even before the object is created. </p>
<p>The following example demonstrates the use of shared members:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Class</span><span class="pln"> </span><span class="typ">StaticVar</span><span class="pln">
   </span><span class="typ">Public</span><span class="pln"> </span><span class="typ">Shared</span><span class="pln"> num </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
   </span><span class="typ">Public</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> count</span><span class="pun">()</span><span class="pln">
      num </span><span class="pun">=</span><span class="pln"> num </span><span class="pun">+</span><span class="pln"> </span><span class="lit">1</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
   </span><span class="typ">Public</span><span class="pln"> </span><span class="typ">Shared</span><span class="pln"> </span><span class="typ">Function</span><span class="pln"> getNum</span><span class="pun">()</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      </span><span class="typ">Return</span><span class="pln"> num
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Function</span><span class="pln">
   </span><span class="typ">Shared</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> s </span><span class="typ">As</span><span class="pln"> </span><span class="typ">StaticVar</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">StaticVar</span><span class="pun">()</span><span class="pln">
      s</span><span class="pun">.</span><span class="pln">count</span><span class="pun">()</span><span class="pln">
      s</span><span class="pun">.</span><span class="pln">count</span><span class="pun">()</span><span class="pln">
      s</span><span class="pun">.</span><span class="pln">count</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Value of variable num: {0}"</span><span class="pun">,</span><span class="pln"> </span><span class="typ">StaticVar</span><span class="pun">.</span><span class="pln">getNum</span><span class="pun">())</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Class</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Value</span><span class="pln"> of variable num</span><span class="pun">:</span><span class="pln"> </span><span class="lit">3</span></pre>
<h4>Inheritance</h4>
<p>One of the most important concepts in object-oriented programming is that of inheritance. Inheritance allows us to define a class in terms of another class which makes it easier to create and maintain an application. This also provides an opportunity to reuse the code functionality and fast implementation time.</p>
<p>When creating a class, instead of writing completely new data members and member functions, the programmer can designate that the new class should inherit the members of an existing class. This existing class is called the <b>base</b> class, and the new class is referred to as the <b>derived</b> class.</p>
<h4>Base &amp; Derived Classes:</h4>
<p>A class can be derived from more than one class or interface, which means that it can inherit data and functions from multiple base classes or interfaces. </p>
<p>The syntax used in VB.Net for creating derived classes is as follows:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;access-specifier&gt;</span><span class="pln"> Class </span><span class="tag">&lt;base_class&gt;</span><span class="pln">
...
End Class
Class </span><span class="tag">&lt;derived_class&gt;</span><span class="pln">: Inherits </span><span class="tag">&lt;base_class&gt;</span><span class="pln">
...
End Class</span></pre>
<p>Consider a base class Shape and its derived class Rectangle:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="str">' Base class
Class Shape
   Protected width As Integer
   Protected height As Integer
   Public Sub setWidth(ByVal w As Integer)
      width = w
   End Sub
   Public Sub setHeight(ByVal h As Integer)
      height = h
   End Sub
End Class
'</span><span class="pln"> </span><span class="typ">Derived</span><span class="pln"> </span><span class="kwd">class</span><span class="pln">
</span><span class="typ">Class</span><span class="pln"> </span><span class="typ">Rectangle</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">Inherits</span><span class="pln"> </span><span class="typ">Shape</span><span class="pln">
   </span><span class="typ">Public</span><span class="pln"> </span><span class="typ">Function</span><span class="pln"> getArea</span><span class="pun">()</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      </span><span class="typ">Return</span><span class="pln"> </span><span class="pun">(</span><span class="pln">width </span><span class="pun">*</span><span class="pln"> height</span><span class="pun">)</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Function</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Class</span><span class="pln">
</span><span class="typ">Class</span><span class="pln"> </span><span class="typ">RectangleTester</span><span class="pln">
   </span><span class="typ">Shared</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> rect </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Rectangle</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">Rectangle</span><span class="pun">()</span><span class="pln">
      rect</span><span class="pun">.</span><span class="pln">setWidth</span><span class="pun">(</span><span class="lit">5</span><span class="pun">)</span><span class="pln">
      rect</span><span class="pun">.</span><span class="pln">setHeight</span><span class="pun">(</span><span class="lit">7</span><span class="pun">)</span><span class="pln">
      </span><span class="str">' Print the area of the object.
      Console.WriteLine("Total area: {0}", rect.getArea())
      Console.ReadKey()
   End Sub	
End Class</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Total</span><span class="pln"> area</span><span class="pun">:</span><span class="pln"> </span><span class="lit">35</span></pre>
<h4>Base Class Initialization</h4>
<p>The derived class inherits the base class member variables and member methods. Therefore, the super class object should be created before the subclass is created. The super class or the base class is implicitly known as <b>MyBase</b> in VB.Net</p>
<p>The following program demonstrates this:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="str">' Base class
Class Rectangle
   Protected width As Double
   Protected length As Double
   Public Sub New(ByVal l As Double, ByVal w As Double)
      length = l
      width = w
   End Sub
   Public Function GetArea() As Double
      Return (width * length)
   End Function
   Public Overridable Sub Display()
      Console.WriteLine("Length: {0}", length)
      Console.WriteLine("Width: {0}", width)
      Console.WriteLine("Area: {0}", GetArea())
   End Sub
   '</span><span class="kwd">end</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Rectangle</span><span class="pln">  
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Class</span><span class="pln">
</span><span class="str">'Derived class
Class Tabletop : Inherits Rectangle
   Private cost As Double
   Public Sub New(ByVal l As Double, ByVal w As Double)
      MyBase.New(l, w)
   End Sub
   Public Function GetCost() As Double
      Dim cost As Double
      cost = GetArea() * 70
      Return cost
   End Function
   Public Overrides Sub Display()
      MyBase.Display()
      Console.WriteLine("Cost: {0}", GetCost())
   End Sub
    '</span><span class="kwd">end</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Tabletop</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Class</span><span class="pln">
</span><span class="typ">Class</span><span class="pln"> </span><span class="typ">RectangleTester</span><span class="pln">
   </span><span class="typ">Shared</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> t </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Tabletop</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">Tabletop</span><span class="pun">(</span><span class="lit">4.5</span><span class="pun">,</span><span class="pln"> </span><span class="lit">7.5</span><span class="pun">)</span><span class="pln">
      t</span><span class="pun">.</span><span class="typ">Display</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Class</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Length</span><span class="pun">:</span><span class="pln"> </span><span class="lit">4.5</span><span class="pln">
</span><span class="typ">Width</span><span class="pun">:</span><span class="pln"> </span><span class="lit">7.5</span><span class="pln">
</span><span class="typ">Area</span><span class="pun">:</span><span class="pln"> </span><span class="lit">33.75</span><span class="pln">
</span><span class="typ">Cost</span><span class="pun">:</span><span class="pln"> </span><span class="lit">2362.5</span></pre>
<p>VB.Net supports multiple inheritance.</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="292_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="294_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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