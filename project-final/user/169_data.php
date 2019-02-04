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
	$sid=169;
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




<p>Some of the most basic components we can manipulate when it comes to DOM elements are the properties and attributes assigned to those elements.</p>
<p>Most of these attributes are available through JavaScript as DOM node properties. Some of the more common properties are −</p>
<ul class="list">
<li>className</li>
<li>tagName</li>
<li>id</li>
<li>href</li>
<li>title</li>
<li>rel</li>
<li>src</li>
</ul>
<p>Consider the following HTML markup for an image element −</p>
<pre class="prettyprint notranslate prettyprinted"><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"imageid"</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"image.gif"</span><span class="pln"> </span><span class="atn">alt</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Image"</span><span class="pln"> </span><span class="atn">class</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"myclass"</span><span class="pln"> 
   </span><span class="atn">title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"This is an image"</span><span class="tag">/&gt;</span></pre>
   <p>In this element's markup, the tag name is img, and the markup for id, src, alt, class, and title represents the element's attributes, each of which consists of a name and a value.</p>
   <p>jQuery gives us the means to easily manipulate an element's attributes and gives us access to the element so that we can also change its properties.</p>
   <h4>Get Attribute Value</h4>
   <p>The <b>attr()</b> method can be used to either fetch the value of an attribute from the first element in the matched set or set attribute values onto all matched elements.<h4>Get Attribute Value</h4></p>
   <h5>Example</h5>
   <p>Following is a simple example which fetches title attribute of &lt;em&gt; tag and set &lt;div id = "divid"&gt; value with the same value −</p>
   <pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            </span><span class="kwd">var</span><span class="pln"> title </span><span class="pun">=</span><span class="pln"> $</span><span class="pun">(</span><span class="str">"em"</span><span class="pun">).</span><span class="pln">attr</span><span class="pun">(</span><span class="str">"title"</span><span class="pun">);</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"#divid"</span><span class="pun">).</span><span class="pln">text</span><span class="pun">(</span><span class="pln">title</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;div&gt;</span><span class="pln">
         </span><span class="tag">&lt;em</span><span class="pln"> </span><span class="atn">title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Bold and Brave"</span><span class="tag">&gt;</span><span class="pln">This is first paragraph.</span><span class="tag">&lt;/em&gt;</span><span class="pln">
         </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"myid"</span><span class="tag">&gt;</span><span class="pln">This is second paragraph.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
         </span><span class="tag">&lt;div</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"divid"</span><span class="tag">&gt;&lt;/div&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result −</p>
<h4>Set Attribute Value</h4>
<p>The <b>attr(name, value)</b> method can be used to set the named attribute onto all elements in the wrapped set using the passed value.</p>

<h5>Example</h5>
<p>Following is a simple example which set <b>src</b> attribute of an image tag to a correct location −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;base</span><span class="pln"> </span><span class="atn">href</span><span class="pun">=</span><span class="atv">"https://www.tutorialspoint.com"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"#myimg"</span><span class="pun">).</span><span class="pln">attr</span><span class="pun">(</span><span class="str">"src"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"/jquery/images/jquery.jpg"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;div&gt;</span><span class="pln">
         </span><span class="tag">&lt;img</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"myimg"</span><span class="pln"> </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"/images/jquery.jpg"</span><span class="pln"> </span><span class="atn">alt</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Sample image"</span><span class="pln"> </span><span class="tag">/&gt;</span><span class="pln">
      </span><span class="tag">&lt;/div&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre><p>This will produce following result −</p>
<h4>Applying Styles</h4>
<p>The <b>addClass( classes )</b> method can be used to apply defined style sheets onto all the matched elements. You can specify multiple classes separated by space.</p>
<h5>Example</h5>
<p>Following is a simple example which sets <b>class</b> attribute of a para &lt;p&gt; tag −</p>
<pre class="prettyprint notranslate tryit prettyprinted"><span class="tag">&lt;html&gt;</span><span class="pln">

   </span><span class="tag">&lt;head&gt;</span><span class="pln">
      </span><span class="tag">&lt;title&gt;</span><span class="pln">The jQuery Example</span><span class="tag">&lt;/title&gt;</span><span class="pln">
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> 
         </span><span class="atn">src</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;script</span><span class="pln"> </span><span class="atn">type</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"text/javascript"</span><span class="pln"> </span><span class="atn">language</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"javascript"</span><span class="tag">&gt;</span><span class="pln">
         $</span><span class="pun">(</span><span class="pln">document</span><span class="pun">).</span><span class="pln">ready</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"em"</span><span class="pun">).</span><span class="pln">addClass</span><span class="pun">(</span><span class="str">"selected"</span><span class="pun">);</span><span class="pln">
            $</span><span class="pun">(</span><span class="str">"#myid"</span><span class="pun">).</span><span class="pln">addClass</span><span class="pun">(</span><span class="str">"highlight"</span><span class="pun">);</span><span class="pln">
         </span><span class="pun">});</span><span class="pln">
      </span><span class="tag">&lt;/script&gt;</span><span class="pln">
		
      </span><span class="tag">&lt;style&gt;</span><span class="pln">
         </span><span class="pun">.</span><span class="pln">selected </span><span class="pun">{</span><span class="pln"> color</span><span class="pun">:</span><span class="pln">red</span><span class="pun">;</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
         </span><span class="pun">.</span><span class="pln">highlight </span><span class="pun">{</span><span class="pln"> background</span><span class="pun">:</span><span class="pln">yellow</span><span class="pun">;</span><span class="pln"> </span><span class="pun">}</span><span class="pln">
      </span><span class="tag">&lt;/style&gt;</span><span class="pln">	
   </span><span class="tag">&lt;/head&gt;</span><span class="pln">
	
   </span><span class="tag">&lt;body&gt;</span><span class="pln">
      </span><span class="tag">&lt;em</span><span class="pln"> </span><span class="atn">title</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"Bold and Brave"</span><span class="tag">&gt;</span><span class="pln">This is first paragraph.</span><span class="tag">&lt;/em&gt;</span><span class="pln">
      </span><span class="tag">&lt;p</span><span class="pln"> </span><span class="atn">id</span><span class="pln"> </span><span class="pun">=</span><span class="pln"> </span><span class="atv">"myid"</span><span class="tag">&gt;</span><span class="pln">This is second paragraph.</span><span class="tag">&lt;/p&gt;</span><span class="pln">
   </span><span class="tag">&lt;/body&gt;</span><span class="pln">
	
</span><span class="tag">&lt;/html&gt;</span></pre>
<p>This will produce following result −</p>
<h4>Attribute Methods</h4>
<p>Following table lists down few useful methods which you can use to manipulate attributes and properties −</p>
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Methods &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><a href="/jquery/attr-properties.htm">attr( properties )</a>
<p>Set a key/value object as properties to all matched elements.</p></td>
</tr>
<tr>
<td>2</td>
<td><a href="/jquery/attr-key-function.htm">attr( key, fn )</a>
<p>Set a single property to a computed value, on all matched elements.</p></td>
</tr>
<tr>
<td>3</td>
<td><a href="/jquery/attr-remove-attribute.htm">removeAttr( name )</a>
<p>Remove an attribute from each of the matched elements.</p></td>
</tr>
<tr>
<td>4</td>
<td><a href="/jquery/attr-has-class.htm">hasClass( class )</a>
<p>Returns true if the specified class is present on at least one of the set of matched elements.</p></td>
</tr>
<tr>
<td>5</td>
<td><a href="/jquery/attr-remove-class.htm">removeClass( class )</a>
<p>Removes all or the specified class(es) from the set of matched elements.</p></td>
</tr>
<tr>
<td>6</td>
<td><a href="/jquery/attr-toggle-class.htm">toggleClass( class )</a>
<p>Adds the specified class if it is not present, removes the specified class if it is present.</p></td>
</tr>
<tr>
<td>7</td>
<td><a href="/jquery/attr-html.htm">html( )</a>
<p>Get the html contents (innerHTML) of the first matched element.</p></td>
</tr>
<tr>
<td>8</td>
<td><a href="/jquery/attr-html-val.htm">html( val )</a>
<p>Set the html contents of every matched element.</p></td>
</tr>
<tr>
<td>9</td>
<td><a href="/jquery/attr-text.htm">text( )</a>
<p>Get the combined text contents of all matched elements.</p></td>
</tr>
<tr>
<td>10</td>
<td><a href="/jquery/attr-text-val.htm">text( val )</a>
<p>Set the text contents of all matched elements.</p></td>
</tr>
<tr>
<td>11</td>
<td><a href="/jquery/attr-val.htm">val( )</a>
<p>Get the input value of the first matched element.</p></td>
</tr>
<tr>
<td>12</td>
<td><a href="/jquery/attr-val-val.htm">val( val )</a>
<p>Set the value attribute of every matched element if it is called on &lt;input&gt; but if it is called on &lt;select&gt; with the passed &lt;option&gt; value then passed option would be selected, if it is called on check box or radio box then all the matching check box and radiobox would be checked.</p></td>
</tr>
</tbody></table>
<h4>Examples</h4>
<p>Similar to above syntax and examples, following examples would give you understanding on using various attribute methods in different situation −</p>
<section class="toggle">
<label><i class="icon icon-minus"></i><i class="icon icon-plus"></i>Here is a complete list of attribute methods in different situation −</label>
<div class="toggle-content">
<table class="table table-bordered">
<tbody><tr>
<th>S.N.</th>
<th>Selector &amp; Description</th>
</tr>
<tr>
<td>1</td>
<td><b>$("#myID").attr("custom")</b>
<p>This would return value of attribute <i>custom</i> for the first element matching with ID myID.</p></td>
</tr>
<tr>
<td>2</td>
<td><b>$("img").attr("alt", "Sample Image")</b> 
<p>This sets the <b>alt</b> attribute of all the images to a new value "Sample Image".</p></td>
</tr>
<tr>
<td>3</td>
<td><b>$("input").attr({ value: "", title: "Please enter a value" });</b>
<p>Sets the value of all &lt;input&gt; elements to the empty string, as well as sets The jQuery Example to the string <i>Please enter a value</i>.</p></td>
</tr>
<tr>
<td>4</td>
<td><b>$("a[href^=https://]").attr("target","_blank")</b>
<p>Selects all links with an href attribute starting with <i>https://</i> and set its target attribute to <i>_blank</i>.</p></td>
</tr>
<tr>
<td>5</td>
<td><b>$("a").removeAttr("target")</b>
<p>This would remove <i>target</i> attribute of all the links.</p></td>
</tr>
<tr>
<td>6</td>
<td><b>$("form").submit(function() {$(":submit",this).attr("disabled", "disabled");});</b>
<p>This would modify the disabled attribute to the value "disabled" while clicking Submit button.</p></td>
</tr>
<tr>
<td>7</td>
<td><b>$("p:last").hasClass("selected")</b>
<p>This return true if last &lt;p&gt; tag has associated class<i>selected</i>.</p></td>
</tr>
<tr>
<td>8</td>
<td><b>$("p").text()</b>
<p>Returns string that contains the combined text contents of all matched &lt;p&gt; elements.</p></td>
</tr>
<tr>
<td>9</td>
<td><b>$("p").text("&lt;i&gt;Hello World&lt;/i&gt;")</b>
<p>This would set "&lt;I&gt;Hello World&lt;/I&gt;" as text content of the matching  &lt;p&gt; elements.</p></td>
</tr>
<tr>
<td>10</td>
<td><b>$("p").html()</b>
<p>This returns the HTML content of the all matching paragraphs.</p></td>
</tr>
<tr>
<td>11</td>
<td><b>$("div").html("Hello World")</b>
<p>This would set the HTML content of all matching &lt;div&gt; to <i>Hello World</i>.</p></td>
</tr>
<tr>
<td>12</td>
<td><b>$("input:checkbox:checked").val()</b>
<p>Get the first value from a checked checkbox.</p></td>
</tr>
<tr>
<td>13</td>
<td><b>$("input:radio[name=bar]:checked").val()</b>
<p>Get the first value from a set of radio buttons.</p></td>
</tr>
<tr>
<td>14</td>
<td><b>$("button").val("Hello")</b>
<p>Sets the value attribute of every matched element &lt;button&gt;.</p></td>
</tr>
<tr>
<td>15</td>
<td><b>$("input").val("on")</b>
<p>This would check all the radio or check box button whose value is "on".</p></td>
</tr>
<tr>
<td>16</td>
<td><b>$("select").val("Orange")</b>
<p>This would select Orange option in a dropdown box with options Orange, Mango and Banana.</p></td>
</tr>
<tr>
<td>17</td>
<td><b>$("select").val("Orange", "Mango")</b>
<p>This would select Orange and Mango options in a dropdown box with options Orange, Mango and Banana.</p></td>
</tr>
</tbody></table>
</div>
</section>







</strong>
<div class="sc_line sc_line_style_solid margin_top_3em"></div>

<div class="row">
<a href="168_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignleft sc_buttons_st1 sc_buttons_st5">Previous</button></a>

<div style="padding-right:50px">

<a href="170_data.php"> <button class="sc_button sc_button_square sc_button_style_filled sc_button_bg_link sc_button_size_small alignright sc_buttons_st1 sc_buttons_st5">NEXT</button></a>
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