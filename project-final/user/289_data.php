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
	$sid=289;
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
<p>An array stores a fixed-size sequential collection of elements of the same type. An array is used to store a collection of data, but it is often more useful to think of an array as a collection of variables of the same type.</p>
<p>All arrays consist of contiguous memory locations. The lowest address corresponds to the first element and the highest address to the last element.</p>
<img src="images/arrays.jpg" alt="Arrays in VB.Net">
<h4>Creating Arrays in VB.Net</h4>
<p>To declare an array in VB.Net, you use the Dim statement. For example,</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Dim</span><span class="pln"> intData</span><span class="pun">(</span><span class="lit">30</span><span class="pun">)</span><span class="pln">	  </span><span class="str">' an array of 31 elements
Dim strData(20) As String	'</span><span class="pln"> an array of </span><span class="lit">21</span><span class="pln"> strings
</span><span class="typ">Dim</span><span class="pln"> twoDarray</span><span class="pun">(</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">20</span><span class="pun">)</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">	</span><span class="str">'a two dimensional array of integers
Dim ranges(10, 100)	 '</span><span class="pln">a two dimensional array</span></pre>

<p>You can also initialize the array elements while declaring the array. For example,</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Dim</span><span class="pln"> intData</span><span class="pun">()</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="lit">12</span><span class="pun">,</span><span class="pln"> </span><span class="lit">16</span><span class="pun">,</span><span class="pln"> </span><span class="lit">20</span><span class="pun">,</span><span class="pln"> </span><span class="lit">24</span><span class="pun">,</span><span class="pln"> </span><span class="lit">28</span><span class="pun">,</span><span class="pln"> </span><span class="lit">32</span><span class="pun">}</span><span class="pln">
</span><span class="typ">Dim</span><span class="pln"> names</span><span class="pun">()</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="str">"Karthik"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Sandhya"</span><span class="pun">,</span><span class="pln"> _
</span><span class="str">"Shivangi"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Ashwitha"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Somnath"</span><span class="pun">}</span><span class="pln">
</span><span class="typ">Dim</span><span class="pln"> miscData</span><span class="pun">()</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Object</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="str">"Hello World"</span><span class="pun">,</span><span class="pln"> </span><span class="lit">12d</span><span class="pun">,</span><span class="pln"> </span><span class="lit">16ui</span><span class="pun">,</span><span class="pln"> </span><span class="str">"A"</span><span class="pln">c</span><span class="pun">}</span></pre>
<p>The elements in an array can be stored and accessed by using the index of the array. The following program demonstrates this:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> arrayApl
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> n</span><span class="pun">(</span><span class="lit">10</span><span class="pun">)</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">  </span><span class="str">' n is an array of 11 integers '</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> i</span><span class="pun">,</span><span class="pln"> j </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      </span><span class="str">' initialize elements of array n '</span><span class="pln">         
      </span><span class="typ">For</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pln"> </span><span class="typ">To</span><span class="pln"> </span><span class="lit">10</span><span class="pln">
          n</span><span class="pun">(</span><span class="pln">i</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> i </span><span class="pun">+</span><span class="pln"> </span><span class="lit">100</span><span class="pln"> </span><span class="str">' set element at location i to i + 100 
      Next i
      '</span><span class="pln"> output each array element</span><span class="str">'s value '</span><span class="pln">
      </span><span class="typ">For</span><span class="pln"> j </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pln"> </span><span class="typ">To</span><span class="pln"> </span><span class="lit">10</span><span class="pln">
          </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Element({0}) = {1}"</span><span class="pun">,</span><span class="pln"> j</span><span class="pun">,</span><span class="pln"> n</span><span class="pun">(</span><span class="pln">j</span><span class="pun">))</span><span class="pln">
      </span><span class="typ">Next</span><span class="pln"> j
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Element</span><span class="pun">(</span><span class="lit">0</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">100</span><span class="pln">
</span><span class="typ">Element</span><span class="pun">(</span><span class="lit">1</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">101</span><span class="pln">
</span><span class="typ">Element</span><span class="pun">(</span><span class="lit">2</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">102</span><span class="pln">
</span><span class="typ">Element</span><span class="pun">(</span><span class="lit">3</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">103</span><span class="pln">
</span><span class="typ">Element</span><span class="pun">(</span><span class="lit">4</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">104</span><span class="pln">
</span><span class="typ">Element</span><span class="pun">(</span><span class="lit">5</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">105</span><span class="pln">
</span><span class="typ">Element</span><span class="pun">(</span><span class="lit">6</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">106</span><span class="pln">
</span><span class="typ">Element</span><span class="pun">(</span><span class="lit">7</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">107</span><span class="pln">
</span><span class="typ">Element</span><span class="pun">(</span><span class="lit">8</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">108</span><span class="pln">
</span><span class="typ">Element</span><span class="pun">(</span><span class="lit">9</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">109</span><span class="pln">
</span><span class="typ">Element</span><span class="pun">(</span><span class="lit">10</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">110</span></pre>
<h4>Dynamic Arrays</h4>
<p>Dynamic arrays are arrays that can be dimensioned and re-dimensioned as par the need of the program. You can declare a dynamic array using the <b>ReDim</b> statement. </p>
<p>Syntax for ReDim statement:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">ReDim</span><span class="pln"> </span><span class="pun">[</span><span class="typ">Preserve</span><span class="pun">]</span><span class="pln"> arrayname</span><span class="pun">(</span><span class="pln">subscripts</span><span class="pun">)</span></pre>
<p>Where,</p>
<ul class="list">
<li><p>The <b>Preserve</b> keyword helps to preserve the data in an existing array, when you resize it.</p></li>
<li><p><b>arrayname</b> is the name of the array to re-dimension.</p></li>
<li><p><b>subscripts</b> specifies the new dimension. </p></li>
</ul>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> arrayApl
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> marks</span><span class="pun">()</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      </span><span class="typ">ReDim</span><span class="pln"> marks</span><span class="pun">(</span><span class="lit">2</span><span class="pun">)</span><span class="pln">
      marks</span><span class="pun">(</span><span class="lit">0</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">85</span><span class="pln">
      marks</span><span class="pun">(</span><span class="lit">1</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">75</span><span class="pln">
      marks</span><span class="pun">(</span><span class="lit">2</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">90</span><span class="pln">
      </span><span class="typ">ReDim</span><span class="pln"> </span><span class="typ">Preserve</span><span class="pln"> marks</span><span class="pun">(</span><span class="lit">10</span><span class="pun">)</span><span class="pln">
      marks</span><span class="pun">(</span><span class="lit">3</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">80</span><span class="pln">
      marks</span><span class="pun">(</span><span class="lit">4</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">76</span><span class="pln">
      marks</span><span class="pun">(</span><span class="lit">5</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">92</span><span class="pln">
      marks</span><span class="pun">(</span><span class="lit">6</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">99</span><span class="pln">
      marks</span><span class="pun">(</span><span class="lit">7</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">79</span><span class="pln">
      marks</span><span class="pun">(</span><span class="lit">8</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">75</span><span class="pln">
      </span><span class="typ">For</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pln"> </span><span class="typ">To</span><span class="pln"> </span><span class="lit">10</span><span class="pln">
          </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="pln">i </span><span class="pun">&amp;</span><span class="pln"> vbTab </span><span class="pun">&amp;</span><span class="pln"> marks</span><span class="pun">(</span><span class="pln">i</span><span class="pun">))</span><span class="pln">
      </span><span class="typ">Next</span><span class="pln"> i
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="lit">0</span><span class="pln">	</span><span class="lit">85</span><span class="pln">
</span><span class="lit">1</span><span class="pln">	</span><span class="lit">75</span><span class="pln">
</span><span class="lit">2</span><span class="pln">	</span><span class="lit">90</span><span class="pln">
</span><span class="lit">3</span><span class="pln">	</span><span class="lit">80</span><span class="pln">
</span><span class="lit">4</span><span class="pln">	</span><span class="lit">76</span><span class="pln">
</span><span class="lit">5</span><span class="pln">	</span><span class="lit">92</span><span class="pln">
</span><span class="lit">6</span><span class="pln">	</span><span class="lit">99</span><span class="pln">
</span><span class="lit">7</span><span class="pln">	</span><span class="lit">79</span><span class="pln">
</span><span class="lit">8</span><span class="pln">	</span><span class="lit">75</span><span class="pln">
</span><span class="lit">9</span><span class="pln">	</span><span class="lit">0</span><span class="pln">
</span><span class="lit">10</span><span class="pln">	</span><span class="lit">0</span></pre>
<h4>Multi-Dimensional Arrays</h4>
<p>VB.Net allows multidimensional arrays. Multidimensional arrays are also called rectangular arrays. </p>
<p>You can declare a 2-dimensional array of strings as:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Dim</span><span class="pln"> twoDStringArray</span><span class="pun">(</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">20</span><span class="pun">)</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span></pre>
<p>or, a 3-dimensional array of Integer variables:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Dim</span><span class="pln"> threeDIntArray</span><span class="pun">(</span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">10</span><span class="pun">,</span><span class="pln"> </span><span class="lit">10</span><span class="pun">)</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span></pre>
<p>The following program demonstrates creating and using a 2-dimensional array:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> arrayApl
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="str">' an array with 5 rows and 2 columns
      Dim a(,) As Integer = {{0, 0}, {1, 2}, {2, 4}, {3, 6}, {4, 8}}
      Dim i, j As Integer
      '</span><span class="pln"> output each array element</span><span class="str">'s value '</span><span class="pln">
      </span><span class="typ">For</span><span class="pln"> i </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pln"> </span><span class="typ">To</span><span class="pln"> </span><span class="lit">4</span><span class="pln">
          </span><span class="typ">For</span><span class="pln"> j </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pln"> </span><span class="typ">To</span><span class="pln"> </span><span class="lit">1</span><span class="pln">
              </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"a[{0},{1}] = {2}"</span><span class="pun">,</span><span class="pln"> i</span><span class="pun">,</span><span class="pln"> j</span><span class="pun">,</span><span class="pln"> a</span><span class="pun">(</span><span class="pln">i</span><span class="pun">,</span><span class="pln"> j</span><span class="pun">))</span><span class="pln">
          </span><span class="typ">Next</span><span class="pln"> j
      </span><span class="typ">Next</span><span class="pln"> i
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">a</span><span class="pun">[</span><span class="lit">0</span><span class="pun">,</span><span class="lit">0</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">0</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">0</span><span class="pun">,</span><span class="lit">1</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">0</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">1</span><span class="pun">,</span><span class="lit">0</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">1</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">1</span><span class="pun">,</span><span class="lit">1</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">2</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">2</span><span class="pun">,</span><span class="lit">0</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">2</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">2</span><span class="pun">,</span><span class="lit">1</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">4</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">3</span><span class="pun">,</span><span class="lit">0</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">3</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">3</span><span class="pun">,</span><span class="lit">1</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">6</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">4</span><span class="pun">,</span><span class="lit">0</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">4</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">4</span><span class="pun">,</span><span class="lit">1</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">8</span></pre>
<h4>Jagged Array</h4>
<p>A Jagged array is an array of arrays. The follwoing code shows declaring a jagged array named <i>scores</i> of Integers:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Dim</span><span class="pln"> scores </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">()()</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">(</span><span class="lit">5</span><span class="pun">)(){}</span></pre>
<p>The following example illustrates using a jagged array:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> arrayApl
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="str">'a jagged array of 5 array of integers
      Dim a As Integer()() = New Integer(4)() {}
      a(0) = New Integer() {0, 0}
      a(1) = New Integer() {1, 2}
      a(2) = New Integer() {2, 4}
      a(3) = New Integer() {3, 6}
      a(4) = New Integer() {4, 8}
      Dim i, j As Integer
      '</span><span class="pln"> output each array element</span><span class="str">'s value 
      For i = 0 To 4
          For j = 0 To 1
              Console.WriteLine("a[{0},{1}] = {2}", i, j, a(i)(j))
          Next j
      Next i
      Console.ReadKey()
   End Sub
End Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">a</span><span class="pun">[</span><span class="lit">0</span><span class="pun">][</span><span class="lit">0</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">0</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">0</span><span class="pun">][</span><span class="lit">1</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">0</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">1</span><span class="pun">][</span><span class="lit">0</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">1</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">1</span><span class="pun">][</span><span class="lit">1</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">2</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">2</span><span class="pun">][</span><span class="lit">0</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">2</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">2</span><span class="pun">][</span><span class="lit">1</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">4</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">3</span><span class="pun">][</span><span class="lit">0</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">3</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">3</span><span class="pun">][</span><span class="lit">1</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">6</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">4</span><span class="pun">][</span><span class="lit">0</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">4</span><span class="pln">
a</span><span class="pun">[</span><span class="lit">4</span><span class="pun">][</span><span class="lit">1</span><span class="pun">]:</span><span class="pln"> </span><span class="lit">8</span></pre>
<h4>The Array Class</h4>
<p>The Array class is the base class for all the arrays in VB.Net. It is defined in the System namespace. The Array class provides various properties and methods to work with arrays. </p>
<h5>Properties of the Array Class</h5>
<p>The following table provides some of the most commonly used <b>properties</b> of the <b>Array</b> class:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N</th>
<th>Property Name &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td>
<p><b>IsFixedSize</b></p>
<p>Gets a value indicating whether the Array has a fixed size.</p>
</td>
</tr>
<tr>
<td>2</td>
<td>
<p><b>IsReadOnly</b></p>
<p>Gets a value indicating whether the Array is read-only.</p>
</td>
</tr>
<tr>
<td>3</td>
<td>
<p><b>Length</b></p>
<p>Gets a 32-bit integer that represents the total number of elements in all the dimensions of the Array.</p>
</td>
</tr>
<tr>
<td>4</td>
<td>
<p><b>LongLength</b></p>
<p>Gets a 64-bit integer that represents the total number of elements in all the dimensions of the Array.</p>
</td>
</tr>
<tr>
<td>5</td>
<td>
<p><b>Rank</b></p>
<p>Gets the rank (number of dimensions) of the Array.</p>
</td>
</tr>
</tbody></table>
<h5>Methods of the Array Class</h5>
<p>The following table provides some of the most commonly used <b>methods</b> of the <b>Array</b> class:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N</th>
<th>Method Name &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td>
<p><b>Public Shared Sub Clear (array As Array, index As Integer, length As Integer)</b></p>
<p>Sets a range of elements in the Array to zero, to false, or to null, depending on the element type.</p>
</td>
</tr>
<tr>
<td>2</td>
<td>
<p><b>Public Shared Sub Copy (sourceArray As Array, destinationArray As Array, length As Integer)</b></p>
<p>Copies a range of elements from an Array starting at the first element and pastes them into another Array starting at the first element. The length is specified as a 32-bit integer.</p>
</td>
</tr>
<tr>
<td>3</td>
<td>
<p><b>Public Sub CopyTo (array As Array, index As Integer)</b></p>
<p>Copies all the elements of the current one-dimensional Array to the specified one-dimensional Array starting at the specified destination Array index. The index is specified as a 32-bit integer.</p>
</td>
</tr>
<tr>
<td>4</td>
<td>
<p><b>Public Function GetLength (dimension As Integer) As Integer</b></p>
<p>Gets a 32-bit integer that represents the number of elements in the specified dimension of the Array.</p>
</td>
</tr>
<tr>
<td>5</td>
<td>
<p><b>Public Function GetLongLength (dimension As Integer) As Long</b></p>
<p>Gets a 64-bit integer that represents the number of elements in the specified dimension of the Array.</p>
</td>
</tr>
<tr>
<td>6</td>
<td>
<p><b>Public Function GetLowerBound (dimension As Integer) As Integer</b></p>
<p>Gets the lower bound of the specified dimension in the Array.</p>
</td>
</tr>
<tr>
<td>7</td>
<td>
<p><b>Public Function GetType As Type</b></p>
<p>Gets the Type of the current instance (Inherited from Object).</p>
</td>
</tr>
<tr>
<td>8</td>
<td>
<p><b>Public Function GetUpperBound (dimension As Integer) As Integer</b></p>
<p>Gets the upper bound of the specified dimension in the Array.</p>
</td>
</tr>
<tr>
<td>9</td>
<td>
<p><b>Public Function GetValue (index As Integer) As Object</b></p>
<p>Gets the value at the specified position in the one-dimensional Array. The index is specified as a 32-bit integer.</p>
</td>
</tr>
<tr>
<td>10</td>
<td>
<p><b>Public Shared Function IndexOf (array As Array,value As Object) As Integer</b></p>
<p>Searches for the specified object and returns the index of the first occurrence within the entire one-dimensional Array.</p>
</td>
</tr>
<tr>
<td>11</td>
<td>
<p><b>Public Shared Sub Reverse (array As Array)</b></p>
<p>Reverses the sequence of the elements in the entire one-dimensional Array.</p>
</td>
</tr>
<tr>
<td>12</td>
<td>
<p><b>Public Sub SetValue (value As Object, index As Integer)</b></p>
<p>Sets a value to the element at the specified position in the one-dimensional Array. The index is specified as a 32-bit integer.</p>
</td>
</tr>
<tr>
<td>13</td>
<td>
<p><b>Public Shared Sub Sort (array As Array)</b></p>
<p>Sorts the elements in an entire one-dimensional Array using the IComparable implementation of each element of the Array.</p>
</td>
</tr>
<tr>
<td>14</td>
<td>
<p><b>Public Overridable Function ToString As String</b>
</p><p>Returns a string that represents the current object (Inherited from Object).</p>
</td>
</tr>
</tbody></table>
<p>For complete list of Array class properties and methods, please consult Microsoft documentation.</p>
<h5>Example</h5>
<p>The following program demonstrates use of some of the methods of the Array class:</p>
<p>
</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> arrayApl
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> list </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">()</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="lit">34</span><span class="pun">,</span><span class="pln"> </span><span class="lit">72</span><span class="pun">,</span><span class="pln"> </span><span class="lit">13</span><span class="pun">,</span><span class="pln"> </span><span class="lit">44</span><span class="pun">,</span><span class="pln"> </span><span class="lit">25</span><span class="pun">,</span><span class="pln"> </span><span class="lit">30</span><span class="pun">,</span><span class="pln"> </span><span class="lit">10</span><span class="pun">}</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> temp </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">()</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> list
      </span><span class="typ">Dim</span><span class="pln"> i </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"Original Array: "</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">For</span><span class="pln"> </span><span class="typ">Each</span><span class="pln"> i </span><span class="typ">In</span><span class="pln"> list
          </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"{0} "</span><span class="pun">,</span><span class="pln"> i</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Next</span><span class="pln"> i
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">()</span><span class="pln">
      </span><span class="str">' reverse the array
      Array.Reverse(temp)
      Console.Write("Reversed Array: ")
      For Each i In temp
          Console.Write("{0} ", i)
      Next i
      Console.WriteLine()
      '</span><span class="pln">sort the array
      </span><span class="typ">Array</span><span class="pun">.</span><span class="typ">Sort</span><span class="pun">(</span><span class="pln">list</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"Sorted Array: "</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">For</span><span class="pln"> </span><span class="typ">Each</span><span class="pln"> i </span><span class="typ">In</span><span class="pln"> list
          </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">Write</span><span class="pun">(</span><span class="str">"{0} "</span><span class="pun">,</span><span class="pln"> i</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Next</span><span class="pln"> i
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Original</span><span class="pln"> </span><span class="typ">Array</span><span class="pun">:</span><span class="pln"> </span><span class="lit">34</span><span class="pln"> </span><span class="lit">72</span><span class="pln"> </span><span class="lit">13</span><span class="pln"> </span><span class="lit">44</span><span class="pln"> </span><span class="lit">25</span><span class="pln"> </span><span class="lit">30</span><span class="pln"> </span><span class="lit">10</span><span class="pln">
</span><span class="typ">Reversed</span><span class="pln"> </span><span class="typ">Array</span><span class="pun">:</span><span class="pln"> </span><span class="lit">10</span><span class="pln"> </span><span class="lit">30</span><span class="pln"> </span><span class="lit">25</span><span class="pln"> </span><span class="lit">44</span><span class="pln"> </span><span class="lit">13</span><span class="pln"> </span><span class="lit">72</span><span class="pln"> </span><span class="lit">34</span><span class="pln">
</span><span class="typ">Sorted</span><span class="pln"> </span><span class="typ">Array</span><span class="pun">:</span><span class="pln"> </span><span class="lit">10</span><span class="pln"> </span><span class="lit">13</span><span class="pln"> </span><span class="lit">25</span><span class="pln"> </span><span class="lit">30</span><span class="pln"> </span><span class="lit">34</span><span class="pln"> </span><span class="lit">44</span><span class="pln"> </span><span class="lit">72</span></pre>





<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="288_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="290_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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