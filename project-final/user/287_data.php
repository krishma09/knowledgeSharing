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
	$sid=287;
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

<p>In VB.Net, you can use strings as array of characters, however, more common practice is to use the String keyword to declare a string variable. The string keyword is an alias for the <b>System.String</b> class. </p>
<h4>Creating a String Object</h4>
<p>You can create string object using one of the following methods:</p>
<ul class="list">
<li><p>By assigning a string literal to a String variable</p></li>
<li><p>By using a String class constructor</p></li>
<li><p>By using the string concatenation operator (+)</p></li>
<li><p>By retrieving a property or calling a method that returns a string</p></li>
<li><p>By calling a formatting method to convert a value or object to its string representation</p></li>
</ul>
<p>The following example demonstrates this:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> strings
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> fname</span><span class="pun">,</span><span class="pln"> lname</span><span class="pun">,</span><span class="pln"> fullname</span><span class="pun">,</span><span class="pln"> greetings </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln">
      fname </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Rowan"</span><span class="pln">
      lname </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Atkinson"</span><span class="pln">
      fullname </span><span class="pun">=</span><span class="pln"> fname </span><span class="pun">+</span><span class="pln"> </span><span class="str">" "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> lname
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Full Name: {0}"</span><span class="pun">,</span><span class="pln"> fullname</span><span class="pun">)</span><span class="pln">

     </span><span class="str">'by using string constructor
      Dim letters As Char() = {"H", "e", "l", "l", "o"}
      greetings = New String(letters)
      Console.WriteLine("Greetings: {0}", greetings)

      '</span><span class="pln">methods returning </span><span class="typ">String</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> sarray</span><span class="pun">()</span><span class="pln"> </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="str">"Hello"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"From"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Tutorials"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Point"</span><span class="pun">}</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> message </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">String</span><span class="pun">.</span><span class="typ">Join</span><span class="pun">(</span><span class="str">" "</span><span class="pun">,</span><span class="pln"> sarray</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"Message: {0}"</span><span class="pun">,</span><span class="pln"> message</span><span class="pun">)</span><span class="pln">

      </span><span class="str">'formatting method to convert a value 
      Dim waiting As DateTime = New DateTime(2012, 12, 12, 17, 58, 1)
      Dim chat As String = String.Format("Message sent at {0:t} on {0:D}", waiting)
      Console.WriteLine("Message: {0}", chat)
      Console.ReadLine()
   End Sub
End Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Full</span><span class="pln"> </span><span class="typ">Name</span><span class="pun">:</span><span class="pln"> </span><span class="typ">Rowan</span><span class="pln"> </span><span class="typ">Atkinson</span><span class="pln">
</span><span class="typ">Greetings</span><span class="pun">:</span><span class="pln"> </span><span class="typ">Hello</span><span class="pln">
</span><span class="typ">Message</span><span class="pun">:</span><span class="pln"> </span><span class="typ">Hello</span><span class="pln"> </span><span class="typ">From</span><span class="pln"> </span><span class="typ">Tutorials</span><span class="pln"> </span><span class="typ">Point</span><span class="pln">
</span><span class="typ">Message</span><span class="pun">:</span><span class="pln"> </span><span class="typ">Message</span><span class="pln"> sent at </span><span class="lit">5</span><span class="pun">:</span><span class="lit">58</span><span class="pln"> PM on </span><span class="typ">Wednesday</span><span class="pun">,</span><span class="pln"> </span><span class="typ">December</span><span class="pln"> </span><span class="lit">12</span><span class="pun">,</span><span class="pln"> </span><span class="lit">2012</span></pre>
<h4>Properties of the String Class</h4>
<p>The String class has the following two properties:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N</th>
<th>Property Name &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td>
<p><b>Chars</b></p>
<p>Gets the <i>Char</i> object at a specified position in the current <i>String</i> object.</p>
</td>
</tr>
<tr>
<td>2</td>
<td>
<p><b>Length</b></p>
<p>Gets the number of characters in the current String object.</p>
</td>
</tr>
</tbody></table>
<h4>Methods of the String Class</h4>
<p>The String class has numerous methods that help you in working with the string objects. The following table provides some of the most commonly used methods:</p>
<table class="table table-bordered">
<tbody><tr>
<th style="width:5%;">S.N</th>
<th>Method Name &amp; Description</th></tr>
<tr>
<td>1</td>
<td>
<p><b>Public Shared Function Compare (
	strA As String, 
	strB As String 
) As Integer
</b></p>
<p>Compares two specified string objects and returns an integer that indicates their relative position in the sort order.</p>
</td>
</tr>
<tr>
<td>2</td>
<td>
<p><b>Public Shared Function Compare (
	strA As String, 
	strB As String, 
	ignoreCase As Boolean 
) As Integer
</b></p>
<p>Compares two specified string objects and returns an integer that indicates their relative position in the sort order. However, it ignores case if the Boolean parameter is true.</p></td>
</tr>
<tr>
<td>3</td>
<td>
<p><b>Public Shared Function Concat ( 
	str0 As String, 
	str1 As String 
) As String
</b></p>
<p>Concatenates two string objects.</p>
</td>
</tr>
<tr>
<td>4</td>
<td>
<p><b>Public Shared Function Concat ( 
	str0 As String, 
	str1 As String, 
	str2 As String 
) As String
</b></p>
<p>Concatenates three string objects.</p>
</td>
</tr>
<tr>
<td>5</td>
<td>
<p><b>Public Shared Function Concat (
	str0 As String, 
	str1 As String, 
	str2 As String, 
	str3 As String 
) As String
</b></p>
<p>Concatenates four string objects.</p>
</td>
</tr>
<tr>
<td>6</td>
<td>
<p><b>Public Function Contains ( 
	value As String 
) As Boolean
</b></p>
<p>Returns a value indicating whether the specified string object occurs within this string.</p>
</td>
</tr>
<tr>
<td>7</td>
<td>
<p><b>Public Shared Function Copy ( 
	str As String 
) As String
</b></p>
<p>Creates a new String object with the same value as the specified string.</p>
</td>
</tr>
<tr>
<td>8</td>
<td>
<p><b>pPublic Sub CopyTo ( 
	sourceIndex As Integer, 
	destination As Char(), 
	destinationIndex As Integer, 
	count As Integer 
)
</b></p>
<p>Copies a specified number of characters from a specified position of the string object to a specified position in an array of Unicode characters.</p>
</td>
</tr>
<tr>
<td>9</td>
<td>
<p><b>Public Function EndsWith ( 
	value As String 
) As Boolean
</b></p>
<p>Determines whether the end of the string object matches the specified string.</p>
</td>
</tr>
<tr>
<td>10</td>
<td>
<p><b>Public Function Equals ( 
	value As String 
) As Boolean
</b></p>
<p>Determines whether the current string object and the specified string object have the same value.</p>
</td>
</tr>
<tr>
<td>11</td>
<td>
<p><b>Public Shared Function Equals ( 
	a As String, 
	b As String 
) As Boolean
</b></p>
<p>Determines whether two specified string objects have the same value.</p>
</td>
</tr>
<tr>
<td>12</td>
<td>
<p><b>Public Shared Function Format ( 
	format As String, 
	arg0 As Object 
) As String
</b></p>
<p>Replaces one or more format items in a specified string with the string representation of a specified object.</p>
</td>
</tr>
<tr>
<td>13</td>
<td>
<p><b>Public Function IndexOf ( 
	value As Char 
) As Integer
</b></p>
<p>Returns the zero-based index of the first occurrence of the specified Unicode character in the current string.</p>
</td>
</tr>
<tr>
<td>14</td>
<td>
<p><b>Public Function IndexOf ( 
	value As String 
) As Integer
</b></p>
<p>Returns the zero-based index of the first occurrence of the specified string in this instance.</p>
</td>
</tr>
<tr>
<td>15</td>
<td>
<p><b>Public Function IndexOf ( 
	value As Char, 
	startIndex As Integer 
) As Integer
</b></p>
<p>Returns the zero-based index of the first occurrence of the specified Unicode character in this string, starting search at the specified character position.</p>
</td>
</tr>
<tr>
<td>16</td>
<td>
<p><b>Public Function IndexOf ( 
	value As String, 
	startIndex As Integer 
) As Integer
</b></p>
<p>Returns the zero-based index of the first occurrence of the specified string in this instance, starting search at the specified character position.</p>
</td>
</tr>
<tr>
<td>17</td>
<td>
<p><b>Public Function IndexOfAny ( 
	anyOf As Char() 
) As Integer
</b></p>
<p>Returns the zero-based index of the first occurrence in this instance of any character in a specified array of Unicode characters.</p>
</td>
</tr>
<tr>
<td>18</td>
<td>
<p><b>Public Function IndexOfAny ( 
	anyOf As Char(), 
	startIndex As Integer 
) As Integer
</b></p>
<p>Returns the zero-based index of the first occurrence in this instance of any character in a specified array of Unicode characters, starting search at the specified character position.</p>
</td>
</tr>
<tr>
<td>19</td>
<td>
<p><b>Public Function Insert ( 
	startIndex As Integer, 
	value As String 
) As String
</b></p>
<p>Returns a new string in which a specified string is inserted at a specified index position in the current string object.</p>
</td>
</tr>
<tr>
<td>20</td>
<td>
<p><b>Public Shared Function IsNullOrEmpty ( 
	value As String 
) As Boolean
</b></p>
<p>Indicates whether the specified string is null or an Empty string.</p>
</td>
</tr>
<tr>
<td>21</td>
<td>
<p><b>Public Shared Function Join ( 
	separator As String, 
	ParamArray value As String() 
) As String
</b></p>
<p>Concatenates all the elements of a string array, using the specified separator between each element.</p>
</td>
</tr>
<tr>
<td>22</td>
<td>
<p><b>Public Shared Function Join ( 
	separator As String, 
	value As String(), 
	startIndex As Integer, 
	count As Integer 
) As String
</b></p>
<p>Concatenates the specified elements of a string array, using the specified separator between each element.</p>
</td>
</tr>
<tr>
<td>23</td>
<td>
<p><b>Public Function LastIndexOf ( 
	value As Char 
) As Integer
</b></p>
<p>Returns the zero-based index position of the last occurrence of the specified Unicode character within the current string object.</p>
</td>
</tr>
<tr>
<td>24</td>
<td>
<p><b>Public Function LastIndexOf ( 
	value As String 
) As Integer
</b></p>
<p>Returns the zero-based index position of the last occurrence of a specified string within the current string object.</p>
</td>
</tr>
<tr>
<td>25</td>
<td>
<p><b>Public Function Remove ( 
	startIndex As Integer 
) As String
</b></p>
<p>Removes all the characters in the current instance, beginning at a specified position and continuing through the last position, and returns the string.</p>
</td>
</tr>
<tr>
<td>26</td>
<td>
<p><b>Public Function Remove ( 
	startIndex As Integer, 
	count As Integer 
) As String
</b></p>
<p>Removes the specified number of characters in the current string beginning at a specified position and returns the string.</p>
</td>
</tr>
<tr>
<td>27</td>
<td>
<p><b>Public Function Replace ( 
	oldChar As Char, 
	newChar As Char 
) As String
</b></p>
<p>Replaces all occurrences of a specified Unicode character in the current string object with the specified Unicode character and returns the new string.</p>
</td>
</tr>
<tr>
<td>28</td>
<td>
<p><b>Public Function Replace ( 
	oldValue As String, 
	newValue As String 
) As String
</b></p>
<p>Replaces all occurrences of a specified string in the current string object with the specified string and returns the new string.</p>
</td>
</tr>
<tr>
<td>29</td>
<td>
<p><b>Public Function Split ( 
	ParamArray separator As Char() 
) As String()
</b></p>
<p>Returns a string array that contains the substrings in the current string object, delimited by elements of a specified Unicode character array.</p>
</td>
</tr>
<tr>
<td>30</td>
<td>
<p><b>Public Function Split ( 
	separator As Char(), 
	count As Integer 
) As String()
</b></p>
<p>Returns a string array that contains the substrings in the current string object, delimited by elements of a specified Unicode character array. The int parameter specifies the maximum number of substrings to return.</p>
</td>
</tr>
<tr>
<td>31</td>
<td>
<p><b>Public Function StartsWith ( 
	value As String 
) As Boolean
</b></p>
<p>Determines whether the beginning of this string instance matches the specified string.</p>
</td>
</tr>
<tr>
<td>32</td>
<td>
<p><b>Public Function ToCharArray As Char()</b></p>
<p>Returns a Unicode character array with all the characters in the current string object.</p>
</td>
</tr>
<tr>
<td>33</td>
<td>
<p><b>Public Function ToCharArray ( 
	startIndex As Integer, 
	length As Integer 
) As Char()
</b></p>
<p>Returns a Unicode character array with all the characters in the current string object, starting from the specified index and up to the specified length.</p>
</td>
</tr>
<tr>
<td>34</td>
<td>
<p><b>Public Function ToLower As String</b></p>
<p>Returns a copy of this string converted to lowercase.</p>
</td>
</tr>
<tr>
<td>35</td>
<td>
<p><b>Public Function ToUpper As String</b></p>
<p>Returns a copy of this string converted to uppercase.</p>
</td>
</tr>
<tr>
<td>36</td>
<td>
<p><b>Public Function Trim As String</b></p>
<p>Removes all leading and trailing white-space characters from the current String object.</p>
</td>
</tr>
</tbody></table>

