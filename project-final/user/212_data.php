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
<title>C Tutorials | knowledge.com</title>
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
	$sid=212;
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

<p>Arrays allow to define type of variables that can hold several data items of the same kind. Similarly <b>structure</b> is another user defined data type available in C that allows to combine data items of different kinds.</p>
<p>Structures are used to represent a record. Suppose you want to keep track of your books in a library. You might want to track the following attributes about each book −</p>
<ul class="list">
<li>Title</li>
<li>Author</li>
<li>Subject</li>
<li>Book ID</li>
</ul>
<h4>Defining a Structure</h4>
<p>To define a structure, you must use the <b>struct</b> statement. The struct statement defines a new data type, with more than one member. The format of the struct statement is as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">struct</span><span class="pln"> </span><span class="pun">[</span><span class="pln">structure tag</span><span class="pun">]</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   member definition</span><span class="pun">;</span><span class="pln">
   member definition</span><span class="pun">;</span><span class="pln">
   </span><span class="pun">...</span><span class="pln">
   member definition</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln"> </span><span class="pun">[</span><span class="pln">one </span><span class="kwd">or</span><span class="pln"> more structure variables</span><span class="pun">];</span><span class="pln">  </span></pre>
<p>The <b>structure tag</b> is optional and each member definition is a normal variable definition, such as int i; or float f; or any other valid variable definition. At the end of the structure's definition, before the final semicolon, you can specify one or more structure variables but it is optional. Here is the way you would declare the Book structure −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">struct</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln">  title</span><span class="pun">[</span><span class="lit">50</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln">  author</span><span class="pun">[</span><span class="lit">50</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln">  subject</span><span class="pun">[</span><span class="lit">100</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln">   book_id</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln"> book</span><span class="pun">;</span><span class="pln">  </span></pre>
<h4>Accessing Structure Members</h4>
<p>To access any member of a structure, we use the <b>member access operator (.)</b>. The member access operator is coded as a period between the structure variable name and the structure member that we wish to access. You would use the keyword <b>struct</b> to define variables of structure type. The following example shows how to use a structure in a program −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;string.h&gt;</span><span class="pln">
 
