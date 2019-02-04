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
	$sid=294;
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

<p>An exception is a problem that arises during the execution of a program. An exception is a response to an exceptional circumstance that arises while a program is running, such as an attempt to divide by zero.</p>
<p>Exceptions provide a way to transfer control from one part of a program to another. VB.Net exception handling is built upon four keywords: <b>Try</b>, <b>Catch</b>, <b>Finally</b> and <b>Throw</b>.</p>
<ul class="list">
<li><p><b>Try</b>: A Try block identifies a block of code for which particular exceptions will be activated. It's followed by one or more Catch blocks.</p></li>
<li><p><b>Catch</b>: A program catches an exception with an exception handler at the place in a program where you want to handle the problem. The Catch keyword indicates the catching of an exception.</p></li>
<li><p><b>Finally</b>: The Finally block is used to execute a given set of statements, whether an exception is thrown or not thrown. For example, if you open a file, it must be closed whether an exception is raised or not. </p></li>
<li><p><b>Throw</b>: A program throws an exception when a problem shows up. This is done using a Throw keyword.</p></li>
</ul>
<h4>Syntax</h4>
<p>Assuming a block will raise an exception, a method catches an exception using a combination of the Try and Catch keywords. A Try/Catch block is placed around the code that might generate an exception. Code within a Try/Catch block is referred to as protected code, and the syntax for using Try/Catch looks like the following:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Try</span><span class="pln">
    </span><span class="pun">[</span><span class="pln"> tryStatements </span><span class="pun">]</span><span class="pln">
    </span><span class="pun">[</span><span class="pln"> </span><span class="typ">Exit</span><span class="pln"> </span><span class="typ">Try</span><span class="pln"> </span><span class="pun">]</span><span class="pln">
</span><span class="pun">[</span><span class="pln"> </span><span class="typ">Catch</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> exception </span><span class="pun">[</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> type </span><span class="pun">]</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> </span><span class="typ">When</span><span class="pln"> expression </span><span class="pun">]</span><span class="pln">
    </span><span class="pun">[</span><span class="pln"> catchStatements </span><span class="pun">]</span><span class="pln">
    </span><span class="pun">[</span><span class="pln"> </span><span class="typ">Exit</span><span class="pln"> </span><span class="typ">Try</span><span class="pln"> </span><span class="pun">]</span><span class="pln"> </span><span class="pun">]</span><span class="pln">
</span><span class="pun">[</span><span class="pln"> </span><span class="typ">Catch</span><span class="pln"> </span><span class="pun">...</span><span class="pln"> </span><span class="pun">]</span><span class="pln">
</span><span class="pun">[</span><span class="pln"> </span><span class="typ">Finally</span><span class="pln">
    </span><span class="pun">[</span><span class="pln"> finallyStatements </span><span class="pun">]</span><span class="pln"> </span><span class="pun">]</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Try</span></pre>
