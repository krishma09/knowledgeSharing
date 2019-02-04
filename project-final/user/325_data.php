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
<title>ASP.NET Tutorials | knowledge.com</title>
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
	$sid=325;
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
<p>Most applications are data-centric, however most of the data repositories are relational databases. Over the years, designers and developers have designed applications based on object models.</p>
<p>The objects are responsible for connecting to the data access components - called the Data Access Layer (DAL). Here we have three points to consider:</p>
<ul class="list">
<li><p>All the data needed in an application are not stored in the same source. The source could be a relation database, some business object, XML file, or a web service.</p></li>
<li><p>Accessing in-memory object is simpler and less expensive than accessing data from a database or XML file.</p></li>
<li><p>The data accessed are not used directly, but needs to be sorted, ordered, grouped, altered etc.</p></li>
</ul>
<p>Hence if there is one tool that makes all kind of data access easy that allows joining data from such disparate data sources and perform standard data processing operations, in few lines of codes, it would be of great help.</p>
<p>LINQ or Language-Integrated Query is such a tool. LINQ is set of extensions to the .Net Framework 3.5 and its managed languages that set the query as an object. It defines a common syntax and a programming model to query different types of data using a common language.</p>
<p>The relational operators like Select, Project, Join, Group, Partition, Set operations etc., are implemented in LINQ and the C# and VB compilers in the .Net framework 3.5, which support the LINQ syntax makes it possible to work with a configured data store without resorting to ADO.NET.</p>
<p>For example, querying the Customers table in the Northwind database, using LINQ query in C#, the code would be:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> data </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">from</span><span class="pln"> c </span><span class="kwd">in</span><span class="pln"> dataContext</span><span class="pun">.</span><span class="typ">Customers</span><span class="pln">
</span><span class="kwd">where</span><span class="pln"> c</span><span class="pun">.</span><span class="typ">Country</span><span class="pln"> </span><span class="pun">==</span><span class="pln"> </span><span class="str">"Spain"</span><span class="pln">
</span><span class="kwd">select</span><span class="pln"> c</span><span class="pun">;</span></pre>
<p>Where:</p>
<ul class="list">
<li><p>The 'from' keyword logically loops through the contents of the collection.</p></li>
<li><p>The expression with the 'where' keyword is evaluated for each object in the collection.</p></li>
<li><p>The 'select' statement selects the evaluated object to add to the list being returned.</p></li>
<li><p>The 'var' keyword is for variable declaration. Since the exact type of the returned object is not known, it indicates that the information will be inferred dynamically.</p></li>
</ul>
<p>LINQ query can be applied to any data-bearing class that inherits from IEnumerable&lt;T&gt;, here T is any data type, for example, List&lt;Book&gt;.</p>
<p>Let us look at an example to understand the concept. The example uses the following class: Books.cs</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">public</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Books</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> ID </span><span class="pun">{</span><span class="kwd">get</span><span class="pun">;</span><span class="pln"> </span><span class="kwd">set</span><span class="pun">;}</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> </span><span class="typ">Title</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="kwd">get</span><span class="pun">;</span><span class="pln"> </span><span class="kwd">set</span><span class="pun">;</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">decimal</span><span class="pln"> </span><span class="typ">Price</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="kwd">get</span><span class="pun">;</span><span class="pln"> </span><span class="kwd">set</span><span class="pun">;</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="typ">DateTime</span><span class="pln"> </span><span class="typ">DateOfRelease</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="kwd">get</span><span class="pun">;</span><span class="pln"> </span><span class="kwd">set</span><span class="pun">;</span><span class="pln"> </span><span class="pun">}</span><span class="pln">

   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">static</span><span class="pln"> </span><span class="typ">List</span><span class="pun">&lt;</span><span class="typ">Books</span><span class="pun">&gt;</span><span class="pln"> </span><span class="typ">GetBooks</span><span class="pun">()</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="typ">List</span><span class="pun">&lt;</span><span class="typ">Books</span><span class="pun">&gt;</span><span class="pln"> list </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">List</span><span class="pun">&lt;</span><span class="typ">Books</span><span class="pun">&gt;();</span><span class="pln">
      list</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> ID </span><span class="pun">=</span><span class="pln"> </span><span class="str">"001"</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">Title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Programming in C#"</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">Price</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">634.76m</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">DateOfRelease</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Convert</span><span class="pun">.</span><span class="typ">ToDateTime</span><span class="pun">(</span><span class="str">"2010-02-05"</span><span class="pun">)</span><span class="pln"> </span><span class="pun">});</span><span class="pln">
     
      list</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> ID </span><span class="pun">=</span><span class="pln"> </span><span class="str">"002"</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">Title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Learn Java in 30 days"</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">Price</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">250.76m</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">DateOfRelease</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Convert</span><span class="pun">.</span><span class="typ">ToDateTime</span><span class="pun">(</span><span class="str">"2011-08-15"</span><span class="pun">)</span><span class="pln"> </span><span class="pun">});</span><span class="pln">
     
      list</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> ID </span><span class="pun">=</span><span class="pln"> </span><span class="str">"003"</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">Title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Programming in ASP.Net 4.0"</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">Price</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">700.00m</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">DateOfRelease</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Convert</span><span class="pun">.</span><span class="typ">ToDateTime</span><span class="pun">(</span><span class="str">"2011-02-05"</span><span class="pun">)</span><span class="pln"> </span><span class="pun">});</span><span class="pln">
     
      list</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> ID </span><span class="pun">=</span><span class="pln"> </span><span class="str">"004"</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">Title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"VB.Net Made Easy"</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">Price</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">500.99m</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">DateOfRelease</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Convert</span><span class="pun">.</span><span class="typ">ToDateTime</span><span class="pun">(</span><span class="str">"2011-12-31"</span><span class="pun">)</span><span class="pln"> </span><span class="pun">});</span><span class="pln">
     
      list</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> ID </span><span class="pun">=</span><span class="pln"> </span><span class="str">"005"</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">Title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Programming in C"</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">Price</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">314.76m</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">DateOfRelease</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Convert</span><span class="pun">.</span><span class="typ">ToDateTime</span><span class="pun">(</span><span class="str">"2010-02-05"</span><span class="pun">)</span><span class="pln"> </span><span class="pun">});</span><span class="pln">
     
      list</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> ID </span><span class="pun">=</span><span class="pln"> </span><span class="str">"006"</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">Title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Programming in C++"</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">Price</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">456.76m</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">DateOfRelease</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Convert</span><span class="pun">.</span><span class="typ">ToDateTime</span><span class="pun">(</span><span class="str">"2010-02-05"</span><span class="pun">)</span><span class="pln"> </span><span class="pun">});</span><span class="pln">
     
      list</span><span class="pun">.</span><span class="typ">Add</span><span class="pun">(</span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> ID </span><span class="pun">=</span><span class="pln"> </span><span class="str">"007"</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">Title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="str">"Datebase Developement"</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">Price</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="lit">1000.76m</span><span class="pun">,</span><span class="pln"> 
         </span><span class="typ">DateOfRelease</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Convert</span><span class="pun">.</span><span class="typ">ToDateTime</span><span class="pun">(</span><span class="str">"2010-02-05"</span><span class="pun">)</span><span class="pln"> </span><span class="pun">});</span><span class="pln">
         
      </span><span class="kwd">return</span><span class="pln"> list</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>The web page using this class has a simple label control, which displays the titles of the books. The Page_Load event creates a list of books and returns the titles by using LINQ query:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">public</span><span class="pln"> </span><span class="kwd">partial</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> simplequery </span><span class="pun">:</span><span class="pln"> </span><span class="typ">System</span><span class="pun">.</span><span class="typ">Web</span><span class="pun">.</span><span class="pln">UI</span><span class="pun">.</span><span class="typ">Page</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_Load</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
   </span><span class="pun">{</span><span class="pln">
      </span><span class="typ">List</span><span class="pun">&lt;</span><span class="typ">Books</span><span class="pun">&gt;</span><span class="pln"> books </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Books</span><span class="pun">.</span><span class="typ">GetBooks</span><span class="pun">();</span><span class="pln">
      </span><span class="kwd">var</span><span class="pln"> booktitles </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">from</span><span class="pln"> b </span><span class="kwd">in</span><span class="pln"> books </span><span class="kwd">select</span><span class="pln"> b</span><span class="pun">.</span><span class="typ">Title</span><span class="pun">;</span><span class="pln">

      </span><span class="kwd">foreach</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">var</span><span class="pln"> title </span><span class="kwd">in</span><span class="pln"> booktitles</span><span class="pun">)</span><span class="pln">
         lblbooks</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+=</span><span class="pln"> </span><span class="typ">String</span><span class="pun">.</span><span class="typ">Format</span><span class="pun">(</span><span class="str">"{0} &lt;br /&gt;"</span><span class="pun">,</span><span class="pln"> title</span><span class="pun">);</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the page is executed, the label displays the results of the query:</p>
<img src="images/linq_result.jpg" alt="LINQ Result">
<p>The above LINQ expression:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> booktitles </span><span class="pun">=</span><span class="pln"> 
</span><span class="kwd">from</span><span class="pln"> b </span><span class="kwd">in</span><span class="pln"> books 
</span><span class="kwd">select</span><span class="pln"> b</span><span class="pun">.</span><span class="typ">Title</span><span class="pun">;</span></pre>
<p>Is equivalent to the following SQL query:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">SELECT </span><span class="typ">Title</span><span class="pln"> </span><span class="kwd">from</span><span class="pln"> </span><span class="typ">Books</span></pre>
<h4>LINQ Operators</h4>
<p>Apart from the operators used so far, there are several other operators, which implement all query clauses. Let us look at some of the operators and clauses.</p>
<h5>The Join clause</h5>
<p>The 'join clause' in SQL is used for joining two data tables and displays a data set containing columns from both the tables. LINQ is also capable of that. To check this, add another class named Saledetails.cs in the previous project:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">public</span><span class="pln"> </span><span class="kwd">class</span><span class="pln"> </span><span class="typ">Salesdetails</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> sales </span><span class="pun">{</span><span class="pln"> </span><span class="kwd">get</span><span class="pun">;</span><span class="pln"> </span><span class="kwd">set</span><span class="pun">;</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> pages </span><span class="pun">{</span><span class="pln"> </span><span class="kwd">get</span><span class="pun">;</span><span class="pln"> </span><span class="kwd">set</span><span class="pun">;</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">string</span><span class="pln"> ID </span><span class="pun">{</span><span class="kwd">get</span><span class="pun">;</span><span class="pln"> </span><span class="kwd">set</span><span class="pun">;}</span><span class="pln">

   </span><span class="kwd">public</span><span class="pln"> </span><span class="kwd">static</span><span class="pln"> </span><span class="typ">IEnumerable</span><span class="pun">&lt;</span><span class="typ">Salesdetails</span><span class="pun">&gt;</span><span class="pln"> getsalesdetails</span><span class="pun">()</span><span class="pln">
   </span><span class="pun">{</span><span class="pln"> 
      </span><span class="typ">Salesdetails</span><span class="pun">[]</span><span class="pln"> sd </span><span class="pun">=</span><span class="pln"> 
      </span><span class="pun">{</span><span class="pln">
         </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Salesdetails</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> ID </span><span class="pun">=</span><span class="pln"> </span><span class="str">"001"</span><span class="pun">,</span><span class="pln"> pages</span><span class="pun">=</span><span class="lit">678</span><span class="pun">,</span><span class="pln"> sales </span><span class="pun">=</span><span class="pln"> </span><span class="lit">110000</span><span class="pun">},</span><span class="pln">
         </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Salesdetails</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> ID </span><span class="pun">=</span><span class="pln"> </span><span class="str">"002"</span><span class="pun">,</span><span class="pln"> pages</span><span class="pun">=</span><span class="lit">789</span><span class="pun">,</span><span class="pln"> sales </span><span class="pun">=</span><span class="pln"> </span><span class="lit">60000</span><span class="pun">},</span><span class="pln">
         </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Salesdetails</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> ID </span><span class="pun">=</span><span class="pln"> </span><span class="str">"003"</span><span class="pun">,</span><span class="pln"> pages</span><span class="pun">=</span><span class="lit">456</span><span class="pun">,</span><span class="pln"> sales </span><span class="pun">=</span><span class="pln"> </span><span class="lit">40000</span><span class="pun">},</span><span class="pln">
         </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Salesdetails</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> ID </span><span class="pun">=</span><span class="pln"> </span><span class="str">"004"</span><span class="pun">,</span><span class="pln"> pages</span><span class="pun">=</span><span class="lit">900</span><span class="pun">,</span><span class="pln"> sales </span><span class="pun">=</span><span class="pln"> </span><span class="lit">80000</span><span class="pun">},</span><span class="pln">
         </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Salesdetails</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> ID </span><span class="pun">=</span><span class="pln"> </span><span class="str">"005"</span><span class="pun">,</span><span class="pln"> pages</span><span class="pun">=</span><span class="lit">456</span><span class="pun">,</span><span class="pln"> sales </span><span class="pun">=</span><span class="pln"> </span><span class="lit">90000</span><span class="pun">},</span><span class="pln">
         </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Salesdetails</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> ID </span><span class="pun">=</span><span class="pln"> </span><span class="str">"006"</span><span class="pun">,</span><span class="pln"> pages</span><span class="pun">=</span><span class="lit">870</span><span class="pun">,</span><span class="pln"> sales </span><span class="pun">=</span><span class="pln"> </span><span class="lit">50000</span><span class="pun">},</span><span class="pln">
         </span><span class="kwd">new</span><span class="pln"> </span><span class="typ">Salesdetails</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> ID </span><span class="pun">=</span><span class="pln"> </span><span class="str">"007"</span><span class="pun">,</span><span class="pln"> pages</span><span class="pun">=</span><span class="lit">675</span><span class="pun">,</span><span class="pln"> sales </span><span class="pun">=</span><span class="pln"> </span><span class="lit">40000</span><span class="pun">},</span><span class="pln">
      </span><span class="pun">};</span><span class="pln">
      
      </span><span class="kwd">return</span><span class="pln"> sd</span><span class="pun">.</span><span class="typ">OfType</span><span class="pun">&lt;</span><span class="typ">Salesdetails</span><span class="pun">&gt;();</span><span class="pln">
   </span><span class="pun">}</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>Add the codes in the Page_Load event handler to query on both the tables using the join clause:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">protected</span><span class="pln"> </span><span class="kwd">void</span><span class="pln"> </span><span class="typ">Page_Load</span><span class="pun">(</span><span class="kwd">object</span><span class="pln"> sender</span><span class="pun">,</span><span class="pln"> </span><span class="typ">EventArgs</span><span class="pln"> e</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
   </span><span class="typ">IEnumerable</span><span class="pun">&lt;</span><span class="typ">Books</span><span class="pun">&gt;</span><span class="pln"> books </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Books</span><span class="pun">.</span><span class="typ">GetBooks</span><span class="pun">();</span><span class="pln">
   </span><span class="typ">IEnumerable</span><span class="pun">&lt;</span><span class="typ">Salesdetails</span><span class="pun">&gt;</span><span class="pln"> sales </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Salesdetails</span><span class="pun">.</span><span class="pln">getsalesdetails</span><span class="pun">();</span><span class="pln">
   
   </span><span class="kwd">var</span><span class="pln"> booktitles </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">from</span><span class="pln"> b </span><span class="kwd">in</span><span class="pln"> books join s </span><span class="kwd">in</span><span class="pln"> sales on b</span><span class="pun">.</span><span class="pln">ID equals s</span><span class="pun">.</span><span class="pln">ID
      </span><span class="kwd">select</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="typ">Name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> b</span><span class="pun">.</span><span class="typ">Title</span><span class="pun">,</span><span class="pln"> </span><span class="typ">Pages</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> s</span><span class="pun">.</span><span class="pln">pages </span><span class="pun">};</span><span class="pln">
      
   </span><span class="kwd">foreach</span><span class="pln"> </span><span class="pun">(</span><span class="kwd">var</span><span class="pln"> title </span><span class="kwd">in</span><span class="pln"> booktitles</span><span class="pun">)</span><span class="pln">
      lblbooks</span><span class="pun">.</span><span class="typ">Text</span><span class="pln"> </span><span class="pun">+=</span><span class="pln"> </span><span class="typ">String</span><span class="pun">.</span><span class="typ">Format</span><span class="pun">(</span><span class="str">"{0} &lt;br /&gt;"</span><span class="pun">,</span><span class="pln"> title</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>The resulting page is as shown:</p>
<img src="images/linq_result2.jpg" alt="LINQ Result2">
<h5>The Where clause</h5>
<p>The 'where clause' allows adding some conditional filters to the query. For example, if you want to see the books, where the number of pages are more than 500, change the Page_Load event handler to:</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> booktitles </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">from</span><span class="pln"> b </span><span class="kwd">in</span><span class="pln"> books join s </span><span class="kwd">in</span><span class="pln"> sales on b</span><span class="pun">.</span><span class="pln">ID equals s</span><span class="pun">.</span><span class="pln">ID
   </span><span class="kwd">where</span><span class="pln"> s</span><span class="pun">.</span><span class="pln">pages </span><span class="pun">&gt;</span><span class="pln"> </span><span class="lit">500</span><span class="pln"> </span><span class="kwd">select</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="typ">Name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> b</span><span class="pun">.</span><span class="typ">Title</span><span class="pun">,</span><span class="pln"> </span><span class="typ">Pages</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> s</span><span class="pun">.</span><span class="pln">pages </span><span class="pun">};</span></pre>
   
   <p>The query returns only those rows, where the number of pages is more than 500:</p>
   <img src="images/linq_result3.jpg" alt="LINQ Result3">
   <h5>Orderby and Orderbydescending Clauses</h5>
   <p>These clauses allow sorting the query results. To query the titles, number of pages and price of the book, sorted by the price, write the following code in the Page_Load event handler:</p>
   <pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> booktitles </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">from</span><span class="pln"> b </span><span class="kwd">in</span><span class="pln"> books join s </span><span class="kwd">in</span><span class="pln"> sales on b</span><span class="pun">.</span><span class="pln">ID equals s</span><span class="pun">.</span><span class="pln">ID
   </span><span class="kwd">orderby</span><span class="pln"> b</span><span class="pun">.</span><span class="typ">Price</span><span class="pln"> </span><span class="kwd">select</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="typ">Name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> b</span><span class="pun">.</span><span class="typ">Title</span><span class="pun">,</span><span class="pln">  </span><span class="typ">Pages</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> s</span><span class="pun">.</span><span class="pln">pages</span><span class="pun">,</span><span class="pln"> </span><span class="typ">Price</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> b</span><span class="pun">.</span><span class="typ">Price</span><span class="pun">};</span></pre>
   <p>The returned tuples are:</p>
   <img src="images/linq_result4.jpg" alt="LINQ Result4">
   <h5>The Let clause</h5>
   <p>The let clause allows defining a variable and assigning it a value calculated from the data values. For example, to calculate the total sale from the above two sales, you need to calculate:</p>
   <pre class="prettyprint notranslate prettyprinted"><span class="typ">TotalSale</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Price</span><span class="pln"> of the </span><span class="typ">Book</span><span class="pln"> </span><span class="pun">*</span><span class="pln"> </span><span class="typ">Sales</span></pre>
   <p>To achieve this, add the following code snippets in the Page_Load event handler:</p>
   <p>The let clause allows defining a variable and assigning it a value calculated from the data values. For example, to calculate the total sale from the above two sales, you need to calculate:</p>
   <pre class="prettyprint notranslate prettyprinted"><span class="kwd">var</span><span class="pln"> booktitles </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">from</span><span class="pln"> b </span><span class="kwd">in</span><span class="pln"> book join s </span><span class="kwd">in</span><span class="pln"> sales on b</span><span class="pun">.</span><span class="pln">ID equals s</span><span class="pun">.</span><span class="pln">ID
   </span><span class="kwd">let</span><span class="pln"> totalprofit </span><span class="pun">=</span><span class="pln"> </span><span class="pun">(</span><span class="pln">b</span><span class="pun">.</span><span class="typ">Price</span><span class="pln"> </span><span class="pun">*</span><span class="pln"> s</span><span class="pun">.</span><span class="pln">sales</span><span class="pun">)</span><span class="pln">
   </span><span class="kwd">select</span><span class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> </span><span class="typ">Name</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> b</span><span class="pun">.</span><span class="typ">Title</span><span class="pun">,</span><span class="pln"> </span><span class="typ">TotalSale</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> totalprofit</span><span class="pun">};</span></pre>
   <p>The resulting query page is as shown:</p>
   <img src="images/linq_result5.jpg" alt="LINQ Result5">



<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="324_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="326_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'aspnet_header.php'; ?></aside>
 
  
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