<p>The above list of methods is not exhaustive, please visit MSDN library for the complete list of methods and String class constructors. </p>
<h4>Examples:</h4>
<p>The following example demonstrates some of the methods mentioned above:</p>
<p><b>Comparing Strings:</b></p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> strings
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> str1</span><span class="pun">,</span><span class="pln"> str2 </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln">
      str1 </span><span class="pun">=</span><span class="pln"> </span><span class="str">"This is test"</span><span class="pln">
      str2 </span><span class="pun">=</span><span class="pln"> </span><span class="str">"This is text"</span><span class="pln">
      </span><span class="typ">If</span><span class="pln"> </span><span class="pun">(</span><span class="typ">String</span><span class="pun">.</span><span class="typ">Compare</span><span class="pun">(</span><span class="pln">str1</span><span class="pun">,</span><span class="pln"> str2</span><span class="pun">)</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">0</span><span class="pun">)</span><span class="pln"> </span><span class="typ">Then</span><span class="pln">
          </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="pln">str1 </span><span class="pun">+</span><span class="pln"> </span><span class="str">" and "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> str2 </span><span class="pun">+</span><span class="pln">
                            </span><span class="str">" are equal."</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Else</span><span class="pln">
          </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="pln">str1 </span><span class="pun">+</span><span class="pln"> </span><span class="str">" and "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> str2 </span><span class="pun">+</span><span class="pln">
                            </span><span class="str">" are not equal."</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">End</span><span class="pln"> </span><span class="typ">If</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">This</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> test </span><span class="kwd">and</span><span class="pln"> </span><span class="typ">This</span><span class="pln"> </span><span class="kwd">is</span><span class="pln"> text are </span><span class="kwd">not</span><span class="pln"> equal</span><span class="pun">.</span></pre>
<p><b>String Contains String:</b></p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> strings
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> str1 </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln">
      str1 </span><span class="pun">=</span><span class="pln"> </span><span class="str">"This is test"</span><span class="pln">
      </span><span class="typ">If</span><span class="pln"> </span><span class="pun">(</span><span class="pln">str1</span><span class="pun">.</span><span class="typ">Contains</span><span class="pun">(</span><span class="str">"test"</span><span class="pun">))</span><span class="pln"> </span><span class="typ">Then</span><span class="pln">
          </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="str">"The sequence 'test' was found."</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">End</span><span class="pln"> </span><span class="typ">If</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">The</span><span class="pln"> sequence </span><span class="str">'test'</span><span class="pln"> was found</span><span class="pun">.</span></pre>
<p><b>Getting a Substring:</b></p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> strings
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> str </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln">
      str </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Last night I dreamt of San Pedro"</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="pln">str</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> substr </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> str</span><span class="pun">.</span><span class="typ">Substring</span><span class="pun">(</span><span class="lit">23</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="pln">substr</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Last</span><span class="pln"> night I dreamt of </span><span class="typ">San</span><span class="pln"> </span><span class="typ">Pedro</span><span class="pln">
</span><span class="typ">San</span><span class="pln"> </span><span class="typ">Pedro</span><span class="pun">.</span></pre>
<p><b>Joining Strings:</b></p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Module</span><span class="pln"> strings
   </span><span class="typ">Sub</span><span class="pln"> </span><span class="typ">Main</span><span class="pun">()</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> strarray </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pun">()</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="pun">{</span><span class="str">"Down the way where the nights are gay"</span><span class="pun">,</span><span class="pln">
                          </span><span class="str">"And the sun shines daily on the mountain top"</span><span class="pun">,</span><span class="pln">
                           </span><span class="str">"I took a trip on a sailing ship"</span><span class="pun">,</span><span class="pln">
                          </span><span class="str">"And when I reached Jamaica"</span><span class="pun">,</span><span class="pln">
                          </span><span class="str">"I made a stop"</span><span class="pun">}</span><span class="pln">
      </span><span class="typ">Dim</span><span class="pln"> str </span><span class="typ">As</span><span class="pln"> </span><span class="typ">String</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">String</span><span class="pun">.</span><span class="typ">Join</span><span class="pun">(</span><span class="pln">vbCrLf</span><span class="pun">,</span><span class="pln"> strarray</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">WriteLine</span><span class="pun">(</span><span class="pln">str</span><span class="pun">)</span><span class="pln">
      </span><span class="typ">Console</span><span class="pun">.</span><span class="typ">ReadLine</span><span class="pun">()</span><span class="pln">
   </span><span class="typ">End</span><span class="pln"> </span><span class="typ">Sub</span><span class="pln">
</span><span class="typ">End</span><span class="pln"> </span><span class="typ">Module</span></pre>
<p>When the above code is compiled and executed, it produces the following result:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="typ">Down</span><span class="pln"> the way </span><span class="kwd">where</span><span class="pln"> the nights are gay
</span><span class="typ">And</span><span class="pln"> the sun shines daily on the mountain top
I took a trip on a sailing ship
</span><span class="typ">And</span><span class="pln"> </span><span class="kwd">when</span><span class="pln"> I reached </span><span class="typ">Jamaica</span><span class="pln">
I made a stop</span></pre>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="286_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="288_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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