<p>You can list down multiple catch statements to catch different type of exceptions in case your try block raises more than one exception in different situations.</p>
<h4>Exception Classes in .Net Framework</h4>
<p>In the .Net Framework, exceptions are represented by classes. The exception classes in .Net Framework are mainly directly or indirectly derived from the <b>System.Exception</b> class. Some of the exception classes derived from the System.Exception class are the <b>System.ApplicationException</b> and <b>System.SystemException</b> classes. </p>
<p>The <b>System.ApplicationException</b> class supports exceptions generated by application programs. So the exceptions defined by the programmers should derive from this class.</p>
<p>The <b>System.SystemException</b> class is the base class for all predefined system exception. </p>
<p>The following table provides some of the predefined exception classes derived from the Sytem.SystemException class:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:40%;">Exception Class</th>
<th>Description</th>
</tr>
<tr>
<td>System.IO.IOException</td>
<td>Handles I/O errors.</td>
</tr>
<tr>
<td>System.IndexOutOfRangeException</td>
<td>Handles errors generated when a method refers to an array index out of range.</td>
</tr>
<tr>
<td>System.ArrayTypeMismatchException</td>
<td>Handles errors generated when type is mismatched with the array type.</td>
</tr>
<tr>
<td>System.NullReferenceException</td>
<td>Handles errors generated from deferencing a null object. </td>
</tr>
<tr>
<td>System.DivideByZeroException</td>
<td>Handles errors generated from dividing a dividend with zero.</td>
</tr>
<tr>
<td>System.InvalidCastException</td>
<td>Handles errors generated during typecasting.</td>
</tr>
<tr>
<td>System.OutOfMemoryException</td>
<td>Handles errors generated from insufficient free memory. </td>
</tr>
<tr>
<td>System.StackOverflowException</td>
<td>Handles errors generated from stack overflow.</td>
</tr>
</tbody></table>
<h4>Handling Exceptions</h4>
<p>VB.Net provides a structured solution to the exception handling problems in the form of try and catch blocks. Using these blocks the core program statements are separated from the error-handling statements. </p>
<p>These error handling blocks are implemented using the <b>Try</b>, <b>Catch</b> and <b>Finally</b> keywords. Following is an example of throwing an exception when dividing by zero condition occurs:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> exceptionProg
   </span><span class="typ">Sub</span><span class="pln"> division</span><span class="pun">(</span><span class="typ">ByVal</span><span class="pln"> num1 </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">,</span><span class="pln"> </span><span class="typ">ByVal</span><span class="pln"> num2 </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> result </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln">
      </span><span class="typ">Try</span><span class="pln">
          result </span><span class="pun">=</span><span class="pln"> num1 \ num2
      </span><span class="typ">Catch</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">DivideByZeroException</span><span class="pln">
          </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Exception caught: {0}"</span><span class="pun">,</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Finally</span><span class="pln">
          </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Result: {0}"</span><span class="pun">,</span><span class="pln"> result</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Try</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      division</span><span class="pun">(</span><span class="lit">25</span><span class="pun">,</span><span class="pln"> </span><span class="lit">0</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
  </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Exception</span><span class="pln"> caught</span><span class="pun">:</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">DivideByZeroException</span><span class="pun">:</span><span class="pln"> </span><span class="typ">Attempted</span><span class="pln"> to divide </span><span class="kwd">by</span><span class="pln"> zero</span><span class="pun">.</span><span class="pln"> 
at </span><span class="pun">...</span><span class="pln">
</span><span class="typ">Result</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0</span></pre>
<h4>Creating User-Defined Exceptions</h4>
<p>You can also define your own exception. User-defined exception classes are derived from the <b>ApplicationException</b> class. The following example demonstrates this:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> exceptionProg
   </span><span class="typ">Public</span><span class="pln"> </span><span class="typ">Class</span><span class="pln"> </span><span class="typ">TempIsZeroException</span><span class="pln"> </span><span class="pun">:</span><span class="pln"> </span><span class="typ">Inherits</span><span class="pln"> </span><span class="typ">ApplicationException</span><span class="pln">
      </span><span class="typ">Public</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">New</span><span class="pun">(</span><span class="typ">ByVal</span><span class="pln"> message </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pun">)</span><span class="pln">
          </span><span class="typ">MyBase</span><span class="pun">.</span><span class="typ">New</span><span class="pun">(</span><span class="pln">message</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Class</span><span class="pln">
   </span><span class="typ">Public</span><span class="pln"> </span><span class="typ">Class</span><span class="pln"> </span><span class="typ">Temperature</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> temperature </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Integer</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pln">
      </span><span class="typ">Sub</span><span class="pln"> showTemp</span><span class="pun">()</span><span class="pln">
          </span><span class="typ">If</span><span class="pln"> </span><span class="pun">(</span><span class="pln">temperature </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">)</span><span class="pln"> </span><span class="typ">Then</span><span class="pln">
              </span><span class="typ">Throw</span><span class="pln"> </span><span class="pun">(</span><span class="typ">New</span><span class="pln"> </span><span class="typ">TempIsZeroException</span><span class="pun">(</span><span class="str">"Zero Temperature found"</span><span class="pun">))</span><span class="pln">
          </span><span class="typ">Else</span><span class="pln">
              </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Temperature: {0}"</span><span class="pun">,</span><span class="pln"> temperature</span><span class="pun">)</span><span class="pln">
          </span><span class="typ">End</span><span class="pln"> </span><span class="typ">If</span><span class="pln">
      </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Class</span><span class="pln">
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> temp </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Temperature</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">Temperature</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Try</span><span class="pln">
          temp</span><span class="pun">.</span><span class="pln">showTemp</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Catch</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">TempIsZeroException</span><span class="pln">
          </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"TempIsZeroException: {0}"</span><span class="pun">,</span><span class="pln"> e</span><span class="pun">.</span><span class="typ">Message</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Try</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">TempIsZeroException</span><span class="pun">:</span><span class="pln"> </span><span class="typ">Zero</span><span class="pln"> </span><span class="typ">Temperature</span><span class="pln"> found</span></pre>
<h4>Throwing Objects</h4>
<p>You can throw an object if it is either directly or indirectly derived from the System.Exception class.</p>
<p>You can use a throw statement in the catch block to throw the present object as:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Throw</span><span class="pln"> </span><span class="pun">[</span><span class="pln"> expression </span><span class="pun">]</span></pre>
<p>The following program demonstrates this:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> exceptionProg
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Try</span><span class="pln">
          </span><span class="typ">Throw</span><span class="pln"> </span><span class="typ">New</span><span class="pln"> </span><span class="typ">ApplicationException</span><span class="pun">(</span><span class="str">"A custom exception _
		  is being thrown here..."</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Catch</span><span class="pln"> e </span><span class="typ">As</span><span class="pln"> </span><span class="typ">Exception</span><span class="pln">
          </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="pln">e</span><span class="pun">.</span><span class="typ">Message</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Finally</span><span class="pln">
          </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Now inside the Finally Block"</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Try</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadKey</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">A custom exception </span><span class="kwd">is</span><span class="pln"> being thrown here</span><span class="pun">...</span><span class="pln">
</span><span class="typ">Now</span><span class="pln"> inside the </span><span class="typ">Finally</span><span class="pln"> </span><span class="typ">Block</span></pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="293_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="295_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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