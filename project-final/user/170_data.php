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
<title>JQuery Tutorials | knowledge.com</title>
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
	$sid=170;
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
 
<div class="sc_line sc_line_style_solid margin_top_3em"></div>
<strong style="font-size:20px;">




<p>jQuery is a very powerful tool which provides a variety of DOM traversal methods to help us select elements in a document randomly as well as in sequential method.</p>
<p>Most of the DOM Traversal Methods do not modify the jQuery object and they are used to filter out elements from a document based on given conditions.</p>
<h4>Find Elements by index</h4>
<p>Consider a simple document with the following HTML content −</p>
<pre class="prettyprint notranslate tryit prettyprinted" style="cursor: default;"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The JQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;div&gt;</span><span class="pln">
         </span><span class="tag">&lt;ul&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 1</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 2</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 3</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 4</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 5</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 6</span><span class="tag">&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result −</p>
<ul class="list">
<li><p>Above every list has its own index, and can be located directly by using <b>eq(index)</b> method as below example.</p></li>
<li><p>Every child element starts its index from zero, thus, <i>list item 2</i> would be accessed by using <b>$("li").eq(1)</b> and so on.</p></li>
</ul>
<h5>Example</h5>
<p>Following is a simple example which adds the color to second list item.</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The JQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"li"</span><span class="pun">).</span><span class="pln">eq</span><span class="pun">(</span><span class="lit">2</span><span class="pun">).</span><span class="pln">addClass</span><span class="pun">(</span><span class="str">"selected"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         </span><span class="pun">.</span><span class="pln">selected </span><span class="pun">{</span><span class="pln"> color</span><span class="pun">:</span><span class="pln">red</span><span class="pun">;</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;div&gt;</span><span class="pln">
         </span><span class="tag">&lt;ul&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 1</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 2</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 3</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 4</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 5</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li&gt;</span><span class="pln">list item 6</span><span class="tag">&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result −</p>
<h4>Filtering out Elements</h4>
<p>The <b>filter( selector )</b> method can be used to filter out all elements from the set of matched elements that do not match the specified selector(s). The <i>selector</i> can be written using any selector syntax.</p>
<h5>Example</h5>
<p>Following is a simple example which  applies color to the lists associated with middle class −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The JQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"li"</span><span class="pun">).</span><span class="pln">filter</span><span class="pun">(</span><span class="str">".middle"</span><span class="pun">).</span><span class="pln">addClass</span><span class="pun">(</span><span class="str">"selected"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         </span><span class="pun">.</span><span class="pln">selected </span><span class="pun">{</span><span class="pln"> color</span><span class="pun">:</span><span class="pln">red</span><span class="pun">;</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
	
      </span><span class="tag">&lt;div&gt;</span><span class="pln">
         </span><span class="tag">&lt;ul&gt;</span><span class="pln">
            </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"top"</span><span class="tag">&gt;</span><span class="pln">list item 1</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"top"</span><span class="tag">&gt;</span><span class="pln">list item 2</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"middle"</span><span class="tag">&gt;</span><span class="pln">list item 3</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"middle"</span><span class="tag">&gt;</span><span class="pln">list item 4</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"bottom"</span><span class="tag">&gt;</span><span class="pln">list item 5</span><span class="tag">&lt;/li&gt;</span><span class="pln">
            </span><span class="tag">&lt;li</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"bottom"</span><span class="tag">&gt;</span><span class="pln">list item 6</span><span class="tag">&lt;/li&gt;</span><span class="pln">
         </span><span class="tag">&lt;/ul&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
		
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result −</p>
<h4>Locating descendant Elements</h4>
<p>The <b>find( selector )</b> method can be used to locate all the descendant elements of a particular type of elements. The <i>selector</i> can be written using any selector syntax.</p>
<h5>Example</h5>
<p>Following is an example which selects all the &lt;span&gt; elements available inside different &lt;p&gt; elements −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The JQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"p"</span><span class="pun">).</span><span class="pln">find</span><span class="pun">(</span><span class="str">"span"</span><span class="pun">).</span><span class="pln">addClass</span><span class="pun">(</span><span class="str">"selected"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         </span><span class="pun">.</span><span class="pln">selected </span><span class="pun">{</span><span class="pln"> color</span><span class="pun">:</span><span class="pln">red</span><span class="pun">;</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;p&gt;</span><span class="pln">This is 1st paragraph and </span><span class="tag">&lt;span&gt;</span><span class="pln">THIS IS RED</span><span class="tag">&lt;/span&gt;&lt;/p&gt;</span><span class="pln">
      </span><span class="tag">&lt;p&gt;</span><span class="pln">This is 2nd paragraph and </span><span class="tag">&lt;span&gt;</span><span class="pln">THIS IS ALSO RED</span><span class="tag">&lt;/span&gt;&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<h4>JQuery DOM Filter Methods</h4>
<p>Following table lists down useful methods which you can use to filter out various elements  from a list of DOM elements −</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Method &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><a href="/jquery/traversal-eq.htm">eq( index )</a>
<p>Reduce the set of matched elements to a single element.</p></td>
</tr>
<tr>
<td>2</td>
<td><a href="/jquery/traversal-filter.htm">filter( selector )</a>
<p>Removes all elements from the set of matched elements that do not match the specified selector(s).</p></td>
</tr>
<tr>
<td>3</td>
<td><a href="/jquery/traversal-filter-fn.htm">filter( fn )</a>
<p>Removes all elements from the set of matched elements that do not match the specified function.</p></td>
</tr>
<tr>
<td>4</td>
<td><a href="/jquery/traversal-is.htm">is( selector )</a>
<p>Checks the current selection against an expression and returns true, if at least one element of the selection fits the given selector.</p></td>
</tr>
<tr>
<td>5</td>
<td><a href="/jquery/traversal-map.htm">map( callback )</a>
<p>Translate a set of elements in the jQuery object into another set of values in a jQuery array (which may, or may not contain elements).</p></td>
</tr>
<tr>
<td>6</td>
<td><a href="/jquery/traversal-not.htm">not( selector )</a>
<p>Removes elements matching the specified selector from the set of matched elements.</p></td>
</tr>
<tr>
<td>7</td>
<td><a href="/jquery/traversal-slice.htm">slice( start, [end] )</a>
<p>Selects a subset of the matched elements.</p></td>
</tr>
</tbody></table>
<h4>JQuery DOM Traversing Methods</h4>
<p>Following table lists down other useful methods which you can use to locate various elements in a DOM −</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Methods &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><a href="/jquery/traversal-add.htm">add( selector )</a>
<p>Adds more elements, matched by the given selector, to the set of matched elements.</p></td>
</tr>
<tr>
<td>2</td>
<td><a href="/jquery/traversal-andself.htm">andSelf( )</a>
<p>Add the previous selection to the current selection.</p></td>
</tr>
<tr>
<td>3</td>
<td><a href="/jquery/traversal-children.htm">children( [selector])</a>
<p>Get a set of elements containing all of the unique immediate children of each of the matched set of elements.</p></td>
</tr>
<tr>
<td>4</td>
<td><a href="/jquery/traversal-closest.htm">closest( selector )</a>
<p>Get a set of elements containing the closest parent element that matches the specified selector, the starting element included.</p></td>
</tr>
<tr>
<td>5</td>
<td><a href="/jquery/traversal-contents.htm">contents( )</a>
<p>Find all the child nodes inside the matched elements (including text nodes), or the content document, if the element is an iframe.</p></td>
</tr>
<tr>
<td>6</td>
<td><a href="/jquery/traversal-end.htm">end( )</a>
<p>Revert the most recent 'destructive' operation, changing the set of matched elements to its previous state.</p></td>
</tr>
<tr>
<td>7</td>
<td><a href="/jquery/traversal-find.htm">find( selector )</a>
<p>Searches for descendant elements that match the specified selectors.</p></td>
</tr>
<tr>
<td>8</td>
<td><a href="/jquery/traversal-next.htm">next( [selector] )</a>
<p>Get a set of elements containing the unique next siblings of each of the given set of elements.</p></td>
</tr>
<tr>
<td>9</td>
<td><a href="/jquery/traversal-nextall.htm">nextAll( [selector] )</a>
<p>Find all sibling elements after the current element.</p></td>
</tr>
<tr>
<td>10</td>
<td><a href="/jquery/traversal-offsetparent.htm">offsetParent( )</a>
<p>Returns a jQuery collection with the positioned parent of the first matched element.</p></td>
</tr>
<tr>
<td>11</td>
<td><a href="/jquery/traversal-parent.htm">parent( [selector] )</a>
<p>Get the direct parent of an element. If called on a set of elements, parent returns a set of their unique direct parent elements.</p></td>
</tr>
<tr>
<td>12</td>
<td><a href="/jquery/traversal-parents.htm">parents( [selector] )</a>
<p>Get a set of elements containing the unique ancestors of the matched set of elements (except for the root element).</p></td>
</tr>
<tr>
<td>13</td>
<td><a href="/jquery/traversal-prev.htm">prev( [selector] )</a>
<p>Get a set of elements containing the unique previous siblings of each of the matched set of elements.</p></td>
</tr>
<tr>
<td>14</td>
<td><a href="/jquery/traversal-prevall.htm">prevAll( [selector] )</a>
<p>Find all sibling elements in front of the current element.</p></td>
</tr>
<tr>
<td>15</td>
<td><a href="/jquery/traversal-siblings.htm">siblings( [selector] )</a>
<p>Get a set of elements containing all of the unique siblings of each of the matched set of elements.</p></td>
</tr>
</tbody></table>






</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="169_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="171_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
</div>
 </div>
 
 
</section>
</article>



 

</div>
 
 
<div class="sidebar widget_area bg_tint_light sidebar_style_light">
 
<aside class="widget">
<?php include 'jquery_header.php'; ?>
</aside>
 
  
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