</span><span class="kwd">struct</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln">  title</span><span class="pun">[</span><span class="lit">50</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln">  author</span><span class="pun">[</span><span class="lit">50</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln">  subject</span><span class="pun">[</span><span class="lit">100</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln">   book_id</span><span class="pun">;</span><span class="pln">
</span><span class="pun">};</span><span class="pln">
 
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">struct</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="typ">Book1</span><span class="pun">;</span><span class="pln">        </span><span class="com">/* Declare Book1 of type Book */</span><span class="pln">
   </span><span class="kwd">struct</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="typ">Book2</span><span class="pun">;</span><span class="pln">        </span><span class="com">/* Declare Book2 of type Book */</span><span class="pln">
 
   </span><span class="com">/* book 1 specification */</span><span class="pln">
   strcpy</span><span class="pun">(</span><span class="pln"> </span><span class="typ">Book1</span><span class="pun">.</span><span class="pln">title</span><span class="pun">,</span><span class="pln"> </span><span class="str">"C Programming"</span><span class="pun">);</span><span class="pln">
   strcpy</span><span class="pun">(</span><span class="pln"> </span><span class="typ">Book1</span><span class="pun">.</span><span class="pln">author</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Nuha Ali"</span><span class="pun">);</span><span class="pln"> 
   strcpy</span><span class="pun">(</span><span class="pln"> </span><span class="typ">Book1</span><span class="pun">.</span><span class="pln">subject</span><span class="pun">,</span><span class="pln"> </span><span class="str">"C Programming Tutorial"</span><span class="pun">);</span><span class="pln">
   </span><span class="typ">Book1</span><span class="pun">.</span><span class="pln">book_id </span><span class="pun">=</span><span class="pln"> </span><span class="lit">6495407</span><span class="pun">;</span><span class="pln">

   </span><span class="com">/* book 2 specification */</span><span class="pln">
   strcpy</span><span class="pun">(</span><span class="pln"> </span><span class="typ">Book2</span><span class="pun">.</span><span class="pln">title</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Telecom Billing"</span><span class="pun">);</span><span class="pln">
   strcpy</span><span class="pun">(</span><span class="pln"> </span><span class="typ">Book2</span><span class="pun">.</span><span class="pln">author</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Zara Ali"</span><span class="pun">);</span><span class="pln">
   strcpy</span><span class="pun">(</span><span class="pln"> </span><span class="typ">Book2</span><span class="pun">.</span><span class="pln">subject</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Telecom Billing Tutorial"</span><span class="pun">);</span><span class="pln">
   </span><span class="typ">Book2</span><span class="pun">.</span><span class="pln">book_id </span><span class="pun">=</span><span class="pln"> </span><span class="lit">6495700</span><span class="pun">;</span><span class="pln">
 
   </span><span class="com">/* print Book1 info */</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book 1 title : %s\n"</span><span class="pun">,</span><span class="pln"> </span><span class="typ">Book1</span><span class="pun">.</span><span class="pln">title</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book 1 author : %s\n"</span><span class="pun">,</span><span class="pln"> </span><span class="typ">Book1</span><span class="pun">.</span><span class="pln">author</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book 1 subject : %s\n"</span><span class="pun">,</span><span class="pln"> </span><span class="typ">Book1</span><span class="pun">.</span><span class="pln">subject</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book 1 book_id : %d\n"</span><span class="pun">,</span><span class="pln"> </span><span class="typ">Book1</span><span class="pun">.</span><span class="pln">book_id</span><span class="pun">);</span><span class="pln">

   </span><span class="com">/* print Book2 info */</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book 2 title : %s\n"</span><span class="pun">,</span><span class="pln"> </span><span class="typ">Book2</span><span class="pun">.</span><span class="pln">title</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book 2 author : %s\n"</span><span class="pun">,</span><span class="pln"> </span><span class="typ">Book2</span><span class="pun">.</span><span class="pln">author</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book 2 subject : %s\n"</span><span class="pun">,</span><span class="pln"> </span><span class="typ">Book2</span><span class="pun">.</span><span class="pln">subject</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book 2 book_id : %d\n"</span><span class="pun">,</span><span class="pln"> </span><span class="typ">Book2</span><span class="pun">.</span><span class="pln">book_id</span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Book 1 title : C Programming
Book 1 author : Nuha Ali
Book 1 subject : C Programming Tutorial
Book 1 book_id : 6495407
Book 2 title : Telecom Billing
Book 2 author : Zara Ali
Book 2 subject : Telecom Billing Tutorial
Book 2 book_id : 6495700
</pre>
<h4>Structures as Function Arguments</h4>
<p>You can pass a structure as a function argument in the same way as you pass any other variable or pointer.</p>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Book title : C Programming
Book author : Nuha Ali
Book subject : C Programming Tutorial
Book book_id : 6495407
Book title : Telecom Billing
Book author : Zara Ali
Book subject : Telecom Billing Tutorial
Book book_id : 6495700
</pre>
<h4>Pointers to Structures</h4>
<p>You can define pointers to structures in the same way as you define pointer to any other variable −</p>
<pre class="result notranslate">struct Books *struct_pointer;
</pre>
<p>Now, you can store the address of a structure variable in the above defined pointer variable. To find the address of a structure variable, place the '&amp;'; operator before the structure's name as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">struct_pointer </span><span class="pun">=</span><span class="pln"> </span><span class="pun">&amp;</span><span class="typ">Book1</span><span class="pun">;</span></pre>
<p>To access the members of a structure using a pointer to that structure, you must use the → operator as follows −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="pln">struct_pointer</span><span class="pun">-&gt;</span><span class="pln">title</span><span class="pun">;</span></pre>
<p>Let us re-write the above example using structure pointer.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;stdio.h&gt;</span><span class="pln">
</span><span class="com">#include</span><span class="pln"> </span><span class="str">&lt;string.h&gt;</span><span class="pln">
 
</span><span class="kwd">struct</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln">  title</span><span class="pun">[</span><span class="lit">50</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln">  author</span><span class="pun">[</span><span class="lit">50</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">char</span><span class="pln">  subject</span><span class="pun">[</span><span class="lit">100</span><span class="pun">];</span><span class="pln">
   </span><span class="kwd">int</span><span class="pln">   book_id</span><span class="pun">;</span><span class="pln">
</span><span class="pun">};</span><span class="pln">

</span><span class="com">/* function declaration */</span><span class="pln">
</span><span class="kwd">void</span><span class="pln"> printBook</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">struct</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">*</span><span class="pln">book </span><span class="pun">);</span><span class="pln">
</span><span class="kwd">int</span><span class="pln"> main</span><span class="pun">(</span><span class="pln"> </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   </span><span class="kwd">struct</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="typ">Book1</span><span class="pun">;</span><span class="pln">        </span><span class="com">/* Declare Book1 of type Book */</span><span class="pln">
   </span><span class="kwd">struct</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="typ">Book2</span><span class="pun">;</span><span class="pln">        </span><span class="com">/* Declare Book2 of type Book */</span><span class="pln">
 
   </span><span class="com">/* book 1 specification */</span><span class="pln">
   strcpy</span><span class="pun">(</span><span class="pln"> </span><span class="typ">Book1</span><span class="pun">.</span><span class="pln">title</span><span class="pun">,</span><span class="pln"> </span><span class="str">"C Programming"</span><span class="pun">);</span><span class="pln">
   strcpy</span><span class="pun">(</span><span class="pln"> </span><span class="typ">Book1</span><span class="pun">.</span><span class="pln">author</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Nuha Ali"</span><span class="pun">);</span><span class="pln"> 
   strcpy</span><span class="pun">(</span><span class="pln"> </span><span class="typ">Book1</span><span class="pun">.</span><span class="pln">subject</span><span class="pun">,</span><span class="pln"> </span><span class="str">"C Programming Tutorial"</span><span class="pun">);</span><span class="pln">
   </span><span class="typ">Book1</span><span class="pun">.</span><span class="pln">book_id </span><span class="pun">=</span><span class="pln"> </span><span class="lit">6495407</span><span class="pun">;</span><span class="pln">

   </span><span class="com">/* book 2 specification */</span><span class="pln">
   strcpy</span><span class="pun">(</span><span class="pln"> </span><span class="typ">Book2</span><span class="pun">.</span><span class="pln">title</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Telecom Billing"</span><span class="pun">);</span><span class="pln">
   strcpy</span><span class="pun">(</span><span class="pln"> </span><span class="typ">Book2</span><span class="pun">.</span><span class="pln">author</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Zara Ali"</span><span class="pun">);</span><span class="pln">
   strcpy</span><span class="pun">(</span><span class="pln"> </span><span class="typ">Book2</span><span class="pun">.</span><span class="pln">subject</span><span class="pun">,</span><span class="pln"> </span><span class="str">"Telecom Billing Tutorial"</span><span class="pun">);</span><span class="pln">
   </span><span class="typ">Book2</span><span class="pun">.</span><span class="pln">book_id </span><span class="pun">=</span><span class="pln"> </span><span class="lit">6495700</span><span class="pun">;</span><span class="pln">
 
   </span><span class="com">/* print Book1 info by passing address of Book1 */</span><span class="pln">
   printBook</span><span class="pun">(</span><span class="pln"> </span><span class="pun">&amp;</span><span class="typ">Book1</span><span class="pln"> </span><span class="pun">);</span><span class="pln">

   </span><span class="com">/* print Book2 info by passing address of Book2 */</span><span class="pln">
   printBook</span><span class="pun">(</span><span class="pln"> </span><span class="pun">&amp;</span><span class="typ">Book2</span><span class="pln"> </span><span class="pun">);</span><span class="pln">

   </span><span class="kwd">return</span><span class="pln"> </span><span class="lit">0</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln">

</span><span class="kwd">void</span><span class="pln"> printBook</span><span class="pun">(</span><span class="pln"> </span><span class="kwd">struct</span><span class="pln"> </span><span class="typ">Books</span><span class="pln"> </span><span class="pun">*</span><span class="pln">book </span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln">

   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book title : %s\n"</span><span class="pun">,</span><span class="pln"> book</span><span class="pun">-&gt;</span><span class="pln">title</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book author : %s\n"</span><span class="pun">,</span><span class="pln"> book</span><span class="pun">-&gt;</span><span class="pln">author</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book subject : %s\n"</span><span class="pun">,</span><span class="pln"> book</span><span class="pun">-&gt;</span><span class="pln">subject</span><span class="pun">);</span><span class="pln">
   printf</span><span class="pun">(</span><span class="pln"> </span><span class="str">"Book book_id : %d\n"</span><span class="pun">,</span><span class="pln"> book</span><span class="pun">-&gt;</span><span class="pln">book_id</span><span class="pun">);</span><span class="pln">
</span><span class="pun">}</span></pre>
<p>When the above code is compiled and executed, it produces the following result −</p>
<pre class="result notranslate">Book title : C Programming
Book author : Nuha Ali
Book subject : C Programming Tutorial
Book book_id : 6495407
Book title : Telecom Billing
Book author : Zara Ali
Book subject : Telecom Billing Tutorial
Book book_id : 6495700
</pre>
<h4>Bit Fields</h4>
<p>Bit Fields allow the packing of data in a structure. This is especially useful when memory or data storage is at a premium. Typical examples include −</p>
<ul class="list">
<li><p>Packing several objects into a machine word. e.g. 1 bit flags can be compacted.</p></li>
<li><p>Reading external file formats -- non-standard file formats could be read in, e.g., 9-bit integers.</p></li>
</ul>
<p>C allows us to do this in a structure definition by putting :bit length after the variable. For example −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="kwd">struct</span><span class="pln"> packed_struct </span><span class="pun">{</span><span class="pln">
   </span><span class="kwd">unsigned</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> f1</span><span class="pun">:</span><span class="lit">1</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">unsigned</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> f2</span><span class="pun">:</span><span class="lit">1</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">unsigned</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> f3</span><span class="pun">:</span><span class="lit">1</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">unsigned</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> f4</span><span class="pun">:</span><span class="lit">1</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">unsigned</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> type</span><span class="pun">:</span><span class="lit">4</span><span class="pun">;</span><span class="pln">
   </span><span class="kwd">unsigned</span><span class="pln"> </span><span class="kwd">int</span><span class="pln"> my_int</span><span class="pun">:</span><span class="lit">9</span><span class="pun">;</span><span class="pln">
</span><span class="pun">}</span><span class="pln"> pack</span><span class="pun">;</span></pre>
<p>Here, the packed_struct contains 6 members: Four 1 bit flags f1..f3, a 4-bit type and a 9-bit my_int.</p>
<p>C automatically packs the above bit fields as compactly as possible, provided that the maximum length of the field is less than or equal to the integer word length of the computer. If this is not the case, then some compilers may allow memory overlap for the fields while others would store the next field in the next word.</p>




<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="211_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="213_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">

<?php include 'c_header.php'; ?></aside>
 
  
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
</html>'